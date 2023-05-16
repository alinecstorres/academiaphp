<!DOCTYPE html>
<html>
    <head>
        <title>Dados IMC</title>
        <style>
            body { text-align:center; }

            .retangulo {margin: auto; border: 1px solid black;
            position: relative;}

            #ret {width: 450px; background-color: georgian;}

            #ret div {
            margin: 20px auto;
            width: 50px;
            height: 50px;
            }
        </style>
    </head>
    <body>
        <div id="ret" class="retangulo" style="text-align: center;">
        <br />
        <label id="texto01">CÁLCULO IMC</label>
        <br /><br />
        <form action="script.php" method="post">
            <p>Nome: <input type="text" name="nome" placeholder="Digite seu nome"/></p>
            <p>Idade: <input type="number" name="idade"/></p>
            <p>Peso: <input type="number" name="peso" min="0" step=".01" /></p>
            <p>Altura: <input type="number" name="altura" min="0" step=".01" /></p>
            <p><input type="submit" name="submit" value="calcular"
            /></p>
        </form>
        <a href="listacadastros.php"><button>Lista de cadastros</button></a>
        <br />
        <br />
        </div>
    </body>
</html>