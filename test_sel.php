<?php

	include 'config.php';
	if (isset($_POST['Submit'])) {
		
		$sql="INSERT INTO teachers(teach_1,teach_2,teach_3) VALUES('$teach_1','$teach_2','$teach_3')";
		mysql_query($sql) OR die(mysql_error());
		if ($sql) {
			echo "<script>alert('Insert successful');</script>";
		?>
				<script>
					window.location="test_sel.php";
				</script>
		<?php
		}
		else
		{
			echo "<script>alert('Something wrong');</script>";
		}
		
	}
?>
