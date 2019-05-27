<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnigmesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enigmes')->insert([
            'nom' => 'Enigme 1',
            'libelle' => 'Le premier indice se trouve dans votre zone de départ. La source de lumière vous éclairera.',
            'code_reponse' =>'DESIGN',
            'equipe_id' =>'1',
        ]);
        DB::table('enigmes')->insert([
            'nom' => 'Enigme 1',
            'libelle' => 'Le premier indice se trouve dans votre zone de départ. La source de lumière vous éclairera.',
            'code_reponse' =>'DESIGN',
            'equipe_id' =>'2',
        ]);
        DB::table('enigmes')->insert([
            'nom' => 'Enigme 1',
            'libelle' => 'Le premier indice se trouve dans votre zone de départ. La source de lumière vous éclairera.',
            'code_reponse' =>'DESIGN',
            'equipe_id' =>'3',
        ]);
        DB::table('enigmes')->insert([
            'nom' => 'Enigme 1',
            'libelle' => 'Le premier indice se trouve dans votre zone de départ. La source de lumière vous éclairera.',
            'code_reponse' =>'DESIGN',
            'equipe_id' =>'4',
        ]);
        DB::table('enigmes')->insert([
            'nom' => 'Enigme 1',
            'libelle' => 'Le premier indice se trouve dans votre zone de départ. La source de lumière vous éclairera.',
            'code_reponse' =>'DESIGN',
            'equipe_id' =>'5',
        ]);
        DB::table('enigmes')->insert([
            'nom' => 'Enigme 2',
            'libelle' => "A l'aide du plan, trouver le point de coordonnées (3;4) sur la grille végétale.",
            'code_reponse' =>'TECHNOLOGIE',
            'equipe_id' =>'1',
        ]);
        DB::table('enigmes')->insert([
            'nom' => 'Enigme 2',
            'libelle' => "A l'aide du plan, trouver le point de coordonnées (1;3) sur la grille végétale.",
            'code_reponse' =>'TECHNOLOGIE',
            'equipe_id' =>'2',
        ]);
        DB::table('enigmes')->insert([
            'nom' => 'Enigme 2',
            'libelle' => "A l'aide du plan, trouver le point de coordonnées (2;5) sur la grille végétale.",
            'code_reponse' =>'TECHNOLOGIE',
            'equipe_id' =>'3',
        ]);
        DB::table('enigmes')->insert([
            'nom' => 'Enigme 2',
            'libelle' => "A l'aide du plan, trouver le point de coordonnées (4;3) sur la grille végétale.",
            'code_reponse' =>'TECHNOLOGIE',
            'equipe_id' =>'4',
        ]);
        DB::table('enigmes')->insert([
            'nom' => 'Enigme 2',
            'libelle' => "A l'aide du plan, trouver le point de coordonnées (4;5) sur la grille végétale.",
            'code_reponse' =>'TECHNOLOGIE',
            'equipe_id' =>'5',
        ]);
        DB::table('enigmes')->insert([
            'nom' => 'Enigme 3',
            'libelle' => "Au point de départ de l'équipe jaune. A propos du bâtiment B : la 3ème est la seconde, la 7ème est la 8ème, la 8ème est la 4ème et la 38ème est la 6ème.  Au point de départ d'une autre équipe (qui n'est pas l'équipe violette), seul le premier bâtiment compte. Ici, la seconde est 5ème, la 9ème est première, la 10ème est 7ème et la 20ème est 3ème.",
            'code_reponse' =>'ACADEMIE',
            'equipe_id' =>'1',
        ]);
        DB::table('enigmes')->insert([
            'nom' => 'Enigme 3',
            'libelle' => "Sur les 3, seul le premier compte. Dans ce batiment, la 2ème est première, la 3ème est seconde, la 7ème est 5ème, la 8ème est 4ème, la 9ème est 8ème, la 13ème est 7ème, la 34ème est 3ème et la 38ème est 6ème. L'un des points de départ des autres équipes peut être le début de la solution.",
            'code_reponse' =>'ACADEMIE',
            'equipe_id' =>'2',
        ]);
        DB::table('enigmes')->insert([
            'nom' => 'Enigme 3',
            'libelle' => "Au point de départ de l'équipe rouge. A propos du bâtiment IJ : la seconde est 5ème, la 9ème est première, la 10ème est 7ème et la 20ème est 3ème.  Au point de départ d'une autre équipe (qui n'est pas l'équipe violette) : sur les 4, seul le troisième compte. Ici, la 5ème est 6ème, la 6ème est 8ème, la 11ème est 2ème et la 12ème est 4ème.",
            'code_reponse' =>'ACADEMIE',
            'equipe_id' =>'3',
        ]);
        DB::table('enigmes')->insert([
            'nom' => 'Enigme 3',
            'libelle' => "Sur les 3, seul le bâtiment IJ compte. Dans ce bâtiment, la seconde est 5ème, la 5ème est seconde, la 7ème est 6ème, la 9ème est 3ème, la 10èmè est 7ème, la 16ème est 8ème, la 20ème est première et la 51ème est 4ème. L'un des points de départ des autres équipes peut être le début de la solution.",
            'code_reponse' =>'ACADEMIE',
            'equipe_id' =>'4',
        ]);
        DB::table('enigmes')->insert([
            'nom' => 'Enigme 3',
            'libelle' => "Sur les 4, seules les 2 du milieu comptent. Ici, la première est première, la 6ème est 7ème, la 7ème est 3ème, la 22ème est 6ème, la 23ème est 5ème, la 28ème est seconde, la 29ème est 4ème et la 30ème est 8ème. L'un des points de départ des autres équipes peut être le début de la solution.",
            'code_reponse' =>'ACADEMIE',
            'equipe_id' =>'5',
        ]);
    }
}
