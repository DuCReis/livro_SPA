/**
 * On document ready
 */
$(document).ready(function (){
    loadLivros();
    $('#insertButton').click(function (){
        createLivro(
            $('#formInsertLivro [name="nome"]').val(),
            $('#formInsertLivro [name="editora_id"]').val(),
            $('#formInsertLivro [name="pags"]').val()
        );
        $('#formInsertLivro')[0].reset();
        $('#insertModal').modal('toggle');
    })
});

/**
 * Set loading gif animation
 */
function setLoading() {
    $('#listLivros').html('<img src="http://localhost:8000/static/images/loading-bar.gif" />');
}

/**
 * Make an AJAX request to the server to retrieve livros
 */
function loadLivros() {
    setLoading();
    $.ajax({
        type: 'GET',
        url: 'http://localhost:8000/livros.ajax',
        success: function (data) {
            $('#listLivros').html(data);
            $('.deleteButton').click(function () {
                deleteLivro($(this).attr('livroid'))
            });
        },
    });
}

function updateLivro(id){
    $.ajax({
        type: 'POST',
        url: 'http://localhost:8000/livros/'+id,
        data: { '_method' : 'PATCH'},
        success: function () {
            loadLivros();
        }
    });
}

function createLivro(nome, editora_id, pags) {
    $.ajax({
        type: 'POST',
        url: 'http://localhost:8000/livros.ajax',
        data: {
            'nome': nome,
            'editora_id': editora_id,
            'pags': pags
        },
        success: function () {
            loadLivros();
        }
    });
}

/**
 * Make an AJAX request to delete
 * @param {int} id 
 */
function deleteLivro(id) {
    $.ajax({
        type: 'POST',
        url: 'http://localhost:8000/livros/'+id,
        data: { '_method' : 'DELETE'},
        success: function () {
            loadLivros();
        }
    });
}