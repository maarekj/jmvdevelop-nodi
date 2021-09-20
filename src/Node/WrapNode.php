<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

use JmvDevelop\Nodi\NodeEngine;

class WrapNode extends Node
{
    /**
     * @param ?callable(Node):Node $wrapper
     * @param Node                 $node
     */
    public function __construct(private $wrapper, private Node $node)
    {
    }

    public function getWrapper(): ?callable
    {
        return $this->wrapper;
    }

    public function getNode(): Node
    {
        return $this->node;
    }

    public function stream(NodeEngine $engine, $out): void
    {
        $wrapper = $this->wrapper;
        $node = null === $wrapper ? $this->node : $wrapper($this->node);

        $engine->stream($node, $out);
    }
}
