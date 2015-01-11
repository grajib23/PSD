<?php
use  observer\PowerInfoObserver;
use Illuminate\Events\Dispatcher;
class PowerInfo extends Eloquent {

    protected $table = 'powerinfos';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function empleyee(){

        return $this->belongsTo('PersonalInfo','govt_id','govt_id');
    }
    public static function boot()
    {
        parent::boot();

        PowerInfo::observe(new PowerInfoObserver(new Dispatcher));
    }
}