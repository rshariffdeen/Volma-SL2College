<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),),
        '_profiler_import' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:importAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/import',    ),  ),  4 =>   array (  ),),
        '_profiler_export' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:exportAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '.txt',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler/export',    ),  ),  4 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),),
        '_configurator_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/',    ),  ),  4 =>   array (  ),),
        '_configurator_step' => array (  0 =>   array (    0 => 'index',  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'index',    ),    1 =>     array (      0 => 'text',      1 => '/_configurator/step',    ),  ),  4 =>   array (  ),),
        '_configurator_final' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_configurator/final',    ),  ),  4 =>   array (  ),),
        'volunteer_management_system_notification_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\NotificationBundle\\Controller\\EmailController::sendAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/email',    ),  ),  4 =>   array (  ),),
        'volunteer_management_system_report_generation_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\ReportGenerationBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        '_track_record' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\ReportGenerationBundle\\Controller\\TrackRecordController::TrackRecordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/TrackRecord',    ),  ),  4 =>   array (  ),),
        '_track_record_initialize' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\ReportGenerationBundle\\Controller\\TrackRecordController::InitializeTrackRecordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/TrackRecordInitialize',    ),  ),  4 =>   array (  ),),
        'news' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\NewspageController::newsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/news',    ),  ),  4 =>   array (  ),),
        'projects' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\ProjectspageController::projectsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/projects',    ),  ),  4 =>   array (  ),),
        'contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\ContactpageController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contact',    ),  ),  4 =>   array (  ),),
        'edit_UserName' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\EditProfileController::editUserNameAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit_UserName',    ),  ),  4 =>   array (  ),),
        'save_UserName' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\SaveUserController::saveUserNameAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/save_UserName',    ),  ),  4 =>   array (  ),),
        'edit_Name' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\EditProfileController::editNameAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit_Name',    ),  ),  4 =>   array (  ),),
        'save_Name' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\SaveUserController::saveNameAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/save_Name',    ),  ),  4 =>   array (  ),),
        'edit_Password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\EditProfileController::editPasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit_Password',    ),  ),  4 =>   array (  ),),
        'save_Password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\SaveUserController::savePasswordAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/save_Password',    ),  ),  4 =>   array (  ),),
        'edit_NIC' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\EditProfileController::editNICAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit_NIC',    ),  ),  4 =>   array (  ),),
        'save_NIC' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\SaveUserController::saveNICAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/save_NIC',    ),  ),  4 =>   array (  ),),
        'edit_DOB' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\EditProfileController::editDOBAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit_DOB',    ),  ),  4 =>   array (  ),),
        'save_DOB' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\SaveUserController::saveDOBAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/save_DOB',    ),  ),  4 =>   array (  ),),
        'edit_Gender' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\EditProfileController::editGenderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit_Gender',    ),  ),  4 =>   array (  ),),
        'save_Gender' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\SaveUserController::saveGenderAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/save_Gender',    ),  ),  4 =>   array (  ),),
        'edit_Email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\EditProfileController::editEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit_Email',    ),  ),  4 =>   array (  ),),
        'save_Email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\SaveUserController::saveEmailAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/save_Email',    ),  ),  4 =>   array (  ),),
        'edit_MobileNumb' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\EditProfileController::editMobileNumbAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit_MobileNumb',    ),  ),  4 =>   array (  ),),
        'save_MobileNumb' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\SaveUserController::saveMobileNumbAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/save_MobileNumb',    ),  ),  4 =>   array (  ),),
        'edit_ContactNumb' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\EditProfileController::editContactNumbAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit_ContactNumb',    ),  ),  4 =>   array (  ),),
        'save_ContactNumb' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\SaveUserController::saveContactNumbAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/save_contactNumb',    ),  ),  4 =>   array (  ),),
        'edit_Address' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\EditProfileController::editAddressAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit_Address',    ),  ),  4 =>   array (  ),),
        'save_Address' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\SaveUserController::saveAddressAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/save_Address',    ),  ),  4 =>   array (  ),),
        'login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\RegistrationBundle\\Controller\\LoginController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\RegistrationBundle\\Controller\\LoginController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/loginout',    ),  ),  4 =>   array (  ),),
        'search_result' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\SearchController::searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/result',    ),  ),  4 =>   array (  ),),
        'volunteer_management_system_styles_homepage' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\StylesBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/hello',    ),  ),  4 =>   array (  ),),
        'account_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\RegistrationBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register',    ),  ),  4 =>   array (  ),),
        'account_create' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\RegistrationBundle\\Controller\\SubmissionController::submissionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/create',    ),  ),  4 =>   array (  ),),
        'confirm' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\RegistrationBundle\\Controller\\ConfirmController::confirmAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/confirm',    ),  ),  4 =>   array (  ),),
        'profile' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\ProfilepageController::profileAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile',    ),  ),  4 =>   array (  ),),
        'welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\PagesBundle\\Controller\\HomepageController::welcomeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/home',    ),  ),  4 =>   array (  ),),
        'account_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\RegistrationBundle\\Controller\\LoginController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),),
        'account_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VolunteerManagementSystem\\RegistrationBundle\\Controller\\LoginController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/loginout',    ),  ),  4 =>   array (  ),),
        '_welcome' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        '_demo_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login',    ),  ),  4 =>   array (  ),),
        '_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/login_check',    ),  ),  4 =>   array (  ),),
        '_demo_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/logout',    ),  ),  4 =>   array (  ),),
        'acme_demo_secured_hello' => array (  0 =>   array (  ),  1 =>   array (    'name' => 'World',    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),  4 =>   array (  ),),
        '_demo_secured_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello',    ),  ),  4 =>   array (  ),),
        '_demo_secured_hello_admin' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/secured/hello/admin',    ),  ),  4 =>   array (  ),),
        '_demo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/',    ),  ),  4 =>   array (  ),),
        '_demo_hello' => array (  0 =>   array (    0 => 'name',  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'name',    ),    1 =>     array (      0 => 'text',      1 => '/demo/hello',    ),  ),  4 =>   array (  ),),
        '_demo_contact' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/demo/contact',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
