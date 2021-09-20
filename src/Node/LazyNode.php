<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

use JmvDevelop\Nodi\NodeEngine;

class LazyNode extends Node
{
    /** @var Node|Node[]|callable():Node */
    private $nodes;

    /** @param Node|Node[]|callable():Node $nodes */
    public function __construct(array|callable | Node $nodes)
    {
        $this->nodes = $nodes;
    }

    /** @return Node|Node[]|callable():Node */
    public function getNodes(): array|Node|callable
    {
        return $this->nodes;
    }

    public function stream(NodeEngine $engine, $out): void
    {
        $nodes = $this->nodes;
        if ($nodes instanceof Node) {
            $engine->stream($nodes, $out);
        } elseif (\is_callable($nodes)) {
            $engine->stream($nodes(), $out);
        } else {
            $engine->stream(new FragmentNode(nodes: $nodes), $out);
        }
    }
}
