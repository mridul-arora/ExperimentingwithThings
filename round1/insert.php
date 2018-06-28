<?php
$con=mysqli_connect("localhost","root","","final");
echo "hello";
$arr=array();
if(isset($_POST['txt0']))
{
	for($i=0;$i<4;$i++)
 {
	 $arr[$i]=$_POST['txt'.$i];
 }
	print "<pre>";
	print_r($arr);
	print "</pre>";
}
	 $arr1=array('c','o','d','e');
	 $f=0;$point=0;
for($i=0;$i<4;$i++)

		 {
			 if($arr[$i]!=$arr1[$i])
			 {
				 $f=1;
				 break;

		 }
		 }
		 if($f==0)
			 $point++;
$arr2=array();
if(isset($_POST['nam0']))
{
	for($i=0;$i<4;$i++)
 {
	 $arr2[$i]=$_POST['nam'.$i];
 }
	print "<pre>";
	print_r($arr2);
	print "</pre>";
}
	 $arr3=array('p','o','d','e');
	 $f1=0;
for($i=0;$i<4;$i++)

		 {
			 if($arr2[$i]!=$arr3[$i])
			 {
				 $f1=1;
				 break;

		 }
		 }
		 if($f1==0)
			 $point++;
echo $point;
?>
