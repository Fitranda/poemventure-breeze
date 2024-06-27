/*
SQLyog Ultimate v13.1.1 (64 bit)
MySQL - 8.0.30 : Database - poemventure
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`poemventure` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `poemventure`;

/*Table structure for table `cache` */

DROP TABLE IF EXISTS `cache`;

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cache` */

insert  into `cache`(`key`,`value`,`expiration`) values 
('guru@gmail.com|127.0.0.1','i:3;',1719490624),
('guru@gmail.com|127.0.0.1:timer','i:1719490624;',1719490624);

/*Table structure for table `cache_locks` */

DROP TABLE IF EXISTS `cache_locks`;

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `cache_locks` */

/*Table structure for table `failed_jobs` */

DROP TABLE IF EXISTS `failed_jobs`;

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

/*Data for the table `failed_jobs` */

/*Table structure for table `job_batches` */

DROP TABLE IF EXISTS `job_batches`;

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `job_batches` */

/*Table structure for table `jobs` */

DROP TABLE IF EXISTS `jobs`;

CREATE TABLE `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `jobs` */

/*Table structure for table `kelas` */

DROP TABLE IF EXISTS `kelas`;

CREATE TABLE `kelas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `kode_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Deskripsi` longtext COLLATE utf8mb4_unicode_ci,
  `GuruID` bigint NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `kelas_kode_kelas_unique` (`kode_kelas`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kelas` */

insert  into `kelas`(`id`,`kode_kelas`,`Nama`,`password`,`Deskripsi`,`GuruID`,`created_at`,`updated_at`) values 
(1,'vE6F5yVEbB','Sastra','$2y$12$tXmUZgEf8MnR3PMlkUxYRuCCJyw5AI5KL5ofxmeH9ThnQf0mdLK36','Sastra puisi',3,'2024-05-05 08:57:13','2024-05-09 04:09:41'),
(2,'HclepCyork','Puisi dasar SMP','$2y$12$wPBlEWzsWbgvM45EGDweZOsN8m379qPrhPBer/IQCUmTuvsNSPpi2','Puisi dasar dasar saja',6,'2024-06-27 12:34:32','2024-06-27 12:50:51');

/*Table structure for table `kelasdetail` */

DROP TABLE IF EXISTS `kelasdetail`;

CREATE TABLE `kelasdetail` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `KelasID` bigint NOT NULL,
  `SiswaID` bigint NOT NULL,
  `Nilai` bigint NOT NULL DEFAULT '0',
  `Darah` bigint NOT NULL DEFAULT '100',
  `Level` bigint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `kelasdetail` */

insert  into `kelasdetail`(`id`,`KelasID`,`SiswaID`,`Nilai`,`Darah`,`Level`,`created_at`,`updated_at`) values 
(1,1,4,0,100,0,'2024-05-05 10:12:06','2024-05-05 10:12:06'),
(2,2,7,0,100,0,'2024-06-27 14:21:42','2024-06-27 14:21:42');

/*Table structure for table `migrations` */

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `migrations` */

insert  into `migrations`(`id`,`migration`,`batch`) values 
(1,'0001_01_01_000000_create_users_table',1),
(2,'0001_01_01_000001_create_cache_table',1),
(3,'0001_01_01_000002_create_jobs_table',1),
(4,'2024_05_01_035313_ubah_user',1),
(7,'2024_05_01_105349_kelas',2);

/*Table structure for table `password_reset_tokens` */

DROP TABLE IF EXISTS `password_reset_tokens`;

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `password_reset_tokens` */

insert  into `password_reset_tokens`(`email`,`token`,`created_at`) values 
('siswa@gmail.com','$2y$12$nyCCJHpTp8c0kc7FTzWEtOqqCtyg7VbcDirjceuC4PvmBwqy/eDr.','2024-06-13 07:06:53');

/*Table structure for table `role` */

DROP TABLE IF EXISTS `role`;

CREATE TABLE `role` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `role` */

insert  into `role`(`id`,`role_name`,`created_at`,`updated_at`) values 
(1,'guru',NULL,NULL),
(2,'siswa',NULL,NULL);

/*Table structure for table `sessions` */

DROP TABLE IF EXISTS `sessions`;

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `sessions` */

