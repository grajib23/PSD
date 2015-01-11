<?php
use  observer\PayScaleObserver;
use Illuminate\Events\Dispatcher;
class PayScale extends Eloquent {

    protected $table = 'payscales';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    /*public function divisions(){

        return $this->hasMany('Division');
    }*/
    public static function boot()
    {
        parent::boot();

        PayScale::observe(new PayScaleObserver(new Dispatcher));
    }
}