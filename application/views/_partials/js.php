<div class="control-sidebar-bg"></div>
<script src="<?php echo base_url()?>assets/lte/plugins/jQuery/jQuery-2.2.3.min.js"></script>
<script src="<?php echo base_url()?>assets/lte/plugins/notify/bootstrap-notify.js"></script>
<script src="<?php echo base_url()?>assets/lte/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/lte/dist/js/app.min.js"></script>
<script src="<?php echo base_url()?>assets/lte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url()?>assets/lte/plugins/datatables/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/lte/plugins/select2/select2.full.min.js"></script>
<script src="<?php echo base_url()?>assets/lte/plugins/ajaxupload/jquery.ajaxfileupload.js"></script>
<script src="<?php echo base_url()?>assets/lte/plugins/select2/select2.full.min.js"></script>
<script src="<?php echo base_url()?>assets/lte/plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url()?>assets/lte/plugins/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url()?>assets/lte/plugins/pace/pace.js"></script>
<script type="text/javascript">

	var php_base_url = '<?php echo base_url() ?>';
	var php_session_nama = '<?php echo $this->session->userdata("nama") ?>';
	var php_session_id = '<?php echo $this->session->userdata("id") ?>';

	$(document).ready(function() {
	    
	    select2();
	})

	$(function() {
	    if ($('#artikelx').length) {
	        CKEDITOR.replace('artikelx')
	    }
	})

	function select2() {
	    $('.select2').select2({
	        placeholder: 'Select an option'
	    });
	}

	function showNotif(title, msg, jenis) {
	    $.notify({
	        title: '<strong>' + title + '</strong>',
	        message: msg
	    }, {
	        type: jenis,
	        z_index: 2000,
	        allow_dismiss: true,
	        delay: 10,
	        animate: {
	            enter: 'animated bounceIn',
				exit: 'animated bounceOut'
	        },
	    }, );
	};

	function getSelect(d, u) {
	    $.ajax({
	        url: `${apiurl}/${u}`,
	        type: "POST",
	        dataType: "JSON",
	        success: function(data) {
	            for (var i = 0; i < data.length; i++) {
	                $("#" + d).append('<option value=' + data[i].id + '>' + data[i].judul + '</option>');
	            }
	        },
	        error: function(jqXHR, textStatus, errorThrown) {
	            alert('Error on process');
	        }
	    });

	}
	
	function activemenu() {
		$("."+grupmenu).addClass("active");
  		$("."+path).addClass("active");
  		$(".title").html(title);
	}

	function getAkses(m) {
	    $.ajax({
	        url: `${php_base_url}/universe/getAkses`,
	        type: "POST",
	        data: {
	            menu: m,
	        },
	        dataType: "JSON",
	        success: function(data) {

	        },
	        error: function(jqXHR, textStatus, errorThrown) {
	            console.log('Error Get Akses');
	        }
	    });
	}

	function allowAkses() {
		
	}

</script>
