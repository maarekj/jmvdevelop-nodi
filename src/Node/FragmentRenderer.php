<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

use JmvDevelop\Nodi\NodeEngine;
use JmvDevelop\Nodi\RendererInterface;

/**
 * @template-implements RendererInterface<FragmentNode>
 */
final class FragmentRenderer implements RendererInterface
{
    /**
     * @param FragmentNode $node
     * @param resource     $out
     */
    public function stream(NodeEngine $engine, Node $node, $out): void
    {
        foreach ($node->nodes as $node) {
            $engine->stream($node, $out);
        }
    }
}
