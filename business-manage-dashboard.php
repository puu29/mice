<!DOCTYPE html>
<html>
    <head>
        <?php include "layout/head.php" ?>
        <link href="assets/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
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
                                <li ><a href="business-manage-promotion.php">จัดการโปรโมชั่น</a></li>
                                <li ><a href="business-manage-post.php">จัดการโพสต์ของธุรกิจ</a></li>
                                <li ><a href="business-manage-calendar.php">จัดการปฏิทินไมซ์</a></li>
                                <li class="active"><a href="business-manage-dashboard.php">สถิติผู้เข้าดู</a></li>
                            </ul>
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active">
                                    <div class="b-dashboard">
                                        <div class="panel pnale-default">
                                            <div class="panel-body">
                                                <div class="is-reverse">
                                                    <div class="form-inline form-grahp">
                                                        <div class="form-group">
                                                            <label>เริ่มต้น :&nbsp;</label>
                                                            <div class="input-group is-calendar">
                                                                <input type="text" class="form-control datepicker2" placeholder="DD/MM/YYYY">
                                                                <span class="input-group-addon bg-custom b-0"><i class="m-icon m-icon-calendar"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>สิ้นสุด :&nbsp;</label>
                                                            <div class="input-group is-calendar">
                                                                <input type="text" class="form-control datepicker2" placeholder="DD/MM/YYYY">
                                                                <span class="input-group-addon bg-custom b-0"><i class="m-icon m-icon-calendar"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="font-16 no-margin inline-block">จำนวนผู้เข้าชมธุรกิจ</h3>
                                                </div>
                                                <div class="grahp scroll-custom-blue">
                                                    <canvas id="chart-line" width="400" height="300"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel pnale-default">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-sm-8">
                                                        <div class="btn-toolbar">
                                                            <div class="btn-group active" onclick="set_chart_bar(0);">จำนวนผู้ขอใบเสนอราคา</div>
                                                            <div class="btn-group" onclick="set_chart_bar(1);">จำนวนการส่งใบเสนอราคา</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4 text-right">
                                                        <div class="form-inline">
                                                            <div class="form-group">
                                                                <label>ระยะเวลา :&nbsp;</label>
                                                                <div class="select">
                                                                    <select class="form-control">
                                                                        <option value="">ประจำปี</option>
                                                                    </select>
                                                                    <span class="glyphicon glyphicon-triangle-bottom"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="grahp scroll-custom-blue">
                                                    <canvas id="chart-bar" width="400" height="300"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <h3 class="table-title font-16 font-semibold no-margin">จำนวนผู้เข้าชมโพสต์</h3>
                                                <div class="table-all">ทั้งหมด 50 โพสต์</div>
                                                <div class="clearfix"></div>
                                                <div class="">
                                                    <table class="table datatable table-white mobile-full">
                                                        <thead>
                                                            <tr>
                                                                <th>ชื่อโพสต์</th>
                                                                <th>วันที่โพสต์</th>
                                                                <th>จำนวนผู้เข้าชม</th>
                                                                <th class="no-sort"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="font-bold">ที่พักใจกลางเมืองอุดรธานี</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>478 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">Personalized​ colouristics for​ MICE​ e​cosystem</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>59 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">Special Promotion for Exhibition Booth!!</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>83 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">โครงการเราเที่ยวด้วยกัน ได้ตั้งแต่วันนี้ถึง 31 ตุลาคม 2563</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>20 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">MY EXHIBIT</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>46 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">Tripadvisor Travellers’ Choice 2020</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>46 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">Personalized​ colouristics for​ MICE​ e​cosystem</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>46 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">MY EXHIBIT</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>46 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">Tripadvisor Travellers’ Choice 2020</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>46 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">Personalized​ colouristics for​ MICE​ e​cosystem</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>46 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <h3 class="table-title font-16 font-semibold no-margin">จำนวนผู้เข้าชมโปรโมชั่น</h3>
                                                <div class="table-all">ทั้งหมด 50 โพสต์</div>
                                                <div class="clearfix"></div>
                                                <div class="">
                                                    <table class="table datatable table-white mobile-full">
                                                        <thead>
                                                            <tr>
                                                                <th>ชื่อโปรโมชั่น</th>
                                                                <th>วันที่โพสต์</th>
                                                                <th>จำนวนผู้เข้าชม</th>
                                                                <th class="no-sort"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="font-bold">ที่พักใจกลางเมืองอุดรธานี</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>478 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">Personalized​ colouristics for​ MICE​ e​cosystem</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>59 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">Special Promotion for Exhibition Booth!!</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>83 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">โครงการเราเที่ยวด้วยกัน ได้ตั้งแต่วันนี้ถึง 31 ตุลาคม 2563</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>20 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">MY EXHIBIT</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>46 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">Tripadvisor Travellers’ Choice 2020</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>46 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">Personalized​ colouristics for​ MICE​ e​cosystem</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>46 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">MY EXHIBIT</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>46 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">Tripadvisor Travellers’ Choice 2020</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>46 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">Personalized​ colouristics for​ MICE​ e​cosystem</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>46 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <h3 class="table-title font-16 font-semibold no-margin">จำนวนผู้เข้าชมปฏิทินไมซ์</h3>
                                                <div class="table-all">ทั้งหมด 50 โพสต์</div>
                                                <div class="clearfix"></div>
                                                <div class="">
                                                    <table class="table datatable table-white mobile-full">
                                                        <thead>
                                                            <tr>
                                                                <th>ชื่อ</th>
                                                                <th>วันที่โพสต์</th>
                                                                <th>จำนวนผู้เข้าชม</th>
                                                                <th class="no-sort"></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="font-bold">ที่พักใจกลางเมืองอุดรธานี</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>478 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">Personalized​ colouristics for​ MICE​ e​cosystem</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>59 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">Special Promotion for Exhibition Booth!!</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>83 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">โครงการเราเที่ยวด้วยกัน ได้ตั้งแต่วันนี้ถึง 31 ตุลาคม 2563</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>20 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">MY EXHIBIT</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>46 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">Tripadvisor Travellers’ Choice 2020</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>46 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">Personalized​ colouristics for​ MICE​ e​cosystem</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>46 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">MY EXHIBIT</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>46 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">Tripadvisor Travellers’ Choice 2020</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>46 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="font-bold">Personalized​ colouristics for​ MICE​ e​cosystem</td>
                                                                <td class="mobile-font-14 mobile-no-padding">09/09/20</td>
                                                                <td><span class="hidden-desktop">จำนวนผู้เข้าชม&nbsp;</span>46 ครั้ง</td>
                                                                <td class="mobile-text-right"><a href="#" class="font-link font-blue">ดูโพสต์หลัก</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
        <script src="assets/js/jquery.dataTables.min.js"></script>
        <script src="assets/js/dataTables.bootstrap.js"></script>
        <script src="assets/js/Chart.min.js"></script>
        <script>
            (function(){

                set_table();
                set_chart_line();
                set_chart_bar(0);

                $('.btn-toolbar .btn-group').click(function(){
                    var parent = $(this).parents('.btn-toolbar');
                    var index = $(this).index();
                    parent.find('.btn-group').removeClass('active').eq(index).addClass('active');
                });

            })();

            var options = {
                scales: {
                    yAxes: [{
                        ticks: {
                            max: 300,
                            min: 50,
                            stepSize: 50
                        }
                    }]
                }
            };

            function set_chart_line()
            {
                if($(window).width() >= 768)
                {
                    $("#chart-line").attr('width', $($("#chart-line").parent()).width() );
                }

                var chartLine = new Chart($("#chart-line").get(0).getContext("2d")).Line({
                    labels : ["16 มิ.ย.","18 มิ.ย.","20 มิ.ย.","22 มิ.ย.","24 มิ.ย.","26 มิ.ย.","28 มิ.ย.","30 มิ.ย."],
                    datasets : [
                        {
                            fillColor : "rgba(93, 156, 236, 0)",
                            strokeColor : "#5B4BD1",
                            pointColor : "#5B4BD1",
                            pointStrokeColor : "#fff",
                            data : [50,100,80,90,120,150,200,250],
                        }
                    ]
                }, options);
            }

            function set_chart_bar(value)
            {
                var random = [];
                random[0] = [200,180,200,250,160,300,250,180,190,200,220,250];
                random[1] = [150,180,190,200,180,150,200,210,220,200,220,250];
                
                if($(window).width() >= 768)
                {
                    $("#chart-bar").attr('width', $($("#chart-bar").parent()).width() );
                }
                var chartBar = new Chart($("#chart-bar").get(0).getContext("2d")).Bar({
                    labels : ["มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"],
                    datasets : [
                        {
                            fillColor: '#2170B8',
                            strokeColor: '#2170B8',
                            highlightFill: '#51A1EA',
                            highlightStroke: '#51A1EA',
                            data : random[value]
                        }
                    ]
                }, options);
            }

            function set_table()
            {
                if($(window).width() >= 992)
                {
                    $('.datatable').dataTable({
                        searching: false, 
                        paging: false, 
                        info: false,
                        order: [],
                        columnDefs: [
                            { targets: 'no-sort', orderable: false }
                        ],
                        scrollY: 355,
                    });
                }
            }
        </script>
    </body>
</html>