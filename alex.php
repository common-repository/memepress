<?php
/*
Plugin Name: MemePress
Plugin URI: http://anthony.strangebutfunny.net/my-plugins/memepress/
Description: Embed Meme's into your posts and pages!
Version: 3.0
Author: Adzbierajewski
Author URI: http://anthony.strangebutfunny.net/
*/
function meme($file){
return '<img src="' . plugins_url() . '/memepress/memes/' . $file . '">';
}

function memefy($meme){
	if($meme=='are_you_fucking_kidding_me'){
	return meme('are_you_fucking_kidding_me_clean.jpg');
	}
	if($meme=='schlick_female'){
	return meme('fap_schlick_female.jpg');
	}
	if($meme=='2000_years_later'){
	return meme('2000_years_later.jpg');
	}
	if($meme=='a_few_minutes_later'){
	return meme('a_few_minutes_later.jpg');
	}
	if($meme=='all_the_things_sad'){
	return meme('all_the_things_sad.jpg');
	}
	if($meme=='angry_dark_stare'){
	return meme('angry_dark_stare.jpg');
	}
	if($meme=='angry_shaking'){
	return meme('angry_shaking.jpg');
	}
	if($meme=='awe_yeah'){
	return meme('awe_yea.jpg');
	}
	if($meme=='aww_yeah'){
	return meme('aww_yeah.jpg');
	}
	if($meme=='big_smile_low'){
	return meme('big_smile_low.jpg');
	}
	if($meme=='black_pfft'){
	return meme('black_pfft.jpg');
	}
	if($meme=='blonde_forever_alone'){
	return meme('blonde_forever_alone.jpg');
	}
	if($meme=='blonde_fuck_yeah'){
	return meme('blonde_fuck_yeah.jpg');
	}
	if($meme=='blushing'){
	return meme('blushing.jpg');
	}
	if($meme=='broken_heart'){
	return meme('broken_heart.jpg');
	}
	if($meme=='cereal_guy'){
	return meme('cereal_guy.jpg');
	}
	if($meme=='cereal_guy_spitting'){
	return meme('cereal_guy_spitting.jpg');
	}
	if($meme=='cereal_guy_squint'){
	return meme('cereal_guy_squint.jpg');
	}
	if($meme=='challenge_accepted'){
	return meme('challenge_accepted.jpg');
	}
	if($meme=='challenge_accepted_drunk'){
	return meme('challenge_accepted_drunk.jpg');
	}
	if($meme=='challenge_considered'){
	return meme('challenge_considered.jpg');
	}
	if($meme=='classic_rage'){
	return meme('classic_rage.jpg');
	}
	if($meme=='computer_stare'){
	return meme('computer_stare.jpg');
	}
	if($meme=='crying'){
	return meme('crying.jpg');
	}
	if($meme=='cuteness_overload'){
	return meme('cuteness_overload.jpg');
	}
	if($meme=='derpina'){
	return meme('derpina.jpg');
	}
	if($meme=='desk_flip'){
	return meme('desk_flip.jpg');
	}
	if($meme=='double_facepalm'){
	return meme('double_facepalm.jpg');
	}
	if($meme=='dude_come_on'){
	return meme('dude_come_on.jpg');
	}
	if($meme=='embrace_pc'){
	return meme('embrace_pc.jpg');
	}
	if($meme=='epic_win'){
	return meme('epic_win.jpg');
	}
	if($meme=='facepalm'){
	return meme('facepalm.jpg');
	}
	if($meme=='facepalm_picard'){
	return meme('facepalm_picard.jpg');
	}
	if($meme=='fap'){
	return meme('fap.jpg');
	}
	if($meme=='shlick'){
	return meme('schlick_female.jpg');
	}
	if($meme=='feel_like_a_ninja'){
	return meme('feel_like_a_ninja.jpg');
	}
	if($meme=='female_seriously_glasses'){
	return meme('female_seriously_glasses.jpg');
	}
	if($meme=='fine_troll_dancing'){
	return meme('fine_troll_dancing.gif');
	}
	if($meme=='forever_alone'){
	return meme('forever_alone_clean.jpg');
	}
	if($meme=='forever_alone_face_only'){
	return meme('forever_alone_face_only.jpg');
	}
	if($meme=='forever_alone_happy'){
	return meme('forever_alone_happy.jpg');
	}
	if($meme=='freddie_mercury'){
	return meme('freddie_mercury.jpg');
	}//left off :)
	if($meme=='fuck_that'){
	return meme('fuck_that.jpg');
	}
	if($meme=='forever_alone_sad'){
	return meme('forever_alone_sad.jpg');
	}
	if($meme=='fuck_that_bitch'){
	return meme('fuck_that_bitch.jpg');
	}
	if($meme=='fuck_yeah_clean'){
	return meme('fuck_yeah_clean.jpg');
	}
	if($meme=='fuck_yeah_close_enough'){
	return meme('fuck_yeah_close_enough.jpg');
	}
	if($meme=='fuck_yeah_smile'){
	return meme('fuck_yeah_smile.jpg');
	}
	if($meme=='fuck_yeah'){
	return meme('fuck_yeah.jpg');
	}
	if($meme=='fuck_you'){
	return meme('fuck_you.jpg');
	}
	if($meme=='fuuu'){
	return meme('fuuu.jpg');
	}
	if($meme=='gasp_animation'){
	return meme('gasp_animation.gif');
	}
	if($meme=='genius'){
	return meme('genius.jpg');
	}
	if($meme=='got_a_badass'){
	return meme('got_a_badass.jpg');
	}
	if($meme=='gtfo'){
	return meme('gtfo.jpg');
	}
	if($meme=='hah_gay'){
	return meme('hah_gay.jpg');
	}
	if($meme=='happy_smile'){
	return meme('happy_smile_low.jpg');
	}
	if($meme=='haters_gonna_hate_animation'){
	return meme('haters_gonna_hate_animation.gif');
	}
	if($meme=='herp_derp'){
	return meme('herp_derp.jpg');
	}
	if($meme=='i_am_going_to_kill_you'){
	return meme('i_am_going_to_kill.gif');
	}
	if($meme=='i_see_what_you_did_there'){
	return meme('i_know_what_you_did_there.jpg');
	}
	if($meme=='i_lied'){
	return meme('i_lied_black.jpg');
	}
	if($meme=='i_see_what_you_did_there2'){
	return meme('i_see_what_you_did_there_.jpg');
	}
	if($meme=='if_you_know_what_i_mean'){
	return meme('if_you_know_what_i_mean_mr_bean_blank.jpg');
	}
	if($meme=='im_watching_you'){
	return meme('im_watching.jpg');
	}
	if($meme=='jackie_chan'){
	return meme('jackie_chan.jpg');
	}
	if($meme=='jesus'){
	return meme('jesus.jpg');
	}
	if($meme=='kitteh_smile'){
	return meme('kitteh_smile.jpg');
	}
	if($meme=='lazy_college_senior'){
	return meme('lazy_college_senior.jpg');
	}
	if($meme=='lesquee'){
	return meme('lesquee.jpg');
	}
	if($meme=='like_a_sir'){
	return meme('like_a_sir_low.jpg');
	}
	if($meme=='lolol'){
	return meme('lol_crazy_low.jpg');
	}
	if($meme=='lol'){
	return meme('lol.jpg');
	}
	if($meme=='lolol_animated'){
	return meme('lolol.gif');
	}
	if($meme=='me_gusta_creepy'){
	return meme('me_gusta_creepy.jpg');
	}
	if($meme=='me_gusta_vs_okay'){
	return meme('me_gusta_vs_okay.gif');
	}
	if($meme=='me_gusta'){
	return meme('me_gusta.jpg');
	}
	if($meme=='mega_rage_close'){
	return meme('mega_rage_close.jpg');
	}
	if($meme=='must_resist'){
	return meme('must_resist.jpg');
	}
	if($meme=='mother_of_god'){
	return meme('mother_of_god.jpg');
	}
	if($meme=='nerd'){
	return meme('nerd.jpg');
	}
	if($meme=='newspaper_guy'){
	return meme('newspaper_guy_low.jpg');
	}
	if($meme=='newspaper_guy_tear'){
	return meme('newspaper_guy_tear.jpg');
	}
	if($meme=='no'){
	return meme('no.jpg');
	}
	if($meme=='surprised'){
	return meme('nope.jpg');
	}
	if($meme=='nothing_to_do_here'){
	return meme('nothing_to_do_here.jpg');
	}
	if($meme=='now_kiss'){
	return meme('now_kiss.jpg');
	}
	if($meme=='numb'){
	return meme('numb_low.jpg');
	}
	if($meme=='obama_not_bad'){
	return meme('obama_not_bad.jpg');
	}
	if($meme=='oh_god_why'){
	return meme('oh_god_why.jpg');
	}
	if($meme=='oh_stop_it_you'){
	return meme('oh_you_so_cute.jpg');
	}
	if($meme=='ohhh_yes'){
	return meme('ohhh_yes.jpg');
	}
	if($meme=='okay'){
	return meme('okay_guy.jpg');
	}
	if($meme=='okay_animated'){
	return meme('okay.gif');
	}
	if($meme=='pfffrrr'){
	return meme('pfffrrr.jpg');
	}
	if($meme=='pfftch'){
	return meme('pfftch.jpg');
	}
	if($meme=='pleaseguy'){
	return meme('pleaseguy.jpg');
	}
	if($meme=='pirate'){
	return meme('pirate.jpg');
	}
	if($meme=='pokerface'){
	return meme('pokerface_2_clean_low.jpg');
	}
	if($meme=='problemo'){
	return meme('problemo.jpg');
	}
	if($meme=='questioning'){
	return meme('questioning_low.jpg');
	}
	if($meme=='rage_eyes'){
	return meme('rage_eyes.jpg');
	}
	if($meme=='rainbow_puke'){
	return meme('rainbow_puke.gif');
	}
	if($meme=='puke_rainbows'){
	return meme('rainbow_puke.jpg');
	}
	if($meme=='omg_run'){
	return meme('run.gif');
	}
	if($meme=='sad_troll_face'){
	return meme('sad_troll_face.jpg');
	}
	if($meme=='sad'){
	return meme('sad.jpg');
	}
	if($meme=='scared'){
	return meme('scared.jpg');
	}
	if($meme=='serious_not_okay'){
	return meme('serious_not_okay.jpg');
	}
	if($meme=='seriously'){
	return meme('seriously.jpg');
	}
	if($meme=='so_close'){
	return meme('so_close_freddie_mercury.jpg');
	}
	if($meme=='so_hardcore'){
	return meme('so_hardcore.jpg');
	}
	if($meme=='spiderpman'){
	return meme('spiderpman.jpg');
	}
	if($meme=='super_rage'){
	return meme('super_rage.jpg');
	}
	if($meme=='surprised_gasp'){
	return meme('surprised_gasp.jpg');
	}
	if($meme=='surprised_long_neck_surprise'){
	return meme('surprised_long_neck_surprise.jpg');
	}
	if($meme=='suspicious'){
	return meme('suspicious_low.jpg');
	}
	if($meme=='thumbs_up'){
	return meme('thumbs_up.jpg');
	}
	if($meme=='troll_crazy'){
	return meme('troll_crazy.jpg');
	}
	if($meme=='troll_dad_dance'){
	return meme('troll_dad_dance.jpg');
	}
	if($meme=='troll_dad_full'){
	return meme('troll_dad_full.jpg');
	}
	if($meme=='troll_dad_monocle'){
	return meme('troll_dad_monocle.jpg');
	}
	if($meme=='troll_dad'){
	return meme('troll_dad.jpg');
	}
	if($meme=='troll_dancing'){
	return meme('troll_dancing.gif');
	}
	if($meme=='troll_face'){
	return meme('troll_face.jpg');
	}
	if($meme=='troll_typing_animation'){
	return meme('troll_typing_animation.gif');
	}
	if($meme=='trollol'){
	return meme('trollol.jpg');
	}
	if($meme=='true_story'){
	return meme('true_story.jpg');
	}
	if($meme=='u_mad_troll'){
	return meme('u_mad_troll.gif');
	}
	if($meme=='ultra_gay'){
	return meme('ultra_gay.jpg');
	}
	if($meme=='whyyy'){
	return meme('whyyy.jpg');
	}
	if($meme=='x_all_the_y'){
	return meme('x_all_the_y.jpg');
	}
	if($meme=='y_u_no_crying'){
	return meme('y_u_no_crying.jpg');
	}
	if($meme=='y_u_no'){
	return meme('y_u_no_low.jpg');
	}
	if($meme=='you_dont_say'){
	return meme('you_dont_say.jpg');
	}
	if($meme=='you_win_this_time'){
	return meme('you_win_this_time.jpg');
	}
	if($meme=='youre_the_man'){
	return meme('youre_the_man.jpg');
	}
}
function meme_function( $atts ) {
		extract( shortcode_atts( array(
		'meme' => 'something',
		'showname' => 'false',
		'exampleon' => 'false',
	), $atts ) );
	if($showname=='true'){
		if($exampleon=='true'){
			return 'Example: [meme meme="' . $meme . '"]<br />' . memefy($meme);
		} else {
			return '<p>' . $meme . '</p>';
			return memefy($meme);
		}
	} else {
		return memefy($meme);
	}
}
//add_filter( 'bbp_get_reply_content', 'meme_function', 0);
add_shortcode( 'meme', 'meme_function' );

add_action('admin_menu', 'memepress_admin_page_menu');
function memepress_admin_page_menu(){
add_options_page( 'MemePress', 'MemePress', 'edit_users', 'memepress-admin-menu', 'memepress_admin_page');
}
function memepress_admin_page(){
	return '<div class="wrap">';
	return '<p>To embed a meme in a post simply put [meme meme="name_of_meme"]</p>';
	return '<p>Example: [meme meme="are_you_fucking_kidding_me"]</p>';
	return '<p>For a list of Memes see: <a href="http://anthony.strangebutfunny.net/my-plugins/memepress/memes/">http://anthony.strangebutfunny.net/my-plugins/memepress/memes/</a></p>';
	return '</div>';
	}
?>
