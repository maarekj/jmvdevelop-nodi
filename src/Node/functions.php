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
    ?string $alt = null,
    ?string $title = null,
    ?string $colspan = null,
    ?string $rowspan = null,
    ?string $rows = null,
    ?string $rel = null,
    ?string $preload = null,
    ?string $accept = null,
    ?string $async = null,
    ?string $autocomplete = null,
    ?string $autoplay = null,
    ?string $cite = null,
    ?string $content = null,
    ?string $disabled = null,
    ?string $form = null,
    ?string $hreflang = null,
    ?string $httpEquiv = null,
    ?string $label = null,
    ?string $min = null,
    ?string $novalidate = null,
    ?string $pattern = null,
    ?string $reversed = null,
    ?string $sandbox = null,
    ?string $selected = null,
    ?string $size = null,
    ?string $sizes = null,
    ?string $step = null,
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

    if ($alt !== null) {
        $attrs['alt'] = $alt;
    }
    if ($title !== null) {
        $attrs['title'] = $title;
    }
    if ($colspan !== null) {
        $attrs['colspan'] = $colspan;
    }
    if ($rowspan !== null) {
        $attrs['rowspan'] = $rowspan;
    }
    if ($rows !== null) {
        $attrs['rows'] = $rows;
    }
    if ($rel !== null) {
        $attrs['rel'] = $rel;
    }
    if ($preload !== null) {
        $attrs['preload'] = $preload;
    }
    if ($accept !== null) {
        $attrs['accept'] = $accept;
    }
    if ($async !== null) {
        $attrs['async'] = $async;
    }
    if ($autocomplete !== null) {
        $attrs['autocomplete'] = $autocomplete;
    }
    if ($autoplay !== null) {
        $attrs['autoplay'] = $autoplay;
    }
    if ($cite !== null) {
        $attrs['cite'] = $cite;
    }
    if ($content !== null) {
        $attrs['content'] = $content;
    }
    if ($disabled !== null) {
        $attrs['disabled'] = $disabled;
    }
    if ($form !== null) {
        $attrs['form'] = $form;
    }
    if ($hreflang !== null) {
        $attrs['hreflang'] = $hreflang;
    }
    if ($httpEquiv !== null) {
        $attrs['http-equiv'] = $httpEquiv;
    }
    if ($label !== null) {
        $attrs['label'] = $label;
    }
    if ($min !== null) {
        $attrs['min'] = $min;
    }
    if ($novalidate !== null) {
        $attrs['novalidate'] = $novalidate;
    }
    if ($pattern !== null) {
        $attrs['pattern'] = $pattern;
    }
    if ($reversed !== null) {
        $attrs['reversed'] = $reversed;
    }
    if ($sandbox !== null) {
        $attrs['sandbox'] = $sandbox;
    }
    if ($selected !== null) {
        $attrs['selected'] = $selected;
    }
    if ($size !== null) {
        $attrs['size'] = $size;
    }
    if ($sizes !== null) {
        $attrs['sizes'] = $sizes;
    }
    if ($step !== null) {
        $attrs['step'] = $step;
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
             bool $autoClose = false,
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
             ?string $alt = null,
             ?string $title = null,
             ?string $colspan = null,
             ?string $rowspan = null,
             ?string $rows = null,
             ?string $rel = null,
             ?string $preload = null,
             ?string $accept = null,
             ?string $async = null,
             ?string $autocomplete = null,
             ?string $autoplay = null,
             ?string $cite = null,
             ?string $content = null,
             ?string $disabled = null,
             ?string $form = null,
             ?string $hreflang = null,
             ?string $httpEquiv = null,
             ?string $label = null,
             ?string $min = null,
             ?string $novalidate = null,
             ?string $pattern = null,
             ?string $reversed = null,
             ?string $sandbox = null,
             ?string $selected = null,
             ?string $size = null,
             ?string $sizes = null,
             ?string $step = null,
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
        alt: $alt,
        title: $title,
        colspan: $colspan,
        rowspan: $rowspan,
        rows: $rows,
        rel: $rel,
        preload: $preload,
        accept: $accept,
        async: $async,
        autocomplete: $autocomplete,
        autoplay: $autoplay,
        cite: $cite,
        content: $content,
        disabled: $disabled,
        form: $form,
        hreflang: $hreflang,
        httpEquiv: $httpEquiv,
        label: $label,
        min: $min,
        novalidate: $novalidate,
        pattern: $pattern,
        reversed: $reversed,
        sandbox: $sandbox,
        selected: $selected,
        size: $size,
        sizes: $sizes,
        step: $step,
        extra: $extra
    );
    return new TagNode($tagName, $attrs, $children, $autoClose);
}

