<div class="tab-6-container">

	<div class="grid_11 alpha">
    
    	<div class="grid_4 alpha">	
        
			<div class="importcontacts"> 
            <a href="#" id="importContact">            
			Import Contacts
            <img src="<?=IMG_URL?>profile_icon.png" class="icon">
            </a>
            </div><!-- END IMPORT CONTACTS -->
            
            <form id="importForm" title="Import Your Contacts">
                            
                <button id="browseVcard">Browse</button>
            	<input id="browseInput" />
                
            </form>
            
            <div class="ui-widget-header recentlists">
            Recent Marketing Lists
            </div>
            
            <div class="ui-widget-content recentlists">
            	<table class="tablesorter" id="recent-table">
                <thead>
                	<tr>
                    	<th>Name</th>
                        <th>Date</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>	
                    	<td>Current Clients</td>
                        <td>11/14/12</td>
                        <td><button class="edit">Edit</button></td>
                    </tr>
                    <tr>
                 		<td>Prospects</td>
                        <td>11/12/12</td>
                        <td><button class="edit">Edit</button></td>
                    </tr>
                </tbody>
                </table>
                <div class="marketing-list-button">
                <button class="goto-marketing">Go To My Marketing Lists</button>
                </div>
            </div><!-- END RECENT LISTS -->
            
            <div class="ui-widget-header recentadded">
            Recently Added
            <img src="<?=IMG_URL?>profile_icon.png" class="icon">
            </div>
            
            <div class="ui-widget-content recentadded">
            	<table class="tablesorter" id="recent-added">
					<thead>
                    	<tr>
                        	<th>Select</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
					<tbody>
                    	<tr>
                        	<td><input type="checkbox" /></td>
                            <td>John Buckley</td>
                            <td>jbuckley@gmail.com</td>
                            <td><button class="editAddress">Edit</button></td>
                        </tr>
                    	<tr>
                        	<td><input type="checkbox" /></td>
                            <td>John Buckley</td>
                            <td>jbuckley@gmail.com</td>
                            <td><button class="editAddress">Edit</button></td>
                        </tr>   
                    	<tr>
                        	<td><input type="checkbox" /></td>
                            <td>John Buckley</td>
                            <td>jbuckley@gmail.com</td>
                            <td><button class="editAddress">Edit</button></td>
                        </tr>   
                    	<tr>
                        	<td><input type="checkbox" /></td>
                            <td>John Buckley</td>
                            <td>jbuckley@gmail.com</td>
                            <td><button class="editAddress">Edit</button></td>
                        </tr>   
                    	<tr>
                        	<td><input type="checkbox" /></td>
                            <td>John Buckley</td>
                            <td>jbuckley@gmail.com</td>
                            <td><button class="editAddress">Edit</button></td>
                        </tr>   
                    </tbody>            
                </table>
            
            <!-- BEGIN FOOTER INFO -->
            
            <div class="ui-widget-header recentFooter">
            
            <button class="send-recent-added">Send</button>
            <button class="quick-recent-added">Quick List</button>
            <button class="delete-recent-added">Delete</button>
            
            </div><!-- END FOOTER INFO -->
            
            </div><!-- END RECENTLY ADDED -->
            
        
        </div><!-- END GRID 4 -->
        
        <div class="grid_7 alpha">
        
        	<div class="ui-widget-header addresslist">
            Address Book
            <img src="<?=IMG_URL?>VM_icon.png" class="icon">
            </div>
            
            <div class="ui-widget-content addresslist">
                <div class="top-book">
                    <div class="addContact">
                    <button id="addContact">Add Contact</button>
                    </div>
                    <div class="search-box">
                    <span class="search">Search:</span><input type="text" name="search" id="search" />
                    </div>
                </div>

            <div class="letter-bar">
            ABCDEFGHIJKLMNOPQRSTUVWXYZ
            </div>
            
            <div class="address-list-table">
            
            	<table class="tablesorter" id="address-list-table">
					<thead>
                    	<tr>
                        	<th>Select</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
					<tbody>
                    	<tr>
                        	<td><input type="checkbox" /></td>
                            <td>John Buckley</td>
                            <td>jbuckley@gmail.com</td>
                            <td><button class="editAddress">Edit</button></td>
                        </tr>
                    	<tr>
                        	<td><input type="checkbox" /></td>
                            <td>John Buckley</td>
                            <td>jbuckley@gmail.com</td>
                            <td><button class="editAddress">Edit</button></td>
                        </tr>   
                    	<tr>
                        	<td><input type="checkbox" /></td>
                            <td>John Buckley</td>
                            <td>jbuckley@gmail.com</td>
                            <td><button class="editAddress">Edit</button></td>
                        </tr>   
                    	<tr>
                        	<td><input type="checkbox" /></td>
                            <td>John Buckley</td>
                            <td>jbuckley@gmail.com</td>
                            <td><button class="editAddress">Edit</button></td>
                        </tr>   
                    	<tr>
                        	<td><input type="checkbox" /></td>
                            <td>John Buckley</td>
                            <td>jbuckley@gmail.com</td>
                            <td><button class="editAddress">Edit</button></td>
                        </tr>   
                    </tbody>            
            	</table>
            </div>
            
            <div class="ui-widget-header listFooter">
            
            <button class="send-recent-added">Send</button>
            <button class="quick-recent-added">Quick List</button>
            <button class="delete-list">Delete</button>
            
            </div><!-- END FOOTER LIST -->
            
            </div><!-- END ADDRSS LIST WIDGET -->
        
        </div><!-- END GRID 8 -->

	</div><!-- END GRID 11 -->

