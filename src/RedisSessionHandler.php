<?php
namespace App;

use Predis\Client;

class RedisSessionHandler implements \SessionHandlerInterface {
    private $redis;

    public function __construct(Client $redis) {
        $this->redis = $redis;
    }

    public function open($savePath, $sessionName) {
        return true;
    }

    public function close() {
        return true;
    }

    public function read($id) {
        return $this->redis->get($id) ?: '';
    }

    public function write($id, $data) {
        $this->redis->setex($id, ini_get('session.gc_maxlifetime'), $data);
        return true;
    }

    public function destroy($id) {
        $this->redis->del($id);
        return true;
    }

    public function gc($maxlifetime) {
        return true;
    }
}
?>