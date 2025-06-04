<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqTagTranslation extends Model
{
    use HasFactory;

    protected $fillable = ['faq_tag_id', 'locale', 'name'];

    public function faqTag()
    {
        return $this->belongsTo(FaqTag::class);
    }
}
