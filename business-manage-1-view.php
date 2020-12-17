<!DOCTYPE html>
<html>
    <head>
        <?php include "layout/head.php" ?>
    </head>
    <body>
        <?php include "layout/nav.php" ?>
        <div id="wrapper">
            <section class="post-page">
                <div class="container">
                    <div class="post-cover">
                        <ol class="breadcrumb">
                            <li><a href="index.php">หน้าแรก</a></li>
                            <li><a href="search.php">ประเภทธุรกิจไมซ์ทั้งหมด</a></li>
                            <li><a href="search.php">สถานที่จัดงาน</a></li>
                            <li class="active">Villa Hotel and Resort</li>
                        </ol>
                        <div class="post-slide">
                            <div class="item">
                                <div class="bg" style="background-image: url('assets/images/post-img1.png')"></div>
                            </div>
                            <div class="item">
                                <div class="bg" style="background-image: url('assets/images/post-img2.png')"></div>
                            </div>
                            <div class="item">
                                <div class="bg" style="background-image: url('assets/images/post-img3.png')"></div>
                            </div>
                            <div class="item">
                                <div class="bg" style="background-image: url('assets/images/post-img4.png')"></div>
                            </div>
                        </div>
                        <i class="post-like m-icon m-icon-like active" onclick="like(this)"></i>
                        <div class="post-logo" style="background-image: url('assets/images/post-logo.png')"></div>
                    </div>
                    <div class="post-title">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="star pull-left">
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                    <label>(40 รีวิว)</label>
                                </div>
                                <button type="button" class="btn btn-round btn-green2 pull-right btn-chat">
                                    <div class="text-icon is-middle">
                                        <i class="m-icon m-icon-chat-green"></i>
                                        <span class="font-semibold font-green">ตอบกลับภายใน 1 ชม.</span>
                                    </div>
                                </button>
                                <div class="clearfix"></div>
                                <h2 class="font-semibold no-margin">Villa Hotel and Resort</h2>
                                <p><small>โรงแรมและรีิสอร์ทที่มีพื้นที่ให้คุณสามารถจัดสรรได้อย่างเหมาะสม ด้วยห้องที่มีหลากหลายขนาดและรูปแบบ เหมาะสมกับการจัดกิจกรรมทั้งแบบกลุ่มเล็กและกลุ่มใหญ่ พร้อมทั้งสิ่งอำนวยความสะดวกมากมาย</small></p>
                                <ul>
                                    <li>
                                        <div class="text-icon">
                                            <i class="m-icon m-icon-location2"></i>
                                            <span>894 ถ.รัตนาธิเบศร์ ต.บางกระสอ อ.เมือง จ.นนทบุรี 11000</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="text-icon">
                                            <i class="m-icon m-icon-user"></i>
                                            <span>50 - 250 คน</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="text-icon">
                                            <i class="m-icon m-icon-meta"></i>
                                            <span>100 - 3,000 ตารางเมตร</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="text-icon">
                                            <i class="m-icon m-icon-near"></i>
                                            <span>ใกล้ BTS ชิดลม</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-sm-4">
                                <div class="btn-box btn-post-option">
                                    <button type="button" class="btn btn-lg btn-blue-linear" data-dismiss="modal" data-toggle="modal" data-target="#modal-quotation">
                                        <div class="text-icon">
                                            <i class="m-icon m-icon-docs"></i>
                                            <span>ขอใบเสนอราคา/เอกสารประกอบ</span>
                                        </div>
                                    </button>
                                    <a href="member-chat.php" class="btn btn-lg btn-default">
                                        <div class="text-icon">
                                            <i class="m-icon m-icon-chat"></i>
                                            <span>แชทกับผู้ให้บริการ</span>
                                        </div>
                                    </a>
                                    <button type="button" class="btn btn-lg btn-default" data-dismiss="modal" data-toggle="modal" data-target="#modal-vdocall">
                                        <div class="text-icon">
                                            <i class="m-icon m-icon-vdocall"></i>
                                            <span>Video Call (นัดหมาย)</span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="post-page bg-blue">
                <div class="container">
                    <div class="post-info">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="tab style-2 ">
                                    <ul class="nav nav-tabs">
                                        <li class="active"><a href="#tab-info1" aria-controls="tab-info1" role="tab" data-toggle="tab">ออแกไนเซอร์</a></li>
                                        <li><a href="#tab-info2" aria-controls="tab-info2" role="tab" data-toggle="tab">โปรโมชั่น</a></li>
                                    </ul>
                                    <div class="tab-content no-padding-bottom">
                                        <div role="tabpanel" class="tab-pane active" id="tab-info1">
                                            <div class="panel panel-default">
                                                <div class="panel-heading has-option">
                                                    <h3 class="font-semibold no-margin pull-left">ข้อมูลมาตรฐาน/รางวัลที่ได้รับ</h3>
                                                    <div class="logo pull-right">
                                                        <img src="assets/images/standard1.png">
                                                        <img src="assets/images/standard2.png">
                                                    </div>
                                                </div>
                                                <div class="panel-body mobile-list">
                                                    <div class="border-box">
                                                        <div class="form-group">
                                                            <label class="font-semibold no-margin">มาตรฐานที่ได้รับ (ภาษาไทย) </label>
                                                            <p>ISO20101</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="font-semibold no-margin">มาตรฐานที่ได้รับ (ภาษาอังกฤษ)</label>
                                                            <p>ISO20101</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="font-semibold no-margin">คำอธิบายมาตราฐานรางวัล (ภาษาไทย)</label>
                                                            <p>Event Sustainability Management Systems</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="font-semibold no-margin">คำอธิบายมาตราฐานรางวัล (ภาษาอังกฤษ)</label>
                                                            <p>Event Sustainability Management Systems</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="alert alert-info alert-custom">
                                                                <div class="text-icon for-list no-margin">
                                                                    <i class="m-icon m-icon-check-blue"></i>
                                                                    <span>เป็นมาตรฐาน/รางวัล ที่เกี่ยวข้องกับการพัฒนาอย่างยั่งยืน (Sustainable related reward)</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="font-semibold no-margin">หน่วยงานที่ให้การรับรอง (ภาษาไทย)</label>
                                                            <p>บริษัท จำกัด</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="font-semibold no-margin">หน่วยงานที่ให้การรับรอง (ภาษาอังกฤษ)</label>
                                                            <p>Lorem Ipsum Company</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="font-semibold no-margin">ปีที่ได้รับการรับรองมาตรฐาน</label>
                                                            <p>2019</p>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="font-semibold no-margin">ปีที่ได้รับการรับรองมาตรฐาน</label>
                                                            <p>2020</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="tab-info2">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h3 class="font-semibold no-margin">โปรโมชั่น</h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="form-group">
                                                        -
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 pull-right">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="font-semibold no-margin"><big>รายละเอียดอื่นๆ</big></h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="form-group">
                                            <p><b>เบอร์โทรศัพท์</b></p>
                                            <a href="#" class="text-icon is-middle for-list no-margin">
                                                <i class="m-icon m-icon-call"></i>
                                                <span class="font-link">โทรหาสถานที่</span>
                                            </a>
                                        </div>
                                        <div class="form-group">
                                            <p class="no-margin"><b>เว็บไซต์</b></p>
                                            <p><a href="www.vilaahotelresort.com" target="_blank">www.vilaahotelresort.com</a></p>
                                        </div>
                                        <div class="form-group">
                                            <p class="no-margin"><b>ชื่่อบัญชี Facebook/Page</b></p>
                                            <p>VillaHotelandresort</p>
                                        </div>
                                        <div class="form-group">
                                            <p class="no-margin"><b>ชื่อบัญชีผู้ใช้ Line</b></p>
                                            <p>@VillaHotelandresort</p>
                                        </div>
                                        <div class="form-group">
                                            <p class="no-margin"><b>วันทำการ</b></p>
                                            <p>จันทร์ - เสาร์</p>
                                        </div>
                                        <div class="form-group">
                                            <p class="no-margin"><b>เวลาเปิด-ปิดโดยประมาณ</b></p>
                                            <p>09.00 - 19.00 น.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-map">
                                    <h3 class="font-medium">แผนที่ตั้งสถานที่</h3>
                                    <div id="map-detail"></div>
                                </div>
                                <div class="post-action">
                                    <div class="share">
                                        <span class="font-medium">Share</span>
                                        <br/>
                                        <div class="social">
                                            <a href="#" target="_blank" class="inner"><i class="m-icon m-icon-fb"></i></a>
                                            <a href="#" target="_blank" class="inner"><i class="m-icon m-icon-tw"></i></a>
                                        </div>
                                    </div>
                                    <div class="tags">
                                        <span class="font-medium">Tag</span>
                                        <br/>
                                        <div class="tag">
                                            <a href="#" class="inner">จัดงาน</a>
                                            <a href="#" class="inner">ที่พักกรุงเทพ</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <div class="panel panel-default">
                                    <div class="panel-body no-padding">
                                        <div class="review">
                                            <div class="review-list">
                                                <h3 class="font-semibold">รีวิวจากผู้ใช้</h3>
                                                <div class="clearfix"></div>
                                                <div class="avg">4.8</div>
                                                <div class="star">
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star-empty"></span>
                                                    <label>(40 การรีวิว)</label>
                                                </div>
                                                <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-review" class="btn btn-md btn-review transform-middle">เขียนรีวิว</button>
                                            </div>
                                            <div class="review-list">
                                                <h3 class="font-semibold">สมศรี นามสกุลไพเราะ</h3>
                                                <div class="date">09/08/20</div>
                                                <div class="clearfix"></div>
                                                <div class="star">
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star-empty"></span>
                                                </div>
                                                <p>สถานที่ดีมากๆ เลยค่ะ พนักงานต้อนรับเป็นอย่างดี บริการประทับใจ</p>
                                            </div>
                                            <div class="review-list">
                                                <h3 class="font-semibold">สมศรี นามสกุลไพเราะ</h3>
                                                <div class="date">09/08/20</div>
                                                <div class="clearfix"></div>
                                                <div class="star">
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star-empty"></span>
                                                </div>
                                                <p>สถานที่ดีมากๆ เลยค่ะ พนักงานต้อนรับเป็นอย่างดี บริการประทับใจ</p>
                                            </div>
                                            <div class="review-list">
                                                <h3 class="font-semibold">สมศรี นามสกุลไพเราะ</h3>
                                                <div class="date">09/08/20</div>
                                                <div class="clearfix"></div>
                                                <div class="star">
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star-empty"></span>
                                                </div>
                                                <p>สถานที่ดีมากๆ เลยค่ะ พนักงานต้อนรับเป็นอย่างดี บริการประทับใจ</p>
                                            </div>
                                            <div class="review-list">
                                                <h3 class="font-semibold">สมศรี นามสกุลไพเราะ</h3>
                                                <div class="date">09/08/20</div>
                                                <div class="clearfix"></div>
                                                <div class="star">
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star-empty"></span>
                                                </div>
                                                <p>สถานที่ดีมากๆ เลยค่ะ พนักงานต้อนรับเป็นอย่างดี บริการประทับใจ</p>
                                            </div>
                                            <div class="review-list">
                                                <h3 class="font-semibold">สมศรี นามสกุลไพเราะ</h3>
                                                <div class="date">09/08/20</div>
                                                <div class="clearfix"></div>
                                                <div class="star">
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star"></span>
                                                    <span class="glyphicon glyphicon-star-empty"></span>
                                                </div>
                                                <p>สถานที่ดีมากๆ เลยค่ะ พนักงานต้อนรับเป็นอย่างดี บริการประทับใจ</p>
                                            </div>
                                        </div>
                                        <div class="loadmore">
                                            <div class="text-icon icon-right is-middle">
                                                <i class="m-icon m-icon-dropdown"></i>
                                                <span>แสดงเพิ่มเติม</span>
                                            </div>
                                        </div>
                                        <br/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="container">
                    <h2 class="font-blue no-margin-top">ธุรกิจที่เกี่ยวข้อง</h2>
                    <div class="post-related-slide owl-carousel">
                        <div class="item">
                            <div class="post style-3 shadow">
                                <div class="bg" style="background-image: url('assets/images/b1.png')"><i class="m-icon m-icon-like-white"></i></div>
                                <div class="text">
                                    <div class="head">
                                        <div class="star">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <label>(40 รีวิว)</label>
                                        </div>
                                        <h3>Pullman Bangkok Grande Sukhumvit</h3>
                                        <p>กรุงเทพมหานคร</p>
                                        <div class="guarantee">
                                            <img src="assets/images/logo-guarantee.png">
                                        </div>
                                        <div class="mode">
                                            <div class="inner is-orange">ที่พัก</div>
                                            <div class="inner is-purple">สถานที่จัดงาน</div>
                                            <div class="inner is-green">ออแกไนเซอร์</div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-xs-6">จำนวนห้องประชุม</div>
                                                <div class="col-xs-6">9 ห้อง</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ความจุ (คน)</div>
                                                <div class="col-xs-6">30 - 1,300 คน</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ขนาดพื้นที่ (ตร.ม.)</div>
                                                <div class="col-xs-6">75 - 1,367 ตร.ม.</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ระยะทาง</div>
                                                <div class="col-xs-6">120 ม. จาก BTS นานา</div>
                                            </div>
                                        </div>
                                        <div class="btn-box">
                                            <a href="search-map.php" class="btn btn-trans">ดูตำแหน่งในแผนที่</a>
                                            <a href="search-detail.php" class="btn btn-default">ดูข้อมูลสถานที่</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post style-3 shadow">
                                <div class="bg" style="background-image: url('assets/images/b2.png')"><i class="m-icon m-icon-like-white"></i></div>
                                <div class="text">
                                    <div class="head">
                                        <div class="star">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <label>(40 รีวิว)</label>
                                        </div>
                                        <h3>Pullman Bangkok Grande Sukhumvit</h3>
                                        <p>กรุงเทพมหานคร</p>
                                        <div class="guarantee">
                                            <img src="assets/images/logo-guarantee.png">
                                        </div>
                                        <div class="mode">
                                            <div class="inner is-orange">ที่พัก</div>
                                            <div class="inner is-purple">สถานที่จัดงาน</div>
                                            <div class="inner is-green">ออแกไนเซอร์</div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-xs-6">จำนวนห้องประชุม</div>
                                                <div class="col-xs-6">9 ห้อง</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ความจุ (คน)</div>
                                                <div class="col-xs-6">30 - 1,300 คน</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ขนาดพื้นที่ (ตร.ม.)</div>
                                                <div class="col-xs-6">75 - 1,367 ตร.ม.</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ระยะทาง</div>
                                                <div class="col-xs-6">120 ม. จาก BTS นานา</div>
                                            </div>
                                        </div>
                                        <div class="btn-box">
                                            <a href="search-map.php" class="btn btn-trans">ดูตำแหน่งในแผนที่</a>
                                            <a href="search-detail.php" class="btn btn-default">ดูข้อมูลสถานที่</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post style-3 shadow">
                                <div class="bg" style="background-image: url('assets/images/b3.png')"><i class="m-icon m-icon-like-white"></i></div>
                                <div class="text">
                                    <div class="head">
                                        <div class="star">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <label>(40 รีวิว)</label>
                                        </div>
                                        <h3>Pullman Bangkok Grande Sukhumvit</h3>
                                        <p>กรุงเทพมหานคร</p>
                                        <div class="guarantee">
                                            <img src="assets/images/logo-guarantee.png">
                                        </div>
                                        <div class="mode">
                                            <div class="inner is-orange">ที่พัก</div>
                                            <div class="inner is-purple">สถานที่จัดงาน</div>
                                            <div class="inner is-green">ออแกไนเซอร์</div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-xs-6">จำนวนห้องประชุม</div>
                                                <div class="col-xs-6">9 ห้อง</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ความจุ (คน)</div>
                                                <div class="col-xs-6">30 - 1,300 คน</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ขนาดพื้นที่ (ตร.ม.)</div>
                                                <div class="col-xs-6">75 - 1,367 ตร.ม.</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ระยะทาง</div>
                                                <div class="col-xs-6">120 ม. จาก BTS นานา</div>
                                            </div>
                                        </div>
                                        <div class="btn-box">
                                            <a href="search-map.php" class="btn btn-trans">ดูตำแหน่งในแผนที่</a>
                                            <a href="search-detail.php" class="btn btn-default">ดูข้อมูลสถานที่</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post style-3 shadow">
                                <div class="bg" style="background-image: url('assets/images/b4.png')"><i class="m-icon m-icon-like-white"></i></div>
                                <div class="text">
                                    <div class="head">
                                        <div class="star">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <label>(40 รีวิว)</label>
                                        </div>
                                        <h3>Pullman Bangkok Grande Sukhumvit</h3>
                                        <p>กรุงเทพมหานคร</p>
                                        <div class="guarantee">
                                            <img src="assets/images/logo-guarantee.png">
                                        </div>
                                        <div class="mode">
                                            <div class="inner is-orange">ที่พัก</div>
                                            <div class="inner is-purple">สถานที่จัดงาน</div>
                                            <div class="inner is-green">ออแกไนเซอร์</div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-xs-6">จำนวนห้องประชุม</div>
                                                <div class="col-xs-6">9 ห้อง</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ความจุ (คน)</div>
                                                <div class="col-xs-6">30 - 1,300 คน</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ขนาดพื้นที่ (ตร.ม.)</div>
                                                <div class="col-xs-6">75 - 1,367 ตร.ม.</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ระยะทาง</div>
                                                <div class="col-xs-6">120 ม. จาก BTS นานา</div>
                                            </div>
                                        </div>
                                        <div class="btn-box">
                                            <a href="search-map.php" class="btn btn-trans">ดูตำแหน่งในแผนที่</a>
                                            <a href="search-detail.php" class="btn btn-default">ดูข้อมูลสถานที่</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post style-3 shadow">
                                <div class="bg" style="background-image: url('assets/images/b5.png')"><i class="m-icon m-icon-like-white"></i></div>
                                <div class="text">
                                    <div class="head">
                                        <div class="star">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <label>(40 รีวิว)</label>
                                        </div>
                                        <h3>Pullman Bangkok Grande Sukhumvit</h3>
                                        <p>กรุงเทพมหานคร</p>
                                        <div class="guarantee">
                                            <img src="assets/images/logo-guarantee.png">
                                        </div>
                                        <div class="mode">
                                            <div class="inner is-orange">ที่พัก</div>
                                            <div class="inner is-purple">สถานที่จัดงาน</div>
                                            <div class="inner is-green">ออแกไนเซอร์</div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-xs-6">จำนวนห้องประชุม</div>
                                                <div class="col-xs-6">9 ห้อง</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ความจุ (คน)</div>
                                                <div class="col-xs-6">30 - 1,300 คน</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ขนาดพื้นที่ (ตร.ม.)</div>
                                                <div class="col-xs-6">75 - 1,367 ตร.ม.</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ระยะทาง</div>
                                                <div class="col-xs-6">120 ม. จาก BTS นานา</div>
                                            </div>
                                        </div>
                                        <div class="btn-box">
                                            <a href="search-map.php" class="btn btn-trans">ดูตำแหน่งในแผนที่</a>
                                            <a href="search-detail.php" class="btn btn-default">ดูข้อมูลสถานที่</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="bg-gray">
                <div class="container">
                    <h2 class="font-blue no-margin-top">เปรียบเทียบธุรกิจที่ใกล้เคียงกัน</h2>
                    <div class="post-related-slide owl-carousel">
                        <div class="item">
                            <div class="post style-3 shadow">
                                <div class="bg" style="background-image: url('assets/images/b6.png')"><i class="m-icon m-icon-like-white"></i></div>
                                <div class="text">
                                    <div class="head">
                                        <div class="star">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <label>(40 รีวิว)</label>
                                        </div>
                                        <h3>Pullman Bangkok Grande Sukhumvit</h3>
                                        <p>กรุงเทพมหานคร</p>
                                        <div class="guarantee">
                                            <img src="assets/images/logo-guarantee.png">
                                        </div>
                                        <div class="mode">
                                            <div class="inner is-orange">ที่พัก</div>
                                            <div class="inner is-purple">สถานที่จัดงาน</div>
                                            <div class="inner is-green">ออแกไนเซอร์</div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-xs-6">จำนวนห้องประชุม</div>
                                                <div class="col-xs-6">9 ห้อง</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ความจุ (คน)</div>
                                                <div class="col-xs-6">30 - 1,300 คน</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ขนาดพื้นที่ (ตร.ม.)</div>
                                                <div class="col-xs-6">75 - 1,367 ตร.ม.</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ระยะทาง</div>
                                                <div class="col-xs-6">120 ม. จาก BTS นานา</div>
                                            </div>
                                        </div>
                                        <div class="btn-box">
                                            <a href="search-map.php" class="btn btn-trans">ดูตำแหน่งในแผนที่</a>
                                            <a href="search-detail.php" class="btn btn-default">ดูข้อมูลสถานที่</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post style-3 shadow">
                                <div class="bg" style="background-image: url('assets/images/b7.png')"><i class="m-icon m-icon-like-white"></i></div>
                                <div class="text">
                                    <div class="head">
                                        <div class="star">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <label>(40 รีวิว)</label>
                                        </div>
                                        <h3>Pullman Bangkok Grande Sukhumvit</h3>
                                        <p>กรุงเทพมหานคร</p>
                                        <div class="guarantee">
                                            <img src="assets/images/logo-guarantee.png">
                                        </div>
                                        <div class="mode">
                                            <div class="inner is-orange">ที่พัก</div>
                                            <div class="inner is-purple">สถานที่จัดงาน</div>
                                            <div class="inner is-green">ออแกไนเซอร์</div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-xs-6">จำนวนห้องประชุม</div>
                                                <div class="col-xs-6">9 ห้อง</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ความจุ (คน)</div>
                                                <div class="col-xs-6">30 - 1,300 คน</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ขนาดพื้นที่ (ตร.ม.)</div>
                                                <div class="col-xs-6">75 - 1,367 ตร.ม.</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ระยะทาง</div>
                                                <div class="col-xs-6">120 ม. จาก BTS นานา</div>
                                            </div>
                                        </div>
                                        <div class="btn-box">
                                            <a href="search-map.php" class="btn btn-trans">ดูตำแหน่งในแผนที่</a>
                                            <a href="search-detail.php" class="btn btn-default">ดูข้อมูลสถานที่</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post style-3 shadow">
                                <div class="bg" style="background-image: url('assets/images/b8.png')"><i class="m-icon m-icon-like-white"></i></div>
                                <div class="text">
                                    <div class="head">
                                        <div class="star">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <label>(40 รีวิว)</label>
                                        </div>
                                        <h3>Pullman Bangkok Grande Sukhumvit</h3>
                                        <p>กรุงเทพมหานคร</p>
                                        <div class="guarantee">
                                            <img src="assets/images/logo-guarantee.png">
                                        </div>
                                        <div class="mode">
                                            <div class="inner is-orange">ที่พัก</div>
                                            <div class="inner is-purple">สถานที่จัดงาน</div>
                                            <div class="inner is-green">ออแกไนเซอร์</div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-xs-6">จำนวนห้องประชุม</div>
                                                <div class="col-xs-6">9 ห้อง</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ความจุ (คน)</div>
                                                <div class="col-xs-6">30 - 1,300 คน</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ขนาดพื้นที่ (ตร.ม.)</div>
                                                <div class="col-xs-6">75 - 1,367 ตร.ม.</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ระยะทาง</div>
                                                <div class="col-xs-6">120 ม. จาก BTS นานา</div>
                                            </div>
                                        </div>
                                        <div class="btn-box">
                                            <a href="search-map.php" class="btn btn-trans">ดูตำแหน่งในแผนที่</a>
                                            <a href="search-detail.php" class="btn btn-default">ดูข้อมูลสถานที่</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post style-3 shadow">
                                <div class="bg" style="background-image: url('assets/images/b9.png')"><i class="m-icon m-icon-like-white"></i></div>
                                <div class="text">
                                    <div class="head">
                                        <div class="star">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <label>(40 รีวิว)</label>
                                        </div>
                                        <h3>Pullman Bangkok Grande Sukhumvit</h3>
                                        <p>กรุงเทพมหานคร</p>
                                        <div class="guarantee">
                                            <img src="assets/images/logo-guarantee.png">
                                        </div>
                                        <div class="mode">
                                            <div class="inner is-orange">ที่พัก</div>
                                            <div class="inner is-purple">สถานที่จัดงาน</div>
                                            <div class="inner is-green">ออแกไนเซอร์</div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-xs-6">จำนวนห้องประชุม</div>
                                                <div class="col-xs-6">9 ห้อง</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ความจุ (คน)</div>
                                                <div class="col-xs-6">30 - 1,300 คน</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ขนาดพื้นที่ (ตร.ม.)</div>
                                                <div class="col-xs-6">75 - 1,367 ตร.ม.</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ระยะทาง</div>
                                                <div class="col-xs-6">120 ม. จาก BTS นานา</div>
                                            </div>
                                        </div>
                                        <div class="btn-box">
                                            <a href="search-map.php" class="btn btn-trans">ดูตำแหน่งในแผนที่</a>
                                            <a href="search-detail.php" class="btn btn-default">ดูข้อมูลสถานที่</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="post style-3 shadow">
                                <div class="bg" style="background-image: url('assets/images/b10.png')"><i class="m-icon m-icon-like-white"></i></div>
                                <div class="text">
                                    <div class="head">
                                        <div class="star">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <label>(40 รีวิว)</label>
                                        </div>
                                        <h3>Pullman Bangkok Grande Sukhumvit</h3>
                                        <p>กรุงเทพมหานคร</p>
                                        <div class="guarantee">
                                            <img src="assets/images/logo-guarantee.png">
                                        </div>
                                        <div class="mode">
                                            <div class="inner is-orange">ที่พัก</div>
                                            <div class="inner is-purple">สถานที่จัดงาน</div>
                                            <div class="inner is-green">ออแกไนเซอร์</div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-xs-6">จำนวนห้องประชุม</div>
                                                <div class="col-xs-6">9 ห้อง</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ความจุ (คน)</div>
                                                <div class="col-xs-6">30 - 1,300 คน</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ขนาดพื้นที่ (ตร.ม.)</div>
                                                <div class="col-xs-6">75 - 1,367 ตร.ม.</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ระยะทาง</div>
                                                <div class="col-xs-6">120 ม. จาก BTS นานา</div>
                                            </div>
                                        </div>
                                        <div class="btn-box">
                                            <a href="search-map.php" class="btn btn-trans">ดูตำแหน่งในแผนที่</a>
                                            <a href="search-detail.php" class="btn btn-default">ดูข้อมูลสถานที่</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br/>
            </section>
        </div>

        <div class="modal fade" id="modal-review" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body font-16 pd-40">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                        <form action="" method="post" class="form-quotation">
                            <h2 class="title-yelloow">รีวิวสถานประกอบการ</h2>
                            <div class="form-group">
                                <div class="input-score">
                                    <input type="hidden" name="" value="0">
                                    <div class="star">
                                        <span class="glyphicon glyphicon-star-empty"></span>
                                        <span class="glyphicon glyphicon-star-empty"></span>
                                        <span class="glyphicon glyphicon-star-empty"></span>
                                        <span class="glyphicon glyphicon-star-empty"></span>
                                        <span class="glyphicon glyphicon-star-empty"></span>
                                    </div>
                                </div>
                                <p class="required">กรุณาเลือกคะแนน</p>
                            </div>
                            <div class="form-group">
                                <label class="font-medium" style="margin-bottom: 10px;">แสดงความคิดเห็น</label>
                                <textarea rows="5" class="form-control" placeholder="แสดงความคิดเห็นเกี่ยวกับธุรกิจนี้"></textarea>
                                <p class="required">กรุณากรอกข้อมูล</p>
                            </div>
                            <div class="btn-box text-center">
                                <button type="button" data-dismiss="modal" class="btn btn-lg btn-blue-linear font-medium">ยืนยันข้อมูล</button>
                            </div>
                            <br/>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-quotation" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body font-16 pd-40">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                        <form action="" method="post" class="form-quotation">
                            <h2 class="title-yelloow">ขอใบเสนอราคา</h2>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-medium">จำนวนคนที่เข้าร่วม <span class="font-red">*</span></label>
                                        <input type="text" class="form-control" placeholder="ระบุจำนวนคน">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-medium">งบประมาณ (หากต้องการระบุ)</label>
                                        <input type="text" class="form-control" placeholder="ระบุงบประมาณในการจัดงาน">
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-medium">วันที่เริ่มงาน <span class="font-red">*</span></label>
                                        <div class="input-group is-calendar">
                                            <input type="text" class="form-control datepicker2" placeholder="DD/MM/YYYY">
                                            <span class="input-group-addon bg-custom b-0"><i class="m-icon m-icon-calendar"></i></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="font-medium">วันที่สิ้นสุดงาน <span class="font-red">*</span></label>
                                        <div class="input-group is-calendar">
                                            <input type="text" class="form-control datepicker2" placeholder="DD/MM/YYYY">
                                            <span class="input-group-addon bg-custom b-0"><i class="m-icon m-icon-calendar"></i></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                        <label class="font-medium">เวลา <span class="font-red">*</span></label>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="select fullwidth">
                                            <select class="form-control">
                                                <option value="">10.00</option>
                                            </select>
                                            <span class="m-icon m-icon-dropdown"></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-group">
                                        <div class="select fullwidth">
                                            <select class="form-control">
                                                <option value="">19.00</option>
                                            </select>
                                            <span class="m-icon m-icon-dropdown"></span>
                                        </div>
                                        <p class="required">กรุณาเลือกข้อมูล</p>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label class="font-medium">รายละเอียดอื่นๆ เพิ่มเติม</label>
                                        <textarea class="form-control" rows="5" placeholder="ระบุรายละเอียดที่ท่านต้องการเพื่อให้ผู้ประกอบการสามารถออกใบเสนอราคาได้อย่างครบถ้วน"></textarea>
                                        <p class="required">กรุณากรอกข้อมูล</p>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-center">
                                <button type="button" data-dismiss="modal" data-toggle="modal" data-target="#modal-quotation-success"  class="btn btn-lg btn-blue-linear font-medium">ขอใบเสนอราคา</button>
                            </div>
                            <br/>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-quotation-success" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body font-16 pd-40">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                        <div class="status-box">
                            <br/><br/>
                            <img src="assets/images/status-success.png">
                            <h2 class="font-medium">ระบบดำเนินการส่งคำขอใบเสนอราคาสำเร็จ</h2>
                            <p></p>
                            <div class="btn-box">
                                <a href="search.php" style="width:300px;" class="btn btn-lg btn-blue-linear">สนใจธุรกิจอื่นต่อ</a>
                                <br/><br/>
                                <a href="#" class="font-link font-medium">ดูประวัติการขอใบเสนอราคา</a>
                            </div>
                            <br/><br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-quotation-fail" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body font-16 mobile-font-16 pd-40">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                        <div class="status-box mobile-custom">
                            <br/><br/>
                            <img src="assets/images/status-fail.png">
                            <h2 class="font-medium">ระบบดำเนินการส่งคำขอใบเสนอราคา <b class="font-red font-semibold">ไม่สำเร็จ</b></h2>
                            <p class="font-medium">กรุณาทำรายการใหม่อีกครั้ง</p>
                            <div class="btn-box">
                                <a href="#" style="width:300px;" data-dismiss="modal" class="btn btn-lg btn-red">ทำรายการอีกครั้ง</a>
                            </div>
                            <br/><br/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="modal-vdocall" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body pd-40">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                        <form action="">
                            <h2 class="font-blue font-semibold no-margin">Video Call (นัดหมาย)</h2>
                            <p>ท่านสามารถเลือกรูปแบบการติดต่อหรือขอใบเสนอราคาผ่านการวิดีโอคอลสนทนากับผู้ประกอบการมากสุด 5 รายการคำขอ </p>
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label>เขตเวลา</label>
                                        <div class="select fullwidth">
                                            <select class="form-control">
                                                <option value="" selected>(UTC+07.00) Bangkok, Loas, Cambodia, Vietnam</option>
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
                                        <label>วันที่นัดหมาย</label>
                                        <div class="calendar-box">
                                            <div class="datepicker inline is-appointment"></div>   
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <br/>
                                    <div class="form-group">
                                        <div class="date-status">
                                            <div><big style="color:#D3322F;">&#9679;</big> วันนี้</div>
                                            <div><big style="color:#149D60;">&#9679;</big> วันที่สามารถนัดหมาย</div>
                                            <div><big style="color:#2170B8;">&#9679;</big> เลือกวันนัดหมาย</div>
                                        </div>
                                    </div>
                                    <hr/>
                                    <div class="form-group">
                                        <label>วันที่เลือกนัดหมาย</label>
                                        <p class="font-blue font-16 font-medium">26 มิ.ย. 2020</p>
                                    </div>
                                    <br/>
                                    <div class="form-group">
                                        <label>เวลา</label>
                                        <div class="radio-select">
                                            <div class="radio">
                                                <input type="radio" name="time" id="time-1">
                                                <label for="time-1">08.00 - 09.00</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="time-2">
                                                <label for="time-2">10.00 - 11.00</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="time-3">
                                                <label for="time-3">15.00 - 16.00</label>
                                            </div>
                                            <div class="radio">
                                                <input type="radio" name="time" id="time-4">
                                                <label for="time-4">16.00 - 17.00</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-sm-12">
                                    <br/>
                                    <div class="form-group">
                                        <label>รายละเอียดที่ต้องการสนทนากับผู้ประกอบการ</label>
                                        <div class="limit-char">
                                            <textarea class="form-control" rows="5" maxlength="1000" placeholder="ระบุรายละเอียดที่ท่านต้องการสนทนาเพื่อให้ผู้ประกอบการตัดสินใจตกลงนัดหมาย"></textarea>
                                            <div class="char"><span class="cnt">0</span>/1000</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="btn-box text-center">
                                <button type="button" data-dismiss="modal" style="width:300px;" class="btn btn-lg btn-blue-linear font-medium">ยืนยันข้อมูลการนัดหมาย</button>
                            </div>
                            <br/>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php include "layout/footer.php" ?>
        <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABK4plFcFDYfEr1XhsMZ89bkloa182UrQ&callback=initMap"></script>
        <script>
            function initMap()
            {
                var map = new google.maps.Map(document.getElementById('map-detail'), {
                    center: {lat: -33.91722, lng: 151.23064},
                    zoom: 16
                });

                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(-33.91722, 151.23064),
                    icon: {
                        url: "assets/images/mark-active.png",
                        scaledSize: new google.maps.Size(45, 45),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(0, 0)
                    },
                    map: map,
                });
            }

            function like(e)
            {
                $(e).toggleClass('active');
            }

            (function(){
                $('.datepicker.inline').datepicker({
                    multidate: true,
                    format: 'yyyy-mm-dd',
                    todayHighlight: true,
                    datesDisabled: ['2020-11-08','2020-11-13','2020-11-14']
                });

                if($(window).width() < 768)
                {
                    $('.post-slide').addClass('owl-carousel');
                    $('.post-slide').owlCarousel({
                        items: 1,
                        navText: ['<span class="glyphicon glyphicon-menu-left"></span>', '<span class="glyphicon glyphicon-menu-right"></span>'],
                        nav: true,
                        loop: false,
                        dots: true
                    });
                }
            })();
        </script>
    </body>
</html>