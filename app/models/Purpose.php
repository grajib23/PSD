
<?php
use observer\PurposeObserver;
use Illuminate\Events\Dispatcher;
class Purpose extends Eloquent{

    protected $table = 'purposes';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    /* public function divisions(){

         return $this->hasMany('Division');
     }*/
    public static function boot()
    {
        parent::boot();

        Purpose::observe(new PurposeObserver(new Dispatcher));
    }

}