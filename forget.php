<!DOCTYPE html>
<html>
    <head>
        <?php include "layout/head.php" ?>
    </head>
    <body>
        <?php include "layout/nav.php" ?>
        <div id="wrapper">
            <section class="regis-box is-forget">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 text-right">
                            <br/><br/><br/><br/>
                            <img class="img" src="assets/images/forget.png">
                            <br/><br/><br/><br/>
                        </div>
                        <div class="col-sm-7">
                            <br/><br/><br/><br/>
                            <form action="reset.php" method="post">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <h2 class="text-center font-blue font-semibold no-margin-top">ลืมรหัสผ่าน</h2>
                                        <p class="text-center">ใส่อีเมลที่ท่านมีบัญชีอยู่ในระบบอยู่แล้ว เพื่อทำการส่งไปยังอีเมลที่ท่านระบุไว้สำหรับการตั้งค่ารหัสผ่านใหม่</p>
                                        <br/>
                                        <div class="form-group">
                                            <label>อีเมล</label>
                                            <input type="text" class="form-control" placeholder="example@email.com">
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                        <div class="form-group text-center">
                                            <br/>
                                            <button type="submit" class="btn btn-md btn-blue-linear btn-minwidth">ส่งคำขอการเปลี่ยนรหัสผ่าน</button>
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