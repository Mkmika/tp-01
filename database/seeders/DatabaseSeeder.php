<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models;
use App\Models\Logement;
use App\Models\Sejour;
use App\Models\Voyageur;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Voyageur::create([
            "nom" => "ALAKE",
            "prenom" => "Annick",
            "ville" => "Porga",
            "region" => "Région du Nord",
            "sexe" => "F",
        ]);
        Voyageur::create([
            "nom" => "FIFA",
            "prenom" => "Toni",
            "ville" => "Lokossa",
            "region" => "Region du Sud",
            "sexe" => "F",
        ]);
        Logement::create([
            "code" => " A01",
            "nomLogement" => "Résidence MLK",
            "capacite" => "4chambres et 2salons",
            "type" => "A vendre",
            "lieu" => "Fifadji",
            "photo" => "",
            "disponibilite" => "OUI",
        ]);
        Logement::create([
            "code" => " A02",
            "nomLogement" => "Cabane des Pêcheurs",
            "capacite" => "250 personnes",
            "type" => "A louer",
            "lieu" => "Cabli",
            "photo" => "",
            "disponibilite" => "NON",
        ]);
        Sejour::create([
            "voyageur_id" => "01",
            "logement_id" =>"02" ,
            "debut"=>"2018-11-10",
            "fin"=>"2019-02-10",
        ]);
        Sejour::create([
            "voyageur_id" => "03",
            "logement_id" =>"01" ,
            "debut"=>"2017-06-05",
            "fin"=>"2018-11-06"
        ]);

    }
}
