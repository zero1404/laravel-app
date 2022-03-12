<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table = 'authors';
    protected $fillable = ['firstname', 'lastname', 'biography'];
    protected $appends = ['fullname'];

    public function products()
    {
        return $this->hasMany('App\Models\Product', 'author_id', 'id');
    }

    public static function getCountAuthor()
    {
        return Author::count();
    }

    public function getFullNameAttribute()
    {
        return "{$this['lastname']} {$this['firstname']}";
    }
}
