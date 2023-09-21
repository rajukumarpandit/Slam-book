<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;
    //protected $fillable=['Slambook_id','Question_id','Answer'];
    protected $primaryKey = 'Answer_id';
}
