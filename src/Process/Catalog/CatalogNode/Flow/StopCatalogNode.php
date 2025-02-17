<?php

namespace Feral\Core\Process\Catalog\CatalogNode\Flow;

/**
 * The last node in a process. This node will have the result
 * of "OK".
 */
class StopCatalogNode implements \Feral\Core\Process\Catalog\CatalogNode\CatalogNodeInterface
{
    /**
     * @inheritDoc
     */
    public function getKey(): string
    {
        return 'stop';
    }

    /**
     * @inheritDoc
     */
    public function getNodeCodeKey(): string
    {
        return 'stop';
    }

    /**
     * @inheritDoc
     */
    public function getName(): string
    {
        return 'Stop Processing';
    }

    /**
     * @inheritDoc
     */
    public function getGroup(): string
    {
        return 'Flow';
    }

    /**
     * @inheritDoc
     */
    public function getDescription(): string
    {
        return 'The stop node will end a process.';
    }

    /**
     * @inheritDoc
     */
    public function getConfiguration(): array
    {
        return [];
    }
}
