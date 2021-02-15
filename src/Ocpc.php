<?php
namespace Webguosai\LaravelOcpc;

use Illuminate\Session\SessionManager;
use Illuminate\Config\Repository;

class Ocpc
{
    /**
     * @var SessionManager
     */
    protected $session;
    /**
     * @var Repository
     */
    protected $config;
    /**
     * Packagetest constructor.
     * @param SessionManager $session
     * @param Repository $config
     */
    public function __construct(SessionManager $session, Repository $config)
    {
        $this->session = $session;
        $this->config = $config;
    }
    /**
     * @param string $msg
     * @return string
     */
    public function test($msg = '')
    {
        //获取配置
        $config = $this->config->get('ocpc');
        //dump($config);
        return $msg.' <strong>from your custom develop package!</strong>>';
    }
}
