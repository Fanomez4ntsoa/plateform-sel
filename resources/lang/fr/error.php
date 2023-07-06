<?php

return [
    'default'       => 'Une erreur s\'est produite',
    'validations'    => 'Requête invalide.',
    'user'  => [
        'collection' => 'Aucun utilisateur',
        'not_found' => 'Cette utilisateur n\'existe pas ou à été supprimer.',
        'delete' => "La suppression a échouer",
    ],
    'security'  => [
        'password'  => [
            'token_invalid' => 'Jeton de mot de pass invalide ou expiré.',
            'old_invalid'   => 'L\'ancien mot de passe n\'est plus valid'
        ],
    ],
    'quizz'  => [
        'category'    => [
            'not_found'    => 'Le categorie séléctionner n\'existe pas ou à été supprimer. Veuillez le créer svp.',
            'exists'    => 'Un quiz existe déjà pour la catégorie donnée.',
        ],
        'create'    => 'Erreur s\'est produite lors de la création d\'un quizz',
        'question'  => 'Erreur lors de la création d\'un Question'
    ],
    'access'    => [
        'denied'    => 'Vous n\'avez pas l\'autorisation à faire cette demande. ',
        // 'forbidden' => 'Vous n\'avez pas le droit à faire cette demande. ',
    ],
];