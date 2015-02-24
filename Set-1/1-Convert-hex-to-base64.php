#!/usr/bin/php
<?php
/*
 *  Convert hex to base64
 *  The string:
 *  49276d206b696c6c696e6720796f757220627261696e206c696b65206120706f69736f6e6f7573206d757368726f6f6d
 *  Should produce:
 *  SSdtIGtpbGxpbmcgeW91ciBicmFpbiBsaWtlIGEgcG9pc29ub3VzIG11c2hyb29t
 *  So go ahead and make that happen. You'll need to use this code for the rest of the exercises.
 *  */

$salad = "49276d206b696c6c696e6720796f757220627261696e206c696b65206120706f69736f6e6f7573206d757368726f6f6d";
$compare = 'SSdtIGtpbGxpbmcgeW91ciBicmFpbiBsaWtlIGEgcG9pc29ub3VzIG11c2hyb29t';
$stuff = '';

foreach(str_split($salad,2) as $hex){
	$soup .= chr(hexdec($hex));
	}
	
echo $soup;

$lunch = base64_encode($soup);
if($compare == $lunch)
	print "\nGood stuff";
else
	print "\nNot good";
	print "\n".$compare;
	print "\n".$lunch;
?>