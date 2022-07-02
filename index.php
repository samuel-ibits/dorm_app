<?php include '../php/autologin.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="theme-color" content="#1597E2">
     <link rel="shortcut icon" href="images/dorm_icon.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login and registration </title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="css/loginandreg.css">
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</head>

<body>

    <!-- forgot password -->
    <div class="forgot-password-holder">
        <div class="forgot-password-div">
            <div class="center-forgot">
                <div class="top-form-logo">
                    
                    <button class="bk-btn close-pss">
                        <ion-icon name="arrow-back-circle"></ion-icon>
                    </button>

                    <img src="images/dorm_no_bg.png" alt="">
                </div>
                <h3>Forgot Password</h3>
                <form action="#!" class="forgot-password-form-1">
                    <h4>STEP 1</h4>
                    <div class="input-holder">
                        <ion-icon name="person"></ion-icon> <input required type="text" placeholder="Username">
                    </div>

                    <div class="input-holder">
                        <ion-icon name="call"></ion-icon> <input required type="text" placeholder="Phone number">
                    </div>
                    <div class="input-holder">
                        <button type=submit onclick="getcode()" class="sign-up-btn get-code">GET CODE</button>
                    </div>

                    <p class="forgot-password">
                        <span class="">Try another way</span>
                    </p>
                </form>

                <form action="#!" class="forgot-password-form-2">
                    <h4>STEP 2</h4>
                    <div class="btn-1"><ion-icon name="alert"></ion-icon></div>
                    <div class="input-holder">
                        <ion-icon name="qr-code"></ion-icon> <input required type="number" placeholder="Enter 4-digit code">
                    </div>

                    <div class="input-holder">
                        <button class="sign-up-btn verify">VERIFY</button>
                    </div>


                    <div class="instruction-div">
                        
                    <div class="btn-1"><ion-icon name="alert"></ion-icon></div>

                    If you did not get the sms within 3(three) minutes, please send "forgot password,[your_username],[your_phonenumber]" to <span>08151519625</span> with your phone number to get your new password
                    </div>
                    
                </form>

                <form  method="post" action="php/resetpassword.php" class="forgot-password-form-3">
                    <h4>STEP 3</h4>
                    <div class="input-holder">
                        <ion-icon name="lock-open"></ion-icon> <input required type="password" placeholder="New password">
                    </div>

                    <div class="input-holder">
                        <ion-icon name="lock-open"></ion-icon> <input required type="password" placeholder="Confirm password">
                    </div>
                    <div class="input-holder">
                        <button class="sign-up-btn">SET PASSWORD</button>
                    </div>

                
                </form>
            </div>
        </div>
    </div>

    <div class="forgot-password-holder-bg">

    </div>
<!-- login -->
    <div class="screen-container">
        <div class="sub-screen-container">
            <div class="blue">
            </div>
            <div class="left-img">
                <img src="images/students.jpg" alt="">
            </div>
            <div class="left-form-stuff">
                <div>
                    <p>Every Student Asssistant</p>
                    <button>LEARN MORE</button>
                </div>
            </div>
        </div>
        <div class="sub-screen-container login">
            <div class="center">
                <div class="top-form-logo">
                    <img src="images/dorm_no_bg.png" alt="">
                </div>
                <p class="welcome-txt hide-on-big-screen">Hello, welcome</p>
                <form method="post" action="php/login.php">
                    <div class="input-holder">
                        <ion-icon name="person"></ion-icon> <input required name="phone" type="text" placeholder="Username or Phone number">
                    </div>

                    <div class="input-holder">
                        <ion-icon name="lock-open"></ion-icon> <input required name="pass" type="password" placeholder="Password">
                    </div>

                    <div class="input-holder">
                        <button type="submit">SIGN IN</button>
                    </form>
                        <button  class="btn hide-on-big-screen">
                            <ion-icon name="logo-google"></ion-icon>
                        </button>
                        <div class="open-reg btn hide-on-small-screen">SIGN UP</div>
                    </div>

                    <p class="forgot-password">
                        Forgot passord? <span class="forgt-password">Click here</span>
                    </p>
                    <p class="forgot-password hide-on-big-screen">
                        Don't have an account? <span class="open-reg">Click here</span>
                    </p>
               
            </div>
        </div>
