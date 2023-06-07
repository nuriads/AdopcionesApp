<?php
    // Obtener el término de búsqueda del formulario
    $query = $_GET['query'];

    // Realizar la búsqueda en tu web
    $resultados = buscarEnTuWeb($query);

    // Mostrar los resultados
    if (!empty($resultados)) {
       
        /* foreach ($resultados as $resultado) {
            echo "<p>$resultado</p>";
        } */
    } else {
        echo "<p>No se encontraron resultados para '$query'.</p>";
    }





    function buscarEnTuWeb($query) {
        // Aquí puedes definir la lógica de búsqueda en tu web
        // Puedes buscar en una base de datos, en archivos o en cualquier otra fuente de datos
    
        // Por simplicidad, aquí hay un ejemplo que busca en un arreglo de términos
        $terminos = array("gato", "perro", "huron");
    
        $resultados = array();
        foreach ($terminos as $termino) {
            if (stripos($termino, $query) !== false) {
                $resultados[] = $termino;
               
            }
           
        }

        if($resultados[0] == 'gato'){
            header("Location: ../content/mascotas/gatos.php");
        }
        return $resultados;
    }
    ?>
