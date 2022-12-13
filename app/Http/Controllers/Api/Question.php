<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Transformers\PartyTransformer;
use App\Transformers\QuestionTransformer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Question extends Controller
{
    public function getQuestions(Request $request)
    {
        $questions = \App\Models\questions::query();
        if ($request->has('partyIds') && $request->partyIds != ''){
            $parties = explode(',',$request->partyIds);
                foreach ($parties as $partyId){
                    $spekers = \App\Models\speakers::query()->where('party_id',$partyId)->get();
                    foreach ($spekers as $speker){
                        $questions->orWhere('speaker_id',$speker->id);
                    }
                }
        }
        if ($request->has('speakerIds') && $request->speakerIds != ''){
            foreach (explode(',',$request->speakerIds) as $speakerId){
                $questions->orWhere('speaker_id',$speakerId);
            }
        }
        if ($request->has('questionIds') && $request->questionIds != ''){
            $questions->where('id',$request->get('questionIds'));
        }
        if ($request->has('query')){
            $questions->where('question','like','%'.$request->get('query').'%');
        }
        $questions = $questions->inRandomOrder()->get();

        return fractal($questions)
            ->transformWith(new QuestionTransformer());
    }
}
