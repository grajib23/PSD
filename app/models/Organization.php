<?php
use  observer\OrganizationObserver;
use Illuminate\Events\Dispatcher;
class Organization extends Eloquent {

    protected $table = 'organizations';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    /*public function divisions(){

        return $this->hasMany('Division');
    }*/
    public static function boot()
    {
        parent::boot();

        Organization::observe(new OrganizationObserver(new Dispatcher));
    }
}