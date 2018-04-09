<?php
/**
 * Created by Vi
 * @author Li Dandan
 * Date: 2018/4/9
 * Time: 21:10
 */

$item = explode("\n", file_get_contents("item.txt"));

$result = explode("\n", file_get_contents("result.txt"));

foreach($result as $k => $re){
    if(in_array($re, $item)){
        unset($result[$k]);
    }
}
$result = join("\n", $result);

file_put_contents("new_result.txt", $result);


