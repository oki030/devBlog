<div id="body">
    <div class="logodiv">
        <a href="<?php echoURL('home')?>" title="Dev blog">            
            <img src="<?php echoURL('images/logo.png')?>" alt="Dev blog" border="0" width="393" height="90" style="border:none; margin: 70px 0 0 53px;" />
        </a>
    </div>     
    <br/>
    <div class="login_div">
        <form method="post" action="<?php echoURL('admin/login') ?>">                
            <br/>
            Username:
            <input class="textbox" type="text" name="user" value="" style="width: 200px;" /><br/>
            Password:
            <input class="textbox" type="password" name="pass" value="" style="width: 200px;" /><br/>
            <input class="button" type="submit" value="Login" style="margin-top: 6px; margin-bottom: 6px;"/>
        </form>
    </div>
</div>