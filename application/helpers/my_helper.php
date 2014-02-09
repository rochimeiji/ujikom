<?php
	function alert($msg){
		echo "<script>alert('$msg');</script>";
	}
	function location($url,$msg=false){
		if($msg){
			$msg = "alert('$msg')";
		}
		echo "<script>$msg;location='$url';</script>";
	}
	function confirm($event,$msg){
		echo "on$event='confirm(\"$msg\")'";
	}
?>