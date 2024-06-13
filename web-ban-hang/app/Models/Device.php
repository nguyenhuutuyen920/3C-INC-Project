<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;
    protected $fillable = [
        'CategoryID',
        'DeviceTitle',
        'DeviceImage',
        'DeviceContent',
        'Technicaldata',
        'RelatedProduct',
        'hienThiTuDongHoa',
        'HienThiVienThongXayLap',
        'HienThiThiNghiemDoLuong'
    ];
    protected $primaryKey = 'DeviceID';


    public function categories()
    {
        return $this->belongsTo(Category::class,'CategoryID', 'CategoryID');
    }
}
