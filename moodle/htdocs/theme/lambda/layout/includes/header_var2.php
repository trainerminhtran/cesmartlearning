<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Parent theme: Bootstrapbase by Bas Brands
 * Built on: Essential by Julian Ridden
 *
 * @package   theme_lambda
 * @copyright 2017 redPIthemes
 *
 */
?>
<div class="container-fluid" style="margin-top:-12px;">      
	<div class="row-fluid">    	

		<div class="span12 login-header">
			<div class="profileblock centered-logo">

				<?php 
		function get_content () {
		global $USER, $CFG, $SESSION, $COURSE;
		$wwwroot = '';
		$signup = '';}

		if (empty($CFG->loginhttps)) {
			$wwwroot = $CFG->wwwroot;
		} else {
			$wwwroot = str_replace("http://", "https://", $CFG->wwwroot);
		}

		if (!isloggedin() or isguestuser()) { ?>
				<div id="top-login">
					<ul class="nav signin">
						<li class="dropdown">
							<a class="dropdown-toggle plus" href="" data-toggle="dropdown"><i class="fa fa-user-o" aria-hidden="true"></i> Log in</a>
							<div class="dropdown-menu">

								<?php 			
						$login_link_url = '';
						$login_link_txt = '';
						if ($login_link=='1') {$login_link_url = $wwwroot.'/login/signup.php'; $login_link_txt = get_string('startsignup');}
						else if ($login_link=='2') {$login_link_url = $wwwroot.'/login/forgot_password.php'; $login_link_txt = get_string('forgotten');}
						else if ($login_link=='3') {$login_link_url = $wwwroot.'/login/index.php'; $login_link_txt = get_string('moodle_login_page','theme_lambda');}
						if ($login_custom_url != '') {$login_link_url = $login_custom_url;}
						if ($login_custom_txt != '') {$login_link_txt = $login_custom_txt;}

						$moodle_release = $CFG->version; // oauth2 Moodle core
						if (($moodle_release >= 2017051500) && ($auth_googleoauth2)) {
							$authsequence = get_enabled_auth_plugins(true);
            				$potentialidps = array();
            				foreach ($authsequence as $authname) {
                				$authplugin = get_auth_plugin($authname);
                				$potentialidps = array_merge($potentialidps, $authplugin->loginpage_idp_list($this->page->url->out(false)));
            				}
            				if (!empty($potentialidps)) { ?>
								<div class="potentialidps">
									<h6><?php echo get_string('potentialidps', 'auth') ?></h6>
									<div class="potentialidplist">
										<?php foreach ($potentialidps as $idp) { ?>
										<div class="potentialidp">
											<a class="btn btn-oauth2" href="<?php echo $idp['url']->out(); ?>" title="<?php echo s($idp['name']); ?>">
												<?php if (!empty($idp['iconurl'])) { ?>
												<img src="<?php echo s($idp['iconurl']); ?>" width="24" height="24" class="m-r-1"/>
												<?php } ?>
												<?php echo s($idp['name']); ?></a></div>
										<?php } ?>
									</div>
								</div>
								<div style="clear:both;"></div>
								<div class="forgotpass oauth2">
									<?php 
							if ($login_link_url != '' and $login_link_txt != '') { ?>
									<a target="_self" href="<?php echo $login_link_url; ?>"><?php echo $login_link_txt; ?></a>
									<?php } ?> 
								</div>

							</div>
						</li>
					</ul>
				</div>

				<?php }
			} 
			else if (($auth_googleoauth2) && (file_exists($CFG->dirroot . '/auth/googleoauth2/lib.php'))) { // oauth2 plugin
        		require_once($CFG->dirroot . '/auth/googleoauth2/lib.php'); auth_googleoauth2_display_buttons(); ?>
				<div style="clear:both;"></div>
				<div class="forgotpass oauth2">
					<?php 
					if ($login_link_url != '' and $login_link_txt != '') { ?>
					<a target="_self" href="<?php echo $login_link_url; ?>"><?php echo $login_link_txt; ?></a>
					<?php } ?> 
				</div>

			</div>
		</li>
	</ul>
</div>

<?php } else { ?>

<form class="navbar-form" method="post" action="<?php echo $wwwroot; ?>/login/index.php?authldap_skipntlmsso=1">
		<div id="block-login" style="padding: 0;text-align: inherit;">
			<div id="user"><i class="fa fa-user"></i></div>
			<label for="inputName" class="lambda-sr-only"><?php echo $username; ?></label>
			<input id="inputName" class="span2" type="text" name="username" placeholder="<?php echo $username; ?>" style="width: 100%;display: block;margin-bottom: 5px;">
				<div id="pass"><i class="fa fa-key"></i></div>
				<label for="inputPassword" class="lambda-sr-only"><?php echo get_string('password'); ?></label>
				<input id="inputPassword" class="span2" type="password" name="password" id="password" placeholder="<?php echo get_string('password'); ?>" style="width: 100%;margin-bottom: 10px;display: block;">
					<button type="submit" id="submit" style="width: 100%;background-image: none;font-size: 1.1em;display: block;margin-bottom: 5px;"><i class="fa fa-angle-right" aria-hidden="true"></i>
						<?php echo get_string('login'); ?></button>
				</div>

				<div class="forgotpass">
					<?php 
					if ($login_link_url != '' and $login_link_txt != '') { ?>
					<a target="_self" href="<?php echo $login_link_url; ?>"><?php echo $login_link_txt; ?></a>
					<?php } ?> 
				</div>

			</form>

		</div>
	</li>
</ul>
</div>
<?php } ?>
<?php } else {

 		echo '<div id="loggedin-user">';		
		echo $OUTPUT->navbar_plugin_output();
		echo $OUTPUT->user_menu();
		echo $OUTPUT->user_picture($USER, array('size' => 80, 'class' => 'welcome_userpicture'));		
		echo '</div>';

	}?>

</div>
</div>

</div>
</div>

<div class="container-fluid">    
	<div class="row-fluid">

		<?php if (!$haslogo) { ?>
		<div class="span8">
			<div class="title-text">
				<h1 id="title"><?php echo $SITE->fullname; ?></h1>
			</div>
		</div>
		<?php } else { ?>
		<div class="span12">
			<div class="logo-header">
				<a class="logo" href="<?php echo $CFG->wwwroot; ?>" title="<?php print_string('home'); ?>">
					<?php 
					echo html_writer::empty_tag('img', array('src'=>$PAGE->theme->setting_file_url('logo', 'logo'), 'class'=>'img-responsive', 'alt'=>'logo', 'style'=>'margin: 0 auto;display: block;'));
					?>
				</a>

			</div>
		</div>
		<?php } ?> 

	</div>
</div>