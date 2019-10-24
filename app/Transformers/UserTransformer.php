<?php

namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    protected $availableIncludes = [
        'absen'  
    ];

    public function transform(User $user)
    {
        return [
            'id' => $user->id,
            'name' => $user->name,
            'username' => $user->username,
            'email' => $user->email,
        ];
    }

    public function includeAbsen(User $user)
    {
        $absen = $user->absen()->latestFirst()->get();

        return $this->collection($absen,new AbsenTransformer);
    }
}
