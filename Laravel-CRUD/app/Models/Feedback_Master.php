<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback_Master extends Model
{
    protected $table = 'feedback__masters';
    protected $primaryKey = 'Feedback_Id';
    public $timestamps = true;

    protected $fillable = [
        'Feedback_Id',
        'User_ref_Id',
        'Resource_ref_Id',
        'Feedback',
    ];
}
