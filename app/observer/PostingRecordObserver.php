<?php
namespace observer;
use Illuminate\Events\Dispatcher;
class PostingRecordObserver{

    protected $events;
    private  $model;

    public function isValid() {

        return \Validator::make(
            $this->model->toArray(),
            array(
                'govt_id'		     => 'required|max:20',
                'post_id'            => 'required|integer',
                'posting_type_id'    => 'required|integer',
                'pay_scale_id'       => 'required|integer',
                'org_id'             => 'required|integer',
                'location'           => 'required'
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