</div><!-- END 5 CONTAINER -->

<div class="quick-create-contact" title="Add Contact">

<form class="quickForm">
	<table>
    	<tr>
        	<td><label for="contactName" />Name:</td>
        	<td><input name="contactName" /></td>
        </tr>
        <tr>
        	<td><label for="contactEmail" />E-mail:</td>
        	<td><input name="contactEmail" /></td>
        </tr>
    </table>
</form>
</div>

<div id="addContactForm" title="Add New Contact">
<form class="contactform">

	<label>Name</label><input id="contactName" />
    <label>Email</label><input id="contactEmail" />
    
    <button id="contactSubmit">Submit</button>

</form>
</div>

<script>
$(function() {
//corners
    $('.importcontacts').corner();
    $('.addContact').corner();
    $('#search').corner();
    $('.ui-widget-header').corner("top");
    $('.ui-widget-header.recentadded').corner("top");
    $('.ui-widget-header.recentFooter').corner("bottom");
    $('.ui-widget-header.listFooter').corner("bottom");
//buttons
	$('#import').button({ icons: { primary: 'ui-icon-person' }	})
	$('.edit').button({ icons: { primary: 'ui-icon-pencil' }	})
	$('.send-recent-added').button({ icons: { primary: 'ui-icon-mail-closed' }	})
	$('.quick-recent-added').button({ icons: { primary: 'ui-icon-newwin' }	})
	$('.delete-recent-added').button({ icons: { primary: 'ui-icon-close' }	})
	$('.delete-list').button({ icons: { primary: 'ui-icon-close' }	})
	$('.goto-marketing').button({ icons: { primary: 'ui-icon-circle-triangle-e' }	})
	$('.editAddress').button({ icons: { primary: 'ui-icon-pencil' }	})
	$('#browseVcard').button({ icons: { primary: 'ui-icon-pencil' }	})
	$('#contactSubmit').button({ icons: { primary: 'ui-icon-plus' }	})
	$('#addContact').button({ icons: { primary: 'ui-icon-plus' }	})
//tables
    $("#recent-table").tablesorter({widgets: ['zebra']});
    $("#recent-added").tablesorter({widgets: ['zebra']});
    $("#address-list-table").tablesorter({widgets: ['zebra']});
//import dialog
	$( "#importForm" ).dialog({
		autoOpen: false,
		modal: true,
	});
	$( "#importContact" )
		.click(function() {
		$( "#importForm" ).dialog( "open" );
	});
	$( ".quick-create-contact" ).dialog({
		autoOpen: false,
		modal: true,
	});
	$( ".quick-recent-added" )
		.click(function() {
		$( ".quick-create-contact" ).dialog( "open" );
	});
	$( "#addContactForm" ).dialog({
		autoOpen: false,
		modal: true,
	});
	$( "#addContact" )
		.click(function() {
		$( "#addContactForm" ).dialog( "open" );
	});
});
</script>