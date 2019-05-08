<?php


class Link{
    private $as;
    private $charset;
    /*  HTML5 */
    private $crossorigin;
    private $disabled = false;
    private $href;
    private $hreflnag;
    private $media;
    private $methods;
    private $rel;
    /*  HTML5 */
    private $sizes;
}

class Script{
    /*  HTML5 */
    private $async;
    private $defer;
    private $integrity;
    private $nomodule;
    private $nonce;
    private $referrerpolicy;
    private $src;
    private $type;
    private $charset;
    private $language;
}

class View {
    private $css;
    private $js;
    private $template = 'default.html';
    private $data;
}