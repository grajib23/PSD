<?php
namespace observer;
use Illuminate\Events\Dispatcher;

class DivisionObserver {

    protected $events;
    private  $model;

    public function isValid() {

        return \Validator::make(
            $this->model->toArray(),
            array(
                'name'		 => 'required|max:30|unique:countries',
                'country_id' => 'required|integer'
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
            throw  new \Exception( $validator->messages() );
        }
    }
    public function updating($model)
    {
        $this->model=$model;
        $validator= $this->isValid();
        if ($validator->fails())
        {
            throw  new \Exception( $validator->messages() );
        }

    }

}