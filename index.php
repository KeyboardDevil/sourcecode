<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title> EverybodyLovesFrank.com </title>
	<meta name="Author" content="Frank T. Pernicano" />
	<meta name="description" content="Frank Pernicano, Frank T. Pernicano, web developer, web applications developer" />
	
	<link type="text/css" rel="stylesheet" href="style.css" />
</head> 
 
<body>

<div id="QrImage">
</div>


<h1 id="BodyTitle">EveryBodyLovesFrank</h1>

<?php
if (isset($_GET["contact"])) {
	echo '<div id="ContactThanks" class="moduleShowHide">';
	echo '<div class="moduleTop"></div>';
	echo '<div class="moduleBody">';
	echo '<p class="thanks">Thanks for the email, '.$_GET["contact"].'!</p>';
	echo '</div>';
	echo '<div class="moduleBottom"></div>';
	echo '</div>';
}
else if (isset($_GET["formErrors"])) {
	echo '<div id="ContactThanks" class="moduleShowHide">';
	echo '<div class="moduleTop"></div>';
	echo '<div class="moduleBody">';
	echo '<p class="thanks">There were errors in your form submission!</p>';
	echo '</div>';
	echo '<div class="moduleBottom"></div>';
	echo '</div>';
}
?>
<div id="QrLarge" class="moduleShowHide">
	<img src="img/frankQR.gif" alt="My contact info" width="260" height="260" />
</div>

<div id="TopModule">
	<h2>Web Application Architecture &amp; Development</h2>
	<p class="body">XHTML, CSS, XML, JavaScript, PHP, JSP, SQL, browser compatibility, JS/CSS frameworks, software estimation, technical project management, server administration</p>
	<p class="subBody">I have hard-core ninja-like development experience with some of the largest companies in the world like Chase, Disney, AAA, and Johnson &amp; Johnson</p>

	<div id="Tabs">
		<a class="tabs" id="ShowWorkHistory">Work History</a>
		<a class="tabs" id="ShowOtherSites">Sites I've built</a>
		<a class="tabs" id="ShowAcc">Accolades</a>
		<a class="tabs" id="ShowContact">Contact me</a>
	</div>
</div>

<div id="ModuleWork" class="moduleShowHide">
	<div class="moduleTop"></div>
	<div class="moduleBody">
		<h3>Work history</h3>
		<img class="workImage" src="img/disneyLogo.png" alt="Disney" />
		<p><span class="title">Walt Disney Parks &amp; Resorts Online: Disney Internet Group<br />
		Celebration,FL</span></p>
		<p class="historyBody">Responsibilities included technical design, development and maintenance of Disney websites using Tea (an open-source JSP-like language), Zend PHP, JavaScript, CSS, and XHTML. Server administration in multiple environments (local, development, QA, load/stress, and production). Design and maintenance of complex content objects in Disney's propietary content management system. Management of numerous small development teams (1-3 direct reports). Project management: Wireframe/comp reviews, functional specifications, code standards, documentation, and development/staging/build procedures to align with PCI Compliance. Took on the roll of project integration lead for site projects moving into the sustainment space. Strong experience in Blueprint CSS, YUI, Prototype, and JQuery libraries.</p>
		<hr />
	</div>

	<div class="moduleBody">
		<img class="workImage" src="img/aaaLogo.png" alt="AAA" />
		<p><span class="title">AAA National Office<br />
		Heathrow,FL</span></p>
		<p class="historyBody">Responsibilities included creating, modifying, and developing Vignette Content Aggregation Server agents for providing AAA.com with updated vendor content. Responsible for over 25 vendors including Carnival Cruise Lines, Disneyland, Disney World, and Disney Cruise Lines. Extensive experience with MS SQL, JavaScript, HTML, CSS, Vignette Content Aggregation Server, user interface design, and small online application development.</p>
		<hr />
	</div>

	<div class="moduleBody">
		<img class="workImage" src="img/chaseLogo.gif" alt="Chase" />
		<p><span class="title">JP Morgan Chase Manhattan Bank<br />
		Tampa,FL</span></p>
		<p class="historyBody">Responsibilities included creating, modifying, and developing pages for both card acquisitions and card services. These included interactive forms and dynamic pages written HTML, CSS, JavaScript, and JSP for the front end. Duties included front-end design and development as well as development of the transaction layer written using Enterprise Java Beans.</p>
	</div>
	<div class="moduleBottom"></div>
