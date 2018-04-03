<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable=['team_name','group_id','continent_name','flag_img_path'];
}
