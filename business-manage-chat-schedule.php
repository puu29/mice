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
                        <a href="member-business.php" class="to-back font-blue hidden-mobile">
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
                            <div class="tab-content mobile-no-padding-top">
                                <div role="tabpanel" class="tab-pane active">
                                    <div class="b-schedule">
                                        <a href="javascript:history.back()" class="to-back font-blue mobile-no-margin">
                                            <div class="text-icon is-middle">
                                                <i class="glyphicon glyphicon-menu-left"></i>
                                                <span>ย้อนกลับ</span>
                                            </div>
                                        </a>
                                        <h2 class="font-medium font-22 mobile-font-semibold">ตั้งค่าช่วงเวลานัดหมาย</h2>
                                        <div class="schedule-option">
                                            <div class="form-group pull-left">
                                                <label class="fullwidth">เขตเวลา</label>
                                                <div class="select">
                                                    <select class="form-control">
                                                        <option value="">(UTC+07.00) Bangkok, Loas, Cambodia, Vietnam</option>
                                                    </select>
                                                    <span class="m-icon m-icon-dropdown m-icon-black"></span>
                                                </div>
                                            </div>
                                            <div class="form-group pull-right">
                                                <br class="hidden-mobile show-ipad" /><br/>
                                                <label>กำหนดระยะเวลานัดหมาย&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                                <div class="checkbox is-inline">
                                                    <input type="radio" name="type" id="s-type1" onclick="set_type(1)" checked>
                                                    <label for="s-type1">30 นาที</label>
                                                </div>
                                                <div class="checkbox is-inline">
                                                    <input type="radio" name="type" id="s-type2" onclick="set_type(2)">
                                                    <label for="s-type2">1 ชั่วโมง</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-body no-padding">
                                                <form action="" method="post" class="form-type" data-type="1">
                                                    <table class="table table-bordered mobile-full">
                                                        <tbody>
                                                            <?php $day = array('วันจันทร์','วันอังคาร','วันพุธ','วันพฤหัสบดี','วันศุกร์','วันเสาร์','วันอาทิตย์') ?>
                                                            <?php foreach($day as $key => $value) { ?>
                                                            <tr>
                                                                <td width="200">
                                                                    <div class="checkbox pl20">
                                                                        <input type="checkbox" id="t1-day<?=$key?>">
                                                                        <label for="t1-day<?=$key?>" class="font-16 font-medium"><?=$value?></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio-select mt-5">
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t2-day<?=$key?>-time1">
                                                                            <label for="t2-day<?=$key?>-time1">08.00 - 08.30</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t2-day<?=$key?>-time2">
                                                                            <label for="t2-day<?=$key?>-time2">08.45 - 09.15</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t2-day<?=$key?>-time3">
                                                                            <label for="t2-day<?=$key?>-time3">09.30 - 10.00</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t2-day<?=$key?>-time4">
                                                                            <label for="t2-day<?=$key?>-time4">10.15 - 10.45</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t2-day<?=$key?>-time5">
                                                                            <label for="t2-day<?=$key?>-time5">11.00 - 11.30</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t2-day<?=$key?>-time6">
                                                                            <label for="t2-day<?=$key?>-time6">11.45 - 12.15</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t2-day<?=$key?>-time7">
                                                                            <label for="t2-day<?=$key?>-time7">12.30 - 13.00</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t2-day<?=$key?>-time8">
                                                                            <label for="t2-day<?=$key?>-time8">13.15 - 13.45</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t2-day<?=$key?>-time9">
                                                                            <label for="t2-day<?=$key?>-time9">14.00 - 14.30</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t2-day<?=$key?>-time10">
                                                                            <label for="t2-day<?=$key?>-time10">14.45 - 15.15</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t2-day<?=$key?>-time11">
                                                                            <label for="t2-day<?=$key?>-time11">15.30 - 16.00</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t2-day<?=$key?>-time12">
                                                                            <label for="t2-day<?=$key?>-time12">16.15 - 16.45</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t2-day<?=$key?>-time13">
                                                                            <label for="t2-day<?=$key?>-time13">17.00 - 17.30</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t2-day<?=$key?>-time14">
                                                                            <label for="t2-day<?=$key?>-time14">17.45 - 18.15</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t2-day<?=$key?>-time15">
                                                                            <label for="t2-day<?=$key?>-time15">18.30 - 19.00</label>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                    <div class="btn-box text-center no-margin">
                                                        <button class="btn btn-blue-linear btn-md btn-minwidth">บันทึกข้อมูล</button>
                                                    </div>
                                                    <br/><br/>
                                                </form>
                                                <form action="" method="post" class="form-type" data-type="2" style="display: none;">
                                                    <table class="table table-bordered mobile-full">
                                                        <tbody>
                                                            <?php $day = array('วันจันทร์','วันอังคาร','วันพุธ','วันพฤหัสบดี','วันศุกร์','วันเสาร์','วันอาทิตย์') ?>
                                                            <?php foreach($day as $key => $value) { ?>
                                                            <tr>
                                                                <td width="200">
                                                                    <div class="checkbox pl20">
                                                                        <input type="checkbox" id="t1-day<?=$key?>">
                                                                        <label for="t1-day<?=$key?>" class="font-16 font-medium"><?=$value?></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="radio-select mt-5">
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t1-day<?=$key?>-time1">
                                                                            <label for="t1-day<?=$key?>-time1">08.00 - 09.00</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t1-day<?=$key?>-time2">
                                                                            <label for="t1-day<?=$key?>-time2">09.15 - 10.15</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t1-day<?=$key?>-time3">
                                                                            <label for="t1-day<?=$key?>-time3">10.30 - 11.30</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t1-day<?=$key?>-time4">
                                                                            <label for="t1-day<?=$key?>-time4">11.45 - 12.45</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t1-day<?=$key?>-time5">
                                                                            <label for="t1-day<?=$key?>-time5">13.00 - 14.00</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t1-day<?=$key?>-time6">
                                                                            <label for="t1-day<?=$key?>-time6">14.15 - 15.15</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t1-day<?=$key?>-time7">
                                                                            <label for="t1-day<?=$key?>-time7">15..30 - 16.30</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t1-day<?=$key?>-time8">
                                                                            <label for="t1-day<?=$key?>-time8">16.45 - 17.45</label>
                                                                        </div>
                                                                        <div class="radio">
                                                                            <input type="checkbox" id="t1-day<?=$key?>-time9">
                                                                            <label for="t1-day<?=$key?>-time9">18.00 - 19.00</label>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <?php } ?>
                                                        </tbody>
                                                    </table>
                                                    <div class="btn-box text-center no-margin">
                                                        <button class="btn btn-blue-linear btn-md btn-minwidth">บันทึกข้อมูล</button>
                                                    </div>
                                                    <br/><br/>
                                                </form>
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

        <div class="modal fade" id="modal-cancel" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body font-16 mobile-font-16 pd-40">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                        <form action="" method="post">
                            <h2 class="font-22 no-margin-top font-medium mobile-font-18 mobile-font-bold">ยกเลิกการนัดหมาย Video Call สนทนา</h2>
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
                                            <input type="checkbox" id="cancel3" onchange="$('#cancel_desc').slideToggle()">
                                            <label for="cancel3">เหตุผลอื่นๆ</label>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                    <div class="form-group" style="display: none;" id="cancel_desc">
                                        <textarea class="form-control" rows="5" placeholder="ระบุเหตุผลที่ต้องการยกเลิกการนัดหมาย Video Call สนทนา"></textarea>
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-center mobile-no-margin-top">
                                <button type="button" data-dismiss="modal"  class="btn btn-md btn-blue-linear font-medium btn-minwidth mobile-btn-block">ยืนยันการยกเลิกคำขอ</button>
                            </div>
                            <br class="hidden-mobile"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            (function(){
                $(window).resize(function(){
                    set_layout();
                });
                
                set_layout();
            })();

            function set_layout()
            {
                if($(window).width() < 768)
                {
                    $('.member-menu, .tab .nav-tabs').hide();
                }
                else
                {
                    $('.member-menu, .tab .nav-tabs').show();
                }
            }

            function set_type(value)
            {
                $('.form-type').hide();
                $('.form-type[data-type="'+value+'"]').fadeIn(300);
            }
        </script>
    </body>
</html>