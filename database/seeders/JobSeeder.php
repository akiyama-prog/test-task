<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Job;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jobs = [
            ['candidate_id' => 1, 'job_title' => 'Accountant', 'company_name' => 'Software Ridge', 'started_at' => '2013-05-31 11:00', 'ended_at' => '2013-06-30 11:00'],
            ['candidate_id' => 1, 'job_title' => 'Actor', 'company_name' => 'Software Dev', 'started_at' => '2013-05-31 11:00', 'ended_at' => '2013-07-30 11:00'],
            ['candidate_id' => 1, 'job_title' => 'Actuary', 'company_name' => 'Software Inc', 'started_at' => '2013-06-01 06:00', 'ended_at' => '2013-08-01 06:00'],
            ['candidate_id' => 2, 'job_title' => 'Administrative Services Manager', 'company_name' => 'Software Rank', 'started_at' => '2013-06-01 06:00', 'ended_at' => '2014-09-01 06:00'],
            ['candidate_id' => 2, 'job_title' => 'High School Teachers', 'company_name' => 'Software Vine', 'started_at' => '2013-06-01 06:00', 'ended_at' => '2014-09-01 06:00'],
            ['candidate_id' => 2, 'job_title' => 'Advertising Sales Agent', 'company_name' => 'Ridge Software', 'started_at' => '2013-06-01 06:00', 'ended_at' => '2013-08-01 06:00'],
            ['candidate_id' => 3, 'job_title' => 'Advertising', 'company_name' => 'Dev Software', 'started_at' => '2013-06-03 10:00', 'ended_at' => '2015-11-03 04:44'],
            ['candidate_id' => 3, 'job_title' => 'Operations Technician', 'company_name' => 'Inc Software', 'started_at' => '2013-06-10 10:00', 'ended_at' => '2016-11-30 11:00'],
            ['candidate_id' => 3, 'job_title' => 'Aerospace Engineer', 'company_name' => 'Rank Software', 'started_at' => '2013-06-13 08:08', 'ended_at' => '2014-06-19 07:20'],
            ['candidate_id' => 4, 'job_title' => 'Food Science Technician', 'company_name' => 'Vine Software', 'started_at' => '2013-06-14 07:48', 'ended_at' => '2015-02-10 08:22'],
            ['candidate_id' => 4, 'job_title' => 'Agricultural Scientist', 'company_name' => 'Software Ability', 'started_at' => '2013-06-18 12:20', 'ended_at' => '2019-09-30 09:00'],
            ['candidate_id' => 4, 'job_title' => 'Agricultural Engineer', 'company_name' => 'Software Ex', 'started_at' => '2013-06-18 04:27', 'ended_at' => '2013-11-07 03:57'],
            ['candidate_id' => 5, 'job_title' => 'Agricultural Worker', 'company_name' => 'Software Industries', 'started_at' => '2013-06-20 04:26', 'ended_at' => '2013-06-20 04:58'],
            ['candidate_id' => 5, 'job_title' => 'Air Traffic Controllers', 'company_name' => 'Software Zoom', 'started_at' => '2013-06-21 01:51', 'ended_at' => '2020-08-26 09:00'],
            ['candidate_id' => 5, 'job_title' => 'Service Technician', 'company_name' => 'Software Rhino', 'started_at' => '2013-06-25 04:17', 'ended_at' => '2015-10-30 11:00'],
            ['candidate_id' => 6, 'job_title' => 'Aircraft Pilot', 'company_name' => 'Ability Software', 'started_at' => '2013-06-28 10:00', 'ended_at' => '2014-10-06 10:00'],
            ['candidate_id' => 6, 'job_title' => 'Animal Care and Service Worker', 'company_name' => 'Ex Software', 'started_at' => '2013-06-29 10:00', 'ended_at' => '2020-02-02 11:00'],
            ['candidate_id' => 6, 'job_title' => 'Announcer', 'company_name' => 'Industries Software', 'started_at' => '2013-06-30 08:00', 'ended_at' => '2015-08-31 08:00'],
            ['candidate_id' => 7, 'job_title' => 'Anthropologist', 'company_name' => 'Zoom Software', 'started_at' => '2013-06-30 09:00', 'ended_at' => '2014-12-31 11:00'],
            ['candidate_id' => 7, 'job_title' => 'Appraiser of Real Estate', 'company_name' => 'Rhino Software', 'started_at' => '2013-06-30 09:00', 'ended_at' => '2015-08-31 09:00'],
            ['candidate_id' => 7, 'job_title' => 'Mediator', 'company_name' => 'Software Able', 'started_at' => '2013-06-30 09:00', 'ended_at' => '2014-04-30 09:00'],
            ['candidate_id' => 8, 'job_title' => 'Architect', 'company_name' => 'Software Bit', 'started_at' => '2013-06-30 09:00', 'ended_at' => '2016-08-31 09:00'],
            ['candidate_id' => 8, 'job_title' => 'Architectural and Engineering Manager', 'company_name' => 'Software Ink', 'started_at' => '2013-06-30 09:00', 'ended_at' => '2015-03-31 09:00'],
            ['candidate_id' => 8, 'job_title' => 'Museum Technician', 'company_name' => 'Software Ment', 'started_at' => '2013-06-30 09:00', 'ended_at' => '2016-05-31 09:00'],
            ['candidate_id' => 9, 'job_title' => 'Art Director', 'company_name' => 'Software Gorilla', 'started_at' => '2013-06-30 09:00', 'ended_at' => '2014-04-30 09:00'],
            ['candidate_id' => 9, 'job_title' => 'Artist', 'company_name' => 'Able Software', 'started_at' => '2013-06-30 09:00', 'ended_at' => '2015-02-28 11:00'],
            ['candidate_id' => 9, 'job_title' => 'Assembler', 'company_name' => 'Software Amp', 'started_at' => '2013-06-30 09:00', 'ended_at' => '2015-10-31 11:00'],
            ['candidate_id' => 10, 'job_title' => 'Athlete', 'company_name' => 'Software Pin', 'started_at' => '2013-06-30 09:00', 'ended_at' => '2014-11-30 11:00'],
            ['candidate_id' => 10, 'job_title' => 'Athletic Trainer', 'company_name' => 'Software Velocity', 'started_at' => '2013-06-30 09:00', 'ended_at' => '2013-07-31 09:00'],
            ['candidate_id' => 10, 'job_title' => 'Atmospheric Scientist', 'company_name' => 'Software Woop', 'started_at' => '2013-06-30 09:00', 'ended_at' => '2017-08-31 09:00'],
        ];
        Job::insert($jobs);
    }
}
