<?php

use observer\CourseObserver;
use Illuminate\Events\Dispatcher;
class Course extends Eloquent{

    protected $table = 'courses';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    /*public function divisions(){

        return $this->hasMany('Division');
    }*/
    public static function boot()
    {
        parent::boot();

        Course::observe(new CourseObserver(new Dispatcher));
    }
}