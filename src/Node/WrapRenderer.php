<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

use JmvDevelop\Nodi\NodeEngine;
use JmvDevelop\Nodi\RendererInterface;

/**
 * @template-implements RendererInterface<WrapNode>
 */
final class WrapRenderer implements RendererInterface
{
    /**
     * @param WrapNode $node
     * @param resource $out
     */
    public function stream(NodeEngine $engine, Node $node, $out): void
    {
        $wrapper = $node->wrapper;
        $subnode = null === $wrapper ? $node->node : $wrapper($node->node);

        $engine->stream($subnode, $out);
    }
}
