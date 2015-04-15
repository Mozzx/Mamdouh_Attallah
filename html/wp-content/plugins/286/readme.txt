=== Theme Instructions ===
MICRO THEME INSTALLATION INSTRUCTIONS:
http://www.themeover.com/install-a-micro-theme-with-microthemer-or-microloader/
FIND MORE STEP BY STEP TUTORIALS AT: 
http://www.themeover.com/support/microthemer-tutorials/
GET SUPPORT AT: 
http://www.themeover.com/forum/


== Contents ==
1. Example Contact Form 7 Markup To Adapt When Using This Plugin Style


== Example Contact Form 7 Markup == 
When creating this skin for Contact Form 7 I used the following markup. You will probably want to change this for your particular form but pay attention to the formula it follows. Namely, a label followed by a line break followed by the form field shortcode, all contained within paragraph tags:

<p>Your Name (required)<br />
    [text* your-name] </p>

<p>Your Email (required)<br />
    [email* your-email] </p>

<p>Subject<br />
    [text your-subject] </p>

<p>Your Message<br />
    [textarea your-message] </p>

<p>Select Color<br />
 [select menu-242 "Red" "Blue" "Green" "Purple"]</p>

<p>Select Size<br />
[checkbox checkbox-56 "Small" "Medium" "Large"]</p>

<p>Select Brightness<br />
 [radio radio-212 "Light" "Dark"]</p>

<p>[captchac captcha-301]<br />
[captchar captcha-301]</p>

<p>[submit "Send"]</p>


== Changelog ==
1.2 (8 May, 2013)
Error messages no longer display as red overlays. Contact Form 7 changed the functionality of the error message system and so the CSS in this skin had to be updated. This is an important update. Keeping the old skin with the latest version of Contact Form 7 will result in usability problems (the user won't be able to correct fields with an error).

Also, CSS targets inputs more general so when type="date" or type="phone" inputs are added the styling doesn't break.

1.1 Updated the Text Input Selector to accommodate inputs with a "type" attribute of email and file.