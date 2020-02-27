<?php
	require_once('../src/my_head.inc.php');
?>

<body>
	<header>
        <h1>
        <?php print title." Vous êtes le : ".$date_to_day ?>
        </h1>
    </header>
        <p>
        	<?php
            	echo $name."<br>"
                .$lang."<br>"
                .$version."<br>"
                .$date;
                //un point correspond à une concaténation de valeur
                //var_dump($version);//le var_dump sert à connaitre le type de donnée qu'on affiche
        	
        	?>
            <?php
            	$table = ["html","css","php"];// 0 => html, 1 =>css, 2=>php
                //print_r($table);
                print "\n";
                $user = array(
                		"Nom" => "Dupont",
                        "Prenom"=>"Jonathan",
                        "Ville"=> "Paris"
                );//tableau avec clé et valeur
                print_r($user);
                //function
                print "<br>";
                function msg(){
                	print "Hello";
                }
                //version 5 ES5, E6
                msg();
                //autre fonction 
                print "<br>";
                
                function dial($message){//function paramétrée
                	return "Hello ".$message;
                }
                
                print dial($name);
                
                //boucles for, while, foreach
                
                for($i = 0; $i<count($table); $i++){
                	print "<br>".($i+1)." ".$table[$i];
                	
                }
                
                $i=0;
                while($i<count($table)){
                	
                    print "<br>".$i." ".$table[$i];
                    $i++;
                	
                }
                //foreach boucle    
          ?>
        </p>
        <ul>
            <?php
                  foreach($user as $key => $valeur){
                            print "<li>".$key." ".$valeur."</li>\n";

                    }
            ?>

        </ul>
        <pre>
        <?php
        //variable d'environnement
        	  
               //print_r($_SERVER);

        ?>
        </pre> 
        
        <?php
        // infos navigateur
        print "<p>" .$navigator."<br>".$_SERVER['DOCUMENT_ROOT']. "</p>";        
        ?>

        <pre>
        <?php 
        $afficher = dns_get_record("php.net"); 
        print_r ($afficher);
        ?>
        </pre>

        <?php    
        // icones
        require_once('../src/icones.inc.php');
        ?>
        <?php
        // array_merge($array1, $array2)
        $tab1 = array(
            '0' => 'Benjamin',
            '1' => 'Mamadian'
        );   
        $tab2 = array(
            '0' => 'Vache',
            '1' => 'Canard'
        );
        $result = array_merge($tab2, $tab1);
        ?>
        <ol>
        <?php
        foreach($result as $key => $valeur){
            print "<li>".$key." => ".$valeur ."</li>\n";
        }
        ?>
        </ol>
</body>
</html>