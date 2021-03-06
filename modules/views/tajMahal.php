
<body>
<?php 
require_once('../controllers/merveille.php');
require_once('../views/pageBegin.php');
require_once('../views/header.php');



?>
<link rel="stylesheet" href="../styles/marin.css">
<div class="marin" data-page="tajMahal">
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
    
    <main class="background" data-scroll-container>
    <link rel="stylesheet" href="../styles/tajMahal.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../styles/locomotive-scroll.css" type="text/css" media="screen">
        <div class="bloc1 bloc" data-scroll-section>
            <div class="more" data-scroll data-scroll-speed="2">
                <span>more</span>
            </div>
            <div class="">
                <h1 class="title big">Taj<br>Mahal</h1>

            </div>
            <div class="progress" data-scroll data-scroll-speed="2">
                <img src="../images/Merveilles/tajMahal/Line_1.svg" alt="">
                <span>89%</span>
            </div>
        </div>
        <div class="bloc2 bloc" data-scroll-section>
            <div>
                <div class="h2bloc2">
                    <h2 class="yellow title gros" data-scroll data-scroll-speed="2">
                        La legende du taj mahal
                    </h2>
                </div>
                <div class="imgbloc2">
                    <img class="img211" src="../images/Merveilles/tajMahal/archive5.png" alt="">
                    <div class="img212bloc">
                        <img id="target" class="img212" src="../images/Merveilles/tajMahal/construction6.png" alt="">
                    </div>

                </div>
            </div>
            <div class="bloc22" data-scroll>
                <p class="">
                    Au XVIe siècle, l’empire moghol qui régnait en Inde du Nord avait déjà perdu de son pouvoir et de
                    ses territoires. Shah Jahan, fils de l’empereur Jahângîr, faisait preuve d’une grande habilité aussi
                    bien en guerre qu’en politique. Ainsi, il permit à son père d’agrandir ses territoires.
                </p>
                <p>
                    À la mort de l’empereur Jahângîr, Shah Jahan lui succéda et devint le cinquième empereur de l’empire
                    moghol. Dès lors, il épousa trois femmes. Il fut raconté que la dernière des trois, Mumtaz Mahal,
                    était sa préférée. C’est pourquoi lorsqu’elle décéda en couches en 1931, il ordonna la construction
                    d’un mausolée afin qu’elle repose en paix éternellement, sur les bords de la Yamunâ.
                </p>
            </div>
        </div>
        <div class="bloc3 bloc" data-scroll-section>
            <div class="bloc31">
                <div class="bloc311">
                    <h3 class="yellow h3" data-scroll data-scroll-speed="2">La construction du Taj Mahal,<br> représentation symbolique de l'amour.</h3>
                    <img class="trait" src="../images/Merveilles/tajMahal/Line_2.svg" alt="">
                    <p class="txt311">Considéré comme le plus gros joyau architectural de l'art indo-islamiquue, l'histoire du Taj
                        Mahal est le résultat d'un amour inconditionnel d'un homme evers sa femme. En effet, le mausolée
                        a été édifié sous les ordres de l'empereur moghol Shah Jahan en mémoire de sa troisième épose
                        Mumtaz Mahal, décédée lorsqu'elle mit au monde leur quatorzième enfant. Avant qu'elle ne meure,
                        Mumtaz Mahal a fait promettre deux choses à son mari: la première est qu'il conserve sa promesse
                        de fidélité, et qu'il ne se remarie pas une nouvelle fois. La seconde est de lui bâtir un petit
                        mausolée en son honneur.</p>
                </div>
                <img class="amour1" src="../images/Merveilles/tajMahal/amour1.jpg" alt="">
            </div>
            <p class="txt3">Promesses respectées. Shah Jahan, fou amoureux de sa femme et déboussolé par son décès, mis en oeuvre ces
                promesses. C'est de là que vient la construction de ce monument immense, afin que le monde entier sache
                à quel point il l'aimait. C'est entre 1632 et 1648 que fut construit ce monument hommage. Un mausolée
                digne du paradis où la mosquée, le pavillon des invités, l'entrée principale au sud ainsi que la cour
                extérieure et ses cloîtres ont été ajoutés plus tard et terminés en 1653.</p>
        </div>
        <div class="bloc4 bloc" data-scroll-section>
            <h2 class="red title gros">CONSTRUCTION -</h2>
            <div class="bloc41">
                <div class="bloc411">
                    <p>La construction du site entier du Taj Mahal dura 16 ans, dont 11 pour le mausolée principal.</p>
                    <p>Le chantier débuta en 1631, et se termina en 1648. Certaines parties du site ne furent ajoutées qu'après la construction initiale, c'est notamment le cas de la mosquée.</p>
                </div>
                <div class="bloc412">
                    <img class="img4121" src="../images/Merveilles/tajMahal/construction5.png" alt="">
                    <div class="bloc4122">
                        <img class="img412" src="../images/Merveilles/tajMahal/archive6.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="bloc10 bloc" data-scroll-section>
            <div class="bloc101">
                <div class="draggable" data-name="1">
                    <img src="../images/Merveilles/tajMahal/panneau/goa.svg" alt="">
                </div>
                <div class="draggable" data-name="2">
                    <img src="../images/Merveilles/tajMahal/panneau/bombay.svg" alt="">
                </div>
                <div class="draggable" data-name="3">
                    <img src="../images/Merveilles/tajMahal/panneau/agra.svg" alt="">
                </div>
                <div class="draggable" data-name="4">
                    <img src="../images/Merveilles/tajMahal/panneau/hyderbad.svg" alt="">
                </div>
                
            </div>
            <div class="bloc102">
                <p class="bloc102txt">Placer le bon panneau du Taj-mahal.</p>
                <span class="help">Explique moi marin ?</span>
                <img src="../images/Merveilles/tajMahal/map.svg" alt="">
                <div class="droppable">
                    Mettez le bon panneau.
                </div>
                <button class="controllermarin" name="controller">
            </div>
        
        </div>
        <div class="bloc5 bloc" data-scroll-section>
            <div class="blocbloc5img">
                <img class="bloc5img" src="../images/Merveilles/tajMahal/ustad1.jpg" alt="">
            </div>
            <div class="title purple bloc5name" data-scroll data-scroll-speed="2">
                <h2 class="bloc5name1">Ustad</h2>
                <h2 class="bloc5name2">Ahmad</h2>
                <h2>Lahauri</h2>
            </div>
            <div class="bloc5line" >
                <img src="../images/Merveilles/tajMahal/Line_3.svg" alt="">
                <span class="purple">ARCHITECTE</span>
                <img src="../images/Merveilles/tajMahal/Line_3.svg" alt="">
            </div>
            
        </div>
        <div class="bloc6 bloc" id="canvas" data-scroll-section>
            <h2 class="title titlebloc6" data-scroll data-scroll-speed="2">XVII</h2>
            <p>Ustad Ahmad Lahauri est né en 1580 et est mort en 1649.
                C'est un architecte d'origine perse né à Lahore, issu d'une famille du Badakhanchan.</p>
        </div>
        <div class="bloc7 bloc" data-scroll-section>
            <div class="purple bloc71">
                <p>Il est connu pour avoir été l'architecte principal du célèbre Taj Mahal d'Âgrâ, en inde.</p>
                <p>Il a supervisé les travaux de ce monument en dirigeant une équipe d'architectes et des millers
                    d'ouvriers.
                    Il pourrait être également l'auteur du Fort Rouge de Delhi, si l'on en croit le témoignage de son
                    fils, le poète Luff Allah Muhandise.
                </p>
            </div>
            <div class="bloc7img">
                <img src="../images/Merveilles/tajMahal/ustad3.webp" alt="">
            </div>
        </div>
        <div class="bloc8 bloc" data-scroll-section>
            <h2 class="title gros purple" >Histoire</h2>
            <div class="bloc81">
                <img src="../images/Merveilles/tajMahal/facade1.jpg" alt="" data-scroll data-scroll-speed="2" >
                <div class="bloc811">
                    <p>Le Taj Mahal tel que nous le connaissons aujourd'hui est physiquement le même qu'il était
                        lorsqu'il a été fondé. En effet, la bâtisse n'a subi aucun dégât majeur au fil de son hisoire,
                        même s'il a souvent été la cible des guerres de religions. Seuls les Anglais, au temps de la
                        colonisation au début des années 1900, réalisèrent la restauration du Taj Mahal et créèrent de
                        magnifiques jardins. Parfaitement protégé, le Taj Mahal est une des merveilles du monde
                        musulman, avec des caractéristiques architecturales exceptionnelles.</p>

                    <p class="purple">Symbole de l'Inde, le Taj Mahal acuueille chaque année 4 millions de visiteurs. Et
                        pour cause: ce
                        site est unique. Si le mausolée en marbre blanc est l'élément le plus connu du Taj Mahal, il ne
                        faut pas réduire le Taj Mahal à cette seule partie. Ainsi, de nombreux monuments, jardins, plans
                        d'eau et fontaines viennent compléter le tout, dans une symétrie parfaitement organisée.</p>
                </div>
            </div>
        </div>
        <div class="bloc9 bloc purple" data-scroll-section>
            <span>Vous pouvez maintenant accéder au quiz :</span>
            <form action="../controllers/merveille.php" method="post">
                <input class="purple" type="submit" value="QUIZ ->" name="formQuiz">
                <input type="hidden" name="nomMerveille" value="<?php echo $_GET['merveille']; ?>">
                <input type="hidden" name="idMerveille" value="2">
            </form>
        
            
        </div>
        <footer class="purple" data-scroll-section>© Copyright monders 2021</footer>
    </main>
    <script src="../libs/locomotive-scroll.min.js"></script>
    <script src="../libs/jquery.js"></script>
    <script src="../libs/jqueryui.js"></script>
    <script src="../script/tajMahal.js"></script>
    <script src="../script/succes.js"></script>
    <script src="../script/dialogue.js"></script>
</body>

</html>