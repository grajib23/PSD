<?php

namespace observer;
use Illuminate\Events\Dispatcher;
class DistrictObserver {

    protected $events;
    private  $model;
    protected $rules = [
        'common' => [
            'name'        => 'required|max:30|unique:districts',
            'division_id' => 'required|integer'
        ],
        'create' => [

        ],
        'update' => [

        ]
    ];

    public function isValid() {
        return \Validator::make(
            $this->model->toArray(),$this->rules['common']);
    }

    public function __construct(Dispatcher $dispatcher)
    {
        $this->events = $dispatcher;
    }

    public function creating($model)
    {
        $this->model=$model;
        $validator = $this->isValid();
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