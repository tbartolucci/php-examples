<?php
/**
 * This method returns a SHA-2 Hash
 *
 * NOTE: the salt value will only be of length $SALT_LENGTH, if you pass in a
 * string longer than $SALT_LENGTH then only the last $SALT_LENGTH chacters will
 * be used.
 *
 * @param $passedValue string
 * @param $salt string
 * @return string
 */
function toHash($passedValue,$salt = null)
{
	if($salt === null)
	{
		$salt = substr(md5(uniqid(rand(),true)),0,9);
	}
	else
	{
		$salt = substr($salt,-9);
	}

	return hash('sha512',$passedValue.$salt).$salt;
}

echo toHash('Billtrust1');