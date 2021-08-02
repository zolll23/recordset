<?php
declare(strict_types=1);

namespace VPA\Recordset\DBDrivers;

use VPA\Recordset\DBDriver;

class MySQLi extends DBDriver
{
    private \mysqli $connect;
    /**
     * @param array $credentials
     */
    public function __construct(array $credentials)
    {
        parent::__construct($credentials);
        $this->connect = new \mysqli(
          $this->credentials['hostname'],
          $this->credentials['username'],
          $this->credentials['password'],
          $this->credentials['database'],
        );
    }
}