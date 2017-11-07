<?php 
	$title = "Giant How-to";
	$subtitle = "Discover creative solutions for everyday problems!"
?>
<?php include 'includes/header.php'; ?>
<?php include 'includes/breadcrumbs.php'; ?>
<section id="giant-how-to" class="section-fluid page-internal">
	<?php include 'includes/page-header.php'; ?>
	<nav class="nav-round space-margin-2x mt-0 clearfix">
		<ul class="menu-round col-md-6 col-md-offset-3">
			<li><a href="#" class="active" title="All">All</a></li>
			<li><a href="#" title="Tips & Tricks">Tips & Tricks</a></li>
			<li><a href="#" title="Recipes">Recipes</a></li>
			<li><a href="#" title="Happy Mommies">Happy Mommies</a></li>
		</ul>
	</nav>
	<div class="section-content">
		<div class="container">
			<ul class="list-unstyled list-posts">
				<li>
					<?php include 'includes/box-post.php'; ?>
				</li>
				<li>
					<?php include 'includes/box-post.php'; ?>
				</li>
				<li>
					<?php include 'includes/box-post.php'; ?>
				</li>
				<li>
					<?php include 'includes/box-post.php'; ?>
				</li>
				<li>
					<?php include 'includes/box-post.php'; ?>
				</li>
				<li>
					<?php include 'includes/box-post.php'; ?>
				</li>
			</ul>
			<div class="btn-line space-margin-3x text-center row">
				<button class="btn btn-white btn-load-more col-sm-8 col-sm-offset-2">Load more <i class="fa fa-chevron-down"></i></button>
			</div>
		</div>
	</div>
</section>


<?php include 'includes/footer.php'; ?>