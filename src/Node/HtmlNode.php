<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

class HtmlNode extends AbstractTagNode
{
    /**
     * @param array<string, string> $attributes
     * @param Node|Node[]           $children
     */
    public function __construct(array $attributes = [], array|Node $children = [])
    {
        parent::__construct('html', $attributes, $children, false);
    }

    public function getServiceKey(): string
    {
        return HtmlRenderer::class;
    }
}
