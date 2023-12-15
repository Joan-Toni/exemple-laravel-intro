<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Autor extends Model
{
    use HasFactory;

    protected $fillable=['ID_AUT','NOM_AUT'];
    protected $table = 'AUTORS';
    protected $primaryKey = 'ID_AUT';
    public $timestamps = false;
    public $incrementing = false;
}

