<?php

require_once('snapito.php');

$snap = new snapito('abc123', 'github.com');
$pic = $snap->run();
$snap->save('github.png', $pic);


?>