/* TAGS:
abbr
acronym
address
area
article
aside
audio
blockquote
body
cite
code
col
colgroup
dd
del
dir
div
dl
dt
em
embed
figcaption
figure
form
h1
h2
h3
h4
h5
h6
header
hr
html
i
iframe
img
input
ins
label
legend
li
link
main
meta
nav
ol
option
p
picture
pre
progress
script
select
small
span
strong
style
table
tbody
td
template
textarea
tfoot
th
thead
tr
ul
video
 */

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function a(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("a", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function abbr(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("abbr", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function acronym(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("acronym", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function address(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("address", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function area(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("area", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function article(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("article", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function aside(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("aside", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function audio(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("audio", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function blockquote(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("blockquote", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function body(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("body", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function cite(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("cite", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function code(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("code", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function col(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("col", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function colgroup(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("colgroup", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function dd(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("dd", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function del(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("del", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function dir(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("dir", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function div(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("div", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function dl(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("dl", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function dt(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("dt", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function em(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("em", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function embed(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("embed", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function figcaption(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("figcaption", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function figure(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("figure", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function form(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("form", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function h1(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("h1", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function h2(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("h2", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function h3(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("h3", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function h4(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("h4", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function h5(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("h5", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function h6(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("h6", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function header(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("header", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function hr(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("hr", autoClose: true, children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function html(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): HtmlNode
{
    $attrs = attrs(id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
    return new HtmlNode(attributes: $attrs, children: $children);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function i(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("i", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function iframe(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("iframe", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function img(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("img", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function input(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("input", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function ins(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("ins", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function label(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("label", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function legend(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("legend", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function li(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("li", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function link(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("link", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function main(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("main", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function meta(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("meta", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function nav(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("nav", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function ol(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("ol", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function option(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("option", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function p(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("p", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function picture(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("picture", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function pre(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("pre", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function progress(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("progress", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function script(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("script", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function select(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("select", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function small(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("small", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function span(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("span", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function strong(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("strong", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function style(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("style", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function table(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("table", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function tbody(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("tbody", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function td(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("td", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function template(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("template", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function textarea(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("textarea", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function tfoot(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("tfoot", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function th(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("th", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function thead(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("thead", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function tr(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("tr", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function ul(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("ul", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
}

/**
 * @param Node[] $children
 * @param array<string, string> $extra
 */
function video(array $children = [], ?string $id = null, ?string $class = null, ?string $name = null, ?string $href = null, ?string $for = null, ?string $src = null, ?string $style = null, ?string $method = null, ?string $action = null, ?string $value = null, ?string $type = null, ?string $width = null, ?string $height = null, ?string $lang = null, ?string $target = null, ?string $alt = null, ?string $title = null, ?string $colspan = null, ?string $rowspan = null, ?string $rows = null, ?string $rel = null, ?string $preload = null, ?string $accept = null, ?string $async = null, ?string $autocomplete = null, ?string $autoplay = null, ?string $cite = null, ?string $content = null, ?string $disabled = null, ?string $form = null, ?string $hreflang = null, ?string $httpEquiv = null, ?string $label = null, ?string $min = null, ?string $novalidate = null, ?string $pattern = null, ?string $reversed = null, ?string $sandbox = null, ?string $selected = null, ?string $size = null, ?string $sizes = null, ?string $step = null, array $extra = []): TagNode
{
    return tag("video", children: $children, id: $id, class: $class, name: $name, href: $href, for: $for, src: $src, style: $style, method: $method, action: $action, value: $value, type: $type, width: $width, height: $height, lang: $lang, target: $target, alt: $alt, title: $title, colspan: $colspan, rowspan: $rowspan, rows: $rows, rel: $rel, preload: $preload, accept: $accept, async: $async, autocomplete: $autocomplete, autoplay: $autoplay, cite: $cite, content: $content, disabled: $disabled, form: $form, hreflang: $hreflang, httpEquiv: $httpEquiv, label: $label, min: $min, novalidate: $novalidate, pattern: $pattern, reversed: $reversed, sandbox: $sandbox, selected: $selected, size: $size, sizes: $sizes, step: $step, extra: $extra);
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
    return raw("&nbsp;");
}


function null(): NullNode
{
    return new NullNode();
}

/**
 * @param Node|Node[] ...$nodes
 * @return FragmentNode
 */
function frag(...$nodes): FragmentNode
{
    $flattenNode = [];

    foreach ($nodes as $node) {
        if (is_array($node)) {
            foreach ($node as $n) {
                $flattenNode[] = $n;
            }
        } else {
            $flattenNode[] = $node;
        }
    }

    return new FragmentNode($flattenNode);
}