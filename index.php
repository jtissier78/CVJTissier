<?php session_start(); ?>
<?php $_SESSION['pageActive']='About';?>
<!DOCTYPE html>
<html lang="fr">
    <?php require_once "CommunContent/head.php";?>
    <body>
<!-----------------------------------------------------------------------------
Description de la page.
------------------------------------------------------------------------------>
    <header id="descriptionPage">    
        <?php 
            switch ($_SESSION['pageActive']) {
                case 'About':
                    require "DescriptionPage/aboutDescr.php";
                    break;
                case 'Experiences':
                    require "DescriptionPage/experienceDescr.php";
                    break;
                case 'Skills':
                    require "DescriptionPage/skillsDescr.php";
                    break;
                default:
                    require "DescriptionPage/accueilDescr.php";
                    break;
            }
        ?>
    </header>
<!-----------------------------------------------------------------------------
Barre de navigation.
------------------------------------------------------------------------------>    
    <div id="navBar">
        <?php require_once "CommunContent/navBarre.php" ;?>   
    </div>
<!-----------------------------------------------------------------------------
Corps de la page.
------------------------------------------------------------------------------>
    <main>
<!-----------------------------------------------------------------------------
Mes Informations générales.
------------------------------------------------------------------------------>
        <div id="InfoGen">
            <?php require "CommunContent/generalInformation.php"; ?>
        </div>
<!-----------------------------------------------------------------------------
Informations Spécifiques
------------------------------------------------------------------------------>
        <div id="PageContent">
            <?php
                switch ($_SESSION['pageActive']) {
                    case 'About':
                        require "PageContent/aboutCont.php";
                        break;
                    case 'Experiences':
                        require "PageContent/experienceCont.php";
                        break;
                    case 'Skills':
                        require "PageContent/skillsCont.php";
                        break;
                    default:
                        require "PageContent/accueilCont.php";
                        break;
                }
            ?>
        </div>
    </main>
<!-----------------------------------------------------------------------------
Footer de la page.
------------------------------------------------------------------------------>
    <?php require "CommunContent/footer.php"; ?>

            
    </body>
</html>