<?php

//---------------------------------------------------
//	Admin Notification of Mailinglist subscription
//--------------------------------------------------

if ( ! function_exists('admin_notify_mailinglist_title'))
{
	function admin_notify_mailinglist_title()
	{
return <<<EOF
Iemand heeft zich ingeschreven voor uw mailinglijst.
EOF;
	}
}

if ( ! function_exists('admin_notify_mailinglist'))
{
	function admin_notify_mailinglist()
	{
return <<<EOF
Een nieuwe mailinglijst inschrijving is geaccepteerd. 

Email Address: {email}
Mailing List: {mailing_list}
EOF;
	}
}



//---------------------------------------------------
//	Admin Notification of New Entry
//--------------------------------------------------

if ( ! function_exists('admin_notify_entry_title'))
{
	function admin_notify_entry_title()
	{
return <<<EOF
Een nieuw Channel bericht is geplaatst.
EOF;
	}
}

if ( ! function_exists('admin_notify_entry'))
{
	function admin_notify_entry()
	{
return <<<EOF
Een nieuw bericht is geplaatst in het volgende channel:
{channel_name}

De titel van het bericht is:
{entry_title}

Geplaatst door: {name}
Email: {email}

Om het bericht te lezen klik op de volgende link:
{entry_url}

EOF;
	}
}



//---------------------------------------------------
//	Admin Notification of New Member Registrations
//--------------------------------------------------

if ( ! function_exists('admin_notify_reg_title'))
{
	function admin_notify_reg_title()
	{
return <<<EOF
Notificatie van een nieuwe registratie
EOF;
	}
}

if ( ! function_exists('admin_notify_reg'))
{
	function admin_notify_reg()
	{
return <<<EOF
Nieuwe registratie site: {site_name}

Schermnaam: {name}
Gebruikersnaam: {username}
E-mail: {email}

Uw control panel URL: {control_panel_url}
EOF;
	}
}



//---------------------------------------------------
//	Admin Notification of New Comment
//--------------------------------------------------

if ( ! function_exists('admin_notify_comment_title'))
{
	function admin_notify_comment_title()
	{
return <<<EOF
Er is een reactie geplaatst
EOF;
	}
}

if ( ! function_exists('admin_notify_comment'))
{
	function admin_notify_comment()
	{
return <<<EOF
Er is een reactie geplaatst in het volgende channel:
{channel_name}

De titel van het bericht is:
{entry_title}

Te vinden op: 
{comment_url}

Geplaatst door: {name}
E-mail: {email}
URL: {url}
Locatie: {location}

{comment}
EOF;
	}
}



//---------------------------------------------------
//	Membership Activation Instructions
//--------------------------------------------------

if ( ! function_exists('mbr_activation_instructions_title'))
{
	function mbr_activation_instructions_title()
	{
return <<<EOF
Bijgevoegd uw activatiecode
EOF;
	}
}

if ( ! function_exists('mbr_activation_instructions'))
{
	function mbr_activation_instructions()
	{
return <<<EOF
Bedankt voor uw registratie

Om uw account te activeren, klik op de volgende link:

{unwrap}{activation_url}{/unwrap}

Bedankt!

{site_name}

{site_url}
EOF;
	}
}



//---------------------------------------------------
//	Member Forgotten Password Instructions
//--------------------------------------------------

if ( ! function_exists('forgot_password_instructions_title'))
{
	function forgot_password_instructions_title()
	{
return <<<EOF
Login informatie
EOF;
	}
}

if ( ! function_exists('forgot_password_instructions'))
{
	function forgot_password_instructions()
	{
return <<<EOF
{name},

Om uw wachtwoord te wijzigen, ga naar de volgende pagina:

{reset_url}

Uw wachtwoord zal automatisch gereset worden en een nieuw wachtwoord ontvangt u per e-mail.

Indien u niet uw wachtwoord wilt wijzigen, negeer deze e-mail dan. Na 24 uur zal deze link niet meer actief zijn.

{site_name}
{site_url}
EOF;
	}
}




//---------------------------------------------------
//	Reset Password Notification
//--------------------------------------------------

