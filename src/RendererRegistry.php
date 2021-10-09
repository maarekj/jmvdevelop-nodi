<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi;

use JmvDevelop\Nodi\Node\Node;
use Psr\Container\ContainerInterface;

/**
 * @template-implements RendererInterface<Node>
 */
final class RendererRegistry implements RendererInterface
{
    public function __construct(private ContainerInterface $container)
    {
    }

    public function stream(NodeEngine $engine, Node $node, $out): void
    {
        try {
            /** @var RendererInterface<Node> $renderer */
            $renderer = $this->container->get($node->getServiceKey());
        } catch (\Exception $exception) {
            throw new RendererNotFoundException('Renderer '.$node->getServiceKey().' not found.');
        }

        if ($renderer instanceof RendererInterface) {
            $renderer->stream($engine, $node, $out);
        } else {
            throw new \RuntimeException('The renderer '.$node->getServiceKey().' doesn\'t implement RendererInterface');
        }
    }
}
