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
                    <a href="business-score.php" class="to-back font-blue hidden-mobile">
                        <div class="text-icon is-middle">
                            <i class="glyphicon glyphicon-menu-left"></i>
                            <span>ย้อนกลับ</span>
                        </div>
                    </a>
                    <div class="member-title">
                        <div class="pull-left">
                            <h2 class="font-semibold no-margin">ประวัติคะแนน</h2>
                            <p class="no-margin">สามารถเช็คประวัติการใช้คะแนนทั้งหมดของท่านที่ได้ทำกิจกรรมหรือแลกสิทธิได้ด้านล่างนี้</p>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="">
                                <table class="table no-margin font-16">
                                    <thead class="bg-white mobile-font-14">
                                        <tr>
                                            <th class="mobile-text-left mobile-no-padding-top">รายการ</th>
                                            <th width="150" class="text-right mobile-no-padding-top">คะแนน</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>เชิญเพื่อน 1 คน</td>
                                            <td class="font-blue text-right font-semibold">+20 Coins</td>
                                        </tr>
                                        <tr>
                                            <td>Rank 1-3/week</td>
                                            <td class="font-red text-right font-semibold">-800 Coins</td>
                                        </tr>
                                        <tr>
                                            <td>โพสต์ข่าวสารลงบนหน้าธุรกิจ</td>
                                            <td class="font-blue text-right font-semibold">+50 Coins</td>
                                        </tr>
                                        <tr>
                                            <td>โพสต์โปรโมชั่น</td>
                                            <td class="font-blue text-right font-semibold">+100 Coins</td>
                                        </tr>
                                        <tr>
                                            <td>เชิญเพื่อน 1 คน</td>
                                            <td class="font-blue text-right font-semibold">+20 Coins</td>
                                        </tr>
                                        <tr>
                                            <td>โพสต์ข่าวสารลงบนหน้าธุรกิจ</td>
                                            <td class="font-blue text-right font-semibold">+50 Coins</td>
                                        </tr>
                                        <tr>
                                            <td>เชิญเพื่อน 1 คน</td>
                                            <td class="font-blue text-right font-semibold">+20 Coins</td>
                                        </tr>
                                        <tr>
                                            <td>เชิญเพื่อน 1 คน</td>
                                            <td class="font-blue text-right font-semibold">+20 Coins</td>
                                        </tr>
                                        <tr>
                                            <td>โพสต์ข่าวสารลงบนหน้าธุรกิจ</td>
                                            <td class="font-blue text-right font-semibold">+50 Coins</td>
                                        </tr>
                                        <tr>
                                            <td>เชิญเพื่อน 1 คน</td>
                                            <td class="font-blue text-right font-semibold">+20 Coins</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="paging">
                        <div class="page is-prev disabled"><span class="glyphicon glyphicon-menu-left"></span> ก่อนหน้า</div>
                        <div class="page active">1</div>
                        <div class="page">2</div>
                        <div class="page">3</div>
                        <div class="page is-next">ถัดไป <span class="glyphicon glyphicon-menu-right"></span></div>
                    </div>
                </div>
            </section>
        </div>
        <?php include "layout/footer.php" ?>
    </body>
</html>