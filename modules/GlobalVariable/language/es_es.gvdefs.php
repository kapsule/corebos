<?php
/*************************************************************************************************
 * Copyright 2016 JPL TSolucio, S.L. -- This file is a part of TSOLUCIO coreBOS Customizations.
 * Licensed under the vtiger CRM Public License Version 1.1 (the "License"); you may not use this
 * file except in compliance with the License. You can redistribute it and/or modify it
 * under the terms of the License. JPL TSolucio, S.L. reserves all rights not expressly
 * granted by the License. coreBOS distributed by JPL TSolucio S.L. is distributed in
 * the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. Unless required by
 * applicable law or agreed to in writing, software distributed under the License is
 * distributed on an "AS IS" BASIS, WITHOUT ANY WARRANTIES OR CONDITIONS OF ANY KIND,
 * either express or implied. See the License for the specific language governing
 * permissions and limitations under the License. You may obtain a copy of the License
 * at <http://corebos.org/documentation/doku.php?id=en:devel:vpl11>
 *************************************************************************************************
 *  Module       : Global Variable Definitions
 *  Version      : 1.0
 *  Author       : JPL TSolucio, S. L.

 * Definition Template *
'variable name' => array(
	'status' => 'Not Implemented' | 'Implemented' | 'Deprecated',
	'valuetype' => 'String' | 'Boolean' | 'Integer' | 'Float' | 'CSV' | EMail,
	'category' => 'System' | 'User Interface' | 'Performance' | 'Module Functionality' | 'Security' | 'Other',
	'values' => 'list of possible values',
	'definition' => 'explanation and purpose',
),

 *************************************************************************************************/
