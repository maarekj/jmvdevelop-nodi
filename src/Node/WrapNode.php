<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

final class WrapNode extends Node
{
    /**
     * @param ?callable(Node):Node $wrapper
     * @param Node                 $node
     */
    public function __construct(public $wrapper, public Node $node)
    {
    }

    public function getServiceKey(): string
    {
        return WrapRenderer::class;
    }
}
