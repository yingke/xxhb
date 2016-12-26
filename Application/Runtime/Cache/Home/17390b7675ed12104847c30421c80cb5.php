<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>河北邢襄环保</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="format-detection" content="telephone=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp"/>
  <link rel="alternate icon" type="image/png" href="/xxhb/Public/Home/i/xxhb.ico">
  <link rel="stylesheet" href="http://cdn.amazeui.org/amazeui/2.7.2/css/amazeui.min.css"/>
  <link rel="stylesheet" href="/xxhb/Public/Home/css/app.css"/>
  <link rel="stylesheet" type="text/css" href="/xxhb/Public/Home/css/iconfont.css">
</head>
<body>
<!-- 手机版侧滑菜单 -->
<div id="navPush" class="am-offcanvas nav-push-content">
  <div class="am-offcanvas-bar">
    <div class="am-offcanvas-content ">
      <ul class="am-menu am-menu-offcanvas1  menu-main am-no-layout">
        <li><a href="<?php echo U('Index/index');?>" class="am-active">首页</a></li>
        <li><a href="<?php echo U('Fw/index');?>">服务范围</a></li>
        <li><a href="<?php echo U('News/index');?>">新闻中心</a></li>
        <li><a href="<?php echo U('Flfg/index');?>">法律法规</a></li>
        <li><a href="<?php echo U('Join/index');?>">加入我们</a></li>
        <li><a href="<?php echo U('About/index');?>">关于我们</a></li>
        <li><a href="<?php echo U('Lxwm/index');?>">联系我们</a></li>
        <li><button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm"><span class="am-icon-pencil"></span> 注册</button></li>
        <li><button class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><span class="am-icon-user"></span> 登录</button></li>
      </ul>
    </div>
  </div>
</div>

<!-- 电脑和平板 菜单-->
<header class="am-topbar am-topbar-fixed-top">
  <div class="am-container">
    <h1 class="am-topbar-brand">
      <a  href="#"><img src="/xxhb/Public/Home/images/logo.png"></a>
    </h1>
    <button class="am-btn am-btn-primary am-show-sm-only nav-push-btn am-topbar-toggle " data-am-offcanvas="{target: '#navPush', effect: 'push'}">
      <span class="am-sr-only">导航切换</span> 
      <span class="am-icon-bars"></span>
    </button>
    <div class="am-collapse am-topbar-collapse" id="collapse-head">
      <ul class="am-nav am-nav-pills am-topbar-nav">
       <li><a href="<?php echo U('Index/index');?>" class="am-active">首页</a></li>
        <li><a href="<?php echo U('Fw/index');?>">服务范围</a></li>
        <li><a href="<?php echo U('News/index');?>">新闻中心</a></li>
        <li><a href="<?php echo U('Flfg/index');?>">法律法规</a></li>
        <li><a href="<?php echo U('Join/index');?>">加入我们</a></li>
        <li><a href="<?php echo U('About/index');?>">关于我们</a></li>
        <li><a href="<?php echo U('Lxwm/index');?>">联系我们</a></li>
        <!-- 如果有二级菜单 以下是二级菜单代码 -->
        <!--<li class="am-dropdown" data-am-dropdown>
          <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
            案例 <span class="am-icon-caret-down"></span>
          </a>
          <ul class="am-dropdown-content">
            <li class="am-dropdown-header">标题</li>
            <li><a href="#">1. 默认样式</a></li>
            <li><a href="#">2. 基础设置</a></li>
            <li><a href="#">3. 文字排版</a></li>
            <li><a href="#">4. 网格系统</a></li>
          </ul>
        </li>-->
        <!-- 登录注册按钮 -->
        <div class="am-topbar-right">
          <button class="am-btn am-btn-secondary am-topbar-btn am-btn-sm"><span class="am-icon-pencil"></span> 注册</button>
        </div>
        <div class="am-topbar-right">
          <button class="am-btn am-btn-primary am-topbar-btn am-btn-sm"><span class="am-icon-user"></span> 登录</button>
        </div>
      </ul>
    </div>
  </div>
