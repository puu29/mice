<!DOCTYPE html>
<html>
    <head>
        <?php include "layout/head.php" ?>
    </head>
    <body>
        <?php include "layout/nav.php" ?>
        <div id="wrapper">
            <section class="no-padding banner-search">
                <div class="banner owl-carousel">
                    <div class="item">
                        <div class="banner-box">
                            <div class="bg" style="background-image: url('assets/images/home-banner1.png')"></div>
                            <div class="text">
                                <i class="m-icon m-icon-building"></i>
                                <h3>สถานที่จัดงาน</h3>
                                <button type="button" onclick="open_search_short(this)" class="btn btn-block btn-md btn-blue">ค้นหาสถานที่</button>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="banner-box">
                            <div class="bg" style="background-image: url('assets/images/home-banner2.png')"></div>
                            <div class="text">
                                <i class="m-icon m-icon-organizer"></i>
                                <h3>ออแกไนเซอร์</h3>
                                <button type="button" onclick="open_search_short(this)" class="btn btn-block btn-md btn-blue">ค้นหาออแกไนเซอร์</button>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="banner-box">
                            <div class="bg" style="background-image: url('assets/images/home-banner3.png')"></div>
                            <div class="text">
                                <i class="m-icon m-icon-map"></i>
                                <h3>ท่องเที่ยว/นำเที่ยว</h3>
                                <button type="button" onclick="open_search_short(this)" class="btn btn-block btn-md btn-blue">ค้นหาสถานที่ท่องเที่ยว</button>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="banner-box">
                            <div class="bg" style="background-image: url('assets/images/home-banner4.png')"></div>
                            <div class="text">
                                <i class="m-icon m-icon-bed"></i>
                                <h3>ที่พัก</h3>
                                <button type="button" onclick="open_search_short(this)" class="btn btn-block btn-md btn-blue">ค้นหาที่พัก</button>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="banner-box">
                            <div class="bg is-blue" style="background-image: url('assets/images/home-banner5.png')"></div>
                            <div class="text transform-middle">
                                <h3>ให้เราช่วยคุณวางแผน<br/>การจัดงานด้วยระบบอัตโนมัติ</h3>
                                <p>ระบบการจับคู่อัตโนมัติจะช่วยให้ท่าน<br/>สามารถเจอกับสถานประกอบการที่ตรง<br/>กับความต้องการของท่านมากที่สุด </p>
                                <button type="button" onclick="banner_show('match')" class="btn btn-block btn-md btn-orange">จับคู่เลยตอนนี้</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="no-padding banner-match" style="display: none;">
                <div class="banner owl-carousel">
                    <div class="item">
                        <div class="banner-box">
                            <div class="bg" style="background-image: url('assets/images/home-banner6.png')"></div>
                            <div class="text">
                                <i class="m-icon m-icon-building"></i>
                                <h3>รูปแบบการจัดประชุม</h3>
                                <a href="member-plan-auto.php" class="btn btn-block btn-md btn-blue">เลือกการจับคู่</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="banner-box">
                            <div class="bg" style="background-image: url('assets/images/home-banner7.png')"></div>
                            <div class="text">
                                <i class="m-icon m-icon-organizer"></i>
                                <h3>รูปแบบกิจกรรม CSR </h3>
                                <a href="member-plan-auto.php" class="btn btn-block btn-md btn-blue">เลือกการจับคู่</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="banner-box">
                            <div class="bg" style="background-image: url('assets/images/home-banner8.png')"></div>
                            <div class="text">
                                <i class="m-icon m-icon-map"></i>
                                <h3>รูปแบบจัดอบรม/ศึกษาดูงาน</h3>
                                <a href="member-plan-auto.php" class="btn btn-block btn-md btn-blue">เลือกการจับคู่</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="banner-box">
                            <div class="bg" style="background-image: url('assets/images/home-banner9.png')"></div>
                            <div class="text">
                                <i class="m-icon m-icon-bed"></i>
                                <h3>รูปแบบ Team Building</h3>
                                <a href="member-plan-auto.php" class="btn btn-block btn-md btn-blue">เลือกการจับคู่</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="banner-box">
                            <div class="bg is-orange" style="background-image: url('assets/images/home-banner10.png')"></div>
                            <div class="text transform-middle">
                                <h3>มองหาสถานประกอบการ<br/>ในการจัดกิจกรรม</h3>
                                <p>ระบบจะช่วยให้ท่านหาสถานประกอบการ<br/>ในแต่ละประเภทธุรกิจให้รวดเร็วยิ่งขึ้นด้วยการ<br/>ช่วยคัดกรองจากข้อมูลของท่าน</p>
                                <button type="button" onclick="banner_show('search')" class="btn btn-block btn-md btn-blue">ค้นหาเลย</button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="short-search">
                <div class="container">
                    <div class="head">
                        <h3 class="no-margin">สถานที่จัดงาน</h3>
                        <i class="m-icon m-icon-close-blue" onclick="close_search_short()"></i>
                    </div>
                    <div class="body">
                        <form action="search.php" method="post">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>ประเภทการจัดงาน</label>
                                        <div class="select fullwidth">
                                            <select class="form-control">
                                                <option value="">เลือกประเภทการจัดงาน</option>
                                            </select>
                                            <span class="glyphicon glyphicon-menu-down"></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>สถานที่</label>
                                        <div class="input-icon">
                                            <input type="text" class="form-control" placeholder="ค้นหาสถานที่">
                                            <i class="m-icon m-icon-location2 m-icon-black"></i>
                                        </div>
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label>จำนวนคน</label>
                                        <input type="text" data-mask="00000" class="form-control" placeholder="จำนวนคนเข้าร่วม">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label><br/></label>
                                        <button type="submit" class="btn btn-md btn-block btn-orange shadow">ค้นหาเลย</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <section class="hidden-desktop">
                <div class="under-banner banner-search">
                    <div class="bg is-blue" style="background-image: url('assets/images/home-banner5.png')"></div>
                    <div class="text">
                        <h3 class="no-margin-top">ให้เราช่วยคุณวางแผน<br/>การจัดงานด้วยระบบอัตโนมัติ</h3>
                        <p>ระบบการจับคู่อัตโนมัติจะช่วยให้ท่าน<br/>สามารถเจอกับสถานประกอบการที่ตรง<br/>กับความต้องการของท่านมากที่สุด </p>
                        <button type="button" onclick="$('.banner-search, .short-search').hide(); $('.banner-match').show();" class="btn btn-minwidth btn-md btn-orange">จับคู่เลยตอนนี้</button>
                    </div>
                </div>
                <div class="under-banner banner-match" style="display: none;">
                    <div class="bg is-orange" style="background-image: url('assets/images/home-banner10.png')"></div>
                    <div class="text">
                        <h3>มองหาสถานประกอบการ<br/>ในการจัดกิจกรรม</h3>
                        <p>ระบบจะช่วยให้ท่านหาสถานประกอบการ<br/>ในแต่ละประเภทธุรกิจให้รวดเร็วยิ่งขึ้นด้วยการ<br/>ช่วยคัดกรองจากข้อมูลของท่าน</p>
                        <button type="button" onclick="$('.banner-search').show(); $('.banner-match, .short-search').hide();" class="btn btn-minwidth btn-md btn-blue">ค้นหาเลย</button>
                    </div>
                </div>
            </section>

            <section>
                <div class="container">
                    <h2 class="no-margin-top text-center">ธุรกิจไมซ์อื่นๆ</h2>
                    <br/>
                    <div class="slide-mice owl-carousel">
                        <div class="item">
                            <div class="bg" style="background-image: url('assets/images/home-mice1.png')"></div>
                            <div class="text text-middle">บริการสนับสนุนการจัดงาน</div>
                        </div>
                        <div class="item">
                            <div class="bg" style="background-image: url('assets/images/home-mice2.png')"></div>
                            <div class="text text-middle">วิทยากร</div>
                        </div>
                        <div class="item">
                            <div class="bg" style="background-image: url('assets/images/home-mice3.png')"></div>
                            <div class="text text-middle">ร้านค้า/สินค้า</div>
                        </div>
                        <div class="item">
                            <div class="bg" style="background-image: url('assets/images/home-mice4.png')"></div>
                            <div class="text text-middle">โชว์/แสดง</div>
                        </div>
                        <div class="item">
                            <div class="bg" style="background-image: url('assets/images/home-mice5.png')"></div>
                            <div class="text text-middle">อาหารและเครื่องดื่ม</div>
                        </div>
                        <div class="item">
                            <div class="bg" style="background-image: url('assets/images/home-mice6.png')"></div>
                            <div class="text text-middle">การเดินทาง</div>
                        </div>
                        <div class="item">
                            <div class="bg" style="background-image: url('assets/images/home-mice1.png')"></div>
                            <div class="text text-middle">บริการสนับสนุนการจัดงาน</div>
                        </div>
                        <div class="item">
                            <div class="bg" style="background-image: url('assets/images/home-mice2.png')"></div>
                            <div class="text text-middle">วิทยากร</div>
                        </div>
                        <div class="item">
                            <div class="bg" style="background-image: url('assets/images/home-mice3.png')"></div>
                            <div class="text text-middle">ร้านค้า/สินค้า</div>
                        </div>
                        <div class="item">
                            <div class="bg" style="background-image: url('assets/images/home-mice4.png')"></div>
                            <div class="text text-middle">โชว์/แสดง</div>
                        </div>
                        <div class="item">
                            <div class="bg" style="background-image: url('assets/images/home-mice5.png')"></div>
                            <div class="text text-middle">อาหารและเครื่องดื่ม</div>
                        </div>
                        <div class="item">
                            <div class="bg" style="background-image: url('assets/images/home-mice6.png')"></div>
                            <div class="text text-middle">การเดินทาง</div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <h2 class="no-margin-top text-center">ทำไมผู้จัดงานต้องเลือก <br class="hidden-desktop" /><span class="font-blue">Thai MICE Connect<span></h2>
                    <div class="how">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="how-box">
                                    <img src="assets/images/home-how1.png">
                                    <h3>ครบครัน จบ ในที่เดียว</h3>
                                    <p>สามารถค้นหาผู้ประกอบการในการจัดกิจกรรมไมซ์ได้ในที่เดียว</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="how-box">
                                    <img src="assets/images/home-how2.png">
                                    <h3>พูดคุยกับสถานประกอบการได้โดยตรง</h3>
                                    <p>หากต้องการสอบถามรายละเอียดเพิ่มเติมสามารถเลือกช่องทางการพูดคุยได้หลากหลาย</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="how-box">
                                    <img src="assets/images/home-how3.png">
                                    <h3>ไม่มีค่าบริการเพิ่มเติม</h3>
                                    <p>ระบบไม่มีค่าคิดค่าใช้จ่ายใดๆ ในการให้บริการ</p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="how-box">
                                    <img src="assets/images/home-how4.png">
                                    <h3>จับคู่กับผู้ประกอบการให้คุณได้</h3>
                                    <p>ระบบสามารถจับคู่ความต้องการในการจัดกิจกรรมไมซ์ได้ เพียงแค่กรอกรายละเอียดต่างๆ ก็รอรับใบเสนอราคาได้เลย</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="method">
                    <div class="container">
                        <div class="row is-reverse">
                            <div class="col col-sm-6">
                                <div class="vdo">
                                    <div class="img">
                                        <img src="assets/images/vdo.png">
                                        <i class="m-icon m-icon-vdo"></i>
                                    </div>
                                    <iframe src="https://www.youtube.com/embed/SFmRQBsIPE8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col col-sm-6">
                                <div class="text">
                                    <h2>ขั้นตอนการใช้งานสำหรับผู้จัดงาน</h2>
                                    <div class="method-list">
                                        <div class="text-icon">
                                            <img src="assets/images/method1.svg">
                                            <span>เพิ่มข้อมูลธุรกิจเบื้องต้นของท่านเข้าสู่ระบบ</span>
                                        </div>
                                        <div class="text-icon">
                                            <img src="assets/images/method2.svg">
                                            <span>เพิ่มเติมข้อมูลรายละเอียดของธุรกิจเพื่อเพิ่มโอกาสให้ผู้จัดงานสามารถค้นหาเจอได้มากขึ้น</span>
                                        </div>
                                        <div class="text-icon">
                                            <img src="assets/images/method3.svg">
                                            <span>รอรับการขอใบเสนอราคาจากผู้จัดงาน</span>
                                        </div>
                                        <div class="text-icon">
                                            <img src="assets/images/method4.svg">
                                            <span>ส่งใบเสนอราคาผ่านทางระบบ</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="no-padding-top">
                <div class="container">
                    <h2 class="pull-left font-gray">สถานที่ยอดนิยมสำหรับกิจกรรมไมซ์</h2>
                    <div class="select border-under pull-right">
                        <select class="form-control bg-trans">
                            <option value="">ทั้งหมด</option>
                            <option value="">สถานที่ 1</option>
                            <option value="">สถานที่ 2</option>
                            <option value="">สถานที่ 3</option>
                        </select>
                        <span class="glyphicon glyphicon-menu-down"></span>
                    </div>
                    <div class="clearfix"></div>
                    <div class="slide-location owl-carousel">
                        <div class="item">
                            <a href="search.php" class="inner">
                                <div class="bg" style="background-image: url('assets/images/home-location1.png')"></div>
                                <div class="text text-middle">เชียงใหม่</div>
                            </a>
                            <a href="search.php" class="inner">
                                <div class="bg" style="background-image: url('assets/images/home-location2.png')"></div>
                                <div class="text text-middle">สุราษฎร์ธานี</div>
                            </a>
                            <a href="search.php" class="inner">
                                <div class="bg" style="background-image: url('assets/images/home-location3.png')"></div>
                                <div class="text text-middle">ชลบุรี</div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="search.php" class="inner">
                                <div class="bg" style="background-image: url('assets/images/home-location4.png')"></div>
                                <div class="text text-middle">กรุงเทพมหานคร</div>
                            </a>
                            <a href="search.php" class="inner">
                                <div class="bg" style="background-image: url('assets/images/home-location5.png')"></div>
                                <div class="text text-middle">นครศรีธรรมราช</div>
                            </a>
                            <a href="search.php" class="inner">
                                <div class="bg" style="background-image: url('assets/images/home-location6.png')"></div>
                                <div class="text text-middle">ขอนแก่น</div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="search.php" class="inner">
                                <div class="bg" style="background-image: url('assets/images/home-location1.png')"></div>
                                <div class="text text-middle">เชียงใหม่</div>
                            </a>
                            <a href="search.php" class="inner">
                                <div class="bg" style="background-image: url('assets/images/home-location2.png')"></div>
                                <div class="text text-middle">สุราษฎร์ธานี</div>
                            </a>
                            <a href="search.php" class="inner">
                                <div class="bg" style="background-image: url('assets/images/home-location3.png')"></div>
                                <div class="text text-middle">ชลบุรี</div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="search.php" class="inner">
                                <div class="bg" style="background-image: url('assets/images/home-location4.png')"></div>
                                <div class="text text-middle">กรุงเทพมหานคร</div>
                            </a>
                            <a href="search.php" class="inner">
                                <div class="bg" style="background-image: url('assets/images/home-location5.png')"></div>
                                <div class="text text-middle">นครศรีธรรมราช</div>
                            </a>
                            <a href="search.php" class="inner">
                                <div class="bg" style="background-image: url('assets/images/home-location6.png')"></div>
                                <div class="text text-middle">ขอนแก่น</div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <h2 class="pull-left no-margin-top">โปรโมชั่นพิเศษ</h2>
                    <a href="news-promotion.php" class="pull-right btn btn-default btn-all">ดูทั้งหมด</a>
                    <div class="clearfix"></div>
                    <div class="promotion">
                        <div class="row is-small mobile-slide">
                            <div class="item col col-md-3 col-sm-6">
                                <div class="promotion-box">
                                    <div class="head clearfix">
                                        <div class="bg" style="background-image: url('assets/images/pro-user1.png')"></div>
                                        <div class="text">
                                            <p class="no-margin"><b>บริษัท วีดู เอเจนซี่ จำกัด</b></p>
                                            <p>พุธ 22 เม.ษ. 63</p>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <img src="assets/images/home-pro1.png">
                                        <p><b>เจอกัน ที่ งานไทยเที่ยวไทย ครั้งที่ 54 วันที่ 5 - 8 มีนาคม 2563 พิเศษ!! ลด แจก เพิ่ม จากราคาในโบรชัวร์</b></p>
                                        <p>สนใจสอบถามทางบริษัท วีดู เอเจนซี จำกัดได้นะคะ ทางเรามีบริการจัดงาน จัดหาและวางแผนให้ตั้งแต่ต้นจนจบ</p>
                                        <a href="news-detail.php" class="btn btn-sm btn-default btn-more">ดูเพิ่มเติม</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item col col-md-3 col-sm-6">
                                <div class="promotion-box">
                                    <div class="head clearfix">
                                        <div class="bg" style="background-image: url('assets/images/pro-user2.png')"></div>
                                        <div class="text">
                                            <p class="no-margin"><b>บริษัท วีดู เอเจนซี่ จำกัด</b></p>
                                            <p>พุธ 22 เม.ษ. 63</p>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <img src="assets/images/home-pro2.png">
                                        <p><b>เจอกัน ที่ งานไทยเที่ยวไทย ครั้งที่ 54 วันที่ 5 - 8 มีนาคม 2563 พิเศษ!! ลด แจก เพิ่ม จากราคาในโบรชัวร์</b></p>
                                        <p>สนใจสอบถามทางบริษัท วีดู เอเจนซี จำกัดได้นะคะ ทางเรามีบริการจัดงาน จัดหาและวางแผนให้ตั้งแต่ต้นจนจบ</p>
                                        <a href="news-detail.php" class="btn btn-sm btn-default btn-more">ดูเพิ่มเติม</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item col col-md-3 col-sm-6">
                                <div class="promotion-box">
                                    <div class="head clearfix">
                                        <div class="bg" style="background-image: url('assets/images/pro-user3.png')"></div>
                                        <div class="text">
                                            <p class="no-margin"><b>บริษัท วีดู เอเจนซี่ จำกัด</b></p>
                                            <p>พุธ 22 เม.ษ. 63</p>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <img src="assets/images/home-pro3.png">
                                        <p><b>เจอกัน ที่ งานไทยเที่ยวไทย ครั้งที่ 54 วันที่ 5 - 8 มีนาคม 2563 พิเศษ!! ลด แจก เพิ่ม จากราคาในโบรชัวร์</b></p>
                                        <p>สนใจสอบถามทางบริษัท วีดู เอเจนซี จำกัดได้นะคะ ทางเรามีบริการจัดงาน จัดหาและวางแผนให้ตั้งแต่ต้นจนจบ</p>
                                        <a href="news-detail.php" class="btn btn-sm btn-default btn-more">ดูเพิ่มเติม</a>
                                    </div>
                                </div>
                            </div>
                            <div class="item col col-md-3 col-sm-6">
                                <div class="promotion-box">
                                    <div class="head clearfix">
                                        <div class="bg" style="background-image: url('assets/images/pro-user4.png')"></div>
                                        <div class="text">
                                            <p class="no-margin"><b>บริษัท วีดู เอเจนซี่ จำกัด</b></p>
                                            <p>พุธ 22 เม.ษ. 63</p>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <img src="assets/images/home-pro4.png">
                                        <p><b>เจอกัน ที่ งานไทยเที่ยวไทย ครั้งที่ 54 วันที่ 5 - 8 มีนาคม 2563 พิเศษ!! ลด แจก เพิ่ม จากราคาในโบรชัวร์</b></p>
                                        <p>สนใจสอบถามทางบริษัท วีดู เอเจนซี จำกัดได้นะคะ ทางเรามีบริการจัดงาน จัดหาและวางแผนให้ตั้งแต่ต้นจนจบ</p>
                                        <a href="news-detail.php" class="btn btn-sm btn-default btn-more">ดูเพิ่มเติม</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="no-padding">
                <div class="container">
                    <div class="home-news">
                        <div class="bg" style="background-image: url('assets/images/home-news-bg.png')"></div>
                        <div class="text">
                            <h2 class="no-margin">ข่าวสารจากธุรกิจ</h2>
                            <p class="no-margin">ติดตามข่าวสารจากธุรกิจแต่ละประเภทเพื่อไม่ให้พลาดข่าวสารล่าสุด</p>
                            <br/>
                            <a href="news.php" class="btn btn-sm btn-default btn-more">ดูข่าวสาร</a>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <h2 class="pull-left no-margin-top">ไมซ์อัพเดท</h2>
                    <a href="article.php" class="pull-right btn btn-default btn-all">ดูทั้งหมด</a>
                    <div class="clearfix"></div>
                    <div class="tab">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#tab-article" aria-controls="tab-article" role="tab" data-toggle="tab">บทความไมซ์</a></li>
                            <li><a href="#tab-vdo" aria-controls="tab-vdo" role="tab" data-toggle="tab">วิดีโอไมซ์</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="tab-article">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <a href="article-detail.php" class="article">
                                            <img class="img-responsive" src="assets/images/home-art1.png">
                                            <h3>Destinations International และ PATA กับการสนับสนุน จุดหมายปลายทาง ในสถานการณ์โควิด-19</h3>
                                            <div class="date">22/06/2020</div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="article-detail.php" class="article">
                                            <img class="img-responsive" src="assets/images/home-art2.png">
                                            <h3>คำแนะนำจากสมาคม การประชุมนานาชาติ (ICCA) ในสถานการณ์ โควิด-19</h3>
                                            <div class="date">22/06/2020</div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="article-detail.php" class="article">
                                            <img class="img-responsive" src="assets/images/home-art3.png">
                                            <h3>พาเที่ยวไปกับ Adely ทริปสำหรับวัยเก๋า ที่พร้อมดูแลทุกคนในทริป ราวกับคนในครอบครัว</h3>
                                            <div class="date">22/06/2020</div>
                                        </a>
                                    </div>
                                </div> 
                            </div>
                            <div role="tabpanel" class="tab-pane" id="tab-vdo">
                                <div class="row article-box no-margin-top">
                                    <div class="col-sm-4 ">
                                        <a href="https://www.youtube.com/watch?v=SFmRQBsIPE8" class="article">
                                            <div class="img"><img class="img-responsive" src="assets/images/art-vdo1.png"><i class="m-icon m-icon-vdo"></i></div>
                                            <div class="text"><h3>กิจกรรมการจัดงานประชุมนานาชาติประจำปี 2020 ณ อิมแพคเมืองทองธานี</h3></div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="https://www.youtube.com/watch?v=SFmRQBsIPE8" class="article">
                                            <div class="img"><img class="img-responsive" src="assets/images/art-vdo2.png"><i class="m-icon m-icon-vdo"></i></div>
                                            <div class="text"><h3>กิจกรรมการจัดงานประชุมนานาชาติประจำปี 2020 ณ อิมแพคเมืองทองธานี</h3></div>
                                        </a>
                                    </div>
                                    <div class="col-sm-4">
                                        <a href="https://www.youtube.com/watch?v=SFmRQBsIPE8" class="article">
                                            <div class="img"><img class="img-responsive" src="assets/images/art-vdo3.png"><i class="m-icon m-icon-vdo"></i></div>
                                            <div class="text"><h3>กิจกรรมการจัดงานประชุมนานาชาติประจำปี 2020 ณ อิมแพคเมืองทองธานี</h3></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="home-calendar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-5">
                            <div class="calendar-box">
                                <div class="datepicker inline"></div>   
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-7">
                            <h2 class="pull-left">ปฏิทินกิจกรรม</h2>
                            <a href="calendar.php" class="pull-right btn btn-default btn-all hidden-mobile">ดูทั้งหมด</a>
                            <div class="clearfix"></div>
                            <div class="calendar-detail scroll-custom">
                                <div class="inner" data-date="2020-11-08">
                                    <div class="date"><span>8</span><br/><span>พ.ย. 63</span></div>
                                    <div class="text">
                                        <h3 class="no-margin-top font-semibold">การประชุมวิชาการระดับชาติด้านการพัฒนาการดำเนินงานทางอุตสาหกรรม ครั้งที่ 11 ประจำปี 2563</h3>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="no-margin"><b>สถานที่จัดงาน</b></p>
                                                <p>ศูนย์นิทรรศการและการประชุม ไบเทค</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="no-margin"><b>เวลา</b></p>
                                                <p>10.00 - 19.00 น.</p>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                                <div class="inner" data-date="2020-11-13">
                                    <div class="date"><span>13</span><br/><span>พ.ย. 63</span></div>
                                    <div class="text">
                                        <h3 class="no-margin-top font-semibold">การประชุมวิชาการระดับชาติด้านการพัฒนาการดำเนินงานทางอุตสาหกรรม ครั้งที่ 11 ประจำปี 2563</h3>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="no-margin"><b>สถานที่จัดงาน</b></p>
                                                <p>ศูนย์นิทรรศการและการประชุม ไบเทค</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="no-margin"><b>เวลา</b></p>
                                                <p>10.00 - 19.00 น.</p>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                                <div class="inner" data-date="2020-11-14">
                                    <div class="date"><span>14</span><br/><span>พ.ย. 63</span></div>
                                    <div class="text">
                                        <h3 class="no-margin-top font-semibold">การประชุมวิชาการระดับชาติด้านการพัฒนาการดำเนินงานทางอุตสาหกรรม ครั้งที่ 11 ประจำปี 2563</h3>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="no-margin"><b>สถานที่จัดงาน</b></p>
                                                <p>ศูนย์นิทรรศการและการประชุม ไบเทค</p>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="no-margin"><b>เวลา</b></p>
                                                <p>10.00 - 19.00 น.</p>
                                            </div>
                                        </div>  
                                    </div>
                                </div>
                            </div>
                            <div class="text-center hidden-desktop">
                                <br/><br/>
                                <a href="calendar.php" class="bg-trans btn btn-default btn-all">ดูทั้งหมด</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="subscribe">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <h2 class="no-margin">ติดตามข่าวสาร</h2>
                            <p><big>รับข่าวสารข้อมูลและข่าวสารสิทธิพิเศษได้ก่อนใคร</big></p>
                        </div>
                        <div class="col-sm-7">
                            <form action="" method="post">
                                <div class="form-group">
                                    <div class="input-group shadow">
                                        <input type="text" class="form-control no-border" placeholder="กรอกอีเมลของท่านที่นี่">
                                        <div class="input-group-addon no-padding">
                                            <button type="submit" class="btn btn-blue-dark font-semibold">สมัครรับข่าวสาร</button>
                                        </div>
                                    </div>
                                    <p class="required">* กรุณากรอกข้อมูล</p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include "layout/footer.php" ?>
        <script>
            (function(){
                var active_dates = ['2020-11-08','2020-11-13','2020-11-14'];
                var tips = ['some description', 'some other description', 'some other'];
                $('.datepicker.inline').datepicker({
                    multidate: true,
                    format: 'yyyy-mm-dd',
                    beforeShowDay: function(date){
                        var d = date;
                        var curr_date = d.getDate() < 10 ? '0'+d.getDate() : d.getDate();
                        var curr_month = d.getMonth() + 1;
                        var curr_year = d.getFullYear();
                        var formattedDate = curr_year + "-" + curr_month + "-" + curr_date;

                        if ($.inArray(formattedDate, active_dates) != -1){
                            return {
                                classes: 'highlight'
                            };
                        }
                        return;
                    }
                }).on('changeDate', function(e) {
                    var position = $('.calendar-detail .inner[data-date="'+e.format()+'"]').position();
                    $('.calendar-detail').stop().animate({
                        scrollTop: position.top
                    }, 'fast');
                });
                
                // mockup focus month 11
                $(".datepicker.inline").datepicker("setDate", '2020-11-01');

                $('.article-box').magnificPopup({
                    delegate: 'a',
                    disableOn: 700,
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false
                });
            })();

            function open_search_short(e)
            {
                var title = $(e).parent().find('h3').html();
                $('.short-search h3').html(title);
                $('.short-search').hide().slideDown();
            }

            function close_search_short(e)
            {
                $('.short-search').slideUp();
            }

            function banner_show(val)
            {
                if(val == 'match')
                {
                    $('.banner-search, .short-search').hide(); 
                    $('.banner-match').show();
                    window.scrollTo(0,0);
                }
                else
                {
                    $('.banner-match').hide(); 
                    $('.banner-search').show();
                    window.scrollTo(0,0);
                }
            }


            $('.short-search .m-icon').click(function(){
                $(this).parents('.short-search').slideUp(300);
            });
        </script>
    </body>
</html>