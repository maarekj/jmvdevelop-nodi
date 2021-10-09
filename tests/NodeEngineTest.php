<?php

use JmvDevelop\Nodi\ChainRenderer;
use JmvDevelop\Nodi\DefaultRenderer;
use JmvDevelop\Nodi\Node\Node;
use JmvDevelop\Nodi\NodeEngine;
use function JmvDevelop\Nodi\Node\{a, body, br, div, frag, html, lazy, li, main, nbsp, raw, ul, s, p, nl2br, wrap};
use function Spatie\Snapshots\assertMatchesHtmlSnapshot;

function baseHtml(Node $node): Node
{
    return html(children: [body(children: [$node])]);
}

function nodeEngine(): NodeEngine
{
    return new NodeEngine(renderer: new ChainRenderer([
        new DefaultRenderer(),
    ]));
}


test('simple node', function () {
    $engine = nodeEngine();

    $node = baseHtml(
        div(class: "container", _: [
            p(_: ["Hello", br(), br(), br(), "World !!"]),
            ul(class: "navigation", _: [
                li(class: "item active-li", _: [
                    a(class: "link active-a", href: "#link-1", target: "_blank", _: "link 1")
                ]),
                li(class: "item", _: [
                    a(class: "link", href: "#link-2", _: "link 2")
                ]),
                li(class: "item", children: [
                    a(class: "link", href: "#link-3", _: "link 3")
                ]),
                li(class: "item", _: [
                    a(class: "link", href: "#link-4", _: "link 4")
                ])
            ])
        ])
    );

    assertMatchesHtmlSnapshot($engine->render($node));
});

test('attributes with double quote', function () {
    $engine = nodeEngine();

    $node = baseHtml(a(class: 'hello"world', children: [s("hello world")]));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test('attributes with simple quote', function () {
    $engine = nodeEngine();

    $node = baseHtml(a(class: "hello'world", children: [s("hello world")]));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test('attributes with double and simple quotes', function () {
    $engine = nodeEngine();

    $node = baseHtml(a(class: "hello'\"world", children: [s("hello world")]));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test('content must be escaped', function () {
    $engine = nodeEngine();

    $node = baseHtml(div(children: [s("<strong>strong</strong>")]));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test('raw content', function () {
    $engine = nodeEngine();

    $node = baseHtml(div(children: [raw("<strong>strong</strong>")]));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test('many string node', function () {
    $engine = nodeEngine();

    $node = baseHtml(div(children: [s("1"), s("2"), s("3")]));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test('nbsp', function () {
    $engine = nodeEngine();

    $node = baseHtml(div(children: [s("1"), nbsp(), s("2")]));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test('fragment with varargs', function () {
    $engine = nodeEngine();

    $node = baseHtml(div([
        frag(
            s("1"),
            s(" "),
            s("2"),
            s(" "),
            s("3"),
        ),
    ]));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test('fragment with array', function () {
    $engine = nodeEngine();

    $node = baseHtml(div([
        frag([
            s("1"),
            s(" "),
            s("2"),
            s(" "),
            s("3"),
        ]),
    ]));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test('fragment with varargs and array', function () {
    $engine = nodeEngine();

    $node = baseHtml(div([
        frag(
            s("1"),
            s(" "),
            [
                s("2"),
                s(" "),
            ],
            s("3"),
            s(" "),
            [
                s("4"),
            ],
        ),
    ]));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test('nl2br with simple text', function () {
    $engine = nodeEngine();

    $node = baseHtml(div([
        nl2br("Hello\nWorld"),
    ]));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test('nl2br with html text', function () {
    $engine = nodeEngine();

    $node = baseHtml(div([
        nl2br("<strong>Hello</strong>\n<em>World\nWorld</em>"),
    ]));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test("lazy", function () {
    $engine = nodeEngine();

    $node = baseHtml(div(class: "class", children: [
        lazy(fn() => div(s("Lazy with function"))),
        lazy(fn() => lazy(fn() => lazy(fn() => div(s("Lazy with function nested"))))),
        lazy(div(s("lazy with one node"))),
        lazy([
            div(class: "node-1", children: lazy(fn() => s("lazy with two nodes"))),
            div(class: "node-2", children: lazy(fn() => s("lazy with two nodes"))),
        ]),
    ]));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test("wrap", function () {
    $engine = nodeEngine();

    $node = baseHtml(frag(
        div(class: "wrap with null", children: [wrap(null, div(s("div")))]),
        div(class: "wrap with main around", children: wrap(fn(Node $super): Node => main(class: "wrapper", children: $super), div(s("div")))),
        div(class: "wrap with main before", children: wrap(fn(Node $super): Node => frag(main(class: "before"), $super), div(s("div")))),
    ));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test("[prevent regression] - raw node with %s and other % in content", function () {
    $engine = nodeEngine();

    $node = baseHtml(frag(
        raw(value: "content %s test %d %"),
    ));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test("[prevent regression] - string node with %s and other % in string", function () {
    $engine = nodeEngine();

    $node = baseHtml(frag(
        s("content %s test %d %"),
    ));

    assertMatchesHtmlSnapshot($engine->render($node));
});