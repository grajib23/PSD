<?php
/**
 * Created by PhpStorm.
 * User: Rajib
 * Date: 1/8/2015
 * Time: 6:38 AM
 */
use observer\CadreObserver;
use Illuminate\Events\Dispatcher;
class Cadre extends Eloquent{

    protected $table = 'cadres';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function users(){

        return $this->hasMany('PersonalInfo');
    }
    public static function boot()
    {
        parent::boot();

        Cadre::observe(new CadreObserver(new Dispatcher));
    }
}