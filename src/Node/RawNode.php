<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

use JmvDevelop\Nodi\NodeEngine;

class RawNode extends Node
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
        \fwrite($out, $this->value);
    }
}
