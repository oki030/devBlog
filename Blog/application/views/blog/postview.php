<div id="body">
    <div class="logodiv">
        <a href="<?php echoURL('home')?>" title="Dev blog">            
            <img src="<?php echoURL('images/logo.png')?>" alt="Dev blog" border="0" width="393" height="90" style="border:none; margin: 70px 0 0 53px;" />
        </a>
    </div>   
                                      
        <div class="post_blog" style="width: 770px; float: left;">
            <img src="<?php echoURL('images/post.png')?>" alt="App" border="0" width="16" height="16" style="border:none;" />
            <?php 
                if (isset($p_title[0])) echo $p_title[0];
            ?>                
            
            <?php if (!empty($_SESSION['admin'])): ?>                        
            <a onclick="return confirm('Are you sure you want to delete this post?');" href="<?php echoURL('admin/deletepost/'.$p_id[0]) ?>" title="Delete post" style="margin: 0 5px 0 5px; float: right;">
                        <img src="<?php echoURL('images/delete.png')?>" alt="Delete post" border="0" width="16" height="16" style="border:none;" />
            </a>
            
            <a onclick="return confirm('Are you sure you want to edit this post?');" href="<?php echoURL('admin/editpost/'.$p_id[0]) ?>" title="Edit post" style="margin: 0 5px 0 5px; float: right;">
                        <img src="<?php echoURL('images/edit.png')?>" alt="Edit post" border="0" width="16" height="16" style="border:none;"/>
            </a>
            <?php endif; ?>
            
            <div class="post_content" style="width: 750px; clear: both;">
                <?php 
                    if (isset($p_content[0])) echo $p_content[0];
                ?>
            </div>
        </div>                                         
</div>