<?php

namespace App\Transformers;

use App\Absen;
use League\Fractal\TransformerAbstract;

class AbsenTransformer extends TransformerAbstract
{
    public function transform(Absen $absen)
    {
        return [
            'id' => $absen->id,
            'user_id' => $absen->user_id,
            'status' => $absen->status,
            'keterangan' => $absen->keterangan,
        ];
    }
}
