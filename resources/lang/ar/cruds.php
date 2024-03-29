<?php

return [
    'userManagement' => [
        'title'          => 'إدارة المستخدمين',
        'title_singular' => 'إدارة المستخدمين',
    ],
    'permission' => [
        'title'          => 'الصلاحيات',
        'title_singular' => 'الصلاحية',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'المجموعات',
        'title_singular' => 'مجموعة',
        'fields'         => [
            'id'                 => 'الكود',
            'id_helper'          => ' ',
            'title'              => 'العنوان',
            'title_helper'       => ' ',
            'permissions'        => 'الصلاحيات',
            'permissions_helper' => ' ',
            'created_at'         => 'تاريخ العمل',
            'created_at_helper'  => ' ',
            'updated_at'         => 'تاريخ التعديل',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'تاريخ الحذف',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'المستخدمين',
        'title_singular' => 'مستخدم',
        'fields'         => [
            'id'                       => 'الكود',
            'id_helper'                => ' ',
            'name'                     => 'Name',
            'name_helper'              => ' ',
            'email'                    => 'Email',
            'email_helper'             => ' ',
            'email_verified_at'        => 'Email verified at',
            'email_verified_at_helper' => ' ',
            'password'                 => 'Password',
            'password_helper'          => ' ',
            'roles'                    => 'Roles',
            'roles_helper'             => ' ',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => ' ',
            'locale'                   => 'Locale',
            'locale_helper'            => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
            'team'                     => 'Team',
            'team_helper'              => ' ',
        ],
    ],
    'clientArea' => [
        'title'          => 'Client Area',
        'title_singular' => 'Client Area',
    ],
    'project' => [
        'title'          => 'Project',
        'title_singular' => 'Project',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'الاسم',
            'name_helper'       => ' ',
            'owner'             => 'مالك المشروع',
            'owner_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
            'team'              => 'الفريق',
            'team_helper'       => ' ',
            'package'           => 'الباقة',
            'package_helper'    => ' ',
            'start_date'        => 'تاريخ البداية',
            'start_date_helper' => ' ',
            'end_date'          => 'تاريخ النهاية',
            'end_date_helper'   => ' ',
            'statues'           => 'الحالة',
            'statues_helper'    => ' ',
            'assignees'         => 'المتعاملين',
            'assignees_helper'  => ' ',
        ],
    ],
    'auditLog' => [
        'title'          => 'Audit Logs',
        'title_singular' => 'Audit Log',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'description'         => 'Event',
            'description_helper'  => ' ',
            'subject_id'          => 'Subject ID',
            'subject_id_helper'   => ' ',
            'subject_type'        => 'Subject Type',
            'subject_type_helper' => ' ',
            'user_id'             => 'User ID',
            'user_id_helper'      => ' ',
            'properties'          => 'Attributes',
            'properties_helper'   => ' ',
            'host'                => 'IP',
            'host_helper'         => ' ',
            'created_at'          => 'Event time',
            'created_at_helper'   => ' ',
            'updated_at'          => 'Updated at',
            'updated_at_helper'   => ' ',
        ],
    ],
    'team' => [
        'title'          => 'Teams',
        'title_singular' => 'Team',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'Name',
            'name_helper'       => ' ',
            'owner'             => 'Owner',
            'owner_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'userAlert' => [
        'title'          => 'User Alerts',
        'title_singular' => 'User Alert',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'message'           => 'Message',
            'message_helper'    => ' ',
            'link'              => 'Link',
            'link_helper'       => ' ',
            'users'             => 'Users',
            'users_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'post' => [
        'title'          => 'Post',
        'title_singular' => 'Post',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'project'             => 'المشروع',
            'project_helper'      => ' ',
            'title'               => 'العنوان',
            'title_helper'        => ' ',
            'content'             => 'المحتوي',
            'content_helper'      => ' ',
            'created_at'          => 'تاريخ العمل',
            'created_at_helper'   => ' ',
            'updated_at'          => 'تاريخ التحديث',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'تاريخ الحذف',
            'deleted_at_helper'   => ' ',
            'team'                => 'فريق',
            'team_helper'         => ' ',
            'category'            => 'تصنيف',
            'category_helper'     => ' ',
            'status'              => 'الحالة',
            'status_helper'       => ' ',
            'note'                => 'ملاحظات',
            'note_helper'         => ' ',
            'confirmation'        => 'الموافقة',
            'confirmation_helper' => ' ',
            'review'              => 'تقييم',
            'review_helper'       => ' ',
        ],
    ],
    'design' => [
        'title'          => 'Design',
        'title_singular' => 'Design',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'project'             => 'المشروع',
            'project_helper'      => ' ',
            'post'                => 'البوست',
            'post_helper'         => ' ',
            'design'              => 'التصميم',
            'design_helper'       => ' ',
            'created_at'          => 'تاريخ العمل',
            'created_at_helper'   => ' ',
            'updated_at'          => 'تاريخ التحديث',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'تاريخ الحذف',
            'deleted_at_helper'   => ' ',
            'team'                => 'فريق',
            'team_helper'         => ' ',
            'status'              => 'الحالة',
            'status_helper'       => ' ',
            'note'                => 'ملاحظات',
            'note_helper'         => ' ',
            'confirmation'        => 'الموافقة',
            'confirmation_helper' => ' ',
            'review'              => 'تقييم',
            'review_helper'       => ' ',
        ],
    ],
    'video' => [
        'title'          => 'Video',
        'title_singular' => 'Video',
        'fields'         => [
            'id'                  => 'ID',
            'id_helper'           => ' ',
            'project'             => 'المشروع',
            'project_helper'      => ' ',
            'post'                => 'البوست',
            'post_helper'         => ' ',
            'video'               => 'فيديو',
            'video_helper'        => ' ',
            'created_at'          => 'تاريخ العمل',
            'created_at_helper'   => ' ',
            'updated_at'          => 'تاريخ التحديث',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'تاريخ الحذف',
            'deleted_at_helper'   => ' ',
            'team'                => 'فريق',
            'team_helper'         => ' ',
            'category'            => 'تصنيف',
            'category_helper'     => ' ',
            'status'              => 'الحالة',
            'status_helper'       => ' ',
            'note'                => 'ملاحظات',
            'note_helper'         => ' ',
            'confirmation'        => 'الموافقة',
            'confirmation_helper' => ' ',
            'review'              => 'تقييم',
            'review_helper'       => ' ',
        ],
    ],
    'ad' => [
        'title'          => 'Ad',
        'title_singular' => 'Ad',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'project'           => 'المشروع',
            'project_helper'    => ' ',
            'title'             => 'العنوان',
            'title_helper'      => ' ',
            'content'           => 'المحتوص',
            'content_helper'    => ' ',
            'created_at'        => 'تاريخ العمل',
            'created_at_helper'   => ' ',
            'updated_at'          => 'تاريخ التحديث',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'تاريخ الحذف',
            'deleted_at_helper'   => ' ',
            'team'                => 'فريق',
            'team_helper'         => ' ',
            'category'            => 'تصنيف',
            'category_helper'     => ' ',
            'file'              => 'فيل',
            'file_helper'       => ' ',
            'statues'           => 'الحالة',
            'statues_helper'    => ' ',
        ],
    ],
    'setting' => [
        'title'          => 'Setting',
        'title_singular' => 'Setting',
    ],
    'postcategory' => [
        'title'          => 'Postcategory',
        'title_singular' => 'Postcategory',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'الاسم',
            'name_helper'       => ' ',
            'created_at'          => 'تاريخ العمل',
            'created_at_helper'   => ' ',
            'updated_at'          => 'تاريخ التحديث',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'تاريخ الحذف',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'videocategory' => [
        'title'          => 'Videocategory',
        'title_singular' => 'Videocategory',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'الاسم',
            'name_helper'       => ' ',
            'created_at'          => 'تاريخ العمل',
            'created_at_helper'   => ' ',
            'updated_at'          => 'تاريخ التحديث',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'تاريخ الحذف',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'adcategory' => [
        'title'          => 'Adcategory',
        'title_singular' => 'Adcategory',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'الاسم',
            'name_helper'       => ' ',
            'created_at'          => 'تاريخ العمل',
            'created_at_helper'   => ' ',
            'updated_at'          => 'تاريخ التحديث',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'تاريخ الحذف',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'package' => [
        'title'          => 'Package',
        'title_singular' => 'Package',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'الاسم',
            'name_helper'       => ' ',
            'ads'               => 'الاعلان',
            'ads_helper'        => ' ',
            'post'              => 'بوست',
            'post_helper'       => ' ',
            'design'            => 'تصميم',
            'design_helper'     => ' ',
            'video'             => 'فيديو',
            'video_helper'      => ' ',
            'platforms'         => 'المنصة',
            'platforms_helper'  => ' ',
            'story'             => 'القصة',
            'story_helper'      => ' ',
            'created_at'          => 'تاريخ العمل',
            'created_at_helper'   => ' ',
            'updated_at'          => 'تاريخ التحديث',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'تاريخ الحذف',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'studio' => [
        'title'          => 'طلب باقات الاستوديو',
        'title_singular' => 'طلب باقات الاستوديو',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'العنوان',
            'title_helper'       => ' ',
            'description'        => 'التافصيل',
            'description_helper' => ' ',
            'date'               => 'التاريخ',
            'date_helper'        => ' ',
            'time'               => 'Time',
            'time_helper'        => ' ',
            'status'             => 'الحالة',
            'status_helper'      => ' ',
            'created_at'          => 'تاريخ العمل',
            'created_at_helper'   => ' ',
            'updated_at'          => 'تاريخ التحديث',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'تاريخ الحذف',
            'deleted_at_helper'   => ' ',
            'team'               => 'Team',
            'team_helper'        => ' ',
        ],
    ],
    'support' => [
        'title'          => 'الدعم التسويقي',
        'title_singular' => 'الدعم التسويقي',
    ],
    'motion' => [
        'title'          => 'طلب عمل موشن جرافيك',
        'title_singular' => 'طلب عمل موشن جرافيك ',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'العنوان',
            'title_helper'      => ' ',
            'details'           => 'تفاصيل',
            'details_helper'    => ' ',
            'minuts'            => 'عدد الدقائٍق',
            'minuts_helper'     => ' ',
            'created_at'          => 'تاريخ العمل',
            'created_at_helper'   => ' ',
            'updated_at'          => 'تاريخ التحديث',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'تاريخ الحذف',
            'deleted_at_helper'   => ' ',
            'team'              => 'Team',
            'team_helper'       => ' ',
        ],
    ],
    'website' => [
        'title'          => 'طلب عمل ويباسيت',
        'title_singular' => 'طلب عمل ويباسيت',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'details'           => 'Details',
            'details_helper'    => ' ',
            'created_at'          => 'تاريخ العمل',
            'created_at_helper'   => ' ',
            'updated_at'          => 'تاريخ التحديث',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'تاريخ الحذف',
            'deleted_at_helper'   => ' ',
            'team'              => 'Team',
            'team_helper'       => ' ',
        ],
    ],
    'marketResearch' => [
        'title'          => 'طلب بحث تسويقي',
        'title_singular' => 'طلب بحث تسويقي',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'details'           => 'Details',
            'details_helper'    => ' ',
            'created_at'          => 'تاريخ العمل',
            'created_at_helper'   => ' ',
            'updated_at'          => 'تاريخ التحديث',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'تاريخ الحذف',
            'deleted_at_helper'   => ' ',
            'team'              => 'Team',
            'team_helper'       => ' ',
        ],
    ],
    'quotation' => [
        'title'          => 'طلب عرض سعر',
        'title_singular' => 'طلب عرض سعر',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'details'           => 'Details',
            'details_helper'    => ' ',
           'created_at'          => 'تاريخ العمل',
            'created_at_helper'   => ' ',
            'updated_at'          => 'تاريخ التحديث',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'تاريخ الحذف',
            'deleted_at_helper'   => ' ',
            'team'              => 'Team',
            'team_helper'       => ' ',
        ],
    ],
    'application' => [
        'title'          => 'طلب عمل ابليكشن ',
        'title_singular' => 'طلب عمل ابليكشن ',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'details'           => 'Details',
            'details_helper'    => ' ',
           'created_at'          => 'تاريخ العمل',
            'created_at_helper'   => ' ',
            'updated_at'          => 'تاريخ التحديث',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'تاريخ الحذف',
            'deleted_at_helper'   => ' ',
            'team'              => 'Team',
            'team_helper'       => ' ',
        ],
    ],
    'system' => [
        'title'          => 'طلب عمل سيستم اداري',
        'title_singular' => 'طلب عمل سيستم اداري',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'details'           => 'Details',
            'details_helper'    => ' ',
            'created_at'          => 'تاريخ العمل',
            'created_at_helper'   => ' ',
            'updated_at'          => 'تاريخ التحديث',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'تاريخ الحذف',
            'deleted_at_helper'   => ' ',
            'team'              => 'Team',
            'team_helper'       => ' ',
        ],
    ],
    'taskManagement' => [
        'title'          => 'Task management',
        'title_singular' => 'Task management',
    ],
    'taskStatus' => [
        'title'          => 'Statuses',
        'title_singular' => 'Status',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'الاسم',
            'name_helper'       => ' ',
            'created_at'          => 'تاريخ العمل',
            'created_at_helper'   => ' ',
            'updated_at'          => 'تاريخ التحديث',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'تاريخ الحذف',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'taskTag' => [
        'title'          => 'Tags',
        'title_singular' => 'Tag',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'name'              => 'الاسم',
            'name_helper'       => ' ',
            'created_at'          => 'تاريخ العمل',
            'created_at_helper'   => ' ',
            'updated_at'          => 'تاريخ التحديث',
            'updated_at_helper'   => ' ',
            'deleted_at'          => 'تاريخ الحذف',
            'deleted_at_helper'   => ' ',
        ],
    ],
    'task' => [
        'title'          => 'Tasks',
        'title_singular' => 'Task',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'name'               => 'Name',
            'name_helper'        => ' ',
            'description'        => 'Description',
            'description_helper' => ' ',
            'status'             => 'Status',
            'status_helper'      => ' ',
            'tag'                => 'Tags',
            'tag_helper'         => ' ',
            'attachment'         => 'Attachment',
            'attachment_helper'  => ' ',
            'due_date'           => 'Due date',
            'due_date_helper'    => ' ',
            'assigned_to'        => 'Assigned To',
            'assigned_to_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'taskCalendar' => [
        'title'          => 'Calendar',
        'title_singular' => 'Calendar',
    ],
    'systemCalendar' => [
        'title'          => 'Calendar',
        'title_singular' => 'Calendar',
    ],

];
