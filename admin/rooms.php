        <?php include("header.php");
		 error_reporting(E_ERROR | E_PARSE);?>
<div class="row">
             <div class="span3">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Actions</li>
              <li class="active"><a href="rooms.php"><i class="icon-eye-open"></i>View Rooms</a></li>
              <li><a href="addrooms.php"><i class=" icon-plus-sign"></i>Add Rooms</a></li>
              
             
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        
                <div class="span9">
                <fieldset>
    <legend>Rooms</legend>
               <?php
			   $success=$_GET['success'];
			   if ($success==1)
			   {
				    echo "<div class='alert alert-success'><button type='button' class='close data-dismiss='alert>&times;</button><h4>Success!</h4>Your request has been carried out without a hitch!</div>";
				   }
                        $rRoom=@mysql_query("select * from rooms");
                                        
                                $i=1;
                                echo "<table class='table table-bordered' id='dt'>";
                                echo "<thead><tr>";
                                echo "<td>Room </td>";
                                echo "<td>Room Type </td>";
								echo "<td>Action</td>";
                                echo "</tr></thead><tbody>";
                                        
                                while($row=mysql_fetch_array($rRoom))
                                {
                                        
                                echo "<tr>";
                                echo "<td>$row[0]</td>";
                                echo "<td>$row[1]</td>";
								echo "<td><a class='btn' href='editrooms.php?id=$row[0]'><i class='icon-edit'></i></button></a><a class='btn' href='deleterooms.php?id=$row[0]'><i class='icon-remove'></i></a></td>";
                                echo "</tr>";
                                $i++;
                        }
                                        echo "</tbody></table>";

        ?>
                   </fieldset>
            	</div>

        <!-- /container -->
     <?php include("footer.php");?>