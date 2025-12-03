<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>PHP index leht</title>
    <link rel="stylesheet" href="style/style.css">
    <script src="js/joonisScript.js"></script>
    <script src="js/"></script>

</head>
<body>
<!--header-->
<?php
include("header.php");
?>
<!--navegeerimismenüü-->
<?php
include("nav.php");
?>
<!--content kaustast failide sisud-->
<main>
    <div class="flex-container">

        <div>PHP - Skriptikeel – skript teeb oma tööd pärast seda, kui toimus mingi sündmus.
            Orienteeritud programmeerija eesmärkide saavutamiseks (mugavus on tähtsam kui vastavus standarditele).
            Serveripoolne keel.
            Platvormist sõltumatu.
            Saab kasutada nii HTML-i sees (HTML embedded), kui ka eraldiseisvana skriptina.</div>
        <div>
            <?php
            if(isset($_GET["leht"])){
                include('content/'.$_GET["leht"]);
            } else {
                include('content/avaleht.php');
            }
            ?>
        </div>
        <div>

            <img src="image/php.png" alt="PHP pilt" width="25%" height="25%">
        </div>
    </div>
</main>
<!--footer-->
<?php
include("footer.php");
?>
</body>
</html>
