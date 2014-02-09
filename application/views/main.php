<!DOCTYPE html>
<html lang='ina'>
	<head><title>Web - <?php echo $title;?></title></head>
	<!--Load Cascading Style Sheet-->
	<link href='<?php echo base_url()."assets/css/ujikom.css"?>' rel='stylesheet' />
	<link href='<?php echo base_url()."assets/css/style.css"?>' rel='stylesheet' />
	<!--Load Javascript-->
	<script src='<?php echo base_url()."assets/js/jquery.js"?>'></script>
	<script src='<?php echo base_url()."assets/js/ujikom.js"?>'></script>
	<base href='<?php echo base_url()?>' />
<body>
	<div class='col-sm-3'>
		<ul class='nav nav-pills nav-stacked'>
			<li class='active'><a href='#'>Home</a></li>
			<li><a href='#'>About</a></li>
			<li><a href='#'>Contact</a></li>
		</ul>
	</div>
	<div class='col-sm-9'>
		<?php 
		if(isset($page)){
			$this->load->view('admin/'.$page);
		}else{
			echo "404 Page Content";
		}
		?>
	</div>
</body>
</html>