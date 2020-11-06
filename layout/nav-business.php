<div class="member-menu">
    <div class="head text-center">
        <div class="upload-photo">
            <div class="preview" style="background-image: url('assets/images/villa.png')"></div>
            <div class="input">
                <input type="file" accept="image/*">
                <i class="m-icon m-icon-upload"></i>
            </div>
        </div>
        <div class="name">Villa Hotel and Resort</div>
    </div>
    <div class="body">
        <ul class="no-icon">
            <li class="<?= strpos($page, 'business-profile') > -1 ? 'active' : ''; ?>">
                <a href="business-profile.php">
                    <span>ข้อมูลธุรกิจ</span>
                </a>
            </li>
            <li class="<?= strpos($page, 'business-manage') > -1 ? 'active' : ''; ?>">
                <a href="#">
                    <span>จัดการธุรกิจ</span>
                </a>
            </li>
            <li class="<?= strpos($page, 'business-heart') > -1 ? 'active' : ''; ?>">
                <a href="business-heart.php">
                    <span>การสะสมใจไมซ์</span>
                </a>
            </li>
            <li class="<?= strpos($page, 'business-score') > -1 ? 'active' : ''; ?>">
                <a href="#">
                    <span>การสะสมคะแนน</span>
                </a>
            </li>
            <li class="<?= strpos($page, 'business-friend') > -1 ? 'active' : ''; ?>">
                <a href="#">
                    <span>ชวนเพื่อน</span>
                </a>
            </li>
            <li class="back-member">
                <a href="member-business.php">
                    <span class="font-regular">กลับหน้าบัญชีทั่วไป</span>
                </a>
            </li>
        </ul>
    </div>
</div>