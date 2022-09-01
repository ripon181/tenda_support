<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
include('./db_connect.php');
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login | Customer Support System</title>
 	

<?php include('./header.php'); ?>
<?php 
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>

</head>
<style>
	body{
		width: 100%;
	    height: calc(100%);
	    position: fixed;
	    top:0;
	    left: 0
	    /*background: #007bff;*/
	}
	main#main{
		width:100%;
		height: calc(100%);
		display: flex;
	}

</style>

<body>


<!--   <main id="main" >
  	
  		<div class="align-self-center w-100">
		<h4 class="text-white text-center"><b>Customer Support System System</b></h4>
  		<div id="login-center" class="bg-dark row justify-content-center">
  			<div class="card col-md-4">
  				<div class="card-body">
  					<form id="login-form" >
  						<div class="form-group">
  							<label for="username" class="control-label text-dark">Username</label>
  							<input type="text" id="username" name="username" class="form-control form-control-sm">
  						</div>
  						<div class="form-group">
  							<label for="password" class="control-label text-dark">Password</label>
  							<input type="password" id="password" name="password" class="form-control form-control-sm">
  						</div>
  						<div class="form-group">
  							<label for="password" class="control-label text-dark">Type</label>
  							<select class="custom-select custom-select-sm" name="type">
  								<option value="3">Customer</option>
  								<option value="2">Staff</option>
  								<option value="1">Admin</option>
  								
  							</select>
  						</div>
  						<center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
  					</form>
  				</div>
  			</div>
  		</div>
  		</div>
  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
 -->



<div class="container">
  <div class="card">
    <div class="card-body">
      <div class="circle"></div>
      <header class="text-center">
        <img src="assets/dist/img/sb_logo.png" alt="">
        <p>Online Support Portal</p>
      </header>
      <form class="main-form text-center" id="login-form">

        <div class="form-group">
          <label class="" for="username">          
            <input type="text" id="username" name="username" class="myInput text-center" placeholder="Username">
          </label>
        </div>

        <div class="form-group">
          <label for="password">
            <input type="password" id="password" name="password" class="myInput text-center" placeholder="Password">
          </label>
        </div>
            <div class="form-group">
                <select for="password" name="type" class="myInput form-control text-center">
                    <option>SELECT ROLE</option>
                    <option value="1">ADMIN</option>
                    <option value="2">STAFF</option>
                </select>
            </div>
        <div class="form-group">
          <label>
            <center><button class="form-control button  btn-block btn-wave btn-primary">Login</button></center>
          </label>
        </div>
      </form>
    </div>
  </div>
</div>





<style>
    body {
  background: white;
}
p {
    font-size: 21px;
    text-transform: uppercase;
    color: black;
    margin-top:40px;
    font-weight: 600;
}
.container {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 1000px;
  border-radius: 20px;
}

.card {
  border-radius: 20px;
  height: 600px;
  background-image: linear-gradient(to right, #0084ff, #00f2ff);
  border: none;
  overflow: hidden;
  box-shadow: 0 10px 20px #414141;
  z-index: 0;
  box-sizing: border-box;
}

.circle {
  position: absolute;
  bottom: -230px;
  left: 50%;
  transform: translate(-50%, -50%);
  background: #ffffff;
  clip-path: circle(50%);
  height: 700px;
  width: 700px;
  z-index: -1;
  overflow: hidden;
}

.myHed {
  margin-top: 30px;
  font-size: 32px;
  margin-bottom: 10px;
  font-weight: 700;
  background-image: linear-gradient(to right, #0084ff, #00f2ff);
  color: transparent;
  -webkit-background-clip: text;
  background-clip: text;
}
.button {
  width: 350px;
  border-radius: 25px;
  background-image: linear-gradient(to right, #0084ff, #00f2ff);
  color: #fff;
  font-weight: 700;
  height:50px;
}
.button:hover{
    background-image: linear-gradient(to left, #0084ff, #00f2ff);
}
.myInput {
  width: 350px;
  border-radius: 25px;
  background-image: linear-gradient(to right, #0084ff, #00f2ff);
  color: #fff;
  border: none;
  display: block;
  margin:10px;
  margin:0 auto;
  height:50px;
}

.myInput::placeholder {
  color: #fff;
  opacity: 0.6;
}

.myInput:focus {
  border: none;
  outline: none;
}

.check_1 {
  font-weight: 500;
  color: rgb(85, 85, 85);
  font-size: 12px;
  margin: 15px auto;
  cursor: pointer;
}
</style>








</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='index.php?page=home';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
	$('.number').on('input',function(){
        var val = $(this).val()
        val = val.replace(/[^0-9 \,]/, '');
        $(this).val(val)
    })
</script>	
</html>