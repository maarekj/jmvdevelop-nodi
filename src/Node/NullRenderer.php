<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

use JmvDevelop\Nodi\NodeEngine;
use JmvDevelop\Nodi\RendererInterface;

/**
 * @template-implements RendererInterface<NullNode>
 */
final class NullRenderer implements RendererInterface
{
    /**
     * @param NullNode $node
     * @param resource $out
     */
    public function stream(NodeEngine $engine, Node $node, $out): void
    {
    }
}
