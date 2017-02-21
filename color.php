<?php
// variables to store the inputs
$myChoice;
$compChoice;

// check if input is given or not
if (isset($_POST['myChoice']) && isset($_POST['compChoice'])) 
	{

		$myChoice=$_POST["myChoice"];
		$compChoice=$_POST["compChoice"];

	    if (!isset($_COOKIE['user']) && !isset($_COOKIE['computer'])) 
		{
               // user cookie  
		       $cookie_name = "user";
		       $cookie_value = 0;
		       setcookie($cookie_name, $cookie_value, time() + (86400 * 30));

		       // computer cookie
		       $cookie_computer = "computer";
		       $cookie_value_computer = 0;
		       setcookie($cookie_computer, $cookie_value_computer, time() + (86400 * 30));
		       computeScore($myChoice,$compChoice);  


        }
		      
		else
		{
		  computeScore($myChoice,$compChoice);		
		}


}
 


function computeScore($myChoice,$compChoice)
{ 
        
				// check if user cookie value is more than 20
				if ($_COOKIE['user']>=20 || $_COOKIE['computer']>=20) {
                    $_COOKIE['user']=0;
                    $_COOKIE['computer']=0;					
				}


				//check if user and computer inputs are same
				if ($myChoice==$compChoice) {
					 
					 echo "It's a draw";
				}

				//if user choose rock and computer choose scissors 
				elseif ($myChoice==1 && $compChoice==3) {
					 
					 $_COOKIE['user'] = (int) $_COOKIE['user']+ 3;
					 
					  
					 
				}

				//if user choose scissors and computer choose rock
				elseif ($myChoice==3 && $compChoice==1) {
					 
					 $_COOKIE['computer'] = (int) $_COOKIE['computer']+ 3;
					 
				}

				//if user choose scissors and computer choose paper
				elseif ($myChoice==3 && $compChoice==2) {
					 
					 $_COOKIE['user'] = (int) $_COOKIE['user']+ 2;
					 
				}

				//if user choose paper and computer choose scissors
				elseif ($myChoice==2 && $compChoice==3) {
					 
					 $_COOKIE['computer'] = (int) $_COOKIE['computer']+ 2;
					 
				}

				//if user choose rock and computer choose paper
				elseif ($myChoice==1 && $compChoice==2) {
					 
					 $_COOKIE['computer'] = (int) $_COOKIE['computer']+ 2.5;
					 
				}

				//if user choose paper and computer choose rock
				elseif ($myChoice==2 && $compChoice==1) {
					 
					 $_COOKIE['user'] = (int) $_COOKIE['user']+ 2.5;
					 
				}

			setcookie('user', $_COOKIE['user'], time() + (86400 * 30));
			setcookie('computer', $_COOKIE['computer'], time() + (86400 * 30));

}

header('Location: rps1.php');
 
?>