<?php

declare(strict_types=1);

namespace FreeId\Postgresql;

use FreeId\Core\Concerns\Database;
use FreeId\Contracts\SqlDatabase as SqlDatabaseContract;
use FreeId\Core\Parser as BaseParser;

class Parser extends BaseParser implements SqlDatabaseContract
{
    use Database;

    public function __construct(
        string $host,
        string $port,
        string $db,
        string $table,
        array  $credentials,
        string $column = 'id',
        string $charset = 'utf8',
        int    $start_id = 1,
    ) {
        parent::__construct([], $start_id);
        $this->host = $host;
        $this->port = $port;
        $this->db = $db;
        $this->table = $table;
        $this->credentials = $credentials;
        $this->column = $column;
        $this->charset = $charset;
    }
    
    public function find(): int
    {
        $this->data = $this->getData(
            'pgsql:host=' . $this->host . ';port=' . $this->port . ';dbname=' . $this->db . ';options=\'--client_encoding=' . $this->charset . '\'',
            $this->credentials,
            $this->table,
            $this->column,
        );

        return $this->enumerate();
    }
}
