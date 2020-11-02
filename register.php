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
                            <br/>
                            <img class="img" src="assets/images/register.png">
                        </div>
                        <div class="col-sm-7">
                            <form action="" method="post">
                                <h2 class="text-center font-blue font-semibold no-margin-top">สมัครสมาชิก</h2>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ชื่อ</label>
                                            <input type="text" class="form-control" placeholder="ชื่อของท่าน">
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>สกุล</label>
                                            <input type="text" class="form-control" placeholder="นามสกุลของท่าน">
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label>อีเมล</label>
                                            <input type="text" class="form-control" placeholder="example@email.com">
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>รหัสผ่าน</label>
                                            <div class="action-showpass">
                                                <input type="password" class="form-control" placeholder="ใส่รหัสผ่านของท่าน">
                                                <i class="m-icon m-icon-eye"></i>
                                            </div>
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>ยืนยันรหัสผ่าน</label>
                                            <div class="action-showpass">
                                                <input type="password" class="form-control" placeholder="ยืนยันรหัสผ่านอีกครั้ง">
                                                <i class="m-icon m-icon-eye"></i>
                                            </div>
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <div class="form-group">
                                            <br/>
                                            <button type="submit" class="btn btn-md btn-blue-linear btn-minwidth">สมัครสมาชิก</button>
                                            <div class="mask">เคยเป็นสมาชิกอยู่แล้ว <a href="login.php" class="font-link">เข้าสู่ระบบ</a></div>
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
                                                <span>สมัครด้วย facebook</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="col col-sm-4">
                                        <a href="register-phone.php" class="btn btn-block btn-md btn-yellow">
                                            <div class="text-icon is-middle">
                                                <i class="m-icon m-icon-phone m-icon-white"></i>
                                                <span>สมัครด้วยเบอร์โทรศัพท์</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col col-sm-4">
                                        <button class="btn btn-block btn-md btn-green">
                                            <div class="text-icon is-middle">
                                                <i class="m-icon m-icon-line m-icon-white"></i>
                                                <span>สมัครด้วย Line</span>
                                            </div>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <br/>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include "layout/footer.php" ?>
    </body>
</html>