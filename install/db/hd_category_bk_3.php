<?php if(!defined('HDPHP_PATH'))EXIT;
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`single_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_state`) VALUES('1','0','问答','help','','','article_index.html','article_list.html','article_default.html','','{catdir}/list_{cid}_{page}.html','{catdir}/{y}/{m}{d}/{aid}.html','1','2','2','2','','100','1','','','1','0','1','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`single_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_state`) VALUES('2','1','HDPHP','hdask','','','article_index.html','article_list.html','article_default.html','','{catdir}/list_{cid}_{page}.html','{catdir}/{y}/{m}{d}/{aid}.html','1','1','2','2','','100','1','','','1','0','1','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`single_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_state`) VALUES('3','1','HDCMS','cmsask','','','article_index.html','article_list.html','article_default.html','','{catdir}/list_{cid}_{page}.html','{catdir}/{y}/{m}{d}/{aid}.html','1','1','2','2','','100','1','','','1','0','1','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`single_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_state`) VALUES('4','0','资讯','news','','','article_index.html','article_list.html','article_default.html','','{catdir}/list_{cid}_{page}.html','{catdir}/{y}/{m}{d}/{aid}.html','1','1','2','2','','100','1','','','1','0','1','1','0')");
$db->exe("REPLACE INTO ".$db_prefix."category (`cid`,`pid`,`catname`,`catdir`,`cat_keyworks`,`cat_description`,`index_tpl`,`list_tpl`,`arc_tpl`,`single_tpl`,`cat_html_url`,`arc_html_url`,`mid`,`cattype`,`arc_url_type`,`cat_url_type`,`cat_redirecturl`,`catorder`,`cat_show`,`cat_seo_title`,`cat_seo_description`,`add_reward`,`show_credits`,`repeat_charge_day`,`allow_user_set_credits`,`member_send_state`) VALUES('5','0','实训','houdunwang','','','article_index.html','article_list.html','article_default.html','','{catdir}/list_{cid}_{page}.html','{catdir}/{y}/{m}{d}/{aid}.html','1','3','2','2','http://www.houdunwang.com','100','1','','','1','0','1','1','0')");
