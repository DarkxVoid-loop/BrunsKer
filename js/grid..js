
function getRegister() {
    $.ajax({
        url: 'http://localhost/Documents/BrunSker/selecionar.php',
        method: 'GET',
        dataType: 'json'
    }).done(function(result){
        console.log(result);

        for (var i = 0; i < result.length; i++) {
            $('.card-wrapper').prepend('<div class="card-item"><img src="images/carrossel1.jpg" alt="Car" /><div class="card-content"><h3>' + result[i].pname + '</h3><p>' + result[i].cep + '</p><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">I Want This</button></div></div>');
        }
    });
}

getRegister();