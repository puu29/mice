<!DOCTYPE html>
<html>
    <head>
        <?php include "layout/head.php" ?>
    </head>
    <body>
        <?php include "layout/nav.php" ?>
        <div id="wrapper">
            <div class="cover">
                <div class="bg" style="background-image: url('assets/images/cover.png')"></div>
                <div class="text">
                    <h2 class="no-margin">คำถามที่พบบ่อย</h2>
                </div>
            </div>
            <section class="faq-page">
                <div class="container">
                    <div class="tab">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab-faq1" aria-controls="tab-faq1" role="tab" data-toggle="tab">ปัญหาทั่วไป</a></li>
                            <li><a href="#tab-faq2" aria-controls="tab-faq2" role="tab" data-toggle="tab">ปัญหาเกี่ยวกับศูนย์ข้อความ</a></li>
                            <li><a href="#tab-faq3" aria-controls="tab-faq3" role="tab" data-toggle="tab">ปัญหาเกี่ยวกับการบันทึกข้อมูลธุรกิจของผู้ให้บริการ</a></li>
                            <li><a href="#tab-faq4" aria-controls="tab-faq4" role="tab" data-toggle="tab">ปัญหาเกี่ยวกับแคมเปญคลิกติดใจ</a></li>
                        </ul>
                        <div class="faq-title">
                            <div class="to-back font-blue">
                                <div class="text-icon is-middle">
                                    <i class="glyphicon glyphicon-menu-left"></i>
                                    <span>ย้อนกลับ</span>
                                </div>
                            </div>
                            <h3 class="font-semibold text-center no-margin-bottom">ปัญหาทั่วไป</h3>
                        </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tab-faq1">
                                <div class="panel-group" id="group-faq1" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="panel-head11">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#group-faq1" href="#panel-body11" aria-expanded="true" aria-controls="panel-body11">
                                                    Q: เมื่อเข้าสู่เว็บไซต์ พบว่าหน้าเว็บไซต์โหลดนาน ค้าง หรือไม่แสดงหน้าเว็บไซต์ จะต้องทำอย่างไร
                                                </a>
                                                <span class="glyphicon glyphicon-menu-down"></span>
                                            </h4>
                                        </div>
                                        <div id="panel-body11" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="panel-head11">
                                            <div class="panel-body">
                                                A: 1. สอบถามผู้ใช้งานว่ามีข้อความแจ้งเตือนแสดงหรือไม่ หากแสดงผู้ใช้งานพบเป็นข้อความว่าอะไร<br/>
                                                1.1 กรณีแสดงรหัสขึ้นต้นด้วย 5xx หมายถึง เกิดปัญหาจากฝั่งเซิร์ฟเวอร์ ให้ผู้ใช้งานรอผู้ดูแลระบบแก้ไขปัญหา เมื่อเว็บไซต์ใช้งานได้แล้ว ผู้ใช้งานจะสามารถเข้าเว็บไซต์ได้ตามปกติ<br/>
                                                1.2 กรณีแสดงรหัสขึ้นต้นด้วย 4xx หมายถึง เกิดปัญหาจากฝั่งผู้ใช้งาน ให้ผู้ใช้งานตรวจสอบเว็บเบราว์เซอร์ และอินเทอร์เน็ตว่าสามารถใช้งานได้ตามปกติหรือไม่ และลองเข้าเว็บไซต์อีกครั้ง<br/>
                                                2. หากยังไม่สามารถใช้งานเว็บไซต์ได้ แนะนำให้ผู้ใช้งานลองรีเฟรชหน้าเว็บไซต์ หรือลบแคชในเบราว์เซอร์ จากนั้นเข้าเว็บไซต์อีกครั้ง<br/>
                                                3. หากเว็บไซต์ยังใช้งานไม่ได้ ให้ผู้ใช้งานเข้าไปที่เว็บไซต์ TCEB เพื่อแชทพูดคุยกับเจ้าหน้าที่ TCEB ผ่านเว็บไซต์ หรือเบอร์โทรติดต่อ
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="panel-head12">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#group-faq1" href="#panel-body12" aria-expanded="false" aria-controls="panel-body12">
                                                    Q: ไม่สามารถเปลี่ยนภาษาในเว็บไซต์ จะต้องทำอย่างไร
                                                </a>
                                                <span class="glyphicon glyphicon-menu-down"></span>
                                            </h4>
                                        </div>
                                        <div id="panel-body12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="panel-head12">
                                            <div class="panel-body">
                                                A: 1. สอบถามผู้ใช้งานว่ามีข้อความแจ้งเตือนแสดงหรือไม่ หากแสดงผู้ใช้งานพบเป็นข้อความว่าอะไร<br/>
                                                1.1 กรณีแสดงรหัสขึ้นต้นด้วย 5xx หมายถึง เกิดปัญหาจากฝั่งเซิร์ฟเวอร์ ให้ผู้ใช้งานรอผู้ดูแลระบบแก้ไขปัญหา เมื่อเว็บไซต์ใช้งานได้แล้ว ผู้ใช้งานจะสามารถเข้าเว็บไซต์ได้ตามปกติ<br/>
                                                1.2 กรณีแสดงรหัสขึ้นต้นด้วย 4xx หมายถึง เกิดปัญหาจากฝั่งผู้ใช้งาน ให้ผู้ใช้งานตรวจสอบเว็บเบราว์เซอร์ และอินเทอร์เน็ตว่าสามารถใช้งานได้ตามปกติหรือไม่ และลองเข้าเว็บไซต์อีกครั้ง<br/>
                                                2. หากยังไม่สามารถใช้งานเว็บไซต์ได้ แนะนำให้ผู้ใช้งานลองรีเฟรชหน้าเว็บไซต์ หรือลบแคชในเบราว์เซอร์ จากนั้นเข้าเว็บไซต์อีกครั้ง<br/>
                                                3. หากเว็บไซต์ยังใช้งานไม่ได้ ให้ผู้ใช้งานเข้าไปที่เว็บไซต์ TCEB เพื่อแชทพูดคุยกับเจ้าหน้าที่ TCEB ผ่านเว็บไซต์ หรือเบอร์โทรติดต่อ
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="panel-head13">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#group-faq1" href="#panel-body13" aria-expanded="false" aria-controls="panel-body13">
                                                    Q: วิธีแก้ไขข้อมูลส่วนตัว ทำอย่างไร
                                                </a>
                                                <span class="glyphicon glyphicon-menu-down"></span>
                                            </h4>
                                        </div>
                                        <div id="panel-body13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="panel-head13">
                                            <div class="panel-body">
                                                A: 1. สอบถามผู้ใช้งานว่ามีข้อความแจ้งเตือนแสดงหรือไม่ หากแสดงผู้ใช้งานพบเป็นข้อความว่าอะไร<br/>
                                                1.1 กรณีแสดงรหัสขึ้นต้นด้วย 5xx หมายถึง เกิดปัญหาจากฝั่งเซิร์ฟเวอร์ ให้ผู้ใช้งานรอผู้ดูแลระบบแก้ไขปัญหา เมื่อเว็บไซต์ใช้งานได้แล้ว ผู้ใช้งานจะสามารถเข้าเว็บไซต์ได้ตามปกติ<br/>
                                                1.2 กรณีแสดงรหัสขึ้นต้นด้วย 4xx หมายถึง เกิดปัญหาจากฝั่งผู้ใช้งาน ให้ผู้ใช้งานตรวจสอบเว็บเบราว์เซอร์ และอินเทอร์เน็ตว่าสามารถใช้งานได้ตามปกติหรือไม่ และลองเข้าเว็บไซต์อีกครั้ง<br/>
                                                2. หากยังไม่สามารถใช้งานเว็บไซต์ได้ แนะนำให้ผู้ใช้งานลองรีเฟรชหน้าเว็บไซต์ หรือลบแคชในเบราว์เซอร์ จากนั้นเข้าเว็บไซต์อีกครั้ง<br/>
                                                3. หากเว็บไซต์ยังใช้งานไม่ได้ ให้ผู้ใช้งานเข้าไปที่เว็บไซต์ TCEB เพื่อแชทพูดคุยกับเจ้าหน้าที่ TCEB ผ่านเว็บไซต์ หรือเบอร์โทรติดต่อ
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="panel-head14">
                                            <h4 class="panel-title">
                                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#group-faq1" href="#panel-body14" aria-expanded="false" aria-controls="panel-body14">
                                                    Q: วิธีติดต่อผู้ให้บริการ ทำอย่างไร
                                                </a>
                                                <span class="glyphicon glyphicon-menu-down"></span>
                                            </h4>
                                        </div>
                                        <div id="panel-body14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="panel-head14">
                                            <div class="panel-body">
                                                A: 1. สอบถามผู้ใช้งานว่ามีข้อความแจ้งเตือนแสดงหรือไม่ หากแสดงผู้ใช้งานพบเป็นข้อความว่าอะไร<br/>
                                                1.1 กรณีแสดงรหัสขึ้นต้นด้วย 5xx หมายถึง เกิดปัญหาจากฝั่งเซิร์ฟเวอร์ ให้ผู้ใช้งานรอผู้ดูแลระบบแก้ไขปัญหา เมื่อเว็บไซต์ใช้งานได้แล้ว ผู้ใช้งานจะสามารถเข้าเว็บไซต์ได้ตามปกติ<br/>
                                                1.2 กรณีแสดงรหัสขึ้นต้นด้วย 4xx หมายถึง เกิดปัญหาจากฝั่งผู้ใช้งาน ให้ผู้ใช้งานตรวจสอบเว็บเบราว์เซอร์ และอินเทอร์เน็ตว่าสามารถใช้งานได้ตามปกติหรือไม่ และลองเข้าเว็บไซต์อีกครั้ง<br/>
                                                2. หากยังไม่สามารถใช้งานเว็บไซต์ได้ แนะนำให้ผู้ใช้งานลองรีเฟรชหน้าเว็บไซต์ หรือลบแคชในเบราว์เซอร์ จากนั้นเข้าเว็บไซต์อีกครั้ง<br/>
                                                3. หากเว็บไซต์ยังใช้งานไม่ได้ ให้ผู้ใช้งานเข้าไปที่เว็บไซต์ TCEB เพื่อแชทพูดคุยกับเจ้าหน้าที่ TCEB ผ่านเว็บไซต์ หรือเบอร์โทรติดต่อ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab-faq2">
                                <div class="panel-group" id="group-faq2" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="panel-head21">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#group-faq2" href="#panel-body21" aria-expanded="true" aria-controls="panel-body21">
                                                    Q: เมื่อเข้าสู่เว็บไซต์ พบว่าหน้าเว็บไซต์โหลดนาน ค้าง หรือไม่แสดงหน้าเว็บไซต์ จะต้องทำอย่างไร
                                                </a>
                                                <span class="glyphicon glyphicon-menu-down"></span>
                                            </h4>
                                        </div>
                                        <div id="panel-body21" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="panel-head21">
                                            <div class="panel-body">
                                                A: 1. สอบถามผู้ใช้งานว่ามีข้อความแจ้งเตือนแสดงหรือไม่ หากแสดงผู้ใช้งานพบเป็นข้อความว่าอะไร<br/>
                                                1.1 กรณีแสดงรหัสขึ้นต้นด้วย 5xx หมายถึง เกิดปัญหาจากฝั่งเซิร์ฟเวอร์ ให้ผู้ใช้งานรอผู้ดูแลระบบแก้ไขปัญหา เมื่อเว็บไซต์ใช้งานได้แล้ว ผู้ใช้งานจะสามารถเข้าเว็บไซต์ได้ตามปกติ<br/>
                                                1.2 กรณีแสดงรหัสขึ้นต้นด้วย 4xx หมายถึง เกิดปัญหาจากฝั่งผู้ใช้งาน ให้ผู้ใช้งานตรวจสอบเว็บเบราว์เซอร์ และอินเทอร์เน็ตว่าสามารถใช้งานได้ตามปกติหรือไม่ และลองเข้าเว็บไซต์อีกครั้ง<br/>
                                                2. หากยังไม่สามารถใช้งานเว็บไซต์ได้ แนะนำให้ผู้ใช้งานลองรีเฟรชหน้าเว็บไซต์ หรือลบแคชในเบราว์เซอร์ จากนั้นเข้าเว็บไซต์อีกครั้ง<br/>
                                                3. หากเว็บไซต์ยังใช้งานไม่ได้ ให้ผู้ใช้งานเข้าไปที่เว็บไซต์ TCEB เพื่อแชทพูดคุยกับเจ้าหน้าที่ TCEB ผ่านเว็บไซต์ หรือเบอร์โทรติดต่อ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab-faq3">
                                <div class="panel-group" id="group-faq3" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="panel-head31">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#group-faq3" href="#panel-body31" aria-expanded="true" aria-controls="panel-body31">
                                                    Q: เมื่อเข้าสู่เว็บไซต์ พบว่าหน้าเว็บไซต์โหลดนาน ค้าง หรือไม่แสดงหน้าเว็บไซต์ จะต้องทำอย่างไร
                                                </a>
                                                <span class="glyphicon glyphicon-menu-down"></span>
                                            </h4>
                                        </div>
                                        <div id="panel-body31" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="panel-head31">
                                            <div class="panel-body">
                                                A: 1. สอบถามผู้ใช้งานว่ามีข้อความแจ้งเตือนแสดงหรือไม่ หากแสดงผู้ใช้งานพบเป็นข้อความว่าอะไร<br/>
                                                1.1 กรณีแสดงรหัสขึ้นต้นด้วย 5xx หมายถึง เกิดปัญหาจากฝั่งเซิร์ฟเวอร์ ให้ผู้ใช้งานรอผู้ดูแลระบบแก้ไขปัญหา เมื่อเว็บไซต์ใช้งานได้แล้ว ผู้ใช้งานจะสามารถเข้าเว็บไซต์ได้ตามปกติ<br/>
                                                1.2 กรณีแสดงรหัสขึ้นต้นด้วย 4xx หมายถึง เกิดปัญหาจากฝั่งผู้ใช้งาน ให้ผู้ใช้งานตรวจสอบเว็บเบราว์เซอร์ และอินเทอร์เน็ตว่าสามารถใช้งานได้ตามปกติหรือไม่ และลองเข้าเว็บไซต์อีกครั้ง<br/>
                                                2. หากยังไม่สามารถใช้งานเว็บไซต์ได้ แนะนำให้ผู้ใช้งานลองรีเฟรชหน้าเว็บไซต์ หรือลบแคชในเบราว์เซอร์ จากนั้นเข้าเว็บไซต์อีกครั้ง<br/>
                                                3. หากเว็บไซต์ยังใช้งานไม่ได้ ให้ผู้ใช้งานเข้าไปที่เว็บไซต์ TCEB เพื่อแชทพูดคุยกับเจ้าหน้าที่ TCEB ผ่านเว็บไซต์ หรือเบอร์โทรติดต่อ
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab-faq4">
                                <div class="panel-group" id="group-faq4" role="tablist" aria-multiselectable="true">
                                    <div class="panel panel-default">
                                        <div class="panel-heading" role="tab" id="panel-head41">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#group-faq4" href="#panel-body41" aria-expanded="true" aria-controls="panel-body41">
                                                    Q: เมื่อเข้าสู่เว็บไซต์ พบว่าหน้าเว็บไซต์โหลดนาน ค้าง หรือไม่แสดงหน้าเว็บไซต์ จะต้องทำอย่างไร
                                                </a>
                                                <span class="glyphicon glyphicon-menu-down"></span>
                                            </h4>
                                        </div>
                                        <div id="panel-body41" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="panel-head41">
                                            <div class="panel-body">
                                                A: 1. สอบถามผู้ใช้งานว่ามีข้อความแจ้งเตือนแสดงหรือไม่ หากแสดงผู้ใช้งานพบเป็นข้อความว่าอะไร<br/>
                                                1.1 กรณีแสดงรหัสขึ้นต้นด้วย 5xx หมายถึง เกิดปัญหาจากฝั่งเซิร์ฟเวอร์ ให้ผู้ใช้งานรอผู้ดูแลระบบแก้ไขปัญหา เมื่อเว็บไซต์ใช้งานได้แล้ว ผู้ใช้งานจะสามารถเข้าเว็บไซต์ได้ตามปกติ<br/>
                                                1.2 กรณีแสดงรหัสขึ้นต้นด้วย 4xx หมายถึง เกิดปัญหาจากฝั่งผู้ใช้งาน ให้ผู้ใช้งานตรวจสอบเว็บเบราว์เซอร์ และอินเทอร์เน็ตว่าสามารถใช้งานได้ตามปกติหรือไม่ และลองเข้าเว็บไซต์อีกครั้ง<br/>
                                                2. หากยังไม่สามารถใช้งานเว็บไซต์ได้ แนะนำให้ผู้ใช้งานลองรีเฟรชหน้าเว็บไซต์ หรือลบแคชในเบราว์เซอร์ จากนั้นเข้าเว็บไซต์อีกครั้ง<br/>
                                                3. หากเว็บไซต์ยังใช้งานไม่ได้ ให้ผู้ใช้งานเข้าไปที่เว็บไซต์ TCEB เพื่อแชทพูดคุยกับเจ้าหน้าที่ TCEB ผ่านเว็บไซต์ หรือเบอร์โทรติดต่อ
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
        <script>
            (function(){
                $('.faq-page .nav-tabs li').click(function(){
                    $('.faq-page .nav-tabs').hide();
                    $('.faq-page .tab-content, .faq-title').fadeIn(300);
                });

                $('.faq-title .to-back').click(function(){
                    $('.faq-page .tab-content, .faq-title').hide();
                    $('.faq-page .nav-tabs').fadeIn(300);
                });
            })();
        </script>
    </body>
</html>