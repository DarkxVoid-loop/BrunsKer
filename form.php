<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'imoveis');



if(isset($_POST['submite'])
{
    $name = $_POST['nome'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $city = $_POST['cidade'];
    $uf = $_POST['estado'];

    $query = "INSERT INTO catalogo ('nome', 'email', ´phone', 'cep', 'rua', 'bairro', 'cidade', 'estado') VALUES ('$name', '$email', '$phone', '$cep', '$rua', '$bairro', '$city', '$uf' )";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: index.html'); 
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }

}
?>
