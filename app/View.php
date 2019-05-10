<?php

abstract class Has{

    private function writeAttr($key,$value){
         return $key. '=' . "\"$value\"";
    }

    protected function Is(){
        $arrAttr=array();
        foreach(get_class_vars(get_class($this)) as $k => $attr){
            if($attr!=NULL){
               array_push($arrAttr,$this->writeAttr($k,$attr) );               
            }
        }
            return "<". strtolower(get_class($this))." ".implode(' ',$arrAttr).">";
    }
}

class Link extends Has{
    protected $as;
    protected $charset = 'UTF-8';
    /*  HTML5 */
    protected $crossorigin;
    protected $disabled = false;
    protected $href = 'default.css';
    protected $hreflnag;
    protected $media;
    protected $methods;
    protected $rel = 'stylesheet';
    /*  HTML5 */
    protected $sizes;
    protected $target;
    protected $type = 'text/css';
    protected $title = '';

    public function __get($name){
     //   echo "<p>".$name."</p>";
    }

    public function Run(){
        echo self::Is();
    }
}

class Script extends Has{
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

    public function Run(){
        echo self::Is();
    }
}

class View {
    private $css;
    private $js;
    private $template = 'default.html';
    private $data;
}