<?	
$twoDaysFromNow = strtotime("+2 days");
$payDate = strtotime('2012-05-2');

$diff = $twoDaysFromNow - $payDate;
echo 'Two Days From Now: '.$twoDaysFromNow.'<br/>';
echo 'Payment Date: '. $payDate .'<br/>';
echo 'Diff: '.$diff.'<br/>';

if(  $diff <= (60*60*48) && $twoDaysFromNow >= $payDate ){
	echo 'TRUE';
}else{
	echo 'FALSE';
}
//if the scheduled payment is less than 2 days from now
echo 'Two Days: '.(60*6048);