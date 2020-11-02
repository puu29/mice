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
                    <li><a href="contact.php"><div class="text-icon"><i class="m-icon m-icon-build"></i>เข้าร่วมธุรกิจกับเรา</div></a></li>
                    <li><a href="about.php">เกี่ยวกับ Thai MICE Connect</a></li>
                    <li><a href="faq.php">คำถามที่พบบ่อย</a></li>
                </ul>
            </div>
        </div>
        <div class="navbar-bottom">
            <div class="container-fluid">
                <div class="navbar-user">
                    <?php if($_GET['login'] == 1 || strpos($page, 'member') > -1) { ?>
                        <a href="member.php" class="user">
                            <div class="img">
                                <div class="bg" style="background-image: url('assets/images/user.png')"></div>
                                <i class="m-icon m-icon-noti"></i>
                            </div>
                            <div class="text">
                                <span class="name">พัชรศรี</span>
                                <span class="msg">, (9) ข้อความ</span>
                            </div>
                        </a>
                    <?php } else { ?>
                        <div class="no-user">
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
                        <img src="assets/images/logo.svg" alt="MICE">
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ประเภทธุรกิจไมซ์ทั้งหมด <span class="glyphicon glyphicon-menu-down"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="search.php">ธุรกิจออแกไนเซอร์</a></li>
                                <li><a href="search.php">ธุรกิจสถานที่จัดงาน</a></li>
                                <li><a href="search.php">ธุรกิจที่พัก โรงแรม หรือรีสอร์ท</a></li>
                                <li><a href="search.php">ธุรกิจโลจิสติกส์</a></li>
                                <li><a href="search.php">ธุรกิจอาหารและเครื่องดื่ม</a></li>
                                <li><a href="search.php">ธุรกิจขายปลีก/แหล่งช้อปปิ้ง</a></li>
                                <li><a href="search.php">ธุรกิจท่องเที่ยว และการนำเที่ยว</a></li>
                                <li><a href="search.php">ธุรกิจโชว์/การแสดง</a></li>
                                <li><a href="search.php">ธุรกิจวิทยากร</a></li>
                                <li><a href="search.php">ธุรกิจหน่วยงานที่เกี่ยวข้อง (ภาครัฐ/สมาคม)</a></li>
                                <li><a href="search.php">ธุรกิจบริการอื่นๆ</a></li>
                            </ul>
                        </li>
                        <li><a href="news.php">ข่าวสารจากธุรกิจ</a></li>
                        <li><a href="calendar.php">ปฏิทินงานไมซ์</a></li>
                        <li><a href="plan.php">วางแผนการจัดงาน</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>