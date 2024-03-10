<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once '../components/head.php' ?>


</head>

<body>
<?php 
    $nameError = "";

if (isset($_SESSION["email"])) {
    $nameError = "";
    $name = "";
    $password = "";
    $gmail = "";
    
    if (isset($_POST["btn"])) {
        $name = $_POST["fullname"];
        $password = $_POST["password"];
        $gmail = $_POST["email"];
    
        if (empty($_POST["fullname"])) {
            $nameError = "Không được để trống"; 
        } else {
            $name = $_POST["fullname"];
            if (!preg_match("/^[a-zA-ZÀ-ỹ ]*$/u", $name)) {
                $nameError = "Không được sử dụng kí tự đặc biệt";
                if (($name= "Tran Dinh Hung") && ($gmail="Tranhunghp22112004@gmail.com") && ($password = 123456)) {
                    $_SESSION["email"] = $gmail;
                    header('location: home.php');
                } else {
                    echo "Tài khoản đăng nhập sai";
                }
            } 
        }
    }
}

    ?>
    <div class="home-login">
        <section id="loginTable">
            <form id="form-1" action="home.php" onsubmit="signUp()" method="post">
                <div class="sum-login">
                <div class="login-left">
                    <p>
                        Need webdesign 
                        <br>
                        for your business
                        <br>
                        <span>Design Speacee</span>
                        <br>
                        will help you
                    </p>
                    <img class="img img-scaledown"src="/src/public/resource/Images/logo.png" alt="" srcset="">
                </div>
                <div class="login-right">
                    <div class="uk-flex uk-flex-between uk-flex-column">
                        <div class="header-login">
                            <span>Create An Account</span>
                        </div>
                        <div class="body-login">
                            <div class="login-other">
                               <button type="submit">
                                <i uk-icon="icon: google;"></i>
                                <span>Sign up width google</span>
                               </button>
                               <button type="submit">
                               <i uk-icon="icon: facebook;"></i>
                                <span>Sign up width facebook</span>
                               </button>
                            </div>
                            <span>--OR--</span>
                            <div class="input-login">

                                <div class="Username">
                                    <div class="form-group">
                                        <span>Full name<sup>*</sup></span>
                                        <div class="uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
                                            <input id="fullname" name="fullname" class="uk-input" type="text" aria-label="Not clickable icon" placeholder="username">
                                            <span style="color: red;"><?php echo $nameError; ?></span>
                                        </div>
                                        <span class="form-message"></span>
                                    </div>
                                </div>
                                <div class="Username">
                                    <div class="form-group">
                                        <span>Email<sup>*</sup></span>
                                        <div class="uk-inline">
                                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
                                            <input id="email" name="email" class="uk-input" type="email" aria-label="Not clickable icon" placeholder="Email" autocomplete="new-password">
                                        </div>
                                        <span class="form-message"></span>
                                    </div>
                                </div>
                                <div class="Password1 mb10">
                                    <div class="form-group">
                                        <span>Mật khẩu<sup>*</sup></span>
                                        <div class="uk-inline">
                                            <a onclick="openPassword()" class="uk-form-icon uk-icon-eye-slash" uk-icon="icon: eye-slash"></a>
                                            <input id="password" name="password" class="uk-input" type="password" aria-label="Clickable icon" placeholder="password" autocomplete="new-password">
                                        </div>
                                        <span class="form-message"></span>
                                    </div>
                                    <div class="login">
                                
                          
                                </div>
                            </div>
                        </div>
                        <div class="footer-login mt20">
                            <div class="footer-login-header mb20">
                                <button type="submit" name="btn">Login up</button>
                                <p>Already have an acount <span>Log in</span></p>
                            </div>
                        </div>
                       
                    </div>
                </div>
            </div>
            </form>
    </section>
    </div>
    














<!-- Mong muốn của chúng ta -->
<!-- <script>
    Validator({
        form: '#form-1',
        formGroupSelector: '.form-group',
        errorSelector: ".form-message",
        rules: [
            Validator.isRequired('#fullname', "Vui lòng nhập tên đầy đủ của bạn"),
            Validator.isEmail('#email'),
            Validator.minLength('#password', 6),
            Validator.isRequired('#password_confirmation'),
            Validator.isRequired('input[name="gender"]'),
            Validator.isConfirmed('#password_confirmation', function() {
                return document.querySelector("#form-1 #password").value;
            }, "Mật khẩu nhập lại không chính xác"),
        ],
        onSubmit: function(data) {
            console.log(data);
        }
    })
</script> -->
</body>
    <?php require_once 'C:\XAMPP2\php\PHP WEBSITE\src\public\components\script.php' ?>
</html>
