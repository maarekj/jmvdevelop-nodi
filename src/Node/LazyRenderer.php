<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

use JmvDevelop\Nodi\NodeEngine;
use JmvDevelop\Nodi\RendererInterface;

/**
 * @template-implements RendererInterface<LazyNode>
 */
final class LazyRenderer implements RendererInterface
{
    /**
     * @param LazyNode $node
     * @param resource $out
     */
    public function stream(NodeEngine $engine, Node $node, $out): void
    {
        $nodes = $node->nodes;
        if ($nodes instanceof Node) {
            $engine->stream($nodes, $out);
        } elseif (\is_callable($nodes)) {
            $engine->stream($nodes(), $out);
        } else {
            $engine->stream(new FragmentNode(nodes: $nodes), $out);
        }
    }
}
