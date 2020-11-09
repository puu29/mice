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
                            <span>ย้อนกลับ</span>
                        </div>
                    </a>
                    <h2 class="font-semibold no-margin-top pull-left">แก้ไขโปรไฟล์บัญชีผู้ใช้ทั่วไป</h2>
                    <div class="clearfix"></div>
                    <div class="panel panel-default">
                        <form action="member-profile.php" method="post" class="panel-body">
                            <div class="row">
                                <div class="col-sm-6 col-md-5">
                                    <div class="form-group">
                                        <label class="font-semibold">ชื่อจริง</label>
                                        <input type="text" class="form-control" placeholder="ชื่อจริง" value="พัชรศรี">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-5">
                                    <div class="form-group">
                                        <label class="font-semibold">นามสกุล</label>
                                        <input type="text" class="form-control" placeholder="นามสกุล" value="นามสกุลไทย">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6 col-md-5">
                                    <div class="form-group">
                                        <label class="font-semibold">อีเมล</label>
                                        <input type="text" class="form-control" placeholder="อีเมล" value="your@email.com">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-5">
                                    <div class="form-group">
                                        <label class="font-semibold">เบอร์โทรศัพท์ติดต่อ</label>
                                        <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์ติดต่อ" value="0850228426">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-7 col-sm-6 col-md-5 mobile-no-padding-right">
                                    <div class="form-group">
                                        <label class="font-semibold">รหัสผ่าน</label>
                                        <input type="password" class="form-control" readonly placeholder="รหัสผ่าน" value="123456">
                                    </div>
                                </div>
                                <div class="col-xs-5 col-sm-6 col-md-5 mobile-text-right">
                                    <div class="form-group">
                                        <br/><br/>
                                        <a href="member-reset.php" class="font-link">เปลี่ยนรหัสผ่าน</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="font-semibold">ที่อยู่</label>
                                        <textarea rows="5" class="form-control" placeholder="ที่อยู่">450/222 ม.1 หมู่บ้านวิลล่า ซ.เทพารักษ์ 116 ต.แพรกษาใหม่ อ.เมือง จ.สมุทรปราการ 10280</textarea>
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="font-semibold">ชื่อหน่วยงาน องค์กรหรือบริษัท</label>
                                        <input type="text" class="form-control" placeholder="ชื่อหน่วยงาน องค์กรหรือบริษัท" value="Beeative">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <div class="btn-box mobile-text-center">
                                <button type="submit" class="btn btn-md btn-blue-linear font-medium" style="width: 200px;">บันทึก</button>
                            </div>
                            <br/>
                        </form>
                    </div>
                </div>
            </section>
        </div>
        <?php include "layout/footer.php" ?>
    </body>
</html>