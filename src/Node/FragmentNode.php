<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

final class FragmentNode extends Node
{
    /** @var list<Node> */
    public array $nodes;

    /** @param Node[] $nodes */
    public function __construct(array $nodes)
    {
        $this->nodes = \array_values($nodes);
    }

    public function getServiceKey(): string
    {
        return FragmentRenderer::class;
    }
}
