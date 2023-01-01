var $fullArray = [];
var original;
var cod;


function chooseMusic() {

    var $select = document.getElementById('selection');
    var $footer = document.getElementById('footer');
    cod = $select.options[$select.selectedIndex].value;

    loadData(cod);
    
    $footer.style.position = "relative";
}


function clearData() {
    document.getElementById('btnORIGINAL').innerHTML = "";
    document.getElementById('btnPORTUGUESE').style.display = "none";
    document.getElementById('btnFRENCH').style.display = "none";
    document.getElementById('btnSPANISH').style.display = "none";
    document.getElementById('btnENGLISH').style.display = "none";
    document.getElementById('title_translated').innerHTML = "";
    document.getElementById('singer_TR').innerHTML = "";
    document.getElementById('lyric_TR').innerHTML = "";

    document.getElementById('originalFlag').style.width = "100%";                            
    document.getElementById('TR_Flags').style.width = "100%";
    document.getElementById('TR_Flags').style.textAlign = "right";

    document.getElementById('music_original').style.width = "100%";                            
    document.getElementById('music_TR').style.width = "0%";

    $fullArray = ['PORTUGUESE', 'FRENCH', 'SPANISH', 'ENGLISH'];
}

function loadData(n) {

    clearData();

    document.getElementById('inicialMessage').style.display = "none";

    $.getJSON('create_json/music_DB.php', function(data){

        $.each(data, function(i, $value) {

            if ($value.CODE == n) {

                original = $value.ORIGINAL_LANGUAGE;

                var $original_title = 'TITLE_' + original;  
                document.getElementById('originalVideo').innerHTML = $value.VIDEO; 

                // Put the original flag inside the button 
                document.getElementById('btnORIGINAL').style.display = "inline-block";

                var img_original = document.createElement('img');                            
                img_original.src = 'img/' + original + '.jpg';                            
                img_original.style.width = "50px";                            
                document.getElementById('btnORIGINAL').appendChild(img_original);


                // Remove the original language from the array                          
                removeOriginal(original);

                // Put the other flags on the right side of the page
                for (i = 0; i < $fullArray.length; i++) {                                
                    if($value[$fullArray[i]]) {
                        var btn = document.getElementById('btn' + $fullArray[i]);
                        btn.style.display = "inline-block";
                    }
                }

                document.getElementById('title_original').innerHTML = $value[$original_title]; 
                document.getElementById('singer').innerHTML = $value.SINGER;
                document.getElementById('lyric_original').innerHTML = $value[original]; 

                // CHANGING THE BACKGROUND COLOR FOR EACH SONG - NOT IN USE
                /*
                document.body.style.backgroundColor = $value.COLOR;
                document.getElementById('container_header_center').style.background = "linear-gradient(to right, white," + $value.COLOR + ")";
                document.getElementById('container_header_right').style.backgroundColor = $value.COLOR;
                document.getElementById('btnORIGINAL').style.backgroundColor = $value.COLOR;
                document.getElementById('btnPORTUGUESE').style.backgroundColor = $value.COLOR;
                document.getElementById('btnFRENCH').style.backgroundColor = $value.COLOR;
                document.getElementById('btnSPANISH').style.backgroundColor = $value.COLOR;
                document.getElementById('btnENGLISH').style.backgroundColor = $value.COLOR;
                document.getElementById('music_original').style.backgroundColor = "white";
                document.getElementById('music_TR').style.backgroundColor = "white";
                */
            }
        });
    });
}

function removeOriginal(n) {
    $fullArray.splice($fullArray.indexOf(n),1);
}

function loadOriginal() {
    // Goes back to the original format - keeps only the original lyrics
    document.getElementById('btnORIGINAL').innerHTML = "";
    document.getElementById('originalFlag').style.width = "100%";                            
    document.getElementById('TR_Flags').style.width = "100%";
    document.getElementById('TR_Flags').style.textAlign = "right";

    document.getElementById('music_original').style.width = "100%";                            
    document.getElementById('music_TR').style.width = "0%";

    document.getElementById('title_translated').innerHTML = "";
    document.getElementById('singer_TR').innerHTML = "";
    document.getElementById('lyric_TR').innerHTML = "";


    loadData(cod);
}

function translatePORTUGUESE() {
    carregarTraducao('TITLE_PORTUGUESE', 'PORTUGUESE');
}

function translateSPANISH() {
    carregarTraducao('TITLE_SPANISH', 'SPANISH');
}

function translateFRENCH() {
    carregarTraducao('TITLE_FRENCH', 'FRENCH');
}

function translateENGLISH() {
    carregarTraducao('TITLE_ENGLISH', 'ENGLISH');
}




function carregarTraducao(title_TR, lang) {

    var $original_title = document.getElementById('title_original').innerHTML;


    $.getJSON('create_json/music_DB.php', function(data){

        $.each(data, function(i, $value) {

            if ($value['TITLE_' + original] == $original_title) {

                document.getElementById('originalFlag').style.width = "50%";                            
                document.getElementById('TR_Flags').style.width = "50%";
                document.getElementById('TR_Flags').style.textAlign = "center";

                document.getElementById('music_original').style.width = "50%";                            
                document.getElementById('music_TR').style.width = "50%";
                document.getElementById('music_TR').style.textAlign = "center";

                document.getElementById('title_translated').innerHTML = $value[title_TR];
                document.getElementById('singer_TR').innerHTML = $value.SINGER;                        
                document.getElementById('lyric_TR').innerHTML = $value[lang];

            }
        });


    });
}