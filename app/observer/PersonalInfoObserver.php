<?php
namespace observer;
use Illuminate\Events\Dispatcher;
class PersonalInfoObserver{

    protected $events;
    private  $model;

    public function isValid() {

        return \Validator::make(
            $this->model->toArray(),
            array(
                'govt_id'		 => 'required|max:20',//|unique:personalinfo
                'name_in_bangla' => 'required|max:100',
                'name_in_english'=>'required|max:100',
                //'location'       => 'required',
                'gender'       => 'required|max:10',
                'fname_in_bangla'  => 'required',
                'mname_in_bangla'  => 'required',
                'workfield_option'=> 'required'
            )
        );
    }

    public function __construct(Dispatcher $dispatcher)
    {
        $this->events = $dispatcher;
    }

    public function creating($model)
    {

        $this->model=$model;
        $validator= $this->isValid();
        if ($validator->fails())
        {
            throw  new \Exception($messages = $validator->messages());
        }
    }
    public function updating($model)
    {
        $this->model=$model;
        $validator= $this->isValid();
        if ($validator->fails())
        {
            throw  new \Exception($messages = $validator->messages());
        }

    }
}