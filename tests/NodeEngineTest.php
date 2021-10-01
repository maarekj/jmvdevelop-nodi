<?php

use JmvDevelop\Nodi\Node\Node;
use JmvDevelop\Nodi\NodeEngine;
use function JmvDevelop\Nodi\Node\{a, body, br, div, frag, html, lazy, li, main, nbsp, raw, ul, s, p, nl2br, wrap};
use function Spatie\Snapshots\assertMatchesHtmlSnapshot;

function baseHtml(Node $node): Node
{
    return html(children: [body(children: [$node])]);
}

test('simple node', function () {
    $engine = new NodeEngine();

    $node = baseHtml(
        div(class: "container", children: [
            p(children: [s("Hello"), br(), br(), br(), s("World !!")]),
            ul(class: "navigation", children: [
                li(class: "item active-li", children: [
                    a(class: "link active-a", href: "#link-1", target: "_blank", children: [
                        s("link 1"),
                    ])
                ]),
                li(class: "item", children: [
                    a(class: "link", href: "#link-2", children: [
                        s("link 2"),
                    ])
                ]),
                li(class: "item", children: [
                    a(class: "link", href: "#link-3", children: [
                        s("link 3"),
                    ])
                ]),
                li(class: "item", children: [
                    a(class: "link", href: "#link-4", children: [
                        s("link 4"),
                    ])
                ])
            ])
        ])
    );

    assertMatchesHtmlSnapshot($engine->render($node));
});

test('attributes with double quote', function () {
    $engine = new NodeEngine();

    $node = baseHtml(a(class: 'hello"world', children: [s("hello world")]));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test('attributes with simple quote', function () {
    $engine = new NodeEngine();

    $node = baseHtml(a(class: "hello'world", children: [s("hello world")]));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test('attributes with double and simple quotes', function () {
    $engine = new NodeEngine();

    $node = baseHtml(a(class: "hello'\"world", children: [s("hello world")]));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test('content must be escaped', function () {
    $engine = new NodeEngine();

    $node = baseHtml(div(children: [s("<strong>strong</strong>")]));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test('raw content', function () {
    $engine = new NodeEngine();

    $node = baseHtml(div(children: [raw("<strong>strong</strong>")]));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test('many string node', function () {
    $engine = new NodeEngine();

    $node = baseHtml(div(children: [s("1"), s("2"), s("3")]));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test('nbsp', function () {
    $engine = new NodeEngine();

    $node = baseHtml(div(children: [s("1"), nbsp(), s("2")]));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test('fragment with varargs', function () {
    $engine = new NodeEngine();

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
    $engine = new NodeEngine();

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
    $engine = new NodeEngine();

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
    $engine = new NodeEngine();

    $node = baseHtml(div([
        nl2br("Hello\nWorld"),
    ]));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test('nl2br with html text', function () {
    $engine = new NodeEngine();

    $node = baseHtml(div([
        nl2br("<strong>Hello</strong>\n<em>World\nWorld</em>"),
    ]));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test("lazy", function () {
    $engine = new NodeEngine();

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
    $engine = new NodeEngine();

    $node = baseHtml(frag(
        div(class: "wrap with null", children: [wrap(null, div(s("div")))]),
        div(class: "wrap with main around", children: wrap(fn(Node $super): Node => main(class: "wrapper", children: $super), div(s("div")))),
        div(class: "wrap with main before", children: wrap(fn(Node $super): Node => frag(main(class: "before"), $super), div(s("div")))),
    ));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test("[prevent regression] - raw node with %s and other % in content", function () {
    $engine = new NodeEngine();

    $node = baseHtml(frag(
        raw(value: "content %s test %d %"),
    ));

    assertMatchesHtmlSnapshot($engine->render($node));
});

test("[prevent regression] - string node with %s and other % in string", function () {
    $engine = new NodeEngine();

    $node = baseHtml(frag(
        s("content %s test %d %"),
    ));

    assertMatchesHtmlSnapshot($engine->render($node));
});