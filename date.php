<?/*
$CustomerSLADays = 3;
$CustomerSLATime = 24;

echo 'SLADays: '.$CustomerSLADays.'<br/>';
$additionalSLADays = $CustomerSLADays;
//Fri and Sat logic
echo date('D')." == 'Fri' && ".strtotime('now')." > ".mktime(21, 15, 0, date('n'), date('d'), date('Y'))."<br/>";
echo date('D')." == 'Sat' && ".strtotime('now')." > ".mktime(12, 15, 0, date('n'), date('d'), date('Y'))."<br/>";
echo strtotime('now')." > ".mktime($CustomerSLATime, 15, 0, date('n'), date('d'), date('Y'))."<br/>";
echo strtotime('now')." > ".mktime(0, 15, 0, date('n'), date('d'), date('Y'))."<br/>";
echo date('Y-m-d',mktime($CustomerSLATime, 15, 0, date('n'), date('d'), date('Y')))."<br/>";
echo date('Y-m-d',mktime(0, 15, 0, date('n'), date('d'), date('Y')))."<br/>";
if(date('D') == 'Fri' && strtotime('now') > mktime(21, 15, 0, date('n'), date('d'), date('Y'))){
	echo 'Friday<br/>';
	$additionalSLADays += 3;
}else if(date('D') == 'Sat' && strtotime('now') > mktime(12, 15, 0, date('n'), date('d'), date('Y'))){
	echo 'Saturday<br/>';
	$additionalSLADays += 2;
}else if(strtotime('now') > mktime($CustomerSLATime, 15, 0, date('n'), date('d'), date('Y'))){
	echo 'Niether<br>';
	$additionalSLADays++;
}

$nextSLAdateTimestamp = mktime(date('H'), date('i'), date('s'), date('n'), (date('d') + $additionalSLADays), date('Y'));
echo date('Y-m-d',mktime(date('H'), date('i'), date('s'), date('n'), (date('d') + $additionalSLADays), date('Y'))).'<br/>';
while(date("D", $nextSLAdateTimestamp) == 'Sun'|| isDateHoliday(date('Y-m-d', $nextSLAdateTimestamp))){
	$additionalSLADays++;
	$nextSLAdateTimestamp = mktime(date('H'), date('i'), date('s'), date('n'), (date('d') + $additionalSLADays), date('Y'));
}

$batchSLAdate = date('Y-m-d', $nextSLAdateTimestamp);
*/

$firstOfTheMonth = mktime(1,0,0,3,1);
echo date('Y-m-d',$firstOfTheMonth).PHP_EOL;
$lastMonth = strtotime("-1 month",$firstOfTheMonth);
echo date('Y-m-d',$lastMonth).PHP_EOL;
echo date('Y-m-t',$lastMonth).PHP_EOL;


//$days = '5';
//$dueDate = strtotime('2013-02-23');
//$remindDate = date('Y-m-d',strtotime("+5 days",$dueDate));
//
//echo 'Due: '.$dueDate."\n";
//echo 'Remind: '.$remindDate."\n";
//
//$days = '5';
//$dueDate = strtotime('2013-02-23');
//$remindDate = date('Y-m-d',strtotime("-5 days",$dueDate));
//
//echo 'Due: '.$dueDate."\n";
//echo 'Remind: '.$remindDate."\n";