        <?php include("header.php");?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li><a href="addsections.php"><i class=" icon-plus-sign"></i>Add Sections</a></li>
              <li class="active"><a href="sections.php"><i class="icon-eye-open"></i>View Sections</a></li>

             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
                <div class="span4">
              <?php
                                   
                                        $section = $_POST['section'];
										$id = $_POST['id'];
                                       
                                        
                                        $query = "Select * FROM sections";
                                        $results = @mysql_query($query);
                                        $row = mysql_fetch_array($results);
                                        if ($row)
                                        {
                                        $query = "Update sections set id='$section' WHERE id='$id'";
                                        mysql_query($query);
                                        echo "<h2>Record has been updated...</h2>";
                                        }
                ?>
               
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>