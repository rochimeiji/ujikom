<html>
	<head><title>Login</title></head>
	<link href='<?php echo base_url()."assets/css/bootstrap.css"?>' rel='stylesheet' />
	<base href='<?php echo base_url()?>' />
<body>
	<div style='margin:auto;width:300px;margin-top:150px;'>
		<form method='post'>
			<legend>
				<h3>Login Admin</h3>
			</legend>
			<?php
				if($this->session->userdata('msg')){
					echo $this->session->userdata('msg');
					$this->session->unset_userdata('msg','');
				}
			?>
			<div class='form-group'>
				<label>Username</label>
				<input type='text' class='form-control' name='user' placeholder='Username' required />
			</div>
			<div class='form-group'>
				<label>Password</label>
				<input type='password' class='form-control' name='pass' placeholder='*********' required />
			</div>
			<div>
				<button type='submit' name='login' value='true' class='btn btn-primary form-control'>Login</button>
			</div>
		</form>
	</div>
</body>
</html>