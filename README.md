<!-- 

php artisan key:generate 
php artisan passport:keys   
php artisan passport:client --personal 
sudo chmod 755 -R storage 
php artisan storage:link

default user:
steve - capt

<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/PROJECT_NAME/public"
    ServerName localhost
 </VirtualHost>

https://gist.github.com/bradtraversy/7485f928e3e8f08ee6bccbe0a681a821?permalink_comment_id=4344553 


-->


## SQL SCRIPT

<!-- 

CREATE DATABASE `crms_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

CREATE TABLE `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `evidences` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `case_id` int NOT NULL DEFAULT '0',
  `description` varchar(350) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `criminal_drug_tests` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `case_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `suspect_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother_unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `operation_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `examiner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `investigator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incident_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `incident_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `speciment_count` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pph_count` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty_received` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gross_weight` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `classification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `delivered_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `received_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `evidence_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty_turned_over` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date_last_withdrawn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `court_branch` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `criminal_case_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty_remaining` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_no_movement` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requesting_party` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `dangerous_drug` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `dispositions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `files` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `case_id` int NOT NULL,
  `filename` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filetype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `firearminventory` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `case_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firearm_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cartridge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fcc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accessories` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fcaliber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fmake` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fmodel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ftype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fserial_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `requesting_party` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incident_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `incident_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suspect_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `victim_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remarks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encoder_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `firearms` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `case_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firearm_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cartridge` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fcc` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fb` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `accessories` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fcaliber` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fmake` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fmodel` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ftype` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fserial_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image_filename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `status` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `incidents_backup` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `division` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `case_nature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requesting_party` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `incident_title` longtext COLLATE utf8mb4_unicode_ci,
  `incident_description` longtext COLLATE utf8mb4_unicode_ci,
  `investigator` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disposition` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `incident_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `incident_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `victim` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `suspect` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chassis_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engine_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reported_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `encoder_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `client_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_access_tokens_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `client_id` bigint unsigned NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_auth_codes_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `oauth_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_clients_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `crms_db`.`oauth_clients`
(`id`,
`user_id`,
`name`,
`secret`,
`provider`,
`redirect`,
`personal_access_client`,
`password_client`,
`revoked`,
`created_at`,
`updated_at`)
VALUES
('1', NULL, 'Laravel Personal Access Client', 'SLPoGzgCzYJEHKRcHnEF9FDSlTKpQYamp5t3PkwF', NULL, 'http://localhost', '1', '0', '0', '2024-03-26 11:27:10', '2024-03-26 11:27:10');


CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `client_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `crms_db`.`oauth_personal_access_clients`
(`id`,
`client_id`,
`created_at`,
`updated_at`)
VALUES
('1', '1', '2024-03-26 11:27:10', '2024-03-26 11:27:10');


CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `requesters` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `suspects` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `case_id` int NOT NULL DEFAULT '0',
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `civil_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `victims` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `case_id` int NOT NULL DEFAULT '0',
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middlename` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `civil_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int DEFAULT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usertype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `division` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(80) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_password_unique` (`password`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `crms_db`.`users`
(`id`,
`firstname`,
`lastname`,
`username`,
`password`,
`usertype`,
`division`,
`api_token`,
`remember_token`,
`created_at`,
`updated_at`)
VALUES ('2', 'steve', 'rogers', 'steve', '$2y$10$9WnnyovH.lCt0TUQYA.2O.BlO9HjT6mUq95tWNlSJ.GRfSH7yqzF.', 'Administrator', '', NULL, NULL, '2024-03-26 11:18:45', '2024-03-26 11:18:45'); 

-->
