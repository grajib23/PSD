<?php
use  observer\PrinicipalSubjectObserver;
use Illuminate\Events\Dispatcher;
class PrinicipalSubject extends Eloquent {

    protected $table = 'prinicipalsubjects';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    /*public function divisions(){

        return $this->hasMany('Division');
    }*/
    public static function boot()
    {
        parent::boot();

        PrinicipalSubject::observe(new PrinicipalSubjectObserver(new Dispatcher));
    }
}