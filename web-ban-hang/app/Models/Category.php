<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'CategoryParentID',
        'CategoryName',
        'CategoryAlias',
        'CategoryPageTitle',
        'CategoryMetaKeyword',
        'CategoryMetaDescription',
        'ViewOrder',
        'IsVisible',
        'IsTypical',
        'TypicalImage'
    ];
    protected $primaryKey = 'CategoryID';
    public function parentCategory()
    {
        return $this->belongsTo(Category::class, 'CategoryParentID');
    }
}
