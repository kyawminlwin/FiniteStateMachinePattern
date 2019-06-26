<?php

namespace FiniteStateMachinePattern;

use FiniteStateMachinePattern\Contracts\TurnstileState;

abstract class TurnstileFSM
{
    /**
     * @var TurnstileState
     */
    private $state;

    /**
     * TurnstileFSM constructor.
     * @param TurnstileState $state
     */
    public function setState(TurnstileState $state)
    {
        $this->state = $state;
    }

    public function pass()
    {
        $this->state->pass($this);
    }

    public function coin()
    {
        $this->state->coin($this);
    }

    public abstract function alarm();

    public abstract function lock();

    public abstract function unlock();

    public abstract function receive();
}
