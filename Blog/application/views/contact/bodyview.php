<div id="body">
    <div class="logodiv">
        <a href="<?php echoURL('home')?>" title="Dev blog">            
            <img src="<?php echoURL('images/logo.png')?>" alt="Dev blog" border="0" width="393" height="90" style="border:none; margin: 70px 0 0 53px;" />
        </a>
    </div>
    
    <div class="post" style=" text-align: center; width: 150px; margin: 0 0 10px 0; padding: 5px;">
        Contact information
    </div>
    
    <?php
        echo '<div class="contact" style="font-size: 16px">'.$contact_info[0].'</div>';
    ?>                          
</div>