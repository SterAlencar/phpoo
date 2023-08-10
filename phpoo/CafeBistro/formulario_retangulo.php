<!DOCTYPE html>
<html>
<head>
    <title>Ex. Formulário Retangulo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css\styles.css">
</head>
<body>
    <div class="container">
        <h3>Preencha os Dados</h3>
        <form method="post">
            <div class="form-group">
                <label for="altura">Altura do Retangulo:</olabel>
                <input type="number" class="form-control" id="altura" name="altura" required>
            </div>
            <div class="form-group">
                <label for="largura">Largura do Retangulo:</label>
                <input type="number" class="form-control" id="largura" name="largura" required>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
        
        <?php

        include 'retangulo.php';
        if ($_SERVER["REQUEST_METHOD"]== "POST") {
            $altura = $_POST['altura'];
            $largura = $_POST['largura'];

            $area1 = new Retangulo($altura, $largura);
            echo "<br> Área do retangulo = " .$area1->calcular_area();
            echo "<br> Perímetro do retangulo = " .$area1->calcular_perimetro();

        }

        ?>

    </div>
</body>
</html>