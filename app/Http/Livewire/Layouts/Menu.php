<?php

namespace App\Http\Livewire\Layouts;

use Livewire\Component;

class Menu extends Component
{
    public $menu;

    public function mount()
    {
        $this->menu = [
            [
                'type'  => 'menu-item',
                'icon'  => 'fas fa-tachometer-alt',
                'text'  => 'Dashboard',
                'route' => 'dashboard',
            ],
            ['header' => 'Manage Profile'],
            [
                'type'  => 'menu-item',
                'icon'  => 'fas fa-user',
                'text'  => 'User Profile',
                'route' => 'profile.show',
            ],
            [
                'type'    => 'menu-item',
                'text'    => 'Classes',
                'icon'    => 'fas fa-chalkboard',
                'can'     => 'menu-class',
                'submenu' => [
                    [
                        'type'  => 'menu-item',
                        'text'  => 'View Classes',
                        'route' => 'classes.index',
                        'can'   => 'read class',
                    ],
                    [
                        'type'  => 'menu-item',
                        'text'  => 'Create Class',
                        'route' => 'classes.create',
                        'can'   => 'create class',
                    ],
                ],
            ],
            
            [
                'type'    => 'menu-item',
                'text'    => 'Trainee',
                'icon'    => 'fas fa-user',
                'can'     => 'menu-student',
                'submenu' => [
                    [
                        'type'  => 'menu-item',
                        'text'  => 'View trainee',
                        'route' => 'students.index',
                        'can'   => 'read student',
                    ],
                    [
                        'type'  => 'menu-item',
                        'text'  => 'Create trainee',
                        'route' => 'students.create',
                        'can'   => 'create student',
                    ],
                ],
            ],
            [
                'type'    => 'menu-item',
                'text'    => 'Trainer',
                'icon'    => 'fas fa-user',
                'can'     => 'menu-teacher',
                'submenu' => [
                    [
                        'type'  => 'menu-item',
                        'text'  => 'View Trainer',
                        'route' => 'teachers.index',
                        'can'   => 'read teacher',
                    ],
                    [
                        'type'  => 'menu-item',
                        'text'  => 'Create Trainer',
                        'route' => 'teachers.create',
                        'can'   => 'create teacher',
                    ],
                ],
            ],

            [
                'type'    => 'menu-item',
                'text'    => 'Admins',
                'icon'    => 'fas fa-user',
                'can'     => 'menu-admin',
                'submenu' => [
                    [
                        'type'  => 'menu-item',
                        'text'  => 'View admins',
                        'route' => 'admins.index',
                        'can'   => 'read admin',
                    ],
                    [
                        'type'  => 'menu-item',
                        'text'  => 'Create admin',
                        'route' => 'admins.create',
                        'can'   => 'create admin',
                    ],
                ],
            ],
            [
                'type'    => 'menu-item',
                'text'    => 'Academic years',
                'icon'    => 'fas fa-calendar',
                'can'     => 'menu-academic-year',
                'submenu' => [
                    [
                        'type'  => 'menu-item',
                        'text'  => 'View academic years',
                        'route' => 'academic-years.index',
                        'can'   => 'read academic year',
                    ],
                    [
                        'type'  => 'menu-item',
                        'text'  => 'Create academic year',
                        'route' => 'academic-years.create',
                        'can'   => 'create academic year',
                    ],
                ],
            ],
            [
                'type'    => 'menu-item',
                'text'    => 'Semesters',
                'icon'    => 'fas fa-clock',
                'can'     => 'menu-semester',
                'submenu' => [
                    [
                        'type'  => 'menu-item',
                        'text'  => 'View semesters',
                        'route' => 'semesters.index',
                        'can'   => 'read semester',
                    ],
                    [
                        'type'  => 'menu-item',
                        'text'  => 'Create semester',
                        'route' => 'semesters.create',
                        'can'   => 'create semester',
                    ],
                ],
            ],
            [
                'type'    => 'menu-item',
                'text'    => 'Subjects',
                'icon'    => 'fas fa-lightbulb',
                'can'     => 'menu-subject',
                'submenu' => [
                    [
                        'type'  => 'menu-item',
                        'text'  => 'View subjects',
                        'route' => 'subjects.index',
                        'can'   => 'read subject',
                    ],
                    [
                        'type'  => 'menu-item',
                        'text'  => 'Create subject',
                        'route' => 'subjects.create',
                        'can'   => 'create subject',
                    ],
                    [
                        'type'  => 'menu-item',
                        'text'  => 'Assign Trainer to subjects',
                        'route' => 'subjects.assign-teacher',
                        'can'   => 'update subject',
                    ],
                ],
            ],
        ];
    }

    public function render()
    {
        return view('livewire.layouts.menu');
    }
}
