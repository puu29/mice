<?php $page = str_replace('.php', '', basename($_SERVER['PHP_SELF']));?>
<header>
    <nav class="navbar navbar-default">
        <div class="navbar-top">
            <div class="container-fluid">
                <ul class="nav navbar-right lang">
                    <li><a href="#">EN</a></li>
                    <li class="active"><a href="#">ไทย</a></li>
                </ul>
                <ul class="nav navbar-right">
                    <li><a href="member-business-add.php"><div class="text-icon"><i class="m-icon m-icon-build"></i>เข้าร่วมธุรกิจกับเรา</div></a></li>
                    <li><a href="about.php">เกี่ยวกับ Thai MICE Connect</a></li>
                    <li><a href="faq.php">คำถามที่พบบ่อย</a></li>
                </ul>
            </div>
        </div>
        <div class="navbar-bottom">
            <div class="container-fluid">
                <div class="navbar-user">
                    <?php if($_GET['login'] == 1 || strpos($page, 'member') > -1 || strpos($page, 'business') > -1) { ?>
                        <div class="user dropdown hidden-mobile show-ipad">
                            <div class="dropdown-toggle" data-toggle="dropdown">
                                <div class="img">
                                    <div class="bg" style="background-image: url('assets/images/user.png')"></div>
                                    <i class="m-icon m-icon-noti"></i>
                                </div>
                                <div class="text">
                                    <span class="name">พัชรศรี</span>
                                    <span class="msg">, (9) ข้อความ</span>
                                </div>
                            </div>
                            <ul class="dropdown-menu shadow">
                                <li class="<?= ($page == 'member' || strpos($page, 'member-quotation') > -1) ? 'active' : ''; ?>">
                                    <a href="member.php">
                                        <i class="m-icon m-icon-menu-docs"></i>
                                        <span>การขอใบเสนอราคา</span>
                                    </a>
                                </li>
                                <li class="<?= strpos($page, 'member-profile') > -1 ? 'active' : ''; ?>">
                                    <a href="member-profile.php">
                                        <i class="m-icon m-icon-menu-profile"></i>
                                        <span>โปรไฟล์บัญชีทั่วไป</span>
                                    </a>
                                </li>
                                <li class="<?= strpos($page, 'member-plan') > -1 ? 'active' : ''; ?>">
                                    <a href="member-plan.php">
                                        <i class="m-icon m-icon-menu-plan"></i>
                                        <span>วางแผนการจัดงานไมซ์</span>
                                    </a>
                                </li>
                                <li class="<?= strpos($page, 'member-chat') > -1 ? 'active' : ''; ?>">
                                    <a href="member-chat.php">
                                        <i class="m-icon m-icon-menu-chat"></i>
                                        <span>แชทสนทนา (9 ข้อความ)</span>
                                    </a>
                                </li>
                                <li class="<?= strpos($page, 'member-vdocall') > -1 ? 'active' : ''; ?>">
                                    <a href="member-vdocall-waiting.php">
                                        <i class="m-icon m-icon-menu-vdo"></i>
                                        <span>วิดีโอคอลสนทนา</span>
                                    </a>
                                </li>
                                <li class="<?= strpos($page, 'member-like') > -1 ? 'active' : ''; ?>">
                                    <a href="member-like.php">
                                        <i class="m-icon m-icon-menu-like"></i>
                                        <span>ธุรกิจที่สนใจ</span>
                                    </a>
                                </li>
                                <li class="<?= strpos($page, 'member-news') > -1 ? 'active' : ''; ?>">
                                    <a href="member-news.php">
                                        <i class="m-icon m-icon-menu-news"></i>
                                        <span>ข่าวสารจากธุรกิจที่สนใจ</span>
                                    </a>
                                </li>
                                <hr/>
                                <li class="<?= strpos($page, 'member-business') > -1 ? 'active' : ''; ?>">
                                    <a href="member-business.php">
                                        <i class="m-icon m-icon-menu-account"></i>
                                        <span>บัญชีธุรกิจ</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="business-manage.php?new=1">
                                        <i><img src="assets/images/villa.png"></i>
                                        <span>Villa Hotel and Resort</span>
                                    </a>
                                </li>
                                <li class="logout">
                                    <a href="index.php">ออกจากระบบ</a>
                                </li>
                            </ul>
                        </div>
                        <a href="member-menu.php" class="user hidden-desktop">
                            <div class="img">
                                <div class="bg" style="background-image: url('assets/images/user.png')"></div>
                                <i class="m-icon m-icon-noti"></i>
                            </div>
                        </a>
                    <?php } else { ?>
                        <div class="no-user">
                            <a href="login.php"><img src="assets/images/icon-user-default.png"></a>
                            <a href="login.php" class="inner no-border">เข้าสู่ระบบ</a>
                            <a href="register.php" class="inner">สมัครสมาชิก</a>
                        </div>
                    <?php } ?>
                </div>
                <div class="navbar-search">
                    <i class="m-icon m-icon-search" onclick="open_search()"></i>
                </div>
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">
                        <img src="assets/images/logo.svg?ver=1" alt="MICE">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="menu">
                    <div class="menu-bg" data-toggle="collapse" data-target="#menu"></div>
                    <ul class="nav navbar-right">
                        <li class="action-top">
                            <i class="m-icon m-icon-close-blue m-icon-20" data-toggle="collapse" data-target="#menu"></i>
                            <ul class="nav navbar-right lang pull-right">
                                <li><a href="#">EN</a></li>
                                <li class="active"><a href="#">ไทย</a></li>
                            </ul>
                        </li>
                        <li class="dropdown <?= $page == 'search' ? 'active' : ''; ?>">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ประเภทธุรกิจไมซ์ทั้งหมด <span class="glyphicon glyphicon-menu-down"></span></a>
                            <ul class="dropdown-menu">
                                <div class="bg" style="background-image: url('assets/images/menu-img.png')"></div>
                                <li><a href="search.php">สถานที่จัดงาน</a></li>
                                <li><a href="search.php">ออร์แกไนเซอร์</a></li>
                                <li><a href="search.php">บริการสำหรับผู้จัดงาน</a></li>
                                <li><a href="search.php">ท่องเที่ยว/นำเที่ยว</a></li>
                                <li><a href="search.php">ที่พัก</a></li>
                                <li><a href="search.php">วิทยากร</a></li>
                                <li><a href="search.php">ร้านค้า/สินค้า</a></li>
                                <li><a href="search.php">โชว์/การแสดง</a></li>
                                <li><a href="search.php">อาหารและเครื่องดื่ม</a></li>
                                <li><a href="search.php">ธุรกิจบริการอื่นๆ</a></li>
                                <li><a href="search.php">Logistic</a></li>
                                <li><a href="search.php">หน่วยงานที่เกี่ยวข้อง</a></li>
                            </ul>
                        </li>
                        <li class="<?= $page == 'news' || $page == 'news-detail' ? 'active' : ''; ?>"><a href="news.php">ข่าวสารจากธุรกิจ</a></li>
                        <li class="<?= $page == 'calendar' || $page == 'calendar-detail' ? 'active' : ''; ?>"><a href="calendar.php">ปฏิทินงานไมซ์</a></li>
                        <li class="<?= $page == 'member-plan' ? 'active' : ''; ?>"><a href="member-plan.php">วางแผนการจัดงาน</a></li>
                        <li class="hidden-desktop <?= $page == 'about' ? 'active' : ''; ?>"><a href="about.php">เกี่ยวกับ Thai MICE Connect</a></li>
                        <li class="hidden-desktop <?= $page == 'faq' > -1 ? 'active' : ''; ?>"><a href="faq.php">คำถามที่พบบ่อย</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>