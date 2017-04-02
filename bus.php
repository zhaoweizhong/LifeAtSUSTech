<?php
$pageTitle = "校园巴士&nbsp;-&nbsp;";
$pageType = "tutorial";
$active1 = "";
$active2 = "class=\"active\"";
require 'includes/header.php';
/* 设置时区并获得星期几和时间 */
ini_set('date.timezone','Asia/Shanghai');
$getDate = localtime();
$dayOfTheWeek = $getDate[6];
$time = date("H:i");
/* 判断是否工作日 */
if ($dayOfTheWeek == 0 || $dayOfTheWeek == 6){
    $isWeekday = 0;
}else{
    $isWeekday = 1;
}
/* 时刻表数组 */
$liyuanTimeWeekday = array('04:00','07:10','07:20','07:30','07:40','08:15','09:25','09:50','10:00','11:45','12:00','12:15',
                           '12:30','12:45','13:00','13:20','13:30','13:40','15:20','15:50','16:00','18:30','18:45','21:00');
$libraryTimeWeekday = array('04:00','08:30','09:50','10:00','11:45','12:00','12:15','12:30','12:45','13:00','13:30','13:40','15:40','15:50','16:00','17:30','21:10','22:05');
$liyuanTimeWeekend = array('04:00','07:40','08:20','08:50','09:20','09:50','11:00','11:30','12:00','14:00','14:30','15:00','16:00','17:00','19:00','20:00','20:45');
$libraryTimeWeekend = array('04:00','08:05','08:35','09:05','09:35','10:05','11:15','11:45','12:15','14:15','14:45','15:15','16:15','17:15','19:15','20:15','21:00');
/* 荔园 */
    $isBus = 0;
    $liyuanNextBus = '';
    $libraryNextBus = '';
