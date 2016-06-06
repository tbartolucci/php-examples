<?php
$amount = '$10.0023432432514325123';
echo str_replace('$','',str_replace(',','',$amount)).'<br/>';
echo number_format($amount,2,'','').'<br/>';
echo number_format(str_replace('$','',str_replace(',','',$amount)),2,'','').'<br/>';
