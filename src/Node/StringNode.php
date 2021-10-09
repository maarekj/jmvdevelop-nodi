<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

final class StringNode extends Node
{
    public function __construct(
        public string $value,
    ) {
    }

    public function getServiceKey(): string
    {
        return StringRenderer::class;
    }
}
