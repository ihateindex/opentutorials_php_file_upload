<?php
// 아래 코드는 특정 파일이 읽을 수 있는 상태인지를 확인한다.
$filename = 'readme.txt';
if (is_readable($filename)) {
    echo 'The file is readable';
} else {
    echo 'The file is not readable';
}
?>