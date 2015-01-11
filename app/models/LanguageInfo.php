<?php
/**
 * Created by PhpStorm.
 * User: Rajib
 * Date: 1/10/2015
 * Time: 1:11 AM
 */

use  observer\LanguageInfoObserver;
use Illuminate\Events\Dispatcher;
class LanguageInfo extends Eloquent {

    protected $table = 'languageinfos';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    public function empleyee(){

        return $this->belongsTo('PersonalInfo','govt_id','govt_id');
    }
    public static function boot()
    {
        parent::boot();

        LanguageInfo::observe(new LanguageInfoObserver(new Dispatcher));
    }

}