<?php include 'new.header.php'; ?>

<div id="main_container">

<h2>E-mail Template Tool</h2>

	<div id="tabs">
       <ul>
            <li><a href="#tabs-1">Dashboard</a></li>
            <li><a href="#tabs-2">Send E-mail</a></li>
            <li><a href="#tabs-3">Manage Templates</a></li>
            <li><a href="#tabs-4">Manage List</a></li>
            <li><a href="#tabs-5">Manage Series</a></li>
            <li><a href="#tabs-6">Address Book</a></li>
            <li><a href="#tabs-7">Sender Info</a></li>
            <li><a href="#tabs-8">History</a></li>
        </ul>
        <div id="tabs-1">
        	<? include 'pages/dashboard.php'; ?>
        </div><!-- END TABS 1 -->
        <div id="tabs-2">
        	<? include 'pages/send.php'; ?>
        </div><!-- END TABS 2 -->
        <div id="tabs-3">
        	<? include 'pages/manage.php' ?>
        </div><!-- END TABS 3 -->
        <div id="tabs-4">
        	<? include 'pages/lists.php' ?>
        </div><!-- END TABS 4 -->
        <div id="tabs-5">
        	<? include 'pages/series.php' ?>
        </div><!-- END TABS 5 -->
        <div id="tabs-6">
        	<? include 'pages/addressbook.php' ?>
        </div><!-- END TABS 6 -->
        <div id="tabs-7">
        	<? include 'pages/profile.php' ?>
        	<? include 'pages/signature.php' ?>
        </div><!-- END TABS 7 -->
        <div id="tabs-8">
        	<? include 'pages/history.php' ?>
        </div><!-- END TAB 8 -->
	</div><!-- END MAIN TABS DIV -->
    
</div><!-- END MAIN CONTAINER -->

<script>
$(function() {
	$( "#tabs" ).tabs();
<!-- corner functions -->
	$( "a", ".send-email2" ).click(function() { return true; });
    $('.ui-widget-header.module').corner("top");
    $('.ui-widget-content').corner("bottom");
    $('.ui-widget-header.step1').corner();
    $('.ui-widget-content.time').corner();
    $('.ui-widget-header.afooter').corner("bottom");
    $('.ui-widget-header.abook').corner("top");
    $('.ui-widget-header.timefooter').corner("bottom");
    $('.ui-widget-header.profile').corner("top");
    $('.ui-widget-header.emailsign').corner("top");
    $('.ui-widget-content.subgroups1').corner();
    $('.ui-widget-content.subgroups2').corner();
<!-- buttons -->	
	$( "input:submit, a, button", ".send-email2" ).button();
	$('.quick-address').button({
		icons: { primary: 'ui-icon-mail-closed' }
	})
	$('.quick-list').button({
		icons: { primary: 'ui-icon-newwin' }
	})
	$('.view-all').button({
		icons: { primary: 'ui-icon-search' }
	})
	$('.browse').button({
		icons: { primary: 'ui-icon-folder-open' }
	})
	$('.browse2').button({
		icons: { primary: 'ui-icon-folder-open' }
	})
	$('.edit_button').button({
		icons: { primary: 'ui-icon-pencil' }
	})
	$('.edit_button2').button({
		icons: { primary: 'ui-icon-pencil' }
	})
	$('.extra_senders').button({
		icons: { primary: 'ui-icon-circle-plus' }
	})
	$( "input:submit, a, button", ".change-form" ).button();
	$( "a", ".change-form" ).click(function() { return true; });
	$( "input:submit, a, button", ".change-form2" ).button();
	$( "a", ".change-form2" ).click(function() { return true; });
	$( "input:submit, a, button", ".save-button" ).button();
	$( "a", ".save-button" ).click(function() { return true; });
<!-- DIALOG FORMS -->
<!-- extra senders -->
	$( "#ett_more_senders" ).dialog({
		autoOpen: false,
		modal: true,
	});
<!-- sender button -->
	$( ".extra_senders" )
		.click(function() {
		$( "#ett_more_senders" ).dialog( "open" );
	});
<!-- extra senders -->
	$( "#ett_more_senders" ).dialog({
		autoOpen: false,
		modal: true,
	});
<!-- sender button -->
	$( "#viewPicture" )
		.click(function() {
		$( "#viewSenderPic" ).dialog( "open" );
	});
<!-- edit form -->
	$( "#viewSenderPic" ).dialog({
		autoOpen: false,
		modal: true,
		height: 180,
		width: 125,
	});
<!-- edit button -->	
	$( ".edit_button" )
		.click(function() {
		$( "#edit-form" ).dialog( "open" );
	});
<!-- edit form -->
	$( "#edit-form" ).dialog({
		autoOpen: false,
		modal: true,
	});
<!-- edit2 form -->
	$( "#edit-form2" ).dialog({
		autoOpen: false,
		modal: true,
	});
<!-- edit2 button -->	
	$( ".edit_button2" )
		.click(function() {
		$( "#edit-form2" ).dialog( "open" );
	});
});
</script>
<?php //include '../new.footer.php'; ?>