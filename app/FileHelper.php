<?php
class FileHelper{
    
    public static function getFileListFromDir($dir = '.'){
        $result = array();
        $handler = opendir($dir);
        if(false == $handler){
            return false;
        }
        while(true){
            $file = readdir($handler);
            if($file == false){
                break;
            }
            if($file != "." && $file != ".."){
                array_push($result, $file);
            }
        }
        return $result;
    }
}
