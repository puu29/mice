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
                        <div class="col-sm-5 text-right">
                            <br/><br/><br/><br/>
                            <img class="img" src="assets/images/forget.png">
                            <br/><br/><br/><br/>
                        </div>
                        <div class="col-sm-7">
                            <br/><br/><br/><br/>
                            <form action="login.php" method="post">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <h2 class="text-center font-blue font-semibold no-margin-top">ตั้งค่ารหัสผ่านใหม่</h2>
                                        <div class="form-group">
                                            <label class="font-semibold">รหัสผ่านใหม่</label>
                                            <div class="action-showpass">
                                                <input type="password" class="form-control" placeholder="กรอกรหัสผ่าน">
                                                <i class="m-icon m-icon-eye"></i>
                                            </div>
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-semibold">ยืนยันรหัสผ่านใหม่</label>
                                            <div class="action-showpass">
                                                <input type="password" class="form-control" placeholder="กรอกรหัสผ่านใหม่อีกครั้ง">
                                                <i class="m-icon m-icon-eye"></i>
                                            </div>
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                        <div class="form-group text-center">
                                            <br/>
                                            <button type="submit" class="btn btn-md btn-blue-linear btn-minwidth">ยืนยันการตั้งค่า</button>
                                        </div>
                                    </div>
                                </div>
                                <br/><br/>
                            </form>
                            <br/><br/><br/><br/>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include "layout/footer.php" ?>
    </body>
</html>