<pre>
<?php
function _getFromParts($from)
{
	$parts = array('address' => '', 'name' => '' );

	if( stripos($from,'<') === false && stripos($from,'>') === false ){
		$parts['address'] = $from;
		return $parts;
	}

	$parts['name'] 		= substr($from,0,strpos($from,'<'));
	$parts['address']= substr($from,strpos($from,'<')+1,strlen($from)-strpos($from,'<')-2);
	return $parts;
}
$parts = _getFromParts('Tom Bartolucci<tbartolucci@billtrust.com>');
print_r($parts);
$parts = _getFromParts('<tbartolucci@billtrust.com>');
print_r($parts);
$parts = _getFromParts('tbartolucci@billtrust.com');
print_r($parts);
?>
</pre>