<?php
declare(strict_types=1);

namespace VPA\Recordset;

class Recordset
{
    private Connect $connect;

    function __construct(DBDriver $driver)
    {
        $this->driver = $driver;
    }
}