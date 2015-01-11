<?php
use  observer\ChildrenObserver;
use Illuminate\Events\Dispatcher;
class Children extends Eloquent {

    protected $table = 'childrens';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function father(){

        return $this->belongsTo('PersonalInfo','govt_id','govt_id');
    }
    public static function boot()
    {
        parent::boot();

        Children::observe(new ChildrenObserver(new Dispatcher));
    }
}