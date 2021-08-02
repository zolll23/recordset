<?php
declare(strict_types=1);

namespace VPA\Recordset;

abstract class DBDriver
{
    protected array $credentials = [];

    function __construct(array $credentials)
    {
        $this->credentials = $credentials;
    }

    /**
     * @param string $query
     * @return mixed
     */
    public function query(string $query)
    {
    }
}