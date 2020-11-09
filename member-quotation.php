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
                    <a href="member.php" class="to-back font-blue">
                        <div class="text-icon is-middle">
                            <i class="glyphicon glyphicon-menu-left" style="top: 56%"></i>
                            <span>ย้อนกลับ</span>
                        </div>
                    </a>
                    <h2 class="font-semibold no-margin-top">งานสัมมนา Creator ครั้งที่ 30</h2>
                    <div class="tab">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="member-quotation.php">รอการตอบกลับ</a></li>
                            <li><a href="member-quotation-history.php">ใบเสนอราคาที่ได้รับแล้ว</a></li>
                            <li><a href="member-quotation-reject.php">ใบเสนอราคาที่ไม่สำเร็จ</a></li>
                        </ul>
                        <div class="select-sorting">
                            <label class="font-18 font-bold">รายชื่อ</label>
                            <div class="select border-under pull-right">
                                <select class="form-control font-14 bg-trans">
                                    <option value="">ล่าสุด</option>
                                </select>
                                <span class="glyphicon glyphicon-triangle-bottom"></span>
                            </div>
                        </div>
                        <div class="tab-content no-padding-top">
                            <div role="tabpanel" class="tab-pane active">
                                <div class="panel-list no-margin quotation-list">
                                    <div class="head">
                                        <div class="row">
                                            <div class="col-sm-4">ชื่อกิจกรรม</div>
                                            <div class="col-sm-3">วันที่ขอใบเสนอราคา</div>
                                            <div class="col-sm-3">รูปแบบการขอ</div>
                                            <div class="col-sm-2"></div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="list">
                                            <div class="row">
                                                <div class="col col-sm-4">
                                                    <div class="user">
                                                        <div class="type is-purple">สถานที่จัดงาน</div>
                                                        <div class="bg" style="background-image: url('assets/images/user1.png')"></div>
                                                        <h3 class="no-margin">ดี อีเว้นท์ เมเนเม้นจ์</h3>
                                                        <p>กรุงเทพมหานคร</p>
                                                    </div>
                                                </div>
                                                <div class="col col-sm-3">
                                                    <label class="hidden-desktop">วันที่ขอใบเสนอราคา</label>
                                                    <div class="text-desc">
                                                        <p class="no-margin">20/06/20</p>
                                                        <p><a href="#" class="font-link" data-dismiss="modal" data-toggle="modal" data-target="#modal-quotation">ดูรายละเอียดใบเสนอราคา</a></p>
                                                    </div>
                                                </div>
                                                <div class="col col-sm-3">
                                                    <label class="hidden-desktop">รูปแบบการขอ</label>
                                                    <div class="text-desc">
                                                        <p>ระบบจับคู่อัตโนมัติ</p>
                                                    </div>
                                                </div>
                                                <div class="col col-sm-2">
                                                    <div class="btn-box">
                                                        <a href="member-chat.php" class="btn btn-md text-overflow btn-block btn-default mobile-btn-half">แชทกับผู้ประกอบการ</a>
                                                        <a href="member-vdocall.php" class="btn btn-md text-overflow btn-block btn-default mobile-btn-half">วิดีโอคอลสนทนา</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list">
                                            <div class="row">
                                                <div class="col col-sm-4">
                                                    <div class="user">
                                                        <div class="type is-purple">สถานที่จัดงาน</div>
                                                        <div class="bg" style="background-image: url('assets/images/user2.png')"></div>
                                                        <h3 class="no-margin">ดี อีเว้นท์ เมเนเม้นจ์</h3>
                                                        <p>กรุงเทพมหานคร</p>
                                                    </div>
                                                </div>
                                                <div class="col col-sm-3">
                                                    <label class="hidden-desktop">วันที่ขอใบเสนอราคา</label>
                                                    <div class="text-desc">
                                                        <p class="no-margin">20/06/20</p>
                                                        <p><a href="#" class="font-link" data-dismiss="modal" data-toggle="modal" data-target="#modal-quotation">ดูรายละเอียดใบเสนอราคา</a></p>
                                                    </div>
                                                </div>
                                                <div class="col col-sm-3">
                                                    <label class="hidden-desktop">รูปแบบการขอ</label>
                                                    <div class="text-desc">
                                                        <p>ระบบจับคู่อัตโนมัติ</p>
                                                    </div>
                                                </div>
                                                <div class="col col-sm-2">
                                                    <div class="btn-box">
                                                        <a href="member-chat.php" class="btn btn-md text-overflow btn-block btn-default mobile-btn-half">แชทกับผู้ประกอบการ</a>
                                                        <a href="member-vdocall.php" class="btn btn-md text-overflow btn-block btn-default mobile-btn-half">วิดีโอคอลสนทนา</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="list">
                                            <div class="row">
                                                <div class="col col-sm-4">
                                                    <div class="user">
                                                        <div class="type is-purple">สถานที่จัดงาน</div>
                                                        <div class="bg" style="background-image: url('assets/images/user3.png')"></div>
                                                        <h3 class="no-margin">ดี อีเว้นท์ เมเนเม้นจ์</h3>
                                                        <p>กรุงเทพมหานคร</p>
                                                    </div>
                                                </div>
                                                <div class="col col-sm-3">
                                                    <label class="hidden-desktop">วันที่ขอใบเสนอราคา</label>
                                                    <div class="text-desc">
                                                        <p class="no-margin">20/06/20</p>
                                                        <p><a href="#" class="font-link" data-dismiss="modal" data-toggle="modal" data-target="#modal-quotation">ดูรายละเอียดใบเสนอราคา</a></p>
                                                    </div>
                                                </div>
                                                <div class="col col-sm-3">
                                                    <label class="hidden-desktop">รูปแบบการขอ</label>
                                                    <div class="text-desc">
                                                        <p>ระบบจับคู่อัตโนมัติ</p>
                                                    </div>
                                                </div>
                                                <div class="col col-sm-2">
                                                    <div class="btn-box">
                                                        <a href="member-chat.php" class="btn btn-md text-overflow btn-block btn-default mobile-btn-half">แชทกับผู้ประกอบการ</a>
                                                        <a href="member-vdocall.php" class="btn btn-md text-overflow btn-block btn-default mobile-btn-half">วิดีโอคอลสนทนา</a>
                                                    </div>
                                                </div>
                                            </div>
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

        <div class="modal fade" id="modal-quotation" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content">
                    <div class="modal-header pd-40 no-border no-padding-bottom">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                        <h2 class="no-margin-top">รายละเอียดใบเสนอราคา</h2>
                        <div class="line"></div>
                    </div>
                    <div class="modal-body pd-40 no-padding-top">
                        <table class="table">
                            <tr>
                                <td>ประเภทการจัดงาน</td>
                                <td>งานสัมมนา</td>
                            </tr>
                            <tr>
                                <td>จำนวนคนที่เข้าร่วม</td>
                                <td>200 คน</td>
                            </tr>
                            <tr>
                                <td>สถานที่จัดงาน</td>
                                <td>กรุงเทพมหานคร</td>
                            </tr>
                            <tr>
                                <td>วันที่เริ่มงาน</td>
                                <td>18/09/20</td>
                            </tr>
                            <tr>
                                <td>วันที่สิ้นสุดงาน</td>
                                <td>19/09/20</td>
                            </tr>
                            <tr>
                                <td>เวลา</td>
                                <td>10.00 - 19.00</td>
                            </tr>
                            <tr>
                                <td>งบประมาณ</td>
                                <td>100,000</td>
                            </tr>
                        </table>
                        <h3>รายละเอียดอื่นๆ เพิ่มเติม</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut tellus elementum sagittis vitae et leo duis ut. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Nec nam aliquam sem </p>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>