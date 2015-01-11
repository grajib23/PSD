<?php
use observer\PublicationObserver;
use Illuminate\Events\Dispatcher;
class Publication extends Eloquent{

    protected $table = 'publications';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function users(){

        return $this->hasMany('PersonalInfo');
    }
    public static function boot()
    {
        parent::boot();

        Publication::observe(new PublicationObserver(new Dispatcher));
    }

}