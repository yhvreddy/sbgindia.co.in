<?php

defined('BASEPATH') OR exit('No direct script access allowed');



/*

| -------------------------------------------------------------------------

| URI ROUTING

| -------------------------------------------------------------------------

| This file lets you re-map URI requests to specific controller functions.

|

| Typically there is a one-to-one relationship between a URL string

| and its corresponding controller class/method. The segments in a

| URL normally follow this pattern:

|

|	example.com/class/method/id/

|

| In some instances, however, you may want to remap this relationship

| so that a different class/function is called than the one

| corresponding to the URL.

|

| Please see the user guide for complete details:

|

|	https://codeigniter.com/user_guide/general/routing.html

|

| -------------------------------------------------------------------------

| RESERVED ROUTES

| -------------------------------------------------------------------------

|

| There are three reserved routes:

|

|	$route['default_controller'] = 'welcome';

|

| This route indicates which controller class should be loaded if the

| URI contains no data. In the above example, the "welcome" class

| would be loaded.

|

|	$route['404_override'] = 'errors/page_missing';

|

| This route will tell the Router which controller/method to use if those

| provided in the URL cannot be matched to a valid route.

|

|	$route['translate_uri_dashes'] = FALSE;

|

| This is not exactly a route, but allows you to automatically route

| controller and method names that contain dashes. '-' isn't a valid

| class or method name character, so it requires translation.

| When you set this option to TRUE, it will replace ALL dashes in the

| controller and method URI segments.

|

| Examples:	my-controller/index	-> my_controller/index

| my-controller/my-method	-> my_controller/my_method

*/

$route['default_controller'] = 'SiteController';

$route['404_override'] = '';

$route['translate_uri_dashes'] = FALSE;





//site
$route['index']										=	'SiteController';
$route['aboutus']									=	'SiteController/aboutus';
$route['contactus']									=	'SiteController/contactus';
$route['projects']									=	'SiteController/projects';
$route['projects/:num/:any']						=	'SiteController/projects';
$route['sitecontroller/layoutflatenqdetails']		=	'SiteController/layoutflatenqdetails';
$route['savefeedbackrcontact']						=	'SiteController/savefeedbackrcontact';
$route['agents/loginaccount']                       =   'SiteController/AgentLogin';
$route['agents/loginAccess']                        =   'SiteController/loginAccess';
$route['agents/details']                            =   'SiteController/AgentDetails';
$route['agents/logoutaccount']                      =   'SiteController/logoutAccount';
$route['agents/profiledetails']                     =   'SiteController/profileDetails';
$route['agent/saveeditdetails']                     =   'SiteController/saveeditdetails';
$route['agent/savepasswordDetails']                 =   'SiteController/savepasswordDetails';
$route['downloads']                                 =   'SiteController/downloadProjects';
$route['gallery']                                   =   'SiteController/galleryList';


//apis
$route['api/form/genders']                          =   'apis/Api_Formdata/gendersList';
$route['api/form/cardtypes']                        =   'apis/Api_Formdata/cardsList';
$route['api/form/positions']                        =   'apis/Api_Formdata/positionsList';

$route['api/userlogin']                             =   'apis/Api_Users/userlogin';

$route['api/agent/savedata']                        =   'apis/Api_Users/agentRegestration';
$route['api/agent/listdata']                        =   'apis/Api_Users/agentList';
$route['api/agent/details']                         =   'apis/Api_Users/agentDetails';
$route['api/agent/saveditdata']                     =   'apis/Api_Users/agentsaveEditdata';
$route['api/agent/deletedata']                      =   'apis/Api_Users/agentDeleteData';

$route['api/layout/addzone']                        =   'apis/Api_Layouts/zoneAddNew';
$route['api/layout/zonelist']                       =   'apis/Api_Layouts/zonesList';


//admin dashboard

$route['admin']										=	'welcome';
$route['admin/dashboard']							=	'welcome/accessDashboard';

//agents
$route['admin/dashboard/agent/add']					=	'admin/Agent/addNewAgent';
$route['admin/dashboard/agent/save']				=	'admin/Agent/saveNewAgent';
$route['admin/dashboard/agent/list']				=	'admin/Agent/AgentsList';
$route['admin/dashboard/agent/:num/delete']			=	'admin/Agent/deleteAgent';
$route['admin/dashboard/agent/:num/editdetails']	=	'admin/Agent/editAgentDetails';
$route['admin/dashboard/agent/saveeditdetails']		=	'admin/Agent/saveeditdetails';

//Categories
$route['admin/dashboard/categories']				=	'admin/Categories';
$route['admin/dashboard/categories/save']			=	'admin/Categories/CategoriesSave';
$route['admin/dashboard/categories/:num/edit']		=	'admin/Categories/editCategories';
$route['admin/dashboard/categories/saveEditdetails']=	'admin/Categories/saveEditdetails';
$route['admin/dashboard/categories/:num/delete']	=	'admin/Categories/deleteCategories';



