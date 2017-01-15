<style type="text/css">
            dummydeclaration { padding-left: 4em; } /* Firefox ignores first declaration for some reason */
            tab1 { padding-left: 4em; }
            tab2 { padding-left: 8em; }
            tab3 { padding-left: 12em; }
            tab4 { padding-left: 16em; }
            tab5 { padding-left: 20em; }
            tab6 { padding-left: 24em; }
            tab7 { padding-left: 28em; }
            tab8 { padding-left: 32em; }
            tab9 { padding-left: 36em; }
            tab10 { padding-left: 40em; }
            tab11 { padding-left: 44em; }
            tab12 { padding-left: 48em; }
            tab13 { padding-left: 52em; }
            tab14 { padding-left: 56em; }
            tab15 { padding-left: 60em; }
            tab16 { padding-left: 64em; }

        </style>

<?php


	/*
		Connect DataBase
	*/
	try{
		$db_con = new PDO('mysql:host=localhost; dbname=recipes',
						'root','123456'); //mysql:host=localhost; ต้องพิมพ์ติดกัน
		echo "Connect Success". "<br>";
	}catch (PDOEXCEPTION $e){
		echo "Could not contect to DataBase" . "<br>";
	}

	/*
		SQL Statement
	*/
	$sql = 'SELECT name, description, chef
			FROM recipes
			WHERE chef = ?
			AND category_id = ?
	';

	/*
		Prepare Statement
	*/
	$stmt = $db_con->prepare($sql);

	$stmt->execute(array("Lorna",3));
	

	 while ($row = $stmt->fetch()) {
                  echo 	'Name: '. $row['name'].'   '."<br>".
                  		'<tab2>Description: '.$row['description'].'   </tab2>'."<br>".
                  		'<tab3>Chef: '.$row['chef'].'   </tab3>'."<br><hr>";
                
            }

?>