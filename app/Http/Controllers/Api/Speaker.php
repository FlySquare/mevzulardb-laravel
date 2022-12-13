<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Transformers\SpeakerTransformer;
class Speaker extends Controller
{
    public function getSpeakers(){
       $speakers = \App\Models\speakers::get();
        return fractal($speakers)
            ->transformWith(new SpeakerTransformer());
    }
}
