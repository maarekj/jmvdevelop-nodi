<?php

namespace JmvDevelop\Nodi\Node;

use JmvDevelop\Nodi\NodeEngine;

class NullNode extends Node
{
    public function __construct()
    {
    }

    public function stream(NodeEngine $engine, $out): void
    {
    }
}