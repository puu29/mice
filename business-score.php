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
                    <a href="member-business.php" class="to-back font-blue hidden-mobile">
                        <div class="text-icon is-middle">
                            <i class="glyphicon glyphicon-menu-left"></i>
                            <span>กลับหน้าบัญชีธุรกิจ</span>
                        </div>
                    </a>
                    <div class="member-title">
                        <div class="pull-left">
                            <h2 class="font-semibold no-margin">การสะสมคะแนน</h2>
                            <p>การสะสมคะแนนจะสามารถสะสมได้จากการเข้ามาทำกิจกรรมธุรกิจของท่านในเว็บไซต์ Thaimiceconnect เป็นประจำ เช่น โพสต์โปรโมทธุรกิจของคุณ หรือเชิญเพื่อน</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3 class="font-semibold no-margin">จำนวนคะแนน</h3>
                                    <h2 class="font-semibold no-margin mobile-font-bold"><big>34,034</big></h2>
                                    <div class="step-heart for-score">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                                <span class="sr-only"></span>
                                            </div>
                                        </div>
                                        <div class="step">
                                            <div class="icon">
                                                <i class="m-icon m-icon-mice"></i>
                                                <span class="hidden-desktop show-ipad">Bronze</span>
                                            </div>
                                            <div class="icon">
                                            </div>
                                            <div class="icon">
                                            </div>
                                            <div class="icon">
                                                <i class="m-icon m-icon-mice-silver"></i>
                                                <span class="hidden-desktop show-ipad">Silver</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row is-small2">
                                        <div class="col col-xs-6">
                                            <a href="business-score-redeem.php" class="btn btn-md btn-block btn-blue font-semibold">แลกคะแนน</a>
                                        </div>
                                        <div class="col col-xs-6">
                                            <a href="business-score-redeemed.php" class="btn btn-md btn-block btn-default font-semibold">สิทธิที่แลกไว้</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="panel panel-default">
                                <div class="panel-heading has-option no-border">
                                    <h3 class="font-semibold no-margin">ประวัติคะแนนล่าสุด</h3>
                                    <a href="business-score-history.php" class="btn btn-md btn-default pull-right btn-option font-semibold">ประวัติการรับคะแนน</a>
                                </div>
                                <div class="panel-body no-padding-top">
                                    <table class="table no-padding-td no-margin">
                                        <tbody>
                                            <tr>
                                                <td>เชิญเพื่อน 1 คน</td>
                                                <td class="text-right">
                                                    <span class="font-semibold font-blue">+20 Coins</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>Rank 1-3/week</td>
                                                <td class="text-right">
                                                    <span class="font-semibold font-red">-800 Coins</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>โพสต์ข่าวสารลงบนหน้าธุรกิจ</td>
                                                <td class="text-right">
                                                    <span class="font-semibold font-blue">+50 Coins</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>โพสต์โปรโมชั่น</td>
                                                <td class="text-right">
                                                    <span class="font-semibold font-blue">+100 Coins</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>โพสต์ข่าวสารลงบนหน้าธุรกิจ</td>
                                                <td class="text-right">
                                                    <span class="font-semibold font-blue">+50 Coins</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix hidden-mobile"><br/></div>
                    <h2 class="font-semibold mobile-font-18">รายละเอียดการสะสมคะแนน</h2>
                    <div class="shadow-blue">
                        <table class="table no-margin mobile-full">
                            <thead>
                                <tr>
                                    <th>ระดับ</th>
                                    <th class="hidden-mobile">สัญลักษณ์</th>
                                    <th class="hidden-mobile">วิธีการได้รับสิทธิ</th>
                                    <th class="hidden-mobile">รายละเอียดสิทธิพิเศษ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-semibold">Bronze</td>
                                    <td class="mobile-no-padding-top">
                                        <i class="m-icon m-icon-mice m-icon-45"></i>
                                    </td>
                                    <td>
                                        <label class="hidden-desktop">วิธีการได้รับสิทธิ</label>
                                        <ul>
                                            <li>สะสมคะแนนจากทำกิจกรรมในเว็บไซต์</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <label class="hidden-desktop">รายละเอียดสิทธิพิเศษ</label>
                                        <ul>
                                            <li>ได้รับคะแนน x1 ในการทำกิจกรรมทุกครั้ง</li>
                                            <li>แลกรับสิทธิพิเศษตามคะแนน</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-semibold">Silver</td>
                                    <td class="mobile-no-padding-top">
                                        <i class="m-icon m-icon-mice-silver m-icon-45"></i>
                                    </td>
                                    <td>
                                        <label class="hidden-desktop">วิธีการได้รับสิทธิ</label>
                                        <ul>
                                            <li>สะสมคะแนนจากทำกิจกรรมในเว็บไซต์</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <label class="hidden-desktop">รายละเอียดสิทธิพิเศษ</label>
                                        <ul>
                                            <li>ได้รับคะแนน x2 ในการทำกิจกรรมทุกครั้ง</li>
                                            <li>แลกรับสิทธิพิเศษตามคะแนน</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-semibold">Gold</td>
                                    <td class="mobile-no-padding-top">
                                        <i class="m-icon m-icon-mice-gold m-icon-45"></i>
                                    </td>
                                    <td>
                                        <label class="hidden-desktop">วิธีการได้รับสิทธิ</label>
                                        <ul>
                                            <li>สะสมคะแนนจากทำกิจกรรมในเว็บไซต์</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <label class="hidden-desktop">รายละเอียดสิทธิพิเศษ</label>
                                        <ul>
                                            <li>ได้รับคะแนน x3 ในการทำกิจกรรมทุกครั้ง</li>
                                            <li>แลกรับสิทธิพิเศษตามคะแนน</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-semibold">Platinum</td>
                                    <td class="mobile-no-padding-top">
                                        <i class="m-icon m-icon-mice-platinum m-icon-45"></i>
                                    </td>
                                    <td>
                                        <label class="hidden-desktop">วิธีการได้รับสิทธิ</label>
                                        <ul>
                                            <li>สะสมคะแนนจากทำกิจกรรมในเว็บไซต์</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <label class="hidden-desktop">รายละเอียดสิทธิพิเศษ</label>
                                        <ul>
                                            <li>ได้รับคะแนน x4 ในการทำกิจกรรมทุกครั้ง</li>
                                            <li>แลกรับสิทธิพิเศษตามคะแนน</li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
        <?php include "layout/footer.php" ?>
    </body>
</html>