<div id="body">
    <div class="logodiv">
        <a href="<?php echoURL('home')?>" title="Dev blog">            
            <img src="<?php echoURL('images/logo.png')?>" alt="Dev blog" border="0" width="393" height="90" style="border:none; margin: 70px 0 0 53px;" />
        </a>
    </div>
    
    <div style="float: left;">                        
        <?php foreach($id as $key => $value):?>
        <div class="post_blog">
            <img src="<?php echoURL('images/project.png')?>" alt="App" border="0" width="16" height="16" style="border:none;" />
            <a href="<?php echoURL('projects/show/'.$value)?>" title="<?php echo $name[$key]?>" style="font-size:16px;"><?php echo $name[$key]?></a>                
            
            <?php if (!empty($_SESSION['admin'])): ?>                        
            <a onclick="return confirm('Are you sure you want to delete this project?');" href="<?php echoURL('admin/deleteproject/'.$value) ?>" title="Delete post" style="margin: 0 5px 0 5px; float: right;">
                        <img src="<?php echoURL('images/delete.png')?>" alt="Delete post" border="0" width="16" height="16" style="border:none;" />
            </a>
            
            <a onclick="return confirm('Are you sure you want to edit this project?');" href="<?php echoURL('admin/editproject/'.$value) ?>" title="Edit post" style="margin: 0 5px 0 5px; float: right;">
                        <img src="<?php echoURL('images/edit.png')?>" alt="Edit post" border="0" width="16" height="16" style="border:none;"/>
            </a>
            <?php endif; ?>
            
            <div class="post_content">
                <?php                    
                    if (strlen($description[$key]) > 800)
                    {
                        echo substr($description[$key], 0, 800);
                        echo '<a href="'.returnURL('projects/show/'.$value).'" title="read more" style="font-size:16px;"> ...</a>';
                    }
                    else
                    {
                        echo $description[$key];
                    }                                                                              
                ?>
            </div>
            <div style="text-align: right;">
                <?php if ($download_link[$key] != ''): ?>
                <a href="<?php echo $download_link[$key] ?>" target="_blank" title="Download">Download</a>
                <?php endif;?>
                <?php if ($source_link[$key] != ''): ?>
                <a href="<?php echo $source_link[$key] ?>" target="_blank" title="View source">View source</a>
                <?php endif;?>
            </div>
        </div>
        <?php endforeach;?>               
    </div>
       
    <div class="post_list" style="float: right;">
        <div class="post_content" style="width: 220px; padding: 0; margin:0; font-size: 16px; text-align:center;">Categories</div>
        
        <?php
            echo '<a href="'.returnURL('projects').'" title="All projects">All projects</a><br/>';
            
            foreach($count_category as $key => $value)
            {
                echo '<a href="'.returnURL('projects/category/'.$key).'" title="'.$key.'">'.$key.' ('.$value.')</a><br/>';
            }
        ?>                             
    </div>      
                              
</div>