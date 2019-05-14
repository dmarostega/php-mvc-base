<?php

abstract class Has{

    private function writeAttr($key,$value){
         return $key. '=' . "\"".$value."\"";
    }

    protected function Is($typeContent=false){
        $tagName = strtolower(get_class($this));        
        $arrAttr=array();
        foreach($this as $attr => $value){
            if($value!=NULL){
               array_push($arrAttr,$this->writeAttr($attr,$value) );               
            }
        }
        return "<$tagName ".implode(' ',$arrAttr)."> \n".  ($typeContent ? '</'.$tagName.'>' : null );
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
    private $cont=0;

    public function __get($name){
        return (property_exists($this,$name) ? $this->$name : '' );
    }

    public function __set($name,$value){
       if(property_exists($this,$name) ){   $this->$name = $value; }
    }

    public function Run(){
        echo $this->Is();
    }
}

class Script extends Has{
    /*  HTML5 */
    protected $async;
    protected $defer;
    protected $integrity;
    protected $nomodule;
    protected $nonce;
    protected $referrerpolicy;
    protected $src;
    protected $type;
    protected $charset;
    protected $language;

    public function __get($name){
        return (property_exists($this,$name) ? $this->$name : '' );
    }

    public function __set($name,$value){
       if(property_exists($this,$name) ){   $this->$name = $value; }
    }

    public function Run(){
        echo self::Is(true);
    }
}

class View {
    private $css;
    private $js;
    private $template = 'default.html';
    private $data;

//    $strView = VIEWS.strtolower(str_replace('Controller','',get_called_class())."/".$view.".php");
    

}