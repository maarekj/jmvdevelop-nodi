<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi\Node;

abstract class AbstractTagNode extends Node
{
    /**
     * @param array<string, string> $attributes
     * @param Node|Node[]           $children
     */
    public function __construct(
        private string $tagName,
        private array $attributes = [],
        private array | Node $children = [],
        private bool $autoClose = false,
    ) {
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

    /** @return array<string, string> */
    public function getAttributes(): array
    {
        return $this->attributes;
    }

    public function child(Node $child): self
    {
        $this->children = $child;

        return $this;
    }

    /**
     * @param Node|Node[] $children
     *
     * @return $this
     */
    public function children(array|Node $children): self
    {
        $this->children = $children;

        return $this;
    }

    /** @return list<Node> */
    public function getChildren(): array
    {
        $children = \is_array($this->children) ? $this->children : [$this->children];

        return \array_values($children);
    }
}
