<?php

/* PLEASE DO NOT ALLOW EVEN ONE BLANK SPACE/LINE IN THIS FILE OUTSIDE '<?php' AND '?>' */


/* ------ DATABASE SETTINGS ------  */


$dbss=array();
$dbss['host']='localhost';      // Database host (in most cases 'localhost', on Windows systems - use '127.0.0.1' instead of 'localhost' to avoid a php/ipv6 bug)
$dbss['user']='root';      // Database user
$dbss['pass']='';      // Database password
$dbss['name']='chat';      // Database name. Note that the installation script cannot create a database for you!
$dbss['sock']='';      // Database socket
$dbss['prfx']='blabax';      // Table prefix for chat tables: blab, blabws, blabax, blabwspro

$dbss['sprf']='blabax';      /* Table prefix for shared chat tables (this should be the table prefix of the 'master' channel). 
                                Affects paintings, avatars, files, mottos.

                                BE CAREFUL WITH THIS! GUEST ACCESS MUST BE DISABLED IN ALL CHANNELS!
								REQUIRES TO SET A SINGLE '$xpath_at_dir' and '$xpath_av_dir' FOR ALL CHANNELS */

$dbss['cset']='utf8mb4';      // utf8mb4 or utf8

$error_log='errors.txt';     // CHMODed to 666 file to store sql errors if any ( it is recommended to rename this file )

$msgs2keep=100;              // 10-500 messages to keep in chat rooms
$disablema=0;                // 0 or 1; 1 = loading avatars in messages disabled
$norealips=0;                // 0 or 1; if 1 the ip addresses of the users in the database are hashed with sha1
$supersalt=1;                // 0 or 1; add additional individual salt when creating cookie hash; will throw out the user from all other devices when changing the password
$ping_period=5;              // AJAX ping period in sec (BlaB!AX and BlaB!AX Pro only! 5-20 seconds)
$ping_multpl=5;              // User is considered offline on X missed pings (BlaB!AX and BlaB!AX Pro only! 5-20)
$cookieparam='SameSite=Lax;';// additional cookie parameters: SameSite=Lax; HttpOnly; Secure; on change you may have to change cookie names below 


/* BLABWS-SERVER / BLABWS-SERVER-PRO START/STOP/CHECK WITH SHELL_EXEC */

$blabws_server_host='127.0.0.1';     // hostname or IP (in order to check server status with telnet; would work with remote hosts without WebSocket proxy)
$blabws_server_path='';    // path to server executable
$blabws_server_port='9001';    // server port
$blabws_server_akey='';    // ACCESSKEY: 4 chars at least; ASCII only
$blabws_server_logf='/dev/null';    // Log file: /tmp/chatlog.log or /var/tmp/chatlog.log which will survive reboot; /dev/null = no log
$blabws_server_onli='0';             // Write online users list in a file: /tmp/chat.online   0=off
$blabws_server_tzon='Europe/London'; // Log File Timezone: a CANONICAL Continent/City entry from the TZ database; if wrong falls back to UTC
$blabws_server_debg=0;               // 0 or 1; Common errors in log + IP addresses
$blabws_server_ehst='0';     // 0 or 1; Hosted server (1) or self-hosted server (0); shows/hides elements in ACP


/* USER IDs IN STEALTH MODE; array(1,23,456) */

$stealth_users=array();


/* COOKIE ARRAYS: COOKIE NAME & COOKIE VALIDITY PERIOD IN SECONDS; 31536000 = one year / LOCAL STORAGE */

$xcookie_uidhash = array('blabax_uidhash',31536000);       // cookie to recognize logged in users
$xcookie_appcode = array('blabax_appcode',31536000);       // cookie to BlaB! Q mobile app (integration only!)
$xcookie_langsel = array('blabax_langsel',31536000);       // cookie to store language selection

$storage_options = 'blabax_options';   // where to store options
$storage_xsounds = 'blabax_xsounds';   // where to store sound options
$storage_ignored = 'blabax_ignored';   // where to store ignored users
$storage_predefm = 'blabax_predefm';   // where to store predefined messages


/* PATHS/FILES - in case you are running multiple instances these files/paths can be shared (Pro only!): 
   global JS file, global CSS file, emoticon codes, emoticons CSS file, avatars directory, stickers directory */

$xfile_cssstyle = 'blabaxpro.css'; // global CSS file;     default: blabaxpro.css
$xfile_emostyle = 'emoticons.css'; // emoticons CSS file;  default: emoticons.css
$xfile_emocodes = 'emocodes.php';  // emoticon codes;      default: emocodes.php
$xfile_jsscript = 'blabaxpro.js';  // global JS file;      default: blabaxpro.js
$xfile_jssounds = 'soundspro.js';  // sounds JS file;      default: soundspro.js

$xpath_st_dir = 'stickers'; // stickers directory, no trailing slashes; default: stickers
$xpath_av_dir = 'avatars';  // avatars directory, no trailing slashes;  default: avatars
$xpath_at_dir = 'attachments';  // attachments directory, no trailing slashes;  default: attachments


/* User IP variable - $ipaddr
   This is not a thing to play with unless you understand what you are doing - HTTP headers can be spoofed!
   The whole system considers the IP address of the user to be $_SERVER['REMOTE_ADDR'] 
   In case you have a reverse proxy, cloudflare etc you can overwrite this and set a global IP variable here. */

// if(isset($_SERVER['HTTP_X_REAL_IP'])){$ipaddr=$_SERVER['HTTP_X_REAL_IP'];} // reverse proxy
// if(isset($_SERVER['HTTP_CF_CONNECTING_IP'])){$ipaddr=$_SERVER['HTTP_CF_CONNECTING_IP'];} // cloudflare


$ousr_by_group=0; // Pro only! Order online users by groupID: 1 -> 99 - requires understanding and proper group IDs set in advance

 
/* ffmpeg; ffmpeg installed/operational is required!  */
$ffmpeg_cnvrt=0; // convert voice/video messages to default mp4; NOT RECOMMENDED!
$ffmpeg_thumb=0; // framerate: 1-5; 0 = off; create thumbnails for audio/video & voice/video messages with ffmpeg


/* Additional integration variables - WordPress & Vanilla  */

$WP_LOGGED_IN_KEY  = 'xxx'; // from wp-config.php
$WP_LOGGED_IN_SALT = 'xxx'; // from wp-config.php

$vanilla_CookieHashMethod = 'md5';  // from vanilla/conf/config-defaults.php; md5 or sha1
$vanilla_CookieSalt       = 'xxx';  // from vanilla/conf/config.php

$smf_auth_secret = 'xxx';  // FROM SMF/Settings.php

/* ENTER/LEAVE messages uncomment to enable; AX/AX Pro only */

// $sys_xuser='SYSTEM';
// $msg_enter='entered...'; // {user} entered...
// $msg_leave='left...';    // {user1 [,user2]} left...

?>