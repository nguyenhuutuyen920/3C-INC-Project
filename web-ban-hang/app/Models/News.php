<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $fillable = [
        'NewsImage',
        'NewsAlias',
        'NewsMetaKeyword',
        'NewsMetaDescription',
        'NewsTitle',
        'Abstract',
        'NewsContent',
        'NewsSource',
        'ViewTime',
        'RelatedNews',
        'ViewOrder',
        'IsTypical',
        'IsHotNews',
        'IsApproved',
        'ApprovedBy',
    ];
    protected $primaryKey = 'NewsID';
    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'NewsCategoryID');
    }
}
