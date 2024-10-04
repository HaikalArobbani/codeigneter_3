<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view('_partials/head.php'); ?>
</head>

<body>
	<?php $this->load->view('_partials/navbar.php'); ?>

	<h1>Contact</h1>
	<p>Ini halaman contact</p>
	<form action="" method="post">
		<div>
			<label for="name">Name</label>
			<input type="text" name="name" id="name" placeholder="Your Name">
		</div>
		<div>
			<label for="email">Email</label>
			<input type="email" name="email" id="email" placeholder="Your Email"></label>
		</div>
		<div>
			<label for="message">Message</label>
			<input type="textarea" name="message" id="message" col="30" row="10" placeholder="Your Message">
		</div>
		<div>
			<input type="submit" class="btn btn-primary" value="Kirim">
			<input type="reset" value="Reset">
		</div>
	</form>

	<?php $this->load->view('_partials/footer.php'); ?>

</body>

</html>