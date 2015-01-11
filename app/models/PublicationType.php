
<?php
use observer\PublicationTypeObserver;
use Illuminate\Events\Dispatcher;
class PublicationType extends Eloquent{

    protected $table = 'publicationtypes';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    /* public function divisions(){

         return $this->hasMany('Division');
     }*/
    public static function boot()
    {
        parent::boot();

        PublicationType::observe(new PublicationTypeObserver(new Dispatcher));
    }

}