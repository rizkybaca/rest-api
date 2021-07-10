<?php 

require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$response = $client->request('GET', 'http://www.omdbapi.com/', [
	'query'=>[
		'apikey'=>'b3d45c72',
		's'=>'transformers'
	]
]);

$result=json_decode($response->getBody()->getContents(), true);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Movie</title>
</head>
<body>
	<?php foreach($result['Search'] as $movie) :?>
		<ul>
			<li>Title : <?= $movie['Title']; ?></li>
			<li>Year : <?= $movie['Year']; ?></li>
			<li>
				<img src="<?= $movie['Poster']; ?>" width="80">
			</li>
		</ul>
	<?php endforeach; ?>
</body>
</html>