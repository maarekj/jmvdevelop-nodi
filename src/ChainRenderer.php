<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi;

use JmvDevelop\Nodi\Node\Node;

/**
 * @template-implements RendererInterface<Node>
 */
final class ChainRenderer implements RendererInterface
{
    /**
     * @param iterable<array-key, RendererInterface> $renderers
     */
    public function __construct(private iterable $renderers)
    {
    }

    public function stream(NodeEngine $engine, Node $node, $out): void
    {
        foreach ($this->renderers as $renderer) {
            try {
                $renderer->stream($engine, $node, $out);

                return;
            } catch (RendererNotFoundException) {
            }
        }

        throw new RendererNotFoundException('Renderer '.$node->getServiceKey().' not found.');
    }
}
