<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WareHouse extends Model
{

    protected $fillable = [
        'user_id',
        'status',
        'hub_id',
        'warehouse_name',
        'contact_person',
        'contact_phone',
        'support_email',
        'support_contact',
        'address',
        'gst_no',
        'pincode',
        'city',
        'state',
    ];
}
