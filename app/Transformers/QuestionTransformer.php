<?php

namespace App\Transformers;


use App\Models\parties;
use League\Fractal\TransformerAbstract;

class QuestionTransformer extends TransformerAbstract
{
    /**
     * List of resources to automatically include
     *
     * @var array
     */
    protected array $defaultIncludes = [
        //
    ];

    /**
     * List of resources possible to include
     *
     * @var array
     */
    protected array $availableIncludes = [
        //
    ];

    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform($question)
    {
        return [
            'id' => $question->id,
            'questioner' => $question->questioner,
            'speaker' => fractal($question->speaker)
                ->transformWith(new SpeakerTransformer()),
            'question' => $question->question,
            'answer_video' => $question->answer_video,
            'answer_second' => $question->answer_second,
            'answer_video_link' => $question->answer_video.'&t='.$question->answer_second,
        ];
    }
}
