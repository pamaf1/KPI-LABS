<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;

use App\Models\Schedule;

class Disciplines extends Model
{
    use CrudTrait;

    protected $table = 'disciplines';
    protected $fillable = [
        'name',
        'password',
    ];

    public function schedule()
    {
        return $this->hasOne('App\Models\Schedule');
    }
   
}