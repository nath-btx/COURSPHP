<?php
    // tableau simple
    const table = ["html","php","js"];
    // print_r(table);
    /*
    for($index = 0; $index<count(table); $index++){
        print "<li>".$index." ".table[$index]."</li>";
    }
    */
    const user = array(
        "Nom"=>"Ledorf",
        "Prenom"=>"Erasmus",
        "Statut"=>"Développeur",
        "Langage"=>"PHP",
        "Date"=>1994
    );
    //print_r(user);
    $table_empty =[];

    array_push($table_empty, "XML",true,"ES");//ajouter à un tableau vide des données

    $result = array_merge(user,table,$table_empty);// on fusionne les tableaux
    //print_r($result);
    foreach($result as $key => $value){
        echo "<li>". $key . " => " . $value . "</li>";
    }
    $lang_assoc = array(
        1=> array("code"=>"html","date"=>1990,"type"=>"Structure"),
        2=> array("code"=>"php","date"=>1994,"type"=>"Traitement"),
        3=> array("code"=>"SQL","date"=>1994,"type"=>"Modélisation")
    );
    // print_r($lang_assoc);
    foreach($lang_assoc as $key => $index)
    {
        foreach($index as $cle => $value)
        {
            echo "<li>" . $cle . " => " . $value . "</li>";
        }
    }
?>