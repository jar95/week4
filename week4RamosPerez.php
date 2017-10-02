<?php
	
	/* Week 4 homework
		working with string functions  */

	// Get a string of a date and store it in a date1.
	$dateOfDay = getdate();
	$date1     = $dateOfDay[mday].$dateOfDay[mon].$dateOfDay[year];
	//$year      = array('0'=>1012, '1'=>396, '2'=>300, '3'=>2000, '4'=>1100, '5'=>1089);	
	$year      = array(1012,396,300,2000,1100,1089);
	// get the formats of date as string
	$strDate1 = substr($date1,0,1).'-'.substr($date1,1,2).'-'.substr($date1,-4);
	$strDate2 = str_replace('-','/',$strDate1);

	
	// Display the values of variables
	echo 'The value of $strDate1  : ' . $strDate1 . "<br>";
	echo 'The value of $strDate2  : ' . $strDate2 . "<br>";
	print_r ($year); 
	echo "<br>";
	echo "<br>";

	
	//Week4 Homework Q2: Replacing $strDate1 format
	$strDate1 = str_replace('-','/',$strDate1);
	echo 'Now, the value of $strDate1 : ' . $strDate1 . "<br>";
	echo "<br>";

	//Week4 homework Q3: Comparing Variables
	echo " Working with IF conditional " . "<br>";
	if ($strDate1 > $strDate2) {
		echo " The future ";
	} else if ($strDate1 == $strDate2) {
		echo " Ooops.. ";
	} else {
		echo " Ooops.."; 
	}
	echo "<br>";
	echo "<br>";


	//Week4 homework Q4 : Seraching characters in a string
	echo " Shows position " . "<br>";
	$pos = strpos($strDate1,'/');
	echo $pos . ' ';
	$newpos = strpos($strDate1,'/',$pos+1);
	echo $newpos;
	echo "<br>" . "<br>";

	//Week4 homework Q5: Count Function
	echo " Working with count function  -->" . count($strDate1);
	echo "<br>" . "<br>";


	//Week4 homework Q6: Count Number of words in a strings
	$noWords = strlen($strDate1);
	echo ' Number of words in $strDate1  : '  . $noWords;
	echo "<br>";



	//Week4 homework Q7: show ASCII character
	echo " The character of the first string -->A   " . ord('A');
	echo "<br>" , "<br>";


	//Week4 homework Q8: Returning last 2 characters
	echo ' The last two characters of $strDate1 '. substr($strDate1,-2);
	echo "<br>", "<br>";

	//Week4 homework Q9: Using explode function
	echo " Breaking the string $strDate1 into string array  " . "<br>";
	$dateArray    = explode('/',$strDate1);
	$numOfElement = count($dateArray);
	$stringOut    = $dateArray[0];
	
	for ($i=1; $i<=$numOfElement; $i++) {
		echo $stringOut . ' ';
		$stringOut = $dateArray[$i];		
	}
	echo "<br>", "<br>";
	                                                                                 
	        									                                      
	//Week4 homework Q10: LEAP YEAR                                                   
    									                                              
	// Loop that get all posible years
	foreach ($year as $numberValue) {                                                             
		
		// Assign false or true if a year is divisible 
		
		$divi = array();
		$divi[0] = $numberValue % 4;       
		$divi[1] = $numberValue % 100; 
		$divi[2] = $numberValue % 400;

		for ($i=0; $i<=2; $i++) {
						
			switch ($divi[$i]) {
				case 0:
					if ($i == 2) {
						$output = "false";
						break;
					}							
				default:
					if ($i == 0) {
						$output = "False";
						break;
					} else {
						$output = "True";

					}
					
			}
		}
	echo "The year $numberValue -- /$output" . "<br>";
	}
?>	