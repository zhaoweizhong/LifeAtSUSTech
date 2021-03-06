<?php
$pageTitle = "赞助&nbsp;-&nbsp;";
$pageType = "tutorial";
$active1 = "";
$active2 = "";
require 'includes/header.php';
$orderID = date('Ymd') . str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);
?>

<div class="wrapper">
    <div class="header header-filter" style="background-image: url('https://cache.sustech.net/bg2.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h1 class="title text-center">赞助本站</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="main main-raised">
        <div class="section">
            <div class="container">
                <!--div class="ad-banner">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- 南科导航-Banner -->
                        <!--ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-6170983579457537"
                             data-ad-slot="4926806166"
                             data-ad-format="auto"></ins-->
                        <!--script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script-->
                    </div-->
                <div class="row tim-row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="row">
                            <blockquote>
                                <p>
                                    由于本站的域名和服务器是一笔<b>很大的开销</b>，另外维护站点也耗费时间精力，所以，<br>
                                    <b>喜欢本站就赞助吧~</b> 一元不嫌少，百元不嫌多喔 *٩(๑´∀`๑)ง*<br>
                                    赞助者名单将会在下方给出，谢谢大家~
                                </p>
                            </blockquote><br>
                            <h3>支付方式</h3>
                            <p>这里提供了三种方式，<strong><u>任选一个</u></strong>就可以啦，如果用支付宝或微信扫码，<strong><u>记得备注昵称和留言</u></strong>喔</p>
                            <div class="col-xs-6 col-md-4">
                                <form action="alipay/alipayapi.php" class="form" method="post" target="_blank">
                                    <div class="alipayTitle text-center">
                                        <img src="https://cache.sustech.net/alipay.jpg" width="120px">
                                        <span class="label label-info">网页付款</span>
                                    </div>
                                    <div hidden><input type="text" name="WIDout_trade_no" id="out_trade_no" value="<?php echo $orderID ?>"></div>
                                    <div hidden><input type="text" name="WIDsubject" value="赞助南科导航"></div>
                                    <div class="form-group label-floating is-empty">
                                        <label class="control-label">赞助金额</label>
                                        <input type="text" class="form-control" name="WIDtotal_fee">
                                        <span class="material-input"></span>
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">姓名/昵称</label>
                                        <input type="text" class="form-control" name="Name">
                                        <span class="material-input"></span>
                                    </div>
                                    <div class="form-group label-floating">
                                        <label class="control-label">留言</label>
                                        <input type="text" class="form-control" name="Said">
                                        <span class="material-input"></span>
                                    </div>
                                    <div class="text-center">
                                    <button type="submit" class="btn btn-info">确认支付</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-xs-6 col-md-4">
                                <div class="alipayTitle text-center">
                                    <img src="https://cache.sustech.net/alipay.jpg" width="120px">
                                    <span class="label label-info">扫码付款</span>
                                </div>
                                <img src="https://cache.sustech.net/alipayQR.jpg" height=267px>
                            </div>
                            <div class="col-xs-6 col-md-4">
                                <div class="alipayTitle text-center">
                                    <img src="https://cache.sustech.net/wechat.jpg" width="120px">
                                    <span class="label label-success">扫码付款</span>
                                </div>
                                <img src="https://cache.sustech.net/wechatQR.jpg" height=267px>
                            </div>
                        </div>
                        <div class="clearfix visible-xs-block"><br></div><br>
                        <div>
                            <h3>赞助名单</h3>
                            <p>感谢以下同学们的赞助~</p>
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>姓名/昵称</th>
                                    <th>赞助金额</th>
                                    <th>留言</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td>南风点点</td>
                                    <td>￥66</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td>Metaron</td>
                                    <td>￥2</td>
                                    <td>大佬求带飞</td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td>英国花猫</td>
                                    <td>￥6.66</td>
                                    <td>小小心意</td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td>Sis.</td>
                                    <td>￥6.62</td>
                                    <td>学校的腾讯邮箱没钱了，有点担心你</td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td>尹晓磊</td>
                                    <td>￥6.66</td>
                                    <td>UI界面做的六六的，大佬！</td>
                                </tr>
                                <tr>
                                    <td class="text-center">6</td>
                                    <td>匿名</td>
                                    <td>￥6.66</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td class="text-center">7</td>
                                    <td>*博弘</td>
                                    <td>￥16.66</td>
                                    <td>-</td>
                                </tr>
                                <tr>
                                    <td class="text-center">...</td>
                                    <td>等你来</td>
                                    <td>￥∞</td>
                                    <td>-</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            <!--div class="ad-banner">
                        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                        <!-- 南科导航-Banner -->
                        <!--ins class="adsbygoogle"
                             style="display:block"
                             data-ad-client="ca-pub-6170983579457537"
                             data-ad-slot="4926806166"
                             data-ad-format="auto"></ins-->
                        <!--script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                        </script-->
             </div-->
            </div>
        </div>
    </div>

</div>

<?php require 'includes/footer.php'; ?>
