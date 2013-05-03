<div class="tab-5-container">
    <div class="grid_4 alpha">
        <div class="ui-widget-header companySelect">
            Select Company
        </div>
        <div class="ui-widget-content companySelect">
            <select id="companySelect">
                <option>iBoomerang.com, Inc</option>
                <option>USA Benefits Group</option>
                <option>XYZ Company</option>
                <option>No Company</option>
            </select>
            <button id="selectCompany">Select</button>
        </div>
        <!-- END COMPANY SELECT -->
        <br />
        <div class="ui-widget-header manageSeries">
            Series Campaign
        </div>
        <div class="ui-widget-content manageSeries">
            <div class="firstSelect">
            <p>Company Series Campaigns:</p>
            <select id="compSeries">
                <option>12 Month Campaign</option>
                <option>None</option>
                <option>Sold</option>
                <option>First Series</option>
            </select>
            <button id="createCSeries">Create New</button>
            <button id="selectCSeries">Select</button>
            </div><!-- END FIRST SELECT -->
            <div class="secondSelect">              
            <p>My Series:</p>     
            <select id="mySeries">
                <option>12 Month Campaign</option>
                <option>None</option>
                <option>Sold</option>
                <option>First Series</option>
            </select>
            <button id="createMSeries">Create New</button>
            <button id="selectMSeries">Select</button>
            </div><!-- END SECOND SELECT -->
        </div><!-- END SERIES CAMPAIGN -->
    </div><!-- END GRID 4 DIV -->
                
    <div class="grid_7 omega">
        <div class="ui-widget-header series">
            <img src="<?=IMG_URL?>ETT_icon.png" class="icon">
        </div>
        <div class="ui-widget-content series">
            <h2 style="margin-top: 20px;">
                Manage Series
            </h2>
            <hr style="width: 32em; float: right; margin-bottom: 15px; margin-right: 20px;" />
        <div class="seriesname">
            Series Name: (populate series name here)
        </div><!-- END SERIES NAME -->
        <div class="addTemplateSeries">
            <button id="addTemplateSeries">Add new Template</button>
        </div><!-- END ADD TEMPLATE BUTTON -->
    <!-- START GRID 6 -->
        <div class="grid_6" style="float: right;">
        <div class="ui-widget-header serieslist" >
            Thank You
            <span id="plus" class="ui-icon ui-icon-plus"></span>
        </div><!-- END SERIESLIST -->
        <div class="ui-widget-content serieslist">
            <table class="templateDropDown">
                <td>My Templates:<select class="templateDrop"><option>Newsletter - April 2012</option><option>Newsletter - August 2012</option></select></td>
            </table>
            <table class="sendDate">
                <tr>
                    <td>Send Date:<select><option>0</option><option>1</option></select></td>
                    <td><select><option>Days</option><option>Weeks</option> <option>Month</option></select></td>
                    <td>At:<select><option>3:00 PM</option><option>4:00 PM</option></select></td>
                </tr>
            </table>
            <table class="selectRepeat">
                <tr>
                    <td>Repeats for:<select><option>1</option><option>2</option></select></td>
                    <td>Additional:<select><option>Months</option><option>Years</option></select></td>
                </tr> 
            </table>
        <div class="seriesButtons">
            <button id="deleteSeries">Delete</button>
            <button id="saveSeries">Save</button>
        </div><!-- END SERIES BUTTONS -->
        
        <!-- LIST ALL OTHER PIECES OF THE SERIES -->
        <div class="ui-widget-header serieslistmore" onclick="$(this).next().slideToggle();">
            Critical Illnes
            <span id="plus" class="ui-icon ui-icon-plus"></span>
        </div>
        <div class="ui-widget-content serieslistmore">
            <table class="templateDropDown">
                <td>My Templates:<select class="templateDrop"><option>Newsletter - April 2012</option><option>Newsletter - August 2012</option></select></td>
            </table>
            <table class="sendDate">
                <tr>
                    <td>Send Date:<select><option>0</option><option>1</option></select></td>
                    <td><select><option>Days</option><option>Weeks</option> <option>Month</option></select></td>
                    <td>At:<select><option>3:00 PM</option><option>4:00 PM</option></select></td>
                </tr>
            </table>
            <table class="selectRepeat">
                <tr>
                    <td>Repeats for:<select><option>1</option><option>2</option></select></td>
                    <td>Additional:<select><option>Months</option><option>Years</option></select></td>
                </tr>
            </table>
        <div class="seriesButtons">
            <button id="deleteSeries">Delete</button>
            <button id="saveSeries">Save</button>
        </div><!-- END SERIES BUTTONS -->
        </div><!-- END FIRST PIECE OF SERIES -->
        <!-- SECOND PIECE OF SERIES -->
        <div class="ui-widget-header serieslistmore" onclick="$(this).next().slideToggle();">
            Accident Plan
            <span id="plus" class="ui-icon ui-icon-plus"></span>
        </div>
        <div class="ui-widget-content serieslistmore">
            <table class="templateDropDown">
                <td>My Templates:<select class="templateDrop"><option>Newsletter - April 2012</option><option>Newsletter - August 2012</option></select></td>
            </table>
            <table class="sendDate">
                <tr>
                    <td>Send Date:<select><option>0</option><option>1</option></select></td>
                    <td><select><option>Days</option><option>Weeks</option> <option>Month</option></select></td>
                    <td>At:<select><option>3:00 PM</option><option>4:00 PM</option></select></td>
                </tr>
            </table>
            <table class="selectRepeat">
                <tr>
                    <td>Repeats for:<select><option>1</option><option>2</option></select></td>
                    <td>Additional:<select><option>Months</option><option>Years</option></select></td>
                </tr>
            </table>
        <div class="seriesButtons">
            <button id="deleteSeries">Delete</button>
            <button id="saveSeries">Save</button>
        </div><!-- END SERIES BUTTONS -->
        </div><!-- END LAST PIECE OF SERIES -->
        </div><!-- SERIES LIST WIDGET -->
        </div><!-- end content series widget -->
        <div class="seriesfooter">
            <button id="deleteSeries2">Delete Series</button>
            <button id="sendseries">Send Series</button>
        </div><!-- END SERIES FOOTER -->
    </div><!-- END GRID 7 -->
    </div>
