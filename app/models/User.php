<?php
use observer\UsersObserver;
use Illuminate\Events\Dispatcher;
class User extends Eloquent{

    protected $table = 'users';
    protected $guarded = array('id','created_at','updated_at','deleted_at','created_by');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function personalInfo(){

        return $this->hasOne('PersonalInfo');
    }
    public static function boot()
    {
        parent::boot();

        User::observe(new UsersObserver(new Dispatcher));
    }

}