<?php require_once "langage.php";?>
<?php $_SESSION['pageActive']='About';?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="fr-FR" xml:lang="fr-FR">
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
                        require "DescriptionPage/aboutDescr.php";
                        break;
                }
            ?>
        </header>
<!-----------------------------------------------------------------------------
Corps de la page.
------------------------------------------------------------------------------>
        <main>
<!-----------------------------------------------------------------------------
Barre de navigation.
------------------------------------------------------------------------------>    
            <div id="navBar">
                <?php require_once "CommunContent/navBarre.php" ;?>   
            </div>
<!-----------------------------------------------------------------------------
Bloc Central
------------------------------------------------------------------------------>
            <div id="Main-Bloc">
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
                                require "PageContent/aboutCont.php";
                                break;
                        }
                    ?>
                </div>
            </div>
        </main>
<!-----------------------------------------------------------------------------
Footer de la page.
------------------------------------------------------------------------------>
        <?php require "CommunContent/footer.php"; ?>

            
    </body>
</html>