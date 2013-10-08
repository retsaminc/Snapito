Snapito
=======

Simple PHP Class to making screenshots using the http://www.snapito.com/ API.
(Please register to generator your API Key)

Example:\n
\n
$snap = new snapito('abc123','github.com');\n
$pic = $snap->run();\n
$snap->save('github.png',$pic);\n
