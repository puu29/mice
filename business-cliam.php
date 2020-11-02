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
                            <a href="javascript:history.back()" class="to-back font-blue pull-right">
                                <div class="text-icon is-middle">
                                    <i class="glyphicon glyphicon-menu-left"></i>
                                    <span>ย้อนกลับ</span>
                                </div>
                            </a>
                            <br/><br/><br/><br/><br/><br/>
                            <img class="img" src="assets/images/claim.png">
                        </div>
                        <div class="col-sm-7">
                            <br/><br/>
                            <form action="business-cliam-success.php" method="post">
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">
                                        <h2 class="text-center font-blue font-semibold no-margin-top">เปลี่ยนผู้ดูแลธุรกิจ</h2>
                                        <p class="text-center">กรณีการเปลี่ยนผู้ดูแลธุรกิจ จากการไม่สามารถใช้อีเมลเดิมในการเข้าสู่ระบบเพื่อดูธุรกิจ ท่านสามารถกรอกบัญชีอื่นที่มีอยู่แล้วในระบบแทนได้ เพื่อส่งคำขอ และจะมีแอดมินติดต่อท่านกลับไป แต่หากท่านยังไม่มีบัญชีอื่น สามารถ<br/><a href="register.php" class="font-link">สมัครสมาชิก</a> และใส่ข้อมูลตามที่ระบุไว้ได้</p>
                                        <div class="form-group">
                                            <label>อีเมลใหม่</label>
                                            <input type="text" class="form-control" placeholder="example@email.com">
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                        <div class="form-group">
                                            <label>ชื่อธุรกิจ</label>
                                            <div class="action-showpass">
                                                <input type="password" class="form-control" placeholder="ชื่อธุรกิจที่ท่านดูแล">
                                                <i class="m-icon m-icon-eye"></i>
                                            </div>
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                        <div class="form-group">
                                            <label>เบอร์โทรศัพท์ (ปัจจุบัน)</label>
                                            <input type="text" class="form-control" data-mask="000-000-0000" placeholder="08_-___-___">
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                        <div class="form-group text-center">
                                            <br/>
                                            <button type="submit" class="btn btn-md btn-blue-linear btn-minwidth">ส่งคำขอการเปลี่ยนผู้ดูแลธุรกิจ</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <br/><br/>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include "layout/footer.php" ?>
    </body>
</html>