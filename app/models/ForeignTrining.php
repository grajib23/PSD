<?php
use  observer\ForeignTriningObserver;
use Illuminate\Events\Dispatcher;
class ForeignTrining extends Eloquent {

    protected $table = 'foreigntrainings';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function empleyee(){

        return $this->belongsTo('PersonalInfo','govt_id','govt_id');
    }
    public static function boot()
    {
        parent::boot();

        ForeignTrining::observe(new ForeignTriningObserver(new Dispatcher));
    }
}