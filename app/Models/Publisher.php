<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    use HasFactory;
    protected $table = 'publishers';
    protected $fillable = ['name', 'description'];

    public function products()
    {
        return $this->hasMany('App\Models\Product', 'publisher_id', 'id');
    }

    public static function getCountPublisher()
    {
        return Publisher::count();
    }
}
