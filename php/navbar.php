	<nav id="nav-bar">
	 <div class="logo">
	  <img src="" alt="">
	 </div>
     <div class="hamburger">
		  <div class="line1"></div>
		  <div class="line2"></div>
		  <div class="line3"></div>
	 </div>
	 <ul class="nav-links">
	  <li><a href="http://localhost/productionsOne-website/index.php">Home</a></li>
	  <li><a href="http://localhost/productionsOne-website/pages/film.php">Film</a></li>
	  <li><a href="http://localhost/productionsOne-website/pages/photo.php">Photo</a></li>
	  <li><a href="http://localhost/productionsOne-website/pages/locations.php">Locations</a></li>
	  <li><a href="http://localhost/productionsOne-website/pages/ourpeople.php">Our People</a></li>
	  <li><button id="open-form" class="contact-button" href="#">Contact Us</button></li>
	 </ul>
	</nav>

	<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
	    <span class="close">&times;</span>
	    <div class="form-popup" id="myForm">
	  <form action="/action_page.php" class="form-container">
	    <h3>Contact Us</h3>

	    <label for="text"><b>Name</b></label>
	    <input type="text" placeholder="Enter Name" name="name" required>
	    <label for="email"><b>Email</b></label>
	    <input type="text" placeholder="Enter Email" name="email" required>
	    <label for="text"><b>Message</b></label>
	    <input type="text" id="contact-message" placeholder="Enter your message here" name="message" required>
	    <button type="submit" class="btn">Submit</button>
	  </form>
	</div>
  </div>

</div>