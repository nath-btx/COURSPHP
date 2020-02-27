<?php
const icones = array(   'html' => '..\asset\icon_html.png',
                        'css' =>'..\asset\icon_css.png',
                        'javascript' => '..\asset\icon_javascript.png',
                        'ios' => '..\asset\icon_ios.png');

?>

<ol>
    <?php 
    echo "<h2> Langages : </h2> <br/>";
    foreach(icones as $key => $valeur){
                            print "<li><img src ='".$valeur."' alt ='".$key."' id='".$key."' height = '45px'></li>\n";
                    }
    ?>
</ol>