insert  into `sessions`(`id`,`user_id`,`ip_address`,`user_agent`,`payload`,`last_activity`) values 
('5yAYV4J0AZvIebEEitSaUR76rjH3l8js4qnZUs7s',7,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTlZtZ3M0akRlbVpNdko3bmU1Wmg5T3c2TEpTTVg1R0R1V0xROG5uSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MTMwOiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvbWFwLzE/X3Rva2VuPU5WbWdzNGpEZW1aTXZKN25lNVpoOU93NkxKU01YNUdEdVdMUThubkgmbm9fc29hbDE9MSZub19zb2FsMj0yJm5vX3NvYWwzPTMmbm9fc29hbDQ9NCZub19zb2FsNT01Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Nzt9',1719530558),
('LDxGlr5lj9sUPq5wsIUXQqW3OV9OZQwSFQWXehhJ',6,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiakdzcXNZUjBaazkzamdEbnhxTkVCcWdSWGpFbE54ZEkwMTcyUUVkeiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9rZWxhc2d1cnUiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo2O30=',1719498106),
('NwFiJbrtsXQ6PWMoOtwpKTgdJW0DymAdWZyzfJwI',6,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36 Edg/126.0.0.0','YTo0OntzOjY6Il90b2tlbiI7czo0MDoicHQ2Y2R1ZTJQdzVYYWZxN1RVeUtwSjhEU2tSem5xWDZ2S0FveGpnciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjg6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9zb2FsLzIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo2O30=',1719529386),
('WsGbZFso0z9wtS4tPh718KOBvSe8HulsYAYpvs7v',7,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRDFtbldyR0hHU3AyRmVWQmZieXVFa3BzbWNBQ3F5VVpUdUJkYkZRMiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9rZWxhc3Npc3dhIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Nzt9',1719498103);

/*Table structure for table `soal` */

DROP TABLE IF EXISTS `soal`;

CREATE TABLE `soal` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `KelasID` bigint NOT NULL,
  `BAB` int NOT NULL,
  `no_soal` int NOT NULL,
  `Soal` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `jawaban1` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'A',
  `jawaban2` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'B',
  `jawaban3` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'C',
  `jawaban4` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'D',
  `Kunci_Jawaban` tinyint NOT NULL COMMENT '1=A,2=B,3=C,4=D',
  `Alasan` longtext COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Penjelasan dari kunci jawaban',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `soal` */

insert  into `soal`(`id`,`KelasID`,`BAB`,`no_soal`,`Soal`,`jawaban1`,`jawaban2`,`jawaban3`,`jawaban4`,`Kunci_Jawaban`,`Alasan`,`created_at`,`updated_at`) values 
(1,1,1,1,'Apa yang dimaksud dengan istilah \"metafora\" dalam puisi?','Perulangan kata-kata','Penegasan berulang','Perbandingan langsung antara dua hal tanpa menggunakan kata \"seperti\" atau \"bagai\"','Pengulangan bunyi awalan yang sama',3,'Metafora adalah penggunaan kata atau frasa yang menggambarkan satu hal sebagai hal lain tanpa menggunakan kata \"seperti\" atau \"bagai\".',NULL,NULL),
(2,1,1,2,'Apa fungsi dari perulangan kata atau frasa dalam sebuah puisi?','Menambah panjang puisi','Mengulang tema utama','Memperjelas makna','Menambah kesan dramatis',4,'Perulangan kata atau frasa dalam puisi sering digunakan untuk menambah kesan dramatis atau emosional.',NULL,NULL),
(3,1,1,3,'Apa yang dimaksud dengan \"rime scheme\" dalam puisi?','Urutan kata yang diulang dalam setiap baris','Pola yang terbentuk dari pola aksen dalam puisi','Pola berulang dari suku kata di akhir baris puisi','Perbedaan tata letak kata dalam sebuah puisi',3,'\"Rime scheme\" adalah pola berulang dari suku kata di akhir baris puisi, yang menunjukkan pola rim atau rima dalam puisi',NULL,NULL),
(4,1,1,4,'Apa yang dimaksud dengan \"simile\" dalam puisi?','Penggunaan kata-kata dengan suara yang serupa','Penyajian satu hal sebagai hal lain tanpa menggunakan kata \"seperti\" atau \"bagai\"','Penegasan berulang dari sebuah ide','Perbandingan langsung antara dua hal dengan menggunakan kata \"seperti\" atau \"bagai\"',4,'\"Simile\" adalah perbandingan langsung antara dua hal dengan menggunakan kata \"seperti\" atau \"bagai\"',NULL,NULL),
(5,1,1,5,'Apa yang dimaksud dengan \"imagery\" dalam puisi?','Penggunaan kata-kata yang menggambarkan indra penglihatan, pendengaran, penciuman, perasaan, atau rasa','Perulangan kata atau frasa untuk efek dramatis','Penggunaan kata-kata yang memiliki suara yang serupa','Pengulangan bunyi awalan yang sama',1,'\"Imagery\" dalam puisi adalah penggunaan kata-kata yang menggambarkan indra penglihatan, pendengaran, penciuman, perasaan, atau rasa, untuk membangkitkan citra mental yang kuat pada pembaca.',NULL,NULL),
(6,2,1,1,'Apa yang dimaksud dengan puisi?','Cara manusia mengekspresikan diri dengan kata-kata yang penuh makna dan emosi','Bentuk prosa yang digunakan untuk bercerita','Karya tulis yang berisi fakta dan data ilmiah','Metode pengajaran di sekolah',1,'Puisi adalah bentuk ekspresi artistik yang menggunakan bahasa secara kreatif dan penuh emosi untuk menyampaikan perasaan, pikiran, dan pengalaman penulis. Kata-kata dalam puisi sering kali dipilih dengan hati-hati untuk menciptakan makna yang mendalam dan resonansi emosional',NULL,NULL),
(7,2,1,2,'Apa fungsi dari perulangan kata atau frasa dalam sebuah puisi?','Teknologi dan kemajuan manusia','Berbagai pengalaman manusia seperti kegembiraan, kesedihan, cinta, dan kehilangan','Perkembangan politik dan ekonomi','Sejarah dan geografi dunia',2,'Puisi sering mencerminkan pengalaman universal manusia, seperti perasaan gembira, sedih, cinta, dan kehilangan. Tema-tema ini bersifat abadi dan tetap relevan dari zaman kuno hingga saat ini, menunjukkan bagaimana puisi dapat menangkap esensi pengalaman manusia yang mendalam',NULL,NULL),
(8,2,1,3,'Bagaimana puisi menghubungkan penulis atau pembaca dengan kemanusiaan?','Dengan memberikan informasi dan data yang akurat','Dengan menghibur penonton melalui pertunjukan','Dengan terhubung dengan aspek-aspek yang paling mendalam dari kemanusiaan kita','Dengan mengajarkan keterampilan teknis',3,'Puisi memungkinkan penulis dan pembaca untuk berhubungan dengan perasaan, emosi, dan pengalaman manusia yang mendalam. Melalui puisi, orang dapat merasakan dan memahami perasaan orang lain, yang menciptakan ikatan emosional dan pemahaman yang lebih dalam tentang kemanusiaan',NULL,NULL),
(9,2,1,4,'Apa yang diceritakan dalam sejarah puisi?','Perkembangan teknologi dan inovasi manusia','Cara manusia berbagi cerita, impian, dan kebijaksanaan melalui kata-kata','Evolusi bahasa dari masa ke masa','Pengaruh puisi terhadap ekonomi global',2,'Sejarah puisi menunjukkan bagaimana manusia telah menggunakan puisi sebagai sarana untuk berbagi cerita, impian, dan kebijaksanaan. Puisi sering berfungsi sebagai medium untuk komunikasi yang mendalam dan introspektif, memungkinkan penulis untuk menyampaikan pesan yang mendalam kepada pembaca',NULL,NULL),
(10,2,1,5,'Apa fungsi puisi menurut paragraf tersebut?','Menyampaikan data ilmiah dengan cara yang menarik','Menghibur, menginspirasi, atau mengubah pembaca','Mengajarkan bahasa dan keterampilan menulis','Membantu mengingat fakta-fakta sejarah',2,'Puisi memiliki fungsi yang beragam, termasuk menghibur, menginspirasi, atau bahkan mengubah pembaca. Dengan menggunakan bahasa yang indah dan penuh makna, puisi dapat menyentuh hati dan pikiran pembaca, memberikan hiburan, inspirasi, atau perubahan perspektif yang mendalam',NULL,NULL),
(11,2,2,1,'Puisi tersusun atas apa?','Paragraf','Bait-bait','Kalimat','Bab',2,'Puisi adalah bentuk karya sastra yang terdiri dari bait-bait. Setiap bait biasanya terdiri dari beberapa baris yang membentuk satu kesatuan makna dan emosi.',NULL,NULL),
(12,2,2,2,'Apa yang digunakan penyair untuk memperkuat makna dan membangkitkan imajinasi pembaca?','Kata-kata sederhana','Gaya bahasa','Diksi yang indah','Narasi',3,'Penyair memilih kata-kata yang indah dan kiasan untuk memperkuat makna dan membangkitkan imajinasi pembaca',NULL,NULL),
(13,2,2,3,'Puisi memiliki apa yang teratur, menghasilkan bunyi yang merdu dan mudah diingat?','Tema dan pesan','Irama dan rima','Gaya dan nada','Struktur dan format',2,'Irama dan rima adalah elemen penting dalam puisi yang memberikan struktur teratur dan ritme, sehingga membuat puisi terdengar merdu dan mudah diingat.',NULL,NULL),
(14,2,2,4,'Pesan dan makna yang disampaikan oleh puisi umumnya bagaimana?','Sederhana','Biasa saja','Mendalam','Tidak jelas',3,'Puisi sering kali menyampaikan pesan dan makna yang mendalam, menggunakan bahasa yang padat dan penuh nuansa.',NULL,NULL),
(15,2,2,5,'Berapa baris biasanya terdapat dalam satu bait puisi?','Satu baris','Dua baris','Tiga baris','Beberapa baris',4,'Satu bait dalam puisi biasanya terdiri dari beberapa baris, tidak terbatas pada satu, dua, atau tiga baris, dan jumlahnya bervariasi tergantung pada bentuk puisi.',NULL,NULL),
(16,2,3,1,'Jenis puisi lama yang terdiri atas 4 baris dengan rima AA-AA, BB-BB, CC-CC, atau DD-DD adalah?','Pantun','Syair','Gurindam','Talibun',2,'Syair adalah puisi lama yang terdiri atas 4 baris dalam setiap baitnya dengan rima yang biasanya a-a-a-a. Setiap baris syair biasanya memiliki makna yang saling berkaitan.',NULL,NULL),
(17,2,3,2,'Jenis puisi yang bercerita tentang kisah kepahlawanan atau tragedi adalah','Balada','Soneta','Roman','Lagu',1,'Balada adalah jenis puisi naratif yang menceritakan kisah kepahlawanan, tragedi, atau cerita dramatis lainnya. Biasanya ditulis dalam bentuk bait dengan ritme dan rima yang khas.',NULL,NULL),
(18,2,3,3,'Jenis puisi lama yang terdiri atas 2 baris atau lebih dengan rima A-A, B-B, C-C, dst. adalah','Syair','Talibun','Gurindam','Masnawi',3,'Gurindam adalah puisi lama yang terdiri dari dua baris dalam setiap baitnya dengan rima yang bersajak sama (A-A, B-B, C-C, dan seterusnya). Setiap baitnya mengandung nasihat atau petuah.',NULL,NULL),
(19,2,3,4,'Jenis puisi yang terdiri atas 14 baris dengan rima tertentu adalah:','Balada','Soneta','Roman','Lagu',2,'Soneta adalah jenis puisi yang terdiri dari 14 baris dengan pola rima tertentu. Biasanya dibagi menjadi dua bagian: oktaf (8 baris) dan sestet (6 baris), dengan pola rima yang beragam seperti abba-abba-cdc-dcd atau abab-cdcd-efef-gg.',NULL,NULL),
(20,2,3,5,'Jenis puisi lama yang terdiri atas 5 baris dengan rima AA-ABA atau AB-ABB adalah','Pantun','Syair','Talibun','Masnawi',4,'Masnawi adalah puisi naratif yang terdiri dari bait-bait yang biasanya berisi 5 baris dengan pola rima AA-ABA atau AB-ABB. Puisi ini sering digunakan dalam kesusastraan Persia dan Melayu untuk menyampaikan cerita panjang atau epos.',NULL,NULL),
(21,2,4,1,'Apa yang dimaksud dengan tema dalam unsur puisi?','Pilihan kata yang digunakan penyair','Inti atau pokok bahasan puisi','Gambaran yang ditangkap panca indera','Suasana perasaan yang ingin disampaikan penyair',2,'Tema adalah inti atau pokok bahasan yang ingin disampaikan oleh penyair melalui puisinya. Tema menggambarkan ide utama atau pesan yang mendasari seluruh puisi.',NULL,NULL),
(22,2,4,2,'Unsur puisi manakah yang menggambarkan pilihan kata yang digunakan oleh penyair?','Imaji','Majas','Diksi','Nada',3,'Diksi adalah pilihan kata yang digunakan oleh penyair dalam puisinya. Pemilihan kata ini sangat penting untuk menyampaikan makna, suasana, dan nada yang diinginkan.',NULL,NULL),
(23,2,4,3,'Apa yang dimaksud dengan rima dalam puisi?','Persamaan bunyi di akhir baris puisi','Alunan bunyi yang dihasilkan dari susunan kata dalam puisi','Baris dalam puisi','Sekelompok baris dalam puisi',1,'Rima adalah persamaan bunyi yang terdapat di akhir baris puisi. Rima dapat memberikan ritme dan musikalitas pada puisi, serta memperindah bunyi keseluruhan puisi.',NULL,NULL),
(24,2,4,4,'Bagaimana majas digunakan dalam puisi?','Untuk menyampaikan pesan atau pelajaran','Untuk menggambarkan suasana perasaan','Untuk memperindah makna dengan bahasa kiasan','Untuk menciptakan alunan bunyi yang harmonis',3,'Majas adalah penggunaan bahasa kiasan atau figuratif untuk memperindah dan memperkuat makna dalam puisi. Majas membantu penyair menyampaikan perasaan, gambaran, atau pesan dengan cara yang lebih kreatif dan menarik.',NULL,NULL),
(25,2,4,5,'Apa yang dimaksud dengan amanat dalam puisi?','Tema atau pokok bahasan puisi','Pesan atau pelajaran yang ingin disampaikan penyair','Suasana perasaan yang ingin disampaikan penyair','Pilihan kata yang digunakan penyair',2,'Amanat adalah pesan atau pelajaran yang ingin disampaikan oleh penyair melalui puisinya. Amanat biasanya merupakan nilai-nilai moral, etika, atau nasihat yang dapat diambil oleh pembaca dari puisi tersebut.',NULL,NULL),
(26,2,5,1,'Apa definisi puisi menurut paragraf di atas?','Cara manusia mengekspresikan diri mereka dengan kata-kata yang penuh makna dan emosi','Ungkapan kehidupan yang unik melalui prosa.','Penggunaan bahasa yang kompleks dan sulit dipahami.','Cara manusia berbagi cerita dan kebijaksanaan melalui tulisan panjang.',1,'Definisi puisi yang umum adalah cara manusia mengekspresikan diri dengan kata-kata yang penuh makna dan emosi.',NULL,NULL),
(27,2,5,2,'Apa yang dimaksud dengan sejarah puisi?','Cerita tentang bagaimana manusia menyanyi dan menari','Evolusi bahasa dalam komunikasi sehari-hari.','Cerita tentang bagaimana manusia berbagi cerita, impian, dan kebijaksanaan melalui kata-kata yang terpilih dengan hati-hati','Perkembangan teknologi dalam menulis.',3,'Sejarah puisi mencakup perkembangan bagaimana manusia menggunakan kata-kata terpilih untuk berbagi cerita, impian, dan kebijaksanaan.',NULL,NULL),
(28,2,5,3,'Apa fungsi utama puisi menurut teks di atas?','Mengajarkan ilmu pengetahuan.','Menyampaikan informasi terkini.','Menceritakan kisah-kisah lucu.','Menghibur, menginspirasi, atau mengubah kita melalui kekuatan kata-kata.',4,'Fungsi utama puisi adalah menghibur, menginspirasi, atau mengubah melalui kekuatan kata-kata yang penuh makna.',NULL,NULL),
(29,2,5,4,'Ciri-ciri puisi berikut ini benar, kecuali:','Berbentuk bait-bait.','Menggunakan diksi yang indah.','Tidak memiliki irama dan rima','Memiliki makna yang mendalam.',3,'Puisi sering kali memiliki irama dan rima yang khas. Ciri ini justru salah karena banyak puisi yang memanfaatkan irama dan rima untuk memperkuat makna dan keindahan.',NULL,NULL),
(30,2,5,5,'Jenis puisi lama yang terdiri atas 4 baris dengan rima AA-AA disebut:','Pantun','Syair','Gurindam','Talibun',3,'Syair adalah puisi lama yang terdiri dari 4 baris dengan rima yang sama pada setiap barisnya (a-a-a-a)',NULL,NULL),
(31,2,5,6,'Puisi modern yang terdiri atas 14 baris dengan rima tertentu adalah:','Balada','Soneta','Roman','Lagu',2,'Soneta adalah bentuk puisi yang terdiri dari 14 baris dengan pola rima tertentu, seperti abab-cdcd-efef-gg atau abba-abba-cdc-dcd.',NULL,NULL),
(32,2,5,7,'Unsur puisi yang merupakan pilihan kata yang digunakan penyair disebut:','Tema','Diksi','Imaji','Majas',2,'Diksi adalah pilihan kata yang digunakan oleh penyair dalam puisinya untuk menyampaikan makna dan suasana.',NULL,NULL),
(33,2,5,8,'Apa yang dimaksud dengan rima dalam puisi?','Inti atau pokok bahasan puisi.','Gambaran yang ditangkap panca indera','Persamaan bunyi di akhir baris puisi','Suasana perasaan yang ingin disampaikan penyair',3,'Rima adalah persamaan bunyi yang terdapat di akhir baris puisi, yang memberikan ritme dan keindahan bunyi pada puisi.',NULL,NULL),
(34,2,5,9,'Puisi yang terdiri dari 2 baris atau lebih dengan rima A-A disebut:','Pantun','Syair','Gurindam','Talibun',3,'Gurindam adalah puisi lama yang terdiri dari dua baris dalam setiap baitnya dengan rima yang bersajak sama (A-A, B-B, C-C, dan seterusnya).',NULL,NULL),
(35,2,5,10,'Apa yang ingin disampaikan penyair melalui bait dan baris puisi?','Tema','Amanat','Imaji','Irama',2,'Amanat adalah pesan atau pelajaran yang ingin disampaikan oleh penyair melalui bait dan baris dalam puisinya. Amanat biasanya mengandung nilai-nilai moral atau etika yang dapat diambil oleh pembaca.',NULL,NULL);

/*Table structure for table `soaldetail` */

DROP TABLE IF EXISTS `soaldetail`;

CREATE TABLE `soaldetail` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `SoalID` bigint NOT NULL,
  `KelasDetailID` bigint NOT NULL,
  `Jawaban` tinyint NOT NULL COMMENT 'Jawaban Siswa (1=A,2=B,3=C,4=D)',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `soaldetail` */

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roleid` bigint NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`email`,`email_verified_at`,`password`,`roleid`,`remember_token`,`created_at`,`updated_at`) values 
(1,'Test User','test@example.com','2024-05-01 04:20:05','$2y$12$Fa6ke2bSEgS1KW8I6oeLVubYFbGKvVNCdi0Qf0LN/gh1vgrhq2dI2',0,'qKxDWDMikb','2024-05-01 04:20:05','2024-05-01 04:20:05'),
(3,'guru','guru@gmail.com',NULL,'$2y$12$jx9YptOZRTTJGHJhaKq0Y.2C783OOSEVd6QFIv5aEBYW3E3wyGZA2',1,'g1Z7Ghzj0Im73semn9Fnorxn28qjPcgTShvglcJZ80RbZS7i6MyfzLu3Aj1k','2024-05-01 06:14:22','2024-05-01 06:14:22'),
(5,'siswa','siswa@gmail.com',NULL,'$2y$12$OiY1oYBr6RhfheUj6fKBFuREZqgkK6XHR2bqT/7o62M1M4KicLZdC',2,NULL,'2024-06-13 07:08:04','2024-06-13 07:08:04'),
(6,'Hendra','h1@gmail.com',NULL,'$2y$12$mrOwNK2zjf3Q6MJ5P14z8eBaq3ImiJMjphUBekdPabY/luGwix73u',1,NULL,'2024-06-27 12:17:18','2024-06-27 12:17:18'),
(7,'Faiz','faiz@gmail.com',NULL,'$2y$12$yLB3kJPpXk5dZBFl0dAtBOE/kSWQwWQrnbPWYqgIJAolQ/SXwQ9Yi',2,NULL,'2024-06-27 14:16:25','2024-06-27 14:16:25');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
