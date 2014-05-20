<?php 

//***********************************
//***********************************
//         Function List
//***********************************
//***********************************

// Create a function that totals the value in our hand
function getTotal($hand)
{
    $total = 0;
    $hold = []; 
    foreach ($hand as $card)
    {
        
        $hold[] = explode('-', $card);
       
    }
    foreach ($hold as $card){
    	
        switch($card[0]) {
    	   	case 'A':
    	   		break;
    	   	case 'K':
    	   	case 'Q':
    	   	case 'J':
                $total +=10;
                break;
            default:
    	   		$total += (int)$card[0];
    	   		break;
    	   }

    }
    foreach ($hold as $card){

    	if($card[0] == 'A') {
    		if(($total + 11) <=	 21) {
    			$total += 11;
    		} else {
    			$total += 1;
    		}

    	}
    }


    return $total;
}

// Create a function that shows the value of our hand
function check_value($total) {
    
    
    if($total > 21) {
        $value = "Your hand busted with a value of " . $total . ".\n";
    } else {
        $value = "The value of your hand is " . $total . ".\n";
    }

    return $value;
}


//***********************************
//***********************************
//          Game Begin
//***********************************
//***********************************



$hand = array('A-H', '8-S');

$total = getTotal($hand);

echo check_value($total);


 ?>