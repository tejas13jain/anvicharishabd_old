<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    
    use HasFactory;

    protected $table = 'infos'; 

    protected $fillable = ['id','title', 'content','img'.'address','phone','email','insta','fb','twitter'];
}
