<?php

declare(strict_types=1);

namespace JmvDevelop\Nodi;

final class Escaper
{
    private \Laminas\Escaper\Escaper $laminaEscaper;

    public function __construct()
    {
        $this->laminaEscaper = new \Laminas\Escaper\Escaper('utf-8');
    }

    public function html(string $string): string
    {
        return $this->laminaEscaper->escapeHtml($string);
    }

    public function htmlAttr(string $string): string
    {
        return $this->laminaEscaper->escapeHtmlAttr($string);
    }

    public function css(string $string): string
    {
        return $this->laminaEscaper->escapeCss($string);
    }

    public function js(string $string): string
    {
        return $this->laminaEscaper->escapeJs($string);
    }

    public function url(string $string): string
    {
        return $this->laminaEscaper->escapeUrl($string);
    }
}
