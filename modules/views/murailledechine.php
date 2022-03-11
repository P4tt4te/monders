<?php 
require_once('../controllers/merveille.php');
require_once('../views/pageBegin.php');
require_once('../views/header.php');

?>
<link rel="stylesheet" href="../styles/murailledechine.css" type="text/css" media="screen">
<link rel="stylesheet" href="../styles/memory.css">
<link rel="stylesheet" href="../styles/marin.css">
<img src="../json/cookie.png" style="display:none;">



    <div class="marin" data-page="murailledechine">
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
    <main class="background">
        <div class="bloc1">
            <h1 class="title big">Muraille de chine</h1>
            <img src="../images/Merveilles/murailledechine/muraillegrande.webp" alt="muraille de chine image" srcset="">
        </div>
        <div class="bloc2 bloc">
            <div class="bloc21">
                <h2>C'est quoi ?</h2>
                <p>     La Grande Muraille ou muraille de Chine (en chinois Chángchéng, « la longue muraille » ; en chinois traditionnel : 長城, en caractères simplifiés 长城 ) est la plus longue construction humaine au monde : elle parcourt environ 6 700 kilomètres, de la frontière entre la Chine et la Corée, jusqu'au désert de Gobi, à l'ouest du pays. Sa construction a commencé au 3ème siècle AV JC dans le but de proteger des invasions mongoles. a donc duré plusieurs centaines d'année. On peut compter au moins 400 000 ouvriers qui ont péris lors de la construction. </p>
            </div>
            <div class="imgbloc2">
                <img height="500px" src="../images/murailledechine/chine.svg" alt="pays de chine" srcset="">
                <div class="tracebloc2">
                    <img width="150px" class="svg" src="../images/murailledechine/trace.svg" alt="tracé de la muraille sur le pays">
                </div>
            </div>
        </div>
        <div class="bloc3">
            <p>La muraille a d'abord été construite sous l'influence de l'empire Quin, avec de la terre, des pierres, du bois et des tuiles, puis plus tard avec des briques. Ce sont principalement des prisonniers de guerre ainsi que des esclaves qui étaient chargé de sa construction. Sa largeur est entre 5 et 7 mètres en moyenne et sa hauteur est entre 5 et 17 mètres. Elle possède des tours de guet et des fortifications sur toute sa longueur. Les déplacements des soldats le long de la muraille se faisaient à l'aide de chevaux.</p>
            <img src="../images/Merveilles/murailledechine/construction.webp" alt="" srcset="">
        </div>
        <div class="bloc bloc4">
            <h3>Une des constructions les plus longues de l'histoire.</h3>
            <div>
                <span class="s1 red">III av J-C</span>
                <img src="../images/murailledechine/fleche.svg" alt="">
                <span class="s2 red">XVII</span>
            </div>
            <p>21 siècles de constructions</p>
        </div>
        <div class="bloc5">
            <h3>Mini-jeu</h3>
            <div class="line">
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="../images/memory/face-front.png" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back">
                        <img class="" src="" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="../images/memory/face-front.png" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back">
                        <img class="" src="" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="../images/memory/face-front.png" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back">
                        <img class="" src="" alt="">
                      </div>
                    </div>
                  </div>
            </div>
            <div class="line">
                <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="../images/memory/face-front.png" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back">
                        <img class="" src="" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="../images/memory/face-front.png" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back">
                        <img class="" src="" alt="">
                      </div>
                    </div>
                  </div>
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="../images/memory/face-front.png" alt="Avatar" style="width:300px;height:300px;">
                      </div>
                      <div class="flip-card-back">
                        <img class="" src="" alt="">
                      </div>
                    </div>
                  </div>
            </div>
            <p>Aide marin a ouvrir la porte de la muraille en trouvant les clés correspondant aux serrures.</p>
            <span class="help">Aide moi Marin</span>
            <button class="controllermarin" name="controller">
            </button>

            <div class="quiz">
            <form action="../controllers/merveille.php" method="post">
                <input class="redirection" type="submit" value="COMMENCER LE QUIZ" name="formQuiz">
                <input type="hidden" name="nomMerveille" value="<?php echo $_GET['merveille']; ?>">
                <input type="hidden" name="idMerveille" value="1">
            </form>
            </div>
            
        </div>

        </div>
    </main>
    

    <script src="../script/dialogue.js"></script>
    <script src="../script/memory.js"></script>
</body>