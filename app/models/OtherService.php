<?php
use observer\OtherServiceObserver;
use Illuminate\Events\Dispatcher;
class OtherService extends Eloquent{

    protected $table = 'otherservices';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function users(){

        return $this->hasMany('PersonalInfo');
    }
    public static function boot()
    {
        parent::boot();

        OtherService::observe(new OtherServiceObserver(new Dispatcher));
    }

}