//zones and subzones
$route['admin/dashboard/zones']						=	'admin/zones/index';
$route['admin/dashboard/savezones']					=	'admin/zones/zoneSave';
$route['admin/dashboard/zones/:num/edit']			=	'admin/zones/editZones';
$route['admin/dashboard/zones/saveeditzone']		=	'admin/zones/saveEditZones';
$route['admin/dashboard/zones/:num/delete']			=	'admin/zones/deleteZones';
$route['admin/dashboard/subzones']					=	'admin/zones/subZones';
$route['admin/dashboard/subzonesList']              =	'admin/zones/subzonesList';
$route['admin/dashboard/savesubzone']				=	'admin/zones/subzoneSave';
$route['admin/dashboard/subzone/:num/edit']			=	'admin/zones/editSubzone';
$route['admin/dashboard/saveeditsubzone']			=	'admin/zones/saveEditSubzone';
$route['admin/dashboard/subzone/:num/detete']		=	'admin/zones/deleteSubzone';

$route['admin/dashboard/discounts']					=	'admin/Layouts/discounts';
$route['admin/dashboard/taxs']						=	'admin/Layouts/Taxs';

$route['admin/dashboard/agentdata']					=	'admin/Layouts/agentData';
$route['admin/dashboard/agentdatalist']				=	'admin/Layouts/agentDataList';
$route['admin/dashboard/agentdatalist/:num/:any']	=	'admin/Layouts/agentDataEdit';

$route['agent/dashboard']							=	'admin/Agentdetails';
$route['admin/dashboard/enquirylist']				=	'admin/Agentdetails/enquirylist';
/* ----------------------------------------------------------------------------------- */
$route['admin/banners']                             =   'admin/Banners';
$route['admin/banners/:num/edit']                   =   'admin/Banners/editBanners';
$route['admin/dashboard/banners/saveEditdetails']   =   'admin/Banners/saveEditdetails';
$route['admin/dashboard/banners/uplaod']            =   'admin/Banners/uplaodBanners';
$route['admin/banners/:num/delete']                 =   'admin/Banners/deleteBanners';

//admin/brochures
$route['admin/brochures']                             =   'admin/Brochures';
$route['admin/brochures/:num/edit']                   =   'admin/Brochures/editBanners';
$route['admin/dashboard/brochures/saveEditdetails']   =   'admin/Brochures/saveEditdetails';
$route['admin/dashboard/brochures/uplaod']            =   'admin/Brochures/uplaodBanners';
$route['admin/brochures/:num/delete']                 =   'admin/Brochures/deleteBanners';


$route['admin/aboutus']                             =   'admin/Sitedetails/aboutus';
$route['admin/uploadaboutus']						=	'admin/Sitedetails/uploadAboutusDetails';
$route['admin/uploadeditaboutdetails']				=	'admin/Sitedetails/uploadEditsAboutusDetails';

$route['admin/sitedetails']                         =   'admin/Sitedetails/sitedetails';
$route['admin/savesitedetails']						=	'admin/Sitedetails/saveSiteDetails';
$route['admin/saveeditsitedetails']					=	'admin/Sitedetails/saveEditSiteDetails';

$route['admin/dashboard/partners']                  =   'admin/Sitedetails/partners';
$route['admin/savepartnersdetails']					=	'admin/Sitedetails/SavepartnersDetails';
$route['admin/dashboard/partners/:num/edit']        =   'admin/Sitedetails/editSitedetails';
$route['admin/dashboard/partners/saveEditdetails']  =   'admin/Sitedetails/saveEditpartnersdetails';
$route['admin/dashboard/partners/:num/delete']      =   'admin/Sitedetails/deleteSitepartnerdetails';

$route['admin/howeare']								=	'admin/Banners/howeAre';
$route['admin/howeare/howeAreSavedata']				=	'admin/Banners/howeAreSavedata';
$route['admin/howeare/:num/deletedata']				=	'admin/Banners/howeAreDeletedata';
$route['admin/howeare/interSavedata']				=	'admin/Banners/interSavedata';
$route['admin/howeare/:num/interdeletedata']		=	'admin/Banners/howeAreInterDeletedata';
$route['admin/gallery']                             =   'admin/Banners/gallerypart';
$route['admin/gallery/savedata']                    =   'admin/Banners/gallerySavedata';
$route['admin/gallery/:num/delete']                 =   'admin/Banners/deleteGalleryitem';
$route['admin/layout/gallery']                      =   'admin/Banners/layoutGallerypart';
$route['admin/gallery/layoutsavedata']              =   'admin/Banners/layoutgallerySavedata';
$route['admin/gallery/:num/layoutdelete']           =   'admin/Banners/deletelayoutGalleryitem';