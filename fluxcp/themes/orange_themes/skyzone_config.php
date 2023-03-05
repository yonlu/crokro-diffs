<?php require_once (FLUX_ADDON_DIR."/skyzone/modules/main/index.php"); #Skyzone Configure ?>

<?php
# define the source of navbar data source
# 0 = as defined in flux's config/application.php
# 1 = use this config file.
//error_reporting(0);
$config['server_name'] = "Ragnarok Online"; //Server Name
$config['navbar_source'] = 1;

$ONLINE = $info['players_online'];

if($ONLINE == 0){
	$config['status_online'] = array( './img/7427.png' );
	$config['online'] = array( $ONLINE );	
}else{
	$config['status_online'] = array( './img/7429.png' );
	$config['online'] = array( $ONLINE );
}


#define custom navigation instead of using flux
if($session->isLoggedIn())
{
	#display to user already login
	$config['nav_panel'] = array(
		array(
			'MY ACCOUNT', //NAV TITLE
			'',  //USE ONLY FOR MODAL
			$this->url('account','view'), //URL LINK
		),
		array(
			'LOGOUT', //NAV TITLE
			'',  //USE ONLY FOR MODAL
			$this->url('account','logout'), //URL LINK
		),
		
	);
}
else
{	
	$config['nav_panel'] = array(
		array(
			'LOGIN PANEL', //NAV TITLE
			'',  //USE ONLY FOR MODAL
			$this->url('account','login'), //URL LINK
		),
		array(
			'REGISTER', //NAV TITLE
			'',  //USE ONLY FOR MODAL
			$this->url('account','create'), //URL LINK
		),
		
	);
}

#display to user who not login
if(!($params->get('module') == 'main' && $params->get('action') == 'index')){
	//Display kabag nasa ibang page
	$config['div_class'] = array(
		'div_value' => 'mymain2',
	);
}else{
	//Walang Display kapag nasa Main/Index Page
	$config['div_class'] = array(
		'div_value' => '',
	);	
}


if(!($params->get('module') == 'main' && $params->get('action') == 'index')){
	$config['nav_index'] = array(
		array(
			'HOME', 
			'',
			$this->url('main'),
		),
		array(
			'DONATION',
			' ',
			$this->url('donate'),
		),
		array(
			'STAFF',
			' ',
			$this->url('pages', 'staff'),
		),
		array(
			'SERVER INFORMATION',
			' ',
			$this->url('pages', 'information'),
		), 
	);
}else{ 
	$config['nav_index'] = array(
		array(
			'HOME', #[0]
			'menu-active', #[1]
			'#home', #[2]
		),
		array(
			'About Us', #[0]
			'', #[1]
			'#about', #[2]
		),
		array(
			'Server Info', #[0]
			'', #[1]
			'#serverinfo', #[2]
		),
		array(
			'Downloads', #[0]
			'', #[1]
			'#download', #[2]
		),
		array(
			'Community', #[0]
			'', #[1]
			'#community', #[2]
		),		
	);
}

//ABOUT US
$config['social_links'] = array(
	// EXTRA LINKS
	'youtube' => 'https://www.youtube.com/watch?v=BqijsweJzFQ', #API CALLS
);

//SERVER INFORMATION
$config['server_information'] = array(
		array(
			'./img/npcs/1.png', #[0]
			'General information', #[1]
			'Max Base/Job:', #[2]
			'255/120', #[3]
		),		
		array(
			'./img/npcs/2.png', #[0]
			'General information', #[1]
			'Rates:', #[2]
			'100x/100x/1%', #[3]
		),
		array(
			'./img/npcs/3.png', #[0]
			'General information', #[1]
			'Max Stats:', #[2]
			'255', #[3]
		),
		array(
			'./img/npcs/4.png', #[0]
			'General information', #[1]
			'Max Aspd:', #[2]
			'196', #[3]
		),
		array(
			'./img/npcs/5.png', #[0]
			'General information', #[1]
			'Drop Normal:', #[2]
			'1%', #[3]
		),
		array(
			'./img/npcs/6.png', #[0]
			'General information', #[1]
			'Drop MVP:', #[2]
			'1%', #[3]
		),
		array(
			'./img/npcs/7.png', #[0]
			'General information', #[1]
			'WoE Schedule:', #[2]
			'Thursdays & Sundays 9:00–10:00 PM', #[3]
		),
		array(
			'./img/npcs/8.png', #[0]
			'General information', #[1]
			'Battlegrounds:', #[2]
			'Expansive with @joinbg', #[3]
		),
		array(
			'./img/npcs/9.png', #[0]
			'General information', #[1]
			'Events:', #[2]
			'Automatic open hourly', #[3]
		),		
);

#DOWNLOAD LINKS 
$config['downloads'] = array(
	'direct_lite' => '#dlite',
	'mediafire_lite' => '#mlite',
	'derect_full' => '#dfull',
	'mediafire_full' => '#mfull',
	'derect_data' => '#ddata',
	'mediafire_data' => '#mdata',
);

$config['community'] = array(
	'discord' => 'https://discordapp.com/widget?id=716136830399021057&theme=dark',
	'facebook' => 'https://www.facebook.com/SkyzoneSolutions/',
);



$config['footer_links'] = array(
	'About Odin' => '#',
	'Community' => '#',
	'Rules' => $this->url('pages','content&path=rules'),
	'Privacy Policy' => '#',
	'Terms of Service' => $this->url('service','tos'),
	'Rankings' => $this->url('ranking','character'),
	'Donate' => $this->url('donate'),
	'Wiki' => '#',
	'Forums' => '#',
	'Information' => $this->url('server', 'info'),
);