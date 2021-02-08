<?php

namespace JmvDevelop\Nodi\Node;

use JmvDevelop\Nodi\NodeEngine;

class FragmentNode extends Node
{
    /** @var list<Node> */
    private array $nodes;

    /** @param Node[] $nodes */
    public function __construct(array $nodes)
    {
        $this->nodes = array_values($nodes);
    }

    /** @return list<Node> */
    public function getNodes(): array
    {
        return $this->nodes;
    }

    public function stream(NodeEngine $engine, $out): void
    {
        foreach ($this->nodes as $node) {
            $engine->stream($node, $out);
        }
    }
}