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
<div class="landing-page">
    <div class="map">
        <img src="../images/home/map/map.png" alt="" class="carte">
        <img src="../images/home/map/map-trait-<?=$nbDebloque[0]["nbDebloque"]?>.png" alt="" class="carte-trait"> 
        
        <div class="merveille murailleChine">
        <a <?php if(isset($user)){echo('href="../views/murailledechine.html"');}else{echo('href="../views/inscription.php"');}?>>
            <img src="../images/home/icons/pin.png" alt="" class="pin">
            <div class="photo">
                <img src="../images/home/icons/icon-muraile.png" alt="" class="merveille-photo">
            </div>
            </a>
        </div>
        
        
        <div class="merveille tajMahal <?php if($nbDebloque[0]["nbDebloque"] < 2){echo("disabled");}?>">
        <a <?php if($nbDebloque[0]["nbDebloque"] < 2){echo("");}else{echo('href="../views/tajMahal.php"');}?>>
            <img src="../images/home/icons/pin.png" alt="" class="pin">
            <div class="photo">
                    <img src="../images/home/icons/icon-tajMahal.png" alt="" class="merveille-photo">
            </div>
        </a>
        </div>
        
        
        <div class="merveille petra <?php if($nbDebloque[0]["nbDebloque"] < 3){echo("disabled");}?>">
        <a <?php if($nbDebloque[0]["nbDebloque"] < 3){echo("");}else{echo('href="../views/merveille.php?merveille=petra"');}?>>
            <img src="../images/home/icons/pin.png" alt="" class="pin">
            <div class="photo">
                <img src="../images/home/icons/icon-petra.png" alt="" class="merveille-photo">
            </div>
            </a>
        </div>
        

        
        <div class="merveille colisee <?php if($nbDebloque[0]["nbDebloque"] < 4){echo("disabled");}?>">
        <a <?php if($nbDebloque[0]["nbDebloque"] < 4){echo("");}else{echo('href="../views/merveille.php?merveille=colisee"');}?> >
            <img src="../images/home/icons/pin.png" alt="" class="pin">
            <div class="photo">
                <img src="../images/home/icons/icon-colisee.png" alt="" class="merveille-photo">
            </div>
            </a>
        </div>
       
        <div class="merveille chichen <?php if($nbDebloque[0]["nbDebloque"] < 5){echo("disabled");}?>">
        <a <?php if($nbDebloque[0]["nbDebloque"] < 5){echo("");}else{echo('href="../views/merveille.php?merveille=chichenitza"');}?>>
            <img src="../images/home/icons/pin.png" alt="" class="pin">
            <div class="photo">
            <img src="../images/home/icons/icon-chichenitza.png" alt="" class="merveille-photo">
        </div>
        </a>
        </div>
       
   
       

      
        <div class="merveille machu <?php if($nbDebloque[0]["nbDebloque"] < 6){echo("disabled");}?>">
        <a <?php if($nbDebloque[0]["nbDebloque"] < 6){echo("");}else{echo('href="../views/merveille.php?merveille=machupicchu"');}?> >
            <img src="../images/home/icons/pin.png" alt="" class="pin">
            <div class="photo">
            <img src="../images/home/icons/icon-machupicchu.png" alt="" class="merveille-photo">
        </div>
        </a>
        </div>
        
        <div class="merveille christ <?php if($nbDebloque[0]["nbDebloque"] < 7){echo("disabled");}?>">
        <a <?php if($nbDebloque[0]["nbDebloque"] < 7){echo("");}else{echo('href="../views/merveille.php?merveille=christ"');}?> >
            <img src="../images/home/icons/pin.png" alt="" class="pin">
            <div class="photo">
            <img src="../images/home/icons/icon-christ.png" alt="" class="merveille-photo">
        </div>
        </a>
        </div>
        
       
    </div>
    
</div>
<script src="../script/pin.js"></script>
    
</body>
</html>