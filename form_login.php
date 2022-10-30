<!-- mulai form -->

<div class="container-fluid"> <!--Container Start-->
<br>
<br>
<h2 class="form-signin-heading" align="center">Silakan Login Dahulu</h2>
	<form class="form-group" method="post" action="login_action.php" role="form" data-toggle="validator">
    <label for="Username" class="col-md-6 col-md-offset-3"> Username </label>       	
    <div class="col-md-6 col-md-offset-3">
    	<input type="text" class="form-control" placeholder="Masukkan Username Anda" name="username" required>
    </div> 
    
    <label for="Username" class="col-md-6 col-md-offset-3"> Password </label>
    <div class="col-md-6 col-md-offset-3">
    <input type="password" class="form-control" placeholder="MasukkanPassword Anda" name="password" required>		
    </div>
    <br>
    
    <div class="col-md-6 col-md-offset-3">
    	<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </div>
	</form>
</div>    
<!-- akhir form -->
