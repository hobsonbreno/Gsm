<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Gerência Sorvete Mania</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>

<body>
    <div class="container">
        <nav>
            <ul class="menu">

                <a href="http://pdvsm.000webhostapp.com/login">
                    <li>PDV</li>

            </ul>
            <ul class="menu">

                <a href="">
                    <li>CONTAGEM</li>
            </ul>
            <ul class="menu">

                <a href="http://pdvsm.000webhostapp.com/reports/daily_sales">
                    <li>RELATÓRIOS DE VENDAS </li>
            </ul>
        </nav>
        <section>

            <h1>Contagem Diária</h1>
            <hr><br><br>
            <form method=" POST" action="processa.php">
                <input type="submit" value="Salvar" class="btn">
                <input type="reset" value="Limpar" class="btn">
                <br><br>

                Cone Casquinha<br>
                <input type="text" name="item" class="campo" maxlength="40" required autofocus><br>
                Cone Cascão<br>
                <input type="numero" name="quantidade" class="campo" maxlength="40" required><br>
                Copo 100 ml<br>
                <input type="numero" name="quantidade" class="campo" maxlength="40" required><br>
                Copo de Sundae<br>
                <input type="numero" name="valor" class="campo" maxlength="40" required><br>
                Copo de MilkShake 300 ml<br>
                <input type="numero" name="valor" class="campo" maxlength="40" required><br>
                Copo de MilkShake 400 ml<br>
                <input type="numero" name="valor" class="campo" maxlength="40" required><br>
                Copo de MilkShake 500 ml<br>
                <input type="numero" name="valor" class="campo" maxlength="40" required><br>
                Cobertura de Chocolate<br>
                <input type="numero" name="valor" class="campo" maxlength="40" required><br>
                Cobertura de Morango<br>
                <input type="numero" name="valor" class="campo" maxlength="40" required><br>
                Cobertura de Caramelo<br>
                <input type="numero" name="valor" class="campo" maxlength="40" required><br>
            </form>
        </section>

    </div>

</body>

</html>