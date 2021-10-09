<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi;

use JmvDevelop\Nodi\Node\Node;

class NodeEngine
{
    private Escaper $escaper;

    public function __construct(private RendererInterface $renderer)
    {
        $this->escaper = new Escaper();
    }

    /**
     * @param resource $out
     */
    public function stream(Node $node, $out = \STDOUT): void
    {
        $this->renderer->stream($this, $node, $out);
    }

    public function render(Node $node): string
    {
        $out = \fopen('php://memory', 'w+');
        $this->stream($node, $out);

        \rewind($out);
        $return = \stream_get_contents($out);
        \fclose($out);

        return $return;
    }

    public function getEscaper(): Escaper
    {
        return $this->escaper;
    }
}
