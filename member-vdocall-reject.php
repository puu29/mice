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
                    <h2 class="no-margin">วิดีโอคอลสนทนา</h2>
                    <p class="no-margin">ท่านสามารถเลือกรูปแบบการติดต่อหรือขอใบเสนอราคาผ่านการวิดีโอคอลสนทนากับผู้ประกอบการมากสุด 5 รายการคำขอ </p>
                    <br/>
                    <div class="tab">
                        <ul class="nav nav-tabs">
                            <li><a href="member-vdocall-waiting.php">รอการตอบกลับ</a></li>
                            <li><a href="member-vdocall-near.php">การนัดหมายที่ใกล้จะถึง</a></li>
                            <li class="active"><a href="member-vdocall-reject.php">การนัดหมายที่ไม่สำเร็จ</a></li>
                        </ul>
                        <div class="tab-content no-padding-top">
                            <div role="tabpanel" class="tab-pane active">
                                <div class="panel-list quotation-list">
                                    <div class="head">
                                        <div class="row">
                                            <div class="col col-sm-4">รายชื่อ</div>
                                            <div class="col col-sm-3">สถานะ</div>
                                            <div class="col col-sm-2">วันที่นัดหมาย</div>
                                            <div class="col col-sm-3"></div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="list pd25">
                                            <div class="row">
                                                <div class="col col-sm-4">
                                                    <div class="user">
                                                        <div class="bg transform-middle" style="background-image: url('assets/images/vdocall-user2.png')"></div>
                                                        <div class="type is-orange">ที่พัก</div>
                                                        <h3 class="no-margin font-16 font-blue font-semibold">โรงแรมปริ๊นซ์ พาเลซ</h3>
                                                    </div>
                                                </div>
                                                <div class="col col-sm-3">
                                                    <label class="hidden-desktop">สถานะ</label>
                                                    <div class="text-desc">
                                                        <p class="font-semibold font-red">ไม่สำเร็จ</p>
                                                    </div>
                                                </div>
                                                <div class="col col-sm-2">
                                                    <label class="hidden-desktop">วันที่นัดหมาย</label>
                                                    <div class="text-desc">
                                                        <p class="font-semibold font-blue">26/06/2020<br/>10.00 - 13.00 น.</p>
                                                    </div>
                                                </div>
                                                <div class="col col-sm-3">
                                                    <p>สถานที่ขออภัยในความไม่สะดวกในวันดังกล่าวที่ท่านได้ระบุไว้</p>
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
    </body>
</html>