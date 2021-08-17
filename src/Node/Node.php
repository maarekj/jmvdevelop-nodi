<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

use JmvDevelop\Nodi\NodeEngine;

abstract class Node
{
    /** @param resource $out */
    abstract public function stream(NodeEngine $engine, $out): void;
}
