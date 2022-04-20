<?php
if(isset($_POST['login'])){
    $uname = $_POST['uname'];
    $upass = $_POST['upass'];

    echo $user->login($uname, $upass);
    
}

$welcome = $setting->getWelcome();
?>



<div class="container my-4 py-3 bg-info col-md-4 rounded">
    <h4 class="text-center">Welcome to <?php echo $welcome ?></h4>
    <form class="my-3" action="" method="POST" id="login_form">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Username</label>
            <input type="text" name="uname" class="form-control" id="username" aria-describedby="emailHelp">
            
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="upass" class="form-control" id="password">
        </div>
        <div class="text-center">

            <button type="submit" name="login" class="btn btn-primary ">Submit</button>
        </div>
    </form>
</div>


<script src="src/js/jquery-3.6.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" ></script>
<script src="src/js/validation.js"></script>
<link rel="stylesheet" href="src/style/style.css">
