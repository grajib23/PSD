<?php
use observer\PromotionObserver;
use Illuminate\Events\Dispatcher;
class Promotion extends Eloquent{

    protected $table = 'promotions';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    /* public function divisions(){

         return $this->hasMany('Division');
     }*/
    public static function boot()
    {
        parent::boot();

        Promotion::observe(new PromotionObserver(new Dispatcher));
    }

}