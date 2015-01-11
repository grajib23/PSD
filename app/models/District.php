<?php
use observer\DistrictObserver;
use \Illuminate\Events\Dispatcher;
class District extends Eloquent{

    protected $table = 'districts';

    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');

    public function division()
    {
        return $this->belongsTo('Division');
    }

    public function upzillas(){

        return $this->hasMany('Upzilla');
    }
    public function users(){

        return $this->hasMany('PersonalInfo');
    }
    public static function boot()
    {
        parent::boot();

        District::observe(new DistrictObserver(new Dispatcher));
    }

}

?>