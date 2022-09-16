<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro de Ativos</title>
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

        section {
            border: 1px solid black;
            border-radius: 8px;
            background: white;
            width: 200px;
            height: 200px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.22);
            box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.22);
        }

        h1 {
            text-transform: uppercase;
            letter-spacing: 2px;
            font-size: 3em;
            margin: 20px;
        }

        img {
            margin: 20px;
        }

        section ul li a {
            text-decoration: none;
            padding: 8px;
            font-weight: bolder;
            color: white;
            text-transform: uppercase;
        }

        section ul {
            width: 100px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        section ul li {
            list-style-type: none;
            padding: 8px;
            margin: 15px;
            width: 150px;
            background: blue;
            border: solid 1px #123112;
            border-radius: 8px;
            text-align: center;
            -webkit-box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.22);
            box-shadow: 5px 5px 15px 5px rgba(0, 0, 0, 0.22);
        }
        </style>
    </head>

    <body>
        <h1>Cadastro de Pessoas</h1>
        <img src="./images/user.png" alt="">
        <section>
            <ul>
                <li><a href="form_cadastro.php">Cadastrar</a></li>
                <li><a href="banco.php">Consultar</a></li>
                <li> <a href="teste_delete.php">Apagar</a></li>
            </ul>
        </section>
    </body>

</html>