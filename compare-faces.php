<?php 

require 'vendor/autoload.php';

use Aws\Exception\AwsException;
use Aws\Rekognition\RekognitionClient;
use Aws\S3\S3Client;

$client = new RekognitionClient([
	'region' => 'us-east-1',
	'version' => 'latest',

	'credentials' => [
		'key' => 'AKIAV3FBZGCFV2S2S25X',
		'secret' => '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',
	]
]);

echo 'JA';

//$client = new AWS\Rekognition\RekognitionClient($args);

$result = $client->detectText([
	//'SimilarityThreshold' => 70,
	'Image' => [ // REQUIRED
		'Bytes' => file_get_contents("colaboramerica.png"),
	],
]);

//var_dump($result);

$result = (array)$result;

foreach ($result as $line) {
    $result = $line;
    break;
}

$result = json_encode($result);
echo '<br>'. print_r($result) . '<br>';