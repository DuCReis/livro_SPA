<ul class="list-group mt-4">
    <?php
    foreach($livros as $livro) {
        ?>
        <li class="list-group-item">
        <a href="<?php echo route('livros/'.$livro->id);?>"><?php echo $livro->nome; ?> (<?php echo $livro->editora->nome; ?>)</a>
        <span class="badge bg-secondary"><?php echo $livro->pags; ?></span>
        <a livroid="<?php echo $livro->id; ?>" class="deleteButton m-1 btn btn-danger float-end" href="#" role="button">Delete</a>
        <button livroid="<?php echo $livro->id; ?>" type="button" class="editButton m-1 btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#editModal">
        Editar
        </button>
        </li>
        <?php
    }
    ?>
</ul>