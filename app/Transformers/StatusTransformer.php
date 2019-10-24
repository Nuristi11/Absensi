<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class StatusTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'status'
    ];

    public function transform(Status $status)
    {
        return [
            'id' => $status->id,
            'name' => $status->name                
        ];
    }

    public function includestatus(Status $status)
    {
        $status = $status->status()->latestFirst()->get();

        return $this->collection($status,new StatusTransformer);

    }
}