if ($isWeekday == 1){ // 工作日
    for ($counter = 0; $counter <= 22; $counter++){
        if ($time > $liyuanTimeWeekday[$counter] && $time <= $liyuanTimeWeekday[$counter + 1]){
            $isBus = 1;
            $liyuanNextBus = $liyuanTimeWeekday[$counter + 1];
            break;
        }elseif ($time > '21:00' || $time <= '04:00'){
            $isBus = 0;
            break;
        }else{}
    }
}else{ // 周末
    for ($counter = 0; $counter <= 16; $counter++){
        if ($time > $liyuanTimeWeekend[$counter] && $time <= $liyuanTimeWeekend[$counter + 1]){
            $isBus = 1;
            $liyuanNextBus = $liyuanTimeWeekend[$counter + 1];
            break;
        }elseif ($time > '22:05' || $time <= '04:00'){
            $isBus = 0;
            break;
        }else{}
    }
}
/* 图书馆 */
if ($isWeekday == 1){ // 工作日
    for ($counter = 0; $counter <= 15; $counter++){
        if ($time > $libraryTimeWeekday[$counter] && $time <= $libraryTimeWeekday[$counter + 1]){
            $isBus = 1;
            $libraryNextBus = $libraryTimeWeekday[$counter + 1];
            break;
        }elseif ($time > '20:45' || $time <= '04:00'){
            $isBus = 0;
            break;
        }else{}
    }
}else{ // 周末
    for ($counter = 0; $counter <= 15; $counter++){
        if ($time > $libraryTimeWeekend[$counter] && $time <= $libraryTimeWeekend[$counter + 1]){
            $isBus = 1;
            $libraryNextBus = $libraryTimeWeekend[$counter + 1];
            break;
        }elseif ($time > '21:00' || $time <= '04:00'){
            $isBus = 0;
            break;
        }else{}
    }
}
?>

    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('https://cache.sustech.net/bg1.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <h1 class="title text-center">校园巴士</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="main main-raised">
            <div class="section">
                <div class="container">
                    <div class="row tim-row">
                        <h3>下一班车</h3>
                        <blockquote>
                            <p>
                                <?php
                                    if ($isBus == 1){
                                        echo '由荔园开出的下一班车的发车时间是:<strong>'.$liyuanNextBus.'</strong>，由图书馆开出的下一班车的发车时间是:<strong>'.$libraryNextBus.'</strong>';
                                    }else{
                                        echo '很不幸运，你错过了末班车...多走路锻炼身体吧';
                                    }
                                ?>
                            </p>
                        </blockquote>
                        <br>
                        <h3>时刻表</h3>
                        <div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills" role="tablist">
                                <li role="presentation" <?php if ($isWeekday == 1) {echo "class=\"active\"";}else{} ?>><a href="#workday" aria-controls="workday" role="tab" data-toggle="tab">工作日</a></li>
                                <li role="presentation" <?php if ($isWeekday == 0) {echo "class=\"active\"";}else{} ?>><a href="#weekend" aria-controls="weekend" role="tab" data-toggle="tab">周末/节假日</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade <?php if ($isWeekday == 1) {echo "in active";}else{} ?>" id="workday">
                                    <br>
                                    <div class="col-xs-6 .col-sm-4">
                                        <h4>荔园</h4>
                                        <table class="table table-striped text-center">
                                            <tr>
                                                <td <?php if ($time <= '07:10' && $time >= '04:00'){echo "class=\"success\"";}else{}?>>7:10</td>
                                                <td <?php if ($time <= '07:20' && $time > '07:10'){echo "class=\"success\"";}else{}?>>7:20</td>
                                                <td <?php if ($time <= '07:30' && $time > '07:20'){echo "class=\"success\"";}else{}?>>7:30</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '07:40' && $time > '07:30'){echo "class=\"success\"";}else{}?>>7:40</td>
                                                <td <?php if ($time <= '08:15' && $time > '07:40'){echo "class=\"success\"";}else{}?>>8:15</td>
                                                <td <?php if ($time <= '09:25' && $time > '08:15'){echo "class=\"success\"";}else{}?>>9:25</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '09:50' && $time > '09:25'){echo "class=\"success\"";}else{}?>>9:50</td>
                                                <td <?php if ($time <= '10:00' && $time > '09:50'){echo "class=\"success\"";}else{}?>>10:00</td>
                                                <td <?php if ($time <= '11:45' && $time > '10:00'){echo "class=\"success\"";}else{}?>>11:45</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '12:00' && $time > '11:45'){echo "class=\"success\"";}else{}?>>12:00</td>
                                                <td <?php if ($time <= '12:15' && $time > '12:00'){echo "class=\"success\"";}else{}?>>12:15</td>
                                                <td <?php if ($time <= '12:30' && $time > '12:15'){echo "class=\"success\"";}else{}?>>12:30</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '12:45' && $time > '12:30'){echo "class=\"success\"";}else{}?>>12:45</td>
                                                <td <?php if ($time <= '13:00' && $time > '12:45'){echo "class=\"success\"";}else{}?>>13:00</td>
                                                <td <?php if ($time <= '13:20' && $time > '13:00'){echo "class=\"success\"";}else{}?>>13:20</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '13:30' && $time > '13:20'){echo "class=\"success\"";}else{}?>>13:30</td>
                                                <td <?php if ($time <= '13:40' && $time > '13:30'){echo "class=\"success\"";}else{}?>>13:40</td>
                                                <td <?php if ($time <= '15:20' && $time > '13:40'){echo "class=\"success\"";}else{}?>>15:20</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '15:50' && $time > '15:20'){echo "class=\"success\"";}else{}?>>15:50</td>
                                                <td <?php if ($time <= '16:00' && $time > '15:50'){echo "class=\"success\"";}else{}?>>16:00</td>
                                                <td <?php if ($time <= '18:30' && $time > '16:00'){echo "class=\"success\"";}else{}?>>18:30</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '18:45' && $time > '18:30'){echo "class=\"success\"";}else{}?>>18:45</td>
                                                <td <?php if ($time <= '21:00' && $time > '18:45'){echo "class=\"success\"";}else{}?>>21:00</td>
                                                <td>-</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-xs-6 .col-sm-4">
                                        <h4>图书馆</h4>
                                        <table class="table table-striped text-center">
                                            <tr>
                                                <td <?php if ($time <= '08:30' && $time >= '04:00'){echo "class=\"success\"";}else{}?>>8:30</td>
                                                <td <?php if ($time <= '09:50' && $time > '08:30'){echo "class=\"success\"";}else{}?>>9:50</td>
                                                <td <?php if ($time <= '10:00' && $time > '09:50'){echo "class=\"success\"";}else{}?>>10:00</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '11:45' && $time > '10:00'){echo "class=\"success\"";}else{}?>>11:45</td>
                                                <td <?php if ($time <= '12:00' && $time > '11:45'){echo "class=\"success\"";}else{}?>>12:00</td>
                                                <td <?php if ($time <= '12:15' && $time > '12:00'){echo "class=\"success\"";}else{}?>>12:15</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '12:30' && $time > '12:15'){echo "class=\"success\"";}else{}?>>12:30</td>
                                                <td <?php if ($time <= '12:45' && $time > '12:30'){echo "class=\"success\"";}else{}?>>12:45</td>
                                                <td <?php if ($time <= '13:00' && $time > '12:45'){echo "class=\"success\"";}else{}?>>13:00</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '13:30' && $time > '13:00'){echo "class=\"success\"";}else{}?>>13:30</td>
                                                <td <?php if ($time <= '13:40' && $time > '13:30'){echo "class=\"success\"";}else{}?>>13:40</td>
                                                <td <?php if ($time <= '15:40' && $time > '13:40'){echo "class=\"success\"";}else{}?>>15:40</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '15:50' && $time > '15:40'){echo "class=\"success\"";}else{}?>>15:50</td>
                                                <td <?php if ($time <= '16:00' && $time > '15:50'){echo "class=\"success\"";}else{}?>>16:00</td>
                                                <td <?php if ($time <= '17:30' && $time > '16:00'){echo "class=\"success\"";}else{}?>>17:30</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '21:10' && $time > '17:30'){echo "class=\"success\"";}else{}?>>21:10</td>
                                                <td <?php if ($time <= '22:05' && $time > '21:10'){echo "class=\"success\"";}else{}?>>22:05</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                            <tr>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade <?php if ($isWeekday == 0) {echo "in active";}else{} ?>" id="weekend">
                                    <br>
                                    <div class="col-xs-6 .col-sm-4">
                                        <h4>荔园</h4>
                                        <table class="table table-striped text-center">
                                            <tr>
                                                <td <?php if ($time <= '07:40' && $time >= '04:00'){echo "class=\"success\"";}else{}?>>7:40</td>
                                                <td <?php if ($time <= '08:20' && $time > '07:40'){echo "class=\"success\"";}else{}?>>8:20</td>
                                                <td <?php if ($time <= '08:50' && $time > '08:20'){echo "class=\"success\"";}else{}?>>8:50</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '09:20' && $time > '08:50'){echo "class=\"success\"";}else{}?>>9:20</td>
                                                <td <?php if ($time <= '09:50' && $time > '09:20'){echo "class=\"success\"";}else{}?>>9:50</td>
                                                <td <?php if ($time <= '11:00' && $time > '09:50'){echo "class=\"success\"";}else{}?>>11:00</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '11:30' && $time > '11:00'){echo "class=\"success\"";}else{}?>>11:30</td>
                                                <td <?php if ($time <= '12:00' && $time > '11:30'){echo "class=\"success\"";}else{}?>>12:00</td>
                                                <td <?php if ($time <= '14:00' && $time > '12:00'){echo "class=\"success\"";}else{}?>>14:00</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '14:30' && $time > '14:00'){echo "class=\"success\"";}else{}?>>14:30</td>
                                                <td <?php if ($time <= '15:00' && $time > '14:30'){echo "class=\"success\"";}else{}?>>15:00</td>
                                                <td <?php if ($time <= '16:00' && $time > '15:00'){echo "class=\"success\"";}else{}?>>16:00</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '17:00' && $time > '16:00'){echo "class=\"success\"";}else{}?>>17:00</td>
                                                <td <?php if ($time <= '19:00' && $time > '17:00'){echo "class=\"success\"";}else{}?>>19:00</td>
                                                <td <?php if ($time <= '20:00' && $time > '19:00'){echo "class=\"success\"";}else{}?>>20:00</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '20:45' && $time > '20:00'){echo "class=\"success\"";}else{}?>>20:45</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-xs-6 .col-sm-4">
                                        <h4>图书馆</h4>
                                        <table class="table table-striped text-center">
                                            <tr>
                                                <td <?php if ($time <= '08:05' && $time >= '04:00'){echo "class=\"success\"";}else{}?>>8:05</td>
                                                <td <?php if ($time <= '08:35' && $time > '08:05'){echo "class=\"success\"";}else{}?>>8:35</td>
                                                <td <?php if ($time <= '09:05' && $time > '08:35'){echo "class=\"success\"";}else{}?>>9:05</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '09:35' && $time > '09:05'){echo "class=\"success\"";}else{}?>>9:35</td>
                                                <td <?php if ($time <= '10:05' && $time > '09:35'){echo "class=\"success\"";}else{}?>>10:05</td>
                                                <td <?php if ($time <= '11:15' && $time > '10:05'){echo "class=\"success\"";}else{}?>>11:15</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '11:45' && $time > '11:15'){echo "class=\"success\"";}else{}?>>11:45</td>
                                                <td <?php if ($time <= '12:15' && $time > '11:45'){echo "class=\"success\"";}else{}?>>12:15</td>
                                                <td <?php if ($time <= '14:15' && $time > '12:15'){echo "class=\"success\"";}else{}?>>14:15</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '14:45' && $time > '14:15'){echo "class=\"success\"";}else{}?>>14:45</td>
                                                <td <?php if ($time <= '15:15' && $time > '14:45'){echo "class=\"success\"";}else{}?>>15:15</td>
                                                <td <?php if ($time <= '16:15' && $time > '15:15'){echo "class=\"success\"";}else{}?>>16:15</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '17:15' && $time > '16:15'){echo "class=\"success\"";}else{}?>>17:15</td>
                                                <td <?php if ($time <= '19:15' && $time > '17:15'){echo "class=\"success\"";}else{}?>>19:15</td>
                                                <td <?php if ($time <= '20:15' && $time > '19:15'){echo "class=\"success\"";}else{}?>>20:15</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '21:00' && $time > '20:15'){echo "class=\"success\"";}else{}?>>21:00</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
<script>
    $('#myTabs a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
    })

    $('#myTabs a[href="#workday"]').tab('show') // Select tab by name
    $('#myTabs a:first').tab('show') // Select first tab
    $('#myTabs a:last').tab('show') // Select last tab
    $('#myTabs li:eq(2) a').tab('show') // Select third tab (0-indexed)
</script>
<?php require 'includes/footer.php'; ?>