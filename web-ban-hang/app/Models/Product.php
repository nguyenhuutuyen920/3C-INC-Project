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
        'ProductCode',
        'ProductName',
        'ProductAlias',
        'ProductMetaKeyword',
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
        'RelatedProduct',
    ];

    protected $primaryKey = 'ProductID';



    public function supplier()
    {
        return $this->belongsTo(Supplier::class, 'id','ProductID');
    }
}

