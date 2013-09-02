<?php
$docName = $_GET['doc'];
if(!isset($docName)){
    echo "mis params doc;";
    exit(0);
}
include_once('BaseUtils.php');
if(!file_exists(BaseUtils::getDocPath($docName))){
    header("Content-type: text/html;charset=utf-8");
    echo "没有相关文档!";
    exit(0);
}
$html = BaseUtils::getContent($docName);
echo $html;
