<script type="text/javascript" src="ck/ckeditor.js"></script>
<div class="tab-2-container">
	
    <!-- choose options here -->
	<div class="grid_3 alpha" style="float: left; width: 285px;">
    	<!-- first step -->
    	<div class="ui-widget-header options" onclick="$(this).next().slideToggle();">
        Step 1:
        </div>
        <div class="ui-widget-content options" >
        <p>What will you send?</p>
        <input type="radio" />Send Template<br />
        <input type="radio" /><a href="#" id="selectSeries">Select Series</a>
        <p>Select A Template</p> 
        <select class="selectTemplate"><option>Template 1</option><option>Template 2</option></select>
        </div>
        <!-- second step -->
        <div class="ui-widget-header who" onclick="$(this).next().slideToggle();">
        Step 2:
        </div>
        <div class="ui-widget-content who" style="display: none;">
        <p>Choose List or Individual</p>
        <input type="radio" style="margin-top:10px;"/>Individual
        <input type="radio" />List
        <table class="sendToChoice">
        	<tr><td>Name:<input name="sendToName" /></td></tr>
            <tr><td>Email:<input name="toEmail" /></td></tr>
            <tr><td>CC:<input name="carbonCopy" /></td></tr>
            <tr><td>BCC:<input name="blindCopy" /></td></tr>
        </table>
        <p><span style="font-size: 9px;margin-bottom: 10px;"><b>CC's:Seperate e-mails with semicolons(;).</b></span></p>
        <p>Send From:</p>
        <select class="sendFrom"><option>Kayla Long</option><option>Josh Moore</option></select>
        </div>
        <!-- third step -->
        <div class="ui-widget-header attachment" onclick="$(this).next().slideToggle();">
        Step 3:
        </div>
        <div class="ui-widget-content attachment" style="display: none;">
		<p>Attach A File</p>
        <input type="radio" />Yes
        <input type="radio" />No<br />
        <img src="<?=IMG_URL?>attachments.bmp" style="width: 255px;" />
        <button class="attachFile">Upload File</button>
        </div>
        <!-- fourth step -->
        <div class="ui-widget-header send" onclick="$(this).next().slideToggle();">
        Step 4:
        </div>
        <div class="ui-widget-content send" style="display: none;">
        <p>Send or Schedule Template</p>
        <div class="send-btn" style="margin-top: 2px; margin-left: 2px; margin-bottom: 8px;">
            <img src="<?=IMG_URL?>Dashboard_purple_btn.png">
        
        <div class="series-text" id="scheduleLater">
            Schedule E-mail For Later
        </div>
        
        </div><!-- end image -->
        <div class="later" style="display: none;">
        <table class="sendLaterTable">
        <tr>
        	<td>Send Date<input class="date" /></td>
        </tr>
        <tr>
            <td>Send Time<input id="time" /></td>            
        </tr>
        <tr>
            <td>Repeats For<select style="margin-left:23px;"><option>0</option><option>1</option></select></td>
        </tr>
        <tr>
            <td>Additional<select><option>Weeks</option><option>Months</option><option>Year</option></select></td>
        </tr>
        </table>
        </div>
        <button class="saveEmail">Send E-mail</button>
        </div>
    </div>

	
    <!-- load template here -->
    <div class="grid_8 alpha" style="float: right; width: 604px;">
    	<div class="ui-widget-header sendeditor">
        Your Template
        </div>
        <div class="ui-widget-content sendeditor">
        <img src="http://sandbox.my.iboomerang.com/email/uploads/images/company/1/3899-Blank5.jpg" />        
        <textarea cols="80" id="sendedit" name="sendedit" rows="10">&lt;p&gt;This is some &lt;strong&gt;sample text&lt;/strong&gt;. You are using &lt;a href="http://ckeditor.com/"&gt;CKEditor&lt;/a&gt;.&lt;/p&gt;</textarea>
        <script type="text/javascript">
        CKEDITOR.replace( 'sendedit',
        {
        autoGrow_maxHeight : 900,
        });
        //]]>
        </script>
        </div>
    </div>

</div><!-- END TAB 2 CONTAINER --> 
<!-- series dialog -->
<div id="seriesManage" title="Manage Series">
<img src="<?=IMG_URL?>selectseries.bmp" />
</div>
<script>
$(function() {
//buttons
$(".attachFile").button();
$(".saveEmail").button();
//date
$('.date').datepicker({
	dateFormat: 'mm-dd-y', //formats the date to be loaded into mysql
	firstDay: 1
});
//dialog
$( "#selectSeries" )
	.click(function() {
	$( "#seriesManage" ).dialog( "open" );
});
$( "#seriesManage" ).dialog({
	autoOpen: false,
	modal: true,
	height: 400,
	width: 515,
});
//time
$('#time').timepicker({        
	showPeriod: true,
	showLeadingZero: true,
	amPmText: ['am', 'pm'],
	height: 200,
}
);
//slide toggle
$('#scheduleLater').click(function() {
$('.later').slideToggle('fast', function() {
});
});
});
</script>