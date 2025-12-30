<?php
$hosting_Server		 ='localhost';                     /*SERVER NAME  */
$dataBase_Name		 ='hcoyym1o_yesclean';                     /*DATABASE NAME*/
$dataBase_User_Name  ='hcoyym1o_yesclean';                          /*USER NAME    */
$dataBase_Password   ='e@kweu0YFrGO';                              /*PASSWORD     */

/*******************************CONNECTION STRING****************************/

		$con = mysqli_connect($hosting_Server,$dataBase_User_Name ,$dataBase_Password);
		if (!$con)
		  {
		  die('Could not connect: ' . mysqli_error());
		  }

		mysqli_select_db($con,$dataBase_Name);
?>