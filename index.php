<?php
$pageTitle = "";
$pageType = "index";
$active1 = "class=\"active\"";
$active2 = "";
require 'includes/header.php';
?>

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('https://cache.sustech.net/bg1.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="search-box brand input-group">
                        <div class="input-group">
                            <input type="text" id="search-pc" value="" placeholder="搜索..." class="form-control form-large" style="margin-bottom: 25px;">
                            <div class="input-group-btn search-button">
                                <button type="submit" onclick="search('baidu', 'pc')" class="btn btn-simple search-button"><i class="fa fa-paw" aria-hidden="true"></i>&nbsp;百度一下</button>
                                <button type="button" class="btn btn-simple dropdown-toggle search-button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">搜索引擎</span>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li onclick="search('google', 'pc')"><a href="javascript:void()"><i class="fa fa-google" aria-hidden="true"></i>&nbsp;Google</a></li>
                                    <li onclick="search('bing', 'pc')"><a href="javascript:void()"><i class="fa fa-windows" aria-hidden="true"></i>&nbsp;Bing</a></li>
                                    <li onclick="search('googles', 'pc')"><a href="javascript:void()"><i class="fa fa-google" aria-hidden="true"></i>&nbsp;Google 学术</a></li>
                                    <li onclick="search('wikien', 'pc')"><a href="javascript:void()"><i class="fa fa-wikipedia-w" aria-hidden="true"></i>&nbsp;Wikipedia</a></li>
                                    <li onclick="search('wikicn', 'pc')"><a href="javascript:void()"><i class="fa fa-wikipedia-w" aria-hidden="true"></i>&nbsp;维基百科</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
				</div>
			</div>

		</div>
	</div>

	<div class="main main-raised">
        <div class="section section-basic">
            <div class="container">
		<!--div class="ad-banner">
			
		</div-->
                <div class="alert alert-info">
                    <div class="container-fluid">
                        <div class="alert-icon">
                            <i class="material-icons">info_outline</i>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                        </button>
<strong>提示：</strong> 南方科技大学计算机研究协会推出了一项比 GitHub 更高速、方便的<strong>校内 Git 代码库</strong>服务，欢迎<a href="https://git.cra.moe" target="_blank">点我</a>注册体验--->
			    <a href="https://git.cra.moe" target="_blank">传送门</a> (目前仅限校园网/宿舍网访问)
</div>
                </div>

                <div class="main-col">

                    <div class="main-block">
                <span class="block-title"><i class="fa fa-globe" aria-hidden="true"></i>&nbsp;常用网址</span>
                <div class="block-grid-wrapper">
                    <div class="block-grid">
                        <a href="http://www.sustc.edu.cn/" target="_blank" class="focus">
                            <i class="fa fa-home fa-4x" aria-hidden="true"></i><br>学校官网
                        </a>
                    </div>
                    <div class="block-grid">
                        <a href="http://www.sustc.edu.cn/mail/" target="_blank" class="focus">
                            <i class="fa fa-envelope fa-4x" aria-hidden="true"></i><br>邮箱
                        </a>
                    </div>
                    <div class="block-grid">
                        <a href="http://jwxt.sustc.edu.cn/jsxsd/" target="_blank" class="focus">
                            <i class="fa fa-bank fa-4x" aria-hidden="true"></i><br>教务系统
                        </a>
                    </div>
                    <div class="block-grid">
                        <a href="http://student.sustc.edu.cn/" target="_blank" class="focus">
                            <i class="fa fa-graduation-cap fa-4x" aria-hidden="true"></i><br>学生事务系统
                        </a>
                    </div>
                    <div class="block-grid">
                        <a href="http://lib.sustc.edu.cn/" target="_blank" class="focus">
                            <i class="fa fa-book fa-4x" aria-hidden="true"></i><br>琳恩图书馆
                        </a>
                    </div>
                    <div class="block-grid">
                        <a href="http://pms.sustc.edu.cn/" target="_blank" class="focus">
                            <i class="fa fa-print fa-4x" aria-hidden="true"></i><br>联创打印系统
                        </a>
                    </div>
                    <div class="block-grid">
                        <a href="http://campuscard.sustc.edu.cn/" target="_blank" class="focus">
                            <i class="fa fa-credit-card fa-4x" aria-hidden="true"></i><br>校园卡
                        </a>
                    </div>
                    <div class="block-grid">
                        <a href="http://sakai.sustc.edu.cn/" target="_blank" class="focus">
                            <i class="fa fa-user fa-4x" aria-hidden="true"></i><br>Sakai系统
                        </a>
                    </div>
                    <div class="block-grid">
                        <a href="https://cas.sustc.edu.cn/cas/login" target="_blank" class="focus">
                            <i class="fa fa-lock fa-4x" aria-hidden="true"></i><br>CAS系统
                        </a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

                    <div class="main-block">
                <span class="block-title"><i class="fa fa-music" aria-hidden="true"></i>&nbsp;乐在南科</span>
                <div class="block-grid-wrapper">
                    <div class="block-grid">
                        <a class="focus" href="https://bbs.sustech.net" target="_blank">
                            <i class="fa fa-comments fa-4x" aria-hidden="true"></i><br>BBS论坛(测试)
                        </a>
                    </div>
                    <div class="block-grid">
                        <a href="http://tieba.baidu.com/%E5%8D%97%E6%96%B9%E7%A7%91%E6%8A%80%E5%A4%A7%E5%AD%A6" target="_blank" class="focus">
                            <i class="icon-baidu" aria-hidden="true"></i><br>百度贴吧
                        </a></div>
                    <div class="block-grid">
                        <a href="http://welcome.sustc.edu.cn" target="_blank" class="focus">
                            <i class="fa fa-star fa-4x" aria-hidden="true"></i><br>迎新网
                        </a></div>
                    <div class="block-grid">
                        <a href="http://www.sustc.edu.cn/campus_3_1" target="_blank" class="focus">
                            <i class="fa fa-flag fa-4x" aria-hidden="true"></i><br>学生会
                        </a></div>
                    <div class="block-grid">
                        <a href="http://www.sustc.edu.cn/campus_3_2" target="_blank" class="focus">
                            <i class="fa fa-users fa-4x" aria-hidden="true"></i><br>社团联合会
                        </a></div>
                    <div class="block-grid">
                        <a href="http://www.sustc.edu.cn/campus_6_3" target="_blank" class="focus">
                            <i class="fa fa-heartbeat fa-4x" aria-hidden="true"></i><br>南科公益
                        </a></div>

                    <div class="clear"></div>
                </div>
            </div>
                </div>
                <div class="main-col">

                    <div class="main-block">
                <span class="block-title"><i class="fa fa-pencil-square" aria-hidden="true"></i>&nbsp;学在南科</span>
                <div class="block-grid-wrapper">
                    <div class="block-grid">
                        <a href="http://lib.sustc.edu.cn/" target="_blank" class="focus">
                            <i class="fa fa-book fa-4x" aria-hidden="true"></i><br>琳恩图书馆
                        </a>
                    </div>
                    <div class="block-grid">
                        <a href="http://www.sustc.edu.cn/calendar" target="_blank" class="focus">
                            <i class="fa fa-calendar fa-4x" aria-hidden="true"></i><br>校历
                        </a>
                    </div>
                    <div class="block-grid">
                        <a href="http://172.18.1.231:8080/" target="_blank" class="focus">
                            <i class="fa fa-check fa-4x" aria-hidden="true"></i><br>实验室考试系统
                        </a>
                    </div>
                    <div class="block-grid">
                        <a href="http://eval.sustc.edu.cn/" target="_blank" class="focus">
                            <i class="fa fa-dashboard fa-4x" aria-hidden="true"></i><br>教学质量评估系统
                        </a>
                    </div>
                    <div class="block-grid">
                        <a href="http://sustc.fy.chaoxing.com/" target="_blank" class="focus">
                            <i class="fa fa-pencil-square-o fa-4x" aria-hidden="true"></i><br>尔雅通识课
                        </a>
                    </div>
                    <div class="block-grid">
                        <a href="http://172.18.6.16/" target="_blank" class="focus">
                            <i class="fa fa-flask fa-4x" aria-hidden="true"></i><br>物理教学实验
                        </a>
                    </div>
                    <div class="block-grid">
                        <a href="http://jwxt.sustc.edu.cn/jsxsd/" target="_blank" class="focus">
                            <i class="fa fa-bank fa-4x" aria-hidden="true"></i><br>教务系统
                        </a>
                    </div>
                    <div class="block-grid">
                        <a href="http://www.sustc.edu.cn/news_events_jiangzuo" target="_blank" class="focus">
                            <i class="fa fa-rss-square fa-4x" aria-hidden="true"></i><br>讲座信息
                        </a>
                    </div>
                    <div class="block-grid">
                        <a href="http://helpdesk.sustc.edu.cn/" target="_blank" class="focus">
                            <i class="fa fa-question-circle fa-4x" aria-hidden="true"></i><br>帮助中心
                        </a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

                    <div class="main-block">
                <span class="block-title"><i class="fa fa-home" aria-hidden="true"></i>&nbsp;南科书院</span>
                <div class="block-grid-wrapper">
                    <div class="block-grid">
                        <a href="http://www.sustc.edu.cn/campus_4_1" target="_blank" class="focus">
                            <i class="fa fa-home fa-4x" aria-hidden="true"></i><br>致仁书院
                        </a></div>
                    <div class="block-grid">
                        <a href="http://www.sustc.edu.cn/campus_4_2" target="_blank" class="focus">
                            <i class="fa fa-home fa-4x" aria-hidden="true"></i><br>树仁书院
                        </a></div>
                    <div class="block-grid">
                        <a href="http://www.sustc.edu.cn/campus_4_3" target="_blank" class="focus">
                            <i class="fa fa-home fa-4x" aria-hidden="true"></i><br>致诚书院
                        </a></div>
                    <div class="block-grid">
                        <a href="http://www.sustc.edu.cn/campus_4_4" target="_blank" class="focus">
                            <i class="fa fa-home fa-4x" aria-hidden="true"></i><br>树德书院
                        </a></div>
                    <div class="block-grid">
                        <a href="http://www.sustc.edu.cn/campus_zhixing" target="_blank" class="focus">
                            <i class="fa fa-home fa-4x" aria-hidden="true"></i><br>致新书院
                        </a></div>
                    <div class="block-grid">
                        <a href="http://www.sustc.edu.cn/campus_shuli" target="_blank" class="focus">
                            <i class="fa fa-home fa-4x" aria-hidden="true"></i><br>树礼书院
                        </a></div>
                    <div class="clear"></div>
                </div>
            </div>
                </div>
                <div class="main-col">

                    <div class="main-block">
                <span class="block-title"><i class="fa fa-external-link" aria-hidden="true"></i>&nbsp;外部网站</span>
                <div class="block-grid-wrapper">
                    <div class="block-grid">
                        <a href="http://www.zhihu.com/" target="_blank" class="focus">
                            <i class="icon-zhihu-square"></i><br>知乎</a>
                    </div>
                    <div class="block-grid">
                        <a href="http://www.weibo.com/" target="_blank" class="focus">
                            <i class="icon-weibo"></i><br>微博</a>
                    </div>
                    <div class="block-grid">
                        <a href="http://www.taobao.com/" target="_blank" class="focus">
                            <i class="icon-taobao"></i><br>淘宝</a>
                    </div>
                    <div class="block-grid">
                        <a href="http://www.jd.com/" target="_blank" class="focus">
                            <i class="icon-jd"></i><br>京东</a>
                    </div>
                    <div class="block-grid">
                        <a href="https://www.wolframalpha.com" target="_blank" class="focus">
                            <i class="fa fa-certificate fa-4x" aria-hidden="true"></i><br>WolframAlpha</a>
                    </div>
                    <div class="block-grid">
                        <a href="https://en.wikipedia.org" target="_blank" class="focus">
                            <i class="fa fa-wikipedia-w fa-4x" aria-hidden="true"></i><br>Wikipedia</a>
                    </div>
		    		<div class="block-grid">
                        <a href="https://git.cra.moe" target="_blank" class="focus">
                            <i class="fa fa-git fa-4x" aria-hidden="true"></i><br>校内Git库</a></a>
                    </div>
                    <div class="block-grid">
                        <a href="https://github.com" target="_blank" class="focus">
                            <i class="fa fa-github fa-4x" aria-hidden="true"></i><br>Github</a>
                    </div>
					<div class="block-grid">
                        <a href="https://sus.tc" target="_blank" class="focus">
                            <i class="fa fa-link fa-4x" aria-hidden="true"></i><br>SUS.TC网址缩短</a></a>
                    </div>
                    <div class="clear"></div>
                </div>
            </div>

                    <div class="main-block">
                <span class="block-title"><i class="fa fa-link" aria-hidden="true"></i>&nbsp;友情链接</span>
                <div class="block-grid-wrapper">
                    <div class="block-grid">
                        <a href="http://nkd.nanfengfood.com/" target="_blank" class="focus">
                            <i class="fa fa-cutlery fa-4x" aria-hidden="true"></i><br>南风外卖
                        </a></div>
                    <div class="block-grid">
                        <a href="https://weidian.com/?userid=333686408" target="_blank" class="focus">
                            <i class="fa fa-book fa-4x" aria-hidden="true"></i><br>山南小馆
                        </a></div>
                    <div class="block-grid">
                        <a href="https://www.wenjuan.com/s/Yvimua/" target="_blank" class="focus">
                            <i class="fa fa-file-text-o fa-4x" aria-hidden="true"></i><br>申请友链
                        </a></div>
                    <div class="block-grid"></div>
		    <div class="block-grid"></div>
                    <div class="block-grid"></div>
                    <div class="clear"></div>
                </div>
            </div>
                </div>
                <div class="clear"></div>
                <!--div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                    </button>
                    <strong><i class="fa fa-lightbulb-o" aria-hidden="true"></i>&nbsp;提示：</strong> 这是一次样式升级，包含更多功能的正式版将于6个月内推出，敬请期待~ *٩(๑´∀`๑)ง* &nbsp;&nbsp;&nbsp;项目Github：<a href="https://github.com/zhaoweizhong/LifeAtSUSTech"><i class="fa fa-github" aria-hidden="true"></i></a>&nbsp;&nbsp;欢迎各位dalao加入CRA Web Team我一起开发。<br>

                </div-->
		<!--div class="ad-banner">
			
		</div-->
            </div>
        </div>
    </div>
<?php require 'includes/footer.php'; ?>
