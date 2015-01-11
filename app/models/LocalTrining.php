<?php
use  observer\LocalTriningObserver;
use Illuminate\Events\Dispatcher;
class LocalTrining extends Eloquent {

    protected $table = 'localtrainings';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function empleyee(){

        return $this->belongsTo('PersonalInfo','govt_id','govt_id');
    }
    public static function boot()
    {
        parent::boot();

        LocalTrining::observe(new LocalTriningObserver(new Dispatcher));
    }
}