<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<style>
	/*the container must be positioned relative:*/
	.autocomplete {
		position: relative;
		display: inline-block;
	}


	.autocomplete-items {
		position: absolute;
		border: 1px solid #d4d4d4;
		border-bottom: none;
		border-top: none;
		z-index: 99;
		/*position the autocomplete items to be the same width as the container:*/
		top: 100%;
		left: 0;
		right: -66px;
		margin-left: 96px;
	}

	.autocomplete-items div {
		padding: 10px;
		cursor: pointer;
		background-color: #fff;
		border-bottom: 1px solid #d4d4d4;
	}

	/*when hovering an item:*/
	.autocomplete-items div:hover {
		background-color: #e9e9e9;
	}

	/*when navigating through the items using the arrow keys:*/
	.autocomplete-active {
		background-color: DodgerBlue !important;
		color: #ffffff;
	}
</style>
<section class="header" style="
    background: #ffffff94;
">
	<div class="container-fluid">
		<div class="row">
			<div class="col-2"><a href="http://yesclean.ae/"><img src="img/logo.png" class="logo" alt="Yes Clean Logo"></a> </div>
			<div class="col-8">

				<div class="back-menu-center">

					<div style="">
						<div class="menu-items">
							<ul>
								<li class="menu-item-1"><a <?php if ($page == "about") { ?>class="active" <?php } ?> href="about.php">Our Story</a></li>
								<li class="menu-item-2 dropdown">
									<a <?php if ($page == "product") { ?>class="active" <?php } ?> href="#" class="dropbtn"> Products </a>
									<ul class="dropdown-content">
										<li class="dropdown-nex">
											<a href="#" class="dropbtn-nex">Robots <i class="demo-icon icon-right-open-mini icn">&#xe809;</i> </a>
											<ul class="dropdown-content-nex">
												<li><a href="floor-cleaning-robot.php">Floor Cleaning Robots</a></li>
												<li><a href="sweeper-robot.php">Sweeper Robot</a></li>
												<li><a href="autonomous-vacuum-cleaning-robot.php"> Autonomous Vacuum Cleaning Robot </a></li>
												<li><a href="swimming-pool-cleaning-robot.php"> Swimming Pool Cleaning Robots </a></li>
											</ul>
										</li>
										<li class="dropdown-nex">
											<a href="cleaning-machines.php" class="dropbtn-nex">Cleaning Machines <i class="demo-icon icon-right-open-mini icn">&#xe809;</i> </a>
											<ul class="dropdown-content-nex">
												<li> <a href="vacuum-cleaner.php"> Vacuum Cleaner </a> </li>
												<li> <a href="steam-vacuum-cleaner.php"> Steam Vacuum Cleaner </a> </li>
												<li><a href="carpet-cleaner.php">Carpet Cleaner</a></li>
												<li><a href="foam-cleaner.php">Foam Cleaner </a></li>
												<li><a href="scrubber-dryer.php"> Scrubber Dryer </a></li>
												<li><a href="sweeper-machine.php"> Sweeper Machine </a></li>
												<li><a href="single-disc-machine.php"> Single Disc Machine </a></li>
												<li><a href="pressure-washer.php"> Pressure Washer </a></li>
												<li><a href="industrial-washing-machines-and-laundry-systems.php"> Washing Machines & Laundry Systems </a></li>
												<li><a href="frank-steam-pressure-washer.php"> Frank Steam Pressure Washer </a></li>
											</ul>
										</li>
										<!-- <li><a  href="cleaning-machines.php">Cleaning Machines</a></li> -->
										<li><a href="compact-sweeper.php"> Sweeper Tool Carrier </a></li>
										<li><a href="road-sweeper.php"> Road Sweepers </a></li>
										<li><a href="multi-purpose-trolleys.php">Multi Purpose Trolleys</a></li>
										<li><a href="air-purification-system.php">Air Purification System</a></li>
									</ul>
								</li>
								<li class="menu-item-3"><a <?php if ($page == "chemicals") { ?>class="active" <?php } ?> href="cleaning-chemicals.php">Chemicals</a></li>
								<!-- <li class="menu-item-3"><a href="#">News</a></li> -->
								<li class="menu-item-3"><a <?php if ($page == "blog") { ?>class="active" <?php } ?> href="blogs">Blog</a></li>
								<li class="menu-item-4"><a <?php if ($page == "contact") { ?>class="active" <?php } ?> href="contact.php">Contact</a></li>
							</ul>
						</div>

					</div>
				</div>


				<div class="toggle-menu" style="display: none;">
					<label for="toggle-btn">
						<i class="fas fa-bars toggle-icon"></i>
					</label>
					<input id="toggle-btn" type="checkbox">
					<ul class="toggle-items">
						<li class="toggle-item-1"><a href="#">About</a></li>

						<li class="toggle-item-2 dropdown">
							<a href="#" class="dropbtn">Products</a>
							<ul class="dropdown-content">
								<li class="dropdown-nex">
									<a href="#" class="dropbtn-nex">Robots <i class="demo-icon icon-right-open-mini icn">&#xe809;</i> </a>
									<ul class="dropdown-content-nex">
										<li><a href="floor-cleaning-robot.php">Cleaning Robots</a></li>
										<li><a href="sweeper-robot.php">Sweeper Robot</a></li>
										<li><a href="autonomous-vacuum-cleaning-robot.php"> Autonomous Vacuum Cleaning Robot </a></li>
										<li><a href="swimming-pool-cleaning-robot.php">Swimming Pool Cleaning Robots</a></li>
									</ul>
								</li>
								<li><a href="cleaning-machines.php">Cleaning Machines</a></li>
								<li><a href="compact-sweeper.php">Sweeper Tool Carrier</a></li>
								<li><a href="road-sweeper.php"> Road Sweepers </a></li>
								<li><a href="multi-purpose-trolleys.php">Multi Purpose Trolleys</a></li>
								<li><a href="air-purification-system.php">Air Purification System</a></li>
							</ul>
						</li>
						<li class="toggle-item-3"><a href="cleaning-chemicals.php">Chemicals</a></li>
						<!-- <li class="toggle-item-4"><a href="#">News</a></li> -->
						<li class="toggle-item-5"><a href="blogs.php">Blog</a></li>
						<li class="toggle-item-6"><a href="contact.php">Contact</a></li>
				</div>

			</div>

			<div class="col-2">
				<div class="search-bar">
					<input type="text" id="auto" placeholder="input some text here..." required></input>
					<div class="search-icon"></div>
				</div>

				<div class="home-ico">
					<a href="http://yesclean.ae/"><i class="demo-icon icon-home-1">&#xe811;</i></a>
				</div>


				<div class="outer-menu">
					<input class="checkbox-toggle" type="checkbox" />
					<div class="hamburger">
						<div class="dot"></div>
						<div></div>
					</div>
					<div class="menu">
						<div>
							<div>
								<ul>
									<li><a href="about.php">About</a></li>
									<li class="dropdown">
										<a href="#" class="dropbtn">Products</a>
										<ul class="dropdown-content">
											<li class="dropdown-nex">
												<a href="#" class="dropbtn-nex">Robots <i class="demo-icon icon-right-open-mini icn">&#xe809;</i> </a>
												<ul class="dropdown-content-nex">
													<li><a href="floor-cleaning-robot.php">Floor Cleaning Robots</a></li>
													<li><a href="sweeper-robot.php">Sweeper Robot</a></li>
													<li><a href="autonomous-vacuum-cleaning-robot.php"> Autonomous Vacuum Cleaning Robot </a></li>
													<li><a href="swimming-pool-cleaning-robot.php">Swimming Pool Cleaning Robots</a></li>
												</ul>
											</li>

											<li class="dropdown-nex">
												<a href="cleaning-machines.php" class="dropbtn-nex">Cleaning Machines <i class="demo-icon icon-right-open-mini icn">&#xe809;</i> </a>
												<ul class="dropdown-content-nex">
													<li> <a href="vacuum-cleaner.php"> Vacuum Cleaner </a> </li>
													<li> <a href="steam-vacuum-cleaner.php"> Steam Vacuum Cleaner </a> </li>
													<li><a href="carpet-cleaner.php">Carpet Cleaner</a></li>
													<li><a href="foam-cleaner.php">Foam Cleaner </a></li>
													<li><a href="scrubber-dryer.php"> Scrubber Dryer </a></li>
													<li><a href="sweeper-machine.php"> Sweeper Machine </a></li>
													<li><a href="single-disc-machine.php"> Single Disc Machine </a></li>
													<li><a href="pressure-washer.php"> Pressure Washer </a></li>
													<li><a href="industrial-washing-machines-and-laundry-systems.php"> Washing Machines & Laundry Systems </a></li>
													<li><a href="frank-steam-pressure-washer.php"> Frank Steam Pressure Washer </a> </li>
												</ul>
											</li>



											<!--								<li><a href="cleaning-machines.php">Cleaning Machines</a></li>-->
											<li><a href="compact-sweeper.php">Sweeper Tool Carrier</a></li>
											<li><a href="road-sweeper.php"> Road Sweepers </a></li>
											<li><a href="multi-purpose-trolleys.php">Multi Purpose Trolleys</a></li>
											<li><a href="air-purification-system.php">Air Purification System</a></li>
										</ul>
									</li>
									<li><a href="cleaning-chemicals.php">Chemicals</a></li>
									<!-- <li><a href="#">News</a></li> -->
									<li><a href="blogs">Blog</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</section>