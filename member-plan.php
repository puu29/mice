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
                    <h2 class="font-semibold no-margin-top">วางแผนการจัดงานไมซ์</h2>
                    <p>เริ่มการสร้างและวางแผนอีเว้นท์ของคุณเก็บมันไว้ คุณสามารถจัดการรายละเอียดและเลือกผู้ให้บริการสำหรับอีเว้นท์ของคุณได้ เช่น สถานที่จัดงาน อาหารและเครื่องดื่ม ผู้ผลิตของชำร่วย โดยข้อมูลทั่วไปจะเก็บอยู่ ภายในบัญชีของคุณ ซึ่งจะไม่ถูกเปิดเผยให้ผู้ใช้งานอื่นมองเห็น</p>
                    <br/>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="plan-type">
                                <div class="row">
                                    <div class="col col-sm-6">
                                        <div class="box text-center">
                                            <label class="font-semibold font-blue no-margin">เลือกการจัดงาน</label>
                                            <h3 class="font-semibold no-margin">แบบเลือกด้วยตนเอง</h3>
                                            <br/>
                                            <img src="assets/images/plan1.png" class="img">
                                            <br/><br/>
                                            <div class="desc">ท่านสามารถเลือกรายชื่อผู้ประกอบการที่สนใจได้ด้วยตนเอง หลังจากกรอกข้อมูลรายละเอียดงานที่ต้องการจะจัดเสร็จแล้ว</div>
                                            <br/>
                                            <a href="member-plan-manual.php" class="btn btn-md btn-blue-linear">เลือกด้วยตนเอง</a>
                                        </div>
                                    </div>
                                    <div class="col col-sm-6">
                                        <div class="box text-center">
                                            <label class="font-semibold font-blue no-margin">เลือกการจัดงาน</label>
                                            <h3 class="font-semibold no-margin">แบบระบบจับคู่อัตโนมัติ</h3>
                                            <br/>
                                            <img src="assets/images/plan2.png" class="img">
                                            <br/><br/>
                                            <div class="desc">หลังจากที่ท่านกรอกข้อมูลรายละเอียดงานที่ต้องการจะจัดเสร็จแล้ว ระบบจะทำการจับคู่รายชื่อผู้ประกอบการให้ท่านอัตโนมัติ และสามารถเช็คได้ที่ ประวัติการขอใบเสนอราคา</div>
                                            <br/>
                                            <a href="member-plan-auto.php" class="btn btn-md btn-blue-linear">เลือกแบบอัตโนมัติ</a>
                                        </div>
                                    </div>
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