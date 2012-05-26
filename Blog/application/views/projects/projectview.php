<div id="body">
    <div class="logodiv">
        <a href="<?php echoURL('home')?>" title="Dev blog">            
            <img src="<?php echoURL('images/logo.png')?>" alt="Dev blog" border="0" width="393" height="90" style="border:none; margin: 70px 0 0 53px;" />
        </a>
    </div>   
                                      
        <div class="post_blog" style="width: 770px; float: left;">
            <img src="<?php echoURL('images/project.png')?>" alt="App" border="0" width="16" height="16" style="border:none;" />
            <?php 
                if (isset($name[0])) echo $name[0];
            ?>                
            
            <?php if (!empty($_SESSION['admin'])): ?>                        
            <a onclick="return confirm('Are you sure you want to delete this project?');" href="<?php echoURL('admin/deleteproject/'.$id[0]) ?>" title="Delete post" style="margin: 0 5px 0 5px; float: right;">
                        <img src="<?php echoURL('images/delete.png')?>" alt="Delete post" border="0" width="16" height="16" style="border:none;" />
            </a>
            
            <a onclick="return confirm('Are you sure you want to edit this project?');" href="<?php echoURL('admin/editproject/'.$id[0]) ?>" title="Edit post" style="margin: 0 5px 0 5px; float: right;">
                        <img src="<?php echoURL('images/edit.png')?>" alt="Edit post" border="0" width="16" height="16" style="border:none;"/>
            </a>
            <?php endif; ?>
            
            <div class="post_content" style="width: 750px;">
                <?php 
                    if (isset($description[0])) echo $description[0];
                ?>
            </div>
            <div style="text-align: right;">
                <a href="<?php if (isset($download_link[0])) echo $download_link[0]?>" target="_blank" title="Download">Download</a>
                <a href="<?php if (isset($source_link[0])) echo $source_link[0]?>" target="_blank" title="View source">View source</a>
            </div>
        </div>                                         
</div>