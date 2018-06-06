<?php
function a32ToDec($input1,$input2,$input3,$input4){
	$input1=fmod($input1,256);
	$input2=fmod($input2,256);
	$input3=fmod($input3,256);
	$input4=fmod($input4,256);
	$output=$input4;
	$output=$output*256;
	$output=$output+$input3;
	$output=$output*256;
	$output=$output+$input2;
	$output=$output*256;
	$output=$output+$input1;
return $output;
}
function decTo32($input){
	$input=fmod($input,4294967295);
	$output1=fmod($input,256);
	$input=$input/256;
	$input=floor($input);
	$output2=fmod($input,256);
	$input=$input/256;
	$input=floor($input);
	$output3=fmod($input,256);
	$input=$input/256;
	$input=floor($input);
	$output4=fmod($input,256);
	return array($output1,$output2,$output3,$output4);
}
?>