<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi;

use JmvDevelop\Nodi\Node\FragmentRenderer;
use JmvDevelop\Nodi\Node\HtmlRenderer;
use JmvDevelop\Nodi\Node\LazyRenderer;
use JmvDevelop\Nodi\Node\Nl2BrRenderer;
use JmvDevelop\Nodi\Node\Node;
use JmvDevelop\Nodi\Node\NullRenderer;
use JmvDevelop\Nodi\Node\RawRenderer;
use JmvDevelop\Nodi\Node\StringRenderer;
use JmvDevelop\Nodi\Node\TagRenderer;
use JmvDevelop\Nodi\Node\WrapRenderer;

/**
 * @template-implements RendererInterface<Node>
 */
final class DefaultRenderer implements RendererInterface
{
    /**
     * @var array<string, RendererInterface>
     */
    private array $renderers;

    public function __construct()
    {
        $this->renderers = [
            FragmentRenderer::class => new FragmentRenderer(),
            HtmlRenderer::class => new HtmlRenderer(),
            LazyRenderer::class => new LazyRenderer(),
            Nl2BrRenderer::class => new Nl2BrRenderer(),
            NullRenderer::class => new NullRenderer(),
            RawRenderer::class => new RawRenderer(),
            StringRenderer::class => new StringRenderer(),
            TagRenderer::class => new TagRenderer(),
            WrapRenderer::class => new WrapRenderer(),
        ];
    }

    /**
     * @param resource $out
     *
     * @throws RendererNotFoundException
     */
    public function stream(NodeEngine $engine, Node $node, $out): void
    {
        $renderer = $this->renderers[$node->getServiceKey()] ?? null;
        if (null === $renderer) {
            throw new RendererNotFoundException('Renderer '.$node->getServiceKey().' not found.');
        }

        /** @psalm-suppress PossiblyInvalidArgument */
        $renderer->stream($engine, $node, $out);
    }
}
