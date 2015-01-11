<?php
use  observer\SpouseObserver;
use Illuminate\Events\Dispatcher;
class Spouse extends Eloquent {

    protected $table = 'spouses';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function empleyee(){

        return $this->belongsTo('PersonalInfo','govt_id','govt_id');
    }
    public static function boot()
    {
        parent::boot();

        Spouse::observe(new SpouseObserver(new Dispatcher));
    }
}