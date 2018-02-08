-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.5.16 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table skyfleeter.almacens: ~0 rows (approximately)
/*!40000 ALTER TABLE `almacens` DISABLE KEYS */;
/*!40000 ALTER TABLE `almacens` ENABLE KEYS */;

-- Dumping data for table skyfleeter.aplicacions: ~1 rows (approximately)
/*!40000 ALTER TABLE `aplicacions` DISABLE KEYS */;
INSERT INTO `aplicacions` (`id`, `aplicacion`, `created_at`, `updated_at`) VALUES
	(1, 'Aplicacion Prueba Editado', '2018-01-14 18:05:25', '2018-01-14 18:06:16');
/*!40000 ALTER TABLE `aplicacions` ENABLE KEYS */;

-- Dumping data for table skyfleeter.clases: ~0 rows (approximately)
/*!40000 ALTER TABLE `clases` DISABLE KEYS */;
/*!40000 ALTER TABLE `clases` ENABLE KEYS */;

-- Dumping data for table skyfleeter.construccions: ~2 rows (approximately)
/*!40000 ALTER TABLE `construccions` DISABLE KEYS */;
INSERT INTO `construccions` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'Test construccion editado', '2018-01-09 04:10:30', '2018-01-10 02:36:32'),
	(2, 'Test construccion', '2018-01-09 04:12:53', '2018-01-09 04:12:53');
/*!40000 ALTER TABLE `construccions` ENABLE KEYS */;

-- Dumping data for table skyfleeter.designs: ~0 rows (approximately)
/*!40000 ALTER TABLE `designs` DISABLE KEYS */;
/*!40000 ALTER TABLE `designs` ENABLE KEYS */;

-- Dumping data for table skyfleeter.distributions: ~0 rows (approximately)
/*!40000 ALTER TABLE `distributions` DISABLE KEYS */;
INSERT INTO `distributions` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'VMAB', '2018-02-08 15:52:47', '2018-02-08 16:07:00'),
	(2, 'WIENS', '2018-02-08 15:53:23', '2018-02-08 15:53:23');
/*!40000 ALTER TABLE `distributions` ENABLE KEYS */;

-- Dumping data for table skyfleeter.distribution_positions: ~0 rows (approximately)
/*!40000 ALTER TABLE `distribution_positions` DISABLE KEYS */;
INSERT INTO `distribution_positions` (`id`, `name`, `created_at`, `updated_at`) VALUES
	(1, 'DELANTERA', '2018-02-08 16:13:32', '2018-02-08 16:14:22'),
	(2, 'TRASERA', '2018-02-08 16:13:32', '2018-02-08 16:14:22');
/*!40000 ALTER TABLE `distribution_positions` ENABLE KEYS */;

-- Dumping data for table skyfleeter.ejes: ~0 rows (approximately)
/*!40000 ALTER TABLE `ejes` DISABLE KEYS */;
INSERT INTO `ejes` (`id`, `created_at`, `updated_at`, `name`) VALUES
	(1, '2018-02-07 22:41:34', '2018-02-07 23:22:52', 'Eje Principal'),
	(2, '2018-02-07 22:41:34', '2018-02-07 23:22:52', 'Eje Repuesto');
/*!40000 ALTER TABLE `ejes` ENABLE KEYS */;

-- Dumping data for table skyfleeter.eje_distributions: ~0 rows (approximately)
/*!40000 ALTER TABLE `eje_distributions` DISABLE KEYS */;
INSERT INTO `eje_distributions` (`id`, `eje_id`, `distribution_id`, `created_at`, `updated_at`, `posicion`, `distribution_position_id`) VALUES
	(1, 1, 1, '2018-02-08 10:16:58', '2018-02-08 10:16:59', 2, 1),
	(3, 2, 1, '2018-02-08 10:16:58', '2018-02-08 10:16:59', 1, 2),
	(4, 1, 1, '2018-02-08 10:16:58', '2018-02-08 10:16:59', 1, 1);
/*!40000 ALTER TABLE `eje_distributions` ENABLE KEYS */;

