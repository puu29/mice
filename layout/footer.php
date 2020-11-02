<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="footer-detail">
                    <img class="logo" src="assets/images/logo-white.svg">
                    <div class="social">
                        <a href="#" target="_blank" class="inner"><i class="m-icon m-icon-white m-icon-fb"></i></a>
                        <a href="#" target="_blank" class="inner"><i class="m-icon m-icon-white m-icon-tw"></i></a>
                        <a href="#" target="_blank" class="inner"><i class="m-icon m-icon-white m-icon-yt"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <ul class="footer-menu">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">กิจกรรมไมซ์ <span class="glyphicon glyphicon-menu-down"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="news.php">ข่าวสารจากธุรกิจ</a></li>
                            <li><a href="plan.php">วางแผนการจัดงานไมซ์</a></li>
                            <li><a href="calendar.php">ปฎิทินไมซ์</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">เกี่ยวกับ Thai MICE <span class="glyphicon glyphicon-menu-down"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="about.php">เกี่ยวกับ Thai MICE Connect</a></li>
                            <li><a href="article.php">บทความไมซ์</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">ติดต่อ <span class="glyphicon glyphicon-menu-down"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="faq.php">คำถามที่พบบ่อย</a></li>
                            <li><a href="contact.php">ติดต่อเรา</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="col-sm-12">
                <div class="copyright">Copyright © THAI MICE CONNECT by Thailand Convention & Exhibition Bureau. All Rights Reserved.</div>
            </div>
        </div>
    </div>
</footer>
<div id="loading"><div class="icon"></div></div>

