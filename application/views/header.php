<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Header</title>
	<!--Bootstrap 5 cdn -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"> 
	<script src="https://kit.fontawesome.com/7bd429f877.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./assets/style/style.css">
</head>
<body>
	<header class="container-fluid p-0">
		<nav class="navbar navbar-expand-lg">
		  <div class="container-fluid">
		    <a class="navbar-brand ps-4" href="#">
		    	<img src="./assets/images/main_logo.png" class="main_logo" alt="logo">
		    </a>
		   <button type="button" class="menu-toggle main-header-menu-toggle ast-mobile-menu-trigger-fill
		   " aria-expanded="false" data-bs-target="#navbarSupportedContent">
		   <div class="d-flex">
		   	<li class="about_link pe-3">
				      		<a href="#" class="price">$0.00</a>
				      	</li>
				      	<li class="about_link pe-4">
				      		<i class="fa-solid fa-bag-shopping shoppingbag"></i>
				      	</li>
		       <span class="mobile-menu-toggle-icon">
                        <span class="ahfb-svg-iconset ast-inline-flex svg-baseline">
                            <svg class="ast-mobile-svg ast-menu-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M3 13h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 7h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1zM3 19h18c0.552 0 1-0.448 1-1s-0.448-1-1-1h-18c-0.552 0-1 0.448-1 1s0.448 1 1 1z"></path></svg>
                        </span>
                        <span class="ahfb-svg-iconset ast-inline-flex svg-baseline">
                            <svg class="ast-mobile-svg ast-close-svg" fill="currentColor" version="1.1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M5.293 6.707l5.293 5.293-5.293 5.293c-0.391 0.391-0.391 1.024 0 1.414s1.024 0.391 1.414 0l5.293-5.293 5.293 5.293c0.391 0.391 1.024 0.391 1.414 0s0.391-1.024 0-1.414l-5.293-5.293 5.293-5.293c0.391-0.391 0.391-1.024 0-1.414s-1.024-0.391-1.414 0l-5.293 5.293-5.293-5.293c-0.391-0.391-1.024-0.391-1.414 0s-0.391 1.024 0 1.414z"></path></svg>
                        </span>
                    </span>
                </div>
		    </button>
		    <div class="collapse navbar-collapse" >
		      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
		        <li class="nav-item">
		          <a class="nav-link " href="#">EVERYTHING</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link" href="#">WOMEN</a>
		        </li>
		        <li class="nav-item dropdown">
		           <a class="nav-link" href="#">MEN</a>
		        </li>
		        <li class="nav-item">
		          <a class="nav-link">ACCESSORIES</a>
		        </li>
		      </ul>
		      <div >
			      	<ul class="d-flex mt-3">
				      	<li class="about_link pe-3">
				      		<a href="#" class="nav-links">ABOUT</a>
				      	</li>
				      	<li class="about_link pe-5">
				      		<a href="#" class="nav-links">CONTACT US</a>
				      	</li>
				      	<li class="about_link pe-3">
				      		<a href="#" class="price">$0.00</a>
				      	</li>
				      	<li class="about_link pe-4">
				      		<i class="fa-solid fa-bag-shopping shoppingbag"></i>
				      	</li>
				      	<li class="about_link pe-4">
				      		<i class="fa-solid fa-user"></i>
				      	</li>
			      </ul>
		      </div>
		    </div>
		  </div>
		</nav>
		<div id="navbarSupportedContent" class="collapse navbar-collapse mobile_navbar">
			<div class="container">
				<div class="mobile_link">
					<i class="fa-solid fa-user"></i>
				</div>
				<div class="mobile_link">
					<p>EVERYTHING</p>
				</div>
				<div class="mobile_link">
					<p>WOMEN</p>
				</div>
				<div class="mobile_link">
					<p>MEN</p>
				</div>
				<div class="mobile_link">
					<p>ACCESSORIES</p>
				</div>
				<div class="mobile_link">
					<p>ABOUT</p>
				</div>
				<div class="mobile_link">
					<p>CONTACT US</p>
				</div>
			</div>
		</div>
	</header>
</body>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript">
    	  $(document).ready(function() {
        $('.menu-toggle').click(function() {
          var isExpanded = $(this).attr('aria-expanded') === 'true';
          $(this).attr('aria-expanded', !isExpanded);
          $('#navbarSupportedContent').toggleClass('show');
          $('.collapse_menu').toggle();
          $('.ast-menu-svg').toggle();
          $('.ast-close-svg').toggle();
        });

        // Change logo based on screen width
        function updateLogo() {
          var logo = document.querySelector('.main_logo');
          if (window.innerWidth <= 991) {
            logo.src = './assets/images/mobile_logo.png';
          } else {
            logo.src = './assets/images/main_logo.png';
          }
        }

        // Run on page load
        updateLogo();

        // Run on window resize
        window.addEventListener('resize', updateLogo);
      });
    </script>
</html>