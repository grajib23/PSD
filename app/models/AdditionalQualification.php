<?php
use observer\AdditionalQualificationObserver;
use Illuminate\Events\Dispatcher;
class AdditionalQualification extends Eloquent  {

    protected $table = 'additionalqualifications';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    /* public function divisions(){

         return $this->hasMany('Division');
     }*/
    public static function boot()
    {
        parent::boot();

        AdditionalQualification::observe(new AdditionalQualificationObserver(new Dispatcher));
    }
}