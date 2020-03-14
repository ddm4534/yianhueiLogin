<!DOCTYPE html>

<html>
    <head>
        <meta http-equiv="CONTENT-TYPE" content="text/html; charset=UTF-8">
        <title>顏回俱樂部白金卡會員中心</title>
		<style>
			body {
				padding: 20px;
				height:1200px;
				background-image: linear-gradient(to bottom, rgb(50,255,255), rgb(50,255,50));
				font-family: "標楷體", "儷黑 Pro";
			}
			#mainTop {
				background-color: rgb(0,70,0);
				border: 10px groove rgb(110,90,20);
				padding: 0px;
				margin: 0px; 
				
			}
			#mainTitle {
				margin: 0px;
				padding-top: 50px;
				padding-bottom: 20px;
				color: rgb(255,255,255);
				font-family: "標楷體", "儷黑 Pro";
			}
			#loginBtt {
				padding-bottom:30px;
			}
			#login {
				margin-right: 20px;
				width: 150px;
				height: 50px;
				font-size: 25px;
				font-family: "標楷體", "儷黑 Pro";
				background-color: rgb(255,255,0);
				border: 2px solid rgb(220,220,10);
				border-radius: 50px;
			}
			#login:hover{
				background-color: rgb(245,245,10);
				
			}
			#login:active{
				background-color: rgb(200,200,10);
				transform: translate(0px, 3px);
				duration: 5s; 
			}
			#create {
				margin-left: 20px;
				width: 150px;
				height: 50px;
				font-size: 25px;
				font-family: "標楷體", "儷黑 Pro";
				background-color: rgb(255,123,0);
				border: 2px solid rgb(220,110,10);
				border-radius: 50px;
			}
			#create:hover{
				background-color: rgb(245,120,10);
				
			}
			#create:active{
				background-color: rgb(200,100,10);
				transform: translate(0px, 3px);
				duration: 5s; 
			}
			#mainText {
				margin-left: 300px;
			}
			.bulletin {
				height: 160px;
				margin: 50px;
				margin-top: 0px;
				background-color: rgb(0,200,50);
				border: 5px solid black;
				font-family: "標楷體", "儷黑 Pro";
				overflow: auto;
				padding: 20px;
			}
			#sideLeft {
				position: absolute;
				top: 300px;
				width: 220px;
				height: 600px;
				background-color: rgb(240,240,150);
				border: 5px dashed black;
				padding-left: 20px;
			}
      input {
        width: 220px;
      }
		</style>
    </head>
    <body>
        <div id = "mainTop">
			<h1 id = "mainTitle"  align="center">顏回俱樂部白金卡會員中心</h1>
			<div id = "loginBtt" align="center" >
				<button id = "login" onclick = "appendLoginBox();">會員登入</button>
				<button id = "create" onclick = "constructing();">申請帳號</button>
			</div>
		</div>
		<!--
		<div id = "mainText">
			<h3>最新消息</h3>
			<div class = "bulletin">
				<ul>
					<li><a href = ""></a>
					<li><a href = ""></a>
					<li><a href = ""></a>
					<li><a href = ""></a>
					<li><a href = ""></a>
					<li><a href = ""></a>
				</ul>
			</div>
			<h3>榮譽榜</h3>
			<div class = "bulletin">
				<ul>
					<li><a href = ""></a>
					<li><a href = ""></a>
					<li><a href = ""></a>
					<li><a href = ""></a>
					<li><a href = ""></a>
					<li><a href = ""></a>
				</ul>
			</div>
		</div>
		<div id = "sideLeft">
			<h3>相關連結</h3>
			<ul>
				<li><a href = "https://www.facebook.com/groups/2149393515355238/"><img src = "https://scontent.ftpe8-2.fna.fbcdn.net/v/t1.15752-9/87794367_220635539063211_6021355282100125696_n.png?_nc_cat=100&_nc_sid=b96e70&_nc_ohc=9pS1HJNBzcoAX9ktqBV&_nc_ht=scontent.ftpe8-2.fna&oh=0aa13baee5a6303c15f0d1deb19021e1&oe=5EF0F65C" width = "150px"></a>
				<li><a href = "https://web2.ischool.com.tw/?school=h.nehs.hc.edu.tw"><img src = "https://scontent.ftpe8-1.fna.fbcdn.net/v/t1.15752-9/87177264_2625983010957027_6327489014676848640_n.png?_nc_cat=105&_nc_sid=b96e70&_nc_ohc=XWqUHn3VOHIAX8DkrHk&_nc_ht=scontent.ftpe8-1.fna&oh=c6071c9ec3e8689fbe52e24eb6f558e1&oe=5EC0E59C" width = "150px"></a>
				<li><a href = "https://ep.nehs.hc.edu.tw"><img src = "https://scontent.ftpe8-1.fna.fbcdn.net/v/t1.15752-9/87255846_223359378711430_4975926732918882304_n.png?_nc_cat=109&_nc_sid=b96e70&_nc_ohc=vAIx1bDALRMAX-300OH&_nc_ht=scontent.ftpe8-1.fna&oh=6936ddd7e2929b437f367d605afddf97&oe=5EF1F1C0" width = "150px"></a>
			</ul>
		</div>
		-->
        <script>
			
			/**css**/
			if(window.innerHeight > 1200){
        document.body.style.height = window.innerHeight + "px";
      }
      if(window.outerWidth > 900){
        document.body.style.paddingLeft = (window.outerWidth - 900)/2 + "px";
        document.body.style.paddingRight = (window.outerWidth - 900)/2 + "px";
      } 
      /**constructing**/
      var construct = document.createElement("p");
      var constructing = function(){
        
        construct.innerHTML = "*網頁工程進行中...請耐心等候";
        construct.style.fontSize = "15px";
        construct.style.color = "red";
        loginBtt.appendChild(construct);
      }
			
			/**login**/
			var loginClicked = false;
			
            var loginBox = document.createElement("div");
            loginBox.style.border = "3px groove rgb(50,30,10)";
			loginBox.style.backgroundColor = "rgb(70,60,10)";
            
			loginBox.style.width = 250 + "px";
			loginBox.align = "center";
            var loginForm = document.createElement("form");
            //loginForm.action = "http://localhost:4000/yianhuei/yianhueiServer.php";
            loginForm.action = "https://yanhueiserver.h811021.repl.co/";
            loginForm.method = "post";
			var username = document.createElement("p");
            username.innerHTML = "用戶名稱： ";
			username.style.margin = "5px";
			username.style.padding = "0px";
			username.style.fontFamily = '"標楷體", "儷黑 Pro"';
			username.style.color = "white";
            var usernameInput = document.createElement("input");
            usernameInput.type = "text";
            usernameInput.name = "usernameInput";
            
			usernameInput.style.margin = "5px";
			usernameInput.style.padding = "2px";
			usernameInput.style.fontFamily = '"標楷體", "儷黑 Pro"';
			usernameInput.style.fontSize = "20px";
            var password = document.createElement("p");
            password.innerHTML = "密碼：";
			password.style.margin = "5px"
			password.style.padding = "0px"
			password.style.fontFamily = '"標楷體", "儷黑 Pro"';
			password.style.color = "white";
            var passwordInput = document.createElement("input");
            passwordInput.type = "password";
            passwordInput.name = "passwordInput";
            
			passwordInput.style.margin = "5px"
			passwordInput.style.padding = "2px"
			passwordInput.style.fontFamily = '"標楷體", "儷黑 Pro"';
			passwordInput.style.fontSize = "20px";
            var submitInput = document.createElement("input");
            submitInput.type = "submit";
			submitInput.style.margin = "5px";
			submitInput.style.marginLeft = "0px";
			submitInput.style.padding = "2px";
			submitInput.style.fontFamily = '"標楷體", "儷黑 Pro"';
            submitInput.style.fontSize = "20px";
			submitInput.style.width = "70px";
			submitInput.style.backgroundColor = "yellow";
			submitInput.style.border = "1px solid rgb(220,220,10)";
			
            loginBox.appendChild(loginForm);
            loginForm.appendChild(username);
            loginForm.appendChild(usernameInput);
            loginForm.appendChild(password);
            loginForm.appendChild(passwordInput);
            loginForm.appendChild(submitInput);
            var appendLoginBox = function(){
				
				loginBox.style.position = "absolute";
				loginBox.style.top = 300 + "px";
				loginBox.style.left = (window.innerWidth - 50 - 250)/2 + "px";
				if (loginClicked === false){
					loginBox.style.opacity = "0";
				}
				document.body.appendChild(loginBox);
				var op = 0;
				var transparentOff = function(){
					if (loginClicked === false){
						loginBox.style.opacity = op + "";
					}else{
						loginBox.style.opacity = 1 - op + "";
					}
					
					if (op < 1){
						op += 0.01;
					} else{
						window.clearInterval(changeOp);
						if (loginClicked === false){
							loginClicked = true;
						}else{
							loginClicked = false;
						}
					}
				}
				var changeOp = window.setInterval(transparentOff, 5);
				
			}
        </script>
    </body>
</html>
