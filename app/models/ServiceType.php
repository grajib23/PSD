<?php
use observer\ServiceTypeObserver;
use Illuminate\Events\Dispatcher;
class ServiceType extends Eloquent{

    protected $table = 'type_of_services';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    /* public function divisions(){

         return $this->hasMany('Division');
     }*/
    public static function boot()
    {
        parent::boot();

        ServiceType::observe(new ServiceTypeObserver(new Dispatcher));
    }

}