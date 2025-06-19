<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class ReviewHome extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_id'
    ];

    public function reviewHomeHashtags()
    {
        return $this->hasOne(ReviewHomeHashtag::class);
    }

    public function reviewHomeProject()
    {
        return $this->belongsTo(ReviewHomeProject::class, 'project_id');
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


}
