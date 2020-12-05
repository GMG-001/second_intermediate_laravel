<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Lecture extends Model
{
    use HasFactory;
    protected $fillable=['class_name'];

    public function students(){
        return $this->belongsToMany(User::class);
    }
    public function getClasses(){
        return DB::table('lectures')->get();
    }
}