-- Dumping data for table skyfleeter.empresas: ~1 rows (approximately)
/*!40000 ALTER TABLE `empresas` DISABLE KEYS */;
INSERT INTO `empresas` (`id`, `descripcion`, `vigente`, `fecha_facturacion`, `ultimo_pago`, `created_at`, `updated_at`) VALUES
	(1, 'Empresa Test 1', 1, '2017-12-31', '2017-11-29 00:00:00', '2017-12-10 22:19:52', '2017-12-10 22:19:52');
/*!40000 ALTER TABLE `empresas` ENABLE KEYS */;

-- Dumping data for table skyfleeter.fabricantes: ~0 rows (approximately)
/*!40000 ALTER TABLE `fabricantes` DISABLE KEYS */;
/*!40000 ALTER TABLE `fabricantes` ENABLE KEYS */;

-- Dumping data for table skyfleeter.llanta_ejes: ~0 rows (approximately)
/*!40000 ALTER TABLE `llanta_ejes` DISABLE KEYS */;
/*!40000 ALTER TABLE `llanta_ejes` ENABLE KEYS */;

-- Dumping data for table skyfleeter.marcas: ~0 rows (approximately)
/*!40000 ALTER TABLE `marcas` DISABLE KEYS */;
/*!40000 ALTER TABLE `marcas` ENABLE KEYS */;

-- Dumping data for table skyfleeter.medidas: ~1 rows (approximately)
/*!40000 ALTER TABLE `medidas` DISABLE KEYS */;
INSERT INTO `medidas` (`id`, `medida`, `created_at`, `updated_at`) VALUES
	(1, 'Test editado medida', '2018-01-09 03:28:33', '2018-01-09 03:42:46');
/*!40000 ALTER TABLE `medidas` ENABLE KEYS */;

