<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Library\Admin\LeftMenu;
use App\Library\LastActivity;
use Illuminate\Support\Facades\Route;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

         /**
         * Breadcrumb
         */
        view()->composer('components.ribbon', function() {
            //            $subject_diff = Route::current()->parameters();
            //            $edit_subject_title = "Edit Subject";
            //
            //            if ($subject_diff != null && isset($subject_diff["subject"])) {
            //                $subject_diff = $subject_diff["subject"];
            //
            //                $checkisParent = \App\Models\Admin\Subject::where('id', $subject_diff)
            //                        ->first();
            //
            //                if ($checkisParent->parent_id == 0) {
            //                    $edit_subject_title = "Edit Subject";
            //                }
            //            }
            
                        $admin = "/";
            
                        $route = [
                           "home" => [
                               "Dashboard"
                           ],
            //                 $admin . "profile" => [
            //                     "Profile"
            //                 ],
            //                 $admin . "view.category" => [
            //                     "School Year Categories"
            //                 ],
            //                 $admin . "view.add.subcategory " => [
            //                     "School Year Categories", "Add Main Category"
            //                 ],
            //                 $admin . "view.add.category" => [
            //                     "School Year Categories", "Add Subcategory"
            //                 ],
            //                 $admin . "view.edit.category" => [
            //                     "School Year Categories", "Edit Main Category"
            //                 ],
            //                 $admin . "view.edit.subcategory" => [
            //                     "School Year Categories", "Edit Subcategory"
            //                 ],
            //                 $admin . "admin.module.view" => [
            //                     "Admin Management", "Admin List"
            //                 ],
            //                 $admin . "admin.module.create" => [
            //                     "Admin Management", "Add Admin"
            //                 ],
            //                 $admin . "admin.module.edit" => [
            //                     "Admin Management", "Edit Admin"
            //                 ],
            //                 $admin . "admin.module.show" => [
            //                     "Admin Management", "Admin Details"
            //                 ],
            //                 $admin . "roles.module.index" => [
            //                     "Admin Management", "Admin Role"
            //                 ],
            //                 $admin . "roles.module.create" => [
            //                     "Admin Management", "Admin Role", "Add Admin Role"
            //                 ],
            //                 $admin . "roles.module.edit" => [
            //                     "Admin Management", "Admin Role", "Edit Admin Role"
            //                 ],
            //                 $admin . "audittrails.index" => [
            //                     "Admin Management", "Admin Audit Trail"
            //                 ],
            //                 $admin . "subject.create" => [
            //                     "Classes Management", "Subjects", "Add Subject"
            //                 ],
            //                 $admin . "subject.show_addchild_form" => [
            //                     "Classes Management", "Subjects", "Add Subject"
            //                 ],
            //                 $admin . "subject.edit" => [
            // //                    "Classes Management", "Subjects", $edit_subject_title
            //                     "Classes Management", "Subjects", "Edit Subject"
            //                 ],
            //                 $admin . "subject.index" => [
            //                     "Classes Management", "Subjects"
            //                 ],
            //                 $admin . "lecturer.index" => [
            //                     "Classes Management", "Tutors"
            //                 ],
            //                 $admin . "lecturer.create" => [
            //                     "Classes Management", "Tutors", "Add Tutor"
            //                 ],
            //                 $admin . "lecturer.edit" => [
            //                     "Classes Management", "Tutors", "Edit Tutor"
            //                 ],
            //                 $admin . "package.index" => [
            //                     "Fees Structure"
            //                 ],
            //                 $admin . "package.create" => [
            //                     "Fees Structure", "Add Fees Structures"
            //                 ],
            //                 $admin . "package.edit" => [
            //                     "Fees Structure", "Edit Fees Structure"
            //                 ],
            //                 $admin . "admin.classroom.view" => [
            //                     "Classes Management", "Classroom"
            //                 ],
            //                 $admin . "admin.classroom.add" => [
            //                     "Classes Management", "Classroom", "Add Classroom"
            //                 ],
            //                 $admin . "admin.classroom.edit" => [
            //                     "Classes Management", "Classroom", "Edit Classroom"
            //                 ],
            //                 $admin . "admin.student" => [
            //                     "Student Management", "Student List"
            //                 ],
            //                 $admin . "admin.student.add_new_student" => [
            //                     "Student Management", "Student List", "Add Student"
            //                 ],
            //                 $admin . "admin.student.edit_student" => [
            //                     "Student Management", "Student List", "Edit Student"
            //                 ],
            //                 $admin . "admin.student.detail" => [
            //                     "Student Management", "Student Details"
            //                 ],
            //                 $admin . "useraudittrails.index" => [
            //                     "Student Management", "Student Audit Trail"
            //                 ],
            //                 $admin . "transaction.index" => [
            //                     "Transaction History"
            //                 ],
            //                 $admin . "admin.class.add" => [
            //                     "Classes Management", "Classes", "Add Class"
            //                 ],
            //                 $admin . "admin.class.view" => [
            //                     "Classes Management", "Classes"
            //                 ],
            //                 $admin . "admin.class.edit" => [
            //                     "Classes Management", "Classes", "Edit Class"
            //                 ],
            //                 $admin . "admin.class.detail" => [
            //                     "Classes Management", "Classes", "Class Details"
            //                 ],
            //                 $admin . "wishlist.view" => [
            //                     "Timetable"
            //                 ],
            //                 $admin . "admin.holiday" => [
            //                     "Calendar"
            //                 ],
            //                 $admin . "contact.view" => [
            //                     "Repository", "Contact"
            //                 ],
            //                 $admin . "career.view" => [
            //                     "Repository", "Career"
            //                 ],
            //                 $admin . "maillist.view" => [
            //                     "Repository", "Mailing List"
            //                 ]
                        ];
            
                        $breadcrumb = (empty($route[Route::currentRouteName()])) ? "" : $route[Route::currentRouteName()];
            
                        view()->share('breadcrumb', $breadcrumb);
                    });
            
                    /**
                     * Generate Menu and pass to app.blade.php
                     * update login applicant last activity with current time
                     */
                    view()->composer('layouts.master', function() {
                        // update last activity
                        // LastActivity::update();
            
                        // generate menu
                        $leftPanelMenu = (new LeftMenu())->getMenu();
                        view()->share('leftPanelMenu', $leftPanelMenu);
                    });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