$GlobalVariableDefinitonsHeader = array(
	'valuetype' => 'Tipo de Valor',
	'category' => 'Categoría',
	'values' => 'Valores',
	'definition' => 'Definición',
);
$GlobalVariableDefinitons = array(
'Application_AdminLoginIPs' => array(
	'status' => 'Implemented',
	'valuetype' => 'CSV IPs',
	'category' => 'Security',
	'values' => 'Example: 127.0.0.1,192.168.0.100',
	'definition' => 'Comma separated list of IP addresses from which admin users will be permitted to login',
),
'Debug_Record_Not_Found' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Debug',
	'values' => '0 | 1',
	'definition' => 'When a record cannot be found, the application will show a message indicating the event. If this variable is set to 1 then the application will show additional information about the record being looked for like the module and crmid.',
),
'Debug_Report_Query' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Debug',
	'values' => '0 | 1',
	'definition' => 'If set to 1 the SQL query being launched for a report will be shown on screen.',
),
'Debug_ListView_Query' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Debug',
	'values' => '0 | 1',
	'definition' => 'If set to 1 the SQL query being launched to retrieve records in a List View will be shown on screen.',
),
'Debug_Popup_Query' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Debug',
	'values' => '0 | 1',
	'definition' => 'If set to 1 the SQL query being launched to retrieve records in a Popup View will be shown on screen.',
),
'Accounts_BlockDuplicateName' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Module Functionality',
	'values' => '0 | 1',
	'definition' => 'If set to 1, which is the default value, you will not be able to duplicate account names, if set to 0 that will be permitted.',
),
'ModComments_DefaultBlockStatus' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Module Functionality',
	'values' => '0 | 1',
	'definition' => 'If set to 1, which is the default value, the Comments block will be open, if set to 0 it will be closed.',
),
'ModComments_DefaultCriteria' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Module Functionality',
	'values' => 'All | Last5 | Mine',
	'definition' => '"All" (default value) will show all comments related to the module, "Last5" will show only the last 5 commentas and "Mine" will show all comments of the current user.',
),
'Application_TrackerMaxHistory' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application Functionality',
	'values' => '',
	'definition' => 'Máximum number of elements in the Recent Viewed elements popup. The default value is 10.',
),
'EMail_OpenTrackingEnabled' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Module Functionality',
	'values' => '0 | 1',
	'definition' => 'If emails will have a hidden image to track openings. The default is enabled (1). <a href="http://corebos.org/documentation/doku.php?id=en:email_tracking" target="_blank">Documentation</a>',
),
'ToolTip_MaxFieldValueLength' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Module Functionality',
	'values' => '',
	'definition' => 'Maximum number of characters of a value to show in the tooltip. The default value is 35. This variable can be set per module.',
),
'Debug_Send_VtigerCron_Error' => array(
	'status' => 'Implemented',
	'valuetype' => 'CSV EMail',
	'category' => 'Debug',
	'values' => '',
	'definition' => '',
),
'Debug_Send_AdminLoginIPAuth_Error' => array(
	'status' => 'Implemented',
	'valuetype' => 'CSV EMail',
	'category' => 'Debug',
	'values' => '',
	'definition' => '',
),
'Application_Announcement' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => 'Text to show',
	'definition' => 'Shows a scrolling header text as a system wide announcement',
),
'preload_jscalendar' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Development',
	'values' => 'true | false',
	'definition' => 'true, which is the default value, will load the javascript date calendar extension, false will not load it. Specially used for extensions which load their own calendar plugin.',
),
'Application_Display_World_Clock' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'Show or Hide World Clock widget in toolbar',
),
'Application_Display_Calculator' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'Show or Hide Calculator widget in toolbar',
),
'Application_Display_Mini_Calendar' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'Show or Hide mini Calendar widget in toolbar',
),
'Application_Use_RTE' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'Use Rich Text Editor in those modules that support it',
),
'Webservice_Enabled' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Webservice',
	'values' => '0 | 1',
	'definition' => 'Completely disables or enables webservice access.',
),
'Webservice_CORS_Enabled_Domains' => array(	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Webservice',
	'values' => 'CSV of authorized CORS domains',
	'definition' => 'CSV of URI of domains authorized to access webservice. The special entry asterisk "*" will give access to all domains.',
),
'SOAP_CustomerPortal_Enabled' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Webservice',
	'values' => '0 | 1',
	'definition' => 'Completely disables or enables SOAP Customer Portal access.',
),
'Application_Default_Action' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => 'Valid module action, usually "index"',
	'definition' => 'Action that will be executed when accessing the application with no action defined in URL',
),
'Application_Default_Module' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => 'Valid module name',
	'definition' => 'Module that will be loaded by default when no module is specified in URL',
),
'Application_Allow_Exports' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => 'all | admin | none',
	'definition' => 'Global security check to permit exporting. "all" to allow anyone to use exports, "admin" to only allow admins to export, "none" to block exports completely. Default value = all',
),
'Application_ListView_Max_Text_Length' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Maximum number of letters of a field to show in a list view column. Default value is 40 and 0 shows the full string.',
),
'Application_ListView_PageSize' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Number of rows per page in list views',
),
'Application_Upload_MaxSize' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Maximum file size for uploaded files in bytes also used when uploading import files. Default value = 3000000',
),
'HelpDesk_Support_EMail' => array(
	'status' => 'Implemented',
	'valuetype' => 'Email',
	'category' => 'Application',
	'values' => '',
	'definition' => '"From" email address for emails going out from the HelpDesk support module (and some other system emails).',
),
'HelpDesk_Support_Name' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => '',
	'definition' => '"From" name and signature for emails going out from the HelpDesk support module (and some other system emails).',
),
'HelpDesk_Support_Reply_EMail' => array(
	'status' => 'Implemented',
	'valuetype' => 'Email',
	'category' => 'Application',
	'values' => '',
	'definition' => '"Reply To" email address for emails going out from the HelpDesk support module (and some other system emails). It will only be used if it is different from HelpDesk_Support_EMail',
),
'Application_Single_Pane_View' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'When activated the "More Information" tab will be shown at the end of the detail view block instead of on another tab.',
),
'Application_Minimum_Cron_Frequency' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Minimum number of minutes between consecutive same scheduled tasks execution. Default is 15 minutes.',
),
'Application_Customer_Portal_URL' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => '',
	'definition' => 'URL for customer portal (Example: http://your_support_domain.tld/portal). Used mostly for email template communications.',
),
'Home_Display_Empty_Blocks' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'Option to hide empty home blocks if it contains no entries.',
),
'Debug_Calculate_Response_Time' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Debug',
	'values' => '0 | 1',
	'definition' => 'If active will show the application response time at the bottom of each page.',
),
'Import_Batch_Limit' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Individual batch limit - Specified number of records will be imported at one shot and the cycle will repeat untill all records are imported. Default value is 250',
),
'Import_Scheduled_Limit' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Application',
	'values' => '',
	'definition' => 'Threshold record limit for immediate import. If record count is more than this, then the import is scheduled through cron job. Default value is 1000',
),
'Application_Help_URL' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => '',
	'definition' => 'URL to go to when user clicks on help icon in upper right corner. If set to 0 no help icon will be shown. Default value is corebos.org wiki.',
),
'WebService_Session_Life_Span' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Webservice',
	'values' => '',
	'definition' => 'Maximum life span of a webservice session. After this time the session will be destroyed even if it is being kept alive. Default is a day.',
),
'WebService_Session_Idle_Time' => array(
	'status' => 'Implemented',
	'valuetype' => 'Integer',
	'category' => 'Webservice',
	'values' => '',
	'definition' => 'Maximum life span that a session should be kept alive after the last transaction. Default is 1800 (seconds)',
),
'Application_UI_Name' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => '',
	'definition' => '',
),
'Application_UI_Version' => array(
	'status' => 'Implemented',
	'valuetype' => 'String',
	'category' => 'Application',
	'values' => '',
	'definition' => '',
),
'Application_UI_URL' => array(
	'status' => 'Implemented',
	'valuetype' => 'URL',
	'category' => 'Application',
	'values' => '',
	'definition' => '',
),
'Document_Folder_View' => array(
	'status' => 'Implemented',
	'valuetype' => 'Boolean',
	'category' => 'Application',
	'values' => '0 | 1',
	'definition' => 'Show Documents list view as separate folders or as a normal listview. Default is 1 = Folder view.',
),

