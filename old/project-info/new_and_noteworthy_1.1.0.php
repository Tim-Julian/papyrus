<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'

	#
	# Begin: page-specific settings.  Change these. 
	$pageTitle 		= "Papyrus - New and Noteworthy - 1.1.0";
	$pageKeywords	= "papyrus, dsl, modeling, domain specific language, graphical, uml, sysml, new, 1.1.0, mars";
	$pageAuthor		= "Remi Schnekenburger";
	
	# Add page-specific Nav bars here
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# $Nav->addNavSeparator("My Page Links", 	"downloads.php");
	# $Nav->addCustomNav("My Link", "mypage.php", "_self", 3);
	# $Nav->addCustomNav("Google", "http://www.google.com/", "_blank", 3);

	# End: page-specific settings
	#
	
	//include('../news/scripts/news.php');
	//$papyrusnews = get_papyrusnews(7);
		
ob_start();
?>

<!-- Middle part -->
<div id="midcolumn">

<h1>New and Noteworthy - Papyrus 1.1.0 (Mars)</h1>

<h2>What's NEW?</h2>

<h3>Diagram synchronization support</h3>
<p align="JUSTIFY">
You can now activate synchronization on your diagram or on part of your diagram so that the graphical representation matches the semantic model.
</p>
<p>
What you see on the diagram is then always what you have in your model! Change the model, and the diagram changes to display the new information, or remove what was deleted.
</p>
<a href="http://youtu.be/uo2jpPd-n2s">See a sample video on this feature</a>


<h3>Modeling assistants dedicated to your language</h3>
<p align="JUSTIFY">
Modeling assistants are popup shortcuts that help you create new elements in the diagram. You can now create in Papyrus a model of your diagram assistants for your own profile, and load them into your running Papyrus instance for a live test.</p>
<div id="screenshot_modelingassistants">
	<img width="524" src="../images/screenshot_modelingassistants.png"/>
</div>
<p align="JUSTIFY">
These are great for users to quickly create diagrams and models without having to constantly go back to the tool palette.
</p>

<h3>Hierarchical tables</h3>
<p align="JUSTIFY">
You can now define and use hierarchical tables that let you see any custom structure corresponding to UML2 metamodel, or even your own structure</p>
<div id="screenshot_hierarchicaltables">
	<img width="640" src="../images/hierarchicaltables.png"/>
</div>

<h2>What has been updated since version 1.0?</h2>
<h3>Figure customization and custom shape support in all diagrams</h3>
<p align="JUSTIFY">
Papyrus diagrams now rely on one highly customizable figure that can be parametrized either through CSS or by using the extra advanced appearance property view. All diagrams also support the shapes framework, allowing you to define your own representation for your language in any UML standard diagram, like activity diagram!</p>
<div id="screenshot_shapes">
	<img width="296" src="../images/shapes.png"/>
</div>

<h3>Activity Diagram</h3>
<p align="JUSTIFY">
The activity diagram now provide a better user experience. It has been modernized to support all new Papyrus features, including better stereotype support and shape customization. An example of this customization will be available soon, with the capability of process modeling based on the BPMN profile and Activity diagram customization.</p>
<div id="screenshot_bpmn">
	<img width="515" src="../images/BPMN_preview.png"/>
</div>

<h3>Stereotype Support</h3>
<p align="JUSTIFY">
Stereotype display now supports customization using stylesheets. Stereotype applications can now also be shown by default when displaying elements. For example, stereotyped elements dropped from the model explorer can now immediately display their stereotype, without additional user action. In addition, the user interface to select stereotype display is now simplified.</p> 
<div id="screenshot_stereotypestable">
	<img width="515" src="../images/StereotypeDisplay.png"/>
</div>

<h3>Model explorer creation menu</h3>
<p align="JUSTIFY">
You can now create relationships like associations and dependencies using the model explorer's contextual menu (right-click on element). The first element selected will be the source of your link and a selection dialog will enable you to pick the target of your link.</p> 
<div id="screenshot_modelexplorerrelationship">
	<img width="320" src="../images/ModelExplorerCreateRelationship.png"/>
</div>

<h3>Papyrus EMF Compare integration</h3>
<p align="JUSTIFY">
The support for collaborative modeling in Papyrus relying on EMF Compare component, is improved. You can see more on the <a href="https://sites.google.com/a/eclipsesource.com/collaborative-modeling/">Collaborative Modeling</a> page.  
</p>

<h3>Papyrus Search</h3>
<p align="JUSTIFY">
You can now search for a given set of stereotypes or values of properties of stereotype from Papyrus search UI
</p>
<div id="screenshot_searchimproved">
	<img width="535" src="../images/SearchImproved.png"/>
</div>

<h3>Papyrus Wizard</h3>
<p align="JUSTIFY">
Model and project creation wizards now give you more opportunities. You can, for example, select a name for the project, the model file and the root element of your model. You can also apply at the same time a profile and use a predefined template for your new model.</p>
<div id="screenshot_wizardimproved">
	<img width="356" src="../images/WizardImproved.png"/>
</div>

<h3>Advanced multiplicity editor</h3>
<p align="JUSTIFY">
The property view for multiplicity elements provides now an advanced widget. This optional widget lets you enter a complex multiplicity like [0..MAX]. You can switch between the simple and the advanced one directly from the property view or from the preferences.</p>
<div id="screenshot_multiplicity">
	<img width="635" src="../images/AdvancedMultiplicity.png"/>
</div>

<h2>Under the hood</h2>
<h3>Element Types Configuration</h3>
<p align="JUSTIFY">
You can now define in a central place all the actions on your model, e.g. the creation, the deletion and the edition of the elements. You can reuse these action definitions in the model explorer, the palettes, the modeling assistants, etc.
</p>

<h3>Diagram Expansion</h3>
<p align="JUSTIFY">
The existing diagram definitions can now be extended using Diagram Expansion framework. This framework let you add any kind of representation to existing ones, like new custom compartments for classifiers representations. This new feature is used for both the incoming support of SysML1.4 in Papyrus and for the upcoming Papyrus-RT project.
</p> 

<h3>Test and debug</h3>
<p align="JUSTIFY">
More than <a href="https://bugs.eclipse.org/bugs/buglist.cgi?action=wrap&bug_status=RESOLVED&bug_status=VERIFIED&bug_status=CLOSED&chfield=resolution&chfieldfrom=2015-01-01&chfieldto=Now&classification=Modeling&component=Core&component=Diagram&component=Others&component=Table&component=Views&product=Papyrus&version=1.1.0">400 bugs</a> have been closed for version 1.1.0 since January 2014, and more than <a href="https://hudson.eclipse.org/papyrus/job/Papyrus-Master-Tests/">10.000</a> unit tests are run against Papyrus every nights.  
</p>
</div>

<h3>Quality improvments</h3>
<p align="JUSTIFY">
Thanks to new frameworks and better code generation, Papyrus Mars has more features than Luna version while using less code. 20% of lines of code has been removed, being centralized in common places to reduce maintenance costs and improve user experience.  
</p>
</div>


<?php

// Right Part
//include($_SERVER['DOCUMENT_ROOT'] . "/mdt/papyrus/right_column.php");


$html = ob_get_contents();
ob_end_clean();

# Generate the web page
//$App->AddExtraHtmlHeader("<link rel='alternate' type='application/rss+xml' title='Papyrus News' href='news/papyrusNewsArchive.rss'>");
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>