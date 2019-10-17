<!DOCTYPE HTML>
<!--
	ZeroFour by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>ZeroFour by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="{{asset('assets/css/main.css')}}" />
		@yield('cssforwelcome')
	</head>
	<body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<div class="container">

						<!-- Header -->
							<header id="header">
								<div class="inner">

									<!-- Logo -->
										<h1><a href="index.html" id="logo">ZeroFour</a></h1>

									

								</div>
							</header>




					</div>
				</div>

			<!-- Main Wrapper -->
				<div id="main-wrapper">
				
				
					<div class="wrapper style3">
						<div class="inner">
							<div class="container">
								<div class="row">
									<div class="col-8 col-12-medium">

										<!-- Article list -->
											<section class="box article-list">
												<h2 class="icon fa-file-alt">Create New Admin</h2>

												<!-- Excerpt -->
													<article class="box excerpt">
													<form action="{{route('registernew')}}" method="POST">
														
														{!! csrf_field() !!}
														<input type="text" name="name" id="name" placeholder="Name">
														<input type="password" name="password" id="password" placeholder="Password">
														<input type="email" name="email" id="email" placeholder="E-Mail">
														<input type="submit" name="submit" id="submit" value="Create User">		
														The owner of this device turned off the dinosaur game.												
													</form>
												</article>
												

											</section>
									</div>
									
								</div>
							</div>
						</div>
					</div>
				</div>


<!-- Footer Wrapper -->
<div id="footer-wrapper">
    <footer id="footer" class="container">
        <div class="row">
          
            <div class="col-12">
               
                    <ul class="menu">
                        <li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                    </ul>
               
            </div>
        </div>
    </footer>
</div>

</div>

<!-- Scripts -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/jquery.dropotron.min.js')}}"></script>
<script src="{{asset('assets/js/browser.min.js')}}"></script>
<script src="{{asset('assets/js/breakpoints.min.js')}}"></script>
<script src="{{asset('assets/js/util.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>

</body>
</html>