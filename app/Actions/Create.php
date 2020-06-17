<?php


namespace App\Actions;


use App\Misc\Services\AbstractAction;

class Create extends AbstractAction
{

    /**
     * @inheritDoc
     */
    function process(array $payload): array
    {
        \Log::info(__CLASS__ . ' called successfully');
        // TODO: Implement process() method.

        return [];
    }
}
