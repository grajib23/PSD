<?php
use observer\DivisionObserver;
use Illuminate\Events\Dispatcher;
class Division extends Eloquent{

    protected $table = 'divisions';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function country(){

        return $this->belongs_to('Country');
    }

    public function districts(){

        return $this->hasMany('District');

    }
    public static function boot()
    {
        parent::boot();

        Division::observe(new DivisionObserver(new Dispatcher));
    }

}

?>