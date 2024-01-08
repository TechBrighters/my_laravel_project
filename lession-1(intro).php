<?php 
//GLOBAL $x;
$x = 5;
function login(){
	STATIC $x = 0;
	$x = $x + 1;
	return $x;
}
echo login();
echo login();
echo login();


define('CONSTANTVAR','Mihil');
echo __FUNCTION__;
//echo $x;
//echo "My First Program";
//print_r();
	/*echo 'Hello World';
	echo "sdasdas";
	echo "sdasdas";
	echo "sdasdas";
	echo "sdasdas";
	echo "sdasdas";*/
	//$name = 'Test';
	//echo $name;
	#$Name = 'Test';
	//$name = 'Demo';
	//echo $name;

	$fname = 'Mihil';
	$lname = 'Vyas';
	$mail = 'mihil@gmail.com';
	$dob = '22-07-1993';
	$arr = ['Mihil','Vyas','mail','3534'];
	echo "<pre>";
	print_r($arr);
	$name = "My Variable";
	$globalVariable = 'Global';
	$x = 0;
	// echo $x++; //$x + 1 0 +1 : 1
	// echo $x; //1
	// echo ++$x; //1 +1 :2
	function Test_Fun(){
		//GLOBAL $globalVariable;
		//$name = 'Hello';
		STATIC $x = 0;
		//$x = 0;
		$x = $x + 1;
		return $x; 
		//echo $globalVariable;
	}
	//echo Test_Fun('Hello Good Morning');
	// echo Test_Fun();
	// echo Test_Fun();
	// echo Test_Fun();
	
	define("CONSTANT_NAME","123456"); //integer,double,string,boolean
	//echo CONSTANT_NAME;
	//echo __FILE__;
	//echo __LINE__;

	$password = false;
	$email = true;
	if($email == true or $password == true){
		echo 'iff-->';
	}
	
	$a = 10;
	$a += 30;
	echo $a;
	//echo $a *= 5; //10 + 5:15
	$b = 10;
	//echo $a + $b;
	echo $b++.'<br/>';//10
	$b++;//11
	echo $b.'<br/>';//11
	echo --$b.'<br/>';//12
	echo --$b.'<br/>';//13
	echo $b.'<br/>';//13
	echo $b + 20;//33
	//if($a !== $b){
		//echo 'iff-->';
	//}else{
		//echo 'else--->';
	//}
?>


<html>
	<p id="room1">Normal Room : <span id="p1">250</span></p><button onclick="bookNow1()">Book</button><br/>
	<p id="room2">Delux Room : <span id="p2">350</span></p><button onclick="bookNow2()">Book</button><br/>
	<p id="room3">Super Delux Room : <span id="p3">750</span></p><button onclick="bookNow3()">Book</button><br/>
	<div id="booking">
		<p>Total : <span id='total'>0</span></p>
	</div>
</html>
<script>
	let x= 15;
	let x = 10;
	console.log(x);
	function bookNow1(){
		var r1 = document.getElementById('room1').innerText;
		var total = document.getElementById('total').innerText;
		let stringSplt = r1.split(':');
		console.log(stringSplt[1].trim());
		console.log(total.trim());
		console.log(parseInt(total) + parseInt(stringSplt[1].trim()));
		var bookingDiv = document.getElementById('booking');
		var ulCreate = document.createElement('ul');
		var liCreate = document.createElement('li');
		liCreate.innerText = r1;
		ulCreate.appendChild(liCreate);
		bookingDiv.appendChild(ulCreate);
		document.getElementById('total').innerHTML = parseInt(total) + parseInt(stringSplt[1].trim());
	}
	// var x = 4; 
	// console.log(x++); //x+1 : 5, x += 1
	// console.log(x);
	// console.log(x++);
	// console.log(++x);
	// console.log(x);

	// let x = 5;
	// let y = 7;
	// document.write(x & y);

// 	1	2	4	8	16	32	64
// 5 : 1	0	1	0	0	0	0
// 7 : 1	1	1	0	0	0	0
// | : 1	1	1	0	0	0	0
</script>