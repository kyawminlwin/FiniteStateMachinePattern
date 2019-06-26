<?php

namespace FiniteStateMachinePattern\Contracts;

use FiniteStateMachinePattern\TurnstileFSM;

interface TurnstileState
{
    public function pass(TurnstileFSM $fsm);

    public function coin(TurnstileFSM $fsm);
}
