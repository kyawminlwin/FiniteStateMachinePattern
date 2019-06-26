<?php

namespace FiniteStateMachinePattern;

use FiniteStateMachinePattern\Contracts\TurnstileState;

class OneCoinUnLockedTurnstileState implements TurnstileState
{
    /**
     * @param TurnstileFSM $fsm
     */
    public function pass(TurnstileFSM $fsm)
    {
        $fsm->setState('locked');
        $fsm->lock();
    }

    /**
     * @param TurnstileFSM $fsm
     */
    public function coin(TurnstileFSM $fsm)
    {
        $fsm->receive();
    }
}
