#!/usr/bin/php
<?php
/*
 *
 *  http://cryptopals.com/sets/1/challenges/2/
 *  Fixed XOR
 *  Write a function that takes two equal-length buffers and produces their XOR combination.
 *  If your function works properly, then when you feed it the string:
 *
 *  1c0111001f010100061a024b53535009181c
 *
 *  ... after hex decoding, and when XOR'd against:
 *  php hint:  $a ^ $b 	Xor (exclusive or) 	Bits that are set in $a or $b but not both are set.
 *
 *  686974207468652062756c6c277320657965
 *  
 *  ... should produce:
 *  
 *  746865206b696420646f6e277420706c6179
*/

if (isset($argv[1])) {
	$input_string = $argv[1];
}else{
	$input_string = '';
}

print Fixed_XOR($input_string);

function Fixed_XOR($test){

	$against = '686974207468652062756c6c277320657965';
	$result = $compare =  $original = $stuff = '';
	$counter = $compare_lenth = $original_length = 0;

	$compare = str_split(pack("H*", $test));
	$compare_lenth = strlen($compare);

	$original = str_split(hex2bin($against)); //hit the bull's eye
	$original_length = strlen($original);
	$counter = count($original);

	if($compare_lenth == $original_length){
		for($x = 0; $x < $counter; $x++)
				$result .= $compare[$x] ^ $original[$x];
	}

	return bin2hex($result); //the kid don't play 
}

?>