<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'price',
        // เพิ่มคอลัมน์ที่ต้องการเก็บข้อมูลในตาราง Order ต่อไปตามต้องการ
    ];

    // กำหนดความสัมพันธ์กับโมเดลอื่น ๆ
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }
}
