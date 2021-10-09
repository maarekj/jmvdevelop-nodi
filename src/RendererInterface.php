<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi;

use JmvDevelop\Nodi\Node\Node;

/**
 * @template TNode of Node
 */
interface RendererInterface
{
    /**
     * @param TNode    $node
     * @param resource $out
     */
    public function stream(NodeEngine $engine, Node $node, $out): void;
}
