<?php
	//la classe en PHP 7
	/* 
		Nom, des propriétés et des méthodes ou fonction, constructeur

	*/
		class Inscription{
			public $user_name;
			public $user_pass;
			public $user_mail;

			//constructeur
			public function __construct($user_name,$user_pass, $user_mail){
					$this->user_name = $user_name;
					$this->user_pass = $user_pass;
					$this->user_mail = $user_mail;


			}
            //getter
            public function getName(){
                print'<p>Login : '.$this->user_name.'<br>Pass : '.$this->user_pass.'<br>E-mail : '.$this->user_mail.'</p>';
            }
            
		
		}
		//donnée externes
        
		

?>