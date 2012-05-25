<div id="body">
    <div class="logodiv">
        <a href="<?php echoURL('home')?>" title="Dev blog">            
            <img src="<?php echoURL('images/logo.png')?>" alt="Dev blog" border="0" width="393" height="90" style="border:none; margin: 70px 0 0 53px;" />
        </a>
    </div>   
    
    <div style="float: left;">                        
        <?php foreach($p_id as $key => $value):?>
        <div class="post_blog">
            <img src="<?php echoURL('images/post.png')?>" alt="App" border="0" width="16" height="16" style="border:none;" />
            <a href="<?php echoURL('blog/show/'.$value)?>" title="<?php echo $p_title[$key]?>" style="font-size:16px;"><?php echo $p_title[$key]?></a>                
            
            <?php if (!empty($_SESSION['admin'])): ?>                        
            <a onclick="return confirm('Are you sure you want to delete this post?');" href="<?php echoURL('admin/deletepost/'.$value) ?>" title="Delete post" style="margin: 0 5px 0 5px; float: right;">
                        <img src="<?php echoURL('images/delete.png')?>" alt="Delete post" border="0" width="16" height="16" style="border:none;" />
            </a>
            
            <a onclick="return confirm('Are you sure you want to edit this post?');" href="<?php echoURL('admin/editpost/'.$value) ?>" title="Edit post" style="margin: 0 5px 0 5px; float: right;">
                        <img src="<?php echoURL('images/edit.png')?>" alt="Edit post" border="0" width="16" height="16" style="border:none;"/>
            </a>
            <?php endif; ?>
            
            <div class="post_content">
                <?php                    
                    if (strlen($p_content[$key]) > 800)
                    {
                        echo substr($p_content[$key], 0, 800);
                        echo '<a href="'.returnURL('blog/show/'.$value).'" title="read more" style="font-size:16px;"> ...</a>';
                    }
                    else
                    {
                        echo $p_content[$key];
                    }                                                                              
                ?>
            </div>
        </div>
        <?php endforeach;?>               
    </div>     
       
    <div class="post_list" style="float: right;">
        <div class="post_content" style="width: 220px; padding: 0; margin:0; font-size: 16px; text-align:center;">Categories</div>
        
        <?php
            echo '<a href="'.returnURL('blog').'" title="All posts">All posts</a><br/>';
        
            foreach($count_category as $key => $value)
            {
                echo '<a href="'.returnURL('blog/category/'.$key).'" title="'.$key.'">'.$key.' ('.$value.')</a><br/>';
            }
        ?>                             
    </div>       
                           
</div>