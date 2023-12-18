<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magiamgia extends Model
{
    public $timestamp = false;
    protected $filleable = [
        'code_name','code','code_tinhnang';
    ];
    protected $primariKey = 'code_id';
    protected $table = 'tbl_magiamgia';
}
