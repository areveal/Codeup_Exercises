<?php 

$hand = array('A-H', 'Q-D', '4-D');

function getTotal($hand)
{
    $total = 0;
    $hold = []; 
    foreach ($hand as $card)
    {
        
        $hold[] = explode('-', $card);
       
    }
    for($i = 0; $i < count($hold); $i++) {
    	switch($hold[$i][0]) {
    	   	case 'A':
    	   		break;
    	   	case 'K':
    	   		$total +=10;
    	   		break;
    	   	case 'Q':
    	   		$total +=10;
    	   		break;
    	   	case 'J':
    	   		$total +=10;
    	   		break;
    	   	default:
    	   		$total += (int)$hold[$i][0];
    	   		break;
    	   }
    }
    for($i = 0; $i < count($hold); $i++) {
    	if($hold[$i][0] == 'A') {
    		if(($total + 11) <=	 21) {
    			$total += 11;
    		} else {
    			$total += 1;
    		}
    	}
    }


    return $total;
}

$total = getTotal($hand);

if($total > 21) {
	echo "Your hand busted with a value of " . $total . ".\n";
} else {
	echo "The value of your hand is " . $total . ".\n";
}

 ?>