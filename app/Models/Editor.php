<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editor extends Model
{
    use HasFactory;

    protected $fillable=['ID_EDIT','NOM_EDIT'];
    protected $table = 'EDITORS';
    protected $primaryKey = 'ID_EDIT';
    public $timestamps = false;
    public $incrementing = false;
}