if ( ! function_exists('reset_password_notification_title'))
{
	function reset_password_notification_title()
	{
return <<<EOF
Uw nieuwe login informatie
EOF;
	}
}

if ( ! function_exists('reset_password_notification'))
{
	function reset_password_notification()
	{
return <<<EOF
{name},

Hier is uw nieuwe login informatie:

Gebruikersnaam: {username}
Wachtwoord: {password}

{site_name}
{site_url}
EOF;
	}
}




//---------------------------------------------------
//	Validated Member Notification
//--------------------------------------------------

if ( ! function_exists('validated_member_notify_title'))
{
	function validated_member_notify_title()
	{
return <<<EOF
Uw lidmaatschap is geactiveerd
EOF;
	}
}

if ( ! function_exists('validated_member_notify'))
{
	function validated_member_notify()
	{
return <<<EOF
{name},

Uw lidmaatschap is geactiveerd en klaar om te gebruiken.

Bedankt!

{site_name}
{site_url}
EOF;
	}
}



//---------------------------------------------------
//	Decline Member Validation
//--------------------------------------------------

if ( ! function_exists('decline_member_validation_title'))
{
	function decline_member_validation_title()
	{
return <<<EOF
Uw lidmaatschap is afgewezen.
EOF;
	}
}

if ( ! function_exists('decline_member_validation'))
{
	function decline_member_validation()
	{
return <<<EOF
{name},

Sorry, maar onze staf heeft bepaalt uw account niet te activeren.

{site_name}
{site_url}
EOF;
	}
}



//---------------------------------------------------
//	Mailinglist Activation Instructions
//--------------------------------------------------

if ( ! function_exists('mailinglist_activation_instructions_title'))
{
	function mailinglist_activation_instructions_title()
	{
return <<<EOF
E-mail Bevestiging
EOF;
	}
}

if ( ! function_exists('mailinglist_activation_instructions'))
{
	function mailinglist_activation_instructions()
	{
return <<<EOF
Bedankt voor het inschrijven voor de "{mailing_list}" mailing lijst!

Klik op onderstaande link om uw e-mail adres te bevestigen.

Als u niet lid wilt worden negeer deze e-mail dan.

{unwrap}{activation_url}{/unwrap}

Bedankt!

{site_name}
EOF;
	}
}




//---------------------------------------------------
//	Comment Notification
//--------------------------------------------------

if ( ! function_exists('comment_notification_title'))
{
	function comment_notification_title()
	{
return <<<EOF
Iemand heeft gereageerd op uw bericht
EOF;
	}
}

if ( ! function_exists('comment_notification'))
{
	function comment_notification()
	{
return <<<EOF
{name_of_commenter} heeft gereageerd op een bericht waar u voor ingeschreven bent op:
{channel_name}

De titel van het bericht is:
{entry_title}

U kunt de reactie zien op de volgende URL:
{comment_url}

{comment}

Om verdere e-mails over dit onderwerp te stoppen, klik hier:
{notification_removal_url}
EOF;
	}
}

//---------------------------------------------------
//	Comments Opened Notification
//--------------------------------------------------

if ( ! function_exists('comments_opened_notification_title'))
{
	function comments_opened_notification_title()
	{
return <<<EOF
Nieuwe reacties zijn toegevoegd
EOF;
	}
}

if ( ! function_exists('comments_opened_notification'))
{
	function comments_opened_notification()
	{
return <<<EOF
Nieuwe reacties zijn toegevoegd aan het bericht waar u voor ingeschreven bent op:
{channel_name}

De titel van het bericht is:
{entry_title}

U kunt de reactie zien op de volgende URL:
{comment_url}

{comments}
{comment} 
{/comments}

Om verdere e-mails over dit onderwerp te stoppen, klik hier:
{notification_removal_url}
EOF;
	}
}



//---------------------------------------------------
//	Admin Notification of New Gallery Comment
//--------------------------------------------------

if ( ! function_exists('admin_notify_gallery_comment_title'))
{
	function admin_notify_gallery_comment_title()
	{
return <<<EOF
U heeft een reactie ontvangen
EOF;
	}
}

