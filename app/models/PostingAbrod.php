<?php
use  observer\PostingAbrodObserver;
use Illuminate\Events\Dispatcher;
class PostingAbrod extends Eloquent {

    protected $table = 'postingabrods';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function empleyee(){

        return $this->belongsTo('PersonalInfo','govt_id','govt_id');
    }
    public static function boot()
    {
        parent::boot();

        PostingAbrod::observe(new PostingAbrodObserver(new Dispatcher));
    }
}