<?php
include_once('BaseUtils.php');
include_once('FileHelper.php');
function writeBlog($docName = ''){
    $html = BaseUtils::getContent($docName);
    file_put_contents('html/'.$docName.'.html',$html);
    echo "create blog $docName; \n";
}
$list = FileHelper::getFileListFromDir('./doc');
foreach($list as $index => $value){
    $type = strrchr($value, '.');
    $blogName = str_replace($type, '', $value);
    writeBlog($blogName); 
}
