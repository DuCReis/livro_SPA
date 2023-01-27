<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Livros</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
  <!-- Insert Modal -->
  <div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="insertModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="insertModalLabel">Inserir Livro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="formInsertLivro">
            <div class="mb-3">
              <input type="text" class="form-control" name="nome" placeholder="Insira o nome do livro" required>
            </div>
            <div class="mb-3">
              <select class="form-select" name="editora_id">
                <?php
                  foreach($editoras as $editora) {
                    ?>
                    <option value="<?php echo $editora->id; ?>"><?php echo $editora->nome; ?></option>
                    <?php
                  }
                ?>
              </select> 
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="pags" placeholder="Insira o número de páginas" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button id="insertButton" type="button" class="btn btn-primary">Inserir</button>
        </div>
      </div>
    </div>
  </div>
    <!-- Edit Modal -->
  <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="editModalLabel">Editar Livro</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="formEditLivro">
            <div class="mb-3">
            <input type="text" class="form-control" name="nome" value="<?php echo $livro2->nome; ?>" required>
            </div>
            <div class="mb-3">
              <select class="form-select" name="editora_id">
                <?php
                  foreach($editoras as $editora) {
                    ?>
                    <option value="<?php echo $editora->id; ?>"><?php echo $editora->nome; ?></option>
                    <?php
                  }
                ?>
              </select> 
            </div>
            <div class="mb-3">
              <input type="text" class="form-control" name="pags" placeholder="Insira o número de páginas" required>
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
          <button id="editButton" type="button" class="btn btn-primary">Update</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <h1>Livros</h1>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#insertModal">
      Inserir
    </button>
    <div id="listLivros"></div>
  </div>
  <script src="static/js/app.js"></script>
</body>
</html>