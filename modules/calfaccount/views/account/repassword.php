<?php defined('SYSPATH') or die('No direct script access.');
/**
 * @description : 
 *
 * @author Azhai
 * @date 2011-09-24 
 * @copyright 2011 
 *
 */
?>
	  <div class="repassword clearfix">
	     <h2>修改密码</h2>
	     <ul>
<li class="item fore">
<span class="label"><em>*</em>旧密码：</span>
<span>
<input name="txtOldPwd" type="password" maxlength="16" id="txtOldPwd" class="text"
     onblur="return validate.RegExpOne({ \'regexpress\': \'notempty\', \'id\': \'txtOldPwd\', \'message\': \'请输入旧密码!\'})">
 </span>    
 <span class="msg-error-01" id="txtOldPwdTip" style="display: none"></span>
</li>   
<li class="item">
 <span class="label"><em>*</em>新密码：</span>
 <span><input name="txtNewPwd" type="password" maxlength="16" id="txtNewPwd" class="text" 
  onblur="validate.RegExpOne({ \'regexpress\': \'password\', \'id\': \'txtNewPwd\', \'message\': \'密码为由英文、数字及“_”、“-”组成的6-16位字符!\'})">
 </span>
 <span class="msg-error-01" id="txtNewPwdTip" style="display: none"></span>
   
</li>
<li class="item">
 <span class="label"><em>*</em>重复新密码：</span>
 <span>
   <input name="txtConfimPwd" type="password" maxlength="16" id="txtConfimPwd" class="text" 
   onblur="return validate.RegConfirmPW({\'regexpress\': \'confirm\', \'id\': \'txtConfimPwd\', \'message\': \'两次密码输入的不一致!\'})">
 </span>  
 <span class="msg-error-01" id="txtConfimPwdTip" style="display: none"></span>
</li>
<li class="item">
<span class="label">&nbsp;</span>
<span>
    <input type="submit" name="btnSubmit" value="修改密码" onclick="return validate.AllValidate();" id="btnSubmit" class="btn-pass">
        <a class="btn btn-11" href="http://jd2008.360buy.com/user_home.aspx"><s></s>取消</a>
    </span>
</li>
	   </ul>  
      </div>