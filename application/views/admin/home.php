		<legend>
			<h3>View User <small>Login</small></h3>
		</legend>
		<div class='panel panel-primary'>
<div class='panel-heading'>
	Table User
</div>
<div class='panel-body'>
<table class='table table-striped table-hover'>
	<tr>
		<th>No</th>
		<th>User</th>
		<th>Nama</th>
		<th>Action</th>
	</tr>
	<tr>
		<td>1</td>
		<td>1101.eiji</td>
		<td>Zainu Rochim</td>
		<td><a onClick='window.print()' class='btn btn-info'>Edit</a> | <a class='btn btn-danger'>Delete</a></td>
	</tr>
	<tr>
		<td>1</td>
		<td>1101.eiji</td>
		<td>Zainu Rochim</td>
		<td><a class='btn btn-info' data-toggle="button">Edit</a> | <a class='btn btn-danger' <?php confirm('click','Anda yakin Ingin menghapusnya,.?');?>><i class='glyphicon glyphicon-remove'></i> Delete</a></td>
	</tr>
</table>
</body>
</div>
</div>
<div class='alert alert-success fade in'>Berhasil Delete User</div>
<ul class='pagination'>
	<li><a href='#'>1</a></li>
	<li><a href='#'>2</a></li>
	<li><a href='#'>3</a></li>
	<li><a href='#'>4</a></li>
</ul>
</div>