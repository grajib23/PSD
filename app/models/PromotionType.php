<?php
use observer\PromotionTypeObserver;
use Illuminate\Events\Dispatcher;
class PromotionType extends Eloquent{

    protected $table = 'promotiontypes';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    /* public function divisions(){

         return $this->hasMany('Division');
     }*/
    public static function boot()
    {
        parent::boot();

        PromotionType::observe(new PromotionTypeObserver(new Dispatcher));
    }

}