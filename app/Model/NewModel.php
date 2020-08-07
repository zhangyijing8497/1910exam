<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NewModel extends Model
{
    protected $table = 'p_new';
    protected $primaryKey = 'new_id';
    public $timestamps = false;
    protected $guarded = [];
}