</header>



        <div class="join-container">
          <div class="am-g">
            <div class="am-u-md-3">
              <div class="careers--articles">
									<h3 class="careers--subtitle">为什么加入我们?</h3>
									<div class="careers_articles">
										<div class="careers_article">
											<i class="careers_article--icon am-icon-diamond"></i>
											<h3 class="careers_article--title">我们的团队</h3>
											<div class="careers_article--text">
												<p>
													公司技术力量雄厚，拥有20多年环境科学研究、环境影响评价、环保工程设计、环境保护技术咨询、环境管理等工作经验。配备了工程分析、水环境、大气环境、声环境、生态、固体废物、环境工程、规划、环境经济、工程概算等方面专业技术人员
												</p>
											</div>
											<div class="careers_article--footer"><a href="#" class="link">Learn More</a></div>
										</div>
										<div class="careers_article">
											<i class="careers_article--icon am-icon-key"></i>
											<h3 class="careers_article--title">我们的实力</h3>
											<div class="careers_article--text">
												<p>
                         公司司具备健全的环境影响评价工作质量保证体系，配备了专项仪器设备，具备文件和图档的数字化处理能力，有较完善的计算机网络系统和档案管理系统。
												</p>
											</div>
											<div class="careers_article--footer"><a href="#" class="link">Learn More</a></div>
										</div>
										<div class="careers_article">
											<i class="careers_article--icon am-icon-paper-plane-o"></i>
											<h3 class="careers_article--title">我们的队友</h3>
											<div class="careers_article--text">
												<p>
													现有职工56人，其中高级职称技术人员18名、中级职称技术人员30名，硕士以上学位技术人员16人。
												</p>
											</div>
											<div class="careers_article--footer"><a href="#" class="link">Learn More</a></div>
										</div>
									</div>
								</div>
            </div>

            <div class="am-u-md-9">
              <h3 class="careers--subtitle">我们期待您的加入:</h3>
              <div class="careers--vacancies">
                <div class="am-panel-group" id="accordion">
                  <div class="am-panel am-panel-default">
                    <div class="am-panel-hd">
                      <h4 class="am-panel-title" data-am-collapse="{parent: '#accordion', target: '#do-not-say-1'}">
                        环评工程师
                      </h4>
                    </div>
                    <div id="do-not-say-1" class="am-panel-collapse am-collapse am-in">
                      <div class="am-panel-bd">
                        <div class="vacancies--item_content js-accordion--pane_content" style="">
														<h5>职位描述：</h5>
														<p>1、主持编写环境影响报告表；</p><p>2、负责环评文件总稿汇编及文字、表格、图件审查；</p><p>3、负责与项目相关方的技术沟通、协调工作；</p><p>4、负责项目报审、报批文件准备；</p><p>5、配合业务部门做好项目评审的相关工作；</p><p>6、负责项目完成后相关资料收集、整理，并按存档要求及时归档；</p><p>7、团结协作，积极完成领导交给的临时工作。</p><p>
<h5>任职要求：</h5>
														<p>1、本科学历，环境、化工、化学、生物医药类等相关专业毕业；</p><p>2、有较强的责任心和团队协作意识，工作认真、细致、踏实；</p><p>3、有良好的语言表达能力、沟通能力和较强的写作能力；</p><p>4、能积极组织团队完成现场勘查、公众参与、专家评审等各项工作。善于与甲方、环评审批部门进行沟通；</p><p>5、具有吃苦耐劳、积极主动的工作态度，富有进取心及团队意识。</p>

														<h5>请将您的简历发送至： <a href="mailto:hbxxhb2016@163.com">hbxxhb2016@163.com</a></h5>
													</div>
                      </div>
                    </div>
                  </div>
                
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  

<!-- footer -->
<footer>
  <div class="am-container">
    <div class="footer-logo">
      <img src="assets/images/logo-colorful.png" />
    </div>
    <ul class="social-links-list">  
      <li>
        <a href="http://wpa.qq.com/msgrd?v=3&amp;uin=744071477&amp;site=qq&amp;menu=yes" target="_blank" title="qq">
          <i class="am-icon-qq am-icon-sm"></i>
        </a>
      </li>
      <li>
        <a href="" target="_blank" id="wechat" title="微信">
          <i class="am-icon-weixin am-icon-sm"></i>
        </a>
      </li>
      <li>
        <a href="http://weibo.com/allmobilize" target="_blank" title="新浪微博">
          <i class="am-icon-weibo am-icon-sm"></i>
        </a>
      </li> 
    </ul>
    <ul class="footer-nav">
      <li>
        <a href="/about.html">关于我们</a>
      </li>
      <li>
        <a href="/faq.html">常见问题</a>
      </li>
      <li>
        <a href="/build.html">移动建站白皮书</a>
      </li>
      <li>
        <a href="http://dev.yunshipei.com/">开发者中心</a>
      </li>
    </ul>
    <ul class="friend-links">
      <li>友情链接：</li>
      <li>
        <a href="http://segmentfault.com/" target="_blank" title="SegmentFault">SegmentFault</a>
      </li>
      <li>
        <a href="http://www.zjgsq.com/" target="_blank" title="Web前端">Web前端</a>
      </li>
      <li>
        <a href="http://apicloud.com/" target="_blank" title="APICloud">APICloud</a>
      </li>
      <li>
        <a href="http://www.w3cdream.com/" target="_blank" title="W3C梦想站">W3C梦想站</a>
      </li>
      <li>
        <a href="http://bbs.egret-labs.org/" target="_blank" title="Egret社区">Egret社区</a>
      </li>
      <li>
        <a href="https://meiqia.com/integrations" target="_blank" title="美洽客服">美洽客服</a>
      </li>
    </ul>
  </div>
</footer>
</body>

<script src="https://cdn.staticfile.org/jquery/3.1.1/jquery.min.js"></script>
<script src="http://cdn.amazeui.org/amazeui/2.7.2/js/amazeui.min.js"></script>
<script src="/xxhb/Public/Home/js/app.js"></script>

</html>