</div>
 
<div id="ModuleOther" class="moduleShowHide">
	<div class="moduleTop"></div>
	<div class="moduleBody">
		<h3>Other Sites I've Built</h3>
		<div id="OtherBox">
			<div class="boxgrid captionfull">
				<img class="img" src="img/other/pc.jpg"/>
				<div class="cover boxcaption">
					<h4>Princess Charming</h4>
					<p>Site uses XHTML, CSS, PHP, Prototype JS, Flickr API, and the Facebook Connect API.</p>
					<p><a href="http://www.princesscharmingproductions.com/">PrincessCharmingProductions.com</a></p>
				</div>		
			</div>

			<div class="boxgrid captionfull">
				<img class="img" src="img/other/md.jpg"/>
				<div class="cover boxcaption">
					<h4>Mobile Designs</h4>
					<p>Site uses XHTML, CSS, PHP, and a custom "Gallery" install (gallery.sourceforge.net).</p>
					<p><a href="http://www.mymobiledesigns.com/">MyMobileDesigns.com</a></p>
				</div>		
			</div>

			<div class="boxgrid captionfull">
				<img class="img" src="img/other/vd.jpg"/>
				<div class="cover boxcaption">
					<h4>Virtual DJ'z Entertainment</h4>
					<p>Site uses XHTML CSS, and JavaScript.</p>
					<p><a href="http://www.virtualdjz.com/">VirtualDjs.com</a></p>
				</div>		
			</div>

			<div class="boxgrid captionfull">
				<img class="img" src="img/other/ce.jpg"/>
				<div class="cover boxcaption">
					<h4>Compact Evolution</h4>
					<p>Site uses XHTML, CSS, PHP, and MySQL.</p>
					<p>Site offline <a href="/compactevo/">copy saved here</a> (some links may not work).
				</div>		
			</div>

			<div class="boxgrid captionfull">
				<img class="img" src="img/other/sp.jpg"/>
				<div class="cover boxcaption">
					<h4>St Petersburg College</h4>
					<p>4 month contract to completely redesign and re-skin. XHTML, CSS, JavaScript, and Perl.</p>
					<p>(Site since re-designed)</p>
				</div>		
			</div>

			<div class="boxgrid captionfull">
				<img class="img" src="img/other/is.jpg"/>
				<div class="cover boxcaption">
					<h4>Industrial Sound Studios</h4>
					<p>Recording studio based in California. Site uses XHTML, CSS, Flickr API, and JavaScript.</p>
					<p>(Site currently offline)</p>
				</div>		
			</div>

			<div class="boxgrid captionfull">
				<img class="img" src="img/other/el.jpg"/>
				<div class="cover boxcaption">
					<h4>EverybodyLovesFrank</h4>
					<p>This site!  XHTML, CSS, PHP, and jQuery JavaScript</p>
					<p><a href="http://www.everybodylovesfrank.com">EverybodyLovesFrank.com</a></p>
				</div>
			</div>
		</div>
	</div>
	<div class="moduleBottom"></div>
</div>
 
