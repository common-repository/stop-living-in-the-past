<?php
/*
Plugin Name: Stop Living in the Past
Plugin URI: http://www.stoplivinginthepast.com/get-the-code/
Description: Adds a box to the top of the page when a user visits it using Internet Explorer 6 or older telling the visitor to upgrade to a newer version of the browser.
Version: 0.1.1
Author: Morten Rand-Hendriksen
Author URI: http://www.designisphilosophy.com

Stop Living in the Past is released under the GNU General Public
License (GPL) http://www.gnu.org/licenses/gpl.txt
*/

function showStrip () {
	$browser = $_SERVER['HTTP_USER_AGENT'];

	if (false !== strpos($browser, 'MSIE 5') || false !== strpos($browser, 'MSIE 6')) {
?>

<style type="text/css">
	#slitpCenter{
		width:100%;
		margin: 0px;	
		padding-top:8px;
		padding-bottom:8px;
	}

	#slitp {
		padding: 10px;
		border: 3px solid #000099;
		margin-right:auto;
		margin-left:auto;
		background: #DFEFFF;
		color: #000;
		font-family: Arial, Helvetica, sans-serif;
		font-size: 14px;
		line-height: 15px;
		width: 800px;
	}

	#slitp h1 {
		margin: 0px;
		padding: 0px 0px 3px 0px;
		text-transform: uppercase;
		text-align: center;
		border-bottom-style: solid;
		border-bottom-width: 1px;
		border-bottom-color: #000099;
		font-size: 16px;
		color: #000099;
	}
 
	#slitp p {
		margin: 10px 0px 0px 0px;
		text-align: justify;
	}
 
	#slitp p a {
		font-weight: bold;
		color: #000099;
	}
</style>

<div id="slitpCenter"> <!-- Full width wrapper -->
	<div id="slitp"> <!-- Centered content box -->
	    <h1>Your browser is outdated. Stop living in the past and upgrade!</h1>
		<p>You are using the long outdated Internet Explorer 6 browser. This site 
		may not display or work correctly and you are putting your data and 
		privacy at risk. To get the most out of the web, upgrade to the
		<a href="http://www.microsoft.com/windows/products/winfamily/ie/default.mspx" title="Download the latest version of Internet Explorer for free directly from Microsoft" alt="Download the latest version of Internet Explorer for free directly from Microsoft" "target="_blank">
		new version of Internet Explorer</a> right now. If you are at work and you see this message, 
		talk to your IT department and ask them to upgrade the browser to secure 
		your company data.</p>
 
        <p><a title="Stop Living In the Past" href="http://www.stoplivinginthepast.com" target="_blank">Click here to learn more about why you should upgrade your browser.</a></p>
	</div><!-- END #slitp -->
</div><!-- END #slitpCenter -->
<?php
    } // END if
} // END showStrip

// Hook for displaying the strip
add_action('wp_head', 'showStrip');

?>