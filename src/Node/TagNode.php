<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

use JmvDevelop\Nodi\NodeEngine;

class TagNode extends Node
{
    /**
     * @param array<string, string> $attributes
     * @param Node[]                $children
     */
    public function __construct(
        private string $tagName,
        private array $attributes = [],
        private array $children = [],
        private bool $autoClose = false,
    ) {
    }

    public function stream(NodeEngine $engine, $out): void
    {
        \fprintf($out, '<%s ', $this->tagName);
        foreach ($this->attributes as $key => $value) {
            $escapedValue = $engine->getEscaper()->htmlAttr($value);
            \fprintf($out, '%s="%s" ', $key, $escapedValue);
        }

        if (true === $this->autoClose) {
            \fprintf($out, '/>');

            return;
        }
        \fprintf($out, '>');

        foreach ($this->getChildren() as $child) {
            $engine->stream($child, $out);
        }

        \fprintf($out, '</%s>', $this->getTagName());
    }

    public function getTagName(): string
    {
        return $this->tagName;
    }

    public function isAutoClose(): bool
    {
        return $this->autoClose;
    }

    public function attr(string $key, string $value): self
    {
        $this->attributes[$key] = $value;

        return $this;
    }

    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function child(Node $child): self
    {
        $this->children = [$child];

        return $this;
    }

    /**
     * @param Node[] $children
     *
     * @return $this
     */
    public function children(array $children): self
    {
        $this->children = $children;

        return $this;
    }

    /** @return list<Node> */
    public function getChildren(): array
    {
        return \array_values($this->children);
    }
}