if ( ! function_exists('admin_notify_gallery_comment'))
{
	function admin_notify_gallery_comment()
	{
return <<<EOF
U heeft een reactie ontvangen op de volgende fotogallery:
{gallery_name}

De titel van het bericht is:
{entry_title}

Op de volgende URL: 
{comment_url}

{comment}
EOF;
	}
}


//---------------------------------------------------
//	Gallery Comment Notification
//--------------------------------------------------

if ( ! function_exists('gallery_comment_notification_title'))
{
	function gallery_comment_notification_title()
	{
return <<<EOF
Iemand heeft gereageerd op uw reactie
EOF;
	}
}

if ( ! function_exists('gallery_comment_notification'))
{
	function gallery_comment_notification()
	{
return <<<EOF
Iemand heeft gereageerd op de foto waar u op geabonneerd bent:
{gallery_name}

U kunt de reactie zien op de volgende URL:
{comment_url}

{comment}

Om verdere e-mails over dit onderwerp te stoppen, klik hier:
{notification_removal_url}
EOF;
	}
}




//---------------------------------------------------
//	Admin Notification of New Forum Post
//--------------------------------------------------

if ( ! function_exists('admin_notify_forum_post_title'))
{
	function admin_notify_forum_post_title()
	{
return <<<EOF
Iemand heeft iets geplaatst in {forum_name}
EOF;
	}
}

if ( ! function_exists('admin_notify_forum_post'))
{
	function admin_notify_forum_post()
	{
return <<<EOF
{name_of_poster} heeft een nieuwe post geplaatst in {forum_name}

De titel van de thread is:
{title}

De post kan op de volgende URL gevonden worden:
{post_url}

{body}
EOF;
	}
}



//---------------------------------------------------
//	Forum Post User Notification
//--------------------------------------------------

if ( ! function_exists('forum_post_notification_title'))
{
	function forum_post_notification_title()
	{
return <<<EOF
Iemand heeft een bericht geplaatst in {forum_name}
EOF;
	}
}

if ( ! function_exists('forum_post_notification'))
{
	function forum_post_notification()
	{
return <<<EOF
Iemand heeft een post gedaan in een thread waarop u geabonneerd bent op:
{forum_name}

De titel van de thread is:
{title}

De post kan op de volgende URL gevonden worden:
{post_url}

{body}

Om verdere e-mails over dit onderwerp te stoppen, klik hier:
{notification_removal_url}
EOF;
	}
}



//---------------------------------------------------
//	Private Message Notification
//--------------------------------------------------

if ( ! function_exists('private_message_notification_title'))
{
	function private_message_notification_title()
	{
return <<<EOF
Iemand heeft u een prive bericht gestuurd.
EOF;
	}
}

if ( ! function_exists('private_message_notification'))
{
	function private_message_notification()
	{
return <<<EOF

{recipient_name},

{sender_name} heeft u een prive bericht gestuurd met de titel ‘{message_subject}’.

U kunt uw privebericht zien door in te loggen op uw inbox via:
{site_url}

Berichtt:

{message_content}

Om verdere notificaties over prive berichten te stoppen, zet deze functie dan uit in uw e-mail instellingen.

{site_name}
{site_url}
EOF;
	}
}



/* -------------------------------------
/*  Notification of Full PM Inbox
/* -------------------------------------*/
if ( ! function_exists('pm_inbox_full_title'))
{
	function pm_inbox_full_title()
	{
return <<<EOF
Uw prive berichten inbox is vol.
EOF;
	}
}

if ( ! function_exists('pm_inbox_full'))
{
	function pm_inbox_full()
	{
return <<<EOF
{recipient_name},

{sender_name} wilde u zojuist een prive bericht sturen,
maar uw inbox is vol. Het overschrijft het maximum van {pm_storage_limit} berichten.

Log in en verwijder overtollige berichten uit uw inbox op:
{site_url}
EOF;
	}
}



/* -------------------------------------
/*  Notification of Forum Topic Moderation
/* -------------------------------------*/
if ( ! function_exists('forum_moderation_notification_title'))
{
	function forum_moderation_notification_title()
	{
return <<<EOF
Moderator bericht van {forum_name}
EOF;
	}
}

