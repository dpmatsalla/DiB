<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <link rel="icon" href="images/dib3.PNG"/>
        <link data-replaceable="true" rel="canonical" href="https://defenceinbusiness.com/"/>
        <link rel="stylesheet" href="css/theme.css">
        <link rel="stylesheet" href="css/responsive.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/custom.css">
        <style>
            /* Set the initial image as background */
            .image-container {
                max-width: 625px;
                max-height: 384px;
                background: url('images/mentoring-073b05589d.jpg') no-repeat center center;
                background-position: top;
                background-size: contain;
                animation: cycleImages 20s infinite;
            }

            /* Define keyframes to cycle through the images */
            @keyframes cycleImages {
                0%, 100% {
                    background-image: url('images/mentoring-073b05589d.jpg');
                }
                33.33% {
                    background-image: url('images/networking-c9290a25df.jpg');
                }
                66.66% {
                    background-image: url('images/pd.jpg');
                }
            }
        </style>
        <title data-replaceable="true">Defence in Business</title>
        <meta name="description" content="Join Defence in Business to connect with Serving, Veterans and Defence Industry." data-replaceable="true"/>
        <meta name="og:title" content="Defence in Business" data-replaceable="true"/>
        <meta name="og:description" content="Join Defence in Business to connect with Serving, Veterans and Defence Industry." data-replaceable="true"/>
        <meta name="og:url" content="https://defenceinbusiness.com/" data-replaceable="true"/>
        <meta name="og:type" content="website" data-replaceable="true"/>
        <meta name="og:image" content="null" data-replaceable="true"/>
        <!--<script>
            (function() {
                if (!window.document.documentMode)
                    return;
                var errorContent = ['<div class="raisely-error">', '<div class="raisely-error__content">', '<p class="raisely-error__description">', 'This browser is not supported. <a href="https://browsehappy.com/">Please update your browser.</a>', '</p>', '</div>', '</div>', ].join('');
                document.addEventListener('DOMContentLoaded', function() {
                    var raiselyRoot = document.getElementById('raisely-root');
                    if (raiselyRoot) {
                        raiselyRoot.innerHTML = errorContent;
                    } else {
                        document.body.innerHtml = '<div id="raisely-root">' + errorContent + '</div>';
                    }
                });
                throw new Error('Browser not supported error');
            })();
            // set data-path attribute of html tag
            document.documentElement.dataset.path = window.location.pathname;
            const break_points = [["fixMenu", 190]]
            // [[name, scrollY]]
            // code for changing styling based on scroll position (from: https://css-tricks.com/styling-based-on-scroll-position/)
            // The debounce function receives our function as a parameter
            const debounce = (fn)=>{
                // This holds the requestAnimationFrame reference, so we can cancel it if we wish
                let frame;
                // The debounce function returns a new function that can receive a variable number of arguments
                return (...params)=>{
                    // If the frame variable has been defined, clear it now, and queue for next frame
                    if (frame) {
                        cancelAnimationFrame(frame);
                    }
                    // Queue our function call for the next frame
                    frame = requestAnimationFrame(()=>{
                        // Call our function and pass any params we received
                        fn(...params);
                    });
                };
            };
            // Reads out the scroll position and stores it in the data attribute
            // so we can use it in our stylesheets
            const storeScroll = ()=>{
                document.documentElement.dataset.scroll = window.scrollY;
                for (let i = 0; i < break_points.length; i++) {
                    if (window.scrollY > break_points[i][1]) {
                        document.documentElement.dataset[break_points[i][0]] = '';
                    } else {
                        if (break_points[i][0]in document.documentElement.dataset) {
                            delete document.documentElement.dataset[break_points[i][0]];
                        }
                    }
                }
            };
            // Listen for new scroll events, here we debounce our `storeScroll` function
            document.addEventListener("scroll", debounce(storeScroll), {
                passive: true,
            });
            // Update scroll position for first time
            storeScroll();
        </script>-->
        <script>
            function checkPassword() {
                var password = document.getElementById("password").value;
                if (password === "ngu") {
                    window.location.href = "admin.php"; 
                } else {
                    document.getElementById("msg").innerHTML = "Incorrect";
                }
            }
        </script>
    </head>

