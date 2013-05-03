<script type="text/javascript" src="ck/ckeditor.js"></script>

<div class="tab-3-container">

	<div class="grid_3 alpa">
    
     
    	<div class="ui-widget-header manage">
            Manage Templates
        </div>
        
        <div class="ui-widget-content manage">
			<h2>Select A Company</h2>
            
            <select style="width: 10em; margin-bottom: 15px;"><option>USABG</option><option>iBoomerang</option></select>

            <hr style="width: 95%;"/>
            
            <table>
            	<tr><td><input type="radio" style="margin-bottom: 15px; margin-top: 15px;" />New Template</td></tr>
				<tr><td><input type="radio"  />Exisiting Template</td></tr>
                <tr><td><input type="checkbox"  style="margin-top: 15px; margin-bottom: 15px;"/>Company Approved Template</td>

            </table>

            <hr style="width: 95%; margin-bottom: 10px;"/>
            
            <h2>Select A Template</h2>
            
            <select style="width: 10em; margin-bottom: 15px;"><option>Newsletter 2012</option><option>Test Template</option></select>
            
            <hr style="width: 95%; margin-bottom: 10px;"/>
            
            <table>
            	<tr><td><input type="radio" style="margin-bottom: 15px; margin-top: 15px;" />Update Existing</td></tr>
            	<tr><td><input type="radio"  />Save As New</td></tr>
            </table>
            
            <hr style="width: 95%; margin-bottom: 10px;"/>

			<table class="tname" style="margin-bottom: 15px;">
                <tr><td>Template Name:</td></tr>
                <tr><td><input type="text" style="width: 10em;"	/></td></tr>
                <tr><td>Subject:</td></tr>
                <tr><td><input type="text" style="width: 10em;"  /></td></tr>
			</table>

                        
        </div><!-- end manage templates -->
        
        
        <div class="ui-widget-header banner">
            Select Banner Image
        </div>
        
        <div class="ui-widget-content banner">
            <select style="width: 10em; margin-bottom: 15px; margin-top: 15px;"><option>USABG</option><option>EHG</option></select>
            <button id="upload">Upload New Banner</button>
        </div><!-- end banner images -->
        
        
        <div class="ui-widget-header attach">
            Attach a file
        </div>
        
        <div class="ui-widget-content attach">

            <input type="radio" style="margin-bottom: 15px; margin-top: 15px;" />Yes<input type="radio" style="margin-left: 80px;" />No
            
            
            <button id="manageAttach">Manage Attachments</button>
			
        </div>
    
    	<div class="manageButtons">
        <table>
        	<tr><td><button id="deleteTemplate">Delete</button></td><td><button id="saveTemplate">Save</button></td></tr>
        </table>
    	</div>
    
    </div><!-- end grid 5 -->
    
    
    
    
    
    
    
    <div class="grid_8 alpha">
    
    <div class="ui-widget-header editor">
    Edit Template
    </div>
    
    <div class="ui-widget-content editor">
    <img src="http://sandbox.my.iboomerang.com/email/uploads/images/company/1/3899-Blank5.jpg" />        
			<textarea cols="80" id="editor2" name="editor2" rows="10">&lt;p&gt;This is some &lt;strong&gt;sample text&lt;/strong&gt;. You are using &lt;a href="http://ckeditor.com/"&gt;CKEditor&lt;/a&gt;.&lt;/p&gt;</textarea>
			<script type="text/javascript">
				CKEDITOR.replace( 'editor2',
				{
				autoGrow_maxHeight : 900,


				});
			//]]>
			</script>
    </div>
    
    </div><!-- end grid 5 -->



</div><!-- END TAB 3 CONTAINER -->
<script>
$(function() {
//buttons 
$('#deleteTemplate').button({ icons: { primary: 'ui-icon-close' }	})
$('#saveTemplate').button({ icons: { primary: 'ui-icon-disk' }	})
$('#upload').button({ icons: { primary: 'ui-icon-folder-open' }	})
$('#manageAttach').button({ icons: { primary: 'ui-icon-folder-collapsed' }	})
});
</script>