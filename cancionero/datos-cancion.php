<?php
    include_once "../includes/himjovenes.php";
    include_once "../includes/himpoder.php";
    include_once "../includes/himverde.php";
    $himnario;

    $idcancion = $_POST["id"];
    $himnarioSeleccionado = $_POST["him"];

    if($himnarioSeleccionado == "3") {
        $himnario = new HimJovenes();
        $resultado = $himnario -> mostrarCancion($idcancion);

        echo '<div class="modal-header">';
        echo '<h5 class="modal-title" id="staticBackdropLabel">';
        echo $resultado -> idcancion . '. ' . $resultado -> titulo . ' <span class="fs-6">(' . $resultado -> nota . ')</span><br><span class="fs-6">' . $resultado -> autor . '</span> |<a href="' . $resultado -> enlace .'" class="btn text-success" target="_blanck">Escuchar</a>';
        echo '</h5>';
        echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        echo '</div>';
        echo '<div class="modal-body" id="modal-mostrar-letra">' . nl2br(str_replace(array('%', '#'), array('<i>', '</i>'),$resultado -> letra)) . '</div>';
        echo '<div class="modal-footer"></div>';
    }

    if($himnarioSeleccionado == "2") {
        $himnario = new HimPoder();
        $resultado = $himnario -> mostrarCancion($idcancion);

        echo '<div class="modal-header">';
        echo '<h5 class="modal-title" id="staticBackdropLabel">';
        echo $resultado -> idcancion . '. ' . $resultado -> titulo . ' <span class="fs-6">(' . $resultado -> nota . ') | H.P.</span>';
        echo '</h5>';
        echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        echo '</div>';
        echo '<div class="modal-body" id="modal-mostrar-letra">' . nl2br(str_replace(array('%', '#'), array('<i>', '</i>'),$resultado -> letra)) . '</div>';
        echo '<div class="modal-footer"></div>';
    }

    if($himnarioSeleccionado == "1") {
        $himnario = new HimVerde();
        $resultado = $himnario -> mostrarCancion($idcancion);

        echo '<div class="modal-header">';
        echo '<h5 class="modal-title" id="staticBackdropLabel">';
        echo $resultado -> idcancion . '. ' . $resultado -> titulo . ' <span class="fs-6">(' . $resultado -> nota . ') | H.V.</span>';
        echo '</h5>';
        echo '<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
        echo '</div>';
        echo '<div class="modal-body" id="modal-mostrar-letra">' . nl2br(str_replace(array('%', '#', '----'), array('<div class="ms-4 fst-italic">', '</div>', '<div class="text-center mt-4">---- o ----</div>'),$resultado -> letra)) . '</div>';
        echo '<div class="modal-footer"></div>';
    }
?>