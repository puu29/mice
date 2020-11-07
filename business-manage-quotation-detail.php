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
                    <div class="top-white">
                        <a href="member-business.php" class="to-back font-blue">
                            <div class="text-icon is-middle">
                                <i class="glyphicon glyphicon-menu-left"></i>
                                <span>กลับหน้าบัญชีธุรกิจ</span>
                            </div>
                        </a>
                        <div class="member-title">
                            <div class="pull-left">
                                <h2 class="font-semibold no-margin">Villa Hotel and Resort</h2>
                            </div>
                        </div>
                    </div>
                    <div class="bottom">
                        <div class="tab">
                            <ul class="nav nav-tabs text-left">
                                <li><a href="business-manage.php">โปรไฟล์ธุรกิจ</a></li>
                                <li ><a href="business-manage-chat.php">การสนทนา <span class="circle"></span></a></li>
                                <li class="active"><a href="business-manage-quotation.php">ใบเสนอราคา <span class="circle"></span></a></li>
                                <li ><a href="business-manage-promotion.php">จัดการโปรโมชั่น</a></li>
                                <li ><a href="business-manage-post.php">จัดการโพสต์ของธุรกิจ</a></li>
                                <li ><a href="business-manage-calendar.php">จัดการปฏิทินไมซ์</a></li>
                                <li ><a href="business-manage-dashboard.php">สถิติผู้เข้าดู</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active">
                                    <div class="b-quotation">
                                        <div class="btn-toolbar bg-white shadow-blue font-14" role="toolbar">
                                            <a href="business-manage-quotation.php" class="btn-group active" role="group">
                                                <div class="chat-type">
                                                    <h2 class="no-margin font-semibold">10</h2>
                                                    <p class="no-margin">คำขอใบเสนอราคา</p>
                                                </div>
                                            </a>
                                            <a href="business-manage-quotation-history.php" class="btn-group" role="group">
                                                <div class="chat-type">
                                                    <h2 class="no-margin font-semibold">3</h2>
                                                    <p class="no-margin">ใบเสนอราคาที่ส่งแล้ว</p>
                                                </div>
                                            </a>
                                            <a href="business-manage-quotation-reject.php" class="btn-group" role="group">
                                                <div class="chat-type">
                                                    <h2 class="no-margin font-semibold">1</h2>
                                                    <p class="no-margin">ใบเสนอราคาที่ยกเลิก</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="panel panel-default mt25">
                                            <div class="panel-body">
                                                <a href="business-manage-quotation.php" class="to-back font-blue">
                                                    <div class="text-icon is-middle">
                                                        <i class="glyphicon glyphicon-menu-left"></i>
                                                        <span>ย้อนกลับ</span>
                                                    </div>
                                                </a>
                                                <form action="" method="post" class="b-quotation-detail">
                                                    <div class="row">
                                                        <div class="col-sm-8">
                                                            <div class="user width-45">
                                                                <div class="bg" style="background-image: url('assets/images/user-sh2.png')"></div>
                                                                <div class="text">
                                                                    <h2 class="font-medium font-20">คุณทวีสิทธิ์ นามสกุล</h2>
                                                                    <div class="row">
                                                                        <div class="col-sm-6">
                                                                            <label>ข้อมูลผู้ติดต่อ</label>
                                                                            <p class="no-margin">เบอร์โทรติดต่อ : 080-000-0000</p>
                                                                            <p>Email : Thaveesilp@gmail.com</p>
                                                                        </div>
                                                                        <div class="col-sm-6">
                                                                            <label>เลขที่ใบเสนอราคา</label>
                                                                            <p>TMC0001231400</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr class="in-panel" />
                                                    <h3 class="font-20 font-semibold">งานสัมมนาประจำปีบริษัท 2020</h3>
                                                    <p class="font-semibold">ประเภทการจัดงาน : งานสัมมนา</p>
                                                    <div>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut tellus elementum sagittis vitae et leo duis ut. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Nec nam aliquam sem </div>
                                                    <br/>
                                                    <div class="border-box">
                                                        <h3 class="font-bold font-14 no-margin-top">ข้อมูลทั่วไป</h3>
                                                        <div class="row font-12">
                                                            <div class="col-sm-3"><label class="font-semibold">สถานที่จัดงาน</label></div>
                                                            <div class="col-sm-3"><p class="no-margin">กรุงเทพมหานคร</p></div>
                                                            <div class="col-sm-3"><label class="font-semibold">วันที่จัดงาน</label></div>
                                                            <div class="col-sm-3"><p class="no-margin">24/04/20 - 25/04/20</p></div>
                                                        </div>
                                                        <div class="row font-12">
                                                            <div class="col-sm-3"><label class="font-semibold">จำนวนคน</label></div>
                                                            <div class="col-sm-3"><p class="no-margin">800 คน</p></div>
                                                            <div class="col-sm-3"><label class="font-semibold">เวลา</label></div>
                                                            <div class="col-sm-3"><p class="no-margin">09.00 - 18.00 น.</p></div>
                                                        </div>
                                                        <h3 class="font-bold font-14">ข้อมูลเฉพาะ</h3>
                                                        <div class="row font-12">
                                                            <div class="col-sm-3"><label class="font-semibold">สิ่งอำนวยความสะดวกในการเดินทาง</label></div>
                                                            <div class="col-sm-3"><p class="no-margin">มีที่จอดรถ, ติดรถไฟฟ้า BTS</p></div>
                                                            <div class="col-sm-3"><label class="font-semibold">ประเภทห้อง</label></div>
                                                            <div class="col-sm-3"><p class="no-margin">Ballroom</p></div>
                                                        </div>
                                                        <div class="row font-12">
                                                            <div class="col-sm-3"><label class="font-semibold">ขนาดพื้นที่ที่ต้องการ (ตร.ม.)<</label></div>
                                                            <div class="col-sm-3"><p class="no-margin">250</p></div>
                                                            <div class="col-sm-3"><label class="font-semibold">สิ่งอำนวยความสะดวกอื่นๆ</label></div>
                                                            <div class="col-sm-3"><p class="no-margin">มีบริการรับส่งจากสนามบิน</p></div>
                                                        </div>
                                                    </div>
                                                    <hr class="in-panel" />
                                                    <div class="row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group clearfix">
                                                                <label class="font-semibold">ราคาของใบเสนอราคา :</label>
                                                                <div class="input-time">
                                                                    <div class="select">
                                                                        <input type="text" class="form-control" value="10,000">
                                                                    </div>
                                                                    <span class="symbol">-</span>
                                                                    <div class="select">
                                                                        <input type="text" class="form-control"  value="50,000">
                                                                    </div>
                                                                </div>
                                                                <p class="required">กรุณากรอกข้อมูล</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12 mt25">
                                                            <div class="form-group">
                                                                <label class="font-semibold fullwidth">ไฟล์อัพโหลด (สามารถอัพโหลดได้สูงสุด 5 ไฟล์)</label>
                                                                <div class="upload-file">
                                                                    <div class="input">
                                                                        <input type="file" accept=".pdf" multiple maxlength="5" maxsize="25">
                                                                        <button type="button" class="btn btn-sm btn-orange">อัพโหลด์ไฟล์</button>
                                                                        <p class="no-margin">PDF Max file : 25 MB</p>
                                                                    </div>
                                                                    <div class="text"></div>
                                                                </div>
                                                                <p class="required">กรุณาอัพโหลดไฟล์</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="font-semibold">Note :</label>
                                                                <textarea class="form-control" rows="5" placeholder="พิมพ์ข้อความที่ต้องการบอกเพิ่มเติม"></textarea>
                                                                <p class="required">กรุณากรอกข้อมูล</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="btn-box text-center">
                                                        <button id="btn-save" type="submit" class="btn btn-blue-linear btn-md btn-minwidth" disabled>ส่งใบเสนอราคา</button>
                                                    </div>
                                                    <br/>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="note">
                                            <p>หากมีปัญหาด้านการใช้งานหรือข้อสงสัยสามารถกดส่งอีเมลเพื่อติดต่อ TCEB<br/>โดยเจ้าหน้าที่จะดำเนินการติดต่อกลับภายใน 3-5 วันทำการ</p>
                                            <a href="mailto:info@tceb.or.th" class="btn-gray btn btn-md btn-minwidth">
                                                <div class="text-icon is-middle">
                                                    <i class="m-icon m-icon-email m-icon-20"></i>
                                                    <span>&nbsp;ส่งอีเมลถึง TCEB</span>
                                                </div>
                                            </a>
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
                $('.upload-file input').change(function(e){
                    var parent = $(this).parents('.upload-file');
                    if(parent.find('.inner').length == 0)
                    {
                        $('#btn-save').prop( 'disabled', true );
                    }
                    else
                    {
                        $('#btn-save').prop( 'disabled', false );
                    }
                });

                $('.upload-file').on('click', '.remove-file', function(){
                    var parent = $(this).parents('.upload-file');
                    if(parent.find('.inner').length == 0)
                    {
                        $('#btn-save').prop( 'disabled', true );
                    }
                    else
                    {
                        $('#btn-save').prop( 'disabled', false );
                    }
                });
            })();
        </script>
    </body>
</html>