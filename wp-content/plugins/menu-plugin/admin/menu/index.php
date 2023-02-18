<?php 
ob_start();

  $active_tab = isset($_GET['tab'])?$_GET['tab']:'menu_template_list';
  
  ?>
<div class="page-inner" style="min-height:1631px !important">
  <!--PAGE INNER DIV STRAT-->
  <?php 
    //SAVE Template DATA
    if(isset($_POST['save_template']))

    
    
    {
          
    
    	global $wpdb;
      
    
    	$table_menu_template  = $wpdb->prefix . 'menu_template';
    	$sql = "CREATE TABLE IF NOT EXISTS ".$table_menu_template  ." (
    			  `id` int(11) NOT NULL AUTO_INCREMENT,
    			  `user_name` varchar(255),
            `user_email` varchar(255),	
            `user_contact` varchar(255),					  		  
    			  `password` varchar(255),				  		  
    			  PRIMARY KEY (`id`)
    			) DEFAULT CHARSET=utf8";
    
      
    	$wpdb->query($sql);
    	
    		

    	$userdata['user_name']=$_POST['user_name'];
      
    	$userdata['user_email']=$_POST['user_email'];
      
    	$userdata['user_contact']=$_POST['user_contact'];

    	$userdata['password']=$_POST['password'];
    	
    		if(isset($_REQUEST['action'])&& $_REQUEST['action']=='edit')
    		{	
    			
    			$applicationid['id']=$_POST['template_id'];
    			$result=$wpdb->update( $table_menu_template , $userdata ,$applicationid);
    			if($result)
    			{
    				?><div id="message" class="updated below-h2 ">
            <p>
              <?php 
                _e('Template Updated successfully.');
                ?>
            </p>
          </div>
          <?php
    			}	
    		}
    		else
    		{	
    			$result=$wpdb->insert( $table_menu_template , $userdata );
    			if($result)
    			{
            ?><div id="message" class="updated below-h2 ">
            <p>
              <?php 
                _e('Template Added successfully.');
                ?>
            </p>
          </div>
          <?php

    			}

    
    		}
    
    		
    		
    }
    //DELETE Template DATA
    if(isset($_REQUEST['action'])&& $_REQUEST['action']=='delete')
    {
    	global $wpdb;	
    	$table_menu_template  = $wpdb->prefix . 'menu_template';
    	$template_id=$_REQUEST['template_id'];
    
    	$result = $wpdb->query("DELETE FROM $table_menu_template  where id= ".$template_id);
    	
    	if($result)
    	{

        ?><div id="message" class="updated below-h2 ">
            <p>
              <?php 
                _e('Template Deleted successfully.');
                ?>
            </p>
          </div>
          <?php

    	}
    }
    
    ?>
  <div id="main-wrapper">
    <!--MAIN WRAPPER DIV STRAT-->
    <div class="row">
      <!--ROW DIV STRAT-->
      <div class="col-md-12">
        <!--COL 12 DIV STRAT-->
        <div class="panel panel-white">
          <!--PANEL WHITE DIV STRAT-->
          <div class="panel-body">
            <!--PANEL BODY DIV STRAT-->
            <h2 class="nav-tab-wrapper">
              <!--NAV TAB WRAPPER MENU STRAT-->
              <a href="?page=menu&tab=menu_template_list" class="nav-tab 
                <?php echo $active_tab == 'menu_template_list' ? 'nav-tab-active' : ''; ?>">
              <?php echo '<span class="dashicons dashicons-menu"></span> '.__('Template List'); ?></a>
              <?php  if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit')
                {?>
              <a href="?page=menu&tab=add_template&action=edit&template_id=<?php echo $_REQUEST['template_id'];?>"
                class="nav-tab <?php echo $active_tab == 'add_template' ? 'nav-tab-active' : ''; ?>">
              <?php _e('Edit Template'); ?></a>
              <?php 
                }
                else
                {?>
              <a href="?page=menu&tab=add_template"
                class="nav-tab <?php echo $active_tab == 'add_template' ? 'nav-tab-active' : ''; ?>">
              <?php echo '<span class="dashicons dashicons-plus-alt"></span> '.__('Add Template'); ?></a>
              <?php  }?>
            </h2>
            <!--NAV TAB WRAPPER MENU END-->
            <?php
              if($active_tab == 'menu_template_list')
              { 
              	?>
            <script type="text/javascript">
              jQuery(document).ready(function() {
                  jQuery('#menu_template_list').DataTable({
                      "responsive": true,
                      "order": [
                          [1, "asc"]
                      ],
                      "aoColumns": [{
                              "bSortable": true
                          },
                          {
                              "bSortable": true
                          },
                          {
                              "bSortable": false
                          }
                      ]
                  });
              });
            </script>
            <form name="wcwm_report" action="" method="post">
              <div class="panel-body">
                <!--PANEL BODY DIV START-->
                <div class="table-responsive">
                  <!--TABLE RESPONSIVE START-->
                  <table id="menu_template_list" class="display" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th><?php  _e( 'User Name' ) ;?></th>
                        <th><?php  _e( 'User Email' ) ;?></th>
                        <th><?php  _e( 'User Contact Number' ) ;?></th>
                        <th><?php  _e( 'Password' ) ;?></th>
                        <th><?php  _e( 'action' ) ;?></th>
                      </tr>
                    </thead>
                    <!--	<tfoot>
                      <tr>
                      	<th><?php // _e( 'Template Name' ) ;?></th>
                      	<th><?php // _e( 'Template Code' ) ;?></th>
                      	<th><?php // _e( 'Action') ;?></th>
                      </tr>
                      </tfoot>
                      <tbody>-->
                    <?php
                      global $wpdb;											
                      $table_menu_template  = $wpdb->prefix . 'menu_template';
                      
                      $result = $wpdb->get_results("SELECT * FROM $table_menu_template ");
                      if(!empty($result))
                      {
                      	foreach ($result as $retrieved_data)
                      	{
                      		?>
                    <tr>
                      <td>
                        <?php echo $retrieved_data->user_name; ?>
                      </td>
                      <td>
                        <?php echo $retrieved_data->user_email; ?>
                      </td>
                      <td>
                        <?php echo $retrieved_data->user_contact; ?>
                      </td>
                      <td>
                        <?php echo $retrieved_data->password; ?>
                      </td>
                  
                      <td>
                        <a href="?dashboard=user&page=menu&tab=add_template&action=edit&template_id=<?php echo $retrieved_data->id?>"
                          class="btn btn-info"> <?php _e('Edit') ;?></a>
                       
                        <a href="?dashboard=user&page=menu&tab=menu_template_list&action=delete&template_id=<?php echo $retrieved_data->id;?>"
                          class="btn btn-danger"
                          onclick="return confirm('<?php _e('Do you really want to delete this record?');?>');"><?php _e( 'Delete') ;?>
                        </a>
                      </td>
                    </tr>
                    <?php
                      }
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
                <!--TABLE RESPONSIVE DIV END-->
              </div>
              <!--PANEL BODY DIV END-->
            </form>
            <?php 
              }
              if($active_tab == 'add_template')
              {
              	$template_id=0;
              	if(isset($_REQUEST['template_id']))
              		$template_id=$_REQUEST['template_id'];
              		$edit=0;
              		if(isset($_REQUEST['action']) && $_REQUEST['action'] == 'edit')
              		{
              			$edit=1;
              			global $wpdb;											
              			$table_menu_template  = $wpdb->prefix . 'menu_template';
              		
              			$result = $wpdb->get_row("SELECT * FROM $table_menu_template  where id=".$template_id);
              		}

              		?>
            <div class="panel-body">
              <!--PANEL BODY DIV STRAT-->
              <form name="template_form" action="" method="post" class="form-horizontal"
                id="template_form" enctype="multipart/form-data">
                <?php $action = isset($_REQUEST['action'])?$_REQUEST['action']:'insert';?>
                <input type="hidden" name="action" value="<?php echo $action;?>">
                <input type="hidden" name="template_id" value="<?php echo $template_id;?>" />
              <form id="template-form" method="post">
                
             
                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">User Name<span
                    class="require-field">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" name="user_name" id="name" class="" 
                     required />
                  </div>
                </div>

                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">User Email<span
                    class="require-field">*</span></label>
                  <div class="col-sm-8">
                    <input type="email" name="user_email" id="email" class="" 
                     required />
                  </div>
                </div>

                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">User Contact Number<span
                    class="require-field">*</span></label>
                  <div class="col-sm-8">
                    <input type="text" name="user_contact" id="number" class="" 
                     required />
                  </div>
                </div>


                <div class="form-group row">
                  <label for="" class="col-sm-2 col-form-label">Password<span
                    class="require-field">*</span></label>
                  <div class="col-sm-8">
                  <input type="password" name="password" id="pass" class="" 
                     required /> </div>
                </div>
               
                <div class="col-sm-offset-2 col-sm-8">
                  <input type="submit" value="Save" name="save_template"
                    class="btn btn-success" />
                </div>
              </form>
            </div>
            <?php } ?>
            <!--PANEL BODY DIV END-->
         </div>
          <!--PANEL BODY DIV END-->
        </div>
        <!--PANEL WHITE DIV END-->
      </div>
      <!--COL 12 DIV END-->
    </div>
    <!--ROW DIV END-->
  </div>
  <!--MAIN WRAPPER DIV END-->
</div>
<!--PAGE INNER DIV END-->
<!-- include libraries(jQuery, bootstrap) -->




<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
