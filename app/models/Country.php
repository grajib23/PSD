<?php

use \observer\CountryObserver;
use Illuminate\Events\Dispatcher;
class Country extends Eloquent{

    protected $table = 'countries';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function divisions(){

        return $this->hasMany('Division');
    }
    public static function boot()
    {
        parent::boot();

        Country::observe(new CountryObserver(new Dispatcher));
    }

}

?>