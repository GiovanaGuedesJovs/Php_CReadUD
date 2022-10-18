<!DOCTYPE html>

    <html>
        <head>
            <title>Todas Disciplinas</title>
        </head>
        <body>
            <?php
                require_once "Disciplina.class.php";
                $objetoDisciplina = new Disciplina();
                $disciplinas = $objetoDisciplina->buscarTodasDisciplinas();
                //var_dump($disciplinas);
                echo "<br>";
                foreach($disciplinas as $dc){
                    echo $dc["nome"]."<br>";
                    echo $dc["cargaHoraria"]."<br>";
                    echo $dc["ementa"]."<br>";
                    echo "<br>";
                }
            ?>
        </body>
    </html>
