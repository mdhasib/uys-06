<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
//    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $fillable=['group_name'];
    public $timestamps=false;
//    protected $primaryKey='id';
//    protected $table='groups';

}
