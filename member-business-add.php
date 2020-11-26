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
                    <form action="member-business.php" method="post" enctype="multipart/form-data">
                        <div class="step-footer">
                            <div class="text">
                                <div class="symbol">
                                    <i class="m-icon m-icon-heart"></i>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                        <span class="sr-only"></span>
                                    </div>
                                </div>
                                <div class="step">
                                    <i class="m-icon m-icon-heart active"></i>
                                    <i class="m-icon m-icon-heart active"></i>
                                    <i class="m-icon m-icon-heart"></i>
                                    <i class="m-icon m-icon-heart"></i>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-md btn-blue-linear btn-save">บันทึกและส่งข้อมูล</button>
                        </div>
                        <h2 class="font-semibold no-margin">เพิ่มข้อมูลธุรกิจกลุ่มไมซ์</h2>
                        <p>หากท่านมีธุรกิจที่ต้องการที่เกี่ยวข้องกับอุตสาหกรรมไมซ์ และต้องการจะเข้าร่วมธุรกิจกับเรา สามารถกรอกรายละเอียดข้อมูลของท่าน และรอการดำเนินการจากแอดมินระบบภายใน 3-5 วันทำการ โดยไม่มีค่าใช้จ่ายใดๆ เพิ่มเติม</p>
                        <br/>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="font-semibold no-margin">เลือกประเภทกลุ่มธุรกิจของท่าน</h3>
                            </div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="font-semibold font-18 mobile-font-16">
                                        <div class="text-icon is-middle icon-right mobile-has-info">
                                            <i class="m-icon m-icon-help" data-toggle="tooltip" data-placement="right" title="Information"></i>
                                            <span>ธุรกิจหลัก <br class="hidden-desktop" /><span class="mobile-font-regular">(สามารถเลือกได้เพียง 1 ตัวเลือกเท่านั้น)</span></span>
                                        </div>    
                                    </label>
                                    <div class="radio-box">
                                        <div class="row is-small2">
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="radio" name="type" id="type1">
                                                    <label for="type1">
                                                        <div class="inner">
                                                            <img src="assets/images/mice1.png">
                                                            <div class="name">สถานที่จัดงาน</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="radio" name="type" id="type2">
                                                    <label for="type2">
                                                        <div class="inner">
                                                            <img src="assets/images/mice2.png">
                                                            <div class="name">ออร์แกไนเซอร์</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="radio" name="type" id="type3">
                                                    <label for="type3">
                                                        <div class="inner">
                                                            <img src="assets/images/mice3.png">
                                                            <div class="name">บริการสำหรับผู้จัดงาน</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="radio" name="type" id="type4">
                                                    <label for="type4">
                                                        <div class="inner">
                                                            <img src="assets/images/mice4.png">
                                                            <div class="name">ท่องเที่ยว/นำเที่ยว</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="radio" name="type" id="type5">
                                                    <label for="type5">
                                                        <div class="inner">
                                                            <img src="assets/images/mice5.png">
                                                            <div class="name">ที่พัก</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="radio" name="type" id="type6">
                                                    <label for="type6">
                                                        <div class="inner">
                                                            <img src="assets/images/mice6.png">
                                                            <div class="name">วิทยากร</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="radio" name="type" id="type7">
                                                    <label for="type7">
                                                        <div class="inner">
                                                            <img src="assets/images/mice7.png">
                                                            <div class="name">ขายปลีก/แหล่งช้อปปิ้ง</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="radio" name="type" id="type8">
                                                    <label for="type8">
                                                        <div class="inner">
                                                            <img src="assets/images/mice8.png">
                                                            <div class="name">โชว์/การแสดง</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="radio" name="type" id="type10">
                                                    <label for="type10">
                                                        <div class="inner">
                                                            <img src="assets/images/mice9.png">
                                                            <div class="name">อาหารและเครื่องดื่ม</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="radio" name="type" id="type11">
                                                    <label for="type11">
                                                        <div class="inner">
                                                            <img src="assets/images/mice10.png">
                                                            <div class="name">ธุรกิจบริการอื่นๆ</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="radio" name="type" id="type12">
                                                    <label for="type12">
                                                        <div class="inner">
                                                            <img src="assets/images/mice11.png">
                                                            <div class="name">โลจิสติกส์</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="radio" name="type" id="type13">
                                                    <label for="type13">
                                                        <div class="inner">
                                                            <img src="assets/images/mice12.png">
                                                            <div class="name">หน่วยงานที่เกี่ยวข้อง<br/>(ภาครัฐ/สมาคม)</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="required">กรุณาเลือกข้อมูล</p>
                                </div>
                                <hr class="in-panel"/>
                                <div class="form-group">
                                    <label class="font-semibold font-18 no-margin">สถานที่จัดงาน</label>
                                    <br/><br/>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="location1">
                                                <label for="location1">
                                                    <p class="font-16 font-semibold no-margin">โรงแรมและรีสอร์ทที่มีสถานที่จัดงาน</p>
                                                    <p class="mobile-font-regular">ห้อง Boardroom ห้อง Meeting Room ห้อง Auditorium และสถานที่จัดงาน (Event Space)</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="location2">
                                                <label for="location2">
                                                    <p class="font-16 font-semibold no-margin">ศูนย์แสดงสินค้า</p>
                                                    <p class="mobile-font-regular"></p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-sm-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="location3">
                                                <label for="location3">
                                                    <p class="font-16 font-semibold no-margin">ศูนย์ประชุม</p>
                                                    <p class="mobile-font-regular">ครอบคลุมถึงศูนย์ประชุมโดยเฉพาะที่ไม่ได้รวมอยู่ในโรงแรม โดยจะเน้นกลุ่มเป้าหมายไปที่สถานที่จัดกิจกรรมประชุมวิชาการ</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="location4">
                                                <label for="location4">
                                                    <p class="font-16 font-semibold no-margin">สถานที่ราชการ</p>
                                                    <p class="mobile-font-regular"></p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-sm-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="location5">
                                                <label for="location5">
                                                    <p class="font-16 font-semibold no-margin">สถาบันการศึกษา</p>
                                                    <p class="mobile-font-regular">สถานที่จัดกิจกรรมประเภทไมซ์ที่เป็นสถาบันการศึกษา</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="location6">
                                                <label for="location6">
                                                    <p class="font-16 font-semibold no-margin">สถานที่นั่งทำงานร่วมกัน</p>
                                                    <p class="mobile-font-regular">สถานที่การจัดงานแนวใหม่ซึ่งสามารถแบ่งส่วนของห้องประชุม และสถานที่จัดงาน (Event Space)</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="col-sm-6">
                                            <div class="checkbox">
                                                <input type="checkbox" id="location7">
                                                <label for="location7">
                                                    <p class="font-16 font-semibold no-margin">สถานที่จัดงานพิเศษ</p>
                                                    <p class="mobile-font-regular">สนามกีฬา โรงละคร ห้องสมุด พิพิธภัณฑ์</p>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="required">กรุณาเลือกข้อมูล</p>
                                </div>
                                <hr class="in-panel"/>
                                <div class="form-group">
                                    <label class="font-semibold font-18 mobile-font-16">
                                        <div class="text-icon is-middle icon-right mobile-has-info">
                                            <i class="m-icon m-icon-help" data-toggle="tooltip" data-placement="right" title="Information"></i>
                                            <span>บริการรองของธุรกิจ <br class="hidden-desktop" /><span class="font-regular">(เลือกได้สูงสุด 2 ตัวเลือก)</span></span>
                                        </div>
                                    </label>
                                    <div class="radio-box">
                                        <div class="row is-small2">
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="type" id="type_second1" disabled>
                                                    <label for="type_second1">
                                                        <div class="inner">
                                                            <img src="assets/images/mice1.png">
                                                            <div class="name">สถานที่จัดงาน</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="type" id="type_second2">
                                                    <label for="type_second2">
                                                        <div class="inner">
                                                            <img src="assets/images/mice2.png">
                                                            <div class="name">ออร์แกไนเซอร์</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="type" id="type_second3">
                                                    <label for="type_second3">
                                                        <div class="inner">
                                                            <img src="assets/images/mice3.png">
                                                            <div class="name">บริการสำหรับผู้จัดงาน</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="type" id="type_second4">
                                                    <label for="type_second4">
                                                        <div class="inner">
                                                            <img src="assets/images/mice4.png">
                                                            <div class="name">ท่องเที่ยว/นำเที่ยว</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="type" id="type_second5">
                                                    <label for="type_second5">
                                                        <div class="inner">
                                                            <img src="assets/images/mice5.png">
                                                            <div class="name">ที่พัก</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="type" id="type_second6">
                                                    <label for="type_second6">
                                                        <div class="inner">
                                                            <img src="assets/images/mice6.png">
                                                            <div class="name">วิทยากร</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="type" id="type_second7">
                                                    <label for="type_second7">
                                                        <div class="inner">
                                                            <img src="assets/images/mice7.png">
                                                            <div class="name">ขายปลีก/แหล่งช้อปปิ้ง</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="type" id="type_second8">
                                                    <label for="type_second8">
                                                        <div class="inner">
                                                            <img src="assets/images/mice8.png">
                                                            <div class="name">โชว์/การแสดง</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="type" id="type_second10">
                                                    <label for="type_second10">
                                                        <div class="inner">
                                                            <img src="assets/images/mice9.png">
                                                            <div class="name">อาหารและเครื่องดื่ม</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="type" id="type_second11">
                                                    <label for="type_second11">
                                                        <div class="inner">
                                                            <img src="assets/images/mice10.png">
                                                            <div class="name">ธุรกิจบริการอื่นๆ</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="type" id="type_second12">
                                                    <label for="type_second12">
                                                        <div class="inner">
                                                            <img src="assets/images/mice11.png">
                                                            <div class="name">โลจิสติกส์</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col col-sm-3 col-xs-6">
                                                <div class="checkbox">
                                                    <input type="checkbox" name="type" id="type_second13">
                                                    <label for="type_second13">
                                                        <div class="inner">
                                                            <img src="assets/images/mice12.png">
                                                            <div class="name">หน่วยงานที่เกี่ยวข้อง<br/>(ภาครัฐ/สมาคม)</div>
                                                            <button type="button" class="btn-trans btn-info" data-toggle="tooltip" data-placement="left" title="Information"><i class="m-icon m-icon-info"></i></button>
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="required">กรุณาเลือกข้อมูล</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default mt25">
                            <div class="panel-body ">
                                <label class="font-semibold font-18 no-margin">เลขทะเบียนนิติบุคคล 13 หลัก (ถ้ามี)</label>
                                <br/><br/>
                                <div class="form-inline form-tax">
                                    <div class="form-group">
                                        <input type="text" data-mask="0-0000-00000-00-0" class="form-control" placeholder="เลขทะเบียนนิติบุคคล">
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-md btn-blue-linear" onclick="search_tax_id()">Search</button>
                                    </div>
                                </div>
                                <div class="card-select" style="display: none">
                                    <div class="radio">
                                        <input type="radio" id="taxID1">
                                        <label for="taxID1">
                                            <p>วิลล่า โฮเต็ลแอนด์รีสอร์ท</p>
                                            <p class="no-margin">26/46 อาคารอรกานต์ ชั้น 12A ถ.ชิดลม แขวงลุมพินี เขตปทุมวัน กรุงเทพมหานคร 10330</p>
                                        </label>
                                    </div>
                                    <button type="button" class="btn btn-md btn-blue-linear" onclick="search_tax_detail()">เลือก</button>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default mt25" id="tax_detail" style="display: none;">
                            <div class="panel-heading">
                                <h3 class="font-semibold no-margin">ใส่ข้อมูลรายละเอียดธุรกิจ</h3>
                            </div>
                            <div class="panel-body ">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="font-semibold">ชื่อสถานประกอบการ (ภาษาไทย)</label>
                                            <input type="text" class="form-control" placeholder="ชื่อสถานประกอบการ (ภาษาไทย)" value="วิลล่า โฮเต็ลแอนด์รีสอร์ท">
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="font-semibold">ชื่อสถานประกอบการ (ภาษาอังกฤษ)</label>
                                            <input type="text" class="form-control" placeholder="ชื่อสถานประกอบการ (ภาษาอังกฤษ)" value="Villa Hotel and Resort">
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="font-semibold fullwidth">ชื่อสถานประกอบการ (ภาษาไทย) <div class="checkbox pull-right no-margin same-name"><input type="checkbox" id="same1"><label for="same1">ชื่อเดียวกับสถานประกอบการ</label></div></label>
                                            <input type="text" class="form-control" placeholder="ชื่อองค์กรหรือบริษัท (ภาษาไทย)" value="วิลล่า โฮเต็ลแอนด์รีสอร์ท">
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="font-semibold fullwidth">ชื่อองค์กรหรือบริษัท (ภาษาอังกฤษ) <div class="checkbox pull-right no-margin same-name"><input type="checkbox" id="same2"><label for="same2">ชื่อเดียวกับสถานประกอบการ</label></div></label>
                                            <input type="text" class="form-control" placeholder="ชื่อองค์กรหรือบริษัท (ภาษาอังกฤษ)" value="Villa Hotel and Resort">
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="font-semibold" >เลขทะเบียนนิติบุคคล 13 หลัก</label>
                                            <input type="text" class="form-control" placeholder="เลขทะเบียนนิติบุคคล 13 หลัก" value="0105561094601">
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="font-semibold">อีเมลติดต่อหลัก (ธุรกิจ)</label>
                                            <input type="text" class="form-control" placeholder="อีเมลติดต่อหลัก (ธุรกิจ)" value="info@villahotelandresort.com">
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="font-semibold">เบอร์โทรศัพท์</label>
                                            <input type="text" class="form-control" placeholder="เบอร์โทรศัพท์" value="080-000-0000">
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="font-semibold fullwidth">มาตรฐานที่ได้รับ</label>
                                            <div class="checkbox is-inline is-middle">
                                                <input type="checkbox" id="standard1">
                                                <label for="standard1">
                                                    TMVS <img src="assets/images/standard1.png">
                                                </label>
                                            </div>
                                            <div class="checkbox is-inline is-middle">
                                                <input type="checkbox" id="standard2">
                                                <label for="standard2">
                                                    AMVS <img src="assets/images/standard2.png">
                                                </label>
                                            </div>
                                            <p class="required">กรุณาเลือกข้อมูล</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="font-semibold fullwidth">อัพโหลดเอกสารยืนยันมาตรฐานที่ได้รับ <span class="font-regular">(สามารถอัพโหลดสูงสุดได้ 5 ไฟล์)</span></label> 
                                            <div class="upload-file">
                                                <div class="input">
                                                    <input type="file" accept=".pdf" multiple maxlength="5" maxsize="25">
                                                    <button type="button" class="btn btn-sm btn-orange">อัพโหลด์ไฟล์</button>
                                                    <p class="no-margin">PDF Max file : 25 MB</p>
                                                </div>
                                                <div class="text">
                                                    <div class="inner">
                                                        <span>เอกสารยืนยัน TMVS.pdf</span>
                                                        <i class="m-icon m-icon-close remove-file"></i>
                                                    </div>
                                                    <div class="inner">
                                                        <span>เอกสารยืนยัน AMVS.pdf</span>
                                                        <i class="m-icon m-icon-close remove-file"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="required">กรุณาอัพโหลดไฟล์</p>
                                        </div>
                                    </div>
                                </div>
                                <hr class="in-panel"/>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="font-semibold">ที่อยู่</label>
                                            <p>ใช้เพื่อเป็นข้อมูลแสดงผลในหน้าเว็บไซต์และเพื่อประเมินระยะเวลาในการเดินทางและช่วยแนะนำเส้นทางแก่ลูกค้าในอนาคต</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="font-semibold">ที่อยู่สถานประกอบการ (ภาษาไทย)</label>
                                            <input type="text" class="form-control" placeholder="เลขที่/อาคาร/ซอย">
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="font-semibold">ที่อยู่สถานประกอบการ (ภาษาอังกฤษ)</label>
                                            <input type="text" class="form-control" placeholder="Unit/Building/Valley">
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="font-semibold">รหัสไปรษณีย์</label>
                                            <input type="text" class="form-control" placeholder="รหัสไปรษณีย์">
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="font-semibold">จังหวัด</label>
                                            <div class="select fullwidth">
                                                <select class="form-control">
                                                    <option value="">เลือกจังหวัด</option>
                                                    <option value="">จังหวัด 1</option>
                                                    <option value="">จังหวัด 2</option>
                                                    <option value="">จังหวัด 3</option>
                                                </select>
                                                <span class="m-icon m-icon-dropdown"></span>
                                            </div>
                                            <p class="required">กรุณาเลือกข้อมูล</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="font-semibold">เขต/อำเภอ</label>
                                            <div class="select fullwidth">
                                                <select class="form-control">
                                                    <option value="">เลือกเขต/อำเภอ</option>
                                                    <option value="">อำเภอ 1</option>
                                                    <option value="">อำเภอ 2</option>
                                                    <option value="">อำเภอ 3</option>
                                                </select>
                                                <span class="m-icon m-icon-dropdown"></span>
                                            </div>
                                            <p class="required">กรุณาเลือกข้อมูล</p>
                                        </div>  
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="font-semibold">แขวง/ตำบล</label>
                                            <div class="select fullwidth">
                                                <select class="form-control">
                                                    <option value="">เลือกแขวง/ตำบล</option>
                                                    <option value="">ตำบล 1</option>
                                                    <option value="">ตำบล 2</option>
                                                    <option value="">ตำบล 3</option>
                                                </select>
                                                <span class="m-icon m-icon-dropdown"></span>
                                            </div>
                                            <p class="required">กรุณาเลือกข้อมูล</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label class="font-semibold">ระยะทางที่อยู่</label>
                                            <input type="text" class="form-control" placeholder="เช่น 100 เมตร ใกล้รถไฟฟ้า BTS นานา, ร้านติดริมถนน">
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label class="font-semibold">ยืนยันตำแหน่งของสถานประกอบการ</label>
                                            <div class="select-map">
                                                <button type="button" onclick="get_location();" class="btn btn-sm btn-blue font-semibold">เลือกจากพิกัด Google Map</button>
                                                <div class="map-box">
                                                    <div id="map"></div>
                                                </div>
                                            </div>
                                            <p class="required">กรุณาระบุพิกัด</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default mt25">
                            <div class="panel-heading">
                                <h3 class="font-semibold no-margin">คำบรรยายเชิงธุรกิจของสถานประกอบการ</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <label class="font-semibold fullwidth">คำที่ช่วยในการค้นหา Keyword</label>
                                            <input type="text" data-role="tagsinput" class="form-control" placeholder="Keyword">
                                            <p><small>สามารถใส่ Keyword ได้สูงสุด 20 คำ</small></p>
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                        <div class="form-group">
                                            <label  >คำอธิบายเพิ่มเติม (ภาษาไทย)</label>
                                            <div class="limit-char">
                                                <textarea class="form-control" rows="3" placeholder="คำอธิบายเพิ่มเติม (ภาษาไทย)" maxlength="600"></textarea>
                                                <div class="char"><span class="cnt">0</span>/600</div>
                                            </div>
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-semibold">คำอธิบายเพิ่มเติม (ภาษาอังกฤษ)</label>
                                            <div class="limit-char">
                                                <textarea class="form-control" rows="3" placeholder="คำอธิบายเพิ่มเติม (ภาษาอังกฤษ)" maxlength="600"></textarea>
                                                <div class="char"><span class="cnt">0</span>/600</div>
                                            </div>
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                        <div class="form-group">
                                            <label class="font-semibold">องค์กรที่ธุรกิจสังกัดอยู่</label>
                                            <input type="text" class="form-control" placeholder="องค์กรที่ธุรกิจสังกัดอยู่" value="">
                                            <p class="required">กรุณากรอกข้อมูล</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default mt25">
                            <div class="panel-heading">
                                <h3 class="font-semibold no-margin">อัพโหลดรูปภาพสำหรับแสดงในหน้าค้นหารายการ</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row is-small2">
                                    <div class="col col-sm-3 col-xs-12">
                                        <div class="upload-photo">
                                            <!-- <div class="preview" style="background-image: url('assets/images/ex-img.png')"></div> -->
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
                                        <p>ขนาดที่แนะนำ :<br/>500 x 550 px ไม่เกิน 3 MB</p>
                                    </div>
                                    <div class="col col-sm-9">
                                        <p class="font-semibold no-margin">ตัวอย่าง</p>
                                        <p>ตำแหน่งการแสดงรูปภาพสำหรับในหน้าค้นหารายการ</p>
                                        <img src="assets/images/ex.png" class="img-responsive hidden-mobile">
                                        <img src="assets/images/ex-mobile.png" class="img-responsive hidden-desktop">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="to-top">
                        <div class="inner">
                            <span class="glyphicon glyphicon-menu-up"></span>
                            <p>กลับขึ้น<br/>ด้านบน</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include "layout/footer.php" ?>
        <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABK4plFcFDYfEr1XhsMZ89bkloa182UrQ&callback=initMap"></script>
        <style>
            .gm-style .gm-style-iw-d{
                overflow: hidden !important;
            }
            .gm-style .gm-style-iw {
                background: #fbad26 !important;
                font-family: 'Kanit';
                font-weight: 600;
                font-size: 12px;
                line-height: 15px;
                color: #fff;
                padding: 10px !important;
                width: 120px;
                max-width: 80%;
                text-align: center;
            }
            .gm-style-iw button, .gm-style .gm-style-iw-t::after {
                display: none !important;
            }

            @media (max-width: 767px){
                .gmnoprint, .gm-fullscreen-control{
                    zoom: 0.45;
                }
            }
        </style>
        <script>
            var map, marker, infowindow;
            function initMap()
            {
                map = new google.maps.Map(document.getElementById('map'), {
                    center: {lat: -33.91722, lng: 151.23064},
                    zoom: 16
                });

                marker = new google.maps.Marker({
                    position: new google.maps.LatLng(-33.91722, 151.23064),
                    icon: 'assets/images/mark-orange.png',
                    map: map,
                    draggable: true,
                });

                infowindow = new google.maps.InfoWindow({
                    content: 'Your Location'
                });

                infowindow.open(map, marker);
            }

            function get_location()
            {
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude
                        };  

                        marker.setPosition(pos);
                        map.setCenter(pos);
                       
                    }, function() {
                        console.log('not point location current');
                    });
                } 
            }

            function search_tax_id()
            {
                $('.card-select').fadeIn(300);
            }
            function search_tax_detail()
            {
                $('#tax_detail').fadeIn(300);
            }
        </script>
    </body>
</html>