</div><!-- END TAB 5 CONTAINER -->
<!-- FORM THAT POPS UP WHEN ADDING A TEMPLATE TO A SERIES -->
<div id="addNewTemplate" title="Add Template To Series">
	<form>
    	<span style="padding-right: 25px;">Group:</span><select class="group"><option>My Templates</option><option>Company</option></select>
        <br />
        <span style="padding-right: 5px">Template:</span><select class="picktemplate"><option>Client 1</option><option>Lead 1</option><option>Health 1</option></select>
    	
        <button id="addToSeries" style="font-size:12px">Add Template</button>
    </form>
</div>
<script>
$(function() {
//buttons
$('#selectCompany').button({ icons: { primary: 'ui-icon-plus' }	})
$('#createCSeries').button({ icons: { primary: 'ui-icon-plus' }	})
$('#selectCSeries').button({ icons: { primary: 'ui-icon-plus' }	})
$('#createMSeries').button({ icons: { primary: 'ui-icon-plus' }	})
$('#selectMSeries').button({ icons: { primary: 'ui-icon-plus' }	})
$('#addTemplateSeries').button({ icons: { primary: 'ui-icon-plus' }	})
$('#deleteSeries').button({ icons: { primary: 'ui-icon-close' }	})
$('#deleteSeries2').button({ icons: { primary: 'ui-icon-close' }	})
$('#saveSeries').button({ icons: { primary: 'ui-icon-disk' }	})
$('#sendseries').button({ icons: { primary: 'ui-icon-mail-closed' }	})
$('#addToSeries').button({ icons: { primary: 'ui-icon-plus' }	})
//dialogs
	$( "#addNewTemplate" ).dialog({
		autoOpen: false,
		modal: true,
	});
	$( "#addTemplateSeries" )
		.click(function() {
		$( "#addNewTemplate" ).dialog( "open" );
	});
});
</script>