-- Dumping data for table skyfleeter.migrations: ~30 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2013_12_11_032627_create_tipoUsuarios_table', 1),
	(2, '2014_10_12_000000_create_users_table', 1),
	(3, '2014_10_12_100000_create_password_resets_table', 1),
	(4, '2017_12_11_034053_create_empresas_table', 1),
	(5, '2017_12_11_034118_add_empresas_to_usuarios_migration', 1),
	(6, '2017_12_11_040124_add_intentos_to_usuarios_migration', 1),
	(7, '2017_12_11_164733_drop_tipoUsuario_id_users', 1),
	(8, '2017_12_11_165350_create_role_user_table', 1),
	(9, '2017_12_22_203110_create_marcas_table', 1),
	(10, '2017_12_22_220328_add_tipoUsuario_users', 1),
	(11, '2018_01_08_020032_create_medidas_table', 1),
	(12, '2018_01_09_034711_create_construccions_table', 1),
	(13, '2018_01_10_022048_create_tipos_table', 1),
	(14, '2018_01_14_173308_create_aplicacions_table', 1),
	(15, '2018_01_14_173458_create_fabricantes_table', 1),
	(16, '2018_01_14_173459_create_designs_table', 1),
	(17, '2018_01_15_045003_create_almacens_table', 1),
	(18, '2018_01_28_022913_TurnCostoNullable', 1),
	(19, '2018_01_28_025507_turn_factura_nullable', 1),
	(20, '2018_02_03_183120_create_distributions_table', 1),
	(21, '2018_02_03_201404_create_ejes_table', 1),
	(22, '2018_02_03_201420_create_eje_distributions_table', 1),
	(23, '2018_02_03_201438_create_llanta_ejes_table', 1),
	(24, '2018_02_03_201454_create_clases_table', 1),
	(25, '2018_02_03_211233_create_statuses_table', 1),
	(26, '2018_02_03_211405_create_tropa_models_table', 1),
	(27, '2018_02_03_211548_create_tropas_table', 1),
	(28, '2018_02_06_042351_add_position_to_eje_distributions', 1),
	(29, '2018_02_06_042648_create_distribution_positions_table', 1),
	(30, '2018_02_06_043043_add_distribution_postions_to_eje_distributions', 1),
	(31, '2018_02_07_223737_drop_positionin__eje_and_add_name', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table skyfleeter.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping data for table skyfleeter.role_user: ~0 rows (approximately)
/*!40000 ALTER TABLE `role_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `role_user` ENABLE KEYS */;

-- Dumping data for table skyfleeter.statuses: ~0 rows (approximately)
/*!40000 ALTER TABLE `statuses` DISABLE KEYS */;
/*!40000 ALTER TABLE `statuses` ENABLE KEYS */;

-- Dumping data for table skyfleeter.tipos: ~0 rows (approximately)
/*!40000 ALTER TABLE `tipos` DISABLE KEYS */;
/*!40000 ALTER TABLE `tipos` ENABLE KEYS */;

-- Dumping data for table skyfleeter.tipousuarios: ~5 rows (approximately)
/*!40000 ALTER TABLE `tipousuarios` DISABLE KEYS */;
INSERT INTO `tipousuarios` (`id`, `descripcion`, `created_at`, `updated_at`) VALUES
	(1, 'Administrador Global', '2017-12-10 21:58:20', '2017-12-10 21:58:20'),
	(2, 'Super Administrador', '2017-12-10 22:00:47', '2017-12-10 22:00:47'),
	(3, 'Administrador', '2017-12-10 22:00:47', '2017-12-10 22:00:47'),
	(4, 'Llantero', '2017-12-10 22:00:47', '2017-12-10 22:00:47'),
	(5, 'Encargado de Almacen', '2017-12-10 22:00:47', '2017-12-10 22:00:47');
/*!40000 ALTER TABLE `tipousuarios` ENABLE KEYS */;

-- Dumping data for table skyfleeter.tropas: ~0 rows (approximately)
/*!40000 ALTER TABLE `tropas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tropas` ENABLE KEYS */;

-- Dumping data for table skyfleeter.tropa_models: ~0 rows (approximately)
/*!40000 ALTER TABLE `tropa_models` DISABLE KEYS */;
/*!40000 ALTER TABLE `tropa_models` ENABLE KEYS */;

-- Dumping data for table skyfleeter.users: ~5 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `empresa_id`, `intentos_login`, `ultimo_logueo`, `tipoUsuario_id`) VALUES
	(8, 'SPAD', 'superadministrador@administracion.com', '$2y$10$7wY.GKvmSDsTO7.VVRYuyuNHPyxoea5HdatMnZst72WcGcmDWQqYW', 'J6Wd4xttGcPpRVIyxrIfBec7sNDZAtfvPA0mB0FPfncWOGG6YTswrKA4P60C', '2017-12-20 02:26:03', '2017-12-20 02:26:03', 1, 0, '2017-12-20', 1),
	(9, 'AINS', 'administrador_instancias@administracion.com', '$2y$10$yOKL7lRlR.jvE/Y18AgFM.ivVgoquRhMGKKV4SUYj.F62Yzip9x3K', NULL, '2017-12-20 02:26:03', '2017-12-20 02:26:03', 1, 0, '2017-12-20', 2),
	(10, 'AIN', 'administrador_instancia@administracion.com', '$2y$10$o8/eGCcsM7Gh8Cs7KKjOKe18orrWFLAzmoLd/vroG.MNJ1kHH/yl6', NULL, '2017-12-20 02:26:03', '2017-12-20 02:26:03', 1, 0, '2017-12-20', 3),
	(11, 'LLNTR', 'llantero@administracion.com', '$2y$10$X6OnGgsx8XAE.wG2BmQLn.c6PqC9WgCObKeDPxUl8wd04wXtL5szy', 'fLAX5dgOZPh12ExNsJq796ofshpWGW2ytbBXcRTWr5CGnqxZII1nG8cUWpxG', '2017-12-20 02:27:40', '2017-12-20 02:27:40', 1, 0, '2017-12-20', 4),
	(12, 'EDBG', 'encargado_bodega@administracion.com', '$2y$10$CjtcGRZiEHE8ldZuTNy5bu1J2WPJGnFkMs8KMNYP2QP/B6wd9g2pq', 'Umxyh1KRSh6doOJdNHdrwYNeWfVViyYSwuh8FkCtRY7UXliWRg2Y52j7J7nP', '2017-12-20 02:29:29', '2017-12-20 02:29:29', 1, 0, '2017-12-20', 5);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
