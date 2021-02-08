<?php


namespace JmvDevelop\Nodi\Node;

use JmvDevelop\Nodi\NodeEngine;

class HtmlNode extends TagNode
{
    /**
     * @param array<string, string> $attributes
     * @param Node[] $children
     */
    public function __construct(array $attributes = [], array $children = [])
    {
        parent::__construct("html", $attributes, $children, false);
    }

    public function stream(NodeEngine $engine, $out): void
    {
        fprintf($out, "<!doctype html>\n");
        parent::stream($engine, $out);
    }
}