<div id="ModuleAcc" class="moduleShowHide">
	<div class="moduleTop"></div>
	<div class="moduleBody">
		<h3>Things my co-workers have said</h3>

		<div class="bubbleTop"></div>
		<div class="bubbleBody">
			<p>"You can learn a lot about a person's technical ability by their attitude toward poor craftsmanship. During my time as an IT consultant at Walt Disney Parks and Resorts Online I had the opportunity to work adjacent to Frank for a significant period. While I've not had the chance to directly collaborate with him, the discussions we had regarding the issues facing our respective teams made me aware that Frank shares with me both a deeply internalized love of elegant systems, and an equally passionate aversion to shoddy engineering. When I interview prospective candidates for positions within Accenture, this is one of the first things that I look for. It implies a level personal engagement that you will not find otherwise. The deliverable I've seen of his have quickly validated this philosophy. I'd bring frank in to work on any technology with which he has familiarity without hesitation... He's also pretty funny."</p>
		</div>
		<div class="bubbleBottom"></div>
		<a href="http://www.linkedin.com/profile/view?id=52566734&authType=name&authToken=52rt&trk=tyah">Tristan Rouse</a>, Senior Software Engineer, Accenture

		<div class="bubbleTop"></div>
		<div class="bubbleBody">
			<p>"Frank was instrumental in our development and architecture of Disney's online ticketing and hotel booking systems. Together with Frank and the rest of the team, the rewrite of the booking system grew revenues over 100%, far exceeding all estimates and becoming a billion dollar product in the process. Frank is a very hard worker, versatile, capable and self motivated. If Frank is given a task, he picks it up and makes sure it's handled, even if its new ground for him. He was an integral part of the DisneyWorld.com team when I was there, and I wouldn't hesitate to recommend him to even my most trusted business contacts."</p>
		</div>
		<div class="bubbleBottom"></div>
		<a href="http://www.linkedin.com/profile/view?id=8502008&authType=name&authToken=m-jX&trk=tyah">James Thomas</a>, Web Developer (Front end), Walt Disney Internet Group

		<div class="bubbleTop"></div>
		<div class="bubbleBody">
			<p>"Frank is all the personalities you want in a developer rolled into one: philosopher, idealist, engineer, architect, comedian, ninja. In baseball parlance, Frank is valuable in the field and in the clubhouse. Whether you need a captain or a teammate, you need Frank. To put it simply, Frank is anti-bad-stuff and pro-good-stuff, and that is what you look for in a web developer. I'd work with him repeatedly."</p>
		</div>
		<div class="bubbleBottom"></div>
		<a href="http://www.linkedin.com/profile/view?id=11658451&authType=name&authToken=Ls1N">Matt Alexander</a>, Web Architect, Walt Disney Parks and Resorts Online

		<div class="bubbleTop"></div>
		<div class="bubbleBody">
			<p>"Frank is an extremely talented developer, skilled at what he does, communicative, open to other points of view, and works as well in a team as he does as an independent contributor. I've worked with Frank on and off for over 5 years at this writing, in the same team and in different teams, and few developers have impressed me as much as Frank has. My team, as a Sustainment/Operations team, is fortunate to have him back after he was gone for some time in the Projects space, and I myself am very glad to be working with a developer of his caliber once again."</p>
		</div>
		<div class="bubbleBottom"></div>
		<a href="http://www.linkedin.com/profile/view?id=7188031&authType=name&authToken=H9yJ&trk=tyah">Rob Lune</a>, Senior Developer, Walt Disney Parks and Resorts Online

		<p class="accoladesBy">Quotes taken from my <a href="http://www.linkedin.com/in/fpernicano">LinkedIn profile</a></p>
	</div>
	<div class="moduleBottom"></div>
</div>

