<div class="member-menu">
    <form action="" method="post" class="head text-center">
        <div class="upload-photo is-user" id="form_profile">
            <div class="preview" style="background-image: url('assets/images/user.png')"></div>
            <div class="input">
                <input type="file" accept="image/*">
                <i class="m-icon m-icon-upload"></i>
            </div>
        </div>
        <button type="submit" class="btn btn-blue">บันทึกรูปภาพ</button>
    </form>
    <div class="body">
        <ul>
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
            <li>
                <a href="member-business-add.php">
                    <i class="m-icon m-icon-plus"></i>
                    <span class="font-bold font-blue">เพิ่มธุรกิจ</span>
                </a>
            </li>
        </ul>
    </div>
</div>