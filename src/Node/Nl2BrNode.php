<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

final class Nl2BrNode extends Node
{
    public function __construct(
        public string $value,
    ) {
    }

    public function getServiceKey(): string
    {
        return Nl2BrRenderer::class;
    }
}
