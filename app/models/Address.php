<?php
use observer\AddressObserver;
use \Illuminate\Events\Dispatcher;
class Address extends Eloquent{

    protected $table = 'address';

    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');

    public static function boot()
    {
        parent::boot();

        Address::observe(new AddressObserver(new Dispatcher));
    }

}

?>