<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'FieldParentID',
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
    public function field()
    {
        return $this->belongsTo(Field::class, 'FieldID');
    }
    public function products()
    {
        return $this->hasMany(Product::class, 'CategoryParentID');
    }
}
