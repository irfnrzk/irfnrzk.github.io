<?php include 'includes/header.php'; ?>
	<div id="contact-us" class="contact-us">
		<h2 class="title-header">
			Contact Us
		</h2>
		<div class="container">
			<div class="content-contact">
				<!-- <div class="long-list"> -->
					<div class="col-md-6" style="border: 1px solid red">
						<!-- contact form -->	
						<form action="form.php" method="post" enctype="multipart/form-data">

						<h1 class="title">Contact</h1>

						<label></label>
						<input name="name" required="required" placeholder="Your Name">


						<label></label>
						<input name="email" type="email" required="required" placeholder="Your Email">


						<label></label>
						<textarea name="message" cols="20" rows="5" required="required" placeholder="Message"></textarea>


						<input id="cancel" name="cancel" value="Cancel" />

						<input id="submit" name="submit" type="submit" value="Submit">

						</form>

						

					</div>
					<div class="col-md-6" style="border: 1px solid red">
						<ul class="list-unstyled norm">
							<li>no. 10B Jalan Bandar 2,<br>Taman Melawati,<br>53100 Kuala Lumpur.</li>
							<li>Tel : 03-41019698<br>Fax : 03-41019698</li>
							<li>Email : expillar@gmail.com</li>
						</ul>
					</div>
				
			</div>
		</div>
	</div>
<?php include 'includes/footer.php'; ?>