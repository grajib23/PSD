<?php
use observer\DiscplinaryActionObserver;
use Illuminate\Events\Dispatcher;
class DiscplinaryAction extends Eloquent{

    protected $table = 'discplinaryactions';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function users(){

        return $this->hasMany('PersonalInfo');
    }
    public static function boot()
    {
        parent::boot();

        DiscplinaryAction::observe(new DiscplinaryActionObserver(new Dispatcher));
    }

}