<?php

namespace JmvDevelop\Nodi\Node;

/**
 * @param array<string, string> $extra
 * @return array<string, string>
 */
function attrs(
    ?string $id = null,
    ?string $class = null,
    ?string $name = null,
    ?string $href = null,
    ?string $for = null,
    ?string $src = null,
    ?string $style = null,
    ?string $method = null,
    ?string $action = null,
    ?string $value = null,
    ?string $type = null,
    ?string $width = null,
    ?string $height = null,
    ?string $lang = null,
    ?string $target = null,
    array $extra = [],
): array
{
    $attrs = [];

    if ($id !== null) {
        $attrs['id'] = $id;
    }
    if ($class !== null) {
        $attrs['class'] = $class;
    }
    if ($name !== null) {
        $attrs['name'] = $name;
    }
    if ($href !== null) {
        $attrs['href'] = $href;
    }
    if ($for !== null) {
        $attrs['for'] = $for;
    }
    if ($src !== null) {
        $attrs['src'] = $src;
    }
    if ($style !== null) {
        $attrs['style'] = $style;
    }
    if ($method !== null) {
        $attrs['method'] = $method;
    }
    if ($action !== null) {
        $attrs['action'] = $action;
    }
    if ($value !== null) {
        $attrs['value'] = $value;
    }
    if ($type !== null) {
        $attrs['type'] = $type;
    }
    if ($width !== null) {
        $attrs['width'] = $width;
    }
    if ($height !== null) {
        $attrs['height'] = $height;
    }
    if ($lang !== null) {
        $attrs['lang'] = $lang;
    }
    if ($target !== null) {
        $attrs['target'] = $target;
    }

    foreach ($extra as $key => $value) {
        $attrs[$key] = $value;
    }

    return $attrs;
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function tag(string $tagName,
             array $children = [],
             ?string $id = null,
             ?string $class = null,
             ?string $name = null,
             ?string $href = null,
             ?string $for = null,
             ?string $src = null,
             ?string $style = null,
             ?string $method = null,
             ?string $action = null,
             ?string $value = null,
             ?string $type = null,
             ?string $width = null,
             ?string $height = null,
             ?string $lang = null,
             ?string $target = null,
             array $extra = [],
): TagNode
{
    $attrs = attrs(
        id: $id,
        class: $class,
        name: $name,
        href: $href,
        for: $for,
        src: $src,
        style: $style,
        method: $method,
        action: $action,
        value: $value,
        type: $type,
        width: $width,
        height: $height,
        lang: $lang,
        target: $target,
        extra: $extra
    );
    return new TagNode($tagName, $attrs, $children, false);
}


/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function div(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, array $extra = []): TagNode
{
    return tag("div", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function span(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, array $extra = []): TagNode
{
    return tag("span", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function ul(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, array $extra = []): TagNode
{
    return tag("ul", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function li(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, array $extra = []): TagNode
{
    return tag("li", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function strong(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, array $extra = []): TagNode
{
    return tag("strong", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function em(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, array $extra = []): TagNode
{
    return tag("em", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function form(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, array $extra = []): TagNode
{
    return tag("form", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function input(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, array $extra = []): TagNode
{
    return tag("input", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function label(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, array $extra = []): TagNode
{
    return tag("label", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function textarea(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, array $extra = []): TagNode
{
    return tag("textarea", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function a(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, array $extra = []): TagNode
{
    return tag("a", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function img(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, array $extra = []): TagNode
{
    return tag("img", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function table(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, array $extra = []): TagNode
{
    return tag("table", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function thead(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, array $extra = []): TagNode
{
    return tag("thead", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function tbody(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, array $extra = []): TagNode
{
    return tag("tbody", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function tfoot(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, array $extra = []): TagNode
{
    return tag("tfoot", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function tr(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, array $extra = []): TagNode
{
    return tag("tr", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function th(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, array $extra = []): TagNode
{
    return tag("th", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function td(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, array $extra = []): TagNode
{
    return tag("td", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function p(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, array $extra = []): TagNode
{
    return tag("p", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function html(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, array $extra = []): TagNode
{
    $attrs = attrs($id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, extra: $extra);
    return new HtmlNode(attributes: $attrs, children: $children);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function body(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, array $extra = []): TagNode
{
    return tag("body", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, extra: $extra);
}

/**
 * @param Node[] $children
 * @return TagNode
 */
function head(array $children = []): TagNode
{
    return new TagNode("head", [], $children, false);
}

/**
 * @param string $title
 * @param Node[] $children
 * @return TagNode
 */
function title(string $title): TagNode
{
    return new TagNode("title", [], [s($title)], false);
}


function br(): TagNode
{
    return new TagNode("br", [], [], true);
}

function s(string $value): StringNode
{
    return new StringNode($value);
}

function raw(string $value): RawNode
{
    return new RawNode($value);
}

function nbsp(): RawNode
{
    return raw("&nbsp;");
}


function null(): NullNode
{
    return new NullNode();
}