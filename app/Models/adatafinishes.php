<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adatafinishes extends Model
{
    public $fillable = ['id','created_at','updated_at','PersonalID','users_Dep','request','status','type'];
}
