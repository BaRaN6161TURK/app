<?php
/** Internationalization file for /extensions/wikia/FounderEmails/FounderEmails extension. */
$messages = [];

$messages['en'] = [
	'founderemails-desc' => 'Helps informing founders about changes on their wiki',
	'tog-founderemailsenabled' => 'E-mail me updates on what other people are doing (founders only)',
	'founderemails-email-user-registered-greeting' => 'Hi $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Congratulations! $EDITORNAME has just joined $WIKINAME.',
	'founderemails-email-user-registered-content' => 'Take this opportunity to welcome them to your wiki and encourage them to help edit. The more the merrier, and the faster your wiki will grow.',
	'founderemails-email-user-registered-signature' => 'The Wikia Team',
	'founderemails-email-user-registered-button' => 'Welcome Them',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '$WIKINAME has a new edit!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Hi $USERNAME,

All right! $EDITORNAME has just made their very first edit on $WIKINAME.

Head over to $PAGETITLE to check out what they added.

$PAGEURL

The Wikia Team',
	'founderemails-email-first-edit-greeting' => 'Hi $USERNAME,',
	'founderemails-email-first-edit-headline' => 'All right! $EDITORNAME has just made their very first edit on $WIKINAME.',
	'founderemails-email-first-edit-content' => 'Head over to $PAGETITLE to check out what they added.',
	'founderemails-email-first-edit-signature' => 'The Wikia Team',
	'founderemails-email-first-edit-button' => 'Check it out!',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Hey $USERNAME,<br /><br />
It looks like registered user $EDITORNAME has edited your wiki for the first time! Why don\'t you drop by their <a href="$EDITORTALKPAGEURL">talkpage</a> to say hello?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- The Wikia Team</div>',
	'founderemails-email-page-edited-reg-user-subject' => 'New edit on $WIKINAME!',
	'founderemails-email-page-edited-reg-user-body' => 'Hi $USERNAME,

$EDITORNAME just made another edit to the $WIKINAME on $PAGETITLE.

Head over to $PAGETITLE to see what they\'ve changed.

$PAGEURL

The Wikia Team',
	'founderemails-email-general-edit-greeting' => 'Hi $USERNAME,',
	'founderemails-email-general-edit-headline' => '$EDITORNAME just made another edit to the $WIKINAME on $PAGETITLE.',
	'founderemails-email-general-edit-content' => 'Head over to $PAGETITLE to check out what they added.',
	'founderemails-email-general-edit-signature' => 'The Wikia Team',
	'founderemails-email-general-edit-button' => 'Check it out!',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Hey $USERNAME,<br /><br />
It looks like registered user $EDITORNAME has edited your wiki! Why don\'t you drop by their <a href="$EDITORTALKPAGEURL">talkpage</a> to say hello?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- The Wikia Team</div>',
	'founderemails-email-page-edited-anon-subject' => 'A mysterious friend edited $WIKINAME',
	'founderemails-email-page-edited-anon-body' => 'Hi $USERNAME,

A Wikia Contributor has just made an edit to $PAGETITLE on $WIKINAME.

Wikia Contributors are people who make edits without logging in to a Wikia account. Go see what this mysterious friend added!

$PAGEURL

The Wikia Team',
	'founderemails-email-anon-edit-greeting' => 'Hi $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'A Wikia Contributor has just made an edit to $PAGETITLE on $WIKINAME.',
	'founderemails-email-anon-edit-content' => 'Wikia Contributors are people who make edits without logging in to a Wikia account. Go see what this mysterious friend added!',
	'founderemails-email-anon-edit-signature' => 'The Wikia Team',
	'founderemails-email-anon-edit-button' => 'Check it out!',
	'founderemails-email-page-edited-anon-body-HTML' => 'Hey $USERNAME,<br /><br />
It looks like someone has edited your wiki! Why don\'t you <a href="$MYHOMEURL">check it out</a> to see what changed?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- The Wikia Team</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'Registered user changed your site for the first time!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Hey $USERNAME,

It looks like registered user $EDITORNAME has edited your wiki for the first time! Why don\'t you drop by their talkpage ($EDITORTALKPAGEURL) to say hello?

-- The Wikia Team',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'Hey $USERNAME,<br /><br />
It looks like registered user $EDITORNAME has edited your wiki for the first time! Why don\'t you drop by their <a href="$EDITORTALKPAGEURL">talkpage</a> to say hello?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- The Wikia Team</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Registered user changed your site!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Hey $USERNAME,

It looks like registered user $EDITORNAME has edited your wiki! Why don\'t you drop by their talkpage ($EDITORTALKPAGEURL) to say hello?

-- The Wikia Team',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => 'Hey $USERNAME,<br /><br />
It looks like registered user $EDITORNAME has edited your wiki! Why don\'t you drop by their <a href="$EDITORTALKPAGEURL">talkpage</a> to say hello?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- The Wikia Team</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'Someone changed your site!',
	'founderemails-answers-email-page-edited-anon-body' => 'Hey $USERNAME,

It looks like someone has edited your wiki! Why don\'t you check it out $MYHOMEURL to see what changed?

-- The Wikia Team',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Hey $USERNAME,<br /><br />
It looks like someone has edited your wiki! Why don\'t you <a href="$MYHOMEURL">check it out</a> to see what changed?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- The Wikia Team</div>',
	'founderemails-lot-happening-subject' => '$WIKINAME is heating up!',
	'founderemails-lot-happening-body' => 'Hi $USERNAME,

Congratulations there\'s a lot going on at $WIKINAME, $WIKIURL.

If you haven\'t already, you can go to Wiki Activity and see all of the great work that\'s been happening.

Since there\'s so much going on, you might also want to change your email preferences to digest mode. With digest mode on you\'ll receive one email that lists all of the activity on your wiki each day.

The Wikia Team',
	'founderemails-lot-happening-body-HTML' => 'Hey $USERNAME,<br /><br />
There\'s a lot happening on your wiki today! Drop by $MYHOMEURL to see what\'s been going on.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- The Wikia Team</div>',
	'founderemails-email-lot-happening-greeting' => 'Hi $USERNAME,',
	'founderemails-email-lot-happening-headline' => 'Congratulations there\'s a lot going on at $WIKINAME today!',
	'founderemails-email-lot-happening-content' => 'If you haven\'t already, you can go to Wiki Activity and see all of the great work that\'s been happening.  Since there\'s so much going on, you might also want to change your email preferences to digest mode. With digest mode on you\'ll receive one email that lists all of the activity on your wiki each day.',
	'founderemails-email-lot-happening-signature' => 'The Wikia Team',
	'founderemails-email-lot-happening-button' => 'See Activities',
	'founderemails-email-footer-line1' => 'To check out the latest happenings on Wikia, visit <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>',
	'founderemails-email-footer-line2' => 'Want to control which emails you receive? Go to your <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">Preferences</a>',
	'founderemails-email-footer-line3' => '<a href="http://www.twitter.com/wikia" style="text-decoration:none">
<img alt="twitter" src="http://images4.wikia.nocookie.net/wikianewsletter/images/f/f7/Twitter.png" style="border:none">
</a>
&nbsp;
<a href="http://www.facebook.com/wikia" style="text-decoration:none">
<img alt="facebook" src="http://images2.wikia.nocookie.net/wikianewsletter/images/5/55/Facebook.png" style="border:none">
</a>
&nbsp;
<a href="http://www.youtube.com/wikia" style="text-decoration:none">
<img alt="youtube" src="http://images3.wikia.nocookie.net/wikianewsletter/images/a/af/Youtube.png" style="border:none">
</a>
&nbsp;
<a href="https://community.fandom.com/wiki/Blog:Wikia_Staff_Blog" style="text-decoration:none">
<img alt="wikia" src="http://images1.wikia.nocookie.net/wikianewsletter/images/b/be/Wikia_blog.png" style="border:none">
</a>',
	'founderemails-email-0-day-heading' => 'Nice to meet you $USERNAME,',
	'founderemails-email-0-day-congratulations' => 'Congratulations on creating $HDWIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'Here are a few helpful tips to get you started:',
	'founderemails-email-0-day-addpages-heading' => 'Add pages.',
	'founderemails-email-0-day-addpages-content' => 'A wiki is all about sharing information about your unique topic.  Create pages by clicking on <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">"Add a Page"</a> and fill out more specific information about your topic.',
	'founderemails-email-0-day-addpages-button' => 'Add a Page',
	'founderemails-email-0-day-addphotos-heading' => 'Add photos.',
	'founderemails-email-0-day-addphotos-content' => 'Pages are always better when they have visuals!  Add photos to your pages and to your main page.  You can click <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"Add a Photo"</a> to add a photo, a photo gallery, or a slideshow.',
	'founderemails-email-0-day-addphotos-button' => 'Add a Photo',
	'founderemails-email-0-day-customizetheme-heading' => 'Customize your theme.',
	'founderemails-email-0-day-customizetheme-content' => 'Customize your wiki\'s theme and wordmark to make your wiki stand out!  Use the <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">Theme Designer</a> to add custom colors to your wiki and make it unique to your topic.',
	'founderemails-email-0-day-customizetheme-button' => 'Customize',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">We won\'t leave you out in the cold.</span>  We\'re here to help you make $WIKINAME successful every step of the way.  Visit <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a> for forums, advice, and help, or to <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">email us</a> your questions!',
	'founderemails-email-0-day-wikiahelps-signature' => 'Happy wiki building!<br />The Wikia Team',
	'founderemails-email-3-day-heading' => 'Hi there $USERNAME,',
	'founderemails-email-3-day-congratulations' => 'We wanted to check in and see how things are going at $HDWIKINAME.',
	'founderemails-email-3-day-tips-heading' => 'It\'s been 3 days since you started and we thought we\'d drop by to offer some more tips on building your wiki:',
	'founderemails-email-3-day-editmainpage-heading' => 'Spruce up your main page.',
	'founderemails-email-3-day-editmainpage-content' => 'The main page is one of the first things people see when they visit <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a>.  Make a good first impression by writing a detailed summary of what your topic is about and adding a slideshow, gallery, or photo slider.',
	'founderemails-email-3-day-editmainpage-button' => 'Spruce It Up',
	'founderemails-email-3-day-addphotos-heading' => 'Add even more photos.',
	'founderemails-email-3-day-addphotos-content' => 'One of the best ways to make your pages snap, crackle, and pop is to <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"add some photos"</a>.',
	'founderemails-email-3-day-addphotos-button' => 'Add Photos',
	'founderemails-email-3-day-explore-heading' => 'Find inspiration.',
	'founderemails-email-3-day-explore-content' => 'Don\'t be afraid to check out other wikis to see how they\'ve worked out their main page, articles pages and more.  Here are some of our favorites: <a style="color:#2a87d5;text-decoration:none;" href="http://muppets.wikia.com">Muppet Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://poptarts.wikia.com">Pop Tarts Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://monsterhigh.wikia.com">Monster High Wiki</a>.',
	'founderemails-email-3-day-explore-button' => 'Explore',
	'founderemails-email-3-day-wikiahelps-text' => 'Need help figuring out how something works?  We\'re always here for you!  Come ask us for help and advice at <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-3-day-wikiahelps-signature' => 'Keep up the great work!<br />The Wikia Team',
	'founderemails-email-10-day-heading' => 'How\'s it going $USERNAME?',
	'founderemails-email-10-day-congratulations' => 'Whoa, time flies!  It\'s already been 10 days since you started $HDWIKINAME.',
	'founderemails-email-10-day-tips-heading' => 'Get others involved in your project and show off all the awesome work you\'ve been doing!  Here are some ways to spread the word:',
	'founderemails-email-10-day-share-heading' => 'Didn\'t your mother tell you to Share?',
	'founderemails-email-10-day-share-content' => 'Use the Share button on your wiki\'s main page, article pages and photos to show them off to your friends and followers on Facebook.',
	'founderemails-email-10-day-email-heading' => 'Harness the power of email.',
	'founderemails-email-10-day-email-content' => 'Email others you know who are interested in your topic or interested in helping you, like a friend from school or a co-worker.  You can also email specific photos from your wiki using the email button',
	'founderemails-email-10-day-join-heading' => 'Join up with similar websites.',
	'founderemails-email-10-day-join-content' => 'Ask people on other forums or websites that are about your topic for help by posting in their forums or comments.  If possible, contact the administrator and see if they\'re interested in link-sharing &mdash; they\'ll put your wiki link on their website if you put their link on your wiki.',
	'founderemails-email-10-day-wikiahelps-text' => 'You can also ask other Wikians to help out on your wiki by posting in the forums on <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-10-day-wikiahelps-signature' => 'Keep up the good work!<br />The Wikia Team',
	'founderemails-email-views-digest-subject' => 'Today\'s views on $WIKINAME',
	'founderemails-email-views-digest-body' => 'Hi $USERNAME,

Today $WIKINAME was viewed by $1 {{PLURAL:$1|person|people}}.

Keep adding new content and promoting your wiki to encourage more people to read, edit and spread the word.

$WIKIURL

The Wikia Team',
	'founderemails-email-views-digest-greeting' => 'Hi $USERNAME,',
	'founderemails-email-views-digest-headline' => 'Today $WIKINAME was viewed by $1 {{PLURAL:$1|person|people}}.',
	'founderemails-email-views-digest-content' => 'Keep adding new content and promoting your wiki to encourage more people to read, edit and spread the word.',
	'founderemails-email-views-digest-signature' => 'The Wikia Team',
	'founderemails-email-views-digest-button' => 'Add more pages',
	'founderemails-email-complete-digest-subject' => 'The latest activity on $WIKINAME',
	'founderemails-email-complete-digest-body' => 'Hi $USERNAME,

It\'s time for your daily dose of activity from $WIKINAME, $WIKIURL.

$1 {{PLURAL:$1|person|people}} viewed your wiki.

Keep up the great work adding interesting content for people to read!

$2 {{PLURAL:$2|edit was|edits were}} made.

Happy editors make happy wikis. Make sure to thank your editors and check in with them from time to time.

$3 {{PLURAL:$3|person|people}} joined your wiki.

Welcome new people to your wiki with a talk page message.

You can always head over to wiki activity to view all of the exciting changes being made on $WIKINAME. Check in often, as the founder your community looks to you to help guide and run the wiki.

The Wikia Team',
	'founderemails-email-complete-digest-greeting' => 'Hi $USERNAME,',
	'founderemails-email-complete-digest-headline' => 'It\'s time for your daily dose of activity from $WIKINAME.',
	'founderemails-email-complete-digest-content-heading1' => '$1 {{PLURAL:$1|person|people}} viewed your wiki.',
	'founderemails-email-complete-digest-content1' => 'Keep up the great work adding interesting content for people to read!',
	'founderemails-email-complete-digest-content-heading2' => '$1 {{PLURAL:$1|edit was|edits were}} made.',
	'founderemails-email-complete-digest-content2' => 'Happy editors make happy wikis. Make sure to thank your editors and check in with them from time to time.',
	'founderemails-email-complete-digest-content-heading3' => '$1 {{PLURAL:$1|person|people}} joined your wiki.',
	'founderemails-email-complete-digest-content3' => 'Welcome new people to your wiki with a talk page message.
<br /><br />
You can always head over to wiki activity to view all of the exciting changes being made on $WIKINAME. Check in often, as the founder your community looks to you to help guide and run the wiki.',
	'founderemails-email-complete-digest-signature' => 'The Wikia Team',
	'founderemails-email-complete-digest-button' => 'Go to wiki activity',
	'founderemails-pref-joins' => 'Email me when someone joins $1',
	'founderemails-pref-edits' => 'Email me when someone edits $1',
	'founderemails-pref-views-digest' => 'Send me a daily email telling me how many times $1 was viewed',
	'founderemails-pref-complete-digest' => 'Send me a daily digest of activity on $1',
	'founderemails-pref-joins-v2' => '...someone joins',
	'founderemails-pref-edits-v2' => '...someone edits',
	'founderemails-pref-views-digest-v2' => '...a daily summary of total views is ready',
	'founderemails-pref-complete-digest-v2' => '...a Daily Digest of joins, edits, and views is ready',
];

$messages['qqq'] = [
	'founderemails-desc' => '{{desc}}',
	'founderemails-email-user-registered-content' => '{{doc-singularthey}}',
	'founderemails-email-page-edited-reg-user-first-edit-body' => '{{doc-singularthey}}',
	'founderemails-email-first-edit-headline' => '{{doc-singularthey}}',
	'founderemails-email-first-edit-content' => '{{doc-singularthey}}',
	'founderemails-email-first-edit-button' => '{{Identical|Check it out}}',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => '{{doc-singularthey}}',
	'founderemails-email-page-edited-reg-user-body' => '{{doc-singularthey}}',
	'founderemails-email-general-edit-content' => '{{doc-singularthey}}',
	'founderemails-email-general-edit-button' => '{{Identical|Check it out}}',
	'founderemails-email-page-edited-reg-user-body-HTML' => '{{doc-singularthey}}',
	'founderemails-email-anon-edit-button' => '{{Identical|Check it out}}',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => '{{doc-singularthey}}',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => '{{doc-singularthey}}',
	'founderemails-answers-email-page-edited-reg-user-body' => '{{doc-singularthey}}',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => '{{doc-singularthey}}',
	'founderemails-email-0-day-addpages-heading' => '{{Identical|Add page}}',
	'founderemails-email-0-day-addpages-button' => '{{Identical|Add page}}',
	'founderemails-email-0-day-addphotos-button' => '{{Identical|Add photo}}',
	'founderemails-email-0-day-customizetheme-button' => '{{Identical|Customize}}',
	'founderemails-email-views-digest-subject' => '"views" means site views/visits.',
	'founderemails-email-complete-digest-body' => 'Documentation for id (Indonesian):
* No specific singular or plural word in id.
* Satu dan lebih dari satu tidak dibedakan.',
	'founderemails-email-complete-digest-greeting' => '',
	'founderemails-pref-views-digest' => 'Parameters:
* $1 is a wiki name',
	'founderemails-pref-complete-digest' => 'Parameters:
* $1 is a wiki name.',
];

$messages['af'] = [
	'founderemails-email-3-day-heading' => 'Hallo $USERNAME!',
];

$messages['ar'] = [
	'founderemails-desc' => 'يساعد على إعلام المؤسسين حول التغييرات في الويكي الخاصة بهم',
	'tog-founderemailsenabled' => 'أرسل لي بريدا إلكترونيا حول التحديثات عما يقوم به الأشخاص الآخرون (للمؤسسين فقط)',
	'founderemails-email-user-registered-greeting' => 'مرحبا يا $USERNAME،',
	'founderemails-email-user-registered-headline' => 'تهانينا! $EDITORNAME قد {{GERNDER:$EDITORNAME|انضم|انضمت|انضم}} إلى $WIKINAME.',
	'founderemails-email-user-registered-content' => 'انتهز هذه الفرصة للترحيب بهم في الويكي الخاصة بك وتشجيعهم على المساعدة بالتحرير. كلما زادت الفرحة، كلما نمت الويكي الخاصة بك أسرع.',
	'founderemails-email-user-registered-signature' => 'فريق ويكيا',
	'founderemails-email-user-registered-button' => 'رحب بهم',
	'founderemails-email-first-edit-greeting' => 'مرحباً $USERNAME,',
	'founderemails-email-first-edit-headline' => 'حسنًا! $EDITORNAME قد قاموا للتو بتعديلهم الأول على WIKINAME.',
	'founderemails-email-first-edit-content' => 'انطلق إلى $PAGETITLE لتتفحص ما أضافوا.',
	'founderemails-email-first-edit-signature' => 'طاقم ويكيا',
	'founderemails-email-first-edit-button' => 'التحقق من ذلك!',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'مرحبًا $USERNAME،<br /><br />
يبدو أن $EDITORNAME قد {{GENDER:$EDITORNAME|عدل|عدلت|عدل}} الويكي الخاصة بك للمرة الأولى! لمَ لا تزور <a href="$EDITORTALKPAGEURL"> صفحة {{GENDER:$EDITORNAME|نقاشه|نقاشها|نقاشه}}</a> للترحيب؟<br /><br />
<div style="font-style: italic; font-size: 120%;">-- فريق ويكيا</div>',
	'founderemails-email-page-edited-reg-user-subject' => 'تعديل جديد في $WIKINAME!',
	'founderemails-email-page-edited-reg-user-body' => 'مرحبًا $USERNAME،

$EDITORNAME قد {{GENDER:$EDITORNAME|قام|قامت|قام}} بتعديل آخر على $WIKINAME على $PAGETITLE.

انطلق إلى $PAGETITLE لترَ ما {{GENDER:$EDITORNAME|قام|قامت|قام}} بتغييره.

$PAGEURL

فريق ويكيا',
	'founderemails-email-general-edit-greeting' => 'مرحباً $USERNAME,',
	'founderemails-email-general-edit-headline' => '$EDITORNAME قد {{GENDER:$EDITORNAME|قام|قامت|قام}} بتعديل آخر على $WIKINAME على $PAGETITLE.',
	'founderemails-email-general-edit-content' => 'انطلق إلى $PAGETITLE لتتفحص ما أضافوا.',
	'founderemails-email-general-edit-signature' => 'فريق ويكيا',
	'founderemails-email-general-edit-button' => 'التحقق من ذلك!',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'مرحبًا $USERNAME،<br /><br />
يبدو أن {{GENDER:$EDITORNAME|المستخدم|المستخدمة|المستخدم}} $EDITORNAME قد {{GENDER:$EDITORNAME|قام|قامت|قام}} بالتحرير في الويكي الخاصة بك! لمَ لا تزور <a href="$EDITORTALKPAGEURL">{{GENDER:$EDITORNAME|نقاشه|نقاشها|نقاشه}}</a> للترحيب؟<br /><br />
<div style="font-style: italic; font-size: 120%;">-- فريق ويكيا</div>',
	'founderemails-email-page-edited-anon-subject' => 'صديق غامض عدل $WIKINAME',
	'founderemails-email-page-edited-anon-body' => 'مرحبًا $USERNAME،

مساهم بويكيا قد قام بتعديل $PAGETITLE على $WIKINAME.

مساهمو ويكيا هم أشخاص قاموا بالتحرير بدون تسجيل دخولهم بمستخدم ويكيا. اذهب لترى ماذا أضاف هذا الصديق الغامض!

$PAGEURL

فريق ويكيا',
	'founderemails-email-anon-edit-greeting' => 'مرحباً $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'مساهم ويكيا قد قام بتعديل على $PAGETITLE على $WIKINAME.',
	'founderemails-email-anon-edit-content' => 'مساهمو ويكيا هم أشخاص قاموا بالتحرير بدون تسجيل دخولهم بمستخدم ويكيا. اذهب لترى ماذا أضاف هذا الصديق الغامض!',
	'founderemails-email-anon-edit-signature' => 'طاقم ويكيا',
	'founderemails-email-anon-edit-button' => 'التحقق من ذلك!',
	'founderemails-email-page-edited-anon-body-HTML' => 'مرحبًا $USERNAME،<br /><br />
يبدو أن شخصًا ما قد قام بتحرير الويكي الخاصة بك! لمَ لا <a href="$MYHOMEURL">تفحص الأمر</a> لترى ما الذي تغير؟<br /><br />
<div style="font-style: italic; font-size: 120%;">-- فريق ويكيا</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'قام مستخدم مسجل بتعديل في الويكي الخاصة بك للمرة الأولى!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'مرحبًا $USERNAME،

يبدو أن {{GENDER:$EDITORNAME|المستخدم|المستخدمة|المستخدم}} $EDITORNAME قد {{GENDER:$EDITORNAME|عدل|عدلت|عدل}} الويكي الخاصة بك للمرة الأولى! لمَ لا تزور صفحة {{GENDER:$EDITORNAME|نقاشه|نقاشها|نقاشه}} ($EDITORTALKPAGEURL) للترحيب؟

-- فريق ويكيا',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'مرحبًا $USERNAME،<br /><br />
يبدو أن $EDITORNAME قد {{GENDER:$EDITORNAME|عدل|عدلت|عدل}} الويكي الخاصة بك للمرة الأولى! لمَ لا تزور <a href="$EDITORTALKPAGEURL"> صفحة {{GENDER:$EDITORNAME|نقاشه|نقاشها|نقاشه}}</a> للترحيب؟<br /><br />
<div style="font-style: italic; font-size: 120%;">-- فريق ويكيا</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'قام مستخدم مسجل بتعديل في الويكي الخاصة بك!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'مرحبًا $USERNAME،

يبدو أن {{GENDER:$EDITORNAME|المستخدم|المستخدمة|المستخدم}} $EDITORNAME قد {{GENDER:$EDITORNAME|عدل|عدلت|عدل}} الويكي الخاصة بك للمرة الأولى! لمَ لا تزور صفحة {{GENDER:$EDITORNAME|نقاشه|نقاشها|نقاشه}} ($EDITORTALKPAGEURL) للترحيب؟

-- فريق ويكيا',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => 'مرحبًا $USERNAME،<br /><br />
يبدو أن {{GENDER:$EDITORNAME|المستخدم|المستخدمة|المستخدم}} $EDITORNAME قد {{GENDER:$EDITORNAME|قام|قامت|قام}} بالتحرير في الويكي الخاصة بك! لمَ لا تزور <a href="$EDITORTALKPAGEURL">{{GENDER:$EDITORNAME|نقاشه|نقاشها|نقاشه}}</a> للترحيب؟<br /><br />
<div style="font-style: italic; font-size: 120%;">-- فريق ويكيا</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'قام أحد ما بتعديل في الويكي الخاصة بك!',
	'founderemails-answers-email-page-edited-anon-body' => 'مرحبًا $USERNAME،

يبدو أن شخصًا ما قد عدل الويكي الخاصة بك! لمَ لا تزور $MYHOMEURL لترى ما الذي تغير؟

-- فريق ويكيا',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'مرحبًا $USERNAME،<br /><br />
يبدو أن شخصًا ما قد قام بتحرير الويكي الخاصة بك! لمَ لا <a href="$MYHOMEURL">تفحص الأمر</a> لترى ما الذي تغير؟<br /><br />
<div style="font-style: italic; font-size: 120%;">-- فريق ويكيا</div>',
	'founderemails-lot-happening-subject' => 'هناك نشاط كثيف في $WIKINAME',
	'founderemails-lot-happening-body' => 'مرحبًا $USERNAME،

تهانينا، يوجد الكثير من الأمور تحدث على $WIKINAME، $WIKIURL.

إن لم تكن تعلم، يمكنك الذهاب إلى نشاط الويكي لترى العمل العظيم الذي يحدث.

لأن هناك الكثير يحدث، قد تحتاج إلى تغيير تفضيلات بريدك الإلكتروني إلى وضع الخلاصة. بتفعيل وضع الخلاصة، ستتلقى رسالة واحدة تسرد كل الأنشطة على الويكي كل يوم.

فريق ويكيا',
	'founderemails-lot-happening-body-HTML' => 'مرحبًا $USERNAME،<br /><br />
يوجد الكثير من الأمور تحدث على الويكي الخاصة بك اليوم! قم بزيارة $MYHOMEURL لترى ما يحدث.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- فريق ويكيا</div>',
	'founderemails-email-lot-happening-greeting' => 'مرحباً $USERNAME,',
	'founderemails-email-lot-happening-headline' => 'تهانينا، يوجد الكثير من الأمور تحدث على $WIKINAME اليوم!',
	'founderemails-email-lot-happening-content' => 'إن لم تكن تعلم، يمكنك الذهاب إلى نشاط الويكي لترى العمل العظيم الذي يحدث.  لأن هناك الكثير يحدث، قد تحتاج إلى تغيير تفضيلات بريدك الإلكتروني إلى وضع الخلاصة. بتفعيل وضع الخلاصة، ستتلقى رسالة واحدة تسرد كل الأنشطة على الويكي كل يوم.',
	'founderemails-email-lot-happening-signature' => 'فريق ويكيا',
	'founderemails-email-lot-happening-button' => 'انظر الأنشطة',
	'founderemails-email-footer-line1' => 'للتحقق من آخر الأحداث في ويكيا، قم بزيارة <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>',
	'founderemails-email-footer-line2' => 'تريد التحكم في رسائل البريد التي تتلقاها منا؟ انتقل إلى <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">تفضيلاتك</a>',
	'founderemails-email-0-day-heading' => 'نتشرف بمعرفتك يا $USERNAME',
	'founderemails-email-0-day-congratulations' => 'تهانينا على إنشاء $HDWIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'هذه بعض النصائح المفيد التي تساعدك على البداية:',
	'founderemails-email-0-day-addpages-heading' => 'إضافة صفحات.',
	'founderemails-email-0-day-addpages-content' => 'الويكي هي مشروع يشارك المعلومات عن موضوعك الفريد.  أنشئ صفحات بالضغط على <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">"أضف صفحة"</a> واكتب معلومات محددة أكثر عن موضوعك.',
	'founderemails-email-0-day-addpages-button' => 'أضف صفحة',
	'founderemails-email-0-day-addphotos-heading' => 'إضافة صور.',
	'founderemails-email-0-day-addphotos-content' => 'الصفحات دائمًا أفضل عندما يكون لديها وسائط مرئية! أضف صورًا لصفحاتك وصفحتك الرئيسية. يمكنك الضغط على <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"أضف صورة"</a> لإضافة صورة أو معرض صور أو عارض شرائح.',
	'founderemails-email-0-day-addphotos-button' => 'أضف صورة',
	'founderemails-email-0-day-customizetheme-heading' => 'تخصيص مظهرك',
	'founderemails-email-0-day-customizetheme-content' => 'قم بتخصيص تصميم الويكي الخاصة بك وشعارها لتجعل الويكي تنهض!  قم باستخدام <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">مصمم الويكي</a> لإضافة ألوان مخصصة للويكي ولجعلها فريدة لموضوعك.',
	'founderemails-email-0-day-customizetheme-button' => 'تخصيص',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">لن نتركك خارجًا في البرد.</span> إننا هنا لمساعدتك لتجعل $WIKINAME ناجحة في كل خطوة في الطريق. قم بزيارة <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.wikia.com</a> للمنتديات والنصيحة والمساعدة أو لكي <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">ترسل إلينا</a> استفسارتك!',
	'founderemails-email-0-day-wikiahelps-signature' => 'إنشاء ويكي سعيد!<br />فريق ويكيا',
	'founderemails-email-3-day-heading' => 'مرحبًا $USERNAME،',
	'founderemails-email-3-day-congratulations' => 'لقد أردنا أن نتحقق ونرى كيف تسير الأمور في $HDWIKINAME.',
	'founderemails-email-3-day-tips-heading' => 'مرت 3 أيام منذ أن أنشأتها وقد فكرنا بالمرور عليك لتقديم مزيد من التلميحات لإنشاء الويكي الخاصة بك:',
	'founderemails-email-3-day-editmainpage-heading' => 'نظم صفحتك الرئيسية.',
	'founderemails-email-3-day-editmainpage-content' => 'الصفحة الرئيسية هي من أوائل الأشياء التي يراها الناس عندما يزورون <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a>. قم بوضع انطباع أوليّ جيد بكتابة ملخص تفصيلي عن موضوع الويكي الخاصة بك وقم بإضافة عارض شرائح أو معرض صور أو شريط تمرير صور.',
	'founderemails-email-3-day-editmainpage-button' => 'نظم',
	'founderemails-email-3-day-addphotos-heading' => 'أضف صور أكثر.',
	'founderemails-email-3-day-addphotos-content' => 'من أفضل الطرق لجعل صفحاتك مفاجئة هي <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"بإضافة بعض الصور"</a>.',
	'founderemails-email-3-day-addphotos-button' => 'أضف صور',
	'founderemails-email-3-day-explore-heading' => 'العثور على الإلهام.',
	'founderemails-email-3-day-explore-content' => 'لا تكن خائفًا من تصفح الويكيات الأخرى لترى كيف صمموا صفحتها الرئيسية وصفحات مقالاتها والمزيد. إليك بعض الويكيات المفضلة لدينا: <a style="color:#2a87d5;text-decoration:none;" href="http://muppets.wikia.com">ويكي الدمى</a>، <a style="color:#2a87d5;text-decoration:none;" href="http://poptarts.wikia.com">ويكي فطائر البوب</a>، <a style="color:#2a87d5;text-decoration:none;" href="http://monsterhigh.wikia.com">ويكي الوحوش العالية</a>.',
	'founderemails-email-3-day-explore-button' => 'استكشاف',
	'founderemails-email-3-day-wikiahelps-text' => 'أتحتاج المساعدة لمعرفة كيف يعمل شيء ما؟ إننا هنا دائمًا لأجلك! تعالَ واطلب منا المساعدة والنصيحة في<a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-3-day-wikiahelps-signature' => 'استمر في العمل الجيد!<br />فريق ويكيا',
	'founderemails-email-10-day-heading' => 'كيف حالك يا $USERNAME؟',
	'founderemails-email-10-day-congratulations' => 'الوقت يطير! مرت 10 أيام منذ إنشائك ل$HDWIKINAME.',
	'founderemails-email-10-day-tips-heading' => 'أحضر أشخاصًا آخرين مهتمين بمشروعك وأظهر كل العمل الرائع الذي قمت به! إليك بعض الطرق للنشر:',
	'founderemails-email-10-day-share-heading' => 'ألم يعلمك أهلك المشاركة؟',
	'founderemails-email-10-day-share-content' => 'استخدم زر المشاركة على صفحة الويكي الرئيسية وصفحات المقالات والصور لتعرضها على أصدقائك ومتابعيك على الفيس بوك.',
	'founderemails-email-10-day-email-heading' => 'تسخير قوة البريد الإلكتروني.',
	'founderemails-email-10-day-email-content' => 'راسل أشخاصًا آخرين تعرفهم مهتمين بموضوعك أو مهتمين بمساعدتك، كصديق من المدرسة أو زميل عمل. يمكنك أيضًا إرسال صور محددة من الويكي الخاصة بك باستخدام زر المراسلة',
	'founderemails-email-10-day-join-heading' => 'الالتحاق بالمواقع المشابهة',
	'founderemails-email-10-day-join-content' => 'اطلب المساعدك من أشخاص على منتديات أو مواقع أخرى تتحدث عن موضوعك بالنشر في منتدياتهم أو التعليقات. إن كان الأمر ممكنًا، اتصل بالإدارة ولترَ إن كانوا مهتمين في مشاركة الروابط &mdash; أي أنهم سيضعون رابط الويكي الخاصة بك على مواقعم إن وضعت روابط مواقعهم على الويكي الخاصة بك.',
	'founderemails-email-10-day-wikiahelps-text' => 'يمكنك أيضًا أن تطلب المساعدة من ويكيين آخرين ليساعدوك بالويكي الخاصة بك بالنشر في منتديات <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-10-day-wikiahelps-signature' => 'استمر في العمل الجيد!<br />فريق ويكيا',
	'founderemails-email-views-digest-subject' => 'مشاهدات $WIKINAME لهذا اليوم',
	'founderemails-email-views-digest-body' => 'مرحبًا $USERNAME،

اليوم، زار $WIKINAME {{PLURAL:$1|شخص|$1 أشخاص|$1 شخص}}.

واصل إضافة محتوى جديد وتطوير الويكي الخاصة بك لتشجع المزيد من الناس للقراءة والتعديل والنشر.

$WIKIURL

فريق ويكيا',
	'founderemails-email-views-digest-greeting' => 'مرحباً $USERNAME،',
	'founderemails-email-views-digest-headline' => 'تمت مشاهدة $WIKINAME اليوم من قبل $1 {{PLURAL:$1|شخص|أشخاص}}.',
	'founderemails-email-views-digest-content' => 'واصل إضافة محتوى جديد وتطوير الويكي الخاصة بك لتشجع المزيد من الناس للقراءة والتعديل والنشر.',
	'founderemails-email-views-digest-signature' => 'فريق ويكيا',
	'founderemails-email-views-digest-button' => 'أضف المزيد من الصفحات',
	'founderemails-email-complete-digest-subject' => 'النشاط الأخير في $WIKINAME',
	'founderemails-email-complete-digest-body' => 'مرحبًا $USERNAME،

حان وقت الجرعة اليومية من نشاط $WIKINAME، $WIKIURL.

زار $1 {{PLURAL:$1|شخص|أشخاص}} الويكي الخاصة بك.

واصل العمل الجيد بإضافة محتوى ليقرأه الناس!

حدثت $2 {{PLURAL:$2|تعديل|تعديلات}}.

المحررون السعداء يصنعون ويكيات سعيدة. تأكد من أن تشكر المحررين وتدخل معهم من حين لآخر.

$3 {{PLURAL:$3|شخص انضم|أشخاص انضموا}} إلى الويكي.

رحب بالقادمين الجدد للويكي برسالة على صفحة نقاشهم.

يمكنك دائمًا التوجه إلى نشاط الويكي لرؤية جميع التغييرات المثيرة التي قاموا بها على $WIKINAME. قم بالدخول غالبًا، بصفتك المؤسس فإن المجتمع يبحث عنك للمساعدة بالإرشاد وتشغيل الويكي.

فريق ويكيا',
	'founderemails-email-complete-digest-greeting' => 'مرحباً $USERNAME,',
	'founderemails-email-complete-digest-headline' => 'حان وقت جرعتك اليومية من نشاط $WIKINAME.',
	'founderemails-email-complete-digest-content-heading1' => '$1 {{PLURAL:$1|شخص|أشخاص}} شاهدوا الويكي الخاصة بك.',
	'founderemails-email-complete-digest-content1' => 'واصل العمل الجيد بإضافة محتوى مثير للاهتمام للناس حتى تقرأه!',
	'founderemails-email-complete-digest-content-heading2' => 'حدث {{PLURAL:$1|تعديل واحد|2=تعديلان|$1 تعديلات|$1 تعديل}}',
	'founderemails-email-complete-digest-content2' => 'المحررون السعداء ينشؤون ويكيات سعيدة. تأكد من أن تشكر محرري الويكي وتدخل معهم من وقت لآخر.',
	'founderemails-email-complete-digest-content-heading3' => 'انضم {{PLURAL:$1|شخص واحد|2=شخصان|$1 أشخاص|$1 شخص}}',
	'founderemails-email-complete-digest-content3' => 'رحب بالقادمين الجدد للويكي برسالة على صفحة نقاشهم.
<br /><br />
يمكنك دائمًا التوجه إلى نشاط الويكي لرؤية جميع التغييرات المثيرة التي قاموا بها على $WIKINAME. قم بالدخول غالبًا، بصفتك المؤسس فإن المجتمع يبحث عنك للمساعدة بالإرشاد وتشغيل الويكي.',
	'founderemails-email-complete-digest-signature' => 'فريق ويكيا',
	'founderemails-email-complete-digest-button' => 'مشاهدة نشاط الويكي',
	'founderemails-pref-joins' => 'أرسل لي بريدا الكترونيا عندما ينضم شخص ما إلى $1',
	'founderemails-pref-edits' => 'أرسل لي بريدا الكترونيا عندما يقوم شخص ما بتعديل في $1',
	'founderemails-pref-views-digest' => 'أرسل لي بريدا الكترونيا يوميا لتقول لي كم عدد المرات التي تمت مشاهدة $1 فيها',
	'founderemails-pref-complete-digest' => 'أرسل لي موجز يوميا حول النشاط في $1',
	'founderemails-pref-joins-v2' => '... ينضم شخص ما',
	'founderemails-pref-edits-v2' => '... يقوم شخص ما بتعديل',
	'founderemails-pref-views-digest-v2' => '... ملخص يومي للمشاهدات جاهز',
	'founderemails-pref-complete-digest-v2' => '... موجز يومي خاص بالتسجيلات، التعديلات، والمشاهدات جاهز',
];

$messages['az'] = [
	'founderemails-email-user-registered-greeting' => 'Salam, $USERNAME',
	'founderemails-email-first-edit-greeting' => 'Salam, $USERNAME',
	'founderemails-email-general-edit-greeting' => 'Salam, $USERNAME',
	'founderemails-email-lot-happening-greeting' => 'Salam, $USERNAME',
	'founderemails-email-0-day-addphotos-heading' => 'Əlavə şəkillər.',
	'founderemails-email-0-day-addphotos-button' => 'Şəkil əlavə et',
	'founderemails-email-complete-digest-greeting' => 'Salam $USERNAME,',
];

$messages['bg'] = [
	'founderemails-email-user-registered-signature' => 'Екипът на Wikia',
	'founderemails-email-first-edit-signature' => 'Екипът на Wikia',
	'founderemails-email-general-edit-signature' => 'Екипът на Wikia',
	'founderemails-email-page-edited-anon-subject' => 'Тайнствен приятел редактира $WIKINAME',
	'founderemails-email-page-edited-anon-body' => 'Здрасти, $USERNAME,

Редактор на Уикия току що направи редакция на страницата $PAGETITLE в $WIKINAME.

Уикия редакторите са хора, които допринасят без да са влезли със сметката си в Wikia. Можете да отидете и да видите как е допринесъл за уикито този тайнствен приятел!

$PAGEURL

Екипът на Уикия',
	'founderemails-email-anon-edit-signature' => 'Екипът на Wikia',
	'founderemails-email-lot-happening-signature' => 'Екипът на Wikia',
	'founderemails-email-0-day-addpages-heading' => 'Добавяне на страници.',
	'founderemails-email-0-day-addpages-button' => 'Добавяне на страница',
	'founderemails-email-0-day-addphotos-heading' => 'Добавяне на снимки.',
	'founderemails-email-0-day-addphotos-button' => 'Добавяне на снимка',
	'founderemails-email-3-day-addphotos-button' => 'Добавяне на снимки',
	'founderemails-email-views-digest-signature' => 'Екипът на Wikia',
	'founderemails-email-complete-digest-signature' => 'Екипът на Wikia',
];

$messages['br'] = [
	'founderemails-desc' => 'Skoazellañ a ra da gelaouiñ ar grouerien pa vez degaset kemmoù en o wikioù',
	'tog-founderemailsenabled' => 'Kas din hizivadennoù eus ar pezh a ra an dud all (diazezerien hepken)',
	'founderemails-email-user-registered-greeting' => 'Ac\'hanta $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Gourc\'hemennoù ! $EDITORNAME zo o paouez en em gavout gant $WIKINAME.',
	'founderemails-email-user-registered-signature' => 'Skipailh Wikia',
	'founderemails-email-user-registered-button' => 'Degemerit anezho',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => 'Ur c\'hemm nevez a zo war $WIKINAME !',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Ac\'hanta $USERNAME,

Evit doare eo bet kemmet evit ar wech kentañ ho wiki gant an implijer enrollet $EDITORNAME ! Perak ned afec\'h ket da saludiñ anezhañ war e bajenn kaozeal ($EDITORTALKPAGEURL) ?

-- Skipailh Wikia',
	'founderemails-email-first-edit-greeting' => 'Ac\'hanta $USERNAME,',
	'founderemails-email-first-edit-headline' => 'Dreist ! Emañ $EDITORNAME o paouez ober e gemmadur kentañ e $WIKINAME.',
	'founderemails-email-first-edit-content' => 'Kit war $PAGETITLE evit gwelet petra zo bet ouzhpennet gantañ.',
	'founderemails-email-first-edit-signature' => 'Skipailh Wikia',
	'founderemails-email-first-edit-button' => 'Gwiriekaat !',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Ac\'hanta $USERNAME,<br /><br />
Evit doare eo bet kemmet evit ar wech kentañ ho wiki gant an implijer enrollet $EDITORNAME ! Perak ned afec\'h ket da saludiñ anezhañ war <a href="$EDITORTALKPAGEURL">e bajenn kaozeal</a> ?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Skipailh Wikia</div>',
	'founderemails-email-page-edited-reg-user-subject' => 'Ur c\'hemm nevez a zo war $WIKINAME !',
	'founderemails-email-page-edited-reg-user-body' => 'Salud deoc\'h, $USERNAME !

Evit doare eo bet kemmet ho wiki gant an implijer enrollet $EDITORNAME ! Perak ned afec\'h ket da saludiñ anezhañ war e bajenn kaozeal ?

-- Skipailh Wikia',
	'founderemails-email-general-edit-greeting' => 'Ac\'hanta $USERNAME,',
	'founderemails-email-general-edit-headline' => '$EDITORNAME zo o paouez ober un aozadenn all da $WIKINAME war $PAGETITLE.',
	'founderemails-email-general-edit-content' => 'Kit da $PAGETITLE evit gwelet petra zo bet ouzhpennet dezhañ.',
	'founderemails-email-general-edit-signature' => 'Skipailh Wikia',
	'founderemails-email-general-edit-button' => 'Gwiriekaat !',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Ac\'hanta, $USERNAME,<br /><br />
Evit doare eo bet kemmet ho wiki gant an implijer enrollet $EDITORNAME ! Perak ned afec\'h ket da saludiñ anezhañ war <a href="$EDITORTALKPAGEURL">e bajenn kaozeal</a> ?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Skipailh Wikia</div>',
	'founderemails-email-page-edited-anon-subject' => 'Ur mignon dianv en deus kemmet $WIKINAME',
	'founderemails-email-page-edited-anon-body' => 'Ac\'hanta $USERNAME,

Evit doare eo bet kemmet ho wiki gant an implijer enrollet $USERNAME ! Perak ned afec\'h ket da welet war $MYHOMEURL ar pezh zo kemmet ?

-- Skipailh Wikia',
	'founderemails-email-anon-edit-greeting' => 'Ac\'hanta $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'Ur c\'henlabourer Wikia zo o paouez ober un aozadenn da $PAGETITLE war $WIKINAME.',
	'founderemails-email-anon-edit-signature' => 'Skipailh Wikia',
	'founderemails-email-anon-edit-button' => 'Gwiriekaat !',
	'founderemails-email-page-edited-anon-body-HTML' => 'Ac\'hanta $USERNAME,
Evit doare eo bet kemmet ho wiki gant an implijer enrollet $USERNAME ! Perak ned afec\'h ket <a href="$MYHOMEURL">da welet ar pezh zo kemmet</a> ?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Skipailh Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'Evit ar wech kentañ eo bet kemmet ho lec\'hienn gant ur implijer enrollet !',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Ac\'hanta $USERNAME !

Evit doare eo bet kemmet ho wiki evit ar wech kentañ gant an implijer enrollet $EDITORNAME ! Perak ned afec\'h ket da saludiñ anezhañ war e bajenn kaozeal ($EDITORTALKPAGEURL) ?

-- Skipailh Wikia',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'Ac\'hanta $USERNAME,<br /><br />
Evit doare eo bet kemmet evit ar wech kentañ ho wiki gant an implijer enrollet $EDITORNAME ! Perak ned afec\'h ket da saludiñ anezhañ war <a href="$EDITORTALKPAGEURL">e bajenn kaozeal</a> ?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Skipailh Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Gant un implijer enrollet eo bet kemmet ho lec\'hienn !',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Ac\'hanta $USERNAME,

Evit doare eo bet kemmet ho wiki gant an implijer enrollet $EDITORNAME ! Perak ned afec\'h ket da saludiñ anezhañ war e bajenn kaozeal ($EDITORTALKPAGEURL) ?

-- Skipailh Wikia',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => 'Ac\'hanta $USERNAME,<br /><br />
Evit doare eo bet kemmet ho wiki gant an implijer enrollet $EDITORNAME ! Perak ned afec\'h ket da saludiñ anezhañ war <a href="$EDITORTALKPAGEURL">e bajenn kaozeal</a> ?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Skipailh Wikia</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'Unan bennak en deus kemmet ho lec\'hienn !',
	'founderemails-answers-email-page-edited-anon-body' => 'Ac\'hanta $USERNAME,

Evit doare eo bet kemmet ho wiki gant an implijer enrollet $USERNAME ! Perak ned afec\'h ket da welet war $MYHOMEURLe ar pezh zo kemmet ?

-- Ar skipailh Wikia',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Ac\'hanta $USERNAME,<br /><br />
Seblantout a ra en defe unan bennak kemmet ho wiki ! Perak ne yafec\'h ket <a href="$MYHOMEURL">da welet petra \'zo bet kemmet</a> ?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Skipailh Wikia</div>',
	'founderemails-lot-happening-subject' => 'Un toullad traoù a c\'hoarvez war $WIKINAME !',
	'founderemails-lot-happening-body' => 'Demat dit $USERNAME,

Ur bern traoù a c\'hoarvez war ho wiki hiziv ! Kit war $MYHOMEURL da welet penaos emaén kont.

-- Skipailh Wikia',
	'founderemails-lot-happening-body-HTML' => 'Demat dit $USERNAME,<br /><br />
Ur bern traoù a c\'hoarvez war ho wiki hiziv ! Kit war $MYHOMEURL da welet penaos emañ kont.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Skipailh wikia</div>',
	'founderemails-email-lot-happening-greeting' => 'Ac\'hanta $USERNAME,',
	'founderemails-email-lot-happening-headline' => 'Gourc\'hemennoù ! Kalz traoù a c\'hoarvez e $WIKINAME hiziv !',
	'founderemails-email-lot-happening-signature' => 'Skipailh Wikia',
	'founderemails-email-lot-happening-button' => 'Gwelet an obererezh',
	'founderemails-email-footer-line1' => 'Evit gwelet darvoudoù ziwezhañ Wikia, kit war <a style="color:#2a87d5;text-decoration:none;" href="http://communaute.wikia.com">communaute.wikia.com</a>',
	'founderemails-email-footer-line2' => 'Ha c\'hoant hoc\'h eus merañ ar posteloù a resevit ? Kit \'ta amañ : <a href="$WIKIURL/wiki/Special:Preferences" style="color:#2a87d5;text-decoration:none;">$WIKIURL/wiki/Special:Preferences</a>',
	'founderemails-email-0-day-heading' => 'Ur blijadur eo anavezout ac\'hanoc\'h $USERNAME,',
	'founderemails-email-0-day-congratulations' => 'Gourc’hemennoù evit krouidigezh $WIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'Setu un nebeut kuzulioù talvoudus evit sikour ac\'hanoc\'h da gregiñ e-barzh :',
	'founderemails-email-0-day-addpages-heading' => 'Ouzhpennañ pajennoù.',
	'founderemails-email-0-day-addpages-content' => 'Pal ur wiki zo rannañ titouroù diwar ho penn dreist-holl. Krouit pajeennoù en ur glikañ  war  <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">Ouzhpennit ur bajenn </a> ha klokait gant  titouroù dibarekoc\'h a sell ouzhoc\'h.',
	'founderemails-email-0-day-addpages-button' => 'Ouzhpennañ ur bajenn',
	'founderemails-email-0-day-addphotos-heading' => 'Ouzhpennañ skeudennoù.',
	'founderemails-email-0-day-addphotos-button' => 'Ouzhpennañ ur skeudenn',
	'founderemails-email-0-day-customizetheme-heading' => 'Personelaat ho todenn.',
	'founderemails-email-0-day-customizetheme-button' => 'Personelaat',
	'founderemails-email-0-day-wikiahelps-signature' => 'Plijadur deoc\'h evit sevel ho wiki !<br />Skipailh Wikia',
	'founderemails-email-3-day-heading' => 'Demat dit $USERNAME,',
	'founderemails-email-3-day-congratulations' => 'C\'hoant hon doa da dremen ha gwelet penaos emañ an traoù o vont war $WIKINAME.',
	'founderemails-email-3-day-editmainpage-heading' => 'Kinklit ho pajenn bennañ.',
	'founderemails-email-3-day-editmainpage-button' => 'Kinklit anezhañ',
	'founderemails-email-3-day-addphotos-heading' => 'Ouzhpennañ muioc\'h c\'hoazh a skeudennoù.',
	'founderemails-email-3-day-addphotos-button' => 'Ouzhpennañ skeudennoù',
	'founderemails-email-3-day-explore-heading' => 'Kavout awen.',
	'founderemails-email-3-day-explore-button' => 'Ergerzhout',
	'founderemails-email-3-day-wikiahelps-signature' => 'Kendalc\'hit gant ho labour dispar !<br />Skipailh Wikia',
	'founderemails-email-10-day-heading' => 'Penaos \'mañ kont $USERNAME ?',
	'founderemails-email-10-day-congratulations' => 'Hopala, buan e tremen an amzer ! 10 deiz zo dija oc\'h krog gant $HDWIKINAME.',
	'founderemails-email-10-day-share-heading' => 'N\'eus ket bet lavaret deoc\'h ez eo dav rannañ an traoù ?',
	'founderemails-email-10-day-email-heading' => 'Amprouit galloud ar posteloù.',
	'founderemails-email-10-day-join-heading' => 'Mont e darempred gant lec\'hiennoù heñvel.',
	'founderemails-email-10-day-wikiahelps-signature' => 'Kendalc\'hit gant ho labour dispar !<br />Skipailh Wikia',
	'founderemails-email-views-digest-subject' => 'Gweladennoù hiziv war $WIKINAME',
	'founderemails-email-views-digest-body' => 'Ac\'hanta $USERNAME,

Hziv eo bet gwelet $WIKINAME gant $1 {{PLURAL:$1|den}}.

Kendalc\'hit da ouzhpennañ danvez ha da brudañ ho wiki evit broudañ muioc\'h a dud da lenn, da gemmañ ha da lakaat ar ger da dremen.

$WIKIURL

Skipailh Wikia',
	'founderemails-email-views-digest-greeting' => 'Ac\'hanta $USERNAME,',
	'founderemails-email-views-digest-headline' => 'Hiziv eo bet gweladennet $WIKINAME gant $UNIQUEVIEWS den.',
	'founderemails-email-views-digest-content' => 'Kendalc\'hit da ouzhpennañ danvez ha da brudañ ho wiki evit broudañ muioc\'h a dud da lenn, da gemmañ ha da lakaat ar ger da dremen.',
	'founderemails-email-views-digest-signature' => 'Skipailh Wikia',
	'founderemails-email-views-digest-button' => 'Ouzhpennañ muioc\'h a bajennoù',
	'founderemails-email-complete-digest-subject' => 'An obererezh nevesañ war $WIKINAME',
	'founderemails-email-complete-digest-greeting' => 'Ac\'hanta $USERNAME,',
	'founderemails-email-complete-digest-headline' => 'Poent eo d\'ober ho tamm labour pemdeziek war $WIKINAME.',
	'founderemails-email-complete-digest-content-heading1' => '$UNIQUEVIEWS den o deus gweladennet ho wiki.',
	'founderemails-email-complete-digest-content1' => 'Dalc\'hit gant ho labour mat hag ouzhpennit titouroù dedennus da lenn !',
	'founderemails-email-complete-digest-content-heading2' => '$USEREDITS kemm a zo bet graet.',
	'founderemails-email-complete-digest-content-heading3' => '$1 {{PLURAL:$1|den|a dud}} zo emezelet en ho wiki.',
	'founderemails-email-complete-digest-signature' => 'Skipailh Wikia',
	'founderemails-email-complete-digest-button' => 'Mont da oberiantiz ar wiki',
	'founderemails-pref-joins' => 'Kas ur postel din pa stag unan bennak gant $1.',
	'founderemails-pref-edits' => 'Kas ur postel din pa vez kemmet $1 gant unan bennak',
	'founderemails-pref-views-digest' => 'Kas din ur postel bemdez evit lavaret din pet gwech eo bet gweladennet $1',
	'founderemails-pref-complete-digest' => 'Kas din bemdez un diverrañ eus an oberiantiz war $1',
	'founderemails-pref-joins-v2' => '...unan bennak zo emezelet',
	'founderemails-pref-edits-v2' => '...ur c\'hemm \'vez graet gant unan bennak',
	'founderemails-pref-views-digest-v2' => '...prest eo un diverrañ pemdeziek eus an holl weladennoù',
];

$messages['ca'] = [
	'founderemails-desc' => 'Ajuda a informar els fundadors sobre els canvis que van ocórrer al seu wiki',
	'tog-founderemailsenabled' => 'Envieu-me per correu electrònic les actualitzacions que fan altres persones (només fundadors)',
	'founderemails-email-user-registered-greeting' => 'Hola $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Felicitats! $EDITORNAME s\'ha registrat a $WIKINAME.',
	'founderemails-email-user-registered-content' => 'Aprofita aquesta oportunitat per donar-li la benvinguda i animar-lo a que editi al wiki. Com més gent, millor i més ràpid creixerà el teu wiki.',
	'founderemails-email-user-registered-signature' => 'L\'Equip de Wikia',
	'founderemails-email-user-registered-button' => 'Dona-li la benvinguda',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '$WIKINAME té una nova edició!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Hola $USERNAME,

Molt bé! $EDITORNAME acaba de fer la seva primera edició a $WIKINAME.

Fes un cop d\'ull a $PAGETITLE per veure el que va afegir.

-- L\'equip de Wikia',
	'founderemails-email-first-edit-greeting' => 'Hola $USERNAME,',
	'founderemails-email-first-edit-headline' => 'Molt bé! $EDITORNAME acaba de fer la seva primera edició a $WIKINAME.',
	'founderemails-email-first-edit-content' => 'Fes un cop d\'ull a $PAGETITLE per veure el que va afegir.',
	'founderemails-email-first-edit-signature' => 'L\'Equip de Wikia',
	'founderemails-email-first-edit-button' => 'Fes-li un cop d\'ull!',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Ei $USERNAME,<br /><br />
Sembla que l\'usuari registrat $EDITORNAME ha editat al teu wiki per primera vegada! Per què no et passes per la seva <a href="$EDITORTALKPAGEURL">pàgina de discussió</a> per saludar-lo?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- L\'equip de Wikia</div>',
	'founderemails-email-page-edited-reg-user-subject' => 'Nova edició a $WIKINAME!',
	'founderemails-email-page-edited-reg-user-body' => 'Hola $USERNAME,

$EDITORNAME acaba de fer una altra edició a $WIKINAME en $PAGETITLE.

Fes un cop d\'ull a $PAGETITLE per veure el que ha canviat.

-- L\'equip de Wikia',
	'founderemails-email-general-edit-greeting' => 'Hola $USERNAME,',
	'founderemails-email-general-edit-headline' => '$EDITORNAME acaba de fer una altra edició a $WIKINAME en $PAGETITLE.',
	'founderemails-email-general-edit-content' => 'Fes un cop d\'ull a $PAGETITLE per veure el que ha canviat.',
	'founderemails-email-general-edit-signature' => 'L\'Equip de Wikia',
	'founderemails-email-general-edit-button' => 'Fes-li un cop d\'ull!',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Ei $USERNAME,<br /><br />
Sembla que l\'usuari registrat $EDITORNAME ha editat al teu wiki! Per què no et passes per la seva <a href="$EDITORTALKPAGEURL">pàgina de discussió</a> per saludar-lo?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- L\'equip de Wikia</div>',
	'founderemails-email-page-edited-anon-subject' => 'Un amic misteriós va editar a $WIKINAME',
	'founderemails-email-page-edited-anon-body' => 'Hola $USERNAME,

Un col·laborador de Wikia acaba de fer una edició a $WIKINAME en $PAGETITLE.

Els col·laboradors de Wikia són persones que fan edicions sense iniciar sessió amb un compte registrat. Mira el que aquest amic misteriós ha afegit!

-- L\'equip de Wikia',
	'founderemails-email-anon-edit-greeting' => 'Hola $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'Un col·laborador de Wikia acaba de fer una edició a $PAGETITLE en $WIKINAME.',
	'founderemails-email-anon-edit-content' => 'Els col·laboradors de Wikia són persones que fan edicions sense iniciar sessió amb un compte registrat. Mira el que aquest amic misteriós ha afegit!',
	'founderemails-email-anon-edit-signature' => 'L\'Equip de Wikia',
	'founderemails-email-anon-edit-button' => 'Fes-li un cop d\'ull!',
	'founderemails-email-page-edited-anon-body-HTML' => 'Ei $USERNAME,<br /><br />
Sembla que algú ha editat al teu wiki! Per què no <a href="$MYHOMEURL">fas un cop d\'ull< a>per veure què ha canviat?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- L\'equip de Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'Un usuari registrat va fer canvis al teu lloc per primera vegada!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Ei $USERNAME,

Sembla que l\'usuari registrat $EDITORNAME ha editat el teu wiki per primera vegada! Per què no vas a la pàgina de discussió ($EDITORTALKPAGEURL) i li saludes?

-- L\'equip de Wikia',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'Ei $USERNAME,<br /><br />
Sembla que l\'usuari registrat $EDITORNAME ha editat el teu wiki per primera vegada! Per què no vas a la seva <a href="$EDITORTALKPAGEURL">pàgina de discussió</a> i li dius hola?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- L\'equip de Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Un usuari registrat va fer canvis al teu lloc!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Ei $USERNAME,

Sembla que $EDITORNAME s\'ha registrat al teu wiki! Per què no vas a la pàgina de discussió $EDITORTALKPAGEURL per saludar?

-- L\'equip de Wikia',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => 'Ei $USERNAME,<br /><br />
Sembla que l\'usuari registrat $EDITORNAME ha editat el teu wiki per primera vegada! Per què no vas a la seva <a href="$EDITORTALKPAGEURL">pàgina de discussió</a> i li dius hola?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- L\'equip de Wikia</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'Algú ha canviat el seu lloc!',
	'founderemails-answers-email-page-edited-anon-body' => 'Hola $USERNAME,

 sembla que algú s\'ha editat el wiki! Per què no fes una ullada a $MYHOMEURL per veure què ha canviat?

-- L\'Equip De Wikia',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Ei $USERNAME,<br /><br />
Sembla que algú ha editat al teu wiki! Per què no <a href="$MYHOMEURL">fas un cop d\'ull< a>per veure què ha canviat?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- L\'equip de Wikia</div>',
	'founderemails-lot-happening-subject' => 'Han ocorregut moltes coses en $WIKINAME!',
	'founderemails-lot-happening-body' => 'Hola $USERNAME,

Hi ha moltes coses a $WIKINAME, $WIKIURL Felicitats.

Si vol podeu anar a l\'activitat Wiki i veure tot el gran treball que ha estat passant.

Ja que hi ha tantes coses, també podria voler canviar les preferències de correu electrònic a mode de digerir. Amb digestió mode a vostè rebrà un correu electrònic que enumera totes de l\'activitat en el seu wiki cada dia.

L\'equip de Wikia',
	'founderemails-lot-happening-body-HTML' => 'Hola $USERNAME,<br /><br />
Hi ha un munt de coses que succeeix en el seu wiki avui! Passar per $MYHOMEURL per veure el que ha estat passant.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- La Wikia Equip</div>',
	'founderemails-email-lot-happening-greeting' => 'Hola $USERNAME,',
	'founderemails-email-lot-happening-headline' => 'Felicitats hi ha molt succeint a $WIKINAME avui!',
	'founderemails-email-lot-happening-content' => 'Si encara no ho has fet, pots anar a Wiki Activitat i veure tot en gran treball que ha estat passant. Atès que hi ha molta activitat, potser vulguis canviar les preferències de correu electrònic a manera resumida. Amb la manera resumida només rebràs un missatge de correu electrònic amb una llista de tota l\'activitat diària de la teva wiki.',
	'founderemails-email-lot-happening-signature' => 'L\'Equip De Wikia',
	'founderemails-email-lot-happening-button' => 'Veure Activitats',
	'founderemails-email-footer-line1' => 'Per comprovar les últimes novetats en Wikia, visita <a style="color:#2a87d5;text-decoration:none;" href="http://ca.wikia.com">ca.wikia.com</a>',
	'founderemails-email-footer-line2' => 'Desitges controlar els correus electrònics que reps? Vés a les teves <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">preferències</a>',
	'founderemails-email-0-day-heading' => 'Encantat de conèixer $USERNAME,',
	'founderemails-email-0-day-congratulations' => 'Enhorabona per la creació d\'$HDWIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'Aquí hi ha alguns consells útils per començar:',
	'founderemails-email-0-day-addpages-heading' => 'Afegir pàgines.',
	'founderemails-email-0-day-addpages-content' => 'Una wiki és tot sobre compartir informació sobre el teu tema. Crea pàgines fent clic a <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL"> "Afegeix una pàgina" </ a> i plena més informació específica sobre el tema.',
	'founderemails-email-0-day-addpages-button' => 'Afegiu una pàgina',
	'founderemails-email-0-day-addphotos-heading' => 'Afegir fotos.',
	'founderemails-email-0-day-addphotos-content' => '¡Les pàgines sempre són millors quan tenen imatges! Afegeix imatges a les teves pàgines ia la pàgina d\'inici. Pots fer clic a <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL"> "Afegeix una imatge" </ a> per afegir una imatge, una galeria d\'imatges o una seqüència de diapositives.',
	'founderemails-email-0-day-addphotos-button' => 'Afegeix una foto',
	'founderemails-email-0-day-customizetheme-heading' => 'Personalitzar el seu tema.',
	'founderemails-email-0-day-customizetheme-content' => 'Personalitza el tema i el wordmark per destacar el teu wiki! Utilitza el <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL"> Dissenyador de Temes </ a> per afegir colors personalitzats al teu wiki i fer-la única al teu tema.',
	'founderemails-email-0-day-customizetheme-button' => 'Personalitzar',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">no Us deixarà fora en el fred.</span> estem aquí per ajudar-vos a fer $WIKINAME èxit en cada pas del camí. Visiteu <a style="color:#2a87d5;text-decoració:none;" href="https://community.fandom.com">community.fandom.com</a> per a fòrums, consells i ajuda, o a <a style="color:#2a87d5;text-decoració:none;" href="http://www.wikia.com/Especial:Contacte">correu electrònic</a> vostres preguntes!',
	'founderemails-email-0-day-wikiahelps-signature' => 'Feliç construcció de la teva wiki! <br /> L\'Equip de Wikia',
	'founderemails-email-3-day-heading' => 'Hola $USERNAME,',
	'founderemails-email-3-day-congratulations' => 'Hem volgut comprovar i veure com van les coses a $HDWIKINAME.',
	'founderemails-email-3-day-tips-heading' => 'Han passat 3 dies des que vau començar i pensem que podem oferir alguns consells més en la construcció de la seva wiki:',
	'founderemails-email-3-day-editmainpage-heading' => 'Arreglar la teva pàgina principal.',
	'founderemails-email-3-day-editmainpage-content' => 'La pàgina principal és una de les primeres coses que les persones veuen quan visiten <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;"> $ WIKINAME </ a>. Fes una bona impressió en escriure un resum detallat sobre el que tracta un tema i afegeix una presentació de diapositives, una galeria o una presentació d\'imatges.',
	'founderemails-email-3-day-editmainpage-button' => 'Fes-la atractiva',
	'founderemails-email-3-day-addphotos-heading' => 'Afegir encara més fotos.',
	'founderemails-email-3-day-addphotos-content' => 'Una de les millors maneres de fer la seva pàgina és  <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"afegir algunes fotos"</a>.',
	'founderemails-email-3-day-addphotos-button' => 'Afegir fotos.',
	'founderemails-email-3-day-explore-heading' => 'Troba la inspiració.',
	'founderemails-email-3-day-explore-content' => 'No tinguis por a visitar altres wikis per veure com han treballat les seves pàgines principals, articles i més. Aquí hi ha algunes de les nostres favorites: <a style="color:#2a87d5;text-decoration:none;" href="http://es.memory-alpha.org"> Memory Alpha </ a>, <a style = "color: # 2a87d5; text-decoration: none;" href = "http://es.ben10.wikia.com"> Ben 10 </ a>, <a style = "color: # 2a87d5; text-decoration : none; "href =" http://es.gta.wikia.com "> Grand Theft Encyclopedia </ a>.',
	'founderemails-email-3-day-explore-button' => 'Explorar',
	'founderemails-email-3-day-wikiahelps-text' => 'Necessita ajuda per esbrinar com funciona alguna cosa? Sempre estem aquí per a vostè! Vine a demanar-nos ajuda i assessorament a <a style="color:#2a87d5;text-decoració:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-3-day-wikiahelps-signature' => 'Bona feina!<br />L\'Equip De Wikia',
	'founderemails-email-10-day-heading' => 'Com t\'està anant $nom d\'USUARI?',
	'founderemails-email-10-day-congratulations' => 'Wow, el temps vola! Que ja han estat 10 dies des que vau començar a $HDWIKINAME.',
	'founderemails-email-10-day-tips-heading' => 'Involucra altres en el teu projecte i mostra a tots el gran treball que has estat fent! Aquí hi ha algunes maneres de difondre:',
	'founderemails-email-10-day-share-heading' => 'La seva mare no li va dirà Compartir?',
	'founderemails-email-10-day-share-content' => 'Utilitzar el botó compartir del seu wiki en la pàgina principal, pàgines d\'articles i fotos per lluir-los als seus amics i seguidors a Facebook.',
	'founderemails-email-10-day-email-heading' => 'Aprofitar el poder del correu electrònic.',
	'founderemails-email-10-day-email-content' => 'Envia missatges de correu electrònic a altres que coneguin i estiguin interessats en el teu wiki o interessats en ajudar-te, com un amic de l\'escola o un company de treball. A més pots enviar imatges específiques de la teva wiki utilitzant el botó de correu electrònic.',
	'founderemails-email-10-day-join-heading' => 'Unir-se a llocs web similars.',
	'founderemails-email-10-day-join-content' => 'Pregunta a les persones en altres fòrums o llocs web relacionats amb el teu tema a la recerca d\'ajuda. Si és possible, l\'administrador, pots veure si estan interesandos en fer un intercanvi d\'enllaç - ells posarien teu enllaç a la wiki al seu lloc web si tu poses el seu enllaç al teu wiki.',
	'founderemails-email-10-day-wikiahelps-text' => 'Vostè també pot demanar altres Wikians per ajudar a la teva wiki amb la publicació en fòrums a <a style="color:#2a87d5;text-decoració:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-10-day-wikiahelps-signature' => 'Bona feina!<br />L\'equip de Wikia',
	'founderemails-email-views-digest-subject' => 'Visites avui a $WIKINAME',
	'founderemails-email-views-digest-body' => 'Hola $USERNAME,

Avui $WIKINAME ha estat visitada per $1 {{PLURAL:$1|persona|persones}}.

Continua afegint contingut nou i millorant la teva viqui per animar més persones a llegir, editar i córrer la veu.

$WIKIURL

- L\'Equip de Wikia',
	'founderemails-email-views-digest-greeting' => 'Hola $USERNAME,',
	'founderemails-email-views-digest-headline' => 'Avui $WIKINAME ha estat visitada per $1 {{PLURAL:$1|persona|persones}}.',
	'founderemails-email-views-digest-content' => 'Seguir afegint nous continguts i promoure el seu wiki per animar més gent a llegir, editar i difondre la paraula.',
	'founderemails-email-views-digest-signature' => 'L\'Equip De Wikia',
	'founderemails-email-views-digest-button' => 'Afegeix més pàgines',
	'founderemails-email-complete-digest-subject' => 'L\'última activitat sobre $WIKINAME',
	'founderemails-email-complete-digest-body' => 'Hola $ USERNAME,

És moment de la teva dosi diària de l\'activitat a $ WIKINAME, $ WIKIURL.

$ 1 {{PLURAL:$1|persona|persones}} han visitat teu wiki.

¡Mantingueu el gran treball afegint contingut interessant perquè la gent el llegeixi!

Es {{PLURAL:$2|ha|han}} realitzat $ 2 {{PLURAL: $ 2 | edició | edicions}}.

Editors feliços fan feliç al wiki. Assegura\'t agrair als teus editors i comunica\'t amb ells de tant en tant.

$ 3 {{PLURAL:$3|usuari|usuaris}} es van unir al wiki.

Dóna-li la benvinguda als usuaris nous amb un missatge a les seves pàgines de discussió.

Sempre pots fer-li un cop d\'ull a la Wiki Activitat per a tots els canvis existents fets a $ WIKINAME. Revisa\'ls freqüentment, com a fundador la comunitat buscarà teva orientació.

- L\'Equip de Wikia',
	'founderemails-email-complete-digest-greeting' => 'Hola $USERNAME,',
	'founderemails-email-complete-digest-headline' => 'És el moment per a la seva dosi diària d\'activitat a partir de $WIKINAME.',
	'founderemails-email-complete-digest-content-heading1' => '<span class="notranslate" traduir="no">$1</span> <span class="notranslate" traduir="no">{{PLURAL:$1|</span>persona|persones}} ha vist el vostre wiki.',
	'founderemails-email-complete-digest-content1' => 'Mantenir el gran treball d\'afegir contingut interessant per a la gent a llegir!',
	'founderemails-email-complete-digest-content-heading2' => '<span class="notranslate" traduir="no">$1</span> <span class="notranslate" traduir="no">{{PLURAL:$1|</span>edita va|edicions s\'han }} fet.',
	'founderemails-email-complete-digest-content2' => 'Editors feliços fan feliç al wiki. Assegura\'t agrair als teus editors i comunica\'t amb ells de tant en tant.',
	'founderemails-email-complete-digest-content-heading3' => '<span class="notranslate" traduir="no">$1</span> <span class="notranslate" traduir="no">{{PLURAL:$1|</span>persona|persones}} incorporat a la wiki.',
	'founderemails-email-complete-digest-content3' => 'Dóna-li la benvinguda als usuaris nous amb un missatge a les seves pàgines de discussió.
<br /> <br />
Sempre pots fer-li un cop d\'ull a la Wiki Activitat per a tots els canvis existents fets a $ WIKINAME. Revisa\'ls freqüentment, com a fundador, la comunitat buscarà teva orientació.',
	'founderemails-email-complete-digest-signature' => 'L\'Equip de Wikia',
	'founderemails-email-complete-digest-button' => 'Anar a la Wikia Activitat',
	'founderemails-pref-joins' => 'Envia\'m un correu electrònic quan algú s\'uneix <span class="notranslate" traduir="no">$1</span>',
	'founderemails-pref-edits' => 'Envia\'m un correu electrònic quan algú edita <span class="notranslate" traduir="no">$1</span>',
	'founderemails-pref-views-digest' => 'Envieu-me un correu electrònic diari dient-me quantes vegades s\'ha visitat $1',
	'founderemails-pref-complete-digest' => 'Envieu-me diàriament un recull de l\'activitat en <span class="notranslate" traduir="no">$1</span>',
	'founderemails-pref-joins-v2' => '...algú s\'uneix a',
	'founderemails-pref-edits-v2' => '...algú edita',
	'founderemails-pref-views-digest-v2' => '...un resum diari del total de visites',
	'founderemails-pref-complete-digest-v2' => '... un resum diari de les incorporacions, edicions i visites està preparat',
];

$messages['ce'] = [
	'founderemails-email-0-day-addpages-button' => 'ТӀетоха агӀо',
];

$messages['cs'] = [
	'founderemails-desc' => 'Pomáhá informování zakladatelů o změnách na jejich wiki',
	'tog-founderemailsenabled' => 'Pošlete mi e-mailem aktualizace o tom, co dělají ostatní lidé (pouze zakladatelé)',
	'founderemails-email-user-registered-greeting' => 'Ahoj $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Gratulujeme! $EDITORNAME se přávě připojil k $WIKINAME.',
	'founderemails-email-user-registered-signature' => 'Wikia Tým',
	'founderemails-email-user-registered-button' => 'Přivítat je',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => 'Na $WIKINAME je nová editace!',
	'founderemails-email-first-edit-greeting' => 'Ahoj $USERNAME,',
	'founderemails-email-first-edit-signature' => 'Wikia Tým',
	'founderemails-email-first-edit-button' => 'Podívejte se!',
	'founderemails-email-page-edited-reg-user-subject' => 'Nová editace na $WIKINAME!',
	'founderemails-email-general-edit-greeting' => 'Ahoj $USERNAME,',
	'founderemails-email-general-edit-signature' => 'Wikia Tým',
	'founderemails-email-general-edit-button' => 'Podívejte se!',
	'founderemails-email-anon-edit-greeting' => 'Ahoj $USERNAME,',
	'founderemails-email-anon-edit-signature' => 'Wikia Tým',
	'founderemails-email-anon-edit-button' => 'Podívejte se!',
	'founderemails-answers-email-page-edited-anon-subject' => 'Někdo změnil vaše stránky!',
	'founderemails-email-lot-happening-greeting' => 'Ahoj $USERNAME,',
	'founderemails-email-lot-happening-signature' => 'Wikia Tým',
	'founderemails-email-0-day-addpages-heading' => 'Přidat stránky.',
	'founderemails-email-0-day-addpages-button' => 'Přidat stránku',
	'founderemails-email-0-day-addphotos-heading' => 'Přidat obrázky.',
	'founderemails-email-0-day-addphotos-button' => 'Přidat obrázek',
	'founderemails-email-0-day-customizetheme-heading' => 'Upravte si vaše téma.',
	'founderemails-email-0-day-customizetheme-button' => 'Přizpůsobit',
	'founderemails-email-3-day-heading' => 'Vítej $USERNAME,',
	'founderemails-email-3-day-addphotos-heading' => 'Přidat ještě více fotografií.',
	'founderemails-email-3-day-addphotos-button' => 'Přidat obrázky',
	'founderemails-email-3-day-explore-heading' => 'Najděte inspiraci.',
	'founderemails-email-10-day-heading' => 'Jak to jde $USERNAME?',
	'founderemails-email-views-digest-greeting' => 'Ahoj $USERNAME,',
	'founderemails-email-views-digest-signature' => 'Wikia Tým',
	'founderemails-email-views-digest-button' => 'Přidej více stránek',
	'founderemails-email-complete-digest-subject' => 'Nejnovější aktivity na $WIKINAME',
	'founderemails-email-complete-digest-greeting' => 'Ahoj $USERNAME,',
	'founderemails-email-complete-digest-signature' => 'Wikia Tým',
	'founderemails-pref-joins-v2' => '... někdo se připojil',
	'founderemails-pref-edits-v2' => '... někdo editoval',
];

$messages['cy'] = [
	'founderemails-email-user-registered-signature' => 'Y Tîm Wikia',
	'founderemails-email-first-edit-signature' => 'Y Tîm Wikia',
	'founderemails-email-general-edit-signature' => 'Y Tîm Wikia',
	'founderemails-email-anon-edit-signature' => 'Y Tîm Wikia',
	'founderemails-email-lot-happening-greeting' => 'Helo $USERNAME,',
];

$messages['de'] = [
	'founderemails-desc' => 'Hilft dabei, Gründer über Änderungen in ihrem Wiki zu informieren',
	'tog-founderemailsenabled' => 'Maile mir Berichte über Tätigkeiten anderer Leute (nur Gründer).',
	'founderemails-email-user-registered-greeting' => 'Hallo $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Herzlichen Glückwunsch! $EDITORNAME hat sich gerade beim $WIKINAME angemeldet.',
	'founderemails-email-user-registered-content' => 'Nutze die Gelegenheit, um ihn in deinem Wiki zu begrüßen, und ermutige ihn, dir beim Bearbeiten zu helfen. Je mehr, desto besser, und umso schneller wird dein Wiki wachsen.',
	'founderemails-email-user-registered-signature' => 'Das Wikia-Team',
	'founderemails-email-user-registered-button' => 'Begrüßen',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '$WIKINAME hat eine neue Bearbeitung!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Hey $USERNAME,

$EDITORNAME hat gerade zum ersten Mal $WIKINAME bearbeitet.

Besuche $PAGETITLE um zu sehen, was verändert wurde.

Das Wikia Team',
	'founderemails-email-first-edit-greeting' => 'Hallo $USERNAME,',
	'founderemails-email-first-edit-headline' => '$EDITORNAME hat gerade zum ersten Mal $WIKINAME bearbeitet.',
	'founderemails-email-first-edit-content' => 'Besuche $PAGETITLE, um zu sehen, was verändert wurde.',
	'founderemails-email-first-edit-signature' => 'Das Wikia-Team',
	'founderemails-email-first-edit-button' => 'Nachsehen!',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Hallo $USERNAME,<br /><br />
es sieht so aus, als ob der registrierte Benutzer $EDITORNAME zum ersten Mal dein Wiki bearbeitet hat! Warum besuchst du nicht seine <a href="$EDITORTALKPAGEURL">Diskussionsseite</a>, um Hallo zu sagen?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Das Wikia-Team</div>e',
	'founderemails-email-page-edited-reg-user-subject' => 'Neue Bearbeitung bei $WIKINAME!',
	'founderemails-email-page-edited-reg-user-body' => 'Hallo $USERNAME,

$EDITORNAME hat gerade wieder auf $WIKINAME die Seite $PAGETITLE bearbeitet.

Besuche $PAGETITLE, um zu sehen, was verändert wurde.

$PAGEURL

Das Wikia-Team',
	'founderemails-email-general-edit-greeting' => 'Hallo $USERNAME,',
	'founderemails-email-general-edit-headline' => '$EDITORNAME hat gerade nochmal das $WIKINAME auf der Seite $PAGETITLE bearbeitet.',
	'founderemails-email-general-edit-content' => 'Besuche $PAGETITLE, um zu sehen, was verändert wurde.',
	'founderemails-email-general-edit-signature' => 'Das Wikia-Team',
	'founderemails-email-general-edit-button' => 'Nachsehen!',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Hallo $USERNAME,<br /><br />
es sieht so aus, als ob der registrierte Benutzer $EDITORNAME dein Wiki bearbeitet hat! Warum besuchst du nicht seine <a href="$EDITORTALKPAGEURL">Diskussionsseite</a>, um Hallo zu sagen?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Das Wikia-Team</div>',
	'founderemails-email-page-edited-anon-subject' => 'Ein mysteriöser Freund hat $WIKINAME bearbeitet.',
	'founderemails-email-page-edited-anon-body' => 'Hallo $USERNAME,

Ein Wikia-Nutzer hat gerade $PAGETITLE im $WIKINAME bearbeitet.

"Wikia-Nutzer" sind Leute, die Bearbeitungen machen, ohne sich mit einem Wikia-Konto anzumelden. Sieh nach, was dieser mysteriöse Freund hinzugefügt hat!

$PAGEURL

Das Wikia-Team',
	'founderemails-email-anon-edit-greeting' => 'Hallo $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'Ein Wikia-Nutzer hat gerade $PAGETITLE im $WIKINAME bearbeitet.',
	'founderemails-email-anon-edit-content' => 'Wikia-Nutzer sind Leute, die Bearbeitungen machen, ohne sich mit einem Wikia-Konto anzumelden. Sieh nach, was dieser mysteriöse Freund hinzugefügt hat!',
	'founderemails-email-anon-edit-signature' => 'Das Wikia-Team',
	'founderemails-email-anon-edit-button' => 'Nachsehen!',
	'founderemails-email-page-edited-anon-body-HTML' => 'Hallo $USERNAME,<br /><br />
es sieht so aus, als ob jemand dein Wiki bearbeitet hat! Warum <a href="$MYHOMEURL">besuchst</a> du es nicht mal, um zu sehen, was sich verändert hat?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Das Wikia-Team</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'Ein registrierter Benutzer hat dein Wiki zum ersten Mal geändert!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Hey $USERNAME,

es sieht so aus, als ob der registrierte Benutzer $EDITORNAME zum ersten Mal dein Wiki bearbeitet hat! Warum besuchst du nicht seine Diskussionsseite $EDITORTALKPAGEURL, um Hallo zu sagen?

-- Das Wikia-Team',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'Hey $USERNAME,<br /><br />
es sieht so aus, als ob der registrierte Benutzer $EDITORNAME zum ersten Mal dein Wiki bearbeitet hat! Warum besuchst du nicht seine <a href="$EDITORTALKPAGEURL">Diskussionsseite</a>, um Hallo zu sagen?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Das Wikia-Team</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Ein registrierter Benutzer hat dein Wiki geändert!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Hey $USERNAME,

es sieht so aus, als ob der registrierte Benutzer $EDITORNAME dein Wiki bearbeitet hat! Warum besuchst du nicht seine Diskussionsseite $EDITORTALKPAGEURL, um Hallo zu sagen?

-- Das Wikia-Team',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => 'Hey $USERNAME,<br /><br />
es sieht so aus, als ob der registrierte Benutzer $EDITORNAME dein Wiki bearbeitet hat! Warum besuchst du nicht seine <a href="$EDITORTALKPAGEURL">Diskussionsseite</a>, um Hallo zu sagen?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Das Wikia-Team</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'Jemand hat dein Wiki geändert!',
	'founderemails-answers-email-page-edited-anon-body' => 'Hey $USERNAME,

es sieht so aus, als ob jemand dein Wiki bearbeitet hat! Warum besuchst du nicht mal $MYHOMEURL, um zu sehen, was sich verändert hat?

-- Das Wikia-Team',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Hey $USERNAME,<br /><br />
es sieht so aus, als ob jemand dein Wiki bearbeitet hat! Warum <a href="$MYHOMEURL">besuchst</a> du es nicht mal, um zu sehen, was sich verändert hat?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Das Wikia-Team</div>',
	'founderemails-lot-happening-subject' => 'In deinem Wiki gehts ab!',
	'founderemails-lot-happening-body' => 'Hey $FOUNDERNAME,

Herzlichen Glückwunsch! $WIKINAME rockt heute das Haus und es passiert eine ganze Menge.

Falls du es noch nicht getan hast, solltest du dir mal die Seite "Wiki-Aktivitäten" angucken um zu schauen, was alles tolles heute im Wiki passiert ist.

Da so viel los ist, kannst du dir auch überlegen, ob du den E-Mail-Empfang in deinen Einstellungen nicht lieber auf eine tägliche Zusammenfassung stellen magst. Dann bekommst du nur eine einzige Mail pro Tag, die alle Aktivitäten in deinem Wiki enthält.

Das Wikia Team',
	'founderemails-lot-happening-body-HTML' => 'Hallo $USERNAME,<br /><br />
Eine Menge passiert auf deiner Seite heute! Schau mal auf $MYHOMEURL vorbei, um zu sehen was alles so los war.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Das Wikia Team</div>',
	'founderemails-email-lot-happening-greeting' => 'Hallo $USERNAME,',
	'founderemails-email-lot-happening-headline' => 'Glückwunsch! Heute ist viel los bei $WIKINAME!',
	'founderemails-email-lot-happening-content' => 'Wenn du es noch nicht getan hast, kannst du zu den letzten Aktivitäten gehen und nachschauen welche großartige Arbeit verrichtet wurde. Da so viel los ist, willst du vielleicht auch die E-Mail-Benachrichtigungs-Einstellungen auf Zusammenfassungs-Modus ändern. Im Zusammenfassungs-Modus erhältst du eine Mail, die alle Aktivitäten des Tages im Wiki auflistet.',
	'founderemails-email-lot-happening-signature' => 'Das Wikia-Team',
	'founderemails-email-lot-happening-button' => 'Aktivitäten ansehen',
	'founderemails-email-footer-line1' => 'Um aktuelle Ereignisse in Wikia mitzubekommen, besuche <a style="color:#2a87d5;text-decoration:none;" href="http://de.community.wikia.com">de.community.wikia.com</a>',
	'founderemails-email-footer-line2' => 'Willst du steuern, welche E-Mails du bekommst? Gehe zu deinen <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">Einstellungen</a>.',
	'founderemails-email-0-day-heading' => 'Schön, dich zu treffen, $USERNAME,',
	'founderemails-email-0-day-congratulations' => 'Herzlichen Glückwunsch zur Erstellung von $HDWIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'Hier sind ein paar hilfreiche Tipps zum Einstieg:',
	'founderemails-email-0-day-addpages-heading' => 'Seiten hinzufügen',
	'founderemails-email-0-day-addpages-content' => 'In einem Wiki geht es um den Austausch von Informationen zu deinem einzigartigen Thema. Erstelle Seiten, indem du auf <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">"Seite hinzufügen"</a> klickst und weitere Informationen zu deinem Thema hinzufügst.',
	'founderemails-email-0-day-addpages-button' => 'Eine Seite hinzufügen',
	'founderemails-email-0-day-addphotos-heading' => 'Bilder hinzufügen',
	'founderemails-email-0-day-addphotos-content' => 'Seiten sind immer besser, wenn sie etwas Visuelles enthalten! Füge Bilder zu deinen Seiten und deiner Hauptseite hinzu. Du kannst <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"ein Foto hinzufügen"</a>, um ein Foto, eine Foto-Galerie oder eine Diashow hinzuzufügen.',
	'founderemails-email-0-day-addphotos-button' => 'Ein Bild hinzufügen',
	'founderemails-email-0-day-customizetheme-heading' => 'Passe dein Design an.',
	'founderemails-email-0-day-customizetheme-content' => 'Passe die Farbgebung und das Logo deines Wikis an um es zu etwas Besonderem zu machen! Verwende den <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">Theme-Designer</a>, um eigene Farben zu deinem Wiki hinzufügen und es einzigartig für dein Thema zu gestalten.',
	'founderemails-email-0-day-customizetheme-button' => 'Anpassen',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">Wir lassen dich nicht im Regen stehen.</span> Wir sind da, um dein $WIKINAME Schritt für Schritt auf dem Weg zum Erfolg zu unterstützen. Besuche <a style="color:#2a87d5;text-decoration:none;" href="http://de.community.wikia.com">de.community.wikia.com</a> für Foren, Beratung und Hilfe, oder <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">maile uns</a> deine Fragen!',
	'founderemails-email-0-day-wikiahelps-signature' => 'Viel Spaß beim Aufbau deines Wikis!<br />Das Wikia Team',
	'founderemails-email-3-day-heading' => 'Hallo $USERNAME,',
	'founderemails-email-3-day-congratulations' => 'Wir wollten bloß mal vorbeischauen und gucken, wie die Dinge bei $HDWIKINAME laufen.',
	'founderemails-email-3-day-tips-heading' => 'Du hast vor 3 Tagen angefangen und wir dachten, wir geben dir noch ein paar Tipps zum Aufbau deines Wikis:',
	'founderemails-email-3-day-editmainpage-heading' => 'Putz deine Hauptseite heraus.',
	'founderemails-email-3-day-editmainpage-content' => 'Die Hauptseite ist eines der ersten Dinge, die die Leute sehen, wenn sie <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a> besuchen. Mach einen guten ersten Eindruck mit einer ausführlichen Zusammenfassung deines Themas und durch das Hinzufügen einer Slideshow, Galerie oder eines Foto-Sliders.',
	'founderemails-email-3-day-editmainpage-button' => 'Putz sie Heraus',
	'founderemails-email-3-day-addphotos-heading' => 'Füge noch mehr Bilder hinzu.',
	'founderemails-email-3-day-addphotos-content' => 'Einer der besten Wege, deinen Seiten mehr Pepp und Biss zu verleihen, ist das <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"Hinzufügen von Fotos"</a>.',
	'founderemails-email-3-day-addphotos-button' => 'Bilder hinzufügen',
	'founderemails-email-3-day-explore-heading' => 'Lass dich inspirieren.',
	'founderemails-email-3-day-explore-content' => 'Hab keine Angst dir andere Wikis anzusehen, wie sie ihre Hauptseite, Artikel-Seiten und vieles mehr eingerichtet haben. Hier sind einige unserer Favoriten: <a style="color:#2a87d5;text-decoration:none;" href="http://muppets.wikia.com">Muppet Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://poptarts.wikia.com">Pop Tarts Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://monsterhigh.wikia.com">Monster High Wiki</a>.',
	'founderemails-email-3-day-explore-button' => 'Erkunden',
	'founderemails-email-3-day-wikiahelps-text' => 'Brauchst du Hilfe dabei, zu verstehen, wie etwas funktioniert? Wir sind immer für dich da! Komm und frag nach Hilfe und Beratung unter <a style="color:#2a87d5;text-decoration:none;" href="http://de.community.wikia.com">de.community.wikia.com</a>.',
	'founderemails-email-3-day-wikiahelps-signature' => 'Weiter so!<br />Das Wikia Team',
	'founderemails-email-10-day-heading' => 'Wie läufts $USERNAME?',
	'founderemails-email-10-day-congratulations' => 'Wahnsinn, wie die Zeit vergeht! Es ist bereits 10 Tage her, dass du mit $HDWIKINAME begonnnen hast.',
	'founderemails-email-10-day-tips-heading' => 'Hole neue Leute ins Projekt und zeig allen die tolle Arbeit, die du geleistet hast! Hier sind ein paar Möglichkeiten, das Wort zu verbreiten:',
	'founderemails-email-10-day-share-heading' => 'Hat dir deine Mutter nicht gesagt du sollst teilen?',
	'founderemails-email-10-day-share-content' => 'Verwende den Teilen-Button auf Hauptseite, Artikelseiten und Fotos, um sie Freunden auf Facebook zu zeigen.',
	'founderemails-email-10-day-email-heading' => 'Nutze die Kraft der E-Mail.',
	'founderemails-email-10-day-email-content' => 'E-Maile anderen die du kennst und die sich für dein Thema interessieren oder dir helfen wollen, wie zum Beispiel einem Freund aus der Schule oder einem Arbeitskollegen. Du kannst mit dem E-Mail-Button auch gezielt Fotos aus deinem Wiki versenden.',
	'founderemails-email-10-day-join-heading' => 'Verbünde dich mit ähnlichen Webseiten.',
	'founderemails-email-10-day-join-content' => 'Bitte Leute in anderen Foren oder auf Webseiten zu deinem Thema um Hilfe, indem du Beiträge im Forum oder Kommentare verfasst. Wenn möglich, wende dich auch an den Administrator und frag, ob Interesse an einem Link-Tausch besteht &mdash; der Link zu deinem Wiki kommt auf ihre Webseite, wenn du den Link zu ihrer Webseite in deinem Wiki einbaust.',
	'founderemails-email-10-day-wikiahelps-text' => 'Du kannst auch andere Wikianer durch Beiträge im Forum unter <a style="color:#2a87d5;text-decoration:none;" href="http://de.community.wikia.com">de.community.wikia.com</a> um Hilfe bitten.',
	'founderemails-email-10-day-wikiahelps-signature' => 'Weiter so!<br />Das Wikia Team',
	'founderemails-email-views-digest-subject' => 'Heutige Seitenaufrufe bei $WIKINAME',
	'founderemails-email-views-digest-body' => 'Hallo $USERNAME,

Heute wurde das $WIKINAME von $1 {{PLURAL:$1|Person|Personen}} angesehen.

Füge weitere Inhalte hinzu und mach auf dein Wiki aufmerksam, damit noch mehr Menschen dein Wiki lesen, es bearbeiten und darüber erzählen!

$WIKIURL

Das Wikia-Team

___________________________________________

Um die aktuellsten Informationen zu Wikia zu lesen, besuche http://de.community.wikia.com
Du möchtest anpassen, welche E-Mails du bekommst? Rufe http://de.community.wikia.com/wiki/Special:Preferences auf.
Klicke den folgenden Link um dich von allen Wikia-Mails abzumelden: $UNSUBSCRIBEURL',
	'founderemails-email-views-digest-greeting' => 'Hallo $USERNAME,',
	'founderemails-email-views-digest-headline' => 'Heute wurde $WIKINAME von {{PLURAL:$1|Besucher|Besuchern}} angesehen.',
	'founderemails-email-views-digest-content' => 'Füge weiterhin neue Inhalte hinzu und werbe für dein Wiki, um noch mehr Leute zu ermutigen darin zu lesen, zu bearbeiten oder es weiterzusagen.',
	'founderemails-email-views-digest-signature' => 'Das Wikia-Team',
	'founderemails-email-views-digest-button' => 'Weitere Seiten hinzufügen',
	'founderemails-email-complete-digest-subject' => 'Die letzten Aktivitäten auf $WIKINAME',
	'founderemails-email-complete-digest-body' => 'Hallo $USERNAME,

Zeit für deine tägliche Dosis an Aktivitäten im $WIKINAME, $WIKIURL.

{{PLURAL:$1|Eine Person hat|$1 Personen haben}} sich dein Wiki angesehen.

Mach weiter so und füge interessante Inhalte zum Lesen für deine Besucher hinzu!

{{PLURAL:$2|Eine Bearbeitung wurde|$2 Bearbeitungen wurden}} durchgeführt.

Glückliche Autoren sorgen für erfolgreiche Wikis. Vergiss nicht, dich mit deinen Autoren ab und zu kurzzuschließen und ihnen zu danken.

{{PLURAL:$3|Eine Person ist|$3 Personen sind}} deinem Wiki beigetreten.

Begrüße neue Nutzer mit einer Nachricht auf ihrer Benutzerseite!

Du kannst immer auf den Knopf „Wiki-Aktivitäten“ klicken, um zu sehen, was alles im $WIKINAME abgeht. Als Wiki-Gründer solltest du das häufig tun, damit du auch alles mitbekommst.

Das Wikia-Team',
	'founderemails-email-complete-digest-greeting' => 'Hallo $USERNAME,',
	'founderemails-email-complete-digest-headline' => 'Zeit für deine tägliche Dosis an Aktivitäten auf $WIKINAME.',
	'founderemails-email-complete-digest-content-heading1' => '$1 Besucher {{PLURAL:$1|hat|haben}} dein Wiki angeschaut.',
	'founderemails-email-complete-digest-content1' => 'Mach weiter so und füge interessante Inhalte zum Lesen für deine Besucher hinzu!',
	'founderemails-email-complete-digest-content-heading2' => '$1 {{PLURAL:$1|Bearbeitung wurde|Bearbeitungen wurden}}   durchgeführt.',
	'founderemails-email-complete-digest-content2' => 'Glückliche Autoren machen glückliche Wikis. Vergiss nicht, dich mit deinen Autoren ab und zu kurzzuschließen und ihnen zu danken.',
	'founderemails-email-complete-digest-content-heading3' => '$1 {{PLURAL:$1|Benutzer ist|Benutzer sind}} deinem Wiki beigetreten.',
	'founderemails-email-complete-digest-content3' => 'Begrüße neue Benutzer in deinem Wiki mit einer Nachricht auf ihrer Diskussionsseite.
<br /><br />
In den letzten Aktivitäten kannst du die ganzen Änderungen in $WIKINAME ständig nachverfolgen. Schau öfters mal vorbei, die Community erwartet von dir als Gründer, dass du ihnen hilfst, sie leitest und das Wiki am Laufen hältst.',
	'founderemails-email-complete-digest-signature' => 'Das Wikia-Team',
	'founderemails-email-complete-digest-button' => 'Zu den letzten Aktivitäten',
	'founderemails-pref-joins' => 'Sende mir eine E-Mail, wenn jemand $1 beitritt',
	'founderemails-pref-edits' => 'Sende mir eine E-Mail, wenn jemand $1 bearbeitet',
	'founderemails-pref-views-digest' => 'Sende mir einmal täglich eine E-Mail mit der Anzahl der Seitenabrufe des Wikis',
	'founderemails-pref-complete-digest' => 'Sende mir eine tägliche Zusammenfassung der Aktivität in meinem Wiki',
	'founderemails-pref-joins-v2' => '...jemand dem Wiki beitritt.',
	'founderemails-pref-edits-v2' => '...jemand das Wiki bearbeitet.',
	'founderemails-pref-views-digest-v2' => '...eine tägliche Zusammenfassung aller Abrufe vorliegt.',
	'founderemails-pref-complete-digest-v2' => '...eine tägliche Zusammenfassung von Beitritten, Bearbeitungen und Abrufen vorliegt.',
	'founderemails-email-footer-line3' => '<a href="http://www.twitter.com/wikia_de" style="text-decoration:none">
<img alt="twitter" src="http://images4.wikia.nocookie.net/wikianewsletter/images/f/f7/Twitter.png" style="border:none">
</a>
 
<a href="http://www.facebook.com/wikia.de" style="text-decoration:none">
<img alt="facebook" src="http://images2.wikia.nocookie.net/wikianewsletter/images/5/55/Facebook.png" style="border:none">
</a>
 
<a href="http://www.youtube.com/user/WikiaDE" style="text-decoration:none">
<img alt="youtube" src="http://images3.wikia.nocookie.net/wikianewsletter/images/a/af/Youtube.png" style="border:none">
</a>
 
<a href="http://de.community.wikia.com/wiki/Blog:Wikia_Deutschland_News" style="text-decoration:none">
<img alt="wikia" src="http://images1.wikia.nocookie.net/wikianewsletter/images/b/be/Wikia_blog.png" style="border:none">
</a>',
];

$messages['de-ch'] = [
	'founderemails-email-complete-digest-body' => 'Hallo $USERNAME,

Zeit für deine tägliche Dosis an Aktivitäten im $WIKINAME.

{{PLURAL:$1|Eine Person hat|$1 Personen haben}} sich dein Wiki angesehen.

Mach weiter so und füge interessante Inhalte zum Lesen für deine Besucher hinzu!

{{PLURAL:$2|Eine Bearbeitung wurde|$2 Bearbeitungen wurden}} durchgeführt.

Glückliche Autoren sorgen für erfolgreiche Wikis. Vergiss nicht, dich mit deinen Autoren ab und zu kurzzuschliessen und ihnen zu danken.

{{PLURAL:$3|Eine Person ist|$3 Personen sind}} deinem Wiki beigetreten.

Begrüsse neue Nutzer mit einer Nachricht auf ihrer Benutzerseite!

Du kannst immer auf den Knopf «Wiki-Aktivitäten» klicken, um zu sehen, was alles im $WIKINAME abgeht. Als Wiki-Gründer solltest du das häufig tun, damit du auch alles mitbekommst.

Das Wikia-Team',
];

$messages['de-formal'] = [
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Hallo $USERNAME,<br /><br />
Es sieht so aus als ob der registrierte Benutzer $EDITORNAME zum ersten Mal Ihr Wiki verändert hat! Warum besuchen Sie nicht seine <a href="$EDITORTALKPAGEURL">Diskussionsseite</a> um Hallo zu sagen?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Das Wikia Team</div>',
	'founderemails-email-page-edited-reg-user-subject' => 'Neue Bearbeitung bei $WIKINAME!',
	'founderemails-email-page-edited-reg-user-body' => 'Hallo $USERNAME,

Es sieht so aus als ob der registrierte Benutzer $EDITORNAME Ihr Wiki verändert hat! Warum besuchen Sie nicht seine Diskussionsseite $EDITORTALKPAGEURL um Hallo zu sagen?

-- Das Wikia Team',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Hallo $USERNAME,<br /><br />
Es sieht so aus als ob der registrierte Benutzer $EDITORNAME Ihr Wiki verändert hat! Warum besuchen Sie nicht seine <a href="$EDITORTALKPAGEURL">Diskussionsseite</a> um Hallo zu sagen?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Das Wikia Team</div>',
	'founderemails-email-page-edited-anon-subject' => 'Ein mysteriöser Freund hat $WIKINAME bearbeitet.',
	'founderemails-email-page-edited-anon-body' => 'Hallo $USERNAME,

Es sieht so aus als ob jemand Ihr Wiki verändert hat! Warum besuchen Sie nicht mal $MYHOMEURL um zu sehen was sich verändert hat?

-- Das Wikia Team',
	'founderemails-email-page-edited-anon-body-HTML' => 'Hallo $USERNAME,<br /><br />
Es sieht so aus als ob jemand Ihr Wiki verändert hat! Warum <a href="$MYHOMEURL">besuchen</a> Sie es nicht mal um zu sehen was sich verändert hat?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Das Wikia Team</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'Registrierter Benutzer hat Ihre Seite zum ersten Mal geändert!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Hallo $USERNAME,

Es sieht so aus als ob der registrierte Benutzer $EDITORNAME zum ersten Mal Ihr Wiki verändert hat! Warum besuchen Sie nicht seine Diskussionsseite $EDITORTALKPAGEURL um Hallo zu sagen?

-- Das Wikia Team',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'Hallo $USERNAME,<br /><br />
Es sieht so aus als ob der registrierte Benutzer $EDITORNAME zum ersten Mal Ihr Wiki verändert hat! Warum besuchen Sie nicht seine <a href="$EDITORTALKPAGEURL">Diskussionsseite</a> um Hallo zu sagen?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Das Wikia Team</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Registrierter Benutzer hat Ihre Seite verändert!',
	'founderemails-answers-email-page-edited-anon-subject' => 'Jemand hat Ihre Seite verändert!',
	'founderemails-answers-email-page-edited-anon-body' => 'Hallo $USERNAME,

Es sieht so aus als ob jemand Ihr Wiki verändert hat! Warum besuchen Sie nicht mal $MYHOMEURL um zu sehen was sich verändert hat?

-- Das Wikia Team',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Hallo $USERNAME,<br /><br />
Es sieht so aus als ob jemand Ihr Wiki verändert hat! Warum <a href="$MYHOMEURL">besuchen</a> Sie es nicht mal um zu sehen was sich verändert hat?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Das Wikia Team</div>',
	'founderemails-email-complete-digest-body' => 'Hallo $USERNAME,

Zeit für Ihre tägliche Dosis an Aktivitäten im $WIKINAME.

{{PLURAL:$1|Eine Person hat|$1 Personen haben}} sich Ihr Wiki angesehen.

Machen Sie weiter so und fügen interessante Inhalte zum Lesen für Ihre Besucher hinzu!

{{PLURAL:$2|Eine Bearbeitung wurde|$2 Bearbeitungen wurden}} durchgeführt.

Glückliche Autoren sorgen für erfolgreiche Wikis. Vergessen Sie nicht, sich mit Ihren Autoren ab und zu kurzzuschließen und ihnen zu danken.

{{PLURAL:$3|Eine Person ist|$3 Personen sind}} Ihrem Wiki beigetreten.

Begrüßen Sie neue Nutzer mit einer Nachricht auf ihrer Benutzerseite!

Sie können immer auf den Knopf „Wiki-Aktivitäten“ klicken, um zu sehen, was alles Aufregendes im $WIKINAME geschieht. Als Wiki-Gründer sollten Sie das häufig tun, damit Sie auch alles mitbekommen.

Das Wikia-Team',
];

$messages['diq'] = [
	'founderemails-email-user-registered-greeting' => 'Merheba Bırayo $USERNAME,',
	'founderemails-email-user-registered-signature' => 'Taxıma Wikia',
	'founderemails-email-user-registered-button' => 'Şıma Xeyr Ameyê',
	'founderemails-email-first-edit-greeting' => 'Merheba Bırayo $USERNAME,',
	'founderemails-email-first-edit-signature' => 'Taxıma Wikia',
	'founderemails-email-general-edit-greeting' => 'Merheba Bırayo $USERNAME,',
	'founderemails-email-general-edit-signature' => 'Taxıma Wikia',
	'founderemails-email-anon-edit-greeting' => 'Merheba Bırayo $USERNAME,',
	'founderemails-email-anon-edit-signature' => 'Taxıma Wikia',
	'founderemails-email-lot-happening-greeting' => 'Merheba Bırayo $USERNAME,',
	'founderemails-email-lot-happening-signature' => 'Taxıma Wikia',
	'founderemails-email-0-day-addpages-heading' => 'Pelan cı ke.',
	'founderemails-email-0-day-addpages-button' => 'Yew pele cı ke',
	'founderemails-email-0-day-addphotos-heading' => 'Resıman cı ke.',
	'founderemails-email-0-day-addphotos-button' => 'Yew fotraf cı ke',
	'founderemails-email-0-day-customizetheme-button' => 'Vurnayış',
	'founderemails-email-3-day-addphotos-button' => 'Resıman cı ke',
	'founderemails-email-views-digest-greeting' => 'Merheba $USERNAME,',
	'founderemails-email-views-digest-signature' => 'Taxıma Wikia',
	'founderemails-email-views-digest-button' => 'Zewbina pelan cı ke',
	'founderemails-email-complete-digest-greeting' => 'Merheba Bırayo $USERNAME,',
	'founderemails-email-complete-digest-signature' => 'Taxıma Wikia',
	'founderemails-email-complete-digest-button' => 'Şo vikiyan de aktivan',
];

$messages['en-gb'] = [
	'founderemails-desc' => 'Helps informing founders about changes on their wiki',
	'tog-founderemailsenabled' => 'E-mail me updates on what other people are doing (founders only)',
	'founderemails-email-user-registered-greeting' => 'Hi $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Congratulations! $EDITORNAME has just joined $WIKINAME.',
	'founderemails-email-user-registered-content' => 'Take this opportunity to welcome them to your wiki and encourage them to help edit. The more the merrier, and the faster your wiki will grow.',
	'founderemails-email-user-registered-signature' => 'The Wikia Team',
	'founderemails-email-user-registered-button' => 'Welcome Them',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '$WIKINAME has a new edit!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Hi $USERNAME,

All right! $EDITORNAME has just made their very first edit on $WIKINAME.

Head over to $PAGETITLE to check out what they added.

$PAGEURL

The Wikia Team',
	'founderemails-email-first-edit-greeting' => 'Hi $USERNAME,',
	'founderemails-email-first-edit-headline' => 'All right! $EDITORNAME has just made their very first edit on $WIKINAME.',
	'founderemails-email-first-edit-content' => 'Head over to $PAGETITLE to see what they added.',
	'founderemails-email-first-edit-signature' => 'The Wikia Team',
	'founderemails-email-first-edit-button' => 'Check it out!',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Hey $USERNAME,<br /><br />
It looks like registered user $EDITORNAME has edited your wiki for the first time! Why don\'t you drop by their <a href="$EDITORTALKPAGEURL">talkpage</a> to say hello?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- The Wikia Team</div>',
	'founderemails-email-0-day-customizetheme-heading' => 'Customise your theme.',
	'founderemails-email-0-day-customizetheme-content' => 'Customise your wiki\'s theme and wordmark to make your wiki stand out!  Use the <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">Theme Designer</a> to add custom colours to your wiki and make it unique to your topic.',
	'founderemails-email-0-day-customizetheme-button' => 'Customise',
];

$messages['es'] = [
	'founderemails-desc' => 'Ayuda a informar a los fundadores sobre los cambios que ocurrieron en su wiki',
	'tog-founderemailsenabled' => 'Enviarme por correo electrónico las actualizaciones que hacen otras personas (solamente fundadores)',
	'founderemails-email-user-registered-greeting' => 'Hola $USERNAME,',
	'founderemails-email-user-registered-headline' => '¡Felicitaciones! $EDITORNAME se ha registrado en $WIKINAME.',
	'founderemails-email-user-registered-content' => 'Aprovecha esta oportunidad para darle la bienvenida y animarlo a que edite el wiki. Cuantos más, mejor y más rápido crecerá tu wiki.',
	'founderemails-email-user-registered-signature' => '-- El equipo de Wikia',
	'founderemails-email-user-registered-button' => 'Dale la bienvenida',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '¡$WIKINAME tiene una nueva edición!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Hola $USERNAME,

¡Muy bien! $EDITORNAME acaba de hacer su primera edición en $WIKINAME.

Echa un vistazo a $PAGETITLE para ver lo que añadió.

$PAGEURL

-- El equipo de Wikia',
	'founderemails-email-first-edit-greeting' => 'Hola $USERNAME,',
	'founderemails-email-first-edit-headline' => '¡Muy bien! $EDITORNAME acaba de hacer su primera edición en $WIKINAME.',
	'founderemails-email-first-edit-content' => 'Echa un vistazo a $PAGETITLE para ver lo que añadió.',
	'founderemails-email-first-edit-signature' => 'El equipo de Wikia',
	'founderemails-email-first-edit-button' => '¡Échale un vistazo!',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Ey $USERNAME,<br /><br />
¡Parece que el usuario registrado $EDITORNAME ha editado tu wiki por primera vez! ¿Por qué no te pasas por su <a href="$EDITORTALKPAGEURL">página de discusión</a> para saludarle?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- El equipo de Wikia</div>',
	'founderemails-email-page-edited-reg-user-subject' => '¡Nueva edición en $WIKINAME!',
	'founderemails-email-page-edited-reg-user-body' => 'Hola $USERNAME,

$EDITORNAME acaba de hacer otra edición a $PAGETITLE en $WIKINAME.

Échale un vistazo a $PAGETITLE para ver lo que ha cambiado.

$PAGEURL

-- El equipo de Wikia',
	'founderemails-email-general-edit-greeting' => 'Hola $USERNAME,',
	'founderemails-email-general-edit-headline' => '$EDITORNAME acaba de hacer otra edición a $PAGETITLE en $WIKINAME.',
	'founderemails-email-general-edit-content' => 'Échale un vistazo a $PAGETITLE para ver lo que ha cambiado.',
	'founderemails-email-general-edit-signature' => 'El equipo de Wikia',
	'founderemails-email-general-edit-button' => '¡Échale un vistazo!',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Ey $USERNAME,<br /><br />
¡Parece que el usuario registrado $EDITORNAME ha editado en tu wiki! ¿Por qué no te pasas por su <a href="$EDITORTALKPAGEURL">página de discusión</a> para saludarle?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- El equipo de Wikia</div>',
	'founderemails-email-page-edited-anon-subject' => 'Un amigo misterioso editó en $WIKINAME',
	'founderemails-email-page-edited-anon-body' => 'Hola $USERNAME,

Un colaborador de Wikia acaba de hacer una edición a $PAGETITLE en $WIKINAME.

Los colaboradores de Wikia son personas que hacen ediciones sin iniciar sesión con una cuenta registrada. ¡Mira lo que este amigo misterioso ha añadido!

$PAGEURL

-- El equipo de Wikia',
	'founderemails-email-anon-edit-greeting' => 'Hola $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'Un colaborador de Wikia acaba de hacer una edición a $PAGETITLE en $WIKINAME.',
	'founderemails-email-anon-edit-content' => 'Los colaboradores de Wikia son personas que hacen ediciones sin iniciar sesión con una cuenta registrada. ¡Mira lo que este amigo misterioso ha añadido!',
	'founderemails-email-anon-edit-signature' => 'El equipo de Wikia',
	'founderemails-email-anon-edit-button' => '¡Échale un vistazo!',
	'founderemails-email-page-edited-anon-body-HTML' => 'Ey $USERNAME,<br /><br />
¡Parece que alguien ha editado en tu wiki! ¿Por qué no <a href="$MYHOMEURL">echas un vistazo</a> para ver qué ha cambiado?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- El equipo de Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => '¡Un usuario registrado hizo cambios en tu sitio por primera vez!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => '¡Hey $USERNAME,

Parece que el usuario registrado $EDITORNAME ha editado tu wiki por primera vez! ¿Por qué no vas a su página de discusión  ($EDITORTALKPAGEURL) y le dices hola?

-- El equipo de Wikia',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => '¡Hey $USERNAME,<br /><br />
Parece que el usuario registrado $EDITORNAME ha editado tu wiki por primera vez! ¿Por qué no vas a su <a href="$EDITORTALKPAGEURL">página de discusión</a> y le dices hola?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- El equipo de Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => '¡Un usuario registrado hizo cambios en tu sitio!',
	'founderemails-answers-email-page-edited-reg-user-body' => '¡Hey $USERNAME,

Parece que el usuario registrado $EDITORNAME ha editado tu wiki! ¿Por qué no vas a su página de discusión ($EDITORTALKPAGEURL) y le dices hola?

-- El equipo de Wikia',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => '¡Hey $USERNAME,<br /><br />
Parece que el usuario registrado $EDITORNAME ha editado tu wiki! ¿Por qué no vas a su <a href="$EDITORTALKPAGEURL">Página de discusión</a> y le dices hola?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- El equipo de Wikia</div>',
	'founderemails-answers-email-page-edited-anon-subject' => '¡Alguien cambió tu sitio!',
	'founderemails-answers-email-page-edited-anon-body' => '¡Hey $USERNAME,

Parece que alguien ha editado tu wiki! ¿Por qué no verificas $MYHOMEURL para ver que cambió?

-- El equipo de Wikia',
	'founderemails-answers-email-page-edited-anon-body-HTML' => '¡Hey $USERNAME,<br /><br />
Parece que alguien ha editado tu wiki! ¿Por qué no <a href="$MYHOMEURL">verificas</a> para ver que cambió?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- El equipo de Wikia</div>',
	'founderemails-lot-happening-subject' => '¡Han ocurrido muchas cosas en $WIKINAME!',
	'founderemails-lot-happening-body' => 'Hola $USERNAME,

¡Felicidades! Hay muchas cosas ocurriendo hoy en $WIKINAME, $WIKIURL.

Si todavía no lo has hecho, puedes ir a Wiki Actividad y ver todo el gran trabajo que ha estado ocurriendo.

Dado que hay mucha actividad, quizás quieras cambiar tus preferencias de correo electrónico a modo resumido. Con el modo resumido, solamente recibirás un mensaje de correo electrónico con una lista de toda la actividad diaria de tu wiki.

-- El Equipo de Wikia',
	'founderemails-lot-happening-body-HTML' => 'Hola $USERNAME,<br /><br />
¡Hay muchas cosas sucediendo hoy en tu wiki! Pasa por $MYHOMEURL para ver lo que ha estado pasando.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- El Equipo de Wikia</div>',
	'founderemails-email-lot-happening-greeting' => 'Hola $USERNAME,',
	'founderemails-email-lot-happening-headline' => '¡Felicitaciones! ¡Hay muchas cosas ocurriendo hoy en $WIKINAME!',
	'founderemails-email-lot-happening-content' => 'Si todavía no lo has hecho, puedes ir a Wiki Actividad y ver todo el gran trabajo que ha estado ocurriendo. Dado que hay mucha actividad, quizás quieras cambiar tus preferencias de correo electrónico a modo resumido. Con el modo resumido solamente recibirás un mensaje de correo electrónico con una lista de toda la actividad diaria de tu wiki.',
	'founderemails-email-lot-happening-signature' => 'El equipo de Wikia',
	'founderemails-email-lot-happening-button' => 'Ver las actividades',
	'founderemails-email-footer-line1' => 'Para ver las últimas noticias en Wikia, visita <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>',
	'founderemails-email-footer-line2' => '¿Quieres controlar los correos electrónicos que recibes? Ve a tus [{{fullurl:{{ns:special}}:Preferences}} Preferencias]',
	'founderemails-email-0-day-heading' => 'Encantado de conocerte $USERNAME,',
	'founderemails-email-0-day-congratulations' => '¡Felicitaciones por crear $WIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'Aquí hay algunos consejos útiles para comenzar:',
	'founderemails-email-0-day-addpages-heading' => 'Añadir páginas.',
	'founderemails-email-0-day-addpages-content' => 'Una wiki es todo acerca de compartir información sobre tu tema. Crea páginas haciendo clic en <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">"Añadir una Página"</a> y llena más información específica sobre el tema.',
	'founderemails-email-0-day-addpages-button' => 'Añadir una página',
	'founderemails-email-0-day-addphotos-heading' => 'Añadir imágenes.',
	'founderemails-email-0-day-addphotos-content' => '¡Las páginas siempre son mejores cuando tienen imágenes! Añade imágenes a tus páginas y a tu página principal. Puedes hacer clic en <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"Añadir una Imagen"</a> para añadir una imagen, una galería de imágenes o una secuencia de diapositivas.',
	'founderemails-email-0-day-addphotos-button' => 'Añadir una Imagen',
	'founderemails-email-0-day-customizetheme-heading' => 'Personaliza tu tema.',
	'founderemails-email-0-day-customizetheme-content' => '¡Personaliza el tema y el wordmark para destacar tu wiki! Usa el <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">Diseñador de Temas</a> para añadir colores personalizados a tu wiki y hacerla única a tu tema.',
	'founderemails-email-0-day-customizetheme-button' => 'Personalizar',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">No te dejaremos a la interperie.</span> Estamos aquí para ayudarte con $WIKINAME en cada paso. Visita <a style="color:#2a87d5;text-decoration:none;" href="http://es.wikia.com">es.wikia.com</a> por foros, consejos y ayuda, o <a style="color:#2a87d5;text-decoration:none;" href="http://es.wikia.com/wiki/Special:Contact">contáctanos</a> si tienes preguntas.',
	'founderemails-email-0-day-wikiahelps-signature' => '¡Feliz construcción de tu wiki!<br />El Equipo de Wikia',
	'founderemails-email-3-day-heading' => 'Hola, $USERNAME,',
	'founderemails-email-3-day-congratulations' => 'Hemos querido revisar y ver cómo van las cosas en $WIKINAME.',
	'founderemails-email-3-day-tips-heading' => 'Han pasado tres días desde que comenzaste y pensamos que podríamos ofrecer algunos consejos más para la construcción de tu wiki:',
	'founderemails-email-3-day-editmainpage-heading' => 'Adorna tu página principal.',
	'founderemails-email-3-day-editmainpage-content' => 'La página principal es una de las primeras cosas que las personas ven cuando visitan <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a>. Haz una buena impresión al escribir un resumen detallado sobre lo que trata tu tema y agrega una presentación de diapositivas, una galería o una presentación de imágenes.',
	'founderemails-email-3-day-editmainpage-button' => 'Hazla atractiva',
	'founderemails-email-3-day-addphotos-heading' => 'Añadir más imágenes.',
	'founderemails-email-3-day-addphotos-content' => 'Una de las mejores formas de complementar tus páginas es <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"añadiendo algunas imágenes"</a>.',
	'founderemails-email-3-day-addphotos-button' => 'Añadir imágenes',
	'founderemails-email-3-day-explore-heading' => 'Encuentra inspiración.',
	'founderemails-email-3-day-explore-content' => 'No tengas miedo en visitar otras wikis para ver cómo han trabajado sus páginas principales, artículos y más. Aquí hay algunas de nuestras favoritas: <a style="color:#2a87d5;text-decoration:none;" href="http://es.memory-alpha.org">Memory Alpha</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://es.ben10.wikia.com">Ben 10</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://es.gta.wikia.com">Grand Theft Encyclopedia</a>.',
	'founderemails-email-3-day-explore-button' => 'Explorar',
	'founderemails-email-3-day-wikiahelps-text' => '¿Necesitas ayuda para saber cómo funciona algo? ¡Siempre estamos aquí para ti! Pídenos ayuda y consejo en <a style="color:#2a87d5;text-decoration:none;" href="http://es.wikia.com">es.wikia.com</a>.',
	'founderemails-email-3-day-wikiahelps-signature' => '¡Mantén el gran trabajo!<br />El Equipo de Wikia',
	'founderemails-email-10-day-heading' => '¿Cómo vas, $USERNAME?',
	'founderemails-email-10-day-congratulations' => '¡Wow, el tiempo vuela! Han pasado 10 días desde que comenzaste $WIKINAME.',
	'founderemails-email-10-day-tips-heading' => '¡Involucra a otros en tu proyecto y muestra todo el gran trabajo que has estado haciendo! Aquí hay algunas formas de difundirlo:',
	'founderemails-email-10-day-share-heading' => '¿Tu madre no te dijo compartir?',
	'founderemails-email-10-day-share-content' => 'Usa el botón Compartir en la página principal, artículos e imágenes de tu wiki para mostrárselas a tus amigos y seguidores en Twitter, Facebook u otros sitios populares.',
	'founderemails-email-10-day-email-heading' => 'Aprovecha el poder del correo electrónico.',
	'founderemails-email-10-day-email-content' => 'Envía mensajes de correo electrónico a otros que conozcan y estén interesados en tu wiki o interesados en ayudarte, como un amigo de la escuela o un compañero de trabajo. Además puedes enviar imágenes específicas de tu wiki usando el botón de correo electrónico.',
	'founderemails-email-10-day-join-heading' => 'Únete con sitios web similares.',
	'founderemails-email-10-day-join-content' => 'Pregunta a las personas en otros foros o sitios web relacionados con tu tema en busca de ayuda. Si es posible, contacta al administrador y ver si están interesandos en hacer un intercambio de enlace &mdash; ellos pondrían tu enlace a la wiki en su sitio web si tú pones su enlace en tu wiki.',
	'founderemails-email-10-day-wikiahelps-text' => 'También puedes preguntar a otros usuarios en busca de ayuda para tu wiki dejando una publicación en los foros de <a style="color:#2a87d5;text-decoration:none;" href="http://es.wikia.com">es.wikia.com</a>.',
	'founderemails-email-10-day-wikiahelps-signature' => '¡Mantén el gran trabajo!<br />El Equipo de Wikia',
	'founderemails-email-views-digest-subject' => 'Visitas de hoy en $WIKINAME',
	'founderemails-email-views-digest-body' => 'Hola $USERNAME,

Hoy $WIKINAME fue visitada por $1 {{PLURAL:$1|persona|personas}}.

Mantente añadiendo contenido nuevo y promoviendo tu wiki para animar a más personas a leer, editar y correr la voz.

$WIKIURL

-- El Equipo de Wikia',
	'founderemails-email-views-digest-greeting' => 'Hola $USERNAME,',
	'founderemails-email-views-digest-headline' => 'Hoy $WIKINAME fue visitada por $UNIQUEVIEWS personas.',
	'founderemails-email-views-digest-content' => 'Mantente añadiendo contenido nuevo y promoviendo tu wiki para animar a más personas a leer, editar y correr la voz.',
	'founderemails-email-views-digest-signature' => 'El equipo de Wikia',
	'founderemails-email-views-digest-button' => 'Añade más páginas',
	'founderemails-email-complete-digest-subject' => 'Actividad más reciente en $WIKINAME',
	'founderemails-email-complete-digest-body' => 'Hola $USERNAME,

Es momento de tu dosis diaria de la actividad en $WIKINAME, $WIKIURL.

$1 {{PLURAL:$1|persona|personas}} han visitado tu wiki.

¡Mantén el gran trabajo añadiendo contenido interesante para que la gente lo lea!

Se {{PLURAL:$2|ha|han}} realizado $2 {{PLURAL:$2|edición|ediciones}}.

Editores felices hacen feliz al wiki. Asegúrate de agradecer a tus editores y comunícate con ellos de vez en cuando.

$3 {{PLURAL:$3|usuario|usuarios}} se unieron al wiki.

Dale la bienvenida a los usuarios nuevos con un mensaje en sus páginas de discusión.

Siempre puedes echarle un vistazo a la Wiki Actividad para ver todos los cambios existentes hechos en $WIKINAME. Revísalos frecuentemente, como fundador la comunidad buscará tu orientación.

-- El Equipo de Wikia',
	'founderemails-email-complete-digest-greeting' => 'Hola $USERNAME,',
	'founderemails-email-complete-digest-headline' => 'Es momento de tu dosis diaria de la actividad en $WIKINAME.',
	'founderemails-email-complete-digest-content-heading1' => '$1 {{PLURAL:$1|persona visitó|personas visitaron}} tu wiki.',
	'founderemails-email-complete-digest-content1' => '¡Mantén el gran trabajo añadiendo contenido interesante para que las personas lo lean!',
	'founderemails-email-complete-digest-content-heading2' => 'Se {{PLURAL:$1|hizo $1 edición|hicieron $1 ediciones}}.',
	'founderemails-email-complete-digest-content2' => 'Editores felices hacen feliz al wiki. Asegúrate de agradecer a tus editores y comunícate con ellos de vez en cuando.',
	'founderemails-email-complete-digest-content-heading3' => 'Se {{PLURAL:$1|unió $1 persona|unieron $1 personas}} a tu wiki.',
	'founderemails-email-complete-digest-content3' => 'Dale la bienvenida a los usuarios nuevos con un mensaje en sus páginas de discusión.
<br /><br />
Siempre puedes echarle un vistazo a la Wiki Actividad para ver todos los cambios existentes hechos en $WIKINAME. Revísalos frecuentemente, como fundador, la comunidad buscará tu orientación.',
	'founderemails-email-complete-digest-signature' => 'El equipo de Wikia',
	'founderemails-email-complete-digest-button' => 'Ir a la Wiki Actividad',
	'founderemails-pref-joins' => 'Recibir un correo cuando alguien se una a este wiki ($1)',
	'founderemails-pref-edits' => 'Recibir un correo cuando alguien edite en este wiki ($1)',
	'founderemails-pref-views-digest' => 'Recibir un correo diario de cuántas veces ha sido visitado este wiki ($1)',
	'founderemails-pref-complete-digest' => 'Recibir un resumen diario de la actividad en este wiki ($1)',
	'founderemails-pref-joins-v2' => '...cuando alguien participe',
	'founderemails-pref-edits-v2' => '...cuando alguien edite',
	'founderemails-pref-views-digest-v2' => '...con un resumen diario de las visitas totales al wiki',
	'founderemails-pref-complete-digest-v2' => '...con un resumen diario de quién participa, edita y visita este wiki',
];

$messages['eu'] = [
];

$messages['fa'] = [
	'founderemails-email-user-registered-greeting' => 'سلام $USERNAME،',
	'founderemails-email-user-registered-signature' => 'تیم ویکیا',
	'founderemails-email-first-edit-greeting' => 'سلام $USERNAME،',
	'founderemails-email-first-edit-signature' => 'تیم ویکیا',
	'founderemails-email-general-edit-greeting' => 'سلام $USERNAME،',
	'founderemails-email-general-edit-signature' => 'تیم ویکیا',
	'founderemails-email-anon-edit-greeting' => 'سلام $USERNAME،',
	'founderemails-email-anon-edit-signature' => 'تیم ویکیا',
	'founderemails-email-lot-happening-greeting' => 'سلام $USERNAME،',
	'founderemails-email-lot-happening-signature' => 'تیم ویکیا',
	'founderemails-email-0-day-addpages-heading' => '.',
	'founderemails-email-0-day-addpages-button' => 'افزودن یک صفحه',
	'founderemails-email-0-day-addphotos-button' => 'اضافه‌کردن یک تصویر',
	'founderemails-email-0-day-customizetheme-button' => 'سفارشی‌کردن',
	'founderemails-email-views-digest-greeting' => 'سلام $USERNAME،',
	'founderemails-email-views-digest-signature' => 'تیم ویکیا',
	'founderemails-email-complete-digest-greeting' => 'سلام $USERNAME،',
	'founderemails-email-complete-digest-signature' => 'تیم ویکیا',
	'founderemails-email-footer-line1' => 'برای باخبر شدن از تغییرات اخیر ویکیا، به <a style="color:#2a87d5;text-decoration:none;" href="http://fa.wikia.com">fa.wikia.com</a> مراجعه کنید.',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'سلام $FOUNDERNAME،<br /><br />
به نظر می‌رسد کاربر ثبت‌نام‌کرده $USERNAME ویرایشی در ویکی شما انجام داده‌است. چرا به <a href="$USERTALKPAGEURL">صفحۀ بحث</a> نرفته و به او سلام نمی‌کنید؟<br /><br />
<div style="font-style: italic; font-size: 120%;">-- گروه ویکیا</div>',
	'founderemails-email-page-edited-reg-user-body' => 'سلام $FOUNDERNAME،

اندکی پیش $USERNAME ویرایش دیگری در $WIKINAME در صفحۀ $PAGETITLE انجام داد.

برای دیدن تغییر اعمال شده به صفحۀ $PAGETITLE سر بزنید.

گروه ویکیا',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'سلام $FOUNDERNAME،

بسیار خوب! اندکی پیش $USERNAME اولین ویرایش خود را در $WIKINAME انجام داد.

برای بررسی تغییر اعمال شده به صفحۀ $PAGETITLE سر بزنید. 

گروه ویکیا',
	'founderemails-email-page-edited-reg-user-subject' => 'ویرایش جدید در $WIKINAME!',
];

$messages['fi'] = [
	'founderemails-desc' => 'Auttaa tiedottamaan perustajille muutoksista heidän wikeihinsä',
	'tog-founderemailsenabled' => 'Lähetä minulle sähköpostipäivityksiä muiden tekemisistä (vain perustajille)',
	'founderemails-email-user-registered-greeting' => 'Hei $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Onnittelut! $EDITORNAME on juuri liittynyt $WIKINAMEin.',
	'founderemails-email-user-registered-content' => 'Tartu tilaisuuteen toivottaa häntä tervetulleeksi ja rohkaisemaan häntä muokkaaman. Enempi parempi, ja wikisi myös kasvaa nopeammin.',
	'founderemails-email-user-registered-signature' => 'Wikia-tiimi',
	'founderemails-email-user-registered-button' => 'Toivota hänet tervetulleeksi',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => 'Uusi $WIKINAME -muokkaus!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Hei $USERNAME,

Hienoa! $EDITORNAME teki juuri ensimmäinen muokkauksensa wikissä $WIKINAME.

Siirry sivulle $PAGETITLE ja katso, mitä muokkauksia on tehty.

$PAGEURL

Wikia-ryhmä',
	'founderemails-email-first-edit-greeting' => 'Hei $USERNAME,',
	'founderemails-email-first-edit-headline' => 'Hienoa! $EDITORNAME teki juuri ensimmäinen muokkauksensa wikissä $WIKINAME.',
	'founderemails-email-first-edit-content' => 'Siirry sivulle $PAGETITLE ja katso, mitä muokkauksia on tehty.',
	'founderemails-email-first-edit-signature' => 'Wikia-tiimi',
	'founderemails-email-first-edit-button' => 'Katso, mitä muokattiin!',
	'founderemails-email-page-edited-reg-user-subject' => 'Uusi $WIKINAME -muokkaus!',
	'founderemails-email-page-edited-reg-user-body' => 'Hei $USERNAME,

$EDITORNAME muokkasi juuri wikin $WIKINAME sivua $PAGETITLE.

Siirry sivulle $PAGETITLE ja katso, mitä muokkauksia on tehty.

$PAGEURL

Wikia-ryhmä',
	'founderemails-email-general-edit-greeting' => 'Hei $USERNAME,',
	'founderemails-email-general-edit-headline' => '$EDITORNAME muokkasi juuri wikin $WIKINAME sivua $PAGETITLE.',
	'founderemails-email-general-edit-content' => 'Siirry sivulle $PAGETITLE ja katso, mitä muokkauksia on tehty.',
	'founderemails-email-general-edit-signature' => 'Wikia-tiimi',
	'founderemails-email-general-edit-button' => 'Katso, mitä muokattiin!',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Hei $USERNAME,<br /><br />
Näyttää siltä, että rekisteröitynyt käyttäjä $EDITORNAME on muokannut wikiäsi! Miksi et sano hänen <a href="$EDITORTALKPAGEURL">keskustelusivullaan</a> hei?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- The Wikia Team</div>',
	'founderemails-email-page-edited-anon-subject' => 'Salaperäinen ystävä muokkasi $WIKINAMEä',
	'founderemails-email-page-edited-anon-body' => 'Hei $USERNAME,

Wikia-avustaja muokkasi juuri $WIKINAMEn sivua $PAGETITLE.

Wikia-avustajat ovat henkilöitä, jotka tekevät muokkauksia kirjautumatta Wikiaan. Käy katsomassa, mitä tämä salaperäinen ystävä lisäsi!

$PAGEURL

Wikia-tiimi',
	'founderemails-email-anon-edit-greeting' => 'Hei $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'Wikia-avustaja muokkasi juuri $WIKINAMEn sivua $PAGETITLE.',
	'founderemails-email-anon-edit-content' => 'Wikia-avustajat ovat henkilöitä, jotka tekevät muokkauksia kirjautumatta Wikiaan. Käy katsomassa, mitä tämä salaperäinen ystävä lisäsi!',
	'founderemails-email-anon-edit-signature' => 'Wikia-tiimi',
	'founderemails-email-anon-edit-button' => 'Katso, mitä muokattiin!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'Rekisteröitynyt käyttäjä muokkasi sivustoasi ensimmäistä kertaa!',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Rekisteröitynyt käyttäjä muokkasi sivustoasi!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Hei $USERNAME,

Näyttää siltä, että rekisteröitynyt käyttäjä $EDITORNAME on muokannut wikiäsi! Miksi et kävisi hänen keskustelusivullaan ($EDITORTALKPAGEURL) ja sanoisi hei?

-- Wikia Team',
	'founderemails-answers-email-page-edited-anon-subject' => 'Joku muokkasi sivustoasi!',
	'founderemails-answers-email-page-edited-anon-body' => 'Hei $USERNAME,

Näyttäisi siltä, että joku muokkasi wikiäsi! Miksipä ei tarkistaisi sivulta $MYHOMEURL, mikä muuttui?
-- Wikia-tiimi',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Hei $USERNAME,<br /><br />
Joku näyttäisi muokanneen wikiäsi! Miksipä et <a href="$MYHOMEURL">tarkistaisi</a>, mikä on muuttunut?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia-tiimi</div>',
	'founderemails-lot-happening-subject' => '$WIKINAME kuumenee!',
	'founderemails-email-lot-happening-greeting' => 'Hei $USERNAME,',
	'founderemails-email-lot-happening-headline' => 'Onnittelut: sivustolla $WIKINAME on tänään kova meno!',
	'founderemails-email-lot-happening-signature' => 'Wikia-tiimi',
	'founderemails-email-lot-happening-button' => 'Katso toimintaa',
	'founderemails-email-footer-line1' => 'Jos haluat katsoa viimeiset kuulumiset Wikiasta, mene osoitteeseen <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>',
	'founderemails-email-0-day-heading' => 'Hauska tavata $USERNAME,',
	'founderemails-email-0-day-congratulations' => 'Onnittelut sivuston $HDWIKINAME luomisen johdosta!',
	'founderemails-email-0-day-tips-heading' => 'Tässä muutama hyödyllinen vinkki alkuun pääsemiseksi:',
	'founderemails-email-0-day-addpages-heading' => 'Lisää sivuja.',
	'founderemails-email-0-day-addpages-button' => 'Lisää sivu',
	'founderemails-email-0-day-addphotos-heading' => 'Lisää valokuvia.',
	'founderemails-email-0-day-addphotos-button' => 'Lisää valokuva',
	'founderemails-email-0-day-customizetheme-heading' => 'Mukauta teema.',
	'founderemails-email-0-day-customizetheme-button' => 'Mukauta',
	'founderemails-email-0-day-wikiahelps-signature' => 'Hauskaa wikirakentamista!<br />Wikia-tiimi',
	'founderemails-email-3-day-heading' => 'Hei $USERNAME,',
	'founderemails-email-3-day-congratulations' => 'Halusimme vain tarkistaa, miten sivustolla $HDWIKINAME menee.',
	'founderemails-email-3-day-tips-heading' => 'Aloituksestasi on kulunut kolme päivää, ja ajattelimme pistäytyä hetkeksi jakamaan muutamia wikisi rakennukseen liittyviä vinkkejä:',
	'founderemails-email-3-day-editmainpage-heading' => 'Koristele etusivuasi.',
	'founderemails-email-3-day-editmainpage-content' => 'Pääsivu on ensimmäinen asia mitä ihmiset näkevät kun vierailevat wikissä <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a>. Tee kunnon yhteenveto wikisi sisällöstä ja lisää tarvittaessa kuvashow, galleria tai kuvanselain.',
	'founderemails-email-3-day-editmainpage-button' => 'Siisti sitä',
	'founderemails-email-3-day-addphotos-heading' => 'Lisää vielä enemmän kuvia.',
	'founderemails-email-3-day-addphotos-button' => 'Lisää valokuvia',
	'founderemails-email-3-day-explore-heading' => 'Löydä inspiraatiota.',
	'founderemails-email-3-day-explore-button' => 'Tutustu',
	'founderemails-email-3-day-wikiahelps-signature' => 'Jatka vain hienoa työtäsi!<br />Wikia-ryhmä',
	'founderemails-email-10-day-heading' => 'Miten menee, $USERNAME?',
	'founderemails-email-10-day-congratulations' => 'Huh, aika rientää! On jo kulunut 10 päivää siitä, kun loit $HDWIKINAMEn.',
	'founderemails-email-10-day-share-heading' => 'Ei äitisi opettanut sinua Jakamaan?',
	'founderemails-email-10-day-share-content' => 'Käytä "Jaa" -painiketta wikisi etusivulla, artikkeleissa ja kuvissa esitelläksesi niitä ystävillesi ja seuraajillesi Facebookissa.',
	'founderemails-email-10-day-email-heading' => 'Valjasta sähköpostin voima.',
	'founderemails-email-10-day-join-heading' => 'Löyttäydy yhteen muiden samanlaisten sivustojen kanssa.',
	'founderemails-email-views-digest-greeting' => 'Hei $USERNAME,',
	'founderemails-email-views-digest-signature' => 'Wikia-tiimi',
	'founderemails-email-views-digest-button' => 'Lisää sivuja',
	'founderemails-email-complete-digest-greeting' => 'Hei $USERNAME,',
	'founderemails-email-complete-digest-signature' => 'Wikia-tiimi',
	'founderemails-email-complete-digest-button' => 'Siirry wikitoimintaan',
	'founderemails-pref-joins' => 'Lähetä minulle sähköpostia, kun joku liittyy sivustoon $1',
	'founderemails-pref-edits' => 'Lähetä minulle sähköpostia, kun joku muokkaa sivustoa $1',
	'founderemails-pref-joins-v2' => '...joku liittyy Wikiin.',
	'founderemails-pref-edits-v2' => '...joku muokkaa Wikissä.',
	'founderemails-pref-views-digest-v2' => '...päivittäinen yhteenveto kaikista vierailuista on valmis',
	'founderemails-pref-complete-digest-v2' => '...päivittäinen tiedote uusista käyttäjistä, muokkauksista ja vierailuista on valmis',
];

$messages['fo'] = [
	'founderemails-desc' => 'Hjálpir við at kunna stovnarar um broytingar á teirra wiki',
	'tog-founderemailsenabled' => 'Send mær dagføringar við telduposti um hvat ið onnur fólk gera (bert stovnarar)',
	'founderemails-email-user-registered-greeting' => 'Hey $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Tillukku! $EDITORNAME er júst blivin limur á $WIKINAME.',
	'founderemails-email-user-registered-signature' => 'Wikia-toymið',
	'founderemails-email-user-registered-button' => 'Ynsk teimum vælkomnum',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '$WIKINAME hevur eina nýggja rætting!',
	'founderemails-email-first-edit-greeting' => 'Hey $USERNAME,',
	'founderemails-email-first-edit-signature' => 'Wikia-toymið',
	'founderemails-email-first-edit-button' => 'Kanna tað!',
	'founderemails-email-page-edited-reg-user-subject' => 'Nýggj rætting á $WIKINAME!',
	'founderemails-email-general-edit-greeting' => 'Hey $USERNAME,',
	'founderemails-email-general-edit-signature' => 'Wikia-toymið',
	'founderemails-email-general-edit-button' => 'Kanna tað!',
	'founderemails-email-page-edited-anon-subject' => 'Ein mystiskur vinur rættaði $WIKINAME',
	'founderemails-email-anon-edit-greeting' => 'Hey $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'Ein Wikia brúkari hevur júst gjørt eina rættinga á $PAGETITLE á $WIKINAME.',
	'founderemails-email-anon-edit-signature' => 'Wikia-toymið',
	'founderemails-email-anon-edit-button' => 'Kanna tað!',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Ein skrásettur brúkari broytti tína síðu!',
	'founderemails-email-lot-happening-greeting' => 'Hey $USERNAME,',
	'founderemails-email-lot-happening-signature' => 'Wikia-toymið',
	'founderemails-email-lot-happening-button' => 'Hygg at aktiviteti',
	'founderemails-email-0-day-heading' => 'Hugnaligt at møta tær $USERNAME,',
	'founderemails-email-0-day-congratulations' => 'Tillukku við at tú upprættaði $HDWIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'Her eru nøkur fá hjálpsom ráð um hvussu tú kemur í gongd:',
	'founderemails-email-0-day-addpages-heading' => 'Legg síður afturat.',
	'founderemails-email-0-day-addpages-button' => 'Legg eina síðu afturat',
	'founderemails-email-0-day-addphotos-heading' => 'Legg myndir út.',
	'founderemails-email-0-day-addphotos-button' => 'Innset eina mynd',
	'founderemails-email-0-day-customizetheme-button' => 'Tilpassa',
	'founderemails-email-3-day-heading' => 'Halló $USERNAME,',
];

$messages['fr'] = [
	'founderemails-desc' => 'Aide les fondateurs en les informant des modifications effectuées sur leur wikia',
	'tog-founderemailsenabled' => 'M’envoyer des mises à jour par e-mail sur ce que font les autres personnes (fondateurs uniquement)',
	'founderemails-email-user-registered-greeting' => 'Bonjour $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Félicitations ! $EDITORNAME vient de rejoindre $WIKINAME.',
	'founderemails-email-user-registered-content' => 'Profitez de cette occasion pour leur souhaiter la bienvenue sur votre wiki et les encourager à vous aider à éditer. Plus on est de fous, plus on rit, et plus rapidement votre wiki va se développer.',
	'founderemails-email-user-registered-signature' => 'L’équipe Wikia',
	'founderemails-email-user-registered-button' => 'Leur souhaiter la bienvenue',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '$WIKINAME a reçu une nouvelle modification !',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Bonjour $USERNAME,

Bien! $EDITORNAME vient juste d\'effectuer sa toute première modification sur $WIKINAME!

Regardez sur $PAGETITLE ce qu\'ils viennent juste d\'ajouter.

$PAGEURL

L\'équipe Wikia',
	'founderemails-email-first-edit-greeting' => 'Bonjour $USERNAME,',
	'founderemails-email-first-edit-headline' => 'Super ! $EDITORNAME vient de faire sa toute première modification sur $WIKINAME.',
	'founderemails-email-first-edit-content' => 'Rendez-vous sur $PAGETITLE pour voir ce qu’il a ajouté.',
	'founderemails-email-first-edit-signature' => '— L’équipe Wikia',
	'founderemails-email-first-edit-button' => 'Vérifier !',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => '<p style="line-height: 150%;font-family:Arial,sans-serif;color: #333;">Bonjour $USERNAME,</p>

<p style="line-height: 150%;font-family:Arial,sans-serif;color: #333;">$EDITORNAME a rejoint votre wiki et a effectué sa toute première modification !</p>

<p style="line-height: 150%;font-family:Arial,sans-serif;color: #333;">Passez lui souhaiter la bienvenue sur sa <a href="$EDITORTALKPAGEURL">page de discussion</a> et répondez aux questions qu’il pourrait avoir. Les contributeurs actifs sont très importants, ils peuvent aider à développer votre wikia et le rendre populaire. Faites au mieux pour l’encourager et l’aider à s’impliquer.</p>

<p style="line-height: 150%;font-family:Arial,sans-serif;color: #333;">Des contributeurs heureux font des wikias où il fait bon participer !</p> 
<p style="line-height: 150%;font-family:Arial,sans-serif;color: #333;">— L’équipe Wikia</p>
<br /><hr />
<p>
<ul>
<li><a href="http://communaute.wikia.com">Venez voir les derniers évènements sur Wikia !</a></li>
<li>Vous souhaitez contrôler les e-mails que vous recevez ? Rendez-vous sur vos <a href="{{fullurl:{{ns:special}}:Preferences}}">préférences</a></li>
</ul>
</p>
<div style="font-size: 70%;margin-top: 25px;text-align: center;">Cliquez <a href="$UNSUBSCRIBEURL">ici</a> pour vous désabonner à tous les e-mails de Wikia.</div>',
	'founderemails-email-page-edited-reg-user-subject' => 'Nouvelle modification sur $WIKINAME !',
	'founderemails-email-page-edited-reg-user-body' => 'Bonjour $USERNAME,

$EDITORNAME vient de faire une autre modification sur $PAGETITLE sur $WIKINAME.

Rendez-vous sur $PAGETITLE pour voir ce qu’ils ont modifié.

$PAGEURL

L’équipe Wikia',
	'founderemails-email-general-edit-greeting' => 'Bonjour $USERNAME,',
	'founderemails-email-general-edit-headline' => '$EDITORNAME vient de faire une autre modification sur $PAGETITLE sur $WIKINAME.',
	'founderemails-email-general-edit-content' => 'Rendez-vous sur $PAGETITLE pour vérifier ce qu’il a ajouté.',
	'founderemails-email-general-edit-signature' => '— L’équipe Wikia',
	'founderemails-email-general-edit-button' => 'Vérifier !',
	'founderemails-email-page-edited-reg-user-body-HTML' => '<p style="line-height: 150%;font-family:Arial,sans-serif;color: #333;">Bonjour $USERNAME,</p>

<p style="line-height: 150%;font-family:Arial,sans-serif;color: #333;">$EDITORNAME a effectué une modification sur $WIKINAME ! Pourquoi n’iriez-vous lui dire bonjour sur sa <a href="$EDITORTALKPAGEURL">page de discussion</a> ?</p>

<p style="line-height: 150%;font-family:Arial,sans-serif;color: #333;">– L’équipe Wikia</p>
<br /><hr />
<p>
<ul>
<li><a href="http://communaute.wikia.com">Venez voir les derniers évènements sur Wikia !</a></li>
<li>Vous souhaitez contrôler les e-mails que vous recevez ? Rendez-vous sur vos <a href="{{fullurl:{{ns:special}}:Preferences}}">préférences</a></li>
</ul>
</p>
<div style="font-size: 70%;margin-top: 25px;text-align: center;">Cliquez <a href="$UNSUBSCRIBEURL">ici</a> pour vous désabonner de tous les e-mails de Wikia.</div>',
	'founderemails-email-page-edited-anon-subject' => 'Un mystérieux ami a effectué des modifications sur $WIKINAME',
	'founderemails-email-page-edited-anon-body' => 'Bonjour $USERNAME,

Un contributeur Wikia vient de modifier $PAGETITLE sur $WIKINAME.

Les contributeurs Wikia sont des gens qui effectuent des modifications sans être connectés avec un compte Wikia. Allez voir ce que mystérieux ami a ajouté !

$PAGEURL

L’équipe Wikia',
	'founderemails-email-anon-edit-greeting' => 'Bonjour $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'Un contributeur Wikia vient de modifier $PAGETITLE sur $WIKINAME.',
	'founderemails-email-anon-edit-content' => 'Les contributeurs Wikia sont des gens qui effectuent des modifications sans être connectés avec un compte Wikia. Allez voir ce que ce mystérieux ami a ajouté !',
	'founderemails-email-anon-edit-signature' => '— L’équipe Wikia',
	'founderemails-email-anon-edit-button' => 'Vérifier !',
	'founderemails-email-page-edited-anon-body-HTML' => '<p style="line-height: 150%;font-family:Arial,sans-serif;color: #333;">Bonjour $USERNAME,</p>

<p style="line-height: 150%;font-family:Arial,sans-serif;color: #333;">Un contributeur Wikia a modifié $WIKINAME ! Rendez vous sur <a href="$MYHOMEURL">l\'activité</a> de votre wikia pour voir ce qu’il a ajouté.</p>

<p style="line-height: 150%;font-family:Arial,sans-serif;color: #333;">– L’équipe Wikia</p>
<br /><hr />
<p>
<ul>
<li><a href="http://communaute.wikia.com">Venez voir les derniers évènements sur Wikia !</a></li>
<li>Vous souhaitez contrôler les e-mails que vous recevez ? Rendez-vous sur vos <a href="{{fullurl:{{ns:special}}:Preferences}}">préférences</a></li>
</ul>
</p>
<div style="font-size: 70%;margin-top: 25px;text-align: center;">Cliquez <a href="$UNSUBSCRIBEURL">ici</a> pour vous désabonner de tous les e-mails de Wikia.</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Quelqu’un a modifié votre site !',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Bonjour $USERNAME,

$EDITORNAME vient de modifier votre site ! Pourquoi ne pas passer lui dire bonjour sur sa page de discussion ($EDITORTALKPAGEURL) ?

– L’équipe Wikia

___________________________________________
* Pour voir les derniers évènements sur Wikia, rendez-vous sur http://communaute.wikia.com
* Vous souhaitez contrôler les e-mails que vous recevez ? Rendez-vous sur : {{fullurl:{{ns:special}}:Preferences}}.
* Cliquez sur le lien suivant pour vous désabonner de tous les e-mails de Wikia : $UNSUBSCRIBEURL',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => '<p style="line-height: 150%;font-family:Arial,sans-serif;color: #333;">Bonjour $USERNAME,</p>

<p style="line-height: 150%;font-family:Arial,sans-serif;color: #333;">$USERNAME a modifié votre site ! Pourquoi ne pas passer lui dire bonjour sur sa <a href="$EDITORTALKPAGEURL">page de discussion</a> ?</p>

<p style="line-height: 150%;font-family:Arial,sans-serif;color: #333;">– L’équipe Wikia</p>
<br /><hr />
<p>
<ul>
<li><a href="http://communaute.wikia.com">Venez voir les derniers évènements sur Wikia !</a></li>
<li>Vous souhaitez contrôler les e-mails que vous recevez ? Rendez-vous sur vos <a href="{{fullurl:{{ns:special}}:Preferences}}">préférences</a></li>
</ul>
</p>
<div style="font-size: 70%;margin-top: 25px;text-align: center;">Cliquez <a href="$UNSUBSCRIBEURL">ici</a> pour vous désabonner de tous les e-mails de Wikia.</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'Quelqu’un a modifié votre site !',
	'founderemails-answers-email-page-edited-anon-body' => 'Bonjour $USERNAME,

Il semblerait que des modifications ont été effectuées sur votre wiki ! Pourquoi n’iriez-vous pas sur $MYHOMEURL pour voir ce qui a changé</a> ?

– L’équipe Wikia

___________________________________________
* Pour voir les derniers évènements sur Wikia, rendez-vous sur http://communaute.wikia.com
* Vous souhaitez contrôler les e-mails que vous recevez ? Rendez-vous sur : {{fullurl:{{ns:special}}:Preferences}}.
* Cliquez sur le lien suivant pour vous désabonner de tous les e-mails de Wikia : $UNSUBSCRIBEURL',
	'founderemails-answers-email-page-edited-anon-body-HTML' => '<p style="line-height: 150%;font-family:Arial,sans-serif;color: #333;">Bonjour $USERNAME,</p>

<p style="line-height: 150%;font-family:Arial,sans-serif;color: #333;">Il semblerait que des modifications ont été effectuées sur votre wiki ! Pourquoi n’iriez-vous pas <a href="$MYHOMEURL">voir ce qui a changé</a> ?</p>

<p style="line-height: 150%;font-family:Arial,sans-serif;color: #333;">– L’équipe Wikia</p>
<br /><hr />
<p>
<ul>
<li><a href="http://communaute.wikia.com">Venez voir les derniers évènements sur Wikia !</a></li>
<li>Vous souhaitez contrôler les e-mails que vous recevez ? Rendez-vous sur vos <a href="{{fullurl:{{ns:special}}:Preferences}}">préférences</a></li>
</ul>
</p>
<div style="font-size: 70%;margin-top: 25px;text-align: center;">Cliquez <a href="$UNSUBSCRIBEURL">ici</a> pour vous désabonner de tous les e-mails de Wikia.</div>',
	'founderemails-lot-happening-subject' => 'C’est chaud sur $WIKINAME !',
	'founderemails-lot-happening-body' => 'Bonjour $USERNAME,

Félicitations ! Il se passe beaucoup de choses sur $WIKINAME, $WIKIURL.

Si vous ne l’avez pas déjà fait, vous pouvez aller sur l\'activité du wikia et voir l’excellent travail qui est fourni.

Puisqu’il se passe beaucoup de choses, vous pouvez également modifier vos préférences d\'e-mail pour passer en mode résumé. Avec le mode résumé activé vous recevrez un e-mail par jour qui liste toute l’activité sur votre wikia.

– L\'équipe Wikia',
	'founderemails-lot-happening-body-HTML' => 'Bonjour $USERNAME,<br /><br />
Il y a beaucoup de choses qui se passent sur votre wiki, aujourd\'hui ! Rendez-vous sur $MYHOMEURL pour voir ce qu\'il en est.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- L\'équipe Wikia</div>',
	'founderemails-email-lot-happening-greeting' => 'Bonjour $USERNAME,',
	'founderemails-email-lot-happening-headline' => 'Félicitations ! Il se passe beaucoup de choses sur $WIKINAME aujourd’hui !',
	'founderemails-email-lot-happening-content' => 'Si vous ne l’avez pas déjà fait, vous pouvez aller sur l\'activité du wikia pour voir l’excellent travail qui est fourni. Puisqu’il se passe beaucoup de choses, vous pouvez également modifier vos préférences d\'e-mail pour passer en mode résumé. Avec le mode résumé activé vous recevrez un courriel par jour qui liste toute l’activité sur votre wikia.',
	'founderemails-email-lot-happening-signature' => '— L’équipe Wikia',
	'founderemails-email-lot-happening-button' => 'Voir l’activité',
	'founderemails-email-footer-line1' => 'Pour voir les derniers évènements sur Wikia, rendez-vous sur <a style="color:#2a87d5;text-decoration:none;" href="http://communaute.wikia.com">communaute.wikia.com</a>',
	'founderemails-email-footer-line2' => 'Vous souhaitez contrôler les e-mails que vous recevez ? Allez à vos <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">préférences</a>',
	'founderemails-email-0-day-heading' => 'Enchanté de vous connaître $USERNAME,',
	'founderemails-email-0-day-congratulations' => 'Félicitations pour la création de $HDWIKINAME !',
	'founderemails-email-0-day-tips-heading' => 'Voici quelques conseils utiles pour vous aider à démarrer :',
	'founderemails-email-0-day-addpages-heading' => 'Ajouter des pages.',
	'founderemails-email-0-day-addpages-content' => 'Le but d’un wiki est de partager des informations sur votre sujet en particulier. Créez des pages en cliquant sur « <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">Ajouter une page</a> » et complétez avec des informations plus spécifiques concernant votre sujet.',
	'founderemails-email-0-day-addpages-button' => 'Ajouter une page',
	'founderemails-email-0-day-addphotos-heading' => 'Ajouter des images.',
	'founderemails-email-0-day-addphotos-content' => 'Les pages sont toujours mieux quand elles comportent des illustrations ! Ajoutez des images aux pages ainsi qu’à la page d’accueil.  Vous pouvez cliquer sur « <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">Ajouter une image</a> » pour ajouter une image, une galerie ou un carrousel.',
	'founderemails-email-0-day-addphotos-button' => 'Ajouter une image',
	'founderemails-email-0-day-customizetheme-heading' => 'Personnaliser votre thème.',
	'founderemails-email-0-day-customizetheme-content' => 'Personnalisez le thème et le logo de votre wiki pour qu’il en jette !  Utilisez le <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">Concepteur de thème</a> pour ajouter des couleurs personnalisées à votre wiki et le rendre unique pour votre sujet.',
	'founderemails-email-0-day-customizetheme-button' => 'Personnaliser',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">On ne vous abandonne pas.</span>  Nous sommes là pour vous aider à faire de $WIKINAME un succès tout au long du parcours.  Visitez <a style="color:#2a87d5;text-decoration:none;" href="http://communaute.wikia.com">communaute.wikia.com</a> pour les forums, des conseils et de l’aide, ou <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">envoyez-nous</a> vos questions !',
	'founderemails-email-0-day-wikiahelps-signature' => 'Bonne construction de wiki !<br />L’équipe Wikia',
	'founderemails-email-3-day-heading' => 'Bonjour $USERNAME,',
	'founderemails-email-3-day-congratulations' => 'Nous voulions passer et voir comment les choses vont sur $HDWIKINAME.',
	'founderemails-email-3-day-tips-heading' => 'Cela fait 3 jours que vous avez commencé et nous avons pensé que nous pourrions passer par là pour vous proposer quelques conseils en plus pour votre wikia :',
	'founderemails-email-3-day-editmainpage-heading' => 'Agrémentez votre page principale.',
	'founderemails-email-3-day-editmainpage-content' => 'La page principale est l’une des premières choses que voient les gens quand ils visitent <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a>.  Faîtes bonne impression dès le début en écrivant un résumé détaillé de ce dont traite votre sujet et en ajoutant un diaporama, une galerie ou un carrousel.',
	'founderemails-email-3-day-editmainpage-button' => 'Agrémentez-la',
	'founderemails-email-3-day-addphotos-heading' => 'Ajoutez encore plus d’images.',
	'founderemails-email-3-day-addphotos-content' => 'L’un des meilleurs moyens pour que vos pages brillent et étincellent est d’<a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">ajouter quelques images</a>.',
	'founderemails-email-3-day-addphotos-button' => 'Ajoutez des images',
	'founderemails-email-3-day-explore-heading' => 'Trouvez l’inspiration.',
	'founderemails-email-3-day-explore-content' => 'N’ayez pas peur de consulter d’autres wikis pour voir comment ils ont travaillé leur page principale, leurs pages d’article, etc.',
	'founderemails-email-3-day-explore-button' => 'Explorez',
	'founderemails-email-3-day-wikiahelps-text' => 'Vous avez besoin d’aide pour comprendre comment quelque chose fonctionne ? Nous sommes toujours là pour vous ! Venez demander de l’aide et des conseils sur <a style="color:#2a87d5;text-decoration:none;" href="http://communaute.wikia.com">communaute.wikia.com</a>.',
	'founderemails-email-3-day-wikiahelps-signature' => 'Continuez votre excellent travail !<br />L’équipe Wikia',
	'founderemails-email-10-day-heading' => 'Comment ça va $USERNAME ?',
	'founderemails-email-10-day-congratulations' => 'Ouah, le temps passe vite ! Cela fait déjà 10 jours que vous avez créé $HDWIKINAME.',
	'founderemails-email-10-day-tips-heading' => 'Impliquez les autres sur votre projet et montrez tout le travail formidable que vous avez effectué ! Voici quelques façons de vous faire connaître :',
	'founderemails-email-10-day-share-heading' => 'Ne vous a-t-on jamais dit de partager ?',
	'founderemails-email-10-day-share-content' => 'Utilisez le bouton "Partager" sur la page d’accueil de votre wiki, les pages d’article et les images pour les montrer à vos amis et ceux qui vous suivent sur Facebook.',
	'founderemails-email-10-day-email-heading' => 'Exploitez la puissance des e-mails.',
	'founderemails-email-10-day-email-content' => 'Envoyez des e-mails aux autres que vous connaissez qui sont intéressés par votre sujet ou par vous aider, comme des camarades ou des collègues.  Vous pouvez aussi envoyer par e-mail certaines images de votre wikia en utilisant le bouton d’envoi par e-mail.',
	'founderemails-email-10-day-join-heading' => 'Contactez des sites Web similaires.',
	'founderemails-email-10-day-join-content' => 'Demandez de l’aide aux gens sur d’autres forums ou sites Web qui traitent du même sujet en postant des messages ou commentaires.  Si possible, contactez l’administrateur et voyez s’il est intéressé par le partage de liens – il met un lien vers votre wiki sur son site si vous mettez un lien vers son site sur votre wiki.',
	'founderemails-email-10-day-wikiahelps-text' => 'Vous pouvez aussi demander à d’autres Wikiens de vous aider sur votre wiki en postant sur les forums de <a style="color:#2a87d5;text-decoration:none;" href="http://communaute.wikia.com">communaute.wikia.com</a>.',
	'founderemails-email-10-day-wikiahelps-signature' => 'Continuez votre excellent travail !<br />L’équipe Wikia',
	'founderemails-email-views-digest-subject' => 'Vues aujourd’hui sur $WIKINAME',
	'founderemails-email-views-digest-body' => 'Bonjour $USERNAME,

Aujourd\'hui, $WIKINAME a été vu par $1 {{PLURAL:$1|personne|personnes}}.

Continuez d’ajouter du contenu et promouvoir votre wiki pour encourager plus de gens à lire, modifier et faire passer le mot.

$WIKIURL

L’équipe Wikia',
	'founderemails-email-views-digest-greeting' => 'Bonjour $USERNAME,',
	'founderemails-email-views-digest-headline' => '$WIKINAME a été vu par $1 {{PLURAL:$1|personne|personnes}} aujourd’hui.',
	'founderemails-email-views-digest-content' => 'Continuez d’ajouter du contenu et promouvoir votre wiki pour encourager plus de gens à lire, modifier et faire passer le mot.',
	'founderemails-email-views-digest-signature' => '— L’équipe Wikia',
	'founderemails-email-views-digest-button' => 'Ajouter plus de pages',
	'founderemails-email-complete-digest-subject' => 'L’activité récente sur $WIKINAME',
	'founderemails-email-complete-digest-body' => 'Bonjour $USERNAME,

Il est l’heure pour votre dose quotidienne d’activité sur $WIKINAME, $WIKIURL.

$1 {{PLURAL:$1|personne|personnes}} ont vu votre wikia.

Continuez votre excellent travail en ajoutant du contenu intéressant à lire !

$2 {{PLURAL:$2|modification a été effectuée|modifications ont été effectuées}}.

Des contributeurs heureux font des wikias où il fait bon vivre. Assurez-vous de remercier vos contributeurs et faites un point avec eux de temps en temps.

$3 {{PLURAL:$3|personne a rejoint|personnes ont rejoint}} votre wikia.

Accueillez les nouveaux sur votre wikia en laissant un message sur leur page de discussion.

Vous toujours vous rendre sur l’activité du wikia pour voir les modifications qui ont actuellement été faites sur $WIKINAME. Consultez-la souvent, en tant que fondateur votre communauté compte sur vous pour aider à diriger et maintenir le wikia.

L’équipe Wikia',
	'founderemails-email-complete-digest-greeting' => 'Bonjour $USERNAME,',
	'founderemails-email-complete-digest-headline' => 'Il est l’heure pour votre dose quotidienne d’activité sur $WIKINAME.',
	'founderemails-email-complete-digest-content-heading1' => '$1 {{PLURAL:$1|personne a|personnes ont}} vu votre wiki.',
	'founderemails-email-complete-digest-content1' => 'Continuez votre excellent travail en ajoutant du contenu intéressant à lire !',
	'founderemails-email-complete-digest-content-heading2' => '$1 {{PLURAL:$1|modification a été effectuée|modifications ont été effectuées}}.',
	'founderemails-email-complete-digest-content2' => 'Des contributeurs heureux font des wikis où il fait bon vivre. Assurez-vous de remercier vos contributeurs et faites un point avec eux de temps en temps.',
	'founderemails-email-complete-digest-content-heading3' => '$1 {{PLURAL:$1|personne a|personnes ont}} rejoint votre wiki.',
	'founderemails-email-complete-digest-content3' => 'Accueillez les nouveaux sur votre wikia en laissant un message sur leur page de discussion.
<br /><br />
Vous pouvez toujours vous rendre sur l’activité du wikia pour voir les modifications effectuées sur $WIKINAME. Consultez-la souvent, en tant que fondateur votre communauté compte sur vous pour aider à diriger et maintenir le wikia.',
	'founderemails-email-complete-digest-signature' => '— L’équipe Wikia',
	'founderemails-email-complete-digest-button' => 'Aller à l’activité du wikia',
	'founderemails-pref-joins' => 'M\'envoyer un e-mail quand quelqu\'un rejoint $1',
	'founderemails-pref-edits' => 'M\'envoyer un e-mail quand quelqu\'un modifie $1',
	'founderemails-pref-views-digest' => 'M’envoyer un e-mail quotidien indiquant combien de fois $1 a été consulté',
	'founderemails-pref-complete-digest' => 'M’envoyer un résumé quotidien de l’activité sur $1',
	'founderemails-pref-joins-v2' => '...quelqu’un participe pour la première fois',
	'founderemails-pref-edits-v2' => '...quelqu’un effectue une modification',
	'founderemails-pref-views-digest-v2' => '...un résumé quotidien des vues totales est prêt',
	'founderemails-pref-complete-digest-v2' => '...un compte-rendu quotidien des premières fois, modifications et vues est prêt',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => '<p style="line-height: 150%;font-family:Arial,sans-serif;color: #333;">Bonjour $USERNAME,</p>

<p style="line-height: 150%;font-family:Arial,sans-serif;color: #333;"> Un nouvel utilisateur, $EDITORNAME, a effectué une modification sur votre wiki pour la toute première fois ! Pourquoi ne pas passer lui dire bonjour sur sa <a href="$EDITORTALKPAGEURL">page de discussion</a> ?</p>

<p style="line-height: 150%;font-family:Arial,sans-serif;color: #333;">– L’équipe Wikia</p>
<br /><hr />
<p>
<ul>
<li><a href="http://communaute.wikia.com">Venez voir les derniers évènements sur Wikia !</a></li>
<li>Vous souhaitez contrôler les e-mails que vous recevez ? Rendez-vous sur vos <a href="{{fullurl:{{ns:special}}:Preferences}}">préférences</a></li>
</ul>
</p>
<div style="font-size: 70%;margin-top: 25px;text-align: center;">Cliquez <a href="$UNSUBSCRIBEURL">ici</a> pour vous désabonner de tous les e-mails de Wikia.</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Bonjour $USERNAME,

Un nouvel utilisateur, $EDITORNAME, a effectué une modification sur votre site pour la toute première fois ! Pourquoi ne pas passer lui dire bonjour sur sa page de discussion ($EDITORTALKPAGEURL) ?

— L’équipe Wikia

___________________________________________
* Pour voir les derniers évènements sur Wikia, rendez-vous sur http://communaute.wikia.com
* Vous souhaitez contrôler les e-mails que vous recevez ? Rendez-vous sur : {{fullurl:{{ns:special}}:Preferences}}.
* Cliquez sur le lien suivant pour vous désabonner de tous les e-mails de Wikia : $UNSUBSCRIBEURL',
	'founderemails-email-footer-line3' => '<a href="https://twitter.com/wikia_fr" style="text-decoration:none">
<img alt="twitter" src="http://images.wikia.com/wikianewsletter/images/f/f7/Twitter.png" style="border:none">
</a>
 
<a href="https://facebook.com/wikia.fr" style="text-decoration:none">
<img alt="facebook" src="http://images.wikia.com/wikianewsletter/images/5/55/Facebook.png" style="border:none">
</a>

<a href="https://plus.google.com/u/0/102929967599324609587/posts" style="text-decoration:none">
<img alt="google+" src="http://images.wikia.com/wikianewsletter/images/5/51/Google.png" style="border:none">
</a>
 
<a href="https://youtube.com/channel/UClzAEgYaMs0SyDnXS4cyefg" style="text-decoration:none">
<img alt="youtube" src="http://images.wikia.com/wikianewsletter/images/a/af/Youtube.png" style="border:none">
</a>
 
<a href="http://communaute.wikia.com/wiki/Blog:Actualit%C3%A9_Wikia" style="text-decoration:none">
<img alt="wikia" src="http://images.wikia.com/wikianewsletter/images/b/be/Wikia_blog.png" style="border:none">
</a>',
];

$messages['fy'] = [
	'founderemails-email-user-registered-greeting' => 'Hallo $USERNAME,',
	'founderemails-email-first-edit-greeting' => 'Hallo $USERNAME,',
	'founderemails-email-general-edit-greeting' => 'Hallo $USERNAME,',
	'founderemails-email-anon-edit-greeting' => 'Hallo $USERNAME,',
	'founderemails-email-lot-happening-greeting' => 'Hallo $USERNAME,',
	'founderemails-email-views-digest-greeting' => 'Hallo $USERNAME,',
	'founderemails-email-complete-digest-greeting' => 'Hallo $USERNAME,',
];

$messages['gl'] = [
	'founderemails-desc' => 'Axuda a informar aos fundadores sobre os cambios que acontecen no seu wiki',
	'tog-founderemailsenabled' => 'Enviádeme actualizacións por correo electrónico sobre o que acontece no wiki (só fundadores)',
	'founderemails-email-user-registered-greeting' => 'Boas, $USERNAME:',
	'founderemails-email-user-registered-headline' => 'Parabéns! $EDITORNAME acaba de unirse a $WIKINAME',
	'founderemails-email-user-registered-content' => 'Esta é a oportunidade para darlles a benvida ao wiki e animar os novos a que axuden a editar. Cantos máis, mellor e máis rápido medrará o wiki.',
	'founderemails-email-user-registered-signature' => 'O equipo de Wikia',
	'founderemails-email-user-registered-button' => 'Déalles a benvida',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '$WIKINAME ten unha nova edición!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Boas, $USERNAME:

Moi ben! $EDITORNAME acaba de facer a súa primeira edición en $WIKINAME.

Bótelle unha ollada a "$PAGETITLE" para ver o que engadiu.

$PAGEURL

O equipo de Wikia',
	'founderemails-email-first-edit-greeting' => 'Boas, $USERNAME:',
	'founderemails-email-first-edit-headline' => 'Moi ben! $EDITORNAME acaba de facer a súa primeira edición en $WIKINAME.',
	'founderemails-email-first-edit-content' => 'Bótelle unha ollada a "$PAGETITLE" para ver o que engadiu.',
	'founderemails-email-first-edit-signature' => 'O equipo de Wikia',
	'founderemails-email-first-edit-button' => 'Bótelle unha ollada!',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Boas, $USERNAME:<br /><br />
Semella que o usuario rexistrado chamado $EDITORNAME fixo unha edición no seu wiki por vez primeira! Por que non se achega ata a súa <a href="$EDITORTALKPAGEURL">páxina de conversa</a> para saudalo?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- O equipo de Wikia</div>',
	'founderemails-email-page-edited-reg-user-subject' => 'Nova edición en $WIKINAME!',
	'founderemails-email-page-edited-reg-user-body' => 'Boas, $USERNAME:

$EDITORNAME acaba de facer unha edición en "$PAGETITLE" de $WIKINAME.

Bótelle unha ollada a "$PAGETITLE" para ver o que modificou.

$PAGEURL

O equipo de Wikia',
	'founderemails-email-general-edit-greeting' => 'Boas, $USERNAME:',
	'founderemails-email-general-edit-headline' => '$EDITORNAME acaba de facer outra edición en "$PAGETITLE" de $WIKINAME.',
	'founderemails-email-general-edit-content' => 'Bótelle unha ollada a "$PAGETITLE" para ver o que engadiu.',
	'founderemails-email-general-edit-signature' => 'O equipo de Wikia',
	'founderemails-email-general-edit-button' => 'Bótelle unha ollada!',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Boas, $USERNAME:<br /><br />
Semella que o usuario rexistrado chamado $EDITORNAME fixo unha edición no seu wiki! Por que non se achega ata a súa <a href="$EDITORTALKPAGEURL">páxina de conversa</a> para saudalo?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- O equipo de Wikia</div>',
	'founderemails-email-page-edited-anon-subject' => 'Un amigo misterioso fixo unha modificación en $WIKINAME',
	'founderemails-email-page-edited-anon-body' => 'Boas, $USERNAME:

Un colaborador de Wikia fixo unha modificación en "$PAGETITLE" de $WIKINAME.

Os colaboradores de Wikia son xente que fan edicións sen rexistrarse cunha conta de Wikia. Vaia ver o que engadiu o amigo misterioso!

$PAGEURL

O equipo de Wikia',
	'founderemails-email-anon-edit-greeting' => 'Boas, $USERNAME:',
	'founderemails-email-anon-edit-headline' => 'Un colaborador de Wikia fixo unha modificación en "$PAGETITLE" de $WIKINAME.',
	'founderemails-email-anon-edit-content' => 'Os colaboradores de Wikia son xente que fan edicións sen rexistrarse cunha conta de Wikia. Vaia ver o que engadiu o amigo misterioso!',
	'founderemails-email-anon-edit-signature' => 'O equipo de Wikia',
	'founderemails-email-anon-edit-button' => 'Bótelle unha ollada!',
	'founderemails-email-page-edited-anon-body-HTML' => 'Boas, $USERNAME:<br /><br />
Semella que alguén fixo unha edición no seu wiki! Por que non <a href="$MYHOMEURL">comproba</a> o que fixo?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- O equipo de Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'Un usuario rexistrado fixo unha modificación no seu sitio por vez primeira!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Boas, $USERNAME:

Semella que o usuario rexistrado chamado $EDITORNAME fixo unha edición no seu wiki por vez primeira! Por que non se achega ata a súa páxina de conversa ($EDITORTALKPAGEURL) para saudalo?

-- O equipo de Wikia',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'Boas, $USERNAME:<br /><br />
Semella que o usuario rexistrado chamado $EDITORNAME fixo unha edición no seu wiki por vez primeira! Por que non se achega ata a súa <a href="$EDITORTALKPAGEURL">páxina de conversa</a> para saudalo?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- O equipo de Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Un usuario rexistrado fixo unha modificación no seu sitio!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Boas, $USERNAME:

Semella que o usuario rexistrado chamado $EDITORNAME fixo unha edición no seu wiki! Por que non se achega ata a súa páxina de conversa ($EDITORTALKPAGEURL) para saudalo?

-- O equipo de Wikia',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => 'Boas, $USERNAME:<br /><br />
Semella que o usuario rexistrado chamado $EDITORNAME fixo unha edición no seu wiki! Por que non se achega ata a súa <a href="$EDITORTALKPAGEURL">páxina de conversa</a> para saudalo?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- O equipo de Wikia</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'Alguén fixo unha modificación no seu sitio!',
	'founderemails-answers-email-page-edited-anon-body' => 'Boas, $USERNAME:

Semella que alguén fixo unha edición no seu wiki! Por que non comproba $MYHOMEURL o que fixo?

-- O equipo de Wikia',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Boas, $USERNAME:<br /><br />
Semella que alguén fixo unha edición no seu wiki! Por que non <a href="$MYHOMEURL">comproba</a> o que fixo?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- O equipo de Wikia</div>',
	'founderemails-lot-happening-subject' => '$WIKINAME está moi activo!',
	'founderemails-lot-happening-body' => 'Boas, $USERNAME:

Parabéns! Ocorreron moitas cousas hoxe en $WIKINAME, $WIKIURL.

Se aínda non o fixo, pode pasar polo wiki de actividades para ollar todo o bo traballo que se está a facer.

Dado que están ocorrendo moitas cousas, poida que tamén queira cambiar as súas preferencias do correo electrónico para pasar ao modo resumido. Neste modo, recibirá un correo cunha lista de toda a actividade no seu wiki cada día.

O equipo de Wikia',
	'founderemails-lot-happening-body-HTML' => 'Boas, $USERNAME:<br /><br />
Hoxe aconteceron moitas cousas no seu wiki! Pase por $MYHOMEURL para botarlle un ollo ao que ocorreu.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- O equipo de Wikia</div>',
	'founderemails-email-lot-happening-greeting' => 'Boas, $USERNAME:',
	'founderemails-email-lot-happening-headline' => 'Parabéns! Ocorreron moitas cousas hoxe en $WIKINAME!',
	'founderemails-email-lot-happening-content' => 'Se aínda non o fixo, pode pasar polo wiki de actividades para ollar todo o bo traballo que se está a facer. Dado que están ocorrendo moitas cousas, poida que tamén queira cambiar as súas preferencias do correo electrónico para pasar ao modo resumido. Neste modo, recibirá un correo cunha lista de toda a actividade no seu wiki cada día.',
	'founderemails-email-lot-happening-signature' => 'O equipo de Wikia',
	'founderemails-email-lot-happening-button' => 'Ollar as actividades',
	'founderemails-email-footer-line1' => 'Para botar unha ollada aos últimos acontecementos en Wikia, visite <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>',
	'founderemails-email-footer-line2' => 'Quere controlar os correos electrónicos que recibe? Vaia ás súas <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">preferencias</a>',
	'founderemails-email-0-day-heading' => 'Estamos encantados coa súa incorporación, $USERNAME:',
	'founderemails-email-0-day-congratulations' => 'Parabéns pola creación de $HDWIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'Aquí ten algúns consellos útiles para comezar:',
	'founderemails-email-0-day-addpages-heading' => 'Engada páxinas.',
	'founderemails-email-0-day-addpages-content' => 'A base dun wiki é compartir información sobre un tema. Cree páxinas premendo en "<a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">Engadir unha páxina</a>" e encha as páxinas con información específica sobre o seu tema.',
	'founderemails-email-0-day-addpages-button' => 'Engadir unha páxina',
	'founderemails-email-0-day-addphotos-heading' => 'Engada fotos.',
	'founderemails-email-0-day-addphotos-content' => 'As páxinas locen máis con imaxes! Engada fotos ás súas páxinas e á súa páxina principal. Pode premer en "<a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">Engadir unha foto</a>" para engadir unha foto, unha galería de fotos ou unha presentación de diapositivas.',
	'founderemails-email-0-day-addphotos-button' => 'Engadir unha foto',
	'founderemails-email-0-day-customizetheme-heading' => 'Personalice o seu tema visual.',
	'founderemails-email-0-day-customizetheme-content' => 'Personalice o tema visual e o logotipo para facer lucir o seu wiki! Utilice o <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">Creador de deseños de páxinas</a> para engadir cores personalizadas ao seu wiki e facelo único no seu tema.',
	'founderemails-email-0-day-customizetheme-button' => 'Personalizar',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">Non deixaremos que estea só.</span> Estamos aquí para axudar a que $WIKINAME se vaia abrindo paso. Visite <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a> para atopar foros, consellos e axuda ou envíenos un <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">correo electrónico</a> coas súas preguntas!',
	'founderemails-email-0-day-wikiahelps-signature' => 'Páseo ben construíndo o wiki!<br />O equipo de Wikia',
	'founderemails-email-3-day-heading' => 'Boas, $USERNAME:',
	'founderemails-email-3-day-congratulations' => 'Queremos comentarlle como van as cousas en $HDWIKINAME.',
	'founderemails-email-3-day-tips-heading' => 'Hai 3 días que comezou e pensamos que estaría ben darlle algúns consellos útiles para construír o seu wiki:',
	'founderemails-email-3-day-editmainpage-heading' => 'Adorne a súa páxina principal.',
	'founderemails-email-3-day-editmainpage-content' => 'A páxina principal é unha das primeiras cousas que a xente ve cando visita <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a>. Cree unha boa primeira impresión escribindo un resumo detallado sobre de que vai o seu tema e engadindo unha presentación de diapositivas ou unha galería.',
	'founderemails-email-3-day-editmainpage-button' => 'Adórnea',
	'founderemails-email-3-day-addphotos-heading' => 'Engada aínda máis fotos.',
	'founderemails-email-3-day-addphotos-content' => 'Unha das mellores maneiras de que as súas páxinas lozan máis é premendo en "<a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">Engadir algunhas fotos</a>".',
	'founderemails-email-3-day-addphotos-button' => 'Engadir as fotos',
	'founderemails-email-3-day-explore-heading' => 'Atope inspiración.',
	'founderemails-email-3-day-explore-content' => 'Non teña medo de ollar outros wikis para ver como traballan. A continuación citamos algúns dos nosos wikis favoritos: <a style="color:#2a87d5;text-decoration:none;" href="http://muppets.wikia.com">Muppet Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://poptarts.wikia.com">Pop Tarts Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://monsterhigh.wikia.com">Monster High Wiki</a>.',
	'founderemails-email-3-day-explore-button' => 'Explorar',
	'founderemails-email-3-day-wikiahelps-text' => 'Necesita axuda sobre como funciona isto? Estamos aquí para vostede! Pode atopar axuda e consellos en <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-3-day-wikiahelps-signature' => 'Siga traballando arreo!<br />O equipo de Wikia',
	'founderemails-email-10-day-heading' => 'Como van as cousas, $USERNAME?',
	'founderemails-email-10-day-congratulations' => 'Como voa o tempo! Hai xa 10 días que comezou $HDWIKINAME.',
	'founderemails-email-10-day-tips-heading' => 'Fai que outros se comprometan co proxecto e ensínelles todo o que está a facer! Aquí ten algúns modos de difundir a palabra:',
	'founderemails-email-10-day-share-heading' => 'Non lle dixo a súa nai que compartise?',
	'founderemails-email-10-day-share-content' => 'Use o botón de compartir da páxina principal do seu wiki, páxinas de artigos e fotos para mostrar aos amigos e seguidores no Facebook o seu traballo no wiki.',
	'founderemails-email-10-day-email-heading' => 'Aproveite o poder do correo electrónico.',
	'founderemails-email-10-day-email-content' => 'Envíe correos electrónicos á xente que estea interesada no tema e que lle poida axudar, como un amigo da escola ou un compañeiro de traballo. Tamén pode enviar fotos do seu wiki mediante o botón do correo electrónico.',
	'founderemails-email-10-day-join-heading' => 'Únase a sitios similares.',
	'founderemails-email-10-day-join-content' => 'Pida axuda publicando mensaxes ou comentarios noutros foros ou páxinas web que tratan o mesmo tema. Se fose posible, póñase en contacto co administrador e vexa se están interesados en compartir os seus contidos incluíndo unha ligazón na súa páxina web se vostede pon tamén outra ligazón cara ao seu sitio.',
	'founderemails-email-10-day-wikiahelps-text' => 'Tamén pode preguntar nos foros aos outros usuarios de Wikia se queren participar no seu wiki en <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-10-day-wikiahelps-signature' => 'Siga traballando arreo!<br />O equipo de Wikia',
	'founderemails-email-views-digest-subject' => 'Visitas que $WIKINAME recibiu hoxe',
	'founderemails-email-views-digest-body' => 'Boas, $USERNAME:

Hoxe $WIKINAME recibiu as visitas {{PLURAL:$1|dunha persoa|de $1 persoas}}.

Continúe engadindo novos contidos e promocionando o seu wiki para animar a que máis xente lea, edite e difunda a palabra.

$WIKIURL

O equipo de Wikia',
	'founderemails-email-views-digest-greeting' => 'Boas, $USERNAME:',
	'founderemails-email-views-digest-headline' => 'Hoxe $WIKINAME recibiu as visitas {{PLURAL:$1|dunha persoa|de $1 persoas}}.',
	'founderemails-email-views-digest-content' => 'Continúe engadindo novos contidos e promocionando o seu wiki para animar a que máis xente lea, edite e difunda a palabra.',
	'founderemails-email-views-digest-signature' => 'O equipo de Wikia',
	'founderemails-email-views-digest-button' => 'Engadir máis páxinas',
	'founderemails-email-complete-digest-subject' => 'A actividade recente en $WIKINAME',
	'founderemails-email-complete-digest-body' => 'Boas, $USERNAME:

É hora da súa dose diaria da actividade en $WIKINAME, $WIKIURL.

$1 {{PLURAL:$1|persoa visitou|persoas visitaron}} o seu wiki.

Continúe o seu gran traballo engadindo contidos interesantes para os lectores!

{{PLURAL:$2|Fíxose $2 edición|Fixéronse $2 edicións}}.

Os editores felices fan wikis felices. Asegúrese de agradecer aos seus editores e de manter unha comunicación con eles de cando en vez.

$3 {{PLURAL:$3|persoa uniuse|persoas uníronse}} ao seu wiki.

Dea a benvida aos novos cunha mensaxe nas súas páxinas de conversa.

Sempre pode pasar pola actividade do wiki para ollar todos os cambios que se están a facer en $WIKINAME. Bótelle unha ollada a miúdo; como fundador do wiki, a comunidade buscará en vostede orientación.

O equipo de Wikia',
	'founderemails-email-complete-digest-greeting' => 'Boas, $USERNAME:',
	'founderemails-email-complete-digest-headline' => 'É hora da súa dose diaria da actividade en $WIKINAME.',
	'founderemails-email-complete-digest-content-heading1' => '$1 {{PLURAL:$1|persoa visitou|persoas visitaron}} o seu wiki.',
	'founderemails-email-complete-digest-content1' => 'Continúe o seu gran traballo engadindo contidos interesantes para os lectores!',
	'founderemails-email-complete-digest-content-heading2' => '{{PLURAL:$1|Fíxose $1 edición|Fixéronse $1 edicións}}.',
	'founderemails-email-complete-digest-content2' => 'Os editores felices fan wikis felices. Asegúrese de agradecer aos seus editores e de manter unha comunicación con eles de cando en vez.',
	'founderemails-email-complete-digest-content-heading3' => '$1 {{PLURAL:$1|persoa uniuse|persoas uníronse}} ao seu wiki.',
	'founderemails-email-complete-digest-content3' => 'Dea a benvida aos novos cunha mensaxe nas súas páxinas de conversa.
<br /><br />
Sempre pode pasar pola actividade do wiki para ollar todos os cambios que se están a facer en $WIKINAME. Bótelle unha ollada a miúdo; como fundador do wiki, a comunidade buscará en vostede orientación.',
	'founderemails-email-complete-digest-signature' => 'O equipo de Wikia',
	'founderemails-email-complete-digest-button' => 'Ir á actividade do wiki',
	'founderemails-pref-joins' => 'Enviádeme un correo electrónico cando alguén se una a $1',
	'founderemails-pref-edits' => 'Enviádeme un correo electrónico cando alguén edite $1',
	'founderemails-pref-views-digest' => 'Enviádeme un correo electrónico diario dicindo as visitas que recibiu $1',
	'founderemails-pref-complete-digest' => 'Enviádeme un resumo diario da actividade en $1',
	'founderemails-pref-joins-v2' => '...alguén se une',
	'founderemails-pref-edits-v2' => '...alguén edita',
	'founderemails-pref-views-digest-v2' => '...un resumo diario das visitas totais',
	'founderemails-pref-complete-digest-v2' => '...un resumo diario das incorporacións, edicións e visitas',
];

$messages['he'] = [
	'tog-founderemailsenabled' => 'לשלוח אליי בדואר אלקטרוני עדכונים על דברים שאנשים אחרים עושים (רק למייסדים)',
	'founderemails-email-user-registered-greeting' => 'שלום, $USERNAME.',
	'founderemails-email-user-registered-headline' => 'מזל טוב! $EDITORNAME הצטרף ל$WIKINAME.',
	'founderemails-email-user-registered-content' => 'אנא {{GENDER:תנצל|תנצלי}} את ההזדמנות לקבל את פניהם לוויקיה ו{{GENDER:תעודד|תעודדי}} אותם לעזור. כמה שיותר מרץ, ואתריך יצמח מהר יותר.',
	'founderemails-email-user-registered-signature' => 'צוות ויקיה',
	'founderemails-email-user-registered-button' => 'לקבל את פניהם',
	'founderemails-email-first-edit-signature' => 'צוות ויקיה',
	'founderemails-email-page-edited-reg-user-subject' => 'עריכה חדשה ב$WIKINAME!',
	'founderemails-email-anon-edit-signature' => 'צוות ויקיה',
	'founderemails-email-lot-happening-signature' => 'צוות ויקיה',
	'founderemails-email-0-day-addpages-button' => 'הוספת דף',
	'founderemails-email-0-day-addphotos-heading' => 'הוספת תמונות',
	'founderemails-email-0-day-addphotos-button' => 'הוספת תמונה',
	'founderemails-email-views-digest-greeting' => 'שלום, $USERNAME.',
	'founderemails-email-views-digest-signature' => 'צוות ויקיה',
	'founderemails-email-views-digest-button' => 'הוספת יותר דפים',
	'founderemails-email-complete-digest-subject' => 'הפעילות האחרונה ב$WIKINAME',
	'founderemails-email-complete-digest-signature' => 'צוות ויקיה',
	'founderemails-pref-joins' => 'קבלת התראה בהצטרפות משתמש ל$1',
	'founderemails-pref-joins-v2' => '...מישהו מצטרף',
	'founderemails-pref-edits-v2' => '...מתבצעת עריכה',
];

$messages['hu'] = [
	'founderemails-desc' => 'Segít tájékoztatni a wiki alapítóit a rajta történt változásokról',
	'tog-founderemailsenabled' => 'Küldj emailt róla, mit csinálnak a többiek (csak alapítók)',
	'founderemails-email-user-registered-greeting' => 'Szia, $USERNAME!',
	'founderemails-email-user-registered-headline' => 'Gratulálunk! $EDITORNAME éppen most csatlakozott a(z) $WIKINAME wikihez.',
	'founderemails-email-user-registered-content' => 'Használd ki a lehetőséget, hogy üdvözöld és szerkesztésre bátorítsd őt. Minél többször teszed ezt, annál vígabban és gyorsabban fog nőni a wikid.',
	'founderemails-email-user-registered-signature' => 'A Wikia csapat',
	'founderemails-email-user-registered-button' => 'Üdvözöld őt!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Szia $USERNAME!

Úgy tűnik, hogy $EDITORNAME regisztrált felhasználó szerkesztette a wikidet! Beugorhatnál a vitalapjára ($EDITORTALKPAGEURL) köszönteni.

– A Wikia csapat',
	'founderemails-answers-email-page-edited-anon-subject' => 'Valaki megváltoztatta a QA wikidet!',
	'founderemails-answers-email-page-edited-anon-body' => 'Szia $USERNAME!

Úgy tűnik, hogy valaki szerkesztette a wikidet! Nézd meg a(z) $MYHOMEURL lapot, hogy lásd mi változott!

– A Wikia csapat',
	'founderemails-email-3-day-addphotos-button' => 'Fényképek hozzáadása',
	'founderemails-email-3-day-explore-button' => 'Felfedezés',
];

$messages['ia'] = [
	'founderemails-desc' => 'Adjuta a informar le fundatores super le modificationes in lor wiki',
	'tog-founderemailsenabled' => 'Inviar me actualisationes super lo que le altere personas face (fundatores solmente)',
	'founderemails-email-user-registered-greeting' => 'Salute $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Felicitationes! Le nove usator $EDITORNAME ha justo create su conto in $WIKINAME.',
	'founderemails-email-user-registered-content' => 'Per favor da le un benvenita a tu wiki e incoragia le a adjutar. Quanto plus contributores tanto plus gaudio, e tanto plus rapidemente tu wiki crescera.',
	'founderemails-email-user-registered-signature' => 'Le equipa de Wikia',
	'founderemails-email-user-registered-button' => 'Dar le un benvenita',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '$WIKINAME ha un nove modification!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Salute $USERNAME,

Multo bon! $EDITORNAME ha justo facite su primissime modification in $WIKINAME.

Visita $PAGETITLE pro vider lo que ille ha addite.

$PAGEURL

Le equipa de Wikia',
	'founderemails-email-first-edit-greeting' => 'Salute $USERNAME,',
	'founderemails-email-first-edit-headline' => 'Multo bon! $EDITORNAME ha justo facite su primissime modification in $WIKINAME.',
	'founderemails-email-first-edit-content' => 'Visita $PAGETITLE pro vider lo que ille ha addite.',
	'founderemails-email-first-edit-signature' => 'Le equipa de Wikia',
	'founderemails-email-first-edit-button' => 'Monstra me lo!',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Salute $USERNAME,<br /><br />
Pare que le usator registrate $EDITORNAME ha modificate tu wiki pro le prime vice! Proque non visitar su pagina de discussion ($EDITORTALKPAGEURL) pro salutar le?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Le equipa de Wikia</div>',
	'founderemails-email-page-edited-reg-user-subject' => 'Nove modification in $WIKINAME!',
	'founderemails-email-page-edited-reg-user-body' => 'Salute $USERNAME,

$EDITORNAME ha justo facite un altere modification del pagina $PAGETITLE in $WIKINAME.

Visita $PAGETITLE pro vider su modification.

$PAGEURL

Le equipa de Wikia',
	'founderemails-email-general-edit-greeting' => 'Salute $USERNAME,',
	'founderemails-email-general-edit-headline' => '$USERNAME ha justo facite un altere modification del pagina $PAGETITLE in $WIKINAME.',
	'founderemails-email-general-edit-content' => 'Visita $PAGETITLE pro vider su modification.',
	'founderemails-email-general-edit-signature' => 'Le equipa de Wikia',
	'founderemails-email-general-edit-button' => 'Monstra me lo!',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Salute $USERNAME,<br /><br />
Pare que le usator registrate $EDITORNAME ha modificate tu wiki! Proque non visitar su pagina de discussion ($EDITORTALKPAGEURL) pro salutar le?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Le equipa de Wikia</div>',
	'founderemails-email-page-edited-anon-subject' => 'Un amico mysteriose ha modificate $WIKINAME',
	'founderemails-email-page-edited-anon-body' => 'Salute $USERNAME,

Un contributor a Wikia ha justo facite un modification del pagina $PAGETITLE in $WIKINAME.

Le contributores a Wikia es personas qui face modificationes sin identificar se con un conto de Wikia. Va vider lo que iste amico mysteriose ha addite!

$PAGEURL

Le equipa de Wikia',
	'founderemails-email-anon-edit-greeting' => 'Salute $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'Un contributor a Wikia ha justo facite un modification del pagina $PAGETITLE in $WIKINAME.',
	'founderemails-email-anon-edit-content' => 'Le contributores a Wikia es personas qui face modificationes sin identificar se con un conto de Wikia. Va vider lo que iste amico mysteriose ha addite!',
	'founderemails-email-anon-edit-signature' => 'Le equipa de Wikia',
	'founderemails-email-anon-edit-button' => 'Monstra me lo!',
	'founderemails-email-page-edited-anon-body-HTML' => 'Salute $USERNAME,<br /><br />
Il pare que alcuno ha modificate tu wiki! Proque non visitar $MYHOMEURL pro vider lo que ha cambiate?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Le equipa de Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'Un usator registrate ha modificate tu sito pro le prime vice!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Salute $USERNAME,

Il pare que le usator registrate $EDITORNAME ha modificate tu wiki pro le prime vice! Proque non visitar su pagina de discussion ($EDITORTALKPAGEURL) pro salutar le?

-- Le equipa de Wikia',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'Salute $USERNAME,<br /><br />
Il pare que le usator registrate $EDITORNAME ha modificate tu wiki pro le prime vice! Proque non visitar su pagina de discussion ($EDITORTALKPAGEURL) pro salutar le?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Le equipa de Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Un usator registrate ha modificate tu sito!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Salute $USERNAME,

Il pare que le usator registrate $EDITORNAME ha modificate tu wiki! Proque non visitar su pagina de discussion ($EDITORTALKPAGEURL) pro salutar le?

-- Le equipa de Wikia',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => 'Salute $USERNAME,<br /><br />
Il pare que le usator registrate $EDITORNAME ha modificate tu wiki! Proque non visitar su pagina de discussion ($EDITORTALKPAGEURL) pro salutar le?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Le equipa de Wikia</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'Alcuno ha modificate tu sito!',
	'founderemails-answers-email-page-edited-anon-body' => 'Salute $USERNAME,

Il pare que alcuno ha modificate tu wiki! Proque non visitar $MYHOMEURL pro vider lo que ha cambiate?

-- Le equipa de Wikia',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Salute $USERNAME,<br /><br />
Il pare que alcuno ha modificate tu wiki! Proque non visitar $MYHOMEURL pro vider lo que ha cambiate?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Le equipa de Wikia</div>',
	'founderemails-lot-happening-subject' => '$WIKINAME deveni de plus in plus active!',
	'founderemails-lot-happening-body' => 'Salute $USERNAME,

Felicitationes, il eveni multo in $WIKINAME, $WIKIURL.

Si tu non jam lo ha facite, visita Wiki Activitate pro vider tote le progresso que ha essite realisate.

Considerante que il ha multe activitate, es possibile que tu prefere cambiar le livration de e-mail in modo de digesto. Con le modo de digesto, tu recipera un sol e-mail cata die que lista tote le activitate de tu wiki.

-- Le equipa de Wiki',
	'founderemails-lot-happening-body-HTML' => 'Salute $USERNAME,<br /><br />
Il eveni multo in tu wiki hodie! Visita $MYHOMEURL pro vider lo que ha occurrite.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Le equipa de Wikia</div>',
	'founderemails-email-lot-happening-greeting' => 'Salute $USERNAME,',
	'founderemails-email-lot-happening-headline' => 'Felicitationes, il eveni multo in $WIKINAME hodie!',
	'founderemails-email-lot-happening-content' => 'Si tu non jam lo ha facite, visita Wiki Activitate pro vider tote le bon labor que ha essite facite. Considerante que il ha multe activitate, es possibile que tu prefere cambiar le livration de e-mail in modo de digesto. Con le modo de digesto, tu recipera un sol e-mail cata die que lista tote le activitate de tu wiki.',
	'founderemails-email-lot-happening-signature' => 'Le equipa de Wikia',
	'founderemails-email-lot-happening-button' => 'Vider activitates',
	'founderemails-email-footer-line1' => 'Pro sequer le ultime evenimentos in Wikia, visita <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>',
	'founderemails-email-footer-line2' => 'Vole seliger le e-mails que tu recipe? Face lo in tu [{{fullurl:{{ns:special}}:Preferences}} Preferentias]',
	'founderemails-email-0-day-heading' => 'Placer de cognoscer te, $USERNAME.',
	'founderemails-email-0-day-congratulations' => 'Felicitationes pro le creation de $WIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'Ecce alcun consilios utile pro adjutar te a comenciar:',
	'founderemails-email-0-day-addpages-heading' => 'Adder paginas.',
	'founderemails-email-0-day-addpages-content' => 'Le essentia de un wiki es divulgar informationes concernente le thema de tu preferentia. Crea paginas con un clic sur <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">"Adder un pagina"</a> e scribe informationes specific a proposito de tu thema.',
	'founderemails-email-0-day-addpages-button' => 'Adder un pagina',
	'founderemails-email-0-day-addphotos-heading' => 'Adder photos.',
	'founderemails-email-0-day-addphotos-content' => 'Un pagina es sempre melior si illo offere qualcosa de visual! Adde imagines a tu paginas e a tu pagina principal. Tu pote cliccar sur <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"Adder un photo"</a> pro adder un photo, un galeria de photos o un presentation de diapositivas.',
	'founderemails-email-0-day-addphotos-button' => 'Adder un photo',
	'founderemails-email-0-day-customizetheme-heading' => 'Personalisar le apparentia.',
	'founderemails-email-0-day-customizetheme-content' => 'Personalisa le apparentia e logotypo de tu wiki pro distinguer lo del alteres! Usa le <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">designator de apparentias</a> pro personalisar le colores de tu wiki e render lo unic pro tu thema.',
	'founderemails-email-0-day-customizetheme-button' => 'Personalisar',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">Nos non va abandonar te.</span>  Nos es presente pro adjutar te a facer $WIKINAME succeder, passo pro passo.  Visita <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a> pro foros, consilios e adjuta, o pro <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">inviar nos</a> tu questiones!',
	'founderemails-email-0-day-wikiahelps-signature' => 'Bon wiki-construction!<br />Le equipa de Wikia',
	'founderemails-email-3-day-heading' => 'Salute $USERNAME,',
	'founderemails-email-3-day-congratulations' => 'Nos es curiose de como le cosas va in $WIKINAME.',
	'founderemails-email-3-day-tips-heading' => 'Il ha 3 dies post que tu comenciava e le momenta sembla bon pro offerer te alcun consilios pro construer tu wiki:',
	'founderemails-email-3-day-editmainpage-heading' => 'Imbelli tu pagina principal.',
	'founderemails-email-3-day-editmainpage-content' => 'Le pagina principal es un del prime cosas que le gente vide quando illes visita <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a>. Face un bon prime impression per scriber un summario in detalio de tu thema e per adder un presentation de diapositivas, galeria, o glissator de photos.',
	'founderemails-email-3-day-editmainpage-button' => 'Imbellimento',
	'founderemails-email-3-day-addphotos-heading' => 'Adder ancora plus photos.',
	'founderemails-email-3-day-addphotos-content' => 'Un del melior methodos de dar grande apparato e pompa a tu pagina es de <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"adder photos"</a>.',
	'founderemails-email-3-day-addphotos-button' => 'Adder photos',
	'founderemails-email-3-day-explore-heading' => 'Trovar inspiration.',
	'founderemails-email-3-day-explore-content' => 'Non hesita a examinar altere wikis pro vider como illos ha elaborate lor paginas principal, articulos e alteres. Ecce alcunes de nostre favorites: <a style="color:#2a87d5;text-decoration:none;" href="http://muppets.wikia.com">Muppet Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://poptarts.wikia.com">Pop Tarts Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://monsterhigh.wikia.com">Monster High Wiki</a>.',
	'founderemails-email-3-day-explore-button' => 'Explorar',
	'founderemails-email-3-day-wikiahelps-text' => 'Necessita adjuta pro comprender como un cosa functiona? Nos es presente pro te! Veni demandar adjuta e consilio de nos a <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-3-day-wikiahelps-signature' => 'Continua le excellente labor!<br />Le equipa de Wikia',
	'founderemails-email-10-day-heading' => 'Como sta, $USERNAME?',
	'founderemails-email-10-day-congratulations' => 'Hola, le tempore vola! Ha passate jam 10 dies post que tu comenciava $WIKINAME.',
	'founderemails-email-10-day-tips-heading' => 'Recruta altere personas in tu projecto e face monstra de tote le superbe labor que tu ha facite! Ecce alcun methodos de diffunder le parola:',
	'founderemails-email-10-day-share-heading' => 'Non ha tu matre te dicite que tu debe divider?',
	'founderemails-email-10-day-share-content' => 'Usa le button Divider in le pagina principal, paginas de articulo e photos de tu wiki pro monstrar los a tu amicos e sequitores in Facebook.',
	'founderemails-email-10-day-email-heading' => 'Utilisa le fortia de e-mail.',
	'founderemails-email-10-day-email-content' => 'Invia e-mail a cognoscitos qui se interessa in tu thema o qui vole adjutar te, como un amico de schola o un collega. Tu pote etiam inviar photos specific de tu wiki usante le button de e-mail.',
	'founderemails-email-10-day-join-heading' => 'Uni te a sitos web similar.',
	'founderemails-email-10-day-join-content' => 'Demanda adjuta al personas in altere foros o sitos web super tu thema per inviar messages o commentos in lor foros. Si possibile, contacta le administrator pro determinar si ille es interessate in excambiar ligamines; ille inserera un ligamine a tu wiki in su sito si tu insere un ligamine al sue in le tue.',
	'founderemails-email-10-day-wikiahelps-text' => 'Tu pote etiam demandar a altere Wikianos de adjutar te in tu wiki per mitter messages in le foros in <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-10-day-wikiahelps-signature' => 'Continua le bon labor!<br />Le equipa de Wikia',
	'founderemails-email-views-digest-subject' => 'Visitas de $WIKINAME de hodie',
	'founderemails-email-views-digest-body' => 'Salute $USERNAME,

Hodie, $WIKINAME ha essite visitate per $1 {{PLURAL:$1|persona|personas}}.

Continua le addition de nove contento e le promotion de tu wiki pro incoragiar plus personas a leger, modificar e diffunder le parola.

$WIKIURL

Le equipa de Wikia',
	'founderemails-email-views-digest-greeting' => 'Salute $USERNAME,',
	'founderemails-email-views-digest-headline' => 'Hodie, $WIKINAME ha essite visitate per $UNIQUEVIEWS personas.',
	'founderemails-email-views-digest-content' => 'Continua le addition de nove contento e le promotion de tu wiki pro incoragiar plus personas a leger, modificar e diffunder le parola.',
	'founderemails-email-views-digest-signature' => 'Le equipa de Wikia',
	'founderemails-email-views-digest-button' => 'Adder plus paginas',
	'founderemails-email-complete-digest-subject' => 'Le activitate le plus recente in $WIKINAME',
	'founderemails-email-complete-digest-body' => 'Salute $USERNAME,

Es le momento pro tu dose quotidian de activitate in $WIKINAME, $WIKIURL.

$1 {{PLURAL:$1|persona|personas}} ha visitate tu wiki.

Continua le bon labor addente contento interessante que le gente pote leger!

$2 {{PLURAL:$2|modification|modificationes}} ha essite facite.

Contributores felice face wikis felice. Assecura te de regratiar le contributores e de contactar les de tempore a tempore.

$3 {{PLURAL:$3|persona|personas}} ha adherite a tu wiki.

Da le benvenita al nove personas in tu wiki con un message in lor pagina de discussion.

Tu pote sempre visitar Wiki Activitate pro vider tote le progresso realisate in $WIKINAME. Revisita lo frequentemente, perque le communitate depende de te, como fundator, pro adjuta e direction in le gerentia del wiki.

Le equipa de Wikia',
	'founderemails-email-complete-digest-greeting' => 'Salute $USERNAME,',
	'founderemails-email-complete-digest-headline' => 'Es le momento pro tu dose quotidian de activitate in $WIKINAME.',
	'founderemails-email-complete-digest-content-heading1' => '$UNIQUEVIEWS personas ha visitate tu wiki.',
	'founderemails-email-complete-digest-content1' => 'Continua le bon labor addente contento interessante que le gente pote leger!',
	'founderemails-email-complete-digest-content-heading2' => '$USEREDITS modificationes ha essite facite.',
	'founderemails-email-complete-digest-content2' => 'Redactores felice face wikis felice. Assecura te de regratiar le redactores e de contactar les de tempore a tempore.',
	'founderemails-email-complete-digest-content-heading3' => '$USERJOINS personas ha adherite a tu wiki.',
	'founderemails-email-complete-digest-content3' => 'Da le benvenita al nove personas in tu wiki con un message in lor pagina de discussion.
<br /><br />
Tu pote sempre visitar Wiki Activitate pro vider tote le modificationes que es facite in $WIKINAME. Revisita lo sovente, proque le communitate depende de te, como fundator, pro adjuta e direction in le gerentia del wiki.',
	'founderemails-email-complete-digest-signature' => 'Le equipa de Wikia',
	'founderemails-email-complete-digest-button' => 'Visitar Wiki Activitate',
	'founderemails-pref-joins' => 'Inviar me e-mail si qualcuno adhere a $1',
	'founderemails-pref-edits' => 'Inviar me e-mail si qualcuno modifica $1',
	'founderemails-pref-views-digest' => 'Inviar me un e-mail cata die con le numero de visitas de $1',
	'founderemails-pref-complete-digest' => 'Inviar me un digesto cata die con le activitate in $1',
	'founderemails-pref-joins-v2' => '...qualcuno adhere',
	'founderemails-pref-edits-v2' => '...qualcuno modifica',
	'founderemails-pref-views-digest-v2' => '...un summari quotidian de visitas total es preste',
	'founderemails-pref-complete-digest-v2' => '...un digesto quotidian de adherentias, modificationes e visitas es preste',
];

$messages['id'] = [
	'founderemails-desc' => 'Membantu memberikan informasi kepada pendiri tentang perubahan di wiki mereka',
	'tog-founderemailsenabled' => 'Beritahukan saya melalui surel tentang kegiatan orang lain. (hanya pendiri)',
	'founderemails-email-user-registered-headline' => 'Selamat! $EDITORNAME baru saja bergabung ke $WIKINAME.',
	'founderemails-email-user-registered-content' => 'Gunakan kesempatan ini untuk menyambut mereka di wiki Anda dan memotivasi mereka untuk membantu menyunting. Lebih rame lebih menyenangkan, dan semakin cepat wiki anda akan berkembang',
	'founderemails-email-user-registered-signature' => 'Tim wikia',
	'founderemails-email-user-registered-button' => 'Sambut mereka',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '$WIKINAME memiliki suntingan baru!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Hai $USERNAME,

Baiklah! $EDITORNAME baru saja membuat suntingan awalnya pada $WIKINAME.

Tujulah $PAGETITLE untuk memeriksa apa yang mereka tambahkan.

$PAGEURL

Tim Wikia',
	'founderemails-email-first-edit-greeting' => 'Hai $USERNAME,',
	'founderemails-email-first-edit-headline' => 'Baiklah! $EDITORNAME baru saja membuat suntingan sangat pertama pada $WIKINAME.',
	'founderemails-email-first-edit-signature' => 'Tim Wikia',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Hai $USERNAME,<br /><br />
Kelihatannya pengguna terdaftar $EDITORNAME telah menyunting wiki Anda pertama kali! Mengapa Anda tidak mengunjungi <a href="$EDITORTALKPAGEURL">halaman pembicaraannya</a> untuk menyapa?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Tim Wikia</div>',
	'founderemails-email-page-edited-reg-user-body' => 'Hai $USERNAME,

$EDITORNAME baru saja membuat suntingan yang lain pada $WIKINAME pada $PAGETITLE.

Tujulah $PAGETITLE untuk melihat apa yang mereka telah ubah.

$PAGEURL

Tim Wikia',
	'founderemails-email-general-edit-greeting' => 'Hai $USERNAME,',
	'founderemails-email-general-edit-headline' => '$EDITORNAME baru saja membuat suntingan lain pada $WIKINAME pada $PAGETITLE.',
	'founderemails-email-general-edit-signature' => 'Tim Wikia',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Hai $USERNAME,<br /><br />
Kelihatannya pengguna terdaftar $EDITORNAME telah menyunting wiki Anda! Mengapa Anda tidak mengunjungi <a href="$EDITORTALKPAGEURL">halaman pembicaraannya</a> untuk menyapa?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Tim Wikia</div>',
	'founderemails-email-page-edited-anon-subject' => 'Seorang teman misterius menyunting $WIKINAME',
	'founderemails-email-page-edited-anon-body' => 'Hai $USERNAME,

Kontributor Wikia telah membuat sebuah suntingan pada $PAGETITLE di $WIKINAME.

Kontributor Wikia adalah orang-orang yang menyunting tanpa masuk log ke akun Wikia. Pergi dan lihatlah apakah yang telah ditambahkan teman misterius ini!

$PAGEURL

Tim Wikia',
	'founderemails-email-anon-edit-headline' => 'Seorang Kontributor Wikia baru saja membuat suntingan di $PAGETITLE pada $WIKINAME.',
	'founderemails-email-anon-edit-content' => 'Kontributor Wikia adalah orang-orang yang membuat suntingan tanpa masuk log ke akun Wikia. Pergi dan lihatlah apa yang ditambahkan teman misterius ini!',
	'founderemails-email-anon-edit-signature' => 'Tim Wikia',
	'founderemails-email-page-edited-anon-body-HTML' => 'Hai $USERNAME, <br /><br />
Kelihatannya seseorang telah menyunting wiki Anda! Mengapa Anda tidak <a href="$MYHOMEURL"> memeriksanya</a> untuk melihat apa yang berubah?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Tim Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'Pengguna terdaftar mengubah situs Anda untuk pertama kali!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Hai $USERNAME,

Kelihatannya $EDITORNAME telah menyunting wiki Anda untuk pertama kali! Mengapa Anda tidak mengunjungi halaman pembicaraannya ($EDITORTALKPAGEURL) untuk menyapa?

--Tim Wikia',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'Hai $USERNAME,<br /><br />
Kelihatannya pengguna terdaftar $EDITORNAME telah menyunting wiki Anda untuk pertama kali! Mengapa Anda tidak mengunjungi <a href="$EDITORTALKPAGEURL">halaman pembicaraannya</a> untuk menyapa?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Tim Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Pengguna terdaftar mengubah situs Anda!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Hai $USERNAME,

Kelihatannya $EDITORNAME telah menyunting wiki Anda! Mengapa Anda tidak mampir ke halaman pembicaraannya ($EDITORTALKPAGEURL) untuk menyapa?

--Tim Wikia',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => 'Hai $USERNAME,<br /><br />

Kelihatannya pengguna terdaftar $EDITORNAME telah menyunting wiki Anda! Mengapa Anda tidak mampir ke <a href="EDITORTALKPAGEURL">halaman pembicaraannya</a> untuk menyapa?

<div style="font-style: italic; font-size: 120%;">-- Tim Wikia</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'Seseorang mengubah situs Anda!',
	'founderemails-answers-email-page-edited-anon-body' => 'Hai $USERNAME,<br /><br />
Kelihatannya seseorang telah menyunting wiki Anda! Mengapa Anda tidak mengunjungi $MYHOMEURL untuk melihat apa yang diubah?

-- Tim Wikia',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Hai $USERNAME, <br /><br />
Kelihatannya seseorang telah menyunting wiki Anda! Mengapa Anda tidak <a href="$MYHOMEURL"> memeriksanya</a> untuk melihat apa yang berubah?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Tim Wikia</div>',
	'founderemails-lot-happening-subject' => '$WIKINAME sedang memanas!',
	'founderemails-lot-happening-body-HTML' => 'Hai $USERNAME,<br /><br />
Ada banyak yang terjadi pada wiki Anda hari ini! Kunjungi $MYHOMEURL untuk melihat apa yang sedang terjadi.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Tim Wikia</div>',
	'founderemails-email-lot-happening-greeting' => 'Hai $USERNAME,',
	'founderemails-email-lot-happening-headline' => 'Selamat ada banyak hal yang sedang terjadi di $WIKINAME hari ini!',
	'founderemails-email-lot-happening-content' => 'Jika Anda belum melakukannya, Anda dapat mengunjungi Aktivitas Wiki dan melihat seluruh kerja besar yang telah terjadi. Karena ada begitu banyak yang terjadi, Anda mungkin juga ingin mengubah pengaturan surel ke mode \'\'digest\'\'. Dengan mode \'\'digest\'\' yang menyala, Anda akan menerima satu surel yang mendaftar seluruh kegiatan dalam wiki Anda setiap hari.',
	'founderemails-email-footer-line1' => 'Untuk memeriksa kejadian terakhir pada Wikia, kunjungi <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>',
	'founderemails-email-footer-line2' => 'Ingin mengendalikan surel yang mana yang Anda terima? Kunjungi <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">Pengaturan</a> Anda',
	'founderemails-email-0-day-congratulations' => 'Selamat atas dibuatnya $HDWIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'Ini adalah beberapa tips yang membantu Anda untuk memulai:',
	'founderemails-email-0-day-addpages-button' => 'Tambah Halaman',
	'founderemails-email-0-day-addphotos-heading' => 'Tambahkan foto.',
	'founderemails-email-0-day-addphotos-content' => 'Halaman selalu lebih baik ketika memiliki gambar! Tambahkan foto ke halaman-halaman Anda dan halaman utama Anda. Anda dapat meng-klik <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"Tambahkan Foto"</a> untuk menambahkan foto, galeri foto, atau tampilan slide.',
	'founderemails-email-0-day-addphotos-button' => 'Tambah Foto',
	'founderemails-email-0-day-customizetheme-heading' => 'Menyesuaikan tema Anda.',
	'founderemails-email-0-day-customizetheme-button' => 'Sesuaikan',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">Kami tidak akan meninggalkan Anda di luar dalam dingin.</span> Kami ada di sini untuk membantu Anda membuat $WIKINAME sukses dalam setiap langkahnya. Kunjungi <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a> untuk forum, saran, dan bantuan, atau untuk <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">mengirim surel kepada kami</a> tentang pertanyaan Anda!',
	'founderemails-email-0-day-wikiahelps-signature' => 'Selamat membangun wiki!<br />Tim Wikia',
	'founderemails-email-3-day-tips-heading' => 'Sudah 3 hari sejak Anda memulai dan kami berpikir kami akan mampir untuk menawarkan beberapa tips lebih banyak tentang membangun wiki Anda:',
	'founderemails-email-3-day-addphotos-button' => 'Tambahkan Foto',
	'founderemails-email-3-day-explore-heading' => 'Temukan inspirasi.',
	'founderemails-email-3-day-wikiahelps-text' => 'Butuh bantuan mencari tahu bagaimana sesuatu bekerja? Kami selalu berada di sini untuk Anda! Datang dan tanyakan kami untuk bantuan dan saran di <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-10-day-congratulations' => 'Whoa, waktu cepat berlalu! Telah 10 hari sejak Anda memulai $HDWIKINAME.',
	'founderemails-email-10-day-tips-heading' => 'Libatkan orang lain dalam proyek Anda dan pamerkan seluruh karya mengagumkan yang telah Anda lakukan! Berikut ini adalah beberapa cara untuk menyebarkan kabar ini:',
	'founderemails-email-10-day-share-content' => 'Gunakan tombol Bagikan pada halaman utama, halaman artikel dan foto-foto wiki Anda untuk menunjukkannya kepada teman dan pengikut Anda di Facebook.',
	'founderemails-email-views-digest-subject' => 'Dilihat hari ini pada $WIKINAME',
	'founderemails-email-views-digest-headline' => 'Hari ini $WIKINAME telah dilihat oleh $1 {{PLURAL:$1|orang|orang}}.',
	'founderemails-email-views-digest-content' => 'Tetaplah menambahkan konten baru dan mempromosikan wiki Anda untuk mendorong lebih banyak orang untuk membaca, menyunting, dan menyebarkan kata.',
	'founderemails-email-complete-digest-body' => 'Hai $USERNAME,

Ini saatnya untuk dosis kegiatan harian Anda dari $WIKINAME, $WIKIURL.

$1 orang melihat wiki Anda.

Jagalah terus kerja bagus dalam menambahkan konten menarik untuk orang untuk dibaca!

$2 suntingan telah dibuat.

Penyunting bahagia membuat orang-orang bahagia. Pastikan untuk berterima kasih pada penyunting Anda dan masuk bersama dengan mereka dari waktu ke waktu.

$3 orang bergabung di wiki Anda.

Sambutlah orang baru pada wiki Anda dengan sebuah pesan halaman pengguna.

Anda dapat selalu menuju ke aktivitas wiki untuk melihat seluruh perubahan menarik yang dibuat pada $WIKINAME. Periksalah sering, karena sebagai perintis komunitas Anda mencari Anda untuk membantu menuntun dan menjalankan wiki.

Tim Wikia',
	'founderemails-email-complete-digest-content1' => 'Pertahankan kerja bagus dalam menambahkan konten menarik bagi orang-orang untuk membacanya!',
	'founderemails-email-complete-digest-content2' => 'Penyunting bahagia membuat wiki bahagia. Pastikan untuk berterima kasih pada penyunting Anda dan berada bersama dari waktu ke waktu.',
	'founderemails-email-complete-digest-content3' => 'Sambutlah orang baru pada wiki Anda dengan pesan halaman pembicaraan.
<br /><br />
Anda selalu dapat menuju ke aktivitas wiki untuk melihat seluruh perubahan menarik yang telah dibuat pada $WIKINAME. Periksalah sering, karena sebagai perintis komunitas Anda melihat Anda untuk membantu membimbing dan menjalankan wiki.',
	'founderemails-pref-views-digest' => 'Kirimkan saya email harian yang memberitahu berapa kali $1 telah dilihat',
];

$messages['it'] = [
	'founderemails-desc' => 'Aiuta a informare i fondatori sulle modifiche nella loro wiki',
	'tog-founderemailsenabled' => 'Mandami una mail degli aggiornamenti su quello che le altre persone stanno facendo (solo fondatori)',
	'founderemails-email-user-registered-greeting' => 'Ciao $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Congratulazioni! $EDITORNAME è appena entrato in $WIKINAME.',
	'founderemails-email-user-registered-content' => 'Cogli l\'occasione per dargli/le il benvenuto e incoraggiarlo/a a fare modifiche. Più siete meglio è, e più velocemente la tua wiki crescerà.',
	'founderemails-email-user-registered-signature' => 'Il Team di Wikia',
	'founderemails-email-user-registered-button' => 'Dai il benvenuto',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '$WIKINAME ha una nuova modifica!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Ciao $USERNAME,

Ottimo! $EDITORNAME ha appena effettuato la sua prima modifica su $WIKINAME.

Controlla $PAGETITLE per scoprire che cosa ha modificato.

$PAGEURL

Il Team di Wikia',
	'founderemails-email-first-edit-greeting' => 'Ciao $USERNAME,',
	'founderemails-email-first-edit-headline' => 'Ottimo! $EDITORNAME ha appena effettuato la sua prima modifica su $WIKINAME.',
	'founderemails-email-first-edit-content' => 'Controlla $PAGETITLE per scoprire che cosa ha modificato.',
	'founderemails-email-first-edit-signature' => 'Il Team di Wikia',
	'founderemails-email-first-edit-button' => 'Controlla!',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Ehi $USERNAME,<br /><br />
Sembra che l\'utente registrato $EDITORNAME abbia modificato la tua wiki per la prima volta! Perché non visiti la sua <a href="$EDITORTALKPAGEURL">pagina di discussione</a> per salutarlo/la?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Il Team di Wikia</div>',
	'founderemails-email-page-edited-reg-user-subject' => 'Nuova modifica su $WIKINAME!',
	'founderemails-email-page-edited-reg-user-body' => 'Ciao $USERNAME,

$EDITORNAME ha appena fatto un\'altra modifica su $WIKINAME in $PAGETITLE.

Controlla $PAGETITLE per vedere che cosa ha modificato.

$PAGEURL

Il Team di Wikia',
	'founderemails-email-general-edit-greeting' => 'Ciao $USERNAME,',
	'founderemails-email-general-edit-headline' => '$EDITORNAME ha appena effettuato un\'altra modifica su $WIKINAME in $PAGETITLE.',
	'founderemails-email-general-edit-content' => 'Controlla $PAGETITLE per scoprire che cosa ha modificato.',
	'founderemails-email-general-edit-signature' => 'Il Team di Wikia',
	'founderemails-email-general-edit-button' => 'Controlla!',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Ehi $USERNAME,<br /><br />
Sembra che l\'utente registrato $EDITORNAME abbia modificato la tua wiki! Perché non fai un salto nella sua <a href="$EDITORTALKPAGEURL">pagina delle discussioni</a> per dirgli ciao?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Il Team di Wikia</div>',
	'founderemails-email-page-edited-anon-subject' => 'Un misterioso amico ha modificato $WIKINAME',
	'founderemails-email-page-edited-anon-body' => 'Ciao $USERNAME,

Un collaboratore di Wikia ha appena fatto una modifica a $PAGETITLE su $WIKINAME.

I collaboratori di Wikia sono persone che apportano modifiche senza effettuare il login con un account di Wikia. Vai a vedere che cosa ha modificato questo misterioso amico!

$PAGEURL

Il Team di Wikia',
	'founderemails-email-anon-edit-greeting' => 'Ciao $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'Un collaboratore di Wikia ha appena fatto una modifica a $PAGETITLE su $WIKINAME.',
	'founderemails-email-anon-edit-content' => 'I collaboratori di Wikia sono persone che apportano modifiche senza effettuare il login con un account di Wikia. Vai a vedere che cosa ha modificato questo misterioso amico!',
	'founderemails-email-anon-edit-signature' => 'Il Team di Wikia',
	'founderemails-email-anon-edit-button' => 'Controlla!',
	'founderemails-email-page-edited-anon-body-HTML' => 'Ehi $USERNAME,<br /><br />
Sembra che qualcuno abbia modificato la tua wiki! Perché non <a href="$MYHOMEURL">controlli</a> per vedere cosa è cambiato?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Il Team di Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'Un utente registrato ha modificato il tuo sito per la prima volta!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Ehi $USERNAME,

Sembra che l\'utente registrato $EDITORNAME abbia modificato la tua wiki per la prima volta! Perché non fai un salto nella sua pagina delle discussioni ($EDITORTALKPAGEURL) per dirgli ciao?

-- Il Team di Wikia',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'Ehi $USERNAME,<br /><br />
Sembra che l\'utente registrato $EDITORNAME abbia modificato la tua wiki per la prima volta! Perché non fai un salto nella sua <a href="$EDITORTALKPAGEURL">pagina delle discussioni</a> per dirgli ciao?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Il Team di Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Un utente registrato ha modificato il tuo sito!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Ehi $USERNAME,

Sembra che l\'utente registrato $EDITORNAME abbia modificato la tua wiki! Perché non fai un salto nella sua pagina delle discussioni ($EDITORTALKPAGEURL) per dirgli ciao?

-- Il Team di Wikia',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => 'Ehi $USERNAME,<br /><br />
Sembra che l\'utente registrato $EDITORNAME abbia modificato la tua wiki! Perché non fai un salto nella sua <a href="$EDITORTALKPAGEURL">pagina delle discussioni</a> per dirgli ciao?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Il Team di Wikia</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'Qualcuno ha modificato il tuo sito!',
	'founderemails-answers-email-page-edited-anon-body' => 'Ehi $USERNAME,

Sembra che qualcuno abbia modificato la tua wiki! Perché non controlli $MYHOMEURL per vedere cosa è cambiato?

-- Il Team di Wikia',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Ehi $USERNAME,<br /><br />
Sembra che qualcuno abbia modificato la tua wiki! Perché non <a href="$MYHOMEURL">controlli</a> per vedere cosa è cambiato?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Il Team di Wikia</div>',
	'founderemails-lot-happening-subject' => '$WIKINAME è in fase di riscaldamento!',
	'founderemails-lot-happening-body' => 'Ciao $USERNAME,

Congratulazioni, c\'è stato un gran movimento nella $WIKINAME, $WIKIURL.

Se non l\'hai già fatto, puoi visitare la Wiki Activity per vedere tutto quello che è accaduto.

Poiché le attività recenti sono tante, potresti voler cambiare le tue preferenze per le e-mail alla modalità "riassunto giornaliero". In questo modo, riceverai ogni giorno un\'unica e-mail che elenca tutte le attività giornaliere della tua wiki.

Il Team di Wikia',
	'founderemails-lot-happening-body-HTML' => 'Ehi $USERNAME,<br /><br />
C\'è stato molto movimento nella tua wiki oggi! Perché non controlli $MYHOMEURL per vedere cosa è cambiato?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Il Team di Wikia</div>',
	'founderemails-email-lot-happening-greeting' => 'Ciao $USERNAME,',
	'founderemails-email-lot-happening-headline' => 'Congratulazioni! Oggi c\'è stato un gran movimento nella $WIKINAME!',
	'founderemails-email-lot-happening-content' => 'Se non l\'hai già fatto, puoi visitare la Wiki Activity per vedere tutto quello che è accaduto. Poiché le attività recenti sono tante, potresti voler cambiare le tue preferenze per le e-mail alla modalità "riassunto giornaliero". In questo modo, riceverai ogni giorno un\'unica e-mail che elenca tutte le attività giornaliere della tua wiki.',
	'founderemails-email-lot-happening-signature' => 'Il Team di Wikia',
	'founderemails-email-lot-happening-button' => 'Vedi le attività',
	'founderemails-email-footer-line1' => 'Per conoscere le ultime novità su Wikia, visita la <a style="color:#2a87d5;text-decoration:none;" href="http://it.community.wikia.com">Wiki della Community</a>.',
	'founderemails-email-footer-line2' => 'Vuoi controllare quali email ricevi? Vai alle tue <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">Preferenze</a>',
	'founderemails-email-0-day-heading' => 'Piacere di conoscerti $USERNAME,',
	'founderemails-email-0-day-congratulations' => 'Complimenti per la creazione di $HDWIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'Ecco alcuni suggerimenti utili per iniziare:',
	'founderemails-email-0-day-addpages-heading' => 'Crea delle pagine.',
	'founderemails-email-0-day-addpages-content' => 'Una wiki consiste nella condivisione di informazioni riguardo l\'argomento da te scelto. Crea nuove pagine cliccando su <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">"Crea una pagina"</a> e inserisci informazioni più specifiche sul tuo argomento.',
	'founderemails-email-0-day-addpages-button' => 'Crea una pagina',
	'founderemails-email-0-day-addphotos-heading' => 'Aggiungi immagini.',
	'founderemails-email-0-day-addphotos-content' => 'Aggiungi immagini. Le pagine hanno un aspetto migliore quando sono presenti elementi grafici! Aggiungi immagini nelle tue pagine e nella pagina principale. Fai clic su <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"Aggiungi un\'immagine"</a> per aggiungere un\'immagine, una galleria fotografica o uno slideshow.',
	'founderemails-email-0-day-addphotos-button' => 'Carica un\'immagine',
	'founderemails-email-0-day-customizetheme-heading' => 'Personalizza il tuo tema.',
	'founderemails-email-0-day-customizetheme-content' => 'Personalizza il tema della tua wiki e il suo logo per far sì che la tua wiki si distingua dalle altre! Utilizza il <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">Theme Designer/a> per aggiungere colori personalizzati alla tua wiki e renderla adatta al tuo argomento.',
	'founderemails-email-0-day-customizetheme-button' => 'Personalizza',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">Noi ti lasceremo da solo.</span> Siamo qui per aiutarti a rendere $WIKINAME una wiki di successo passo dopo passo. Visita la <a style="color:#2a87d5;text-decoration:none;" href="http://it.community.wikia.com">Wiki della Community</a> per usare il forum, ottenere consigli e aiuti, o per <a style="color:#2a87d5;text-decoration:none;" href="http://it.community.wikia.com/Special:Contact">inviarci le tue domande!</a>',
	'founderemails-email-0-day-wikiahelps-signature' => 'Buon lavoro con la tua wiki!<br />Il Team di Wikia',
	'founderemails-email-3-day-heading' => 'Ciao $USERNAME,',
	'founderemails-email-3-day-congratulations' => 'Siamo curiosi di sapere come vanno le cose su $WIKINAME.',
	'founderemails-email-3-day-tips-heading' => 'È da 3 giorni che hai iniziato e abbiamo pensato di darti alcuni suggerimenti su come costruire la tua wiki:',
	'founderemails-email-3-day-editmainpage-heading' => 'Abbellisci la tua pagina principale.',
	'founderemails-email-3-day-editmainpage-content' => 'La pagina principale è una delle prime cose che le persone vedono quando visitano <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a>. Fai una buona impressione scrivendo un riassunto dettagliato di ciò che tratta la tua wiki e aggiungendo uno slideshow, una galleria o uno slider.',
	'founderemails-email-3-day-editmainpage-button' => 'Abbelliscila',
	'founderemails-email-3-day-addphotos-heading' => 'Aggiungi altre immagini.',
	'founderemails-email-3-day-addphotos-content' => 'Uno dei modi migliori per rendere le tue pagine invitanti e di bell\'aspetto è <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"aggiungere alcune foto"</a>.',
	'founderemails-email-3-day-addphotos-button' => 'Aggiungi immagini',
	'founderemails-email-3-day-explore-heading' => 'Trova ispirazione.',
	'founderemails-email-3-day-explore-content' => 'Non aver paura di controllare altre wiki per vedere come hanno realizzato la loro pagina principale, le altre pagine e il resto. Eccoti alcune delle nostre wiki preferite: <a style="color:#2a87d5;text-decoration:none;" href="http://muppets.wikia.com">Muppet Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://poptarts.wikia.com">Pop Tarts Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://monsterhigh.wikia.com">Monster High Wiki</a>.',
	'founderemails-email-3-day-explore-button' => 'Esplora',
	'founderemails-email-3-day-wikiahelps-text' => 'Hai bisogno di aiuto per capire come  funziona qualcosa? Siamo sempre qui per te! Vieni a chiederci aiuto e consigli sulla <a style="color:#2a87d5;text-decoration:none;" href="http://it.community.wikia.com">Wiki della Community</a>.',
	'founderemails-email-3-day-wikiahelps-signature' => 'Continua il tuo fantastico lavoro! <br /> Il Team di Wikia',
	'founderemails-email-10-day-heading' => 'Come sta andando $USERNAME?',
	'founderemails-email-10-day-congratulations' => 'Wow, il tempo vola!  Son già passati 10 giorni da quando hai creato $HDWIKINAME.',
	'founderemails-email-10-day-tips-heading' => 'Cerca di coinvolgere altre persone nel tuo progetto e mostra loro tutto il lavoro impressionante che hai fatto!  Ecco alcuni modi per spargere parola:',
	'founderemails-email-10-day-share-heading' => 'Non lo sai che è giusto condividere?',
	'founderemails-email-10-day-share-content' => 'Usa il pulsante Condividi nella barra degli strumenti, nelle pagine e nelle immagini per mostrarli ai tuoi amici e seguaci su Facebook, Twitter o altri siti popolari.',
	'founderemails-email-10-day-email-heading' => 'Sfrutta la potenza delle e-mail.',
	'founderemails-email-10-day-email-content' => 'Scrivi e-mail ad altre persone che sai che sono interessate al tuo argomento o a collaborare con te, come un amico di scuola o un collega.  È possibile anche mandare per e-mail immagini specifiche dalla tua wiki utilizzando il pulsante e-mail.',
	'founderemails-email-10-day-join-heading' => 'Mettiti in contatto con siti web simili.',
	'founderemails-email-10-day-join-content' => 'Chiedi aiuto alle persone su altri forum o siti web che trattano l\'argomento della tua wiki affinché pubblichino dei post nei loro forum o commenti.  Se possibile, contatta gli amministratori e vedi se sono interessati a uno scambio di link — cioè loro mettono il link alla tua wiki nel loro sito Web, se tu metti il link al loro sito nella tua wiki.',
	'founderemails-email-10-day-wikiahelps-text' => 'Puoi anche chiedere ad altri utenti di Wikia di aiutarti pubblicando un post nel forum della <a style="color:#2a87d5;text-decoration:none;" href="http://it.community.wikia.com">Wiki della Community</a>.',
	'founderemails-email-10-day-wikiahelps-signature' => 'Continua il tuo fantastico lavoro!<br />Il Team di Wikia',
	'founderemails-email-views-digest-subject' => 'Visualizzazioni di oggi su $WIKINAME',
	'founderemails-email-views-digest-body' => 'Ciao $USERNAME,

Oggi $WIKINAME è stata vista da  $1  {{PLURAL:$1|persona|persone}}.

Continua ad aggiungere nuovi contenuti e a promuovere la tua wiki per incoraggiare più persone a leggere, modificare e spargere la parola sulla tua wiki.

$WIKIURL

Il Team di Wikia',
	'founderemails-email-views-digest-greeting' => 'Ciao $USERNAME,',
	'founderemails-email-views-digest-headline' => 'Oggi $WIKINAME è stata vista da  $1  {{PLURAL:$1|persona|persone}}.',
	'founderemails-email-views-digest-content' => 'Continua ad aggiungere nuovi contenuti e a promuovere la tua wiki per incoraggiare più persone a leggere, modificare e spargere la parola sulla tua wiki.',
	'founderemails-email-views-digest-signature' => 'Il Team di Wikia',
	'founderemails-email-views-digest-button' => 'Aggiungi altre pagine',
	'founderemails-email-complete-digest-subject' => 'Le attività recenti su $WIKINAME',
	'founderemails-email-complete-digest-body' => 'Ciao $USERNAME,

È tempo per il tuo aggiornamento quotidiano sulle attività di $WIKINAME, $WIKIURL.

 $1  {{PLURAL:$1| persona|persone}} hanno visualizzato la tua wiki.

Continua con quest\'ottimo lavoro aggiungendo contenuti interessanti da leggere!

 $2  {{PLURAL:$2|modifica è stata fatta|modifiche sono state fatte}}.

I collaboratori felici rallegrano le wiki. Assicurati di ringraziare i tuoi collaboratori e tieniti in contatto con loro di volta in volta.

 $3  {{PLURAL:$3|persona è diventata membro|persone sono diventate membri}} della tua wiki.

Dai il benvenuto nella tua wiki alle nuove persone con un messaggio nella loro pagina delle discussioni.

Puoi sempre visualizzare la wiki activity per conoscere tutte le modifiche effettuate su $WIKINAME. Controllala spesso, poiché, come fondatore, la tua community ha bisogno che tu guidi e gestisca la wiki.

Il Team di Wikia',
	'founderemails-email-complete-digest-greeting' => 'Ciao $USERNAME,',
	'founderemails-email-complete-digest-headline' => 'È tempo per l\'aggiornamento quotidiano sulle attività di $WIKINAME.',
	'founderemails-email-complete-digest-content-heading1' => '$1 {{PLURAL:$1|persona ha|persone hanno}} visualizzato la tua wiki.',
	'founderemails-email-complete-digest-content1' => 'Continua il tuo fantastico lavoro aggiungendo contenuto interessante da leggere!',
	'founderemails-email-complete-digest-content-heading2' => '$1 {{PLURAL:$1|modifica è stata fatta|sono state fatte}}.',
	'founderemails-email-complete-digest-content2' => 'I collaboratori felici rallegrano le wiki. Assicurati di ringraziare i tuoi collaboratori e tieniti in contatto con loro di volta in volta.',
	'founderemails-email-complete-digest-content-heading3' => '$1 {{PLURAL:$1|persona ha|persone hanno}} visualizzato la tua wiki.',
	'founderemails-email-complete-digest-content3' => 'Dai il benvenuto nella tua wiki alle nuove persone con un messaggio nella loro pagina delle discussioni.
<br /><br />
Puoi sempre visualizzare la wiki activity per conoscere tutte le modifiche effettuate su $WIKINAME. Controllala spesso, poiché, come fondatore, la tua community ha bisogno che tu guidi e gestisca la wiki.',
	'founderemails-email-complete-digest-signature' => 'Il Team di Wikia',
	'founderemails-email-complete-digest-button' => 'Vai alla wiki activity',
	'founderemails-pref-joins' => 'Mandami una mail quando qualcuno diventa membro di $1',
	'founderemails-pref-edits' => 'Mandami una mail quando qualcuno modifica $1',
	'founderemails-pref-views-digest' => 'Mandami una mail giornaliera che mi dice quante volte è stata visualizzata $1',
	'founderemails-pref-complete-digest' => 'Inviami un riassunto giornaliero delle attività su $1',
	'founderemails-pref-complete-digest-v2' => '...è disponibile un riassunto giornaliero dei nuovi membri, delle modifiche e delle visualizzazioni',
	'founderemails-pref-edits-v2' => '...qualcuno effettua una modifica',
	'founderemails-pref-joins-v2' => '...qualcuno diventa membro della wiki',
	'founderemails-pref-views-digest-v2' => '...è disponibile un riassunto giornaliero delle visualizzazioni totali',
];

$messages['ja'] = [
	'founderemails-desc' => 'ウィキで行われた変更について設立者に通知する',
	'tog-founderemailsenabled' => 'ウィキで変更が行われたときにメールを受け取る（設立者のみ）',
	'founderemails-email-user-registered-greeting' => '$USERNAMEさん、こんにちは。',
	'founderemails-email-user-registered-headline' => 'おめでとうございます！$EDITORNAMEが$WIKINAMEに参加しました。',
	'founderemails-email-user-registered-signature' => 'ウィキアチーム',
	'founderemails-email-user-registered-button' => 'ようこそみなさん',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '$WIKINAME で新しい編集が行われました',
	'founderemails-email-first-edit-greeting' => '$USERNAMEさん、こんにちは。',
	'founderemails-email-first-edit-signature' => 'ウィキアチーム',
	'founderemails-email-page-edited-reg-user-subject' => '$WIKINAME で新しい編集が行われました',
	'founderemails-email-general-edit-greeting' => '$USERNAMEさん、こんにちは。',
	'founderemails-email-general-edit-signature' => 'ウィキア・チーム',
	'founderemails-email-anon-edit-greeting' => 'こんにちは、$USERNAME さん、',
	'founderemails-email-anon-edit-signature' => 'ウィキアチーム',
	'founderemails-answers-email-page-edited-anon-subject' => '誰かがあなたのサイトを変更しました！',
	'founderemails-email-lot-happening-greeting' => '$USERNAMEさん、こんにちは。',
	'founderemails-email-lot-happening-signature' => 'ウィキアチーム',
	'founderemails-email-0-day-heading' => '初めまして、$USERNAME さん',
	'founderemails-email-0-day-congratulations' => '$HDWIKINAME の作成おめでとうございます！',
	'founderemails-email-0-day-tips-heading' => '始めるにあたって役に立つヒントを下記に列挙しています:',
	'founderemails-email-0-day-addpages-heading' => 'ページを作成してみましょう。',
	'founderemails-email-0-day-addpages-button' => 'ページを作成',
	'founderemails-email-0-day-addphotos-heading' => '画像を追加してみましょう。',
	'founderemails-email-0-day-addphotos-button' => '画像を追加',
	'founderemails-email-0-day-customizetheme-heading' => 'ウィキアのテーマをカスタマイズしましょう。',
	'founderemails-email-0-day-customizetheme-button' => 'カスタマイズ',
	'founderemails-email-0-day-wikiahelps-signature' => '楽しいウィキアの構築を！<br />ウィキアチーム',
	'founderemails-email-3-day-heading' => 'こんにちは $USERNAMEさん,',
	'founderemails-email-3-day-addphotos-button' => '画像を追加',
	'founderemails-email-views-digest-greeting' => 'こんにちは、$USERNAME さん、',
	'founderemails-email-views-digest-signature' => 'ウィキアチーム',
	'founderemails-email-complete-digest-subject' => '$WIKINAMEの最近の活動',
	'founderemails-email-complete-digest-greeting' => '$USERNAMEさん、こんにちは。',
	'founderemails-email-complete-digest-signature' => 'ウィキアチーム',
	'founderemails-email-complete-digest-button' => 'WikiActivityに移動',
	'founderemails-email-0-day-addpages-content' => 'ウィキアは、あなたが持つユニークな話題についての情報を共有する場所です。<a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">「ページを作成」</a>をクリックしてページを作成し、話題に関するより具体的な情報を書き入れてみてください。',
	'founderemails-email-0-day-addphotos-content' => 'ビジュアルを追加することでページはより良いものになります！ ページやメインページに画像を追加しましょう。<a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">「フォトを追加」</a>をクリックすると画像や、画像ギャラリー、スライドショーを追加できます。',
	'founderemails-email-0-day-customizetheme-content' => 'あなたのウィキアをより特徴づけるために、テーマとロゴをカスタマイズしてみましょう！<a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">テーマデザイナ</a>を利用して独自の見た目を設定し、同じような話題を扱っている他のウィキと一味違うものにしてください。',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">私たちはあなたをのけものにはしません。</span>  私たちはあらゆる面で $WIKINAME を成功させるためあなたの力になります。質問するにはフォーラム、アドバイス、ヘルプのある<a style="color:#2a87d5;text-decoration:none;" href="http://ja.community.wikia.com">ja.community.wikia.com</a>を訪れるか、<a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">メール</a>してみてください！',
	'founderemails-email-3-day-editmainpage-button' => '磨き上げる',
	'founderemails-email-3-day-explore-button' => '探索する',
	'founderemails-email-anon-edit-button' => 'ご覧ください！',
	'founderemails-email-anon-edit-content' => 'ウィキア投稿者 (Wikia Contributor) はウィキアのアカウントにログインしないで編集をしている人です。この未確認の支持者が何を加筆したのかぜひともご覧ください！',
	'founderemails-email-anon-edit-headline' => '$WIKINAME にて、あるウィキア投稿者 (Wikia Contributor) が $PAGETITLE の編集をしました。',
	'founderemails-email-first-edit-button' => 'ご覧ください！',
	'founderemails-email-first-edit-content' => '$PAGETITLE に行き何が加筆されたか確認してみてください。',
	'founderemails-email-first-edit-headline' => 'やりました！ $EDITORNAME さんが $WIKINAME にてたった今、初めての編集をしました。',
	'founderemails-email-footer-line1' => 'ウィキアで最近起こったことを確認するには、<a style="color:#2a87d5;text-decoration:none;" href="http://ja.community.wikia.com">ja.community.wikia.com</a>にアクセスしてください',
	'founderemails-email-footer-line2' => '受け取るメールの種類を<a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">設定ページ</a>で変更できます。',
	'founderemails-email-general-edit-button' => 'ご覧ください！',
	'founderemails-email-general-edit-content' => 'ユーザーが加筆した内容を確認するには $PAGETITLE をご覧ください。',
	'founderemails-email-general-edit-headline' => '$EDITORNAME が $PAGETITLE にて $WIKINAME に別の編集をしました。',
	'founderemails-email-page-edited-anon-body' => 'こんにちは、$USERNAME さん、

$WIKINAME にて、あるウィキア投稿者 (Wikia Contributor) が $PAGETITLE の編集をしました。

ウィキア投稿者 (Wikia Contributor) はウィキアのアカウントにログインしないで編集をしている人です。この未確認の支持者が何を加筆したのかぜひともご覧ください！

$PAGEURL

ウィキア・チーム',
	'founderemails-email-page-edited-anon-subject' => 'とある未確認の支持者が $WIKINAME を編集しました',
	'founderemails-email-page-edited-reg-user-body' => 'こんにちは、$USERNAME さん

$EDITORNAME が $PAGETITLE にて $WIKINAME に別の編集をしました。

どのような変更をしたかを確認するには、$PAGETITLE をご覧ください。

$PAGEURL

ウィキア・チーム',
	'founderemails-email-user-registered-content' => 'この機会を利用してあなたのウィキアで彼らを歓迎し編集を手伝えるように奨励しましょう。人数が多いほど楽しくなります。そしてあなたのウィキアの成長がより早くなるでしょう。',
];

$messages['kn'] = [
	'founderemails-email-user-registered-signature' => 'ವಿಕಿಯಾ ತಂಡ',
	'founderemails-email-user-registered-button' => 'ಅವರನ್ನು ಸ್ವಾಗತಿಸಿ',
	'founderemails-email-first-edit-signature' => 'ವಿಕಿಯ ತಂಡ',
	'founderemails-email-general-edit-signature' => 'ವಿಕಿಯಾ ತಂಡ',
	'founderemails-email-anon-edit-signature' => 'ವಿಕಿಯಾ ತಂಡ',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'ನೋಂದಾಯಿತ ಸದಸ್ಯರು ನಿಮ್ಮ ತಾಣವನ್ನು ಬದಲಾಯಿಸಿದರು!',
	'founderemails-answers-email-page-edited-anon-subject' => 'ಯಾರೋ ನಿಮ್ಮ ತಾಣವನ್ನು ಬದಲಾಯಿಸಿದರು!',
];

$messages['ko'] = [
	'founderemails-desc' => '위키에 바뀜에 대해 창립자에게 알리는 데 도움을 줍니다',
	'tog-founderemailsenabled' => '다른 사용자의 활동 내역을 이메일로 받기 (설립자 전용)',
	'founderemails-email-user-registered-greeting' => '$USERNAME님 안녕하세요,',
	'founderemails-email-user-registered-headline' => '축하합니다! $EDITORNAME 사용자가 $WIKINAME에 가입했습니다.',
	'founderemails-email-user-registered-content' => '이번 기회에 위키에 새 사용자가 온 것을 환영해주시고 편집하는 데 도움이 될 수 있도록 격려해주세요. 위키가 더 화끈하게, 그리고 더 빨리 성장할 것입니다.',
	'founderemails-email-user-registered-signature' => '위키아 팀',
	'founderemails-email-user-registered-button' => '환영합니다',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '새 사용자가 $WIKINAME에 처음으로 편집을 했습니다!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => '$USERNAME 님, 안녕하세요.

좋은 소식이 있습니다! $EDITORNAME 사용자가 $WIKINAME에 첫 편집을 했습니다.

무엇이 바뀌었는지 보시려면 $PAGETITLE 문서를 확인해 보세요.

$PAGEURL

위키아 팀',
	'founderemails-email-first-edit-greeting' => '$USERNAME님 안녕하세요,',
	'founderemails-email-first-edit-headline' => '좋아요! $EDITORNAME 사용자가 $WIKINAME에 첫 편집을 했습니다.',
	'founderemails-email-first-edit-content' => '추가된 것을 확인하려면 $PAGETITLE(을)를 보세요.',
	'founderemails-email-first-edit-signature' => '위키아 팀',
	'founderemails-email-first-edit-button' => '확인하세요!',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => '안녕하세요, $USERNAME 님.<br /><br />
$EDITORNAME 사용자가 귀하의 위키에 첫 편집을 한 것 같습니다! <a href="$EDITORTALKPAGEURL">토론 문서</a>에 인사라도 남겨 보시는 건 어떨까요?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- 위키아 팀</div>',
	'founderemails-email-page-edited-reg-user-subject' => '$WIKINAME에 새 편집이 있습니다!',
	'founderemails-email-page-edited-reg-user-body' => '$USERNAME 님, 안녕하세요.

$EDITORNAME 사용자가 $WIKINAME의 $PAGETITLE 문서에 또 다른 편집을 했습니다.

무엇을 바꿨는지 보시려면 $PAGETITLE 문서로 이동하세요!

$PAGEURL

위키아 팀',
	'founderemails-email-general-edit-greeting' => '안녕하세요, $USERNAME 사용자 님?',
	'founderemails-email-general-edit-headline' => '$EDITORNAME 사용자가 방금 $WIKINAME의 $PAGETITLE 문서에 또 기여했습니다.',
	'founderemails-email-general-edit-signature' => '위키아 팀',
	'founderemails-email-general-edit-button' => '확인하세요!',
	'founderemails-email-page-edited-reg-user-body-HTML' => '안녕하세요, $USERNAME 님.<br /><br />
$EDITORNAME 사용자가 귀하의 위키에 첫 편집을 한 것 같습니다! <a href="$EDITORTALKPAGEURL">토론 문서</a>에 인사라도 남겨 보시는 건 어떨까요?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- 위키아 팀</div>',
	'founderemails-email-page-edited-anon-subject' => '비밀스러운 친구가 $WIKINAME에 편집을 했습니다',
	'founderemails-email-page-edited-anon-body' => '안녕하세요, $USERNAME 님!

한 사용자가 $WIKINAME의 $PAGETITLE 문서를 로그인 없이 편집했습니다.

이 베일에 쌓인 사용자가 무엇을 바꿨는지 확인해 보세요!

$PAGEURL

위키아 팀',
	'founderemails-email-anon-edit-greeting' => '안녕하세요, $USERNAME 사용자 님?',
	'founderemails-email-anon-edit-headline' => '한 사용자가 $WIKINAME의 $PAGETITLE 문서를 편집했습니다.',
	'founderemails-email-anon-edit-content' => '해당 사용자는 로그인 없이 문서를 편집했습니다. 그 베일에 쌓인 친구가 누구일지 확인해보세요!',
	'founderemails-email-anon-edit-signature' => '위키아 팀',
	'founderemails-email-anon-edit-button' => '확인하세요!',
	'founderemails-email-page-edited-anon-body-HTML' => '안녕하세요, $USERNAME 님!<br /><br />
누군가 귀하의 위키에 편집을 한 것 같습니다. 어서 가서 <a href="$MYHOMEURL">확인</a>해보시는 건 어떨까요?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- 위키아 팀</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => '등록된 사용자가 처음으로 당신의 위키에 기여를 했습니다!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => '$USERNAME 사용자 님!

위키에 등록된 $EDITORNAME 사용자가 당신의 위키에 처음으로 기여를 했습니다! 사용자 담벼락($EDITORTALKPAGEURL)에 간단한 인사라도 남겨보는 건 어떨까요?

-- 위키아 팀',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => '$USERNAME 사용자 님!<br /><br />
위키에 등록된 $EDITORNAME 사용자가 당신의 위키에 처음으로 기여를 했습니다! <a href="$EDITORTALKPAGEURL">사용자 담벼락</a>에 간단한 인사라도 남겨보는 건 어떨까요?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- 위키아 팀</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => '등록된 사용자가 당신의 위키에 기여를 했습니다!',
	'founderemails-answers-email-page-edited-reg-user-body' => '$USERNAME 사용자 님!

위키에 등록된 $EDITORNAME 사용자가 당신의 위키에 기여를 했습니다! 사용자 담벼락($EDITORTALKPAGEURL)에 간단한 인사라도 남겨보는 건 어떨까요?

-- 위키아 팀',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => '$USERNAME 사용자 님!<br /><br />
위키에 등록된 $EDITORNAME 사용자가 당신의 위키에 기여를 했습니다! <a href="$EDITORTALKPAGEURL">사용자 담벼락</a>에 간단한 인사라도 남겨보는 건 어떨까요?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- 위키아 팀</div>',
	'founderemails-answers-email-page-edited-anon-subject' => '누군가가 당신의 사이트를 바꾸었습니다!',
	'founderemails-answers-email-page-edited-anon-body' => '여보세요 $USERNAME님,

누군가가 당신의 위키를 편집한 것 같습니다! $MYHOMEURL에서 어떤 점이 바뀌었는지 확인해보지 않으시겠습니까?

-- 위키아 팀',
	'founderemails-answers-email-page-edited-anon-body-HTML' => '$USERNAME 사용자 님!<br /><br />
누군가 당신의 위키에 기여를 한 것 같습니다! 가서 <a href="$MYHOMEURL">확인</a>해보시는 건 어떤가요?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- 위키아 팀</div>',
	'founderemails-lot-happening-subject' => '$WIKINAME의 뜨거운 열기를 느껴보세요!',
	'founderemails-lot-happening-body' => '안녕하세요, $USERNAME 사용자 님?

$WIKINAME($WIKIURL)에 여러가지 일들이 있었던 것 같군요.

위키 활동 내역에서 지금까지 있었던 멋진 일들을 확인할 수 있습니다.

위키 일간 활동에 대해 알고 싶으신가요? 그렇다면 매일 위키에서 일어났던 일들을 메일로 받아보실 수 있습니다.

위키아 팀',
	'founderemails-lot-happening-body-HTML' => '$USERNAME 사용자 님!<br /><br />
오늘 하루 동안 많은 일들이 있었습니다! $MYHOMEURL에서 무슨 일들이 있었는지 확인해보세요.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- 위키아 팀</div>',
	'founderemails-email-lot-happening-greeting' => '$USERNAME님 안녕하세요,',
	'founderemails-email-lot-happening-headline' => '$WIKINAME에 오늘 하루 동안 많은 일들이 있었던 것 같군요!',
	'founderemails-email-lot-happening-signature' => '위키아 팀',
	'founderemails-email-lot-happening-button' => '활동 내역 보기',
	'founderemails-email-footer-line1' => '위키아의 최근 소식을 확인하고 싶으시다면, <a style="color:#2a87d5;text-decoration:none;" href="http://ko.community.wikia.com">ko.community.wikia.com</a> 를 방문해주세요',
	'founderemails-email-footer-line2' => '알림을 받고 싶지 않으신가요? <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">환경설정</a>에서 알림 설정을 변경할 수 있습니다',
	'founderemails-email-0-day-heading' => '$USERNAME님, 만나서 반갑습니다!',
	'founderemails-email-0-day-congratulations' => '$HDWIKINAME를 개설하신 것을 축하드립니다!',
	'founderemails-email-0-day-tips-heading' => '위키를 시작하는 데 도움이 될 만한 정보들을 가져왔습니다.',
	'founderemails-email-0-day-addpages-heading' => '문서를 만드세요.',
	'founderemails-email-0-day-addpages-content' => '위키는 특정 주제에 대한 정보들을 나누기 위한 공간입니다. 우선 <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">“문서 만들기”</a> 버튼을 누르신 다음, 위키의 주제에 관한 정보들을 채워나가 보세요.',
	'founderemails-email-0-day-addpages-button' => '문서 만들기',
	'founderemails-email-0-day-addphotos-heading' => '그림을 추가하세요.',
	'founderemails-email-0-day-addphotos-content' => '그림을 추가하시면 문서를 더 멋지게 꾸미실 수 있습니다! 대문이나 문서에 그림을 삽입해 보세요. 옆의 <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">“그림 올리기”</a> 버튼을 클릭하시면 그림에서부터 갤러리와 슬라이드 쇼까지 다양한 방식으로 그림을 삽입하실 수 있습니다.',
	'founderemails-email-0-day-addphotos-button' => '그림 올리기',
	'founderemails-email-0-day-customizetheme-heading' => '테마를 바꿔보세요.',
	'founderemails-email-0-day-customizetheme-content' => '위키의 주제에 맞게 테마와 워드마크를 바꿔 보세요! <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">테마 디자이너</a>를 이용하시면 위키의 외관을 특색 있게 꾸미실 수 있습니다.',
	'founderemails-email-0-day-customizetheme-button' => '테마 바꾸기',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">저희는 언제나 여러분과 함께 있습니다.</span> <a style="color:#2a87d5;text-decoration:none;" href="http://ko.community.wikia.com">위키아 중앙 커뮤니티</a>에서 다른 사용자들의 도움을 받으실 수 있습니다. 또 <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">이곳</a>에서 저희에게 문의를 보내실 수도 있습니다.',
	'founderemails-email-0-day-wikiahelps-signature' => '즐거운 시간 되세요!<br />위키아 팀',
	'founderemails-email-3-day-heading' => '안녕하세요, $USERNAME 님!',
	'founderemails-email-3-day-tips-heading' => '위키를 설립하신 지 3일이 지난 기념으로 몇 가지 유용한 팁을 알려드리고자 합니다:',
	'founderemails-email-3-day-editmainpage-heading' => '대문을 단장하세요.',
	'founderemails-email-3-day-editmainpage-content' => ' 대문은 사람들이 <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a>에 방문했을 때 가장 처음으로 보게 되는 문서입니다. 주제에 대한 간단한 소개와 슬라이드쇼, 갤러리, 슬라이더를 추가해 사람들에게 좋은 첫인상을 심어주세요.',
	'founderemails-email-3-day-editmainpage-button' => '단장하기',
	'founderemails-email-3-day-addphotos-heading' => '더 많은 그림 추가하기',
	'founderemails-email-3-day-addphotos-content' => '<a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">문서에 그림을 추가</a>하면 문서를 더 독특하고, 명료하게 만들 수 있습니다.',
	'founderemails-email-3-day-addphotos-button' => '사진 추가하기',
	'founderemails-email-3-day-explore-heading' => '영감을 얻으세요.',
	'founderemails-email-3-day-explore-content' => '다른 위키들을 돌아다니면서 어떻게 대문을 꾸미고, 어떻게 문서를 만들었는지 살펴보세요. 저희는 다음 위키들을 추천합니다: <a style="color:#2a87d5;text-decoration:none;" href="http://muppets.wikia.com">Muppet Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://poptarts.wikia.com">Pop Tarts Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://monsterhigh.wikia.com">Monster High Wiki</a>',
	'founderemails-email-3-day-explore-button' => '알아보기',
	'founderemails-email-3-day-wikiahelps-text' => '도움이 필요하신가요? 언제든지 저희에게 연락해주세요! 이곳에서 도움과 조언을 구하실 수 있습니다: <a style="color:#2a87d5;text-decoration:none;" href="http://ko.community.wikia.com">http://ko.community.wikia.com</a>',
	'founderemails-email-3-day-wikiahelps-signature' => '잘되가고 있습니다. 계속 진행하세요!<br />위키아 팀',
	'founderemails-email-10-day-heading' => '안녕하세요, $USERNAME 님!',
	'founderemails-email-10-day-congratulations' => '시간 참 빠르죠! $HDWIKINAME를 개설하신 지 벌써 열흘이나 지났습니다.',
	'founderemails-email-10-day-tips-heading' => '슬슬 프로젝트에 다른 사용자들을 끌어들이고, 귀하가 이뤄낸 멋진 결과물을 사람들에게 자랑해 보세요! 귀하의 위키를 세상에 알리는 방법으로는 다음과 같은 것들이 있습니다:',
	'founderemails-email-10-day-share-heading' => '위키를 공유하세요.',
	'founderemails-email-10-day-email-heading' => '이메일의 힘을 이용하세요.',
	'founderemails-email-10-day-email-content' => '아는 지인 중에 위키의 주제에 관심이 있을 만한 사람이 있다면 이메일을 보내 초대해 보세요. 이메일 버튼을 이용해 위키에 있는 특정 그림을 보낼 수도 있습니다.',
	'founderemails-email-10-day-join-heading' => '주제와 관련된 웹사이트에 가 보세요.',
	'founderemails-email-10-day-join-content' => '그리고 그곳에서 귀하의 위키를 홍보해 보세요. 또 해당 사이트 관리자에게 위키 주소를 사이트 어딘가에 추가해줄 순 없냐고 물어보는 것도 나쁘지 않습니다.',
	'founderemails-email-10-day-wikiahelps-text' => '마지막으로 언제든지 위키아 중앙 커뮤니티의 포럼을 방문하셔서 다른 사용자들의 도움을 받으실 수 있으니 참고해 주세요: <a style="color:#2a87d5;text-decoration:none;" href="http://ko.community.wikia.com">ko.community.wikia.com</a>',
	'founderemails-email-10-day-wikiahelps-signature' => '잘되가고 있습니다. 계속 진행하세요!<br />위키아 팀',
	'founderemails-email-views-digest-subject' => '$WIKINAME의 오늘 하루 조회수',
	'founderemails-email-views-digest-body' => '안녕하세요, $USERNAME 사용자 님?

오늘 $WIKINAME에 방문한 사람은 총 $1명이었습니다.

계속 새로운 콘텐츠를 생성하고, 홍보를 함으로써 새로운 독자와 편집자들을 끌어들이세요.

$WIKIURL

위키아 팀',
	'founderemails-email-views-digest-greeting' => '$USERNAME님 안녕하세요,',
	'founderemails-email-views-digest-headline' => '오늘 $WIKINAME에 방문한 사람은 총 $1명이었습니다.',
	'founderemails-email-views-digest-content' => '계속 새로운 콘텐츠를 생성하고, 홍보를 함으로써 새로운 독자와 편집자들을 끌어들이세요.',
	'founderemails-email-views-digest-signature' => '위키아 팀',
	'founderemails-email-views-digest-button' => '더 많은 페이지 추가하기',
	'founderemails-email-complete-digest-subject' => '$WIKINAME에 하루 동안 있었던 최근 활동',
	'founderemails-email-complete-digest-body' => '안녕하세요, $USERNAME 사용자 님?

$WIKINAME($WIKIURL)에 하루 동안 있었던 일을 정리해드리고자 합니다.

$1명이 당신의 위키에 들렀습니다.

사람들이 읽을 만한 재밌는 콘텐츠를 많이 만들어 주세요!

편집 $2건이 이뤄졌습니다.

행복한 편집자는 행복한 위키를 만들죠. 편집자들을 확인하고 감사를 표해보세요.

$3명이 당신의 위키에 가입했습니다.

사용자 담벼락에서 신입 사용자를 환영해주세요.

$WIKINAME에서 일어난 재밌는 일들은 언제든지 위키 활동 내역에서 확인하실 수 있습니다. 더 멋진 위키를 위해 자주 활동 내역을 확인해보세요.

위키아 팀',
	'founderemails-email-complete-digest-greeting' => '안녕하세요, $USERNAME 사용자 님?',
	'founderemails-email-complete-digest-headline' => '$WIKINAME에 하루 동안 있었던 일을 정리해드리고자 합니다.',
	'founderemails-email-complete-digest-content-heading1' => '$1명이 당신의 위키에 들렀습니다.',
	'founderemails-email-complete-digest-content1' => '사람들이 읽을 만한 재밌는 콘텐츠를 많이 만들어 주세요!',
	'founderemails-email-complete-digest-content-heading2' => '편집 $1건이 이뤄졌습니다.',
	'founderemails-email-complete-digest-content2' => '행복한 편집자는 행복한 위키를 만들죠. 편집자들을 확인하고 감사를 표해보세요.',
	'founderemails-email-complete-digest-content-heading3' => '$1명이 당신의 위키에 가입했습니다.',
	'founderemails-email-complete-digest-content3' => '사용자 담벼락에서 신입 사용자를 환영해주세요.
<br /><br />
$WIKINAME에서 일어난 재밌는 일들은 언제든지 위키 활동 내역에서 확인하실 수 있습니다. 더 멋진 위키를 위해 자주 활동 내역을 확인해보세요.',
	'founderemails-email-complete-digest-signature' => '위키아 팀',
	'founderemails-email-complete-digest-button' => '위키 활동 내역 보기',
	'founderemails-pref-joins' => '$1에 누군가 가입하면 알림',
	'founderemails-pref-edits' => '$1에 누군가 편집을 하면 메일로 알림',
	'founderemails-pref-views-digest' => '$1의 조회수에 대한 일간 알림 메일 받기',
	'founderemails-pref-complete-digest' => '위키 일간 활동에 대한 요약을 메일로 받기',
	'founderemails-pref-joins-v2' => '누군가 가입하면 알림',
	'founderemails-pref-edits-v2' => '누군가 편집을 하면 메일로 알림',
	'founderemails-pref-views-digest-v2' => '조회수에 대한 일간 알림 메일 받기',
	'founderemails-pref-complete-digest-v2' => '위키 일간 활동에 대한 요약을 메일로 받기',
	'founderemails-email-10-day-share-content' => '대문이나 문서, 그림 페이지에 위치한 공유 버튼을 눌러 귀하의 멋진 위키를 페이스북, 트위터, 그리고 그 외 다양한 사이트에 있는 친구들과 공유해 보세요.',
	'founderemails-email-3-day-congratulations' => '$HDWIKINAME의 최근 근황에 대해 알려드리고 싶습니다.',
];

$messages['ksh'] = [
	'founderemails-email-first-edit-headline' => 'Joot. Uns Metmaacher $EDITORNAME hät sing eetste Änderong op $WIKINAME jemaat.',
];

$messages['ku-latn'] = [
];

$messages['lb'] = [
	'founderemails-desc' => 'Hëlleft d\'Grënner vun den Ännerungen op hirer Wiki z\'informéieren',
	'founderemails-email-user-registered-greeting' => 'Salut $USERNAME,',
	'founderemails-email-user-registered-signature' => 'D\'Wikia-Team',
	'founderemails-email-first-edit-greeting' => 'Salut $USERNAME,',
	'founderemails-email-first-edit-signature' => 'D\'Wikia-Team',
	'founderemails-email-first-edit-button' => 'Probéiert et aus!',
	'founderemails-email-general-edit-greeting' => 'Salut $USERNAME,',
	'founderemails-email-general-edit-signature' => 'D\'Wikia-Team',
	'founderemails-email-general-edit-button' => 'Probéiert et aus!',
	'founderemails-email-page-edited-anon-subject' => 'E mysteriéise Frënd huet $WIKINAME geännert',
	'founderemails-email-anon-edit-greeting' => 'Salut $USERNAME,',
	'founderemails-email-anon-edit-signature' => 'D\'Wikia-Team',
	'founderemails-email-anon-edit-button' => 'Probéiert et aus!',
	'founderemails-email-lot-happening-greeting' => 'Salut $USERNAME,',
	'founderemails-email-lot-happening-signature' => 'D\'Wikia-Team',
	'founderemails-email-0-day-addpages-heading' => 'Säiten derbäisetzen.',
	'founderemails-email-0-day-addpages-button' => 'Eng Säit derbäisetzen',
	'founderemails-email-0-day-addphotos-heading' => 'Fotoen derbäisetzen.',
	'founderemails-email-0-day-addphotos-button' => 'Eng Foto derbäisetzen',
	'founderemails-email-3-day-addphotos-button' => 'Fotoen derbäisetzen',
	'founderemails-email-10-day-heading' => 'Wéi geet et Iech $USERNAME?',
	'founderemails-email-views-digest-greeting' => 'Salut $USERNAME,',
	'founderemails-email-views-digest-signature' => 'D\'Wikia-Team',
	'founderemails-email-views-digest-button' => 'Méi Säiten derbäisetzen',
	'founderemails-email-complete-digest-greeting' => 'Salut $USERNAME,',
	'founderemails-email-complete-digest-signature' => 'D\'Wikia-Team',
];

$messages['lrc'] = [
	'founderemails-email-user-registered-button' => 'خوش اومائین',
	'founderemails-email-lot-happening-button' => 'کاریا نه بوئنیت',
	'founderemails-email-0-day-addpages-heading' => 'بلگیا نه اضاف کو',
	'founderemails-email-0-day-addpages-button' => 'يه گل بلگه اضاف بكيد',
	'founderemails-email-0-day-addphotos-heading' => 'عسگيا نه اضاف بكيد',
	'founderemails-email-0-day-addphotos-button' => 'یه گل عسگ اضاف کو',
	'founderemails-email-3-day-addphotos-button' => 'عسگيا نه اضاف بكيد',
];

$messages['lt'] = [
	'founderemails-email-user-registered-greeting' => 'Sveiki $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Sveikiname! $EDITORNAME prisijungė prie $WIKINAME.',
	'founderemails-email-user-registered-signature' => 'Wikia komanda',
	'founderemails-email-user-registered-button' => 'Pasveikinkite juos',
	'founderemails-email-first-edit-signature' => 'Wikia komanda',
	'founderemails-email-general-edit-signature' => 'Wikia komanda',
	'founderemails-email-anon-edit-greeting' => 'Sveiki $USERNAME,',
	'founderemails-email-anon-edit-signature' => 'Wikia komanda',
	'founderemails-email-lot-happening-signature' => 'Wikia komanda',
	'founderemails-email-0-day-addpages-button' => 'Pridėti puslapį',
	'founderemails-email-0-day-addphotos-heading' => 'Įtraukti nuotraukas.',
	'founderemails-email-0-day-addphotos-button' => 'Pridėti nuotrauką',
	'founderemails-email-0-day-customizetheme-heading' => 'Tinkinti savo temą.',
	'founderemails-email-0-day-customizetheme-button' => 'Tinkinti',
	'founderemails-email-views-digest-signature' => 'Wikia komanda',
	'founderemails-email-views-digest-button' => 'Pridėti daugiau puslapių',
	'founderemails-email-complete-digest-signature' => 'Wikia komanda',
];

$messages['lv'] = [
	'founderemails-email-complete-digest-button' => 'Iet uz Viki Aktivitātes',
];

$messages['map-bms'] = [
];

$messages['mk'] = [
	'founderemails-desc' => 'Ги информира основачите за промените на нивното вики',
	'tog-founderemailsenabled' => 'Испраќај ми по е-пошта што прават другите (само основачи)',
	'founderemails-email-user-registered-greeting' => 'Здраво $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Честитаме! $EDITORNAME штотуку се зачлени на $WIKINAME.',
	'founderemails-email-user-registered-content' => 'Искористете ја оваа прилика да им посакате добредојде и да ги поттикнете да уредуваат. Што повеќе уредници, тоа повесело, а така побрзо ќе се развива викито.',
	'founderemails-email-user-registered-signature' => 'Екипата на Викија',
	'founderemails-email-user-registered-button' => 'Посакајте му добредојде',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '$WIKINAME има ново уредување!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Здраво $USERNAME,

Корисникот $EDITORNAME за прв пат направи уредување на $WIKINAME.

Појдете на $PAGETITLE за да видите што додал.

$PAGEURL

Екипата на Викија',
	'founderemails-email-first-edit-greeting' => 'Здраво $USERNAME,',
	'founderemails-email-first-edit-headline' => 'Корисникот $EDITORNAME штотуку го изврши неговото прво уредување на $WIKINAME.',
	'founderemails-email-first-edit-content' => 'Појдете на $PAGETITLE за да видите што е додадено.',
	'founderemails-email-first-edit-signature' => 'Екипата на Викија',
	'founderemails-email-first-edit-button' => 'Погледајте го!',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Здраво $USERNAME,<br /><br />
Регистрираниот корисник $EDITORNAME за прв пат го уреди вашето вики! Зошто не пуштите еден поздрав на неговата <a href="$EDITORTALKPAGEURL">страница за развогор</a>?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Екипата на Викија</div>',
	'founderemails-email-page-edited-reg-user-subject' => 'Ново уредување на $WIKINAME!',
	'founderemails-email-page-edited-reg-user-body' => 'Здраво $USERNAME,

Корисникот $EDITORNAME штотуку изврши друго уредување на страницата $PAGETITLE на $WIKINAME.

Појдете на $PAGETITLE и видите што изменил.

$PAGEURL

Екипата на Викија',
	'founderemails-email-general-edit-greeting' => 'Здраво $USERNAME,',
	'founderemails-email-general-edit-headline' => 'Корисникот $USERNAME штотуку изврши друго уредување на страницата $WIKINAME на $PAGETITLE.',
	'founderemails-email-general-edit-content' => 'Појдете на $PAGETITLE за да проверите што е додадено.',
	'founderemails-email-general-edit-signature' => 'Екипата на Викија',
	'founderemails-email-general-edit-button' => 'Погледајте го!',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Здраво $USERNAME,<br /><br />
Регистрираниот корисник $EDITORNAME го уреди вашето вики! Зошто не пуштите поздрав на неговата <a href="$EDITORTALKPAGEURL">страница за разговор</a>?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Екипата на Викија</div>',
	'founderemails-email-page-edited-anon-subject' => 'Таинствен пријател изврши уредување на $WIKINAME',
	'founderemails-email-page-edited-anon-body' => 'Здраво $USERNAME,

Учесник на Викија штотуку изврши уредување на страницата $PAGETITLE на $WIKINAME.

Учесниците на Викија се лица што вршат уреувања без да се најавени со сметка на Викија. Појдете да видите што додал овој таинствен пријател!

$PAGEURL

Екипата на Викија',
	'founderemails-email-anon-edit-greeting' => 'Здраво $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'Учесник на Викија штотуку изврши уредување на страницата $PAGETITLE на $WIKINAME.',
	'founderemails-email-anon-edit-content' => 'Учесниците на Викија се лица што вршат уредувања без да се најавени со сметка на Викија. Појдете да видите што додал таинствениот пријател!',
	'founderemails-email-anon-edit-signature' => 'Екипата на Викија',
	'founderemails-email-anon-edit-button' => 'Погледајте го!',
	'founderemails-email-page-edited-anon-body-HTML' => 'Здраво $USERNAME,<br /><br />
Некој ви го уредил вашето вики! Зошто не <a href="$MYHOMEURL">проверите</a> да видите што е изменето?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Екипата на Викија</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'Регистриран корисник за прв пат го измени вашето мрежно место!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Здраво $USERNAME,

Регистрираниот корисник $EDITORNAME за прв пати го уреди вашето вики! Зошто не пуштите поздрав на неговата страница за разговор ($EDITORTALKPAGEURL)?

-- Екипата на Викија',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'Здраво $USERNAME,<br /><br />
Регистрираниот корисник $EDITORNAME за прв пат го уреди вашето вики! Зошто не пуштите еден поздрав на неговата <a href="$EDITORTALKPAGEURL">страница за разговор</a>?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Екипата на Викија</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Регистриран корисник го измени вашето мрежно место!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Здраво $USERNAME,

Регистрираниот корисник $EDITORNAME ви го уредил викито! Зошто не пуштите еден поздрав на неговата страница за разговор ($EDITORTALKPAGEURL)?

-- Екипата на Викија',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => 'Здраво $USERNAME,<br /><br />
Регистрираниот корисник $EDITORNAME за прв пат го уреди вашето вики! Зошто не пуштите еден поздрав на неговата <a href="$EDITORTALKPAGEURL">страница за разговор</a>?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Екипата на Викија</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'Некој го измени вашето мрежно место!',
	'founderemails-answers-email-page-edited-anon-body' => 'Здраво $USERNAME,

Некој ви го уредил вашето вики! Зошто не појдете на $MYHOMEURL да видите што е изменето?

-- Екипата на Викија',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Здраво $USERNAME,<br /><br />
Некој ви го уредил викито! Зошто не <a href="$MYHOMEURL">појдете таму</a> да видите што е изменето?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Екипата на Викија</div>',
	'founderemails-lot-happening-subject' => '$WIKINAME заживува!',
	'founderemails-lot-happening-body' => 'Здраво $USERNAME,

Честитаме. Денес има многу случувања на $WIKINAME, $WIKIURL.

Ако досега не сте ја посетиле страницата Активности на викито, појдете и погледајте што сè таму се одвива.

Бидејќи има толку збиднувања, можеби ќе треба да го прилагодите начинот на примање на е-пошта во режимот во збирен преглед. Така ќе ги добивате вестите за сите збиднувања во денот во една порака.

Екипата на Викија',
	'founderemails-lot-happening-body-HTML' => 'Здраво $USERNAME,<br /><br />
Денес има многу случувања на вашето Вики! Наминете на $MYHOMEURL за да видите што има.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Екипата на Викија</div>',
	'founderemails-email-lot-happening-greeting' => 'Здраво $USERNAME,',
	'founderemails-email-lot-happening-headline' => 'Честитки! На $WIKINAME денес има многу збиднувања!',
	'founderemails-email-lot-happening-content' => 'Ако досега не сте ја посетиле страницата Активности на викито, појдете и погледајте што сè таму се одвива. Бидејќи има толку збиднувања, можеби ќе треба да го прилагодите начинот на примање на е-пошта во режимот во збирен преглед. Така ќе ги добивате вестите за сите збиднувања во денот во една порака.',
	'founderemails-email-lot-happening-signature' => 'Екипата на Викија',
	'founderemails-email-lot-happening-button' => '→ Активности',
	'founderemails-email-footer-line1' => 'За да ги проследите најновите случувања на Викија, посетете ја страницата <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>',
	'founderemails-email-footer-line2' => 'Сакате да одберете кои пораки да ги добивате? Појдете на вашите [{{fullurl:{{ns:special}}:Preferences}} нагодувања]',
	'founderemails-email-0-day-heading' => 'Драго ми е што Ве запознав, $USERNAME,',
	'founderemails-email-0-day-congratulations' => 'Честититки за новосоздаденото - $WIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'Еве некои корисни совети за почеток:',
	'founderemails-email-0-day-addpages-heading' => 'Додајте страници.',
	'founderemails-email-0-day-addpages-content' => 'Целта на едно вики е споделување на информации на некоја тема.  Созјдате страници стискајќи на <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">„Додај страница“</a> и напишете поподробно за вашата тема.',
	'founderemails-email-0-day-addpages-button' => 'Додај страница',
	'founderemails-email-0-day-addphotos-heading' => 'Додајте слики.',
	'founderemails-email-0-day-addphotos-content' => 'Страниците секогаш се подобри со ликовни елементи!  Додајте слики во страниците и на вашата главна страница. Стиснете на <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">„Додај слика“</a> за да додадете слика, галерија или сликоред.',
	'founderemails-email-0-day-addphotos-button' => 'Додај слика',
	'founderemails-email-0-day-customizetheme-heading' => 'Прилагодете си го изгледот.',
	'founderemails-email-0-day-customizetheme-content' => 'Прилагодете го изгледот на вашето вики и графичкиот жиг за да се разликува од останатите!  Употребете го <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">Ликовниот уредник</a> за да ги приалгодите боите и да направите измени што е одговараат на вашата тема.',
	'founderemails-email-0-day-customizetheme-button' => 'Прилагоди',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">Нема да ве оставиме на студот.</span>  Тука сме за да ви помогнеме $WIKINAME да биде успешно во секој нов чекор.  Посетете ја страницата <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a> и таму ќе најдете форуми, совети и помош, или пак <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">пишете ни</a> ако имате прашања!',
	'founderemails-email-0-day-wikiahelps-signature' => 'Нека ви е со среќа работата и развојот на викито!<br />Екипата на Викија',
	'founderemails-email-3-day-heading' => 'Здраво-живо $USERNAME,',
	'founderemails-email-3-day-congratulations' => 'Наминуваме за да видиме како одат работите на $WIKINAME.',
	'founderemails-email-3-day-tips-heading' => 'Поминаа веќе 3 дена откако почнавте, па наминавме за да ви понудиме уште некој совет за изработката на вашето вики:',
	'founderemails-email-3-day-editmainpage-heading' => 'Дотерајте ја вашата главна страница.',
	'founderemails-email-3-day-editmainpage-content' => 'Главната страница е првото нешто што го гледаат луѓето кога ќе го посетат викито <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a>.  Оставете добар прв впечаток со тоа што ќе напишете подробно објаснување за вашата тематика, додајте сликоред, галерија, или лизгач со слики.',
	'founderemails-email-3-day-editmainpage-button' => 'Дотерај ја',
	'founderemails-email-3-day-addphotos-heading' => 'Додајте уште повеќе слики.',
	'founderemails-email-3-day-addphotos-content' => 'Еден од најдобрите начини за да направите солидна страница е да <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"додадете слики"</a>.',
	'founderemails-email-3-day-addphotos-button' => 'Додај слики',
	'founderemails-email-3-day-explore-heading' => 'Најдете инспирација.',
	'founderemails-email-3-day-explore-content' => 'Најслободно разгледајте ги другите викија и погледајте како ги изработиле нивните главни страници, статии и др.  Еве ги нашите предлози: <a style="color:#2a87d5;text-decoration:none;" href="http://muppets.wikia.com">Muppet Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://poptarts.wikia.com">Pop Tarts Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://monsterhigh.wikia.com">Monster High Wiki</a>.',
	'founderemails-email-3-day-explore-button' => 'Истражи',
	'founderemails-email-3-day-wikiahelps-text' => 'Ви треба помош за да се снајдете?  Секогаш ви стоиме на располагање!  Побарајте ни помош и совети на страницата <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-3-day-wikiahelps-signature' => 'Продолжете со одличната работа!<br />Екипата на Викија',
	'founderemails-email-10-day-heading' => 'Како е, $USERNAME?',
	'founderemails-email-10-day-congratulations' => 'Е, па времето лета!  Има веќе 10 дена откако го започнавте викито $WIKINAME.',
	'founderemails-email-10-day-tips-heading' => 'Привлечете учесници и пофалете се со она што сте го сработиле. Еве како да разгласите:',
	'founderemails-email-10-day-share-heading' => 'Зар не ви кажа мама дека треба да делите со другите?',
	'founderemails-email-10-day-share-content' => 'Користете го копчето „Сподели“ на главната страница, статиите и сликите за да им ги покажете на пријателите и оние што ве следат на Facebook.',
	'founderemails-email-10-day-email-heading' => 'Искористете ја моќта на е-поштата.',
	'founderemails-email-10-day-email-content' => 'Испратете им е-пошта на познатите што би ги интересирала вашата тематика или што ќе сакаат да ви помогнат (како другар, колега и сл.) Можете да испраќате и поединечни слики од вашето вики, преку копчето за е-пошта',
	'founderemails-email-10-day-join-heading' => 'Здружете се со слични мреж. места',
	'founderemails-email-10-day-join-content' => 'Побарајте помош од други форуми и мрежни места посветени на вашата тематика и прашајте го администраторот дали е заинтересиран за споделување на врски &mdash; врска до вашето вики на нивната страица и врска до нивната страница на вашето вики.',
	'founderemails-email-10-day-wikiahelps-text' => 'Можете да побарате помош и од другите викијанци на форумите на <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com?uselang=mk">community.fandom.com</a>.',
	'founderemails-email-10-day-wikiahelps-signature' => 'Продолжете така!<br />Екипата на Викија',
	'founderemails-email-views-digest-subject' => 'Денешни посети на $WIKINAME',
	'founderemails-email-views-digest-body' => 'Здраво $USERNAME,

Денес $WIKINAME имаше $1 {{PLURAL:$1|посетител|посетители}}.

Продолжете и понатаму да додавате содржини и да го промовирате викито - така ќе ги поттикнете луѓето да читаат, уредуваат и да разгласуваат.

$WIKIURL

Екипата на Викија',
	'founderemails-email-views-digest-greeting' => 'Здраво $USERNAME,',
	'founderemails-email-views-digest-headline' => 'Денес $WIKINAME го посетија $UNIQUEVIEWS лица.',
	'founderemails-email-views-digest-content' => 'Продолжете да додавате нови содржини и да го промовирате викито за да поттикнете што повеќе читатели и уредници, и за да се расчуе за викито.',
	'founderemails-email-views-digest-signature' => 'Екипата на Викија',
	'founderemails-email-views-digest-button' => 'Додај уште страници',
	'founderemails-email-complete-digest-subject' => 'Најнови збиднувања на $WIKINAME',
	'founderemails-email-complete-digest-body' => 'Здраво $USERNAME,

Време е за дневниот преглед на збиднувањата на $WIKINAME, $WIKIURL.

На викито имате $1 {{PLURAL:$1|посетител|посетители}}.

Продолжете така, и додавајте интересни содржини за читателите!

{{PLURAL:$2|Извршено е едно уредување|Извршени се $2  уредувања}}.

Задоволни уредници создаваат пријатни викија. Не заборавајте да им се заблагодарите на уредниците и од време на време да проверите дали им треба нешто.

На викито се {{PLURAL:$3|зачленило едно лице|се зачлениле $3 лица}}.

Посакајте им добредојде на новодојдените со пораки на страниците за разговор.

Секогаш можете да појдете на страницата „Активности на викито“ за да ги погледате интересните збиднувања и измените на $WIKINAME. Проверовајте често - како основач, должни сте да ги водите корисниците, да им помагате и да раководите со викито.

Екипата на Викија',
	'founderemails-email-complete-digest-greeting' => 'Здраво $USERNAME,',
	'founderemails-email-complete-digest-headline' => 'Време е за дневната доза на збиднувања на $WIKINAME.',
	'founderemails-email-complete-digest-content-heading1' => 'Вашето вики го посетиле $UNIQUEVIEWS лица.',
	'founderemails-email-complete-digest-content1' => 'Продолжете со одличната работа и понатаму додавајте интересни содржини за читателите!',
	'founderemails-email-complete-digest-content-heading2' => 'Извршени се $USEREDITS уредувања.',
	'founderemails-email-complete-digest-content2' => 'Задоволните уредници создаваат убави викија. Не заборавајте да им се заблагодарите на уредниците и од време на време да проверите дали им треба нешто.',
	'founderemails-email-complete-digest-content-heading3' => 'На вашето вики се зачленија $USERJOINS лица.',
	'founderemails-email-complete-digest-content3' => 'Посакувајте им добредојде на новодојенците со порака на страницата за разговор.
<br /><br />
Секогаш можете да појдете на „Активности на викито“ и да ги подледате сите интересни промени што се вршат на $WIKINAME. Проварувајте често. Како основач на заедницата, вие сте должни да ги водите корисниците, да им помагате, и да раководите со викито.',
	'founderemails-email-complete-digest-signature' => 'Екипата на Викија',
	'founderemails-email-complete-digest-button' => 'Оди на Активности на викито',
	'founderemails-pref-joins' => 'Извести ме по е-пошта кога некој ќе се зачлени на $1',
	'founderemails-pref-edits' => 'Извести ме по е-пошта кога некој ќе изврши уредување на $1',
	'founderemails-pref-views-digest' => 'Еднаш дневно известувај ме по е-пошта колку пати е посетен $1',
	'founderemails-pref-complete-digest' => 'Испраќај ми збирен преглед на збиднувањата на $1 еднаш дневно',
	'founderemails-pref-joins-v2' => '...некој ќе се зачлени',
	'founderemails-pref-edits-v2' => '...некој ќе иврши уредување',
	'founderemails-pref-views-digest-v2' => '...дневниот преглед на сите посети е готов',
	'founderemails-pref-complete-digest-v2' => '...дневниот преглед на зачленувања, уредувања и посети е готов',
];

$messages['ml'] = [
	'founderemails-email-0-day-addpages-heading' => 'താളുകൾ ചേർക്കുക.',
	'founderemails-email-0-day-addpages-button' => 'താൾ ചേർക്കുക',
	'founderemails-email-0-day-addphotos-heading' => 'ഫോട്ടോകൾ ചേർക്കുക.',
	'founderemails-email-0-day-addphotos-button' => 'ഒരു ഫോട്ടോ ചേർക്കുക',
	'founderemails-email-0-day-customizetheme-button' => 'ഇച്ഛാനുസരണമാക്കുക',
	'founderemails-email-3-day-addphotos-heading' => 'ഇനിയും കൂടുതൽ ഫോട്ടോകൾ ചേർക്കുക.',
	'founderemails-email-3-day-addphotos-button' => 'ഫോട്ടോകൾ ചേർക്കുക',
	'founderemails-email-3-day-explore-heading' => 'പ്രചോദനം കണ്ടെത്തുക.',
	'founderemails-email-10-day-join-heading' => 'സമാന വെബ്സൈറ്റുകളുമായി ചേരുക.',
];

$messages['ms'] = [
	'founderemails-desc' => 'Membantu memaklumkan pengasas mengenai perubahan pada wikinya',
	'tog-founderemailsenabled' => 'E-melkan perkembangan kegiatan orang lain kepada saya (pengasas sahaja)',
	'founderemails-email-user-registered-greeting' => 'Apa khabar $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Syabas! $EDITORNAME baru menyertai $WIKINAME.',
	'founderemails-email-user-registered-content' => 'Ambillah peluang ini untuk menyambut kedatangannya ke wiki anda serta menggalakkannya supaya tolong menyunting. Makin ramai makin meriah, dan makin pesatlah perkembangan wiki anda.',
	'founderemails-email-user-registered-signature' => 'Pasukan Wikia',
	'founderemails-email-user-registered-button' => 'Sambut Mereka',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '$WIKINAME ada suntingan baru!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Apa khabar $USERNAME,

Bagus! $EDITORNAME telah melakukan suntingan sulungnya di $WIKINAME.

Pergi ke $PAGETITLE untuk melihat perubahan yang dibuatnya.

$PAGEURL

Pasukan Wikia',
	'founderemails-email-first-edit-greeting' => 'Apa khabar $USERNAME,',
	'founderemails-email-first-edit-headline' => 'Bagus! $EDITORNAME telah melakukan suntingan sulungnya di $WIKINAME.',
	'founderemails-email-first-edit-content' => 'Pergi ke $PAGETITLE untuk melihat perubahan yang dibuatnya.',
	'founderemails-email-first-edit-signature' => 'Pasukan Wikia',
	'founderemails-email-first-edit-button' => 'Tengok!',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Apa khabar $USERNAME,<br /><br />
Nampaknya ada seorang pengguna berdaftar yang bernama $EDITORNAME yang menyunting wiki anda buat kali pertama! Apa kata anda singgah di <a href="$EDITORTALKPAGEURL">laman perbincangannya</a> untuk bersalaman?<br /><br />
<div style="font-style: italic; font-size: 120%;">--Pasukan Wikia</div>',
	'founderemails-email-page-edited-reg-user-subject' => 'Suntingan baru di $WIKINAME!',
	'founderemails-email-page-edited-reg-user-body' => 'Apa khabar $USERNAME,

$EDITORNAME telah melakukan satu lagi suntingan pada laman $PAGETITLE di $WIKINAME.

Pergi ke $PAGETITLE untuk melihat perubahan yang dibuatnya.

$PAGEURL

Pasukan Wikia',
	'founderemails-email-general-edit-greeting' => 'Apa khabar $USERNAME,',
	'founderemails-email-general-edit-headline' => '$EDITORNAME telah melakukan satu lagi suntingan pada laman $PAGETITLE di $WIKINAME.',
	'founderemails-email-general-edit-content' => 'Pergi ke $PAGETITLE untuk melihat perubahan yang dibuatnya.',
	'founderemails-email-general-edit-signature' => 'Pasukan Wikia',
	'founderemails-email-general-edit-button' => 'Tengok!',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Apa khabar $USERNAME,<br /><br />

Nampaknya ada seorang pengguna berdaftar yang bernama $EDITORNAME yang menyunting wiki anda! Apa kata anda singgah di <a href="$EDITORTALKPAGEURL">laman perbincangannya</a> untuk bersalaman?<br /><br />
<div style="font-style: italic; font-size: 120%;">--Pasukan Wikia</div>',
	'founderemails-email-page-edited-anon-subject' => '$WIKINAME disunting oleh teman yang misteri',
	'founderemails-email-page-edited-anon-body' => 'Apa khabar $USERNAME,

Seorang Penyumbang Wikia baru melakukan suntingan pada laman $PAGETITLE di $WIKINAME.

Penyumbang Wikia merupakan pihak yang melakukan suntingan tanpa log masuk dengan akaun Wikia. Pergi tengok apa yang ditokok oleh teman misteri ini!

$PAGEURL

Pasukan Wikia',
	'founderemails-email-anon-edit-greeting' => 'Apa khabar $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'Seorang Penyumbang Wikia baru melakukan suntingan pada laman $PAGETITLE di $WIKINAME.',
	'founderemails-email-anon-edit-content' => 'Penyumbang Wikia merupakan pihak yang melakukan suntingan tanpa log masuk dengan akaun Wikia. Pergi tengok apa yang ditokok oleh teman misteri ini!',
	'founderemails-email-anon-edit-signature' => 'Pasukan Wikia',
	'founderemails-email-anon-edit-button' => 'Tengok!',
	'founderemails-email-page-edited-anon-body-HTML' => 'Apa khabar $USERNAME,<br /><br />
Nampaknya wiki anda telah disunting oleh seseorang! Apa anda anda <a href="$MYHOMEURL">jenguk di situ</a> untuk melihat perubahannya?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Pasukan Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'Pengguna berdaftar mengubah tapak anda buat kali pertama!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Apa khabar $USERNAME,

Nampaknya ada seorang pengguna berdaftar yang bernama $EDITORNAME yang menyunting wiki anda buat kali pertama! Apa kata anda singgah di laman perbincangannya ($EDITORTALKPAGEURL) untuk bersalaman?

--Pasukan Wikia',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'Apa khabar $USERNAME,<br /><br />
Nampaknya ada seorang pengguna berdaftar yang bernama $EDITORNAME yang menyunting wiki anda buat kali pertama! Apa kata anda singgah di <a href="$EDITORTALKPAGEURL">laman perbincangannya</a> untuk bersalaman?<br /><br />
<div style="font-style: italic; font-size: 120%;">--Pasukan Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Tapak anda disunting oleh pengguna berdaftar!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Apa khabar $USERNAME,

Nampaknya ada seorang pengguna berdaftar yang bernama $EDITORNAME yang menyunting wiki anda! Apa kata anda singgah di laman perbincangannya ($EDITORTALKPAGEURL) untuk bersalaman?

--Pasukan Wikia',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => 'Apa khabar $USERNAME,<br /><br />

Nampaknya ada seorang pengguna berdaftar yang bernama $EDITORNAME yang menyunting wiki anda! Apa kata anda singgah di <a href="$EDITORTALKPAGEURL">laman perbincangannya</a> untuk bersalaman?<br /><br />
<div style="font-style: italic; font-size: 120%;">--Pasukan Wikia</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'Tapak anda telah disunting oleh orang lain!',
	'founderemails-answers-email-page-edited-anon-body' => 'Apa khabar $USERNAME,

Nampaknya anda seseorang yang telah menyunting wiki anda! Apa anda anda jenguk $MYHOMEURL untuk melihat perubahannya?

-- Pasukan Wikia',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Apa khabar $USERNAME,<br /><br />
Nampaknya anda seseorang yang telah menyunting wiki anda! Apa anda anda <a href="$MYHOMEURL">jenguk di situ</a> untuk melihat perubahannya?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Pasukan Wikia</div>',
	'founderemails-lot-happening-subject' => '$WIKINAME sangat rancak hari ini!',
	'founderemails-lot-happening-body' => 'Apa khabar $USERNAME,

Syabas! Meriah sungguh $WIKINAME, $WIKIURL!

Anda boleh pergi ke Kegiatan Wiki untuk melihat segala perkara-perkara hebat yang telah berlaku.

Disebabkan sebegitu banyak yang berlaku, anda mungkin juga ingin menukar keutamaan e-mel kepada mod ringkasan. Dengan mod ini, anda akan menerima satu e-mel sahaja yang menyeranaikan segala aktiviti di wiki anda setiap hari.

Pasukan Wikia',
	'founderemails-lot-happening-body-HTML' => 'Hei $USERNAME,<br /><br />
Wiki anda memang meriah hari ini! Sila bersinggah di $MYHOMEURL untuk melihat apa yang berlaku.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Pasukan Wikia</div>',
	'founderemails-email-lot-happening-greeting' => 'Apa khabar $USERNAME,',
	'founderemails-email-lot-happening-headline' => 'Syabas! Banyak perkara yang berlaku di $WIKINAME hari ini!',
	'founderemails-email-lot-happening-content' => 'Disebabkan sebegitu banyak yang berlaku, anda mungkin juga ingin menukar keutamaan e-mel kepada mod ringkasan. Dengan mod ini, anda akan menerima satu e-mel sahaja yang menyeranaikan segala aktiviti di wiki anda setiap hari.',
	'founderemails-email-lot-happening-signature' => 'Pasukan Wikia',
	'founderemails-email-lot-happening-button' => 'Lihat Kegiatan',
	'founderemails-email-footer-line1' => 'Untuk melihat perkembangan terbaru di Wikia, kunjungi <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>',
	'founderemails-email-footer-line2' => 'Ingin mengawal e-mel yang anda terima? Pergi ke [{{fullurl:{{ns:special}}:Preferences}} Keutamaan] anda',
	'founderemails-email-0-day-heading' => 'Selamat berkenalan, $USERNAME,',
	'founderemails-email-0-day-congratulations' => 'Syabas kerana mencipta $WIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'Berikut ialah petua-petua berguna untuk membantu anda bermula:',
	'founderemails-email-0-day-addpages-heading' => 'Tambahkan laman.',
	'founderemails-email-0-day-addpages-content' => 'Anda boleh berkongsi maklumat tentang topik kegemaran anda dengan menggunakan wiki. Cipta laman dengan mengklik  <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">"Cipta Laman Baru"</a> dan isikan maklumat terperinci tentang topik anda itu.',
	'founderemails-email-0-day-addpages-button' => 'Buat Laman Baru',
	'founderemails-email-0-day-addphotos-heading' => 'Sisipkan gambar.',
	'founderemails-email-0-day-addphotos-content' => 'Setiap laman pasti lebih menarik jika ada gambar! Sisipkan gambar pada laman-laman anda, termasuk laman utama. Anda boleh mengklik <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"Tambahkan Gambar"</a> untuk meletakkan gambar, galeri gambar atau tayangan slaid.',
	'founderemails-email-0-day-addphotos-button' => 'Tambahkan Gambar',
	'founderemails-email-0-day-customizetheme-heading' => 'Ubah suai tema anda.',
	'founderemails-email-0-day-customizetheme-content' => 'Ubah suai tema wiki dan tanda kata anda supaya wiki anda menonjol! Gunakan <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">Pereka Tema</a> untuk menambahkan warna-warna ubahsuai anda ke dalam wiki anda supaya kelihatan unik kepada topik anda.',
	'founderemails-email-0-day-customizetheme-button' => 'Ubah suai',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">Kami tak akan biarkan anda tersisih begitu saja.</span> Kami nak bantu anda menjayakan $WIKINAME langkah demi langkah.  Kunjungi <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a> untuk berbincang dalam forum, mendapat nasihat dan bantuan, ataupun <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">e-melkan</a> soalan anda kepada kami!',
	'founderemails-email-0-day-wikiahelps-signature' => 'Selamat membina wiki!<br />Pasukan Wikia',
	'founderemails-email-3-day-heading' => 'Apa khabar $USERNAME,',
	'founderemails-email-3-day-congratulations' => 'Kami datang ke sini untuk melihat perkembangan di $WIKINAME.',
	'founderemails-email-3-day-tips-heading' => 'Sudah 3 hari sejak anda bermula, jadi kami rasa hendak bersinggah di sini untuk memberikan sedikit lagi petua untuk membina wiki anda:',
	'founderemails-email-3-day-editmainpage-heading' => 'Ceriakan halaman utama anda.',
	'founderemails-email-3-day-editmainpage-content' => 'Laman utama merupakan antara perkara pertama yang dilihat oleh sesiapa yang mengunjungi <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a>.  Pastikan tanggapan awal mereka memuaskan dengan menuliskan ringkasan terperinci mengenai topik anda, serta menambahkan tayangan slaid, galeri atau gelangsar gambar.',
	'founderemails-email-3-day-editmainpage-button' => 'Ceriakan',
	'founderemails-email-3-day-addphotos-heading' => 'Tambahkan lagi gambar.',
	'founderemails-email-3-day-addphotos-content' => 'Satu cara yang terbaik untuk menceriakan laman-laman anda adalah <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"meletakkan gambar"</a>.',
	'founderemails-email-3-day-addphotos-button' => 'Sisipkan Gambar',
	'founderemails-email-3-day-explore-heading' => 'Cari ilham.',
	'founderemails-email-3-day-explore-content' => 'Jangan berasa segan untuk melihat bagaimana wiki lain mengusahakan laman utama, laman rencana dan lain-lain. Berikut ialah antara pilihan kami: <a style="color:#2a87d5;text-decoration:none;" href="http://muppets.wikia.com">Muppet Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://poptarts.wikia.com">Pop Tarts Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://monsterhigh.wikia.com">Monster High Wiki</a>.',
	'founderemails-email-3-day-explore-button' => 'Jelajah',
	'founderemails-email-3-day-wikiahelps-text' => 'Perlukan bantuan untuk mengetahui fungsi sesuatu? Kami sentiasa di sisi anda! Sila tanya kami untuk bantuan dan nasihat di <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-3-day-wikiahelps-signature' => 'Teruskan usaha anda!<br />Pasukan Wikia',
	'founderemails-email-10-day-heading' => 'Apa khabar, $USERNAME?',
	'founderemails-email-10-day-congratulations' => 'Wah, cepatnya masa berlalu! Sudah 10 hari sejak anda membuka $WIKINAME.',
	'founderemails-email-10-day-tips-heading' => 'Jemput orang lain untuk melibatkan diri dalam projek anda dan tunjukkan segala kerja hebat yang anda usahakan selama ini. Berikut ialah beberapa cara untuk menghebahkan wiki anda:',
	'founderemails-email-10-day-share-heading' => 'Ingat tak pesan orang tua supaya Berkongsi?',
	'founderemails-email-10-day-share-content' => 'Tekan butang Kongsi di laman utama wiki anda, laman rencana dan gambar anda untuk ditunjukkan kepada rakan-rakan dan pengikut-pengikut di Facebook.',
	'founderemails-email-10-day-email-heading' => 'Manfaatkan kuasa e-mel.',
	'founderemails-email-10-day-email-content' => 'E-mel kenalan-kenalan anda yang meminati topik anda atau berminat untuk membantu anda, seperti kawan dari sekolah atau rakan sekerja. Anda juga boleh menge-melkan gambar-gambar tertentu daripada wiki anda dengan menggunakan butang e-mel',
	'founderemails-email-10-day-join-heading' => 'Sertai tapak-tapak web yang serupa.',
	'founderemails-email-10-day-join-content' => 'Minta bantuan ahli forum atau tapak web lain yang berkenaan topik anda dengan membuat posting dalam forum atau ulasan. Jika boleh, hubungi pihak pentadbiran untuk melihat sama ada mereka berminat untuk berkongsi pautan &mdash; mereka akan membuat pautan wiki anda pada tapak web mereka jika anda meletakkan pautan mereka pada wiki anda.',
	'founderemails-email-10-day-wikiahelps-text' => 'Anda juga boleh meminta bantuan ahli Wikia yang lain untuk membantu mengusahakan wiki anda dengan mengepos di dalam forum di <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-10-day-wikiahelps-signature' => 'Teruskan usaha anda!<br />Pasukan Wikia',
	'founderemails-email-views-digest-subject' => 'Kunjungan hari ini di $WIKINAME',
	'founderemails-email-views-digest-body' => 'Apa khabar $USERNAME,

Hari ini, $WIKINAME dikunjungi oleh $1 orang.

Teruskan mengisikan kandungan baru dan mempromosikan wiki anda untuk menggalakkan lebih ramai orang untuk membaca, menyunting dan menyebarkan khabar.

$WIKIURL

Pasukan Wikia',
	'founderemails-email-views-digest-greeting' => 'Apa khabar $USERNAME,',
	'founderemails-email-views-digest-headline' => 'Hari ini, $WIKINAME dikunjungi oleh # orang.',
	'founderemails-email-views-digest-content' => 'Teruskan mengisikan kandungan baru dan mempromosikan wiki anda untuk menggalakkan lebih ramai orang untuk membaca, menyunting dan menyebarkan khabar.',
	'founderemails-email-views-digest-signature' => 'Pasukan Wikia',
	'founderemails-email-views-digest-button' => 'Tambahkan lagi laman',
	'founderemails-email-complete-digest-subject' => 'Kegiatan terkini di $WIKINAME',
	'founderemails-email-complete-digest-body' => 'Apa khabar $USERNAME,

Masa untuk intisari kegiatan harian anda dari $WIKINAME, $WIKIURL.

Wiki anda dikunjungi oleh $1 orang.

Teruskan usaha mengisikan kandungan yang menarik untuk tatapan pembaca!

$2 suntingan dilakukan.

Penyunting gembira, wiki pun ceria. Jangan lupa berterima kasih kepada para penyunting dan bertegur sapa dengan mereka dari masa ke semasa.

$3 orang menyertai wiki anda.

Alu-alukan kedatangan orang baru ke wiki anda dengan pesanan di laman perbincangan.

Anda boleh sentiasa pergi ke Kegiatan Wiki untuk melihat semua perubahan yang dilakukan di $WIKINAME. Sila datang selalu, kerana komuniti memandang tinggi anda sebagai pengasas untuk membantu membimbing dan menjalankan wiki.

Pasukan Wikia',
	'founderemails-email-complete-digest-greeting' => 'Apa khabar $USERNAME,',
	'founderemails-email-complete-digest-headline' => 'Masa untuk intisari kegiatan harian anda dari $WIKINAME.',
	'founderemails-email-complete-digest-content-heading1' => '$UNIQUEVIEWS orang mengunjungi wiki anda.',
	'founderemails-email-complete-digest-content1' => 'Teruskan usaha mengisikan kandungan yang menarik untuk tatapan pembaca!',
	'founderemails-email-complete-digest-content-heading2' => '$USEREDITS suntingan dilakukan.',
	'founderemails-email-complete-digest-content2' => 'Penyunting gembira, wiki pun ceria. Jangan lupa berterima kasih kepada para penyunting dan bertegur sapa dengan mereka dari masa ke semasa.',
	'founderemails-email-complete-digest-content-heading3' => '$USERJOINS orang menyertai wiki anda.',
	'founderemails-email-complete-digest-content3' => 'Alu-alukan kedatangan orang baru ke wiki anda dengan pesanan di laman perbincangan.
<br /><br />
Anda boleh sentiasa pergi ke Kegiatan Wiki untuk melihat semua perubahan yang dilakukan di $WIKINAME. Sila datang selalu, kerana komuniti memandang tinggi anda sebagai pengasas untuk membantu membimbing dan menjalankan wiki.',
	'founderemails-email-complete-digest-signature' => 'Pasukan Wikia',
	'founderemails-email-complete-digest-button' => 'Pergi ke kegiatan wiki',
	'founderemails-pref-joins' => 'E-mel saya apabila ada orang yang menyertai $1',
	'founderemails-pref-edits' => 'E-mel saya apabila ada orang yang menyunting $1',
	'founderemails-pref-views-digest' => 'Hantar e-mel harian kepada saya untuk memaklumkan saya berapa kali $1 dikunjungi',
	'founderemails-pref-complete-digest' => 'Hantar ringkasan kegiatan harian di $1 kepada saya',
	'founderemails-pref-joins-v2' => '...seseorang menyertai wiki ini',
	'founderemails-pref-edits-v2' => '...seseorang menyunting wiki ini',
	'founderemails-pref-views-digest-v2' => '...tersedianya ringkasan harian jumlah kunjungan',
	'founderemails-pref-complete-digest-v2' => '...tersedianya Ikhtisar Harian penyertaan, suntingan dan kunjungan',
];

$messages['nb'] = [
	'founderemails-desc' => 'Hjelper til med å informere grunnleggere om endringer på deres wiki',
	'tog-founderemailsenabled' => 'Send meg oppdateringer på e-post om hva andre personer gjør (kun grunnleggere)',
	'founderemails-email-user-registered-greeting' => 'Hei $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Gratulerer! $EDITORNAME har akkurat blitt med i $WIKINAME.',
	'founderemails-email-user-registered-content' => 'Benytt denne muligheten til å ønske dem velkommen til din wiki og oppmuntre dem til å hjelpe å redigere. Jo flere jo bedre, og desto raskere vil wikien din vokse.',
	'founderemails-email-user-registered-signature' => 'Wikia-teamet',
	'founderemails-email-user-registered-button' => 'Ønsk dem velkommen',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '$WIKINAME har en ny redigering!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Hei $USERNAME,

Stilig! $EDITORNAME har nettopp gjort sin første redigering på $WIKINAME.

Stikk til $PAGETITLE og se hva som ble lagt til.

$PAGEURL

Wikia-teamet',
	'founderemails-email-first-edit-greeting' => 'Hei $USERNAME,',
	'founderemails-email-first-edit-headline' => 'Stilig! $EDITORNAME har nettopp gjort sin første redigering på $WIKINAME.',
	'founderemails-email-first-edit-content' => 'Stikk til $PAGETITLE og se hva som ble lagt til.',
	'founderemails-email-first-edit-signature' => 'Wikia-teamet',
	'founderemails-email-first-edit-button' => 'Sjekk det ut!',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Hei $USERNAME,<br /><br />
Det ser ut til at den registrerte brukeren $EDITORNAME redigerte wikien din for første gang! Hvorfor ikke stikke innom <a href="$EDITORTALKPAGEURL">diskusjonssiden</a> deres for å si hei?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia-teamet</div>',
	'founderemails-email-page-edited-reg-user-subject' => 'Ny redigering på $WIKINAME!',
	'founderemails-email-page-edited-reg-user-body' => 'Hei $USERNAME,

$EDITORNAME har nettopp redigert enda en side på $WIKINAME, $PAGETITLE.

Stikk til $PAGETITLE for å se hva som ble endret.

$PAGEURL

Wikia-teamet',
	'founderemails-email-general-edit-greeting' => 'Hei $USERNAME,',
	'founderemails-email-general-edit-headline' => '$USERNAME har nettopp redigert enda en side på $WIKINAME, $PAGETITLE.',
	'founderemails-email-general-edit-content' => 'Stikk til $PAGETITLE og se hva som ble lagt til.',
	'founderemails-email-general-edit-signature' => 'Wikia-teamet',
	'founderemails-email-general-edit-button' => 'Sjekk det ut!',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Hei $USERNAME,<br /><br />

Det ser ut til at den registrerte brukeren $EDITORNAME redigerte wikien din! Hvorfor ikke stikke innom <a href="$EDITORTALKPAGEURL">diskusjonssiden</a> deres for å si hei?<br /><br />

<div style="font-style: italic; font-size: 120%;">-- Wikia-teamet</div>',
	'founderemails-email-page-edited-anon-subject' => 'En mystisk venn redigerte $WIKINAME',
	'founderemails-email-page-edited-anon-body' => 'Hei $USERNAME,

En Wikia-bidragsyter har nettopp redigert $PAGETITLE på $WIKINAME.

Wikia-bidragsytere er folk som redigerer uten å være logget inn med en Wikia-konto. Gå og se hva denne mystiske vennen la til!

$PAGEURL

Wikia-teamet',
	'founderemails-email-anon-edit-greeting' => 'Hei $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'En Wikia-bidragsyter har nettopp redigert $PAGETITLE på $WIKINAME.',
	'founderemails-email-anon-edit-content' => 'Wikia-bidragsytere er folk som redigerer uten å være logget inn med en Wikia-konto. Gå og se hva denne mystiske vennen la til!',
	'founderemails-email-anon-edit-signature' => 'Wikia-teamet',
	'founderemails-email-anon-edit-button' => 'Sjekk det ut!',
	'founderemails-email-page-edited-anon-body-HTML' => 'Hei $USERNAME,<br /><br />
Det ser ut til at noen redigerte wikien din! Hvorfor ikke stikke innom $MYHOMEURL for å se hva som ble endret?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia-teamet</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'Registrert bruker redigerte siden din for første gang!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Hei $USERNAME,

Det ser ut til at den registrerte brukeren $EDITORNAME har redigert wikien din for første gang! Hvorfor stikker du ikke innom diskusjonssiden hans ($EDITORTALKPAGEURL) for å si hallo?

-- Wikia Teamet',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'Hei $USERNAME,<br /><br />
Det ser ut til at den registrerte brukeren $EDITORNAME har redigert wikien din for første gang! Hvorfor stikker du ikke innom <a href="$EDITORTALKPAGEURL">diskusjonssiden hans</a> for å si hallo?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia Teamet</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Registrert bruker redigerte siden din!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Hei $USERNAME,

Det ser ut til at den registrerte brukeren $EDITORNAME har redigert wikien din! Hvorfor stikker du ikke innom diskusjonssiden hans ($EDITORTALKPAGEURL) og sier hallo?

-- Wikia Teamet',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => 'Hei $USERNAME,<br /><br />
Det ser ut til at den registrerte brukeren $EDITORNAME har redigert wikien din! Hvorfor stikker du ikke innom <a href="$EDITORTALKPAGEURL">diskusjonssiden</a> hans og sier hallo?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia Teamet</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'Noen redigerte siden din!',
	'founderemails-answers-email-page-edited-anon-body' => 'Hei $USERNAME,

Det ser ut til at noen har endret wikien din! Hvorfor sjekker du ikke ut $MYHOMEURL for å se hva som er endret?

-- Wikia Teamet',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Hei $USERNAME,<br /><br />
Det ser ut til at noen har endret wikien din! Hvorfor <a href="$MYHOMEURL">sjekker du det ikke ut</a> for å se hva som er endret?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia Teamet</div>',
	'founderemails-lot-happening-subject' => '$WIKINAME er i siget!',
	'founderemails-lot-happening-body' => 'Hei $USERNAME,

Gratulerer, det er en masse som skjer på $WIKINAME, $WIKIURL.

Hvis du ikke har gjort det allerede, kan du gå til Wiki-aktivitet og se alt det flotte arbeidet som har blitt gjort.

Siden det er så mye som skjer vil du kanskje endre e-postpreferansene dine til sammendragsmodus. Med sammendragsmodus får du en e-post som viser en liste over all aktiviteten på wikien din hver dag.

Wikia-teamet',
	'founderemails-lot-happening-body-HTML' => 'Hei $USERNAME,<br /><br />
Det er en masse som skjer på wikien din i dag! Stikk innom $MYHOMEURL for å se hva som står på.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia-teamet</div>',
	'founderemails-email-lot-happening-greeting' => 'Hei $USERNAME,',
	'founderemails-email-lot-happening-headline' => 'Gratulerer! Det er en masse som skjer på $WIKINAME i dag!',
	'founderemails-email-lot-happening-content' => 'Hvis du ikke har gjort det allerede kan du gå til Wiki-aktivitet og se alt det flotte arbeidet som har blitt gjort. Siden det er så mye som skjer vil du kanskje endre e-postpreferansene dine til sammendragsmodus. Med sammendragsmodus får du en e-post som viser en liste over all aktiviteten på wikien din hver dag.',
	'founderemails-email-lot-happening-signature' => 'Wikia-teamet',
	'founderemails-email-lot-happening-button' => 'Se aktiviteter',
	'founderemails-email-footer-line1' => 'For å sjekke ut de siste hendelsene på Wikia, gå til <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>',
	'founderemails-email-footer-line2' => 'Vil du kontrollere hvilke e-post du mottar? Gå til [{{fullurl:{{ns:special}}:Preferences}} innstillingene dine]',
	'founderemails-email-0-day-heading' => 'Hyggelig å treffe deg $USERNAME,',
	'founderemails-email-0-day-congratulations' => 'Gratulerer med opprettelsen av $WIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'Her er noen nyttige tips for å komme i gang:',
	'founderemails-email-0-day-addpages-heading' => 'Legg til sider.',
	'founderemails-email-0-day-addpages-content' => 'En wiki handler først og fremst om å dele informasjon om ditt unike emne. Opprett sider ved å trykke på <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">«Legg til en side»</a> og fyll ut mer spesifikk informasjon om emnet.',
	'founderemails-email-0-day-addpages-button' => 'Legg til en side',
	'founderemails-email-0-day-addphotos-heading' => 'Legg til bilder.',
	'founderemails-email-0-day-addphotos-content' => 'Sider er alltid bedre når de har noe visuelt å se på! Legg bilder til sidene dine og hovedsiden. Du kan trykke <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">«Legg til et bilde»</a> for å legge til et bilde, et billedgalleri eller en lysbildeserie.',
	'founderemails-email-0-day-addphotos-button' => 'Legg til et bilde',
	'founderemails-email-0-day-customizetheme-heading' => 'Tilpass temaet.',
	'founderemails-email-0-day-customizetheme-content' => 'Tilpass wikiens tema og logo for å gjøre at wikien skiller seg ut! Bruk <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">Temautformeren</a> for å legge egendefinerte farger til wikien og gjøre den unik for ditt emne.',
	'founderemails-email-0-day-customizetheme-button' => 'Tilpass',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">Vi vil ikke forlate deg ute i kulda.</span> Vi er her for å hjelpe deg med å gjøre $WIKINAME vellykket for hvert steg du tar. Besøk <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a> for forum, råd, og hjelp, eller send dine spørsmål på <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">e-post</a>!',
	'founderemails-email-0-day-wikiahelps-signature' => 'Lykke til med bygningen av wikien!<br />Wikia-teamet',
	'founderemails-email-3-day-heading' => 'Hei der, $USERNAME,',
	'founderemails-email-3-day-congratulations' => 'Vi ville sjekke innom og se hvordan ting går på $WIKINAME.',
	'founderemails-email-3-day-tips-heading' => 'Det har gått tre dager siden du startet opp, og vi tenkte vi skulle stikke innom for å gi deg noen flere tips til bygningen av wikien din:',
	'founderemails-email-3-day-editmainpage-heading' => 'Dekorér hovedsiden din.',
	'founderemails-email-3-day-editmainpage-content' => 'Hovedsiden er en av de første tingene folk vil se når de besøker <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a>. Gjør et godt førsteinntrykk ved å skrive et detaljert sammendrag om hva emnet ditt handler om og ved å legge til en lysbildeserie, et galleri, eller en bildekarusell.',
	'founderemails-email-3-day-editmainpage-button' => 'Dekorér den',
	'founderemails-email-3-day-addphotos-heading' => 'Legg til enda flere bilder.',
	'founderemails-email-3-day-addphotos-content' => 'En av de beste måtene å få sidene dine til å skinne, glitre og sprake på er å <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">«legge til noen bilder»</a>.',
	'founderemails-email-3-day-addphotos-button' => 'Legg til bilder',
	'founderemails-email-3-day-explore-heading' => 'Finn inspirasjon.',
	'founderemails-email-3-day-explore-content' => 'Ikke vær redd for å sjekke ut andre wikier for å se hvordan de har utformet sin hovedside, sine artikler og andre ting. Her er noen av våre favoritter: <a style="color:#2a87d5;text-decoration:none;" href="http://muppets.wikia.com">Muppet Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://poptarts.wikia.com">Pop Tarts Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://monsterhigh.wikia.com">Monster High Wiki</a>.',
	'founderemails-email-3-day-explore-button' => 'Utforsk',
	'founderemails-email-3-day-wikiahelps-text' => 'Trenger du hjelp til å finne ut hvordan noe virker? Vi er alltid her for deg! Kom og spør oss om hjelp og råd på <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-3-day-wikiahelps-signature' => 'Fortsett med den gode jobben!<br />Wikia-teamet',
	'founderemails-email-10-day-heading' => 'Hvordan går det, $USERNAME?',
	'founderemails-email-10-day-congratulations' => 'Nei, som tiden flyr! Det har allerede gått 10 dager siden du startet $WIKINAME.',
	'founderemails-email-10-day-tips-heading' => 'Involver andre i prosjektet ditt og vis frem alt det utrolige arbeidet du har lagt i det! Her er noen måter å spre ordet på:',
	'founderemails-email-10-day-share-heading' => 'Lærte ikke moren din deg å Dele?',
	'founderemails-email-10-day-share-content' => 'Bruk Del-knappen på verktøylinjen din, artikkelsider og bilder for å vise dem frem til venner og tilhengere på Facebook, Twitter, eller andre populære sider.',
	'founderemails-email-10-day-email-heading' => 'Utnytt styrken i e-post.',
	'founderemails-email-10-day-email-content' => 'Send e-post til andre bekjente som er interessert i emnet ditt eller er interessert i å hjelpe deg, som en venn fra skolen eller en medarbeider. Du kan også sende e-post med bestemte bilder fra wikien din å bruke e-post-knappen',
	'founderemails-email-10-day-join-heading' => 'Bli med i lignende nettsider.',
	'founderemails-email-10-day-join-content' => 'Spør folk etter hjelp på andre forumer eller nettsider som handler om emnet ditt ved å poste på forumene eller i kommentarfeltene deres. Om mulig, kontakt administratoren og finn ut om de er interessert i å dele koblinger &mdash; de setter en lenke til wikien din på sin side om du setter en lenke til dem på wikien din.',
	'founderemails-email-10-day-wikiahelps-text' => 'Du kan også spørre andre wikianere om å hjelpe wikien din ved å poste på forumene på <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-10-day-wikiahelps-signature' => 'Fortsett med den gode jobben!<br />Wikia-teamet',
	'founderemails-email-views-digest-subject' => 'Dagens visninger på $WIKINAME',
	'founderemails-email-views-digest-body' => 'Hei $USERNAME,

I dag ble $WIKINAME sett av $1 {{PLURAL:$1|person|personer}}.

Fortsett å legge til nytt innhold og reklamere for wikien for å oppfordre flere til å lese, redigere og spre ordet.

$WIKIURL

Wikia-teamet',
	'founderemails-email-views-digest-greeting' => 'Hei $USERNAME,',
	'founderemails-email-views-digest-headline' => 'I dag ble $WIKINAME sett av $UNIQUEVIEWS personer.',
	'founderemails-email-views-digest-content' => 'Fortsett å legge til innhold og reklamere for wikien for å oppfordre flere til å lese, redigere og spre ordet.',
	'founderemails-email-views-digest-signature' => 'Wikia-teamet',
	'founderemails-email-views-digest-button' => 'Legg til flere sider',
	'founderemails-email-complete-digest-subject' => 'Den siste aktiviteten på $WIKINAME',
	'founderemails-email-complete-digest-body' => 'Hei $USERNAME,

Det er tid for din daglige dose med aktivitet fra $WIKINAME, $WIKIURL.

$1 {{PLURAL:$1|person|personer}} har sett på wikien.

Fortsett med den gode jobben og legg til interessant innhold til leserne!

$2 {{PLURAL:$2|redigering|redigeringer}} ble gjort.

Glade redaktører lager glade wikier. Sørg for å takke redaktørene dine og sjekk innom dem fra tid til annen.

$3 {{PLURAL:$3|person|personer}} registrerte seg på wikien.

Ønsk ny folk velkommen til wikien din med en melding på diskusjonssiden deres.

Du kan alltids stikke til wiki-aktivitet for å se alle endringene gjort på $WIKINAME. Sjekk innom ofte, som grunnlegger vil fellesskapet se til deg for å få hjelp til å drive wikien.

Wikia-teamet',
	'founderemails-email-complete-digest-greeting' => 'Hei $USERNAME,',
	'founderemails-email-complete-digest-headline' => 'Det er tid for din daglige dose med aktivitet fra $WIKINAME.',
	'founderemails-email-complete-digest-content-heading1' => '$UNIQUEVIEWS personer har sett på wikien.',
	'founderemails-email-complete-digest-content1' => 'Fortsett med den gode jobben og legg til interessant innhold til leserne!',
	'founderemails-email-complete-digest-content-heading2' => '$USEREDITS redigeringer ble gjort.',
	'founderemails-email-complete-digest-content2' => 'Glade redaktører lager glade wikier. Sørg for å takke redaktørene dine og sjekk innom dem fra tid til annen.',
	'founderemails-email-complete-digest-content-heading3' => '$USERJOINS personer ble med i wikien din.',
	'founderemails-email-complete-digest-content3' => 'Ønsk ny folk velkommen til wikien din med en melding på diskusjonssiden deres.
<br /><br />
Du kan alltids stikke over til wiki-aktivitet for å se alle endringene gjort på $WIKINAME. Sjekk ofte, som grunnlegger vil fellesskapet se til deg for å få hjelp med å drifte wikien.',
	'founderemails-email-complete-digest-signature' => 'Wikia-teamet',
	'founderemails-email-complete-digest-button' => 'Gå til wikiaktivitet',
	'founderemails-pref-joins' => 'Send meg en e-post når noen blir med i $1',
	'founderemails-pref-edits' => 'Send meg en e-post når noen redigerer i $1',
	'founderemails-pref-views-digest' => 'Send meg en daglig e-post som forteller meg hvor mange ganger $1 har blitt besøkt',
	'founderemails-pref-complete-digest' => 'Send meg et daglig sammendrag av aktiviteten på $1',
	'founderemails-pref-joins-v2' => '... noen blir med',
	'founderemails-pref-edits-v2' => '... noen redigerer',
	'founderemails-pref-views-digest-v2' => '... et daglig sammendrag av totale visninger er klart',
	'founderemails-pref-complete-digest-v2' => '... et daglig sammendrag av registreringer, redigeringer og visninger er klart',
];

$messages['nl'] = [
	'founderemails-desc' => 'Informeert oprichters over wijzigingen in hun wiki',
	'tog-founderemailsenabled' => 'Mij informatie mailen over wat andere gebruikers doen (alleen voor oprichters)',
	'founderemails-email-user-registered-greeting' => 'Hallo $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Gefeliciteerd! $EDITORNAME heeft zich aangemeld bij $WIKINAME.',
	'founderemails-email-user-registered-content' => 'Maak gebruik van de gelegenheid om de gebruiker te verwelkomen op uw wiki en aan te moedigen om te blijven bewerken. Hoe meer gebruikers hoe beter en hoe sneller uw wiki zal groeien.',
	'founderemails-email-user-registered-signature' => 'Het Wikia-team',
	'founderemails-email-user-registered-button' => 'Heet ze welkom',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => 'Op $WIKINAME is een nieuwe bewerking gemaakt!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Hallo $USERNAME,

Gefeliciteerd! De geregistreerde gebruiker $EDITORNAME heeft uw wiki voor de eerste keer bewerkt!

Ga snel naar $PAGETITLE om de bewerking te bekijken.

$PAGEURL

Het Wikia-team',
	'founderemails-email-first-edit-greeting' => 'Hallo $USERNAME,',
	'founderemails-email-first-edit-headline' => 'Wow! $EDITORNAME heeft $WIKINAME voor het eerst bewerkt.',
	'founderemails-email-first-edit-content' => 'Ga naar $PAGETITLE om de wijziging te bekijken.',
	'founderemails-email-first-edit-signature' => 'Het Wikiateam',
	'founderemails-email-first-edit-button' => 'Ga kijken!',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Hallo $USERNAME,<br /><br />
De geregistreerde gebruiker $EDITORNAME heeft uw wiki voor de eerste keer bewerkt! Waarom gaat u niet even langs op de <a href="$EDITORTALKPAGEURL">overlegpagina</a> om goedendag te zeggen?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Het Wikia-team</div>',
	'founderemails-email-page-edited-reg-user-subject' => 'Nieuwe bewerking op $WIKINAME!',
	'founderemails-email-page-edited-reg-user-body' => 'Hallo $USERNAME,

De geregistreerde gebruiker $EDITORNAME heeft de pagina $PAGETITLE op $WIKINAME bewerkt.

Ga naar $PAGETITLE om de wijziging te bekijken.

$PAGEURL

Het Wikia-team',
	'founderemails-email-general-edit-greeting' => 'Hallo $USERNAME,',
	'founderemails-email-general-edit-headline' => '$EDITORNAME heeft net weer een bewerking gemaakt op de pagina $PAGETITLE op $WIKINAME.',
	'founderemails-email-general-edit-content' => 'Ga naar $PAGETITLE om de wijziging te bekijken.',
	'founderemails-email-general-edit-signature' => 'Het Wikiateam',
	'founderemails-email-general-edit-button' => 'Ga kijken!',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Hallo $USERNAME,<br /><br />

De geregistreerde gebruiker $EDITORNAME heeft uw wiki bewerkt. Waarom gaat u niet even langs op de <a href="$EDITORTALKPAGEURL">overlegpagina</a> om goedendag te zeggen?<br /><br />

<div style="font-style: italic; font-size: 120%;">-- Het Wikia-team</div>',
	'founderemails-email-page-edited-anon-subject' => 'Een mysterieuze vriend heeft $WIKINAME bewerkt',
	'founderemails-email-page-edited-anon-body' => 'Hallo $USERNAME,

Een Wikiagebruiker heeft de pagina $PAGETITLE op $WIKINAME bewerkt.

Wikiagebruikers zijn mensen die wijzigen maken zonder aan te melden. Ga snel kijken wat deze mysterieuze vriend heeft toegevoegd!

$PAGEURL

Het Wikia-team',
	'founderemails-email-anon-edit-greeting' => 'Hallo $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'Een Wikia-gebruiker heeft de pagina $PAGETITLE op $WIKINAME bewerkt.',
	'founderemails-email-anon-edit-content' => 'Wikia-gebruikers zijn mensen die bewerkingen maken zonder aan te melden met een Wikia-gebruiker. Ga snel kijken wat onze mysterieuze vriend heeft toegevoegd!',
	'founderemails-email-anon-edit-signature' => 'Het Wikia-team',
	'founderemails-email-anon-edit-button' => 'Ga kijken!',
	'founderemails-email-page-edited-anon-body-HTML' => 'Hallo $USERNAME,<br /><br />

Het ziet ernaar uit dat iemand uw wiki heeft bewerkt! Waarom gaat u niet even kijken <a href="$MYHOMEURL">wat er is gewijzigd</a>?<br /><br />

<div style="font-style: italic; font-size: 120%;">Het Wikia-team</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'Een gebruiker heeft voor de eerste keer uw site gewijzigd!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Hallo $USERNAME,

De geregistreerde gebruiker $EDITORNAME heeft uw wiki voor de eerste keer gewijzigd! Waarom laat u niet even een berichtje achter op de overlegpagina? $EDITORTALKPAGEURL

-- Het Wikia-team',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'Hallo $USERNAME,<br /><br />
De geregistreerde gebruiker $EDITORNAME heeft uw wiki voor de eerste keer gewijzigd! Waarom laat u niet even een berichtje achter op de <a href="$EDITORTALKPAGEURL">overlegpagina</a>?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Het Wikia-team</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Een gebruiker heeft uw site gewijzigd!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Hallo $USERNAME,

Het lijkt erop dat de geregistreerde gebruiker $EDITORNAME uw wiki heeft bewerkt! Waarom laat u geen bericht achter op de overlegpagina van $EDITORNAME? $EDITORTALKPAGEURL

-- Het Wikia-team',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => 'Hallo $USERNAME,<br /><br />
Het lijkt erop dat de geregistreerde gebruiker $EDITORNAME uw wiki heeft bewerkt! Waarom laat u geen bericht achter op de <a href="$EDITORTALKPAGEURL">overlegpagina van $EDITORNAME</a>?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Het Wikia-team</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'Iemand heeft je site gewijzigd!',
	'founderemails-answers-email-page-edited-anon-body' => 'Hallo $USERNAME,

Het lijkt erop dat iemand uw wiki heeft bewerkt! Waarom gaat u niet even kijken wat er is veranderd? $MYHOMEURL

-- Het Wikiateam',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Hallo $USERNAME,<br /><br />
Het lijkt erop dat iemand uw wiki heeft bewerkt! Waarom gaat u niet even kijken <a href="$MYHOMEURL">wat er is veranderd</a>?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Het Wikiateam</div>',
	'founderemails-lot-happening-subject' => 'Er gebeurt veel op je site vandaag!',
	'founderemails-lot-happening-body' => 'Hoi $FOUNDERNAME.

Er gebeurt veel op je wiki vandaag. Kom naar $MYHOMEURL om te kijken wat er allemaal gebeurt.

-- Het Wikia-team',
	'founderemails-lot-happening-body-HTML' => 'Hoi $FOUNDERNAME,<br /><br />
Er gebeurt veel op je wiki vandaag! Kom naar $MYHOMEURL om te kijken wat er allemaal gebeurt.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Het Wikia-team</div>',
	'founderemails-email-lot-happening-greeting' => 'Hallo $USERNAME,',
	'founderemails-email-lot-happening-headline' => 'Gefeliciteerd! Er is veel gaande op $WIKINAAM vandaag!',
	'founderemails-email-lot-happening-content' => 'Als u niet al hebt gekeken, kunt u op Wikiactiviteit zien wat er allemaal is gedaan. Omdat er zoveel gebeurt, wilt u misschien ook wel uw e-mailvoorkeuren aanpassen naar verzamelmodus. In verzamelmodus ontvangt u iedere dag in een enkele e-mail een lijst met alles dat er in uw wiki is gebeurd.',
	'founderemails-email-lot-happening-signature' => 'Het Wikia-team',
	'founderemails-email-lot-happening-button' => 'Activiteit bekijken',
	'founderemails-email-footer-line1' => 'Ga naar <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a> om de laatste ontwikkelingen bij Wikia te volgen',
	'founderemails-email-footer-line2' => 'Wilt u bepalen welke e-mails u krijgt? Ga naar uw [{{fullurl:{{ns:special}}:Preferences}} voorkeuren]',
	'founderemails-email-0-day-heading' => 'Goed u te zien, $USERNAME.',
	'founderemails-email-0-day-congratulations' => 'Gefeliciteerd met het aanmaken van $WIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'Hier zijn een paar nuttige tips om u snel op weg te helpen:',
	'founderemails-email-0-day-addpages-heading' => 'Pagina\'s toevoegen.',
	'founderemails-email-0-day-addpages-content' => 'In een wiki draait alles om het delen van informatie; in dit geval over uw unieke onderwerp. Maak pagina\'s aan door te klikken op "<a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">Pagina toevoegen</a>" en voeg nog meer gegevens over uw onderwerp toe.',
	'founderemails-email-0-day-addpages-button' => 'Pagina toevoegen',
	'founderemails-email-0-day-addphotos-heading' => 'Afbeeldingen toevoegen.',
	'founderemails-email-0-day-addphotos-content' => 'Pagina\'s zien er altijd beter uit als ze visueel zijn! Voeg afbeeldingen toe aan uw pagina\'s en aan uw hoofdpagina. U kunt klikken op "<a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">Afbeelding toevoegen</a>" om een afbeelding, galerij of diavoorstelling toe te voegen.',
	'founderemails-email-0-day-addphotos-button' => 'Afbeelding toevoegen',
	'founderemails-email-0-day-customizetheme-heading' => 'Het siteuiterlijk aanpassen.',
	'founderemails-email-0-day-customizetheme-content' => 'Pas het uiterlijk en het woordmerk van uw wiki aan om op te vallen! Gebruik de <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">Wizard uiterlijk aanpassen</a> om aangepaste kleuren toe te voegen aan uw wiki en de site precies aan te passen aan uw onderwerp.',
	'founderemails-email-0-day-customizetheme-button' => 'Aanpassen',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">We laten u niet in de kou staan.</span> We zijn hier om u te helpen $WIKINAME succesvol te maken, stap voor stap. Kom langs op <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a> voor forums, advies en hulp of <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">e-mail ons</a> uw vragen!',
	'founderemails-email-0-day-wikiahelps-signature' => 'Veel plezier met wikibouwen!<br />Het Wikia-team',
	'founderemails-email-3-day-heading' => 'Hallo $USERNAME!',
	'founderemails-email-3-day-congratulations' => 'We wilden u even een berichtje sturen om te vragen hoe het gaat met $WIKINAME.',
	'founderemails-email-3-day-tips-heading' => 'Het is nu drie dagen geleden dat u bent begonnen en we denken dat het een goed moment is om u wat tips te geven over het opbouwen van uw wiki:',
	'founderemails-email-3-day-editmainpage-heading' => 'Zorg ervoor dat uw hoofdpagina pakkend is.',
	'founderemails-email-3-day-editmainpage-content' => 'De hoofdpagina is meestal een van de eerste pagina\'s die bezoekers zien als ze langskomen op <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a>. Zorg voor een goede eerste indruk door het schrijven van een gedetailleerde samenvatting over uw onderwerp en door een diavoorstelling, galerij of schuifpresentatie toe te voegen.',
	'founderemails-email-3-day-editmainpage-button' => 'Verbeteren',
	'founderemails-email-3-day-addphotos-heading' => 'Voeg nog meer afbeeldingen toe.',
	'founderemails-email-3-day-addphotos-content' => '<a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">Meer afbeeldingen toevoegen</a> is een van de beste manieren om uw pagina\'s op te leuken.',
	'founderemails-email-3-day-addphotos-button' => 'Afbeeldingen toevoegen',
	'founderemails-email-3-day-explore-heading' => 'Inspiratie vinden.',
	'founderemails-email-3-day-explore-content' => 'Wees niet bang om naar andere wiki\'s te kijken. Bekijk goed hoe die hun hoofdpagina hebben opgebouwd, hoe hun pagina\'s eruit zien en meer. Dit zijn onze favorieten: <a style="color:#2a87d5;text-decoration:none;" href="http://muppets.wikia.com">Muppetwiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://poptarts.wikia.com">Pop Tarts-wiki</a> en <a style="color:#2a87d5;text-decoration:none;" href="http://monsterhigh.wikia.com">Monster High-wiki</a>.',
	'founderemails-email-3-day-explore-button' => 'Verkennen',
	'founderemails-email-3-day-wikiahelps-text' => 'Hebt u hulp nodig bij het uitzoeken hoe iets werkt? We zijn er altijd voor u! Vraag ons om hulp en advies via <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-3-day-wikiahelps-signature' => 'Ga vooral door met uw goede werk!<br />Het Wikia-team',
	'founderemails-email-10-day-heading' => 'Hoe gaat het $USERNAME?',
	'founderemails-email-10-day-congratulations' => 'Tjonge, jonge, de tijd vliegt. Het is al weer tien dagen geleden dat u $WIKINAME hebt opgericht.',
	'founderemails-email-10-day-tips-heading' => 'Betrek anderen bij uw project en pronk met het fantastische werk dat u hebt verzet! Dit zijn een aantal manieren om uw project bekend te maken:',
	'founderemails-email-10-day-share-heading' => 'Heeft uw moeder u niet verteld dat u moet delen?',
	'founderemails-email-10-day-share-content' => 'Gebruik de knop "Delen" op de startpagina van uw wiki, op pagina\'s en op afbeeldingen om ze te laten zien aan uw vrienden en volgers op Facebook.',
	'founderemails-email-10-day-email-heading' => 'Benut de kracht van e-mail.',
	'founderemails-email-10-day-email-content' => 'E-mail andere mensen die geïnteresseerd zijn in uw onderwerp of die u willen helpen, zoals een schoolvriend of een collega. U kunt ook bepaalde afbeeldingen die worden gebruikt in uw wiki e-mailen via de knop "E-mail".',
	'founderemails-email-10-day-join-heading' => 'Werk samen met gelijksoortige websites.',
	'founderemails-email-10-day-join-content' => 'Vraag mensen op andere forums of websites over uw onderwerp om hulp door daar berichten te plaatsen. Neem als het mogelijk is contact op met de beheerders en vraag of ze geïnteresseerd zijn in het uitwisselen van koppelingen. Zij zetten dan een koppeling naar uw website op hun website, en andersom.',
	'founderemails-email-10-day-wikiahelps-text' => 'U kunt ook andere Wikianen om hulp bij uw wiki vragen door berichten te plaatsen in de forums op <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-10-day-wikiahelps-signature' => 'Blijf vooral doorgaan met uw goede werk!<br />Het Wikia-team',
	'founderemails-email-views-digest-subject' => 'Bezoekersoverzicht van vandaag voor $WIKINAME',
	'founderemails-email-views-digest-body' => 'Hallo $USERNAME,

Vandaag is $WIKINAME bekeken door {{PLURAL:$1|één persoon|$1 mensen}}.

Blijf nieuwe inhoud toevoegen en blijf uw wiki promoten om mensen aan te moedigen te blijven lezen, bewerken en ook weer aan anderen over de wiki te vertellen.

$WIKIURL

Het Wikia-team',
	'founderemails-email-views-digest-greeting' => 'Hallo $USERNAME,',
	'founderemails-email-views-digest-headline' => 'Vandaag is $WIKINAME bekeken door $UNIQUEVIEWS mensen.',
	'founderemails-email-views-digest-content' => 'Blijf nieuwe inhoud toevoegen en blijf uw wiki promoten om mensen aan te moedigen te blijven lezen, bewerken en ook weer aan anderen over de wiki te vertellen.',
	'founderemails-email-views-digest-signature' => 'Het Wikia-team',
	'founderemails-email-views-digest-button' => 'Meer pagina\'s toevoegen',
	'founderemails-email-complete-digest-subject' => 'De laatste activiteit op $WIKINAME',
	'founderemails-email-complete-digest-body' => 'Hallo $USERNAME,

Het is tijd voor uw dagelijkse dosis activiteit van $WIKINAME, $WIKIURL.

Uw wiki is door $1 {{PLURAL:$1|persoon|personen}} bezocht.

Blijf interessante inhoud toevoegen voor bezoekers!

Er {{PLURAL:$2|is $1 bewerking|zijn $2 bewerkingen}} gemaakt.

Gelukkige redacteuren zorgen voor goede wiki\'s. Bedank uw redacteuren en maak regelmatig een praatje met ze.

Er {{PLURAL:$3|is $1 persoon|zijn $2 personen}} lid geworden van uw wiki.

Verwelkom nieuwe gebruikers van uw wiki met een bericht op hun overlegpagina.

U kunt altijd naar de pagina Wikiactiviteit gaan om alle wijzigingen die gemaakt worden aan $WIKINAME te bekijken. Ga vaak naar uw wiki, omdat de gemeenschap naar u als oprichter kijkt voor hulp en van u verwacht dat u de wiki beheert.

Het Wikia-team',
	'founderemails-email-complete-digest-greeting' => 'Hallo $USERNAME,',
	'founderemails-email-complete-digest-headline' => 'Het is tijd voor uw dagelijkse dosis activiteit van $WIKINAME.',
	'founderemails-email-complete-digest-content-heading1' => '$1 {{PLURAL:$1|persoon|mensen}} hebben uw wiki bekeken.',
	'founderemails-email-complete-digest-content1' => 'Blijf vooral zo goed doorgaan met het toevoegen van interessante inhoud die mensen willen lezen!',
	'founderemails-email-complete-digest-content-heading2' => 'Er {{PLURAL:$1|is 1 bewerking|zijn $1 bewerkingen}} gemaakt.',
	'founderemails-email-complete-digest-content2' => 'Gelukkige redacteuren maken succesvolle wiki\'s. Zorg dat u uw redacteuren bedankt en zoek van tijd tot tijd contact met ze.',
	'founderemails-email-complete-digest-content-heading3' => '$1 {{PLURAL:$1|persoon heeft|mensen hebben}} zich ingeschreven bij uw wiki.',
	'founderemails-email-complete-digest-content3' => 'Verwelkom nieuwe mensen in uw wiki via een bericht op hun overlegpagina.<br /><br />
U kunt altijd naar de wiki gaan om alle interessante wijzigingen van $WIKINAME te bekijken. Kom vaak terug, want de gemeenschap kijkt naar u als de oprichter van de wiki voor hulp en om de wiki actief te houden.',
	'founderemails-email-complete-digest-signature' => 'Het Wikia-team',
	'founderemails-email-complete-digest-button' => 'Naar wiki-activiteit',
	'founderemails-pref-joins' => 'Mij e-mailen als iemand lid wordt van $1',
	'founderemails-pref-edits' => 'Mij e-mailen als iemand $1 bewerkt',
	'founderemails-pref-views-digest' => 'Stuur mij een dagelijkse e-mail waarin staat hoe vaak $1 is bekeken',
	'founderemails-pref-complete-digest' => 'Stuur me een dagelijkse verzamele-mail met de activiteit in $1',
	'founderemails-pref-joins-v2' => '... iemand wordt lid',
	'founderemails-pref-edits-v2' => '... iemand maakt een bewerking',
	'founderemails-pref-views-digest-v2' => '... een dagelijkse samenvatting van het totale aantal bekeken pagina\'s is beschikbaar',
	'founderemails-pref-complete-digest-v2' => '... een dagelijkse samenvatting van lidmaatschappen, bewerkingen en bekeken pagina\'s is beschikbaar',
];

$messages['nl-informal'] = [
	'founderemails-email-page-edited-reg-user-first-edit-subject' => 'Op $WIKINAME is een nieuwe bewerking gemaakt!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Hoi $USERNAME,

Gefeliciteerd! De geregistreerde gebruiker $EDITORNAME heeft je wiki voor de eerste keer bewerkt!

Ga snel naar $PAGETITLE om de bewerking te bekijken.

$PAGEURL

Het Wikia-team',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Hoi $USERNAME,<br /><br />
De geregistreerde gebruiker $EDITORNAME heeft je wiki voor de eerste keer bewerkt! Waarom ga je niet even langs op de <a href="$EDITORTALKPAGEURL">overlegpagina</a> om hoi te zeggen?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Het Wikia-team</div>',
	'founderemails-email-page-edited-reg-user-body' => 'Hoi $USERNAME,

De geregistreerde gebruiker $EDITORNAME heeft de pagina $PAGETITLE op $WIKINAME bewerkt.

Ga naar $PAGETITLE om de wijziging te bekijken.

$PAGEURL

Het Wikia-team',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Hoi $USERNAME,<br /><br />

De geregistreerde gebruiker $EDITORNAME heeft je wiki bewerkt. Waarom ga je niet even langs op de <a href="$EDITORTALKPAGEURL">overlegpagina</a> om hoi te zeggen?<br /><br />

<div style="font-style: italic; font-size: 120%;">-- Het Wikia-team</div>',
	'founderemails-email-page-edited-anon-subject' => 'Een mysterieuze vriend heeft $WIKINAME bewerkt',
	'founderemails-email-page-edited-anon-body' => 'Hoi $USERNAME,

Een Wikiagebruiker heeft de pagina $PAGETITLE op $WIKINAME bewerkt.

Wikiagebruikers zijn mensen die wijzigen maken zonder aan te melden. Ga snel kijken wat deze mysterieuze vriend heeft toegevoegd!

$PAGEURL

Het Wikia-team',
	'founderemails-email-page-edited-anon-body-HTML' => 'Hoi $USERNAME,<br /><br />

Het ziet ernaar uit dat iemand je wiki heeft bewerkt! Waarom ga je niet even kijken <a href="$MYHOMEURL">wat er is gewijzigd</a>?<br /><br />

<div style="font-style: italic; font-size: 120%;">Het Wikia-team</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'Een gebruiker heeft voor de eerste keer je site gewijzigd!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Hoi $USERNAME,

De geregistreerde gebruiker $EDITORNAME heeft je wiki voor de eerste keer gewijzigd! Waarom laat je niet even een berichtje achter op de overlegpagina? $EDITORTALKPAGEURL

-- Het Wikia-team',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'Hoi $USERNAME,<br /><br />
De geregistreerde gebruiker $EDITORNAME heeft je wiki voor de eerste keer gewijzigd! Waarom laat je niet even een berichtje achter op de <a href="$EDITORTALKPAGEURL">overlegpagina</a>?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Het Wikia-team</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Een gebruiker heeft je site gewijzigd!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Hoi $USERNAME,

Het lijkt erop dat de geregistreerde gebruiker $EDITORNAME je wiki heeft bewerkt! Waarom laat je geen bericht achter op de overlegpagina van $EDITORNAME? $EDITORTALKPAGEURL

-- Het Wikia-team',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => 'Hoi $USERNAME,<br /><br />
Het lijkt erop dat de geregistreerde gebruiker $EDITORNAME je wiki heeft bewerkt! Waarom laat je geen bericht achter op de <a href="$EDITORTALKPAGEURL">overlegpagina van $EDITORNAME</a>?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Het Wikia-team</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'Iemand heeft je site gewijzigd!',
	'founderemails-answers-email-page-edited-anon-body' => 'Hoi $USERNAME,

Het lijkt erop dat iemand je wiki heeft bewerkt! Waarom ga je niet even kijken wat er is veranderd? $MYHOMEURL

-- Het Wikia-team',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Hoi $USERNAME,<br /><br />
Het lijkt erop dat iemand je wiki heeft bewerkt! Waarom ga je niet even kijken <a href="$MYHOMEURL">wat er is veranderd</a>?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Het Wikia-team</div>',
	'founderemails-lot-happening-subject' => 'Er gebeurt veel op $WIKINAME!',
	'founderemails-lot-happening-body' => 'Hallo $USERNAME.

Gefeliciteerd! Er gebeurt veel op $WIKINAME ($WIKIURL) vandaag.

Als je niet al hebt gekeken, kan je op Wikiactiviteit zien wat er allemaal is gedaan.

Omdat er zoveel gebeurt, wilt je misschien ook wel je e-mailvoorkeuren aanpassen naar verzamelmodus. In verzamelmodus ontvang je iedere dag in een enkele e-mail een lijst met alles dat er in je wiki is gebeurd.

Het Wikia-team',
	'founderemails-lot-happening-body-HTML' => 'Hoi $USERNAME,<br /><br />
Er gebeurt veel op je wiki vandaag! Kom naar $MYHOMEURL om te kijken wat er allemaal gebeurt.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Het Wikia-team</div>',
	'founderemails-email-footer-line2' => 'Wil je bepalen welke e-mails je krijgt? Ga naar je [{{fullurl:{{ns:special}}:Preferences}} voorkeuren]',
	'founderemails-email-0-day-heading' => 'Goed je te zien, $USERNAME.',
	'founderemails-email-0-day-tips-heading' => 'Hier zijn een paar nuttige tips om je snel op weg te helpen:',
	'founderemails-email-0-day-addpages-content' => 'In een wiki draait alles om het delen van informatie; in dit geval over jouw unieke onderwerp. Maak pagina\'s aan door te klikken op "<a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">Pagina toevoegen</a>" en voeg nog meer gegevens over je onderwerp toe.',
	'founderemails-email-0-day-addphotos-content' => 'Pagina\'s zien er altijd beter uit als ze visueel zijn! Voeg afbeeldingen toe aan je pagina\'s en aan je hoofdpagina. Je kunt klikken op "<a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">Afbeelding toevoegen</a>" om een afbeelding, galerij of diavoorstelling toe te voegen.',
	'founderemails-email-0-day-customizetheme-heading' => 'Het siteuiterlijk aanpassen.',
	'founderemails-email-0-day-customizetheme-content' => 'Pas het uiterlijk en het woordmerk van je wiki aan om op te vallen! Gebruik de <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">Wizard uiterlijk aanpassen</a> om aangepaste kleuren toe te voegen aan je wiki en de site precies aan te passen aan je onderwerp.',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">We laten je niet in de kou staan.</span> We zijn hier om je te helpen $WIKINAME succesvol te maken, stap voor stap. Kom langs op <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a> voor forums, advies en hulp of <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">e-mail ons</a> je vragen!',
	'founderemails-email-3-day-tips-heading' => 'Het is nu drie dagen geleden dat je bent begonnen en we denken dat het een goed moment is om je wat tips te geven over het opbouwen van je wiki:',
	'founderemails-email-3-day-editmainpage-heading' => 'Zorg ervoor dat je hoofdpagina pakkend is.',
	'founderemails-email-3-day-editmainpage-content' => 'De hoofdpagina is meestal een van de eerste pagina\'s die bezoekers zien als ze langskomen op <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a>. Zorg voor een goede eerste indruk door het schrijven van een gedetailleerde samenvatting over uw onderwerp en door een diavoorstelling, galerij of schuifpresentatie toe te voegen.',
	'founderemails-email-3-day-addphotos-content' => '<a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">Meer afbeeldingen toevoegen</a> is een van de beste manieren om je pagina\'s op te leuken.',
	'founderemails-email-3-day-wikiahelps-text' => 'Heb je hulp nodig bij het uitzoeken hoe iets werkt? We zijn er altijd voor je! Vraag ons om hulp en advies via <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-10-day-congratulations' => 'Tjonge, jonge, de tijd vliegt. Het is al weer tien dagen geleden dat je $WIKINAME hebt opgericht.',
	'founderemails-email-10-day-tips-heading' => 'Betrek anderen bij je project en pronk met het fantastische werk dat je hebt verzet! Dit zijn een aantal manieren om je project bekend te maken:',
	'founderemails-email-10-day-share-heading' => 'Heeft je moeder je niet verteld dat je moet delen?',
	'founderemails-email-10-day-share-content' => 'Gebruik de knop "Delen" op de startpagina van je wiki, op pagina\'s en op afbeeldingen om ze te laten zien aan je vrienden en volgers op Facebook.',
	'founderemails-email-10-day-email-content' => 'E-mail andere mensen die geïnteresseerd zijn in je onderwerp of die je willen helpen, zoals een schoolvriend of een collega. Je kunt ook bepaalde afbeeldingen die worden gebruikt in je wiki e-mailen via de knop "E-mail".',
	'founderemails-email-10-day-join-content' => 'Vraag mensen op andere forums of websites over je onderwerp om hulp door daar berichten te plaatsen. Neem als het mogelijk is contact op met de beheerders en vraag of ze geïnteresseerd zijn in het uitwisselen van koppelingen. Zij zetten dan een koppeling naar jouw website op hun website, en andersom.',
	'founderemails-email-10-day-wikiahelps-text' => 'Je kunt ook andere Wikianen om hulp bij je wiki vragen door berichten te plaatsen in de forums op <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
];

$messages['oc'] = [
	'founderemails-desc' => 'Ajuda los fondators en los informant dels cambiaments sus lor wiki',
	'tog-founderemailsenabled' => 'Me mandar de mesas a jorn per corrièr electronic sus çò que fan las autras personas (fondators unicament)',
	'founderemails-email-user-registered-greeting' => 'Bonjorn $USERNAME,',
	'founderemails-email-user-registered-content' => 'Prenètz aquela oportunitat per li desirar la venvenguda sus vòstre wikia e l\'encoratjar a vos ajudar a modificar. Mai sèm, mai es agradiu, e  mai rapidament vòstre wikia espelirà !',
	'founderemails-email-user-registered-signature' => 'L’equipa Wikia',
	'founderemails-email-user-registered-button' => 'Lor desirar la benvenguda',
	'founderemails-email-first-edit-greeting' => 'Bonjorn $USERNAME,',
	'founderemails-email-first-edit-signature' => '— L’equipa Wikia',
	'founderemails-email-first-edit-button' => 'Verificar !',
	'founderemails-email-general-edit-greeting' => 'Bonjorn $USERNAME,',
	'founderemails-email-general-edit-signature' => '— L’equipa Wikia',
	'founderemails-email-general-edit-button' => 'Verificar !',
	'founderemails-email-anon-edit-greeting' => 'Bonjorn $USERNAME,',
	'founderemails-email-anon-edit-signature' => '— L’equipa Wikia',
	'founderemails-email-anon-edit-button' => 'Verificar !',
	'founderemails-email-lot-happening-greeting' => 'Bonjorn $USERNAME,',
	'founderemails-email-lot-happening-signature' => '— L’equipa Wikia',
	'founderemails-email-lot-happening-button' => 'Veire l’activitat',
	'founderemails-email-0-day-addpages-heading' => 'Apondre de paginas',
	'founderemails-email-0-day-addpages-button' => 'Apondre una pagina',
	'founderemails-email-0-day-addphotos-heading' => 'Apondre d\'imatges.',
	'founderemails-email-0-day-addphotos-button' => 'Apondre una fòto',
	'founderemails-email-0-day-customizetheme-button' => 'Personalizar',
	'founderemails-email-3-day-heading' => 'Bonjour $USERNAME,',
	'founderemails-email-3-day-editmainpage-button' => 'Agrementatz-la',
	'founderemails-email-3-day-addphotos-button' => 'Apondre d\'imatges.',
	'founderemails-email-3-day-explore-heading' => 'Trobatz l’inspiracion.',
	'founderemails-email-3-day-explore-button' => 'Exploratz',
	'founderemails-email-10-day-join-heading' => 'Contactar de sites Web similars.',
	'founderemails-email-views-digest-subject' => 'Vistas uèi sus $WIKINAME',
	'founderemails-email-views-digest-greeting' => 'Bonjorn $USERNAME,',
	'founderemails-email-views-digest-signature' => '— L’equipa Wikia',
	'founderemails-email-complete-digest-greeting' => 'Bonjorn $USERNAME,',
	'founderemails-email-complete-digest-content-heading2' => '$1 {{PLURAL:$1|modificacion es estada efectuada|modificacions son estadas efectuadas}}.',
	'founderemails-email-complete-digest-content-heading3' => '$1 {{PLURAL:$1|persona a|personas an}} rejunt vòstre wiki.',
	'founderemails-email-complete-digest-signature' => '— L’equipa Wikia',
	'founderemails-email-complete-digest-button' => 'Anar a l’activitat del wiki',
	'founderemails-pref-joins' => 'Me mandar un e-mail quand qualqu\'un rejonh $1',
	'founderemails-pref-joins-v2' => '...una persona participa pel primièr còp',
	'founderemails-pref-edits-v2' => '...qualqu’un efectua una modificacion',
];

$messages['pfl'] = [
	'founderemails-email-anon-edit-greeting' => 'Hey $USERNAME,',
];

$messages['pl'] = [
	'founderemails-desc' => 'Pomaga w informowaniu założycieli o zmianach na wiki',
	'tog-founderemailsenabled' => 'Chcę otrzymywać e-mail z zestawieniem aktywności innych użytkowników (tylko dla założycieli)',
	'founderemails-email-user-registered-greeting' => 'Witaj $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Gratulacje! $WIKINAME ma nowego użytkownika - $EDITORNAME !',
	'founderemails-email-user-registered-content' => 'Wykorzystaj tę okazję do przywitania się i zachęcenia do współedytowania. Dzięki temu, Twoja wiki będzie rosła szybciej.',
	'founderemails-email-user-registered-signature' => 'Zespół Wikii',
	'founderemails-email-user-registered-button' => 'Powitaj ich',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '$WIKINAME została zmodyfikowana!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Witaj $USERNAME,

$EDITORNAME właśnie dokonał pierwszej edycji na $WIKINAME!

Odwiedź stronę $PAGETITLE aby zobaczyć zmiany.

$PAGEURL

Zespół Wikii',
	'founderemails-email-first-edit-greeting' => 'Witaj $USERNAME,',
	'founderemails-email-first-edit-headline' => 'Świetnie! $EDITORNAME dokonał(a) swojej pierwszej edycji na $WIKINAME.',
	'founderemails-email-first-edit-content' => 'Odwiedź stronę $PAGETITLE by sprawdzić, co zostało dodane.',
	'founderemails-email-first-edit-signature' => 'Zespół Wikii',
	'founderemails-email-first-edit-button' => 'Sprawdź!',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Witaj $USERNAME,<br /><br />
Wygląda na to, że zarejestrowany użytkownik $EDITORNAME edytował Twoją wiki po raz pierwszy! Możesz wykorzystać tę okazję aby przywitać się na jego/jej <a href="$EDITORTALKPAGEURL">stronie dyskusji</a><br /><br />
<div style="font-style: italic; font-size: 120%;">-- Zespół Wikii</div>',
	'founderemails-email-page-edited-reg-user-subject' => 'Nowa edycja na $WIKINAME!',
	'founderemails-email-page-edited-reg-user-body' => 'Witaj $USERNAME,

$EDITORNAME właśnie wykonał kolejnej edycji strony $PAGETITLE na $WIKINAME .

Przejdź do $PAGETITLE aby zobaczyć, co zostało zmienione.

$PAGEURL

Zespół Wikii',
	'founderemails-email-general-edit-greeting' => 'Witaj $USERNAME,',
	'founderemails-email-general-edit-headline' => '$EDITORNAME właśnie edytował stronę $PAGETITLE na $WIKINAME.',
	'founderemails-email-general-edit-content' => 'Udaj się na $PAGETITLE by sprawdzić, co zostało dodane.',
	'founderemails-email-general-edit-signature' => 'Zespół Wikii',
	'founderemails-email-general-edit-button' => 'Sprawdź!',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Witaj $USERNAME,<br /><br />
Wygląda na to, że zarejestrowany użytkownik $EDITORNAME edytował Twoją wiki! Możesz wykorzystać tę okazję aby przywitać się na jego/jej <a href="$EDITORTALKPAGEURL">stronie dyskusji</a><br /><br />
<div style="font-style: italic; font-size: 120%;">-- Zespół Wikii</div>',
	'founderemails-email-page-edited-anon-subject' => 'Niezarejestrowany użytkownik dokonał zmian na $WIKINAME',
	'founderemails-email-page-edited-anon-body' => 'Witaj $USERNAME,

Wygląda na to, że niezarejestrowany użytkownik dokonał zmiany $PAGETITLE na $WIKINAME.

Anonimowy edytor to użytkownik, który wykonuje edycje bez zalogowania się na konto Wikii. Sprawdź co się zmieniło!

$PAGEURL

Zespół Wikii',
	'founderemails-email-anon-edit-greeting' => 'Witaj $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'Wygląda na to, że niezarejestrowany użytkownik dokonał zmiany $PAGETITLE na $WIKINAME.',
	'founderemails-email-anon-edit-content' => 'Anonimowy edytor to użytkownik, który wykonuje edycje bez zalogowania się na konto Wikii. Sprawdź co się zmieniło!',
	'founderemails-email-anon-edit-signature' => 'Zespół Wikii',
	'founderemails-email-anon-edit-button' => 'Sprawdź!',
	'founderemails-email-page-edited-anon-body-HTML' => 'Witaj $USERNAME,<br /><br />
Wygląda na to, że ktoś dokonał zmiany na Twojej wiki! Może <a href="$MYHOMEURL">sprawdzisz</a> co się zmieniło?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Zespół Wikii</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'Zarejestrowany użytkownik edytował Twoją wiki po raz pierwszy!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Witaj $USERNAME,

$EDITORNAME właśnie dokonał pierwszej edycji na Twojej wiki! Możesz nawiązać kontakt odwiedzając stronę dyskusji użytkownika ($EDITORTALKPAGEURL).

--Zespół Wikii',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'Witaj $USERNAME,<br /><br />
$EDITORNAME właśnie dokonał pierwszej edycji na Twojej wiki! Możesz nawiązać kontakt odwiedzając <a href="$EDITORTALKPAGEURL">stronę dyskusji użytkownika </a>.<br /><br />
<div style="font-style: italic; font-size: 120%;">--Zespół Wikii</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Zarejestrowany użytkownik zmienił Twoją wiki!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Witaj $USERNAME,

$EDITORNAME właśnie dokonał(a) edycji na Twojej wiki! Możesz nawiązać kontakt odwiedzając stronę dyskusji użytkownika ($EDITORTALKPAGEURL).

-- Zespół Wikii',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => 'Witaj $USERNAME,<br /><br />
$EDITORNAME właśnie dokonał edycji na Twojej wiki! Możesz nawiązać kontakt odwiedzając <a href="$EDITORTALKPAGEURL">stronę dyskusji użytkownika</a>.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Zespół Wikii</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'Ktoś zmienił Twoją wiki!',
	'founderemails-answers-email-page-edited-anon-body' => 'Witaj $USERNAME,

Ktoś właśnie dokonał edycji na Twojej wiki! Odwiedź $MYHOMEURL aby zobaczyć zmiany.

-- Zespół Wikii',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Witaj $USERNAME,<br /><br />
Wygląda na to, że ktoś dokonał zmiany na Twojej wiki! Może <a href="$MYHOMEURL">sprawdzisz</a> co się zmieniło?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Zespół Wikii</div>',
	'founderemails-lot-happening-subject' => '$WIKINAME się rozgrzewa!',
	'founderemails-lot-happening-body' => 'Witaj $USERNAME,

Na $WIKINAME, $WIKIURL dziś sporo się działo!

Jeśli jeszcze nie tam zaglądałeś, możesz odwiedzić Special:WikiActivity aby zobaczyć wszystkie dokonane zmiany.

Jako, że tak dużo się dzieje na Twojej wiki, możesz rozważyć zmianę ustawień otrzymywanych e-maili aby otrzymywać zestawienia istotnych zmian każdego dnia. 

-- Zespół Wikii',
	'founderemails-lot-happening-body-HTML' => 'Witaj $USERNAME,<br /><br />
Na $WIKINAME dziś sporo się działo! Odwiedź $MYHOMEURL aby zobaczyć zmiany.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Zespół Wikii</div>',
	'founderemails-email-lot-happening-greeting' => 'Witaj $USERNAME,',
	'founderemails-email-lot-happening-headline' => 'Gratulacje! wiele się dzisiaj działo na $WIKINAME!',
	'founderemails-email-lot-happening-content' => 'Jeśli jeszcze nie tam zaglądałeś, możesz odwiedzić Special:WikiActivity aby zobaczyć wszystkie dokonane zmiany. Jako, że tak dużo się dzieje na Twojej wiki, możesz rozważyć zmianę ustawień otrzymywanych e-maili aby otrzymywać zestawienia istotnych zmian każdego dnia.',
	'founderemails-email-lot-happening-signature' => 'Zespół Wikii',
	'founderemails-email-lot-happening-button' => 'Zobacz Aktywność',
	'founderemails-email-footer-line1' => 'Aby sprawdzić najświeższe wiadomości na Wikii, odwiedź <a style="color:#2a87d5;text-decoration:none;" href="http://spolecznosc.wikia.com">spolecznosc.wikia.com</a>',
	'founderemails-email-footer-line2' => 'Chcesz kontrolować, jakie wiadomości e-mail otrzymujesz? Przejdź do <a href="{{fullurl:Special:Preferences}}" style="color:#2a87d5;text-decoration:none;">preferencji</a>',
	'founderemails-email-0-day-heading' => 'Miło Cię widzieć $USERNAME,',
	'founderemails-email-0-day-congratulations' => 'Gratulacje z okazji utworzenia $HDWIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'Oto kilka wskazówek pomocnych w na początku pracy:',
	'founderemails-email-0-day-addpages-heading' => 'Dodawaj strony.',
	'founderemails-email-0-day-addpages-content' => 'Celem wiki jest udostępnianie informacji na Twój unikalny temat. Utwórz strony klikając na<a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">"Dodaj stronę"</a> i podając bardziej szczegółowe informacje o danym temacie.',
	'founderemails-email-0-day-addpages-button' => 'Dodaj stronę',
	'founderemails-email-0-day-addphotos-heading' => 'Dodaj obrazy.',
	'founderemails-email-0-day-addphotos-content' => 'Strony zawsze są lepsze, kiedy mają efekty wizualne!  Dodaj obrazy do stron i strony głównej. Kliknij <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"Dodaj grafikę"</a> aby dodać zdjęcie, galerię fotografii lub pokaz slajdów.',
	'founderemails-email-0-day-addphotos-button' => 'Dodaj obraz',
	'founderemails-email-0-day-customizetheme-heading' => 'Dostosuj motyw.',
	'founderemails-email-0-day-customizetheme-content' => 'Dostosuj motyw i logo Twojej wiki, aby ją wyróżnić!  Użyj <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">Kreatora motywu</a>, by dodać niestandardowe kolory do wiki i zapewnić jej unikatowość w temacie.',
	'founderemails-email-0-day-customizetheme-button' => 'Dostosuj',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">Nie zostawimy cię na lodzie.</span> Jesteśmy tu by ułatwić ci odniesienie przez $WIKINAME sukcesu na każdym kroku.  Odwiedź <a style="color:#2a87d5;text-decoration:none;" href="http://spolecznosc.wikia.com">spolecznosc.wikia.com</a> by przejrzeć forum, porady i pomoc lub <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">zadać nam  pytania e-mailem</a>!',
	'founderemails-email-0-day-wikiahelps-signature' => 'Szczęśliwego budowania wiki!<br />Zespół Wikii',
	'founderemails-email-3-day-heading' => 'Witaj $USERNAME,',
	'founderemails-email-3-day-congratulations' => 'Chcieliśmy sprawdzić i zobaczyć, jak się rzeczy mają na $HDWIKINAME.',
	'founderemails-email-3-day-tips-heading' => 'To już 3 dni, od początku Twojej przygody z nami, więc uznaliśmy, że możemy wpaść i zaproponować kolejne porady na temat konstruowania wiki:',
	'founderemails-email-3-day-editmainpage-heading' => 'Dopieść swoją stronę główną',
	'founderemails-email-3-day-editmainpage-content' => 'Strona główna jest jedną z pierwszych rzeczy, które ludzie widzą podczas odwiedzania <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a>. Spraw dobre pierwsze wrażenie pisąc szczegółowe podsumowanie tematu Twojej wiki i dodając pokaz slajdów, czy statyczną lub dynamiczną galerię obrazów.',
	'founderemails-email-3-day-editmainpage-button' => 'Dopieść ją',
	'founderemails-email-3-day-addphotos-heading' => 'Dodaj jeszcze więcej zdjęć.',
	'founderemails-email-3-day-addphotos-content' => 'Jednym z najlepszych sposobów aby strona była oryginalna jest <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">dodanie kolejnych obrazów</a>.',
	'founderemails-email-3-day-addphotos-button' => 'Dodaj obrazy',
	'founderemails-email-3-day-explore-heading' => 'Znajdź inspiracje.',
	'founderemails-email-3-day-explore-content' => 'Nie bój się przewertować inne wiki aby zobaczyć, jak oni dopracowali strony główne, strony artykułów i całą resztę. Oto niektóre 
z naszych ulubionych: <a style="color:#2a87d5;text-decoration:none;" href="http://muppets.wikia.com">Muppet Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://poptarts.wikia.com">Pop Tarts Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://monsterhigh.wikia.com">Monster High Wiki</a>.',
	'founderemails-email-3-day-explore-button' => 'Eksploruj',
	'founderemails-email-3-day-wikiahelps-text' => 'Potrzebujesz pomocy w poznaniu, jak coś działa?  Jesteśmy zawsze dla Ciebie!  Poproś nas o pomoc i poradę na <a style="color:#2a87d5;text-decoration:none;" href="http://spolecznosc.wikia.com">spolecznosc.wikia.com</a>.',
	'founderemails-email-3-day-wikiahelps-signature' => 'Pracuj dalej tak wspaniale!<br />Zespół Wikii',
	'founderemails-email-10-day-heading' => 'Jak Ci idzie, $USERNAME?',
	'founderemails-email-10-day-congratulations' => 'Ale ten czas leci!  To już 10 dni od momentu rozpoczęcia $HDWIKINAME.',
	'founderemails-email-10-day-tips-heading' => 'Zachęć innych by uczestniczyli w projekcie i pokaż wszystkim wspaniałą pracę, jaka już została wykonana!  Oto kilka sposobów rozprzestrzeniania:',
	'founderemails-email-10-day-share-heading' => 'Nie mówiono Ci, że trzeba się dzielić?',
	'founderemails-email-10-day-share-content' => 'Użyj przycisku "Podziel się" na stronach swojej wiki, aby pochwalić się nimi na Facebooku.',
	'founderemails-email-10-day-email-heading' => 'Zaprzęgnij moc e-maili.',
	'founderemails-email-10-day-email-content' => 'Daj znać znajomym, którzy mogą być zainteresowani tematem Twojej wiki, poprzez wysłanie do nich e-maila. Możesz także wysyłać konkretne obrazy z Twojej wiki przy użyciu narzędzia do wysyłania e-maili.',
	'founderemails-email-10-day-join-heading' => 'Nawiąż współpracę z podobnymi stronami',
	'founderemails-email-10-day-join-content' => 'Zapytaj o współpracę na innych stronach czy forach związanych z tematem Twojej wiki. Spróbuj nawiązać kontakt a administratorami tych stron i zapytać czy są zainteresowani wymianą linków &mdash; oni umieszczą linka do Twojej wiki na swojej stronie w zamian na umieszczenie linka do nich na Twojej wiki.',
	'founderemails-email-10-day-wikiahelps-text' => 'Możesz także zapytać innych Wikian o pomoc poprzez forum <a style="color:#2a87d5;text-decoration:none;" href="http://spolecznosc.wikia.com">spolecznosc.wikia.com</a>',
	'founderemails-email-10-day-wikiahelps-signature' => 'Pracuj tak dobrze dalej!<br />Zespół Wikii',
	'founderemails-email-views-digest-subject' => 'Dzisiejsze wejścia na $WIKINAME',
	'founderemails-email-views-digest-body' => 'Witaj $USERNAME,

Dziś $WIKINAME {{PLURAL:$1|odwiedziła $1 osoba|odwiedziły $1 osoby|odwiedziło $1 osób}}.

Rozbuduj swoją wiki poprzez dodawanie artykułów i plików aby zachęcić innych do odwiedzin i edytowania.

$WIKIURL

Zespół Wikii',
	'founderemails-email-views-digest-greeting' => 'Witaj $USERNAME,',
	'founderemails-email-views-digest-headline' => 'Dziś $WIKINAME {{PLURAL:$1|oglądała $1 osoba|oglądały $1 osoby|oglądało $1 osób}}.',
	'founderemails-email-views-digest-content' => 'Dodawaj systematycznie nowe treści i promuj wiki by zachęcić więcej osób do jej czytania, edytowania i dalszego popularyzowania.',
	'founderemails-email-views-digest-signature' => 'Zespół Wikii',
	'founderemails-email-views-digest-button' => 'Dodaj więcej stron',
	'founderemails-email-complete-digest-subject' => 'Najnowsza aktywność na $WIKINAME',
	'founderemails-email-complete-digest-body' => 'Witaj $USERNAME,

Pora na dzienne zestawienie aktywności na $WIKINAME.

$1 {{PLURAL:$1|osoba odwiedziła|osoby odwiedziły|osób odwiedziło}} Twoją wiki.

Kontynuuj dodawanie ciekawych artykułów dla innych do odkrycia!

Dokonano $2 {{PLURAL:$2|edycji|edycji|edycji}}.

Zadowoleni edytorzy to klucz do sukcesu. Spróbuj nawiązać kontakt i współpracę z edytorami.

$3 {{PLURAL:$3|osoba dołączyła|osoby dołączyły|osób dołączyło}} do Twojej wiki.

Powitaj nowych czytelników zostawiając im wiadomość na ich stronach dyskusji.

Możesz zawsze odwiedzić rejestr aktywności na wiki aby zobaczyć wspaniałe zmiany zachodzące na $WIKINAME. Jako, że jesteś założycielem wiki, Twoja społeczność będzie oczekiwać, że trzymasz rękę na pulsie i dbasz o wiki.

Zespół Wikii',
	'founderemails-email-complete-digest-greeting' => 'Witaj $USERNAME,',
	'founderemails-email-complete-digest-headline' => 'Nadszedł czas na Twoją dzienną dawkę aktywności z $WIKINAME.',
	'founderemails-email-complete-digest-content-heading1' => '$1 {{PLURAL:$1|osoba oglądała|osoby oglądały|osób oglądało}} Twoją wiki.',
	'founderemails-email-complete-digest-content1' => 'Pracuj tak dobrze dalej dodając interesującą zawartość by ludzie mieli co czytać!',
	'founderemails-email-complete-digest-content-heading2' => 'Wykonano $1 {{PLURAL:$1|edycję|edycje|edycji}}.',
	'founderemails-email-complete-digest-content2' => 'Zadowoleni edytorzy czynią wiki przyjazną. Pamiętaj aby podziękować edytorom i skontaktować się z nimi od czasu do czasu.',
	'founderemails-email-complete-digest-content-heading3' => '$1 {{PLURAL:$1|osoba dołączyła|osoby dołączyły|osób dołączyło}} do Twojej wiki.',
	'founderemails-email-complete-digest-content3' => 'Powitaj nowych czytelników poprzez pozostawienie im wiadomości na ich stronach dyskusji.
<br /><br />
Możesz zawsze odwiedzić rejestr aktywności na wiki aby zobaczyć zmiany na $WIKINAME. Jako, że jesteś założycielem wiki, Twoja społeczność będzie oczekiwać, że trzymasz rękę na pulsie i dbasz o wiki.',
	'founderemails-email-complete-digest-signature' => 'Zespół Wikii',
	'founderemails-email-complete-digest-button' => 'Przejdź do aktywności na wiki',
	'founderemails-pref-joins' => 'Wyślij mi wiadomość, gdy ktoś dołączy do $1',
	'founderemails-pref-edits' => 'Wyślij mi wiadomość, gdy ktoś edytuje $1',
	'founderemails-pref-views-digest' => 'Wysyłaj mi codziennie wiadomości o tym, ile razy przeglądano $1',
	'founderemails-pref-complete-digest' => 'Wysyłaj mi dzienne sprawozdanie z aktywności na $1',
	'founderemails-pref-joins-v2' => '...ktoś dołączył',
	'founderemails-pref-edits-v2' => '...ktoś edytował',
	'founderemails-pref-views-digest-v2' => '...dzienne zestawienie odwiedzin stron jest gotowe',
	'founderemails-pref-complete-digest-v2' => '...dzienne zestawienie odwiedzin, edycji i nowych użytkowników jest gotowe',
	'founderemails-email-footer-line3' => '<a href="http://www.twitter.com/wikia" style="text-decoration:none">
<img alt="twitter" src="http://images4.wikia.nocookie.net/wikianewsletter/images/f/f7/Twitter.png" style="border:none">
</a>
 
<a href="http://www.facebook.com/wikiapl" style="text-decoration:none">
<img alt="facebook" src="http://images2.wikia.nocookie.net/wikianewsletter/images/5/55/Facebook.png" style="border:none">
</a>
 
<a href="http://www.youtube.com/wikia" style="text-decoration:none">
<img alt="youtube" src="http://images3.wikia.nocookie.net/wikianewsletter/images/a/af/Youtube.png" style="border:none">
</a>
 
<a href="http://spolecznosc.wikia.com/wiki/" style="text-decoration:none">
<img alt="wikia" src="http://images1.wikia.nocookie.net/wikianewsletter/images/b/be/Wikia_blog.png" style="border:none">
</a>',
];

$messages['pms'] = [
	'founderemails-desc' => 'A giuta anformand ij fondator an sij cambi dzora soa wiki',
	'tog-founderemailsenabled' => 'Mandeme për pòsta eletrònica le modìfiche dzora lòn che d\'àutre përson-e a fan (mach ai fondator)',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Cerea $USERNAME,<br /><br />
A smija che l\'utent registrà $EDITORNAME a l\'abia modificà soa wiki për la prima vira! Përchè a fa nen un sàut su soa pàgina dle ciaciarade ($EDITORTALKPAGEURL) për salutelo?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- L\'Echip ëd Wikia</div>',
	'founderemails-email-page-edited-reg-user-subject' => 'N\'utent registrà a l\'ha modificà soa wiki!',
	'founderemails-email-page-edited-reg-user-body' => 'Cerea $USERNAME,

$EDITORNAME a l\'ha pen-a fàit n\'àutra modìfica a $PAGETITLE su $WIKINAME.

Ch\'a vada a $PAGETITLE për vëdde lòn ch\'a l\'é stàit cangià.

L\'Echip ëd Wikia',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Cerea $USERNAME,<br /><br />
A smija che l\'utent registrà $EDITORNAME a l\'abia modificà soa wiki! Përchè a fa nen un sàut su soa <a href="$EDITORTALKPAGEURL">pàgina dle ciaciarade</a> për salutelo?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- L\'Echip Wikia</div>',
	'founderemails-email-page-edited-anon-subject' => 'Quaidun a l\'ha modificà soa wiki!',
	'founderemails-email-page-edited-anon-body' => 'Cerea $USERNAME,

A smija che quaidun a l\'abia modificà soa wiki! Përchè a controle nen $MYHOMEURL për vëdde lòn ch\'a l\'é cangià?

-- L\'Echip Wikia',
	'founderemails-email-page-edited-anon-body-HTML' => 'Cerea $USERNAME,<br /><br />
A smija che quaidun a l\'abia modificà soa wiki! Përchè <a href="$MYHOMEURL">it controle nen</a> për vëdde lòn ch\'a l\'é cangià?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- L\'Echip Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'N\'utent registrà a l\'ha modificà sò sit për la prima vira!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Cerea $USERNAME,

A smija che l\'utent registrà $EDITORNAME a l\'abia modificà soa wiki për la prima vira! Përchè a fa nen un sàut su soa pàgina dle ciaciarade ($EDITORTALKPAGEURL) për salutelo?

-- L\'Echip Wikia',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'Cerea $USERNAME,<br /><br />
A smija che l\'utent registrà $EDITORNAME a l\'abia modificà toa wiki për la prima vira! Përchè it fas pa un sàut su soa <a href="$EDITORTALKPAGEURL">pàgina dle ciaciarade</a> për salutelo?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- L\'Echip Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'N\'utent registrà a l\'ha modificà sò sit!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Cerea $USERNAME,

A smija che l\'utent registrà $EDITORNAME a l\'abia modificà toa wiki! Përchè it fas pa un sàut su soa pàgina dle ciaciarade ($EDITORTALKPAGEURL) për salutelo?

-- L\'Echip Wikia',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => 'Cerea $USERNAME,<br /><br />
A smija che l\'utent registrà $EDITORNAME a l\'abia modificà soa wiki! Përchè a fa nen un sàut su soa <a href="$EDITORTALKPAGEURL">pàgina dle ciaciarade</a> për salutelo?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- L\'Echip Wikia</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'Quaidun a l\'ha modificà tò sit!',
	'founderemails-answers-email-page-edited-anon-body' => 'Cerea $USERNAME,

A smija che quaidun a l\'abia modificà soa wiki! Përchè a controla nen $MYHOMEURL për vëdde lòn ch\'a l\'é cangià?

-- L\'Echip Wikia',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Cerea $USERNAME,<br /><br />
A smija che quaidun a l\'abia modificà soa wiki! Përchè <a href="$MYHOMEURL">a controla nen</a> për vëdde lòn ch\'a l\'é cangià?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- L\'Echip Wikia</div>',
	'founderemails-lot-happening-subject' => 'Un mucc ëd ròba a l\'é capitaje su tò sit ancheuj!',
	'founderemails-lot-happening-body' => 'cerea $USERNAME,

A-i é un mucc ëd ròba capità su soa wiki ancheuj! Ch\'a vada ansima a $MYHOMEURL për vëdde lòn ch\'a càpita.

-- L\'Echip Wikia',
	'founderemails-lot-happening-body-HTML' => 'Cerea $USERNAME,<br /><br />
A-i é un mucc ëd ròba capità su soa wiki ancheuj! Ch\'a vada ansima a $MYHOMEURL për vëdde lòn ch\'a ancàpita.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- L\'Echip Wikia</div>',
];

$messages['ps'] = [
	'founderemails-email-user-registered-greeting' => 'سلامونه $USERNAME،',
	'founderemails-email-user-registered-signature' => 'د ويکيا ډله',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '$WIKINAME يو نوی سمون لري!',
	'founderemails-email-first-edit-greeting' => 'سلامونه $USERNAME،',
	'founderemails-email-first-edit-signature' => 'د ويکيا ډله',
	'founderemails-email-first-edit-button' => 'وې آزمويۍ!',
	'founderemails-email-page-edited-reg-user-subject' => 'په $WIKINAME باندې نوی سمون!',
	'founderemails-email-general-edit-greeting' => 'سلامونه $USERNAME،',
	'founderemails-email-general-edit-signature' => 'د ويکيا ډله',
	'founderemails-email-general-edit-button' => 'وې آزمويۍ!',
	'founderemails-email-anon-edit-greeting' => 'سلامونه $USERNAME،',
	'founderemails-email-anon-edit-signature' => 'د ويکيا ډله',
	'founderemails-email-anon-edit-button' => 'وې آزمويۍ!',
	'founderemails-email-lot-happening-greeting' => 'سلامونه $USERNAME،',
	'founderemails-email-lot-happening-signature' => 'د ويکيا ډله',
	'founderemails-email-lot-happening-button' => 'فعاليتونه کتل',
	'founderemails-email-0-day-addpages-heading' => 'مخونه ورگډول.',
	'founderemails-email-0-day-addpages-button' => 'يو مخ ورگډول',
	'founderemails-email-0-day-addphotos-heading' => 'انځورونه ورگډول.',
	'founderemails-email-0-day-addphotos-button' => 'يو انځور ورگډول',
	'founderemails-email-3-day-addphotos-heading' => 'نور انځورونه ورگډول',
	'founderemails-email-3-day-addphotos-button' => 'انځورونه ورگډول',
	'founderemails-email-views-digest-greeting' => 'سلامونه $USERNAME،',
	'founderemails-email-views-digest-signature' => 'د ويکيا ډله',
	'founderemails-email-views-digest-button' => 'نور مخونه ورگډول',
	'founderemails-email-complete-digest-subject' => 'په $WIKINAME باندې تازه فعاليتونه',
	'founderemails-email-complete-digest-greeting' => 'سلامونه $USERNAME،',
	'founderemails-email-complete-digest-signature' => 'د ويکيا ډله',
	'founderemails-pref-joins-v2' => '...يو څوک زموږ سره راگډېږي',
	'founderemails-pref-edits-v2' => '...يو څوک سمونونه ترسره کوي',
];

$messages['pt'] = [
	'founderemails-desc' => 'Ajuda a informar os fundadores acerca das mudanças na sua wiki',
	'tog-founderemailsenabled' => 'Enviar-me por correio eletrónico atualizações sobre aquilo que os outros fazem (só para fundadores)',
	'founderemails-email-user-registered-greeting' => 'Olá $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Parabéns! O utilizador $EDITORNAME registou-se na wiki $WIKINAME.',
	'founderemails-email-user-registered-content' => 'Aproveite a oportunidade para lhe dar as boas-vindas à sua wiki e encorajá-lo a ajudar a editar. Quantos mais, melhor e mais depressa a sua wiki crescerá.',
	'founderemails-email-user-registered-signature' => 'A Equipa da Wikia',
	'founderemails-email-user-registered-button' => 'Dar-lhes Boas-Vindas',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => 'A $WIKINAME tem uma nova edição!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Olá $USERNAME,

Ora bem! O utilizador $EDITORNAME acaba de fazer a primeira edição na $WIKINAME.

Vá à $PAGETITLE ver o que foi acrescentado.

$PAGEURL

A Equipa da Wikia',
	'founderemails-email-first-edit-greeting' => 'Olá $USERNAME,',
	'founderemails-email-first-edit-headline' => 'Ora bem! O utilizador $EDITORNAME acaba de fazer a primeira edição na $WIKINAME.',
	'founderemails-email-first-edit-content' => 'Vá à $PAGETITLE ver o que foi acrescentado.',
	'founderemails-email-first-edit-signature' => 'A Equipa da Wikia',
	'founderemails-email-first-edit-button' => 'Ver!',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Olá $USERNAME,<br /><br />
Parece que o utilizador registado $EDITORNAME editou a sua wiki pela primeira vez! Que tal ir à <a href="$EDITORTALKPAGEURL">página de discussão</a> e dizer-lhe olá?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- A Equipa da Wikia</div>',
	'founderemails-email-page-edited-reg-user-subject' => 'Nova edição na $WIKINAME!',
	'founderemails-email-page-edited-reg-user-body' => 'Olá $USERNAME,

O utilizador $EDITORNAME acaba de fazer outra edição na wiki $WIKINAME, a $PAGETITLE.

Vá a $PAGETITLE ver o que foi acrescentado.

$PAGEURL

A Equipa da Wikia',
	'founderemails-email-general-edit-greeting' => 'Olá $USERNAME,',
	'founderemails-email-general-edit-headline' => 'O utilizador $EDITORNAME acaba de fazer outra edição na wiki $WIKINAME, a $PAGETITLE.',
	'founderemails-email-general-edit-content' => 'Vá a $PAGETITLE ver o que foi acrescentado.',
	'founderemails-email-general-edit-signature' => 'A Equipa da Wikia',
	'founderemails-email-general-edit-button' => 'Ver!',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Olá $USERNAME,<br /><br />
Parece que o utilizador registado $EDITORNAME editou a sua wiki! Que tal ir à <a href="$EDITORTALKPAGEURL">página de discussão</a> e dizer-lhe olá?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- A Equipa da Wikia</div>',
	'founderemails-email-page-edited-anon-subject' => 'Um amigo misterioso editou $WIKINAME',
	'founderemails-email-page-edited-anon-body' => 'Olá $USERNAME,

Um utilizador anónimo da Wikia acaba de editar $PAGETITLE na $WIKINAME.

Os utilizadores anónimos são pessoas que editam sem se autenticar numa conta da Wikia. Vá ver o que este amigo misterioso alterou!

$PAGEURL

A Equipa da Wikia',
	'founderemails-email-anon-edit-greeting' => 'Olá $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'Um utilizador anónimo da Wikia acaba de editar $PAGETITLE na $WIKINAME.',
	'founderemails-email-anon-edit-content' => 'Os utilizadores anónimos são pessoas que editam sem se autenticar numa conta da Wikia. Vá ver o que este amigo misterioso alterou!',
	'founderemails-email-anon-edit-signature' => 'A Equipa da Wikia',
	'founderemails-email-anon-edit-button' => 'Ver!',
	'founderemails-email-page-edited-anon-body-HTML' => 'Olá $USERNAME,<br /><br />
Parece que alguém editou a sua wiki! Que tal <a href="$MYHOMEURL">visitá-la</a> e ver o que foi alterado?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- A Equipa da Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'Utilizador registado alterou o seu site pela primeira vez!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Olá $USERNAME,

Parece que o utilizador registado $EDITORNAME editou a sua wiki pela primeira vez! Que tal ir à página de discussão ($EDITORTALKPAGEURL) e dizer-lhe olá?

-- A Equipa da Wikia',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'Olá $USERNAME,<br /><br />
Parece que o utilizador registado $EDITORNAME editou a sua wiki pela primeira vez! Que tal ir à <a href="$EDITORTALKPAGEURL">página de discussão</a> e dizer-lhe olá?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- A Equipa da Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Utilizador registado alterou o seu site!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Olá $USERNAME,

Parece que o utilizador registado $EDITORNAME editou a sua wiki! Que tal ir à página de discussão ($EDITORTALKPAGEURL) e dizer-lhe olá?

-- A Equipa da Wikia',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => 'Olá $USERNAME,<br /><br />
Parece que o utilizador registado $EDITORNAME editou a sua wiki! Que tal ir à <a href="$EDITORTALKPAGEURL">página de discussão</a> e dizer-lhe olá?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- A Equipa da Wikia</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'Alguém alterou o seu site!',
	'founderemails-answers-email-page-edited-anon-body' => 'Olá $USERNAME,

Parece que alguém editou a sua wiki! Que tal visitá-la $MYHOMEURL e ver o que foi alterado?

-- A Equipa da Wikia',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Olá $USERNAME,<br /><br />
Parece que alguém editou a sua wiki! Que tal <a href="$MYHOMEURL">visitá-la</a> e ver o que foi alterado?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- A Equipa da Wikia</div>',
	'founderemails-lot-happening-subject' => '$WIKINAME está a ficar popular!',
	'founderemails-lot-happening-body' => 'Olá, $USERNAME, 

Parabéns, há  muitas coisas a acontecerem em $WIKINAME, $WIKIURL.

Se ainda não o fez, pode ir à Atividade do Wiki e ver todo o grande trabalho que foi executado.

Uma vez que há muito a acontecer, poderá também querer alterar as suas preferências de email para modo relatório. Com este modo ativo, receberá um email que lista toda a atividade no seu wiki diariamente.

A Equipa Wikia',
	'founderemails-lot-happening-body-HTML' => 'Olá, $ FOUNDERNAME,<br /><br />
Há muitas coisas a acontecer hoje na sua wiki! Passe por $MYHOMEURL para ver o que se tem passado.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- A Equipa Wikia</div>',
	'founderemails-email-lot-happening-greeting' => 'Olá $USERNAME,',
	'founderemails-email-lot-happening-headline' => 'Parabéns há muita coisa acontecendo na US $ WIKINAME hoje!',
	'founderemails-email-lot-happening-content' => 'Se você não já não estiver, você pode ir na Wiki Atividade e ver toda a grande obra que está acontecendo. Como há tanta coisa acontecendo, você pode também querer alterar as suas preferências de e-mail para o modo digest. Com o modo digest você receberá um e-mail que lista toda a atividade na sua wiki todos os dias.',
	'founderemails-email-lot-happening-signature' => 'A Equipa da Wikia',
	'founderemails-email-lot-happening-button' => 'Ver Atividades',
	'founderemails-email-footer-line1' => 'Para conhecer as últimas novidades na Wikia, visite <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>',
	'founderemails-email-footer-line2' => 'Quer controlar os correios eletrónicos que recebe? Faça-o nas suas <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">Preferências</a>',
	'founderemails-email-0-day-heading' => 'É um prazer conhecê-lo(a) $USERNAME,',
	'founderemails-email-0-day-congratulations' => 'Parabéns por ter criado a wiki $WIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'Tem aqui algumas dicas úteis para quem está a começar:',
	'founderemails-email-0-day-addpages-heading' => 'Adicionar páginas.',
	'founderemails-email-0-day-addpages-content' => 'Uma wiki serve para partilhar informação sobre um determinado tema. Para criar páginas, clique <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">"Adicionar uma Página"</a> e adicione informação específica sobre o assunto.',
	'founderemails-email-0-day-addpages-button' => 'Adicionar uma Página',
	'founderemails-email-0-day-addphotos-heading' => 'Adicionar fotos.',
	'founderemails-email-0-day-addphotos-content' => 'As páginas ficam sempre melhores com elementos visuais! Adicione imagens às páginas individuais e à página principal. Pode clicar <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"Adicionar uma Foto"</a> para acrescentar uma fotografia, uma galeria de fotografias, ou uma apresentação de slides.',
	'founderemails-email-0-day-addphotos-button' => 'Adicionar uma foto',
	'founderemails-email-0-day-customizetheme-heading' => 'Personaliza o teu tema.',
	'founderemails-email-0-day-customizetheme-content' => 'Pode personalizar o tema e o símbolo da sua wiki, para destacá-la! Use o <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">Compositor de Variantes do Tema</a> para personalizar as cores da wiki e torná-la única e específica para o seu tema.',
	'founderemails-email-0-day-customizetheme-button' => 'Personalizar',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">Não está só.</span> Estamos aqui para ajudar a cada passo a tornar a $WIKINAME num sucesso. Visite <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>, onde pode encontrar fóruns, conselhos e ajuda, e enviar-nos perguntas por <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">correio eletrónico</a>!',
	'founderemails-email-0-day-wikiahelps-signature' => 'Felicidades na construção da sua wiki!<br />A Equipa da Wikia',
	'founderemails-email-3-day-heading' => 'Olá $USERNAME,',
	'founderemails-email-3-day-congratulations' => 'Queriamos saber como está e como vão as coisas na wiki $WIKINAME.',
	'founderemails-email-3-day-tips-heading' => 'Já passaram 3 dias desde que começou e pensámos dar-lhe mais algumas dicas sobre a construção da sua wiki:',
	'founderemails-email-3-day-editmainpage-heading' => 'Dê brilho à página principal.',
	'founderemails-email-3-day-editmainpage-content' => 'A página principal é uma das primeiras coisas que os utilizadores vêem ao visitar a <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a>. Cause uma boa primeira impressão, escrevendo um resumo detalhado do tópico da sua wiki e acrescentando-lhe uma apresentação de slides, uma galeria ou uma apresentação de fotos.',
	'founderemails-email-3-day-editmainpage-button' => 'Dar Mais Brilho',
	'founderemails-email-3-day-addphotos-heading' => 'Acrescentar ainda mais fotos.',
	'founderemails-email-3-day-addphotos-content' => 'Uma das melhores formas de dar brilho às suas páginas é <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"acrescentar algumas fotos"</a>.',
	'founderemails-email-3-day-addphotos-button' => 'Adicionar Fotos',
	'founderemails-email-3-day-explore-heading' => 'Encontrar inspiração.',
	'founderemails-email-3-day-explore-content' => 'Visite outras wikis para ver como construíram a página principal, as páginas de artigos e outras coisas. Algumas das nossas favoritas são: a <a style="color:#2a87d5;text-decoration:none;" href="http://muppets.wikia.com">Muppet Wiki</a>, a <a style="color:#2a87d5;text-decoration:none;" href="http://poptarts.wikia.com">Pop Tarts Wiki</a> e a <a style="color:#2a87d5;text-decoration:none;" href="http://monsterhigh.wikia.com">Monster High Wiki</a>.',
	'founderemails-email-3-day-explore-button' => 'Explorar',
	'founderemails-email-3-day-wikiahelps-text' => 'Precisa de ajuda para descobrir como algo funciona? Estamos sempre disponíveis! Venha pedir-nos ajuda e conselhos na <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-3-day-wikiahelps-signature' => 'Continue o bom trabalho!<br />A Equipa da Wikia',
	'founderemails-email-10-day-heading' => 'Como vão as coisas $USERNAME?',
	'founderemails-email-10-day-congratulations' => 'Como o tempo voa! Já passaram 10 dias desde que iniciou a $WIKINAME.',
	'founderemails-email-10-day-tips-heading' => 'Envolva outras pessoas no seu projeto e exponha o bom trabalho que tem estado a fazer! Algumas formas de espalhar a palavra são estas:',
	'founderemails-email-10-day-share-heading' => 'A sua mãe não lhe ensinou que devia Partilhar?',
	'founderemails-email-10-day-share-content' => 'Use o botão Partilhar na página principal do seu wiki, nas páginas de artigos e nas fotos para exibi-las aos seus amigos e seguidores no Facebook.',
	'founderemails-email-10-day-email-heading' => 'Aproveite o poder do correio eletrónico.',
	'founderemails-email-10-day-email-content' => 'Envie mensagens de correio eletrónico àqueles que conhece e sabe que podem ter interesse no tópico da sua wiki ou estar interessados em ajudá-lo, como um amigo da escola ou um colega de trabalho. Também pode enviar fotos específicas da sua wiki, usando o botão de envio por correio eletrónico.',
	'founderemails-email-10-day-join-heading' => 'Junte-se a sites semelhantes.',
	'founderemails-email-10-day-join-content' => 'Peça ajuda às pessoas de outros fóruns ou sites sobre temas semelhantes ao da sua wiki, colocando tópicos ou comentários nos fóruns. Se possível, contacte os administradores e inquira se têm interesse em trocar links; eles colocam um link para a sua wiki no site deles e você coloca um link para o site deles na sua wiki.',
	'founderemails-email-10-day-wikiahelps-text' => 'Também pode pedir ajuda a outros utilizadores da Wikia nos fóruns da <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-10-day-wikiahelps-signature' => 'Continue o bom trabalho!<br />A Equipa da Wikia',
	'founderemails-email-views-digest-subject' => 'Visitas diárias de hoje em $WIKINAME',
	'founderemails-email-views-digest-body' => 'Olá $USERNAME, 

Hoje a sua $ WIKINAME foi vista por $1 {{PLURAL:$1|pessoa|pessoas}}. 

Continue a acrescentar novos conteúdos e promova a sua wiki para incentivar mais pessoas a ler, editar e divulgar a informação. 

$WIKIURL 

A equipa da Wikia',
	'founderemails-email-views-digest-greeting' => 'Olá, $USERNAME,',
	'founderemails-email-views-digest-headline' => 'Hoje, $WIKINAME foi vista por $1 {{PLURAL:$1|pessoa|pessoas}}.',
	'founderemails-email-views-digest-content' => 'Continue adicionando novos conteúdos e promova a sua wiki para incentivar mais pessoas a ler, editar e divulgar a informação.',
	'founderemails-email-views-digest-signature' => 'A Equipa da Wikia',
	'founderemails-email-views-digest-button' => 'Adicionar mais artigos',
	'founderemails-email-complete-digest-subject' => 'A última atividade em $WIKINAME',
	'founderemails-email-complete-digest-greeting' => 'Olá, $USERNAME,',
	'founderemails-email-complete-digest-headline' => 'É hora de sua dose diária de atividade na $WIKINAME.',
	'founderemails-email-complete-digest-content-heading1' => '$1 {{PLURAL:$1|pessoa|pessoas}} viram a sua wiki.',
	'founderemails-email-complete-digest-content1' => 'Continuem o grande trabalho de adicionar conteúdo interessante para as pessoas lerem!',
	'founderemails-email-complete-digest-content-heading2' => '$1 {{PLURAL: was|edits $1|edições foram}} feitas.',
	'founderemails-email-complete-digest-content2' => 'Editores felizes fazem wikis felizes. Certifique-se de agradecer seus editores e conversar com eles de vez em quando.',
	'founderemails-email-complete-digest-content-heading3' => '$1 {{PLURAL:$1|pessoa|pessoas}} juntaram-se à tua wiki.',
	'founderemails-email-complete-digest-signature' => 'A Equipa da Wikia',
	'founderemails-pref-joins' => 'Enviar-me um e-mail quando alguém se juntar a $1',
	'founderemails-pref-edits' => 'Enviar-me um e-mail quando alguém editar a $1',
	'founderemails-pref-joins-v2' => '...alguém se junta',
	'founderemails-pref-edits-v2' => '...alguém edita',
];

$messages['pt-br'] = [
	'founderemails-desc' => 'Ajuda a informar os fundadores sobre mudanças em sua wiki',
	'tog-founderemailsenabled' => 'Envie-me atualizações sobre o que outras pessoas estão fazendo (apenas fundadores)',
	'founderemails-email-user-registered-greeting' => 'Olá $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Parabéns! $EDITORNAME se juntou a $WIKINAME.',
	'founderemails-email-user-registered-content' => 'Aproveite esta oportunidade para recebê-los em seu wiki e incentivá-los a editá-la. Quanto mais colaboradores melhor e mais rápido sua wiki irá crescer.',
	'founderemails-email-user-registered-signature' => 'A Equipe Wikia',
	'founderemails-email-user-registered-button' => 'Recebê-los',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '$WIKINAME tem uma nova edição!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Olá $USERNAME,

Muito bem! $EDITORNAME acaba de fazer sua primeira edição na $WIKINAME.

Acesse $PAGETITLE para verificar o que foi adicionado.

$PAGEURL

A Equipe da Wikia',
	'founderemails-email-first-edit-greeting' => 'Olá $USERNAME,',
	'founderemails-email-first-edit-headline' => 'Muito bem! $EDITORNAME acaba de fazer sua primeira edição na $WIKINAME.',
	'founderemails-email-first-edit-content' => 'Acesse $PAGETITLE para verificar o que foi ad adicionado.',
	'founderemails-email-first-edit-signature' => 'A Equipe da Wikia',
	'founderemails-email-first-edit-button' => 'Confira!',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Ei$USERNAME,<br /><br />
Parece que o usuário registrado $EDITORNAME editou sua wiki pela primeira vez! Porque você não passa na <a href="$EDITORTALKPAGEURL">página de discussão</a> dele para dizer Olá?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- A Equipe Wikia</div>',
	'founderemails-email-page-edited-reg-user-subject' => 'Nova edição em $WIKINAME!',
	'founderemails-email-page-edited-reg-user-body' => 'Olá $USERNAME,

$EDITORNAME acaba de fazer mais uma edição em $WIKINAME na página $PAGETITLE.

Vá à $PAGETITLE para ver o quê ele lá mudou.

$PAGEURL

A Equipe Wikia',
	'founderemails-email-general-edit-greeting' => 'Olá $USERNAME,',
	'founderemails-email-general-edit-headline' => '$EDITORNAME acaba de fazer outra edição na $WIKINAME na página $PAGETITLE.',
	'founderemails-email-general-edit-content' => 'Confira a página $PAGETITLE para ver o quê ele adicionou.',
	'founderemails-email-general-edit-signature' => 'A Equipe Wikia',
	'founderemails-email-general-edit-button' => 'Confira só!',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Ei $USERNAME,<br /><br />
Parece que o usuário registrado $EDITORNAME editou sua wiki! Por que você não vai até a <a href="$EDITORTALKPAGEURL">página de discussão</a> dele para saudá-lo?<br /><br /><div style="font-style: italic; font-size: 120%;">-- O Time Wikia',
	'founderemails-email-page-edited-anon-subject' => 'Um amigo misterioso editou $WIKINAME',
	'founderemails-email-page-edited-anon-body' => 'Oi $USERNAME,

Um Contribuidor Anônimo acaba de fazer uma edição na página $PAGETITLE na $WIKINAME.

Contribuidores Anônimos são pessoas que editam sem logar-se numa conta Wikia. Vá ver o quê esse amigo misterioso adicionou!

$PAGEURL

A Equipe Wikia',
	'founderemails-email-anon-edit-greeting' => 'Olá $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'Um Contribuidor da Wikia acaba de fazer uma edição em $PAGETITLE na $WIKINAME.',
	'founderemails-email-anon-edit-content' => 'Contribuidores da Wikia são pessoas que editam sem se logar à uma conta da Wikia. Veja o que esse amigo misterioso colocou!',
	'founderemails-email-anon-edit-signature' => 'A Equipe da Wikia',
	'founderemails-email-anon-edit-button' => 'Confira só!',
	'founderemails-email-page-edited-anon-body-HTML' => 'Ei $USERNAME,<br /><br />
Parece que alguém editou sua wiki! Por que você não <a href="$MYHOMEURL">vê isso</a> para ver o que ele mudou?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- A Equipe Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'Usuário registrado alterou seu site pela primeira vez!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Olá $USERNAME,

Parece que o usuário registrado $EDITORNAME editou a sua wiki pela primeira vez! Que tal ir à página de discussão ($EDITORTALKPAGEURL) e dizer-lhe olá?

-- A Equipe Wikia',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Um usuário registrado alterou seu site!',
	'founderemails-email-lot-happening-greeting' => 'Olá $USERNAME,',
	'founderemails-email-lot-happening-signature' => 'A Equipe Wikia',
	'founderemails-email-lot-happening-button' => 'Ver atividades',
	'founderemails-email-0-day-heading' => 'Prazer em te conhecer $USERNAME,',
	'founderemails-email-0-day-congratulations' => 'Parabéns por ter criado a wiki $WIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'Aqui estão algumas dicas úteis para você começar:',
	'founderemails-email-0-day-addpages-heading' => 'Adicionar páginas.',
	'founderemails-email-0-day-addpages-button' => 'Adicionar uma página',
	'founderemails-email-0-day-addphotos-heading' => 'Adicionar fotos.',
	'founderemails-email-0-day-addphotos-button' => 'Adicionar uma foto',
	'founderemails-email-0-day-customizetheme-heading' => 'Personalize o seu tema.',
	'founderemails-email-0-day-customizetheme-button' => 'Personalizar',
	'founderemails-email-0-day-wikiahelps-signature' => 'Feliz construção de wiki!<br />A Equipe Wikia',
	'founderemails-email-3-day-heading' => 'Olá $USERNAME,',
	'founderemails-email-3-day-congratulations' => 'Queremos conferir como andam as coisas em $HDWIKINAME.',
	'founderemails-email-3-day-tips-heading' => 'Já faz 3 dias que você começou e achamos que devemos te oferecer algumas dicas na construção de sua wiki:',
	'founderemails-email-3-day-editmainpage-heading' => 'Decore sua página principal.',
	'founderemails-email-3-day-editmainpage-button' => 'Torná-lo atraente',
	'founderemails-email-3-day-addphotos-heading' => 'Adicionar mais imagens',
	'founderemails-email-3-day-addphotos-button' => 'Adicionar fotos',
	'founderemails-email-3-day-explore-heading' => 'Encontrar inspiração.',
	'founderemails-email-3-day-explore-button' => 'Explorar',
	'founderemails-email-10-day-heading' => 'Como vai, $USERNAME?',
	'founderemails-email-10-day-congratulations' => 'Uau, o tempo voa! Já faz 10 dias que você começou a $HDWIKINAME.',
	'founderemails-email-10-day-tips-heading' => 'Envolva outras pessoas em seu projeto e mostre-os todo o seu incrível trabalho! Aqui estão algumas formas de divulgá-lo:',
	'founderemails-email-10-day-share-heading' => 'Sua mãe não te contou que você deve compartilhar?',
	'founderemails-email-10-day-share-content' => 'Use o botão Compartilhar na página principal de sua wiki, artigos e fotos para mostrá-los a seus amigos e seguidores no Facebook.',
	'founderemails-email-10-day-email-heading' => 'Aproveite o poder do e-mail.',
	'founderemails-email-10-day-email-content' => 'Envie correios eletrônicos para outras pessoas que você conhece que estão interessadas no seu tópico ou em ajudá-lo, como um amigo da escola ou um colega de trabalho. Você pode também enviar fotos específicas da sua wiki usando o botão Email',
	'founderemails-email-10-day-join-heading' => 'Una-se utilizando websites similares.',
	'founderemails-email-10-day-join-content' => 'Pergunte à pessoas em outros fóruns ou websites que são relacionadas ao seu tópico para ajudá-lo postando no fórum deles ou nos comentários. Se possível, entre em contato com o administrador e veja se eles estão interessados em partilha de links &mdash; eles vão colocar o link de sua wiki no website deles caso coloque o link deles na sua wiki.',
	'founderemails-email-10-day-wikiahelps-text' => 'Você pode também perguntar a outros Wikianos para ajudá-lo na sua wiki postando nos fóruns em <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-10-day-wikiahelps-signature' => 'Continue com o bom trabalho!<br />A Equipe Wikia',
	'founderemails-email-views-digest-subject' => 'Visualizações de hoje na $WIKINAME',
	'founderemails-email-views-digest-body' => 'Olá $USERNAME,

Hoje, $WIKINAME foi vista por $1 {{PLURAL:$1|pessoa|pessoas}}.

Continue adicionando conteúdos novos e promova sua wiki para encorajar mais pessoas a lê-la, editá-la e divulgá-la.

$WIKIURL

A Equipe Wikia',
	'founderemails-email-views-digest-greeting' => 'Olá $USERNAME,',
	'founderemails-email-views-digest-headline' => 'Hora a $WIKINAME foi visualizada por $1 {{PLURAL:$1|pessoa|pessoas}}.',
	'founderemails-email-views-digest-content' => 'Continue adicionando conteúdos novos e promova sua wiki para encorajar mais pessoas a lê-la, editá-la e divulgá-la.',
	'founderemails-email-views-digest-signature' => 'A Equipe da Wikia',
	'founderemails-email-views-digest-button' => 'Adicionar mais páginas',
	'founderemails-email-complete-digest-subject' => 'As últimas atividades na $WIKINAME',
	'founderemails-email-complete-digest-greeting' => 'Olá $USERNAME,',
	'founderemails-email-complete-digest-headline' => 'É hora de sua dose diária de atividade na $WIKINAME.',
	'founderemails-email-complete-digest-content-heading1' => '$1 {{PLURAL:$1|pessoa|pessoas}} visualizaram sua wiki.',
	'founderemails-email-complete-digest-content1' => 'Continue o excelente trabalho adicionando conteúdo interessante para as pessoas lerem!',
	'founderemails-email-complete-digest-content-heading2' => '$1 {{PLURAL:$1|edição foi|edições foram}} feita(s).',
	'founderemails-email-complete-digest-content-heading3' => '$1 {{PLURAL:$1|pessoa|pessoas}} se juntaram a sua wiki.',
	'founderemails-email-complete-digest-signature' => 'A Equipe da Wikia',
	'founderemails-email-complete-digest-button' => 'Ir para Atividade na Wiki',
	'founderemails-pref-joins' => 'Envie-me um e-mail quando alguém se juntar a $1',
	'founderemails-pref-edits' => 'Envie-me um e-mail quando alguém editar a $1',
	'founderemails-pref-views-digest' => 'Me enviar um e-mail diário dizendo quantas vezes $1 foi visualizada',
	'founderemails-pref-complete-digest' => 'Envie-me um resumo diário das atividades na $1',
	'founderemails-pref-joins-v2' => '...alguém se juntar',
	'founderemails-pref-edits-v2' => '...alguém editar',
	'founderemails-pref-views-digest-v2' => '...um resumo diário do total de visualizações estiver pronto.',
	'founderemails-pref-complete-digest-v2' => '...um resumo diário de registros, edições e visualizações estiver pronto',
];

$messages['ro'] = [
	'founderemails-email-0-day-heading' => 'Încântat de cunoștință, $USERNAME,',
	'founderemails-email-0-day-addpages-button' => 'Adaugă o pagină',
	'founderemails-email-0-day-addphotos-heading' => 'Adaugă fotografii.',
	'founderemails-email-0-day-addphotos-button' => 'Adaugă o fotografie',
	'founderemails-email-0-day-customizetheme-heading' => 'Personalizează-ţi tema.',
	'founderemails-email-3-day-addphotos-button' => 'Adaugă fotografii',
	'founderemails-email-3-day-explore-heading' => 'Găseşte inspiraţie.',
	'founderemails-email-3-day-explore-button' => 'Exploră',
];

$messages['roa-tara'] = [
	'founderemails-email-user-registered-greeting' => 'Cià $USERNAME,',
	'founderemails-email-user-registered-signature' => '\'A squadre Uicchia',
	'founderemails-email-user-registered-button' => 'Bovègne a lore',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '$WIKINAME tène \'nu cangiamende nuève!',
	'founderemails-email-first-edit-greeting' => 'Cià $USERNAME,',
	'founderemails-email-first-edit-signature' => '\'A squadre Uicchia',
	'founderemails-email-first-edit-button' => 'Verificale!',
	'founderemails-email-page-edited-reg-user-subject' => 'Cangiamende nuève sus a $WIKINAME!',
	'founderemails-email-general-edit-greeting' => 'Cià $USERNAME,',
	'founderemails-email-general-edit-signature' => '\'A squadre Uicchia',
	'founderemails-email-general-edit-button' => 'Verificale!',
	'founderemails-email-page-edited-anon-subject' => '\'N\'amiche misteriose ave cangiate $WIKINAME',
	'founderemails-email-anon-edit-greeting' => 'Cià $USERNAME,',
	'founderemails-email-anon-edit-signature' => '\'A squadre Uicchia',
	'founderemails-email-anon-edit-button' => 'Verificale!',
	'founderemails-answers-email-page-edited-anon-subject' => 'Quacchedune ave cangiate \'u site tune!',
	'founderemails-email-lot-happening-greeting' => 'Cià $USERNAME,',
	'founderemails-email-lot-happening-signature' => '\'A squadre de Uicchia',
	'founderemails-email-lot-happening-button' => '\'Ndruche le attività',
	'founderemails-email-0-day-addpages-heading' => 'Aggiunge pàggene.',
	'founderemails-email-0-day-addpages-button' => 'Aggiunge \'na Pàgene',
	'founderemails-email-0-day-addphotos-heading' => 'Aggiunge fote.',
	'founderemails-email-0-day-addphotos-button' => 'Aggiunge \'na Fote',
	'founderemails-email-0-day-customizetheme-button' => 'Personalizze',
	'founderemails-email-3-day-addphotos-button' => 'Aggiunge Fote.',
	'founderemails-email-3-day-explore-heading' => 'Iacchie l\'ispirazione.',
	'founderemails-email-3-day-explore-button' => 'Esplore',
	'founderemails-email-views-digest-greeting' => 'Cià $USERNAME,',
	'founderemails-email-complete-digest-greeting' => 'Cià $USERNAME,',
	'founderemails-email-complete-digest-signature' => '\'A squadre Uicchia',
];

$messages['ru'] = [
	'founderemails-desc' => 'Helps informing founders about changes on their wiki',
	'tog-founderemailsenabled' => 'Отправлять мне письма об изменениях, производимых другими людьми (только для основателей)',
	'founderemails-email-user-registered-greeting' => 'Привет $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Поздравляем! $EDITORNAME только что присоединился к $WIKINAME.',
	'founderemails-email-user-registered-content' => 'Воспользуйтесь этой возможностью, чтобы поприветствовать его на вики и призвать его помочь вам с правками. Чем больше новых участников, тем лучше, и тем быстрее вики будет расти.',
	'founderemails-email-user-registered-signature' => 'Команда Викия',
	'founderemails-email-user-registered-button' => 'Приветствовать его',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => 'На $WIKINAME появился новый редактор!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Привет $USERNAME,

Отлично! $EDITORNAME только что сделал свою первую правку на $WIKINAME.

Зайдите на $PAGETITLE, чтобы проверить то, что он добавил.

$PAGEURL

Команда Викия',
	'founderemails-email-first-edit-greeting' => 'Привет $USERNAME,',
	'founderemails-email-first-edit-headline' => 'Отлично! $EDITORNAME только что сделал свою первую правку на $WIKINAME.',
	'founderemails-email-first-edit-content' => 'Зайдите на $PAGETITLE, чтобы узнать то, что он добавил.',
	'founderemails-email-first-edit-signature' => 'Команда Викия',
	'founderemails-email-first-edit-button' => 'Проверить это!',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Привет, $USERNAME.<br /><br />
Похоже, что участник $EDITORNAME сделал первую правку на вашей вики! Почему бы вам не поприветствовать его на <a href="$EDITORTALKPAGEURL">странице обсуждения</a>и сказать привет?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Команда Викия</div>',
	'founderemails-email-page-edited-reg-user-subject' => 'Новая правка на $WIKINAME!',
	'founderemails-email-page-edited-reg-user-body' => 'Привет $USERNAME,

$EDITORNAME только что сделал ещё одну правку для $WIKINAME на $PAGETITLE.

Перейдите к PAGETITLE $, чтобы узнать, что он изменил.

$PAGEURL

Команда Викия',
	'founderemails-email-general-edit-greeting' => 'Привет $USERNAME,',
	'founderemails-email-general-edit-headline' => '$EDITORNAME только что сделал еще одну правку для $WIKINAME на $PAGETITLE.',
	'founderemails-email-general-edit-content' => 'Зайдите на $PAGETITLE, чтобы узнать то, что он добавил.',
	'founderemails-email-general-edit-signature' => 'Команда Викия',
	'founderemails-email-general-edit-button' => 'Проверить это!',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Привет, $USERNAME.<br /><br />
Похоже, что участник $EDITORNAME внёс изменения в вашу вики! Почему бы вам не поприветствовать его на <a href="$EDITORTALKPAGEURL">странице обсуждения</a>и сказать привет?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Команда Викия</div>',
	'founderemails-email-page-edited-anon-subject' => 'Таинственный друг отредактировал $WIKINAME',
	'founderemails-email-page-edited-anon-body' => 'Привет $USERNAME,

Анонимный участник только что сделал правку для $WIKINAME на $PAGETITLE.

Анонимные участники - это пользователи, которые делают правки без входа в систему с учетной записи Викия. Посмотрите, что добавил этот таинственный друг!

$PAGEURL

Команда Викия',
	'founderemails-email-anon-edit-greeting' => 'Привет $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'Анонимный участник только что сделал правку для $WIKINAME на $PAGETITLE.',
	'founderemails-email-anon-edit-content' => 'Анонимные участники - это пользователи, которые делают правки без входа в систему с учетной записи Викия. Посмотрите, что добавил этот таинственный друг!',
	'founderemails-email-anon-edit-signature' => 'Команда Викия',
	'founderemails-email-anon-edit-button' => 'Проверить это!',
	'founderemails-email-page-edited-anon-body-HTML' => 'Привет, $USERNAME.<br /><br />

Похоже, что кто-то внёс правки в вашу вики! Почему бы вам <a href="$MYHOMEURL">не проверить,</a> что было изменено?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Команда Викия</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'Зарегистрированный участник сделал первую правку на вашем сайте!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Привет, $USERNAME.

Похоже, что участник $EDITORNAME сделал первую правку на вашей вики! Почему бы вам не поприветствовать его на странице обсуждения ($EDITORTALKPAGEURL) и не сказать привет?

-- Команда Викия',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'Привет, $USERNAME.<br /><br />
Похоже, что участник $EDITORNAME сделал первую правку на вашей вики! Почему бы вам не поприветствовать его на <a href="$EDITORTALKPAGEURL">странице обсуждения</a>и не сказать привет?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Команда Викия</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Зарегистрированный участник внёс изменения на вашем сайте!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Привет, $USERNAME.

Похоже, что зарегистрированный участник $EDITORNAME сделал правку на вашей вики! Почему бы вам не поприветствовать его на странице обсуждения ($EDITORTALKPAGEURL) и не сказать привет?

-- Команда Викия',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => 'Привет, $USERNAME.<br /><br />
Похоже, что участник $EDITORNAME сделал правку на вашей вики! Почему бы вам не поприветствовать его на <a href="$EDITORTALKPAGEURL">странице обсуждения</a> и не сказать привет?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Команда Викия</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'Кто-то сделал правку на вашем сайте!',
	'founderemails-answers-email-page-edited-anon-body' => 'Привет, $USERNAME.

Похоже, что кто-то сделал правку на вашей вики! Почему бы вам не посмотреть, что было изменено ($MYHOMEURL)?

-- Команда Викия',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Привет, $USERNAME.<br /><br />
Похоже, что кто-то сделал правку на вашей вики! Почему бы вам <a href="$MYHOMEURL">не посмотреть</a>, что было изменено?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Команда Викия</div>',
	'founderemails-lot-happening-subject' => '$WIKINAME раскаляется!',
	'founderemails-lot-happening-body' => 'Привет $USERNAME,

Поздравляем! Очень много всего происходило сегодня на $WIKINAME, $WIKIURL!

Если вы ещё не проверили это, то вы можете перейти на страницу Вики-деятельности, чтобы увидеть всю ту большую работу, которая произошла.

Поскольку так много всего происходит, вам может потребоваться изменить настройки электронной почты в режим дайджеста. В дайджест режиме вы будете получать только одно письмо, в котором будет перечислена вся активность на вашей вики за каждый день.

Команда Викия',
	'founderemails-lot-happening-body-HTML' => 'Привет, $USERNAME.<br /><br />
Сегодня на вашем сайте произошло много событий! Взгляните на $MYHOMEURL, чтобы посмотреть то, что случилось.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Команда Викия</div>',
	'founderemails-email-lot-happening-greeting' => 'Привет $USERNAME,',
	'founderemails-email-lot-happening-headline' => 'Поздравляем! Много чего произошло сегодня на $WIKINAME!',
	'founderemails-email-lot-happening-content' => 'Если вы ещё не проверили это, то вы можете перейти на страницу Вики-деятельности, чтобы увидеть всю ту большую работу, которая произошла. Поскольку так много всего происходит, вам может потребоваться изменить настройки электронной почты в режим дайджеста. В дайджест режиме вы будете получать только одно письмо, в котором будет перечислена вся активность на вашей вики за каждый день.',
	'founderemails-email-lot-happening-signature' => 'Команда Викия',
	'founderemails-email-lot-happening-button' => 'Посмотреть активность',
	'founderemails-email-footer-line1' => 'Чтобы узнать о последних событиях на Викия, посетите <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>',
	'founderemails-email-footer-line2' => 'Хотите контролировать, какие электронные письма вы хотите получать? Зайдите в свои <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">личные настройки</a>',
	'founderemails-email-0-day-heading' => 'Приятно познакомиться $USERNAME,',
	'founderemails-email-0-day-congratulations' => 'Поздравляем с созданием $HDWIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'Вот несколько полезных советов для начала:',
	'founderemails-email-0-day-addpages-heading' => 'Добавьте страницы.',
	'founderemails-email-0-day-addpages-content' => 'Вики предназначена для обмена информацией о вашей уникальной теме. Создавайте страницы, нажав на ссылку <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">"Добавить страницу"</a>, и заполните их подробной информацией о вашей теме.',
	'founderemails-email-0-day-addpages-button' => 'Добавить страницу',
	'founderemails-email-0-day-addphotos-heading' => 'Добавьте фотографии.',
	'founderemails-email-0-day-addphotos-content' => 'Страницы всегда лучше смотрятся, когда на них есть визуальные эффекты! Добавьте изображения на ваши страницы и на заглавную страницу. Нажмите <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"Добавить фото"</a> для добавления изображений, фотогалереи или слайдшоу.',
	'founderemails-email-0-day-addphotos-button' => 'Добавить фото',
	'founderemails-email-0-day-customizetheme-heading' => 'Настройте тему вики.',
	'founderemails-email-0-day-customizetheme-content' => 'Настройка темы и логотипа позволит вашей вики выделиться! Используйте <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">Конструктор тем</a> и настройте цвета вашей вики, уникальными только для вашей вики.',
	'founderemails-email-0-day-customizetheme-button' => 'Настроить',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">Мы не оставим вас одного.</span> Мы здесь, чтобы помочь вам сделать каждый шаг пути $WIKINAME успешным. Посетите <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com</a>, где можно найти форум, советы и помощь, или <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">напишите нам</a> ваши вопросы!',
	'founderemails-email-0-day-wikiahelps-signature' => 'Счастливого викистроительства!<br />Команда Викия',
	'founderemails-email-3-day-heading' => 'Привет $USERNAME,',
	'founderemails-email-3-day-congratulations' => 'Мы хотели проверить и посмотреть, как идут дела на $HDWIKINAME.',
	'founderemails-email-3-day-tips-heading' => 'Прошло 3 дня, как вы начали, и мы подумали, что могли бы предложить ещё несколько советов по созданию вики:',
	'founderemails-email-3-day-editmainpage-heading' => 'Украсьте Заглавную страницу.',
	'founderemails-email-3-day-editmainpage-content' => 'Заглавная страница является одной из первых страниц, которую люди видят, когда они посещают <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a>. Создайте хорошее первое впечатление, написав подробно о вашей теме, добавьте слайдшоу, галерею или слайдер.',
	'founderemails-email-3-day-editmainpage-button' => 'Продолжайте в том же духе',
	'founderemails-email-3-day-addphotos-heading' => 'Добавьте еще больше фотографий.',
	'founderemails-email-3-day-addphotos-content' => 'Один из лучших способов сделать ваши страницы интереснее - это нажать на ссылку <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"добавить фото"</a>.',
	'founderemails-email-3-day-addphotos-button' => 'Добавить фотографии',
	'founderemails-email-3-day-explore-heading' => 'Найти вдохновение.',
	'founderemails-email-3-day-explore-content' => 'Не бойтесь посмотреть на другие вики, чтобы узнать, как их участники работали над своей Заглавной страницей, страницами статей и другими страницами. Вот некоторые из хороших викий: <a style="color:#2a87d5;text-decoration:none;" href="http://muppets.wikia.com">Muppet Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://poptarts.wikia.com">Pop Tarts Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://monsterhigh.wikia.com">Monster High Wiki</a>.',
	'founderemails-email-3-day-explore-button' => 'Исследовать',
	'founderemails-email-3-day-wikiahelps-text' => 'Нужна помощь, разъяснить, как что-то работает? Мы всегда здесь! Обратитесь к нам за помощью и советом на <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-3-day-wikiahelps-signature' => 'Продолжайте в том же духе!<br />Команда Викия',
	'founderemails-email-10-day-heading' => 'Как дела $USERNAME?',
	'founderemails-email-10-day-congratulations' => 'Время летит! Уже прошло 10 дней, как вы начали $WIKINAME.',
	'founderemails-email-10-day-tips-heading' => 'Заполучите других участников, кто будет участвовать в проекте, и покажите им ту удивительную работу, которую вы делаете! Вот несколько способов рассказать о своей вики:',
	'founderemails-email-10-day-share-heading' => 'Не забыли, что нужно делиться?',
	'founderemails-email-10-day-share-content' => 'Используйте кнопку Поедлиться на Заглавной странице вашей вики, страницах статьи и фотографии, чтобы показать их друзьям на Facebook.',
	'founderemails-email-10-day-email-heading' => 'Используйте возможности электронной почты.',
	'founderemails-email-10-day-email-content' => 'Отправьте электронные письма тем, кто вы знаете точно заинтересован в теме вашей вики или хочет помочь вам, например друг из школы или коллега. Вы можете также отослать определенные фотографии с вашей вики, с помощью кнопки Электронная почта',
	'founderemails-email-10-day-join-heading' => 'Вместе с похожими веб-сайтами.',
	'founderemails-email-10-day-join-content' => 'Попросите людей на форумах или веб-сайтах, близких по тематике с вашей вики, о помощи, разместив сообщения на форумах или в комментариях.  Если возможно, свяжитесь с администратором и проверьте, не заинтересован ли он в обмене ссылками — они поместят ссылку на вашу вики на своём веб-сайте, а вы на своей вики - на их веб-сайт.',
	'founderemails-email-10-day-wikiahelps-text' => 'Вы также можете попросить помочь участников других вики-проектов, разместив сообщение на форуме <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-10-day-wikiahelps-signature' => 'Продолжайте в том же духе!<br />Команда Викия',
	'founderemails-email-views-digest-subject' => 'Сегодняшние просмотры $WIKINAME',
	'founderemails-email-views-digest-body' => 'Привет $USERNAME,

Сегодня $WIKINAME была просмотрена $1 {{PLURAL:$1|человеком|людьми}}.

Добавляйте новое содержимое и продвигайте вашу вики, чтобы поощрить ещё большее число людей к чтению, редактированию и продвижению вики.

$WIKIURL

Команда Викия',
	'founderemails-email-views-digest-greeting' => 'Привет $USERNAME,',
	'founderemails-email-views-digest-headline' => 'Сегодня $WIKINAME была просмотрена $1 {{PLURAL:$1|человеком|людьми}}.',
	'founderemails-email-views-digest-content' => 'Добавляйте новое содержимое и продвигайте вашу вики, чтобы поощрить ещё большее число людей к чтению, редактированию и продвижению вики.',
	'founderemails-email-views-digest-signature' => 'Команда Викия',
	'founderemails-email-views-digest-button' => 'Добавить больше страниц',
	'founderemails-email-complete-digest-subject' => 'Последняя активность на $WIKINAME',
	'founderemails-email-complete-digest-body' => 'Привет $USERNAME,

Пришло время для того, чтобы узнать ежедневную активность на $WIKINAME, $WIKIURL.

$1 {{PLURAL:$1|человек|человека|человек}} просмотрели вашу вики.

Продолжайте делать огромную работу, добавляя добавляя интересный контент, который люди могли бы читать!

$2 {{PLURAL:$2|правка|правки|правок}} были сделаны.

Счастливые редакторы создают счастливые вики-проекты. Не забудьте поблагодарить ваших редакторов и общайтесь с ними время от времени.

$3 {{PLURAL:$3|участник присоединился|участника присоединились|участников присоединились}} к вашей вики.

Приветствуйте новых людей на вашей вики, оставляя сообщения на их страницах обсуждения.

Вы всегда можете зайти на страницу Вики-деятельности, чтобы просмотреть все важные изменения на $WIKINAME. Делайте это как можно чаще, так как вы - основатель, и ваше сообщество ожидает, что вы будете направлять развитие вики и продвигать её.

Команда Викия',
	'founderemails-email-complete-digest-greeting' => 'Привет $USERNAME,',
	'founderemails-email-complete-digest-headline' => 'Пришло время для того, чтобы узнать ежедневную активность на $WIKINAME.',
	'founderemails-email-complete-digest-content-heading1' => '$1 {{PLURAL:$1|человек|человека|человек}} просмотрели вашу вики.',
	'founderemails-email-complete-digest-content1' => 'Продолжайте делать огромную работу, добавляя добавляя интересный контент, который люди могли бы читать!',
	'founderemails-email-complete-digest-content-heading2' => '$1  {{PLURAL:$1|правка была|правки были|правок было}} сделаны.',
	'founderemails-email-complete-digest-content2' => 'Счастливые редакторы создают счастливые вики-проекты. Не забудьте поблагодарить ваших редакторов и общайтесь с ними время от времени.',
	'founderemails-email-complete-digest-content-heading3' => '$1 {{PLURAL:$1|участник присоединился|участника присоединились|участников присоединились}} к вашей вики.',
	'founderemails-email-complete-digest-content3' => 'Приветствуйте новых людей на вашей вики, оставляя сообщения на их страницах обсуждения.
<br /><br />
Вы всегда можете зайти на страницу Вики-деятельности, чтобы просмотреть все важные изменения на $WIKINAME. Делайте это как можно чаще, так как вы - основатель, и ваше сообщество ожидает, что вы будете направлять развитие вики и продвигать её.',
	'founderemails-email-complete-digest-signature' => 'Команда Викия',
	'founderemails-email-complete-digest-button' => 'Перейти к странице вики-деятельности',
	'founderemails-pref-joins' => 'Отправлять мне e-mail, когда кто-то присоединяется к $1',
	'founderemails-pref-edits' => 'Отправлять мне e-mail, когда кто-то делает правки на $1',
	'founderemails-pref-views-digest' => 'Ежедневно отправлять мне e-mail, в котором рассказывать мне, сколько раз $1 была просмотрена',
	'founderemails-pref-complete-digest' => 'Отправлять мне по e-mail ежедневный дайджест активности на $1',
	'founderemails-pref-joins-v2' => '...если кто-то присоединился к вики',
	'founderemails-pref-edits-v2' => '...если кто-то сделал правку на вики',
	'founderemails-pref-views-digest-v2' => '...ежедневное резюме количества просмотров вики',
	'founderemails-pref-complete-digest-v2' => '...ежедневный дайджест новых редакторов, правок и просмотров страницы',
];

$messages['sv'] = [
	'founderemails-desc' => 'Hjälper till att informera grundarna om ändringar på sin wiki',
	'tog-founderemailsenabled' => 'Skicka uppdateringar till mig via e-post vad andra personer gör (endast grundare)',
	'founderemails-email-user-registered-greeting' => 'Hej $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Grattis! $EDITORNAME har just blivit medlem på $WIKINAME.',
	'founderemails-email-user-registered-content' => 'Ta möjligheten och välkomna dem till din wiki och uppmuntra dem att hjälp till och redigera. Ju fler desto roligare, och då kommer din wiki växa snabbare.',
	'founderemails-email-user-registered-signature' => 'Wikia-teamet',
	'founderemails-email-user-registered-button' => 'Välkomna dem',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '$WIKINAME har en ny redigering!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Hej $USERNAME,

Härligt! $EDITORNAME har just gjort sin första redigering på $WIKINAME.

Gå till $PAGETITLE för att kolla vad som har lagts till.

$PAGEURL

Wikia-teamet',
	'founderemails-email-first-edit-greeting' => 'Hej $USERNAME,',
	'founderemails-email-first-edit-headline' => 'Utmärkt! $EDITORNAME har just gjort sin första redigering på $WIKINAME.',
	'founderemails-email-first-edit-content' => 'Bege dig till $PAGETITLE och spana in vad de har lagt till.',
	'founderemails-email-first-edit-signature' => 'Wikia-teamet',
	'founderemails-email-first-edit-button' => 'Spana in det!',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Hej $USERNAME,<br /><br />
Det ser ut som att den registrerade användaren $EDITORNAME har redigerat din wiki för första gången! Varför tittar du inte in på <a href="$EDITORTALKPAGEURL">diskussionssidan</a> för att säga hej?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia-teamet</div>',
	'founderemails-email-page-edited-reg-user-subject' => 'Ny redigering på $WIKINAME!',
	'founderemails-email-page-edited-reg-user-body' => 'Hej $USERNAME,

$EDITORNAME har just gjort en till redigering i $WIKINAME på $PAGETITLE.

Gå till $PAGETITLE för att se vad de har ändrat.

$PAGEURL

Wikia-teamet',
	'founderemails-email-general-edit-greeting' => 'Hej $USERNAME,',
	'founderemails-email-general-edit-headline' => '$USERNAME har precis gjort en till redigering på $WIKINAME på $PAGETITLE.',
	'founderemails-email-general-edit-content' => 'Bege dig till $PAGETITLE och spana in vad de har lagt till.',
	'founderemails-email-general-edit-signature' => 'Wikia-teamet',
	'founderemails-email-general-edit-button' => 'Kolla in det!',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Hej $USERNAME,<br /><br />
Det verkar som om den registrerade användaren $EDITORNAME har redigerat din wiki! Varför går du inte och besöker <a href="$EDITORTALKPAGEURL">diskussionssidan</a> för att säga hej?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia-teamet</div>',
	'founderemails-email-page-edited-anon-subject' => 'En mystik vän redigerade $WIKINAME',
	'founderemails-email-page-edited-anon-body' => 'Hej $USERNAME,

En Wikia-bidragsgivare har just gjort en redigering på $PAGETITLE på $WIKINAME.

Wikia-bidragsgivare är människor som gör redigeringar utan att logga in sig med ett Wikia-konto. Gå och se vad denna mystiska vän har lagt till!

$PAGEURL

Wikia-teamet',
	'founderemails-email-anon-edit-greeting' => 'Hej $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'En Wikia-bidragsgivare har just gjort en redigering på $PAGETITLE på WIKINAME.',
	'founderemails-email-anon-edit-content' => 'Wikia-bidragsgivare är människor som gör ändringar utan att logga in på en Wikia-konto. Gå och se vad denna mystiska vän har lagt till!',
	'founderemails-email-anon-edit-signature' => 'Wikia-teamet',
	'founderemails-email-anon-edit-button' => 'Kolla in det!',
	'founderemails-email-page-edited-anon-body-HTML' => 'Hej $USERNAME,<br /><br />
Det ser ut som någon har redigerat din wiki! Varför inte <a href="$MYHOMEURL">kolla in den</a> för att se vad som har förändrats?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia-teamet</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'En registrerad användare ändrade din sida för första gången!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Hej $USERNAME,

Det ser ut som den registrerade användaren $EDITORNAME har redigerat din wiki för första gången! Varför går du inte och besöker dem på deras diskussionssida ($EDITORTALKPAGEURL) och säger hej?

-- Wikia-teamet',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'Hej $USERNAME,<br /><br />
Det ser ut som att den registrerade användaren $EDITORNAME har redigerat din wiki för första gången! Varför tittar du inte in på <a href="$EDITORTALKPAGEURL">diskussionssidan</a> för att säga hej?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia-teamet</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'En registrerad användare har redigerat din sida!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Hej $USERNAME,

Det verkar som om den registrerade användaren $EDITORNAME har redigerat din wiki! Varför går du inte och besöker den på sin diskussionssida ($EDITORTALKPAGEURL) för att säga hej?

-- Wikia-teamet',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => 'Hej $USERNAME,<br /><br />
Det verkar som om den registrerade användaren $EDITORNAME har redigerat din wiki! Varför går du inte och besöker <a href="$EDITORTALKPAGEURL">diskussionssidan</a> för att säga hej?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia-teamet</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'Någon redigerade din sida!',
	'founderemails-answers-email-page-edited-anon-body' => 'Hej $USERNAME,

Det verkar som om någon har redigerat din wiki! Varför inte gå in på $MYHOMEURL för att se vad som ändrats?

-- Wikia-teamet',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Hej $USERNAME,<br /><br />
Det ser ut som någon har redigerat din wiki! Varför inte <a href="$MYHOMEURL">kolla in den</a> för att se vad som har förändrats?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia-teamet</div>',
	'founderemails-lot-happening-subject' => '$WIKINAME börjar värmas upp!',
	'founderemails-lot-happening-body' => 'Hej $USERNAME,

Gratulerar, idag pågår det mycket på $WIKINAME, $WIKIURL.

Om du inte redan gjort det, kan du gå in på Wiki-aktivitet och se alla stora arbeten som har gjorts.

Eftersom det är så mycket som redan pågår, kanske du också vill ändra dina e-postinställningar till sammandragsläge. Med sammandragsläget får du ett e-postmeddelande som listar upp all aktivitet på din wiki varje dag.

Wikia-teamet',
	'founderemails-lot-happening-body-HTML' => 'Hej $USERNAME,<br /><br />
Det händer mycket på din wiki idag! Titta in på $MYHOMEURL för att se vad som har pågått.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia-teamet</div>',
	'founderemails-email-lot-happening-greeting' => 'Hej $USERNAME,',
	'founderemails-email-lot-happening-headline' => 'Grattis! Det pågår mycket på $WIKINAME idag!',
	'founderemails-email-lot-happening-content' => 'Om du inte redan gjort det har kan du gå in på Wiki-aktivitet för att se alla stora arbeten som har gjorts. Eftersom det är så mycket som redan pågår, kanske du också vill ändra dina e-post-inställningar till sammandragsläge. Med sammandragsläget får du ett e-postmeddelande som listar upp all aktivitet på din wiki varje dag.',
	'founderemails-email-lot-happening-signature' => 'Wikia-teamet',
	'founderemails-email-lot-happening-button' => 'Se aktiviteter',
	'founderemails-email-footer-line1' => 'För att kolla in de senaste händelserna på Wikia, besök <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>',
	'founderemails-email-footer-line2' => 'Vill du kontrollera vilka e-postmeddelanden du får? Gå till dina <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">Inställningar</a>',
	'founderemails-email-0-day-heading' => 'Trevligt att träffas $USERNAME,',
	'founderemails-email-0-day-congratulations' => 'Grattis till skapa $WIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'Här är några användbara tips till dig att komma igång:',
	'founderemails-email-0-day-addpages-heading' => 'Lägg till sidor.',
	'founderemails-email-0-day-addpages-content' => 'En wiki handlar om att dela information om dit unika ämne. Skapa sidor genom att klicka på <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">"Lägg till en sida"</a> och fylla i mer specifik information om ditt ämne..',
	'founderemails-email-0-day-addpages-button' => 'Lägg till en sida',
	'founderemails-email-0-day-addphotos-heading' => 'Lägg till foton.',
	'founderemails-email-0-day-addphotos-content' => 'Sidor är alltid bättre om de innehåller någonting visuellt! Lägg till bilder på dina sidor och till din huvudsida. Du kan klicka på<a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"Lägg till ett foto"</a> för att lägga till ett fotografi, ett fotogalleri eller ett bildspel.',
	'founderemails-email-0-day-addphotos-button' => 'Lägg till ett foto',
	'founderemails-email-0-day-customizetheme-heading' => 'Anpassa ditt tema.',
	'founderemails-email-0-day-customizetheme-content' => 'Anpassa ditt wiki-tema och logotyp för att göra så din wiki sticker ut! Använd <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">Temadesignern</a> för att lägga till anpassade färger på din wiki och göra den unik för ditt ämne.',
	'founderemails-email-0-day-customizetheme-button' => 'Anpassa',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">Vi kommer inte att lämna dig utanför.</span> Vi är här för att hjälpa dig göra $WIKINAME framgångsrikt varje steg på vägen. Besök <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a> för forum, råd och hjälp, eller <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">e-posta oss</a> dina frågor!',
	'founderemails-email-0-day-wikiahelps-signature' => 'Lycka till med wiki-byggandet! <br />Wikia-teamet',
	'founderemails-email-3-day-heading' => 'Hallå där, $ FOUNDERNAME,',
	'founderemails-email-3-day-congratulations' => 'Vi ville titta förbi och se hur saker står till på $HDWIKINAME.',
	'founderemails-email-3-day-tips-heading' => 'Det har gått tre dagar sedan du startade, och vi tänkte att vi skulle titta förbi och erbjuda några fler tips om att bygga din wiki:',
	'founderemails-email-3-day-editmainpage-heading' => 'Piffa upp din huvudsida.',
	'founderemails-email-3-day-editmainpage-content' => 'Huvudsidan är en av de första sakerna folk ser när de besöker <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a>. Gör ett gott första intryck genom att skriva ned en detaljerad sammanfattning av vad ditt ämne handlar om och lägg till ett bildspel, galleri eller fotoreglage.',
	'founderemails-email-3-day-editmainpage-button' => 'Piffa upp den',
	'founderemails-email-3-day-addphotos-heading' => 'Lägga till ännu fler foton.',
	'founderemails-email-3-day-addphotos-content' => 'En av de bästa sätten att få dina sidor skina, glittra och spraka är att <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"lägga till några foton"</a>.',
	'founderemails-email-3-day-addphotos-button' => 'Lägg till foton',
	'founderemails-email-3-day-explore-heading' => 'Hitta inspiration.',
	'founderemails-email-3-day-explore-content' => 'Var inte rädd för att kolla in andra wikis för att se hur de har arbetat fram sin huvudsida, artikelsidor och mer. Här är några av våra favoriter: <a style="color:#2a87d5;text-decoration:none;" href="http://muppets.wikia.com">Muppet Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://poptarts.wikia.com">Pop Tarts Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://monsterhigh.wikia.com">Monster High Wiki</a>.',
	'founderemails-email-3-day-explore-button' => 'Utforska',
	'founderemails-email-3-day-wikiahelps-text' => 'Behöver hjälp med att lista ut hur någonting fungerar? Vi är alltid här för dig! Kom och be oss om hjälp och råd på <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-3-day-wikiahelps-signature' => 'Du gör ett jätttebra jobb! Fortsätt med det!<br />Wikia-teamet',
	'founderemails-email-10-day-heading' => 'Hur går det, $USERNAME?',
	'founderemails-email-10-day-congratulations' => 'Oj, vad tiden flyger iväg! Det har redan gått 10 dagar sedan du startade $HDWIKINAME.',
	'founderemails-email-10-day-tips-heading' => 'Få andra inblandade i projektet och visa allt häftigt arbete som du har gjort! Här är några sätt att sprida ordet:',
	'founderemails-email-10-day-share-heading' => 'Har inte din mamma sagt åt dig att Dela?',
	'founderemails-email-10-day-share-content' => 'Använd Gilla-knappen på din wikis huvudsida, artikelsidor och foton för att visa upp dem för dina vänner och följare på Facebook.',
	'founderemails-email-10-day-email-heading' => 'Utnyttja kraften av e-post.',
	'founderemails-email-10-day-email-content' => 'Skicka e-post till de du vet är intresserade om ditt ämne eller intresserad av att hjälpa dig, som en vän från skolan eller en medarbetare. Du kan också skicka e-post med specifika foton från din wiki med hjälp av e-post-knappen.',
	'founderemails-email-10-day-join-heading' => 'Anslut dig till liknande webbplatser.',
	'founderemails-email-10-day-join-content' => 'Fråga folk om hjälp på andra forum eller webbsidor som handlar om ditt ämne genom att posta ett inlägg på deras forum eller kommentarer. Om det är möjligt kan d kontakta administratören och se om de är intresserad i att dela länkar &mdash; de kommer att lägga in din wiki-länk på deras webbsida om du lägger in deras länk på din wiki.',
	'founderemails-email-10-day-wikiahelps-text' => 'Du kan även fråga andra Wikianer att hjälpa till på din wiki genom att lämna ett inlägg på forumen på <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-10-day-wikiahelps-signature' => 'Du gör ett bra jobb! Fortsätt med det!<br />Wikia-teamet',
	'founderemails-email-views-digest-subject' => 'Dagens besök på $WIKINAME',
	'founderemails-email-views-digest-body' => 'Hej $USERNAME,

Idag besöktes $WIKINAME av $1 {{PLURAL:$1|person|personer}}.

Fortsätt att lägga till nytt innehåll och främja din wiki att uppmuntra fler människor att läsa, redigera och sprida ordet.

$WIKIURL

Wikia-teamet',
	'founderemails-email-views-digest-greeting' => 'Hej $USERNAME,',
	'founderemails-email-views-digest-headline' => 'Idag besöktes $WIKINAME av $1 {{PLURAL:$1|person|personer}}.',
	'founderemails-email-views-digest-content' => 'Fortsätt att lägga till nytt innehåll och främja din wiki att uppmuntra fler människor att läsa, redigera och sprida ordet.',
	'founderemails-email-views-digest-signature' => 'Wikia-teamet',
	'founderemails-email-views-digest-button' => 'Lägg till fler sidor',
	'founderemails-email-complete-digest-subject' => 'Senaste aktiviteten på $WIKINAME',
	'founderemails-email-complete-digest-body' => 'Hej $USERNAME,

Det är dags för din dagliga dos av aktiviteten på $WIKINAME, $WIKIURL.

$1 {{PLURAL:$1|person|personer}} besökte din wiki.

Fortsätt med det suveräna arbetet att lägga till intressant innehåll för folk att läsa!

$2 {{PLURAL:$2|redigering|redigeringar}} gjordes.

Glada redigerare gör glada wikis. Se till att tacka dina redigerare och titta till dem lite då och då.

$3 {{PLURAL:$3|person|personer}} registrerade sig på din wiki.

Välkomna nya människor till din wiki med ett meddelande på diskussionssidan.

Du kan alltid gå in på wiki-aktivitet för att se alla spännande ändringar som görs på $WIKINAME. Kolla in den ofta, som grundaren vill din gemenskap se till dig för att hjälpa till och hålla igång wikin.

Wikia-teamet',
	'founderemails-email-complete-digest-greeting' => 'Hej $USERNAME,',
	'founderemails-email-complete-digest-headline' => 'Det är dags för din dagliga dos av aktiviteten på $WIKINAME.',
	'founderemails-email-complete-digest-content-heading1' => '$1 {{PLURAL:$1|person|personer}} besökte din wiki.',
	'founderemails-email-complete-digest-content1' => 'Du gör ett jättebra jobb som lägger till intressant innehåll för folk att läsa! Fortsätt med det!',
	'founderemails-email-complete-digest-content-heading2' => '$1 {{PLURAL:$1|redigering|redigeringar}} har gjorts.',
	'founderemails-email-complete-digest-content2' => 'Glada redigerare gör glada wikis. Se till att tacka dina redigerare och titta till dem lite då och då.',
	'founderemails-email-complete-digest-content-heading3' => '$1 {{PLURAL:$1|person|personer}} registrerade sig på din wiki.',
	'founderemails-email-complete-digest-content3' => 'Välkomna nya människor till din wiki med ett meddelande på diskussionssidan.
<br /><br />
Du kan alltid gå in på wikiaktiviteten för att se alla spännande händelser som görs på $WIKINAME. Kolla in det ofta, som grundaren vill din gemenskap se till dig för att hjälpa till och hålla igång wikin.',
	'founderemails-email-complete-digest-signature' => 'Wikia-teamet',
	'founderemails-email-complete-digest-button' => 'Gå till wikiaktivitet',
	'founderemails-pref-joins' => 'Skicka e-post till mig när någon registrerar sig på $1',
	'founderemails-pref-edits' => 'Skicka e-post till mig när någon redigerar $1',
	'founderemails-pref-views-digest' => 'Skicka e-post dagligen och berätta hur många gånger $1 besöktes',
	'founderemails-pref-complete-digest' => 'Skicka en dagligt sammandrag av aktiviteten på $1',
	'founderemails-pref-joins-v2' => '...någon blir medlem',
	'founderemails-pref-edits-v2' => '...någon redigerar',
	'founderemails-pref-views-digest-v2' => '...en daglig sammanfattning av totala visningar är redo',
	'founderemails-pref-complete-digest-v2' => '...en dagliga sammanfattad av registreringar, redigeringar och visningar är redo',
];

$messages['ta'] = [
	'founderemails-email-page-edited-anon-subject' => 'யாரோ தங்களது விக்கியை மாற்றிவிட்டார்கள் !',
];

$messages['te'] = [
	'founderemails-desc' => 'వ్యవస్థాపకులకు తమ వికీలో జరిగిన మార్పుల గురించి తెలియజెయ్యడంలో తోడ్పడుతుంది',
	'tog-founderemailsenabled' => 'ఇతరులు ఏం చేస్తున్నారో నాకు ఈమెయిలు చెయ్యి (వ్యవస్థాపకులకు మాత్రమే)',
	'founderemails-email-user-registered-greeting' => 'హలో $USERNAME,',
	'founderemails-email-user-registered-headline' => 'అభినందనలు! $EDITORNAME ఇప్పుడే $WIKINAME లో చేరారు.',
	'founderemails-email-user-registered-content' => 'ఈ సందర్భంగా వాళ్ళను మీ వికీకి ఆహ్వానించి మార్పుచేర్పులు చేసేందుకు ప్రోత్సహించండి. ఎంత మంది ఉంటే అంత ఊపు వస్తుంది, అంత త్వరగా మీ వికీ విస్తరిస్తుంది.',
	'founderemails-email-user-registered-signature' => 'వికియా బృందం',
	'founderemails-email-user-registered-button' => 'వారిని ఆహ్వానించండి',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '$WIKINAME లో కొత్త మార్పుచేర్పు జరిగింది!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => '$USERNAME గారూ,

సరే! $EDITORNAME, $WIKINAME లో తమ మొట్టమొదటి మార్పుచేర్పు చేసారు.

$PAGETITLE కి వెళ్ళి వారు చేసిన మార్పు ఏమిటో చూడండి.

$PAGEURL

వికియా బృందం',
	'founderemails-email-first-edit-greeting' => 'హలో $USERNAME,',
	'founderemails-email-first-edit-headline' => 'సరే! $EDITORNAME ఇప్పుడే $WIKINAME లో తమ మొట్తమొదటి మార్పుచేర్పు చేసారు.',
	'founderemails-email-first-edit-content' => '$PAGETITLE కి వెళ్ళి వాళ్ళేం రాసారో చూడండి.',
	'founderemails-email-first-edit-signature' => 'వికియా బృందం',
	'founderemails-email-first-edit-button' => 'దాన్ని చూడండి!',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => '$USERNAME గారూ,<br /><br />
నమోదైన వాడుకరి $EDITORNAME మీ వికీలో మొదటిసారిగా మార్పు చేసినట్లుగా కనిపిస్తోంది! ఓసారి వారి <a href="$EDITORTALKPAGEURL">చర్చాపేజీకి</a>వెళ్ళి పలకరించకూడదూ?<br /><br /> 
<div style="font-style: italic; font-size: 120%;">-- వికియా బృందం</div>',
	'founderemails-email-page-edited-reg-user-subject' => '$WIKINAME లో కొత్త మార్పుచేర్పు!',
	'founderemails-email-page-edited-reg-user-body' => '$USERNAME గారూ,

$EDITORNAME, $WIKINAME లోని $PAGETITLE లో మరో మార్పుచేర్పు చేసారు.

$PAGETITLE కు వెళ్ళి వారు చేసిన మార్పు ఏమిటో చూడండి.

$PAGEURL

వికియా బృందం',
	'founderemails-email-general-edit-greeting' => 'హలో $USERNAME,',
	'founderemails-email-general-edit-headline' => '$EDITORNAME, $WIKINAME లోని $PAGETITLE లో మరో మార్పుచేర్పు చేసారు.',
	'founderemails-email-general-edit-content' => '$PAGETITLE కి వెళ్ళి వాళ్ళేం చేసారో చూడండి.',
	'founderemails-email-general-edit-signature' => 'వికియా బృందం',
	'founderemails-email-general-edit-button' => 'దాన్ని చూడండి!',
	'founderemails-email-page-edited-anon-subject' => 'ఓ అజ్ఞాత మిత్రులు $WIKINAME ని మార్చారు',
	'founderemails-email-anon-edit-greeting' => 'హలో $USERNAME,',
	'founderemails-email-anon-edit-signature' => 'వికియా బృందం',
	'founderemails-email-anon-edit-button' => 'దాన్ని చూడండి!',
	'founderemails-email-page-edited-anon-body-HTML' => '$USERNAME గారూ,<br /><br />
ఎవరో మీ వికీలో మార్పు చేసినట్లుగా కనిపిస్తోంది! ఓసారి <a href="$MYHOMEURL">వెళ్ళి</a> ఏం మార్చారో చూడకూడదూ?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- వికియా బృందం</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'నమోదైన వాడుకరి మొదటిసారిగా మీ సైటును మార్చారు!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => '$USERNAME గారూ,
నమోదైన వాడుకరి $EDITORNAME మీ వికీలో మొదటిసారిగా మార్పు చేసినట్లుగా కనిపిస్తోంది! ఓసారి వారి చర్చాపేజీకి ($EDITORTALKPAGEURL) వెళ్ళి పలకరించకూడదూ?

-- వికియా బృందం',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => '$USERNAME గారూ,<br /><br />
నమోదైన వాడుకరి $EDITORNAME మీ వికీలో మొదటిసారిగా మార్పు చేసినట్లుగా కనిపిస్తోంది! ఓసారి వారి <a href="$EDITORTALKPAGEURL">చర్చాపేజీకి</a>వెళ్ళి పలకరించకూడదూ?<br /><br /> 
<div style="font-style: italic; font-size: 120%;">-- వికియా బృందం</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'నమోదైన వాడుకరి మీ సైటును మార్చారు!',
	'founderemails-answers-email-page-edited-reg-user-body' => '$USERNAME గారూ,

నమోదైన వాడుకరి $EDITORNAME మీ వికీలో మార్పు చేసినట్లుగా కనిపిస్తోంది! ఓసారి వారి చర్చాపేజీకి ($EDITORTALKPAGEURL) వెళ్ళి పలకరించకూడదూ?

-- వికియా బృందం',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => '$USERNAME గారూ,<br /><br />
నమోదైన వాడుకరి $EDITORNAME మీ వికీలో మార్పు చేసినట్లుగా కనిపిస్తోంది! ఓసారి వారి <a href="$EDITORTALKPAGEURL">చర్చాపేజీకి</a>వెళ్ళి పలకరించకూడదూ?<br /><br /> 
<div style="font-style: italic; font-size: 120%;">-- వికియా బృందం</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'మీ సైటులో ఎవరో మార్పుచేర్పు చేసారు!',
	'founderemails-answers-email-page-edited-anon-body' => '$USERNAME గారూ,
ఎవరో మీ వికీలో మార్పు చేసినట్లుగా కనిపిస్తోంది! ఓసారి $MYHOMEURL కి వెళ్ళి ఏం మార్చారో చూడకూడదూ?

-- వికియా బృందం',
	'founderemails-answers-email-page-edited-anon-body-HTML' => '$USERNAME గారూ,<br /><br />
ఎవరో మీ వికీలో మార్పు చేసినట్లుగా కనిపిస్తోంది! ఓసారి <a href="$MYHOMEURL">వెళ్ళి</a> ఏం మార్చారో చూడకూడదూ?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- వికియా బృందం</div>',
	'founderemails-lot-happening-subject' => '$WIKINAME వేడెక్కుతోంది!',
	'founderemails-lot-happening-body-HTML' => '$USERNAME గారూ,<br /><br />
మీ వికీలో ఇవ్వాళ చాలా హడావుడగా ఉంది! $MYHOMEURL కి వెళ్ళి ఏం జరుగుతోందో చూడండి.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- వికియా బృందం</div>',
	'founderemails-email-lot-happening-greeting' => 'హలో $USERNAME,',
	'founderemails-email-lot-happening-headline' => 'ఇవ్వాళ $WIKINAME లో బాగా హడావుడిగా ఉంది, అభినందనలు!',
	'founderemails-email-lot-happening-signature' => 'వికియా బృందం',
	'founderemails-email-lot-happening-button' => 'కార్యకలాపాలను చూడండి',
	'founderemails-email-footer-line1' => 'వికియాలో తాజాగా ఏం జరుగుతోందో తెలుసుకోడానికి, <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a> కు వెళ్ళండి',
	'founderemails-email-0-day-heading' => 'మిమ్మల్ని కలిసినందుకు ఆనందంగా ఉంది $USERNAME గారూ,',
	'founderemails-email-0-day-congratulations' => '$HDWIKINAME సృష్టించినందుకు అభినందనలు!',
	'founderemails-email-0-day-tips-heading' => 'ముందుకు దూకేందుకు కొన్ని చిట్కాలు మీకోసం:',
	'founderemails-email-0-day-addpages-heading' => 'పేజీలను చేర్చండి.',
	'founderemails-email-0-day-addpages-button' => 'ఓ పేజీని చేర్చండి',
	'founderemails-email-0-day-addphotos-heading' => 'ఫొటోలను చేర్చండి.',
	'founderemails-email-0-day-addphotos-button' => 'ఓ ఫొటోను చేర్చు',
	'founderemails-email-0-day-customizetheme-heading' => 'మీ థీమును అనుకూలీకరించండి.',
	'founderemails-email-0-day-customizetheme-button' => 'అనుకూలీకరించు',
	'founderemails-email-0-day-wikiahelps-signature' => 'మీ వికీనిర్మాణం శుభమగుగాక!<br />వికియా బృందం',
	'founderemails-email-3-day-heading' => '$USERNAME గారూ,',
	'founderemails-email-3-day-congratulations' => '$HDWIKINAME లో పరిస్థితులు ఎలా ఉన్నాయో తెలుసుకోవాలనుకుంటున్నాం.',
	'founderemails-email-3-day-tips-heading' => 'మీరు పనిచేయడం ప్రారంభించి 3 రోజులైంది. మీ వికీని నిర్మించడంలో మేమేమైనా సహాయపడగలమేమో నని అనుకున్నాము:',
	'founderemails-email-3-day-editmainpage-heading' => 'మీ మొదటిపేజీని తీర్చిదిద్దండి.',
	'founderemails-email-3-day-editmainpage-content' => 'సందర్శకులు <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a> కి రాగానే మొదట సందర్శించేది ప్రధాన పేజీ. మీరు ఎంచుకున్న విషయం గూర్చి వివరణాత్మక సారాంశాన్ని, స్లైడ్ షో, గ్యాలరీ, లేదా ఫోటో స్లైడర్ ను ఉంచడం ద్వారా మంచి అనుభవాన్ని ఇవ్వండి.',
	'founderemails-email-3-day-editmainpage-button' => 'తీర్చిదిద్దండి',
	'founderemails-email-3-day-addphotos-heading' => 'ఇంకా కాసిని ఫొటోలను చేర్చండి.',
	'founderemails-email-3-day-addphotos-button' => 'ఫొటోలను చేర్చండి',
	'founderemails-email-3-day-explore-heading' => 'ఉత్తేజం పొందండి.',
	'founderemails-email-3-day-explore-button' => 'శోధించండి',
	'founderemails-email-3-day-wikiahelps-signature' => 'మీరు చేస్తున్న గొప్ప పనిని కొనసాగించండి!<br />వికియా బృందం',
	'founderemails-email-10-day-heading' => 'ఎలా సాగుతోంది $USERNAME గారూ?',
	'founderemails-email-10-day-congratulations' => 'ఒహ్హో, కాలం పరిగెడుతుంది! మీరు $HDWIKINAME మొదలుపెట్టి అప్పుడే పది రోజులైపోయింది.',
	'founderemails-email-10-day-share-heading' => 'పంచుకోమని అమ్మ మీకు చెప్పలేదూ?',
	'founderemails-email-10-day-email-heading' => 'ఈమెయిలు శక్తిని వాడుకోండి',
	'founderemails-email-10-day-join-heading' => 'ఇలాంటి వెబ్‍సైట్లతో జతకట్టండి',
	'founderemails-email-10-day-wikiahelps-signature' => 'మీరు చేస్తున్న గొప్ప పనిని కొనసాగించండి!<br />వికియా బృందం',
	'founderemails-email-views-digest-subject' => '$WIKINAME లో నేటి సందర్శనలు',
	'founderemails-email-views-digest-greeting' => 'ఏమండీ $USERNAMEగారూ,',
	'founderemails-email-views-digest-headline' => 'ఈరోజు $WIKINAME ను $1 {{PLURAL:$1|ఒక్కరు|మంది}} చూసారు.',
	'founderemails-email-views-digest-content' => 'కొత్త విశేషాలను జోడిస్తూ పొండి. మీ వికీకి ప్రాచుర్యం కల్పించండి. మరింత మంది చదివేలా, మార్పుచేర్పులు చేసేలా, ప్రచారం చేసేలా ప్రోత్సహించండి.',
	'founderemails-email-views-digest-signature' => 'వికియా బృందం',
	'founderemails-email-views-digest-button' => 'మరిన్ని పేజీలను చేర్చండి',
	'founderemails-email-complete-digest-subject' => '$WIKINAME లో ఇటీవలి కార్యకలాపాలు',
	'founderemails-email-complete-digest-greeting' => 'హలో $USERNAME,',
	'founderemails-email-complete-digest-headline' => 'ఇది $WIKINAME లో మీ కార్యకలాపాలు చేసుకునే సమయం.',
	'founderemails-email-complete-digest-content-heading1' => '$1 {{PLURAL:$1|వ్యక్తి|మంది}} మీ వికీని చూసారు.',
	'founderemails-email-complete-digest-content-heading2' => '$1 {{PLURAL:$1|మార్పుచేర్పు|మార్పుచేర్పులు}} చేసారు.',
	'founderemails-email-complete-digest-content-heading3' => '$1 {{PLURAL:$1|వ్యక్తి|వ్యక్తులు}} మీ వికీలో చేరారు.',
	'founderemails-email-complete-digest-signature' => 'వికియా బృందం',
	'founderemails-email-complete-digest-button' => 'వికీ కార్యకలాపాలకు వెళ్ళండి',
	'founderemails-pref-joins' => '$1 లో ఎవరైనా చేరినపుడు నాకు ఈమెయిలు పంపు',
	'founderemails-pref-edits' => '$1 లో ఎవరైనా మార్పుచేర్పులు చేసినపుడు నాకు ఈమెయిలు పంపు',
	'founderemails-pref-views-digest' => '$1 ను ఎన్నిసార్లు చూసారో ప్రతిరోజూ నాకు ఈమెయిలు పంపు',
	'founderemails-pref-complete-digest' => '$1 లో కార్యకలాపాల గురించి నాకు ప్రతిరోజూ సంగ్రహం పంపించు',
	'founderemails-pref-joins-v2' => '...ఎవరైనా చేరితే',
	'founderemails-pref-edits-v2' => '...ఎవరైనా మార్పుచేర్పులు చేస్తే',
	'founderemails-pref-views-digest-v2' => '...రోజువారీ సందర్శనల సారాంశం సిద్ధమైంది',
	'founderemails-pref-complete-digest-v2' => '...రోజువారీ చేరికలు, మార్పుచేర్పులు, సందర్శనల సంగ్రహం సిద్ధమైంది',
];

$messages['tl'] = [
	'founderemails-desc' => 'Tumutulong sa pagpapabatid sa mga tagapagtatag tungkol sa mga pagbabago sa kanilang wiki',
	'tog-founderemailsenabled' => 'Padalhan ako ng mga pagsasapanahon sa pamamagitan ng e-liham kung ano ang ginagawa ng ibang mga tao (mga tagapagtatag lamang)',
	'founderemails-email-user-registered-greeting' => 'Kumusta $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Maligayang bati! Sumali na si $EDITORNAME sa $WIKINAME.',
	'founderemails-email-user-registered-content' => 'Gamitin ang pagkakataong ito upang tanggapin sila ng malugod sa wiki mo at himukin silang tumulong sa pamamatnugot. Mas marami mas masaya, at mas mabilis na lalaki ang wiki mo.',
	'founderemails-email-user-registered-signature' => 'Ang Pangkat ng Wikia',
	'founderemails-email-user-registered-button' => 'Tanggapin Sila Nang Malugod',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => 'Mayroong isang bagong pamamatnugot ang $WIKINAME!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Kumusta $USERNAME,

Ayos! Kagagawa lamang ni $EDITORNAME ng pinaka una nilang pagbabago sa $WIKINAME.

Magpunta na sa $PAGETITLE upang matanaw kung ano ang idinagdag nila.

$PAGEURL

Ang Pangkat ng Wikia',
	'founderemails-email-first-edit-greeting' => 'Kumusta $USERNAME,',
	'founderemails-email-first-edit-headline' => 'Oo! Nakagawa na si $EDITORNAME ng pinaka una nilang pagbabago sa $WIKINAME.',
	'founderemails-email-first-edit-content' => 'Magtungo sa $PAGETITLE upang matingnan at suriin kung ano ang idinagdag nila.',
	'founderemails-email-first-edit-signature' => 'Ang Pangkat ng Wikia',
	'founderemails-email-first-edit-button' => 'Tingnan at suriin ito!',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Hoy $USERNAME,<br /><br />
Mukhang namatnugot sa wiki mo sa unang pagkakataon ang nakarehistrong tagagamit na si $EDITORNAME! Dalawin mo kaya ang kanilang <a href="$EDITORTALKPAGEURL">pahina ng usapan</a> upang mangumusta?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Ang Pangkat ng Wikia</div>',
	'founderemails-email-page-edited-reg-user-subject' => 'Bagong pamamatnugot sa $WIKINAME!',
	'founderemails-email-page-edited-reg-user-body' => 'Kumusta $USERNAME,

Kagagawa lang ni $EDITORNAME ng isa pang pagbabago sa $WIKINAME hinggil sa $PAGETITLE.

Pumunta sa $PAGETITLE upang makita kung ano ang binago nila.

$PAGEURL

Ang Pangkat ng Wikia',
	'founderemails-email-general-edit-greeting' => 'Kumusta $USERNAME,',
	'founderemails-email-general-edit-headline' => 'Gumawa si $EDITORNAME ng isa pang pamamatnugot sa $WIKINAME doon sa $PAGETITLE.',
	'founderemails-email-general-edit-content' => 'Magtungo sa $PAGETITLE upang matingnan at suriin kung ano ang idinagdag nila.',
	'founderemails-email-general-edit-signature' => 'Ang Pangkat ng Wikia',
	'founderemails-email-general-edit-button' => 'Tingnan at suriin ito!',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Hoy $USERNAME,<br /><br />
Mukhang namatnugot sa wiki mo sa unang pagkakataon ang nakarehistrong tagagamit na si $EDITORNAME! Dumalaw ka kaya sa kanilang <a href="$EDITORTALKPAGEURL">pahina ng usapan</a> upang mangumusta?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Ang Pangkat ng Wikia</div>',
	'founderemails-email-page-edited-anon-subject' => 'Isang hindi malirip na kaibigan ang namatnugot ng $WIKINAME',
	'founderemails-email-page-edited-anon-body' => 'Kumusta $USERNAME,

Isang Tagapag-ambag sa Wikia ang kagagawa pa lamang ng ng isang pagbabago sa $PAGETITLE doon sa $WIKINAME.

Ang mga Tagapag-ambag sa Wikia ay mga tao na gumagawa ng mga pagbabago na hindi lumalagdang papasok sa isang akawnt ng Wikia. Sumige at tingnan ang kung ano ang idinagdag ng hindi malirip na kaibigang ito!

$PAGEURL

Ang Pangkat ng Wikia',
	'founderemails-email-anon-edit-greeting' => 'Kumusta $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'Isang Tagapag-ambag sa Wikia ang kagagawa pa lamang ng isang pagbabago sa $PAGETITLE doon sa $WIKINAME.',
	'founderemails-email-anon-edit-content' => 'Ang mga Tagapag-ambag ng Wikia ay mga tao na gumagawa ng mga pamamatnugot na hindi lumalagdang papasok sa isang akawnt ng Wikia. Pumunta at tingnan kung ano ang idinagdag ng hindi malirip na kaibigang ito!',
	'founderemails-email-anon-edit-signature' => 'Ang Pangkat ng Wikia',
	'founderemails-email-anon-edit-button' => 'Tingnan at suriin ito!',
	'founderemails-email-page-edited-anon-body-HTML' => 'Hoy $USERNAME,<br /><br />
Mukhang mayroong isang tao na namatnugot sa wiki mo! Bakit hindi mo kaya <a href="$MYHOMEURL">siyasatin ito</a> upang makita kung ano ang nabago?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Ang Pangkat ng Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'Binago ng nakapagpatalang tagagamit ang sityo mo sa unang pagkakataon!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Hoy $USERNAME,

Mukhang ang nakarehistrong tagagamit na si $EDITORNAME ay nakapamatnugot na sa wiki mo sa unang pagkakataon! Dalawin mo kaya ang kanilang pahina ng usapan ($EDITORTALKPAGEURL) upang magsabi ng kumusta?

-- Ang Pangkat ng Wikia',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'Hoy $USERNAME,<br /><br />
Mukhang namatnugot sa wiki mo sa unang pagkakataon ang nakarehistrong tagagamit na si $EDITORNAME! Dalawin mo kaya ang kanilang <a href="$EDITORTALKPAGEURL">pahina ng usapan</a> upang mangumusta?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Ang Pangkat ng Wikia</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Binago ng nagpatalang tagagamit ang iyong sityo!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Hoy $USERNAME,

Mukhang ang nakarehistrong tagagamit na si $EDITORNAME ay namatnugot na sa wiki mo! Dalawin mo kaya ang kanilang pahina ng usapan ($EDITORTALKPAGEURL) upang bumati ng kumusta?

-- Ang Pangkat ng Wikia',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => 'Hoy $USERNAME,<br /><br />
Mukhang namatnugot sa wiki mo sa unang pagkakataon ang nakarehistrong tagagamit na si $EDITORNAME! Dumalaw ka kaya sa kanilang <a href="$EDITORTALKPAGEURL">pahina ng usapan</a> upang mangumusta?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Ang Pangkat ng Wikia</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'May tao na nagbago ng iyong sityo!',
	'founderemails-answers-email-page-edited-anon-body' => 'Hoy $USERNAME,

Mukhang mayroong isang tao na namatnugot sa wiki mo! Siyasatin mo kaya ito $MYHOMEURL upang matanaw kung ano ang nagbago?

-- Ang Pangkat ng Wikia',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Hoy $USERNAME,<br /><br />
Mukhang mayroong isang tao na namatnugot sa wiki mo! Bakit hindi mo kaya <a href="$MYHOMEURL">siyasatin ito</a> upang makita kung ano ang nabago?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Ang Pangkat ng Wikia</div>',
	'founderemails-lot-happening-subject' => 'Nag-aalab na ang $WIKINAME!',
	'founderemails-lot-happening-body' => 'Hoy $USERNAME,

Maligayang bati, marami nang nagaganap doon sa $WIKINAME, $WIKIURL.

Kung hindi pa nagagawa, makakapunta ka sa Gawain ng Wiki at tingnan ang lahat ng kahanga-hangang mga gawaing nangyayari.

Dahil sa napakarami ng mga nagaganap, maaaring nais mo ring baguhin ang iyong kanaisan ng e-liham upang maging nasa gawi ng pagbubuod. Sa pamamagitan ng pagbuhay sa gawi na nagbubuod, makakatanggap ka ng isang elektronikong liham na nagtatala ng lahat ng mga gawain sa wiki mo sa bawat isang araw.

Ang Pangkat ng Wikia',
	'founderemails-lot-happening-body-HTML' => 'Hoy $USERNAME,<br /><br />
Maraming mga nangyayari sa wiki mo ngayong araw na ito! Dumalaw sa $MYHOMEURL makita kung ano ang nagaganap.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Ang Pangkat ng Wikia</div>',
	'founderemails-email-lot-happening-greeting' => 'Kumusta $USERNAME,',
	'founderemails-email-lot-happening-headline' => 'Maligayang bati, maraming mga nagaganap doon sa $WIKINAME ngayong araw na ito!',
	'founderemails-email-lot-happening-content' => 'Kung hindi mo pa nagagawa, maaari kang pumunta sa Gawain ng Wiki at tingnan ang lahat ng dakilang mga gawain na nagaganap. Dahil mayroong napakaraming mga nangyayari, maaaring gustuhin mong baguhin ang iyong mga kanaisan ng e-liham upang maging nasa gawi ng pagbubuod. Sa pamamagitan ng pagbuhay sa gawi na nagbubuod, makakatanggap ka ng isang elektronikong liham na naglilista ng lahat ng mga gawain sa wiki mo sa bawat isang araw.',
	'founderemails-email-lot-happening-signature' => 'Ang Pangkat ng Wikia',
	'founderemails-email-lot-happening-button' => 'Tingnan Ang Mga Gawain',
	'founderemails-email-footer-line1' => 'Upang masiyasat ang pinaka huling mga kaganapan sa Wikia, dalawin ang <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>',
	'founderemails-email-footer-line2' => 'Nais mong tabanan ang tinatanggap mong mga e-liham? Pumunta sa iyong <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">Mga nais</a>',
	'founderemails-email-0-day-heading' => 'Ikinagagalak ka naming makilala $USERNAME,',
	'founderemails-email-0-day-congratulations' => 'Maligayang pagbati sa pagkakalikha ng $HDWIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'Narito ang isang mangilan-ngilang makakatulong ng mga payo upang makapagsimula ka na:',
	'founderemails-email-0-day-addpages-heading' => 'Magdagdag ng mga pahina.',
	'founderemails-email-0-day-addpages-content' => 'Ang wiki ay patungkol na lahat sa pagpapamahagi ng kabatiran hinggil sa iyong namumukod-tanging paksa. Lumikha ng mga pahina sa pamamagitan ng pagpindot sa <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">"Magdagdag ng Isang Pahina"</a> at magpuno ng mas marami pang tiyak na impormasyon hinggil sa paksa mo.',
	'founderemails-email-0-day-addpages-button' => 'Magdagdag ng isang Pahina',
	'founderemails-email-0-day-addphotos-heading' => 'Magdagdag ng mga larawan.',
	'founderemails-email-0-day-addphotos-content' => 'Palaging mas mainam ang mga pahina kapag mayroong mga pampaningin ang mga ito! Magdagdag ng mga litrato sa mga pahina mo at sa iyong pangunahing pahina. Maaari mong lagitikin ang <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"Magdagdag ng isang Litrato"</a> upang makapagdagdag ng isang litrato, ng isang galeriya ng larawan, o ng isang palabas na dumudulas.',
	'founderemails-email-0-day-addphotos-button' => 'Magdagdag ng isang Larawan',
	'founderemails-email-0-day-customizetheme-heading' => 'Ipasadya ang tema mo.',
	'founderemails-email-0-day-customizetheme-content' => 'Ipasadya ang tema at markang pananalita ng wiki mo upang maging katangi-tangi ang iyong wiki! Gamitin ang <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">Tagapagdisenyo ng Tema</a> upang makapagdagdag ng pasadyang mga kulay sa wiki mo at gawin itong bukod-tangi para sa iyong paksa.',
	'founderemails-email-0-day-customizetheme-button' => 'Ipasadya',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">Hindi ka namin iiwanang nangangatog.</span>  Naririto kami upang matulungan kang gawing matagumpay ang $WIKINAME sa bawat hakbang sa landas. Dalawin ang <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a> para sa mga porum, payo, at tulong, o upang <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">padalhan kami ng elektronikong liham</a> upang makapagtanung-tanong ka!',
	'founderemails-email-0-day-wikiahelps-signature' => 'Maligayang pagbubuo ng wiki!<br />Ang Pangkat ng Wikia',
	'founderemails-email-3-day-heading' => 'Kumusta ka $USERNAME,',
	'founderemails-email-3-day-congratulations' => 'Nais sana naming mangumusta at tingnan kung ano na ba ang kalagayan ng mga bagay-bagay doon sa $HDWIKINAME.',
	'founderemails-email-3-day-tips-heading' => '3 mga araw na ang nakalilipas magmula nang magsimula ka at naisip naming dumalaw upang mag-alok ng ilan pang mga payo hinggil sa pagbubuo ng wiki mo:',
	'founderemails-email-3-day-editmainpage-heading' => 'Linisin ang iyong pangunahing pahina.',
	'founderemails-email-3-day-editmainpage-content' => 'Isa ang pangunahing pahina sa unang mga bagay na makikita ng mga tao kapag dumadalaw sila sa <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a>. Gumawa ng isang mabuting unang kakintalan sa pamamagitan ng pagsusulat ng isang madetalyeng buod ng kung sa ano patungkol ang paksa mo at pagdaragdag ng isang palabas na dumudulas, galeriya, o pampadulas ng litrato.',
	'founderemails-email-3-day-editmainpage-button' => 'Linisin Ito',
	'founderemails-email-3-day-addphotos-heading' => 'Magdagdag ng mas marami pang mga litrato.',
	'founderemails-email-3-day-addphotos-content' => 'Isa sa pinaka mabisang mga paraan upang magawang lumagitik, kumaluskos, at lumagutok ang mga pahina mo ay ang <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"magdagdag ng ilang mga litrato"</a>.',
	'founderemails-email-3-day-addphotos-button' => 'Magdagdag ng mga Litrato',
	'founderemails-email-3-day-explore-heading' => 'Maghanap ng pamukaw-sigla.',
	'founderemails-email-3-day-explore-content' => 'Huwag matakot na siyasatin ang iba pang mga wiki upang makita kung paano nila naitatag ang kanilang pangunahing pahina, mga pahina ng artikulo at marami pang iba. Naririto ang ilan sa aming mga kinagigiliwan: <a style="color:#2a87d5;text-decoration:none;" href="http://muppets.wikia.com">Muppet Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://poptarts.wikia.com">Pop Tarts Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://monsterhigh.wikia.com">Monster High Wiki</a>.',
	'founderemails-email-3-day-explore-button' => 'Manggalugad',
	'founderemails-email-3-day-wikiahelps-text' => 'Nangangailangan ng tulong sa pag-alam kung paano gumagana ang isang bagay? Palagi kaming naririto para sa iyo! Halika at humingi sa amin ng tulong at payo roon sa <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-3-day-wikiahelps-signature' => 'Ipagpatuloy ang mahusay na gawain!<br />Ang Pangkat ng Wikia',
	'founderemails-email-10-day-heading' => 'Kumusta ka na ba $USERNAME?',
	'founderemails-email-10-day-congratulations' => 'Aba, ang bilis talaga ng panahon! 10 araw na pala ang nakalipas magmula noong simulan mo ang $HDWIKINAME.',
	'founderemails-email-10-day-tips-heading' => 'Hikayatin ang ibang mga tao na makisangkot sa proyekto mo at at ipagmagaling ang lahat ng kagila-gilalas na mga gawaing ginagawa mo! Narito ang ilang mga paraan upang maikalat ang balita:',
	'founderemails-email-10-day-share-heading' => 'Hindi ka ba pinagsabihan ng nanay mo Magpamahagi?',
	'founderemails-email-10-day-share-content' => 'Gamitin ang pindutang Ibahagi na nasa ibabaw ng pangunahing pahina ng wiki mo, mga artikulo ng pahina at mga larawan upang ipagmagaling ang mga ito sa mga kaibigan at mga tagasunod mo sa Facebook.',
	'founderemails-email-10-day-email-heading' => 'Gamitin ang kapangyarihan ng elektronikong liham.',
	'founderemails-email-10-day-email-content' => 'Magpadala ng elektronikong liham sa iba mo pang mga kakilala na mahiligin sa iyong paksa o nagnanais na makatulong sa iyo, katulad ng isang kaibigan mula sa paaralan o isang kasamahan sa hanapbuhay. Maaari ka ring magpadala ng partikular na mga litrato sa pamamagitan ng elektronikong liham magmula sa wiki mo na ginagamit ang pindutan ng e-liham',
	'founderemails-email-10-day-join-heading' => 'Makiisa sa kahalintulad na mga pook sa sangkasaputan.',
	'founderemails-email-10-day-join-content' => 'Humingi ng tulong sa mga tao na nasa ibang mga porum o websayt na patungkol sa paksa mo sa pamamagitan ng pagpapaskil sa loob ng mga porum nila o mga puna. Kung maaari, makipag-ugnayan sa tagapangasiwa at tingnan kung nanaisin nila ang pagsasalo ng kawing &mdash; ilalagay nila ang iyong kawing ng wiki sa kanilang websayt kung ilalagay mo ang kanilang kawing sa iyong wiki.',
	'founderemails-email-10-day-wikiahelps-text' => 'Maaari mo ring hilingin sa iba pang mga Wikidista na tumulong sa wiki mo sa pamamagitan ng pagpapaskil sa loob ng mga porum na nasa <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-10-day-wikiahelps-signature' => 'Ipagpatuloy ang mabuting gawain!<br />Ang Pangkat ng Wikia',
	'founderemails-email-views-digest-subject' => 'Ang mga pagtingin sa $WIKINAME ngayong araw na ito',
	'founderemails-email-views-digest-body' => 'Hoy $USERNAME,

Ngayon araw na ito, ang $WIKINAME ay tiningnan ng $1 {{PLURAL:$1|tao|mga tao}}.

Magpatuloy sa pagdaragdag ng bagong nilalaman at sa pagtataguyod ng wiki mo upang mahikayat na magbasa, mamatnugot, at magpakalat ng balita ang mas marami pang mga tao.

$WIKIURL

Ang Pangkat ng Wikia',
	'founderemails-email-views-digest-greeting' => 'Kumusta $USERNAME,',
	'founderemails-email-views-digest-headline' => 'Ngayon araw na ito, si $WIKINAME ay tiningnan ng $1 {{PLURAL:$1|tao|mga tao}}.',
	'founderemails-email-views-digest-content' => 'Magpatuloy sa pagdaragdag ng bagong nilalaman at pagtataguyod ng wiki mo upang mahikayat ang mas marami pang mga tao na magbasa, mamatnugot at magpakalat ng balita.',
	'founderemails-email-views-digest-signature' => 'Ang Pangkat ng Wikia',
	'founderemails-email-views-digest-button' => 'Magdagdag ng mas marami pang mga pahina',
	'founderemails-email-complete-digest-subject' => 'Ang pinakahuling paggalaw sa $WIKINAME',
	'founderemails-email-complete-digest-body' => 'Kumusta $USERNAME,

Panahon na para sa iyong pang-araw-araw na dosis ng gawain mula sa $WIKINAME, $WIKIURL.

$1 {{PLURAL:$1|tao|mga tao}} ang tumingin sa wiki mo.

Ipagpatuloy ang kahanga-hangang gawain ng pagdaragdag ng kahali-halinang nilalaman na mababasa ng mga tao!

$2 {{PLURAL:$2|pamamatnugot|mga pamamatnugot}} ang nagawa.

Ang masasayang mga wiki ay nakagagawa ng maliligayang mga wiki. Tiyakin na pasasalamat mo ang iyong mga patnugot at pana-panahong kukumustahin sila.

$3 {{PLURAL:$3|tao|mga tao}} ang sumali sa wiki.

Tanggapin nang malugod sa wiki mo ang bagong mga tao sa pamamagitan ng isang mensahe sa pahina ng pakikipag-usap.

Palagi kang makakapunta sa gawain ng wiki upang matanaw ang lahat ng nakakapukaw na mga pagbabagong ginagawa sa $WIKINAME. Mangumusta nang madalas, bilang tagapatatag tinatanaw ka ng iyong pamayanan na makakatulong sa paggabay at pagpapatakbo ng wiki.

Ang Pangkat ng Wikia',
	'founderemails-email-complete-digest-greeting' => 'Kumusta $USERNAME,',
	'founderemails-email-complete-digest-headline' => 'Oras na para sa iyong pang-araw-araw na dosis ng gawain mula sa $WIKINAME.',
	'founderemails-email-complete-digest-content-heading1' => '$1 {{PLURAL:$1|tao|mga tao}} ang tumingin sa wiki mo.',
	'founderemails-email-complete-digest-content1' => 'Ipagpatuloy ang mahusay na gawain ng pagdaragdag ng kahali-halinang nilalaman na mababasa ng mga tao!',
	'founderemails-email-complete-digest-content-heading2' => '$1 {{PLURAL:$1|pamamatnugot ang|mga pamamatnugot ang}} nagawa.',
	'founderemails-email-complete-digest-content2' => 'Ang maliligayang mga patnugot ay gumagawa ng kasiya-siyang mga wiki. Tiyakin na mapasalamatan ang mga patnugot mo at makipag-ugnayan sa kanila sa pana-panahon.',
	'founderemails-email-complete-digest-content-heading3' => '$1 {{PLURAL:$1|tao|mga tao}} ang sumali sa wiki mo.',
	'founderemails-email-complete-digest-content3' => 'Malugod na tanggapin ang bagong mga tao sa iyong wiki sa pamamagitan ng isang mensahe sa pahina ng usapan.
<br /><br />
Palagi kang makakapunta sa gawain ng wiki upang makita ang lahat ng nakakapukaw na mga pagbabagong ginagawa sa $WIKINAME. Mangumusta nang madalas, bilang tagapagtatag ng pamayanan mo, tinatanaw ka ng pamayanan mo na tutulong sa pagpatnubay at pagpapatakbo ng wiki.',
	'founderemails-email-complete-digest-signature' => 'Ang Pangkat ng Wikia',
	'founderemails-email-complete-digest-button' => 'Pumunta sa gawain ng wiki',
	'founderemails-pref-joins' => 'Padalhan ako ng e-liham kapag sumali ang isang tao sa $1',
	'founderemails-pref-edits' => 'Padalhan ako ng e-liham kapag may isang tao na namatnugot ng $1',
	'founderemails-pref-views-digest' => 'Padalhan ako ng isang pang-araw-araw na e-liham na nagsasabi sa akin kung ilang ulit na natingnan ang $1',
	'founderemails-pref-complete-digest' => 'Padalhan ako ng isang pang-araw-araw na buod ng gawain sa $1',
	'founderemails-pref-joins-v2' => '...sumali ang isang tao',
	'founderemails-pref-edits-v2' => '...namamatnugot ang isang tao',
	'founderemails-pref-views-digest-v2' => '...nakahanda na ang isang pang-araw-araw na buod ng kabuuang mga pagtanaw',
	'founderemails-pref-complete-digest-v2' => '...nakahanda na ang isang Pang-araw-araw na Buod ng mga pagsali, mga pamamatnugot, at mga pagtanaw',
];

$messages['tr'] = [
	'founderemails-email-lot-happening-greeting' => 'Merhaba $USERNAME,',
	'founderemails-email-lot-happening-signature' => 'Wikia Takımı',
	'founderemails-email-lot-happening-button' => 'Etkinlikleri Gör',
	'founderemails-email-0-day-addpages-heading' => 'Sayfaları ekle.',
	'founderemails-email-0-day-addpages-button' => 'Bir Sayfa Ekle',
	'founderemails-email-0-day-addphotos-heading' => 'Fotoğraf ekle',
	'founderemails-email-0-day-addphotos-button' => 'Bir Fotoğraf Ekle',
	'founderemails-email-0-day-customizetheme-heading' => 'Temanızı özelleştirin.',
];

$messages['tt-cyrl'] = [
	'founderemails-email-user-registered-signature' => 'Викия берләшмәсе',
	'founderemails-email-lot-happening-button' => 'Эшчәнлекне карау',
	'founderemails-email-0-day-customizetheme-button' => 'Көйләү',
];

$messages['tyv'] = [
];

$messages['uk'] = [
	'founderemails-desc' => 'Допомагає інформувати засновників про зміни на їхніх вікі',
	'tog-founderemailsenabled' => 'Надсилати мені листи про зміни, зроблені іншими користувачами (тільки для адміністраторів вікі)',
	'founderemails-email-user-registered-greeting' => 'Привіт, $USERNAME!',
	'founderemails-email-user-registered-headline' => 'Користувач $EDITORNAME щойно приєднався до $WIKINAME.',
	'founderemails-email-user-registered-content' => 'Скористайтеся цією можливістю, щоб привітати його на вашій вікі і закликати допомогти вам із написанням нових статей. Чим більше нових учасників, тим краще, і тим швидше зростатиме ваша вікі.',
	'founderemails-email-user-registered-signature' => 'Команда Вікії',
	'founderemails-email-user-registered-button' => 'Привітати його',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => 'На $WIKINAME з\'явився новий редактор!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Привіт, $USERNAME!

Користувач $EDITORNAME щойно зробив своє перше редагування на $WIKINAME.

Зайдіть на сторінку $PAGETITLE, щоб переглянути, що було змінено:

$PAGEURL

Команда Wikia',
	'founderemails-email-first-edit-greeting' => 'Привіт, $USERNAME,',
	'founderemails-email-first-edit-headline' => '$EDITORNAME щойно зробив своє перше редагування на $WIKINAME.',
	'founderemails-email-first-edit-content' => 'Зайдіть на сторінку $PAGETITLE, щоб переглянути, що було змінено.',
	'founderemails-email-first-edit-signature' => 'Команда Вікія',
	'founderemails-email-first-edit-button' => 'Переглянути',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Привіт, $USERNAME.<br /><br />
Здається, що учасник $EDITORNAME здійснив перше редагування на вашій вікі! Чому б вам не привітати його на <a href="$EDITORTALKPAGEURL">сторінці обговорення</a>і не сказати привіт?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Команда Вікія</div>',
	'founderemails-email-page-edited-reg-user-subject' => 'Нове редагування на $WIKINAME',
	'founderemails-email-page-edited-reg-user-body' => 'Привіт, $USERNAME!

Користувач $EDITORNAME щойно зробив ще одне редагування на сторінці $PAGETITLE на $WIKINAME.

Перейдіть до сторінки $PAGETITLE, щоб переглянути, що було змінено:

$PAGEURL

Команда Вікія',
	'founderemails-email-general-edit-greeting' => 'Привіт, $USERNAME!',
	'founderemails-email-general-edit-headline' => 'Користувач $EDITORNAME щойно зробив нове редагування у $WIKINAME на сторінці $PAGETITLE.',
	'founderemails-email-general-edit-content' => 'Зайдіть на сторінку $PAGETITLE, щоб переглянути, що було змінено.',
	'founderemails-email-general-edit-signature' => 'Команда Вікія',
	'founderemails-email-general-edit-button' => 'Перейти',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Привіт, $USERNAME.<br /><br />
Здається, що зареєстрований користувач $EDITORNAME вніс зміни у вашу вікі! Чому б вам не привітати його на <a href="$EDITORTALKPAGEURL">сторінці обговорення</a> і не сказати привіт?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Команда Вікія</div>',
	'founderemails-email-page-edited-anon-subject' => 'Анонімний користувач відредагував $WIKINAME',
	'founderemails-email-page-edited-anon-body' => 'Привіт $USERNAME,

Незареєстрований користувач щойно здійсни редагування  для $WIKINAME на $PAGETITLE.

Незареєстровані користувачі - це люди, які роблять правки без входу в обліковий запис Вікія. Перегляньте, що додав цей таємний друг!

$PAGEURL

Команда Вікія',
	'founderemails-email-anon-edit-greeting' => 'Привіт $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'Незареєстрований користувач щойно зробив правку для $WIKINAME на $PAGETITLE.',
	'founderemails-email-anon-edit-content' => 'Анонімні учасники - це користувачі, які роблять редагування без входу в систему з облікового запису Вікія. Подивіться, що додав цей таємничий друг!',
	'founderemails-email-anon-edit-signature' => 'Команда Вікія',
	'founderemails-email-anon-edit-button' => 'Перейти',
	'founderemails-email-page-edited-anon-body-HTML' => 'Привіт, $USERNAME.<br /><br />

Здається, що хтось вніс правки у вашу вікі! Чому б вам <a href="$MYHOMEURL">не перевірити,</a> що змінено?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Команда Вікія</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'Зареєстрований користувач змінив ваш сайт вперше!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Привіт, $USERNAME.

Здається, що зареєстрований користувач $EDITORNAME зробив перше редагування на вашій вікі! Чому б вам не привітати його на сторінці обговорення ($EDITORTALKPAGEURL) і не сказати привіт?

-- Команда Вікія',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'Привіт, $USERNAME.<br /><br />
Здається, що учасник $EDITORNAME здійснив перше редагування на вашій вікі! Чому б вам не привітати його на <a href="$EDITORTALKPAGEURL">сторінці обговорення</a>і не сказати привіт?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Команда Вікія</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Зареєстрований користувач відредагував ваш сайт!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Привіт, $USERNAME.

Здається, що зареєстрований користувач $EDITORNAME зробив перше редагування на вашій вікі! Чому б вам не привітати його на сторінці обговорення ($EDITORTALKPAGEURL) і не сказати привіт?

-- Команда Вікія',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => 'Привіт, $USERNAME.<br /><br />
Здається, що зареєстрований користувач $EDITORNAME вніс зміни у вашу вікі! Чому б вам не привітати його на <a href="$EDITORTALKPAGEURL">сторінці обговорення</a> і не сказати привіт?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Команда Вікія</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'Анонімний користувач відредагував ваш сайт!',
	'founderemails-answers-email-page-edited-anon-body' => 'Привіт, $USERNAME.

Здається, що хтось зробив правку на вашій вікі! Чому б вам не поглянути, що змінено ним ($MYHOMEURL)?

-- Команда Вікія',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Привіт, $USERNAME.<br /><br />

Здається, що хтось вніс правки у вашу вікі! Чому б вам <a href="$MYHOMEURL">не перевірити,</a> що змінено?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Команда Вікія</div>',
	'founderemails-lot-happening-subject' => '$WIKINAME розігрівається!',
	'founderemails-lot-happening-body' => 'Привіт $USERNAME,

Вітаємо! Дуже багато всього відбувалося сьогодні на $WIKINAME, $WIKIURL!

Якщо ви ще не перевірили це, то ви можете перейти на сторінку Вікі-діяльності, щоб побачити всю ту велику роботу, яка сталася.

Оскільки так багато всього відбувається, вам може знадобитися змінити налаштування електронної пошти в режим звіту. У режимі звіту ви будете отримувати тільки один лист, в якому буде перерахована вся активність на вашій вікі за кожен день.

команда Вікія',
	'founderemails-lot-happening-body-HTML' => 'Привіт, $USERNAME.<br /><br />
Сьогодні на вашому сайті відбулося багато подій! Погляньте на $MYHOMEURL, щоб переглянути усе, що відбулося.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Команда Вікія</div>',
	'founderemails-email-lot-happening-greeting' => 'Привіт $USERNAME,',
	'founderemails-email-lot-happening-headline' => 'Вітаємо! Дуже багато відбувається на $WIKINAME сьогодні!',
	'founderemails-email-lot-happening-content' => 'Якщо ви ще не перевірили це, то ви можете перейти на сторінку Вікі-діяльності, щоб побачити всю ту велику роботу, яка сталася. Оскільки так багато всього відбувається, вам може знадобитися змінити налаштування електронної пошти в режим дайджесту. У дайджест режимі ви будете отримувати тільки один лист, в якому буде перерахована вся активність на вашій вікі за кожен день.',
	'founderemails-email-lot-happening-signature' => 'Команда Вікія',
	'founderemails-email-lot-happening-button' => 'Побачити діяльність',
	'founderemails-email-footer-line1' => 'Щоб дізнатися про останні події на Wikia, відвідайте <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>',
	'founderemails-email-footer-line2' => 'Хочете контролювати повідомлення, які ви отримуєте? Перейдіть на <a href="{{fullurl:{{ns:special}}:Установки}}" style="color:#2a87d5;text-decoration:none;">Налаштування</a>',
	'founderemails-email-0-day-heading' => 'Приємно познайомитися з вами, $USERNAME,',
	'founderemails-email-0-day-congratulations' => 'Вітаємо зі створенням $HDWIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'Нижче наведено кілька корисних порад, щоб ви почали.',
	'founderemails-email-0-day-addpages-heading' => 'Додайте сторінки.',
	'founderemails-email-0-day-addpages-content' => 'Вікі призначена для обміну інформацією про вашу унікальної темі. Створюйте сторінки, натиснувши на посилання <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL"> "Додати сторінку" </ a>, і заповніть їх докладною інформацією про вашу тему.',
	'founderemails-email-0-day-addpages-button' => 'Додати сторінку',
	'founderemails-email-0-day-addphotos-heading' => 'Додайте фотографії.',
	'founderemails-email-0-day-addphotos-content' => 'Сторінки завжди краще виглядають, коли на них є візуальні ефекти! Додайте зображення на ваші сторінки і на головну сторінку. Натисніть <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL"> "Додати фото" </ a> для додавання зображень, фотогалереї або показу слайдів.',
	'founderemails-email-0-day-addphotos-button' => 'Додати фото',
	'founderemails-email-0-day-customizetheme-heading' => 'Налаштуйте вашу тему',
	'founderemails-email-0-day-customizetheme-content' => 'Налаштування теми та логотипу дозволить вашій вікі виділитися! Використовуйте <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL"> Конструктор тем </ a> і налаштуйте кольори вашої вікі, щоб зробити її унікальними лише для вашої вікі.',
	'founderemails-email-0-day-customizetheme-button' => 'Налаштувати',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold"> Ми не залишимо вас одного. </ span> Ми тут, щоб допомогти вам зробити кожен крок шляху $WIKINAME успішним. Відвідайте <a style = "color: # 2a87d5; text-decoration: none;" href = "https://community.fandom.com </ a>, де можна знайти форум, поради та допомогу, або <a style =" color: # 2a87d5; text-decoration: none; "href =" http://www.wikia.com/Special:Contact "> напишіть нам </ a> ваші запитання!',
	'founderemails-email-0-day-wikiahelps-signature' => 'Щасливого вікібудівництва!<br />Команда Вікія',
	'founderemails-email-3-day-heading' => 'Привіт $USERNAME,',
	'founderemails-email-3-day-congratulations' => 'Ми хотіли перевірити і подивитися, як йдуть справи на$HDWIKINAME.',
	'founderemails-email-3-day-tips-heading' => 'Минуло 3 дні, як ви почали, і ми подумали, що могли б запропонувати ще кілька порад щодо створення вікі:',
	'founderemails-email-3-day-editmainpage-heading' => 'Прикрасьте вашу головну сторінку.',
	'founderemails-email-3-day-editmainpage-content' => 'Головна сторінка є однією з перших сторінок, яку люди бачать, коли вони відвідують <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;"> $ WIKINAME </ a>. Створіть хороше перше враження, написавши докладно про вашу тему, додайте показ слайдів, галерею або повзунок.',
	'founderemails-email-3-day-editmainpage-button' => 'Продовжуйте в цьому дусі',
	'founderemails-email-3-day-addphotos-heading' => 'Додати ще більше фотографій.',
	'founderemails-email-3-day-addphotos-content' => 'Один з кращих способів зробити ваші сторінки цікавішими - це натиснути на посилання <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL"> "додати фото" </ a>.',
	'founderemails-email-3-day-addphotos-button' => 'Додати фотографії',
	'founderemails-email-3-day-explore-heading' => 'Знайдіть натхнення.',
	'founderemails-email-3-day-explore-content' => 'Не бійтеся подивитися на інші вікі, щоб дізнатися, як їх учасники працювали над своєю головною сторінкою, сторінками статей та іншими сторінками. Ось деякі з хороших вікі: <a style="color:#2a87d5;text-decoration:none;" href="http://muppets.wikia.com"> Muppet Wiki </ a>, a style = "color: # 2a87d5; text-decoration: none; "href =" http://poptarts.wikia.com "> Pop Tarts Wiki </ a>, <a style =" color: # 2a87d5; text-decoration: none; "href = "http://monsterhigh.wikia.com"> Monster High Wiki </ a>.',
	'founderemails-email-3-day-explore-button' => 'Пізнати',
	'founderemails-email-3-day-wikiahelps-text' => 'Потрібна допомога, роз\'яснити, як щось працює? Ми завжди тут! Зверніться до нас за допомогою і порадою на <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com"> community.fandom.com </ a>.',
	'founderemails-email-3-day-wikiahelps-signature' => 'Продовжуйте велику роботу!<br /> Команда Вікія',
	'founderemails-email-10-day-heading' => 'Як справи $USERNAME?',
	'founderemails-email-10-day-congratulations' => 'Час швидко біжить! Уже минуло 10 днів відтоді, як ви створили $WIKINAME.',
	'founderemails-email-10-day-tips-heading' => 'Залучіть до свого проекту інших учасників і покажіть їм роботу, яку ви вже зробили! Ось декілька способів розповісти про свою вікі:',
	'founderemails-email-10-day-share-heading' => 'Не забули, що потрібно ділитися?',
	'founderemails-email-10-day-share-content' => 'Використовуйте кнопку Поділитися на головній сторінці вашої вікі, сторінках статті і фотографіях, щоб показати їх друзям на Facebook.',
	'founderemails-email-10-day-email-heading' => 'Використовуйте можливості електронної пошти.',
	'founderemails-email-10-day-email-content' => 'Відправте електронні листи тим, хто ви знаєте точно зацікавлений у темі вашої вікі або хоче допомогти вам, наприклад друг зі школи або колега. Ви можете також відіслати певні фотографії з вашої вікі за допомогою кнопки Електронна пошта',
	'founderemails-email-10-day-join-heading' => 'Разом з схожими веб-сайтами.',
	'founderemails-email-10-day-join-content' => 'Попросіть людей на форумах або веб-сайтах, близьких по тематиці з вашої вікі, про допомогу, розмістивши повідомлення на форумах або в коментарях. Якщо можливо, зв\'яжіться з адміністратором і перевірте, чи не зацікавлений він в обміні посиланнями - вони помістять посилання на вашу вікі на своєму веб-сайті, а ви на своїй вікі - на їх веб-сайт.',
	'founderemails-email-10-day-wikiahelps-text' => 'Ви також можете попросити допомогти учасників інших вікі, розмістивши повідомлення на форумі <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com"> community.fandom.com </ a>.',
	'founderemails-email-10-day-wikiahelps-signature' => 'Продовжуйте велику роботу!<br /> Команда Вікія',
	'founderemails-email-views-digest-subject' => 'Сьогоднішні перегляди на $WIKINAME',
	'founderemails-email-views-digest-body' => 'Привіт $USERNAME,

Сьогодні $WIKINAME була переглянута $1 {{PLURAL:$1| людиною|людьми}}.

Додавайте новий вміст і просувайте вашу вікі, щоб заохотити ще більше число людей до читання, редагування і просування вікі.

$WIKIURL

команда Вікія',
	'founderemails-email-views-digest-greeting' => 'Привіт $USERNAME,',
	'founderemails-email-views-digest-headline' => 'Сьогодні $WIKINAME {{PLURAL:$1|переглянула $1 людина|переглянули $1 людини|переглянуло $1 людей}}.',
	'founderemails-email-views-digest-content' => 'Додавайте новий вміст і просувайте вашу вікі, щоб заохотити ще більше число людей до читання, редагування і просування вікі.',
	'founderemails-email-views-digest-signature' => 'Команда Вікія',
	'founderemails-email-views-digest-button' => 'Додати більше сторінок',
	'founderemails-email-complete-digest-subject' => 'Останні дії на $WIKINAME',
	'founderemails-email-complete-digest-body' => 'Привіт $USERNAME,

Прийшов час для того, щоб дізнатися щоденну активність на $WIKINAME, $WIKIURL.

$1 {{PLURAL:$1|людина переглянула|людини переглянули|людей переглянуло}}  вашу вікі.

Продовжуйте робити величезну роботу, додаючи цікавий вміст, який люди могли б читати!

$2 {{PLURAL:$2|правка була зроблена|правки були зроблені|правок було зроблено}}.

Щасливі редактори створюють щасливі вікі. Не забудьте подякувати вашим редакторам і спілкуйтеся з ними час від часу.

$3 {{PLURAL:$3|особа приєдналася|особи приєдналися|осіб  приєдналося}} до вашої вікі.

Вітайте нових людей на вашій вікі, залишаючи повідомлення на їхніх сторінках обговорення.

Ви завжди можете зайти на сторінку Вікі-діяльності, щоб переглянути всі важливі зміни на $WIKINAME. Робіть це якомога частіше, бо ви - засновник, і ваша спільнота очікує, що ви будете направляти розвиток вікі і просувати її.

Команда Вікія',
	'founderemails-email-complete-digest-greeting' => 'Привіт, $USERNAME,',
	'founderemails-email-complete-digest-headline' => 'Настав час для вашої щоденної діяльності з $WIKINAME.',
	'founderemails-email-complete-digest-content-heading1' => '$1 {{PLURAL:$1|людина переглянула|людини переглянули|людей переглянули}} ваше вікі.',
	'founderemails-email-complete-digest-content1' => 'Продовжуйте робити величезну роботу, додаючи додаючи цікавий вміст, який люди могли б читати!',
	'founderemails-email-complete-digest-content-heading2' => '$1  {{PLURAL:$1|редагування зроблене|редагування зроблені|редагувань зроблено}}.',
	'founderemails-email-complete-digest-content2' => 'Щасливі редактори створюють щасливі вікі. Не забудьте подякувати ваших редакторів і спілкуйтеся з ними час від часу.',
	'founderemails-email-complete-digest-content-heading3' => '$1 {{PLURAL:$1|особа приєдналася|особи приєдналися|осіб приєдналося}} до вашого вікі.',
	'founderemails-email-complete-digest-content3' => 'Вітайте нових людей на вашій вікі, залишаючи повідомлення на їхніх сторінках обговорення.
<br /> <br />
Ви завжди можете зайти на сторінку Вікі-діяльності, щоб переглянути всі важливі зміни на $WIKINAME. Робіть це якомога частіше, бо ви - засновник, і ваша співльнота очікує, що ви будете направляти розвиток вікі і просувати її.',
	'founderemails-email-complete-digest-signature' => 'Команда Вікії',
	'founderemails-email-complete-digest-button' => 'Переглянути вікі-активність',
	'founderemails-pref-joins' => 'Сповіщати мене, коли хтось реєструється на  $1',
	'founderemails-pref-edits' => 'Сповіщати мене, коли хтось редагує  $1',
	'founderemails-pref-views-digest' => 'Надсилати мені щоденний звіт про кількість переглядів $1',
	'founderemails-pref-complete-digest' => 'Надсилати мені щоденний звіт діяльності на $1',
	'founderemails-pref-joins-v2' => '...хтось зареєструвався на вікі',
	'founderemails-pref-edits-v2' => '...хтось зробив редагування на вікі',
	'founderemails-pref-views-digest-v2' => '...щоденний звіт про усіх відвідувачів вікі буде готовий',
	'founderemails-pref-complete-digest-v2' => '...щоденний звіт про нових учасників вікі, редагування та перегляди буде готовий',
];

$messages['vi'] = [
	'founderemails-desc' => 'Giúp thông báo cho sáng lập viên về những thay đổi trên wiki của họ',
	'tog-founderemailsenabled' => 'Gửi thư điện tử cập nhật cho tôi về hoạt động của mọi người (chỉ dành cho sáng lập viên)',
	'founderemails-email-user-registered-greeting' => 'Chào $USERNAME,',
	'founderemails-email-user-registered-headline' => 'Xin chúc mừng! $EDITORNAME đã tham gia $WIKINAME.',
	'founderemails-email-user-registered-content' => 'Hãy nhân cơ hội này để chào đón họ đến wiki của bạn và khuyến khích họ trợ giúp sửa đổi. Càng nhiều càng tốt, wiki của bạn sẽ phát triển nhanh hơn.',
	'founderemails-email-user-registered-signature' => 'Wikia Team',
	'founderemails-email-user-registered-button' => 'Chào đón họ',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '$WIKINAME đã có một sửa đổi mới!',
	'founderemails-email-page-edited-reg-user-first-edit-body' => 'Chào $USERNAME,

Wiki của bạn đã được $EDITORNAME tạo ra sửa đổi đầu tiên trên $WIKINAME.

Ghé qua $PAGETITLE để kiểm tra những gì họ thêm vào.

$PAGEURL

Wikia Team',
	'founderemails-email-first-edit-greeting' => 'Chào $USERNAME,',
	'founderemails-email-first-edit-headline' => 'Thành viên $EDITORNAME đã có những sửa đổi đầu tiên trên $WIKINAME.',
	'founderemails-email-first-edit-content' => 'Ghé qua $PAGETITLE để kiểm tra người bạn này sửa đổi gì nào!',
	'founderemails-email-first-edit-signature' => 'Wikia Team',
	'founderemails-email-first-edit-button' => 'Kiểm tra ngay!',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => 'Chào $USERNAME,<br /><br />
Trông giống như $EDITORNAME đã đăng ký tài khoản tại wiki của bạn và tạo ra lần sửa đổi đầu tiên! Tại sao bạn không ghé qua <a href="$EDITORTALKPAGEURL">trang thảo luận</a> của họ để gửi lời chào nhỉ?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia Team</div>',
	'founderemails-email-page-edited-reg-user-subject' => 'Sửa đổi mới trên $WIKINAME!',
	'founderemails-email-page-edited-reg-user-body' => 'Chào $USERNAME,

$EDITORNAME đã có những sửa đổi khác trên $WIKINAME ở trang $PAGETITLE.

Ghé qua $PAGETITLE để xem những gì họ vừa thay đổi.

$PAGEURL

Wikia Team',
	'founderemails-email-general-edit-greeting' => 'Chào $USERNAME,',
	'founderemails-email-general-edit-headline' => '$EDITORNAME đã có những sửa đổi khác trên $WIKINAME ở trang $PAGETITLE.',
	'founderemails-email-general-edit-content' => 'Ghé qua $PAGETITLE để xem những gì họ vừa thay đổi.',
	'founderemails-email-general-edit-signature' => 'Wikia Team',
	'founderemails-email-general-edit-button' => 'Kiểm tra ngay!',
	'founderemails-email-page-edited-reg-user-body-HTML' => 'Chào $USERNAME,<br /><br />
Trông giống như $EDITORNAME đã đăng ký tài khoản tại wiki của bạn và tạo ra sửa đổi! Tại sao bạn không ghé qua <a href="$EDITORTALKPAGEURL">trang thảo luận</a> của họ để gửi lời chào nhỉ?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia Team</div>',
	'founderemails-email-page-edited-anon-subject' => 'Một người lạ đã sửa đổi $WIKINAME',
	'founderemails-email-page-edited-anon-body' => 'Chào $USERNAME,

Một thành viên vô danh đã tạo ra sửa đổi đầu tiên ở trang $PAGETITLE trên $WIKINAME.

Thành viên vô danh là những người dùng tạo ra sửa đổi nhưng không đăng nhập. Đến xem người lạ này đã thêm gì nào!

$PAGEURL

Wikia Team',
	'founderemails-email-anon-edit-greeting' => 'Chào $USERNAME,',
	'founderemails-email-anon-edit-headline' => 'Một người dùng vô danh đã tạo ra sửa đổi đầu tiên ở trang $PAGETITLE trên $WIKINAME.',
	'founderemails-email-anon-edit-content' => 'Người dùng vô danh Wikia là những người dùng chưa đăng nhập tài khoản tạo ra sửa đổi. Đến xem người bạn lạ này đã thêm gì vào!',
	'founderemails-email-anon-edit-signature' => 'Wikia Team',
	'founderemails-email-anon-edit-button' => 'Kiểm tra ngay!',
	'founderemails-email-page-edited-anon-body-HTML' => 'Chào $USERNAME,<br /><br />
Trông giống như $USERNAME đã đăng ký tài khoản tại wiki của bạn và tạo ra sửa đổi! Tại sao bạn không <a href="$MYHOMEURL">kiểm tra</a> để xem thay đổi thế nào nhỉ?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia Team</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => 'Thành viên đăng ký đã thay đổi wiki của bạn đầu tiên!',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Chào $USERNAME,

Trông giống như $EDITORNAME đã đăng ký tài khoản tại wiki của bạn và tạo ra lần sửa đổi đầu tiên! Tại sao bạn không ghé qua trang thảo luận của họ ($EDITORTALKPAGEURL) để gửi lời chào nhỉ?

-- Wikia Team',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => 'Chào $USERNAME,<br /><br />
Trông giống như $EDITORNAME đã đăng ký tài khoản tại wiki của bạn và tạo ra lần sửa đổi đầu tiên! Tại sao bạn không ghé qua <a href="$EDITORTALKPAGEURL">trang thảo luận</a> của họ để gửi lời chào nhỉ?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia Team</div>',
	'founderemails-answers-email-page-edited-reg-user-subject' => 'Thành viên đăng ký đã thay đổi wiki của bạn!',
	'founderemails-answers-email-page-edited-reg-user-body' => 'Chào $USERNAME,

Trông giống như $EDITORNAME đã đăng ký tài khoản tại wiki của bạn và tạo ra sửa đổi! Tại sao bạn không ghé qua trang thảo luận của họ ($EDITORTALKPAGEURL) để gửi lời chào nhỉ?

-- Wikia Team',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => 'Chào $USERNAME,<br /><br />
Trông giống như $EDITORNAME đã đăng ký tài khoản tại wiki của bạn và tạo ra sửa đổi! Tại sao bạn không ghé qua <a href="$EDITORTALKPAGEURL">trang thảo luận</a> của họ để gửi lời chào nhỉ?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia Team</div>',
	'founderemails-answers-email-page-edited-anon-subject' => 'Ai đó đã thay đổi wiki của bạn!',
	'founderemails-answers-email-page-edited-anon-body' => 'Chào $USERNAME,

Trông giống như ai đó đã sửa đổi wiki của bạn! Tại sao bạn không kiểm tra $MYHOMEURL để xem thay đổi thế nào nhỉ?

-- Wikia Team',
	'founderemails-answers-email-page-edited-anon-body-HTML' => 'Chào $USERNAME,<br /><br />
Trông giống như ai đó đã sửa đổi wiki của bạn! Tại sao bạn không <a href="$MYHOMEURL">kiểm tra</a> để xem thay đổi thế nào nhỉ?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia Team</div>',
	'founderemails-lot-happening-subject' => '$WIKINAME đang nóng lên!',
	'founderemails-lot-happening-body' => 'Chào $USERNAME,

Chúc mừng! Có rất nhiều sự kiện đang diễn ra tại $WIKINAME, $WIKIURL.

Nếu chưa rõ, bạn có thể đi đến Hoạt động của Wiki để xem tất cả những việc tuyệt vời vừa xảy ra.

Kể từ khi có rất nhiều hoạt động đang xảy ra, bạn cũng có thể muốn thay đổi tuỳ chọn thư điện tử ở chế độ tóm tắt. Với chế độ này, bạn sẽ nhận được một email có danh sách tất cả các hoạt động tại wiki của bạn mỗi ngày.

Wikia Team',
	'founderemails-lot-happening-body-HTML' => 'Chào $USERNAME,<br /><br />
Có rất nhiều thay đổi trên wiki của bạn ngày hôm nay! Hãy ghé qua $MYHOMEURL để xem những gì đang diễn ra.<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia Team</div>',
	'founderemails-email-lot-happening-greeting' => 'Chào $USERNAME,',
	'founderemails-email-lot-happening-headline' => 'Chúc mừng! Có rất nhiều sự kiện đang xảy ra tại $WIKINAME ngày hôm nay!',
	'founderemails-email-lot-happening-content' => 'Nếu chưa rõ, bạn có thể đi đến Hoạt động của Wiki để xem tất cả những việc tuyệt vời vừa xảy ra.  Kể từ khi có rất nhiều hoạt động đang xảy ra, bạn cũng có thể muốn thay đổi tuỳ chọn thư điện tử ở chế độ tóm tắt. Với chế độ này, bạn sẽ nhận được một email có danh sách tất cả các hoạt động tại wiki của bạn mỗi ngày.',
	'founderemails-email-lot-happening-signature' => 'Wikia Team',
	'founderemails-email-lot-happening-button' => 'Xem hoạt động',
	'founderemails-email-footer-line1' => 'Để kiểm tra những diễn biến và thay đổi mới nhất về Wikia, hãy truy cập <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>
Để nhận được sự hỗ trợ cho ngôn ngữ của bạn, truy cập <a style="color:#2a87d5;text-decoration:none;" href="http://congdong.wikia.com">congdong.wikia.com</a>',
	'founderemails-email-footer-line2' => 'Muốn kiểm soát những email mà bạn nhận được? <a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">Tùy chọn</a>',
	'founderemails-email-0-day-heading' => 'Rất vui được gặp bạn $USERNAME,',
	'founderemails-email-0-day-congratulations' => 'Chúc mừng về việc tạo ra $HDWIKINAME!',
	'founderemails-email-0-day-tips-heading' => 'Sau đây là một số mẹo hữu ích để giúp bạn bắt đầu:',
	'founderemails-email-0-day-addpages-heading' => 'Tạo trang.',
	'founderemails-email-0-day-addpages-content' => 'Wiki là nơi chia sẻ tất cả thông tin về một chủ đề duy nhất của bạn.  Tạo các trang bằng cách nhấp vào <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">"Tạo trang"</a> và điền những thông tin cụ thể về tiêu đề bài viết của bạn.',
	'founderemails-email-0-day-addpages-button' => 'Tạo trang',
	'founderemails-email-0-day-addphotos-heading' => 'Thêm hình ảnh',
	'founderemails-email-0-day-addphotos-content' => 'Các trang luôn luôn tốt hơn khi chúng có hình ảnh!  Thêm hình ảnh vào các trang của bạn và vào trang chính. Bạn có thể nhấp vào <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"Thêm hình ảnh"</a> để thêm một hình ảnh, một thư viện ảnh hoặc khung trình chiếu.',
	'founderemails-email-0-day-addphotos-button' => 'Thêm hình ảnh',
	'founderemails-email-0-day-customizetheme-heading' => 'Tùy chỉnh chủ đề màu nền.',
	'founderemails-email-0-day-customizetheme-content' => 'Tuỳ chỉnh màu nền, chủ đề wiki sao cho thật nổi bật!  Sử dụng <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">Thiết kế chủ đề</a> để tùy chỉnh và thêm màu sắc cho wiki và làm cho nó là duy nhất cho nội dung của wiki.',
	'founderemails-email-0-day-customizetheme-button' => 'Tùy chỉnh',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">Chúng tôi sẽ không bỏ lại bạn lẻ loi một mình.</span> Chúng tôi ở đây để giúp bạn thực hiện $WIKINAME thành công trên mỗi bước. Truy cập <a style="color:#2a87d5;text-decoration:none;" href="http://congdong.wikia.com">congdong.wikia.com</a> để đến diễn đàn, tư vấn, và hỗ trợ, hoặc <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">email cho chúng tôi</a> câu hỏi của bạn!',
	'founderemails-email-0-day-wikiahelps-signature' => 'Xây dựng wiki vui vẻ!<br />-- Wikia Team',
	'founderemails-email-3-day-heading' => 'Xin chào $USERNAME,',
	'founderemails-email-3-day-congratulations' => 'Chúng tôi đến kiểm tra và xem sự tiến triển của $HDWIKINAME.',
	'founderemails-email-3-day-tips-heading' => 'Đã 3 ngày kể từ khi bạn bắt đầu và chúng tôi nghĩ nên ghé qua để cung cấp lời khuyên một số chi tiết xây dựng wiki của bạn:',
	'founderemails-email-3-day-editmainpage-heading' => 'Thiết kế trang chính của bạn.',
	'founderemails-email-3-day-editmainpage-content' => 'Trang chính là một trong những điều đầu tiên người khác nhìn thấy khi họ truy cập vào <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a>.  Tạo một ấn tượng tốt đầu tiên bằng văn bản tóm tắt chi tiết về những nội dung chủ đề của bạn và thêm một thư viện ảnh, hoặc khung trình chiếu.',
	'founderemails-email-3-day-editmainpage-button' => 'Làm Đẹp Nó',
	'founderemails-email-3-day-addphotos-heading' => 'Thêm nhiều hình ảnh hơn.',
	'founderemails-email-3-day-addphotos-content' => 'Một trong những cách tốt nhất để làm cho các trang của bạn linh hoạt và nổi bật là <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"thêm hình ảnh"</a>',
	'founderemails-email-3-day-addphotos-button' => 'Thêm hình ảnh',
	'founderemails-email-3-day-explore-heading' => 'Tìm cảm hứng.',
	'founderemails-email-3-day-explore-content' => 'Đừng ngại khi kiểm tra các wiki khác để xem cách họ đã làm việc trên trang chính của họ, bài viết và nhiều hơn nữa. Để nhận được sự hỗ trợ cho ngôn ngữ của bạn, truy cập <a href="http://congdong.wikia.com">Cộng đồng Wikia tiếng Việt</a>.',
	'founderemails-email-3-day-explore-button' => 'Khám phá',
	'founderemails-email-3-day-wikiahelps-text' => 'Cần giúp đỡ để tìm ra cách gì đó làm việc? Chúng tôi luôn ở đây cùng bạn! Hãy đến yêu cầu chúng tôi giúp đỡ và tư vấn tại <a style="color:#2a87d5;text-decoration:none;" href="http://congdong.wikia.com">congdong.wikia.com</a>.',
	'founderemails-email-3-day-wikiahelps-signature' => 'Giữ việc làm tuyệt vời nhé!<br />-- Wikia Team',
	'founderemails-email-10-day-heading' => 'Tiến triển thế nào rồi $USERNAME?',
	'founderemails-email-10-day-congratulations' => 'Whoa, thời gian nhanh thật! Đã được 10 ngày kể từ khi bạn bắt đầu $HDWIKINAME.',
	'founderemails-email-10-day-tips-heading' => 'Mời những người khác tham gia vào dự án của bạn và thể hiện tất cả công việc tuyệt vời mà bạn đã làm! Sau đây là một số cách để thực hiện:',
	'founderemails-email-10-day-share-heading' => 'Gia đình của bạn đã không nói bạn chia sẻ?',
	'founderemails-email-10-day-share-content' => 'Sử dụng nút Chia sẻ trên trang chính của wiki, bài viết và hình ảnh để chỉ chúng cho bạn bè và những người theo dõi bạn trên Facebook.',
	'founderemails-email-10-day-email-heading' => 'Khai thác sức mạnh của thư điện tử.',
	'founderemails-email-10-day-email-content' => 'Gửi email cho người khác bạn biết những người quan tâm đến nội dung chủ đề của bạn hoặc quan tâm trong việc giúp đỡ bạn, giống như một người bạn từ trường học hoặc một đồng nghiệp.  Bạn cũng có thể gửi email hình ảnh cụ thể từ wiki của bạn bằng cách sử dụng nút thư điện tử',
	'founderemails-email-10-day-join-heading' => 'Tham gia wiki với các trang web tương tự.',
	'founderemails-email-10-day-join-content' => 'Yêu cầu mọi người trên các diễn đàn hoặc các trang web về chủ đề của bạn để được giúp đỡ bằng cách đăng lên ý kiến trong diễn đàn của họ. Nếu có thể, hãy liên hệ với người quản trị và xem nếu họ quan tâm trong việc chia sẻ liên kết &mdash; họ sẽ đặt liên kết wiki của bạn trên trang web của họ nếu bạn đặt liên kết của họ tại wiki của bạn.',
	'founderemails-email-10-day-wikiahelps-text' => 'Bạn cũng có thể yêu cầu các thành viên Wikia đến giúp đỡ wiki của bạn bằng cách gửi lời trợ giúp tại diễn đàn trên <a style="color:#2a87d5;text-decoration:none;" href="https://community.fandom.com">community.fandom.com</a>.',
	'founderemails-email-10-day-wikiahelps-signature' => 'Giữ việc làm tuyệt vời nhé!<br />-- Wikia Team',
	'founderemails-email-views-digest-subject' => 'Góc nhìn hôm nay của $ WIKINAME',
	'founderemails-email-views-digest-body' => 'Chào $USERNAME,

Hôm nay $WIKINAME đã được truy cập bởi $1 {{PLURAL:$1|người|người}}.

Tiếp tục bổ sung nội dung mới và thúc đẩy wiki của bạn để khuyến khích nhiều người đến để đọc, sửa đổi và làm phong phú nội dung.

$WIKIURL

Wikia Team',
	'founderemails-email-views-digest-greeting' => 'Chào $USERNAME,',
	'founderemails-email-views-digest-headline' => 'Hôm nay $WIKINAME đã được viếng thăm bởi $UNIQUEVIEWS người.',
	'founderemails-email-views-digest-content' => 'Tiếp tục bổ sung nội dung mới và thúc đẩy wiki của bạn để khuyến khích nhiều người đến để đọc, sửa đổi và làm phong phú nội dung.',
	'founderemails-email-views-digest-signature' => 'Wikia Team',
	'founderemails-email-views-digest-button' => 'Thêm nhiều trang hơn',
	'founderemails-email-complete-digest-subject' => 'Hoạt động mới nhất trên $WIKINAME',
	'founderemails-email-complete-digest-body' => 'Chào $USERNAME,

Đây là thời gian biểu hàng ngày về các hoạt động từ $WIKINAME, $WIKIURL.

$1 {{PLURAL:$1|người|người}} người xem wiki của bạn.

Giữ công việc tuyệt vời thêm nội dung thú vị cho người đọc!

$2 {{PLURAL:$2|lần sửa đổi|lần sửa đổi}} được tạo ra.

Biên tập viên hạnh phúc làm cho wiki tốt hơn. Hãy chắc chắn cảm ơn những biên tập viên của bạn và dành riêng một chút thời gian trò chuyện cùng họ.

$3 {{PLURAL:$3|người|người}} truy cập wiki của bạn.

Chào đón những người mới đến wiki của bạn với một thông điệp tại trang thảo luận.

Bạn luôn luôn có thể ghé qua hoạt động của wiki để xem tất cả những thay đổi được thực hiện trên $WIKINAME. Kiểm tra thường xuyên, là người sáng lập cộng đồng, cộng đồng của bạn sẽ trông cậy bạn để tìm kiếm trợ giúp và hướng dẫn cho các hoạt động biên tập wiki.

Wikia Team',
	'founderemails-email-complete-digest-greeting' => 'Chào $USERNAME,',
	'founderemails-email-complete-digest-headline' => 'Đây là thời gian biểu hàng ngày của các hoạt động từ $WIKINAME.',
	'founderemails-email-complete-digest-content-heading1' => '$1 {{PLURAL:$1|người|người}} truy cập wiki của bạn.',
	'founderemails-email-complete-digest-content1' => 'Giữ công việc tuyệt vời, thêm nội dung thú vị cho người đọc!',
	'founderemails-email-complete-digest-content-heading2' => '$USEREDITS lần sửa đổi được tạo ra.',
	'founderemails-email-complete-digest-content2' => 'Biên tập viên hạnh phúc làm cho wiki tốt hơn. Hãy chắc chắn cảm ơn những biên tập viên của bạn và dành riêng một chút thời gian trò chuyện cùng họ.',
	'founderemails-email-complete-digest-content-heading3' => '$USERJOINS người tham gia wiki của bạn.',
	'founderemails-email-complete-digest-content3' => 'Chào đón những người mới đến wiki của bạn với một thông điệp tại trang thảo luận.
<br /><br />
Bạn luôn luôn có thể ghé qua hoạt động của wiki để xem tất cả những thay đổi được thực hiện trên $WIKINAME. Kiểm tra thường xuyên, là người sáng lập cộng đồng, cộng đồng của bạn sẽ trông cậy bạn để tìm kiếm trợ giúp và hướng dẫn cho các hoạt động biên tập wiki.',
	'founderemails-email-complete-digest-signature' => 'Wikia Team',
	'founderemails-email-complete-digest-button' => 'Đi đến hoạt động của wiki',
	'founderemails-pref-joins' => 'Gửi email cho tôi khi có người tham gia $1',
	'founderemails-pref-edits' => 'Gửi email cho tôi khi có ai đó sửa đổi $1',
	'founderemails-pref-views-digest' => 'Gửi tôi một email hàng ngày cho tôi biết bao nhiêu lần $1 đã được truy cập',
	'founderemails-pref-complete-digest' => 'Gửi cho tôi một bản tóm tắt hàng ngày về hoạt động trên $1',
	'founderemails-pref-joins-v2' => '...một ai đó đã tham gia',
	'founderemails-pref-edits-v2' => '...một ai đó đã tạo sửa đổi',
	'founderemails-pref-views-digest-v2' => '...bản tóm tắt hàng cho số tổng lượt xem',
	'founderemails-pref-complete-digest-v2' => '...một bản tóm tắt đầy đủ và ngắn gọn về số người tham gia, số sửa đổi, số lượt xem',
];

$messages['zh-hans'] = [
	'founderemails-desc' => '帮助通知创始人有关在他们的wiki上的变更',
	'tog-founderemailsenabled' => '通过电子邮件告诉我其他人在做什么（仅创建者）',
	'founderemails-email-user-registered-greeting' => '嗨！$USERNAME，',
	'founderemails-email-user-registered-headline' => '恭喜！$EDITORNAME刚刚加入了$WIKINAME。',
	'founderemails-email-user-registered-content' => '抓住机会欢迎他们到您的Wiki来并鼓励他们帮助编辑。越多人参与，您的Wiki就会成长得越快。',
	'founderemails-email-user-registered-signature' => 'Wikia团队',
	'founderemails-email-user-registered-button' => '欢迎他们',
	'founderemails-email-first-edit-greeting' => '嗨，$USERNAME，',
	'founderemails-email-first-edit-headline' => '太好了！$EDITORNAME 成功在 $WIKINAME 上做出了第一次编辑。',
	'founderemails-email-first-edit-content' => '到$PAGETITLE去看看他们添加了什么。',
	'founderemails-email-first-edit-signature' => 'Wikia团队',
	'founderemails-email-first-edit-button' => '去查看！',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => '嗨，$USERNAME<br /><br />
注册用户$EDITORNAME刚刚在您的Wiki上作出了首次编辑哦！为何不去他的<a href="$EDITORTALKPAGEURL">对话页</a>打个招呼呢？<br /><br />
<div style="font-style: italic; font-size: 120%;">——Wikia团队</div>',
	'founderemails-email-page-edited-reg-user-subject' => '$WIKINAME 有新编辑！',
	'founderemails-email-page-edited-reg-user-body' => '嗨！$USERNAME

$EDITORNAME刚刚又在$WIKINAME编辑了$PAGETITLE。

前往$PAGETITLE，查看他改变了什么。

$PAGEURL

Wikia团队',
	'founderemails-email-general-edit-greeting' => '嗨，$USERNAME，',
	'founderemails-email-general-edit-headline' => '$EDITORNAME刚才在$WIKINAME又编辑了$PAGETITLE。',
	'founderemails-email-general-edit-content' => '到$PAGETITLE去看看他们添加了什么。',
	'founderemails-email-general-edit-signature' => 'Wikia团队',
	'founderemails-email-general-edit-button' => '去查看！',
	'founderemails-email-page-edited-reg-user-body-HTML' => '嗨！$USERNAME<br /><br />
注册用户$EDITORNAME编辑了您的wiki！为何不在他们的<a href="$EDITORTALKPAGEURL">对话页</a>打个招呼呢？<br /><br /><div style="font-style: italic; font-size: 120%;">--Wikia团队</div>',
	'founderemails-email-page-edited-anon-subject' => '一个神秘朋友编辑了 $WIKINAME',
	'founderemails-email-page-edited-anon-body' => 'Hi $USERNAME，

一位Wikia贡献者刚刚在$WIKINAME编辑了$PAGETITLE。

Wikia贡献者是指没有登录Wikia账户的匿名编辑者。去看看这个神秘的朋友添加了什么吧！

$PAGEURL

Wikia团队',
	'founderemails-email-anon-edit-greeting' => '嗨，$USERNAME，',
	'founderemails-email-anon-edit-headline' => '一位匿名贡献者刚刚在$WIKINAME上对$PAGETITLE做出了编辑。',
	'founderemails-email-anon-edit-content' => '有一个未登录Wikia账号的贡献者做了一些编辑。快来看看这个神秘的朋友添加了什么吧！',
	'founderemails-email-anon-edit-signature' => 'Wikia团队',
	'founderemails-email-anon-edit-button' => '去查看！',
	'founderemails-email-page-edited-anon-body-HTML' => '嗨！$USERNAME<br /><br />
有人编辑了你的wiki！何不<a href="$MYHOMEURL">查看一下</a>更改了什么？<br /><br /><div style="font-style: italic; font-size: 120%;">--Wikia团队</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => '有位注册用户第一次编辑了你的Wiki ！',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => '嘿！$USERNAME，

注册用户$EDITORNAME已经在你的Wiki上做出首次编辑了！何不到他们的讨论页($EDITORTALKPAGEURL)，和他们打个招呼呢？

-- Wikia团队',
	'founderemails-answers-email-page-edited-reg-user-subject' => '注册用户更改了您的网站！',
	'founderemails-answers-email-page-edited-reg-user-body' => '嘿！$USERNAME，

$EDITORNAME已经在你的Wiki上做出编辑了！何不到他们的讨论页($EDITORTALKPAGEURL)打个招呼呢？

-- Wikia团队',
	'founderemails-answers-email-page-edited-anon-subject' => '有人编辑了你的Wiki！',
	'founderemails-answers-email-page-edited-anon-body' => '嗨，$USERNAME，

看起来已经有人参与编辑您的wiki了！不妨去$MYHOMEURL查看一下？

——Wikia团队',
	'founderemails-answers-email-page-edited-anon-body-HTML' => '嗨，$USERNAME<br /><br />
看起来已经有人参与编辑您的wiki了！不妨去<a href="$MYHOMEURL">查看</a>一下？<br /><br />
<div style="font-style: italic; font-size: 120%;">——Wikia团队</div>',
	'founderemails-lot-happening-subject' => '$WIKINAME正在热力升温！',
	'founderemails-email-lot-happening-greeting' => '嗨，$USERNAME，',
	'founderemails-email-lot-happening-headline' => '恭喜您，今天在 $WIKINAME 有很多变动！',
	'founderemails-email-lot-happening-signature' => 'Wikia团队',
	'founderemails-email-lot-happening-button' => '查看动态',
	'founderemails-email-0-day-heading' => '很高兴认识你，$USERNAME，',
	'founderemails-email-0-day-congratulations' => '祝贺创建 $HDWIKINAME ！',
	'founderemails-email-0-day-tips-heading' => '这里有几个有益的提示帮助您开始：',
	'founderemails-email-0-day-addpages-heading' => '添加页面',
	'founderemails-email-0-day-addpages-button' => '添加一个页面',
	'founderemails-email-0-day-addphotos-heading' => '添加图片',
	'founderemails-email-0-day-addphotos-button' => '添加一个照片',
	'founderemails-email-0-day-customizetheme-heading' => '自定义您的外观。',
	'founderemails-email-0-day-customizetheme-button' => '自定义',
	'founderemails-email-0-day-wikiahelps-signature' => '祝维基建设愉快！<br />Wikia团队',
	'founderemails-email-3-day-heading' => '你好，$USERNAME，',
	'founderemails-email-3-day-congratulations' => '我们希望了解$HDWIKINAME建设得如何。',
	'founderemails-email-3-day-editmainpage-heading' => '美化您的主页。',
	'founderemails-email-3-day-editmainpage-content' => '主页是当人们访问 <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a> 时第一个看到的页面。通过写一些您主题的详细摘要，并加入一段幻灯片、一组图册或图片滑块给人们良好的第一印象吧。',
	'founderemails-email-3-day-editmainpage-button' => '美化它',
	'founderemails-email-3-day-addphotos-heading' => '添加更多图片。',
	'founderemails-email-3-day-addphotos-button' => '添加图片',
	'founderemails-email-3-day-explore-heading' => '寻找灵感。',
	'founderemails-email-3-day-explore-button' => '探索',
	'founderemails-email-3-day-wikiahelps-signature' => '继续努力吧！<br />Wikia团队',
	'founderemails-email-10-day-heading' => '$USERNAME，最近如何?',
	'founderemails-email-10-day-congratulations' => '哇哦，时光飞逝！您建立$HDWIKINAME已逾10日。',
	'founderemails-email-10-day-share-heading' => '妈妈一定和你说过“独乐乐不如众乐乐”的道理吧？',
	'founderemails-email-10-day-email-heading' => '利用电子邮件的力量。',
	'founderemails-email-10-day-join-heading' => '邀请同类网站社群一同参与。',
	'founderemails-email-10-day-wikiahelps-signature' => '继续努力吧！<br /> Wikia团队',
	'founderemails-email-views-digest-subject' => '$WIKINAME今天的浏览数',
	'founderemails-email-views-digest-body' => '本日$WIKINAME的访问量是$1{{PLURAL:$1|人|人}}.

继续丰富、宣传你的维基来鼓励更多人阅读、编辑和传播吧。

$WIKIURL

Wikia团队',
	'founderemails-email-views-digest-greeting' => '嗨，$USERNAME，',
	'founderemails-email-views-digest-headline' => '今天，$WIKINAME已有$1人浏览',
	'founderemails-email-views-digest-signature' => 'Wikia团队',
	'founderemails-email-views-digest-button' => '添加更多页面',
	'founderemails-email-complete-digest-subject' => '$WIKINAME上的最新动态',
	'founderemails-email-complete-digest-body' => '嘿，$USERNAME,

又到了每天了解您的 $WIKINAME, $WIKIURL 的动态的时间了。

访问量：$1 位用户。

继续努力，为读者提供更多、更有趣的内容吧！

编辑量：$2 次编辑。

快乐的编者铸造快乐的维基。记得要不时联络编者们，向他们致以感谢。

新用户：$3 位用户加入了你的维基。

欢迎新编者的到来，给他们留言吧。

你可以随时查看维基动态，发现$WIKINAME上令人兴奋的变化。请常来访问。作为创始人，整个社区期望你协助引导和运作。

Wikia团队',
	'founderemails-email-complete-digest-greeting' => '嗨，$USERNAME，',
	'founderemails-email-complete-digest-content-heading1' => '$1人访问了你的wiki。',
	'founderemails-email-complete-digest-content-heading2' => '已做出$1 {{PLURAL:$1|处编辑|处编辑}}。',
	'founderemails-email-complete-digest-content-heading3' => '$1人加入了你的维基。',
	'founderemails-email-complete-digest-signature' => 'Wikia团队',
	'founderemails-email-complete-digest-button' => '前往 维基动态',
	'founderemails-pref-joins' => '有人加入$1时邮件通知我。',
	'founderemails-pref-edits' => '有人编辑$1时邮件通知我。',
	'founderemails-pref-views-digest' => '每日发送邮件显示$1访问量',
	'founderemails-pref-complete-digest' => '给我发送$1的每日动态摘要',
	'founderemails-pref-joins-v2' => '...有人加入时',
	'founderemails-pref-edits-v2' => '...他人编辑',
	'founderemails-pref-complete-digest-v2' => '...一份每日注册、编辑、访问摘要已备好',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => '嘿！$USERNAME，<br /><br />
$EDITORNAME已经在你的Wiki上做出编辑了！何不到他们的<a href="$EDITORTALKPAGEURL">讨论页</a>打个招呼呢？<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia团队</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => '嗨 $USERNAME,<br /><br />
用户 $EDITORNAME 第一次在你的Wiki编辑！何不到他的 <a href="$EDITORTALKPAGEURL">对话页</a> 打个招呼呢?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- The Wikia 团队</div>',
	'founderemails-email-0-day-addpages-content' => 'Wiki是分享您的主题内容的地方。点击<a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">"添加页面"</a> 来帮您的主题增加更多信息。',
	'founderemails-email-0-day-addphotos-content' => '有视觉效果的页面会更好，在您的页面上增加图片吧！可点击 <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"添加图片"</a>来增加图片、图片册或幻灯片等。',
	'founderemails-email-0-day-customizetheme-content' => '自定义您的Wiki的样式和图标可以使您的Wiki更出色！使用 <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">主题设计器</a>来使您Wiki的样式、颜色更适合您的主题。',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">我们不会冷落您</span> 我们就在这里帮您一步步将 $WIKINAME做的更好，有任何问题您可访问<a style="color:#2a87d5;text-decoration:none;" href="http://zh.community.wikia.com">zh.community.wikia.com</a> 的论坛和帮助页面，或是 <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">告诉我们</a> 您的问题。',
	'founderemails-email-10-day-email-content' => '用电子邮件通知其他你知道也喜欢你的主题的人，例如朋友或同事，让他们来帮助你。你也可以使用这个电子邮件按钮来传送你的Wiki上的特定图片。',
	'founderemails-email-10-day-join-content' => '在与你的Wiki同主题的论坛或网站发文，邀请其他人来帮助你。如果可能的话，联络管理员，看是否可以把Wiki放在网站的连结中。',
	'founderemails-email-10-day-share-content' => '使用你的 wiki 的首页、文章页面和图片上的 Facebook分享按钮，将内容展示给您的朋友和在 Facebook 上的关注者。',
	'founderemails-email-10-day-tips-heading' => '让其他人来参与你的计划，并向他们展示你已经建立的丰富内容！以下是几种宣传的方式：',
	'founderemails-email-10-day-wikiahelps-text' => '你也可以在<a style="color:#2a87d5;text-decoration:none;" href="http://zh.community.wikia.com">zh.community.wikia.com</a>的论坛中发帖，寻求其他Wikia参与者来帮助你。',
	'founderemails-email-3-day-addphotos-content' => '让你的页面变得更醒目的最好方式之一是 <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"添加一些图片"</a>。',
	'founderemails-email-3-day-explore-content' => '不要怕参考其他的Wiki如何建构自己的主页和文章页。这里有一些优秀的Wiki可参考: <a style="color:#2a87d5;text-decoration:none;" href="http://zh.pad.wikia.com">Puzzle&Dragon Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://zh.asoiaf.wikia.com">冰与火之歌维基</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://hkbus.wikia.com/">香港巴士大典</a>。',
	'founderemails-email-3-day-tips-heading' => '您成立Wiki已经三天了，我们来提供您一些建设Wiki的建议：',
	'founderemails-email-3-day-wikiahelps-text' => '需要某些方面的协助吗？我们一直都在这里！欢迎造访<a style="color:#2a87d5;text-decoration:none;" href="http://zh.community.wikia.com">zh.community.wikia.com</a>来寻求建议和帮助。',
	'founderemails-email-complete-digest-content1' => '继续努力增加大家喜欢阅读的有趣内容！',
	'founderemails-email-complete-digest-content2' => '快乐的编辑者创造出快乐的Wiki。常常向编辑者们表达谢意并与他们交流。',
	'founderemails-email-complete-digest-content3' => '在用户讨论页或留言墙欢迎Wiki的新用户。
<br /><br />
你可以常常注意维基动态，以了解在Y$WIKINAME上所有令人兴奋的更改。作为创始人，你可以藉由常常关注动态来协助、指导这个Wiki的发展。',
	'founderemails-email-complete-digest-headline' => '又到了你了解 $WIKINAME 每天动态的时间了。',
	'founderemails-email-footer-line1' => '要了解Wikia的最新消息，请访问<a style="color:#2a87d5;text-decoration:none;" href="http://zh.community.wikia.com">zh.community.wikia.com</a>',
	'founderemails-email-footer-line2' => '想要自订收到哪些电子邮件？ 进入您的<a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">用户设定</a>',
	'founderemails-email-footer-line3' => '<a href="http://www.twitter.com/wikia" style="text-decoration:none">
<img alt="twitter" src="http://images4.wikia.nocookie.net/wikianewsletter/images/f/f7/Twitter.png" style="border:none">
</a>
&nbsp;
<a href="http://www.facebook.com/wikia" style="text-decoration:none">
<img alt="facebook" src="http://images2.wikia.nocookie.net/wikianewsletter/images/5/55/Facebook.png" style="border:none">
</a>
&nbsp;
<a href="http://www.youtube.com/wikia" style="text-decoration:none">
<img alt="youtube" src="http://images3.wikia.nocookie.net/wikianewsletter/images/a/af/Youtube.png" style="border:none">
</a>
&nbsp;
<a href="http://zh.community.wikia.com/wiki/%E5%8D%9A%E5%AE%A2:%E5%8D%9A%E5%AE%A2%E5%B8%96%E5%AD%90" style="text-decoration:none">
<img alt="wikia" src="http://images1.wikia.nocookie.net/wikianewsletter/images/b/be/Wikia_blog.png" style="border:none">
</a>',
	'founderemails-email-lot-happening-content' => '如果你还没有看过维基动态，建议进去了解一下你的Wiki发生的各种事情。因为可能有非常多的内容，你可坏会希望改变你的电子邮件设定为摘要模式，在摘要模式中，你会每天收到一封列出Wiki所有动态的电子邮件。',
	'founderemails-email-page-edited-reg-user-first-edit-body' => '嗨！$USERNAME

太好了！$EDITORNAME刚刚在$WIKINAME上进行了第一次编辑。

前往$PAGETITLE看看增加了什么内容。

$PAGEURL

Wikia团队',
	'founderemails-email-views-digest-content' => '继续丰富、宣传你的Wiki来鼓励更多人阅读、编辑和传播吧。',
	'founderemails-lot-happening-body-HTML' => '嗨 $USERNAME,<br /><br />
你的Wiki今天非常热闹！ 进入 $MYHOMEURL 看看发生了些什么事。<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia 团队</div>',
	'founderemails-lot-happening-body' => '嗨 $USERNAME,

恭喜 $WIKINAME, $WIKIURL非常热闹。

如果你还没访问过维基动态，去看看你的Wiki发生了些什么事。 

因为动态内容很多，你也许会想要把通知电子邮件改成摘要模式。在摘要模式下，你会改为每天收到一封列出Wiki上所有动态的电子邮件。

Wikia 团队',
	'founderemails-pref-views-digest-v2' => '...每天总访问量的摘要已准备好',
];

$messages['zh-hant'] = [
	'founderemails-email-user-registered-greeting' => '嗨！$USERNAME，',
	'founderemails-email-user-registered-headline' => '恭喜 ！$EDITORNAME 剛剛加入了 $WIKINAME。',
	'founderemails-email-user-registered-content' => '藉此機會歡迎他們到你的 wiki ，並鼓勵他們幫忙編輯。愈多人參與，你的 wiki 將增長越快。',
	'founderemails-email-user-registered-signature' => 'Wikia 團隊',
	'founderemails-email-user-registered-button' => '歡迎他們',
	'founderemails-email-page-edited-reg-user-first-edit-subject' => '$WIKINAME 有新的編輯 ！',
	'founderemails-email-first-edit-greeting' => '嗨，$USERNAME，',
	'founderemails-email-first-edit-content' => '到 $PAGETITLE 去檢查看看他們增加了什麼。',
	'founderemails-email-first-edit-signature' => 'Wikia 團隊',
	'founderemails-email-page-edited-reg-user-subject' => '$WIKINAME 的新編輯 ！',
	'founderemails-email-general-edit-greeting' => '嗨，$USERNAME，',
	'founderemails-email-general-edit-signature' => 'Wikia 團隊',
	'founderemails-email-page-edited-anon-subject' => '一個神秘的朋友編輯了 $WIKINAME',
	'founderemails-email-anon-edit-greeting' => '嗨，$USERNAME，',
	'founderemails-email-anon-edit-headline' => '一個Wikia參與者剛才編輯了 $WIKINAME.上的  $PAGETITLE',
	'founderemails-email-anon-edit-signature' => 'Wikia 團隊',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => '有位註冊用戶第一次編輯了你的Wiki ！',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => 'Hey $USERNAME， 使用者 $EDITORNAME 剛才第一次在你的 wiki 編輯了！何不在他的對話頁 ($EDITORTALKPAGEURL) 打個招呼呢？-- Wikia 團隊',
	'founderemails-answers-email-page-edited-reg-user-subject' => '註冊的使用者修改了您的網站 ！',
	'founderemails-email-0-day-addpages-button' => '新增頁面',
	'founderemails-email-0-day-addphotos-heading' => '新增圖片',
	'founderemails-email-0-day-addphotos-button' => '新增圖片',
	'founderemails-email-0-day-customizetheme-heading' => '自訂您的樣式',
	'founderemails-email-0-day-customizetheme-button' => '自訂',
	'founderemails-email-0-day-wikiahelps-signature' => '祝建設wiki愉快!<br />Wikia團隊',
	'founderemails-email-3-day-heading' => '您好 $USERNAME,',
	'founderemails-email-3-day-addphotos-heading' => '增加更多的圖片。',
	'founderemails-email-3-day-addphotos-button' => '新增圖片',
	'founderemails-email-3-day-explore-heading' => '尋找靈感。',
	'founderemails-email-3-day-explore-button' => '探索',
	'founderemails-email-3-day-wikiahelps-signature' => '繼續努力吧！<br />Wikia 團隊',
	'founderemails-email-10-day-congratulations' => '哇，時光飛逝 ！自從你建立 $HDWIKINAME 之後已經 10 天了。',
	'founderemails-email-10-day-share-content' => '使用你的 wiki 的首頁、 文章頁面和圖片上的 Facebook 「分享」按鈕，將內容展示給您的朋友和在 Facebook 上的關注者。',
	'founderemails-email-10-day-join-heading' => '邀請同類網站社群一同參與',
	'founderemails-email-10-day-wikiahelps-signature' => '繼續加油喔！<br />Wikia 團隊',
	'founderemails-answers-email-page-edited-anon-body-HTML' => '嗨，$USERNAME<br /><br />
已經有人參與編輯您的wiki了！不妨去<a href="$MYHOMEURL">查看</a>一下編寫的內容？<br /><br />
<div style="font-style: italic; font-size: 120%;">——Wikia團隊</div>',
	'founderemails-answers-email-page-edited-anon-body' => '嗨，$USERNAME，

已經有人參與編輯您的wiki了！不妨去 $MYHOMEURL查看一下編寫的內容？

——Wikia團隊',
	'founderemails-answers-email-page-edited-anon-subject' => '有人編輯了你的Wiki！',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => '嘿！$USERNAME，<br /><br />
$EDITORNAME已經在你的Wiki上做出編輯了！何不到他們的<a href="$EDITORTALKPAGEURL">討論頁</a>打個招呼呢？<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia團隊</div>',
	'founderemails-answers-email-page-edited-reg-user-body' => '嘿！$USERNAME，

$EDITORNAME已經在你的Wiki上做出編輯了！何不到他們的討論頁($EDITORTALKPAGEURL)打個招呼呢？

-- Wikia團隊',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => '嗨 $USERNAME,<br /><br />
用戶 $EDITORNAME 第一次在你的Wiki編輯！何不到他的 <a href="$EDITORTALKPAGEURL">對話頁</a> 打個招呼呢?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- The Wikia 團隊</div>',
	'founderemails-email-0-day-addpages-content' => 'Wiki是分享您的主題內容的地方。點擊<a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">"增加新頁面"</a> 來幫您的主題增加更多資訊。',
	'founderemails-email-0-day-addpages-heading' => '添加頁面',
	'founderemails-email-0-day-addphotos-content' => '有視覺效果的頁面會更好，在您的頁面上增加圖片吧！可點擊 <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"增加圖片"</a>來增加圖片、圖片冊或幻燈片等。',
	'founderemails-email-0-day-congratulations' => '恭喜創建了 $HDWIKINAME ！',
	'founderemails-email-0-day-customizetheme-content' => '自訂您的Wiki的樣式和圖標可以使您的Wiki更出色！使用 <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">主題設計器</a>來使您Wiki的樣式、顏色更適合您的主題。',
	'founderemails-email-0-day-heading' => '很高興認你，$USERNAME，',
	'founderemails-email-0-day-tips-heading' => '這裡有幾個有益的提示幫助你開始：',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">我們不會冷落您</span> 我們就在這裡幫您一步步將 $WIKINAME做的更好，有任何問題您可訪問<a style="color:#2a87d5;text-decoration:none;" href="http://zh.community.wikia.com">zh.community.wikia.com</a> 的論壇和説明頁面，或是 <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">告訴我們</a> 您的問題。',
	'founderemails-email-10-day-email-content' => '用電子郵件通知其他你知道也喜歡你的主題的人，例如朋友或同事，讓他們來幫助你。你也可以使用這個電子郵件按鈕來傳送你的Wiki上的特定圖片。',
	'founderemails-email-10-day-email-heading' => '利用電子郵件的力量。',
	'founderemails-email-10-day-join-content' => '在與你的Wiki同主題的論壇或網站發文，邀請其他人來幫助你。如果可能的話，聯絡管理員，看是否可以把Wiki放在網站的連結中。',
	'founderemails-email-10-day-share-heading' => '媽媽一定和你說過「獨樂樂不如眾樂樂」的道理吧？',
	'founderemails-email-10-day-tips-heading' => '讓其他人來參與你的計劃，並向他們展示你已經建立的豐富內容！以下是幾種宣傳的方式：',
	'founderemails-email-10-day-wikiahelps-text' => '你也可以在<a style="color:#2a87d5;text-decoration:none;" href="http://zh.community.wikia.com">zh.community.wikia.com</a>的論壇中發文，尋求其他Wikia參與者來幫助你。',
	'founderemails-email-3-day-addphotos-content' => '讓你的頁面變得更醒目的最好方式之一是 <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"增加一些圖片"</a>。',
	'founderemails-email-3-day-congratulations' => '我們希望了解$HDWIKINAME建設得如何。',
	'founderemails-email-3-day-editmainpage-content' => '首頁是當人們訪問 <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a> 時第一個看到的頁面。通過寫一些您主題的詳細摘要，並加入一段幻燈片、一組圖冊或圖片滑塊給人們良好的第一印象吧。',
	'founderemails-email-3-day-editmainpage-heading' => '美化您的首頁。',
	'founderemails-email-3-day-explore-content' => '不要怕參考其他的Wiki如何建構自己的首頁和文章頁。這裡有一些優秀的Wiki可參考: <a style="color:#2a87d5;text-decoration:none;" href="http://zh.pad.wikia.com">Puzzle&Dragon Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://zh.asoiaf.wikia.com">冰與火之歌維基</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://hkbus.wikia.com/">香港巴士大典</a>。',
	'founderemails-email-3-day-tips-heading' => '您成立Wiki已經三天了，我們來提供您一些建設Wiki的建議：',
	'founderemails-email-3-day-wikiahelps-text' => '需要某些方面的協助嗎？我們一直都在這裡！歡迎造訪<a style="color:#2a87d5;text-decoration:none;" href="http://zh.community.wikia.com">zh.community.wikia.com</a>來尋求建議和幫助。',
	'founderemails-email-anon-edit-content' => '有一個未登錄Wikia賬號的貢獻者做了一些編輯。快來看看這個神秘的朋友添加了什麼吧！',
	'founderemails-email-complete-digest-body' => '嘿，$USERNAME,

又到了每天了解您的 $WIKINAME, $WIKIURL 的動態的時間了。

訪問量：$1 位用戶。

繼續努力，為讀者提供更多、更有趣的內容吧！

編輯量：$2 次編輯。

快樂的編者鑄造快樂的維基。記得要不時聯絡編者們，向他們致以感謝。

新用戶：$3 位用戶加入了你的維基。

歡迎新編者的到來，給他們留言吧。

你可以隨時查看維基動態，發現$WIKINAME上令人興奮的變化。請常來訪問。作為創始人，整個社區期望你協助引導和運作。

Wikia團隊',
	'founderemails-email-complete-digest-button' => '前往 維基動態',
	'founderemails-email-complete-digest-content-heading1' => '$1人訪問了你的wiki。',
	'founderemails-email-complete-digest-content-heading2' => '已做出$1 {{PLURAL:$1|次編輯|次編輯}}。',
	'founderemails-email-complete-digest-content-heading3' => '$1人加入了你的Wiki。',
	'founderemails-email-complete-digest-content1' => '繼續努力增加大家喜歡閱讀的有趣內容！',
	'founderemails-email-complete-digest-content2' => '快樂的編輯者創造出快樂的Wiki。常常向編輯者們表達謝意並與他們交流。',
	'founderemails-email-complete-digest-content3' => '在用戶討論頁或留言牆歡迎Wiki的新用戶。
<br /><br />
你可以常常注意維基動態，以了解在Y$WIKINAME上所有令人興奮的更改。作為創始人，你可以藉由常常關注動態來協助、指導這個Wiki的發展。',
	'founderemails-email-complete-digest-headline' => '又到了你了解 $WIKINAME 每天動態的時間了。',
	'founderemails-email-complete-digest-signature' => 'Wikia團隊',
	'founderemails-email-complete-digest-subject' => '$WIKINAME上的最新動態',
	'founderemails-email-first-edit-headline' => '太好了！$EDITORNAME 成功在 $WIKINAME 上做出了第一次編輯。',
	'founderemails-email-footer-line1' => '要了解Wikia的最新消息，請訪問<a style="color:#2a87d5;text-decoration:none;" href="http://zh.community.wikia.com">zh.community.wikia.com</a>',
	'founderemails-email-footer-line2' => '想要自訂收到哪些電子郵件？ 進入您的<a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">用戶設定</a>',
	'founderemails-email-footer-line3' => '<a href="http://www.twitter.com/wikia" style="text-decoration:none">
<img alt="twitter" src="http://images4.wikia.nocookie.net/wikianewsletter/images/f/f7/Twitter.png" style="border:none">
</a>
&nbsp;
<a href="http://www.facebook.com/wikia" style="text-decoration:none">
<img alt="facebook" src="http://images2.wikia.nocookie.net/wikianewsletter/images/5/55/Facebook.png" style="border:none">
</a>
&nbsp;
<a href="http://www.youtube.com/wikia" style="text-decoration:none">
<img alt="youtube" src="http://images3.wikia.nocookie.net/wikianewsletter/images/a/af/Youtube.png" style="border:none">
</a>
&nbsp;
<a href="http://zh.community.wikia.com/wiki/%E5%8D%9A%E5%AE%A2:%E5%8D%9A%E5%AE%A2%E5%B8%96%E5%AD%90" style="text-decoration:none">
<img alt="wikia" src="http://images1.wikia.nocookie.net/wikianewsletter/images/b/be/Wikia_blog.png" style="border:none">
</a>',
	'founderemails-email-general-edit-content' => '到$PAGETITLE去看看他們增加了什麼。',
	'founderemails-email-general-edit-headline' => '$EDITORNAME剛才在$WIKINAME又編輯了$PAGETITLE。',
	'founderemails-email-lot-happening-button' => '查看動態',
	'founderemails-email-lot-happening-content' => '如果你還沒有看過維基動態，建議進去了解一下你的Wiki發生的各種事情。因為可能有非常多的內容，你可壞會希望改變你的電子郵件設定為摘要模式，在摘要模式中，你會每天收到一封列出Wiki所有動態的電子郵件。',
	'founderemails-email-lot-happening-headline' => '恭喜您，今天在 $WIKINAME 有很多編輯！',
	'founderemails-email-lot-happening-signature' => 'Wikia團隊',
	'founderemails-email-page-edited-anon-body-HTML' => '嗨！$USERNAME<br /><br />
有人編輯了你的wiki！何不<a href="$MYHOMEURL">查看一下</a>更改了什麼？<br /><br /><div style="font-style: italic; font-size: 120%;">--Wikia團隊</div>',
	'founderemails-email-page-edited-anon-body' => 'Hi $USERNAME，

一位Wikia貢獻者剛剛在$WIKINAME編輯了$PAGETITLE。

Wikia貢獻者是指沒有登錄Wikia賬戶的匿名編輯者。去看看這個神秘的朋友添加了什麼吧！

$PAGEURL

Wikia團隊',
	'founderemails-email-page-edited-reg-user-body-HTML' => '嗨！$USERNAME<br /><br />
註冊用戶$EDITORNAME編輯了您的wiki！為何不在他們的<a href="$EDITORTALKPAGEURL">對話頁</a>打個招呼呢？<br /><br /><div style="font-style: italic; font-size: 120%;">--Wikia團隊</div>',
	'founderemails-email-page-edited-reg-user-body' => '嗨！$USERNAME

$EDITORNAME剛剛又在$WIKINAME編輯了$PAGETITLE。

前往$PAGETITLE，查看他改變了什麼。

$PAGEURL

Wikia團隊',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => '嗨，$USERNAME<br /><br />
註冊用戶$EDITORNAME剛剛在您的Wiki上作出了首次編輯哦！為何不去他的<a href="$EDITORTALKPAGEURL">對話頁</a>打個招呼呢？<br /><br />
<div style="font-style: italic; font-size: 120%;">——Wikia團隊</div>',
	'founderemails-email-page-edited-reg-user-first-edit-body' => '嗨！$USERNAME

太好了！$EDITORNAME剛剛在$WIKINAME上進行了第一次編輯。

前往$PAGETITLE看看增加了什麼內容。

$PAGEURL

Wikia團隊',
	'founderemails-email-views-digest-body' => '本日$WIKINAME的訪問量是$1{{PLURAL:$1|人|人}}.

繼續豐富、宣傳你的Wiki來鼓勵更多人閱讀、編輯和傳播吧。

$WIKIURL

Wikia團隊',
	'founderemails-email-views-digest-button' => '增加更多頁面',
	'founderemails-email-views-digest-content' => '繼續豐富、宣傳你的Wiki來鼓勵更多人閱讀、編輯和傳播吧。',
	'founderemails-email-views-digest-headline' => '今天，$WIKINAME已有$1人瀏覽',
	'founderemails-email-views-digest-signature' => 'Wikia團隊',
	'founderemails-email-views-digest-subject' => '$WIKINAME今天的瀏覽數',
	'founderemails-lot-happening-body-HTML' => '嗨 $USERNAME,<br /><br />
你的Wiki今天非常熱鬧！ 進入 $MYHOMEURL 看看發生了些什麼事。<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia 團隊</div>',
	'founderemails-lot-happening-body' => '嗨 $USERNAME,

恭喜 $WIKINAME, $WIKIURL非常熱鬧。

如果你還沒訪問過維基動態，去看看你的Wiki發生了些什麼事。 

因為動態內容很多，你也許會想要把通知電子郵件改成摘要模式。在摘要模式下，你會改為每天收到一封列出Wiki上所有動態的電子郵件。

Wikia 團隊',
	'founderemails-lot-happening-subject' => '$WIKINAME正變得越來越熱門！',
	'founderemails-pref-complete-digest-v2' => '...一份每日註册、編輯、訪問量的摘要已準備好',
	'founderemails-pref-complete-digest' => '給我發送$1的每日動態摘要',
	'founderemails-pref-edits-v2' => '...有人編輯',
	'founderemails-pref-edits' => '有人編輯$1時用電子郵件通知我。',
	'founderemails-pref-joins-v2' => '...有人加入時',
	'founderemails-pref-joins' => '有人加入$1時用電子郵件通知我。',
	'founderemails-pref-views-digest-v2' => '...每天總訪問量的摘要已準備好',
	'founderemails-pref-views-digest' => '每日發送郵件顯示$1的訪問量',
];

$messages['zh'] = [
	'founderemails-answers-email-page-edited-anon-subject' => '有人编辑了你的Wiki！',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => '嘿！$USERNAME，<br /><br />
$EDITORNAME已经在你的Wiki上做出编辑了！何不到他们的<a href="$EDITORTALKPAGEURL">讨论页</a>打个招呼呢？<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia团队</div>',
	'founderemails-answers-email-page-edited-reg-user-body' => '嘿！$USERNAME，

$EDITORNAME已经在你的Wiki上做出编辑了！何不到他们的讨论页($EDITORTALKPAGEURL)打个招呼呢？

-- Wikia团队',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => '嗨 $USERNAME,<br /><br />
用户 $EDITORNAME 第一次在你的Wiki编辑！何不到他的 <a href="$EDITORTALKPAGEURL">对话页</a> 打个招呼呢?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- The Wikia 团队</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body' => '嘿！$USERNAME，

注册用户$EDITORNAME已经在你的Wiki上做出首次编辑了！何不到他们的讨论页($EDITORTALKPAGEURL)，和他们打个招呼呢？

-- Wikia团队',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => '有位注册用户第一次编辑了你的Wiki ！',
	'founderemails-email-0-day-addpages-content' => 'Wiki是分享您的主题内容的地方。点击<a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">"添加页面"</a> 来帮您的主题增加更多信息。',
	'founderemails-email-0-day-addphotos-button' => '添加一张图片',
	'founderemails-email-0-day-addphotos-content' => '有视觉效果的页面会更好，在您的页面上增加图片吧！可点击 <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"添加图片"</a>来增加图片、图片册或幻灯片等。',
	'founderemails-email-0-day-addphotos-heading' => '添加图片',
	'founderemails-email-0-day-customizetheme-content' => '自定义您的Wiki的样式和图标可以使您的Wiki更出色！使用 <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">主题设计器</a>来使您Wiki的样式、颜色更适合您的主题。',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">我们不会冷落您</span> 我们就在这里帮您一步步将 $WIKINAME做的更好，有任何问题您可访问<a style="color:#2a87d5;text-decoration:none;" href="http://zh.community.wikia.com">zh.community.wikia.com</a> 的论坛和帮助页面，或是 <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">告诉我们</a> 您的问题。',
	'founderemails-email-10-day-email-content' => '用电子邮件通知其他你知道也喜欢你的主题的人，例如朋友或同事，让他们来帮助你。你也可以使用这个电子邮件按钮来传送你的Wiki上的特定图片。',
	'founderemails-email-10-day-join-content' => '在与你的Wiki同主题的论坛或网站发文，邀请其他人来帮助你。如果可能的话，联络管理员，看是否可以把Wiki放在网站的连结中。',
	'founderemails-email-10-day-join-heading' => '邀请同类网站社群一同参与。',
	'founderemails-email-10-day-share-content' => '使用你的 wiki 的首页、文章页面和图片上的 Facebook分享按钮，将内容展示给您的朋友和在 Facebook 上的关注者。',
	'founderemails-email-10-day-tips-heading' => '让其他人来参与你的计划，并向他们展示你已经建立的丰富内容！以下是几种宣传的方式：',
	'founderemails-email-10-day-wikiahelps-text' => '你也可以在<a style="color:#2a87d5;text-decoration:none;" href="http://zh.community.wikia.com">zh.community.wikia.com</a>的论坛中发帖，寻求其他Wikia参与者来帮助你。',
	'founderemails-email-3-day-addphotos-button' => '添加图片',
	'founderemails-email-3-day-addphotos-content' => '让你的页面变得更醒目的最好方式之一是 <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"添加一些图片"</a>。',
	'founderemails-email-3-day-congratulations' => '我们希望了解$HDWIKINAME建设得如何。',
	'founderemails-email-3-day-editmainpage-content' => '主页是当人们访问 <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a> 时第一个看到的页面。通过写一些您主题的详细摘要，并加入一段幻灯片、一组图册或图片滑块给人们良好的第一印象吧。',
	'founderemails-email-3-day-explore-content' => '不要怕参考其他的Wiki如何建构自己的主页和文章页。这里有一些优秀的Wiki可参考: <a style="color:#2a87d5;text-decoration:none;" href="http://zh.pad.wikia.com">Puzzle&Dragon Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://zh.asoiaf.wikia.com">冰与火之歌维基</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://hkbus.wikia.com/">香港巴士大典</a>。',
	'founderemails-email-3-day-tips-heading' => '您成立Wiki已经三天了，我们来提供您一些建设Wiki的建议：',
	'founderemails-email-3-day-wikiahelps-text' => '需要某些方面的协助吗？我们一直都在这里！欢迎造访<a style="color:#2a87d5;text-decoration:none;" href="http://zh.community.wikia.com">zh.community.wikia.com</a>来寻求建议和帮助。',
	'founderemails-email-anon-edit-content' => '有一个未登录Wikia账号的贡献者做了一些编辑。快来看看这个神秘的朋友添加了什么吧！',
	'founderemails-email-complete-digest-body' => '嘿，$USERNAME,

又到了每天了解您的 $WIKINAME, $WIKIURL 的动态的时间了。

访问量：$1 位用户。

继续努力，为读者提供更多、更有趣的内容吧！

编辑量：$2 次编辑。

快乐的编者铸造快乐的维基。记得要不时联络编者们，向他们致以感谢。

新用户：$3 位用户加入了你的维基。

欢迎新编者的到来，给他们留言吧。

你可以随时查看维基动态，发现$WIKINAME上令人兴奋的变化。请常来访问。作为创始人，整个社区期望你协助引导和运作。

Wikia团队',
	'founderemails-email-complete-digest-button' => '前往 维基动态',
	'founderemails-email-complete-digest-content-heading1' => '$1人访问了你的wiki。',
	'founderemails-email-complete-digest-content1' => '继续努力增加大家喜欢阅读的有趣内容！',
	'founderemails-email-complete-digest-content2' => '快乐的编辑者创造出快乐的Wiki。常常向编辑者们表达谢意并与他们交流。',
	'founderemails-email-complete-digest-content3' => '在用户讨论页或留言墙欢迎Wiki的新用户。
<br /><br />
你可以常常注意维基动态，以了解在Y$WIKINAME上所有令人兴奋的更改。作为创始人，你可以藉由常常关注动态来协助、指导这个Wiki的发展。',
	'founderemails-email-complete-digest-headline' => '又到了你了解 $WIKINAME 每天动态的时间了。',
	'founderemails-email-complete-digest-subject' => '$WIKINAME上的最新动态',
	'founderemails-email-first-edit-headline' => '太好了！$EDITORNAME 成功在 $WIKINAME 上做出了第一次编辑。',
	'founderemails-email-footer-line1' => '要了解Wikia的最新消息，请访问<a style="color:#2a87d5;text-decoration:none;" href="http://zh.community.wikia.com">zh.community.wikia.com</a>',
	'founderemails-email-footer-line2' => '想要自订收到哪些电子邮件？ 进入您的<a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">用户设定</a>',
	'founderemails-email-footer-line3' => '<a href="http://www.twitter.com/wikia" style="text-decoration:none">
<img alt="twitter" src="http://images4.wikia.nocookie.net/wikianewsletter/images/f/f7/Twitter.png" style="border:none">
</a>
&nbsp;
<a href="http://www.facebook.com/wikia" style="text-decoration:none">
<img alt="facebook" src="http://images2.wikia.nocookie.net/wikianewsletter/images/5/55/Facebook.png" style="border:none">
</a>
&nbsp;
<a href="http://www.youtube.com/wikia" style="text-decoration:none">
<img alt="youtube" src="http://images3.wikia.nocookie.net/wikianewsletter/images/a/af/Youtube.png" style="border:none">
</a>
&nbsp;
<a href="http://zh.community.wikia.com/wiki/%E5%8D%9A%E5%AE%A2:%E5%8D%9A%E5%AE%A2%E5%B8%96%E5%AD%90" style="text-decoration:none">
<img alt="wikia" src="http://images1.wikia.nocookie.net/wikianewsletter/images/b/be/Wikia_blog.png" style="border:none">
</a>',
	'founderemails-email-general-edit-headline' => '$EDITORNAME刚才在$WIKINAME又编辑了$PAGETITLE。',
	'founderemails-email-lot-happening-content' => '如果你还没有看过维基动态，建议进去了解一下你的Wiki发生的各种事情。因为可能有非常多的内容，你可坏会希望改变你的电子邮件设定为摘要模式，在摘要模式中，你会每天收到一封列出Wiki所有动态的电子邮件。',
	'founderemails-email-page-edited-anon-body-HTML' => '嗨！$USERNAME<br /><br />
有人编辑了你的wiki！何不<a href="$MYHOMEURL">查看一下</a>更改了什么？<br /><br /><div style="font-style: italic; font-size: 120%;">--Wikia团队</div>',
	'founderemails-email-page-edited-anon-body' => 'Hi $USERNAME，

一位Wikia贡献者刚刚在$WIKINAME编辑了$PAGETITLE。

Wikia贡献者是指没有登录Wikia账户的匿名编辑者。去看看这个神秘的朋友添加了什么吧！

$PAGEURL

Wikia团队',
	'founderemails-email-page-edited-reg-user-body-HTML' => '嗨！$USERNAME<br /><br />
注册用户$EDITORNAME编辑了您的wiki！为何不在他们的<a href="$EDITORTALKPAGEURL">对话页</a>打个招呼呢？<br /><br /><div style="font-style: italic; font-size: 120%;">--Wikia团队</div>',
	'founderemails-email-page-edited-reg-user-body' => '嗨！$USERNAME

$EDITORNAME刚刚又在$WIKINAME编辑了$PAGETITLE。

前往$PAGETITLE，查看他改变了什么。

$PAGEURL

Wikia团队',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => '嗨，$USERNAME<br /><br />
注册用户$EDITORNAME刚刚在您的Wiki上作出了首次编辑哦！为何不去他的<a href="$EDITORTALKPAGEURL">对话页</a>打个招呼呢？<br /><br />
<div style="font-style: italic; font-size: 120%;">——Wikia团队</div>',
	'founderemails-email-page-edited-reg-user-first-edit-body' => '嗨！$USERNAME

太好了！$EDITORNAME刚刚在$WIKINAME上进行了第一次编辑。

前往$PAGETITLE看看增加了什么内容。

$PAGEURL

Wikia团队',
	'founderemails-email-views-digest-content' => '继续丰富、宣传你的Wiki来鼓励更多人阅读、编辑和传播吧。',
	'founderemails-email-views-digest-headline' => '今天，$WIKINAME已有$1人浏览',
	'founderemails-email-views-digest-subject' => '$WIKINAME今天的浏览数',
	'founderemails-lot-happening-body-HTML' => '嗨 $USERNAME,<br /><br />
你的Wiki今天非常热闹！ 进入 $MYHOMEURL 看看发生了些什么事。<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia 团队</div>',
	'founderemails-lot-happening-body' => '嗨 $USERNAME,

恭喜 $WIKINAME, $WIKIURL非常热闹。

如果你还没访问过维基动态，去看看你的Wiki发生了些什么事。 

因为动态内容很多，你也许会想要把通知电子邮件改成摘要模式。在摘要模式下，你会改为每天收到一封列出Wiki上所有动态的电子邮件。

Wikia 团队',
	'founderemails-pref-complete-digest' => '给我发送$1的每日动态摘要',
	'founderemails-pref-joins-v2' => '...有人加入时',
	'founderemails-pref-views-digest-v2' => '...每天总访问量的摘要已准备好',
];

$messages['zh-hk'] = [
	'founderemails-answers-email-page-edited-anon-body-HTML' => '嗨，$USERNAME<br /><br />
已經有人參與編輯您的wiki了！不妨去<a href="$MYHOMEURL">查看</a>一下編寫的內容？<br /><br />
<div style="font-style: italic; font-size: 120%;">——Wikia團隊</div>',
	'founderemails-answers-email-page-edited-anon-body' => '嗨，$USERNAME，

已經有人參與編輯您的wiki了！不妨去 $MYHOMEURL查看一下編寫的內容？

——Wikia團隊',
	'founderemails-answers-email-page-edited-anon-subject' => '有人編輯了你的Wiki！',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => '嘿！$USERNAME，<br /><br />
$EDITORNAME已經在你的Wiki上做出編輯了！何不到他們的<a href="$EDITORTALKPAGEURL">討論頁</a>打個招呼呢？<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia團隊</div>',
	'founderemails-answers-email-page-edited-reg-user-body' => '嘿！$USERNAME，

$EDITORNAME已經在你的Wiki上做出編輯了！何不到他們的討論頁($EDITORTALKPAGEURL)打個招呼呢？

-- Wikia團隊',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => '嗨 $USERNAME,<br /><br />
用戶 $EDITORNAME 第一次在你的Wiki編輯！何不到他的 <a href="$EDITORTALKPAGEURL">對話頁</a> 打個招呼呢?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- The Wikia 團隊</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => '有位註冊用戶第一次編輯了你的Wiki ！',
	'founderemails-email-0-day-addpages-content' => 'Wiki是分享您的主題內容的地方。點擊<a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">"增加新頁面"</a> 來幫您的主題增加更多資訊。',
	'founderemails-email-0-day-addpages-heading' => '添加頁面',
	'founderemails-email-0-day-addphotos-content' => '有視覺效果的頁面會更好，在您的頁面上增加圖片吧！可點擊 <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"增加圖片"</a>來增加圖片、圖片冊或幻燈片等。',
	'founderemails-email-0-day-congratulations' => '恭喜創建了 $HDWIKINAME ！',
	'founderemails-email-0-day-customizetheme-content' => '自訂您的Wiki的樣式和圖標可以使您的Wiki更出色！使用 <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">主題設計器</a>來使您Wiki的樣式、顏色更適合您的主題。',
	'founderemails-email-0-day-heading' => '很高興認你，$USERNAME，',
	'founderemails-email-0-day-tips-heading' => '這裡有幾個有益的提示幫助你開始：',
	'founderemails-email-0-day-wikiahelps-signature' => '祝建設wiki愉快!<br />Wikia團隊',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">我們不會冷落您</span> 我們就在這裡幫您一步步將 $WIKINAME做的更好，有任何問題您可訪問<a style="color:#2a87d5;text-decoration:none;" href="http://zh.community.wikia.com">zh.community.wikia.com</a> 的論壇和説明頁面，或是 <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">告訴我們</a> 您的問題。',
	'founderemails-email-10-day-email-content' => '用電子郵件通知其他你知道也喜歡你的主題的人，例如朋友或同事，讓他們來幫助你。你也可以使用這個電子郵件按鈕來傳送你的Wiki上的特定圖片。',
	'founderemails-email-10-day-email-heading' => '利用電子郵件的力量。',
	'founderemails-email-10-day-join-content' => '在與你的Wiki同主題的論壇或網站發文，邀請其他人來幫助你。如果可能的話，聯絡管理員，看是否可以把Wiki放在網站的連結中。',
	'founderemails-email-10-day-join-heading' => '邀請同類的網站社群一同參與',
	'founderemails-email-10-day-share-heading' => '媽媽一定和你說過「獨樂樂不如眾樂樂」的道理吧？',
	'founderemails-email-10-day-tips-heading' => '讓其他人來參與你的計劃，並向他們展示你已經建立的豐富內容！以下是幾種宣傳的方式：',
	'founderemails-email-10-day-wikiahelps-signature' => '繼續加油喔！<br />Wikia 團隊',
	'founderemails-email-10-day-wikiahelps-text' => '你也可以在<a style="color:#2a87d5;text-decoration:none;" href="http://zh.community.wikia.com">zh.community.wikia.com</a>的論壇中發文，尋求其他Wikia參與者來幫助你。',
	'founderemails-email-3-day-addphotos-content' => '讓你的頁面變得更醒目的最好方式之一是 <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"增加一些圖片"</a>。',
	'founderemails-email-3-day-congratulations' => '我們希望了解$HDWIKINAME建設得如何。',
	'founderemails-email-3-day-editmainpage-content' => '首頁是當人們訪問 <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a> 時第一個看到的頁面。通過寫一些您主題的詳細摘要，並加入一段幻燈片、一組圖冊或圖片滑塊給人們良好的第一印象吧。',
	'founderemails-email-3-day-editmainpage-heading' => '美化您的首頁。',
	'founderemails-email-3-day-explore-content' => '不要怕參考其他的Wiki如何建構自己的首頁和文章頁。這裡有一些優秀的Wiki可參考: <a style="color:#2a87d5;text-decoration:none;" href="http://zh.pad.wikia.com">Puzzle&Dragon Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://zh.asoiaf.wikia.com">冰與火之歌維基</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://hkbus.wikia.com/">香港巴士大典</a>。',
	'founderemails-email-3-day-tips-heading' => '您成立Wiki已經三天了，我們來提供您一些建設Wiki的建議：',
	'founderemails-email-3-day-wikiahelps-text' => '需要某些方面的協助嗎？我們一直都在這裡！歡迎造訪<a style="color:#2a87d5;text-decoration:none;" href="http://zh.community.wikia.com">zh.community.wikia.com</a>來尋求建議和幫助。',
	'founderemails-email-anon-edit-content' => '有一個未登錄Wikia賬號的貢獻者做了一些編輯。快來看看這個神秘的朋友添加了什麼吧！',
	'founderemails-email-anon-edit-greeting' => '嗨，$USERNAME，',
	'founderemails-email-complete-digest-body' => '嘿，$USERNAME,

又到了每天了解您的 $WIKINAME, $WIKIURL 的動態的時間了。

訪問量：$1 位用戶。

繼續努力，為讀者提供更多、更有趣的內容吧！

編輯量：$2 次編輯。

快樂的編者鑄造快樂的維基。記得要不時聯絡編者們，向他們致以感謝。

新用戶：$3 位用戶加入了你的維基。

歡迎新編者的到來，給他們留言吧。

你可以隨時查看維基動態，發現$WIKINAME上令人興奮的變化。請常來訪問。作為創始人，整個社區期望你協助引導和運作。

Wikia團隊',
	'founderemails-email-complete-digest-button' => '前往 維基動態',
	'founderemails-email-complete-digest-content-heading1' => '$1人訪問了你的wiki。',
	'founderemails-email-complete-digest-content-heading2' => '已做出$1 {{PLURAL:$1|次編輯|次編輯}}。',
	'founderemails-email-complete-digest-content-heading3' => '$1人加入了你的Wiki。',
	'founderemails-email-complete-digest-content1' => '繼續努力增加大家喜歡閱讀的有趣內容！',
	'founderemails-email-complete-digest-content2' => '快樂的編輯者創造出快樂的Wiki。常常向編輯者們表達謝意並與他們交流。',
	'founderemails-email-complete-digest-content3' => '在用戶討論頁或留言牆歡迎Wiki的新用戶。
<br /><br />
你可以常常注意維基動態，以了解在Y$WIKINAME上所有令人興奮的更改。作為創始人，你可以藉由常常關注動態來協助、指導這個Wiki的發展。',
	'founderemails-email-complete-digest-headline' => '又到了你了解 $WIKINAME 每天動態的時間了。',
	'founderemails-email-complete-digest-signature' => 'Wikia團隊',
	'founderemails-email-complete-digest-subject' => '$WIKINAME上的最新動態',
	'founderemails-email-first-edit-greeting' => '嗨，$USERNAME，',
	'founderemails-email-first-edit-headline' => '太好了！$EDITORNAME 成功在 $WIKINAME 上做出了第一次編輯。',
	'founderemails-email-footer-line1' => '要了解Wikia的最新消息，請訪問<a style="color:#2a87d5;text-decoration:none;" href="http://zh.community.wikia.com">zh.community.wikia.com</a>',
	'founderemails-email-footer-line2' => '想要自訂收到哪些電子郵件？ 進入您的<a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">用戶設定</a>',
	'founderemails-email-footer-line3' => '<a href="http://www.twitter.com/wikia" style="text-decoration:none">
<img alt="twitter" src="http://images4.wikia.nocookie.net/wikianewsletter/images/f/f7/Twitter.png" style="border:none">
</a>
&nbsp;
<a href="http://www.facebook.com/wikia" style="text-decoration:none">
<img alt="facebook" src="http://images2.wikia.nocookie.net/wikianewsletter/images/5/55/Facebook.png" style="border:none">
</a>
&nbsp;
<a href="http://www.youtube.com/wikia" style="text-decoration:none">
<img alt="youtube" src="http://images3.wikia.nocookie.net/wikianewsletter/images/a/af/Youtube.png" style="border:none">
</a>
&nbsp;
<a href="http://zh.community.wikia.com/wiki/%E5%8D%9A%E5%AE%A2:%E5%8D%9A%E5%AE%A2%E5%B8%96%E5%AD%90" style="text-decoration:none">
<img alt="wikia" src="http://images1.wikia.nocookie.net/wikianewsletter/images/b/be/Wikia_blog.png" style="border:none">
</a>',
	'founderemails-email-general-edit-content' => '到$PAGETITLE去看看他們增加了什麼。',
	'founderemails-email-general-edit-greeting' => '嗨，$USERNAME，',
	'founderemails-email-general-edit-headline' => '$EDITORNAME剛才在$WIKINAME又編輯了$PAGETITLE。',
	'founderemails-email-lot-happening-button' => '查看動態',
	'founderemails-email-lot-happening-content' => '如果你還沒有看過維基動態，建議進去了解一下你的Wiki發生的各種事情。因為可能有非常多的內容，你可壞會希望改變你的電子郵件設定為摘要模式，在摘要模式中，你會每天收到一封列出Wiki所有動態的電子郵件。',
	'founderemails-email-lot-happening-headline' => '恭喜您，今天在 $WIKINAME 有很多編輯！',
	'founderemails-email-lot-happening-signature' => 'Wikia團隊',
	'founderemails-email-page-edited-anon-body-HTML' => '嗨！$USERNAME<br /><br />
有人編輯了你的wiki！何不<a href="$MYHOMEURL">查看一下</a>更改了什麼？<br /><br /><div style="font-style: italic; font-size: 120%;">--Wikia團隊</div>',
	'founderemails-email-page-edited-anon-body' => 'Hi $USERNAME，

一位Wikia貢獻者剛剛在$WIKINAME編輯了$PAGETITLE。

Wikia貢獻者是指沒有登錄Wikia賬戶的匿名編輯者。去看看這個神秘的朋友添加了什麼吧！

$PAGEURL

Wikia團隊',
	'founderemails-email-page-edited-reg-user-body-HTML' => '嗨！$USERNAME<br /><br />
註冊用戶$EDITORNAME編輯了您的wiki！為何不在他們的<a href="$EDITORTALKPAGEURL">對話頁</a>打個招呼呢？<br /><br /><div style="font-style: italic; font-size: 120%;">--Wikia團隊</div>',
	'founderemails-email-page-edited-reg-user-body' => '嗨！$USERNAME

$EDITORNAME剛剛又在$WIKINAME編輯了$PAGETITLE。

前往$PAGETITLE，查看他改變了什麼。

$PAGEURL

Wikia團隊',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => '嗨，$USERNAME<br /><br />
註冊用戶$EDITORNAME剛剛在您的Wiki上作出了首次編輯哦！為何不去他的<a href="$EDITORTALKPAGEURL">對話頁</a>打個招呼呢？<br /><br />
<div style="font-style: italic; font-size: 120%;">——Wikia團隊</div>',
	'founderemails-email-page-edited-reg-user-first-edit-body' => '嗨！$USERNAME

太好了！$EDITORNAME剛剛在$WIKINAME上進行了第一次編輯。

前往$PAGETITLE看看增加了什麼內容。

$PAGEURL

Wikia團隊',
	'founderemails-email-user-registered-greeting' => '嗨！$USERNAME，',
	'founderemails-email-views-digest-body' => '本日$WIKINAME的訪問量是$1{{PLURAL:$1|人|人}}.

繼續豐富、宣傳你的Wiki來鼓勵更多人閱讀、編輯和傳播吧。

$WIKIURL

Wikia團隊',
	'founderemails-email-views-digest-button' => '增加更多頁面',
	'founderemails-email-views-digest-content' => '繼續豐富、宣傳你的Wiki來鼓勵更多人閱讀、編輯和傳播吧。',
	'founderemails-email-views-digest-headline' => '今天，$WIKINAME已有$1人瀏覽',
	'founderemails-email-views-digest-signature' => 'Wikia團隊',
	'founderemails-email-views-digest-subject' => '$WIKINAME今天的瀏覽數',
	'founderemails-lot-happening-body-HTML' => '嗨 $USERNAME,<br /><br />
你的Wiki今天非常熱鬧！ 進入 $MYHOMEURL 看看發生了些什麼事。<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia 團隊</div>',
	'founderemails-lot-happening-body' => '嗨 $USERNAME,

恭喜 $WIKINAME, $WIKIURL非常熱鬧。

如果你還沒訪問過維基動態，去看看你的Wiki發生了些什麼事。 

因為動態內容很多，你也許會想要把通知電子郵件改成摘要模式。在摘要模式下，你會改為每天收到一封列出Wiki上所有動態的電子郵件。

Wikia 團隊',
	'founderemails-lot-happening-subject' => '$WIKINAME正變得越來越熱門！',
	'founderemails-pref-complete-digest-v2' => '...一份每日註册、編輯、訪問量的摘要已準備好',
	'founderemails-pref-complete-digest' => '給我發送$1的每日動態摘要',
	'founderemails-pref-edits-v2' => '...有人編輯',
	'founderemails-pref-edits' => '有人編輯$1時用電子郵件通知我。',
	'founderemails-pref-joins-v2' => '...有人加入時',
	'founderemails-pref-joins' => '有人加入$1時用電子郵件通知我。',
	'founderemails-pref-views-digest-v2' => '...每天總訪問量的摘要已準備好',
	'founderemails-pref-views-digest' => '每日發送郵件顯示$1的訪問量',
];

$messages['zh-tw'] = [
	'founderemails-answers-email-page-edited-anon-body-HTML' => '嗨，$USERNAME<br /><br />
已經有人參與編輯您的wiki了！不妨去<a href="$MYHOMEURL">查看</a>一下編寫的內容？<br /><br />
<div style="font-style: italic; font-size: 120%;">——Wikia團隊</div>',
	'founderemails-answers-email-page-edited-anon-body' => '嗨，$USERNAME，

已經有人參與編輯您的wiki了！不妨去 $MYHOMEURL查看一下編寫的內容？

——Wikia團隊',
	'founderemails-answers-email-page-edited-anon-subject' => '有人編輯了你的Wiki！',
	'founderemails-answers-email-page-edited-reg-user-body-HTML' => '嘿！$USERNAME，<br /><br />
$EDITORNAME已經在你的Wiki上做出編輯了！何不到他們的<a href="$EDITORTALKPAGEURL">討論頁</a>打個招呼呢？<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia團隊</div>',
	'founderemails-answers-email-page-edited-reg-user-body' => '嘿！$USERNAME，

$EDITORNAME已經在你的Wiki上做出編輯了！何不到他們的討論頁($EDITORTALKPAGEURL)打個招呼呢？

-- Wikia團隊',
	'founderemails-answers-email-page-edited-reg-user-first-edit-body-HTML' => '嗨 $USERNAME,<br /><br />
用戶 $EDITORNAME 第一次在你的Wiki編輯！何不到他的 <a href="$EDITORTALKPAGEURL">對話頁</a> 打個招呼呢?<br /><br />
<div style="font-style: italic; font-size: 120%;">-- The Wikia 團隊</div>',
	'founderemails-answers-email-page-edited-reg-user-first-edit-subject' => '有位註冊用戶第一次編輯了你的Wiki ！',
	'founderemails-email-0-day-addpages-content' => 'Wiki是分享您的主題內容的地方。點擊<a style="color:#2a87d5;text-decoration:none;" href="$ADDAPAGEURL">"增加新頁面"</a> 來幫您的主題增加更多資訊。',
	'founderemails-email-0-day-addpages-heading' => '添加頁面',
	'founderemails-email-0-day-addphotos-content' => '有視覺效果的頁面會更好，在您的頁面上增加圖片吧！可點擊 <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"增加圖片"</a>來增加圖片、圖片冊或幻燈片等。',
	'founderemails-email-0-day-congratulations' => '恭喜創建了 $HDWIKINAME ！',
	'founderemails-email-0-day-customizetheme-content' => '自訂您的Wiki的樣式和圖標可以使您的Wiki更出色！使用 <a style="color:#2a87d5;text-decoration:none;" href="$CUSTOMIZETHEMEURL">主題設計器</a>來使您Wiki的樣式、顏色更適合您的主題。',
	'founderemails-email-0-day-heading' => '很高興認你，$USERNAME，',
	'founderemails-email-0-day-tips-heading' => '這裡有幾個有益的提示幫助你開始：',
	'founderemails-email-0-day-wikiahelps-signature' => '祝建設wiki愉快!<br />Wikia團隊',
	'founderemails-email-0-day-wikiahelps-text' => '<span style="color:#2a87d5;font-weight:bold">我們不會冷落您</span> 我們就在這裡幫您一步步將 $WIKINAME做的更好，有任何問題您可訪問<a style="color:#2a87d5;text-decoration:none;" href="http://zh.community.wikia.com">zh.community.wikia.com</a> 的論壇和説明頁面，或是 <a style="color:#2a87d5;text-decoration:none;" href="http://www.wikia.com/Special:Contact">告訴我們</a> 您的問題。',
	'founderemails-email-10-day-email-content' => '用電子郵件通知其他你知道也喜歡你的主題的人，例如朋友或同事，讓他們來幫助你。你也可以使用這個電子郵件按鈕來傳送你的Wiki上的特定圖片。',
	'founderemails-email-10-day-email-heading' => '利用電子郵件的力量。',
	'founderemails-email-10-day-join-content' => '在與你的Wiki同主題的論壇或網站發文，邀請其他人來幫助你。如果可能的話，聯絡管理員，看是否可以把Wiki放在網站的連結中。',
	'founderemails-email-10-day-join-heading' => '邀請同類的網站社群一同參與',
	'founderemails-email-10-day-share-heading' => '媽媽一定和你說過「獨樂樂不如眾樂樂」的道理吧？',
	'founderemails-email-10-day-tips-heading' => '讓其他人來參與你的計劃，並向他們展示你已經建立的豐富內容！以下是幾種宣傳的方式：',
	'founderemails-email-10-day-wikiahelps-signature' => '繼續加油喔！<br />Wikia 團隊',
	'founderemails-email-10-day-wikiahelps-text' => '你也可以在<a style="color:#2a87d5;text-decoration:none;" href="http://zh.community.wikia.com">zh.community.wikia.com</a>的論壇中發文，尋求其他Wikia參與者來幫助你。',
	'founderemails-email-3-day-addphotos-content' => '讓你的頁面變得更醒目的最好方式之一是 <a style="color:#2a87d5;text-decoration:none;" href="$ADDAPHOTOURL">"增加一些圖片"</a>。',
	'founderemails-email-3-day-congratulations' => '我們希望了解$HDWIKINAME建設得如何。',
	'founderemails-email-3-day-editmainpage-content' => '首頁是當人們訪問 <a href="$WIKIURL" style="color:#2a87d5;text-decoration:none;">$WIKINAME</a> 時第一個看到的頁面。通過寫一些您主題的詳細摘要，並加入一段幻燈片、一組圖冊或圖片滑塊給人們良好的第一印象吧。',
	'founderemails-email-3-day-editmainpage-heading' => '美化您的首頁。',
	'founderemails-email-3-day-explore-content' => '不要怕參考其他的Wiki如何建構自己的首頁和文章頁。這裡有一些優秀的Wiki可參考: <a style="color:#2a87d5;text-decoration:none;" href="http://zh.pad.wikia.com">Puzzle&Dragon Wiki</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://zh.asoiaf.wikia.com">冰與火之歌維基</a>, <a style="color:#2a87d5;text-decoration:none;" href="http://hkbus.wikia.com/">香港巴士大典</a>。',
	'founderemails-email-3-day-tips-heading' => '您成立Wiki已經三天了，我們來提供您一些建設Wiki的建議：',
	'founderemails-email-3-day-wikiahelps-text' => '需要某些方面的協助嗎？我們一直都在這裡！歡迎造訪<a style="color:#2a87d5;text-decoration:none;" href="http://zh.community.wikia.com">zh.community.wikia.com</a>來尋求建議和幫助。',
	'founderemails-email-anon-edit-content' => '有一個未登錄Wikia賬號的貢獻者做了一些編輯。快來看看這個神秘的朋友添加了什麼吧！',
	'founderemails-email-anon-edit-greeting' => '嗨，$USERNAME，',
	'founderemails-email-complete-digest-body' => '嘿，$USERNAME,

又到了每天了解您的 $WIKINAME, $WIKIURL 的動態的時間了。

訪問量：$1 位用戶。

繼續努力，為讀者提供更多、更有趣的內容吧！

編輯量：$2 次編輯。

快樂的編者鑄造快樂的維基。記得要不時聯絡編者們，向他們致以感謝。

新用戶：$3 位用戶加入了你的維基。

歡迎新編者的到來，給他們留言吧。

你可以隨時查看維基動態，發現$WIKINAME上令人興奮的變化。請常來訪問。作為創始人，整個社區期望你協助引導和運作。

Wikia團隊',
	'founderemails-email-complete-digest-button' => '前往 維基動態',
	'founderemails-email-complete-digest-content-heading1' => '$1人訪問了你的wiki。',
	'founderemails-email-complete-digest-content-heading2' => '已做出$1 {{PLURAL:$1|次編輯|次編輯}}。',
	'founderemails-email-complete-digest-content-heading3' => '$1人加入了你的Wiki。',
	'founderemails-email-complete-digest-content1' => '繼續努力增加大家喜歡閱讀的有趣內容！',
	'founderemails-email-complete-digest-content2' => '快樂的編輯者創造出快樂的Wiki。常常向編輯者們表達謝意並與他們交流。',
	'founderemails-email-complete-digest-content3' => '在用戶討論頁或留言牆歡迎Wiki的新用戶。
<br /><br />
你可以常常注意維基動態，以了解在Y$WIKINAME上所有令人興奮的更改。作為創始人，你可以藉由常常關注動態來協助、指導這個Wiki的發展。',
	'founderemails-email-complete-digest-headline' => '又到了你了解 $WIKINAME 每天動態的時間了。',
	'founderemails-email-complete-digest-signature' => 'Wikia團隊',
	'founderemails-email-complete-digest-subject' => '$WIKINAME上的最新動態',
	'founderemails-email-first-edit-greeting' => '嗨，$USERNAME，',
	'founderemails-email-first-edit-headline' => '太好了！$EDITORNAME 成功在 $WIKINAME 上做出了第一次編輯。',
	'founderemails-email-footer-line1' => '要了解Wikia的最新消息，請訪問<a style="color:#2a87d5;text-decoration:none;" href="http://zh.community.wikia.com">zh.community.wikia.com</a>',
	'founderemails-email-footer-line2' => '想要自訂收到哪些電子郵件？ 進入您的<a href="{{fullurl:{{ns:special}}:Preferences}}" style="color:#2a87d5;text-decoration:none;">用戶設定</a>',
	'founderemails-email-footer-line3' => '<a href="http://www.twitter.com/wikia" style="text-decoration:none">
<img alt="twitter" src="http://images4.wikia.nocookie.net/wikianewsletter/images/f/f7/Twitter.png" style="border:none">
</a>
&nbsp;
<a href="http://www.facebook.com/wikia" style="text-decoration:none">
<img alt="facebook" src="http://images2.wikia.nocookie.net/wikianewsletter/images/5/55/Facebook.png" style="border:none">
</a>
&nbsp;
<a href="http://www.youtube.com/wikia" style="text-decoration:none">
<img alt="youtube" src="http://images3.wikia.nocookie.net/wikianewsletter/images/a/af/Youtube.png" style="border:none">
</a>
&nbsp;
<a href="http://zh.community.wikia.com/wiki/%E5%8D%9A%E5%AE%A2:%E5%8D%9A%E5%AE%A2%E5%B8%96%E5%AD%90" style="text-decoration:none">
<img alt="wikia" src="http://images1.wikia.nocookie.net/wikianewsletter/images/b/be/Wikia_blog.png" style="border:none">
</a>',
	'founderemails-email-general-edit-content' => '到$PAGETITLE去看看他們增加了什麼。',
	'founderemails-email-general-edit-greeting' => '嗨，$USERNAME，',
	'founderemails-email-general-edit-headline' => '$EDITORNAME剛才在$WIKINAME又編輯了$PAGETITLE。',
	'founderemails-email-lot-happening-button' => '查看動態',
	'founderemails-email-lot-happening-content' => '如果你還沒有看過維基動態，建議進去了解一下你的Wiki發生的各種事情。因為可能有非常多的內容，你可壞會希望改變你的電子郵件設定為摘要模式，在摘要模式中，你會每天收到一封列出Wiki所有動態的電子郵件。',
	'founderemails-email-lot-happening-headline' => '恭喜您，今天在 $WIKINAME 有很多編輯！',
	'founderemails-email-lot-happening-signature' => 'Wikia團隊',
	'founderemails-email-page-edited-anon-body-HTML' => '嗨！$USERNAME<br /><br />
有人編輯了你的wiki！何不<a href="$MYHOMEURL">查看一下</a>更改了什麼？<br /><br /><div style="font-style: italic; font-size: 120%;">--Wikia團隊</div>',
	'founderemails-email-page-edited-anon-body' => 'Hi $USERNAME，

一位Wikia貢獻者剛剛在$WIKINAME編輯了$PAGETITLE。

Wikia貢獻者是指沒有登錄Wikia賬戶的匿名編輯者。去看看這個神秘的朋友添加了什麼吧！

$PAGEURL

Wikia團隊',
	'founderemails-email-page-edited-reg-user-body-HTML' => '嗨！$USERNAME<br /><br />
註冊用戶$EDITORNAME編輯了您的wiki！為何不在他們的<a href="$EDITORTALKPAGEURL">對話頁</a>打個招呼呢？<br /><br /><div style="font-style: italic; font-size: 120%;">--Wikia團隊</div>',
	'founderemails-email-page-edited-reg-user-body' => '嗨！$USERNAME

$EDITORNAME剛剛又在$WIKINAME編輯了$PAGETITLE。

前往$PAGETITLE，查看他改變了什麼。

$PAGEURL

Wikia團隊',
	'founderemails-email-page-edited-reg-user-first-edit-body-HTML' => '嗨，$USERNAME<br /><br />
註冊用戶$EDITORNAME剛剛在您的Wiki上作出了首次編輯哦！為何不去他的<a href="$EDITORTALKPAGEURL">對話頁</a>打個招呼呢？<br /><br />
<div style="font-style: italic; font-size: 120%;">——Wikia團隊</div>',
	'founderemails-email-page-edited-reg-user-first-edit-body' => '嗨！$USERNAME

太好了！$EDITORNAME剛剛在$WIKINAME上進行了第一次編輯。

前往$PAGETITLE看看增加了什麼內容。

$PAGEURL

Wikia團隊',
	'founderemails-email-user-registered-greeting' => '嗨！$USERNAME，',
	'founderemails-email-views-digest-body' => '本日$WIKINAME的訪問量是$1{{PLURAL:$1|人|人}}.

繼續豐富、宣傳你的Wiki來鼓勵更多人閱讀、編輯和傳播吧。

$WIKIURL

Wikia團隊',
	'founderemails-email-views-digest-button' => '增加更多頁面',
	'founderemails-email-views-digest-content' => '繼續豐富、宣傳你的Wiki來鼓勵更多人閱讀、編輯和傳播吧。',
	'founderemails-email-views-digest-headline' => '今天，$WIKINAME已有$1人瀏覽',
	'founderemails-email-views-digest-signature' => 'Wikia團隊',
	'founderemails-email-views-digest-subject' => '$WIKINAME今天的瀏覽數',
	'founderemails-lot-happening-body-HTML' => '嗨 $USERNAME,<br /><br />
你的Wiki今天非常熱鬧！ 進入 $MYHOMEURL 看看發生了些什麼事。<br /><br />
<div style="font-style: italic; font-size: 120%;">-- Wikia 團隊</div>',
	'founderemails-lot-happening-body' => '嗨 $USERNAME,

恭喜 $WIKINAME, $WIKIURL非常熱鬧。

如果你還沒訪問過維基動態，去看看你的Wiki發生了些什麼事。 

因為動態內容很多，你也許會想要把通知電子郵件改成摘要模式。在摘要模式下，你會改為每天收到一封列出Wiki上所有動態的電子郵件。

Wikia 團隊',
	'founderemails-lot-happening-subject' => '$WIKINAME正變得越來越熱門！',
	'founderemails-pref-complete-digest-v2' => '...一份每日註册、編輯、訪問量的摘要已準備好',
	'founderemails-pref-complete-digest' => '給我發送$1的每日動態摘要',
	'founderemails-pref-edits-v2' => '...有人編輯',
	'founderemails-pref-edits' => '有人編輯$1時用電子郵件通知我。',
	'founderemails-pref-joins-v2' => '...有人加入時',
	'founderemails-pref-joins' => '有人加入$1時用電子郵件通知我。',
	'founderemails-pref-views-digest-v2' => '...每天總訪問量的摘要已準備好',
	'founderemails-pref-views-digest' => '每日發送郵件顯示$1的訪問量',
];

