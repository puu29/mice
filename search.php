<!DOCTYPE html>
<html>
    <head>
        <?php include "layout/head.php" ?>
    </head>
    <body>
        <?php include "layout/nav.php" ?>
        <div id="wrapper">
            <section class="search-page no-padding">
                <div class="head">
                    <div class="container">
                        <div class="search-from">
                            <p class="no-margin">ค้นหาจาก</p>
                            <h2 class="font-blue">สถานที่จัดงาน</h2>
                        </div>
                        <div class="search-action">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="total">ทั้งหมด 85 รายการ</div>
                                </div>
                                <div class="col-sm-6 text-center">
                                    <div class="btn-toolbar" role="toolbar">
                                        <div class="btn-group btn-blue hidden-desktop" onclick="filter_open()">
                                            <div class="text-icon is-middle">
                                                <i class="m-icon m-icon-filter"></i>
                                                <span>ค้นหาละเอียด</span>
                                            </div>
                                        </div>
                                        <div class="btn-group active">
                                            <a href="search.php" class="text-icon is-middle">
                                                <i class="m-icon m-icon-list"></i>
                                                <span>ดูแบบรายการ</span>
                                            </a>
                                        </div>
                                        <div class="btn-group">
                                            <a href="search-map.php" class="text-icon is-middle">
                                                <i class="m-icon m-icon-location"></i>
                                                <span>ดูแบบแผนที่</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-3 text-right">
                                    <div class="select border-under">
                                        <select class="form-control">
                                            <option value="">ที่เราแนะนำ</option>
                                        </select>
                                        <span class="glyphicon glyphicon-triangle-bottom"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <div class="container">
                        <div class="filter">
                            <div class="bg-filter" onclick="filter_close()"></div>
                            <form action="" id="form-filter" method="post">
                                <div class="action-top">
                                    <h3 class="no-margin pull-left">ค้นหาละเอียด</h3>
                                    <i class="m-icon m-icon-close-blue m-icon-20 pull-right" onclick="filter_close()"></i>
                                </div>
                                <div class="form-group">
                                    <div class="input-icon">
                                        <i class="m-icon m-icon-search"></i>
                                        <input type="text" class="form-control" placeholder="ค้นหาจากชื่อสถานที่">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>ประเภทธุรกิจ</label>
                                    <div class="select fullwidth">
                                        <select class="form-control">
                                            <option value="">สถานที่จัดงาน</option>
                                        </select>
                                        <span class="glyphicon glyphicon-menu-down"></span>
                                    </div>
                                </div>
                                <div class="form-group no-margin">
                                    <label>TMVS (Thailand MICE Venue Standard)</label>
                                    <div class="checkbox">
                                        <input type="checkbox" id="tmvs-1" checked>
                                        <label for="tmvs-1">CONVENTION CENTERS</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="tmvs-2">
                                        <label for="tmvs-2">Hotels / Resorts</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="tmvs-3">
                                        <label for="tmvs-3">Public / Private Sectors</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>ประเภทงาน</label>
                                    <div class="select fullwidth">
                                        <select class="form-control">
                                            <option value="">งานสัมมนา</option>
                                        </select>
                                        <span class="glyphicon glyphicon-menu-down"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>ที่ตั้งสถานที่จัดงาน</label>
                                    <div class="input-icon">
                                        <i class="m-icon m-icon-search"></i>
                                        <input type="text" class="form-control" placeholder="กรุงเทพมหานคร">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>สิ่งอำนวยความสะดวกการเดินทาง</label>
                                    <div class="checkbox is-inline">
                                        <input type="checkbox" id="btn">
                                        <label for="btn">ใกล้ BTS</label>
                                    </div>
                                    <div class="checkbox is-inline">
                                        <input type="checkbox" id="mrt">
                                        <label for="mrt">ใกล้ MRT</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>ขนาดพื้นที่ (ตร.ม.)</label>
                                    <div class="slider-box">
                                        <input type="text" value="0" class="form-control slider-start" disabled>
                                        <input type="text" value="650" class="form-control slider-end" disabled>
                                        <div class="slider slider-default">
                                            <input type="text" data-plugin="range-slider" data-slider-value="[0, 650]" data-slider-step="10" data-slider-max="1000" data-slider-min="0" value="" data-slider-selection="after">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>จำนวนคน</label>
                                    <div class="slider-box">
                                        <input type="text" value="0" class="form-control slider-start" disabled>
                                        <input type="text" value="650" class="form-control slider-end" disabled>
                                        <div class="slider slider-default">
                                            <input type="text" data-plugin="range-slider" data-slider-value="[0, 650]" data-slider-step="10" data-slider-max="1000" data-slider-min="0" value="" data-slider-selection="after">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="checkbox is-inline">
                                        <input type="checkbox" id="stand">
                                        <label for="stand">ยืน</label>
                                    </div>
                                    <div class="checkbox is-inline">
                                        <input type="checkbox" id="sit">
                                        <label for="sit">นั่ง</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>ประเภทสถานที่จัดงาน</label>
                                    <div class="checkbox">
                                        <input type="checkbox" id="venue-1">
                                        <label for="venue-1">โรงแรม</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="venue-2">
                                        <label for="venue-2">Co-Working Space</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="venue-3">
                                        <label for="venue-3">ร้านอาหาร</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="venue-4">
                                        <label for="venue-4">ลานกิจกรรม/กลางแจ้ง</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="venue-5">
                                        <label for="venue-5">ห้องประชุม</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="venue-6">
                                        <label for="venue-6">สตูดิโอ</label>
                                    </div>
                                    <div class="checkbox">
                                        <input type="checkbox" id="venue-7">
                                        <label for="venue-7">อื่นๆ ระบุ</label>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="result no-margin">
                            <div class="search-filter">
                                <span><big>ตัวกรอง :</big>&nbsp;&nbsp;</span>
                                <div class="selected" id="selected">
                                    <div class="inner">
                                        <div class="text-icon">
                                            <i class="m-icon m-icon-close-white" onclick="remove_selected(this)"></i>
                                            <span>CONVENTION CENTERS</span>
                                        </div>
                                    </div>
                                    <div class="reset" onclick="reset()">ล้างตัวกรอง</div>
                                </div>
                            </div>
                            <div class="search-result">
                                <div class="post">
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
                                            <h3>โรงแรมปริ๊นซ์ พาเลซ</h3>
                                            <p>กรุงเทพมหานคร</p>
                                            <div class="mode">
                                                <div class="inner is-orange">ที่พัก</div>
                                                <div class="inner is-purple">สถานที่จัดงาน</div>
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
                                <div class="post">
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
                                            <h3>โรงแรมปริ๊นซ์ พาเลซ</h3>
                                            <p>กรุงเทพมหานคร</p>
                                            <div class="mode">
                                                <div class="inner is-orange">ที่พัก</div>
                                                <div class="inner is-purple">สถานที่จัดงาน</div>
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
                                <div class="post">
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
                                            <h3>โรงแรมปริ๊นซ์ พาเลซ</h3>
                                            <p>กรุงเทพมหานคร</p>
                                            <div class="mode">
                                                <div class="inner is-orange">ที่พัก</div>
                                                <div class="inner is-purple">สถานที่จัดงาน</div>
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
                                <div class="post">
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
                                            <h3>โรงแรมปริ๊นซ์ พาเลซ</h3>
                                            <p>กรุงเทพมหานคร</p>
                                            <div class="mode">
                                                <div class="inner is-orange">ที่พัก</div>
                                                <div class="inner is-purple">สถานที่จัดงาน</div>
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
                                <div class="post">
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
                                            <h3>โรงแรมปริ๊นซ์ พาเลซ</h3>
                                            <p>กรุงเทพมหานคร</p>
                                            <div class="mode">
                                                <div class="inner is-orange">ที่พัก</div>
                                                <div class="inner is-purple">สถานที่จัดงาน</div>
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
                                <div class="post">
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
                                            <h3>โรงแรมปริ๊นซ์ พาเลซ</h3>
                                            <p>กรุงเทพมหานคร</p>
                                            <div class="mode">
                                                <div class="inner is-orange">ที่พัก</div>
                                                <div class="inner is-purple">สถานที่จัดงาน</div>
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
                                <div class="post">
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
                                            <h3>โรงแรมปริ๊นซ์ พาเลซ</h3>
                                            <p>กรุงเทพมหานคร</p>
                                            <div class="mode">
                                                <div class="inner is-orange">ที่พัก</div>
                                                <div class="inner is-purple">สถานที่จัดงาน</div>
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
                                <div class="post">
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
                                            <h3>โรงแรมปริ๊นซ์ พาเลซ</h3>
                                            <p>กรุงเทพมหานคร</p>
                                            <div class="mode">
                                                <div class="inner is-orange">ที่พัก</div>
                                                <div class="inner is-purple">สถานที่จัดงาน</div>
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
                                <div class="post">
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
                                            <h3>โรงแรมปริ๊นซ์ พาเลซ</h3>
                                            <p>กรุงเทพมหานคร</p>
                                            <div class="mode">
                                                <div class="inner is-orange">ที่พัก</div>
                                                <div class="inner is-purple">สถานที่จัดงาน</div>
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
                                <div class="post">
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
                                            <h3>โรงแรมปริ๊นซ์ พาเลซ</h3>
                                            <p>กรุงเทพมหานคร</p>
                                            <div class="mode">
                                                <div class="inner is-orange">ที่พัก</div>
                                                <div class="inner is-purple">สถานที่จัดงาน</div>
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
                </div>
            </section>
        </div>
        <?php include "layout/footer.php" ?>
        <script>
            function reset()
            {
                $('#form-filter')[0].reset();
                $('#selected .inner').remove();
                $('#selected').hide();
            }

            (function(){
                $('#form-filter input[type="checkbox"]').change(function(){
                    set_selected();
                });

                if($(window).width() < 768)
                {
                    $('.post').addClass('style-3');
                }

                $(window).resize(function(){
                    if($(window).width() < 768)
                    {
                        $('.post').addClass('style-3');
                    }
                });
            })();

            function set_selected()
            {
                $('#selected .inner').remove();
                $('#form-filter input[type="checkbox"]').each(function(){
                    var checked = $(this).prop('checked');
                    var html = $(this).next('label').html();
                    if(checked)
                    {
                        $('#selected .reset').before(`<div class="inner">
                                                        <div class="text-icon">
                                                            <i class="m-icon m-icon-close-white onclick="remove_selected(this)"></i>
                                                            <span>${html}</span>
                                                        </div>
                                                    </div>`);
                        $('#selected').show();
                    }
                });
            }

            function remove_selected(e)
            {
                $(e).parents('.inner').remove();
                if($('#selected .inner').length == 0)
                {
                    $('#selected').hide();
                }
                else
                {
                    $('#selected').show();
                }
            }

            function filter_open()
            {
                $('.filter').addClass('open');
            }

            function filter_close()
            {
                $('.filter').removeClass('open');
            }
        </script>
    </body>
</html>