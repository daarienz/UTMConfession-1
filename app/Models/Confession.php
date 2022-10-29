<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confession extends Model
{
    use HasFactory;

    public $table = "confessions";
    protected $fillable = ['username'];

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }
}
