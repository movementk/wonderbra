<?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/dochead.php'); ?>
</head>
<body>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/header.php'); ?>
    <main id="content" class="sub member login">
        <div class="container">
            <section class="member-wrap">
                <div class="inner">
                    <div class="login-area">
                        <div class="page-header">
                            <h2 class="title">LOGIN</h2>
                            <p>회원가입을 하시면 더 많은 혜택을 받으실 수 있습니다.</p>
                        </div>
                        <div class="login-form">
                            <div class="form-group">
                                <label for="login-id">아이디</label>
                                <input type="text" id="login-id" class="form-control input-sm">
                            </div>
                            <div class="form-group">
                                <label for="login-pw">비밀번호</label>
                                <input type="password" id="login-pw" class="form-control input-sm">
                            </div>
                            <div class="btn-area">
                                <p>
                                    <button type="button" class="btn btn-default btn-submit btn-block">확인</button>
                                </p>
                            </div>
                        </div>
                        <div class="login-help">
                            <ul class="row">
                                <li class="col-xs-6">
                                    <p>아직 원더브라 회원이 아니신가요?</p>
                                    <a class="btn btn-default btn-join btn-block" href="#">회원가입</a>
                                </li>
                                <li class="col-xs-6">
                                    <p>아이디/비밀번호를 잊으셨나요?</p>
                                    <a class="btn btn-default btn-find btn-block" href="#">ID/PW 찾기</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sns-login">
                        <div class="page-header">
                            <h2 class="title">SNS LOGIN</h2>
                        </div>
                        <div class="sns-list">
                            <ul class="row">
                                <li class="col-xs-4">
                                    <a href="#">
                                        <p><img src="/design/wonderbra/mobile/images/ico_facebook.png" alt="페이스북" width="10"></p>
                                        <p>페이스북<br>로그인</p>
                                    </a>
                                </li>
                                <li class="col-xs-4">
                                    <a href="#">
                                        <p><img src="/design/wonderbra/mobile/images/ico_naver.png" alt="페이스북" width="18"></p>
                                        <p>네이버<br>로그인</p>
                                    </a>
                                </li>
                                <li class="col-xs-4">
                                    <a href="#">
                                        <p><img src="/design/wonderbra/mobile/images/ico_kakao.png" alt="카카오" width="22"></p>
                                        <p>카카오<br>로그인</p>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/footer.php'); ?>
    <?php require_once($_SERVER['DOCUMENT_ROOT'].'/mobile/inc/docfoot.php'); ?>
</body>
</html>