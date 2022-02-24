<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable =[
        'name'
    ];

    public function users(){ // meervoud omdat laravel enkel en meervoud herkent.
        return $this->hasMany(User::class); //deze role heetf meerdere users
    }
}
