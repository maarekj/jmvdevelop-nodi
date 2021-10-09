<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

use JmvDevelop\Nodi\NodeEngine;
use JmvDevelop\Nodi\RendererInterface;

/**
 * @template-implements RendererInterface<RawNode>
 */
final class RawRenderer implements RendererInterface
{
    /**
     * @param RawNode  $node
     * @param resource $out
     */
    public function stream(NodeEngine $engine, Node $node, $out): void
    {
        \fwrite($out, $node->value);
    }
}
