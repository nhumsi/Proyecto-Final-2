-- MySQL dump 10.13  Distrib 8.0.18, for Win64 (x86_64)
--
-- Host: localhost    Database: shanti_db
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.6-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `fitness`
--

DROP TABLE IF EXISTS `fitness`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `fitness` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Precio` int(11) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fitness`
--

LOCK TABLES `fitness` WRITE;
/*!40000 ALTER TABLE `fitness` DISABLE KEYS */;
INSERT INTO `fitness` VALUES (1,'Fisiobalon','Azul',1200,10,NULL,NULL,NULL),(2,'Fisiobalon','Rojo',1200,10,NULL,NULL,NULL),(3,'Fisiobalon','Verde',1200,10,NULL,NULL,NULL),(4,'Capsula estimulante','Rojo',450,10,NULL,NULL,NULL),(5,'Barra multiejercicio','Negro',1700,3,NULL,NULL,NULL),(6,'Colchoneta con cierre','Azul',500,5,NULL,NULL,NULL),(7,'Colchoneta plegable','Azul',500,5,NULL,NULL,NULL),(8,'Cordones de silicona','Azul',280,15,NULL,NULL,NULL),(9,'Cordones de silicona','Rojo',280,15,NULL,NULL,NULL),(10,'Cordones de silicona','Verde',280,15,NULL,NULL,NULL),(11,'Cordones de silicona','Amarillo',280,15,NULL,NULL,NULL),(12,'Cuello termico','Azul',200,5,NULL,NULL,NULL),(13,'Cuello termico','Negro',200,5,NULL,NULL,NULL),(14,'Cuello termico','Gris',200,5,NULL,NULL,NULL),(15,'Cuello termico','Estampado',200,5,NULL,NULL,NULL),(16,'Guantes Fitness','Negro',440,5,NULL,NULL,NULL),(17,'Fisiobalon','Azul',1200,10,NULL,NULL,NULL),(18,'Fisiobalon','Rojo',1200,10,NULL,NULL,NULL),(19,'Fisiobalon','Verde',1200,10,NULL,NULL,NULL),(20,'Capsula estimulante','Rojo',450,10,NULL,NULL,NULL),(21,'Barra multiejercicio','Negro',1700,3,NULL,NULL,NULL),(22,'Colchoneta con cierre','Azul',500,5,NULL,NULL,NULL),(23,'Colchoneta plegable','Azul',500,5,NULL,NULL,NULL),(24,'Cordones de silicona','Azul',280,15,NULL,NULL,NULL),(25,'Cordones de silicona','Rojo',280,15,NULL,NULL,NULL),(26,'Cordones de silicona','Verde',280,15,NULL,NULL,NULL),(27,'Cordones de silicona','Amarillo',280,15,NULL,NULL,NULL),(28,'Cuello termico','Azul',200,5,NULL,NULL,NULL),(29,'Cuello termico','Negro',200,5,NULL,NULL,NULL),(30,'Cuello termico','Gris',200,5,NULL,NULL,NULL),(31,'Cuello termico','Estampado',200,5,NULL,NULL,NULL),(32,'Guantes Fitness','Negro',440,5,NULL,NULL,NULL),(33,'Encastrable Goma Eva','Rojo',220,30,NULL,NULL,NULL);
/*!40000 ALTER TABLE `fitness` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (4,'2019_12_02_223721_create_productos_table',1),(5,'2019_12_05_154431_tabla_user',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `otros`
--

DROP TABLE IF EXISTS `otros`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `otros` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Precio` int(11) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `otros`
--

LOCK TABLES `otros` WRITE;
/*!40000 ALTER TABLE `otros` DISABLE KEYS */;
INSERT INTO `otros` VALUES (1,'Hornillo Ceramica','Rojo',300,10,NULL,NULL,NULL),(2,'Hornillo Ceramica','Blanco',300,10,NULL,NULL,NULL),(3,'Hornillo Ceramica','natural',300,10,NULL,NULL,NULL),(4,'Jala Neti','Blanco',350,15,NULL,NULL,NULL),(5,'Aceites Esenciales','Natural',500,10,NULL,NULL,NULL),(6,'Bandera de Oracion','Rojo',100,10,NULL,NULL,NULL),(7,'Bandera de Oracion','Azul',100,10,NULL,NULL,NULL),(8,'Bandera de Oracion','Blanco',100,10,NULL,NULL,NULL),(9,'Bandera de Oracion','Verde',100,10,NULL,NULL,NULL),(10,'Bandera de Oracion','Amarillo',100,10,NULL,NULL,NULL),(11,'Velador de Yoga','Estampado',350,10,NULL,NULL,NULL),(12,'Tapices Grandes','Estampados',800,10,NULL,NULL,NULL);
/*!40000 ALTER TABLE `otros` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombre_usuario` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apellido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_nac` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provincia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `localidad` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cp` int(4) DEFAULT NULL,
  `direccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuarios_nombre_usuario_unique` (`nombre_usuario`),
  UNIQUE KEY `usuarios_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'nhumsi','gorillaz','nicohum@gmail.com','Nicolas','Humsi','1992-06-09','Tucuman','Tafi Viejo',4101,'Ruta 9 km 1308','2019-12-07 01:31:34','2019-12-07 01:31:34'),(2,'gonzalo','$2y$10$qjv5IOlRI7i1TcaOFs8s5OMAeI9UVyy0GWkM.0jAyhOpcUqCDEWP6','gonzalo@gmail.com','gonzalo','landivar','1992-12-12','Tucuman','San Miguel de Tucuman',4000,'maipu 444','2019-12-09 01:57:56','2019-12-09 01:57:56'),(3,'robertf','$2y$10$b84pL6iGLoK5XWYsWOgd8OanaN3o0VHwZUSJw0TjG7/5cNhu0WBV2','robertoflores@gmail.com','Roberto','Flores','1982-02-01','Santa Cruz','Calafate',4141,'Rivadavia 223','2019-12-09 01:59:37','2019-12-09 01:59:37'),(4,'eleoci','$2y$10$hL.LBftohEW59wgxTn4pi.gQdb6UYXb9rTtSyD0tuomd7LIU/ySxK','eleocohenimach@gmail.com','Eleonora','Cohen Imach','1993-05-21','Tucuman','Yerba Buena',4000,'Lamadrid 545','2019-12-09 02:02:51','2019-12-09 02:02:51'),(5,'lola25','$2y$10$bnVN2vTEoqMtcq2NZp3OHOUPtsElEmPVB70szhCcnYokSh5rcBl1C','doloreslandivar@gmail.com','Dolores','Landivar','1968-07-17','Tucuman','Tafi Viejo',4101,'Ruta 9 km 1308','2019-12-09 02:04:13','2019-12-09 02:04:13'),(6,'pomelo66','$2y$10$9I14sYnygG2QBMvbcbTDueDkh4LT7NY9ssZTGVZuaE0RKxxMWszJ6','pomelorocanrol@gmail.com','Pomelo','Rocanrolenene','1968-07-17','Tucuman','San Miguel de Tucuman',4000,'Porayy 123','2019-12-09 02:05:57','2019-12-09 02:05:57'),(7,'matute99','$2y$10$jB4wJnpOZ8o8QGU/adMpcOFNiO/QRfY0f4rg5Tmm0VBn/py.QTH02','matias_saguir@gmail.com','Matias','Saguir','1983-11-18','Tucuman','San Miguel de Tucuman',4000,'Buenos  Aires 521 7°A','2019-12-09 02:06:48','2019-12-09 02:06:48'),(8,'ramiroortega','$2y$10$.FM4D6eKnzVZoxff2HblAevy3DJvsVrxAqh0.mqhGEWw0/6XCRb8C','rama_420@gmail.com','Ramiro','Ortega Alonso','1988-04-28','Tucuman','Yerba Buena',4172,'Mendoza 123','2019-12-09 02:07:58','2019-12-09 02:07:58'),(9,'chino340','$2y$10$aKaYBkCc5NaGf6i7TTC0X.fNR1B4bosqzZGZaPUcy.xGrRR.CykQO','chino_kpo@gmail.com','Martin','Steudtner','1987-07-30','Tucuman','San Miguel de Tucuman',4000,'Laprida 110 4°A','2019-12-09 02:09:12','2019-12-09 02:09:12'),(10,'gordx','$2y$10$u59ni60Ct2Obn73sMTllfefyeOxy5EeAKYmKBvkdHjC1nH6Wpfulq','gonzaloquintana@gmail.com','Gonzalo','Quintana','1942-03-20','Tucuman','San Miguel de Tucuman',4530,'Rivadavia 226 2°A','2019-12-09 02:21:01','2019-12-09 02:21:01'),(11,'fedexno','$2y$10$ksvqfQt.mx/6t.EM41bu2ubMylpsf2slfzcYPcnKaajFASmQS2ojm','fededaud@gmail.com','Federico','Daud','1977-11-19','Salta','Oran',4530,'Marcos Paz 728 3°A','2019-12-09 02:22:03','2019-12-09 02:22:03'),(12,'emicuellar','$2y$10$atGRjreU9OAFZW4RBohrv.MvYhak0zkAX9UxSz/LkvG82D34Xc4Pu','emicuellar@gmail.com','Emililano','Cuellar','1983-10-10','Salta','Oran',4530,'Rivadavia 442 5°C','2019-12-09 02:23:01','2019-12-09 02:23:01'),(13,'matiko','$2y$10$fHDJErrS/.G7D8eXVGEh6emSK.qZbJhIS0Mow6zmWVflsPErBlQUe','matikocer@gmail.com','Matias','Cervantes','1991-05-22','Salta','Oran',4530,'San  Martin 334 9°D','2019-12-09 02:38:47','2019-12-09 02:38:47'),(14,'aguchix','$2y$10$vRPFPxcdNk6Insw4RxfAA.NnjKrdreS4IsV7BY4qAs8cHx/wVrBj.','fmcontacto104.5@hotmail.com','Agustin Nicolas','Robra Lazarte','1994-06-03','Tucuman','San Miguel de Tucuman',4000,'San Lorenzo 321','2019-12-09 02:42:53','2019-12-09 02:42:53'),(15,'elchueko','$2y$10$DtcABalfxf5ntc3vd3ePu.IthMp5lEGzbimQrhJAdaSltsaUx.hrC','elchueko@gmail.com','Juan Manuel','Ruiz','2019-12-08','Tucuman','San Miguel de Tucuman',4000,'Corrientes 420','2019-12-09 02:50:09','2019-12-09 02:50:09'),(16,'marusroda','$2y$10$FuZMeUxQRb8pxroFS6fnIOSvJmPibcL7diaYt6oNH00nHPy6TH.GS','marumangini@gmail.com','Mariana','Mangini','2004-10-30','Tucuman','Yerba Buena',4172,'Mendoza 321','2019-12-09 02:57:37','2019-12-09 02:57:37'),(17,'pinolina','$2y$10$jse1Gj.w1cOOgbDTo3Snsu7euBHeqooVomDIeQRrceuNqOhyeK6ru','pinolina@gmail.com','Nina','Ortega Mangini','2018-11-03','Tucuman','Yerba Buena',4172,'Mendoza 321','2019-12-09 02:59:42','2019-12-09 02:59:42');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `yoga`
--

DROP TABLE IF EXISTS `yoga`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `yoga` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Precio` int(11) NOT NULL,
  `Stock` int(11) NOT NULL,
  `Descripcion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `yoga`
--

LOCK TABLES `yoga` WRITE;
/*!40000 ALTER TABLE `yoga` DISABLE KEYS */;
INSERT INTO `yoga` VALUES (1,'Aku Ball','Rojo',500,20,NULL,NULL,NULL),(2,'Aku Ball','Azul',500,20,NULL,NULL,NULL),(3,'Aku Ball','Verde',500,20,NULL,NULL,NULL),(4,'Almohada Cervical','Blanco',1100,10,NULL,NULL,NULL),(5,'Almohada Lumbar','Blanco',900,10,NULL,NULL,NULL),(6,'Almohada Termica','Blanco',1800,10,NULL,NULL,NULL),(7,'Zafu','Blanco',750,10,NULL,NULL,NULL),(8,'Zafu','Azul',750,10,NULL,NULL,NULL),(9,'Zafu','Rojo',750,10,NULL,NULL,NULL),(10,'Zafu','Amarillo',750,10,NULL,NULL,NULL),(11,'Zafu','Verde',750,10,NULL,NULL,NULL),(12,'Mat Estampada','Blanco',790,10,NULL,NULL,NULL),(13,'Mat','Blanco',790,10,NULL,NULL,NULL),(14,'Mat','Rojo',790,10,NULL,NULL,NULL),(15,'Mat','Azul',790,10,NULL,NULL,NULL),(16,'Mat','Violeta',790,10,NULL,NULL,NULL),(17,'Porta Mat','Rojo',150,10,NULL,NULL,NULL),(18,'Porta Mat','Azul',150,10,NULL,NULL,NULL),(19,'Porta Mat','Estampado',150,10,NULL,NULL,NULL),(20,'Cintos de 4 metros','Rojo',300,10,NULL,NULL,NULL),(21,'Elongador Curvo','Natural',2900,5,NULL,NULL,NULL),(22,'Manta Microfibra','Azul',800,10,NULL,NULL,NULL),(23,'Manta Microfibra','Rojo',800,10,NULL,NULL,NULL),(24,'Manta Microfibra','Negro',800,10,NULL,NULL,NULL),(25,'Manta Microfibra','Gris',800,10,NULL,NULL,NULL),(26,'Manta Microfibra','Verde',800,10,NULL,NULL,NULL),(27,'Ladrillo de Yoga','Azul',200,10,NULL,NULL,NULL),(28,'Ladrillo de Yoga','Rojo',200,10,NULL,NULL,NULL),(29,'Ladrillo de Yoga','Violeta',200,10,NULL,NULL,NULL),(30,'Silla meditacion','Azul',1500,5,NULL,NULL,NULL),(31,'Silla meditacion','Rojo',1500,5,NULL,NULL,NULL),(32,'Silla meditacion','Negro',1500,5,NULL,NULL,NULL);
/*!40000 ALTER TABLE `yoga` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-09 19:09:17
