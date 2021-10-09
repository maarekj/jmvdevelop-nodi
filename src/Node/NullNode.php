<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

final class NullNode extends Node
{
    public function __construct()
    {
    }

    public function getServiceKey(): string
    {
        return NullRenderer::class;
    }
}
