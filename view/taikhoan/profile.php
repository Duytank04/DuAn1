<?php
                if(isset($_SESSION['user'])&&(is_array($_SESSION['user']))){
                    extract($_SESSION['user']);
    
                }

                ?>


<section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Profile User</h2>
                        <h2 class="ec-title">Profile User</h2>
                        <p class="sub-title mb-3">Your Personal Information</p>
                        <br>
                       
                        <img src="assets/images/logo/user.png" alt="" height="150px" with="150px">
                    </div>
                </div>
                
                <div class="ec-login-wrapper">
                    
                    <div class="ec-login-container">
                        
                        <div class="ec-login-form">
                        
                            <form action="index.php?act=#!" method="post">
                                <span class="ec-login-wrap">
                               <label>User Name</label>
                                    <input type="text" value="<?=$user?>" disabled  />
                                </span>
                                <span class="ec-login-wrap">
                               <label>Full Name</label>
                                    <input type="text" value="<?=$fullname?>"   disabled />
                                </span>
                                <span class="ec-login-wrap">
                                    <label>Email</label>
                                    <input type="text" value="<?=$email?>"   disabled />
                                </span>
                                <span class="ec-login-wrap">
                                    <label>Phone Number</label>
                                    <input type="text"  value="<?=$tel?>"  disabled />
                                </span>
                                <span class="ec-login-wrap">
                                    <label>Address</label>
                                    <input type="text" value="<?=$address?>"  disabled />
                                </span>
                                </form>
                                <span class="ec-login-wrap ec-login-btn">
                                    <div class="btn">
                                    
                                    </div>
                                <a class="btn btn-primary" href="index.php?act=updatetk">Edit Profile</a>
                                <a class="btn btn-primary" href="index.php?act=matkhau">Edit Password</a>
                                    <!-- <a class="btn btn-primary" style="background-color:#3474d4;color:#FFFFFF" type="submit" value="Edit Profile" name=""></a> -->
                                    <!-- <a href="#!" class="btn btn-secondary">Register</a> -->
                                    <!-- <input class="btn btn-primary" style="background-color:#3474d4;color:#FFFFFF" type="submit" value="Edit Password" name=""> -->
                                </span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    