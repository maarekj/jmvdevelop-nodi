<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

use JmvDevelop\Nodi\NodeEngine;
use JmvDevelop\Nodi\RendererInterface;

/**
 * @template-implements RendererInterface<StringNode>
 */
final class StringRenderer implements RendererInterface
{
    /**
     * @param StringNode $node
     * @param resource   $out
     */
    public function stream(NodeEngine $engine, Node $node, $out): void
    {
        \fwrite($out, $engine->getEscaper()->html($node->value));
    }
}
