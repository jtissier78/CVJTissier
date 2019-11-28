<?php require_once "template/langage.php";?>
<?php $_SESSION['pageActive']='About';?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="fr-FR" xml:lang="fr-FR">
    <?php require_once "template/head.php";?>
    <body>

    <header id="descriptionPage"></header>

    <main>
        <aside id="CVDownload"></aside>
        <div id="lineUp">
            <div id="Title"></div>

            <?php require_once "template/navBar.php" ;?>
        </div>
        <div id="lineDown">
            <?php require_once "template/InfoGen.php"; ?>

            <div id="Content"></div>

        </div>
    </main>
        
    <?php require "template/footer.php"; ?>

    </body>
</html>