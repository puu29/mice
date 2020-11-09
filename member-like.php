<!DOCTYPE html>
<html>
    <head>
        <?php include "layout/head.php" ?>
    </head>
    <body>
        <?php include "layout/nav.php" ?>
        <div id="wrapper">
            <section class="member">
                <?php include "layout/nav-member.php" ?>
                <div class="member-body">
                    <a href="member.php" class="to-back font-blue hidden-desktop">
                        <div class="text-icon is-middle">
                            <i class="glyphicon glyphicon-menu-left" style="top: 56%"></i>
                            <span>กลับไปเมนูบัญชีทั่วไป</span>
                        </div>
                    </a>
                    <h2 class="font-semibold no-margin">ธุรกิจที่สนใจ</h2>
                    <p>รายการแสดงบันทึกธุรกิจที่ท่านได้กดสนใจไว้เพื่อเก็บข้อมูลให้สามารถย้อนกลับมาดูได้ภายหลังอย่างสะดวกมากขึ้น</p>
                    <br class="hidden-desktop"/>
                    <div class="select pull-right mobile-block">
                        <select class="form-control">
                            <option value="">ประเภททั้งหมด</option>
                            <option value="">ธุรกิจออแกไนเซอร์</option>
                            <option value="">ธุรกิจสถานที่จัดงาน</option>
                            <option value="">ธุรกิจที่พัก โรงแรม หรือรีสอร์ท</option>
                            <option value="">ธุรกิจโลจิสติกส์</option>
                            <option value="">ธุรกิจอาหารและเครื่องดื่ม</option>
                            <option value="">ธุรกิจขายปลีก/แหล่งช้อปปิ้ง</option>
                            <option value="">ธุรกิจท่องเที่ยว และการนำเที่ยว</option>
                            <option value="">ธุรกิจโชว์/การแสดง</option>
                            <option value="">ธุรกิจวิทยากร</option>
                            <option value="">ธุรกิจหน่วยงานที่เกี่ยวข้อง (ภาครัฐ/สมาคม)</option>
                            <option value="">ธุรกิจบริการอื่นๆ</option>
                        </select>
                        <span class="m-icon m-icon-dropdown"></span>
                    </div>
                    <div class="clearfix"></div>
                    <br class="hidden-mobile"/>
                    <div class="row is-small2">
                        <div class="col col-md-4 col-sm-6">
                            <div class="post border-5 style-2 font-12 shadow mt12">
                                <div class="bg" style="background-image: url('assets/images/b1.png')"><i class="m-icon m-icon-like-white active"></i></div>
                                <div class="text">
                                    <div class="head">
                                        <div class="star">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <label>(40 รีวิว)</label>
                                        </div>
                                        <h3 class="font-semibold">Pullman Bangkok Grande Sukhumvit</h3>
                                        <p>กรุงเทพมหานคร</p>
                                        <div class="mode">
                                            <div class="inner is-orange">ที่พัก</div>
                                            <div class="inner is-purple">สถานที่จัดงาน</div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-xs-6">จำนวนห้องประชุม</div>
                                                <div class="col-xs-6">9 ห้อง</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ความจุ (คน)</div>
                                                <div class="col-xs-6">30 - 1,300 คน</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ขนาดพื้นที่ (ตร.ม.)</div>
                                                <div class="col-xs-6">75 - 1,367 ตร.ม.</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ระยะทาง</div>
                                                <div class="col-xs-6">120 ม. จาก BTS นานา</div>
                                            </div>
                                        </div>
                                        <div class="btn-box ">
                                            <a href="search-map.php" class="btn btn-md btn-trans font-14">ดูตำแหน่งในแผนที่</a>
                                            <a href="search-detail.php" class="btn btn-md btn-default font-14">ดูข้อมูลสถานที่</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-4 col-sm-6">
                            <div class="post border-5 style-2 font-12 shadow mt12">
                                <div class="bg" style="background-image: url('assets/images/b2.png')"><i class="m-icon m-icon-like-white active"></i></div>
                                <div class="text">
                                    <div class="head">
                                        <div class="star">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <label>(40 รีวิว)</label>
                                        </div>
                                        <h3 class="font-semibold">เจริญโฮเต็ล</h3>
                                        <p>กรุงเทพมหานคร</p>
                                        <div class="mode">
                                            <div class="inner is-green">ร้านค้า</div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-xs-6">จำนวนห้องประชุม</div>
                                                <div class="col-xs-6">9 ห้อง</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ความจุ (คน)</div>
                                                <div class="col-xs-6">30 - 1,300 คน</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ขนาดพื้นที่ (ตร.ม.)</div>
                                                <div class="col-xs-6">75 - 1,367 ตร.ม.</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ระยะทาง</div>
                                                <div class="col-xs-6">120 ม. จาก BTS นานา</div>
                                            </div>
                                        </div>
                                        <div class="btn-box ">
                                            <a href="search-map.php" class="btn btn-md btn-trans font-14">ดูตำแหน่งในแผนที่</a>
                                            <a href="search-detail.php" class="btn btn-md btn-default font-14">ดูข้อมูลสถานที่</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-4 col-sm-6">
                            <div class="post border-5 style-2 font-12 shadow mt12">
                                <div class="bg" style="background-image: url('assets/images/b3.png')"><i class="m-icon m-icon-like-white active"></i></div>
                                <div class="text">
                                    <div class="head">
                                        <div class="star">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <label>(40 รีวิว)</label>
                                        </div>
                                        <h3 class="font-semibold">โรงแรมปริ๊นซ์ พาเลซ</h3>
                                        <p>กรุงเทพมหานคร</p>
                                        <div class="mode">
                                            <div class="inner is-orange">ที่พัก</div>
                                            <div class="inner is-purple">สถานที่จัดงาน</div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-xs-6">จำนวนห้องประชุม</div>
                                                <div class="col-xs-6">9 ห้อง</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ความจุ (คน)</div>
                                                <div class="col-xs-6">30 - 1,300 คน</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ขนาดพื้นที่ (ตร.ม.)</div>
                                                <div class="col-xs-6">75 - 1,367 ตร.ม.</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ระยะทาง</div>
                                                <div class="col-xs-6">120 ม. จาก BTS นานา</div>
                                            </div>
                                        </div>
                                        <div class="btn-box ">
                                            <a href="search-map.php" class="btn btn-md btn-trans font-14">ดูตำแหน่งในแผนที่</a>
                                            <a href="search-detail.php" class="btn btn-md btn-default font-14">ดูข้อมูลสถานที่</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-4 col-sm-6">
                            <div class="post border-5 style-2 font-12 shadow mt12">
                                <div class="bg" style="background-image: url('assets/images/b4.png')"><i class="m-icon m-icon-like-white active"></i></div>
                                <div class="text">
                                    <div class="head">
                                        <div class="star">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <label>(40 รีวิว)</label>
                                        </div>
                                        <h3 class="font-semibold">Pullman Bangkok Grande Sukhumvit</h3>
                                        <p>กรุงเทพมหานคร</p>
                                        <div class="mode">
                                            <div class="inner is-yellow">อาหารและเครื่องดื่ม</div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-xs-6">จำนวนห้องประชุม</div>
                                                <div class="col-xs-6">9 ห้อง</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ความจุ (คน)</div>
                                                <div class="col-xs-6">30 - 1,300 คน</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ขนาดพื้นที่ (ตร.ม.)</div>
                                                <div class="col-xs-6">75 - 1,367 ตร.ม.</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ระยะทาง</div>
                                                <div class="col-xs-6">120 ม. จาก BTS นานา</div>
                                            </div>
                                        </div>
                                        <div class="btn-box ">
                                            <a href="search-map.php" class="btn btn-md btn-trans font-14">ดูตำแหน่งในแผนที่</a>
                                            <a href="search-detail.php" class="btn btn-md btn-default font-14">ดูข้อมูลสถานที่</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-4 col-sm-6">
                            <div class="post border-5 style-2 font-12 shadow mt12">
                                <div class="bg" style="background-image: url('assets/images/b5.png')"><i class="m-icon m-icon-like-white active"></i></div>
                                <div class="text">
                                    <div class="head">
                                        <div class="star">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <label>(40 รีวิว)</label>
                                        </div>
                                        <h3 class="font-semibold">Pullman Bangkok Grande Sukhumvit</h3>
                                        <p>กรุงเทพมหานคร</p>
                                        <div class="mode">
                                            <div class="inner is-blue">ออแกไนเซอร์</div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-xs-6">จำนวนห้องประชุม</div>
                                                <div class="col-xs-6">9 ห้อง</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ความจุ (คน)</div>
                                                <div class="col-xs-6">30 - 1,300 คน</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ขนาดพื้นที่ (ตร.ม.)</div>
                                                <div class="col-xs-6">75 - 1,367 ตร.ม.</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ระยะทาง</div>
                                                <div class="col-xs-6">120 ม. จาก BTS นานา</div>
                                            </div>
                                        </div>
                                        <div class="btn-box ">
                                            <a href="search-map.php" class="btn btn-md btn-trans font-14">ดูตำแหน่งในแผนที่</a>
                                            <a href="search-detail.php" class="btn btn-md btn-default font-14">ดูข้อมูลสถานที่</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col col-md-4 col-sm-6">
                            <div class="post border-5 style-2 font-12 shadow mt12">
                                <div class="bg" style="background-image: url('assets/images/b6.png')"><i class="m-icon m-icon-like-white active"></i></div>
                                <div class="text">
                                    <div class="head">
                                        <div class="star">
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star"></span>
                                            <span class="glyphicon glyphicon-star-empty"></span>
                                            <label>(40 รีวิว)</label>
                                        </div>
                                        <h3 class="font-semibold">โรงแรมปริ๊นซ์ พาเลซ</h3>
                                        <p>กรุงเทพมหานคร</p>
                                        <div class="mode">
                                            <div class="inner is-green">โชว์/การแสดง</div>
                                        </div>
                                    </div>
                                    <div class="body">
                                        <div class="info">
                                            <div class="row">
                                                <div class="col-xs-6">จำนวนห้องประชุม</div>
                                                <div class="col-xs-6">9 ห้อง</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ความจุ (คน)</div>
                                                <div class="col-xs-6">30 - 1,300 คน</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ขนาดพื้นที่ (ตร.ม.)</div>
                                                <div class="col-xs-6">75 - 1,367 ตร.ม.</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-6">ระยะทาง</div>
                                                <div class="col-xs-6">120 ม. จาก BTS นานา</div>
                                            </div>
                                        </div>
                                        <div class="btn-box ">
                                            <a href="search-map.php" class="btn btn-md btn-trans font-14">ดูตำแหน่งในแผนที่</a>
                                            <a href="search-detail.php" class="btn btn-md btn-default font-14">ดูข้อมูลสถานที่</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include "layout/footer.php" ?>
        <script>
            (function(){
                $(window).resize(function(){
                    post_style();
                });

                post_style();
            })();

            function post_style()
            {
                if($(window).width() < 768)
                {
                    $('.post').removeClass('style-2');
                    $('.post').addClass('style-3');
                }
                else
                {
                    $('.post').removeClass('style-3');
                    $('.post').addClass('style-2');
                }
            }
        </script>
    </body>
</html>