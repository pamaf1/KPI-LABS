<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;


class Setting_university extends Model
{
    use CrudTrait;

    protected $table = 'setting_university';
    protected $fillable = [
        'name',
        'short_name',
        'address',
        'phone',
        'site',
        'password',
    ];
}