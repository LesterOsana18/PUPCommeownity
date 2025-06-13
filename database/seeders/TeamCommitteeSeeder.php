<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TeamCommittee;

class TeamCommitteeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['Office of the President', 'op.pupsp2019@gmail.com', 'Yelen Nepomuceno', 'Event proposals, resolutions, memoranda'],
            ['Office of the Vice President', 'pupsp.comms@gmail.com', 'Anna Maria J. Sengco', 'External inquiries and partnerships'],
            ['Office of the Secretary General', 'sintangpusa2019@gmail.com', 'Kristylle Ann F. De Vera', 'Internal communications'],
            ['Office of the Treasurer', 'sp.officeofthetreasurer@gmail.com', 'Shammyzel Ashley A. Lucina', 'Reimbursement reports'],
            ['Office of the Auditor', 'pupsp.officeoftheauditor@gmail.com', 'Danna Althea S. Teh', 'Financial audits'],
            ['Adoption & Fostering Committee', 'pupspadoptionandfoster23@gmail.com', 'Alaiza C. Dela Cruz', 'Adoption and foster arrangements'],
            ['Cat Monitoring & Feeding Committee', 'pupsp.catmonfeedcomms@gmail.com', 'Kyla Marie Moral', 'Campus cat welfare monitoring'],
            ['Creatives Committee', 'pupsp.creatives@gmail.com', 'Ivy Myuki S. Añovert', 'Visuals and content creation'],
            ['Marketing Committee', 'pupsp.mktg@gmail.com', 'Martin Jay T. Pollicar', 'External outreach and sponsorships'],
            ['Membership & Recruitment Committee', 'pupsp.membership@gmail.com', 'Rhea Janell H. Orocio', 'Volunteer and member management'],
            ['Publications Committee', 'pubcom.pupsp@gmail.com', 'Reynalyn R. Bawag', 'Publication materials and releases'],
        ];

        foreach ($data as [$office, $email, $person, $role]) {
            TeamCommittee::create([
                'office' => $office,
                'email' => $email,
                'person_in_charge' => $person,
                'role' => $role,
            ]);
        }
    }
}
