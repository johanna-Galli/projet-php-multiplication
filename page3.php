<!--HEADER-->

<?php
$title = "page3";

include "include/header.php";
?>

<form action="page3" method="post">
    <legend class="text-center p-2">Quelle table voulez-vous tester ?</legend>
    <div class="text-center p-3">
        <div class="d-inline p-3">
            <input type="radio" name="table[]" value="1">Table 1
        </div>
        <div class="d-inline p-3">
            <input type="radio" name="table[]" value="2">Table 2
        </div>
        <div class="d-inline p-3">
            <input type="radio" name="table[]" value="3">Table 3
        </div>
        <div class="d-inline p-3">
            <input type="radio" name="table[]" value="4">Table 4
        </div>
        <div class="d-inline p-3">
            <input type="radio" name="table[]" value="5">Table 5
        </div>
        <div class="d-inline p-3">
            <input type="radio" name="table[]" value="6">Table 6
        </div>
        <div class="d-inline p-3">
            <input type="radio" name="table[]" value="7">Table 7
        </div>
        <div class="d-inline p-3">
            <input type="radio" name="table[]" value="8">Table 8
        </div>
        <div class="d-inline p-3">
            <input type="radio" name="table[]" value="9">Table 9
        </div>
        <div class="d-inline p-3">
            <input type="radio" name="table[]" value="10">Table 10
        </div>
    </div>
    <div class="text-center">
        <button type="submit">valider</button>
    </div>
</form>



<div class="container d-flex justify-content-between mt-5">

    <?php


    if (isset($_POST['table'])) {
        if(!empty($_POST['table'])){
            foreach($_POST['table'] as $value) {
                echo $value;
            }
        }
        formTable($value);
    } else {
       $_POST['table'] = "";
    }



function formTable($facteur){
    ?>
    <form action="#" method="post">
        <legend class="text-center p-2">Table de <?php echo $facteur ?></legend>
    </form>
    <?php
}



    ?>
</div>

<!--FOOTER-->

<?php
include "include/footer.php";
