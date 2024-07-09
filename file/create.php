<?php
$filename = "test.txt"; // ../data/test.txt
// $file = fopen($filename, "w");
// fwrite($file, "Noi dung ");
// fclose($file);

// if(file_exists($filename)) {
//     $content = fread($file, filesize($filename)); // fseek
//     echo $content;
// } else {
//     echo "File Không tồn tại";
// }
// if(file_exists($filename)) {
//     unlink($filename);
// }   else {
//     echo "File Không tồn tại";
// }

file_put_contents($filename, "Nội dung tao bằng file_put_contents", FILE_APPEND);
$content = file_get_contents($filename);
echo $content;

?>