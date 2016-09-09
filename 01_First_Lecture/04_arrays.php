
<?php
require_once '../includes/include.php';

$exerciceSheet = new ExerciceSheet("04", "Arrays");


//-----------------------------------------------------------------------------------------------------------------------------------
    /*
     * BEGIN DESCRIPTION
     * Arrays are a special kind of Variables.
     * They are container for multiple Variables.
     * You already met the array operator in the strings exercice.
     * You instanciate an empty array like this:
     * $array = array();
     * you can put an element in an array like this:
     * $otherarray[0] = 1;
     * Not empty arrays contain always key value pairs. In this case, the key is 0, and the value is 1.
     * END DESCRIPTION
     */


    $testFunction = function(){
        /*BEGIN TODO
        create a variable $emptyArray and assign an empty array to it.
        then create another variable $fullArray and assign the value 1 to the first element.
    */

        //END TODO


        if(!isset($emptyArray)){
            $emptyArray = null;
        }


        if(!isset($fullArray)){
            $fullArray = null;
        }
        $firstcondition = false;
        
        if(!is_array($emptyArray)){
			print("<br>Your Variable \$emptyArray is not an array<br>");
		}elseif(count($emptyArray)!=0){
			print("<br>Your Variable \$emptyArray is not an empty array<br>");
		}else{
			$firstcondition = true;
		}
		
		$secondcondition = false;
        
        if(!is_array($fullArray)){
			print("<br>Your Variable \$fullArray is not an array<br>");
		}elseif(count($fullArray)!=1){
			print("<br>Your Variable \$fullArray has more than one element<br>");
		}elseif($fullArray[0]!=1){
			print("<br>Your Variable \$fullArray has no key 0 that points to the value 1<br>");
		}else{
			$secondcondition = true;
		}

        
        if($firstcondition && $secondcondition){
            return true;
        }

        return false;
    };

    $exerciceSheet->addExercice(new Exercice("
    
       <h4>Array Assignment</h4>
    if you made it right, you should see no error messages
    ",$testFunction));





//-----------------------------------------------------------------------------------------------------------------------------------
    /*
     * BEGIN DESCRIPTION
     * In php, you can use numbers or strings as keys of an array:
     * you can do it like this:
     * $array[0]=1;
     * $array['text']=1;
     * END DESCRIPTION
     */


    $testFunction = function(){
        /*BEGIN TODO
        create a variable $array and assign the value 1 to the key 'firstkey', and 2 two the key 'secondkey'
    */


        //END TODO


        if(!isset($array)){
            $array = null;
        }

        $firstcondition = false;
        
		if(!is_array($array)){
			print("<br>Your Variable \$array is not an array<br>");
			return false;
		}
		
		if($array['firstkey']==1 && $array['secondkey']==2){
			return true;
		}else{
			print("<br>your \$array['firstkey'] is '".$array['firstkey']."' and your \$array['secondkey'] is '{$array['secondkey']}'<br>");
			
		}
		

        return false;
    };

    $exerciceSheet->addExercice(new Exercice("
    
       <h4>Array Assignment with Strings</h4>
    if you made it right, you should see no error messages
    ",$testFunction));
    
    

//-----------------------------------------------------------------------------------------------------------------------------------
    /*
     * BEGIN DESCRIPTION
     * In php, you can add an element to an array by typing:
     * $array[] = 1;
     * this is called the array push operator
     * It will use highest existing numeric key, add 1 and use that als key for the new element.
     */


    $testFunction = function(){
        /*BEGIN TODO
			first create an array named $array and assign the value 'text' to the key 5
			then append two times the element 'text' with the push operator to the array
		*/


        //END TODO


        if(!isset($array)){
            $emptyArray = null;
        }

        $firstcondition = false;
        
		if(!is_array($array)){
			print("<br>Your Variable \$array is not an array<br>");
			return false;
		}
		
		if($array[6]=='text' && $array[7]=='text'){
			return true;
		}else{
			print("<br>your \$array['firstkey'] ".json_encode($array)."<br>");
			
		}
		

        return false;
    };

    $exerciceSheet->addExercice(new Exercice("
    
       <h4>Array Push operator</h4>
    if you made it right, you should see no error messages
    ",$testFunction));
    
    
    
//-----------------------------------------------------------------------------------------------------------------------------------
    /*
     * BEGIN DESCRIPTION
     * You can also assign elements directly to an array like this
     * $array = array(0,1,2,3);
     * this will produce an array with:
     * $array[0] is 0
     * $array[1] is 1
     * $array[2] is 2
     * $array[3] is 3
     * 
     * you can also use your own keys like this
     * $array = array(8 => 8, 10 => 'text');
     */


    $testFunction = function(){
        /*BEGIN TODO
			first create an array named $array and assign with the method specified above the value 1 to the key 'firstkey' 
			and the value 2 to the key 'secondkey'
		*/


        //END TODO


        if(!isset($array)){
            $emptyArray = null;
        }

        $firstcondition = false;
        
		if(!is_array($array)){
			print("<br>Your Variable \$array is not an array<br>");
			return false;
		}
		
		if($array['firstkey']==1 && $array['secondkey']==2){
			return true;
		}else{
			print("<br>your \$array['firstkey'] is '".$array['firstkey']."' and your \$array['secondkey'] is '{$array['secondkey']}'<br>");
			
		}
		

        return false;
    };

    $exerciceSheet->addExercice(new Exercice("
    
       <h4>Array direct assignement</h4>
    if you made it right, you should see no error messages
    ",$testFunction));
    
    
    
    //-----------------------------------------------------------------------------------------------------------------------------------
    /*
     * BEGIN DESCRIPTION
     * To access the value of a key in an array, you put the key you want in the array operator on the right side of a statement
     * The left side is where you put data in, the right side is where the data comes from.
     * $array[0] = 1;
     * $arrayvalue = $array[0];
     * 
     * now $arrayvalue is 1;
     */


    $testFunction = function(){
		
		$array['key'] = '00';
		
        /*BEGIN TODO
			create an variable $arrayvalue to which you assign the value of the key 'key' of the array $array
		*/


        //END TODO


        if(!isset($arrayvalue)){
            $arrayvalue = null;
        }


		print("<br>Your \$arrayvalue is '$arrayvalue'.<br>");

		if($arrayvalue === '00'){
			return true;
		}

		return false;
    };

    $exerciceSheet->addExercice(new Exercice("
    
       <h4>Array value access</h4>
       if you made it right, the text below should be:<br>Your \$arrayvalue is '00' 
    ",$testFunction));
    
    
    /**
     * a make a comment here, that the file is changed
     **/ 
    
    

?>
