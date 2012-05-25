	<div id="footer">
		<div class="footer" style="width: <?php  
            if (empty($_SESSION['admin']))
            {
                echo '370px';
            }
            else
            {
                echo '440px';
            }
        ?>;">
			<ul>
				<li><a href="<?php echoURL('home')?>" title="home">home</a>|</li>
				<li><a href="<?php echoURL('projects')?>" title="my projects">my projects</a>|</li>
				<li><a href="<?php echoURL('blog')?>" title="dev blog">dev blog</a>|</li>
				<li><a href="<?php echoURL('contact')?>" title="contact">contact</a>|</li>	
				<li><a href="<?php echoURL('admin')?>" title="admin panel">admin panel</a>
                    <?php
                        if (isset($_SESSION['admin']))
                        {
                            echo '(<a href="'.returnURL('admin/logout').'" title="Log out">Log out</a>)';
                        }
                    ?>                                        
                </li>				
			</ul>			
			<br/>
			<p>&copy;Oliver Markovic. All rights reserved.</p>
		</div>		
	</div>	
</body>
</html>