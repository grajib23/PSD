<?php
use observer\PostingRecordObserver;
use Illuminate\Events\Dispatcher;
class PostingRecord extends Eloquent{

    protected $table = 'postingrecords';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function users(){

        return $this->hasMany('PersonalInfo');
    }
    public static function boot()
    {
        parent::boot();

        PostingRecord::observe(new PostingRecordObserver(new Dispatcher));
    }

}