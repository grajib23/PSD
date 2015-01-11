<?php
use observer\PowerObserver;
use Illuminate\Events\Dispatcher;
class Power extends Eloquent{

    protected $table = 'power_types';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public static function boot()
    {
        parent::boot();

        Power::observe(new PowerObserver(new Dispatcher));
    }

}