<div id="ModuleContact" class="moduleShowHide">
	<div class="moduleTop"></div>
	<div class="moduleBody">
		<form id="ContactForm" method="post" action="formMail.php">
			<h3>Contact me:</h3>
			<table>
			<tr>
				<td><label for="name">Your name:</label></td>
				<td><input type="text" name="name" id="name" class="required" /></td>
			</tr>
			<tr>
				<td><label for="email">Your email:</label></td>
				<td><input type="text" name="email" id="email" class="required email" /></td>
			</tr>
			<tr>
				<td><label for="phone">Your phone:</label></td>
				<td><input type="text" id="phone" name="phone" /></td>
			</tr>
			<tr>
				<td><label for="message">Message:</label></td>
				<td><textarea rows="2" cols="30" id="message" name="message" class="required"></textarea></td>
			</tr>
			<tr>
				<td colspan="2"><input class="submit" type="submit" name="submit" value="Send it" /></td>
			</tr>
			</table>
		</form>
		<div id="ContactSites">
			<!-- Facebook Badge -->
			<a href="http://www.facebook.com/frank.pernicano" target="_TOP" title="...on Facebook"><img src="http://badge.facebook.com/badge/1251219939.2591.389980942.png" width="300" height="112" /></a>
			<!-- LinkedIn Badge -->
			<a href="http://www.linkedin.com/in/fpernicano" title="...on LinkedIn"><img src="img/linkedIn.jpg" width="300" height="112" /></a>
			<!-- jQuery Meetups Badge -->
			<!-- <a href="http://meetups.jquery.it/profile/FrankTPernicano"><img src="img/jqueryMeetups.jpg" width="120" height="163" /></a> -->
			<embed wmode="opaque" src="http://static.ning.com/socialnetworkmain/widgets/index/swf/badge.swf?v=201107061900" FlashVars="backgroundColor=0xFFFFFF&textColor=0x000000&config=http%3A%2F%2Fmeetups.jquery.com%2Fmain%2Fbadge%2FshowPlayerConfig%3Fxg_source%3Dbadge%26size%3Dsmall%26username%3D2p2azdxfld246" width="206" height="104" bgColor="#FFFFFF" scale="noscale" allowScriptAccess="always" allowFullScreen="true" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer"> </embed>
		</div>
	</div>
	<div class="moduleBottom"></div>
</div>

<div id="ModuleFooter">
	<div class="moduleTop"></div>
	<div class="moduleBody">
		&copy; <?php echo date('Y'); ?> Frank T Pernicano | frank@everybodylovesfrank.com
	</div>
	<div class="moduleBottom"></div>
</div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript">
	// form validation
	$(document).ready(function(){
		$("#ContactForm").validate();
	});
	// end form

	// Qr show
	$('#QrImage').click(function() {
		$(".moduleShowHide").slideUp("slow");
		if ($("div:#QrLarge").is(":hidden")) {
			$("div:#QrLarge").slideDown("slow");
		} else {
			$("div:#QrLarge").slideUp("slow");
		}
	});
	// end QR

	// show hide modules
	$('#ShowWorkHistory').click(function() {
		$(".moduleShowHide").slideUp("slow");
		$("div:#ModuleWork").slideDown("slow");
	});
	
	$('#ShowOtherSites').click(function() {
		$(".moduleShowHide").slideUp("slow");
		$("div:#ModuleOther").slideDown("slow");
	});

	$('#ShowAcc').click(function() {
		$(".moduleShowHide").slideUp("slow");
		$("div:#ModuleAcc").slideDown("slow");
	});

	$('#ShowContact').click(function() {
		$(".moduleShowHide").slideUp("slow");
		$("div:#ModuleContact").slideDown("slow");
	});
	// end modules

	// other sites
	$(document).ready(function(){
	$('.boxgrid.captionfull').hover(function(){
		$(".cover", this).stop().animate({top:'80px'},{queue:false,duration:180});
		$(".img", this).fadeTo(100,.5);
	}, function() {
		$(".cover", this).stop().animate({top:'260px'},{queue:false,duration:180});
		$(".img", this).fadeTo(100,1);
		});
	});
	// end other sites

	// google
	var _gaq = _gaq || [];
	_gaq.push(['_setAccount', 'UA-3474776-2']);
	_gaq.push(['_trackPageview']);

	(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	})();

</script>
 
</body>
</html>