<?php 

// $mahasiswa=[
// 	["nama"=>"Rizky Nur",
// 	"nim"=>"5181311006",
// 	"email"=>"rizkynur@gmail.com"
// ],
// [
// 	"nama"=>"Bagus Miftah",
// 	"nim"=>"5181311025",
// 	"email"=>"bagusmiftah@gmail.com"
// ]
// ];

$dbh=new PDO('mysql:host=localhost;dbname=votev2', 'root','');
$db=$dbh->prepare('SELECT * FROM user');
$db->execute();
$mahasiswa=$db->fetchAll(PDO::FETCH_ASSOC);


$data=json_encode($mahasiswa);
echo $data;

 ?>