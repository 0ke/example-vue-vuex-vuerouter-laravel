<?php

use App\Permission;
use App\Role;
use App\Seo;
use Illuminate\Database\Seeder;

class RolePermissionTableSeeder extends Seeder
{
    public function run()
    {
        $roles =
            [

            [
                'label' => 'ceo',
                'title' => 'Founder',
                'requirements' => null,
                'expectations' => null,
                'profile' => null,
                'concept' => true,
                'seats' => null,
                'remaining' => null,
            ],

            [
                'label' => 'ceo',
                'title' => 'Co-founder',
                'requirements' => null,
                'expectations' => null,
                'profile' => null,
                'concept' => true,
                'seats' => null,
                'remaining' => null,
            ],

            [
                'label' => 'manager',
                'title' => 'Site Manager',
                'requirements' => null,
                'expectations' => null,
                'profile' => null,
                'concept' => true,
                'seats' => null,
                'remaining' => null,
            ],

            [
                'label' => 'admin',
                'title' => 'Article Administrator',
                'requirements' => null,
                'expectations' => null,
                'profile' => null,
                'concept' => true,
                'seats' => null,
                'remaining' => null,
            ],

            [
                'label' => 'moderator',
                'title' => 'Article Moderator',
                'requirements' => null,
                'expectations' => null,
                'profile' => null,
                'concept' => true,
                'seats' => null,
                'remaining' => null,
            ],

            [
                'label' => 'php developer',
                'title' => 'PHP Laravel Developer',
                'requirements' => ['B.Tech./ B.E / MCA degree in Computer Science, Engineering or a related stream.', '3+ years of software development experience.', '3+ years of Python / Java development projects experience.', 'Minimum of 4 live project roll outs.', 'Experience with third-party libraries and APIs.', 'In depth understanding and experience of either SDLC or PDLC.', 'Good Communication Skills', 'Team Player'],
                'expectations' => ['Design and build applications/ components using open source technology.', 'Taking complete ownership of the deliveries assigned.', 'Collaborate with cross-functional teams to define, design, and ship new features.', 'Work with outside data sources and API\'s.', 'Unit-test code for robustness, including edge cases, usability, and general reliability.', 'Work on bug fixing and improving application performance.'],
                'profile' => "You'll be familiar with agile practices and have a highly technical background, comfortable discussing detailed technical aspects of system design and implementation, whilst remaining business driven. With 5+ years of systems analysis, technical analysis or business analysis experience, you'll have an expansive toolkit of communication techniques to enable shared, deep understanding of financial and technical concepts by diverse stakeholders with varying backgrounds and needs. In addition, you will have exposure to financial systems or accounting knowledge.",
                'concept' => false,
                'seats' => 6,
                'remaining' => 2,
            ],

            [
                'label' => 'analyst',
                'title' => 'Design Analyst',
                'requirements' => ['B.Tech./ B.E / MCA degree in Computer Science, Engineering or a related stream.', '3+ years of software development experience.', '3+ years of Python / Java development projects experience.', 'Minimum of 4 live project roll outs.', 'Experience with third-party libraries and APIs.', 'In depth understanding and experience of either SDLC or PDLC.', 'Good Communication Skills', 'Team Player'],
                'expectations' => ['Design and build applications/ components using open source technology.', 'Taking complete ownership of the deliveries assigned.', 'Collaborate with cross-functional teams to define, design, and ship new features.', 'Work with outside data sources and API\'s.', 'Unit-test code for robustness, including edge cases, usability, and general reliability.', 'Work on bug fixing and improving application performance.'],
                'profile' => "You'll be familiar with agile practices and have a highly technical background, comfortable discussing detailed technical aspects of system design and implementation, whilst remaining business driven. With 5+ years of systems analysis, technical analysis or business analysis experience, you'll have an expansive toolkit of communication techniques to enable shared, deep understanding of financial and technical concepts by diverse stakeholders with varying backgrounds and needs. In addition, you will have exposure to financial systems or accounting knowledge.",
                'concept' => false,
                'seats' => 3,
                'remaining' => 1,
            ],

            [
                'label' => 'ui designer',
                'title' => 'Head of UX and Design',
                'requirements' => ['B.Tech./ B.E / MCA degree in Computer Science, Engineering or a related stream.', '3+ years of software development experience.', '3+ years of Python / Java development projects experience.', 'Minimum of 4 live project roll outs.', 'Experience with third-party libraries and APIs.', 'In depth understanding and experience of either SDLC or PDLC.', 'Good Communication Skills', 'Team Player'],
                'expectations' => ['Design and build applications/ components using open source technology.', 'Taking complete ownership of the deliveries assigned.', 'Collaborate with cross-functional teams to define, design, and ship new features.', 'Work with outside data sources and API\'s.', 'Unit-test code for robustness, including edge cases, usability, and general reliability.', 'Work on bug fixing and improving application performance.'],
                'profile' => "You'll be familiar with agile practices and have a highly technical background, comfortable discussing detailed technical aspects of system design and implementation, whilst remaining business driven. With 5+ years of systems analysis, technical analysis or business analysis experience, you'll have an expansive toolkit of communication techniques to enable shared, deep understanding of financial and technical concepts by diverse stakeholders with varying backgrounds and needs. In addition, you will have exposure to financial systems or accounting knowledge.",
                'concept' => false,
                'seats' => 7,
                'remaining' => 2,
            ],

            [
                'label' => 'designer',
                'title' => 'Web & Visual Designer',
                'requirements' => ['B.Tech./ B.E / MCA degree in Computer Science, Engineering or a related stream.', '3+ years of software development experience.', '3+ years of Python / Java development projects experience.', 'Minimum of 4 live project roll outs.', 'Experience with third-party libraries and APIs.', 'In depth understanding and experience of either SDLC or PDLC.', 'Good Communication Skills', 'Team Player'],
                'expectations' => ['Design and build applications/ components using open source technology.', 'Taking complete ownership of the deliveries assigned.', 'Collaborate with cross-functional teams to define, design, and ship new features.', 'Work with outside data sources and API\'s.', 'Unit-test code for robustness, including edge cases, usability, and general reliability.', 'Work on bug fixing and improving application performance.'],
                'profile' => "You'll be familiar with agile practices and have a highly technical background, comfortable discussing detailed technical aspects of system design and implementation, whilst remaining business driven. With 5+ years of systems analysis, technical analysis or business analysis experience, you'll have an expansive toolkit of communication techniques to enable shared, deep understanding of financial and technical concepts by diverse stakeholders with varying backgrounds and needs. In addition, you will have exposure to financial systems or accounting knowledge.",
                'concept' => false,
                'seats' => 5,
                'remaining' => 3,
            ],

        ];

        $permissions =
            [
            [
                'title' => 'Edit the form',
                'label' => 'edit_form',
                'role_id' => 1,
            ],

            [
                'title' => 'destroy this',
                'label' => 'destroy_form',
                'role_id' => 1,
            ],
        ];

        foreach ($roles as $role) {

            $r = Role::create(
                [
                    'label' => $role['label'],
                    'requirements' => ($role['requirements']) ? json_encode($role['requirements']) : null,
                    'expectations' => ($role['expectations']) ? json_encode($role['expectations']) : null,
                    'profile' => $role['profile'],
                    'concept' => $role['concept'],
                    'seats' => $role['seats'],
                    'remaining' => $role['remaining'],
                ]
            );

            Seo::create(
                [
                    'title' => $role['title'],
                    'slug' => $role['title'],
                    'seoble_id' => $r->id,
                    'seoble_type' => 'App\Role',
                ]
            );
        }

        foreach ($permissions as $permission) {

            $p = Permission::create(
                [
                    'label' => $permission['label'],
                ]
            );

            Seo::create(
                [
                    'title' => $permission['title'],
                    'seoble_id' => $p->id,
                    'seoble_type' => 'App\Permission',
                ]
            );

            $p->roles()->attach([$p->id]);

        }
    }
}
