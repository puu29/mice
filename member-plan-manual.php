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
                    <div class="row">
                        <div class="col-md-8">
                            <form action="member-plan-manage.php" method="post">
                                <h2 class="font-semibold no-margin-top">วางแผนการจัดงานไมซ์ (แบบเลือกด้วยตัวเอง)</h2>
                                <p>เริ่มการสร้างและวางแผนอีเว้นท์ของคุณเก็บมันไว้ คุณสามารถจัดการรายละเอียดและเลือกผู้ให้บริการสำหรับอีเว้นท์ของคุณได้ เช่น สถานที่จัดงาน อาหารและเครื่องดื่ม ผู้ผลิตของชำร่วย โดยข้อมูลทั่วไปจะเก็บอยู่ ภายในบัญชีของคุณ ซึ่งจะไม่ถูกเปิดเผยให้ผู้ใช้งานอื่นมองเห็น</p>
                                <br/>
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h3 class="font-semibold no-margin">ส่วนที่ 1 : ระบุข้อมูลทั่วไปสำหรับการจัดงาน</h3><br/>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="font-semibold">ประเภทการจัดงาน</label>
                                                    <div class="select fullwidth">
                                                        <select class="form-control">
                                                            <option value="">เลือกประเภทงานจัดงาน</option>
                                                        </select>
                                                        <span class="m-icon m-icon-dropdown"></span>
                                                    </div>
                                                    <p class="required">กรุณาเลือกข้อมูล</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="font-semibold">ชื่อกิจกรรม</label>
                                                    <input type="text" class="form-control" placeholder="ตั้งชื่ออีเว้นท์ของคุณ">
                                                    <p class="required">กรุณากรอกข้อมูล</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-12">
                                                <div class="form-group">
                                                    <label class="font-semibold">คำอธิบาย (เพิ่มเติม)</label>
                                                    <div class="limit-char">
                                                        <textarea class="form-control" rows="3" maxlength="600" placeholder="คุณสามารถใส่คำอธิบายเพิ่มเติมลงไปได้"></textarea>
                                                        <div class="char"><span class="cnt">0</span>/600</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="font-semibold">ระบุจังหวัดที่ต้องการจะจัดงาน</label>
                                                    <div class="select fullwidth">
                                                        <select class="form-control">
                                                            <option value="">ระบุจังหวัดที่ต้องการจะจัดงาน</option>
                                                        </select>
                                                        <span class="m-icon m-icon-dropdown"></span>
                                                    </div>
                                                    <p class="required">กรุณาเลือกข้อมูล</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="font-semibold">จำนวนคน</label>
                                                    <input type="text" data-mask="00000" class="form-control" placeholder="ระบุจำนวนคน">
                                                    <p class="required">กรุณากรอกข้อมูล</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="font-medium">วันที่เริ่มงาน</label>
                                                    <div class="input-group is-calendar">
                                                        <input type="text" class="form-control datepicker2" placeholder="DD/MM/YYYY">
                                                        <span class="input-group-addon bg-custom b-0"><i class="m-icon m-icon-calendar"></i></span>
                                                    </div>
                                                    <p class="required">กรุณาเลือกข้อมูล</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="font-medium">วันที่สิ้นสุดงาน</label>
                                                    <div class="input-group is-calendar">
                                                        <input type="text" class="form-control datepicker2" placeholder="DD/MM/YYYY">
                                                        <span class="input-group-addon bg-custom b-0"><i class="m-icon m-icon-calendar"></i></span>
                                                    </div>
                                                    <p class="required">กรุณาเลือกข้อมูล</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="font-semibold">เริ่มเวลา</label>
                                                    <div class="input-time">
                                                        <div class="select">
                                                            <select class="form-control">
                                                                <option value="">08.00</option>
                                                            </select>
                                                            <span class="m-icon m-icon-dropdown"></span>
                                                        </div>
                                                        <span class="symbol">-</span>
                                                        <div class="select">
                                                            <select class="form-control">
                                                                <option value="">08.00</option>
                                                            </select>
                                                            <span class="m-icon m-icon-dropdown"></span>
                                                        </div>
                                                    </div>
                                                    <p class="required">กรุณาเลือกข้อมูล</p>
                                                </div>
                                            </div>
                                        </div>
                                        <br/>
                                        <h3>ส่วนที่ 2 : เลือกกลุ่มธุรกิจเฉพาะ</h3>
                                        <p class="no-margin">ท่านสามารถเลือกกลุ่มธุรกิจเฉพาะเพื่อการค้นหาที่่ตรงกับความต้องการของท่านให้เร็วยิ่งขึ้น โดยในหน้าถัดไประบบจะแสดงเฉพาะกลุ่มธุรกิจที่ท่านได้ทำการเลือกไว้เท่านั้น</p><br/>
                                        <div class="col-3 mobile-col-2">
                                            <div class="form-group no-margin">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox1">
                                                    <label class="mobile-font-regular" for="checkbox1">ออร์แกไนเซอร์</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox2">
                                                    <label class="mobile-font-regular" for="checkbox2">สถานที่จัดงาน</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox3">
                                                    <label class="mobile-font-regular" for="checkbox3">บริการสำหรับผู้จัดงาน</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox4">
                                                    <label class="mobile-font-regular" for="checkbox4">ที่พัก</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox5">
                                                    <label class="mobile-font-regular" for="checkbox5">Logistic</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox6">
                                                    <label class="mobile-font-regular" for="checkbox6">อาหารและเครื่องดื่ม</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox7">
                                                    <label class="mobile-font-regular" for="checkbox7">ร้านค้า/สินค้า</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox8">
                                                    <label class="mobile-font-regular" for="checkbox8">ท่องเที่ยว/นำเที่ยว</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox9">
                                                    <label class="mobile-font-regular" for="checkbox9">โชว์/การแสดง</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox10">
                                                    <label class="mobile-font-regular" for="checkbox10">วิทยากร</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox11">
                                                    <label class="mobile-font-regular" for="checkbox11">หน่วยงานที่เกี่ยวข้อง</label>
                                                </div>
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox12">
                                                    <label class="mobile-font-regular" for="checkbox12">ธุรกิจบริการอื่นๆ</label>
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                        <p class="font-blue"><b>ออร์แกไนเซอร์</b></p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="font-semibold">สิ่งอำนวยความสะดวก</label>
                                                    <div class="select fullwidth">
                                                        <select class="form-control">
                                                            <option value="">เลือกสิ่งอำนวยความสะดวกที่ต้องการ</option>
                                                        </select>
                                                        <span class="m-icon m-icon-dropdown"></span>
                                                    </div>
                                                    <p class="required">กรุณาเลือกข้อมูล</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="font-semibold">งบประมาณที่ประมาณไว้</label>
                                                    <input type="text" data-mask="#,###" data-mask-reverse="true" class="form-control" placeholder="ระบุงบประมาณ">
                                                    <p class="required">กรุณากรอกข้อมูล</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="font-semibold">จำนวนคนที่ต้องการ (ทีมงาน)</label>
                                                    <input type="text" data-mask="00000" class="form-control" placeholder="ระบุจำนวนคน">
                                                    <p class="required">กรุณากรอกข้อมูล</p>
                                                </div>
                                            </div>
                                        </div>
                                        <hr/>
                                        <p class="font-blue"><b>สถานที่จัดงาน</b></p>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="font-semibold">สิ่งอำนวยความสะดวกในการเดินทาง</label>
                                                    <div class="select fullwidth">
                                                        <select class="form-control">
                                                            <option value="">เลือกสิ่งอำนวยความสะดวกที่ต้องการ</option>
                                                        </select>
                                                        <span class="m-icon m-icon-dropdown"></span>
                                                    </div>
                                                    <p class="required">กรุณาเลือกข้อมูล</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="font-semibold">ขนาดพื้นที่ที่ต้องการ (ตร.ม.)</label>
                                                    <input type="text" data-mask="00000" class="form-control" placeholder="ระบุขนาดพื้นที่">
                                                    <p class="required">ระบุขนาดพื้นที่</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="font-semibold">ประเภทห้อง</label>
                                                    <div class="select fullwidth">
                                                        <select class="form-control">
                                                            <option value="">เลือกประเภทห้อง</option>
                                                        </select>
                                                        <span class="m-icon m-icon-dropdown"></span>
                                                    </div>
                                                    <p class="required">กรุณาเลือกข้อมูล</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label class="font-semibold">สิ่งอำนวยความสะดวกอื่นๆ</label>
                                                    <div class="select fullwidth">
                                                        <select class="form-control">
                                                            <option value="">เลือกสิ่งอำนวยความสะดวกอื่นๆ</option>
                                                        </select>
                                                        <span class="m-icon m-icon-dropdown"></span>
                                                    </div>
                                                    <p class="required">กรุณาเลือกข้อมูล</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br/><br/><br/>
                                <div class="btn-box text-center">
                                    <button type="submit" class="btn btn-md btn-minwidth btn-blue-linear font-medium">เลือกสถานที่จัดงานต่อ</button>
                                </div>
                                <br/><br/><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include "layout/footer.php" ?>
    </body>
</html>