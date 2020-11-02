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
                        <div class="col-sm-5">
                            <br/><br/>
                            <img class="img" src="assets/images/login.png">
                        </div>
                        <div class="col-sm-7">
                            <form action="index.php?login=1" method="post">
                                <br/>
                                <h2 class="text-center font-blue font-semibold no-margin-top">เข้าสู่ระบบ</h2>
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-group">
                                            <label class="pull-left">อีเมล</label>
                                            <a class="pull-right font-link" href="business-cliam.php">เปลี่ยนผู้ดูแลธุรกิจ</a>
                                            <input type="text" class="form-control" placeholder="example@email.com">
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-group">
                                            <label class="pull-left">รหัสผ่าน</label>
                                            <a class="pull-right font-link font-black" href="forget.php">ลืมรหัสผ่าน</a>
                                            <div class="action-showpass">
                                                <input type="password" class="form-control" placeholder="ใส่รหัสผ่านของท่าน">
                                                <i class="m-icon m-icon-eye"></i>
                                            </div>
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <div class="form-group">
                                            <br/>
                                            <button type="submit" class="btn btn-md btn-blue-linear btn-minwidth">เข้าสู่ระบบ</button>
                                            <div class="mask">ยังไม่เคยเป็นสมาชิก <a href="register.php" class="font-link">สมัครสมาชิก</a></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="or"><span>หรือ</span></div>
                            <div class="regis-social">
                                <div class="row is-small">
                                    <div class="col col-sm-4">
                                        <button class="btn btn-block btn-md btn-blue-dark">
                                            <div class="text-icon is-middle">
                                                <i class="m-icon m-icon-fb m-icon-white"></i>
                                                <span>เข้าสู่ระบบด้วย facebook</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col col-sm-4">
                                        <a href="login-phone.php" class="btn btn-block btn-md btn-yellow">
                                            <div class="text-icon is-middle">
                                                <i class="m-icon m-icon-phone m-icon-white"></i>
                                                <span>เข้าสู่ระบบด้วยเบอร์โทรศัพท์</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col col-sm-4">
                                        <button class="btn btn-block btn-md btn-green">
                                            <div class="text-icon is-middle">
                                                <i class="m-icon m-icon-line m-icon-white"></i>
                                                <span>เข้าสู่ระบบด้วย Line</span>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <br/><br/>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include "layout/footer.php" ?>
    </body>
</html>