<?php
use  observer\GroundObserver;
use Illuminate\Events\Dispatcher;
class Ground extends Eloquent {

    protected $table = 'grounds';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    /*public function divisions(){

        return $this->hasMany('Division');
    }*/
    public static function boot()
    {
        parent::boot();

        Ground::observe(new GroundObserver(new Dispatcher));
    }
}