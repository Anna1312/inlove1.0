<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Cache-Control" content="no-transform">
    <title>米课MiCourse - 选课利器</title>
    <link rel="shortcut icon" href="/Public/img/favicon.ico"/>
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/index.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/detail.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/user.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/announcement.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/bootstrap-datetimepicker.min.css') }}" rel="stylesheet">

    <script src="{{ asset('/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('/js/respond.min.js') }}"></script>
    <script src="{{ asset('/js/jquery.min.js') }}"></script>

    <script>
        var rootUrl = '';
    </script>
</head>
<body>

<div class="home">

    <header class="header">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="row">
                    <div class="hidden-xs hidden-sm col-md-3 col-lg-3">
                        <div class="navbar-header navbar-left">
                            <a class="navbar-brand-mc" href="/">
                                <img src="{{ asset('/img/Brand.png') }}" alt="logo"/>
                            </a>
                        </div>
                    </div>
                    <div class="hidden-xs visible-sm-block col-sm-2">
                        <div class="navbar-header navbar-left">
                            <a class="navbar-brand-mc" href="/">
                                <img src="{{ asset('/img/Brand-M.png') }}" alt="logo"/>
                            </a>
                        </div>
                    </div>
                    <div class="visible-xs-block col-xs-2">
                        <div class="navbar-header navbar-left">
                            <a class="navbar-brand-mc" href="/">
                                <img src="{{ asset('/img/Brand-S.png') }}" alt="logo"/>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-8 col-sm-5 col-md-5 col-lg-5">
                        <!--<div class="navbar-search navbar-left">-->
                        <form class="navbar-form-mc" method="get" action="/course/search" role="search">
                            <div class="input-group input-group-nav">
                                <input type="text" class="form-control" id="input-search" name="key"
                                       placeholder="查找课程...">
                                <span class="input-group-btn">
                                    <a role="button" class="btn" aria-label="Left Align"
                                       onclick="$(this).closest('form').submit()">
                                        <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                    </a>
                                </span>
                            </div>
                        </form>
                        <!--</div>-->
                    </div>
                    <div class="hidden-xs col-sm-5 col-md-4 col-lg-4">
                        <div id="navbar" class="navbar-collapse collapse">
                            <ul class="nav navbar-nav pull-right">
                                <li id="nav-index"><a href="/">首页</a></li>
                                <li id="nav-course"><a href="/course">课程</a></li>
                                <li id="nav-notice"><a href="/announcement">公告</a></li>
                                <li><a href="/">登录</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="visible-xs-block col-xs-2">
                        <div class="nav nav-hamburger pull-right">
                            <a href="#ham" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-haspopup="true" aria-expanded="false"><span
                                        class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span></a>
                            <ul class="dropdown-menu pull-right">
                                <li><a href="/">首页</a></li>
                                <li><a href="/course">课程</a></li>
                                <li id="xs-nav-notice"><a href="/announcement">公告</a></li>
                                <li><a href="/">登录</a></li>

                            </ul>
                        </div>

                    </div>

                </div>
            </div>
        </nav>
    </header>

    <div class="content">

        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="wrapper-intro col-xs-0 col-sm-6 col-md-8 col-lg-8">
                        <img src="{{ asset('/img/MiLogo.png') }}"/>
                        <br/>
                        <img src="{{ asset('/img/miTitle.png') }}"/>
                    </div>

                    <!--<div class="wrapper-intro col-xs-0 col-sm-0 col-md-2 col-lg-2"></div>-->

                    <div class="log-or-sign col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" id="tab-sl">
                            <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab"
                                                                      data-toggle="tab" id="tri-login">登录米课</a></li>
                            <li role="presentation"><a href="#register" aria-controls="register" role="tab"
                                                       data-toggle="tab" id="tri-register">注册·加入米课</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <!-- Tab Log in -->
                            <form role="tabpanel" class="tab-pane fade in active" id="login" onsubmit="return false;">
                                <div class="tab-info" id="login-info"></div>
                                <label for="login-email" class="sr-only">邮箱</label>
                                <input type="email" id="login-email" class="form-control" placeholder="邮箱" required
                                       autofocus>
                                <label for="login-password" class="sr-only">密码</label>
                                <input type="password" id="login-password" class="form-control" placeholder="密码"
                                       required>

                                <div class="checkbox">
                                    <label class="f-white">
                                        <input type="checkbox" id="login-remember" checked> 记住我
                                    </label>
                                    <a class="pull-right forgot" href="/recover">忘记密码</a>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block login">登录</button>
                            </form>
                            <!-- Tab Register -->
                            <form role="tabpanel" class="tab-pane fade" id="register" onsubmit="return false;">
                                <div class="tab-info" id="register-info"></div>
                                <label for="register-email" class="sr-only">邮箱</label>
                                <input type="email" id="register-email" class="form-control" placeholder="邮箱" required
                                       autofocus>
                                <label for="register-password" class="sr-only">密码</label>
                                <input type="password" id="register-password" class="form-control" placeholder="密码"
                                       required>
                                <button class="btn btn-lg btn-primary btn-block register">注册</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="home-page container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                    <!--BEGIN NEW COURSES-->
                    <div class="section section-carousel">
                        <h4>新课速递</h4>

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-sm-6 col-md-6">
                                            <div class="thumbnail">
                                                <a>
                                                    <img src="{{ asset('/img/film.jpg') }}" alt="...">

                                                    <div class="new-course-mask">
                                                        <div class="info-icon">
                                                            <div class="box-f">
                                                                <div class="box-s">
                                                                    <div class="box-t img-responsive"
                                                                         style="background-image: url(/Public/img/icons/film.png);">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3><a href="/course/471">文学与电影：艺术之互动</a></h3>
                                                    </div>
                                                </a>

                                                <div class="caption">
                                                    <p>感受文学与电影交融之魅力</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-sm-6 col-md-6">
                                            <div class="thumbnail">
                                                <a>
                                                    <img src="{{ asset('/img/mineral.jpg') }}" alt="...">

                                                    <div class="new-course-mask">
                                                        <div class="info-icon">
                                                            <div class="box-f">
                                                                <div class="box-s">
                                                                    <div class="box-t img-responsive"
                                                                         style="background-image: url(/Public/img/icons/geography.png);">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3><a href="/course/476">地表双雄：生物和矿物</a></h3>
                                                    </div>
                                                </a>

                                                <div class="caption">
                                                    <p>看地表双雄谁与争锋</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-sm-6 col-md-6">
                                            <div class="thumbnail">
                                                <a>
                                                    <img src="{{ asset('/img/biology.jpg') }}" alt="...">

                                                    <div class="new-course-mask">
                                                        <div class="info-icon">
                                                            <div class="box-f">
                                                                <div class="box-s">
                                                                    <div class="box-t img-responsive"
                                                                         style="background-image: url(/Public/img/icons/biology.png);">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3><a href="/course/467">探索生物医学诺贝尔奖</a></h3>
                                                    </div>
                                                </a>

                                                <div class="caption">
                                                    <p>走进诺贝尔奖</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-sm-6 col-md-6">
                                            <div class="thumbnail">
                                                <a>
                                                    <img src="{{ asset('/img/uncertainty.jpg') }}" alt="...">

                                                    <div class="new-course-mask">
                                                        <div class="info-icon">
                                                            <div class="box-f">
                                                                <div class="box-s">
                                                                    <div class="box-t img-responsive"
                                                                         style="background-image: url(/Public/img/icons/psychology.png);">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3><a href="/course/475">不确定世界中的决策行为</a></h3>
                                                    </div>
                                                </a>

                                                <div class="caption">
                                                    <p>你真的了解你所做的决策吗</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="item">
                                    <div class="row">
                                        <div class="col-xs-12 col-sm-6 col-sm-6 col-md-6">
                                            <div class="thumbnail">
                                                <a>
                                                    <img src="{{ asset('/img/pollution.jpg') }}" alt="...">

                                                    <div class="new-course-mask">
                                                        <div class="info-icon">
                                                            <div class="box-f">
                                                                <div class="box-s">
                                                                    <div class="box-t img-responsive"
                                                                         style="background-image: url(/Public/img/icons/air.png);">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3><a href="/course/473">大气雾霾污染与健康</a></h3>
                                                    </div>
                                                </a>

                                                <div class="caption">
                                                    <p>我们的健康去了哪里</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xs-12 col-sm-6 col-sm-6 col-md-6">
                                            <div class="thumbnail">
                                                <a>
                                                    <img src="{{ asset('/img/usa.jpg') }}" alt="...">

                                                    <div class="new-course-mask">
                                                        <div class="info-icon">
                                                            <div class="box-f">
                                                                <div class="box-s">
                                                                    <div class="box-t img-responsive"
                                                                         style="background-image: url(/Public/img/icons/politics.png);">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <h3><a href="/course/478">二十世纪中美文化交往诸问题</a></h3>
                                                    </div>
                                                </a>

                                                <div class="caption">
                                                    <p>那时的我们</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!--BEGIN HOT-COURSES-->
                    <div class="section hot-course">
                        <h4>最热门课程榜
                            <small><a href="/course">更多»</a></small>
                        </h4>
                        <ul class="row">
                            <li class="item col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="item-card">
                                    <div class="card-icon">
                                        <div class="box-f">
                                            <div class="box-s">
                                                <div class="box-t img-responsive"
                                                     style="background-image: url(/Public/img/icons/literature.png);">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="f-18 f-hot f-weight card-name" href="/course/148">俄罗斯文学经典的当代意义</a>

                                    <div class="hidden-md">
                                        <a class="tag tag-info tag-sm" href="/Course/tag/id/445">文学院</a><a
                                                class="tag tag-info tag-sm" href="/Course/tag/id/447">董晓</a></div>
                                    <div class="score">
                                        <img src="{{ asset('/img/star.png') }}">
                                        <img src="{{ asset('/img/star.png') }}">
                                        <img src="{{ asset('/img/star.png') }}">
                                        <img src="{{ asset('/img/star.png') }}">
                                        <img src="{{ asset('/img/star.png') }}">
                                        <span class="f-12 f-sub star">4.7分</span>
                                    </div>
                                    <div class="f-12">3学分 <a href="/course/148#anchor-comments">47评论</a></div>
                                </div>
                            </li>
                            <li class="item col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="item-card">
                                    <div class="card-icon">
                                        <div class="box-f">
                                            <div class="box-s">
                                                <div class="box-t img-responsive"
                                                     style="background-image: url(/Public/img/icons/music.png);">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="f-18 f-hot f-weight card-name" href="/course/278">西方音乐通论</a>

                                    <div class="hidden-md">
                                        <a class="tag tag-info tag-sm" href="/Course/tag/id/449">吕晓一</a></div>
                                    <div class="score">
                                        <img src="{{ asset('/img/star.png') }}">
                                        <img src="{{ asset('/img/star.png') }}">
                                        <img src="{{ asset('/img/star.png') }}">
                                        <img src="{{ asset('/img/star.png') }}">
                                        <img src="{{ asset('/img/star.png') }}">
                                        <span class="f-12 f-sub star">4.7分</span>
                                    </div>
                                    <div class="f-12">2学分 <a href="/course/278#anchor-comments">45评论</a></div>
                                </div>
                            </li>
                            <li class="item col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="item-card">
                                    <div class="card-icon">
                                        <div class="box-f">
                                            <div class="box-s">
                                                <div class="box-t img-responsive"
                                                     style="background-image: url(/Public/img/icons/art.png);">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="f-18 f-hot f-weight card-name" href="/course/98">中国书画鉴赏</a>

                                    <div class="hidden-md">
                                        <a class="tag tag-info tag-sm" href="/Course/tag/id/450">文化艺术教育中心</a><a
                                                class="tag tag-info tag-sm" href="/Course/tag/id/451">黄正明</a></div>
                                    <div class="score">
                                        <img src="{{ asset('/img/star.png') }}">
                                        <img src="{{ asset('/img/star.png') }}">
                                        <img src="{{ asset('/img/star.png') }}">
                                        <img src="{{ asset('/img/star.png') }}">
                                        <img src="{{ asset('/img/star.png') }}">
                                        <span class="f-12 f-sub star">4.9分</span>
                                    </div>
                                    <div class="f-12">2学分 <a href="/course/98#anchor-comments">32评论</a></div>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <!--END HOT-COURSES-->


                </div>
                <div class="home-sub col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="hot-tag section">
                        <h4>热门标签</h4>

                        <div class="tag-section">
                            <h5>学分</h5>
                            <a class="tag tag-info" href="/Course/tag/id/448">2学分</a><a class="tag tag-info"
                                                                                        href="/Course/tag/id/446">3学分</a><a
                                    class="tag tag-info" href="/Course/tag/id/641">1学分</a></div>
                        <div class="tag-section">
                            <h5>类型</h5>
                            <a class="tag tag-info" href="/Course/tag/id/875">研讨课</a><a class="tag tag-info"
                                                                                        href="/Course/tag/id/873">通识课</a><a
                                    class="tag tag-info" href="/Course/tag/id/878">公选课</a><a class="tag tag-info"
                                                                                             href="/Course/tag/id/840">悦读计划</a><a
                                    class="tag tag-info" href="/Course/tag/id/876">文化素质课</a><a class="tag tag-info"
                                                                                               href="/Course/tag/id/874">优秀文化素质课</a><a
                                    class="tag tag-info" href="/Course/tag/id/877">就业创业课</a></div>
                        <div class="tag-section">
                            <h5>院系</h5>
                            <a class="tag tag-info" href="/Course/tag/id/445">文学院</a><a class="tag tag-info"
                                                                                        href="/Course/tag/id/470">历史学系</a><a
                                    class="tag tag-info" href="/Course/tag/id/559">创新创业学院</a><a class="tag tag-info"
                                                                                                href="/Course/tag/id/468">哲学系</a><a
                                    class="tag tag-info" href="/Course/tag/id/547">信息管理学院</a><a class="tag tag-info"
                                                                                                href="/Course/tag/id/461">环境学院</a><a
                                    class="tag tag-info" href="/Course/tag/id/562">法学院</a><a class="tag tag-info"
                                                                                             href="/Course/tag/id/698">国际学院</a><a
                                    class="tag tag-info" href="/Course/tag/id/481">社会学院</a><a class="tag tag-info"
                                                                                              href="/Course/tag/id/458">外国语学院</a>
                        </div>

                        <div class="tag-section">
                            <h5>分类</h5>
                            <a class="tag tag-info" href="/Course/tag/id/54">其他</a><a class="tag tag-info"
                                                                                      href="/Course/tag/id/18">文学</a><a
                                    class="tag tag-info" href="/Course/tag/id/17">历史</a><a class="tag tag-info"
                                                                                           href="/Course/tag/id/15">社会</a><a
                                    class="tag tag-info" href="/Course/tag/id/22">生物</a><a class="tag tag-info"
                                                                                           href="/Course/tag/id/27">计算机</a><a
                                    class="tag tag-info" href="/Course/tag/id/26">政治</a><a class="tag tag-info"
                                                                                           href="/Course/tag/id/29">医学/健康</a><a
                                    class="tag tag-info" href="/Course/tag/id/20">艺术</a><a class="tag tag-info"
                                                                                           href="/Course/tag/id/45">创新创业</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <img class="footer-icon img-responsive pull-left" src="/Public/img/MiLogo.png"/>

                <div class="footer-seg pull-right">
                    <h5>关于米课</h5>

                    <p>原由米课团队开发运营，后交由小百合工作室进行全新改版与功能丰富，致力于搭建帮助南大各院系同学选好课程，分享感受，互动交友的校内平台。感谢同学们的大力支持。</p>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                <img class="footer-icon img-responsive img-rounded pull-left" src="/Public/img/LilyStudio.png"/>

                <div class="footer-seg pull-right">
                    <h5>关于小百合工作室</h5>

                    <p>
                        工作室成立于2000年，是由南京大学网络爱好者自发组织的一个学生团体，致力于传播校园网络文化，促进校园网络建设，服务广大同学，并为爱好网络和计算机科学与技术的同学提供一个交流学习、共同提高的平台。</p>
                </div>
            </div>
        </div>
        <div class="footer-info">
            <p>
                <a href="http://www.nju.edu.cn">南大首页</a>
                <a href="http://jw.nju.edu.cn">南大教务</a>
                <a role="button" href="#" data-toggle="modal" data-target="#modal-feedback">意见反馈</a>
                <a class="special-link" href="/sorter/">米课分一分^ ^</a>
            </p>

            <p>Designed & developed by CPC, Hane, ZingSS, SuperLatte, Christine & Polaris.</p>

            <p>Copyright &copy; Lily Studio, 2015-2016</p>
        </div>
    </div>
</footer>
<!-- Modal Feedback -->
<div class="modal fade" id="modal-feedback" tabindex="-1" role="dialog" aria-labelledby="modal-title-rate">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <a role="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></a>
                <h4 class="modal-title" id="modal-title-rate">我要对网站内容进行反馈&gt;&lt;</h4>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="feedback-content">内容</label>
                        <textarea class="form-control" id="feedback-content"></textarea>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a role="button" class="btn btn-default" data-dismiss="modal">取消</a>
                <a role="button" class="btn btn-primary" id="send-feedback">发送反馈</a>
            </div>
        </div>
    </div>
</div>
<!-- Modal Feedback End -->
<script src="{{ asset('/js/footer.js') }}"></script>
<script src="{{ asset('/js/header.js') }}"></script>


<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-41774271-1', 'auto');
    ga('send', 'pageview');

</script>

<script src="{{ asset('/js/jquery.min.js') }}"></script>
<script src="{{ asset('/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('/js/jquery.toaster.js') }}"></script>
<script src="{{ asset('/js/index.js') }}"></script>

<script>
    $("#nav-index").addClass('active');
</script>
</body>
</html>