<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqTag extends Model
{
    use HasFactory;

    public function faqs()
    {
        return  $this->belongsToMany(Faq::class, 'faq_with_tag');
    }

    public function translations()
    {
        return $this->hasMany(FaqTagTranslation::class);
    }

    public function translation($locale = null)
    {
        $locale = $locale ?? app()->getLocale();
        return $this->translations()->where('locale', $locale)->first();
    }
}
