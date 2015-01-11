<?php
use  observer\PositionObserver;
use Illuminate\Events\Dispatcher;
class Position extends Eloquent {

    protected $table = 'positions';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    /*public function divisions(){

        return $this->hasMany('Division');
    }*/
    public static function boot()
    {
        parent::boot();

        Position::observe(new PositionObserver(new Dispatcher));
    }
}