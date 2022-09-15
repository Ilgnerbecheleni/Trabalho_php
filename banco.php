<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/e91e8bd13f.js" crossorigin="anonymous"></script>
    <title>Dados</title>
    <style>
        *{
    margin:0;
    padding: 0;
}


body{
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: start;
    height: 100vh;
    background: #ddd;
    padding-top: 40px;
}

table{
    
   width: 90vw;
   border-collapse: collapse;
   
}


th , td
{
    border:solid 1px black;
    padding: 8px;
    width: auto;
    border-radius: 10px;
}



.btn{
    background: red;
    padding:10px;
    width: 100px;
    margin: 20px;
    text-align: center;
    border:solid 1px black;
    border-radius: 8px;
}
.apaga{
background: none;
border:none;
cursor: pointer;

}

.center{
    text-align: center;
}
a{
    text-decoration: none;
    font-family: Arial, Helvetica, sans-serif;
    text-transform: uppercase;
    color:white;
}
h1{
    text-transform: uppercase;
    font-size: 2em;
}


    </style>
</head>
<body>



<h1>Tabela de Cadastro</h1>
<div>


<?php 
$conecta = mysqli_connect('localhost', 'root', '123456') or print("ERRO"); 
mysqli_select_db( $conecta,'ilgner') or print("ERRO"); 
$sql = "SELECT * FROM cadastro"; 
$result = mysqli_query($conecta, $sql ); 
 
/* Escreve resultados até que não haja mais linhas na tabela */ 
 
echo "<table>";
echo "
<tr>
<th>
Id
</th>
<th>
Nome
</th>
<th>
Telefone
</th>
<th>
Setor
</th>
<th>
Email
</th>
</tr>

";
while($consulta = mysqli_fetch_array($result)) { 
 
    echo "<tr>";
    echo "<td class='center'> $consulta[id]</td> ";
    echo "<td> $consulta[nome]</td> ";
    echo "<td> $consulta[telefone]</td> ";
    echo "<td> $consulta[setor]</td> ";
    echo "<td> $consulta[email]</td> ";
    echo "<td class='center'> <button class='apaga center'><i class='fa-solid fa-trash '></i></button>";
    echo "</tr>";



  
 } 
 mysqli_free_result($result); 
 mysqli_close($conecta); 





echo"</table>";




?>
</div>

<div class="btn">
    <a href="index.php">Voltar</a>
</div>


</body>
</html>