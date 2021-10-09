<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

use JmvDevelop\Nodi\NodeEngine;
use JmvDevelop\Nodi\RendererInterface;

/**
 * @template TNode of AbstractTagNode
 * @template-implements  RendererInterface<TNode>
 */
class TagRenderer implements RendererInterface
{
    /**
     * @param AbstractTagNode $node
     * @param resource        $out
     */
    public function stream(NodeEngine $engine, Node $node, $out): void
    {
        \fprintf($out, '<%s ', $node->getTagName());
        foreach ($node->getAttributes() as $key => $value) {
            $escapedValue = $engine->getEscaper()->htmlAttr($value);
            \fprintf($out, '%s="%s" ', $key, $escapedValue);
        }

        if (true === $node->isAutoClose()) {
            \fwrite($out, '/>');

            return;
        }
        \fwrite($out, '>');

        foreach ($node->getChildren() as $child) {
            $engine->stream($child, $out);
        }

        \fprintf($out, '</%s>', $node->getTagName());
    }
}
