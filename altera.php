<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .btn {
        background: red;
        padding: 10px;
        width: 100px;
        margin: 20px;
        text-align: center;
        border: solid 1px black;
        border-radius: 8px;
    }

    a {
        text-decoration: none;
        font-family: Arial, Helvetica, sans-serif;
        text-transform: uppercase;
        color: white;
        background: red;
    }

    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: start;
        height: 100vh;
        background: #ddd;
        padding-top: 40px;
    }

    form {
        display: grid;
        grid-template-columns: 0.5fr 1fr;
        align-items: center;
        gap: 8px;
        justify-content: center;
        margin: 20px;
        text-transform: uppercase;
    }

    input {
        height: 30px;
        border-radius: 3px;
        outline: none;
        border: none;
        background: #ddd;
        text-align: justify;
        padding-left: 8px;
    }

    .action {
        display: flex;
        justify-content: space-around;
    }

    label {
        text-align: end;
    }

    legend {
        margin: 10px;
        text-transform: uppercase;
        font-weight: bolder;
    }

    [type="submit"] {
        background: blueviolet;
        height: 30px;
        width: 100px;
        color: white;
        text-transform: uppercase;
        border-radius: 5px;
    }

    [type="reset"] {
        background: rgb(60, 17, 100);
        height: 30px;
        width: 100px;
        color: white;
        text-transform: uppercase;
        border-radius: 5px;
        text-align: center;
    }

    fieldset {
        width: 50vw;
        height: 30vh;
        border-radius: 8px;
        background: white;
        -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.22);
        box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.22);
    }

    .hiden{
        display: none;
    }
    </style>

    <body> <?php
        $id = $_GET["id"];


        $conecta = mysqli_connect('localhost', 'root', '123456') or print("ERRO");
        mysqli_select_db($conecta, 'ilgner') or print("ERRO");
        $sql = "SELECT * FROM cadastro where id = $id";
        $result = mysqli_query($conecta, $sql);

        /* Escreve resultados até que não haja mais linhas na tabela */




        while ($consulta = mysqli_fetch_array($result)) {


            echo  "<fieldset>";
            echo  "<legend>Cadastro</legend>";
            echo  "<form action='alterar_banco.php' method='post'>";
            echo  "<label for=''class='hiden'>ID:</label><input type='text' name='id' value='$consulta[id]' class='hiden'>";
            echo  "<label for=''>Nome:</label><input type='text' name='nome' value=' $consulta[nome]'>";
            echo "<label for=''>Telefone:</label><input type='text' name='telefone' value='$consulta[telefone]'>";
            echo  "<label for=''>Setor:</label><input type='text' name='setor' value='$consulta[setor]'>";
            echo " <label for=''>Email:</label><input type='email' name='email'value='$consulta[email]'>";
            echo "<div></div>";
            echo "<div class='action'>";
            echo "<input type='submit' value='Cadastrar'>";
            echo "<input type='reset' value='Limpar'>";
            echo "</div>  </form> </fieldset>";
        }
        mysqli_free_result($result);
        mysqli_close($conecta);










        ?> </div>
        <div class="btn">
            <a href="banco.php">Voltar</a>
        </div>

        <script></script>
    </body>

</html>