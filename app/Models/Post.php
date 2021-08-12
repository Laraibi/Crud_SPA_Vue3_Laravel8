<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\like;
use App\Models\User;
class Post extends Model
{
    use HasFactory;
    protected $fillable=['content'];
    public function User(){
        return $this->belongsTo(User::class);
    }
    public function Likes(){
        return $this->hasMany(like::class);
    }
}