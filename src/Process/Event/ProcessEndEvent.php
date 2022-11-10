<?php

namespace NoLoCo\Core\Process\Event;

use NoLoCo\Core\Process\Context\ContextInterface;
use NoLoCo\Core\Process\Engine\ProcessEngineInterface;
use NoLoCo\Core\Process\ProcessInterface;
use Symfony\Contracts\EventDispatcher\Event;

class ProcessEndEvent extends Event
{

    protected ProcessInterface $process;

    /**
     * @var ContextInterface
     */
    protected ContextInterface $context;

    /**
     * @return ProcessInterface
     */
    public function getProcess(): ProcessInterface
    {
        return $this->process;
    }

    /**
     * @param ProcessInterface $process
     * @return ProcessEndEvent
     */
    public function setProcess(ProcessInterface $process): ProcessEndEvent
    {
        $this->process = $process;
        return $this;
    }

    /**
     * @return ContextInterface
     */
    public function getContext(): ContextInterface
    {
        return $this->context;
    }

    /**
     * @param ContextInterface $context
     * @return ProcessStartEvent
     */
    public function setContext(ContextInterface $context): self
    {
        $this->context = $context;
        return $this;
    }
}
