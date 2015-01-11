<?php
/**
 * Created by PhpStorm.
 * User: Rajib
 * Date: 1/8/2015
 * Time: 7:33 AM
 */
use observer\DiciplineCatatgoryObserever;
use Illuminate\Events\Dispatcher;
class DiciplineCatatgory extends  Eloquent {

    protected $table = 'diciplinecatatgorys';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    /*public function divisions(){

        return $this->hasMany('Division');
    }*/
    public static function boot()
    {
        parent::boot();

        DiciplineCatatgory::observe(new DiciplineCatatgoryObserever(new Dispatcher));
    }
}