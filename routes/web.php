<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/advanced-animation.php', function () {
    return view('advanced-animation');
});
Route::get('/advanced-clipboard.php', function () {
    return view('advanced-clipboard');
});
Route::get('/advanced-dragula.php', function () {
    return view('advanced-dragula');
});
Route::get('/advanced-files.php', function () {
    return view('advanced-files');
});
Route::get('/advanced-highlight.php', function () {
    return view('advanced-highlight');
});
Route::get('/advanced-rangeslider.php', function () {
    return view('advanced-rangeslider');
});
Route::get('/advanced-ratings.php', function () {
    return view('advanced-ratings');
});
Route::get('/advanced-ribbons.php', function () {
    return view('advanced-ribbons');
});
Route::get('/advanced-sweetalerts.php', function () {
    return view('advanced-sweetalerts');
});
Route::get('/advanced-toasts.php', function () {
    return view('advanced-toasts');
});
Route::get('/analytics-customers.php', function () {
    return view('analytics-customers');
});
Route::get('/analytics-reports.php', function () {
    return view('analytics-reports');
});
Route::get('/apps-calendar.php', function () {
    return view('apps-calendar');
});
Route::get('/apps-chat.php', function () {
    return view('apps-chat');
});
Route::get('/apps-contact-list.php', function () {
    return view('apps-contact-list');
});
Route::get('/apps-invoice.php', function () {
    return view('apps-invoice');
});
Route::get('/auth-404.php', function () {
    return view('auth-404');
});
Route::get('/auth-500.php', function () {
    return view('auth-500');
});
Route::get('/auth-lock-screen.php', function () {
    return view('auth-lock-screen');
});
Route::get('/auth-login.php', function () {
    return view('auth-login');
});
Route::get('/auth-maintenance.php', function () {
    return view('auth-maintenance');
});
Route::get('/auth-recover-pw.php', function () {
    return view('auth-recover-pw');
});
Route::get('/auth-register.php', function () {
    return view('auth-register');
});
Route::get('/charts-apex.php', function () {
    return view('charts-apex');
});
Route::get('/charts-chartjs.php', function () {
    return view('charts-chartjs');
});
Route::get('/charts-justgage.php', function () {
    return view('charts-justgage');
});
Route::get('/charts-toast-ui.php', function () {
    return view('charts-toast-ui');
});
Route::get('/cropped.php', function () {
    return view('cropped');
});
Route::get('/ecommerce-customer-details.php', function () {
    return view('ecommerce-customer-details');
});
Route::get('/ecommerce-customers.php', function () {
    return view('ecommerce-customers');
});
Route::get('/ecommerce-index.php', function () {
    return view('ecommerce-index');
});
Route::get('/ecommerce-order-details.php', function () {
    return view('ecommerce-order-details');
});
Route::get('/ecommerce-orders.php', function () {
    return view('ecommerce-orders');
});
Route::get('/ecommerce-products.php', function () {
    return view('ecommerce-products');
});
Route::get('/ecommerce-refunds.php', function () {
    return view('ecommerce-refunds');
});
Route::get('/email-templates-alert.php', function () {
    return view('email-templates-alert');
});
Route::get('/email-templates-basic.php', function () {
    return view('email-templates-basic');
});
Route::get('/email-templates-billing.php', function () {
    return view('email-templates-billing');
});
Route::get('/forms-advanced.php', function () {
    return view('forms-advanced');
});
Route::get('/forms-editors.php', function () {
    return view('forms-editors');
});
Route::get('/forms-elements.php', function () {
    return view('forms-elements');
});
Route::get('/forms-img-crop.php', function () {
    return view('forms-img-crop');
});
Route::get('/forms-uploads.php', function () {
    return view('forms-uploads');
});
Route::get('/forms-validation.php', function () {
    return view('forms-validation');
});
Route::get('/forms-wizard.php', function () {
    return view('forms-wizard');
});
Route::get('/icons-fontawesome.php', function () {
    return view('icons-fontawesome');
});
Route::get('/icons-icofont.php', function () {
    return view('icons-icofont');
});
Route::get('/icons-iconoir.php', function () {
    return view('icons-iconoir');
});
Route::get('/icons-lineawesome.php', function () {
    return view('icons-lineawesome');
});
Route::get('/index.php', function () {
    return view('index');
});
Route::get('/maps-google.php', function () {
    return view('maps-google');
});
Route::get('/maps-leaflet.php', function () {
    return view('maps-leaflet');
});
Route::get('/maps-vector.php', function () {
    return view('maps-vector');
});
Route::get('/pages-blogs.php', function () {
    return view('pages-blogs');
});
Route::get('/pages-faq.php', function () {
    return view('pages-faq');
});
Route::get('/pages-gallery.php', function () {
    return view('pages-gallery');
});
Route::get('/pages-notifications.php', function () {
    return view('pages-notifications');
});
Route::get('/pages-pricing.php', function () {
    return view('pages-pricing');
});
Route::get('/pages-profile.php', function () {
    return view('pages-profile');
});
Route::get('/pages-starter.php', function () {
    return view('pages-starter');
});
Route::get('/pages-timeline.php', function () {
    return view('pages-timeline');
});
Route::get('/pages-treeview.php', function () {
    return view('pages-treeview');
});
Route::get('/projects-chat.php', function () {
    return view('projects-chat');
});
Route::get('/projects-clients.php', function () {
    return view('projects-clients');
});
Route::get('/projects-create.php', function () {
    return view('projects-create');
});
Route::get('/projects-kanban-board.php', function () {
    return view('projects-kanban-board');
});
Route::get('/projects-project.php', function () {
    return view('projects-project');
});
Route::get('/projects-task.php', function () {
    return view('projects-task');
});
Route::get('/projects-team.php', function () {
    return view('projects-team');
});
Route::get('/projects-users.php', function () {
    return view('projects-users');
});
Route::get('/tables-basic.php', function () {
    return view('tables-basic');
});
Route::get('/tables-datatable.php', function () {
    return view('tables-datatable');
});
Route::get('/tables-editable.php', function () {
    return view('tables-editable');
});
Route::get('/ui-alerts.php', function () {
    return view('ui-alerts');
});
Route::get('/ui-avatar.php', function () {
    return view('ui-avatar');
});
Route::get('/ui-badges.php', function () {
    return view('ui-badges');
});
Route::get('/ui-buttons.php', function () {
    return view('ui-buttons');
});
Route::get('/ui-cards.php', function () {
    return view('ui-cards');
});
Route::get('/ui-carousels.php', function () {
    return view('ui-carousels');
});
Route::get('/ui-dropdowns.php', function () {
    return view('ui-dropdowns');
});
Route::get('/ui-grids.php', function () {
    return view('ui-grids');
});
Route::get('/ui-images.php', function () {
    return view('ui-images');
});
Route::get('/ui-list.php', function () {
    return view('ui-list');
});
Route::get('/ui-modals.php', function () {
    return view('ui-modals');
});
Route::get('/ui-navbar.php', function () {
    return view('ui-navbar');
});
Route::get('/ui-navs.php', function () {
    return view('ui-navs');
});
Route::get('/ui-paginations.php', function () {
    return view('ui-paginations');
});
Route::get('/ui-popover-tooltips.php', function () {
    return view('ui-popover-tooltips');
});
Route::get('/ui-progress.php', function () {
    return view('ui-progress');
});
Route::get('/ui-spinners.php', function () {
    return view('ui-spinners');
});
Route::get('/ui-tabs-accordions.php', function () {
    return view('ui-tabs-accordions');
});
Route::get('/ui-typography.php', function () {
    return view('ui-typography');
});
Route::get('/ui-videos.php', function () {
    return view('ui-videos');
});

