<?php
use  observer\NationalSeniorityObserver;
use Illuminate\Events\Dispatcher;
class NationalSeniority extends Eloquent {

    protected $table = 'nationalsenioritys';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    /*public function divisions(){

        return $this->hasMany('Division');
    }*/
    public static function boot()
    {
        parent::boot();

        NationalSeniority::observe(new NationalSeniorityObserver(new Dispatcher));
    }
}