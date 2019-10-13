<?php

return [

    // General CP
    'dashboard' => 'Tableau de bord',
    'nav_dashboard' => 'Tableau de bord',
    'sneak_peek' => 'Aperçu en direct',
    'sneak_peeking' => 'Aperçu en direct',
    'view_site' => 'Voir le site',
    'visit_url' => 'Visitez l’URL',
    'search_for_anything' => 'Rechercher',

    // Pages
    'page' => 'Page',
    'pages' => 'Page|Pages',
    'nav_pages' => 'Pages',
    'create_page_button' => 'Créer une page',
    'edit_homepage_button' => 'Modifier la page d’accueil',
    'create_page' => 'Créer une nouvelle page',
    'page_created' => 'Page créée',
    'editing_page' => 'Modification de la page',
    'page_updated' => 'Page mise à jour',
    'home' => 'Accueil',
    'show_urls' => 'Afficher les URLs',
    'show_titles' => 'Afficher les titres',
    'choose_page_type' => 'Choisir le type de page',
    'parent_page' => 'Page parente',
    'pages_reordered' => 'Pages réordonnées avec succès.',

    // Collections
    'collections' => 'Collection|Collections',
    'nav_collections' => 'Collections',
    'manage_collections' => 'Gérer les collections',
    'create_collection_button' => 'Créer une collection',
    'create_collection' => 'Créer une nouvelle collection',
    'collection_created' => ':title créé',
    'editing_collection' => 'Modification de :collection',
    'collection_updated' => ':title mis à jour',
    'collections_empty' => 'Les collections contiennent des groupes d’articles similaires qui suivent tous le même schéma URL.',
    'collection_title_instructions' => 'Le nom associé à votre collection.',
    'collection_handle_instructions' => "La façon dont la collection sera référencée dans les paramètres et les modèles.",
    'collection_order_instructions' => "Définissez la méthode de tri par défaut pour les articles de cette collection.",
    'collection_fieldset_instructions' => "Le fieldset par défaut, sauf indication contraire.",
    'collection_template_instructions' => "Le template par défaut, sauf indication contraire.",
    'collection_route_instructions' => "La route contrôle le schéma URL que tous les articles de cette collection devront suivre.",
    'collection_does_not_exist' => 'La collection :collection n’existe pas.',
    
    // Entries
    'entry' => 'Article',
    'entries' => 'Article|Articles',
    'nav_entries' => 'Articles',
    'create_entry_button' => 'Créer un article',
    'create_entry' => 'Nouvel article dans :noun',
    'entry_created' => 'Article créé',
    'editing_entry' => 'Modification de l’article',
    'entry_updated' => 'Article mis à jour',
    'entries_empty_heading' => 'Articles :type',
    'entries_empty' => 'Les articles sont des bouts de contenu qui ont leur propre URL et qui sont souvent affichés dans des listes, comme les articles de blogs, les communiqués de presse et les évènements.',

    // Taxonomies
    'taxonomy' => 'Taxonomie',
    'taxonomies' => 'Taxonomie|Taxonomies',
    'nav_taxonomies' => 'Taxonomies',
    'create_taxonomy' => 'Créer une nouvelle taxonomie',
    'create_taxonomy_button' => 'Créer une taxonomie',
    'manage_taxonomies' => 'Gérer les taxonomies',
    'editing_taxonomy' => 'Modification de la taxonomie',
    'taxonomy_updated' => 'Taxonomie mise à jour',
    'taxonomy_created' => 'Taxonomie créée',
    'taxonomies_empty_heading' => 'Taxonomies',
    'taxonomies_empty' => 'Une taxonomie est un système de classification des données à partir d’un jeu de caractéristiques uniques, telles que la catégorie ou la couleur.',
    'taxonomies_title_instructions' => 'Le nom associé à votre taxonomie.',
    'taxonomies_slug_instructions' => 'La façon dont la taxonomie sera référencée dans les modèles.',
    'taxonomies_fieldset_instructions' => 'Les champs affichés lors de la modification des termes de cette taxonomie.',
    'taxonomies_route_instructions' => 'Les termes de cette taxonomie posséderont des URLs qui suivront ce schéma de route.',

    'taxonomy_terms' => 'Terme|Termes',
    'create_taxonomy_term_button' => 'Créer :term',
    'create_taxonomy_term' => 'Créer un(e) :term',
    'taxonomy_term_created' => 'Terme de taxonomie créé',
    'taxonomy_terms_empty_heading' => 'Termes dans :term',
    'taxonomy_terms_empty' => 'Alors que la taxonomie est le regroupement, un terme est véritablement l’étiquette qui s’applique à un bout de contenu. Par exemple, "Rouge" sera un terme dans la taxonomie "Couleurs".',

    // Globals
    'global' => 'Globale',
    'globals' => 'Globale|Globales',
    'nav_globals' => 'Globales',
    'global_sets' => 'Jeux de globales',
    'manage_global_sets' => 'Gérer les jeux de globales',
    'configuring_global_set' => 'Configuration du jeu de globales',
    'create_global_set_button' => 'Créer un jeu de globales',
    'create_global_set' => 'Créer un nouveau jeu de globales',
    'global_set_created' => ':type créé',
    'editing_globals' => 'Modification des globales',
    'globals_updated' => 'Globales mises à jour',
    'globals_empty_heading' => 'Jeux de globales',
    'globals_empty' => 'Les jeux de globales sont des groupes de variables qui représentent du contenu qui n’est pas lié à une URL, tel que le nom de la société, une adresse, les coordonnées de contact. Les globales peuvent également correspondre à des paramètres de niveau Modèle, comme des limites, des décalages et des commutateurs afficher/masquer.',
    'general_globals' => 'Général',
    'globals_title_instructions' => "Le nom associé à votre jeu de globales. Par exemple : Contenu Pied de Page ou encore Paramètres Barre Latérale.",
    'globals_slug_instructions' => "La façon dont le jeu de globales sera référencé dans les modèles. Par exemple : <code>contenu_du_pied_de_page</code> ou <code>parametres_barre_laterale</code>.",
    'globals_fieldset_instructions' => "Choisissez le groupe de champs à utiliser pour gérer ce fieldset.",

    // Assets
    'assets' => 'Ressource|Ressources',
    'nav_assets' => 'Ressources',
    'new_asset' => 'Nouvelle ressource',
    'add_asset' => 'Ajouter une ressource',
    'browse_assets' => 'Parcourir les ressources',
    'browsing_assets' => 'Consultation des ressources',
    'creating_asset' => 'Création ressource',
    'asset_created' => 'Ressource créée',
    'editing_asset' => 'Modification ressource',
    'asset_updated' => 'Ressource modifiée',
    'drop_to_upload' => 'Déposer pour télécharger',
		'upload_asset' => 'Télécharger ressource',
    'sync_assets' => 'Synchroniser ressources',
    'syncing_assets' => 'Synchro des ressources',		
    'new_folder' => 'Nouveau répertoire',
    'upload' => 'Télécharger',
    'uploads' => 'Téléchargement|Téléchargements',
    'filename' => 'Nom du fichier',
    'filesize' => 'Taille',
    'date_modified' => 'Date de modification',
    'parent_folder' => 'Répertoire parent',
    'containers' => 'Emplacements',
    'asset_folder_empty_heading' => 'Répertoire vide',
    'asset_folder_empty' => 'Téléchargez des fichiers en les glissant-déposant dans cette zone.',
    'focal_point' => 'Point focal',
    'focal_point_label' => 'Cliquez sur l’image pour ajuster le point focal',
    'focal_point_instructions' => 'Le point focal est utilisé lors du rognage de telle sorte que la partie la plus importante de l’image ne disparaisse pas.',
    'or_drag_and_drop_files' => 'ou glissez et déposez les fichiers.',
    'no_asset_container_specified' => 'Aucun emplacement de ressources indiqué.',
    'rename_file' => 'Renommer le fichier',
    'rename_file_warning' => 'Renommer un fichier ne mettra pas à jour les liens qui pointent vers lui, ce qui _peut_ entraîner l’apparition de liens brisés sur votre site.',
    'move_file' => 'Déplacer le fichier',
    'move_file_warning' => 'Déplacer un fichier ne mettra pas à jour les liens qui y font référence, ce qui _pourrait_ casser des liens sur votre site.',
    'dimensions' => 'Dimensions',
    'last_modified' => 'Dernière modification',
    'url_resolves_to' => 'L’URL renvoie : :path',
    
        
    // Folder
    'folder_title_instructions' => 'Le nom associé à ce répertoire pour l’affichage.',
    'folder_directory_instructions' => 'Le nom du répertoire dans l’arborescence des fichiers.',

    // Asset Containers
    'asset_containers' => 'Emplacement de ressources|Emplacements de ressources',
    'manage_asset_containers' => 'Gérer les emplacements de ressources',
    'new_asset_container' => 'Nouvel emplacement de ressources',
    'creating_asset_container' => 'Création d’un emplacement de ressources',
    'asset_container_created' => 'Emplacement de ressources créé',
    'editing_asset_container' => 'Modification d’un emplacement de ressources',
    'asset_container_updated' => 'Emplacement de ressources mis à jour',
    'asset_containers_empty_heading' => 'Aucun emplacement de ressources n’a été configuré.',
    'asset_containers_empty' => 'Chaque emplacement de ressources peut être un répertoire de votre système de fichiers, soit publiquement accessible, soit protégé des regards indiscrets.',
    'select_asset_container' => 'Sélectionner un emplacement de ressources.',

    // Asset Folders
    'create_folder' => 'Créer un répertoire',
    'edit_folder' => 'Modifier le répertoire',
    'asset_name_instructions' => 'Le nom associé à cet emplacement pour l’affichage.',
    'asset_handle_instructions' => 'Une chaîne unique que vous pouvez utiliser pour faire référence à votre emplacement. <b>NE peut PLUS être modifié après création.</b>',
    'asset_fieldset_instructions' => 'Le fieldset utilisé par les ressources placées dans cet emplacement.',
    'asset_driver_instructions' => 'Où les ressources seront-elles stockées et appelées ?',
    'asset_path_instructions' => 'Emplacement du répertoire dans le système de fichiers.',
    'asset_url_instructions' => 'URL du répertoire.',
    'asset_folder_basename' => 'Nom du répertoire',

    // Fields Builder
    'add_field' => 'Ajouter un champ',
    'quick_add' => 'Ajout rapide',
    'toggle_fields' => 'Basculer les champs',
    'sidebar' => 'Barre latérale',
    'meta' => 'Meta',
    'all' => 'Tous',
    
    // Set Builder
    'add_set' => 'Ajouter un jeu',
    'edit_set' => 'Modifier le jeu',
    'delete_set' => 'Supprimer le jeu',
    'toggle_sets' => 'Basculer les jeux',
    'set_fields_instructions' => "Choisissez les champs de ce jeu",

    // Amazon S3
    'access_key_id' => 'Access Key ID',
    'secret_access_key' => 'Secret Access Key',

    // Users
    'user' => 'Utilisateur',
    'users' => 'Utilisateur|Utilisateurs',
    'nav_users' => 'Utilisateurs',
    'manage_users' => 'Gérer les utilisateurs',
    'create_user_button' => 'Créer un utilisateur',
    'create_user' => 'Créer un utilisateur',
    'create_a_user' => 'Créer un utilisateur',
    'user_created' => 'Utilisateur créé',
    'editing_user' => 'Modification de l’utilisateur',
    'user_updated' => 'Utilisateur mis à  jour',
    'reset_password' => 'Réinitialiser le mot de passe',
    'choose_new_password' => 'Choisir un nouveau mot de passe',
    'new_password' => 'Nouveau mot de passe',
    'change_password' => 'Modifier le mot de passe',
    'send_email' => 'Envoyer l’email',
    'email_sent' => 'Email envoyé',
    'send_activation_email' => 'Envoyer l’email d’activation',
    'send_password_reset_email' => 'Envoyer l’email de réinitialisation du mot de passe',
    'password_reset_email_not_sent' => 'Email non envoyé. Merci de vérifier les journaux système.',
    'copy_activation_link' => 'Copier le lien d’activation',
    'copy_password_reset_link' => 'Copier le lien de réinitialisation du mot de passe',
    'copy_password_reset_link_failed' => 'Un problème est survenu lors de la génération du lien. Merci de vérifier les journaux système.',
    'password_reset_sent' => 'L’email de réinitialisation du mot de passe a été envoyé',
    'account_activated' => 'Votre compte a bien été activé',
    'password_reset_success' => 'Votre mot de passe a bien été réinitialisé',
    'activate_account' => 'Activer votre compte',
    'account' => 'Compte',
    'password' => 'Mot de passe',
    'password_for' => 'Mot de passe pour :username',
    'my_account' => 'Mon compte',
    'profile' => 'Profil',
    'logout' => 'Déconnexion',
    'sign_out' => 'Déconnexion',
    'user_options' => 'Options utilisateur',
    'user_bio_instructions' => 'Quelques infos à propos de vous, si vous le voulez bien.',
    'user_account_created' => 'Un compte utilisateur a été créé.',
    'forgot_password' => 'Mot de passe oublié ?',
    'invalid_user' => 'Utilisateur invalide',
    'invalid_code' => 'Code invalide',
    'invalid_creds' => 'Identifiants invalides',
    'go_back' => 'Revenir en arrière',

    // Password Reset
    'reset_code_missing' => 'Aucun code n’a été précisé.',
    'reset_code_invalid' => 'Code invalide',

    // Roles
    'roles' => 'Rôle|Rôles',
    'nav_user-roles' => 'Rôles utilisateur',
    'create_role_button' => 'Créer un rôle',
    'creating_role' => 'Créer un rôle',
    'role_created' => 'Rôle créé',
    'editing_role' => 'Modification du rôle',
    'role_updated' => 'Rôle mis à jour',
    'roles_empty_heading' => 'Rôles utilisateur',
    'roles_empty' => 'Les rôles utilisateur vous permettent de regrouper un certain nombre d’autorisations sous une seule étiquette. Par exemple : éditeur, publicateur, administrateur.',

    // Permissions
    'permissions' => 'Autorisation|Autorisations',
    'access' => 'Accès',
    'checking_folder_permissions' => 'Vérification des autorisations, merci de patienter...',
    'folders_permission_valid' => 'Les autorisations de fichiers et répertoires semblent être correctes !',
    'folders_unwritable' => 'Les chemins de répertoires suivants doivent être inscriptibles :',

    // Error Pages
    'error' => 'Erreur',
    'permission_denied' => 'Autorisation refusée',
    'permission_denied_instructions' => "Vous n’avez pas les droits suffisants pour accéder à cette page.",
    'page_not_found' => 'Page non trouvée',
    'page_not_found_instructions' => 'La page demandée n’existe pas.',
    'session_expired' => 'Votre session a expiré',
    'stache_building' => 'Le cache est en cours de mise à jour. Merci de patienter puis réessayez.',
    'session_expired_error' => 'Votre session a expiré. Connectez-vous pour reprendre là où vous en étiez.',
    'publish_error' => 'Un problème est survenu lors de l’enregistrement de vos données. Retrouvez plus de détails dans les journaux systèmes.',
    'error_fetching_data' => 'un problème est survenu lors de la récupération de vos données. Retrouvez plus de détails dans les journaux systèmes.',

    // User Groups
    'usergroups' => 'Groupe d’utilisateurs|Groupes d’utilisateurs',
    'user_groups' => 'Groupes d’utilisateurs',
    'nav_user-groups' => 'Groupes d’utilisateurs',
    'create_usergroup_button' => 'Créer un groupe',
    'creating_usergroup' => 'Création d’un groupe d’utilisateurs',
    'usergroup_created' => 'Groupe d’utilisateurs créé',
    'editing_usergroup' => 'Modification d’un groupe d’utilisateurs',
    'usergroup_updated' => 'Groupe d’utilisateurs mis à jour',
    'usergroups_empty_heading' => 'Groupes d’utilisateurs',
    'usergroups_empty' => 'Les groupes d’utilisateurs vous permettent d’associer des utilisateurs et des rôles dans un seul groupe.',

    // Settings
    'settings' => 'Paramètre|Paramètres',
    'nav_settings' => 'Paramètres',
    'settings_cp' => 'Panneau de contrôle',
    'settings_routes' => 'Routes',
    'settings_search' => 'Recherche',
    'settings_system' => 'Système',
    'settings_assets' => 'Ressources',
    'settings_caching' => 'Caches',
    'settings_debug' => 'Débogage',
    'settings_email' => 'Email',
    'settings_theming' => 'Thème',
    'settings_users' => 'Utilisateurs',
    'settings_updated' => 'Paramètres enregistrés.',
    'settings_updated_and_indexed' => 'Paramètres enregistrés et index de recherche mis à jour.',
    'settings_locales_instructions' => "Créez une langue pour chaque traduction dont vous aurez besoin. Vous pouvez passer cette étape pour le moment et y revenir plus tard si vous le préférez.",
    'settings_locales_index_php_warning' => "Vous devrez mettre la variable <code>\$locale</code> à <code>:locale</code> dans votre fichier <code>index.php</code>.",
    'settings_debug_mode_instructions' => "L’activation du mode débogage affichera toutes les erreurs à l’écran. C’est un super outil quand le site est en développement, mais n’oubliez pas de le désactiver quand il est en production !",
    
    'shorthand' => 'Raccourci',
    'shorthand_instructions' => 'Le code langue sur 2 caractères.<br> Exemple : `en`, `fr`.',
    'add_locale' => 'Ajouter une langue',
    'full_locale' => 'Code langue complet',
    'full_locale_instructions' => 'Utilisé par PHP pour la localisation des dates.<br>Exemple : `en_US`, `fr_CA`.',
    'locale_name_instructions' => 'Utilisé pour l’affichage.<br> Exemple : `Américain`, `Français`.',
    'locale_url_instructions' => 'Exemple : `http://example.com/fr/`',



    // Addons
    'addons' => 'Addon|Addons',
    'manage_addons' => 'Gérer les addons',
    'nav_addons' => 'Addons',
    'addons_empty_heading' => 'Il n’y a aucun addon',
    'addons_empty' => 'Les addons étendent les fonctionnalités de Statamic.',
  
    // Fieldsets & Fields
    'fieldset' => 'Fieldset',
    'fieldsets' => 'Fieldset|Fieldsets',
    'nav_fieldsets' => 'Fieldsets',
    'create_fieldset_button' => 'Créer un fieldset',
    'create_fieldset' => 'Créer un fieldset',
    'fieldset_created' => 'Fieldset créé',
    'editing_fieldset' => 'Modification du fieldset',
    'fieldset_updated' => 'Fieldset mis à jour',
    'fieldsets_empty' => 'Les fieldsets vous permettent de créer et de gérer des groupes réutilisables de types de champs qui en retour gèrent votre contenu. C’est ainsi que la mise en forme du contenu se passe.',
    'fieldset_title_instructions' => 'Le nom d’affichage, habituellement un nom commun singulier.',
    'fieldset_handle_instructions' => "Utilisé dans les paramètres et les modèles.",
    'fieldset_create_title_instructions' => "Optionnel, affiché lors de la création de nouveau contenu.",
    'fieldset_hide_instructions' => "Masquer ce fieldset dans les dialogues de sélection ?",
    'fieldset_fields_instructions' => 'Affectez et personnalisez les champs et les types de champs dans ce fieldset.',
    'fieldset_taxonomies_instructions' => 'Affichez (ou masquez) et paramétrez les taxonomies proposées dans ce fieldset.',
    'create_title' => 'Titre pour création',
    'display_name' => "Nom affiché",
    'display_name_instructions' => "L’étiquette de champ affichée dans le panneau de contrôle.",
    'display_text' => 'Texte affiché',
    'display_text_instructions' => "L’étiquette de champ",
    'field_name' => 'Nom du champ',
    'field_name_instructions' => 'La variable associée au champ',
    'field_required' => 'Obligatoire',
    'field_required_instructions' => 'Ce champ est obligatoire',
    'field_variable' => "Variable de champ",
    'field_variable_instructions' => "La variable de modèle du champ.",
    'field_instructions_instructions' => "Le Markdown basique est autorisé. Encouragé, même.",
    'field_width_instructions' => 'La taille du champ dans l’écran de disposition du fieldset.',
    'validation_rules' => "Règles de validation",
    'validation_instructions' => "Possibilité de saisir toutes",
    'validation_instructions_link_text' => 'règles de validation Laravel',
    'validation_rules_instructions' => 'Entrez une chaîne de <a href=":url" target="_blank">règles de validation</a> délimitées par un caractère pipe.',
    'default_value' => 'Valeur par défaut',
    'field_default_value_instructions' => 'Entrez la valeur par défaut pour les champs de type chaîne de caractères.',
    'edit_field' => 'Modifier le champ',
    'choose_field_to_edit' => "Choisissez un champ pour modifier ses paramètres.",
    'select_fieldtype' => 'Choisissez le type de champ',
    'field_added' => "Champ :fieldtype ajouté.",
    'set_added' => "Jeu ajouté.",
    'append_taxonomies' => 'Ajouter les taxonomies aux articles',
    'append_taxonomies_instructions' => "Lors de l’utilisation de ce fieldset pour un article, les taxonomies non définies dans le fieldset seront toutes automatiquement ajoutées à la barre latérale.",
    'type_url' => 'Entrer une URL',
    'type_url_or_search' => 'Entrer une URL ou rechercher un élément',

    'sections' => 'Section|Sections',
    'section_label' => "Etiquette de section",
    'section_handle' => "Identifiant de section",
    'section_handle_tip' => "Truc: vous pouvez nommer votre section 'sidebar' pour la transformer en une barre latérale.",
    'sections_and_fields' => "Sections & Champs",
    
    'display_conditions' => 'Conditions d’affichage',
    'display_conditions_instructions' => 'Paramétrez "quand" ce champ devra être affiché.',
    'always_show' => 'Toujours l’afficher',
    'show_when' => 'L’afficher quand...',
    'hide_when' => 'Le masquer quand...',
    'standard' => 'Standard',
    'custom' => 'Personnalisée',
    'display_standard_instructions' => 'Choisissez une combinaison de champs et de valeurs correspondantes.',
    'display_custom_instructions' => 'Saisissez le nom de votre méthode conditionnelle Javascript personnalisée.',
    
    'basics' => 'Bases',
    'visibility' => 'Visibilité',
    'extras' => 'Extras',

    'fieldtype_category_text' => 'Texte',
    'fieldtype_category_media' => 'Media',
    'fieldtype_category_pickable' => 'Cliquable',
    'fieldtype_category_structured' => 'Structuré',
    'fieldtype_category_relationship' => 'Relations',
    'fieldtype_category_special' => 'Spécial',
    'fieldtype_category_system' => 'Système',

    // Forms
    'form' => 'Formulaire',
    'forms' => 'Formulaire|Formulaires',
    'nav_forms' => 'Formulaires',
    'forms_empty' => 'Les formulaires permettent de collecter, afficher et rapporter les réponses soumises par les utilisateurs.',
    'create_form' => 'Créer un formulaire',
    'form_updated' => 'Formulaire mis à jour',
    'form_created' => 'Formulaire créé',
    'form_submission_deleted' => 'Soumission supprimée.',
    'submissions' => 'Soumission|Soumissions',
    'response' => 'réponse|réponses',
    'empty_responses' => 'Ce formulaire est en attente de réponses.',
    'create_formset' => 'Créer un Formset',
    'creating_formset' => 'Création du Formset',
    'editing_formset' => 'Mise à jour du Formset',
    'import' => 'Importer',
    'import_data' => 'Importer des données',
    'import_link_text' => 'Découvrez l’import au format JSON',
    'export' => 'Exporter',
    'export_csv' => 'Exporter en CSV',
    'export_json' => 'Exporter en JSON',
    
    // Formset Builder
    'formset_title_instructions' => "Le nom associé à votre formset.",
    'formset_slug_instructions' => 'La façon dont le formset sera référencé.',    
    'formset_metrics_instructions' => 'Précisez les métriques que vous souhaitez voir affichées.',
    'formset_metrics_grid_add_row' => 'Métrique',
    'formset_metrics_grid_type_field' => 'Type de métrique',
    'formset_metrics_grid_type_option_sum' => 'Somme',
    'formset_metrics_grid_type_option_total' => 'Total',
    'formset_metrics_grid_type_option_average' => 'Moyenne',
    'formset_metrics_grid_label_field' => 'Etiquette',
    'formset_metrics_grid_params_field' => 'Paramètres',
    'formset_emails_instructions' => 'Ajouter tous les emails que vous souhaitez envoyer lors d’une soumission.',
    'formset_emails_grid_add_row' => 'Email',
    'formset_emails_grid_to_field' => 'Destinataire (À)',
    'formset_emails_grid_to_instructions' => 'Adresse email du destinataire.',
    'formset_emails_grid_from_field' => 'Emetteur (De)',
    'formset_emails_grid_from_instructions' => 'Laissez à blanc pour utiliser la valeur par défaut du site.',
    'formset_emails_grid_reply_to_field' => 'Répondre à',
    'formset_emails_grid_subject_field' => 'Objet',
    'formset_emails_grid_subject_instructions' => 'Objet de l’email.',
    'formset_emails_grid_template_field' => 'Modèle',
    'formset_emails_grid_template_instructions' => 'Laissez à blanc pour utiliser un email automagique.',
    'formset_honeypot_field' => 'Champ Pot de Miel',
    'formset_honeypot_instructions' => 'Le nom du champ à utiliser pour le pot de miel.',
    'formset_store_field' => 'Conserver les soumissions',
    'formset_store_instructions' => 'Détermine si les soumissions de formulaires doivent être conservées ou non. Utile si vous souhaitez seulement recevoir des notifications par email.',
    'formset_honeypot_link' => "Qu’est-ce qu'un pot de miel ?",
    'formset_fields_instructions' => 'Choisissez et personnalisez les champs de ce formulaire.',

    // Updater
    'nav_updater' => 'Mise à Jour',
    'updates'     => 'Mises à jour',
    'system_updates' => 'Mises à Jour Système',
    'upgrade_to_latest' => 'Téléchargez la dernière MAJ',
    'upgrade_to_version' => 'Mise à jour vers :version',
    'downgrade_to_version' => 'Revenir vers :version',
    'update_available' => 'MàJ disponible',
    'update_complete' => 'Mise à jour terminée.',
    'up_to_date' => 'Statamic est à jour !',
    'on_latest' => 'Vous utilisez la dernière version de Statamic',
    'current_version' => 'Version actuelle',
    'released_on_date' => 'Publiée le :date',
    'updates_available' => 'Une mise à jour est disponible|Il y a :updates mises à jour disponibles',
    'backup_failed' => 'La sauvegarde a échoué',
    'backup' => 'Sauvegarde',
    'backed_up' => 'Sauvegarde effectuée',
    'backing_up' => 'Sauvegarde en cours...',
    'backing_up_instructions' => "Nous zippons votre répertoire <code>statamic</code>, au cas où vous auriez besoin de revenir en arrière.",
    'backup_reminder' => 'Process sécurisé ! Nous sauvegardons tout lorsque nous réalisons la mise à jour, afin que vous puissiez toujours retrouver la version précédente dans <code>local/temp</code> si jamais quelque chose se passait mal.',
    'couldnt_fetch_updates' => 'Un problème est survenu en tentant de récupérer les mises à jour',

    // Download
    'downloading' => 'Téléchargement en cours...',
    'downloaded' => 'Téléchargement effectué.',
    'download_failed' => 'Le téléchargement a échoué',
    'downloading_latest' => 'Nous récupérons pour vous la toute dernière et meilleure version de Statamic.',
    'downloading_version' => 'Téléchargement de v:version',

    // Installation
    'installation' => 'Installation',
    'installation_has_failed' => 'L’installation a échoué',
    'preparing_installation' => 'L’installation débutera dès la fin des processus de sauvegarde et de téléchargement.',
    'now_running' => "Votre site fonctionne désormais sous Statamic v:version",
    'statamic_ready' => 'Statamic est prêt et il vous attend.',
    'delete_installer' => 'Merci de supprimer le fichier <code>installer.php</code>.',
    'installer_deleted' => 'Je l’ai bien supprimé. Re-dirigez moi vers le panneau de contrôle &rarr;',

    // Archive
    'unzipping_files' => 'Dézippage des fichiers...',
    'unzipping_files_instructions' => 'Déplacement des fichiers du zip Statamic vers un emplacement provisoire.',
    'unzipped_files' => 'Fichiers dézippés.',

    // Dependencies
    'installing_dependencies' => 'Installation des dépendances...',
    'installing_dependencies_instructions' => 'Tous les addons ayant des dépendances doivent être récupérés. Cela peut prendre quelques instants.',
    'dependencies_installed' => 'Dépendances installées.',

    // Swap Release
    'swapping_files' => 'Remplacement des fichiers...',
    'swapping_files_instructions' => 'Vos vieux fichiers Statamic sont en cours de remplacement par d’autres, tous neufs !',
    'files_swapped' => 'Fichiers remplacés.',

    // Clean Up
    'cleaning_up' => 'Nettoyage...',
    'cleaning_up_instructions' => "Nous supprimons les fichiers temporaires créés pendant la mise à jour.",
    
    // Importers
    'nav_import' => 'Import',
    'site_url' => 'Site URL',
    'import_from_version' => 'Importez du contenu venant de Statamic :version',
    'import_complete' => 'Import terminé',
    'import_has_completed' => 'L’import est terminé.',
    'import_summary' => 'Synthèse de l’import',
    'import_site_url_instructions' => 'Entrez l’URL du site web existant que vous souhaitez importer.',
    
    'duplicate_item_warning'  => "Il y a un doublon.|Il y a :count doublons.",
    'uncheck_duplicates' => 'Décocher les doublons',

    'from_json' => 'A partir de JSON',
    'json_file' => 'Fichier JSON',
    'upload_json_file' => 'Télécharger un fichier JSON',

    // Export
    'export_failed' => 'L’export a échoué',
    'export_export_failed_with_error' => 'L’export a échoué avec l’erreur :',
    
    'manage_widgets' => 'Gérer les Widgets',
    
    // Things
    'thing_created' => ':thing créé.',
    'thing_updated' => ':thing mis à jour.',
    'thing_deleted' => ':thing supprimé.',
    'thing_configure' => 'Configurer :thing',
    'thing_saved' => ':thing enregistré.',
    'thing_editing' => 'Modification de :thing',
    
    'saved_success' => 'Enregistré',

    // Statuses
    'statuses' => 'Statut|Statuts',
    'status_pending' => 'En attente',
    'status_active' => 'Actif',
    'published' => 'Publié',
    'draft'	=>	'Brouillon',
    
    // Shortcuts
    'keyboard_shortcuts' => 'Raccourcis clavier',
    'show_keyboard_shortcuts' => 'Afficher les raccourcis clavier',

    // License
		'license_keys' => 'Clef de licence',
    'trial_mode' => 'Mode Essai',
    'trial_mode_missing_license_keys' => 'La clef de licence doit être entrée avant de publier votre site "Live".',
    'trial_mode_invalid_license_keys' => 'Vous avez entré une clef de licence invalide !',
    'trial_mode_license_keys_for_domains' => 'Clef de licence valide renseignée pour le domaine :domains',
    'invalid_license_keys' => 'Merci d’acheter puis de renseigner votre clef de licence, sinon vous violez l’Accord de Licence de ce logiciel.',
    'license_keys_incorrect_domain' => 'Clef de licence entrée pour un domaine incorrect. Merci de corriger, sinon vous violez l’Accord de Licence de ce logiciel.',
    'checking_license_key' => 'Vérification de votre clef de licence, merci de patienter...',
    'license_missing' => 'Clef de licence absente.',
    'license_valid' => 'Votre clef de licence est valide.',
    'license_invalid' => 'Cette clef est invalide !',
    'license_wrong_domain' => 'Licence affectée au domaine :domain',
    'license_no_domain' => 'Cette licence n’est associée à aucun domaine.',
    'license_key_instructions' => 'Merci de saisir votre clef de licence. Vous pouvez trouver la vôtre dans votre <a href=":licenses">Compte Statamic</a> ou vous pouvez <a href=":buy_license">acheter une nouvelle licence</a> si besoin.',
    'buy_now' => 'Acheter Maintenant',
    'license_statamic_link' => 'Acheter les licences et gérer les domaines sur statamic.com',

    'continue_in_trial_mode' => 'Continuer en mode essai',
    'unlicensed' => 'Pas de licence valide !',
    'unlicensed_message' => 'Merci d’acheter puis de renseigner votre clef de licence, sinon vous violez l’Accord de Licence de ce logiciel.',
    'on_trial_with_invalid_license' => 'Vous êtes actuellement en mode essai, mais votre licence est invalide.',
    'on_trial_without_license' => 'Vous êtes actuellement en mode essai. Rappelez-vous d’ajouter une clef de licence valide avant de passer sur un domaine public.',
    'invalid_statamic_license' => 'Votre licence Statamic est invalide.',
    'couldnt_connect_to_outpost' => 'Un problème est survenu en tentant de prendre contact avec l’Outpost Statamic !',
    
    // Verbs and helpers
    'actions' => 'Action|Actions',
    'add' => 'Ajouter',
    'edit' => 'Modifier',
    'editing' => 'Modification',
    'view' => 'Voir',
    'remove' => 'Enlever',
    'update' => 'Mettre à jour',
    'delete' => 'Supprimer',
    'uncheck_all' => 'Tout décocher',
    'duplicate' => 'Dupliquer',
    'manage' => 'Gérer',
    'create' => 'Créer',
    'reorder' => 'Réordonner',
    'submit' => 'Soumettre',
    'save' => 'Enregistrer',
    'saving' => 'Enregistrement',
    'save_changes' => 'Enregistrer les modifications',
    'save_and_continue' => "Enregistrer & continuer",
    'save_and_another' => "Enregistrer & en ajouter un",
    'are_you_sure' => 'Êtes-vous sûr ?',
    'yes_im_sure' => 'Oui, je suis sûr !',
    'refresh' => 'Rafraîchir',
    'cancel' => 'Annuler',
    'loading' => 'Chargement',
    'expand' => 'Développer',
    'collapse' => 'Réduire',
    'show' => 'Afficher',
    'hide' => 'Masquer',
    'move' => 'Déplacer',
    'edit_layout' => 'Modifier la mise en page',
    'save_layout' => 'Enregistrer la mise en page',
    'save_order' => 'Enregistrer l’ordre',
    'toggle_dropdown' => 'Inverser le menu déroulant',    
    'confirm_delete_items' => 'Cet élément sera supprimé|Les éléments sélectionnés seront supprimés',
    'confirm_delete_page' => ' sera supprimée ainsi que toutes ses pages enfants',
    'confirm_delete_folder' => 'Ce répertoire sera supprimé',
    'configure' => 'Configurer',
    'browse' => 'Parcourir',
    'select' => 'Sélectionner',
    'localizing' => 'Traduire',
    'add_row' => 'Ajouter une ligne',
    'localizable' => 'Localisable',
    'please_wait' => 'Merci de patienter...',
    'exporting' => 'Export en cours...',
    'importing' => 'Import en cours...',
    'return_to_dashboard' => 'Retourner au tableau de bord',
    'publish_content' => 'Publiez du contenu',
    'close_this_window' => 'Fermez cette fenêtre',
    'toggle_navigation' => 'Basculer la navigation',
    'logging_in' => 'Connexion en cours...',
    'logged_in' => 'Connecté',
    'logged_in_taking_you_to_cp' => 'Connecté ! Redirection vers le panneau de contrôle...',
    'write' => 'Ecrire',
    'preview' => 'Prévisualiser',
    'collapse_all' => 'Tout réduire',
    'expand_all' => 'Tout déplier',
    'please_select' => 'Merci de sélectionner',
    'selected' => 'sélectionné',
    'add_another_item' => 'Ajouter un autre élément',
    'show_drafts' => 'Afficher les brouillons',
    'hide_drafts' => 'Masquer les brouillons',
    'count' => 'Comptage',
    'reset' => 'Réinitialiser',
    'installed' => 'Installé',
    'add_condition' => 'Ajouter une condition',
    'open' => 'Ouvrir',
    'download' => 'Télécharger',
    'locale' => 'Langue',
    'hidden' => 'Masqué',

    // Nouns and whatnot
    'fields' => 'Champ|Champs',
    'locales' => 'Langue|Langues',
    'keys' => 'Clef|Clefs',
    'values' => 'Valeur|Valeurs',
    'names' => 'Nom|Noms',
    'usernames' => 'Identifiant|Identifiants',
    'emails' => 'Email|Emails',
    'passwords' => 'Mot de passe|Mots de passe',
    'confirm_password' => 'Confirmer le mot de passe',
    'remember_me' => 'Se souvenir de moi',
    'title' => 'Titre',
    'titles' => 'Titre|Titres',
    'slug' => 'Identificateur',
    'slugs' => 'Identificateur|Identificateurs',
    'rows' => 'Ligne|Lignes',
    'columns' => 'Colonne|Colonnes',
    'folders' => 'Répertoire|Répertoires',
    'date' => 'Date',
    'dates' => 'Date|Dates',
    'date_and_time' => 'Date et Heure',
    'datestring' => 'Date',
    'publish_date' => 'Date de publication',
    'items' => 'Elément|Eléments',
    'add_date' => 'Ajouter Date',
    'add_time' => 'Ajouter Heure',
    'login' => 'Connexion',
    'login_with' => 'Connexion avec :provider',
    'login_to_continue' => "Connectez-vous pour continuer",
    'new' => 'Nouvelle',
    'or' => 'ou',
    'order' => 'Ordre',
    'one_quarter' => '1/4 - Un quart',
    'three_quarters' => '3/4 - Trois quarts',
    'one_third' => '1/3 - Un tiers',
    'two_thirds' => '2/3 - Deux tiers',
    'half' => '50%',
    'full_width' => '100%',
    'width' => 'Largeur',
    'version' => 'Version',
    'versions' => 'Version|Versions',
    'developer' => 'Developpeur',
    'developers' => 'Developpeur|Developpeurs',
    'developer_mode' => 'Mode Développeur',
    'description' => 'Description',
    'descriptions' => 'Description|Descriptions',
    'name' => 'Nom',
    'username' => 'Identifiant',
    'email' =>'Email',
    'done' => 'Terminé',
    'close' => 'Fermer',
    'templates' => 'Modèle|Modèles',
    'authors' => 'Auteur|Auteurs',
    'installer' => 'Installateur',
    'search' => 'Rechercher',
    'search_results' => 'Résultats de la recherche',
    'no_search_results' => 'Aucun résultat',
    'instructions' => 'Instructions',
    'handle' => 'Identifiant',
    'label' => 'Etiquette',
    'type' => 'Type',
    'route' => 'Route',
    'terms' => 'Terme|Termes',
    'progress' => 'Progrès',
    'variables' => 'Variable|Variables',
    'license_key' => 'Clef de licence',
    'driver' => 'Driver',
    'path' => 'Chemin',
    'url' => 'URL',
    'valid_url' => 'URL valide',
    'invalid_url' => 'URL non valide',
    'bucket' => 'Conteneur',
    'region' => 'Région',
    'metrics' => 'Métrique|Métriques',
    'whats_this' => "Qu’est-ce que c’est ?",
    'first_name' => 'Prénom',
    'last_name' => 'Nom',
    'bio' => 'Biographie',
    'markdown_cheatsheet' => 'Trucs et Astuces Markdown',
    'locales_and_urls' => 'Langues et URLs',
    'debug_mode' => 'Mode Débogage',
    'defined_in_environment' => 'Géré en externe par votre environnement.',
    'be_right_back' => 'Revenez vite.',
		'size' => 'Taille',
		'read_only' => "Lecture Seule",
		'read_only_mode' => 'Mode Lecture Seule',
    'next_step' => 'Etape suivante',
    'invalid_creds' => 'Ces identifiants sont incorrects',
		
    'nav_content' => 'Contenu',
    'nav_tools' => 'Outils',
    'nav_configure' => 'Configurer',
    'nav_addons' => 'Addons',
    'nav_fieldsets' => 'Fieldsets',
    'nav_settings' => 'Paramètres',
    'nav_users' => 'Utilisateurs',
    'nav_resolve_duplicate_ids' => 'IDs en doublon',
    
    'mount_collection' => 'Monter la Collection',
    'unmount_collection' => 'Démonter la Collection',
    
    // Validation
    'handle_exists' => 'Un emplacement possédant cet identifiant existe déjà.',
    
    // Duplicate ID Manager
    'duplicate_id_title' => 'IDs en doublon',
    'no_duplicate_ids' => 'Aucune ID en doublon n’a été détectée.',
    'generate_new_id' => 'Générer une nouvelle ID.',
    
    // Path
    'path_resolves_to'    => 'Le chemin d’accès renvoie : :path',
    'path_exists'         => 'Le chemin d’accès existe.',
    'path_does_not_exist' => 'Le chemin d’accès n’existe pas.',
    
    // Bard
    'heading_1'          => 'Balise titre H1',
    'heading_2'          => 'Balise titre H2',
    'heading_3'          => 'Balise titre H3',
    'heading_4'          => 'Balise titre H4',
    'heading_5'          => 'Balise titre H5',
    'heading_6'          => 'Balise titre H6',
    'bold'               => 'Gras',
    'italic'             => 'Italique',
    'underline'          => 'Souligné',
    'strikethrough'      => 'Barré',
    'remove_formatting'  => 'Supprimer le formatage',
    'unordered_list'     => 'Liste non ordonnée',
    'ordered_list'       => 'Liste ordonnée',
    'blockquote'         => 'Citation',
    'superscript'        => 'Exposant',
    'subscript'          => 'Indice',
    'add_link'           => 'Ajouter lien',
    'remove_link'        => 'Supprimer lien',
    'link_to_asset'      => 'Lien vers ressource',
    'inline_code'        => 'Code en ligne',
    'edit_link'          => 'Modifier lien',
    'open_in_new_window' => 'Ouvrir dans une nouvelle fenêtre',
];
