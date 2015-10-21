<html>
 <?php /*
 	Mauricio S. Perez
	Sept 15th, 2015
	Purpose: Paycheck with Switch Construct
	   */
 ?>
 <body>
	 <?php // sets letter paycheck variable to NULL and sets paycheck variable from form data
        $paycheck = "NULL";
        $hours = $_GET['hours'];
		$rate = (float)$_GET['rate'];
		$rateD = (float)$rate*2;
		$rateT = (float)$rate*3;
     ?>
	 <!--
     //Prompt hours worked with total
	 -->
    <p>With <?php echo $_GET["hours"];?> worked, your paycheck this week is: $
     
	 <!--
	 //Switch Statement in PHP: Will result in total paycheck amount
	 -->
	<?php // Uses the switch construct
			if($hours>=0 && $hours <=172){		//Checks for hours inputed between 0-168 hours.
				$ihours=(int)($hours);
				switch($ihours){
					case 168:
					case 167:
					case 166:
					case 165:
					case 164:
					case 163:
					case 162:
					case 161:
					case 160:
					case 159:
					case 158:
					case 157:
					case 156:
					case 155:
					case 154:
					case 153:
					case 152:
					case 151:
					case 150:
					case 149:
					case 148:
					case 147:
					case 146:
					case 145:
					case 144:
					case 143:
					case 142:
					case 141:
					case 140:
					case 139:
					case 138:
					case 137:
					case 136:
					case 135:
					case 134:
					case 133:
					case 132:
					case 131:
					case 130:
					case 129:
					case 128:
					case 127:
					case 126:
					case 125:
					case 124:
					case 123:
					case 122:
					case 121:
					case 120:
					case 119:
					case 118:
					case 117:
					case 116:
					case 115:
					case 114:
					case 113:
					case 112:
					case 111:
					case 110:
					case 109:
					case 108:
					case 107:
					case 106:
					case 105:
					case 104:
					case 103:
					case 102:
					case 101:
					case 100:
					case 99:
					case 98:
					case 97:
					case 96:
					case 95:
					case 94:
					case 93:
					case 92:
					case 91:
					case 90:
					case 89:
					case 88:
					case 87:
					case 86:
					case 85:
					case 84:
					case 83:
					case 82:
					case 81:
					case 80:
					case 79:
					case 78:
					case 77:
					case 76:
					case 75:
					case 74:
					case 73:		$paycheck="0.00 - You CANNOT WORK MORE THAN 72 HOURS A WEEK";break;
					case 72:
					case 71:
					case 70:
					case 69:
					case 68:
					case 67:
					case 66:
					case 65:
					case 64:
					case 63:
					case 62:
					case 61:
					case 60:
					case 59:
					case 58:
					case 57:
					case 56:
					case 55:
					case 54:
					case 53:
					case 52:
					case 51:
					case 50:
					case 49:
					case 48:
					case 47:
					case 46:
					case 45:
					case 44:
					case 43:
					case 42:
					case 41:		$paycheck= ((20*$rate)+(20*$rateD)+(($hours-40)*$rateT));break;
					case 40:		
					case 39:
					case 38:
					case 37:
					case 36:
					case 35:
					case 34:
					case 33:
					case 32:
					case 31:		
					case 30:
					case 29:
					case 28:
					case 27:
					case 26:
					case 25:
					case 24:
					case 23:
					case 22:
					case 21:		$paycheck= ((20*$rate)+(($hours-20)*$rateD));break;
					case 20:
					case 19:
					case 18:
					case 17:
					case 16:
					case 15:
					case 14:
					case 13:
					case 12:
					case 11:
					case 10:
					case 9:  
					case 8:  
					case 7:  
					case 6:  
					case 5: 
					case 4:
					case 3:
					case 2:
					case 1:		$paycheck= ($hours*$rate);break;
					case 0: 	$paycheck= "0.00 - Did you work this week???";break;
					default: 	$paycheck= "0.00 - You have entered an invalid amount of Hours.";
				}
			}else{
				$paycheck = "0.00 - You have entered an Invalid amount of Hours.";
			}
            echo $paycheck;
    ?>
    
    .</p>

 </body>
</html>
