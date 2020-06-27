<?php
use yii\helpers\Url;

?>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
	    <div class="container d-flex align-items-center">
	    	<a class="navbar-brand" href="index.html">Kiddos</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	      <?php 
	      
	      
	      ?>
	      
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="<?= Url::to(["site/index"])?>" class="nav-link pl-0">Home</a></li>
	        	<li class="nav-item"><a href="<?= Url::to(["site/about"])?>" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="<?= Url::to(['site/teacher'])?>" class="nav-link">Teacher</a></li>
	        	<li class="nav-item"><a href="<?= Url::to(['site/courses'])?>" class="nav-link">Courses</a></li>
	        	<li class="nav-item"><a href="<?= Url::to(['site/pricing'])?>" class="nav-link">Pricing</a></li>
	        	<li class="nav-item"><a href="<?= Url::to(['site/blog'])?>" class="nav-link">Blog</a></li>
	          	<li class="nav-item"><a href="<?= Url::to(['site/contact'])?>" class="nav-link">Contact</a></li>
	          	<li class="nav-item"><a href="<?= Url::to(['site/signup'])?>" class="nav-link">SignUp</a></li>
	          	<li class="nav-item"><a href="<?= Url::to(['site/login'])?>" class="nav-link">LogIn</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    