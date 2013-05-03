<!-- START PROFILE PICTURE AREA -->
        
<div class="profile_container">

	<div class="grid_3 pic">
    
        <h2>Profile Picture</h2>
        
        <img src="<?=IMG_URL?>agent_pic.png" >
        
        <div class="delete_pic">
        
        <input type="checkbox" name="delete">&nbsp;Delete Current Picture
        
        </div>
        
        <div class="add_pic">        		
        
        <p>Add New Profile Picture</p>
        
        <div class="browse">
		<a href="#" >Browse</a>
        </div>


        </div>    
    </div><!-- END GRID 3 -->

	<div class="grid_5 sender">
    
    	<h2>Select Sender - <select style="width: 170px;"><option>Sender1</option><option>Sender2</option></select> </h2>
            <div class="grid_2 alpha">
            
            <div class="sender-info">
			<table class="sender-info-table">
            	<tr>
                	<td class="first-td">Name:</td>
                    <td class="second-td">Doug Frankel</td>
                </tr>
                <tr>
                	<td class="first-td">E-mail:</td>
                    <td class="second-td">Doug@usabg.net</td>
                </tr>
                <tr>
                	<td class="first-td">Phone:</td>
                    <td class="second-td">937-387-0801</td>
                </tr>
                <tr>
                	<td class="first-td">Mobile:</td>
                    <td class="second-td">937-387-0801</td>
                </tr>
                <tr>
                	<td class="first-td">Website:</td>
                    <td class="second-td">usabg.net/dfrankel</td>
                </tr>
                <tr>
                	<td class="first-td">Address:</td>
                    <td class="second-td">640 Poe Ave.</td>
                </tr>
                <tr>
                	<td class="first-td">City:</td>
                    <td class="second-td">Dayton</td>
                </tr>
                <tr>
                	<td class="first-td">State:</td>
                    <td class="second-td">Ohio</td>
                </tr>
                <tr>
                	<td class="first-td">Zip:</td>
                    <td class="second-td">45414</span></td>
                </tr> 
            </table>
            </div>
            
            <div class="edit_info">
            <a href="#" class="edit_button" >Edit Info</a>        
            </div>
            
            <div class="change-form">
            <form class="edit-form" id="edit-form" name="edit-form" title="Change Sender Info" action="#">
			
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value=""  />
            
            <label for="email">Email:</label>
            <input type="text" name="email" id="email" value="" />
            
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone" value="" />
            
            <label for="mobile">Mobile:</label>
            <input type="text" name="mobile" id="mobile" value="" />
            
            <label for="website">Website:</label>
            <input type="text" name="website" id="website" value="" />
            
            <label for="address">Address:</label>
            <input type="text" name="address" id="address" value="" />

            <label for="city">City:</label>
            <input type="text" name="city" id="city" value="" />

            <label for="state">State:</label>
            <input type="text" name="state" id="state" value="" />

            <label for="zip">Zip:</label>
            <input type="text" name="zip" id="zip" value="" /> 
            
            <div class="change-button">
            <button>Change Info</button>
            </div>
            
            </form>
            </div><!-- END CHANGE FORM -->
            
    </div><!-- END GRID 2 ALPHA -->
              
    </div><!-- END GRID 5 -->


	<div class="grid_3 cinfo">
    
        <h2>Company Info:</h2>
    	
        	<div class="company_info">
            
            	<table class="company-info-table">
                	<tr>
                    	<td>Select Company:<span class="compdata"><select><option value="USA Benefits Group">USA Benefits Group</option></select></span></td>
                    </tr>
                    <tr>
                    	<td>Company:<span class="compdata">USA Benefits Group</span></td>
                    </tr>
                    <tr>
                    	<td>Access Level:<span class="compdata">Company Admin</span></td>
                    </tr>
                    <tr>
                    	<td>Sub Groups:<span class="compdata">Recruiting Managers</span></td>
                    </tr>
              </table>
              
              
                             
            <div class="save-button">
            <button>Save</button>
            </div>
            
            <div class="manage_social">
            <button id="socialMedia">Manage Social Media</button>
            </div>
            <div class="manage_groups">
			<button id="subGroups">Manage Sub Groups</button>            
            </div>
            
            </div><!-- END COMPANY INFO -->
    
    </div><!-- END GRID 3 -->


</div><!-- END CONTAINER -->

