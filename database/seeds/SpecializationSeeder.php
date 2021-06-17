<?php

use Illuminate\Database\Seeder;
use App\Specialization;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specializations = ['Fisioterapista', 'Infermiere','Massoterapista','Medico di base', 'Dietologo','Nutrizionista','Osteopata', 'Cardiologo','Oculista', 'Ortopedico','Gastroenterologo','Ginecologo', 'Dermatologo','Neurologo','Chirurgo','Endocrinologo','Chirurgo plastico', 'Immunologo', 'Allergologo','Otorinolaringoiatra','Urologo'];

        foreach ($specializations as $specialization) {         
            $new_specialization = new Specialization();
            $new_specialization->name = $specialization;

            $new_specialization->save();
        }
    }
}
