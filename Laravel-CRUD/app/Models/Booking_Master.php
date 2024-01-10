<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking_Master extends Model
{
    protected $table = 'booking__masters';
    protected $primaryKey = 'Booking_Id';
    public $timestamps = true;

    protected $fillable = [
        'Booking_Id',
        'User_ref_Id',
        'Resource_ref_Id',
        'Faculty_Name',
        'Starting_Time',
        'Ending_Time',
        'Created_At',
        'Program_type',
        'Description',
        'Status_type',
        'ApprovedBy_Ref_User_Id',
        'Approved_At',
        'On_Reject_Reason',
    ];
}
