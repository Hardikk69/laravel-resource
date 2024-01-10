<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resource_Department_Priority_Transiction_Table extends Model
{
    protected $table = 'resource__department__priority__transiction__table';
    protected $primaryKey = 'Index';
    public $timestamps = true;

    protected $fillable = [
        'Index',
        'Resource_ref_Id',
        'Program_ref_Id',
    ];
}
