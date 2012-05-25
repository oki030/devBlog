<div id="body">
    <script type="text/javascript">
			$(function(){			
				// Tabs
				$('#tabs').tabs();
            });
            
            function validatePost()
            {                
                if (document.forms["PostForm"]["title"].value == '') 
                {
                    alert('Title field cannot be empty.');
                    return false;
                }                                                            
                if (document.forms["PostForm"]["category"].value == '') 
                {
                    alert('Category field cannot be empty.');
                    return false;
                }
            }
    </script>

    <div id="tabs" class="edit_div">
        <ul>
            <li><a href="#tabs-1">Edit post</a></li>                                   
        </ul>
    
        <div id="tabs-1">
            <form onsubmit="return validatePost();" name="PostForm" method="post" action="<?php echoURL('admin/updatepost') ?>">
                        
                Title:<br />
                <input class="textbox" type="text" name="title" value="<?php echo $p_title[0]?>" style="width: 500px;" /><br/>
                Category:<br />
                <input class="textbox" type="text" name="category" value="<?php echo $p_category[0]?>" style="width: 500px;" /><br/><br/>
                
                <input type="hidden" name="id" value="<?php echo $p_id[0]?>" />
                        
                <textarea name="content" style="width: 760px; height: 700px;">
                <?php echo $p_content[0]?>                
                </textarea>
                <br/>
                <input class="button" type="submit" value="Update post"/>
            </form>
        </div>
    </div>
</div>