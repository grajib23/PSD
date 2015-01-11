<?php
use observer\AdditionalQualificationHistoryObserver;
use Illuminate\Events\Dispatcher;
class AdditionalQualificationHistory extends Eloquent{

    protected $table = 'additionalqualificationhistory';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function users(){

        return $this->hasMany('PersonalInfo');
    }
    public static function boot()
    {
        parent::boot();

        AdditionalQualificationHistory::observe(new AdditionalQualificationHistoryObserver(new Dispatcher));
    }

}