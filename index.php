<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Les Paroles</title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="_css/style.css">
        
       
    </head>
    <body> 
        <div id="container_header">            
            <div id="container_header_center"><div class="title"><h1>LES PAROLES</h1></div>  </div>  
        </div>
        <div id="container">
            <div id="containerLabel">
                <label for="selection" id="labelselection">Choisissez une chanson:</label>
            </div>
            <div id="container_selection">

                <select id="selection">
                    <option value="">Musiques disponibles...</option>
                    <optgroup label="Vitaa et Slimane">
                        <option value="1.1">A fleur de toi</option>
                        <option value="1.2">Avant toi</option>
                        <option value="1.3">Je te le donne</option>
                        <option value="1.4">De l'or</option>                        
                    </optgroup>
                    <optgroup label="Stromae">
                        <option value="2.1">Alors on danse</option>
                    </optgroup>
                    <optgroup label="ZAZ">
                        <option value="3.1">Je veux</option>
                    </optgroup>
                    <optgroup label="Guillaume Grand">
                        <option value="4.1">Toi et moi</option>
                    </optgroup>
                    <optgroup label="Dua Lipa">
                        <option value="5.1">Physical</option>
                    </optgroup>
                    <optgroup label="Shakira">
                        <option value="6.1">Perro fiel</option>
                    </optgroup>
                    <optgroup label="Daddy Yanky">
                        <option value="7.1">Con calma</option>
                    </optgroup>
                    <optgroup label="Julio Iglesias">
                        <option value="8.1">Je n'ai pas changé</option>
                    </optgroup>
                    <optgroup label="Coldplay">
                        <option value="9.1">Viva la vida</option>
                    </optgroup>
                    <optgroup label="One Republic">
                        <option value="10.1">If I lose myself</option>
                    </optgroup>
                    <optgroup label="Grégoir">
                        <option value="11.1">Toi plus moi</option>
                    </optgroup>
                    <optgroup label="Tom Jobin">
                        <option value="12.1">Garota de Ipanema</option>
                    </optgroup>
                    <optgroup label="Magic System">
                        <option value="13.1">Tu es fou</option>
                    </optgroup>
                    <optgroup label="Carrapicho">
                        <option value="14.1">Tic tic tac</option>
                    </optgroup>
                </select>
                <button  onclick="chooseMusic()" id="btnselection">SÉLECTIONNER</button>
            </div>

            <div id="inicialMessage">

                <p>“La chanson n'est pas une fille indigne de la littérature. On dit souvent plus dans une chanson de trois minutes que dans un roman de cinq cents pages.” <br> <br> Pierre Perret</p>    
            </div>
            
            <div id="inicial"></div>

            <div class="video" id="originalVideo">
                <!-- COLOCADO VIA JAVASCRIPT -->
            </div>

            <div class="lineFlags">
                <div id="originalFlag">
                    <button onclick="loadOriginal()" id="btnORIGINAL"></button>
                </div>

                <div id="TR_Flags">
                    <button onclick="translatePORTUGUESE()" id="btnPORTUGUESE"><img src="img/PORTUGUESE.jpg"></button>
                    <button onclick="translateFRENCH()" id="btnFRENCH"><img src="img/FRENCH.jpg"></button>
                    <button onclick="translateSPANISH()" id="btnSPANISH"><img src="img/SPANISH.jpg"></button>
                    <button onclick="translateENGLISH()" id="btnENGLISH"><img src="img/ENGLISH.jpg"></button>
                </div>

            </div>

            <div class="lineMusic">
                <div id="music_original">                    
                    <h1 id="title_original"></h1>
                    <h3 id="singer"></h3>
                    <div id="lyric_original"></div>
                    <!-- LETRA EM FRANCÊS -->

                </div>
                <div id="music_TR" >                    
                    <h1 id="title_translated"></h1>
                    <h3 id="singer_TR"></h3>
                    <div id="lyric_TR"></div>
                    <!-- LETRA TRADUZIDA -->

                </div>
            </div>
        </div>     
        
        <div class="footer" id="footer">
            <div id="footer_left">
                <h3>EDER TOLENTINO </h3>
                <p>Développeur Web Jr</p>
            </div>
            <div id="footer_center">
                <ul>
                    <li><a href="https://edertolentino.com/portfolio/aboutme.php" target="_blank">À PROPOS</a></li>
                    <li><a href="https://edertolentino.com/portfolio/portfolio.php" target="_blank">PORTFOLIO</a></li>
                    <li><a href="https://edertolentino.com/portfolio/contacts.php" target="_blank">CONTACT</a></li>
                </ul>
            </div>
            <div id="footer_right">
                <ul>
                    <li>
                        <a href="https://web.whatsapp.com/send?phone=351910116613" class="fa fa-whatsapp" target="_blank"></a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/in/edertolentino/" class="fa fa-linkedin" target="_blank"></a>
                    </li>
                    <li>
                        <a href="https://github.com/EderTolentino" class="fa fa-github" target="_blank"></a>
                    </li>
                </ul>
                <a href="#" class="btn_toTop"></a>
            </div>
        </div>
            
        
        <script src="jquery.js"></script>
        
        <script src="file.js"></script>
        
    </body>
</html>