<?php

namespace App;

use App\Traits\MultiTenantModelTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Card extends Model
{
    use SoftDeletes, MultiTenantModelTrait;

    public $table = 'cards';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const C_STATUS_SELECT = [
        '1' => 'New',
        '2' => 'Valid',
        '3' => 'Not valid',
        '4' => 'Used',
        '5' => 'Expired',
    ];

    protected $fillable = [
        'c_zip',
        'c_cvv',
        'c_site',
        'c_city',
        'team_id',
        'c_state',
        'c_email',
        'c_status',
        'c_number',
        'c_address',
        'c_expyear',
        'c_expmonth',
        'c_fullname',
        'c_sameaddr',
        'c_cardname',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class, 'team_id');
    }
}
