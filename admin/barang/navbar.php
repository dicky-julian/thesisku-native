<!-- Nav BAr -->

 <nav class="navbar navbar-inverse" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"> 
				Thesisku
			</a>
		</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
		<ul class="nav navbar-nav">
		
			<li><a href="../index.php"> Home </a></li>
           <li><a href="../bagian/index.php"> Bagian </a></li>   
           <li><a href="../barang/index.php"> Barang </a></li>
           <li><a href="../pegawai/index.php"> Pegawai </a></li>   
		</ul>
            
<!-- Navbar Right-->
		<ul class="nav navbar-nav navbar-right">
        	<li><a href="#"> <?php echo $_SESSION['nama']?> </a></li>
			<li><a href="../../logout.php"> Log out </a></li>
		</ul>
    
    	</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>

<!-- Nav Bar End -->