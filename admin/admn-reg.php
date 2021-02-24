<?php include '../includes/id-formula.php';?>
<?php include '../includes/header.php';?>
<link href="../assets/css/cover.css" rel="stylesheet"> 

<!-- USER REGISTRATON -->

  <main role="main" class="inner cover">
  <div class="container register">
                <div class="row">
                    <div class="col-md-3 register-left">
                        <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                        <h3>Welcome</h3>
                        
                    </div>
                    <div class="col-md-9 register-right">
                        <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Member Registration</a><br>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <!-- <h3 class="register-heading">Apply as a Employee</h3> --><br>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                      <form action="insert.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Full Name" name= "username" required/>
                                        </div>
                                        <div class="form-group">
                                            <div class="maxl">
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="M">
                                                    <span> Male </span> 
                                                </label>
                                                <label class="radio inline"> 
                                                    <input type="radio" name="gender" value="F">
                                                    <span>Female </span> 
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Age" name= "age" required/>
                                        </div> 
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="userID" class="form-control" placeholder="ID Number" name="userID"  value="<?php echo $reg?>" readonly/>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" minlength="10" maxlength="13"  class="form-control" placeholder="Your Phone No." name="phone" required/>
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="district">
                                                <option class="hidden"  selected disabled value="">District Name</option>
                                                <option value="Mjini">Mjini</option>
                                                <option value="Magharibi A">Magharibi A</option>
                                                <option value="Magharibi B">Magharibi B</option>
                                                <option value="Wilaya ya Kati">Wilaya ya Kati</option>
                                                <option value="Kaskazini A">Kaskazini A</option>
                                                <option value="Kaskazini B">Kaskazini B</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Group Name" name="grp" />
                                        </div><br>
                                        <button class="btn btn-primary" type="submit">Register</button><br><br>
                                    </div>
                                  </form>
                              
  </main>

  <footer class="mastfoot mt-auto">
   <div class="inner">
      <p>Website template for <a href="index.html" class="text-decoration-none">UWAMWIMA</a>, by 
        <a href="https://cutt.ly/Eh34Unh" target="_blank" class="text-decoration-none">
          <i class="fa fa-whatsapp" aria-hidden="true"></i></a>
        <a href="https://t.me/azzinjibaary" target="_blank" class="text-decoration-none">
          <i class="fa fa-twitter" aria-hidden="true"></i></a>
        <a href="https://facebook.com/abou.yaziyd" target="_blank" class="text-decoration-none">
          <i class="fa fa-facebook" aria-hidden="true"></i></a> 
        <a href="https://t.me/azzinjibaary" target="_blank" class="text-decoration-none">
          <i class="fa fa-telegram" aria-hidden="true"></a></i>
        <a href="https://t.me/azzinjibaary" target="_blank" class="text-decoration-none"> Abou Yaziyd</a>.</p>
    </div>
  </footer>
</div>
</body>
</html>
