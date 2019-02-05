<?php

namespace App\Library\Admin;

use Auth;
use Nav;

/**
 * This class for generate the admin panel left menu,
 * want to add new menu, please add here
 * @author Tommy
 */
class LeftMenu {

    protected $leftMenuList = "";
    protected $group = "/";
    protected $uri = "";
    protected $childIcon = "far fa-circle";

    public function __construct() {

        $adminPanel = "/";

        $this->leftMenuList = [
            /**
             * Dashboard
             */
            [
                "title" => "Home",
                "uri" => route("home"),
                "icon" => "fa fa-lg fa-fw fa-home"
               
            ],
            /**
             * Main Category
             */
//        [
//        "title" => "School Year Categories",
//        "icon" => "fa fa-lg fa-fw fa-book",
//        "uri" => route($this->group . 'view.category'),
//        "active" => Nav::isRoute($this->group . 'view.category'),
//        "show" => $this->can("view_category")
//        ],
            // [   
            //     "title" => "Calendar",
            //     "uri" => route($this->group . 'admin.holiday'),
            //     "icon" => "fa fa-lg fa-fw far fa-calendar-plus",
            //     "active" => Nav::isRoute($this->group . 'admin.holiday'),
            //     "show" => $this->can("view_public_holiday")
            // ],
            // [
            //     "title" => "Timetable",
            //     "uri" => route($this->group . 'wishlist.view'),
            //     "icon" => "fa fa-lg fa-fw far fa-calendar-alt",
            //     "active" => Nav::isRoute($this->group . 'wishlist.view'),
            //     "show" => $this->can("view_wishlist")
            // ],
            /**
             * Credit package
             */
            // [
            //     "title" => "Fees Structure",
            //     "uri" => route($this->group . "package.index"),
            //     "icon" => "fa fa-lg fa-fw fa-dollar-sign",
            //     "active" => Nav::isResource('package'),
            //     "show" => $this->can("view_package")
            // ],
            /**
             * Purchase Transactions
             */
            // [
            //     "title" => "Transaction History",
            //     "uri" => route($this->group . 'transaction.index'),
            //     "icon" => "fa fa-lg fa-fw fa-exchange-alt",
            //     "active" => Nav::isRoute($this->group . 'transaction.index'),
            //     "show" => $this->can("view_transaction")
            // ],
            /**
             * Class Sessions
             */
            // [
            //     "title" => "Classes Management",
            //     "uri" => "#",
            //     "icon" => "fa fa-lg fa-fw fa-graduation-cap",
            //     "active" => '',
            //     "show" => ($this->can("view_class") || $this->can("view_classroom") || $this->can("view_lecturer") || $this->can("view_subject") ),
            //     "child" => [
            //         ["title" => "Classes",
            //             "uri" => route($this->group . 'admin.class.view'),
            //             "active" => Nav::isRoute($this->group . 'admin.class.view')
            //             or Nav::isRoute($this->group . 'admin.class.edit')
            //             or Nav::isRoute($this->group . 'admin.class.add')
            //             or Nav::isRoute($this->group . 'admin.class.detail'),
            //             "show" => $this->can("view_class")
            //         ]
            //         ,
            //         [
            //             "title" => "Subjects",
            //             "uri" => route($this->group . 'subject.index'),
            //             "active" => Nav::isResource('subject'),
            //             "show" => $this->can("view_subject")
            //         ],
            //         [
            //             "title" => "Classrooms",
            //             "uri" => route($this->group . "admin.classroom.view"),
            //             "active" => Nav::isRoute($this->group . 'admin.classroom.view')
            //             or Nav::isRoute($this->group . 'admin.classroom.add')
            //             or Nav::isRoute($this->group . 'admin.classroom.edit'),
            //             "show" => $this->can("view_classroom")
            //         ],
            //         [
            //             "title" => "Tutors",
            //             "uri" => route($this->group . 'lecturer.index'),
            //             "active" => Nav::isResource('lecturer'),
            //             "show" => $this->can("view_lecturer")
            //         ]
            //     ]
            // ],
            // [
            //     "title" => "Repository",
            //     "uri" => "#",
            //     "icon" => "fa fa-lg fa-fw fa-chart-bar",
            //     "active" => '',
            //     "show" => ($this->can("view_careers") || $this->can("view_contact") ||$this->can("view_mailing-list")),
            //     "child" => [
            //         [
            //             "title" => "Career",
            //             "uri" => route($this->group . 'career.view'),
            //             "active" => Nav::isRoute($this->group . 'career.view'),
            //             "show" => $this->can("view_careers")
            //         ],
            //         [
            //             "title" => "Contact",
            //             "uri" => route($this->group . 'contact.view'),
            //             "active" => Nav::isRoute($this->group . 'contact.view'),
            //             "show" => $this->can("view_contact")
            //         ],
            //         [
            //             "title" => "Mailing List",
            //             "uri" => route($this->group . 'maillist.view'),
            //             "active" => Nav::isRoute($this->group . 'maillist.view'),
            //                 "show" => $this->can("view_mailing-list")
            //         ]

//        ,
//        [
//        "title" => "Student Sign Ups",
//        "uri" => route($this->group . "view-student-form"),
//        "active" => Nav::isRoute($this->group . 'view-student-form'),
//        "show" => $this->can("view_sign_up")
//        ],
//        [
//        "title" => "Teacher Sign Ups",
//        "uri" => route($this->group . "view-teacher-form"),
//        "active" => Nav::isRoute($this->group . 'view-teacher-form'),
//        "show" => $this->can("view_sign_up")
//        ],
            //     ],
            // ],
//            /**
//             * Content Management
//             */
//            [
//                "title" => "Content Management",
//                "uri" => route($this->group . 'showAllContent'),
//                "icon" => "fa fa-lg fa-fw fa-file-text-o",
//                "active" => Nav::urlDoesContain('content/')
//            ],
//            /**
//             * Slider Management
//             */
//            [
//                "title" => "Slider Management",
//                "uri" => route($this->group . 'showSlider'),
//                "icon" => "fa fa-lg fa-fw ion-easel",
//                "active" => Nav::urlDoesContain('slider/')
//            ],
//            /**
//             * File Manager
//             */
//            [
//                "title" => "Media",
//                "uri" => route($this->group . 'media'),
//                "icon" => "fa fa-lg fa-fw fa-file-image-o",
//                "active" => Nav::urlDoesContain('filemanager/')
//            ],

            /**
             * Student management
             */
            // [
            //     "title" => "Student Management",
            //     "uri" => "#",
            //     "icon" => "fa fa-lg fa-fw fa-users",
            //     "active" => '',
            //     "show" => ($this->can("view_student") || $this->can("view_useraudit")),
            //     "child" => [
            //         [
            //             "title" => "Student List",
            //             "uri" => route($this->group . "admin.student"),
            //             "icon" => "",
            //             "active" => Nav::isRoute($this->group . 'admin.student') or Nav::isRoute($this->group . 'admin.student.detail') or Nav::isRoute($this->group . 'admin.student.add_new_student') or Nav::isRoute($this->group . 'admin.student.edit_student'),
            //             "show" => $this->can("view_student")
            //         ],
            //         [
            //             "title" => "Student Audit Trail",
            //             "uri" => route($this->group . 'useraudittrails.index'),
            //             "icon" => "",
            //             "active" => Nav::isRoute($this->group . 'useraudittrails.index'),
            //             "show" => $this->can("view_useraudit")
            //         ]
            //     ],
            // ],
            /**
             * Users & Roles Module (Admin)
             */
//             [
//                 "title" => "Admin Management",
//                 "uri" => "#",
//                 "icon" => "fa fa-lg fa-fw fa-cog",
//                 "active" => Nav::isRoute($this->group . 'admin.module.create'),
// //                "active" => (Nav::urlDoesContain($adminPanel . '/admin/') || Nav::urlDoesContain($adminPanel . '/roles/')),
//                 "show" => ($this->can("*_user") || $this->can("*_role") || $this->can("*_adminaudit")),
//                 "child" => [
//                     /**
//                      * Users Module
//                      */
//                     [
//                         "title" => "Admin List",
//                         "uri" => route($this->group . "admin.module.view", ["list" => "all"]),
//                         "icon" => "",
//                         "active" => Nav::isRoute($this->group . 'admin.module.view')
//                         or Nav::isRoute($this->group . 'admin.module.create')
//                         or Nav::isRoute($this->group . 'admin.module.edit')
//                         or Nav::isRoute($this->group . 'admin.module.show')
//                         or Nav::isRoute($this->group . 'profile')
//                         or Nav::isRoute($this->group . 'admin.module.viewpassword'),
//                         "show" => $this->can("view_user")
// //                        "child" => [
// //                            [
// //                                "title" => "User List",
// //                                "uri" => route($this->group . "admin.module.view", ["list" => "all"]),
// //                                "icon" => $this->childIcon,
// //                                "active" => Nav::isRoute($this->group . 'admin.module.view')
// //                                or Nav::isRoute($this->group . 'admin.module.edit')
// //                                or Nav::isRoute($this->group . 'admin.module.show'),
// //                                "show" => $this->can("view_user"),
// //                            ]
// //                            ,
// //                            [
// //                                "title" => "Add User",
// //                                "uri" => route($this->group . "admin.module.create"),
// //                                "icon" => $this->childIcon,
// //                                "active" => Nav::isRoute($this->group . 'admin.module.create'),
// //                                "show" => $this->can("add_user"),
// //                            ],
//                     ],
                    /**
                     * Roles Module
                     */
//                     [
//                         "title" => "Admin Role",
//                         "uri" => route($this->group . "roles.module.index"),
//                         "icon" => "",
//                         "active" => Nav::isRoute($this->group . 'roles.module.index')
//                         or Nav::isRoute($this->group . 'roles.module.edit')
//                         or Nav::isRoute($this->group . 'roles.module.create'),
//                         "show" => $this->can("view_role"),
// //                        "child" => [
// //                            [
// //                                "title" => "Roles List",
// //                                "uri" => route($this->group . "roles.module.index"),
// //                                "icon" => $this->childIcon,
// //                                "active" => Nav::isRoute($this->group . 'roles.module.index'),
// //                                "show" => $this->can("view_role"),
// //                            ],
// //                            [
// //                                "title" => "Add Roles",
// //                                "uri" => route($this->group . "roles.module.create"),
// //                                "icon" => $this->childIcon,
// //                                "active" => Nav::isRoute($this->group . 'roles.module.create'),
// //                                "show" => $this->can("add_role"),
// //                            ],
// //                        ]
//                     ],
//                     [
//                         "title" => "Admin Audit Trail",
//                         "uri" => route($this->group . 'audittrails.index'),
//                         "icon" => "",
//                         "active" => Nav::isRoute($this->group . 'audittrails.index'),
//                         "show" => $this->can("view_adminaudit")
//                     ]
//                 ]
//             ],
                /**
                 * Audit trails
                 */
//            [
//                "title" => "Audit Trails",
//                "uri" => route($this->group . 'audittrails.index'),
//                "icon" => "fa fa-lg fa-fw fa-list-alt",
//                "active" => Nav::isRoute($this->group . 'audittrails.index'),
//                "show" => $this->can("view_audit")
//            ]
//            /**
//             * Settings Module
//             */
//            [
//                "title" => "Settings",
//                "uri" => route($this->group . "settings.module.edit"),
//                "icon" => "fa fa-lg fa-fw fa-gear",
//                "active" => Nav::isRoute($this->group . 'settings.module.edit'),
//                "show" => $this->can(["view_settings", "edit_settings"]),
//            ]
        ];
    }

