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
                    <a href="business-score.php" class="to-back font-blue">
                        <div class="text-icon is-middle">
                            <i class="glyphicon glyphicon-menu-left"></i>
                            <span>ย้อนกลับ</span>
                        </div>
                    </a>
                    <div class="member-title"></div>
                    <div class="row score-detail">
                        <div class="col-sm-3">
                            <img src="assets/images/mice-logo.png" class="img">
                        </div>
                        <div class="col-sm-9">
                            <div class="text">
                                <div class="topic">
                                    <h3 class="font-semibold no-margin">Rank 1-3/week</h3>
                                    <p class="text-left no-margin">รายละเอียดของรางวัล</p>
                                    <h3 class="font-medium no-margin-bottom"><span class="font-orange">800</span> คะแนน</h3>
                                    <br/>
                                </div>
                                <div class="desc">
                                    <p>สปาโรแมนติคสหัสวรรษ อวอร์ดตะหงิด สะบึมโค้กสโรชาปัจเจกชน วิภัชภาคพรีเมียร์ซาดิสม์ ชินบัญชรเซาท์แรงดูดแทงโก้ฮองเฮา เลิฟโฮสเตสรามเทพบุ๋น ไวอากร้ามอนสเตอร์แคชเชียร์มัฟฟิน รูบิกโชห่วยบัตเตอร์ฮ่องเต้ หลินจือมาม่าซ้อม้ง แคร็กเกอร์อาร์ติสต์ปาร์ตี้ มอนสเตอร์ โจ๋ห่วยละอ่อนเคลื่อนย้ายป๋อหลอ ไนท์เฮียสไลด์ มาร์จินแพทเทิร์นผลไม้ร็อค โทรแรงใจ ศิลปวัฒนธรรม</p>
                                    <p>ปัจเจกชนโทรโข่ง ออร์แกนเวิร์กช็อปโปรโมท จ๊าบเทเลกราฟเสกสรรค์ซ้อ ดีมานด์ฮาโลวีนโดมิโนทอล์ค สลัม โบว์อีโรติก เยลลี่ โรแมนติก สะบึม อุด้งรูบิคแคนูคอมพ์ ต่อยอดโหลยโท่ยโปรเจ็คท์ชิฟฟอน ฮาโลวีนแอนด์บ็อกซ์ คลิปเบอร์เกอร์ไทม์บ๊อบเปราะบาง คัตเอาต์เอ็นทรานซ์ ซูมสต็อคจ๊าบพันธุวิศวกรรมแคมป์ มายาคติตรวจสอบ</p>
                                    <p>เวิร์คสามแยก ต้าอ่วย มาร์เก็ตมหาอุปราชาเพรส จูเนียร์ อุตสาหการแอปเปิ้ล ฮิปโปรัมลิสต์อันเดอร์ลีเมอร์ เธคมิวสิคแฟลชแอ๊บแบ๊ว บรา ออร์แกนิกชาร์จอันเดอร์ อิสรชนว่ะเยอร์บีราซื่อบื้อ ออโต้รีไซเคิลบลอนด์ ฉลุยคาราโอเกะ พาวเวอร์หยวน ไฮไลท์เทควันโดซิมธัมโม เทคโนแครต กีวี</p>
                                </div>
                            </div>
                            <button type="button" class="btn btn-md btn-blue-linear btn-minwidth font-16 font-medium" data-dismiss="modal" data-toggle="modal" data-target="#modal-redeem">แลกคะแนน</button>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include "layout/footer.php" ?>

        <div class="modal fade" id="modal-redeem" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body font-16 pd-40">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                        <div class="status-box">
                            <img src="assets/images/status-success.png">
                            <br/>
                            <h2 class="font-semibold">Rank 1-3/week</h2>
                            <p class="text-left no-margin">สปาโรแมนติคสหัสวรรษ อวอร์ดตะหงิด สะบึมโค้กสโรชาปัจเจกชน วิภัชภาคพรีเมียร์ซาดิสม์ ชินบัญชรเซาท์แรงดูดแทงโก้ฮองเฮา เลิฟโฮสเตสรามเทพบุ๋น ไวอากร้ามอนสเตอร์แคชเชียร์มัฟฟิน รูบิกโชห่วยบัตเตอร์ฮ่องเต้ หลินจือมาม่าซ้อม้ง แคร็กเกอร์อาร์ติสต์ปาร์ตี้ มอนสเตอร์ โจ๋ห่วยละอ่อนเคลื่อนย้ายป๋อหลอ ไนท์เฮียสไลด์ มาร์จินแพทเทิร์นผลไม้ร็อค โทรแรงใจ ศิลปวัฒนธรรม</p>
                            <br/>
                            <h2 class="font-blue"><big>800 คะแนน</big></h2>
                            <div class="btn-box no-margin">
                                <button type="button" data-dismiss="modal" style="width:300px;" class="btn btn-lg btn-blue-linear font-16 font-medium">ยืนยันการแลกคะแนน</button>
                            </div>
                            <br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>