// TODO: fill in the ones below
'Application_Global_Search_SelectedModules' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Application_Storage_Directory' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Application_Storage_SaveStrategy' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Application_Global_Search_Binary' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Application_OpenRecordInNewXOnRelatedList' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Application_OpenRecordInNewXOnListView' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Application_MaxFailedLoginAttempts' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Application_ExpirePasswordAfterDays' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Application_ListView_MaxColumns' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Application_Action_Panel_Open' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Application_Search_Panel_Open' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Calendar_Modules_Panel_Visible' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Calendar_Default_Reminder_Minutes' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Calendar_Slot_Minutes' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Calendar_Show_Inactive_Users' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Calendar_Show_Group_Events' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'calendar_call_default_duration' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'calendar_other_default_duration' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'calendar_sort_users_by' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'CronTasks_cronWatcher_mailto' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'BusinessMapping_SalesOrder2Invoice' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'BusinessMapping_PotentialOnCampaignRelation' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Webservice_showUserAdvancedBlock' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Users_ReplyTo_SecondEmail' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Users_Default_Send_Email_Template' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Campaign_CreatePotentialOnAccountRelation' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Campaign_CreatePotentialOnContactRelation' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'GoogleCalendarSync_BaseUpdateMonths' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'GoogleCalendarSync_BaseCreateMonths' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Import_Full_CSV' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Lead_Convert_TransferToAccount' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Product_Copy_Bundle_OnDuplicate' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Product_Show_Subproducts_Popup' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Product_Permit_Relate_Bundle_Parent' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Product_Permit_Subproduct_Be_Parent' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Product_Maximum_Number_Images' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Workflow_Send_Email_ToCCBCC' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Workflow_GeoDistance_Country_Default' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Report_Send_Scheduled_ifEmpty' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Maximum_Scheduled_Workflows' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Billing_Address_Checked' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Shipping_Address_Checked' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Show_Copy_Adress_Header' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Tax_Type_Default' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'product_service_default' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Product_Default_Units' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Service_Default_Units' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'SalesOrderStatusOnInvoiceSave' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'QuoteStatusOnSalesOrderSave' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Report.Excel.Export.RowHeight' => array(
	'status' => 'Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'default_language' => array(
	'status' => 'Not Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'translation_string_prefix' => array(
	'status' => 'Not Implemented',
	'valuetype' => '',
	'category' => '',
	'values' => '',
	'definition' => '',
),
'Mobile_Module_by_default' => array(
	'status' => 'Implementado',
	'valuetype' => 'Cadena de texto',
	'category' => 'Funccionalidad module Mobile',
	'values' => 'Calenar | HelpDesk | Contacts ...',
	'definition' => 'Establecer el modulo por defecto a mostrar al entrar al modulo de Mobile.',
),
);