<?php if ( !defined( 'HABARI_PATH' ) ) { die( 'No direct access' ); }

class ExtendedUserInfo extends Plugin
{
	public function action_form_user ($form, $user) {

		/**
	 	* Add the configuration to the user page 
	 	**/

		//Add Twitter URL
		$twitterurl = $form->user_info->append( 'text', 'twitterurl', 'null:null', _t( 'Twitter URL' ), 'optionscontrol_text' );
		$twitterurl->class[] = 'item clear';
		$twitterurl->value = $user->info->twitterurl;

		//Add Facebook URL
		$facebookurl = $form->user_info->append( 'text', 'facebookurl', 'null:null', _t('Facebook URL' ), 'optionscontrol_text' );
		$facebookurl->class[] = 'item clear';
		$facebookurl->value = $user->info->facebookurl;

		//Add Bio blurb
		$bio = $form->user_info->append ('textarea', 'bioblurb', 'null:null', _t('Bio Blurb'), 'optionscontrol_textarea' );
		$bio->class[] = 'item clear';
		$bio->value = $user->info->bioblurb;

	}
}
?>