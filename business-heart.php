<!DOCTYPE html>
<html>
    <head>
        <?php include "layout/head.php" ?>
    </head>
    <body>
        <?php include "layout/nav.php" ?>
        <div id="wrapper">
            <section class="member">
                <?php include "layout/nav-business.php" ?>
                <div class="member-body">
                    <a href="member-business.php" class="to-back font-blue">
                        <div class="text-icon is-middle">
                            <i class="glyphicon glyphicon-menu-left"></i>
                            <span>กลับหน้าบัญชีธุรกิจ</span>
                        </div>
                    </a>
                    <div class="member-title">
                        <div class="pull-left">
                            <h2 class="font-semibold no-margin">การสะสมใจไมซ์</h2>
                            <p>ท่านสามารถแก้ไขข้อมูลธุรกิจตามหัวข้อด้านล่างนี้ได้และกดบันทึกเพื่อยืนยันการแก้ไข</p>
                        </div>
                    </div>
                    <div class="panel panel-default no-margin">
                        <div class="panel-body">
                            <h3 class="font-semibold no-margin">สะสมใจไมซ์เพื่อรับสิทธิพิเศษ</h3>
                            <div class="step-heart">
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                                        <span class="sr-only"></span>
                                    </div>
                                </div>
                                <div class="step">
                                    <div class="icon active">
                                        <i class="m-icon m-icon-heart"></i>
                                        <span>ลงทะเบียนผู้ประกอบการ</span>
                                    </div>
                                    <div class="icon">
                                        <i class="m-icon m-icon-heart"></i>
                                        <span>กรอกข้อมูลครบถ้วน<br/><a href="business-manage.php" class="font-link">กรอกรายละเอียดเพิ่มเติม</a></span>
                                    </div>
                                    <div class="icon">
                                        <i class="m-icon m-icon-heart"></i>
                                        <span>โพสต์ 30 โพสต์<br/><a href="business-manage.php" class="font-link">จัดการโพสต์</a></span>
                                    </div>
                                    <div class="icon">
                                        <i class="m-icon m-icon-heart"></i>
                                        <span>ชวนเพื่อน<br/>(ผู้จัดงาน/ผู้ประกอบการ)<br/><a href="business-friend.php" class="font-link">จัดการโพสต์</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default mt25">
                        <div class="panel-body no-padding">
                            <div class="row is-border-right">
                                <div class="col col-sm-3">
                                    <label class="fullwidth">สิทธิพิเศษ</label>
                                    <div class="text-icon is-middle">
                                        <i class="m-icon m-icon-heart"></i>
                                        <span>ระดับเริ่มต้น</span>
                                    </div>
                                </div>
                                <div class="col col-sm-4">
                                    <label class="fullwidth">สิทธิประโยชน์ที่ได้รับในปัจจุบัน</label>
                                    <ul>
                                        <li>รับรู้ข้อมูลข่าวสารล่าสุดของวงการ MICE</li>
                                        <li>สร้างปฏิทินอีเว้นท์ไมซ์</li>
                                    </ul>
                                </div>
                                <div class="col col-sm-5">
                                    <label class="fullwidth">เพิ่มเติมข้อมูลเพื่อรับใจไมซ์อีกดวง</label>
                                    <p class="no-margin">สถานที่จัดงาน</p>
                                    <ul>
                                        <li>ข้อมูลห้องประชุมภายในสถานประกอบการ</li>
                                        <li>สิ่งอำนวยความสะดวกภายในห้องประชุม</li>
                                    </ul>
                                    <p class="no-margin">อาหารและเครื่องดื่ม</p>
                                    <ul>
                                        <li>ประเภทอาหารที่มีให้บริการ</li>
                                        <li>การรองรับการเดินทางและที่จอดรถ</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"><br/></div>
                    <h2 class="font-semibold">รายละเอียดสิทธิพิเศษ</h2>
                    <div class="table-responsive shadow-blue">
                        <table class="table no-margin">
                            <thead>
                                <tr>
                                    <th>ระดับ</th>
                                    <th>สัญลักษณ์</th>
                                    <th>วิธีการได้รับสิทธิ</th>
                                    <th>รายละเอียดสิทธิพิเศษ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ระดับเริ่มต้น</td>
                                    <td>
                                        <i class="m-icon m-icon-heart m-icon-20"></i>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>ได้รับตั้งแต่เริ่มต้นลงทะเบียน</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="font-blue font-semibold">รับรู้ข้อมูลข่าวสารล่าสุดของวงการ</li>
                                            <li class="font-blue font-semibold">สร้างปฏิทินอีเว้นท์ไมซ์</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ระดับปานกลาง</td>
                                    <td>
                                        <i class="m-icon m-icon-heart m-icon-20"></i>
                                        <i class="m-icon m-icon-heart m-icon-20"></i>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="font-gray-light">ได้รับตั้งแต่เริ่มต้นลงทะเบียน</li>
                                            <li >จากการระบุข้อมูลครบตามที่กำหนด</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="font-blue font-semibold">โอกาสในการสร้างพันธมิตรทางธุรกิจ</li>
                                            <li class="font-blue font-semibold">โอกาสได้รับสิทธิ์อยู่ระดับต้นๆ ในการค้นหาเมื่อมีการค้นหาข้อมูล</li>
                                            <li>รับรู้ข้อมูลข่าวสารล่าสุดของวงการ MICE</li>
                                            <li>สร้างปฏิทินอีเว้นท์ไมซ์</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ระดับสูง</td>
                                    <td>
                                        <i class="m-icon m-icon-heart m-icon-20"></i>
                                        <i class="m-icon m-icon-heart m-icon-20"></i>
                                        <i class="m-icon m-icon-heart m-icon-20"></i>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="font-gray-light">ได้รับตั้งแต่เริ่มต้นลงทะเบียน</li>
                                            <li class="font-gray-light">จากการระบุข้อมูลครบตามที่กำหนด</li>
                                            <li>มีการโพสต์ข่าวสารหรือโปรโมชั่น 30 โพสต์</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="font-blue font-semibold">Performance Analytic</li>
                                            <li>โอกาสในการสร้างพันธมิตรทางธุรกิจ</li>
                                            <li>โอกาสได้รับสิทธิ์อยู่ระดับต้นๆ ในการค้นหาเมื่อมีการค้นหาข้อมูล</li>
                                            <li>รับรู้ข้อมูลข่าวสารล่าสุดของวงการ MICE</li>
                                            <li>สร้างปฏิทินอีเว้นท์ไมซ์</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>ระดับสูงสุด</td>
                                    <td>
                                        <i class="m-icon m-icon-heart m-icon-20"></i>
                                        <i class="m-icon m-icon-heart m-icon-20"></i>
                                        <i class="m-icon m-icon-heart m-icon-20"></i>
                                        <i class="m-icon m-icon-heart m-icon-20"></i>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="font-gray-light">ได้รับตั้งแต่เริ่มต้นลงทะเบียน</li>
                                            <li class="font-gray-light">จากการระบุข้อมูลครบตามที่กำหนด</li>
                                            <li class="font-gray-light">มีการโพสต์ข่าวสารหรือโปรโมชั่น 30 โพสต์</li>
                                            <li>ชวนเพื่อน (ผู้จัดงาน/ผู้ประกอบการ) 8 คนขึ้นไป</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li class="font-blue font-semibold">รับสิทธิได้โปรโมทลงเพจ Thai MICE Connect</li>
                                            <li>Performance Analytic</li>
                                            <li>โอกาสในการสร้างพันธมิตรทางธุรกิจ</li>
                                            <li>โอกาสได้รับสิทธิ์อยู่ระดับต้นๆ ในการค้นหาเมื่อมีการค้นหาข้อมูล</li>
                                            <li>รับรู้ข้อมูลข่าวสารล่าสุดของวงการ MICE</li>
                                            <li>สร้างปฏิทินอีเว้นท์ไมซ์</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        <?php include "layout/footer.php" ?>
    </body>
</html>