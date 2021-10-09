<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

abstract class Node
{
    abstract public function getServiceKey(): string;
}
