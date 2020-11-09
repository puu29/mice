<!DOCTYPE html>
<html>
    <head>
        <?php include "layout/head.php" ?>
    </head>
    <body>
        <?php include "layout/nav.php" ?>
        <div id="wrapper">
            <section class="member">
                <div class="member-menu-page">
                    <div class="member-menu">
                        <div class="head text-center">
                            <a href="javascript:history.back()" class="to-back font-blue pull-left">
                                <div class="text-icon is-middle">
                                    <i class="glyphicon glyphicon-menu-left"></i>
                                    <span>ย้อนกลับ</span>
                                </div>
                            </a>
                            <div class="clearfix"></div>
                            <div class="upload-photo">
                                <div class="preview" style="background-image: url('assets/images/user.png')"></div>
                                <div class="input">
                                    <input type="file" accept="image/*">
                                    <i class="m-icon m-icon-upload"></i>
                                </div>
                            </div>
                        </div>
                        <div class="body">
                            <ul>
                                <li class="<?= $page == 'member' ? 'active' : ''; ?>">
                                    <a href="member.php">
                                        <i class="m-icon m-icon-menu-docs"></i>
                                        <span>การขอใบเสนอราคา</span>
                                    </a>
                                    <span class="glyphicon glyphicon-menu-right"></span>
                                </li>
                                <li class="<?= strpos($page, 'member-profile') > -1 ? 'active' : ''; ?>">
                                    <a href="member-profile.php">
                                        <i class="m-icon m-icon-menu-profile"></i>
                                        <span>โปรไฟล์บัญชีทั่วไป</span>
                                    </a>
                                    <span class="glyphicon glyphicon-menu-right"></span>
                                </li>
                                <li class="<?= strpos($page, 'member-plan') > -1 ? 'active' : ''; ?>">
                                    <a href="member-plan.php">
                                        <i class="m-icon m-icon-menu-plan"></i>
                                        <span>วางแผนการจัดงานไมซ์</span>
                                    </a>
                                    <span class="glyphicon glyphicon-menu-right"></span>
                                </li>
                                <li class="<?= strpos($page, 'member-chat') > -1 ? 'active' : ''; ?>">
                                    <a href="member-chat.php">
                                        <i class="m-icon m-icon-menu-chat"></i>
                                        <span>แชทสนทนา (9 ข้อความ)</span>
                                    </a>
                                    <span class="glyphicon glyphicon-menu-right"></span>
                                </li>
                                <li class="<?= strpos($page, 'member-vdocall') > -1 ? 'active' : ''; ?>">
                                    <a href="member-vdocall-waiting.php">
                                        <i class="m-icon m-icon-menu-vdo"></i>
                                        <span>วิดีโอคอลสนทนา</span>
                                    </a>
                                    <span class="glyphicon glyphicon-menu-right"></span>
                                </li>
                                <li class="<?= strpos($page, 'member-like') > -1 ? 'active' : ''; ?>">
                                    <a href="member-like.php">
                                        <i class="m-icon m-icon-menu-like"></i>
                                        <span>ธุรกิจที่สนใจ</span>
                                    </a>
                                    <span class="glyphicon glyphicon-menu-right"></span>
                                </li>
                                <li class="<?= strpos($page, 'member-news') > -1 ? 'active' : ''; ?>">
                                    <a href="member-news.php">
                                        <i class="m-icon m-icon-menu-news"></i>
                                        <span>ข่าวสารจากธุรกิจที่สนใจ</span>
                                    </a>
                                    <span class="glyphicon glyphicon-menu-right"></span>
                                </li>
                                <hr/>
                                <li class="<?= strpos($page, 'member-business') > -1 ? 'active' : ''; ?>">
                                    <a href="member-business.php">
                                        <i class="m-icon m-icon-menu-account"></i>
                                        <span>บัญชีธุรกิจ</span>
                                    </a>
                                    <span class="glyphicon glyphicon-menu-right"></span>
                                </li>
                                <li>
                                    <a href="business-profile.php">
                                        <i><img src="assets/images/villa.png"></i>
                                        <span>Villa Hotel and Resort</span>
                                    </a>
                                    <span class="glyphicon glyphicon-menu-right"></span>
                                </li>
                                <li>
                                    <a href="member-business-add.php">
                                        <i class="m-icon m-icon-plus"></i>
                                        <span class="font-bold font-blue">เพิ่มธุรกิจ</span>
                                    </a>
                                </li>
                                <li class="text-center">
                                    <a href="index.php" class="font-link btn-logout">ออกจากระบบ</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include "layout/footer.php" ?>
    </body>
</html>