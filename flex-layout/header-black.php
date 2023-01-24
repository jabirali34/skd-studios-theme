<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package skdstudios_custom
 */

?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
	<link href="/wp-content/themes/skdstudios_custom/bootstrap-grid.min.css" rel="stylesheet">
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

	<!-- Latest compiled and minified CSS -->
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->

	<?php wp_head(); ?>
</head>

<body id="main" <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text"
			href="#primary"><?php esc_html_e( 'Skip to content', 'skdstudios_custom' ); ?></a>

		<header id="masthead" class="site-header  container">
			<div class="row">
				<div id="header-nav-col" class="col-12">
					<img id="header-logo" src="/wp-content/themes/skdstudios_custom/img/skd-logo-white.png">

					<div id="navigation container">
						<div id="social-header">
							<a class="phone-icon" href="tel:<?php echo get_field('phone_number','option'); ?>"><svg width="13" height="13"
									viewBox="0 0 13 13" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M13 10.267C13 10.4332 12.9692 10.6502 12.9077 10.918C12.8461 11.1857 12.7815 11.3965 12.7138 11.5504C12.5845 11.8582 12.209 12.1844 11.5874 12.5291C11.0088 12.843 10.4363 13 9.87003 13C9.70384 13 9.54226 12.9892 9.3853 12.9677C9.22834 12.9461 9.05137 12.9077 8.8544 12.8523C8.65743 12.7969 8.51124 12.7522 8.41584 12.7184C8.32043 12.6845 8.14962 12.6214 7.90341 12.5291C7.6572 12.4368 7.50639 12.3814 7.45099 12.3629C6.84777 12.1475 6.30919 11.892 5.83523 11.5966C5.04735 11.1103 4.23331 10.4471 3.39311 9.60689C2.55291 8.76669 1.88968 7.95265 1.40341 7.16477C1.10795 6.69081 0.852509 6.15223 0.637074 5.54901C0.618608 5.49361 0.56321 5.3428 0.470881 5.09659C0.378551 4.85038 0.315459 4.67957 0.281605 4.58416C0.247751 4.48875 0.203125 4.34257 0.147727 4.1456C0.0923295 3.94863 0.0538589 3.77166 0.0323153 3.6147C0.0107718 3.45774 0 3.29616 0 3.12997C0 2.56368 0.15696 1.99124 0.470881 1.41264C0.815578 0.790956 1.14181 0.415483 1.44957 0.286222C1.60346 0.218513 1.81428 0.153883 2.08203 0.0923295C2.34979 0.0307765 2.56676 0 2.73295 0C2.81913 0 2.88376 0.00923296 2.92685 0.0276989C3.03764 0.0646307 3.20076 0.298532 3.41619 0.729403C3.4839 0.846354 3.57623 1.01255 3.69318 1.22798C3.81013 1.44342 3.91785 1.63885 4.01634 1.81428C4.11482 1.9897 4.21023 2.15436 4.30256 2.30824C4.32102 2.33286 4.37488 2.4098 4.46413 2.53906C4.55339 2.66832 4.61955 2.77758 4.66264 2.86683C4.70573 2.95608 4.72727 3.0438 4.72727 3.12997C4.72727 3.25308 4.63956 3.40696 4.46413 3.59162C4.28871 3.77628 4.09789 3.94555 3.89169 4.09943C3.68549 4.25331 3.49467 4.41643 3.31925 4.58878C3.14382 4.76113 3.05611 4.9027 3.05611 5.01349C3.05611 5.06889 3.0715 5.13814 3.10227 5.22124C3.13305 5.30433 3.15921 5.36742 3.18075 5.41051C3.2023 5.4536 3.24538 5.52746 3.31001 5.6321C3.37464 5.73674 3.41004 5.79522 3.41619 5.80753C3.884 6.6508 4.41951 7.37405 5.02273 7.97727C5.62595 8.58049 6.3492 9.116 7.19247 9.58381C7.20478 9.58996 7.26326 9.62535 7.3679 9.68999C7.47254 9.75462 7.5464 9.7977 7.58949 9.81925C7.63258 9.84079 7.69567 9.86695 7.77876 9.89773C7.86186 9.9285 7.93111 9.94389 7.98651 9.94389C8.0973 9.94389 8.23887 9.85618 8.41122 9.68075C8.58357 9.50533 8.74669 9.31451 8.90057 9.10831C9.05445 8.90211 9.22372 8.71129 9.40838 8.53587C9.59304 8.36044 9.74692 8.27273 9.87003 8.27273C9.9562 8.27273 10.0439 8.29427 10.1332 8.33736C10.2224 8.38044 10.3317 8.44661 10.4609 8.53587C10.5902 8.62512 10.6671 8.67898 10.6918 8.69744C10.8456 8.78977 11.0103 8.88518 11.1857 8.98366C11.3612 9.08215 11.5566 9.18987 11.772 9.30682C11.9875 9.42377 12.1536 9.5161 12.2706 9.58381C12.7015 9.79924 12.9354 9.96236 12.9723 10.0732C12.9908 10.1162 13 10.1809 13 10.267Z" />
								</svg>
								<?php echo get_field('phone_number','option'); ?></a>
							<div class="mobile-social-container">
							<?php
								// Pinterest icon
								if(get_field('pinterest','option')){
									echo '<a href="'.get_field('pinterest','option').'" target="_blank"><svg width="15" height="16" viewBox="0 0 15 16" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M7.49975 0C3.35791 0 0 3.3799 0 7.55039C0 10.6424 1.84634 13.2978 4.48925 14.465C4.46815 13.9373 4.4855 13.3044 4.61959 12.7319C4.764 12.1178 5.58449 8.61661 5.58449 8.61661C5.58449 8.61661 5.34444 8.13471 5.34444 7.42295C5.34444 6.30481 5.98958 5.46892 6.79178 5.46892C7.47349 5.46892 7.80309 5.98386 7.80309 6.60169C7.80309 7.29174 7.36519 8.32445 7.14108 9.2807C6.95307 10.0812 7.54054 10.7344 8.32352 10.7344C9.74461 10.7344 10.7015 8.89791 10.7015 6.72063C10.7015 5.06632 9.59457 3.82829 7.58133 3.82829C5.30646 3.82829 3.88959 5.53547 3.88959 7.44325C3.88959 8.1012 4.08229 8.56516 4.38376 8.92435C4.52301 9.08954 4.54223 9.15515 4.49113 9.34489C4.45643 9.48459 4.37391 9.81829 4.33922 9.95045C4.28905 10.1425 4.13574 10.2105 3.96367 10.1392C2.91579 9.70973 2.42818 8.55431 2.42818 7.2554C2.42818 5.11116 4.22435 2.53882 7.78856 2.53882C10.6514 2.53882 12.5371 4.62501 12.5371 6.86412C12.5371 9.82584 10.9003 12.0385 8.48949 12.0385C7.67932 12.0385 6.91743 11.5977 6.65769 11.0983C6.65769 11.0983 6.22166 12.8381 6.13023 13.1732C5.97082 13.7542 5.6595 14.3371 5.37538 14.7907C6.04865 14.9913 6.76131 15.1003 7.49975 15.1003C11.6416 15.1003 14.999 11.7209 14.999 7.55039C14.999 3.3799 11.6416 0 7.49975 0Z" />
									</svg></a>';
								}

								// Facebook Icon
								if(get_field('facebook','option')){
									echo '<a href="'.get_field('facebook','option').'" target="_blank"><svg width="9" height="16" viewBox="0 0 9 16" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M5.625 15.1003V8.49392H8.4375L8.90625 5.66261H5.625V4.24696C5.625 3.30319 6.09469 2.83131 7.03125 2.83131H8.4375V0C7.96875 0 6.91875 0 6.09375 0C3.75 0 2.8125 1.41565 2.8125 3.77508V5.66261H0V8.49392H2.8125V15.1003H5.625Z" />
									</svg></a>';
								}

								// Instagram Icon
								if(get_field('instagram','option')){
									echo '<a href="'.get_field('instagram','option').'" target="_blank"><svg width="15" height="16" viewBox="0 0 15 16" xmlns="http://www.w3.org/2000/svg">
									<path fill-rule="evenodd" clip-rule="evenodd"
										d="M12.4035 3.5199C12.4035 4.02034 12.0005 4.42592 11.5035 4.42592C11.0065 4.42592 10.6035 4.02034 10.6035 3.5199C10.6035 3.01947 11.0065 2.61389 11.5035 2.61389C12.0006 2.61389 12.4035 3.01947 12.4035 3.5199ZM7.5 10.0668C6.1193 10.0668 5.00004 8.94009 5.00004 7.55015C5.00004 6.16022 6.1193 5.03347 7.5 5.03347C8.8807 5.03347 9.99996 6.16022 9.99996 7.55015C9.99996 8.94009 8.8807 10.0668 7.5 10.0668ZM7.5 3.67303C5.37293 3.67303 3.64863 5.40886 3.64863 7.55015C3.64863 9.69145 5.37293 11.4273 7.5 11.4273C9.62707 11.4273 11.3514 9.69145 11.3514 7.55015C11.3514 5.40886 9.62707 3.67303 7.5 3.67303ZM7.5 1.36044C9.50262 1.36044 9.7398 1.36811 10.5306 1.40445C11.2618 1.43807 11.659 1.56099 11.9232 1.66445C12.2733 1.80142 12.5231 1.96505 12.7856 2.2293C13.0481 2.49344 13.2107 2.74495 13.3467 3.09745C13.4494 3.36348 13.5716 3.76328 13.605 4.49942C13.6411 5.29561 13.6487 5.53438 13.6487 7.55039C13.6487 9.5664 13.6411 9.80517 13.605 10.6012C13.5716 11.3374 13.4495 11.7372 13.3467 12.0032C13.2107 12.3556 13.0481 12.6071 12.7856 12.8714C12.5232 13.1356 12.2734 13.2992 11.9232 13.4362C11.659 13.5395 11.2618 13.6626 10.5306 13.6962C9.7398 13.7325 9.50262 13.7402 7.5 13.7402C5.49727 13.7402 5.26008 13.7325 4.4693 13.6962C3.73805 13.6626 3.3409 13.5397 3.07664 13.4362C2.7266 13.2992 2.47676 13.1356 2.21426 12.8714C1.95188 12.6072 1.78922 12.3557 1.65316 12.0032C1.55051 11.7372 1.42828 11.3374 1.39488 10.6012C1.35879 9.80505 1.35117 9.56628 1.35117 7.55039C1.35117 5.53438 1.35879 5.29561 1.39488 4.49942C1.42828 3.76328 1.55039 3.36348 1.65316 3.09745C1.78922 2.74507 1.95176 2.49356 2.21426 2.2293C2.47664 1.96505 2.72648 1.80142 3.07664 1.66445C3.3409 1.56111 3.73805 1.43807 4.4693 1.40445C5.2602 1.36811 5.49738 1.36044 7.5 1.36044ZM7.5 0C5.46316 0 5.2077 0.00872986 4.40777 0.0454189C3.60949 0.0821079 3.06422 0.209753 2.58727 0.396383C2.09402 0.589266 1.67578 0.847505 1.25883 1.26725C0.841875 1.68699 0.585352 2.10803 0.39375 2.60457C0.208359 3.08483 0.0815625 3.63363 0.0451172 4.43725C0.00867188 5.24252 0 5.4997 0 7.55015C0 9.60061 0.00867188 9.85779 0.0451172 10.6631C0.0815625 11.4667 0.208359 12.0155 0.39375 12.4957C0.585352 12.9923 0.841875 13.4133 1.25883 13.8331C1.67578 14.2528 2.09402 14.5109 2.58727 14.7039C3.06434 14.8906 3.60949 15.0182 4.40777 15.0549C5.2077 15.0916 5.46316 15.1003 7.5 15.1003C9.53684 15.1003 9.7923 15.0916 10.5922 15.0549C11.3905 15.0182 11.9357 14.8906 12.4127 14.7039C12.906 14.5109 13.3242 14.2528 13.7412 13.8331C14.1581 13.4133 14.4145 12.9923 14.6062 12.4957C14.7916 12.0155 14.9184 11.4667 14.9549 10.6631C14.9913 9.85779 15 9.60061 15 7.55015C15 5.4997 14.9913 5.24252 14.9549 4.43725C14.9184 3.63363 14.7916 3.08483 14.6062 2.60457C14.4145 2.10803 14.1581 1.68699 13.7412 1.26725C13.3242 0.847505 12.906 0.589384 12.4127 0.396383C11.9357 0.209753 11.3905 0.0821079 10.5922 0.0454189C9.7923 0.00872986 9.53684 0 7.5 0Z" />
										</svg>
									</a>';
								}

								// Twitter Icon
								if(get_field('twitter','option')){
									echo '<a href="'.get_field('twitter','option').'" target="_blank"><svg width="19" height="16" viewBox="0 0 19 16" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M18.4569 1.78706C17.7779 2.09081 17.0486 2.29583 16.2819 2.38701C17.0636 1.91542 17.6642 1.16853 17.9475 0.278775C17.2154 0.714941 16.4054 1.03321 15.5429 1.20338C14.8517 0.462882 13.8675 0 12.7777 0C10.6863 0 8.99192 1.70633 8.99192 3.81167C8.99192 4.11019 9.0248 4.40174 9.08942 4.68051C5.9423 4.52138 3.15231 3.0038 1.28423 0.697518C0.958845 1.26088 0.771922 1.91542 0.771922 2.6141C0.771922 3.93711 1.44058 5.10332 2.45596 5.78748C1.83577 5.76716 1.25192 5.59641 0.741346 5.31066C0.740769 5.32634 0.740769 5.34318 0.740769 5.35828C0.740769 7.20575 2.04577 8.74656 3.77827 9.09677C3.46096 9.18331 3.12634 9.23035 2.78077 9.23035C2.53615 9.23035 2.29961 9.20654 2.06884 9.1624C2.55 10.6759 3.94904 11.7782 5.60538 11.8096C4.31019 12.8318 2.6775 13.4422 0.903461 13.4422C0.597692 13.4422 0.295961 13.4242 0 13.3887C1.67538 14.469 3.66577 15.1003 5.80442 15.1003C12.769 15.1003 16.5784 9.29191 16.5784 4.25422C16.5784 4.08928 16.5738 3.92434 16.5669 3.76056C17.3071 3.22333 17.9486 2.55253 18.4569 1.78706Z" /></svg>
									</a>';
								}
								// TikTok Icon
								if(get_field('tik_tok','option')){
									echo '<a href="'.get_field('tik_tok','option').'" target="_blank"><svg width="14" height="15" viewBox="0 0 14 15" xmlns="http://www.w3.org/2000/svg">
									<path d="M13.276 6.43055V3.81223C12.0498 3.81223 11.114 3.48494 10.5101 2.8488C9.89036 2.12279 9.54314 1.20339 9.52827 0.248925V0.0599263L7.05286 0C7.05286 0 7.05286 0.106024 7.05286 0.248925V10.6346C6.96794 11.0986 6.74271 11.5254 6.40756 11.8573C6.07242 12.1892 5.6435 12.4103 5.17871 12.4908C4.71391 12.5712 4.23563 12.5071 3.80843 12.3071C3.38122 12.1071 3.02567 11.7809 2.78976 11.3724C2.55385 10.9639 2.44895 10.4929 2.48922 10.0229C2.52948 9.55295 2.71298 9.10664 3.01494 8.74425C3.31689 8.38187 3.72276 8.12085 4.17776 7.99644C4.63276 7.87203 5.11498 7.89022 5.55931 8.04856V5.51321C5.30024 5.47076 5.03818 5.44918 4.77566 5.44868C3.83113 5.44868 2.9078 5.72877 2.12245 6.25352C1.33709 6.77828 0.724986 7.52413 0.363528 8.39677C0.00206914 9.26941 -0.0925048 10.2296 0.0917651 11.156C0.276035 12.0824 0.730873 12.9334 1.39876 13.6012C2.06665 14.2691 2.91759 14.724 3.84398 14.9082C4.77036 15.0925 5.73059 14.9979 6.60323 14.6365C7.47587 14.275 8.22172 13.6629 8.74648 12.8776C9.27124 12.0922 9.55132 11.1689 9.55132 10.2243C9.55081 10.0286 9.53849 9.83313 9.51444 9.6389V5.42102C10.6401 6.12397 11.9497 6.47545 13.276 6.43055V6.43055Z"/>
									</svg>
									</a>';
								}
								?>
							</div>
						</div>

						<nav id="site-navigation" class="main-navigation">
							<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-1',
										'menu_id'        => 'primary-menu',
									)
								);
								?>

							<span id="menu-icon" onclick="openNav()">
								<svg width="32" height="17" viewBox="0 0 32 17" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M1 2.26093H31C31.552 2.26093 32 1.80993 32 1.25424C32 0.698554 31.552 0.247559 31 0.247559H1C0.448 0.247559 0 0.698554 0 1.25424C0 1.80993 0.448 2.26093 1 2.26093Z" />
									<path
										d="M31 7.29443H1C0.448 7.29443 0 7.74543 0 8.30112C0 8.85682 0.448 9.30782 1 9.30782H31C31.552 9.30782 32 8.85682 32 8.30112C32 7.74543 31.552 7.29443 31 7.29443Z" />
									<path
										d="M31 14.3411H11C10.448 14.3411 10 14.7921 10 15.3478C10 15.9034 10.448 16.3544 11 16.3544H31C31.552 16.3544 32 15.9034 32 15.3478C32 14.7921 31.552 14.3411 31 14.3411Z" />
								</svg>
							</span>

						</nav><!-- #site-navigation -->

					</div>
				</div>
			</div>
        </header><!-- #masthead -->
        
