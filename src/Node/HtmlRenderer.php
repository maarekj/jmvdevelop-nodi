<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

use JmvDevelop\Nodi\NodeEngine;

/**
 * @extends TagRenderer<HtmlNode>
 */
class HtmlRenderer extends TagRenderer
{
    /**
     * @param AbstractTagNode $node
     * @param resource        $out
     */
    public function stream(NodeEngine $engine, Node $node, $out): void
    {
        \fwrite($out, "<!doctype html>\n");
        parent::stream($engine, $node, $out);
    }
}
