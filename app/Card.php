<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model
{
    use SoftDeletes;

    public $table = 'cards';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'c_cvv',
        'c_zip',
        'c_city',
        'c_site',
        'c_email',
        'c_state',
        'c_number',
        'c_expyear',
        'c_address',
        'c_expmonth',
        'c_fullname',
        'c_cardname',
        'c_sameaddr',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
