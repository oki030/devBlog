<div id="body">       
    <script type="text/javascript">
			$(function(){			
				// Tabs
				$('#tabs').tabs();
            });
            
            function validateUser()
            {                
                var old_user = document.forms["userForm"]["olduser"].value;
                var user = document.forms["userForm"]["user"].value;
                
                if (old_user == '') 
                {
                    alert('Old username field cannot be empty.');
                    return false;
                }
                if (user == '') 
                {
                    alert('Username field cannot be empty.');
                    return false;
                }                               
            }
            
            function validateNewPost()
            {                
                if (document.forms["newPostForm"]["title"].value == '') 
                {
                    alert('Title field cannot be empty.');
                    return false;
                }                                                            
                if (document.forms["newPostForm"]["category"].value == '') 
                {
                    alert('Category field cannot be empty.');
                    return false;
                }
            }
            
            function validateNewProject()
            {                
                if (document.forms["newProjectForm"]["name"].value == '') 
                {
                    alert('Name field cannot be empty.');
                    return false;
                }                                                            
                if (document.forms["newProjectForm"]["category"].value == '') 
                {
                    alert('Category field cannot be empty.');
                    return false;
                }                
            }
            
            function validatePass()
            {                
                var pass = document.forms["passForm"]["pass"].value;
                var re_pass = document.forms["passForm"]["repass"].value;
                
                if (pass == '') return false;
                if (re_pass == '') return false;
                
                if (pass != re_pass)
                {
                    alert("The new password and re-entered new password do not match.");
                    return false;
                }
            }
    </script>
   
    <div id="tabs" style="float: left; width: 800px; height: auto;">
        <ul>
            <li><a href="#tabs-1">Account settings</a></li>            
            <li><a href="#tabs-2">Welcome message</a></li>
            <li><a href="#tabs-3">Contact information</a></li>
            <li><a href="#tabs-4">Add new project</a></li>
            <li><a href="#tabs-5">Add new post</a></li>            
        </ul>
        
        <div id="tabs-1">
            <div class="login_div" style="float: left; border-width: 1px; margin-left: 100px;">
                <form name="userForm" onsubmit="return validateUser()" method="post" action="<?php echoURL('admin/setuserpass') ?>">                
                    <br/>
                    Old username:
                    <input class="textbox" type="text" name="olduser" value="" style="width: 200px;" /><br/>
                    New username:
                    <input class="textbox" type="text" name="user" value="" style="width: 200px;" /><br/>                    
                    <input class="button" type="submit" value="Update" style="margin-top: 6px; margin-bottom: 6px; "/>
                </form>
            </div>
            
            <div class="login_div" style="float: right; border-width: 1px; margin-right: 100px;">
                <form name="passForm" method="post" onsubmit="return validatePass()" action="<?php echoURL('admin/setuserpass') ?>">                
                    <br/>
                    Old password:
                    <input class="textbox" type="password" name="oldpass" value="" style="width: 200px;" /><br/>
                    New password:
                    <input class="textbox" type="password" name="pass" value="" style="width: 200px;" /><br/>
                    Re-enter new password:
                    <input class="textbox" type="password" name="repass" value="" style="width: 200px;" /><br/>
                    <input class="button" type="submit" value="Update" style="margin-top: 6px; margin-bottom: 6px;"/>
                </form>
            </div>
            <div style="clear:both;"></div>
        </div>
        
        <div id="tabs-2">
            <form method="post" action="<?php echoURL('admin/setwelcome') ?>">
                <textarea name="content" style="width: 760px; height: 700px;">
                <?php 
                    if (isset($welcome_msg[0])) echo $welcome_msg[0];
                ?>
                </textarea>
                <br/>
                <input class="button" type="submit" value="Save"/>
            </form>
        </div>
        
        <div id="tabs-3">
            <form method="post" action="<?php echoURL('admin/setcontact') ?>">
                <textarea name="content" style="width: 760px; height: 700px;">
                <?php 
                    if (isset($contact_info[0])) echo $contact_info[0];
                ?>
                </textarea>
                <br/>
                <input class="button" type="submit" value="Save"/>
            </form>
        </div>
        
        <div id="tabs-4">
            <form onsubmit="return validateNewProject();" name="newProjectForm" method="post" action="<?php echoURL('admin/savenewproject') ?>">                
                Project name:<br />
                <input class="textbox" type="text" name="name" value="" style="width: 500px;" /><br/>
                Category:<br />
                <input class="textbox" type="text" name="category" value="" style="width: 500px;"/><br/>
                Download link:<br />
                <input class="textbox" type="text" name="download" value="" style="width: 758px;"/><br/>
                Source code link:<br />
                <input class="textbox" type="text" name="source" value="" style="width: 758px;"/><br/><br/>
                
                <textarea name="content" style="width: 760px; height: 700px;">
                Here enter your project information.                
                </textarea>
                <br/>
                <input class="button" type="submit" value="Add project"/>
            </form>
        </div>
        
        <div id="tabs-5">
            <form onsubmit="return validateNewPost();" name="newPostForm" method="post" action="<?php echoURL('admin/savenewpost') ?>">                
                Title:<br />
                <input class="textbox" type="text" name="title" value="" style="width: 500px;" /><br/>
                Category:<br />
                <input class="textbox" type="text" name="category" value="" style="width: 500px;" /><br/><br/>
                
                <textarea name="content" style="width: 760px; height: 700px;">
                Here enter your post.                
                </textarea>
                <br/>
                <input class="button" type="submit" value="Add post"/>
            </form>                                   
        </div>        
    </div> 
    <br/>                         
</div>