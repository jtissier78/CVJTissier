<header>
    <div id="Information">
        <div class="Side-Block">
            <h1><?php echo $lang['header']['Title'] ?></h1>
            <h2><?php echo $lang['header']['Sub-Title'];?></h2></div>
        <div class="Center-Block">
            <p><?php echo $lang['header']['Content'];?></p>
        </div>
        
        <div class="Side-Block">
            
            <p id="download"><a href="docs/CV_Dev J. Tissier.pdf" download="CV JTissier" ><?php echo $lang['header']['CV']['Download'];?></a></p>
            <p id="print"><?php /* echo $lang['header']['CV']['Print']; */?></p>
        </div>
    </div>
    <div id="Navigation">
        <h2><?php echo $lang['Page-Title']['About'] ?></h2>
        <?php require_once "template/navBAr.php";?>
    </div>
</header>