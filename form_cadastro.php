<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background: #ddd;
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
            height: 40vh;
            border-radius: 8px;
            background: white;
            -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.22);
            box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.22);
        }
        </style>
    </head>

    <body>
        <fieldset>
            <legend>Cadastro</legend>
            <form action="insere.php" method="post">
                <label for="">Nome:</label><input type="text" name="nome">
                <label for="">Telefone:</label><input type="text" name="telefone">
                <label for="">Setor:</label><input type="text" name="setor">
                <label for="">Email:</label><input type="email" name="email">
                <div></div>
                <div class='action'>
                    <input type="submit" value="Cadastrar">
                    <input type="reset" value="Limpar">
                </div>
            </form>
        </fieldset>
    </body>

</html>