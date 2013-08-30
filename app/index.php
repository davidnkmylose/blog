<?php
include_once('markdown.php');
include_once('FileHelper.php');
function writeBlog($blogName = '', $extInfo){
    $markcontent = file_get_contents('doc/'.$blogName.'.txt');
    $content = Markdown($markcontent);
    $html = str_replace('markdown_tpl_content', $content,  $extInfo['tpl']);
    file_put_contents('html/'.$blogName.'.html',$html);
    echo "create blog $blogName; \n";
}
$list = FileHelper::getFileListFromDir('./doc');
$tpl = file_get_contents('index.tpl');
foreach($list as $index => $value){
    $type = strrchr($value, '.');
    $blogName = str_replace($type, '', $value);
    $extInfo = array(
        'tpl' => $tpl,
    );
    writeBlog($blogName, $extInfo); 
}
