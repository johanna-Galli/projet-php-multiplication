<!--HEADER-->

<?php
$title = "page2";

include "include/header.php";

//<!--CONTENU-->

//echo "<p>Choisissez une table :</p>";

?>

<form action="page2" method="post">
    <fieldset >
        <legend class="text-center p-2">Sélectionnez les tables que vous souhaitez apprendre :</legend>
        <div class="text-center p-3">
            <div class="d-inline p-3">
                <input type="checkbox" name="table1">
                <label>Table de 1</label>
            </div>
            <div class="d-inline p-3">
                <input type="checkbox" name="table2">
                <label>Table de 2</label>
            </div>
            <div class="d-inline p-3">
                <input type="checkbox" name="table3">
                <label>Table de 3</label>
            </div>
            <div class="d-inline p-3">
                <input type="checkbox" name="table4">
                <label>Table de 4</label>
            </div>
            <div class="d-inline p-3">
                <input type="checkbox" name="table5">
                <label>Table de 5</label>
            </div>
            <div class="d-inline p-3">
                <input type="checkbox" name="table6">
                <label>Table de 6</label>
            </div>
            <div class="d-inline p-3">
                <input type="checkbox" name="table7">
                <label>Table de 7</label>
            </div>
            <div class="d-inline p-3">
                <input type="checkbox" name="table8">
                <label>Table de 8</label>
            </div>
            <div class="d-inline p-3">
                <input type="checkbox" name="table9">
                <label>Table de 9</label>
            </div>
            <div class="d-inline p-3">
                <input type="checkbox" name="table10">
                <label>Table de 10</label>
            </div>
        </div>
        <div class="text-center">
            <button type="submit">valider</button>
        </div>
        </div>
    </fieldset>
</form>



<?php


if (isset($_POST['table1'])){
    echo "table1";
}
if (isset($_POST['table2'])){
    echo "table2";
}
if (isset($_POST['table3'])){
    echo "table3";
}
if (isset($_POST['table4'])){
    echo "table4";
}
if (isset($_POST['table5'])){
    echo "table5";
}
if (isset($_POST['table6'])){
    echo "table6";
}
if (isset($_POST['table7'])){
    echo "table7";
}
if (isset($_POST['table8'])){
    echo "table8";
}
if (isset($_POST['table9'])){
    echo "table9";
}
if (isset($_POST['table10'])){
    echo "table10";
}




$un = 1;
$deux = 2;

for ($a = 1; $a <= 10; $a++) {
    $facteur = $a;
    for ($b = 1; $b <= 10; $b++) {
        $multiple = $b;
        $result = $facteur * $multiple;
        //echo $result;
    }
    echo "<br>";
}



//<!--FOOTER-->

include "include/footer.php";
