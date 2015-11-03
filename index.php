<?php 

$fn = "post.txt"; 
$file = fopen($fn, "a+"); 
$size = filesize($fn); 
$dog =array(
    "foo" => "bar",
    "bar" => "foo",
);

/*foreach ($dog as $key => $value) {

 fwrite($file, "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value));

};*/


foreach ($_POST as $key => $value) {

 fwrite($file, "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value));
}

/*$text = fread($file, $size); */
 
echo 'working';
 ?>