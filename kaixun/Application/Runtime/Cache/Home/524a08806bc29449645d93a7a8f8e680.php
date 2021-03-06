<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
  <meta charset="UTF-8" /> 
  <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no" /> 
  <title>注册</title> 
  <script type="text/javascript" src="/Public/Home/js/jquery-1.8.3.min.js"></script>
  <link type="text/css" rel="stylesheet" href="/Public/Home/css/reset.css" /> 
  <link type="text/css" rel="stylesheet" href="/Public/Home/css/layout.css" /> 
  <link type="text/css" rel="stylesheet" href="/Public/Home/css/registerpwd.css" />
  <script type="text/javascript" src="/Public/Home/js/register.js"></script>
  <script type="text/javascript">
  window.getRegister = '<?php echo U("Login/getRegister");?>';
  window.url_index = '<?php echo U("Index/index");?>';
  </script>
 </head> 
 <body class="zh_CN"> 
  <div class="wrapper"> 
   <div class="wrap"> 
    <div class="layout"> 
     <div class="n-frame device-frame reg_frame" id="main_container"> 
      <div class="title-item t_c" style="padding-top:100px;"> 
       <h4 class="title_big30">注册帐号</h4> 
      </div> 
      <div>
       <div class="regbox"> 
        <div class="phone_step1"> 
         <div class="inputbg"> 
          <label class="labelbox user_account" for=""> <input type="text" id="user_account" name="" data-type="PH" placeholder="请输入账号" /> <span class="labelbox_err" style="display:none">* 账号格式错误或已存在</span></label> 
         </div> 
         <div class="inputbg"> 
          <label class="labelbox user_password" for=""> <input type="password" id="user_password" name="phone" data-type="PH" placeholder="请输入密码" /> <span class="labelbox_err" style="display:none">* 密码不能少于6位</span></label> 
         </div>
         <div class="inputbg"> 
          <label class="labelbox user_password_again" for=""> <input type="password" id="user_password_again" name="phone" data-type="PH" placeholder="请输入确认密码" /> <span class="labelbox_err" style="display:none">* 两次输入密码不一致</span></label> 
         </div>
         <div class="inputbg"> 
          <label class="labelbox user_name" for=""> <input type="text" id="user_name" name="phone" data-type="PH" placeholder="请输入昵称或公司名称" /> <span class="labelbox_err" style="display:none">* 必须填写</span></label> 
         </div>
         <div class="inputbg"> 
          <label class="labelbox user_phone" for=""> <input type="tel" id="user_phone" name="phone" data-type="PH" placeholder="请输入手机" /> <span class="labelbox_err" style="display:none">* 手机格式不正确</span></label> 
         </div>
         <div class="inputbg"> 
          <label class="labelbox user_verify" for=""> <input type="tel" id="user_verify" placeholder="请输入验证码" /> <span class="labelbox_err" style="display:none">* 验证码不正确</span></label> 
         </div>
         <div class="inputbg"> 
          <img src="<?php echo U('Login/verify');?>"> 
         </div>
         <div class="fixed_bot mar_phone_dis1"> 
          <input class="btn332 btn_reg_1" type="button" id="submit_register" value="立即注册" />
         </div> 
        </div> 
       </div>
      </div>
     </div> 
    </div> 
   </div> 
  </div> 
  <div class="n-footer"> 
   <p class="nf-intro"><span>公司版权所有<a class="beianlink beian-record-link" target="_blank" href="">公网安备号</a>ICP证号</span></p> 
  </div>  
 </body>
</html>