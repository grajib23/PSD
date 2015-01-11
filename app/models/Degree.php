<?php
/**
 * Created by PhpStorm.
 * User: Rajib
 * Date: 1/8/2015
 * Time: 6:51 AM
 */
use observer\DegreeObserver;
use Illuminate\Events\Dispatcher;
class Degree extends Eloquent {

    protected $table = 'degrees';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    /*public function divisions(){

        return $this->hasMany('Division');
    }*/
    public static function boot()
    {
        parent::boot();

        Degree::observe(new DegreeObserver(new Dispatcher));
    }
}