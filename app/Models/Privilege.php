<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\App;

class Privilege extends Model
{
    use HasFactory;

    protected $casts = [
        'hashtag' => 'array',
    ];

    protected $fillable = [
        'hashtag',
    ];

    protected static function boot()
    {
        parent::boot();

        static::created(function ($priv) {
            $priv->folder_id = $priv->id;
            $priv->save();
        });

        static::deleting(function ($priv) {
            Storage::deleteDirectory('public/privilege/' . $priv->folder_id); // ลบไดเรกทอรีที่เก็บภาพของบทความ
        });
    }

    public function translations()
    {
        return $this->hasMany(ReviewHomeTranslation::class);
    }

    public function translation($locale = null)
    {
        $locale = $locale ?? App::getLocale();
        $result = $this->translations->where('locale', $locale)->first();
        if (!$result) {
            $result = $this->translations->first();
        }
        return $result;
    }

    public function hashtagTranslation($locale = null)
    {
        $locale = $locale ?? App::getLocale();
        $hashtags = $this->hashtag;
        $hashtagsNew = [];
        foreach ($hashtags as $hashtag) {
            $hashtagsNew[] = $hashtag[$locale] ?? $hashtag['en'] ?? $hashtag['th'] ?? '';
        }
        return $hashtagsNew;
    }
}
