    <?php 
    require_once('../controllers/home.php');
    require_once('../views/common.php');
    require_once('../views/pageBegin.php');
    require_once('../views/header.php');

    if (!isset($user)) {
        $nbDebloque[0]["nbDebloque"] = 1;
    }
    
    ?>
<body>

    <link rel="stylesheet" href="../styles/home.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../styles/marin.css" rel="stylesheet" type="text/css">
    <div class="marin" data-page="home">
        <div class="perso">
            <img src="../images/marin/bonjour.png" alt="">
        </div>
        
        <div class="bulles">
            <div class="bulle-parole">
                <p class="texte-parole"></p>
            </div>
        </div>
        <div class="suite">
            <p>Cliquer pour continuer le dialogue.</p>
        </div>
        
    </div>
<div class="landing-page">
    <div class="map">

        <img src="../images/home/map/map.webp" alt="" class="carte">
        <img src="../images/home/map/map-trait-<?=$nbDebloque[0]["nbDebloque"]?>.webp" alt="" class="carte-trait"> 
        
        <div class="merveille murailleChine">
        <a <?php if(isset($user)){echo('href="../views/murailledechine.php?merveille=murailledechine"');}else{echo('href="../views/connexion.php"');}?>>
            <img src="../images/home/icons/pin.webp" alt="" class="pin">
            <div class="photo">
                <img src="../images/home/icons/icon-murailledechine.webp" alt="" class="merveille-photo">
            </div>
            </a>
        </div>
        
        
        <div class="merveille tajMahal <?php if($nbDebloque[0]["nbDebloque"] < 2){echo("disabled");}?>">
        <a <?php if($nbDebloque[0]["nbDebloque"] < 2){echo("");}else{echo('href="../views/tajMahal.php?merveille=tajMahal"');}?>>
            <img src="../images/home/icons/pin.webp" alt="" class="pin">
            <div class="photo">
                    <img src="../images/home/icons/icon-tajMahal.webp" alt="" class="merveille-photo">
            </div>
        </a>
        </div>
        
        
        <div class="merveille petra <?php if($nbDebloque[0]["nbDebloque"] < 3){echo("disabled");}?>">
        <a <?php if($nbDebloque[0]["nbDebloque"] < 3){echo("");}else{echo('href="../views/merveille.php?merveille=petra"');}?>>
            <img src="../images/home/icons/pin.webp" alt="" class="pin">
            <div class="photo">
                <img src="../images/home/icons/icon-petra.webp" alt="" class="merveille-photo">
            </div>
            </a>
        </div>
        

        
        <div class="merveille colisee <?php if($nbDebloque[0]["nbDebloque"] < 4){echo("disabled");}?>">
        <a <?php if($nbDebloque[0]["nbDebloque"] < 4){echo("");}else{echo('href="../views/merveille.php?merveille=colisee"');}?> >
            <img src="../images/home/icons/pin.webp" alt="" class="pin">
            <div class="photo">
                <img src="../images/home/icons/icon-colisee.webp" alt="" class="merveille-photo">
            </div>
            </a>
        </div>
       
        <div class="merveille chichen <?php if($nbDebloque[0]["nbDebloque"] < 5){echo("disabled");}?>">
        <a <?php if($nbDebloque[0]["nbDebloque"] < 5){echo("");}else{echo('href="../views/merveille.php?merveille=chichenitza"');}?>>
            <img src="../images/home/icons/pin.webp" alt="" class="pin">
            <div class="photo">
            <img src="../images/home/icons/icon-chichenitza.webp" alt="" class="merveille-photo">
        </div>
        </a>
        </div>
       
   
       

      
        <div class="merveille machu <?php if($nbDebloque[0]["nbDebloque"] < 6){echo("disabled");}?>">
        <a <?php if($nbDebloque[0]["nbDebloque"] < 6){echo("");}else{echo('href="../views/merveille.php?merveille=machupicchu"');}?> >
            <img src="../images/home/icons/pin.webp" alt="" class="pin">
            <div class="photo">
            <img src="../images/home/icons/icon-machupicchu.webp" alt="" class="merveille-photo">
        </div>
        </a>
        </div>
        
        <div class="merveille christ <?php if($nbDebloque[0]["nbDebloque"] < 7){echo("disabled");}?>">
        <a <?php if($nbDebloque[0]["nbDebloque"] < 7){echo("");}else{echo('href="../views/merveille.php?merveille=christ"');}?> >
            <img src="../images/home/icons/pin.webp" alt="" class="pin">
            <div class="photo">
            <img src="../images/home/icons/icon-christ.webp" alt="" class="merveille-photo">
        </div>
        </a>
        </div>
        
       
    </div>
    <div class="zoneaide">
        <button class="help">?</button>
    </div>
    <button class="controllermarin" name="controller">
    
    
</div>
<script src="../script/pin.js"></script>
<script src="../script/dialogue.js"></script>
    
</body>
</html>