<?php
require '../vendor/autoload.php';  // Подключаем автозагрузчик

use Predis\Client as RedisClient;
use MongoDB\Client as MongoDBClient;
use Dotenv\Dotenv;
use App\RedisSessionHandler;
use App\Model\User;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$redisUrl = "redis://default:HNwRAkScUYSkGuzVDzfmx0V7Jf9oO4Ke@redis-17832.c273.us-east-1-2.ec2.redns.redis-cloud.com:17832";
try {
    $redis = new RedisClient($redisUrl);

    $redis->connect();
} catch (\Exception $e) {
    exit;  
}

session_set_save_handler(new RedisSessionHandler($redis));
session_start();

$mongoUri = "mongodb+srv://nacklank:Gasek123@atlascluster.8lfm3uv.mongodb.net/?retryWrites=true&w=majority&appName=AtlasCluster";
try {
    $mongoClient = new MongoDBClient($mongoUri);
} catch (\Exception $e) {
    exit; 
}

return $mongoClient;
?>