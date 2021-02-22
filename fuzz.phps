<?php 
for($i = 1; $i<= 100; $i++){

$str=""; //$str‚Æ‚¢‚¤•Ï”‚ð‰Šú‰» 
if($i %15==0){
$str="FizzBuzz";
}
else if($i %3 ==0){ //‚R‚ÅŠ„‚Á‚Ä—]‚è0‚È‚ç‚Î 
$str="Fizz"; 
} 
else if($i%5 ==0){//‚T‚ÅŠ„‚Á‚Ä—]‚è0‚È‚ç‚Î 
$str="Buzz"; 
} 
if($str == ""){//$str‚ª‹ó‚È‚ç‚Î 
$str = $i;//$i‚Æ‚¢‚¤•Ï”•\Ž¦ 
} 
echo $str."\n";
echo"<BR>";
} 

?> 