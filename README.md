Snapito
=======

Simple PHP Class to making screenshots using the http://www.snapito.com/ API.
(Please register to generator your API Key)

Example:

$snap = new snapito('abc123','github.com');
$pic = $snap->run();
$snap->save('github.png',$pic);
