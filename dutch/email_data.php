<?php


/* -------------------------------------
/*  Notification of Full PM InBox
/* -------------------------------------*/

function pm_inbox_full_title()
{
return <<<EOF
Uw Priv&233; berichten box is vol
EOF;
}

function pm_inbox_full()
{
return <<<EOF
{recipient_name},

{sender_name} heeft geprobeerd u een Priv&233; bericht te sturen,
maar uw Inbox is vol, de limiet van {pm_storage_limit} is overschreven.

Log in en verwijder overbodige berichten van u op:
{site_url}
EOF;
}
/* END */


/* -------------------------------------
/*  Notification of Forum Topic Moderation
/* -------------------------------------*/

function forum_moderation_notification_title()
{
return <<<EOF
Moderator bericht in {forum_name}
EOF;
}

function forum_moderation_notification()
{
return <<<EOF
{name_of_recipient}, een moderator heeft je thread {moderation_action}.

De titel van de thread is:
{title}

De thread kan via onderstaande url bezocht worden:
{thread_url}
EOF;
}
/* END */

//---------------------------------------------------
//	Admin Notification of Mailinglist subscription
//--------------------------------------------------

function admin_notify_mailinglist_title()
{
return <<<EOF
Iemand heeft zich geabonneerd op je mailinglijst
EOF;
}

function admin_notify_mailinglist()
{
return <<<EOF
Een nieuwe mailinglijst abonnement is geaccepteerd.

Email Adres: {email}
Mailinglijst: {mailing_list}
EOF;
}
// END


//---------------------------------------------------
//	Admin Notification of New Entry
//--------------------------------------------------

function admin_notify_entry_title()
{
return <<<EOF
Een nieuw weblog bericht is geplaatst
EOF;
}

function admin_notify_entry()
{
return <<<EOF
Een nieuw bericht is geplaatst in de volgende weblog:
{weblog_name}

De titel van het bericht is:
{entry_title}

Posted by: {name}
Email: {email}

Om het bericht te lezen ga naar: 
{entry_url}

EOF;
}
// END


//---------------------------------------------------
//	Admin Notification of New Member Registrations
//--------------------------------------------------

function admin_notify_reg_title()
{
return <<<EOF
Nieuw lid geregistreerd
EOF;
}

function admin_notify_reg()
{
return <<<EOF
De volgende persoon heeft zich geregistreerd: {name}

Op: {site_name}

De URL van je Control Panel: {control_panel_url}
EOF;
}
// END


//---------------------------------------------------
//	Admin Notification of New Comment
//--------------------------------------------------

function admin_notify_comment_title()
{
return <<<EOF
Er is een reactie geplaatst
EOF;
}

function admin_notify_comment()
{
return <<<EOF
Er is een reactie gekomen op uw bericht van de volgende site:
{weblog_name}

De titel van het bericht is:
{entry_title}

U kunt het vinden op: 
{comment_url}

Geplaatst door: {name}
Email: {email}
URL: {url}
Locatie: {location}

{comment}
EOF;
}
// END


//---------------------------------------------------
//	Admin Notification of New Trackback
//--------------------------------------------------

function admin_notify_trackback_title()
{
return <<<EOF
U heeft een trackback ontvangen
EOF;
}

function admin_notify_trackback()
{
return <<<EOF
Er is zojuist een Trackback ontvangen op het volgende bericht:
{entry_title}

U kunt het vinden op: 
{comment_url}

De Trackback is afkomstig van de volgende site:
{sending_weblog_name}

Titel van het bericht:
{sending_entry_title}

URL van de site:
{sending_weblog_url}
EOF;
}
// END


//---------------------------------------------------
//	Membership Activation Instructions
//--------------------------------------------------

function mbr_activation_instructions_title()
{
return <<<EOF
Uw activeringscode
EOF;
}

function mbr_activation_instructions()
{
return <<<EOF
Dank u wel dat u zich geregistreerd heeft. 

Om uw account te activeren moet u op onderstaande link klikken:

{activation_url}

Bedankt!

{site_name}

{site_url}
EOF;
}
// END


//---------------------------------------------------
//	Member Forgotten Password Instructions
//--------------------------------------------------

function forgot_password_instructions_title()
{
return <<<EOF
Login informatie
EOF;
}

function forgot_password_instructions()
{
return <<<EOF
Beste {name},

Om uw wachtwoord te resetten kunt u op onderstaande link klikken

{reset_url}

Uw wachtwoord zal dan automatisch gereset worden en een nieuw wachtwoord zal automatisch toegestuurd worden via de mail.

Als je je wachtwoord niet wilt resetten, doe dan verder niets met dit bericht. Het zal automatisch naar 24 uur verlopen.

{site_name}
{site_url}
EOF;
}
// END



//---------------------------------------------------
//	Reset Password Notification
//--------------------------------------------------

function reset_password_notification_title()
{
return <<<EOF
Nieuwe log-in gegevens
EOF;
}

function reset_password_notification()
{
return <<<EOF
Hallo {name},

Hierbij uw nieuwe log-in gegevens:

Gebruikersnaam: {username}
Wachtwoord: {password}

{site_name}
{site_url}
EOF;
}
// END



//---------------------------------------------------
//	Validated Member Notification
//--------------------------------------------------

function validated_member_notify_title()
{
return <<<EOF
Uw account is geactiveerd
EOF;
}

function validated_member_notify()
{
return <<<EOF 
Hallo {name},

Uw account is geactiveerd en kan nu worden gebruikt.

Bedankt!

{site_name}
{site_url}
EOF;
}
// END


//---------------------------------------------------
//	Decline Member Validation
//--------------------------------------------------

