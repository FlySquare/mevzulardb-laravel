<?php

namespace App\Transformers;


use App\Models\parties;
use League\Fractal\TransformerAbstract;

class SpeakerTransformer extends TransformerAbstract
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
    public function transform($speaker)
    {
        return [
            'id' => $speaker->id,
            'name' => $speaker->name,
            'party' => $speaker->party,
            'status' => $speaker->status,
            'placement' => $speaker->placement,
        ];
    }
}
