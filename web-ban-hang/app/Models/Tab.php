<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tab extends Model
{
    use HasFactory;
    protected $fillable = [
        'TabID',
        'TabName',
        'TabAlias',
        'TabTitle',
        'Description',
        'TabImage',
        'IsVisible',
        'ParentID',
        'AllowDelete',
        'IsDelete',
        'ViewOrder',
        'Lang',
        'AuthorizedRoles',
        'IsAdmin',
        'Module',
        'IsTypical'
    ];
}
