<?php
/**
*
* @package Icy Phoenix
* @version $Id$
* @copyright (c) 2008 Icy Phoenix
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/
/* translation
                           
   ���������� �� �������: ��������� �������(zver) zver64ru@gmail.com  Icq:45716497 WWW.SARPORT.RU
It is translated into Russian: Mel'nikov Nikolay(zver)   zver64ru@gmail.com  Icq:45716497 WWW.SARPORT.RU
                    
   */
/**
*
* @Extra credits for this file
* (c) 2002 Meik Sievertsen (Acyd Burn)
* Lopalong
*
*/

if (!defined('IN_ICYPHOENIX'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
// Modules, this replaces the keys used
	'Control_Panel' => '������ ����������',
 'Shadow_attachments' => '������� ��������',
 'Forbidden_extensions' => '����������� ����������',
 'Extension_control' => '�������������� ����������',
 'Extension_group_manage' => '�������������� ���������� �����',
 'Special_categories' => '����������� ���������',
 'Sync_attachments' => '������������� ��������',
 'Quota_limits' => '������� �����',

// Attachments -> Management
	'Attach_settings' => '��������� ��������� ��������',
 'Manage_attachments_explain' => '<b> ����� ������������ �������� ��������� ��������� ���  ��������. </b> <br/> ���� �� ��������� ������ ���������� ��������� ��������, �������� ��������� ��������� ������, ����� �������������, ��� ��� ����� �������� ���������. ���� � ��� ���� �������� � ��������� ������, ���������� ��������� ���� ����, ����� �������� ���������� �� �������.',
 'Attach_filesize_settings' => '��������� ��������� ������� ����� ��������',
 'Attach_number_settings' => '��������� ��������� ����������� ��������',
 'Attach_options_settings' => '����� ��������',

 'Upload_directory' => '���� � ����������',
 'Upload_directory_explain' => '������� ������������� ���� �� ����� ����������� IcyPhoenix �� �������� �������� ��������. ��������, ������� <b> files </b>, ���� ����  ����������� icyphoenix ����������� � http://www.yourdomain.com/ip, � ������� �������� �������� ���������� � http://www.yourdomain.com/ip/files.',
 'Attach_img_path' => '������ ��������',
 'Attach_img_path_explain' => '����������� ����� ���������� ����� �� �������� �������� � �������������� ����������. �������� ��� ���� ������, ���� ��  �� ������, ����� ������ �����������. ��� ������� �����������  ��������� � �������������� ���������� �����.',
 'Attach_topic_icon' => '������ ���� ��������',
 'Attach_topic_icon_explain' => '�����������  ����� ������������ ����� ������ � ����������. �������� ��� ���� ������, ���� �� �� ������, ����� ������ �����������.',
 'Attach_display_order' => '��������� ������� ��������',
 'Attach_display_order_explain' => '��������, ���������� �� �������� � Posts/PMs � ����������� ��������� ������ (����� ����� �������� �������) ��� ��������� �������� ����� (����� ������ �������� �������).',
 'Show_apcp' => '�������� ����� ������ ���������� �������� ��������',
 'Show_apcp_explain' => '��������, ���������� ������ ���������� ��������� ����������� �������� (��) ��� ������ ����� � ����� ������ ��� ���������� ������ � �������������� ����� ������������������ �������� (��) � �������� ������ ������ ��������� �����������. ��� ����� �������� ����� ����������, ����� ���������, ������� ��� \'s ����� �����, ����� �������� ���.',

 'Max_filesize_attach' => '������ �����',
 'Max_filesize_attach_explain' => '������������ ������ ����� ��� ��������. �������� 0 - ��� �����������.���� � ��� ��� ����������� �� ����� �������. ��������, ���� ���� php ������������  ��������� �������� �������� �� 2 ������, �� ���������� � ��������� �������� ��� ���������� �������. ',
 'Attach_quota' => '������ ��������� ������������ ��� ��� ��������',
 'Attach_quota_explain' => '������������ �������� ������������ ��� ��� �������� . �������� 0 ������� \'��� ����������� \'. ',
 'Max_filesize_pm' => '������������ ������ ����� � ������ ���������',
 'Max_filesize_pm_explain' => '������������ �������� ��������� ������������ ��� ������� ������������ \������ �������� ���������. �������� 0 ������� \'��� ����������� \'. ',
 'Default_quota_limit' => '�������� �� ��������� ������ ������� �����',
 'Default_quota_limit_explain' => '�������� �������� �� ��������� ������ �����, ������������� ����������� �� ������� ������������������ �������������, � ������������� ��� ������������ �������� ������� �����. ������ ����� ����� \'No \' ��� \'not \'������������ ����� ����� ��������, ������ ����� ��������� ��������� �� ���������, ������� �� ���������� � ���� ������ ����������.',

 'Max_attachments' => '������������ ���������� �������� � ���������',
 'Max_attachments_explain' => '������������ ���������� �������� � ����� ���������.',
 'Max_attachments_pm' => '������������ ����� �������� � ����� ������ ���������',
 'Max_attachments_pm_explain' => '���������� ������������ ���������� ��������, ������� ������������ ��������� ������������ � ������ ����������.',

 'Disable_mod' => '��������� ��������',
 'Disable_mod_explain' => '��� ����� ������ ��� ����, ����� ��������� ����� ������� ��� ����, ��� ��������� ��� ������� �������� ����� ������ �������������.',
 'PM_Attachments' => '��������� �������� � ������ ����������',
 'PM_Attachments_explain' => '���������/��������� ����������� ����� � ������ ����������.',
 'Ftp_upload' => '��������� �������� �� FTP',
 'Ftp_upload_explain' => '���������/��������� ����� Upload FTP. ���� �� ��������������  ��, �� ������ ���������� ��������� ��������� FTP ��������, � ������� �������� ������ �� ����� ��������������.',
 'Attachment_topic_review' => '�� ������ ���������� �������� � ���� ������ ����?',
 'Attachment_topic_review_explain' => '���� �� ��������� ��, �� ��� ������������� �����, ����� ���������� � ������ ����, ����� �� ���������� �����.',

 'Ftp_server' => '������ �������� FTP',
 'Ftp_server_explain' => '������ ����� IP ��� ��� ����� FTP �������, ������������� ��� ����� ���������� ������. ���� �� �������� ��� ���� ������, �� ������, �� ������� ���������� ��� ������� ������, ����� ��������������. ���������� ��������, ��� �� ��������� �������� ftp:// ��� ��� - �� ��� � ������, ������ ��������� ftp.foo.com ��� (������� ������� �������), ������� ����� IP.',

 'ftp_username' => '���� ��� ������������ FTP',
 'ftp_password' => '��� ������ FTP',

 'Attach_ftp_path' => '���� FTP � ������ �������� ��������',
 'Attach_ftp_path_explain' => '�������, ��� ���� �������� ����� ���������. ���� ������� doesn \'t ������ ���� chmodded. ���������� ��� \'t ������ ��� IP ��� ����� FTP �����, ��� ������� ���� ������ ��� ���� FTP. <br/> ��������:/home/web/uploads',
 'Ftp_download_path' => '������ �������� �� ���� FTP',
 'Ftp_download_path_explain' => '������� URL � ��� ���� FTP, ��� ��������� ���������� ��������. <br/> ���� �� ����������� ���������� ������ FTP, ���������� ������� ����������� url, �������� http://www.mystorage.com/ip/upload. <br/>, ���� �� �����������  ������� ������� ���������, ����� ������� ���� �����, �� � ��������� ������ ���� url ������������ ������ �������� �������� �������, �������� \'upload \'. <br/> ��������� ����� ����� ����� �������. �������� ��� ���� ������, ���� ���� FTP �� �������� �� ���������. � ���� �����, ������, �� ���������� ������������ ���������� ����� ��������. ',
 'Ftp_passive_mode' => '��������� FTP ��������� �����',
 'Ftp_passive_mode_explain' => '������� PASV ������, ����� ���������� ������ ������ ���� ��� ���������� ������ � ��������� ����� ���� �����. ���������� ������ ������� �� ��� �����, � ������ ����������� � ����.',

 'No_ftp_extensions_installed' => '�� �� � ��������� ������������ ������ �������� FTP, ������ ��� ���������� FTP �� ��������������� � ���� ����������� PHP.',
// Attachments -> Shadow Attachments
	'Shadow_attachments_explain' => '������� ������ �������� �� ���������, ����� ����� ����������� �� ����� �������� �������, � ������� �����, ������� ������ �� ������������ �� � ����� ����������. �� ������ ��������� ��� ����������� ����.',
 'Shadow_attachments_file_explain' => '������� ��� ����� ��������, ������� ���������� �� ����� �������� ������� � �� ��������� �� ������������ ����.',
 'Shadow_attachments_row_explain' => '������� ��� �������� ������ �������� ��� ������, ��� ��� \'t ���������� �� ����� �������� �������.',
 'Empty_file_entry' => '������ ���� �����',


// Attachments -> Sync
	'Sync_thumbnail_recreated' => '����� ������ ��� ��������: %s',//�������� %s ���������� ������ �����
 'Sync_thumbnail_resetted' => '����� ���������� ��� ��������: %s',//�������� %s ���������� ������ �����
 'Attach_sync_finished' => '�������� ����������� Syncronization.',
 'Sync_topics' => '�������������� ����',
 'Sync_posts' => '�������������� ���������',
 'Sync_thumbnails' => '�������������� ������',

// Extensions -> Extension Control
	'Sync_thumbnail_recreated' => '����� ������ ��� ��������: %s',//�������� %s ���������� ������ �����
 'Sync_thumbnail_resetted' => '����� ���������� ��� ��������: %s',//�������� %s ���������� ������ �����
 'Attach_sync_finished' => '�������� ����������� Syncronization.',
 'Sync_topics' => '�������������� ����',
 'Sync_posts' => '�������������� �����',
 'Sync_thumbnails' => '�������������� ������',


// Extensions -> Extension Groups Management
	'Manage_extension_groups' => '��������� ��������������� ��������',
 'Manage_extension_groups_explain' => '�������, ������� ��� �������� ���� �������������� ������, �� ������ ��������� �������������� ������, ��������� ����������� ��������� ��� ���, �������� ��������� ��������, �� ������ ���������� ������ ��������, ������� ����� ���������� ����� ���������, ������������� ������.',
 'Special_category' => '����������� ���������',
 'Category_images' => '�����������',
 'Category_stream_files' => '��������� �����',
 'Category_swf_files' => '��������� �����',
 'Allowed' => '��������',
 'Allowed_forums' => '����������� ������',
 'Ext_group_permissions' => '����� ������',
 'Download_mode' => '����� ��������',
 'Upload_icon' => '������ ��������',
 'Max_groups_filesize' => '������������ ������ �����',
 'Extension_group_exist' => '�������������� ������ %s ��� ����������',//�������� %s ��������� ������
 'Collapse' => '+',
 'Decollapse' => '-',


// Extensions -> Special Categories
	'Manage_categories' => '���������� ������������ �����������',
 'Manage_categories_explain' => '������������� ����������� ��������� � ������� ��� ����������� ���������, ����������� �� �������������� ������.',
 'Settings_cat_images' => '��������� ��������� ��� ����������� ���������: �����������',
 'Settings_cat_streams' => '��������� ��������� ��� ����������� ���������: ��������� �����',
 'Settings_cat_flash' => '��������� ��������� ��� ����������� ���������: ��������� �����',
 'Display_inlined' => '��������� �����������, �����������',
 'Display_inlined_explain' => '��������  ������� ����������� ��������������� � �������� ��������� (��) ��� �������� ����������� ��� ������?',
 'Max_image_size' => '������������ ������� �����������',
 'Max_image_size_explain' => '���������� ������������ ����������� ������ �����������, ������� ����� ����������� (������ x ������ � ��������). <br/>, ���� ��� ����������� � 0x0, ��� ����������� �������������. ��������� ��� �����������, �� ����� �������� ��-�� ����������� � PHP.',
 'Image_link_size' => '������ �����������',
 'Image_link_size_explain' => '����  ������������ ������ ����������� ��������, �� ����������� ����� ���������� ��� ������, <br/>, ���� ����������� ������������� ����� �������� (������ x ������ � ��������). <br/>, ���� ��� ����������� � 0x0, ��� ����������� �������������. � ������� ���������� ��� �����������, �� ����� �������� ��-�� ����������� � PHP.',
 'Assigned_group' => '����������� ������',

 'Image_create_thumbnail' => '������� �����',
 'Image_create_thumbnail_explain' => '������ ��������� �����. ��� ����������� �������� ����� ��� ��������� ��������� � �������� ���� ����������� ���������, ����� ������������ ������������ �����������. � ���� ������������ ����� ����� ��������� � �������� ���������, ������������ ����� ������ �� �����, ����� ������� �������� �����������. <br/> ����������, ����� Imagick ��� ����������, ����  \'s, �� ������������� ��� ���� ����������� ������ ��������� GD-���������� PHP, ����� ��������������. ���� ��� ����������� �� ����� ��������� PHP, �� ��� ������� �� ����� ��������.',
 'Image_min_thumb_filesize' => '����������� ������ ����� ������',
 'Image_min_thumb_filesize_explain' => '���� ����������� ������ ��� ������������� ���������, �� ����������� ������������� ������ ������ �������.',
 'Image_imagick_path' => '��������� Imagick (����������� ����)',
 'Image_imagick_path_explain' => '������ ���� � ������������� ��������� imagick, ������/usr/bin/convert (�� windows: c:/imagemagick/convert.exe).',
 'Image_search_imagick' => '������ �� Imagick',

 'Use_gd2' => '������������ ���������� GD2',
 'Use_gd2_explain' => 'PHP � ��������� ���� ����������������� � GD1 ��� ����������� GD2 ��� ����������� �����������. ����� ��������� ������� ������ ��� imagemagick, ��� �������� ���������� ��� ��������� ������, ���������� �� ����� ������. ���� ���� ������ ��������� � ������ �������� ��� ��������, ����������� �������� ��� ���������.',
 'Attachment_version' => '������ %s ��� ��������',//%s �������� ������� ������

// Extensions -> Forbidden Extensions
	'Manage_forbidden_extensions' => '���������� ������������ ������������',
 'Manage_forbidden_extensions_explain' => '������� ��� ������� ����������� ����������. ���������� php, php3 � php4 ��������� �� ��������� ��� ������������, �� �� ������ ������� ��.',
 'Forbidden_extension_exist' => '����������� ���������� %s ��� ���-"������� ',//�������� %s �����������
 'Extension_exist_forbidden' => '���������� %s ��� ����������, ���������� ������� ������ ������, � ����� �������� ����� ����������.',//�������� %s �����������
// Extensions -> Extension Groups Control -> Group Permissions
	'Group_permissions_title' => '�������������� ���������� ������-> \' % s \'', //�������� %s ��������� �����
 'Group_permissions_explain' => '������������ ��������� �������������� ������ �������� ������ ������ (������������ � ����������� ����� �������). �������� �� ��������� ������ ��������� �������������� ������ ���� �������, � ������� ������������ � ��������� ���������� ����� (���������� ������, ������� ������ �������� ������ � ������). ������ �������� �� ������, ������� �� ������, ����� �������������� ������ (���������� � �������� ���� ������) ���� ��������� ���, �������� �� ���������, ��� ������ ��������, ����� �� �������� ������ � ������. �� � ��������� �������� �������� ��� ������ � ����� ������ �������. ���� �� ���������� ����� � ������ ������, � ���������� ����������� �� ��� ������, ������� ����� �� �������. �� ���� �� �������� � ���������� ������ � ������������ �������, �� ������ ������������� �����, ����� �������� ��� ������� ��������� �����. ��� ������ ������� ��� �������������, �� ��� ������� ��� ������������� ������ ������, ������� � ������ ������, ������� ��� ������. ���������� ������ � ����, ��� ��� ���� ������ ����� ����������� �����.',
 'Note_admin_empty_group_permissions' => '����������: <br/> � �������� ���� ������������� ������� ����� ������������� ������ ��������� ���������� �����, �� ��� ��� ������� �������������� ������ �� ��������� ���� ������������� ���, ���� ������������ ���������� ���������� ���-������. ���� ��� ���������, �� ��� ������� ��������� �� �������. �������� �� ������ ���������� ����� ���������� \'Post \' � ������������� �� ���� �������. <br/> <br/> ',
 'Add_forums' => '�������� ������',
 'Add_selected' => '�������� ���������',
 'Perm_all_forums' => '��� ������',

// Attachments -> Quota Limits
	'Manage_quotas' => '���������� ��������� ����� ��������',
 'Manage_quotas_explain' => '�������, ������� ��� �������� ������� �����. �� � ��������� ��������� ��� ������� ����� ������������� � ������� �����. ����� ��������� ������ ����� ������������, �� ������ ������ � �������������-> ����������, ������� ������������, � �� ������� �������� �����. ����� ��������� ������ ����� ������, ������� � �������-> ����������, �������� ������, ����� ������������� ���, � �� ������� ��������� ��������� ������������. ���� �� ������ ������, ����� ������������� � ������ ��������� �� ������������ ������ �����, �������� �� \'View \' ����� �� �������� �����. ',
 'Assigned_users' => '����������� ������������',
 'Assigned_groups' => '����������� ������',
 'Quota_limit_exist' => '������ ����� %s ��� ����������.', //%s  ��������� �����


// Attachments -> Control Panel
	'Control_panel_title' => '������ ���������� �������� �����',
 'Control_panel_explain' => '������������� � ��������� ����� ����������, ����������� �� �������������, ���������, ���������� � �.�..',
 'File_comment_cp' => '����������� �����',

// Control Panel -> Search
	'Search_wildcard_explain' => '������������� * ��� �������������� ����� ��� ��������� ���',
 'Size_smaller_than' => '������ ��������, ������� ��� (�����)',
 'Size_greater_than' => '������ ��������, ������ ��� (�����)',
 'Count_smaller_than' => '���� �������� ������ ���',
 'Count_greater_than' => '���� �������� ������ ���',
 'More_days_old' => '������ ��� ��� ����� ����',
 'No_attach_search_match' => '������� �������� �������� ���� �������� ������',

// Control Panel -> Statistics
	'Number_of_attachments' => '���������� ��������',
 'Total_filesize' => '������ ������ �����',
 'Number_posts_attach' => '���������� ��������� � ����������',
 'Number_topics_attach' => '���������� ��� � ����������',
 'Number_users_attach' => '����������� ������������ ������������������ ��������',
 'Number_pms_attach' => '����� ���������� �������� � ������ ����������',
// Control Panel -> Attachments
	'Statistics_for_user' => '���������� �������� ��� %s',//�������� %s ������ ������������
 'Size_in_kb' => '������ (�����)',
 '��������' => '��������',
 'Post_time' => '�������� �����',
 'Posted_in_topic' => '������������������ � ����',
 'Submit_changes' => '������������ ���������',

// Sort Types
	'Sort_Attachments' => '��������',
 'Sort_Size' => '������',
 'Sort_Filename' => '��� �����',
 'Sort_Comment' => '�����������',
 'Sort_Extension' => '����������',
 'Sort_Downloads' => '��������',
 'Sort_Posttime' => '�������� �����',
 'Sort_Posts' => '���������',

// View Types
	'View_Statistic' => '����������',
 'View_Search' => '�����',
 'View_Username' => '��� ������������',
 'View_Attachments' => '��������',

// Successfully updated
	'Attach_config_updated' => '������������ ��������, ����������� �������',
 'Click_return_attach_config' => '������� %s�����%s, ����� ������������ � ���������� ��������',
 'Test_settings_successful' => '����������� ���� ���������� ���������, ������������, �������, ���������.',


// Some basic definitions
	'Attachments' => '��������',
 'Attachment' => '��������',
 'Extensions' => '����������',
 'Extensions' => '����������',

// Auth pages
	'Auth_attach' => '��������� �����',
 'Auth_download' => '��������� �����',
	)
);

?>