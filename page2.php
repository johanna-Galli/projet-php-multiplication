<!--HEADER-->

<?php
$title = "page2";

include "include/header.php";

//<!--CONTENU-->

//echo "<p>Choisissez une table :</p>";

?>

<form action="page2" method="post">
    <fieldset>
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


<div>

<?php


if (isset($_POST['table1'])) {
    table(1);
}

if (isset($_POST['table2'])) {
    table(2);
}

if (isset($_POST['table3'])) {
    table(3);
}

if (isset($_POST['table4'])) {
    table(4);
}

if (isset($_POST['table5'])) {
    table(5);
}

if (isset($_POST['table6'])) {
    table(6);
}

if (isset($_POST['table7'])) {
    table(7);
}

if (isset($_POST['table8'])) {
    table(8);
}

if (isset($_POST['table9'])) {
    table(9);
}

if (isset($_POST['table10'])) {
    table(10);
}


function table($facteur)
{
    echo '<span class="table">';
    echo "Table de $facteur : <br>";
    for ($a = 1; $a <= 10; $a++) {
        $result = $facteur * $a;
        $tableau = array($a => "$facteur x $a = $result");
        foreach ($tableau as $value) {
            echo $value . "<br>";
        }
    }
    echo '</span>';

}

?>

</div>

<?php


//<!--FOOTER-->

include "include/footer.php";
