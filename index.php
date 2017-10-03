<?php
$obj = new main();

class main{

private $html;

public function __construct()
{

	
  $date =  date('Y-m-d', time());
  echo "Solution 1: ";
  echo "The value of \$date: ".$date."</br>";

  $tar = "2017/05/24";
  echo "The value of \$tar: ".$tar."</br>";


  $year = array("2012", "396", "300","2000", "1100", "1089");
  echo "The value of \$year: </br>";
  print_r($year);

  $date_1 = strfun::rep($date);
  $this->html .= htmlTags::horizontalRule();
  strfun::cmp($date,$tar);
  $this->html .= htmlTags::horizontalRule();
  strfun::delimit($date);
  $this->html .= htmlTags::horizontalRule();
  strfun::num_count($date);
  $this->html .= htmlTags::horizontalRule();
  strfun::str_len($date);
  $this->html .= htmlTags::horizontalRule();
  strfun::ASCII($date);
  $this->html .= htmlTags::horizontalRule();
  strfun::last_chr($date,$count);
  $this->html .= htmlTags::horizontalRule();
  strfun::an_array($date_1);
  $this->html .= htmlTags::horizontalRule();
  strfun::leap_year($year);
  $this->html .= htmlTags::horizontalRule();
  strfun::leap_year_do($year);
//$this->html .= arrayFunctions::rep($myArray);

}

}

class strfun{

 // 2. Replace string   ...hh292

           static public function rep($date_1)

           {

               $date_1 = str_replace('-','/',$date_1);
               echo"Solution 2: </br>";
               echo "Output after replacing --->".$date_1."\r";
               return $date_1;
           }

          
 // 3. compare $date with $tar  ...hh292

           public static function cmp($date_1,$tar_1)
        
           {
           	 echo"Solution 3:";

   		        if (strcmp($date_1, $tar) > 0) 

    	        {
      		         echo 'the future'."\r";
                }

        	         elseif (strcmp($date_1, $tar) < 0)
            
                    {
	                    echo 'the past';
                    }

        		     elseif (strcmp($date_1, $tar) == 0)
            	    {

               		echo "Output ---- >Oops"."\r";
            	    }

   	        }

    // 4. Search '/' if more then one '/' delimit with ' '.

   	        public static function delimit($date_1)
            
            {

                //echo 'Output'.$date_1;
                $domain = strpos($date_1,"/");
                echo 'Solution 4:'.$domain;
                return(count);     

            }

    //5. Count the number of words in $date
            public static function num_count($date)
            {        
            
            $domain = str_word_count($date);
            echo "Solution 5: </br>";

            echo'Number of words --> '.$domain."\r"; 

            }

    //6. Return the length of string 

            public static function str_len($date)
            {        
            
            $count = strLen($date);
            echo"Solution 6: ";
            echo'length of string--> '.$count."\r"; 

            return count($count);

            }

    //7. Retrun the ASCII value of first string      ...hh292
  
            public static function ASCII($date)
            {

            
            $domain = ord($date);
            echo "</br>Solution 7: ";
            echo '</br>Output --->'.$domain."\r";

            }        

    //8. Return the last 2 character of string     ...hh292

          public static function last_chr($date,$count)
            {
                $characters="2";
                $start = $count - $characters  ;   
            	$domain_1 = substr($date , $start ,$characters); 
            	echo "Solution 8: ";
                echo '</br>Input --->'.$date."\r";
            	echo "Output--->".$domain_1."\r";
            }        




    //9. Break $date into an array and set “separator” parameter as "/"   ...hh292  
    
           public static function an_array($date) 

           { 
           echo '</br>Input --->'.$date."\r";
           $domain = explode("/", $date);
           //echo'</br>Output --->'."\r";
           print_r($domain);
           echo '<hr>';
           }	

    //10. leap year

public static function leap_year($year)
{
	  echo "Using foreach loop </br>"."\r";
            foreach($year as $yr)
            {
            	
           // echo "Year --> ".$yr."\r";
            $yer = ((($yr % 4) == 0) && ((($yr % 100) != 0) || (($yr % 400) == 0)));
  
            switch ($yer) {
            	
            	case '1':
            		echo"Year-".$yr."  True"."\r";
            		break;

            	
            	default:
            	    echo"Year-".$yr."  False  "."\r";
            		break;
                    }
            }


}

public static function leap_year_do($year)
{

 	    $domain = count($year);
   		
   		echo "Using Do while loop"."\r";
   		$i = 0;
   		do {
   			 
   			 $yr = $year[$i];
   			 //echo "Year - ".$yr;

   			 //echo "output-->".$domain; 

             $yer = ((($yr % 4) == 0) && ((($yr % 100) != 0) || (($yr % 400) == 0)));
            // echo "string".$yer;
            	 
            switch ($yer) {
            	
            	case 1:
            	echo "Year -".$yr."  True"."\r";
            		 //echo"true  "."\r";
            		break;
            	
            	default:
            	    echo"Year --> ".$yr."  False"."\r";
            		break;
            }

             $i ++ ;

             //echo "do".$domain."\r";
       } while ($i < $domain);


}

}
class htmlTags {

    static public function horizontalRule() {
      return '</hr>';
    }
    
  }


?>