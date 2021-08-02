<?php
declare(strict_types=1);

namespace VPA\Recordset;

class Connect
{
    private DBDriver $driver;

    /**
     * @throws Exceptions\ConnectException
     */
    function __construct(array $credentials)
    {
        if (!isset($credentials['type'])) {
            throw new Exceptions\ConnectException("Type of database not set");
        }
        switch ($credentials['type']) {
            case 'mysqli':
            $this->driver = new DBDrivers\MySQLi($credentials);
        }
    }

    function query(string $query)
    {
        $result = $this->driver->query($query);
        return $result;
    }
}