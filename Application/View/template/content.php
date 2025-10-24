<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title><?php echo $data['meta']['title'] ?? ''; ?></title>
	<link
		href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;700;900&family=Work+Sans:wght@400;500;700;900&display=swap"
		rel="stylesheet" />
	<?php foreach ($this->cssFiles as $file): ?>
		<link rel="stylesheet" type="text/css" href="<?php echo $file; ?>">
	<?php endforeach; ?>
</head>

<body>
	<div class="page-container">
		<header class="header">
			<div class="logo-container">
				<svg viewBox="0 0 48 48" fill="currentColor">
					<path
						d="M8.6 8.6C5.5 11.6 3.5 15.5 2.6 19.7c-.8 4.2-.4 8.6 1.3 12.6 1.6 4 4.4 7.4 8 9.8 3.6 2.4 7.9 3.7 12.1 3.7s8.6-1.3 12.1-3.7c3.6-2.4 6.3-5.8 8-9.8 1.7-4 2.1-8.4 1.3-12.6-.8-4.2-2.9-8.1-6-11.1L24 24 8.6 8.6z" />
				</svg>
				<h2>FindMyPlace</h2>
			</div>

			<nav class="nav" id="nav-menu">
				<a href="#">Home</a>
				<a href="#">About</a>
				<a href="#">Contact</a>
			</nav>

			<button class="btn-primary">Sign Up</button>

			<div class="hamburger" id="hamburger">
				<span></span>
				<span></span>
				<span></span>
			</div>
		</header>

		<main class="main-content">
			<aside class="sidebar">
				<h3>Filter</h3>
				<div class="search-box">
					<label for="search-input">Search by city</label>
					<input type="text" id="search-input" placeholder="Search by city..." />
				</div>
			</aside>

			<section class="content">
				<div class="hero">
					<div class="hero-text">
						<h1>Find Your Perfect Place</h1>
						<p>Explore a wide range of locations to find the one that fits your needs.</p>
						<button class="btn-primary">Explore Locations</button>
					</div>
				</div>

				<h3 class="section-title">Featured Locations</h3>

				<div class="grid">
					<?php foreach ($data['data'] as $city): ?>
						<div class="card">
							<div
								class="card-image"
								style="background-image: url('<?php echo htmlspecialchars($city['image']); ?>');">
							</div>

							<div class="card-content">
								<h4><?php echo htmlspecialchars($city['city']); ?></h4>
								<p class="description"><?php echo htmlspecialchars($city['description']); ?></p>

								<div class="card-phone">
									<a href="tel:<?php echo preg_replace('/\D/', '', $city['phone']); ?>">
										<?php echo htmlspecialchars($city['phone']); ?>
									</a>
								</div>

								<button class="view-details" aria-expanded="false">View Details</button>

								<div class="card-details">
									<p><strong>Address:</strong> <?php echo htmlspecialchars($city['address']); ?></p>
									<p><strong>Price:</strong> <?php echo htmlspecialchars($city['price']); ?></p>
									<p><strong>Hours:</strong> <?php echo htmlspecialchars($city['hours']); ?></p>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>

				<div class="contact-bar">
					<button class="contact-btn">Contact</button>
				</div>
			</section>
		</main>
	</div>

	<?php foreach ($this->jsFiles as $jsFile): ?>
		<script src="<?php echo $jsFile; ?>"></script>
	<?php endforeach; ?>
</body>

</html>