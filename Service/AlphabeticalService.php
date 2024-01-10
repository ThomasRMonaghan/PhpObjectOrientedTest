<?php

class AlphabeticalService ()
{
    public $reorderForwardModel;
    public $searchFirstModel;

    public function __construct(
        $reorderForwardModel,
        $reorderReverseModel,
    ) {
        $this->reorderForwardModel = $reorderForwardModel;
        $this->reorderReverseModel = $reorderReverseModel;
    }

    public function forward()
    {
        $this->reorderForwardModel->index();
    }

    public function reverse()
    {
        $this->reorderReverseModel->index();
    }
}