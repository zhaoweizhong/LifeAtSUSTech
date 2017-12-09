<?php
$pageTitle = "校园巴士&nbsp;-&nbsp;";
$pageType = "tutorial";
$active1 = "";
$active2 = "class=\"active\"";
require 'includes/header.php';
/* 设置时区并获得星期几和时间 */
ini_set('date.timezone','Asia/Shanghai');
$getDate = localtime();
$time = date("H:i");
$day = date("Ymd");
$apiJson = file_get_contents("http://www.easybots.cn/api/holiday.php?d=".$day."&ak=k327.c1a0c6873b87f124499e27ab56311791@lomme.cn");
$api = json_decode($apiJson);
/* 使用API判断是否工作日 */
if (end($api) == 1 || end($api) == 2){
    $isWeekday = 0;
}else{
    $isWeekday = 1;
}
/* 时刻表数组 */
$xinyuanTimeWeekday = array('04:00','07:20','07:30','07:40','08:00','08:20','08:40','09:00','09:20','09:40','09:50','10:00',
                            '10:20','10:40','11:00','11:20','11:40','12:00','12:10','12:20','12:30','12:40','13:00','13:20',
                            '13:30','13:40','14:00','14:20','14:40','15:00','15:20','15:40','15:50','16:00','16:20','16:40',
                            '17:00','17:20','17:40','18:00','18:20','19:00','20:00','21:00');
$keyanlouTimeWeekday = array('04:00','07:50','08:10','08:20','08:40','09:00','09:20','09:40','09:50','10:00','10:20','10:40',
                             '11:00','11:20','11:40','12:00','12:10','12:20','12:30','12:40','13:00','13:20','13:40','14:00',
                             '14:20','14:40','15:00','15:20','15:40','15:50','16:00','16:20','16:40','17:00','17:20','17:40',
                             '18:00','18:20','18:40','19:20','20:20','21:20','22:00');
$jiyuechengTime = array('04:00','07:20','13:30');
$liyuanTime = array('04:00','12:40','18:40','22:10');
$xinyuanTimeWeekend =  array('04:00','07:30','08:00','08:30','09:00','09:30','10:00','10:30','11:00','11:30','12:00','12:30',
                             '13:00','13:30','14:00','14:30','15:00','15:30','16:00','16:30','17:00','17:30','18:00','19:00','20:00','21:00');
$keyanlouTimeWeekend = array('04:00','07:50','08:20','08:50','09:20','09:50','10:20','10:50','11:20','11:50','12:20','12:50',
                             '13:20','13:50','14:20','14:50','15:20','15:50','16:20','16:50','17:20','17:50','18:20','19:20',
                             '20:20','21:20','22:00');
/* 欣园 */
    $iskeyanlouBus = 0;
    $isxinyuanBus = 0;
    $isjiyuechengBus = 0;
    $isliyuanBus = 0;
    $xinyuanNextBus = '';
    $keyanlouNextBus = '';
    $jiyuechengNextBus = '';
    $liyuanNextBus = '';
