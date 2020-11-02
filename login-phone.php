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
                            <form action="index.php?login=1" method="post">
                                <h2 class="text-center font-blue font-semibold no-margin-top">เข้าสู่ระบบด้วยเบอร์โทรศัพท์</h2>
                                <br/>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="pull-left">เบอร์โทรศัพท์</label>
                                            <input type="text" class="form-control" data-mask="000-000-0000" placeholder="0__-___-____">
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <div class="form-group">
                                            <br/><br/>
                                            <button type="submit" class="btn btn-md btn-blue-linear btn-minwidth">เข้าสู่ระบบ</button>
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