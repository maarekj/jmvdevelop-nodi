<?php

namespace JmvDevelop\Nodi\Node;

use JmvDevelop\Nodi\NodeEngine;

class RawNode extends Node
{
    public function __construct(
        private string $value,
    )
    {
    }

    public function getValue(): string
    {
        return $this->value;
    }

    public function stream(NodeEngine $engine, $out): void
    {
        fprintf($out, $this->value);
    }
}