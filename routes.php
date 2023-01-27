<?php

/* home page */
$router->get('', function() {
    require 'controllers/home.php';
});

/* list livros */
$router->get('livros', function() {
    require 'controllers/livros.index.php';
});
$router->get('livros.ajax', function() {
    require 'controllers/ajax/livros.index.php';
});

/* show livro with id */
$router->get('livros/(\d+)', function($id) {
    require 'controllers/livros.show.php';
});

/* delete livro */
$router->delete('livros/(\d+)', function($id) {
    require 'controllers/livros.delete.php';
});

/* add livro */
$router->post('livros.ajax', function() {
    require 'controllers/ajax/livros.store.php';
});

/* edit livro */
$router->get('livros/(\d+)/edit', function($id) {
    require 'controllers/livros.edit.php';
});
$router->patch('livros/(\d+)', function($id) {
    require 'controllers/livros.update.php';
});

$router->patch('livros.ajax/(\d+)', function($id) {
    require 'controllers/ajax/livros.update.php';
});
