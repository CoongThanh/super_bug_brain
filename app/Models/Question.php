<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $table = 'questions';
    protected $primaryKey = 'id';
    protected $fillable = ['category', 'question', 'correct_answer','incorrect1','incorrect2','incorrect3','status'];

}
