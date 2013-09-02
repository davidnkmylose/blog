<?php
include_once('BaseUtils.php');
include_once('FileHelper.php');
$list = FileHelper::getFileListFromDir('./doc');
foreach($list as $index => $value){
    $type = strrchr($value, '.');
    $blogName = str_replace($type, '', $value);
    writeBlog($blogName); 
}
