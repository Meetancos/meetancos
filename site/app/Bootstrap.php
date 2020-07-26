<?php

namespace App;

use Dotenv\Dotenv;

class Bootstrap
{
    const ENV_PRODUCTION = 'production';
    const ENV_DEVELOPMENT = 'local';

    public function load()
    {
        $dotenv = Dotenv::createMutable(__DIR__ . '/../');
        $dotenv->load();

        require_once __DIR__ . '/../routes/web.php';
    }
}
