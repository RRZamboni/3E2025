<?php 
   //Recuperando valor
   $algo = $_POST['algo'];

   //Vericando se o campo
   //esta vazio
   if($algo == "")
   {
   	  //JavaScript 
   	  echo "<script>  
   	  			alert('DIgite algo, animal!');
   	  			history.back();
            </script>
   	       ";
   }
   else
   {
   		echo "Ola chuchu, $algo";
   }




?>