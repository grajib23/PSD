<?php
use  observer\PersonalInfoObserver;
use Illuminate\Events\Dispatcher;
class PersonalInfo extends Eloquent {

    protected $table = 'personalinfo';
    protected $guarded = array('id','created_at','updated_at','deleted_at');
    protected $hidden = array('created_at','updated_at','deleted_at');
    protected $softDelete = true;

    public function user(){

        return $this->belongsTo('User');
    }
    public function homedistrict(){

        return $this->belongsTo('Upzilla');
    }
    public function cadre(){

        return $this->belongsTo('Cadre');
    }
    public function permanetAddress(){

        return $this->belongsTo('Address');
    }
    public function presentAddress(){

        return $this->belongsTo('Address');
    }
    public function currentPosting(){

        return $this->belongsTo('PostingType');
    }
    public function currentRank(){

        return $this->belongsTo('Rank');
    }
    public function spouses(){

        return $this->hasMany('Spouse','govt_id','govt_id');
    }
    public function childrens(){

        return $this->hasMany('Children','govt_id','govt_id');
    }
    public function languages(){

        return $this->hasMany('LanguageInfo','govt_id','govt_id');
    }
    public function powers(){

        return $this->hasMany('PowerInfo','govt_id','govt_id');
    }
    public function educationalQualifications(){

        return $this->hasMany('EduQualification','govt_id','govt_id');
    }
    public function localTrinings(){

        return $this->hasMany('LocalTrining','govt_id','govt_id');
    }
    public function foreignTrinings(){

        return $this->hasMany('ForeignTrining','govt_id','govt_id');
    }
    public function travels(){

        return $this->hasMany('Travel','govt_id','govt_id');
    }
    public function postingAbrods(){

        return $this->hasMany('PostingAbrod','govt_id','govt_id');
    }
    public function publications(){

        return $this->hasMany('Publication','govt_id','govt_id');
    }
    public function honourandawards(){

        return $this->hasMany('HonourAndAward','govt_id','govt_id');
    }
    public function otherservices(){

        return $this->hasMany('OtherService','govt_id','govt_id');
    }
    public function servicehistory(){

        return $this->hasMany('ServiceHistory','govt_id','govt_id');
    }
    public function leaveHistory(){

        return $this->hasMany('LeaveHistory','govt_id','govt_id');
    }
    public function promotions(){

        return $this->hasMany('Promotion','govt_id','govt_id');
    }
    public function discplinaryactions(){

        return $this->hasMany('DiscplinaryAction','govt_id','govt_id');
    }
    public function postingrecords(){

        return $this->hasMany('PostingRecord','govt_id','govt_id');
    }
    public function additionalQualificationHistory(){

        return $this->hasMany('AdditionalQualificationHistory','govt_id','govt_id');
    }

    public static function boot()
    {
        parent::boot();

        PersonalInfo::observe(new PersonalInfoObserver(new Dispatcher));
    }
}