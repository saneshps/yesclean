<section>
	<div class="row mr-0">
		<div class="cotc">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<h3>Quick Links</h3>
					<ul>
						<li><a href="about.php">About</a></li>
						<li><a href="cleaning-machines.php">Products</a></li>
						<li><a href="cleaning-chemicals.php">Chemicals</a></li>
						<!-- <li><a href="#">News</a></li> -->
						<li><a href="blogs">Blog</a></li>
						<li><a href="contact.php">Contact us</a></li>
						<li><a href="faq.php"> Faq </a></li>
					</ul>



				</div>
				<div class="col-md-8 col-sm-6 ad">
					<h4>Registered Company name & Address:</h4>
					<h3 class="he">YORK ENGINEERING SOLUTIONS FZC</h3>
					<ul>
						<li>P O Box: 42167, OFFICE NO.: LV 27-D <br>
							HAMRIYAH FREE ZONE PHASE 2, <br> SHARJAH - UAE</li>
						<li>TEL : <a href="tel:+97165264382" target="_blank"> +971 6 5264382 </a> </li>
						<li>MOB : <a href="tel:+971563986757" target="_blank"> +971 56 398 6757 </a> </li>
						<li>FAX : +971 6 5264384</li>
						<li>EMAIL : <a href="mailto:sales@yesclean.ae" target="_blank">sales@yesclean.ae</a></li>
					</ul>
				</div>

				<div class="fot">
					<p>© 2021 <a href="http://www.yesclean.ae">www.yesclean.ae</a> All rights reserved. Powered By <a class="big" href="http://bigleap.ae/" target="blank">BIG LEAP</a></p>

				</div>


			</div>
		</div>
		<div class="cotcad">
			<h3>Our Products</h3>
			<div class="row mr-0">


				<div class="col-md-6">

					<ul>
						<li><a href="floor-cleaning-robot.php">Floor Cleaning Robots</a></li>
						<li><a href="vacuum-cleaner.php">Vaccum Cleaner</a></li>
						<li><a href="cleaning-machines.php"> Cleaning Machines</a></li>
						<li><a href="swimming-pool-cleaning-robot.php">Swimming Pool Cleaning Robots</a></li>
						<li><a href="multi-purpose-trolleys.php">Multi Purpose Trolleys</a></li>
						<li><a href="air-purification-system.php">Air Purifier</a></li>
						<li><a href="cleaning-chemicals.php">Cleaning Chemicals</a></li>
						<li><a href="road-sweeper.php">Sweeping Machines</a>

						</li>
					</ul>

				</div>


				<div class="col-md-6">

					<ul>
						<li><a href="sweeper-robot.php"> Sweeper Robot </a></li>
						<li><a href="steam-vacuum-cleaner.php"> Steam Vacuum Cleaner </a></li>
						<li><a href="carpet-cleaner.php"> Carpet Cleaner </a></li>
						<li><a href="foam-cleaner.php"> Foam Cleaner </a></li>
						<li><a href="scrubber-dryer.php"> Scrubber Dryer </a></li>
						<li><a href="sweeper-machine.php"> Sweeper Machine </a></li>
						<li><a href="single-disc-machine.php"> Single Disk Machine </a></li>


						</li>
					</ul>


				</div>

				<div class="col-md-12">
					<div class="soci">
						<a class="soci-al" href="https://www.facebook.com/YES-Clean-109644828052481" target="_blank"> <i class="fab fa-facebook-f"></i></a>
						<a class="soci-al" href="https://www.linkedin.com/company/yes-clean/" target="_blank"> <i class="fab fa-linkedin-in"></i> </a>
						<a class="soci-al" href="https://www.instagram.com/yescleanuae/" target="_blank"> <i class="fab fa-instagram"></i></a>
						<a class="soci-al" href="https://twitter.com/YESClean2" target="_blank"> <i class="fab fa-twitter"></i> </a>
						<a class="soci-al" href="https://www.youtube.com/channel/UCGblR616vSAvum1HUq39OLw" target="_blank"> <i class="fab fa-youtube"></i> </a>
					</div>
				</div>

			</div>
		</div>

		<script>
			function autocomplete(inp, arr) {
				/*the autocomplete function takes two arguments,
				the text field element and an array of possible autocompleted values:*/
				var currentFocus;
				/*execute a function when someone writes in the text field:*/
				inp.addEventListener("input", function(e) {
					var a, b, i, val = this.value;

					/*close any already open lists of autocompleted values*/

					closeAllLists();
					if (!val) {
						return false;
					}
					currentFocus = -1;
					/*create a DIV element that will contain the items (values):*/
					a = document.createElement("DIV");
					a.setAttribute("id", this.id + "autocomplete-list");
					a.setAttribute("class", "autocomplete-items");
					/*append the DIV element as a child of the autocomplete container:*/
					this.parentNode.appendChild(a);
					/*for each item in the array...*/
					for (i = 0; i < arr.length; i++) {
						/*check if the item starts with the same letters as the text field value:*/
						if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
							/*create a DIV element for each matching element:*/
							b = document.createElement("DIV");
							/*make the matching letters bold:*/

							b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
							b.innerHTML += arr[i].substr(val.length);
							/*insert a input field that will hold the current array item's value:*/
							b.innerHTML += "<input id='val' type='hidden' value='" + arr[i] + "'>";
							/*execute a function when someone clicks on the item value (DIV element):*/

							b.addEventListener("click", function(e) {
								inp.value = this.getElementsByTagName("input")[0].value;


								var arr = {
									"Floor Cleaning Robot": "floor-cleaning-robot.php",
									"Commercial Floor Cleaning Robot": "floor-cleaning-robot.php",
									"Autonomous Floor Cleaning Robot": "floor-cleaning-robot.php",
									"Autonomous Sweeper": "floor-cleaning-robot.php",
									"Sweeper Robot": "sweeper-robot.php",
									"Sweeper Vacuum Robot": "sweeper-robot.php",
									" Autonomous Vaccum Cleaning Robot": "autonomous-vacuum-cleaning-robot.php",
									"Swimming Pool Cleaning Robot": "swimming-pool-cleaning-robot.php",
									"Commercial Pool Cleaner": "swimming-pool-cleaning-robot.php",
									"Vacuum Cleaner": "vacuum-cleaner.php",
									"Wet Vacuum Cleaners": "vacuum-cleaner.php",
									"Dry Vacuum Cleaners": "vacuum-cleaner.php",
									"Steam Vacuum Cleaner": "steam-vacuum-cleaner.php",
									"Carpet Cleaner": "carpet-cleaner.php",
									"Carpet Cleaning Machine": "carpet-cleaner.php",
									"Foam Cleaner": "foam-cleaner.php",
									"Foam Cleaning Machine": "foam-cleaner.php",
									"Robotic Scrubber Dryer": "scrubber-dryer.php",
									"Ride On Scrubber Dryer": "scrubber-dryer.php",
									"Sweeper Machine": "sweeper-machine.php",
									"Ride On Sweeper Machine": "sweeper-machine.php",
									"Single Disc Machine": "single-disc-machine.php",
									"Single Disc Cleaning Machine": "single-disc-machine.php",
									"Sweeper Tool Carrier": "compact-sweeper.php",
									"Sweeper Robot": "road-sweeper.php",
									"Road Sweeping Machine": "road-sweeper.php",
									"Road Sweeper Machine": "road-sweeper.php",
									"Multi Purpose Trolley": "multi-purpose-trolleys.php",
									"Janitor Trolley": "multi-purpose-trolleys.php",
									"Cleaning trolley": "multi-purpose-trolleys.php",
									"Air Purification System": "air-purification-system.php",
									"Hepa air purifier": "air-purification-system.php",
									"Cleaning Chemicals": "cleaning-chemicals.php",
								};

								location.href = arr[inp.value];
							});
							a.appendChild(b);
						}
					}
				});
				/*execute a function presses a key on the keyboard:*/
				inp.addEventListener("keydown", function(e) {
					var x = document.getElementById(this.id + "autocomplete-list");
					if (x) x = x.getElementsByTagName("div");
					if (e.keyCode == 40) {
						/*If the arrow DOWN key is pressed,
						increase the currentFocus variable:*/
						currentFocus++;
						/*and and make the current item more visible:*/
						addActive(x);
					} else if (e.keyCode == 38) { //up
						/*If the arrow UP key is pressed,
						decrease the currentFocus variable:*/
						currentFocus--;
						/*and and make the current item more visible:*/
						addActive(x);
					} else if (e.keyCode == 13) {
						/*If the ENTER key is pressed, prevent the form from being submitted,*/
						e.preventDefault();
						if (currentFocus > -1) {
							/*and simulate a click on the "active" item:*/
							if (x) x[currentFocus].click();
						}
					}
				});

				function addActive(x) {
					/*a function to classify an item as "active":*/
					if (!x) return false;
					/*start by removing the "active" class on all items:*/
					removeActive(x);
					if (currentFocus >= x.length) currentFocus = 0;
					if (currentFocus < 0) currentFocus = (x.length - 1);
					/*add class "autocomplete-active":*/
					x[currentFocus].classList.add("autocomplete-active");
				}

				function removeActive(x) {
					/*a function to remove the "active" class from all autocomplete items:*/
					for (var i = 0; i < x.length; i++) {
						x[i].classList.remove("autocomplete-active");
					}
				}

				function closeAllLists(elmnt) {
					/*close all autocomplete lists in the document,
					except the one passed as an argument:*/
					var x = document.getElementsByClassName("autocomplete-items");
					for (var i = 0; i < x.length; i++) {
						if (elmnt != x[i] && elmnt != inp) {
							x[i].parentNode.removeChild(x[i]);
						}
					}
				}
				/*execute a function when someone clicks in the document:*/
				document.addEventListener("click", function(e) {
					closeAllLists(e.target);
				});
			}


			var values = ["Floor Cleaning Robot", "Commercial Floor Cleaning Robot", "Autonomous Floor Cleaning Robot", "Autonomous Sweeper", "Sweeper Robot", "Sweeper Vacuum Robot", " Autonomous Vaccum Cleaning Robot", "Swimming Pool Cleaning Robot", "Commercial Pool Cleaner", "Vacuum Cleaner", "Wet Vacuum Cleaners", "Dry Vacuum Cleaners", "Steam Vacuum Cleaner", "Carpet Cleaner", "Carpet Cleaning Machine", "Foam Cleaner", "Foam Cleaning Machine", "Robotic Scrubber Dryer", "Ride On Scrubber Dryer", "Sweeper Machine", "Ride On Sweeper Machine", "Single Disc Machine", "Single Disc Cleaning Machine", "Sweeper Tool Carrier", "Sweeper Robot", "Road Sweeping Machine", "Road Sweeper Machine", "Multi Purpose Trolley", "Janitor Trolley", "Cleaning Trolley", "Air Purification System", "Hepa Air Purifier", "Cleaning Chemicals"];


			autocomplete(document.getElementById("auto"), values);
		</script>