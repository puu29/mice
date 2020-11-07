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
                    <a href="member-business.php" class="to-back font-blue">
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
                                    <h2 class="font-semibold no-margin"><big>34,034</big></h2>
                                    <div class="step-heart for-score">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 50%;">
                                                <span class="sr-only"></span>
                                            </div>
                                        </div>
                                        <div class="step">
                                            <div class="icon">
                                                <i class="m-icon m-icon-mice"></i>
                                            </div>
                                            <div class="icon">
                                            </div>
                                            <div class="icon">
                                            </div>
                                            <div class="icon">
                                                <i class="m-icon m-icon-mice-silver"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col col-xs-6">
                                            <a href="business-score-redeem.php" class="btn btn-md btn-block btn-blue">แลกคะแนน</a>
                                        </div>
                                        <div class="col col-xs-6">
                                            <a href="business-score-redeemed.php" class="btn btn-md btn-block btn-default">สิทธิที่แลกไว้</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="panel panel-default">
                                <div class="panel-body">
                                    <h3 class="font-semibold no-margin pull-left">ประวัติคะแนนล่าสุด</h3>
                                    <a href="business-score-history.php" class="btn btn-md btn-default pull-right">ประวัติการรับคะแนน</a>
                                    <div class="clearfix"></div>
                                    <br/>
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
                    <div class="clearfix"><br/></div>
                    <h2 class="font-semibold">รายละเอียดการสะสมคะแนน</h2>
                    <div class="table-responsive shadow-blue">
                        <table class="table no-margin">
                            <thead>
                                <tr>
                                    <th>ระดับ</th>
                                    <th>สัญลักษณ์</th>
                                    <th>วิธีการได้รับสิทธิ</th>
                                    <th>รายละเอียดสิทธิพิเศษ</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="font-semibold">Bronze</td>
                                    <td>
                                        <i class="m-icon m-icon-mice m-icon-45"></i>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>สะสมคะแนนจากทำกิจกรรมในเว็บไซต์</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>ได้รับคะแนน x1 ในการทำกิจกรรมทุกครั้ง</li>
                                            <li>แลกรับสิทธิพิเศษตามคะแนน</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-semibold">Silver</td>
                                    <td>
                                        <i class="m-icon m-icon-mice-silver m-icon-45"></i>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>สะสมคะแนนจากทำกิจกรรมในเว็บไซต์</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>ได้รับคะแนน x2 ในการทำกิจกรรมทุกครั้ง</li>
                                            <li>แลกรับสิทธิพิเศษตามคะแนน</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-semibold">Gold</td>
                                    <td>
                                        <i class="m-icon m-icon-mice-gold m-icon-45"></i>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>สะสมคะแนนจากทำกิจกรรมในเว็บไซต์</li>
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>ได้รับคะแนน x3 ในการทำกิจกรรมทุกครั้ง</li>
                                            <li>แลกรับสิทธิพิเศษตามคะแนน</li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="font-semibold">Platinum</td>
                                    <td>
                                        <i class="m-icon m-icon-mice-platinum m-icon-45"></i>
                                    </td>
                                    <td>
                                        <ul>
                                            <li>สะสมคะแนนจากทำกิจกรรมในเว็บไซต์</li>
                                        </ul>
                                    </td>
                                    <td>
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