<!-- signu up -->
        <div class="sub-screen-container registration">
            <div class="center">
                <div class="top-form-logo-2">
                    <button class="bck-to-login">
                        <ion-icon name="arrow-back-circle"></ion-icon>
                    </button>
                    <img src="images/dorm_no_bg.png" alt="">
                </div>

                <form method="post" action="../php/signup.php">
                    <div class="input-holder">
                        <ion-icon name="person"></ion-icon> <input required type="text" name="fname" placeholder="First name">
                    </div>
                    <div class="input-holder">
                        <ion-icon name="person"></ion-icon> <input required type="text"   name="lname" placeholder="Surname">
                    </div>

                    <div class="input-holder">
                        <ion-icon name="mail"></ion-icon> <input required type="email"   name="email"  placeholder="Mail">
                    </div>

                    <div class="input-holder">
                        <ion-icon name="call"></ion-icon> <input required type="number"  name="phone" placeholder="Phone number">
                    </div>
                    <div class="input-holder">
                        <ion-icon name="lock-open"></ion-icon> <input required type="text"  name="uname" placeholder="Username">
                    </div>
                    <div class="input-holder">
                        <ion-icon name="lock-open"></ion-icon> <input required type="password"  name="pass" placeholder="Password">
                    </div>
                    <div class="input-holder">
                        <ion-icon name="lock-open"></ion-icon> <input required type="password"   name="repass"  placeholder="Re-type assword">
                    </div>
                    <div class="input-holder">
                        <button type="submit" class="sign-up-btn">SIGN UP</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <script type="text/Javascript">
function getcode(can){
var u=document.getElementById('uname').value;

var p=document.getElementById('phone').value;
var ndel= can.id;
var xhttps= new XMLHttpRequest();
xhttps.onreadystatechange= function(){
	if(xhttps.readyState == 4 && xhttps.status == 200){
document.getElementById("deletemess").innerHTML=xhttps.responseText;

}
};

xhttps.open("GET", "https://api.dorm.com.ng/otpapi.php?phone="+p+"&uname="+u+"", true);
xhttps.send();

}
</script>

    <script>
        $(".forgot-password-holder").fadeOut('slow');
        $(".forgot-password-holder-bg").fadeOut('slow');
        $(".instruction-div").fadeOut('fast');
        $(".forgot-password-form-2").fadeOut('fast');
        $(".forgot-password-form-3").fadeOut('fast');


        $(".get-code").click(function () {
   
        $(".forgot-password-form-1").fadeOut('fast');
        $(".forgot-password-form-2").fadeIn('fast');
        $(".forgot-password-form-3").fadeOut('fast');

        });


        $(".verify").click(function () {

        $(".forgot-password-form-1").fadeOut('fast');
        $(".forgot-password-form-2").fadeOut('fast');
        $(".forgot-password-form-3").fadeIn('fast');
        });

        $(".open-reg").click(function () {
            $(".login").fadeOut('fast');
            $(".registration").fadeIn('slow');
        });

        $(".forgt-password").click(function () {
            $(".forgot-password-holder").fadeIn('fast');
            $(".forgot-password-holder-bg").fadeIn('fast');
        });

        $(".btn-1").click(function () {
            $(".instruction-div").fadeToggle('fast');
        });


        $(".close-pss").click(function () {
            $(".forgot-password-holder").fadeOut('fast');
            $(".forgot-password-holder-bg").fadeOut('fast');
        });

        $(".bck-to-login").click(function () {
            $(".login").fadeIn('slow');
            $(".registration").fadeOut('fast');
        });
    </script>
</body>

</html>