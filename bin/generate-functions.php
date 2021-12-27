#!/usr/bin/env php
<?php

$attrs = [
    'accept' => 'accept',
    'action' => 'action',
    'alt' => 'alt',
    'async' => 'async',
    'autocomplete' => 'autocomplete',
    'autoplay' => 'autoplay',
    'charset' => 'charset',
    'checked' => 'checked',
    'cite' => 'cite',
    'class' => 'class',
    'colspan' => 'colspan',
    'content' => 'content',
    'disabled' => 'disabled',
    'for' => 'for',
    'form' => 'form',
    'height' => 'height',
    'href' => 'href',
    'hreflang' => 'hreflang',
    'http-equiv' => 'httpEquiv',
    'id' => 'id',
    'itemscope' => 'itemscope',
    'itemtype' => 'itemtype',
    'label' => 'label',
    'lang' => 'lang',
    'media' => 'media',
    'method' => 'method',
    'min' => 'min',
    'name' => 'name',
    'novalidate' => 'novalidate',
    'pattern' => 'pattern',
    'placeholder' => 'placeholder',
    'preload' => 'preload',
    'property' => 'property',
    'rel' => 'rel',
    'required' => 'required',
    'reversed' => 'reversed',
    'rows' => 'rows',
    'rowspan' => 'rowspan',
    'sandbox' => 'sandbox',
    'selected' => 'selected',
    'size' => 'size',
    'sizes' => 'sizes',
    'src' => 'src',
    'srcset' => 'srcset',
    'step' => 'step',
    'style' => 'style',
    'target' => 'target',
    'title' => 'title',
    'type' => 'type',
    'value' => 'value',
    'width' => 'width',
];

$tags = [
    ['name' => 'a', 'autoClose' => false],
    ['name' => 'abbr', 'autoClose' => false],
    ['name' => 'acronym', 'autoClose' => false],
    ['name' => 'address', 'autoClose' => false],
    ['name' => 'area', 'autoClose' => false],
    ['name' => 'article', 'autoClose' => false],
    ['name' => 'aside', 'autoClose' => false],
    ['name' => 'audio', 'autoClose' => false],
    ['name' => 'blockquote', 'autoClose' => false],
    ['name' => 'body', 'autoClose' => false],
    ['name' => 'button', 'autoClose' => false],
    ['name' => 'br', 'autoClose' => true],
    ['name' => 'cite', 'autoClose' => false],
    ['name' => 'code', 'autoClose' => false],
    ['name' => 'col', 'autoClose' => false],
    ['name' => 'colgroup', 'autoClose' => false],
    ['name' => 'dd', 'autoClose' => false],
    ['name' => 'del', 'autoClose' => false],
    ['name' => 'dir', 'autoClose' => false],
    ['name' => 'div', 'autoClose' => false],
    ['name' => 'dl', 'autoClose' => false],
    ['name' => 'dt', 'autoClose' => false],
    ['name' => 'em', 'autoClose' => false],
    ['name' => 'embed', 'autoClose' => false],
    ['name' => 'figcaption', 'autoClose' => false],
    ['name' => 'figure', 'autoClose' => false],
    ['name' => 'footer', 'autoClose' => false],
    ['name' => 'form', 'autoClose' => false],
    ['name' => 'h1', 'autoClose' => false],
    ['name' => 'h2', 'autoClose' => false],
    ['name' => 'h3', 'autoClose' => false],
    ['name' => 'h4', 'autoClose' => false],
    ['name' => 'h5', 'autoClose' => false],
    ['name' => 'h6', 'autoClose' => false],
    ['name' => 'head', 'autoClose' => false],
    ['name' => 'header', 'autoClose' => false],
    ['name' => 'hr', 'autoClose' => true],
    ['name' => 'i', 'autoClose' => false],
    ['name' => 'iframe', 'autoClose' => false],
    ['name' => 'img', 'autoClose' => false],
    ['name' => 'input', 'autoClose' => false],
    ['name' => 'ins', 'autoClose' => false],
    ['name' => 'label', 'autoClose' => false],
    ['name' => 'legend', 'autoClose' => false],
    ['name' => 'li', 'autoClose' => false],
    ['name' => 'link', 'autoClose' => false],
    ['name' => 'main', 'autoClose' => false],
    ['name' => 'meta', 'autoClose' => false],
    ['name' => 'nav', 'autoClose' => false],
    ['name' => 'ol', 'autoClose' => false],
    ['name' => 'option', 'autoClose' => false],
    ['name' => 'p', 'autoClose' => false],
    ['name' => 'picture', 'autoClose' => false],
    ['name' => 'pre', 'autoClose' => false],
    ['name' => 'progress', 'autoClose' => false],
    ['name' => 'script', 'autoClose' => false],
    ['name' => 'section', 'autoClose' => false],
    ['name' => 'select', 'autoClose' => false],
    ['name' => 'small', 'autoClose' => false],
    ['name' => 'span', 'autoClose' => false],
    ['name' => 'strong', 'autoClose' => false],
    ['name' => 'style', 'autoClose' => false],
    ['name' => 'sup', 'autoClose' => false],
    ['name' => 'table', 'autoClose' => false],
    ['name' => 'tbody', 'autoClose' => false],
    ['name' => 'td', 'autoClose' => false],
    ['name' => 'template', 'autoClose' => false],
    ['name' => 'textarea', 'autoClose' => false],
    ['name' => 'tfoot', 'autoClose' => false],
    ['name' => 'th', 'autoClose' => false],
    ['name' => 'thead', 'autoClose' => false],
    ['name' => 'tr', 'autoClose' => false],
    ['name' => 'ul', 'autoClose' => false],
    ['name' => 'video', 'autoClose' => false],
];

