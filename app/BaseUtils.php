<?php
class BaseUtils{

    

    public function __construct(){
        
    }

    public static function getDocPath($doc = false){
        if(false == $doc){
            return false;
        }
        $path = "doc/${doc}.txt";
        return $path;
    }

    public static function getContent($doc = ''){
        if(!function_exists('Markdown')){
           include_once('markdown.php'); 
        }
        $tpl = file_get_contents("index.tpl");
        $doc = file_get_contents(self::getDocPath($doc));
        $content = Markdown($doc);
        $html = str_replace("markdown_tpl_content", $content, $tpl);
        return $html;
    }

}
