<!-- HEADER -->
<header>
    <div class="logo">
        <a href="home.php">
            <img src="../images/header/images/Logo.svg" alt="">
        </a>
    </div>
    <div class="grid">
        <div class="grid-item">
            <button class="son close">
            <img src="../images/header/images/sonOff.svg" alt="">
                <audio  src="../sons/home.mp3"  id="player" style="display:none;" autoplay="true" loop="true"></audio>
            </button>
           
        </div>
        <div class="grid-item">
            <button class="language">
                <span>FR</span>
            </button>

        </div>
        <div class="grid-item">
            <button class="burger">
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<!-- MENU RESPONSIVE -->
<div class="nav-container">

    <div class="grid">
        <div class="grid-item one"></div>
        <div class="grid-item two">
            <nav class="menu">
                <div class="menu-item">
                    <a href="../views/home.php" class="menu-item-link">HOME</a>
                </div>
                <div class="menu-item">
                    <a href="merveilles.php" class="menu-item-link">MERVEILLES</a>
                </div>
                <div class="menu-item">
                <?php if (is_object($user)) {
                    ?>
                        <a href="profil.php" class="menu-item-link">PROFIL</a>
                    <?php
                    } 
                    ?>
                </div>
            </nav>
        </div>
        <div class="grid-item three">
            <nav class="menu">
                <div class="menu-item">
                    <a href="concept.php" class="menu-item-link">CONCEPT</a>
                </div>
                <div class="menu-item">
                    <a href="apropos.php" class="menu-item-link">A PROPOS</a>
                </div>
                    <?php if (is_object($user)) {
                    ?>
                    <div class="menu-item">
                        <a href="about.html" class="menu-item-link">MODIFICATION</a>
                    </div>
                    <div class="menu-item">
                        <a href="deconnexion.php" class="menu-item-link">DECONNEXION</a>
                    </div>
                    <?php
                    } else {
                    ?>
                    <div class="menu-item">
                       <a href="../views/inscription.php" class="menu-item-link">S'INSCRIRE</a>   
                    </div> 
                    <div class="menu-item">
                       <a href="../views/connexion.php" class="menu-item-link">SE CONNECTER</a>   
                    </div> 
                    <?php
                    }
                    ?>
                
            </nav>
        </div>
    </div>
</div>

</div>