function decline_member_validation_title()
{
return <<<EOF
Your membership account has been declined
EOF;
}

function decline_member_validation()
{
return <<<EOF
{name},

We're sorry but our staff has decided not to validate your membership.

{site_name}
{site_url}
EOF;
}
// END


//---------------------------------------------------
//	Mailinglist Activation Instructions
//--------------------------------------------------

function mailinglist_activation_instructions_title()
{
return <<<EOF
Email Bevestiging
EOF;
}

function mailinglist_activation_instructions()
{
return <<<EOF
Bedankt voor uw aanmelding op de mailinglijst!

Klik op onderstaande link om uw email adres te bevestigen.

Als u niet toegevoegd wilt worden aan onze mailinglist, negeer deze email dan.

{activation_url}

Bedankt!

{site_name}
EOF;
}
// END



//---------------------------------------------------
//	Comment Notification
//--------------------------------------------------

function comment_notification_title()
{
return <<<EOF
Reactie op uw bericht
EOF;
}

function comment_notification()
{
return <<<EOF
Iemand heeft gereageerd op het bericht waar u zich voor ingeschreven had:
{weblog_name}

De titel van het bericht is:
{entry_title}

Als u de reactie wilt bekijken dan kunt u op onderstaande link klikken:
{comment_url}

{comment}

Wilt u geen verdere emails meer ontvangen over dit bericht klik dan hier:
{notification_removal_url}
EOF;
}
// END


//---------------------------------------------------
//	Admin Notification of New Gallery Comment
//--------------------------------------------------

function admin_notify_gallery_comment_title()
{
return <<<EOF
Je hebt zojuist een comentaar ontvangen
EOF;
}

function admin_notify_gallery_comment()
{
return <<<EOF
Je hebt zojuist een comentaar ontvangen voor de volgende foto galerij:
{gallery_name}

De titel van het bericht is:
{entry_title}

Locatie: 
{comment_url}

{comment}
EOF;
}
// END

//---------------------------------------------------
//	Gallery Comment Notification
//--------------------------------------------------

function gallery_comment_notification_title()
{
return <<<EOF
Iemand heeft zojuist op je comentaar gereageerd
EOF;
}

function gallery_comment_notification()
{
return <<<EOF
Iemand heeft zojuist gereageerd op het foto bericht waarvan je abonnee bent hier:
{gallery_name}

Je kunt het bericht zien via de volgende URL:
{comment_url}

{comment}

Voor het be‘indigen van meldingen voor dit comentaar, klik hier:
{notification_removal_url}
EOF;
}
// END



//---------------------------------------------------
//	Admin Notification of New Forum Post
//--------------------------------------------------

function admin_notify_forum_post_title()
{
return <<<EOF
Iemand heeft zojuist een bericht geplaatst in {forum_name}
EOF;
}

function admin_notify_forum_post()
{
return <<<EOF
{name_of_poster} heeft zojuist een bericht geplaatst in {forum_name}

De titel van de thread is:
{title}

De post bevindt zich hier:
{post_url}

{body}
EOF;
}
// END


//---------------------------------------------------
//	Forum Post User Notification
//--------------------------------------------------

function forum_post_notification_title()
{
return <<<EOF
Iemand heeft zojuist een bericht geplaatst in {forum_name}
EOF;
}

function forum_post_notification()
{
return <<<EOF
Iemand heeft zojuist een bericht geplaatst in een thread waavan je abonnee bent:
{forum_name}

De titel van de thread:
{title}

De post bevindt zich hier:
{post_url}

{body}

Om het ontvangen van meldingen voor dit comentaar te stoppen, klik hier:
{notification_removal_url}
EOF;
}
// END


//---------------------------------------------------
//	Private Message Notification
//--------------------------------------------------

function private_message_notification_title()
{
return <<<EOF
Iemand heeft je een privŽ bericht gezonden
EOF;
}

function private_message_notification()
{
return <<<EOF

{recipient_name},

{sender_name} heeft je zojuist een prive bericht gezonden met de titel '{message_subject}'.

Je kunt het privŽ bericht lezen, door in te loggen en je InBox te bekijken:
{site_url}

Om het ontvangen van meldingen van privŽ berichten te stoppen, schakel deze optie uit in je Email voorkeuren.
EOF;
}
// END


/* -------------------------------------
/*  Notification of Forum Post Report
/* -------------------------------------*/

function forum_report_notification_title()
{
return <<<EOF
Post gemeld in {forum_name}
EOF;
}

function forum_report_notification()
{
return <<<EOF
{reporter_name} heeft een post gemeld geschreven door {author} in:
{forum_name}

De reden(en) voor deze melding zijn:
{reasons}

Aanvullende notities van {reporter_name}:
{notes}

De post kunt u vinden op:
{post_url}

Content van de gemelde post:
{body}
EOF;
}
/* END */

/* -------------------------------------
//  OFFLINE SYSTEM PAGE
/* -------------------------------------*/

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
color:              #330099;
background-color:   transparent;
}
  
a:visited {
color:				#330099;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:    underline;
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

<p>Deze website is op dit moment offline</p>

</div>

</body>

</html>
EOF;
}
/* END */


/* -------------------------------------
//  User Messages Template
/* -------------------------------------*/

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
color:              #330099;
background-color:   transparent;
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
text-decoration:    underline;
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
/* END */


/* -------------------------------------
//  Mailing List Template
/* -------------------------------------*/

function mailinglist_template()
{
return <<<EOF
{message_text}

Om uw email van deze mailinglist te verwijderen klik hier:
{if html_email}<a href="{unsubscribe_url}">{unsubscribe_url}</a>{/if}
{if plain_email}{unsubscribe_url}{/if}
EOF;
}
/* END */

?>