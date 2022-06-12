<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>play idolm@ster</title>

    <link rel="stylesheet" href="/mvc_webapp/public/js/minified/themes/default.min.css" />
    <script src="/mvc_webapp/public/js/minified/sceditor.min.js"></script>
    <script src="/mvc_webapp/public/js/minified/formats/bbcode.js"></script>
    <script src="/mvc_webapp/public/js/minified/formats/xhtml.js"></script>
    <link rel="stylesheet" href="/mvc_webapp/public/js/deps/flickity.css" media="screen">
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/style.css">
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/header.css">
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/footer.css">
    <link rel="stylesheet" type="text/css" href="/mvc_webapp/public/css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://code.jquery.com/color/jquery.color.plus-names-2.1.2.min.js"></script>
    <script defer src="/mvc_webapp/public/js/deps/index.js"></script>
</head>

<body>

    <div id="headerTab">
        <div class="btn" onclick="navigate('HomeController','index');">Trang chủ</div>
        <div class="btn" onclick="navigate('HomeController','about');">Thông tin</div>
        <div class="btn" onclick="navigate('HomeController','products');">Dịch vụ</div>
        <div class="btn" onclick="navigate('HomeController','pricing');">Bảng giá</div>
        <div class="btn" onclick="navigate('HomeController','contact');">Liên hệ</div>
        <div class="btn" onclick="navigate('HomeController','news');">Tin tức</div>
        <div class="btn login" onclick="navigate('AuthenticationController','login');">Đăng nhập</div>
    </div>

    <div id="app-container">
        <div class="page-title"></div>
        <div id="app">
            <div id="content">
                <div id="wrapper">
                    <div class="header">Đăng nhập</div>
                    <div class="desc">Nếu có chưa có tài khoản, hãy <span class="quickNav" onclick="load('register')">đăng ký</span> tại đây</div>
                    <div class="inputContainer">
                        <input type="text" id="name" name="name" placeholder="Tên đăng nhập">
                        <input type="password" id="pwd" name="pwd" placeholder="Mật khẩu">
                    </div>
                    <button id="loginButton">Đăng nhập</button>
                </div>
            </div>
        </div>
    </div>














    <div id="footerTab">
        <div id="address">
            <div class="title">Địa chỉ</div>
            <div id="addressContainer">
                <ul>
                    <li class="address">Số 1, Đường Phan Văn Trị, Phường 12, Quận Gò Vấp, TP.HCM</li>
                    <li class="address">Số 1, Đường Phan Văn Trị, Phường 12, Quận Gò Vấp, TP.HCM</li>
                </ul>
            </div>
        </div>
        <div id="socialMedia">
            <div class="title">Social Media</div>
            <div id="socialMediaContainer">
                <img src="https://img.icons8.com/material-outlined/48/000000/facebook-new.png" />
                <img src="https://img.icons8.com/material-outlined/48/000000/youtube-play--v1.png" />
                <img src="https://img.icons8.com/material-outlined/48/000000/instagram-new--v1.png" />
                <img src="https://img.icons8.com/material-outlined/48/000000/twitter.png" />
            </div>
        </div>
        <div id="contact">
            <div class="title">Liên hệ</div>
            <div class="contactsContainer">
                <div class="contactContainer">
                    <div class="contactTitle">Email</div>
                    <div class="contactInfo">tryz@tryz.mail</div>
                </div>
                <div class="contactContainer">
                    <div class="contactTitle">Email</div>
                    <div class="contactInfo">tryz@tryz.mail</div>
                </div>
                <div class="contactContainer">
                    <div class="contactTitle">Hotline</div>
                    <div class="contactInfo">tryz@tryz.mail</div>
                </div>
            </div>
        </div>
    </div>
    <script src="/mvc_webapp/public/js/deps/flickity.pkgd.min.js"></script>
</body>

</html>