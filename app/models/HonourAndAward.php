<?php
use observer\HonourAndAwardObserver;
use Illuminate\Events\Dispatcher;
class HonourAndAward extends Eloquent{

    protected $table = 'honourandawards';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function users(){

        return $this->hasMany('PersonalInfo');
    }
    public static function boot()
    {
        parent::boot();

        HonourAndAward::observe(new HonourAndAwardObserver(new Dispatcher));
    }

}