$generateAttrsToParams = function () use ($attrs): void {
    foreach ($attrs as $variableName) {
        echo '?string $' . $variableName . " = null,\n";
    }
};

$generateAttrsFunction = function () use ($attrs, $generateAttrsToParams): void {
    echo '
/**
 * @param array<string, string> $extra
 * @return array<string, string>
 */
function attrs(
    ';

    $generateAttrsToParams();

    echo "array \$extra = [],\n";
    echo "): array {\n";
    echo '    $attrs = [];';
    echo "\n";

    foreach ($attrs as $attr => $variableName) {
        echo '    if ($' . $variableName . ' !== null) {' . "\n";
        echo '        $attrs["' . $attr . '"] = $' . $variableName . ";\n";
        echo "    }\n";
        echo "\n";
    }

    echo '    foreach ($extra as $key => $value) {' . "\n";
    echo '        $attrs[$key] = $value;' . "\n";
    echo '    }' . "\n";
    echo "\n";
    echo '    return $attrs;' . "\n";
    echo "}";
    echo "\n";
};

$generateTagFunction = function () use ($attrs, $generateAttrsToParams) {
    echo '
/**
 * @param string|Node|array<array-key, Node|string> $_
 * @param null|string|Node|array<array-key, Node> $children
 * @param array<string, string> $extra
 */
function tag(string $tagName, array|string|Node $_ = [], array|string|Node $children = null, bool $autoClose = false,
    ';

    $generateAttrsToParams();

    echo 'array $extra = [],';
    echo '): TagNode {';
    echo "\n";
    echo '    $attrs = attrs(';
    foreach ($attrs as $variableName) {
        echo '        ' . $variableName . ': $' . $variableName . ',';
        echo "\n";
    }
    echo '    extra: $extra,';
    echo "\n";
    echo '    );';
    echo "\n";
    echo '    $children = $children === null ? frag($_) : frag($children);';
    echo "\n";
    echo "\n";
    echo '    return new TagNode(tagName: $tagName, attributes: $attrs, children: $children, autoClose: $autoClose);';
    echo "\n";
    echo "}";
};

$generateTagsFunctions = function () use ($attrs, $generateAttrsToParams, $tags): void {
    foreach ($tags as $tag) {
        echo '
/**
 * @param string|Node|array<array-key, Node|string> $_
 * @param null|string|Node|array<array-key, Node> $children
 * @param array<string, string> $extra
 */
';
        echo 'function ' . $tag['name'] . '(array|string|Node $_ = [], array|string|Node $children = null, bool $autoClose = ' . ($tag['autoClose'] === true ? 'true' : 'false') . ', ';
        $generateAttrsToParams();
        echo 'array $extra = []): TagNode {';
        echo "\n";
        echo '    return tag(tagName: "' . $tag['name'] . '", autoClose: $autoClose, _: $_, children: $children, extra: $extra, ';
        foreach ($attrs as $variableName) {
            echo '        ' . $variableName . ': $' . $variableName . ',';
            echo "\n";
        }
        echo ");";
        echo "\n";
        echo "}";
    }
};

$generateHtmlFunction = function () use ($attrs, $generateAttrsToParams): void {
    echo '
/**
 * @param string|Node|array<array-key, Node|string> $_
 * @param null|string|Node|array<array-key, Node> $children
 * @param array<string, string> $extra
 */
';
    echo 'function html(array|string|Node $_ = [], array|string|Node $children = null, ';
    $generateAttrsToParams();

    echo 'array $extra = []): HtmlNode {';
    echo "\n";
    echo '    $attrs = attrs(';
    foreach ($attrs as $variableName) {
        echo '        ' . $variableName . ': $' . $variableName . ',';
        echo "\n";
    }
    echo '    extra: $extra,';
    echo "\n";
    echo '    );';
    echo "\n";
    echo '    $children = $children === null ? frag($_) : frag($children);';
    echo "\n";
    echo "\n";
    echo '    return new HtmlNode(attributes: $attrs, children: $children);';
    echo "\n";
    echo "}";
};


echo "<?php\n";
echo "\n";
echo "namespace JmvDevelop\\Nodi\\Node;\n";
echo "\n";

$generateAttrsFunction();
$generateTagFunction();
$generateTagsFunctions();
$generateHtmlFunction();

echo '
function title(string $title): TagNode
{
    return new TagNode(tagName: \'title\', attributes: [], children: [s($title)], autoClose: false);
}

function s(string $value): StringNode
{
    return new StringNode($value);
}

function nl2br(string $value): Nl2BrNode
{
    return new Nl2BrNode($value);
}

function raw(string $value): RawNode
{
    return new RawNode($value);
}

function nbsp(): RawNode
{
    return raw(\'&nbsp;\');
}

function null(): NullNode
{
    return new NullNode();
}

/**
 * @param string|Node|array<array-key, Node|string> ...$nodes
 */
function frag(...$nodes): FragmentNode
{
    $flattenNode = [];

    foreach ($nodes as $node) {
        if (\is_array($node)) {
            foreach ($node as $n) {
                if (\is_string($n)) {
                    $flattenNode[] = s($n);
                } else {
                    $flattenNode[] = $n;
                }
            }
        } elseif (\is_string($node)) { 
            $flattenNode[] = s($node);
        } else {
            $flattenNode[] = $node;
        }
    }

    return new FragmentNode($flattenNode);
}

/**
 * @param Node|Node[]|callable():Node $nodes
 */
function lazy(callable|array|Node $nodes): LazyNode
{
    return new LazyNode(nodes: $nodes);
}

/**
 * @param ?callable(Node):Node $wrapper
 * @param Node $node
 */
function wrap(?callable $wrapper, Node $node): WrapNode
{
    return new WrapNode(wrapper: $wrapper, node: $node);
}
';

echo "\n";