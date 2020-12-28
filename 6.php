<?php
// 아래는 파일의 존재 여부를 확인한다.
$filename = 'readme.txt';
if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename is not exists";
}
?>