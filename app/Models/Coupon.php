<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $table = 'coupons';
    protected $fillable = ['code', 'type', 'value', 'status', 'times', 'expiration_date'];

    public static function getCountActiveVoucher()
    {
        return Coupon::where('status', 'active')->where('times', '>', 0)->count();
    }

    public static function deactivate($id)
    {
        $coupon = Coupon::find($id);
        if ($coupon && $coupon->status == 'inactive') {
            $coupon->status == 'inactive';
            $coupon->save();
        }
    }
}
