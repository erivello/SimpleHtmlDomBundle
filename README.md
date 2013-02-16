SimpleHtmlDomBundle
===================

This bundle provides a simple integration of the [Simple HTML DOM Parser][1] into Symfony2.
Simple HTML DOM Parser is a HTML DOM parser written in PHP5+ that let you manipulate HTML, 
find tags on an HTML page with selectors just like jQuery and extract contents from HTML.

[![Build Status](https://travis-ci.org/erivello/SimpleHtmlDomBundle.png)](https://travis-ci.org/erivello/SimpleHtmlDomBundle)

Installation
------------

Installation is very easy, it makes use of [Composer][2].

Add SimpleHtmlDomBundle to your composer.json

    "require": {
        "erivello/simple-html-dom-bundle": "dev-master"
    }

Register the bundle in `app/AppKernel.php`:

``` php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...

        new Erivello\SimpleHtmlDomBundle\ErivelloSimpleHtmlDomBundle(),
    );
}
```

Usage
--------

You can access the SimpleHtmlDomBundle by the `simple_html_dom` service:

``` php
<?php

$parser = $this->container->get('simple_html_dom');

$parser->load('http://www.google.com/');

// Find all links
foreach($parser->find('a') as $element) {
    echo $element->href . '<br/>';
}
````

License
-------

The SimpleHtmlDomBundle is licensed under the MIT license.

[1]: http://simplehtmldom.sourceforge.net
[2]: http://getcomposer.org/