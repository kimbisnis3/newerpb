<!DOCTYPE html>
<html>
	<title>My Panel</title>
	<?php
	$this->load->view('_partials/head');
	?>
	<style type="text/css">
		body {
			background:#9adea9 !important;
		}
	</style>
	<head>
		<style>
		</style>
	</head>
</head>
<body class="hold-transition">
	<div class="login-box">
		<div class="login-logo">
			<b>My Panel</b> <br>
		</div>
		<div class="login-box-body">
			<p class="login-box-msg">Login</p><br>
			<form method="post">
				<div class="form-group has-feedback">
					<input type="text" name="username" class="form-control" placeholder="Username">
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" name="pass" class="form-control" placeholder="Password">
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<button type="button" class="btn btn-success btn-block btn-flat btn-lg" onclick="login()">Masuk</button>
					</div>
					<div>
					</div>
				</div>
			</form>
			<hr>
			<a href="#"></a><br>
		</div>
	</div>
</body>
<?php $this->load->view('_partials/js');?>
<script type="text/javascript">
	function login() {
		$.ajax({
          url: '<?php echo base_url() ?>auth/auth_process/',
          type: "POST",
          dataType: "JSON",
          data: {
              username	: $('[name="username"]').val(),
              pass		: $('[name="pass"]').val(),
          },
          success: function(data) {
              if (data.sukses == 'success') {
                  showNotif('Sukses', 'Login Sukses', 'success')
                  window.location.href = "<?php echo base_url() ?>landingpage";
              } else if (data.sukses == 'fail') {
                  showNotif('Gagal', 'USername dan Password tidak sesuai', 'danger')
              }
          },
          error: function(jqXHR, textStatus, errorThrown) {
              showNotif('Gagal', 'Error', 'danger')
          }
      });
	}

	$('[name="username"]').keypress(function(e) {
	    var key = e.which;
	    if (key == 13) 
	    {
	        login();
	        return false;
	    }
	});
	$('[name="pass"]').keypress(function(e) {
	    var key = e.which;
	    if (key == 13) 
	    {
	        login();
	        return false;
	    }
	});
</script>
</html>