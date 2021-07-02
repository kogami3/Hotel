<?php
$titulo_pagina = "Reserva Hotel";

include '../head.php';

include "../controllers/reserva_controller.php";





// print_r($dataSede);

?>


<?php
echo "<form>";
echo "<div class='mb-3'>";
echo  "<label for='Sede' class='form-label'>Seleccionar Sede</label>";

echo "</div>";
echo " <select class='form-select form-select-lg mb-3' aria-label='.form-select-lg example' id='Sede'>";
for ($i = 0; $i < count($dataSede); $i++) {

    echo "<option value='{$dataSede[$i]['IdSede']}'>{$dataSede[$i]['Nombre_Sede']}</option>";
}

echo "</select>";

echo "<div class='mb-3'>";
echo  "<label for='numero_habitaciones' class='form-label'>Numero Habitaciones</label>";
echo  "<input type='number' class='form-control' id='numero_habitaciones' placeholder='-'>";
echo "</div>";

echo "<div class='mb-3'>";
echo  "<label for='numero_habitaciones' class='form-label'>Numero Habitaciones</label>";
echo  "<input type='date' class='form-control' id='numero_habitaciones' placeholder='-'>";
echo "</div>";
echo "</form>";



include '../footer.php';
