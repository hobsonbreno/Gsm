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
                <li>Pdv</li>
                <li>Cadastro</li>
                <li>Contagem</li>
                <li>Fechamento de Caixa</li>
                <li>Relatorios</li>
            </ul>
        </nav>
        <section>

            <h1>Cadastro de Despesas</h1>
            <hr><br><br>
            <form method="POST" action="processa.php">
                <input type="submit" value="Salvar" class="btn">
                <input type="reset" value="Limpar" class="btn">
                <br><br>

                Item<br>
                <input type="text" name="item" class="campo" maxlength="40" required autofocus><br>
                Quantidade<br>
                <input type="numero" name="quantidade" class="campo" maxlength="40" required><br>
                Valor<br>
                <input type="numero" name="valor" class="campo" maxlength="40" required><br>
            </form>
        </section>
    </div>

</body>

</html>