<div class="modal fade" id="modal-event" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md pos-middle" role="document">
        <div class="modal-content">
            <div class="modal-body no-padding">
                <div class="popup-vdo">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue m-icon-white"></i></button>
                    <div class="vdo">
                        <div class="img">
                            <img src="assets/images/vdo.png">
                            <i class="m-icon m-icon-vdo"></i>
                        </div>
                        <iframe src="https://www.youtube.com/embed/SFmRQBsIPE8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-login" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body no-padding">
                <div class="regis-box">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                    <div class="">
                        <div class="row">
                            <div class="col-sm-5 text-right">
                                <br/><br/>
                                <img class="img" src="assets/images/login.png" width="400">
                            </div>
                            <div class="col-sm-7">
                                <br/>
                                <form action="index.php?login=1" method="post">
                                    <h2 class="text-center font-blue font-semibold no-margin-top">เข้าสู่ระบบเพื่อทำรายการต่อ</h2>
                                    <div class="row">
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="form-group">
                                                <label class="pull-left">อีเมล</label>
                                                <input type="text" class="form-control" placeholder="example@email.com">
                                                <p class="required">กรุณากรอกข้อมูล</p>
                                            </div>
                                        </div>
                                        <div class="col-md-8 col-md-offset-2">
                                            <div class="form-group">
                                                <label class="pull-left">รหัสผ่าน</label>
                                                <a class="pull-right font-link font-black" href="forget.php">ลืมรหัสผ่าน</a>
                                                <div class="action-showpass">
                                                    <input type="password" class="form-control" placeholder="ใส่รหัสผ่านของท่าน">
                                                    <i class="m-icon m-icon-eye"></i>
                                                </div>
                                                <p class="required">กรุณากรอกข้อมูล</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 text-center">
                                            <div class="form-group">
                                                <br/>
                                                <button type="submit" class="btn btn-md btn-blue-linear btn-minwidth">เข้าสู่ระบบ</button>
                                                <div class="mask">ยังไม่เคยเป็นสมาชิก <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-register" class="font-link">สมัครสมาชิก</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="or"><span>หรือ</span></div>
                                <div class="regis-social">
                                    <div class="row is-small">
                                        <div class="col col-sm-4">
                                            <button class="btn btn-block btn-md btn-blue-dark">
                                                <div class="text-icon is-middle">
                                                    <i class="m-icon m-icon-fb m-icon-white"></i>
                                                    <span>เข้าสู่ระบบด้วย facebook</span>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="col col-sm-4">
                                            <button class="btn btn-block btn-md btn-yellow">
                                                <div class="text-icon is-middle">
                                                    <i class="m-icon m-icon-phone m-icon-white"></i>
                                                    <span>เข้าสู่ระบบด้วยเบอร์โทรศัพท์</span>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="col col-sm-4">
                                            <button class="btn btn-block btn-md btn-green">
                                                <div class="text-icon is-middle">
                                                    <i class="m-icon m-icon-line m-icon-white"></i>
                                                    <span>เข้าสู่ระบบด้วย Line</span>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br/><br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal-register" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-body no-padding">
                <div class="regis-box">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="m-icon m-icon-close-blue"></i></button>
                    <div class="">
                        <div class="row">
                            <div class="col-sm-5 text-right">
                                <br/><br/><br/><br/>
                                <img class="img" src="assets/images/register.png" width="400">
                            </div>
                            <div class="col-sm-7">
                                <br/><br/>
                                <form action="index.php?login=1" method="post">
                                    <h2 class="text-center font-blue font-semibold no-margin-top">สมัครสมาชิก</h2>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>ชื่อ</label>
                                                <input type="text" class="form-control" placeholder="ชื่อของท่าน">
                                                <p class="required">กรุณากรอกข้อมูล</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>สกุล</label>
                                                <input type="text" class="form-control" placeholder="นามสกุลของท่าน">
                                                <p class="required">กรุณากรอกข้อมูล</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <label>อีเมล</label>
                                                <input type="text" class="form-control" placeholder="example@email.com">
                                                <p class="required">กรุณากรอกข้อมูล</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>รหัสผ่าน</label>
                                                <div class="action-showpass">
                                                    <input type="password" class="form-control" placeholder="ใส่รหัสผ่านของท่าน">
                                                    <i class="m-icon m-icon-eye"></i>
                                                </div>
                                                <p class="required">กรุณากรอกข้อมูล</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label>ยืนยันรหัสผ่าน</label>
                                                <div class="action-showpass">
                                                    <input type="password" class="form-control" placeholder="ยืนยันรหัสผ่านอีกครั้ง">
                                                    <i class="m-icon m-icon-eye"></i>
                                                </div>
                                                <p class="required">กรุณากรอกข้อมูล</p>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 text-center">
                                            <div class="form-group">
                                                <br/>
                                                <button type="submit" class="btn btn-md btn-blue-linear btn-minwidth">สมัครสมาชิก</button>
                                                <div class="mask">เคยเป็นสมาชิกอยู่แล้ว <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal-login" class="font-link">เข้าสู่ระบบ</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="or"><span>หรือ</span></div>
                                <div class="regis-social">
                                    <div class="row is-small">
                                        <div class="col col-sm-4">
                                            <button class="btn btn-block btn-md btn-blue-dark">
                                                <div class="text-icon is-middle">
                                                    <i class="m-icon m-icon-fb m-icon-white"></i>
                                                    <span>สมัครด้วย facebook</span>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="col col-sm-4">
                                            <button class="btn btn-block btn-md btn-yellow">
                                                <div class="text-icon is-middle">
                                                    <i class="m-icon m-icon-phone m-icon-white"></i>
                                                    <span>สมัครด้วยเบอร์โทรศัพท์</span>
                                                </div>
                                            </button>
                                        </div>
                                        <div class="col col-sm-4">
                                            <button class="btn btn-block btn-md btn-green">
                                                <div class="text-icon is-middle">
                                                    <i class="m-icon m-icon-line m-icon-white"></i>
                                                    <span>สมัครด้วย Line</span>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <br/><br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="popup" id="search">
    <div class="container">
        <div class="popup-bg" onclick="close_search()"></div>
        <div class="popup-search">
            <div class="row">
                <div class="col-sm-9">
                    <div class="form-search">
                        <input type="text" class="form-control" placeholder="ค้นหาชื่อสถานที่, ชื่อธุรกิจ, ประเภทธุรกิจ">
                        <i class="m-icon m-icon-close-blue m-icon-white btn-close"></i>
                        <i class="m-icon m-icon-search m-icon-white btn-search"></i>
                    </div>
                    <div class="autocomplete">
                        <div class="auto-text">
                            <label>คำที่เคยค้นหา</label>
                            <div class="inner">
                                <p><b>กร</b>ะบี่</p>
                                <p><b>กรุ</b>งเทพมหานคร</p>
                                <p>โรงแรม<b>กรี</b>นแลนด์</p>
                            </div>
                        </div>
                        <div class="auto-list">
                            <a href="search-detail.php" class="inner">
                                <p><b>กรุงศรีโฮเต็ล</b></p>
                                <p>กรุงเทพ, สถานที่จัดงาน</p>
                            </a>
                            <a href="search-detail.php" class="inner">
                                <p><b>กรุงศรีโฮเต็ล</b></p>
                                <p>กรุงเทพ, สถานที่จัดงาน</p>
                            </a>
                            <a href="search-detail.php" class="inner">
                                <p><b>กรุงศรีโฮเต็ล</b></p>
                                <p>กรุงเทพ, สถานที่จัดงาน</p>
                            </a>
                            <a href="search-detail.php" class="inner">
                                <p><b>กรุงศรีโฮเต็ล</b></p>
                                <p>กรุงเทพ, สถานที่จัดงาน</p>
                            </a>
                            <a href="search-detail.php" class="inner">
                                <p><b>กรุงศรีโฮเต็ล</b></p>
                                <p>กรุงเทพ, สถานที่จัดงาน</p>
                            </a>
                        </div>
                    </div>  
                </div>
                <div class="col-sm-3">
                    <div class="history-search"><a href="#">ดูประวัติการค้นหาทั้งหมด</a></div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/bootstrap-datepicker.min.js"></script>
<script src="assets/js/jquery.mask.min.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/bootstrap-slider.js"></script>
<script src="assets/js/main.js"></script>