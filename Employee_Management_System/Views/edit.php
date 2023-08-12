<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo $this->baseURL; ?>form/style.css">
<!------ Include the above in your HEAD tag ---------->

<div class="container register">
    <div class="row">
        <div class="col-md-3 register-left">
            <img src="<?php echo $this->baseURL; ?>images/employee.jpg" width="100%" alt="" />
            <!-- <h3>Welcome</h3>
                        <p>You are 30 seconds away from earning your own money!</p>
                        <input type="submit" name="" value="Login"/><br/> -->
        </div>
        <div class="col-md-9 register-right">
            <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                <!-- <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                            </li> -->
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="home" role="tab" aria-controls="profile" aria-selected="false">Home</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <h3 class="register-heading">Add Employee</h3>
                    <form  method="post">
                        <div class="row register-form">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="firstname" id="firstname" class="form-control" placeholder="First Name *" value="<?php echo $ViewRes['Data'][0]->firstname;?>" />
                                </div>
                                <div class="form-group">
                                    <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Last Name *" value="<?php echo $ViewRes['Data'][0]->lastname;?>" />
                                </div>
                                <div class="form-group">
                                    <input type="password" minlength="5" maxlength="8" name="password" id="password" class="form-control" placeholder="Password *" value="<?php echo $ViewRes['Data'][0]->password;?>" />
                                </div>
                                <div class="form-group">
                                    <input type="password" minlength="5" maxlength="8" name="cpassword" id="cpassword" class="form-control" placeholder="Confirm Password *" value="<?php echo $ViewRes['Data'][0]->cpassword;?>" />
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email *" value="<?php echo $ViewRes['Data'][0]->email;?>" />
                                </div>
                                <div class="form-group">
                                    <input type="text" minlength="10" maxlength="10" name="mobile" class="form-control" placeholder="Your Phone *" value="<?php echo $ViewRes['Data'][0]->mobile;?>" />
                                </div>

                                <div class="form-group">
                                    <textarea class="form-control" name="address" id="address" cols="30" rows="1" placeholder="Enter Address"><?php echo $ViewRes['Data'][0]->address;?></textarea>
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="male" <?php if($ViewRes['Data'][0]->gender == "male"){echo "checked";} ;?>>
                                            <span> Male </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="female" <?php if($ViewRes['Data'][0]->gender == "female"){echo "checked";} ;?>>
                                            <span>Female </span>
                                        </label>
                                    </div>
                                </div>

                                <input type="submit" name="update" class="btnRegister" value="UPDATE EMPLOYEE" />
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>