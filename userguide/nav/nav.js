function create_menu(basepath)
{
	var base = (basepath == 'null') ? '' : basepath;

	document.write(
		'<table cellpadding="0" cellspaceing="0" border="0" style="width:98%"><tr>' +
		'<td class="td" valign="top">' +
		
		'<ul>' +
                        '<li><a href="'+base+'userguide/index.php">User Guide Home</a></li>' +
                        '<li><a href="'+base+'userguide/toc.php">Table of Contents</a></li>' +
                '</ul>' +
		
		'<h3>General</h3>' +
		'<ul>' +
			'<li><a href="'+base+'userguide/general-server_req.php">Server Requirements</a></li>' +
  		        '<li><a href="'+base+'userguide/general-client_req.php">Client Requirements</a></li>' +
			'<li><a href="'+base+'userguide/general-LICENSE.php">License Agreement</a></li>' +		
		        '<li><a href="'+base+'userguide/general-changelog.php">Change Log</a></li>' +
			'<li><a href="'+base+'userguide/general-credits.php">Credits</a></li>' +
		'</ul>' +	

		'<h3>Support</h3>' +
                '<ul>' +
                        '<li><a href="'+base+'userguide/support-contact.php">Contacting Support</a></li>' +
                        '<li><a href="'+base+'userguide/support-submit.php">Submitting Bugs</a></li>' +
                        '<li><a href="'+base+'userguide/support-contributing.php">Contributing</a></li>' +
                '</ul>' +
		
				
		'</td><td class="td_sep" valign="top">' +

		'<h3>Installation</h3>' +
		'<ul>' +
                       '<li><a href="'+base+'userguide/installation-downloads.php">Downloading Kontrollbase</a></li>' +
		       '<li><a href="'+base+'userguide/installation-install_overview.php">Installation Overview</a></li>' +
                       '<li><a href="'+base+'userguide/installation-client_redhat.php">Client Install - Redhat</a></li>' +
                       '<li><a href="'+base+'userguide/installation-client_ubuntu.php">Client Install - Ubuntu</a></li>' +
		       '<li><a href="'+base+'userguide/installation-client_other.php">Client Install - Other</a></li>' +
		       '<li><a href="'+base+'userguide/installation-client_experiment.php">Client Install - Experimental</a></li>' +
		       '<li><a href="'+base+'userguide/installation-server.php">Server Scripts Install</a></li>' +
		       '<li><a href="'+base+'userguide/installation-webapp.php">Webapp Install</a></li>' +
		       '<li><a href="'+base+'userguide/installation-troubleshooting.php">Troubleshooting</a></li>' +
		'</ul>' +
		
		'</td><td class="td_sep" valign="top">' +
				
		'<h3>Reporting, Graphing, Alerting</h3>' +
		'<ul>' +
		'<li><a href="'+base+'userguide/rga-alert_system.php">Understanding the Alert Process</a></li>' +
		'<li><a href="'+base+'userguide/rga-reporting_overview.php">Kontrollbase Reports</a></li>' +
		'<li><a href="'+base+'userguide/rga-graphs_overview.php">Kontrollbase Graphs</a></li>' +
		'</ul>' +

		'<h3>Performance and Scaling</h3>' +
      '<ul>' +
      '<li><a href="'+base+'userguide/perf-scaling_options.php">Scaling Options</a></li>' +
		'<li><a href="'+base+'userguide/perf-pruning_data.php">Pruning Old Data</a></li>' +
		'</ul>' +
		
		'<h3>Administration</h3>' +
		'<ul>' +
		'<li><a href="'+base+'userguide/admin-auth.php">Authentication and User Roles</a></li>' +
		'<li><a href="'+base+'userguide/admin-system_management.php">System Management</a></li>' +
		'<li><a href="'+base+'userguide/admin-bulk.php">Adding Clients/Hosts in Bulk</a></li>' +
		'</ul>' +	
		
		'</td></tr></table>');
}