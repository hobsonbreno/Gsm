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

            <h1>CADASTRO DE DESPESAS</h1>
            <hr><br><br>
            <form method=" POST" action="processa.php">
                <input type="submit" value="Salvar" class="btn">
                <input type="reset" value="Limpar" class="btn">
                <br><br>

                Item<br>
                <input type="text" name="item" class="campo" maxlength="40" required autofocus><br>
                Qantidade<br>
                <input type="numero" name="quantidade" class="campo" maxlength="40" required><br>
                Valor<br>
                <input type="numero" name="valor" class="campo" maxlength="40" required><br>
            </form>
        </section>

    </div>

</body>

</html>