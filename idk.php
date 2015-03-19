<?php 

//Verifica se um argumento foi usado 
if (isset($argv[1])) {
	echo $argv[1];
} else if(isset($argv[1]) and $argv[1] == "livre"){echo "Por favor use um argumento";
	
}else {
	
	echo "Tente novamente!";
}




