<div class="member-menu for-business">
    <?php $page_main = array('business-profile', 'business-manage', 'business-heart', 'business-score', 'business-friend'); ?>
    <?php if(in_array($page , $page_main)) { ?>
        <a href="member-menu.php" class="to-back font-blue hidden-desktop show-ipad">
            <div class="text-icon is-middle">
                <i class="glyphicon glyphicon-menu-left"></i>
                <span>กลับหน้าบัญชีธุรกิจ</span>
            </div>
        </a>
    <?php } else { ?>
        <a href="javascript:history.back()" class="to-back font-blue hidden-desktop show-ipad">
            <div class="text-icon is-middle">
                <i class="glyphicon glyphicon-menu-left"></i>
                <span>ย้อนกลับ</span>
            </div>
        </a>
    <?php } ?>
    
    <form action="" method="post" class="head text-center form-profile">
        <div class="upload-photo is-user">
            <div class="preview" style="background-image: url('assets/images/villa.png')"></div>
            <div class="input">
                <input type="file" accept="image/*">
                <i class="m-icon m-icon-upload"></i>
            </div>
        </div>
        <button type="submit" class="btn btn-blue btn-send">บันทึกรูปภาพ</button>
        <div class="name">Villa Hotel and Resort</div>
    </form>
    <div class="body">
        <button class="btn btn-blue btn-md btn-block dropdown-toggle" type="button" id="menu-business" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span id="menu-active" class="font-semibold">ข้อมูลธุรกิจ</span> <span class="glyphicon glyphicon-menu-down"></span>
        </button>
        <ul class="no-icon dropdown-menu" aria-labelledby="menu-business">
            <li class="dropdown-item <?= strpos($page, 'business-profile') > -1 ? 'active' : ''; ?>">
                <a href="business-profile.php">
                    <span>ข้อมูลธุรกิจ</span>
                </a>
            </li>
            <li class="dropdown-item <?= strpos($page, 'business-manage') > -1 ? 'active' : ''; ?>">
                <a href="business-manage.php">
                    <span>จัดการธุรกิจ</span>
                </a>
            </li>
            <li class="dropdown-item <?= strpos($page, 'business-heart') > -1 ? 'active' : ''; ?>">
                <a href="business-heart.php">
                    <span>การสะสมใจไมซ์</span>
                </a>
            </li>
            <li class="dropdown-item <?= strpos($page, 'business-score') > -1 ? 'active' : ''; ?>">
                <a href="business-score.php">
                    <span>การสะสมคะแนน</span>
                </a>
            </li>
            <li class="dropdown-item <?= strpos($page, 'business-friend') > -1 ? 'active' : ''; ?>">
                <a href="business-friend.php">
                    <span>ชวนเพื่อน</span>
                </a>
            </li>
            <li class="back-member hidden-mobile">
                <a href="member-business.php">
                    <span class="font-regular">กลับหน้าบัญชีทั่วไป</span>
                </a>
            </li>
        </ul>
    </div>
</div>