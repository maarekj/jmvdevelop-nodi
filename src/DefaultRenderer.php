<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi;

use JmvDevelop\Nodi\Node\FragmentNode;
use JmvDevelop\Nodi\Node\FragmentRenderer;
use JmvDevelop\Nodi\Node\HtmlNode;
use JmvDevelop\Nodi\Node\HtmlRenderer;
use JmvDevelop\Nodi\Node\LazyNode;
use JmvDevelop\Nodi\Node\LazyRenderer;
use JmvDevelop\Nodi\Node\Nl2BrNode;
use JmvDevelop\Nodi\Node\Nl2BrRenderer;
use JmvDevelop\Nodi\Node\Node;
use JmvDevelop\Nodi\Node\NullNode;
use JmvDevelop\Nodi\Node\NullRenderer;
use JmvDevelop\Nodi\Node\RawNode;
use JmvDevelop\Nodi\Node\RawRenderer;
use JmvDevelop\Nodi\Node\StringNode;
use JmvDevelop\Nodi\Node\StringRenderer;
use JmvDevelop\Nodi\Node\TagNode;
use JmvDevelop\Nodi\Node\TagRenderer;
use JmvDevelop\Nodi\Node\WrapNode;
use JmvDevelop\Nodi\Node\WrapRenderer;

/**
 * @template-implements RendererInterface<FragmentNode|HtmlNode|LazyNode|Nl2BrNode|NullNode|RawNode|StringNode|TagNode|WrapNode>
 */
final class DefaultRenderer implements RendererInterface
{
    /**
     * @var array{
     *             "JmvDevelop\\\\Nodi\\\\Node\\\\FragmentRenderer": \JmvDevelop\Nodi\Node\FragmentRenderer,
     *             "JmvDevelop\\\\Nodi\\\\Node\\\\HtmlRenderer": \JmvDevelop\Nodi\Node\HtmlRenderer,
     *             "JmvDevelop\\\\Nodi\\\\Node\\\\LazyRenderer": \JmvDevelop\Nodi\Node\LazyRenderer,
     *             "JmvDevelop\\\\Nodi\\\\Node\\\\Nl2BrRenderer": \JmvDevelop\Nodi\Node\Nl2BrRenderer,
     *             "JmvDevelop\\\\Nodi\\\\Node\\\\NullRenderer": \JmvDevelop\Nodi\Node\NullRenderer,
     *             "JmvDevelop\\\\Nodi\\\\Node\\\\RawRenderer": \JmvDevelop\Nodi\Node\RawRenderer,
     *             "JmvDevelop\\\\Nodi\\\\Node\\\\StringRenderer": \JmvDevelop\Nodi\Node\StringRenderer,
     *             "JmvDevelop\\\\Nodi\\\\Node\\\\TagRenderer": \JmvDevelop\Nodi\Node\TagRenderer,
     *             "JmvDevelop\\\\Nodi\\\\Node\\\\WrapRenderer": \JmvDevelop\Nodi\Node\WrapRenderer
     *             }
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
     * @param FragmentNode|HtmlNode|LazyNode|Nl2BrNode|NullNode|RawNode|StringNode|TagNode|WrapNode $node
     * @param resource                                                                              $out
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
