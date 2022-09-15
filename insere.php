<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    
.btn{
    background: red;
    padding:10px;
    width: 100px;
    margin: 20px;
    text-align: center;
    border:solid 1px black;
    border-radius: 8px;
}
a{
    text-decoration: none;
    font-family: Arial, Helvetica, sans-serif;
    text-transform: uppercase;
    color:white;
    background: red;
}
</style>
<body>
    <?php
  $nome = $_POST["nome"];
  $telefone = $_POST["telefone"];
  $setor = $_POST["setor"];
  $email = $_POST["email"];
  

  

  $conecta = mysqli_connect('localhost', 'root', '123456') or print("ERRO"); 
  mysqli_select_db( $conecta,'ilgner') or print("ERRO"); 

  
$sql = "INSERT INTO cadastro (nome , telefone , setor , email) VALUES ('$nome' , '$telefone' , '$setor' , '$email')";
if (mysqli_query($conecta, $sql)) {
      echo "<h1>SALVO COM SUCESSO ";
     
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conecta);
}
mysqli_close($conecta);
echo "<a class='btn' href="."index.php".">"."Voltar</a>";

?>
</body>
</html>