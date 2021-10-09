<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

use JmvDevelop\Nodi\NodeEngine;
use JmvDevelop\Nodi\RendererInterface;

/**
 * @template-implements RendererInterface<Nl2BrNode>
 */
final class Nl2BrRenderer implements RendererInterface
{
    /**
     * @param Nl2BrNode $node
     * @param resource  $out
     */
    public function stream(NodeEngine $engine, Node $node, $out): void
    {
        \fwrite($out, \nl2br($engine->getEscaper()->html($node->value)));
    }
}
