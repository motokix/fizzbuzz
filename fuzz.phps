<?php 
for($i = 1; $i<= 100; $i++){

$str=""; //$str�Ƃ����ϐ��������� 
if($i %15==0){
$str="FizzBuzz";
}
else if($i %3 ==0){ //�R�Ŋ����ė]��0�Ȃ�� 
$str="Fizz"; 
} 
else if($i%5 ==0){//�T�Ŋ����ė]��0�Ȃ�� 
$str="Buzz"; 
} 
if($str == ""){//$str����Ȃ�� 
$str = $i;//$i�Ƃ����ϐ��\�� 
} 
echo $str."\n";
echo"<BR>";
} 

?> 