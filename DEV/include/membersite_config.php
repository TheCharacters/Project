<?PHP
require_once("./include/fg_membersite.php");

$fgmembersite = new FGMembersite();

//Provide your site name here
$fgmembersite->SetWebsiteName('TC Music Exchange');

//Provide the email address where you want to get notifications
$fgmembersite->SetAdminEmail('schaeferj@wmpenn.edu');

//Provide your database login details here:
//hostname, user name, password, database name and table name
//note that the script will create the table (for example, fgusers in this case)
//by itself on submitting register.php for the first time
$fgmembersite->InitDB(/*hostname*/'localhost',
                      /*username*/'schaef87',
                      /*password*/'YES',
                      /*database name*/'testdb',
                      /*table name*/'TCMEusers');

//For better security. Get a random string from this link: http://tinyurl.com/randstr
// and put it here
$fgmembersite->SetRandomKey('poKkP0medgi8iPM');

?>