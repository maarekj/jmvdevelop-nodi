<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

final class TagNode extends AbstractTagNode
{
    public function getServiceKey(): string
    {
        return TagRenderer::class;
    }
}
