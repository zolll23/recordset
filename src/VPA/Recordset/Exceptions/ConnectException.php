<?php
declare(strict_types=1);

namespace VPA\Recordset\Exceptions;

class ConnectException extends \Exception
{

    /**
     * FilesystemException constructor.
     * @param string $string
     */
    public function __construct(string $string)
    {
        parent::__construct($string);
    }
}