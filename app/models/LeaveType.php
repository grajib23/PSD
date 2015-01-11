<?php

use  observer\LeaveTypeObserver;
use Illuminate\Events\Dispatcher;
class LeaveType  extends Eloquent {

    protected $table = 'leavetypes';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    /* public function divisions(){

         return $this->hasMany('Division');
     }*/
    public static function boot()
    {
        parent::boot();

        LeaveType::observe(new LeaveTypeObserver(new Dispatcher));
    }
}