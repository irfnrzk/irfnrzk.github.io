<?php 
	$title = "Customer Care";
	$subtitle = "We are always ready to help. Send us a message and we will get back to you soon."
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/breadcrumbs.php'; ?>
<section id="customer-care" class="section-fluid page-internal">
	<?php include 'includes/page-header.php'; ?>
	<div class="section-content">
		<div class="container">
			<div class="row">
				<div class="form-container col-sm-9 col-md-8">
					<div class="bg-white space-padding-3x">
						<div class="row">
							<form action="" class="form col-md-10 col-md-offset-1" method="">
								<div class="form-group col-xs-12">
									<label for="">Name<span class="red">*</span></label>
									<input type="text" name="" id="" class="input input2 input-gray" required>
								</div>
								<div class="form-group col-sm-6">
									<label for="">Email Address<span class="red">*</span></label>
									<input type="email" name="" id="" class="input input2 input-gray" required>
								</div>
								<div class="form-group col-sm-6">
									<label for="">Contact Number<span class="red">*</span></label>
									<input type="text" name="" id="" class="input input2 input-gray">
								</div>
								<div class="form-group col-sm-6">
									<label for="">Subject<span class="red">*</span></label>
									<select name="" id="" class="select input2 input-gray" required>
										<option value="">Select Subject</option>
										<option value="Subject">Subject</option>
									</select>
								</div>
								<div class="form-group col-sm-6">
									<label for="">Date of visit</label>
									<input type="text" name="" id="" class="input input2 input-gray">
								</div>
								<div class="form-group col-sm-6">
									<label for="">State<span class="red">*</span></label>
									<select type="text" name="" id="" class="input input2 input-gray" required>
										<option value="">Select a state</option>
									</select>
								</div>
								<div class="form-group col-sm-6">
									<label for="">Store<span class="red">*</span></label>
									<select type="text" name="" id="" class="input input2 input-gray" required>
										<option value="">Select a store</option>
									</select>
								</div>
								<div class="form-group col-xs-12">
									<label for="">Message<span class="red">*</span></label>
									<textarea name="" id="" class="input input2 input-gray" maxlength="250" required></textarea>
								</div>
								<div class="col-xs-12">
									<button type="submit" class="btn btn-green-light btn-block">Submit</button>		
								</div>
							</form>
						</div>						
					</div>
				</div>
				<aside class="col-sm-3 col-md-offset-1">
					<address>
						<ul class="list-unstyled list-address">
							<li><i class="fa fa-home white bg-green-light"></i> <strong>GCH Retail (Malaysia) Sdn Bhd</strong></li>
							<li>Mezzanine Floor, <br>
							Giant Hypermarket Shah Alam Stadium,
							Lot 2, Persiaran Sukan, Seksyen 13, <br>
							40100 Shah Alam, Selangor</li>
							<li><i class="fa fa-phone white bg-green-light"></i> +603-5544 8888</li>
							<li><i class="fa fa-print white bg-green-light"></i> +603-5544 8646</li>
						</ul>
					</address>
				</aside>
			</div>
		</div>
	</div>
</section>


<?php include 'includes/footer.php'; ?>