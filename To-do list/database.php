<?php

$con = mysqli_connect('localhost', 'root', '', 'todo');
if (!$con) {
    echo "some error here: ".mysqli_connect_error();
}

?>
                                        