if ($isWeekday == 1){ // 工作日
    for ($counter = 0; $counter <= 43; $counter++){
        if ($time > $xinyuanTimeWeekday[$counter] && $time <= $xinyuanTimeWeekday[$counter + 1]){
            $isxinyuanBus = 1;
            $xinyuanNextBus = $xinyuanTimeWeekday[$counter + 1];
            break;
        }elseif ($time > '21:00' || $time <= '04:00'){
            $isxinyuanBus = 0;
            break;
        }
    }
}else{ // 周末
    for ($counter = 0; $counter <= 25; $counter++){
        if ($time > $xinyuanTimeWeekend[$counter] && $time <= $xinyuanTimeWeekend[$counter + 1]){
            $isxinyuanBus = 1;
            $xinyuanNextBus = $xinyuanTimeWeekend[$counter + 1];
            break;
        }elseif ($time > '21:00' || $time <= '04:00'){
            $isxinyuanBus = 0;
            break;
        }
    }
}
/* 科研楼 */
if ($isWeekday == 1){ // 工作日
    for ($counter = 0; $counter <= 42; $counter++){
        if ($time > $keyanlouTimeWeekday[$counter] && $time <= $keyanlouTimeWeekday[$counter + 1]){
            $iskeyanlouBus = 1;
            $keyanlouNextBus = $keyanlouTimeWeekday[$counter + 1];
            break;
        }elseif ($time > '22:00' || $time <= '04:00'){
            $iskeyanlouBus = 0;
            break;
        }
    }
}else{ // 周末
    for ($counter = 0; $counter <= 26; $counter++){
        if ($time > $keyanlouTimeWeekend[$counter] && $time <= $keyanlouTimeWeekend[$counter + 1]){
            $iskeyanlouBus = 1;
            $keyanlouNextBus = $keyanlouTimeWeekend[$counter + 1];
            break;
        }elseif ($time > '22:00' || $time <= '04:00'){
            $iskeyanlouBus = 0;
            break;
        }
    }
}
/* 集悦城 */
if ($isWeekday == 1){ // 工作日
    for ($counter = 0; $counter <= 2; $counter++){
        if ($time > $jiyuechengTime[$counter] && $time <= $jiyuechengTime[$counter + 1]){
            $isjiyuechengBus = 1;
            $jiyuechengNextBus = $jiyuechengTime[$counter + 1];
            break;
        }elseif ($time > '13:30' || $time <= '04:00'){
            $isjiyuechengBus = 0;
            break;
        }
    }
}else{
    $isjiyuechengBus = 2;
}
/* 荔园 */
if ($isWeekday == 1){ // 工作日
    for ($counter = 0; $counter <= 2; $counter++){
        if ($time > $liyuanTime[$counter] && $time <= $liyuanTime[$counter + 1]){
            $isliyuanBus = 1;
            $liyuanNextBus = $liyuanTime[$counter + 1];
            break;
        }elseif ($time > '22:10' || $time <= '04:00'){
            $isliyuanBus = 0;
            break;
        }
    }
}else{
    $isliyuanBus = 2;
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
                    <div class="ad-banner">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- 南科导航-Banner -->
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-6170983579457537"
                             data-ad-slot="2810399392"
                             data-ad-format="auto"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>

                    <div class="row tim-row">
                        <h3>下一班车</h3>
                        <blockquote>
                            <p class="line">
                                <?php
                                    $xinyuanText = '';
                                    $keyanlouText = '';
                                    $jiyuechengText = '';
                                    $liyuanText = '';
                                    if ($isxinyuanBus == 1 || $iskeyanlouBus == 1 || $isjiyuechengBus == 1 || $isliyuanBus == 1) {
                                        if ($isxinyuanBus == 1) {
                                            $xinyuanText = '由欣园开出的下一班车的发车时间是:<strong>'.$xinyuanNextBus.'</strong>；';
                                        }else{
                                            $xinyuanText = '很不幸运，你错过了欣园开出的末班车...多走路锻炼身体吧；';
                                        }
                                        if ($iskeyanlouBus == 1) {
                                            $keyanlouText = '由科研楼开出的下一班车的发车时间是:<strong>'.$keyanlouNextBus.'</strong>；';
                                        }else{
                                            $keyanlouText = '很不幸运，你错过了科研楼开出的末班车...多走路锻炼身体吧；';
                                        }
                                        if ($isjiyuechengBus == 1) {
                                            $jiyuechengText = '由集悦城开出的下一班车的发车时间是:<strong>'.$jiyuechengNextBus.'</strong>；';
                                        }else if ($isjiyuechengBus == 2)
                                        {
                                            $jiyuechengText = '今天是周末/节假日，集悦城线不营运。';
                                        }else{
                                            $jiyuechengText = '很不幸运，你错过了集悦城开出的末班车...多走路锻炼身体吧；';
                                        }
                                        if ($isliyuanBus == 1) {
                                            $liyuanText = '由荔园开出的下一班车的发车时间是:<strong>'.$liyuanNextBus.'</strong>。';
                                        }else if ($isliyuanBus == 0){
                                            $liyuanText = '很不幸运，你错过了荔园开出的末班车...多走路锻炼身体吧。';
                                        }
                                        echo $xinyuanText . '<br>' . $keyanlouText . '<br>' . $jiyuechengText . '<br>' . $liyuanText;
                                    }else{
                                        echo '很不幸运，你错过了末班车...多走路锻炼身体吧。';
                                    }
                                ?>
                            </p>
                        </blockquote>
                        <br>
                        <h3>线路及站点</h3>
                        <div>
                            <blockquote>
                                <p>
                                    <h6 class="h-inline">线路 1：</h6>欣园⇋欣园⇋慧园⇋荔园⇋教工餐厅→社康中心→专家公寓⇋三号门⇋二号门⇋一号门⇋行政楼⇋七号门⇋科研楼<br>
                                    <h6 class="h-inline">线路 2：</h6><b>荔园→集悦城：</b>荔园→慧园→行政楼→七号门→集悦城<b>&nbsp;&nbsp;集悦城→荔园：</b>集悦城→六号门→荔园→慧园<br>
                                    <h6 class="h-inline">线路 3：</h6>欣园⇋慧园⇋荔园⇋科研楼 <b>(下方时刻表中标红的高峰期执行此路线)</b>
                                </p>
                            </blockquote>
                        </div>
                        <h3>时刻表</h3>
                        <div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-pills" role="tablist">
                                <li role="presentation" <?php if ($isWeekday == 1) {echo "class=\"active\"";} ?>><a href="#workday" aria-controls="workday" role="tab" data-toggle="tab">工作日</a></li>
                                <li role="presentation" <?php if ($isWeekday == 0) {echo "class=\"active\"";} ?>><a href="#weekend" aria-controls="weekend" role="tab" data-toggle="tab">周末/节假日</a></li>
                                <li role="presentation"><a href="#jiyuecheng" aria-controls="jiyuecheng" role="tab" data-toggle="tab">集悦城线</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade <?php if ($isWeekday == 1) {echo "in active";} ?>" id="workday">
                                    <br>
                                    <div class="col-xs-6 .col-sm-4">
                                        <h4>欣园</h4>
                                        <table class="table table-striped text-center">
                                            <tr>
                                                <td <?php if ($time <= '07:20' && $time >= '04:00'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>7:20</td>
                                                <td <?php if ($time <= '07:30' && $time > '07:20'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>7:30</td>
                                                <td <?php if ($time <= '07:40' && $time > '07:30'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>7:40</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '08:00' && $time > '07:40'){echo "class=\"success\"";}?>>8:00</td>
                                                <td <?php if ($time <= '08:20' && $time > '08:00'){echo "class=\"success\"";}?>>8:20</td>
                                                <td <?php if ($time <= '08:40' && $time > '08:20'){echo "class=\"success\"";}?>>8:40</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '09:00' && $time > '08:40'){echo "class=\"success\"";}?>>9:00</td>
                                                <td <?php if ($time <= '09:20' && $time > '09:00'){echo "class=\"success\"";}?>>9:20</td>
                                                <td <?php if ($time <= '09:40' && $time > '09:20'){echo "class=\"success\"";}?>>9:40</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '09:50' && $time > '09:40'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>9:50</td>
                                                <td <?php if ($time <= '10:00' && $time > '09:50'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>10:00</td>
                                                <td <?php if ($time <= '10:20' && $time > '10:00'){echo "class=\"success\"";}?>>10:20</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '10:40' && $time > '10:20'){echo "class=\"success\"";}?>>10:40</td>
                                                <td <?php if ($time <= '11:00' && $time > '10:40'){echo "class=\"success\"";}?>>11:00</td>
                                                <td <?php if ($time <= '11:20' && $time > '11:00'){echo "class=\"success\"";}?>>11:20</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '11:40' && $time > '11:20'){echo "class=\"success\"";}?>>11:40</td>
                                                <td <?php if ($time <= '12:00' && $time > '11:40'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>12:00</td>
                                                <td <?php if ($time <= '12:10' && $time > '12:00'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>12:10</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '12:20' && $time > '12:10'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>12:20</td>
                                                <td <?php if ($time <= '12:30' && $time > '12:20'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>12:30</td>
                                                <td <?php if ($time <= '12:40' && $time > '12:30'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>12:40</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '13:00' && $time > '12:40'){echo "class=\"success\"";}?>>13:00</td>
                                                <td <?php if ($time <= '13:20' && $time > '13:00'){echo "class=\"success\"";}?>>13:20</td>
                                                <td <?php if ($time <= '13:30' && $time > '13:20'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>13:30</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '13:40' && $time > '13:30'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>13:40</td>
                                                <td <?php if ($time <= '14:00' && $time > '13:40'){echo "class=\"success\"";}?>>14:00</td>
                                                <td <?php if ($time <= '14:20' && $time > '14:00'){echo "class=\"success\"";}?>>14:20</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '14:40' && $time > '14:20'){echo "class=\"success\"";}?>>14:40</td>
                                                <td <?php if ($time <= '15:00' && $time > '14:40'){echo "class=\"success\"";}?>>15:00</td>
                                                <td <?php if ($time <= '15:20' && $time > '15:00'){echo "class=\"success\"";}?>>15:20</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '15:40' && $time > '15:20'){echo "class=\"success\"";}?>>15:40</td>
                                                <td <?php if ($time <= '15:50' && $time > '15:40'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>15:50</td>
                                                <td <?php if ($time <= '16:00' && $time > '15:50'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>16:00</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '16:20' && $time > '16:00'){echo "class=\"success\"";}?>>16:20</td>
                                                <td <?php if ($time <= '16:40' && $time > '16:20'){echo "class=\"success\"";}?>>16:40</td>
                                                <td <?php if ($time <= '17:00' && $time > '16:40'){echo "class=\"success\"";}?>>17:00</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '17:20' && $time > '17:00'){echo "class=\"success\"";}?>>17:20</td>
                                                <td <?php if ($time <= '17:40' && $time > '17:20'){echo "class=\"success\"";}?>>17:40</td>
                                                <td <?php if ($time <= '18:00' && $time > '17:40'){echo "class=\"success\"";}?>>18:00</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '18:20' && $time > '18:00'){echo "class=\"success\"";}?>>18:20</td>
                                                <td <?php if ($time <= '19:00' && $time > '18:20'){echo "class=\"success\"";}?>>19:00</td>
                                                <td <?php if ($time <= '20:00' && $time > '19:00'){echo "class=\"success\"";}?>>20:00</td>

                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '21:00' && $time > '20:00'){echo "class=\"success\"";}?>>21:00</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-xs-6 .col-sm-4">
                                        <h4>科研楼</h4>
                                        <table class="table table-striped text-center">
                                            <tr>
                                                <td <?php if ($time <= '07:50' && $time >= '04:00'){echo "class=\"success\"";}?>>7:50</td>
                                                <td <?php if ($time <= '08:10' && $time > '07:50'){echo "class=\"success\"";}?>>8:10</td>
                                                <td <?php if ($time <= '08:20' && $time > '08:10'){echo "class=\"success\"";}?>>8:20</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '08:40' && $time > '08:20'){echo "class=\"success\"";}?>>8:40</td>
                                                <td <?php if ($time <= '09:00' && $time > '08:40'){echo "class=\"success\"";}?>>9:00</td>
                                                <td <?php if ($time <= '09:20' && $time > '09:00'){echo "class=\"success\"";}?>>9:20</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '09:40' && $time > '09:20'){echo "class=\"success\"";}?>>9:40</td>
                                                <td <?php if ($time <= '09:50' && $time > '09:40'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>9:50</td>
                                                <td <?php if ($time <= '10:00' && $time > '09:50'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>10:00</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '10:20' && $time > '10:00'){echo "class=\"success\"";}?>>10:20</td>
                                                <td <?php if ($time <= '10:40' && $time > '10:20'){echo "class=\"success\"";}?>>10:40</td>
                                                <td <?php if ($time <= '11:00' && $time > '10:40'){echo "class=\"success\"";}?>>11:00</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '11:20' && $time > '11:00'){echo "class=\"success\"";}?>>11:20</td>
                                                <td <?php if ($time <= '11:40' && $time > '11:20'){echo "class=\"success\"";}?>>11:40</td>
                                                <td <?php if ($time <= '12:00' && $time > '11:40'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>12:00</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '12:10' && $time > '12:00'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>12:10</td>
                                                <td <?php if ($time <= '12:20' && $time > '12:10'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>12:20</td>
                                                <td <?php if ($time <= '12:30' && $time > '12:20'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>12:30</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '12:40' && $time > '12:30'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>12:40</td>
                                                <td <?php if ($time <= '13:00' && $time > '12:40'){echo "class=\"success\"";}?>>13:00</td>
                                                <td <?php if ($time <= '13:20' && $time > '13:00'){echo "class=\"success\"";}?>>13:20</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '13:40' && $time > '13:20'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>13:40</td>
                                                <td <?php if ($time <= '14:00' && $time > '13:40'){echo "class=\"success\"";}?>>14:00</td>
                                                <td <?php if ($time <= '14:20' && $time > '14:00'){echo "class=\"success\"";}?>>14:20</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '14:40' && $time > '14:20'){echo "class=\"success\"";}?>>14:40</td>
                                                <td <?php if ($time <= '15:00' && $time > '14:40'){echo "class=\"success\"";}?>>15:00</td>
                                                <td <?php if ($time <= '15:20' && $time > '15:00'){echo "class=\"success\"";}?>>15:20</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '15:40' && $time > '15:20'){echo "class=\"success\"";}?>>15:40</td>
                                                <td <?php if ($time <= '15:50' && $time > '15:40'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>15:50</td>
                                                <td <?php if ($time <= '16:00' && $time > '15:50'){echo "class=\"danger red\"";}else{echo  "class=\"red\"";}?>>16:00</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '16:20' && $time > '16:00'){echo "class=\"success\"";}?>>16:20</td>
                                                <td <?php if ($time <= '16:40' && $time > '16:20'){echo "class=\"success\"";}?>>16:40</td>
                                                <td <?php if ($time <= '17:00' && $time > '16:40'){echo "class=\"success\"";}?>>17:00</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '17:20' && $time > '17:00'){echo "class=\"success\"";}?>>17:20</td>
                                                <td <?php if ($time <= '17:40' && $time > '17:20'){echo "class=\"success\"";}?>>17:40</td>
                                                <td <?php if ($time <= '18:00' && $time > '17:40'){echo "class=\"success\"";}?>>18:00</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '18:20' && $time > '18:00'){echo "class=\"success\"";}?>>18:20</td>
                                                <td <?php if ($time <= '18:40' && $time > '18:20'){echo "class=\"success\"";}?>>18:40</td>
                                                <td <?php if ($time <= '19:20' && $time > '18:40'){echo "class=\"success\"";}?>>19:20</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '20:20' && $time > '19:20'){echo "class=\"success\"";}?>>20:20</td>
                                                <td <?php if ($time <= '21:20' && $time > '20:20'){echo "class=\"success\"";}?>>21:20</td>
                                                <td <?php if ($time <= '22:00' && $time > '21:20'){echo "class=\"success\"";}?>>22:00</td>
                                            </tr>
                                            <tr>
                                                <td>-</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade <?php if ($isWeekday == 0) {echo "in active";} ?>" id="weekend">
                                    <br>
                                    <div class="col-xs-6 .col-sm-4">
                                        <h4>欣园</h4>
                                        <table class="table table-striped text-center">
                                            <tr>
                                                <td <?php if ($time <= '07:30' && $time >= '04:00'){echo "class=\"success\"";}?>>7:30</td>
                                                <td <?php if ($time <= '08:00' && $time > '07:30'){echo "class=\"success\"";}?>>8:00</td>
                                                <td <?php if ($time <= '08:30' && $time > '08:00'){echo "class=\"success\"";}?>>8:30</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '09:00' && $time > '08:30'){echo "class=\"success\"";}?>>9:00</td>
                                                <td <?php if ($time <= '09:30' && $time > '09:00'){echo "class=\"success\"";}?>>9:30</td>
                                                <td <?php if ($time <= '10:00' && $time > '09:30'){echo "class=\"success\"";}?>>10:00</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '10:30' && $time > '10:00'){echo "class=\"success\"";}?>>10:30</td>
                                                <td <?php if ($time <= '11:00' && $time > '10:30'){echo "class=\"success\"";}?>>11:00</td>
                                                <td <?php if ($time <= '11:30' && $time > '11:00'){echo "class=\"success\"";}?>>11:30</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '12:00' && $time > '11:30'){echo "class=\"success\"";}?>>12:00</td>
                                                <td <?php if ($time <= '12:30' && $time > '12:00'){echo "class=\"success\"";}?>>12:30</td>
                                                <td <?php if ($time <= '13:00' && $time > '12:30'){echo "class=\"success\"";}?>>13:00</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '13:30' && $time > '13:00'){echo "class=\"success\"";}?>>13:30</td>
                                                <td <?php if ($time <= '14:00' && $time > '13:30'){echo "class=\"success\"";}?>>14:00</td>
                                                <td <?php if ($time <= '14:30' && $time > '14:00'){echo "class=\"success\"";}?>>14:30</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '15:00' && $time > '14:30'){echo "class=\"success\"";}?>>15:00</td>
                                                <td <?php if ($time <= '15:30' && $time > '15:00'){echo "class=\"success\"";}?>>15:30</td>
                                                <td <?php if ($time <= '16:00' && $time > '15:30'){echo "class=\"success\"";}?>>16:00</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '16:30' && $time > '16:00'){echo "class=\"success\"";}?>>16:30</td>
                                                <td <?php if ($time <= '17:00' && $time > '16:30'){echo "class=\"success\"";}?>>17:00</td>
                                                <td <?php if ($time <= '17:30' && $time > '17:00'){echo "class=\"success\"";}?>>17:30</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '18:00' && $time > '17:30'){echo "class=\"success\"";}?>>18:00</td>
                                                <td <?php if ($time <= '19:00' && $time > '18:00'){echo "class=\"success\"";}?>>19:00</td>
                                                <td <?php if ($time <= '20:00' && $time > '19:00'){echo "class=\"success\"";}?>>20:00</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '21:00' && $time > '20:00'){echo "class=\"success\"";}?>>21:00</td>
                                                <td>-</td>
                                                <td>-</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-xs-6 .col-sm-4">
                                        <h4>科研楼</h4>
                                        <table class="table table-striped text-center">
                                            <tr>
                                                <td <?php if ($time <= '07:50' && $time >= '04:00'){echo "class=\"success\"";}?>>7:50</td>
                                                <td <?php if ($time <= '08:20' && $time > '07:50'){echo "class=\"success\"";}?>>8:20</td>
                                                <td <?php if ($time <= '08:50' && $time > '08:20'){echo "class=\"success\"";}?>>8:50</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '09:20' && $time > '08:50'){echo "class=\"success\"";}?>>9:20</td>
                                                <td <?php if ($time <= '09:50' && $time > '09:20'){echo "class=\"success\"";}?>>9:50</td>
                                                <td <?php if ($time <= '10:20' && $time > '09:50'){echo "class=\"success\"";}?>>10:20</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '10:50' && $time > '10:20'){echo "class=\"success\"";}?>>10:50</td>
                                                <td <?php if ($time <= '11:20' && $time > '10:50'){echo "class=\"success\"";}?>>11:20</td>
                                                <td <?php if ($time <= '11:50' && $time > '11:20'){echo "class=\"success\"";}?>>11:50</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '12:20' && $time > '11:50'){echo "class=\"success\"";}?>>12:20</td>
                                                <td <?php if ($time <= '12:50' && $time > '12:20'){echo "class=\"success\"";}?>>12:50</td>
                                                <td <?php if ($time <= '13:20' && $time > '12:50'){echo "class=\"success\"";}?>>13:20</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '13:50' && $time > '13:20'){echo "class=\"success\"";}?>>13:50</td>
                                                <td <?php if ($time <= '14:20' && $time > '13:50'){echo "class=\"success\"";}?>>14:20</td>
                                                <td <?php if ($time <= '14:50' && $time > '14:20'){echo "class=\"success\"";}?>>14:50</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '15:20' && $time > '14:50'){echo "class=\"success\"";}?>>15:20</td>
                                                <td <?php if ($time <= '15:50' && $time > '15:20'){echo "class=\"success\"";}?>>15:50</td>
                                                <td <?php if ($time <= '16:20' && $time > '15:20'){echo "class=\"success\"";}?>>16:20</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '16:50' && $time > '16:20'){echo "class=\"success\"";}?>>16:50</td>
                                                <td <?php if ($time <= '17:20' && $time > '16:50'){echo "class=\"success\"";}?>>17:20</td>
                                                <td <?php if ($time <= '17:50' && $time > '17:20'){echo "class=\"success\"";}?>>17:50</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '18:20' && $time > '17:50'){echo "class=\"success\"";}?>>18:20</td>
                                                <td <?php if ($time <= '19:20' && $time > '18:20'){echo "class=\"success\"";}?>>19:20</td>
                                                <td <?php if ($time <= '20:20' && $time > '19:20'){echo "class=\"success\"";}?>>20:20</td>
                                            </tr>
                                            <tr>
                                                <td <?php if ($time <= '21:20' && $time > '20:20'){echo "class=\"success\"";}?>>21:20</td>
                                                <td <?php if ($time <= '22:00' && $time > '21:20'){echo "class=\"success\"";}?>>22:00</td>
                                                <td>-</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="jiyuecheng"><!-- 集悦城线 -->
                                    <br>
                                    <blockquote>
                                        <p>
                                            注：集悦城停车点位于留仙大道辅道，塘朗山隧道路口公交站。
                                        </p>
                                    </blockquote>
                                    <div class="col-xs-6 .col-sm-4">
                                        <h4>集悦城→荔园</h4>
                                        <table class="table table-striped text-center">
                                            <tr>
                                                <td <?php if ($time <= '07:20' && $time >= '04:00'){echo "class=\"success\"";}?>>7:20</td>
                                                <td <?php if ($time <= '13:30' && $time > '07:20'){echo "class=\"success\"";}?>>13:30</td>
                                                <td>-</td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-xs-6 .col-sm-4">
                                        <h4>荔园→集悦城</h4>
                                        <table class="table table-striped text-center">
                                            <tr>
                                                <td <?php if ($time <= '12:40' && $time >= '04:00'){echo "class=\"success\"";}?>>12:40</td>
                                                <td <?php if ($time <= '18:40' && $time > '12:40'){echo "class=\"success\"";}?>>18:40</td>
                                                <td <?php if ($time <= '22:10' && $time > '18:40'){echo "class=\"success\"";}?>>22:10</td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="ad-banner">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- 南科导航-Banner -->
                        <ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-6170983579457537"
                             data-ad-slot="2810399392"
                             data-ad-format="auto"></ins>
                        <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
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
