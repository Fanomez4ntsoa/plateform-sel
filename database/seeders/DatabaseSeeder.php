<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();

        DB::table('profiles')
            ->insert([
                'name'          => 'ADMINISTRATION_CLIENT',
                'created_at'    => $now,
                'updated_at'    => null
            ]);

        DB::table('profiles')
            ->insert([
                'name'          => 'ADMINISTRATION_ADMIN',
                'created_at'    => $now,
                'updated_at'    => null
            ]);

        DB::table('accessRight')
            ->insert([
                [
                    'key'           => 'CLIENT_USER',
                    'name'          => 'Gérer les utilisateurs: Créer, lire, mettre à jour et supprimer des utilisateurs',
                    'created_at'    => $now
                ],
                [
                    'key'           => 'CLIENT_RESOURCE',
                    'name'          => 'Gérer les ressources : Accès à plusieurs des ressources éducatives',
                    'created_at'    => $now
                ],
                [
                    'key'           => 'CLIENT_CATEGORIE',
                    'name'          => 'Gérer les categories : Accès à plusieurs des categories qui gères les ressources éducatives',
                    'created_at'    => $now
                ],
                [
                    'key'           => 'CLIENT_QUIZ',
                    'name'          => 'Gérer les quizzes : Accès et peut participer à plusieurs quiz dans les ressources éducatives',
                    'created_at'    => $now
                ],
                [
                    'key'           => 'CLIENT_COMMENT',
                    'name'          => 'Laisser des commentaires : Ajouter et supprimer des commentaires sur les ressources',
                    'created_at'    => $now
                ],
                [
                    'key'           => 'CLIENT_PROGRESS',
                    'name'          => 'Suivre sa progression : Voir sa propre progression et les ressources complétées',
                    'created_at'    => $now
                ],

                [
                    'key'           => 'CLIENT_STATISTIQUE',
                    'name'          => 'Consulter les statistiques : Accéder aux statistiques générales de la plateforme',
                    'created_at'    => $now
                ],
            ]);

        DB::table('accessRight')
            ->insert([
                [
                    'key'           => 'ADMIN_PROFILES_ACCESS',
                    'name'          => 'Gérer les profils et les accès : Créer, modifier et supprimer des profils et leurs accès associés',
                    'created_at'    => $now
                ],
                [
                    'key'           => 'ADMIN_USERS_ACCESS',
                    'name'          => 'Gérer les utilisateurs: Récuperer tous les utilisateurs, mettre à jour et supprimer des utilisateurs',
                    'created_at'    => $now
                ],
                [
                    'key'           => 'ADMIN_CATEGORIES_ACCESS',
                    'name'          => 'Gérer les catégories : Ajouter, modifier et supprimer des catégories pour classer les ressources',
                    'created_at'    => $now
                ],
                [
                    'key'           => 'ADMIN_RESOURCES_ACCESS',
                    'name'          => 'Gérer les ressources : Ajouter, modifier et supprimer des ressources dans chaque catégories',
                    'created_at'    => $now
                ],
                [
                    'key'           => 'ADMIN_COMMENTS_ACCESS',
                    'name'          => 'Gérer les commentaires : Approuver, modifier et supprimer des commentaires des utilisateurs',
                    'created_at'    => $now
                ],
                [
                    'key'           => 'ADMIN_BADGES_ACCESS',
                    'name'          => 'Gérer les badges : Créer, modifier et supprimer des badges pour récompenser les utilisateurs',
                    'created_at'    => $now
                ],
                [
                    'key'           => 'ADMIN_QUIZZES_ACCESS',
                    'name'          => 'Gérer les quiz : Créer, modifier et supprimer des quiz et leurs questions/réponses associées',
                    'created_at'    => $now
                ],

                [
                    'key'           => 'ADMIN_STATISTIQUES_ACCESS',
                    'name'          => 'Accès complet aux statistiques : Accéder à des statistiques détaillées, générer des rapports',
                    'created_at'    => $now
                ],

                
            ]);
    }
}
