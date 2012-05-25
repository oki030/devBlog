<div id="body">
    <script type="text/javascript">
			$(function(){			
				// Tabs
				$('#tabs').tabs();
            });
            
            function validateProject()
            {                
                if (document.forms["ProjectForm"]["name"].value == '') 
                {
                    alert('Name field cannot be empty.');
                    return false;
                }                                                            
                if (document.forms["ProjectForm"]["category"].value == '') 
                {
                    alert('Category field cannot be empty.');
                    return false;
                }                
            }
    </script>

    <div id="tabs" class="edit_div">
        <ul>
            <li><a href="#tabs-1">Edit project</a></li>                                   
        </ul>
    
        <div id="tabs-1">
            <form onsubmit="return validateProject();" name="ProjectForm" method="post" action="<?php echoURL('admin/updateproject') ?>">                
                Project name:<br />
                <input class="textbox" type="text" name="name" value="<?php echo $name[0] ?>" style="width: 500px;" /><br/>
                Category:<br />
                <input class="textbox" type="text" name="category" value="<?php echo $category[0] ?>" style="width: 500px;"/><br/>
                Download link:<br />
                <input class="textbox" type="text" name="download" value="<?php echo $download_link[0] ?>" style="width: 758px;"/><br/>
                Source code link:<br />
                <input class="textbox" type="text" name="source" value="<?php echo $source_link[0] ?>" style="width: 758px;"/><br/><br/>
                
                <input type="hidden" name="id" value="<?php echo $id[0]?>" />
                
                <textarea name="content" style="width: 760px; height: 700px;">
                <?php echo $description[0] ?>
                </textarea>
                <br/>
                <input class="button" type="submit" value="Update project"/>
            </form>
        </div>
    </div>
</div>