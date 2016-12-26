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


   <div class="banner">
       
       <div class="banner-word">

         <h2>河北兴襄环保科技</h2>

         <h3> 邢台市目前唯一 一家持有环保部颁发的环评资质证书的单位</h3>

         <h4>公司技术力量雄厚，拥有20多年环境科学研究、环境影响评价、环保工程设计、环境保护技术咨询、环境管理等工作经验。</h4> 

        </div>
       <hr id="zixun" data-am-widget="divider" style="align:center; width: 60%" class="am-divider am-divider-default" />
        <button id="zixun"  type="button" class="am-btn am-btn-success am-round"> 立即咨询</button>
  
   </div>

   <!--   ·················································       -->

   <div class="fw">
     <h1>我们的服务</h1>
     <h2>公司郑重承诺：质量第一、效率优先、热情服务、共同发展</h2>
   	 <div class="am-g">
         <div class="am-u-sm-12 am-u-md-4 ">
       	   <div class="am-thumbnail">
             <img id="fwimg" src="/xxhb/Public/Home/images/hjjc.png" alt=""/>
               <div class="am-thumbnail-caption">
                <h2>环境影响评价</h2>
                 <p>  明确开发建设者的环境责任及规定应采取的行动，可为建设项目的工程设计提出环保要求和建议，可为环境管理者提供对建设项目实施有效管理的科学依据。</p>
        
               </div>
             </div>
       </div>
       <div class="am-u-sm-12 am-u-md-4">
       	<div class="am-thumbnail">
             <img id="fwimg" src="/xxhb/Public/Home/images/jl.png" alt=""/>
               <div class="am-thumbnail-caption">
                <h2>环境监理</h2>
                 <p> 环境监理机构受项目建设单位委托，依据环境影响评价文件、环境保护行政主管部门批复及环境监理合同，对项目施工建设实行的环境保护监督管理.</p>
        
               </div>
             </div>
       </div>
       <div class="am-u-sm-12 am-u-md-4">
       	<div class="am-thumbnail">
             <img id="fwimg" src="/xxhb/Public/Home/images/qjsc.png" alt=""/>
               <div class="am-thumbnail-caption">
                <h2>清洁生产审核</h2>
                 <p> 在生产和服务过程进行调查和诊断，找出能耗高、物耗高、污染重的原因，提出减少有毒有害物料的使用、产生，降低能耗、物耗以及废物产生的方案。</p>
        
               </div>
             </div>
       </div>
     </div>
      <div class="am-g">
       <div class="am-u-sm-12 am-u-md-4">
       		<div class="am-thumbnail">
             <img id="fwimg" src="/xxhb/Public/Home/images/sj.png" alt=""/>
               <div class="am-thumbnail-caption">
                <h2>环保工程设计</h2>
                 <p> 准确领会客户的意思进行前期调研并设计环保工程治理方案,负责安排工序、安装材料的预算及安装过程的跟进,负责方案实施后的环保验收.</p>
        
               </div>
             </div>
       </div>
       <div class="am-u-sm-12 am-u-md-4">
       	<div class="am-thumbnail">
             <img id="fwimg" src="/xxhb/Public/Home/images/pg.png" alt=""/>
               <div class="am-thumbnail-caption">
                <h2>环境影响评估</h2>
                 <p> 针对建设项目在建设和运行期间发生的可预测突发性事件所造成的人身安全与环境损害进行评估，提出合理可行措施，使建设项目损失和环境达到可接受水平</p>
        
               </div>
             </div>
       </div>
       <div class="am-u-sm-12 am-u-md-4">
	        <div class="am-thumbnail">
                <img id="fwimg" src="/xxhb/Public/Home/images/pgbg.png" alt=""/>
               <div class="am-thumbnail-caption">
                <h2>排污许可技术报告</h2>
                 <p>通过对排污单位进行现状调查,分析排污单位是否符合发证条件,核算国家、地方明确控制的重点污染物申请排放量。</p>
        
               </div>
             </div>
      </div>
     </div>
    <!--   <button    type="button" class="am-btn am-btn-primary am-round" > 更多 >> </button> -->
      <a class="tomore" href="<?php echo U('Fw/index');?>">更多 >></a>
   </div>


  <div class="section promo_banner-container">
    <!--index-container start-->
    <div class="promo_banner-box">
      <div class="container">
        <h2 class="promo_banner--title">期待您的加入</h2>
        <p class="promo_banner--text">
					为探索开拓新的业务范围和科研课题，解决环评业务剥离后专业技术人员不足的问题，急需招聘全职专业技术人员若干名。
        <div class="promo_banner--footer">
					<button type="button" class="am-btn am-btn-secondary">MORE>></button>
				</div>
      </div>
    </div>
    <!--index-container end-->
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