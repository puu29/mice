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
                    <a href="javascript:history.back()" class="to-back font-blue hidden-desktop">
                        <div class="text-icon is-middle">
                            <i class="glyphicon glyphicon-menu-left" style="top: 56%"></i>
                            <span>กลับไปเมนูบัญชีทั่วไป</span>
                        </div>
                    </a>
                    <h2 class="font-semibold no-margin-top pull-left">โปรไฟล์บัญชีผู้ใช้ทั่วไป</h2>
                    <a href="member-profile-edit.php" class="btn btn-gray btn-md pull-right mt-5 btn-edit-profile">
                        <div class="text-icon">
                            <i class="m-icon m-icon-edit m-icon-black"></i>
                            <span>แก้ไขโปรไฟล์ของฉัน</span>
                        </div>
                    </a>
                    <div class="clearfix"></div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="font-semibold">ชื่อจริง</label>
                                        <p>พัชรศรี</p>
                                    </div>
                                    <br/>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="font-semibold">นามสกุล</label>
                                        <p>นามสกุลไทย</p>
                                    </div>
                                    <br/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="font-semibold no-margin">อีเมล</label>
                                        <p>your@email.com</p>
                                    </div>
                                    <br/>
                                </div>
                                <div class="col-sm-6 col-md-3">
                                    <div class="form-group">
                                        <label class="font-semibold no-margin">เบอร์โทรศัพท์ติดต่อ</label>
                                        <p>0850228426</p>
                                    </div>
                                    <br/>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="font-semibold no-margin">รหัสผ่าน</label>
                                        <p>•••••••</p>
                                    </div>
                                    <br/>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="font-semibold no-margin">ที่อยู่</label>
                                        <p>450/222 ม.1 หมู่บ้านวิลล่า ซ.เทพารักษ์ 116 ต.แพรกษาใหม่ อ.เมือง จ.สมุทรปราการ 10280</p>
                                    </div>
                                    <br/>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="font-semibold no-margin">ชื่อหน่วยงาน องค์กรหรือบริษัท</label>
                                        <p>Beeative</p>
                                    </div>
                                    <br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include "layout/footer.php" ?>
    </body>
</html>