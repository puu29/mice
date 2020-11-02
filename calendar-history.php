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
                    <h2 class="no-margin">ปฏิทินงานไมซ์</h2>
                </div>
            </div>
            <section>
                <div class="container">
                    <div class="tab">
                        <ul class="nav nav-tabs">
                            <li><a href="calendar.php">กิจกรรมปัจจุบัน</a></li>
                            <li class="active"><a href="calendar-history.php">กิจกรรมที่ผ่านมา</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active">
                                <form action="" class="form-select">
                                    <h2 class="pull-left">กิจกรรมที่ผ่านมา</h2>
                                    <div class="pull-right">
                                        <div class="select">
                                            <select class="form-control">
                                                <option value="">ทุกเดือน</option>
                                                <option value="1">มกราคม</option>
                                                <option value="2">กุมภาพันธ์</option>
                                                <option value="3">มีนาคม</option>
                                                <option value="4">เมษายน</option>
                                                <option value="5">พฤษภาคม</option>
                                                <option value="6">มิถุนายน</option>
                                                <option value="7">กรกฎาคม</option>
                                                <option value="8">สิงหาคม</option>
                                                <option value="9">กันยายน</option>
                                                <option value="10">ตุลาคม</option>
                                                <option value="11">พฤศจิกายน</option>
                                                <option value="12">ธันวาคม</option>
                                            </select>
                                            <span class="glyphicon glyphicon-menu-down"></span>
                                        </div>
                                        <div class="select">
                                            <select class="form-control">
                                                <option value="">หมวดหมู่ทั้งหมด</option>
                                                <option value="หมวด 1">หมวด 1</option>
                                                <option value="หมวด 2">หมวด 2</option>
                                                <option value="หมวด 3">หมวด 3</option>
                                                <option value="หมวด 4">หมวด 4</option>
                                                <option value="หมวด 5">หมวด 5</option>
                                            </select>
                                            <span class="glyphicon glyphicon-menu-down"></span>
                                        </div>
                                    </div>
                                </form>
                                <div class="cards col-5">
                                    <a href="calendar-detail.php" class="card">
                                        <div class="img"><img src="assets/images/calendar1.png" class="img-responsive"></div>
                                        <div class="text">
                                            <p class="date font-blue">13 เม.ษ. 63 - 16 พ.ค. 63</p>
                                            <p class="desc font-semibold">การประชุมวิชาการระดับชาติด้านการพัฒนาการดำเนินงานทางอุตสาหกรรม ครั้งที่ 11 ประจำปี 2563</p>
                                            <p class="type font-semibold font-orange">Conference</p>
                                        </div>  
                                    </a>
                                    <a href="calendar-detail.php" class="card">
                                        <div class="img"><img src="assets/images/calendar2.png" class="img-responsive"></div>
                                        <div class="text">
                                            <p class="date font-blue">13 เม.ษ. 63 - 16 พ.ค. 63</p>
                                            <p class="desc font-semibold">อินดัสเทรียล ออโตเมชัน แอนด์ โรโบติกส์ อีเวนท์ (ไอเออาร์)</p>
                                            <p class="type font-semibold font-orange">Exhibition</p>
                                        </div>  
                                    </a>
                                    <a href="calendar-detail.php" class="card">
                                        <div class="img"><img src="assets/images/calendar3.png" class="img-responsive"></div>
                                        <div class="text">
                                            <p class="date font-blue">13 เม.ษ. 63 - 16 พ.ค. 63</p>
                                            <p class="desc font-semibold">งานสัมมนาประจำปีของบริษัทในเครือปีที่ 28</p>
                                            <p class="type font-semibold font-orange">Conference</p>
                                        </div>  
                                    </a>
                                    <a href="calendar-detail.php" class="card">
                                        <div class="img"><img src="assets/images/calendar4.png" class="img-responsive"></div>
                                        <div class="text">
                                            <p class="date font-blue">13 เม.ษ. 63 - 16 พ.ค. 63</p>
                                            <p class="desc font-semibold">อินดัสเทรียล ออโตเมชัน แอนด์ โรโบติกส์ อีเวนท์ (ไอเออาร์)</p>
                                            <p class="type font-semibold font-orange">Conference</p>
                                        </div>  
                                    </a>
                                    <a href="calendar-detail.php" class="card">
                                        <div class="img"><img src="assets/images/calendar5.png" class="img-responsive"></div>
                                        <div class="text">
                                            <p class="date font-blue">13 เม.ษ. 63 - 16 พ.ค. 63</p>
                                            <p class="desc font-semibold">การประชุมวิชาการระดับชาติด้านการพัฒนาการดำเนินงานทางอุตสาหกรรม ครั้งที่ 11 ประจำปี 2563</p>
                                            <p class="type font-semibold font-orange">Conference</p>
                                        </div>  
                                    </a>
                                    <a href="calendar-detail.php" class="card">
                                        <div class="img"><img src="assets/images/calendar6.png" class="img-responsive"></div>
                                        <div class="text">
                                            <p class="date font-blue">13 เม.ษ. 63 - 16 พ.ค. 63</p>
                                            <p class="desc font-semibold">การประชุมวิชาการระดับชาติด้านการพัฒนาการดำเนินงานทางอุตสาหกรรม ครั้งที่ 11 ประจำปี 2563</p>
                                            <p class="type font-semibold font-orange">Conference</p>
                                        </div>  
                                    </a>
                                    <a href="calendar-detail.php" class="card">
                                        <div class="img"><img src="assets/images/calendar7.png" class="img-responsive"></div>
                                        <div class="text">
                                            <p class="date font-blue">13 เม.ษ. 63 - 16 พ.ค. 63</p>
                                            <p class="desc font-semibold">อินดัสเทรียล ออโตเมชัน แอนด์ โรโบติกส์ อีเวนท์ (ไอเออาร์)</p>
                                            <p class="type font-semibold font-orange">Exhibition</p>
                                        </div>  
                                    </a>
                                    <a href="calendar-detail.php" class="card">
                                        <div class="img"><img src="assets/images/calendar8.png" class="img-responsive"></div>
                                        <div class="text">
                                            <p class="date font-blue">13 เม.ษ. 63 - 16 พ.ค. 63</p>
                                            <p class="desc font-semibold">การประชุมวิชาการระดับชาติด้านการพัฒนาการดำเนินงานทางอุตสาหกรรม ครั้งที่ 11 ประจำปี 2563</p>
                                            <p class="type font-semibold font-orange">Conference</p>
                                        </div>  
                                    </a>
                                    <a href="calendar-detail.php" class="card">
                                        <div class="img"><img src="assets/images/calendar9.png" class="img-responsive"></div>
                                        <div class="text">
                                            <p class="date font-blue">13 เม.ษ. 63 - 16 พ.ค. 63</p>
                                            <p class="desc font-semibold">งานสัมมนาประจำปีของบริษัทในเครือปีที่ 28</p>
                                            <p class="type font-semibold font-orange">Conference</p>
                                        </div>  
                                    </a>
                                    <a href="calendar-detail.php" class="card">
                                        <div class="img"><img src="assets/images/calendar10.png" class="img-responsive"></div>
                                        <div class="text">
                                            <p class="date font-blue">13 เม.ษ. 63 - 16 พ.ค. 63</p>
                                            <p class="desc font-semibold">งานสัมมนาประจำปีของบริษัทในเครือปีที่ 28</p>
                                            <p class="type font-semibold font-orange">Conference</p>
                                        </div>  
                                    </a>
                                    <a href="calendar-detail.php" class="card">
                                        <div class="img"><img src="assets/images/calendar11.png" class="img-responsive"></div>
                                        <div class="text">
                                            <p class="date font-blue">13 เม.ษ. 63 - 16 พ.ค. 63</p>
                                            <p class="desc font-semibold">การประชุมวิชาการระดับชาติด้านการพัฒนาการดำเนินงานทางอุตสาหกรรม ครั้งที่ 11 ประจำปี 2563</p>
                                            <p class="type font-semibold font-orange">Conference</p>
                                        </div>  
                                    </a>
                                    <a href="calendar-detail.php" class="card">
                                        <div class="img"><img src="assets/images/calendar12.png" class="img-responsive"></div>
                                        <div class="text">
                                            <p class="date font-blue">13 เม.ษ. 63 - 16 พ.ค. 63</p>
                                            <p class="desc font-semibold">อินดัสเทรียล ออโตเมชัน แอนด์ โรโบติกส์ อีเวนท์ (ไอเออาร์)</p>
                                            <p class="type font-semibold font-orange">Exhibition</p>
                                        </div>  
                                    </a>
                                    <a href="calendar-detail.php" class="card">
                                        <div class="img"><img src="assets/images/calendar13.png" class="img-responsive"></div>
                                        <div class="text">
                                            <p class="date font-blue">13 เม.ษ. 63 - 16 พ.ค. 63</p>
                                            <p class="desc font-semibold">งานสัมมนาประจำปีของบริษัทในเครือปีที่ 28</p>
                                            <p class="type font-semibold font-orange">Conference</p>
                                        </div>  
                                    </a>
                                    <a href="calendar-detail.php" class="card">
                                        <div class="img"><img src="assets/images/calendar14.png" class="img-responsive"></div>
                                        <div class="text">
                                            <p class="date font-blue">13 เม.ษ. 63 - 16 พ.ค. 63</p>
                                            <p class="desc font-semibold">การประชุมวิชาการระดับชาติด้านการพัฒนาการดำเนินงานทางอุตสาหกรรม ครั้งที่ 11 ประจำปี 2563</p>
                                            <p class="type font-semibold font-orange">Conference</p>
                                        </div>  
                                    </a>
                                    <a href="calendar-detail.php" class="card">
                                        <div class="img"><img src="assets/images/calendar15.png" class="img-responsive"></div>
                                        <div class="text">
                                            <p class="date font-blue">13 เม.ษ. 63 - 16 พ.ค. 63</p>
                                            <p class="desc font-semibold">งานสัมมนาประจำปีของบริษัทในเครือปีที่ 28</p>
                                            <p class="type font-semibold font-orange">Conference</p>
                                        </div>  
                                    </a>
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