<?php
use  observer\TravelObserver;
use Illuminate\Events\Dispatcher;
class Travel extends Eloquent {

    protected $table = 'travelhistories';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function empleyee(){

        return $this->belongsTo('PersonalInfo','govt_id','govt_id');
    }
    public static function boot()
    {
        parent::boot();

        Travel::observe(new TravelObserver(new Dispatcher));
    }
}