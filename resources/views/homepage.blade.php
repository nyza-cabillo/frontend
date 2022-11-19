@extends('layouts.app')

@section('content')

<!-- Wrapper -->
	<div id="wrapper" class="fade-in">

		<!-- Intro -->
			<div id="intro">
				<h1>Dee<br />
				Crunch</h1>
				<p>A boneless crunch in every bite.<br />
				</p>
				<ul class="actions">
					<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
				</ul>
			</div>

		<!-- Header -->
			<header id="header">
				<a href="index.html" class="logo">Dee Crunch</a>
			</header>


		<!-- Main -->
			<div id="main">

				<!-- Featured Post -->
					<article class="post featured">
						<header class="major">
							<span class="date">Doc Dimples Crunch</span>
							<h2><a href="#">This is a<br />
							massive Crunch</a></h2>
							<p>Your diet is a bank account<br />
							Just feel free and don't limit yourself when it comes to food<br />
							Be BIG and be FAT.</p>
						</header>
						<a href="#" class="image main"><img src="images/pic11.jpg" alt="" /></a>
						<ul class="actions special">
							<li><a href="#" class="button large">Menu's</a></li>
						</ul>
					</article>

				<!-- Posts -->
					<section class="posts">
						<article>
							<header>
								<span class="text">Recipe #one</span>
								<h2><a href="#">Crispy<br />
								Garlic Chicken </a></h2>
							</header>
							<a href="#" class="image fit"><img src="images/pic12.jpg" alt="" /></a>
							<p>These Crispy Bonelss Chicken Wings coated with garlic paste then deep fried to crunchy golden brown.</p>
							<ul class="actions special">
								<li><a href="#" class="button">Menu's</a></li>
							</ul>
						</article>
						<article>
							<header>
								<span class="text">Recipe #two</span>
								<h2><a href="#">Crispy <br />
								spicy Chicken</a></h2>
							</header>
							<a href="#" class="image fit"><img src="images/pic13.png" alt="" /></a>
							<p>Spicy Fried Chicken are deep-fried until wonderfully crispy on the outside but still juicy on the inside.They have a great spicy kick to go along with the crunch!</p>
							<ul class="actions special">
								<li><a href="#" class="button">Menu's</a></li>
							</ul>
						</article>
						<article>
							<header>
								<span class="date">April 18, 2017</span>
								<h2><a href="#">Ante mattis<br />
								interdum dolor</a></h2>
							</header>
							<a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a>
							<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
							<ul class="actions special">
								<li><a href="#" class="button">Menu's</a></li>
							</ul>
						</article>
						<article>
							<header>
								<span class="date">April 14, 2017</span>
								<h2><a href="#">Tempus sed<br />
								nulla imperdiet</a></h2>
							</header>
							<a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a>
							<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
							<ul class="actions special">
								<li><a href="#" class="button">Menu's</a></li>
							</ul>
						</article>
						<article>
							<header>
								<span class="date">April 11, 2017</span>
								<h2><a href="#">Odio magna<br />
								sed consectetur</a></h2>
							</header>
							<a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a>
							<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
							<ul class="actions special">
								<li><a href="#" class="button">Menu's</a></li>
							</ul>
						</article>
						<article>
							<header>
								<span class="date">April 7, 2017</span>
								<h2><a href="#">Augue lorem<br />
								primis vestibulum</a></h2>
							</header>
							<a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a>
							<p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
							<ul class="actions special">
								<li><a href="#" class="button">Menu's</a></li>
							</ul>
						</article>
					</section>

				<!-- Footer -->
					<!--<footer>-->
						<!--<div class="pagination">-->
							<!--<a href="#" class="previous">Prev</a> 
							<a href="#" class="page active">1</a>
							<a href="#" class="page">2</a>
							<a href="#" class="page">3</a>
							<span class="extra">&hellip;</span>
							<a href="#" class="page">8</a>
							<a href="#" class="page">9</a>
							<a href="#" class="page">10</a>
							<a href="#" class="next">Next</a>
						</div>
					</footer> -->

			</div>

		<!-- Footer -->
			<footer id="footer">
				<section>
					<form method="post" action="#">
						<div class="fields">
							<div class="field">
								<label for="name">Name</label>
								<input type="text" name="name" id="name" />
							</div>
							<div class="field">
								<label for="email">Email</label>
								<input type="text" name="email" id="email" />
							</div>
							<div class="field">
								<label for="message">Message</label>
								<textarea name="message" id="message" rows="3"></textarea>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Send Message" /></li>
						</ul>
					</form>
				</section>
				<section class="split contact">
					<section class="alt">
						<h3>Address</h3>
						<p>1234 Somewhere Road #87257<br />
						Nashville, TN 00000-0000</p>
					</section>
					<section>
						<h3>Phone</h3>
						<p><a href="#">(000) 000-0000</a></p>
					</section>
					<section>
						<h3>Email</h3>
						<p><a href="#">info@untitled.tld</a></p>
					</section>
					<section>
						<h3>Social</h3>
						<ul class="icons alt">
							<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
							<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
						</ul>
					</section>
				</section>
			</footer>

		<!-- Copyright -->
			<div id="copyright">
				<ul><li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li></ul>
			</div>

	</div>

@endsection