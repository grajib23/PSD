<?php
use  observer\PostingTypeObserver;
use Illuminate\Events\Dispatcher;
class PostingType extends Eloquent {

    protected $table = 'postingtypes';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function users(){

        return $this->hasMany('PersonalInfo');
    }
    public static function boot()
    {
        parent::boot();

        PostingType::observe(new PostingTypeObserver(new Dispatcher));
    }
}