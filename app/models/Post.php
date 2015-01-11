<?php
use  observer\PostObserver;
use Illuminate\Events\Dispatcher;
class Post extends Eloquent {

    protected $table = 'posts';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    /*public function divisions(){

        return $this->hasMany('Division');
    }*/
    public static function boot()
    {
        parent::boot();

        Post::observe(new PostObserver(new Dispatcher));
    }
}