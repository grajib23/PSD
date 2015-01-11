<?php
use observer\UpzilaObserver;
use Illuminate\Events\Dispatcher;
class Upzilla extends Eloquent{


    protected $table = 'upzilas';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');

    public function district()
    {
        return $this->belongsTo('District');
    }
    public static function boot()
    {
        parent::boot();

        Upzilla::observe(new UpzilaController(new Dispatcher));
    }

}

?>