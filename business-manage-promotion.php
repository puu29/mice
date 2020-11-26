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
                                <li ><a href="business-manage.php">โปรไฟล์ธุรกิจ</a></li>
                                <li ><a href="business-manage-chat.php">การสนทนา <span class="circle"></span></a></li>
                                <li ><a href="business-manage-quotation.php">ใบเสนอราคา <span class="circle"></span></a></li>
                                <li class="active"><a href="business-manage-promotion.php">จัดการโปรโมชั่น</a></li>
                                <li ><a href="business-manage-post.php">จัดการโพสต์ของธุรกิจ</a></li>
                                <li ><a href="business-manage-calendar.php">จัดการปฏิทินไมซ์</a></li>
                                <li ><a href="business-manage-dashboard.php">สถิติผู้เข้าดู</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active">
                                    <div class="b-news">
                                        <div class="setting text-right no-margin mobile-text-right">
                                            <div class="select">
                                                <select class="form-control">
                                                    <option value="">วันที่ล่าสุด</option>
                                                </select>
                                                <span class="m-icon m-icon-dropdown"></span>
                                            </div>
                                        </div>

                                        <div class="b-card">
                                            <div class="row is-small2">
                                                <div class="col col-md-4 col-sm-6">
                                                    <a href="#" class="add-box" data-dismiss="modal" data-toggle="modal" data-target="#modal-promotion">
                                                        <div class="inner transform-middle">
                                                            <i class="m-icon m-icon-plus"></i><br/>
                                                            <span class="font-blue font-semibold">เพิ่มโปรโมชั่น</span>
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="col col-md-4 col-sm-6">
                                                    <div class="card-manage shadow-blue">
                                                        <div class="img">
                                                            <div class="bg" style="background-image: url('assets/images/pro1.png')"></div>
                                                        </div>
                                                        <div class="name font-bold"></div>
                                                        <div class="desc">เจอกัน ที่ งานไทยเที่ยวไทย ครั้งที่ 54 วันที่ 5 - 8 มีนาคม 2563 พิเศษ!! ลด แจก เพิ่ม จากราคาในโบรชัวร์</div>
                                                        <div class="row is-small">
                                                            <div class="col col-xs-7">
                                                                <div class="date">
                                                                    <label class="no-margin font-regular">วันที่เริ่ม-สิ้นสุดแสดงโปรโมชั่น</label>
                                                                    <p class="no-margin font-gray-light">14/06/63 - 24/06/63</p>
                                                                </div>
                                                            </div>
                                                            <div class="col col-xs-5 text-right">
                                                                <div class="action">
                                                                    <a href="" class="font-semibold font-blue" data-dismiss="modal" data-toggle="modal" data-target="#modal-promotion">แก้ไขข้อมูล</a>
                                                                    <a href="" class="font-semibold font-blue">ลบ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col-md-4 col-sm-6">
                                                    <div class="card-manage shadow-blue">
                                                        <div class="img">
                                                            <div class="bg" style="background-image: url('assets/images/pro2.png')"></div>
                                                        </div>
                                                        <div class="name font-bold"></div>
                                                        <div class="desc">เจอกัน ที่ งานไทยเที่ยวไทย ครั้งที่ 54 วันที่ 5 - 8 มีนาคม 2563 พิเศษ!! ลด แจก เพิ่ม จากราคาในโบรชัวร์</div>
                                                        <div class="row is-small">
                                                            <div class="col col-xs-7">
                                                                <div class="date">
                                                                    <label class="no-margin font-regular">วันที่เริ่ม-สิ้นสุดแสดงโปรโมชั่น</label>
                                                                    <p class="no-margin font-gray-light">14/06/63 - 24/06/63</p>
                                                                </div>
                                                            </div>
                                                            <div class="col col-xs-5 text-right">
                                                                <div class="action">
                                                                    <a href="" class="font-semibold font-blue" data-dismiss="modal" data-toggle="modal" data-target="#modal-promotion">แก้ไขข้อมูล</a>
                                                                    <a href="" class="font-semibold font-blue">ลบ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col-md-4 col-sm-6">
                                                    <div class="card-manage shadow-blue">
                                                        <div class="img">
                                                            <div class="bg" style="background-image: url('assets/images/pro3.png')"></div>
                                                        </div>
                                                        <div class="name font-bold"></div>
                                                        <div class="desc">เจอกัน ที่ งานไทยเที่ยวไทย ครั้งที่ 54 วันที่ 5 - 8 มีนาคม 2563 พิเศษ!! ลด แจก เพิ่ม จากราคาในโบรชัวร์</div>
                                                        <div class="row is-small">
                                                            <div class="col col-xs-7">
                                                                <div class="date">
                                                                    <label class="no-margin font-regular">วันที่เริ่ม-สิ้นสุดแสดงโปรโมชั่น</label>
                                                                    <p class="no-margin font-gray-light">14/06/63 - 24/06/63</p>
                                                                </div>
                                                            </div>
                                                            <div class="col col-xs-5 text-right">
                                                                <div class="action">
                                                                    <a href="" class="font-semibold font-blue" data-dismiss="modal" data-toggle="modal" data-target="#modal-promotion">แก้ไขข้อมูล</a>
                                                                    <a href="" class="font-semibold font-blue">ลบ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col-md-4 col-sm-6">
                                                    <div class="card-manage shadow-blue">
                                                        <div class="img">
                                                            <div class="bg" style="background-image: url('assets/images/pro4.png')"></div>
                                                        </div>
                                                        <div class="name font-bold"></div>
                                                        <div class="desc">เจอกัน ที่ งานไทยเที่ยวไทย ครั้งที่ 54 วันที่ 5 - 8 มีนาคม 2563 พิเศษ!! ลด แจก เพิ่ม จากราคาในโบรชัวร์</div>
                                                        <div class="row is-small">
                                                            <div class="col col-xs-7">
                                                                <div class="date">
                                                                    <label class="no-margin font-regular">วันที่เริ่ม-สิ้นสุดแสดงโปรโมชั่น</label>
                                                                    <p class="no-margin font-gray-light">14/06/63 - 24/06/63</p>
                                                                </div>
                                                            </div>
                                                            <div class="col col-xs-5 text-right">
                                                                <div class="action">
                                                                    <a href="" class="font-semibold font-blue" data-dismiss="modal" data-toggle="modal" data-target="#modal-promotion">แก้ไขข้อมูล</a>
                                                                    <a href="" class="font-semibold font-blue">ลบ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col-md-4 col-sm-6">
                                                    <div class="card-manage shadow-blue">
                                                        <div class="img">
                                                            <div class="bg" style="background-image: url('assets/images/pro5.png')"></div>
                                                        </div>
                                                        <div class="name font-bold"></div>
                                                        <div class="desc">เจอกัน ที่ งานไทยเที่ยวไทย ครั้งที่ 54 วันที่ 5 - 8 มีนาคม 2563 พิเศษ!! ลด แจก เพิ่ม จากราคาในโบรชัวร์</div>
                                                        <div class="row is-small">
                                                            <div class="col col-xs-7">
                                                                <div class="date">
                                                                    <label class="no-margin font-regular">วันที่เริ่ม-สิ้นสุดแสดงโปรโมชั่น</label>
                                                                    <p class="no-margin font-gray-light">14/06/63 - 24/06/63</p>
                                                                </div>
                                                            </div>
                                                            <div class="col col-xs-5 text-right">
                                                                <div class="action">
                                                                    <a href="" class="font-semibold font-blue" data-dismiss="modal" data-toggle="modal" data-target="#modal-promotion">แก้ไขข้อมูล</a>
                                                                    <a href="" class="font-semibold font-blue">ลบ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col-md-4 col-sm-6">
                                                    <div class="card-manage shadow-blue">
                                                        <div class="img">
                                                            <div class="bg" style="background-image: url('assets/images/pro6.png')"></div>
                                                        </div>
                                                        <div class="name font-bold"></div>
                                                        <div class="desc">เจอกัน ที่ งานไทยเที่ยวไทย ครั้งที่ 54 วันที่ 5 - 8 มีนาคม 2563 พิเศษ!! ลด แจก เพิ่ม จากราคาในโบรชัวร์</div>
                                                        <div class="row is-small">
                                                            <div class="col col-xs-7">
                                                                <div class="date">
                                                                    <label class="no-margin font-regular">วันที่เริ่ม-สิ้นสุดแสดงโปรโมชั่น</label>
                                                                    <p class="no-margin font-gray-light">14/06/63 - 24/06/63</p>
                                                                </div>
                                                            </div>
                                                            <div class="col col-xs-5 text-right">
                                                                <div class="action">
                                                                    <a href="" class="font-semibold font-blue" data-dismiss="modal" data-toggle="modal" data-target="#modal-promotion">แก้ไขข้อมูล</a>
                                                                    <a href="" class="font-semibold font-blue">ลบ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col-md-4 col-sm-6">
                                                    <div class="card-manage shadow-blue">
                                                        <div class="img">
                                                            <div class="bg" style="background-image: url('assets/images/pro7.png')"></div>
                                                        </div>
                                                        <div class="name font-bold"></div>
                                                        <div class="desc">เจอกัน ที่ งานไทยเที่ยวไทย ครั้งที่ 54 วันที่ 5 - 8 มีนาคม 2563 พิเศษ!! ลด แจก เพิ่ม จากราคาในโบรชัวร์</div>
                                                        <div class="row is-small">
                                                            <div class="col col-xs-7">
                                                                <div class="date">
                                                                    <label class="no-margin font-regular">วันที่เริ่ม-สิ้นสุดแสดงโปรโมชั่น</label>
                                                                    <p class="no-margin font-gray-light">14/06/63 - 24/06/63</p>
                                                                </div>
                                                            </div>
                                                            <div class="col col-xs-5 text-right">
                                                                <div class="action">
                                                                    <a href="" class="font-semibold font-blue" data-dismiss="modal" data-toggle="modal" data-target="#modal-promotion">แก้ไขข้อมูล</a>
                                                                    <a href="" class="font-semibold font-blue">ลบ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col-md-4 col-sm-6">
                                                    <div class="card-manage shadow-blue">
                                                        <div class="img">
                                                            <div class="bg" style="background-image: url('assets/images/pro8.png')"></div>
                                                        </div>
                                                        <div class="name font-bold"></div>
                                                        <div class="desc">เจอกัน ที่ งานไทยเที่ยวไทย ครั้งที่ 54 วันที่ 5 - 8 มีนาคม 2563 พิเศษ!! ลด แจก เพิ่ม จากราคาในโบรชัวร์</div>
                                                        <div class="row is-small">
                                                            <div class="col col-xs-7">
                                                                <div class="date">
                                                                    <label class="no-margin font-regular">วันที่เริ่ม-สิ้นสุดแสดงโปรโมชั่น</label>
                                                                    <p class="no-margin font-gray-light">14/06/63 - 24/06/63</p>
                                                                </div>
                                                            </div>
                                                            <div class="col col-xs-5 text-right">
                                                                <div class="action">
                                                                    <a href="" class="font-semibold font-blue" data-dismiss="modal" data-toggle="modal" data-target="#modal-promotion">แก้ไขข้อมูล</a>
                                                                    <a href="" class="font-semibold font-blue">ลบ</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="note">
                                            <p>หากมีปัญหาด้านการใช้งานหรือข้อสงสัยสามารถกดส่งอีเมลเพื่อติดต่อ TCEB <br/>โดยเจ้าหน้าที่จะดำเนินการติดต่อกลับภายใน 3-5 วันทำการ</p>
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

        <div class="modal fade" id="modal-promotion" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-md" role="document">
                <div class="modal-content mobile-font-16">
                    <div class="modal-body pd-40">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                        <form action="" method="post">
                            <h2 class="font-22 no-margin-top font-medium"></h2>
                            <div class="form-group">
                                <label class="font-semibold">ชื่อโปรโมชั่น</label>
                                <input type="text" class="form-control" placeholder="ชื่อโปรโมชั่น">
                                <p class="required">กรุณากรอกข้อมูล</p>
                            </div>
                            <div class="form-group">
                                <label class="font-semibold">คำอธิบาย</label>
                                <textarea class="form-control" rows="5" placeholder="คำอธิบาย"></textarea>
                                <p class="required">กรุณากรอกข้อมูล</p>
                            </div>
                            <div class="form-group">
                                <label class="font-semibold fullwidth">รูปภาพหน้าปก</label>
                                <div class="upload-photo" style="width: 180px;">
                                    <!-- <div class="preview" style="background-image: url('assets/images/post1.png')"></div> -->
                                    <div class="input">
                                        <input type="file" accept="image/*">
                                        <div class="text">
                                            <div class="text-icon">
                                                <i class="m-icon m-icon-plus"></i>
                                                <p>อัพโหลดรูปภาพ</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="required">กรุณาอัพโหลดข้อมูล</p>
                            </div>
                            <div class="form-group">
                                <label class="font-semibold fullwidth">ใส่รูปภาพประกอบ</label>
                                <div class="upload-photos is-mobile-half">
                                    <div class="inner">
                                        <div class="bg" style="background-image: url('assets/images/post1.png')"></div>
                                        <div class="action dropup">
                                            <button class="btn btn-trans btn-default dropdown-toggle btn-dots" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                                <span class="glyphicon glyphicon-option-horizontal"></span>
                                            </button>
                                            <ul class="dropdown-menu dropdown-menu-right shadow">
                                                <li>
                                                    <div class="text-icon is-middle edit-photo">
                                                        <i class="m-icon m-icon-edit"></i>
                                                        <span>แก้ไขรูป</span>
                                                        <input type="file" accept="image/*">
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="text-icon is-middle remove-photo">
                                                        <i class="m-icon m-icon-trash"></i>
                                                        <span>ลบรูป</span>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="inner for-upload">
                                        <div class="input bg-gray">
                                            <input type="file" accept="image/*" multiple>
                                            <div class="text">
                                                <i class="glyphicon glyphicon-plus"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p class="required">กรุณาอัพโหลดข้อมูล</p>
                            </div>
                            <div class="form-group mobile-no-margin">
                                <label class="font-semibold">ตั้งเวลาแสดงโปรโมชั่น</label>
                            </div>
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="font-semibold">เริ่มวันที่</label>
                                        <div class="input-group is-calendar">
                                            <input type="text" class="form-control datepicker2" placeholder="DD/MM/YYYY">
                                            <span class="input-group-addon bg-custom b-0"><i class="m-icon m-icon-calendar"></i></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="font-semibold">วันสิ้นสุด</label>
                                        <div class="input-group is-calendar">
                                            <input type="text" class="form-control datepicker2" placeholder="DD/MM/YYYY">
                                            <span class="input-group-addon bg-custom b-0"><i class="m-icon m-icon-calendar"></i></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <br/>
                                    <div class="btn-box text-right mobile-text-center">
                                        <button type="button" data-dismiss="modal" class="btn btn-md btn-blue-linear font-medium btn-minwidth no-margin" style="width:200px">ยืนยันข้อมูล</button>
                                    </div>
                                </div>
                            </div>
                            <br/>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>