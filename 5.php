<?php
// 아래 코드는 특정 파일이 쓰기가 가능한지 확인한다.
$filename = 'writeme.txt';
if (is_writable($filename)) {
    echo 'The file is writable';
} else {
    echo 'The file is not writable';
}
?>