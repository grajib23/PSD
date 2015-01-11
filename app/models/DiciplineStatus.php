<?php
/**
 * Created by PhpStorm.
 * User: Rajib
 * Date: 1/8/2015
 * Time: 7:33 AM
 */

use observer\DiciplineStatusObserver;
use Illuminate\Events\Dispatcher;
class DiciplineStatus extends  Eloquent {

    protected $table = 'diciplinestatus';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    /*public function divisions(){

        return $this->hasMany('Division');
    }*/
    public static function boot()
    {
        parent::boot();

        DiciplineStatus::observe(new DiciplineStatusObserver(new Dispatcher));
    }
}