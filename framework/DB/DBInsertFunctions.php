<?php

	function InsertUserBasicInfo($DBConn, $contact_type, $contact_origin, $contact_suborigin, $captured_product, $contact_sub_id, $personal_email, $electronic_comunications, $creation_date, $lenguage)
	{
		$queryInsert = "INSERT INTO ap_users 
						(`contact-type`, 
						`contact-origin`, 
						`contact-suborigin`, 
						`captured-product`, 
						`contact-sub-id`, 
						`personal-email`, 
						`electronic-comunications`, 
						`creation-date`, 
						`lenguage`) 
						VALUES 
						('$contact_type', 
						'$contact_origin', 
						'$contact_suborigin', 
						'$captured_product', 
						'$contact_sub_id', 
						'$personal_email', 
						$electronic_comunications, 
						'$creation_date', 
						'$lenguage');";
						
		$queryResultInsert = $DBConn->query($queryInsert);
		
		return $DBConn->lastInsertId();
	}
	
	function InsertUserAllInfo($DBConn, $contact_type, $contact_origin, $contact_suborigin, $captured_product, $contact_sub_id, $personal_email, $electronic_comunications, $creation_date, $lenguage,
								$asociated_product, $cid, $surname_1, $surname_2, $tel_1, $tel_2, $tel_3, $profesional_email, $adress, $country, $postal_code, $region, $city, $nie, $cif, $nif, $comercial_name, $company_name,
								$comment, $quotes, $contact_web, $contact_facebook, $contact_twitter, $contact_linkedin, $contact_googleplus, $contact_pinterest, $contact_youtube, $contact_blog, $contact_other_rss,
								$contact_db_check, $captured_segment, $asociated_segment, $offer_conditions, $current_url, $legal, $lopd_autorisation, $sent, $error_sent, $discount_code, $loyalty, $previous_calification,
								$desc_link1, $link1, $desc_link2, $link2, $desc_link3, $link3, $desc_link4, $link4, $desc_link5, $link5, $sent_date)
	{
		$queryInsert = "INSERT INTO ap_users 
						(`contact-type`, `contact-origin`, `contact-suborigin`, `captured-product`, `contact-sub-id`, `personal-email`, `electronic-comunications`, `creation-date`, 
						`lenguage`, `asociated-product`, `cid`, `surname-1`, `surname-2`, `tel-1`, `tel-2`, `tel-3`, `profesional-email`, `adress`, `country`, `postal-code`, `region`, `city`, `nie`,
						`cif`, `nif`, `comercial-name`, `company-name`, `comment`, `quotes`, `contact-web`, `contact-facebook`, `contact-twitter`, `contact-linkedin`, `contact-googleplus`, `contact-pinterest`,
						`contact-youtube`, `contact-blog`, `contact-other-rss`, `contact-db-check`, `captured-segment`, `asociated-segment`, `offer-conditions`, `current-url`, `legal`, `lopd-autorisation`,
						`sent`, `error-sent`, `discount-code`, `loyalty`, `previous-calification`, `desc-link1`, `link1`, `desc-link2`, `link2`, `desc-link3`,` link3`, `desc-link4`, `link4`, `desc-link5`, `link5`, `sent-date`)
						VALUES 
						('$contact_type', '$contact_origin', '$contact_suborigin', '$captured_product', '$contact_sub_id', '$personal_email', $electronic_comunications, '$creation_date', '$lenguage','$asociated_product',
						'$cid', '$surname_1', '$surname_2', '$tel_1', '$tel_2', '$tel_3', '$profesional_email', '$adress', '$country', '$postal_code', '$region', '$city', '$nie', '$cif', '$nif', '$comercial_name',
						'$company_name', '$comment', '$quotes', '$contact_web', '$contact_facebook', '$contact_twitter', '$contact_linkedin', '$contact_googleplus', '$contact_pinterest', '$contact_youtube', '$contact_blog',
						'$contact_other_rss', '$contact_db_check', $captured_segment, $asociated_segment, '$offer_conditions', '$current_url', $legal, $lopd_autorisation, $sent, $error_sent, '$discount_code', $loyalty,
						$previous_calification, '$desc_link1', '$link1', '$desc_link2', '$link2', '$desc_link3', '$link3', '$desc_link4', '$link4', '$desc_link5', '$link5', $sent_date);";
						
		$queryResultInsert = $DBConn->query($queryInsert);
		
		return $DBConn->lastInsertId();
	}

?>