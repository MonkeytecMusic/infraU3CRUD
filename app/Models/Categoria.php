<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;
    protected $table = 't_personas';
    protected $primaryKey = 'id';
    protected $filable = ['nombre'];
    protected $hidden = ['created_at', 'updated_at'];
}
