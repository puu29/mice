<!DOCTYPE html>
<html>
    <head>
        <?php include "layout/head.php" ?>
    </head>
    <body>
        <?php include "layout/nav.php" ?>
        <div id="wrapper">
            <section class="regis-box">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 text-center">
                            <br/><br/><br/>
                            <img class="img" src="assets/images/login.png" width="400">
                        </div>
                        <div class="col-sm-5 col-sm-offset-1">
                            <br/><br/><br/>
                            <form action="register-phone-otp.php" method="post">
                                <h2 class="text-center font-blue font-semibold no-margin-top">สมัครสมาชิกด้วยเบอร์โทรศัพท์</h2>
                                <br/>
                                <div class="form-group">
                                    <label class="pull-left">เบอร์โทรศัพท์</label>
                                    <input type="text" class="form-control" value="080-000-0000" readonly>
                                    <p class="required">กรุณากรอกข้อมูล</p>
                                </div>
                                <br/>
                                <div class="form-group">
                                    <label class="pull-left">กรอกรหัส OTP</label>
                                    <div class="otp-box">
                                        <input type="text" class="form-control" data-mask="000000" maxlength="6">
                                        <div class="box">
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                            <span></span>
                                        </div>
                                    </div>
                                    <p class="required">กรุณากรอกข้อมูล</p>
                                </div>
                                <div class="form-group">
                                    <a href="javascript:void(0)" onclick="resend_otp()" class="font-link">รับรหัส OTP อีกครั้ง</a>
                                </div>
                            </form>
                            <br/><br/>
                            <a href="javascript:history.back()" class="to-back font-blue">
                                <div class="text-icon is-middle">
                                    <i class="glyphicon glyphicon-menu-left"></i>
                                    <span>ย้อนกลับ</span>
                                </div>
                            </a>
                            <br/><br/><br/><br/>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include "layout/footer.php" ?>
        <script>
            function resend_otp()
            {
                console.log('resend_otp');
            }

            (function(){
                $('.otp-box input').focus();

                $('.otp-box input').keyup(function(){
                    var value = $(this).val();
                    if(value.length == 6)
                    {
                        $('#loading').fadeIn();
                        setTimeout(() => {
                            window.location.href = 'login.php';
                        }, 1000);
                    }
                });
            })();
        </script>
    </body>
</html>