<!DOCTYPE html>
<html>
    <head>
        <?php include "layout/head.php" ?>
    </head>
    <body>
        <?php include "layout/nav.php" ?>
        <div id="wrapper">
            <section class="member">
                <?php include "layout/nav-member.php" ?>
                <div class="member-body">
                    <h2 class="font-semibold no-margin-top pull-left">เปลี่ยนรหัสผ่าน</h2>
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="panel panel-default">
                                <form action="member-profile.php" method="post" class="panel-body">
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
                                    <br/>
                                    <div class="btn-box">
                                        <button type="submit" class="btn btn-md btn-blue-linear font-medium" style="width: 200px;">บันทึก</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include "layout/footer.php" ?>
    </body>
</html>