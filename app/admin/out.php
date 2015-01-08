<?php
session_start();
unset($_SESSION["user"]);
?>
<script>
	location.href="index.php?c=admin";
</script>