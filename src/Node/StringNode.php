<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

use JmvDevelop\Nodi\NodeEngine;

class StringNode extends Node
{
    public function __construct(
        private string $value,
    ) {
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function stream(NodeEngine $engine, $out): void
    {
        \fprintf($out, $engine->getEscaper()->html($this->value));
    }
}
