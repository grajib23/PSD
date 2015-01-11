<?php
use observer\ServiceHistoryObserver;
use Illuminate\Events\Dispatcher;
class ServiceHistory extends Eloquent{

    protected $table = 'servicehistory';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function users(){

        return $this->hasMany('PersonalInfo');
    }
    public static function boot()
    {
        parent::boot();

        ServiceHistory::observe(new ServiceHistoryObserver(new Dispatcher));
    }

}