if ( ! function_exists('forum_moderation_notification'))
{
	function forum_moderation_notification()
	{
return <<<EOF
{name_of_recipient}, een moderator heeft je thread {moderation_action}

De titel van de thread is:
{title}

De thread kan gevonden worden op de volgende URL:
{thread_url}
EOF;
	}
}



/* -------------------------------------
/*  Notification of Forum Post Report
/* -------------------------------------*/
if ( ! function_exists('forum_report_notification_title'))
{
	function forum_report_notification_title()
	{
return <<<EOF
Post gemeld op {forum_name}
EOF;
	}
}

if ( ! function_exists('forum_report_notification'))
{
	function forum_report_notification()
	{
return <<<EOF
{reporter_name} heeft een post geschreven door {author} gemeld op:
{forum_name}

De reden(en) voor melden zijnt:
{reasons}

Eventuele extra opmerkingen van {reporter_name}:
{notes}

De post kan gevonden worden op:
{post_url}

Bericht waarover gemeld is:
{body}
EOF;
	}
}



/* -------------------------------------
//  OFFLINE SYSTEM PAGE
/* -------------------------------------*/
if ( ! function_exists('offline_template'))
{
	function offline_template()
	{
return <<<EOF
<html>
<head>

<title>Systeem Offline</title>

<style type="text/css">

body { 
background-color:	#ffffff; 
margin:				50px; 
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size:			11px;
color:				#000;
background-color:	#fff;
}

a {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
letter-spacing:		.09em;
text-decoration:	none;
color:			  #330099;
background-color:	transparent;
}
  
a:visited {
color:				#330099;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:	underline;
background-color:	transparent;
}

#content  {
border:				#999999 1px solid;
padding:			22px 25px 14px 25px;
}

h1 {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
font-size:			14px;
color:				#000;
margin-top: 		0;
margin-bottom:		14px;
}

p {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		12px;
margin-bottom: 		14px;
color: 				#000;
}
</style>

</head>

<body>

<div id="content">

<h1>Systeem Offline</h1>

<p>Deze website is momenteel offline</p>

</div>

</body>

</html>
EOF;
	}
}



/* -------------------------------------
//  User Messages Template
/* -------------------------------------*/
if ( ! function_exists('message_template'))
{
	function message_template()
	{
return <<<EOF
<html>
<head>

<title>{title}</title>

<meta http-equiv='content-type' content='text/html; charset={charset}' />

{meta_refresh}

<style type="text/css">

body { 
background-color:	#ffffff; 
margin:				50px; 
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size:			11px;
color:				#000;
background-color:	#fff;
}

a {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
letter-spacing:		.09em;
text-decoration:	none;
color:			  #330099;
background-color:	transparent;
}
  
a:visited {
color:				#330099;
background-color:	transparent;
}

a:active {
color:				#ccc;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:	underline;
background-color:	transparent;
}

#content  {
border:				#000 1px solid;
background-color: 	#DEDFE3;
padding:			22px 25px 14px 25px;
}

h1 {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
font-size:			14px;
color:				#000;
margin-top: 		0;
margin-bottom:		14px;
}

p {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		12px;
margin-bottom: 		14px;
color: 				#000;
}

ul {
margin-bottom: 		16px;
}

li {
list-style:			square;
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		8px;
margin-bottom: 		8px;
color: 				#000;
}

</style>

</head>

<body>

<div id="content">

<h1>{heading}</h1>

{content}

<p>{link}</p>

</div>

</body>

</html>
EOF;
	}
}



/* -------------------------------------
//  Mailing List Template
/* -------------------------------------*/
if ( ! function_exists('mailinglist_template'))
{
	function mailinglist_template()
	{
return <<<EOF
{message_text}

Om u uit te schrijven van deze e-mai,l klik hier:
{if html_email}<a href="{unsubscribe_url}">{unsubscribe_url}</a>{/if}
{if plain_email}{unsubscribe_url}{/if}
EOF;
	}
}




/* End of file email_data.php */
/* Location: ./system/expressionengine/language/english/email_data.php */