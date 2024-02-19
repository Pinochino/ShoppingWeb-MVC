<section id="loginTable" class="mt30">
    <form id="form-1" action="" onsubmit="signUp()" method="POST">
        <div class="uk-flex uk-flex-between uk-flex-column">
            <div class="header-login">
                <span>Sign in</span>
                <span>Create An Account</span>
            </div>
            <div class="body-login">
                <div class="Username">
                    <div class="form-group">
                        <span>Tên đầy đủ<sup>*</sup></span>
                        <div class="uk-inline">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
                            <input id="fullname" class="uk-input" type="text" aria-label="Not clickable icon" placeholder="username">
                        </div>
                        <span class="form-message"></span>
                    </div>
                </div>
                <div class="Username">
                    <div class="form-group">
                        <span>Email<sup>*</sup></span>
                        <div class="uk-inline">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
                            <input id="email" class="uk-input" type="email" aria-label="Not clickable icon" placeholder="username" autocomplete="new-password">
                        </div>
                        <span class="form-message"></span>
                    </div>
                </div>
                <div class="Password1 mb10">
                    <div class="form-group">
                        <span>Mật khẩu<sup>*</sup></span>
                        <div class="uk-inline">
                            <span onclick="openPassword()" class="uk-form-icon uk-icon-eye-slash"  uk-icon="icon: eye-slash"></span>
                            <input id="password" class="uk-input" type="password" aria-label="Clickable icon" placeholder="password" autocomplete="new-password">
                        </div>
                        <span class="form-message"></span>
                    </div>
                </div>
                <div class="Password2 mb10">
                    <div class="form-group">
                        <span>Nhập lại mật khẩu<sup>*</sup></span>
                        <div class="uk-inline">
                            <span onclick="openPassword()" class="uk-form-icon uk-icon-eye-slash" uk-icon="icon: eye-slash"></span>
                            <input id="password_confirmation" class="uk-input" type="password" aria-label="Clickable icon" placeholder="password" autocomplete="new-password">
                        </div>
                        <span class="form-message"></span>
                    </div>
                </div>
            </div>
            <div class="footer-login mt20">
                <div class="footer-login-header mb20">
                    <div class="Remember-me mr10">
                        <input id="checkbox" type="radio" name="" id="">
                        <span>Remember me</span>
                    </div>
                    <div class="Lostpassword">
                        <a href="">Lost your password</a>
                    </div>
                </div>
                <div class="login">
                    <button id="sign-up">
                        Login
                    </button>
                </div>
            </div>
        </div>
    </form>
</section>
<!-- Mong muốn của chúng ta -->
<script>
    Validator({
        form: '#form-1',
        errorSelector: ".form-message",
        rules: [
            Validator.isRequired('#fullname'),
            Validator.isEmail('#email'),
            Validator.minLength('#password', 6),
            Validator.isConfirmed('#password_confirmation', function () {
                return document.querySelector("#form-1 #password").value;
            }, "Mật khẩu nhập lại không chính xác"),
        ]
    })
</script>