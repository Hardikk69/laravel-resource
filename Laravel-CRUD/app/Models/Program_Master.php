<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Program_Master extends Model
{
    protected $table = 'program__masters';
    protected $primaryKey = 'Program_Id';
    public $timestamps = true;

    protected $fillable = [
        'Program_Id',
        'Program_Name',
    ];
}
