            	<div class="txtbutton">
                
            	<div class="txt-btn" style="cursor: pointer;">
                    <img src="<?=IMG_URL?>Dashboad_snd_text_btn.png">
                
                <div class="txt-text">
                    Send Text Message
                </div>
                
                </div><!-- end image -->
                
                </div><!-- end button1 -->

<!-- ********************************************* -->
<div class="sendText" id="sendTextForm" title="Send A Text">
<table class="sendTextMessage">
	<tr>
    	<td>Recipients Phone Number:<input type="text" id="txtphone1" /><input type="text" id="txtphone2" /><input type="text" id="txtphone3" /></td>
    </tr>
    <tr>
    	<td>E-mail Address:<input type="text" id="textEmail" /></td>
    </tr>
    <tr>
    	<td>Mobile Carrier:<select><option>N/A</option><option>Verizon</option><option>Sprint</option><option>ATT</option></select>
    </tr>
    <tr>
    	<td>Text Message:<textarea maxlength="160"></textarea></td>
    </tr>
</table>
<p><span style="color: #3C3E8B; font-size: 12px; margin-left: 280px">Characters Left:</span> 160</p>
<button id="textButton">Send Text</button>
</div>
<script>
$(function() {
//buttons
$("#textButton").button();
//forms
$( ".txt-btn" )
	.click(function() {
	$( ".sendText" ).dialog( "open" );
});
$( ".sendText" ).dialog({
	autoOpen: false,
	modal: true,
	height: 450,
	width: 460,
});
});
</script>