<body>
	<noscript> You need to enable JavaScript to run this app. </noscript>
	
	<div class="uk-container uk-container-center">
		<div class="tm-container">
			<div class="tm-headerbar uk-clearfix uk-hidden-small">
				<a class="tm-logo" href="http://www.defenceinbusiness.com">
                	<div><img src="images/DiB-long.png" alt=""></div>
            	</a>
				<div class="uk-panel">
                	<div class="tm-social-icon-buttons">
                	    <a class="uk-icon-button" href="https://www.facebook.com/defenceinbusiness"><img src="images/facebook.png"></a>
                	    <a class="uk-icon-button" href="https://www.linkedin.com/groups/Defence-in-Business-1938071/about"><img src="images/LinkedIn2.png"></a>
                    </div>
                </div>
			</div>
			<div class="tm-top-block tm-grid-block">
				<nav class="tm-navbar uk-navbar">
					<ul class="uk-navbar-nav uk-hidden-small">
					    <li data-uk-dropdown="{}"><a href="#welcome">Welcome</a></li>
					    <li data-uk-dropdown="{}"><a href="#pd">Professional Development</a></li>
					    <!--<li data-uk-dropdown="{}"><a href="index.php/login">Login</a></li>
					    <li data-uk-dropdown="{}"><a href="index.php/members">Join as Member</a></li>
					    <li data-uk-dropdown="{}"><a href="index.php/recognition-of-prior-learning-rpl">Recognition of Prior Learning</a></li>
					    <li class="uk-parent" data-uk-dropdown="{}">
					        <a href="#">All Services</a>
					        <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1" style="">
					            <div class="uk-grid uk-dropdown-grid">
					                <div class="uk-width-1-1">
					                    <ul class="uk-nav uk-nav-navbar">
					                        <li><a href="index.php/alldobservices/benchon-partnership">BenchOn Partnership</a></li>
					                        <li><a href="https://www.linkedin.com/groups/1938071/">Online Community + Event Updates </a></li>
					                        <li><a href="index.php/alldobservices/recognition-of-prior-learning">Recognition of Prior Learning</a></li>
					                    </ul>
					                </div>
					            </div>
					        </div>
					    </li>
					    <li class="uk-parent" data-uk-dropdown="{}"><a href="/">Media</a>
					        <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1" style="">
					            <div class="uk-grid uk-dropdown-grid">
					                <div class="uk-width-1-1">
					                    <ul class="uk-nav uk-nav-navbar">
					                        <li><a href="http://www.smh.com.au/business/an-officer-and-an-executive--how-the-roles-stack-up-20130315-2g66y.html" onclick="window.open(this.href, 'targetWindow', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,'); return false;">SMH Mar'13 - An officer and an executive</a></li>
					                    </ul>
					                </div>
					            </div>
					        </div>
					    </li>-->
					    <li class="uk-parent" data-uk-dropdown="{}"><a href="#contactus">Contact</a>
					        <!--<div class="uk-dropdown uk-dropdown-navbar uk-dropdown-width-1">
					            <div class="uk-grid uk-dropdown-grid">
					                <div class="uk-width-1-1">
					                    <ul class="uk-nav uk-nav-navbar">
					                        <li><a href="index.php/about-us/vision-and-purpose">Vision and Purpose</a></li>
					                        <li><a href="index.php/about-us/leadership-team-management">Leadership Team - Board of Directors</a></li>
					                        <li><a href="index.php/about-us/contact-us">Contact</a></li>
            							</ul>
			                		</div>
					            </div>
					        </div>-->
					    </li>
					</ul>
					<!--<a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>-->
					<div class="uk-navbar-content uk-navbar-center uk-visible-small">
					    <a class="tm-logo-small" href="http://www.defenceinbusiness.com">
                    	    <p><img class="uk-responsive-height" src="images/DiB-long.png" alt="Demo" width="100" height="35"></p>
                    	</a>
                    </div>
				</nav>
				<div class="tm-toolbar uk-clearfix uk-hidden-small">
					<div class="uk-float-left">
					    <div class="uk-panel">
					        <ul class="uk-breadcrumb"><li class="uk-active"><span>Home</span></li></ul>
					    </div>
				    </div>
				</div>
			</div>
			
			<section class="tm-top-a uk-grid tm-grid-block" data-uk-grid-match="{target:'> div > .uk-panel'}">
                <div class="uk-width-1-1 uk-width-medium-1-2">
                    <div class="image-container">
                        <img width="627" height="384">
                    </div>
    			    <!--<div class="uk-panel" style="min-height: 382px;">
                        <div id="gallery-55-64f5a49c4e453" class="wk-slideshow wk-gallery-avenue" data-widgetkit="slideshow" data-options="{&quot;style&quot;:&quot;avenue&quot;,&quot;width&quot;:625,&quot;height&quot;:384,&quot;autoplay&quot;:0,&quot;order&quot;:&quot;default&quot;,&quot;interval&quot;:5000,&quot;duration&quot;:500,&quot;index&quot;:0,&quot;navigation&quot;:1,&quot;buttons&quot;:1,&quot;slices&quot;:15,&quot;animated&quot;:&quot;randomFx&quot;,&quot;caption_animation_duration&quot;:500,&quot;lightbox&quot;:0}" style="visibility: visible; position: relative; width: 625px;">
                    		<ul class="slides" style="width: 100%; overflow: hidden; position: relative; height: 384px;">
								<li style="top: 0px; left: 0px; position: absolute; display: list-item; z-index: 2; height: 384px; width: 625px;"><img src="images/mentoring-073b05589d.jpg" data-src="images/networking-c9290a25df.jpg" width="625" height="384" alt="mentoring"></li>
								<li style="top: 0px; left: 0px; position: absolute; display: none; height: 384px; width: 625px;"><img src="images/networking-c9290a25df.jpg" data-src="images/networking-c9290a25df.jpg" width="625" height="384" alt="networking"></li>
								<li style="top: 0px; left: 0px; position: absolute; display: none; height: 384px; width: 625px;"><img src="images/pd.jpg" data-src="images/organisations-896fd098c3.jpg" width="625" height="384" alt="organisations"></li>
                    		</ul>
                            <div class="caption" style="display: block;">
                                <a class="uk-button uk-button-primary uk-float-right" style="margin-top: 5px;" href="index.php/about-us">learn more</a>
                                <h1 class="uk-margin-remove">Mentoring</h1>
                            </div>
                            <ul class="captions" style="display: none;">
                                <li><a class="uk-button uk-button-primary uk-float-right" style="margin-top: 5px;" href="index.php/about-us">learn more</a><h1 class="uk-margin-remove">Mentoring</h1></li>
                                <li><a class="uk-button uk-button-primary uk-float-right" style="margin-top: 5px;" href="index.php/about-us">learn more</a><h1 class="uk-margin-remove">Networking</h1></li>
                                <li><a class="uk-button uk-button-primary uk-float-right" style="margin-top: 5px;" href="index.php/about-us">learn more</a><h1 class="uk-margin-remove">Professional Development</h1></li>
                            </ul>
	                    </div>
                    </div>-->
                </div>
                <div class="uk-width-1-1 uk-width-medium-1-2">
                    <div class="uk-panel" style="max-height: 382px;">
                        <ul class="uk-tab" data-uk-tab="{connect:'#tab-content'}">
                            <li class="uk-active"><a href="#"><b>Events</b></a></li>
                            <li></li>
                            <li class="uk-tab-responsive uk-active uk-hidden"><a>Events</a>
                                <div class="uk-dropdown uk-dropdown-small">
                                    <ul class="uk-nav uk-nav-dropdown"></ul>
                                    <div></div>
                                </div>
                            </li>
                        </ul>
                        <ul id="tab-content" class="uk-switcher uk-margin">
                            <li class="uk-active">
                                <div id="dtevents" style="clear:both">
                                    <p><b> Join us at our next events:</b></p>
                                    <ul>
                                        <li>24 Oct 2023: Fireside chat with Steve Baxter</li>
                                        <li>10 Dec 2023: End of Year Networking</li>
                                        <li></li>
                                    </ul>
                                    <br>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
			<div class="tm-middle uk-grid" data-uk-grid-match="">
				<div class="tm-main uk-width-medium-1-1">
					<main id='welcome' class="tm-content">
                        <div class="uk-grid tm-blog" data-uk-grid-match="">
                            <div class="uk-width-medium-1-2" style="min-height: 327px;">
                                <article class="uk-article" data-permalink="http://www.defenceinbusiness.com/index.php/10-avenue/24-welcome-to-dib">
                            		<h1 class="uk-article-title">Welcome to DiB</h1>
            						<a class="uk-align-right" href="index.php/10-avenue/24-welcome-to-dib" title=""><img src="images/thomas_44_small.jpg" alt=""></a>
                            		<div>
                        	        	<p>As the founder and Chairman, I would like to welcome you most warmly to Defence in Business, a&nbsp;community of active and former serving members dedicated to fostering networking, mentoring and career opportunities.&nbsp;</p>
                                        <p><b>Dr Thomas Triebsees</b><br>Founder, Chairman</p>
                                	</div>
                            		<!--<p>
    		                            <a href="index.php/10-avenue/24-welcome-to-dib" title="Welcome to DiB">Continue Reading</a>
                                	</p>-->
                                </article>
                            </div>
                            <div class="uk-width-medium-1-2" style="min-height: 327px;">
                                <article class="uk-article" data-permalink="http://www.defenceinbusiness.com/index.php/transitioning-to-civvy-street">
            						<a href="index.php/transitioning-to-civvy-street" title=""><img src="images/transition.jpg" alt=""></a>
                            		<h1 class="uk-article-title">Transitioning to Civvy Street</h1>
                            		<div>
                                		<p>There comes the time when most&nbsp;serving members are faced with the decision to leave and pursue a new career outside the forces. This FREE e-paper lists 10 simple things every transitioning member should consider when leaving the forces.  <b><a href="DiB-Transition-10Tips-TT.pdf">Read it now</a></b></p>
    	                            </div>
                            		<!--<p>
                                        <a href="index.php/transitioning-to-civvy-street" title="Transitioning to Civvy Street">Continue Reading</a>
                                	</p>-->
                                </article>
                            </div>
                        </div>
    				</main>
    				<section id='pd' class="tm-main-bottom uk-grid tm-grid-block" data-uk-grid-match="{target:'> div > .uk-panel'}">
                        <div class="uk-width-1-1">
                            <div class="uk-panel uk-panel-box main-bottom-membership">
                                <center><h3 class="uk-panel-title">Professional Development and Networking Events</h3></center>
                                <img src="images/events-small.jpg" style="width:100%;"><br><br>
                                <p>DiB brings serving and former defence members, defence industry and organisations together by partnering with defence-oriented organisations, hosting events and promoting networking and discussion.  Some of our recent events have included: </p>
                                <ul>
                                    <li><a href="https://www.linkedin.com/feed/update/urn:li:activity:7100608577643446272">Battlefield to the Boardroom: a Discussion on Veteran Leadership, hosted by RSL Queensland</a></li>
                                    <li><a href="https://www.linkedin.com/feed/update/urn:li:activity:7044807723015667712">Veteran Entrepreneur Showcase, hosted by RSL Queensland, Buzzworks, Mirragin Skyshows, Cognition Analytica and TWENTYFIVEFOUR</a></li>
                                    <li><a href="https://www.eventbrite.com.au/e/cyber-security-defence-in-depth-tickets-341376595587?aff=ebdsoporgprofile">Cyber Security - Defence in Depth, hosted by NTT</a></li>
                                    <li><a href="https://www.eventbrite.com.au/e/dib-queensland-on-targetthe-nioa-contribution-to-the-defence-environment-tickets-170229265315?aff=ebdsoporgprofile">DiB Queensland - On Target:The NIOA Contribution to the Defence Environment</a></li>
                                    <li><a href="https://www.eventbrite.com.au/e/panel-discussion-leadership-to-coincide-with-international-womens-day-tickets-269917168517?aff=ebdsoporgprofile">International Women's Day: Leadership and Coaching, hosted by CPD</a></li>
                                </ul>
                                <center><a class="uk-button uk-button-success" href="https://www.eventbrite.com.au/o/defence-in-business-28209412233">See our Upcoming Events on EventBrite</a></center>
                            </div>
                        </div>
                    </section>
				</div>
			</div>
			<div class="tm-block-bottom">
				<section id='contactus' class="tm-bottom-b uk-grid tm-grid-block" data-uk-grid-match="{target:'> div > .uk-panel'}">
                    <div class="uk-width-1-1 uk-width-medium-1-2">
                        <div class="uk-panel uk-panel-header uk-text-center" style="min-height: 250px;">
                            <h3 class="uk-panel-title">Interested or Questions?</h3>
                            <form id="contactus" action='contact-us.php' method='post'>
                                <div class="acymailing_module_form">
                                    <table class="acymailing_form">
	                                    <tr>
											<td class="acyfield_name acy_requiredField"><label for='name'>Name:</label></td>
											<td class="acyfield_name acy_requiredField"><input type='text' id='name' name='name' required></td>
										</tr><tr>
										    <td class="acyfield_name acy_requiredField"><label for='email'>Email Address:</label></td>
										    <td class="acyfield_name acy_requiredField"><input type='email' id='email' name='email' required></td>
										</tr><tr>
                                            <td class="acyfield_name acy_requiredField"><label for='phone'>Phone Number:</label></td>
                                            <td class="acyfield_name acy_requiredField"><input type='tel' id='phone' name='phone' required></td>
										</tr><tr>
                                            <td class="acyfield_name acy_requiredField"><label for='message'>Message:</label></td>
                                            <td class="acyfield_name acy_requiredField"><textarea id='message' name='message' rows='4' cols='40' required></textarea></td>
										</tr>
		                            </table>
                                    <input class="button subbutton btn btn-primary" type='submit' value='Contact Us'>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="uk-width-1-1 uk-width-medium-1-2">
                        <div class="uk-panel uk-panel-header uk-text-center" style="min-height: 250px;">
	                        <h3 class="uk-panel-title">Quick Links</h3>
                            <p>Sign-up to our Mailing List</p>
                            <div class="acymailing_module" id="acymailing_module_formAcymailing59081">
	                            <div class="acymailing_fulldiv" id="acymailing_fulldiv_formAcymailing59081">
		                            <form id="signup" action="signup.php" method="post">
		                                <div class="acymailing_module_form">
						                    <table class="acymailing_form">
				                                <tr>
        											<td class="acyfield_name acy_requiredField"><label for='name'>Name:</label></td>
													<td class="acyfield_name acy_requiredField"><input id="listname" type="text" name="listname" required></td>
					                            </tr><tr>
        											<td class="acyfield_name acy_requiredField"><label for='name'>Email Address:</label></td>
								                    <td class="acyfield_email acy_requiredField"><input id="listemail" type="text" name="listemail" required></td>
					                            </tr>
					                        </table>
    										<input class="button subbutton btn btn-primary" type="submit" value="Subscribe" name="signsubmit">
									    </div>
                        		    </form>

                                    <button onclick="document.getElementById('popup').style.display='block'" style="font-size:12px;padding:2px">Admin</button>
                                    <div id="popup" style="display:none;">
                                        Enter Password
                                        <input type="password" id="password" size="10">
                                        <button onclick="checkPassword()" style="font-size:12px;padding:2px">Submit</button>
                                        <p id="msg"></p>
                                    </div>

	                            </div>
                    	    </div>
                            <!--<ul class="uk-list uk-list-line">
                                <li><a href="index.php/community">Online Community</a></li>
                                <li><a href="index.php/dob-events">Events</a></li>
                                <li><a href="index.php/members">Membership</a></li>
                            </ul>-->
                        </div>
                    </div>
                </section>
    			<section class="tm-bottom-c uk-grid tm-grid-block" data-uk-grid-match="{target:'> div > .uk-panel'}">
                    <div class="uk-width-1-1">
                        <div class="uk-panel">
        	                <div class="uk-grid">
                                <div class="uk-width-1-1 uk-width-medium-1-3" style="float: right;">
                                    <ul class="uk-float-right tm-social-icons">
                                	    <li><a class="uk-icon-button" href="https://www.facebook.com/defenceinbusiness"><img src="images/facebook.png"></a></li>
                                	    <li><a class="uk-icon-button" href="https://www.linkedin.com/groups/Defence-in-Business-1938071/about"><img src="images/LinkedIn2.png"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    			<footer class="tm-footer">
    				<!--<a data-uk-smooth-scroll="" href="#">Top</a>-->
    				<div class="uk-panel">
                    	<p><br class="uk-hidden-large uk-hidden-medium">Copyright © 2015 <a href="http://defenceinbusiness.com" target="_blank">defenceinbusiness.com.</a> All Rights Reserved.</p>
                	</div>
    			</footer>
    		</div>
    	</div>
    </div>

</body>



</html>

