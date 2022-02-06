<?php
$fullname = '';
if (isset($fullname) && !empty($fullname)) {
    echo $fullname;
} else {
    echo 'false';
}
echo gettype($fullname);
