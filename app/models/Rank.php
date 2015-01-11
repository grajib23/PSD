<?php
use observer\RankObserver;
use Illuminate\Events\Dispatcher;
class Rank extends Eloquent{

    protected $table = 'ranks';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function users(){

        return $this->hasMany('PersonalInfo');
    }
    public static function boot()
    {
        parent::boot();

        Rank::observe(new RankObserver(new Dispatcher));
    }

}