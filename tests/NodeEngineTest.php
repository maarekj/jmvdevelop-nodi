<?php

use JmvDevelop\Nodi\Node\Node;
use JmvDevelop\Nodi\NodeEngine;
use function JmvDevelop\Nodi\Node\a;
use function JmvDevelop\Nodi\Node\body;
use function JmvDevelop\Nodi\Node\br;
use function JmvDevelop\Nodi\Node\div;
use function JmvDevelop\Nodi\Node\html;
use function JmvDevelop\Nodi\Node\li;
use function JmvDevelop\Nodi\Node\nbsp;
use function JmvDevelop\Nodi\Node\raw;
use function JmvDevelop\Nodi\Node\ul;
use function JmvDevelop\Nodi\Node\s;
use function JmvDevelop\Nodi\Node\p;
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
