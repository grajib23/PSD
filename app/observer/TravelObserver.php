<?php
namespace observer;
use Illuminate\Events\Dispatcher;
class TravelObserver{

    protected $events;
    private  $model;

    public function isValid() {

        return \Validator::make(
            $this->model->toArray(),
            array(
                'govt_id'		 => 'required|max:20',
                'purpose_id'      => 'required|integer'
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