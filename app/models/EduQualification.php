<?php
use  observer\EduQualificationObserver;
use Illuminate\Events\Dispatcher;
class EduQualification extends Eloquent {

    protected $table = 'educationalqualifications';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function empleyee(){

        return $this->belongsTo('PersonalInfo','govt_id','govt_id');
    }
    public static function boot()
    {
        parent::boot();

        EduQualification::observe(new EduQualificationObserver(new Dispatcher));
    }
}