    private function can($permission) {
        return (Auth::check()) ? Auth::user()->can($permission) : false;
    }

    private function generateMenu($menu = [], $menuHTML = "") {
        $show = (isset($menu["show"])) ? $menu["show"] : true;

        if ($show) {
            $child = (empty($menu["child"]));
            $uri = !empty($menu['uri']) ? $menu['uri'] : "";
            $title = !empty($menu['title']) ? $menu['title'] : "";
            $icon = !empty($menu['icon']) ? $menu['icon'] : "";
            $actived = (!empty($menu["active"])) ? "active" : "";

            if (!empty($actived) && !$child) {
                $actived .= " open";
            }

            //start-li-1
            $menuHTML .= "<li class=\"$actived\">";

            //start-a-1
            $menuHTML .= "<a href=\"$uri\" title=\"$title\">";

            //start-end-icon-1
            if (!empty($icon)) {
                $menuHTML .= "<i class=\"$icon\"></i>";
            }

            //start-end-span-1
            $menuHTML .= "<span class=\"menu-item-parent\">$title</span>";

            //end-a-1
            $menuHTML .= "</a>";

            if (!$child) {
                $subChild = "";
                foreach ($menu["child"] as $secondMenu) {
                    $subChild .= $this->generateMenu($secondMenu);
                }

                if (!empty($subChild)) {
                    $menuHTML .= "<ul>$subChild</ul>";
                }
            }

            //end-li-1
            $menuHTML .= "</li>";
        }

        return $menuHTML;
    }

    public function getMenu() {
        $menuHTML = "";

        if (!empty($this->leftMenuList)) {
            foreach ($this->leftMenuList as $menu) {
                $menuHTML .= $this->generateMenu($menu);
            }
        }

        return $menuHTML;
    }

}
