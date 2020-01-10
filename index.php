<!------------------------HEADER---------------------------->

<?php
$title = "index";

include "include/header.php";
?>


<div class="container">

    <!---------------MESSAGE DE BIENVENU-------------------->

    <h5 class="text-center">Bonjour à tous et soyez les bienvenus !</h5>

    <p class="mt-3 mb-5 pb-5 text-center">Nous vous proposons aujourd'hui d'apprendre vos tables de multiplications, et de vous tester.</p>


    <!----------------------BOUTONS------------------------->

    <div class="row mt-5">

        <div class="d-inline col-6 mt-0">
            <div class="w-75 h-100 bg-dark mx-auto">
                <a href="page2">
                    <h6 class="text-center text-white p-5 bouton m-0">Apprendre les tables de multiplication</h6>
                </a>
            </div>
        </div>

        <div class="d-inline col-6 mt-0">
            <div class="w-75 h-100 bg-dark mx-auto">
                <a href="page3">
                    <h6 class="text-center text-white p-5 bouton m-0">Testez vos connaissances</h6>
                </a>
            </div>
        </div>
    </div>
</div>


<!-------------------------FOOTER--------------------------->
<?php
include "include/footer.php";
