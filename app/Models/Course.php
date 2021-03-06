<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'price'];
    protected $guarded = [];

    protected $table = 'courses';

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_reg');
    }
}
