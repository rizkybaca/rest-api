<?php 

$data=file_get_contents('coba.json');
$mahasiswa=json_decode($data, true);

echo $mahasiswa[0]['pembimbing']["pembimbing1"];


 ?>