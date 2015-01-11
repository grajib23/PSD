<?php
use observer\LanguageObserver;
use Illuminate\Events\Dispatcher;
class Language extends Eloquent {

    protected $table = 'languages';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    /*public function divisions(){

        return $this->hasMany('Division');
    }*/
    public static function boot()
    {
        parent::boot();

        Language::observe(new LanguageObserver(new Dispatcher));
    }
}