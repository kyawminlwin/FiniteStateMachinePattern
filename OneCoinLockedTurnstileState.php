<?php

namespace FiniteStateMachinePattern;

use FiniteStateMachinePattern\Contracts\TurnstileState;

class OneCoinLockedTurnstileState implements TurnstileState
{
    /**
     * @param TurnstileFSM $fsm
     */
    public function pass(TurnstileFSM $fsm)
    {
        $fsm->alarm();
    }

    /**
     * @param TurnstileFSM $fsm
     */
    public function coin(TurnstileFSM $fsm)
    {
        $fsm->setState('unlocked');
        $fsm->unlock();
    }
}
