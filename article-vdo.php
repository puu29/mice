<!DOCTYPE html>
<html>
    <head>
        <?php include "layout/head.php" ?>
    </head>
    <body>
        <?php include "layout/nav.php" ?>
        <div id="wrapper">
            <div class="cover">
                <div class="bg" style="background-image: url('assets/images/cover.png')"></div>
                <div class="text">
                    <h2 class="no-margin">บทความไมซ์</h2>
                </div>
            </div>
            <section class="news-page">
                <div class="container">
                    <div class="tab">
                        <ul class="nav nav-tabs text-center">
                            <li><a href="article.php">บทความไมซ์</a></li>
                            <li class="active"><a href="article-vdo.php">วิดีโอไมซ์</a></li>
                        </ul>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active">
                                <div class="article-box">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <a href="https://www.youtube.com/watch?v=SFmRQBsIPE8" class="article">
                                                <div class="img"><img class="img-responsive" src="assets/images/art-vdo1.png"><i class="m-icon m-icon-vdo"></i></div>
                                                <div class="text"><h3>กิจกรรมการจัดงานประชุมนานาชาติประจำปี 2020 ณ อิมแพคเมืองทองธานี</h3></div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4">
                                            <a href="https://www.youtube.com/watch?v=SFmRQBsIPE8" class="article">
                                                <div class="img"><img class="img-responsive" src="assets/images/art-vdo2.png"><i class="m-icon m-icon-vdo"></i></div>
                                                <div class="text"><h3>กิจกรรมการจัดงานประชุมนานาชาติประจำปี 2020 ณ อิมแพคเมืองทองธานี</h3></div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4">
                                            <a href="https://www.youtube.com/watch?v=SFmRQBsIPE8" class="article">
                                                <div class="img"><img class="img-responsive" src="assets/images/art-vdo3.png"><i class="m-icon m-icon-vdo"></i></div>
                                                <div class="text"><h3>กิจกรรมการจัดงานประชุมนานาชาติประจำปี 2020 ณ อิมแพคเมืองทองธานี</h3></div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4">
                                            <a href="https://www.youtube.com/watch?v=SFmRQBsIPE8" class="article">
                                                <div class="img"><img class="img-responsive" src="assets/images/art-vdo4.png"><i class="m-icon m-icon-vdo"></i></div>
                                                <div class="text"><h3>กิจกรรมการจัดงานประชุมนานาชาติประจำปี 2020 ณ อิมแพคเมืองทองธานี</h3></div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4">
                                            <a href="https://www.youtube.com/watch?v=SFmRQBsIPE8" class="article">
                                                <div class="img"><img class="img-responsive" src="assets/images/art-vdo5.png"><i class="m-icon m-icon-vdo"></i></div>
                                                <div class="text"><h3>กิจกรรมการจัดงานประชุมนานาชาติประจำปี 2020 ณ อิมแพคเมืองทองธานี</h3></div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4">
                                            <a href="https://www.youtube.com/watch?v=SFmRQBsIPE8" class="article">
                                                <div class="img"><img class="img-responsive" src="assets/images/art-vdo6.png"><i class="m-icon m-icon-vdo"></i></div>
                                                <div class="text"><h3>กิจกรรมการจัดงานประชุมนานาชาติประจำปี 2020 ณ อิมแพคเมืองทองธานี</h3></div>
                                            </a>
                                        </div>
                                        <div class="col-sm-4">
                                            <a href="https://www.youtube.com/watch?v=SFmRQBsIPE8" class="article">
                                                <div class="img"><img class="img-responsive" src="assets/images/art-vdo7.png"><i class="m-icon m-icon-vdo"></i></div>
                                                <div class="text"><h3>กิจกรรมการจัดงานประชุมนานาชาติประจำปี 2020 ณ อิมแพคเมืองทองธานี</h3></div>
                                            </a>
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
                $('.article-box').magnificPopup({
                    delegate: 'a',
                    disableOn: 700,
                    type: 'iframe',
                    mainClass: 'mfp-fade',
                    removalDelay: 160,
                    preloader: false,
                    fixedContentPos: false
                });
            })();
        </script>
    </body>
</html>