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
                        <div class="col-sm-6 col-sm-offset-1">
                            <br/><br/><br/>
                            <form action="register-phone-otp.php" method="post">
                                <h2 class="text-center font-blue font-semibold no-margin-top">สมัครสมาชิกด้วยเบอร์โทรศัพท์</h2>
                                <br/>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="pull-left">ชื่อ</label>
                                            <input type="text" class="form-control" placeholder="ชื่อของท่าน">
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="pull-left">สกุล</label>
                                            <input type="text" class="form-control" placeholder="นามสกุลของท่าน">
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="pull-left">เบอร์โทรศัพท์</label>
                                            <input type="text" class="form-control" data-mask="000-000-0000" placeholder="0__-___-____">
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
                                            <br/><br/>
                                            <button type="submit" class="btn btn-md btn-blue-linear btn-minwidth">รับรหัส OTP เพื่อยืนยันตัวตน</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <br/>
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
    </body>
</html>