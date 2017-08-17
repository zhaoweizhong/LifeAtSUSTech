
<footer class="footer">
    <div class="container">
        <div class="copyright pull-left">
            粤ICP备17098640号&nbsp;<script type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");document.write(unescape("%3Cspan id='cnzz_stat_icon_1260604593'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s95.cnzz.com/z_stat.php%3Fid%3D1260604593%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>
        </div>
        <div class="copyright pull-right">
        Copyright&nbsp;<i class="fa fa-copyright" aria-hidden="true"></i>&nbsp;2016&nbsp;南方科技大学&nbsp;1617班&nbsp;<a class="nodeco" href="https://zzw.at" target="_blank">钟兆玮</a>        </div>
    </div>
</footer>
</div>

</body>
<!--   Core JS Files   -->
<script src="https://cache.sustech.net/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="https://cache.sustech.net/assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cache.sustech.net/assets/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="https://cache.sustech.net/assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="https://cache.sustech.net/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="https://cache.sustech.net/assets/js/material-kit.js" type="text/javascript"></script>

<script type="text/javascript">

    $().ready(function(){
        // the body of this function is in assets/material-kit.js
        materialKit.initSliders();
        window_width = $(window).width();

        if (window_width >= 992){
            big_image = $('.wrapper > .header');

            $(window).on('scroll', materialKitDemo.checkScrollForParallax);
        }

    });
</script>
<script>
    var setHome = function(obj, url) {
        try {
            obj.style.behavior = 'url(#default#homepage)';
            obj.setHomePage(url);
        } catch(e) {
            if(window.netscape) {
                try {
                    netscape.security.PrivilegeManager.enablePrivilege('UniversalXPConnect');
                } catch(e) {
                    alert('抱歉，此操作被浏览器拒绝！\n\n解决方法1：\n请在浏览器地址栏输入“about:config”并回车\n然后将[signed.applets.codebase_principal_support]的值设置为true。\n\n解决方法2：\n手动将'+url+'设为首页。');
                }
                var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
                prefs.setCharPref('browser.startup.homepage',url);
            } else {
                alert('抱歉，您所使用的浏览器无法完成此操作。\n\n您需要手动将' + url + '设置为首页。');
            }
        }
    };
    var search = function(site, env) {
        var searchId = env === 'pc' ? 'search-pc' : 'search-mobile';
        var baseURL = {
            google: 'https://www.google.com/#q=',
            googles: 'https://scholar.google.com/scholar?q=',
            baidu: 'https://www.baidu.com/s?wd=',
            bing: 'https://www.bing.com/search?q=',
            wikicn: 'https://zh.wikipedia.org/wiki/',
            wikien: 'https://en.wikipedia.org/wiki/'
        };
        window.open(baseURL[site] + document.getElementById(searchId).value);
    };
    document.getElementById("search-form-pc").onsubmit = function(e) {
        e.preventDefault();
        search('google', 'pc');
    };
    document.getElementById("search-form-mobile").onsubmit = function(e) {
        e.preventDefault();
        search('bing', 'mobile');
    };
</script>
</html>
