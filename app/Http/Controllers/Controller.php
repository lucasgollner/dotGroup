<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){


    }

    public function questaoUm(){

    	$txt = "";

    	for($i = 1; $i <= 100; $i++){

    		if(($i % 3) == 0 and ($i % 5) == 0)
    			$txt .= "FizzBuzz<br>";
    		else if(($i % 3) == 0)
    					$txt .= "Fizz<br>";
    			 else if(($i % 5) == 0)
    			 			$txt .= "Buzz<br>";
    			 	  else
    			 	  		$txt .= $i."<br>";
    	}

    	return $txt."<br<br><br>(Thanks / Gracias).";

    }

    public function questaoDois(){

    	if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true){

    		header('Location: http://www.google.com');
    		exit();

    	}else if (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true){

    		header('Location: http://www.google.com');
    		exit();

    	}else {

    		return "Você não está logado! (Sorry / LoSiento).";

    	}

    }

    public function questaoTres(){

    	/*
    	class MyUserClass{

    		public function getUserList(){
    			$dbconn = new DatabaseConnection('localhost','user','password');
                
                if(!dbconn) return $dbconn->error();
                
                $results = $dbconn->query('select name from user order by name asc');
                                    
    			return $results;
    		}

    	}
    	*/

    	return "O Código REFATORADO está <s>comentado</s> e disponível no método <b>\"questaoTres\"</b>. (Thanks / Gracias).";

    }


}
