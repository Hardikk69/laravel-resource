<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource_Master extends Model
{    protected $table = 'resource__masters';
    protected $primaryKey = 'Resource_Id';
    public $timestamps = true;

    protected $fillable = [
        'Name',
        'Type',
    ];

}
