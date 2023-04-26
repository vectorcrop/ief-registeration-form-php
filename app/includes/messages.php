<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php
 if(isset($_SESSION['message']))
{ 
  
  ?>

<?php if (isset($_SESSION['id'])): ?>
<script>
		swal({
  title: "<?php echo $_SESSION['message']; ?>!",
  text: "Welcome dear <?php echo $_SESSION['username']; ?>!",
  icon: "<?php echo $_SESSION['type']; ?>",
});
	</script>
       <?php endif; ?>




    <?php
      unset($_SESSION['message']);
      unset($_SESSION['type']);
 }
    ?>


