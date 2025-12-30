<section>
	<div class="row mr-0">
		<div class="cotc">
			<div class="row">
				<div class="col-md-4 col-sm-6">
					<h3>Quick Links</h3>
					<ul>
					    <li><a href="{{route('home')}}">Home</a></li>
						<li><a href="{{route('our-story')}}">About</a></li>
						<li><a href="{{route('all-products')}}">Products</a></li>
						<li><a href="{{route('cleaning-chemicals')}}">Chemicals</a></li>
						<!-- <li><a href="#">News</a></li> -->
						<li><a href="{{route('blogs')}}">Blog</a></li>
						<li><a href="{{route('contact')}}">Contact us</a></li>
						<li><a href="{{route('faq')}}"> Faq </a></li>
					</ul>



				</div>
				<div class="col-md-8 col-sm-6 ad">
					<h4>Registered Company name & Address:</h4>
					<h3 class="he">YORK ENGINEERING SOLUTIONS FZC</h3>
					<ul>
						<li>P O Box: 42167, OFFICE NO.: LV 27-D <br>
							HAMRIYAH FREE ZONE PHASE 2, <br> SHARJAH - UAE</li>
						<li>TEL : <a href="tel:+97165264382" target="_blank"> +971 6 5264382 </a> </li>
						<li>MOB : <a href="tel:+971542791581" target="_blank"> +971 54 279 1581 </a> </li>
						<li>FAX : +971 6 5264384</li>
						<li>EMAIL : <a href="mailto:sales@yesclean.ae" target="_blank">sales@yesclean.ae</a></li>
					</ul>
				</div>

			


			</div>
		</div>
		<div class="cotcad">
			<h3>Our Products</h3>
			<div class="row mr-0">
               @php 
               $count=count($_CategoryMenu);
               $count_half=$count/2;
               @endphp
                @foreach ($_CategoryMenu->chunk($count_half) as $chunk)
				<div class="col-md-6">

					<ul>
					    @foreach($chunk as $parent)
					   
						   <li><a href="{{route('category',$parent->short_code)}}">{{$parent->name}}</a></li>
		                 @endforeach

						</li>
					</ul>

				</div>
			  @endforeach	


				<!--<div class="col-md-6">-->

				<!--	<ul>-->
				<!--		<li><a href="sweeper-robot.php"> Sweeper Robot </a></li>-->
				<!--		<li><a href="steam-vacuum-cleaner.php"> Steam Vacuum Cleaner </a></li>-->
				<!--		<li><a href="carpet-cleaner.php"> Carpet Cleaner </a></li>-->
				<!--		<li><a href="foam-cleaner.php"> Foam Cleaner </a></li>-->
				<!--		<li><a href="scrubber-dryer.php"> Scrubber Dryer </a></li>-->
				<!--		<li><a href="sweeper-machine.php"> Sweeper Machine </a></li>-->
				<!--		<li><a href="single-disc-machine.php"> Single Disk Machine </a></li>-->


				<!--		</li>-->
				<!--	</ul>-->


				<!--</div>-->

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
		
			<div class="fot">
				    
				    
					<p>© {{ date('Y') }} <a href="{{env('APP_URL')}}">www.yesclean.ae</a> All rights reserved. Powered By <a class="big" href="http://bigleap.ae/" target="blank">BIG LEAP</a></p>

				</div>


