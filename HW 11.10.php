<?php
//3
$str5 = 'Hello WorLd!';
echo "'$str5' has a " . substr_count($str5, 'l') + substr_count($str5, 'L') . " letters of 'l' <br>";
echo "<br>";

//4
$str6 = 'html css php';
$arr = explode(' ', $str6);
for ($i=0; $i<3; $i++){
    echo "$arr[$i] <br>";
}
echo "<br>";

//5
$file_arr = ['2121.png', '239023.png', '22304.txt'];
foreach ($file_arr as $file){
    $ext = explode('.', $file);
//  print_r($ext);
    if($ext[1]=='png'){
        echo 'Yes, png! <br>';
    }
    else {
        echo 'No, not png. <br>';
    }
}