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
                                <li class="active"><a href="business-manage-chat.php">การสนทนา <span class="circle"></span></a></li>
                                <li ><a href="business-manage-quotation.php">ใบเสนอราคา <span class="circle"></span></a></li>
                                <li ><a href="business-manage-promotion.php">จัดการโปรโมชั่น</a></li>
                                <li ><a href="business-manage-post.php">จัดการโพสต์ของธุรกิจ</a></li>
                                <li ><a href="business-manage-calendar.php">จัดการปฏิทินไมซ์</a></li>
                                <li ><a href="business-manage-dashboard.php">สถิติผู้เข้าดู</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active">
                                    <div class="b-chat">
                                        <div class="btn-toolbar bg-white shadow-blue font-14" role="toolbar">
                                            <a href="business-manage-chat.php" class="btn-group " role="group">
                                                <div class="chat-type">
                                                    <h2 class="no-margin font-semibold">15</h2>
                                                    <p class="no-margin">แชทสนทนา</p>
                                                </div>
                                            </a>
                                            <a href="business-manage-chat-waiting.php" class="btn-group" role="group">
                                                <div class="chat-type">
                                                    <h2 class="no-margin font-semibold">4</h2>
                                                    <p class="no-margin">รอการนัด Video Call</p>
                                                </div>
                                            </a>
                                            <a href="business-manage-chat-confirm.php" class="btn-group active" role="group">
                                                <div class="chat-type">
                                                    <h2 class="no-margin font-semibold">2</h2>
                                                    <p class="no-margin">ยืนยันการนัด Video Call</p>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="chat-appointment">
                                            <div class="setting text-right">
                                                <a href="business-manage-chat-schedule.php" class="btn btn-md btn-orange">ตั้งค่าช่วงเวลานัดหมาย</a>
                                            </div>
                                            <div class="panel-list no-margin">
                                                <div class="head">
                                                    <div class="row">
                                                        <div class="col-sm-3">รายชื่อ</div>
                                                        <div class="col-sm-2">วันที่นัดหมาย</div>
                                                        <div class="col-sm-4">รายละเอียด</div>
                                                        <div class="col-sm-3"></div>
                                                    </div>
                                                </div>
                                                <div class="body">
                                                    <div class="list pd25">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <div class="user is-middle">
                                                                    <div class="bg" style="background-image: url('assets/images/user-sh1.png')"></div>
                                                                    <p class="no-margin font-semibold font-blue-dark">ทวีสิทธิ์<br/>นามสกุล</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <p class="no-margin font-semibold font-blue">26/06/2020.<br/>10.00 - 13.00 น.</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="no-margin font-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut tellus elementum sagittis vitae et leo duis ut. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Nec nam aliquam sem</p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="btn-box text-center">
                                                                    <a href="business-manage-chat-vdocall.php" class="btn btn-md text-overflow btn-minwidth btn-blue-linear">
                                                                        <div class="text-icon for-list no-margin is-middle">
                                                                            <i class="m-icon m-icon-vdocall m-icon-white"></i>
                                                                            <span>เริ่มการสนทนา</span>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list pd25">
                                                        <div class="row">
                                                            <div class="col-sm-3">
                                                                <div class="user is-middle">
                                                                    <div class="bg" style="background-image: url('assets/images/user-sh2.png')"></div>
                                                                    <p class="no-margin font-semibold font-blue-dark">ทวีสิทธิ์<br/>นามสกุล</p>
                                                                </div>
                                                            </div>
                                                            <div class="col-sm-2">
                                                                <p class="no-margin font-semibold font-blue">26/06/2020.<br/>10.00 - 13.00 น.</p>
                                                            </div>
                                                            <div class="col-sm-4">
                                                                <p class="no-margin font-12">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut tellus elementum sagittis vitae et leo duis ut. Et malesuada fames ac turpis egestas maecenas pharetra convallis posuere. Nec nam aliquam sem</p>
                                                            </div>
                                                            <div class="col-sm-3">
                                                                <div class="btn-box text-center">
                                                                    <button type="button" class="btn btn-md text-overflow btn-minwidth btn-blue-linear" disabled>
                                                                        <div class="text-icon for-list no-margin is-middle">
                                                                            <i class="m-icon m-icon-vdocall m-icon-white"></i>
                                                                            <span>เริ่มการสนทนา</span>
                                                                        </div>
                                                                    </button>
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
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include "layout/footer.php" ?>

        <div class="modal fade" id="modal-cancel" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body font-16 pd-40">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                        <form action="" method="post">
                            <h2 class="font-22 no-margin-top font-medium">ยกเลิกการนัดหมาย Video Call สนทนา</h2>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <input type="checkbox" id="cancel1">
                                            <label for="cancel1">ติดธุระกระทันหันในช่วงวันและเวลาที่นัดหมาย</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="cancel2">
                                            <label for="cancel2">ไม่สามารถ Video Call ได้ในวันและเวลาดังกล่าว</label>
                                        </div>
                                        <div class="checkbox">
                                            <input type="checkbox" id="cancel3">
                                            <label for="cancel3">เหตุผลอื่นๆ</label>
                                        </div>
                                        <br/><br/>
                                        <textarea class="form-control" rows="5" placeholder="ระบุเหตุผลที่ต้องการยกเลิกการนัดหมาย Video Call สนทนา"></textarea>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-center">
                                <button type="button" data-dismiss="modal"  class="btn btn-md btn-blue-linear font-medium btn-minwidth">ยืนยันการยกเลิกคำขอ</button>
                            </div>
                            <br/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>