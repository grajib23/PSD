<?php
use observer\LeaveHistoryObserver;
use Illuminate\Events\Dispatcher;
class LeaveHistory extends Eloquent{

    protected $table = 'leave_history';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function users(){

        return $this->hasMany('PersonalInfo');
    }
    public static function boot()
    {
        parent::boot();

        LeaveHistory::observe(new LeaveHistoryObserver(new Dispatcher));
    }

}