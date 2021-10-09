<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

final class LazyNode extends Node
{
    /** @var Node|Node[]|callable():Node */
    public $nodes;

    /** @param Node|Node[]|callable():Node $nodes */
    public function __construct(array|callable | Node $nodes)
    {
        $this->nodes = $nodes;
    }

    public function getServiceKey(): string
    {
        return LazyRenderer::class;
    }
}
