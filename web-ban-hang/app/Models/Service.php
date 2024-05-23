<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $fillable = [
        "TabID",
        "ServiceAlias",
        "ServiceTitle",
        "ServicePageTitle",
        "ServiceMetaKeyword",
        "ServiceDescription",
        "ServiceImage",
        "Abstract",
        "ServiceContent",
        "IsTypical",
        "IsViewAbout",
        "ViewOrder"
    ];
    protected $primaryKey = 'ServiceID';
}
