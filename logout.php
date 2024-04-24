<?php

SESSION_START();
SESSION_UNSET();
SESSION_DESTROY();

echo "<script>

		alert('BERHASIL LOGOUT');
		document.location.href='index.php';
		
	</script>";
	

?>