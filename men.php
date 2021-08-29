<?php
include 'dbconn.php';
include 'shoescript.php';
include 'bannerscript.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="favico.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="favico.ico">
	<link rel="stylesheet" href="css/main.css">
	<title>Wenongs-mens stuffs</title>
</head>

<body>
	<!--ANALYTICS-->
	<?php include_once("analyticstracking.php") ?>
	<!--/ANALYTICS-->
	<main id="bot">
		<header class="title">
			<div class="head">
				<h1>THE<span class="fashion">WENONGS</span><sup>&trade;</sup>
					<span class="tag">Bridal Closet</span>
				</h1>

				<div class="admin">
					<a href="login.php">ADMIN </a>
				</div>
			</div>

			<nav class="nav-wrapper">
				<ul>
					<li><a href="index.php">Women </a></li>
					<li class="active"><a href="#">Men </a></li>
					<li><a href="children.php">Children</a></li>
				</ul>
			</nav>
		</header>


		<!--BANNER/ADVERTISEMENT-->
		<div class="banner">
			<!--FETCHING IMAGES FROM DATABSE-->
			<?php
			$records = mysqli_query($conn, "select * from bannerupdate");
			while ($data = mysqli_fetch_array($records)) {
			?>
			<!--FETCHING IMAGES FROM DB-->
			<img src="<?php echo $data['images']; ?>" loading="lazy">
			<!--closing php tag-->
			<?php } ?>
			<!--closing php tag-->
		</div>

		<div class="categories">


			<div class="category">
				<div class="cat-img">
					<a href="shoes.php">
						<img src="shoe.jpg" alt="Shoes">
					</a>
				</div>
				<p>Shoes</p>
			</div>

			<div class="category">
				<div class="cat-img">
					<a href="bags.php">
						<img src="bag.jpg" alt="bags">
					</a>
				</div>
				<p>Bags</p>
			</div>

			<div class="category">
				<div class="cat-img">
					<a href="decor.php">
						<img src="decor.jpg" alt="home">
					</a>
				</div>
				<p>Decor</p>
			</div>

		</div>

		<div class="catalogue">
			<h2>Available Men Products</h2>

			<div class="showcase-imgs">
				<!--FETCHING IMAGES FROM DATABSE-->
				<?php
				$records = mysqli_query($conn, "select * from men order by `addedon` DESC");
				while ($data = mysqli_fetch_array($records)) {
				?>
				<!--FETCHING IMAGES FROM DB-->
				<div class="product">

					<div class="product-img">
						<img src="<?php echo $data['images']; ?>" loading="lazy">
					</div>
					<div class=" price">FCFA&nbsp;&nbsp;<span>
							<?php echo $data['price']; ?>
						</span>
					</div>
					<div class="contact">
						<div class="phone-number">
							<a href="tel:237698309841"><img src="fon.png" alt="call" width="100px"></a>
						</div>
						<div class="whatsapp">
							<a href="https://wa.me/237698309841?text=Hi!%20I'm%20interested%20in%20a%20product%20on%20your%20website%20NAME%20of%20PRODUCT%20::%20(%20 
							<?php echo $data['name']; ?>%20)">
								<img src="wa.png" alt="whatsapp" width="100px"></a>
						</div>
					</div>
				</div>
				<!--closing php tag-->
				<?php } ?>
				<!--closing php tag-->
				<!--close tags for catalogue and showcase-->
			</div>
		</div>
		<!--close tags for catalogue and showcase-->

		<div class="top">
			<div class="top-img">
				<a href="#bot"><img src="totop.png" alt="totop"></a>
			</div>
		</div>

		<div class="bottom-bar">
			<div class="floating-nav">

				<div class="tab">
					<a href="index.php"><img src="home.png" alt="home-btn"></a>
					<p class="active">Home</p>
				</div>

				<div class="tab">
					<h1>The<Span class="fas">Wenongs</Span></h1>
				</div>

				<div class="tab">
					<img src="menu.png" alt="menu-btn" id="cat">
					<p>Category</p>
					<div class="items" id="items">
						<ul>
							<li><a href="decor.php">Decor</a></li>
							<li><a href="#">Men</a></li>
							<li><a href="children.php">Children</a></li>
							<li><a href="shoes.php">Shoes</a></li>
							<li><a href="bags.php">Bags</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>

	</main>

	<script src="main.js"></script>
</body>

</html>
