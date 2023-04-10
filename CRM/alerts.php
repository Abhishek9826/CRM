<?php
	if (isset($_SESSION['Status']) && $_SESSION['Status'] != '')
	?>
	<script>
		swal({
			title: "<?php echo $_SESSION['Status']; ?>",
			// text: "You clicked the button!",
			icon: "<?php echo $_SESSION['Status_code']; ?>",
			// button: "OK Done!",
			transition: 2s;
		});
	</script>
	<?php
	unset($_SESSION['Status']);
	?>