
<!DOCTYPE html>
<html lang="en" class="light">
    <!-- BEGIN: Head -->
    <head>
        <meta charset="utf-8">
        <link href="{{ asset('dist/images/logo.svg') }}" rel="shortcut icon">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
        <meta name="keywords" content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
        <meta name="author" content="LEFT4CODE">
        <title>Dashboard Fatir</title>
        <!-- BEGIN: CSS Assets-->
        <link rel="stylesheet" href="{{ asset('dist/css/app.css') }}" />
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- END: CSS Assets-->
    </head>
    <!-- END: Head -->
    <body class="main">
        <!-- BEGIN: Mobile Menu -->
        <div class="mobile-menu md:hidden">
            <div class="mobile-menu-bar">
                <a href="" class="flex mr-auto">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
                </a>
                <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="bar-chart-2" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
            </div>
            <div class="scrollable">
                <a href="javascript:;" class="mobile-menu-toggler"> <i data-lucide="x-circle" class="w-8 h-8 text-white transform -rotate-90"></i> </a>
                <ul class="scrollable__content py-2">
                    <li>
                        <a href="javascript:;.html" class="menu menu--active">
                            <div class="menu__icon"> <i data-lucide="home"></i> </div>
                            <div class="menu__title"> Dashboard <i data-lucide="chevron-down" class="menu__sub-icon transform rotate-180"></i> </div>
                        </a>
                        <ul class="menu__sub-open">
                            <li>
                                <a href="side-menu-light-dashboard-overview-1.html" class="menu menu--active">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="index.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dashboard-overview-3.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 3 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dashboard-overview-4.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 4 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="shopping-bag"></i> </div>
                            <div class="menu__title"> E-Commerce <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-categories.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Categories </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-add-product.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Add Product </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Products <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-product-list.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Product List</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-product-grid.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Product Grid</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Transactions <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-transaction-list.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Transaction List</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-transaction-detail.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Transaction Detail</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Sellers <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-seller-list.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Seller List</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-seller-detail.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Seller Detail</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="side-menu-light-reviews.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Reviews </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="side-menu-light-inbox.html" class="menu">
                            <div class="menu__icon"> <i data-lucide="inbox"></i> </div>
                            <div class="menu__title"> Inbox </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-file-manager.html" class="menu">
                            <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
                            <div class="menu__title"> File Manager </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-point-of-sale.html" class="menu">
                            <div class="menu__icon"> <i data-lucide="credit-card"></i> </div>
                            <div class="menu__title"> Point of Sale </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-chat.html" class="menu">
                            <div class="menu__icon"> <i data-lucide="message-square"></i> </div>
                            <div class="menu__title"> Chat </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-post.html" class="menu">
                            <div class="menu__icon"> <i data-lucide="file-text"></i> </div>
                            <div class="menu__title"> Post </div>
                        </a>
                    </li>
                    <li>
                        <a href="side-menu-light-calendar.html" class="menu">
                            <div class="menu__icon"> <i data-lucide="calendar"></i> </div>
                            <div class="menu__title"> Calendar </div>
                        </a>
                    </li>
                    <li class="menu__devider my-6"></li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="edit"></i> </div>
                            <div class="menu__title"> Crud <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-crud-data-list.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Data List </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-crud-form.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Form </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="users"></i> </div>
                            <div class="menu__title"> Users <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-users-layout-1.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Layout 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-users-layout-2.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Layout 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-users-layout-3.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Layout 3 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="trello"></i> </div>
                            <div class="menu__title"> Profile <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-profile-overview-1.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 1 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-profile-overview-2.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 2 </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-profile-overview-3.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overview 3 </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="layout"></i> </div>
                            <div class="menu__title"> Pages <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Wizards <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-wizard-layout-1.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wizard-layout-2.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wizard-layout-3.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Blog <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-blog-layout-1.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-blog-layout-2.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-blog-layout-3.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Pricing <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-pricing-layout-1.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-pricing-layout-2.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Invoice <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-invoice-layout-1.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-invoice-layout-2.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> FAQ <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-faq-layout-1.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 1</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-faq-layout-2.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 2</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-faq-layout-3.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Layout 3</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="login-light-login.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Login </div>
                                </a>
                            </li>
                            <li>
                                <a href="login-light-register.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Register </div>
                                </a>
                            </li>
                            <li>
                                <a href="main-light-error-page.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Error Page </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-update-profile.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Update profile </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-change-password.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Change Password </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="menu__devider my-6"></li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="inbox"></i> </div>
                            <div class="menu__title"> Components <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Table <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-regular-table.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Regular Table</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-tabulator.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Tabulator</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Overlay <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-modal.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Modal</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-slide-over.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Slide Over</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-notification.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Notification</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="side-menu-light-tab.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Tab </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-accordion.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Accordion </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-button.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Button </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-alert.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Alert </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-progress-bar.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Progress Bar </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-tooltip.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Tooltip </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-dropdown.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Dropdown </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-typography.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Typography </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-icon.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Icon </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-loading-icon.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Loading Icon </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="sidebar"></i> </div>
                            <div class="menu__title"> Forms <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-regular-form.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Regular Form </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-datepicker.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Datepicker </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-tom-select.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Tom Select </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-file-upload.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> File Upload </div>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:;" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Wysiwyg Editor <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                                </a>
                                <ul class="">
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-classic.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Classic</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-inline.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Inline</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-balloon.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Balloon</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-balloon-block.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Balloon Block</div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="side-menu-light-wysiwyg-editor-document.html" class="menu">
                                            <div class="menu__icon"> <i data-lucide="zap"></i> </div>
                                            <div class="menu__title">Document</div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="side-menu-light-validation.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Validation </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" class="menu">
                            <div class="menu__icon"> <i data-lucide="hard-drive"></i> </div>
                            <div class="menu__title"> Widgets <i data-lucide="chevron-down" class="menu__sub-icon "></i> </div>
                        </a>
                        <ul class="">
                            <li>
                                <a href="side-menu-light-chart.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Chart </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-slider.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Slider </div>
                                </a>
                            </li>
                            <li>
                                <a href="side-menu-light-image-zoom.html" class="menu">
                                    <div class="menu__icon"> <i data-lucide="activity"></i> </div>
                                    <div class="menu__title"> Image Zoom </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!-- END: Mobile Menu -->
        
        <!-- BEGIN: Top Bar -->
        <div class="top-bar-boxed h-[70px] z-[51] relative border-b border-white/[0.08] mt-12 md:-mt-5 -mx-3 sm:-mx-8 px-3 sm:px-8 md:pt-0 mb-12">
            
            @auth
            <div class="h-full flex items-center">
                <!-- BEGIN: Logo -->
                <a href="/" class="-intro-x hidden md:flex">
                    <img alt="Midone - HTML Admin Template" class="w-6" src="{{ asset('dist/images/logo.svg') }}">
                    <span class="text-white text-lg ml-3"> Fatir </span> 
                </a>
                <!-- END: Logo -->
                <!-- BEGIN: Breadcrumb -->
                <nav aria-label="breadcrumb" class="-intro-x h-full mr-auto">
                </nav>
                <!-- END: Breadcrumb -->
                <!-- BEGIN: Search -->
                <div class="intro-x relative mr-3 sm:mr-6">
                    <div class="search hidden sm:block">
                        <input type="text" class="search__input form-control border-transparent" placeholder="Search...">
                        <i data-lucide="search" class="search__icon dark:text-slate-500"></i> 
                    </div>
                    <a class="notification notification--light sm:hidden" href=""> <i data-lucide="search" class="notification__icon dark:text-slate-500"></i> </a>
                    <div class="search-result">
                        <div class="search-result__content">
                            <div class="search-result__content__title">Pages</div>
                            <div class="mb-5">
                                <a href="" class="flex items-center">
                                    <div class="w-8 h-8 bg-success/20 dark:bg-success/10 text-success flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="inbox"></i> </div>
                                    <div class="ml-3">Mail Settings</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 bg-pending/10 text-pending flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="users"></i> </div>
                                    <div class="ml-3">Users & Permissions</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 bg-primary/10 dark:bg-primary/20 text-primary/80 flex items-center justify-center rounded-full"> <i class="w-4 h-4" data-lucide="credit-card"></i> </div>
                                    <div class="ml-3">Transactions Report</div>
                                </a>
                            </div>
                            <div class="search-result__content__title">Users</div>
                            <div class="mb-5">
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{ asset('dist/images/profile-2.jpg') }}">
                                    </div>
                                    <div class="ml-3">Al Pacino</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">alpacino@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-6.jpg">
                                    </div>
                                    <div class="ml-3">Russell Crowe</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">russellcrowe@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-12.jpg">
                                    </div>
                                    <div class="ml-3">Brad Pitt</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">bradpitt@left4code.com</div>
                                </a>
                                <a href="" class="flex items-center mt-2">
                                    <div class="w-8 h-8 image-fit">
                                        <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/profile-3.jpg">
                                    </div>
                                    <div class="ml-3">Johnny Depp</div>
                                    <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">johnnydepp@left4code.com</div>
                                </a>
                            </div>
                            <div class="search-result__content__title">Products</div>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-12.jpg">
                                </div>
                                <div class="ml-3">Dell XPS 13</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">PC &amp; Laptop</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-11.jpg">
                                </div>
                                <div class="ml-3">Nikon Z6</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Photography</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-8.jpg">
                                </div>
                                <div class="ml-3">Oppo Find X2 Pro</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Smartphone &amp; Tablet</div>
                            </a>
                            <a href="" class="flex items-center mt-2">
                                <div class="w-8 h-8 image-fit">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="dist/images/preview-8.jpg">
                                </div>
                                <div class="ml-3">Nike Tanjun</div>
                                <div class="ml-auto w-48 truncate text-slate-500 text-xs text-right">Sport &amp; Outdoor</div>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END: Search -->
                <!-- BEGIN: Notifications -->
                <div class="intro-x dropdown mr-4 sm:mr-6">
                    <div class="dropdown-toggle notification notification--bullet cursor-pointer" role="button" aria-expanded="false" data-tw-toggle="dropdown"> <i data-lucide="bell" class="notification__icon dark:text-slate-500"></i> </div>
                    <div class="notification-content pt-2 dropdown-menu">
                        <div class="notification-content__box dropdown-content">
                            <div class="notification-content__title">Notifications</div>
                            <div class="cursor-pointer relative flex items-center ">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('dist/images/profile-2.jpg')}}">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Al Pacino</a> 
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">05:09 AM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('dist/images/profile-6.jpg')}}">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Russell Crowe</a> 
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('dist/images/profile-12.jpg')}}">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Brad Pitt</a> 
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">06:05 AM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#039;s standard dummy text ever since the 1500</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('dist/images/profile-3.jpg')}}">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Johnny Depp</a> 
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">03:20 PM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 20</div>
                                </div>
                            </div>
                            <div class="cursor-pointer relative flex items-center mt-5">
                                <div class="w-12 h-12 flex-none image-fit mr-1">
                                    <img alt="Midone - HTML Admin Template" class="rounded-full" src="{{asset('dist/images/profile-1.jpg')}}">
                                    <div class="w-3 h-3 bg-success absolute right-0 bottom-0 rounded-full border-2 border-white"></div>
                                </div>
                                <div class="ml-2 overflow-hidden">
                                    <div class="flex items-center">
                                        <a href="javascript:;" class="font-medium truncate mr-5">Nicolas Cage</a> 
                                        <div class="text-xs text-slate-400 ml-auto whitespace-nowrap">01:10 PM</div>
                                    </div>
                                    <div class="w-full truncate text-slate-500 mt-0.5">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomi</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Notifications -->
                <!-- BEGIN: Account Menu -->
                <div class="intro-x dropdown w-8 h-8">
                    <div class="dropdown-toggle w-8 h-8 rounded-full overflow-hidden shadow-lg image-fit zoom-in scale-110" role="button" aria-expanded="false" data-tw-toggle="dropdown">
                        <img alt="Midone - HTML Admin Template" src="{{ asset('dist/images/profile-9.jpg') }}">
                    </div>
                    <div class="dropdown-menu w-56">
                        <ul class="dropdown-content bg-primary/80 before:block before:absolute before:bg-black before:inset-0 before:rounded-md before:z-[-1] text-white">
                            <li class="p-2">
                                <div class="font-medium"> {{ Auth()->user()->name }} </div>
                                <div class="text-xs text-white/60 mt-0.5 dark:text-white-500">{{ ucwords(Auth()->user()->role) }}</div>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="user" class="w-4 h-4 mr-2"></i> Profile </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="edit" class="w-4 h-4 mr-2"></i> Add Account </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="lock" class="w-4 h-4 mr-2"></i> Reset Password </a>
                            </li>
                            <li>
                                <a href="" class="dropdown-item hover:bg-white/5"> <i data-lucide="help-circle" class="w-4 h-4 mr-2"></i> Help </a>
                            </li>
                            <li>
                                <hr class="dropdown-divider border-white/[0.08]">
                            </li>
                            <li>
                                <a href="{{ route('logout') }}" class="dropdown-item hover:bg-white/5"> <i data-lucide="toggle-right" class="w-4 h-4 mr-2"></i> Logout </a>
                            </li>
                        </ul>
                    
                    </div>
                </div>
                <!-- END: Account Menu -->
            </div>
            
            @endauth
        </div>
        <!-- END: Top Bar -->

       
            <div class="wrapper">
                <div class="wrapper-box">
                    <!-- BEGIN: Side Menu -->
                    @auth
                        <nav class="side-nav">
                            <ul>
                                <li>
                                    <a href="javascript:;.html" 
                                        class="side-menu {{ Request::is('/') ? 'side-menu--active' : '' }}"
                                    >
                                        <div class="side-menu__icon"> <i data-lucide="home"></i> </div>
                                        <div class="side-menu__title">
                                            Dashboard 
                                            <div class="side-menu__sub-icon transform rotate-180"> <i data-lucide="chevron-down"></i> </div>
                                        </div>
                                    </a>
                                    <ul class="side-menu__sub-open">
                                        <li>
                                            <a href="/" 
                                                class="side-menu {{ Request::is('/admin/index') ? 'side-menu--active' : '' }}"
                                            >
                                                <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                                <div class="side-menu__title"> Admin Page </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('costumer.index') }}" 
                                                class="side-menu {{ Request::is('/costumer/index') ? 'side-menu--active' : '' }}"
                                            >
                                                <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                                <div class="side-menu__title"> Costumer Page </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('driver.index') }}" 
                                                class="side-menu {{ Request::is('/driver/index') ? 'side-menu--active' : '' }}"
                                            >
                                                <div class="side-menu__icon"> <i data-lucide="activity"></i> </div>
                                                <div class="side-menu__title"> Driver Page </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="{{ route('vehicle.index') }}" 
                                    class="side-menu {{ Request::is('vehicle/index') ? 'side-menu--active' : '' }}"
                                    >
                                        <div class="side-menu__icon"> <i data-lucide="box"></i> </div>
                                        <div class="side-menu__title"> Vehicle Data </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('pesanan.index') }}" 
                                    class="side-menu {{ Request::is('pesanan/index') ? 'side-menu--active' : '' }}"
                                    >
                                        <div class="side-menu__icon"> <i data-lucide="message-circle"></i> </div>
                                        <div class="side-menu__title"> Pesanan Data </div>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    @endauth
                    <!-- END: Side Menu -->
                    
                    <!-- BEGIN: Content -->
                    <div class="content">
                        
                        {{ $slot }}

                    </div>
                    <!-- END: Content -->
                </div>

                
            </div>
        
        <!-- BEGIN: Dark Mode Switcher-->
        @if (Session()->has('success'))
        <div 
        class="shadow-md bg-blue-500 fixed bottom-0 right-0 box border rounded-full py-2 px-7 flex items-center justify-center z-50 mb-10 mr-10">
            <div class="mr-4 text-white text-sm">{{ Session()->get('success') }}</div>
        </div>
        @endif

        @if (Session()->has('error'))
        <div 
        class="shadow-md bg-red-500 fixed bottom-0 right-0 box border rounded-full py-2 px-7 flex items-center justify-center z-50 mb-10 mr-10">
            <div class="mr-4 text-white text-sm">{{ Session()->get('error') }}</div>
        </div>
        @endif
        

        <!-- END: Dark Mode Switcher-->
        
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src=" {{ asset('dist/js/app.js') }}"></script>
        <!-- END: JS Assets-->
    </body>
</html>