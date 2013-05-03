<div class="tab-3-container">

<div class="grid_11">

	<div class="ui-widget-header history">
        <img src="<?=IMG_URL?>ETT_icon.png" class="icon">
	</div>
    <div class="ui-widget-content history">
    <button id="viewTexts">View Sent Texts</button>
    <button id="pending">View Pending E-mail</button>
    <h2>E-mail History</h2>
    <hr style="width: 732px; margin-bottom: 15px; margin-left: 105px; " />
    <img src="<?=IMG_URL?>refresh-icon.png" style="float: right; margin-right: 24px"/>
    <div class="searchBar">
    <span style="font-weight: bold; color: #40428F;font-size: 15px;margin-right: 10px;">Search:</span><input type="text"/><button id="go">Go</button>
    </div>
    
    <table class="tablesorter" id="viewEmailTable">
    	<thead>
        	<tr>
            	<th>Sent</th>
                <th>To</th>
                <th>From</th>
                <th>Subject</th>
                <th>Series</th>
                <th>Views</th>
                <th>&nbsp;</th>
           </tr>
       </thead>
       <tbody>
       		<tr>
            	<td>3-12-13 4:00 PM</td>
                <td>Jerry(jerrytest@aol.com)</td>
                <td>Kayla(kayla@iboomerang.com)</td>
                <td><img class="ui-icon ui-icon-search" style="float: left; margin-right: 2px;" />Thank you for the sale!<img src="<?=IMG_URL?>attach.gif" style="margin-left: 5px;"></td>
                <td>Client Series</td>
                <td>2</td>
                <td><input type="checkbox" /></td>
             </tr>
       </tbody>
    
    </table>
    
    </div><!-- end history widget -->
    <div id="historyFooter">
    <span style="color: #FFF; font-size: 14px; margin-left: 10px; margin-top: 10px;">1,2,3,4 Next ></span>
    <button id="deleteHistory">Delete Selected</button>
    </div><!-- END LIST FOOTER -->
    
    </div>

</div><!-- END TABS CONTAINER -->

<script>
$(function() {
//button
$("#pending").button();
$("#deleteHistory").button();
$("#go").button();
$("#viewTexts").button();
//tablesorter
$("#viewEmailTable").tablesorter();
//dialog
});
</script>