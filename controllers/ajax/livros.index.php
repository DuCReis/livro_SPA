<?php

use App\Database\Connection;
use App\Database\QueryBuilder;

$connection = Connection::make();
$queryBuilder = new QueryBuilder($connection);

$livros = $queryBuilder->getAll('livro','App\Model\Livro');
// fill relationship
foreach ($livros as $livro) {
    $livro->editora = $queryBuilder->findById('editora',$livro->editora_id,'App\Model\Editora');
}

sleep(2);
require 'views/ajax/livros.index.view.php';