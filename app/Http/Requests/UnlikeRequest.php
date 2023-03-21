<?php

namespace App\Http\Requests;

class UnlikeRequest extends LikeRequest
{
    public function authorize()
    {
        return $this->user()->can('unlike', $this->likeable());
    }
}
