<?php
  session_start();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <title>用户注册</title>
  <link rel="shortcut icon" href="../public/img/favicon.ico" />
  <link rel="stylesheet" href="public/css/index_style.css" />
	<link rel="stylesheet" href="public/css/regist.css" /> 
  <script src="public/js/jquery-1.11.3.js"></script>
  <script src="../public/js/toast.js"></script>
  <script src="public/js/register.js"></script>
</head>
<body>
  <!-- start homehead -->
  <?php 
    include 'homeheader.php';
  ?>
	<div class="main">
    <div class="wrap">
      <div class="bg">  
          <form id="register" action="#">
            <table class="u-table">
              <tr>
                <td>
                  <input id="regname" type="text" name="regname" placeholder="请输入用户名"/>
                </td>
              </tr>
              <tr>
                <td>
                  <div id="namediv"></div>
                </td>              
              </tr>

              <tr>
                <td>
                  <input id="regpwd1" type="password" name="regpwd1" placeholder="密码请输入至少6位有效字符"/>
                </td>
              </tr>
              <tr>
                <td>
                  <div id="pwddiv1"></div></p>
                </td>              
              </tr>

              <tr>
                <td>
                  <input id="regpwd2" type="password" name="regpwd2" placeholder="请再输入一次密码"/>
                </td>
              </tr>
              <tr>
                <td>
                  <div id="pwddiv2"></div>
                </td>              
              </tr>

              <tr>
                <td>
                  <input id="realname" type="text" name="realname" placeholder="请输入真实姓名"/>
                  
                </td>
              </tr>
              <tr>
                <td>
                <div id="rnamediv"></div>
                </td>              
              </tr>
              <tr>
                <td>
                  <input id="regbtn" type="button" class="regist-btn" value="注册" disabled="disabled"/>
                </td>
              </tr>
            </table>
          </form>
      </div> 		
    </div>
	</div>
  <!-- start foot -->
	<?php 	   
		include 'footer.php';
	?>	
</body>
</html>