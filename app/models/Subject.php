<?php
use observer\SubjectObserver;
use Illuminate\Events\Dispatcher;
class Subject extends Eloquent{

    protected $table = 'subjects';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    /* public function divisions(){

         return $this->hasMany('Division');
     }*/
    public static function boot()
    {
        parent::boot();

        Subject::observe(new SubjectObserver(new Dispatcher));
    }

}