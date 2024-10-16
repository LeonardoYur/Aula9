<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recebe dados</title>
</head>
<body>
    <form action="salva.php" method="post">
	<label for="titulo">Titulo:</label>
	<input type="text" name="titulo"><br>
	<label for="idioma">Idioma:</label>
	<input type="text" name="idioma"><br>
    <label for="quant">Quantidade de páginas:</label>
	<input type="number" name="quant"><br>
    <label for="editora">Editora:</label>
	<input type="text" name="editora"><br>
    <label for="data">Data publicação:</label>
	<input type="date" name="data"><br>
    <label for="isbn">ISBN:</label>
	<input type="text" name="isbn"><br>
	<input type="submit"><br>
    </form>
</body>
</html>