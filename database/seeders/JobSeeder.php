<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    public function run(): void
    {
        $jobs = [
            [
                "title" => "Frontend Developer",
                "company" => "QuickHire",
                "location" => "Remote",
                "category" => "Engineering",
                "description" => "React developer needed for modern web apps."
            ],
            [
                "title" => "Backend Developer",
                "company" => "TechNova",
                "location" => "Dhaka",
                "category" => "Engineering",
                "description" => "Laravel backend developer required."
            ],
            [
                "title" => "UI/UX Designer",
                "company" => "DesignPro",
                "location" => "Remote",
                "category" => "Design",
                "description" => "Design modern and clean user interfaces."
            ],
            [
                "title" => "Mobile App Developer",
                "company" => "Appify",
                "location" => "Chittagong",
                "category" => "Engineering",
                "description" => "Flutter developer needed."
            ],
            [
                "title" => "Data Analyst",
                "company" => "InsightLab",
                "location" => "Dhaka",
                "category" => "Data",
                "description" => "Analyze data and create reports."
            ],
            [
                "title" => "DevOps Engineer",
                "company" => "CloudCore",
                "location" => "Remote",
                "category" => "Engineering",
                "description" => "Manage CI/CD and cloud infrastructure."
            ],
            [
                "title" => "Marketing Manager",
                "company" => "GrowthX",
                "location" => "Dhaka",
                "category" => "Marketing",
                "description" => "Lead digital marketing campaigns."
            ],
            [
                "title" => "Product Manager",
                "company" => "NextGen",
                "location" => "Remote",
                "category" => "Management",
                "description" => "Manage product roadmap."
            ],
            [
                "title" => "QA Engineer",
                "company" => "Testify",
                "location" => "Dhaka",
                "category" => "Engineering",
                "description" => "Test web applications."
            ],
            [
                "title" => "Full Stack Developer",
                "company" => "StackWorks",
                "location" => "Remote",
                "category" => "Engineering",
                "description" => "Work on both frontend and backend."
            ],
        ];

        foreach ($jobs as $job) {
            Job::create($job);
        }

        // duplicate jobs to reach 20
       
    }
}