<!-- MANAGE SOCIAL MEDIA DIALOG -->
<div id="manageSocialMedia" title="Manage Social Media">
<p>Social Media Links:</p>
<table style="margin-top: 10px;">
<form>
	<tr><td><img src="<?=IMG_URL?>social/fb.png" style="width: 40px; height: 40px;" /></td><td><input type="text" name="facebook" style="float:right; height: 22px; width: 250px; margin-left:10px; margin-right: 10px;" /></td><td><button id="saveFb" style="float: right">Save</button></td></tr>
	<tr><td><img src="<?=IMG_URL?>social/linked.png" style="width: 40px; height: 40px;" /></td><td><input type="text" name="facebook" style="float:right; height: 22px; width: 250px; margin-left:10px; margin-right: 10px;" /></td><td><button id="saveLinked" style="float: right">Save</button></td></tr>
	<tr><td><img src="<?=IMG_URL?>social/twitter.png" style="width: 40px; height: 40px;" /></td><td><input type="text" name="facebook" style="float:right; height: 22px; width: 250px; margin-left:10px; margin-right: 10px;" /></td><td><button id="saveTwitter" style="float: right">Save</button></td></tr>
	<tr><td><img src="<?=IMG_URL?>social/google.png" style="width: 40px; height: 40px;" /></td><td><input type="text" name="facebook" style="float:right; height: 22px; width: 250px; margin-left:10px; margin-right: 10px;" /></td><td><button id="saveGoogle" style="float: right">Save</button></td></tr>
	<tr><td><img src="<?=IMG_URL?>social/flickr.png" style="width: 40px; height: 40px;" /></td><td><input type="text" name="facebook" style="float:right; height: 22px; width: 250px; margin-left:10px; margin-right: 10px;" /></td><td><button id="saveFlickr" style="float: right">Save</button></td></tr>
	<tr><td><img src="<?=IMG_URL?>social/rss.png" style="width: 40px; height: 40px;" /></td><td><input type="text" name="facebook" style="float:right; height: 22px; width: 250px; margin-left:10px; margin-right: 10px;" /></td><td><button id="saveRss" style="float: right">Save</button></td></tr>
	<tr><td><img src="<?=IMG_URL?>social/skype.png" style="width: 40px; height: 40px;" /></td><td><input type="text" name="facebook" style="float:right; height: 22px; width: 250px; margin-left:10px; margin-right: 10px;" /></td><td><button id="saveSkype" style="float: right">Save</button></td></tr>
	<tr><td><img src="<?=IMG_URL?>social/yahoo.png" style="width: 40px; height: 40px;" /></td><td><input type="text" name="facebook" style="float:right; height: 22px; width: 250px; margin-left:10px; margin-right: 10px;" /></td><td><button id="saveYahoo" style="float: right">Save</button></td></tr>
	<tr><td><img src="<?=IMG_URL?>social/myspace.png" style="width: 40px; height: 40px;" /></td><td><input type="text" name="facebook" style="float:right; height: 22px; width: 250px; margin-left:10px; margin-right: 10px;" /></td><td><button id="saveMyspace" style="float: right">Save</button></td></tr>
</form>
</table>
</div>

<!-- MANAGE SUB GROUPS DIALOG -->
<div id="manageSubGroups" title="Manage Sub Groups">
	<div class="grid_3">
   		<h1>Exisiting Subgroups</h1>
   		<div class="ui-widget-content subgroups1">
       		<table id="listGroups">
            	<tr>
                	<td>Agents</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <tr>
                	<td>Managers</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <tr>
                	<td>Recruiting</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="grid_3">
   		<h1>New Subgroup</h1>
        <div class="ui-widget-content subgroups1">
        	<table id="newSubgroup">
            	<tr>
                	<td>New Subgroup Name</td>
                </tr>
                <tr>
                    <td><input type="text" id="newGroupName" /></td>
                </tr>
            </table>
            <button id="addSubgroup">Add Subgroup</button>
        </div>
    </div>
	<div class="grid_5">
		<h1>Sub Group Permissions: <span style="color: #F6AF3A;">Editing New Subgroup</span></h1>
    	<div class="ui-widget-content subgroups2"> 
        	<span style="font-style:italic; margin-left: 15px;">By Selecting the usertypes below will determine who will have access to templates</span>
            <span style="font-style:italic; margin-left: 15px;">created within the subgroup profile.</span>
			<table id="listUsertypes">
            	<tr>
                	<td><input type="checkbox" />Assign To All Usertypes</td>
                	<td><input type="checkbox" />Signature Agent In Progress</td>
				</tr>
                <tr>
                	<td><input type="checkbox" />Divisional Manager</td>
                	<td><input type="checkbox" />Limited To Review</td>
                </tr>
            </table>
        </div>
    </div>
    <!-- <button id="changeInfo">Change Info</button> -->
</div>
<script>
$(function() {
//buttons
$("#socialMedia").button();
$("#subGroups").button();
$("#saveFb").button();
$("#saveTwitter").button();
$("#saveGoogle").button();
$("#saveFlickr").button();
$("#saveRss").button();
$("#saveSkype").button();
$("#saveYahoo").button();
$("#saveMyspace").button();
$("#saveLinked").button();
$("#changeInfo").button();
$("#addSubgroup").button();
//dialog
$( "#manageSocialMedia" ).dialog({
	autoOpen: false,
	modal: true,
	width: 400,
	height: 500,
});
$( "#socialMedia" )
	.click(function() {
	$( "#manageSocialMedia" ).dialog( "open" );
});
$( "#manageSubGroups" ).dialog({
	autoOpen: false,
	modal: true,
	width: 590,
	height: 600,
});
$( "#subGroups" )
	.click(function() {
	$( "#manageSubGroups" ).dialog( "open" );
});
});
</script>