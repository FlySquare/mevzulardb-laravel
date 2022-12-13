<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Transformers\PartyTransformer;
use App\Transformers\SpeakerTransformer;
use Illuminate\Http\Request;

class Party extends Controller
{
    public function getParties(){
        $parties = \App\Models\parties::get();
        return fractal($parties)
            ->transformWith(new PartyTransformer());
    }
}
