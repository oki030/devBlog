<div id="body">
    <div class="logodiv">
        <a href="<?php echoURL('home')?>" title="Dev blog">            
            <img src="<?php echoURL('images/logo.png')?>" alt="Dev blog" border="0" width="393" height="90" style="border:none; margin: 70px 0 0 53px;" />
        </a>
    </div> 
    
    <div class="hallo_div">        
        <?php echo $welcome_msg[0];?>      
    </div>
    
    <div class="post" style="width: 371px; float: left; margin: 0; background-color:#FFFFFF; color:#292929; border: solid #292929 2px;">
        <div class="post" style="width: 375px; height: 25px; float: none; margin: -13px 0 0 -12px; padding: 5px 10px 0 10px;">
            Recently projects
        </div>        
        
        <?php
            foreach($name as $key => $value)
            {
                echo '<a href="'.returnURL('projects/show/'.$id[$key]).'" title="'.$value.'">'.$value.'</a><br/>';
            }
        ?>                
    </div>
    
    <div class="post" style="width: 371px; float: right; margin: 0; background-color:#FFFFFF; color:#292929; border: solid #292929 2px;">
        <div class="post" style="width: 375px; height: 25px; float: none; margin: -13px 0 0 -12px; padding: 5px 10px 0 10px;">
            New blog posts
        </div>
        
        <?php
            foreach($p_title as $key => $value)
            {
                echo '<a href="'.returnURL('blog/show/'.$p_id[$key]).'" title="'.$value.'">'.$value.'</a><br/>';
            }
        ?>
    </div>                          
</div>