<!DOCTYPE html>
<html>
    <head>
        <?php include "layout/head.php" ?>
    </head>
    <body>
        <?php include "layout/nav.php" ?>
        <div id="wrapper">
            <section class="member">
                <?php include "layout/nav-business.php" ?>
                <div class="member-body">
                    <a href="business-score.php" class="to-back font-blue">
                        <div class="text-icon is-middle">
                            <i class="glyphicon glyphicon-menu-left"></i>
                            <span>ย้อนกลับ</span>
                        </div>
                    </a>
                    <div class="member-title">
                        <div class="pull-left">
                            <h2 class="font-semibold no-margin">สิทธิ์ที่แลกไว้</h2>
                            <p class="no-margin">การสะสมคะแนนจะสามารถสะสมได้จากการเข้ามาทำกิจกรรมธุรกิจของท่านในเว็บไซต์ Thaimiceconnect เป็นประจำ เช่น โพสต์โปรโมทธุรกิจของคุณ หรือเชิญเพื่อน</p>
                        </div>
                    </div>
                    <div class="row is-small2">
                        <div class="col col-sm-4 col-md-3" data-filter="1">
                            <div class="card-score shadow-blue">
                                <img class="img-responsive" src="assets/images/mice-logo.png">
                                <div class="text">
                                    <h3 class="no-margin-bottom">Rank 1-3/week</h3>
                                    <p>รายละเอียดของรางวัล</p>
                                </div>
                                <div class="score">
                                    <p>ใช้สิทธิก่อนวันที่ : 31 ตุลาคม 2563</p>
                                    <a href="business-score-detail.php" class="btn btn-block btn-md btn-blue-linear">ใช้สิทธิ์</a>
                                </div>
                            </div>
                        </div>
                        <div class="col col-sm-4 col-md-3" data-filter="1">
                            <div class="card-score shadow-blue">
                                <img class="img-responsive" src="assets/images/mice-logo.png">
                                <div class="text">
                                    <h3 class="no-margin-bottom">Promote in TCEB Facebook</h3>
                                    <p>รายละเอียดของรางวัล</p>
                                </div>
                                <div class="score">
                                    <p>ใช้สิทธิก่อนวันที่ : 31 ตุลาคม 2563</p>
                                    <a href="business-score-detail.php" class="btn btn-block btn-md btn-blue-linear">ใช้สิทธิ์</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include "layout/footer.php" ?>
    </body>
</html>