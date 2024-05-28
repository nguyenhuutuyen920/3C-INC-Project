<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'SupplierID',
        'CategoryParentID',
        'MaterialID',
        'ProductCode',
        'ProductName',
        'ProductAlias',
        'ProductPageTitle',
        'ProductMetaKeyword',
        'ProductMetaDescription',
        'ProductImage',
        'CurentPrice',
        'OldPrice',
        'IsShowprice',
        'Discount',
        'StoreStatus',
        'Abstract',
        'ProductContent',
        'OtherContent',
        'Promotion',
        'TransportInformation',
        'RelatedNews',
        'RelatedProduct',
        'ViewOder',
        'IsTypical',
        'IsHotProduct',
        'IsPromotion',
        'IsEnjoyProduct',
        'IsBestSeller',
        'IsWeeklyProduct',
        'IsApproved',
        'ApprovedBy',
        'ViewTime',
];
protected $primaryKey = 'ProductID';
public function parentCategory()
{
    return $this->belongsTo(Tab::class, 'TabID');
}
}
