<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_Master extends Model
{
    protected $table = 'user__masters';
    protected $primaryKey = 'User_Id';
    public $timestamps = false;

      protected $fillable = [
        'User_Id',
        'First_Name',
        'Last_Name',
        'Type',
        'Email',
        'Gender',
        'Designation',
        'Program_Ref_Id',
        'Created_By',
        'Deleted_At',
        'Created_At',
        'Password',
    ];
}