<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe dados</title>
</head>
<body>
    <form action="salva.php" method="post">
	<label for="nome">Nome:</label>
	<input type="text" name="nome"><br>
	<label for="pontos">Pontos:</label>
	<input type="number" name="pontos"><br>
	<input type="submit"><br>
    </form>
    <a href="mostrar.php" class="btn btn-primary">Mostrar</a><br><br>
</body>
</html>