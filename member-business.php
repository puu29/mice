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
                    <h2 class="font-semibold no-margin-top pull-left">บัญชีธุรกิจ</h2>
                    <div class="clearfix"></div>
                    <?php if($_GET['empty'] == 1) { ?>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="member-business-add.php" class="add-box no-margin fullwidth mobile-no-margin">
                                    <div class="inner transform-middle">
                                        <div class="text-icon">
                                            <i class="m-icon m-icon-plus"></i>
                                            <span class="font-blue">เพิ่มธุรกิจ</span>
                                        </div>
                                        <br/>
                                        <div>ท่านสามารถเพิ่มข้อมูลธุรกิจของท่าน โดยกดที่ปุ่ม <br class="hidden-desktop"/><b>”เพิ่มธุรกิจ”</b><br class="hidden-desktop"/> ด้านบนนี้ เพื่อร่วมเป็นส่วนหนึ่งของ<br/>Thai MICE Connect  และเพื่อให้สามารถติดต่อกับผู้ใช้งานได้อย่างสะดวกมากขึ้น ร่วมเป็นส่วนหนึ่งกับเรา!</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php } else { ?>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="card-member shadow-blue">
                                    <div class="form-group">
                                        <div class="user table-middle ">
                                            <div class="bg" style="background-image: url('assets/images/villa.png')"></div>
                                            <div class="text">
                                                <h3 class="font-semibold no-margin">Villa Hotel and Resort</h3>
                                                <p>กรุงเทพมหานคร</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label class="font-semibold no-margin">ประเภทธุรกิจ</label>
                                                <p>สถานที่จัดงาน, ที่พัก</p>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label class="font-semibold no-margin">
                                                    <div class="text-icon is-middle icon-right">
                                                        <i class="m-icon m-icon-help m-icon-black"></i>
                                                        <span>สิทธิพิเศษ</span>
                                                    </div>
                                                </label>
                                                <p><i class="m-icon m-icon-heart m-icon-20"></i></p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label class="font-semibold no-margin">สถานะการอนุมัติ</label>
                                                <p>รอการอนุมัติ</p>
                                            </div>
                                        </div>
                                        <div class="col-xs-6">
                                            <div class="form-group">
                                                <label class="font-semibold no-margin">วันที่สร้างธุรกิจ</label>
                                                <p>24/06/2020</p>
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="btn-box">
                                                <a href="business-manage.php" class="btn-blue-linear btn-block btn btn-md font-bold">จัดการธุรกิจ</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <a href="member-business-add.php" class="add-box">
                                    <div class="inner transform-middle">
                                        <i class="m-icon m-icon-plus"></i><br/>
                                        <span class="font-blue mobile-font-bold">เพิ่มธุรกิจ</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </section>
        </div>
        <?php include "layout/footer.php" ?>
    </body>
</html>