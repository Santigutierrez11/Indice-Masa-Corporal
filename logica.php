<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <title>IMC</title>
</head>
<body>
    <main>
        <section class="contenedor">
            <center>
                <?php
                    error_reporting(E_ERROR);
                    function etapadevida($edad) {
                        if($edad <= 3){
                            $etapavida = "Prenatal";
                            echo $etapavida;
                        }elseif ($edad <= 6){
                            $etapavida = "Niñes Temprna";
                            echo $etapavida;
                        }elseif ($edad <= 11){
                            $etapavida = "Niñes Media";
                            echo $etapavida;
                        }elseif ($edad <= 20){
                            $etapavida = "Adolescencia";
                            echo $etapavida;
                        }elseif ($edad <= 40){
                            $etapavida = "Juventud";
                            echo $etapavida;
                        }elseif ($edad <= 65){
                            $etapavida = "Adultez Media";
                            echo $etapavida;
                        }else{
                            $etapavida = "Adultez Tardia";
                            echo $etapavida;
                        }
                    }
                    
                    $estatura = $_POST['estatura'];
                    $peso = $_POST['peso'];
                    $edad = $_POST['edad'];
                    $imc = $peso / ($estatura * $estatura);
                    
                    
                    if ($peso == "" || $estatura == ""){
                        echo "Ingrese un dato para consultar";
                    }elseif ($imc <= 18.5){
                        echo "Su IMC es de: ", $imc, " <br> Su estado es <b>(Bajo Peso)</b> <br> Su etapa de vida es: ", etapadevida($edad); 
                    }elseif ($imc <= 24.9) {
                        echo "Su IMC es de: ", $imc, " <br> Su estado es <b>(Normal)</b> <br> Su etapa de vida es: ", etapadevida($edad); 
                    }elseif ($imc <= 29.9) {
                        echo "Su IMC es de: ", $imc, " <br> Su estado es <b>(Sobrepeso) Alimentese Bien</b> <br> Su etapa de vida es: ", etapadevida($edad);
                    }elseif ($imc <= 34.9) {
                        echo "Su IMC es de: ", $imc, " <br> Su estado es <b>(Obesidad I) Sal a Trotar</b> <br> Su etapa de vida es: ", etapadevida($edad);
                    }elseif ($imc <= 39.9) {
                        echo "Su IMC es de: ", $imc, " <br> Su estado es <b>(Obesidad II) Empieze a realizar ejercicio</b> <br> Su etapa de vida es: ", etapadevida($edad);
                    }elseif ($imc <= 49.9) {
                        echo "Su IMC es de: ", $imc, " <br> Su estado es <b>(Obesidad III) Gordo TripleHP</b> <br> Su etapa de vida es: ", etapadevida($edad);
                    }else {
                        echo "Su IMC es de: ", $imc, " <br> Su estado es <b>(Obesidad IV) Deja de comer GORDO Tentriple... Q te vas a morir </b> <br> Su etapa de vida es: ", etapadevida($edad);
                    }
                
                ?>
            </center>
        </section>
    </main>
</body>
</html>

