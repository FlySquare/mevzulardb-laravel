<?php

namespace App\Transformers;


use App\Models\parties;
use League\Fractal\TransformerAbstract;

class PartyTransformer extends TransformerAbstract
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
    public function transform($party)
    {
        return [
            'id' => $party->id,
            'name' => $party->name,
            'short_name' => $party->short_name,
            'president' => $party->president
        ];
    }
}
