<?php

	function UpdateUserBasicInfo($DBConn, $UserID, $contact_type, $contact_origin, $contact_suborigin, $captured_product, $contact_sub_id, $personal_email, $electronic_comunications, $creation_date, $lenguage)
	{
		$queryUpdate = "UPDATE ap_users SET
						`contact-type`='$contact_type', 
						`contact-origin`='$contact_origin', 
						`contact-suborigin`='$contact_suborigin', 
						`captured-product`='$captured_product', 
						`contact-sub-id`='$contact_sub_id', 
						`personal-email`='$personal_email', 
						`electronic-comunications`=$electronic_comunications, 
						`creation-date`='$creation_date', 
						`lenguage`='$lenguage'
						WHERE `contact-id` = $UserID;";
						
		$queryResultUpdate = $DBConn->query($queryUpdate);
	}
	
	function UpdateUserPersonalInfo($DBConn, $UserID, $tratement, $juridic_identity, $name, $surname_1, $surname_2, $tel_1, $tel_2, $tel_3, $profesional_email, $adress, $country, $postal_code, $region, $city, $nie, $cif, $nif,
									$comercial_name, $company_name, $comment)
	{
		$queryUpdate = "UPDATE ap_users SET
						`tratement`='$tratement', 
						`juridic-identity`='$juridic_identity', 
						`name`='$name', 
						`surname-1`='$surname_1', 
						`surname-2`='$surname_2', 
						`tel-1`='$tel_1', 
						`tel-2`='$tel_2', 
						`tel-3`='$tel_3', 
						`profesional-email`='$profesional_email',
						`adress`='$adress', 
						`country`='$country', 
						`postal-code`='$postal_code', 
						`region`='$region', 
						`city`='$city', 
						`nie`='$nie', 
						`cif`='$cif', 
						`nif`='$nif', 
						`comercial-name`='$comercial_name',
						`company-name`='$company_name', 
						`comment`='$comment'
						WHERE `contact-id` = $UserID;";
						
		$queryResultUpdate = $DBConn->query($queryUpdate);
	}
	
	function UpdateUserSocialInfo($DBConn, $UserID, $contact_web, $contact_facebook, $contact_twitter, $contact_linkedin, $contact_googleplus, $contact_pinterest, $contact_youtube, $contact_blog, $contact_other_rss)
	{
		$queryUpdate = "UPDATE ap_users SET
						`contact-web`='$contact_web', 
						`contact-facebook`='$contact_facebook', 
						`contact-twitter`='$contact_twitter', 
						`contact-linkedin`='$contact_linkedin', 
						`contact-googleplus`='$contact_googleplus', 
						`contact-pinterest`='$contact_pinterest', 
						`contact-youtube`='$contact_youtube', 
						`contact-blog`='$contact_blog', 
						`contact-other-rss`='$contact_other_rss'
						WHERE `contact-id` = $UserID;";
						
		$queryResultUpdate = $DBConn->query($queryUpdate);
	}
	
	function UpdateUserLinksInfo($DBConn, $UserID, $desc_link1, $link1, $desc_link2, $link2, $desc_link3, $link3, $desc_link4, $link4, $desc_link5, $link5)
	{
		$queryUpdate = "UPDATE ap_users SET
						`desc-link1`='$desc_link1', 
						`link1`='$link1', 
						`desc-link2`='$desc_link2', 
						`link2`='$link2', 
						`desc-link3`='$desc_link3', 
						`link3`='$link3', 
						`desc-link4`='$desc_link4', 
						`link4`='$link4', 
						`desc-link5`='$desc_link5',
						`link5`='$link5'
						WHERE `contact-id` = $UserID;";
						
		$queryResultUpdate = $DBConn->query($queryUpdate);
	}
	
	function UpdateUserLegalInfo($DBConn, $UserID, $offer_conditions, $electronic_comunications, $legal, $lopd_autorisation)
	{
		$queryUpdate = "UPDATE ap_users SET
						`offer-conditions`='$offer_conditions', 
						`electronic-comunications`=$electronic_comunications,
						`legal`=$legal,
						`lopd-autorisation`=$lopd_autorisation
						WHERE `contact-id` = $UserID;";
						
		$queryResultUpdate = $DBConn->query($queryUpdate);
	}
	
	function UpdateUserOtherInfo($DBConn, $UserID, $asociated_product, $cid, $quotes, $contact_db_check, $captured_segment, $asociated_segment, $current_url, $sent, $error_sent, $discount_code, $loyalty, 
								$previous_calification, $sent_date)
	{
		$queryUpdate = "UPDATE ap_users SET
						`asociated-product`='$asociated_product', 
						`cid`='$cid', 
						`quotes`='$quotes', 
						`contact-db-check`='$contact_db_check', 
						`captured-segment`='$captured_segment', 
						`asociated-segment`='$asociated_segment', 
						`current-url`='$current_url', 
						`sent`='$sent', 
						`error-sent`='$error_sent',
						`discount-code`='$discount_code', 
						`loyalty`='$loyalty', 
						`previous-calification`='$previous_calification', 
						`sent-date`='$sent_date'
						WHERE `contact-id` = $UserID;";
						
		$queryResultUpdate = $DBConn->query($queryUpdate);
	}

?>