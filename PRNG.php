<?php
require "cryptshadow.php";
$input=$_GET["input"];
function jessie32($seed1){
	$seed2=jessie32a($seed1);
	for ($x = 0; $x <= 7; $x++) {
		$seed2=jessie32a($seed2);
	}
	$seed2=abs($seed2);
	return $seed2;
}
function jessie32a($seed){
	$tmp1=0; //first byte
	$tmp2=0; //second byte
	$tmp3=0; //third byte
	$tmp4=0; //fourth byte
	$tmp5=0; #!
	$tmp6=0;
	$tmp7=0; #!
	$tmp8=0;
	$tmp9=0; #!
	$tmp10=0;
	$tmp11=0; #!
	$tmp12=0; //end stage 1
	$tmp13=0;
	$tmp14=0;
	$tmp15=0;
	$tmp16=0; //end stage 2
	$tmp17=0;
	$tmp18=0;
	$tmp19=0;
	$tmp20=0;
	$converted=DecTo32($seed);
	$tmp1=$converted[0];
	$tmp2=$converted[1];
	$tmp3=$converted[2];
	$tmp4=$converted[3];
	$tmp5=$tmp1&$tmp2;
	$tmp6=$tmp1^$tmp4;
	$tmp7=$tmp2&$tmp3;
	$tmp8=$tmp2^$tmp1;
	$tmp9=$tmp3&$tmp4;
	$tmp10=$tmp3^$tmp2;
	$tmp11=$tmp4&$tmp3;
	$tmp12=$tmp4^$tmp1;
	$tmp5=~$tmp5;
	$tmp7=~$tmp7;
	$tmp9=~$tmp9;
	$tmp11=~$tmp11;
	$tmp13=$tmp5+$tmp6;
	$tmp13=fmod($tmp13,256);
	$tmp14=$tmp7+$tmp8;
	$tmp14=fmod($tmp14,256);
	$tmp15=$tmp9+$tmp10;
	$tmp15=fmod($tmp15,256);
	$tmp16=$tmp11+$tmp12;
	$tmp16=fmod($tmp16,256);
	$tmp1=$tmp13;
	$tmp2=$tmp14;
	$tmp3=$tmp15;
	$tmp4=$tmp16;
	$seed=a32ToDec($tmp1,$tmp2,$tmp3,$tmp4);
	return $seed;
	}
$output=jessie32($input);
?>
<?php
echo ($output);
?>