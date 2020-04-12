-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2020 a las 04:04:18
-- Versión del servidor: 10.1.39-MariaDB
-- Versión de PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `store`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias`
--

CREATE TABLE `categorias` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categoria` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_ins` bigint(20) UNSIGNED NOT NULL,
  `user_udt` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estado` char(1) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categorias`
--

INSERT INTO `categorias` (`id`, `categoria`, `descripcion`, `user_ins`, `user_udt`, `created_at`, `updated_at`, `estado`) VALUES
(1, 'Celulares', '', 1, 1, '2020-04-04 19:28:53', '2020-04-04 19:31:05', 'A'),
(2, 'Laptops', NULL, 1, 1, '2020-04-08 18:43:56', '2020-04-08 18:43:56', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `color` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `despcricion` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fotos_productos`
--

CREATE TABLE `fotos_productos` (
  `id_producto` bigint(20) UNSIGNED NOT NULL,
  `foto` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_ins` bigint(20) UNSIGNED NOT NULL,
  `user_udt` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estado` char(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `fotos_productos`
--

INSERT INTO `fotos_productos` (`id_producto`, `foto`, `user_ins`, `user_udt`, `created_at`, `updated_at`, `estado`) VALUES
(1, 'storage/Productos/b75dQm5oyAsagt0HsIlBjkdrhVTAXUuNoUmnYEPM.jpeg', 1, NULL, '2020-04-09 14:44:49', '2020-04-09 14:44:49', 'A'),
(1, 'storage/Productos/ay4DU0XDT2GKdkliPUhFGUeJiNfHVbjYqmICKB6N.jpeg', 1, NULL, '2020-04-09 14:44:49', '2020-04-09 14:44:49', 'A'),
(2, 'storage/Productos/pSDZI5LtYNHxCwdOKW1UxuqBkQeRmjmz3bnd9fYE.webp', 1, NULL, '2020-04-11 23:11:52', '2020-04-11 23:11:52', 'A'),
(2, 'storage/Productos/3Dg1jDWGdQRhh0wyPakQ4p6hrtQCRa5pjYG3oIBa.jpeg', 1, NULL, '2020-04-11 23:11:52', '2020-04-11 23:11:52', 'A'),
(2, 'storage/Productos/cBN2orsFdw1WAGFLrTPGy9Gtm38czle4uJYNkgy0.webp', 1, NULL, '2020-04-11 23:11:53', '2020-04-11 23:11:53', 'A'),
(3, 'storage/Productos/vyoQ8ackQr1qx0vWqZ1TxGxI1bVO30TkuU5NxALk.webp', 1, NULL, '2020-04-11 23:12:44', '2020-04-11 23:12:44', 'A'),
(4, 'storage/Productos/Jeg3Ld0LZoGtU1sv5oirCp3DntYXCMPQac27A43V.webp', 1, NULL, '2020-04-11 23:22:11', '2020-04-11 23:22:11', 'A'),
(4, 'storage/Productos/EDFNvn5lX6tAfUqkq9Ac3vPOjkTlPNGZ7u2VxtlU.jpeg', 1, NULL, '2020-04-11 23:22:11', '2020-04-11 23:22:11', 'A'),
(5, 'storage/Productos/TbEBBIxCNWs4PHSbtPu1a7bv3ewHFVzlWzx25C3y.jpeg', 1, NULL, '2020-04-11 23:22:34', '2020-04-11 23:22:34', 'A'),
(6, 'storage/Productos/Uf7EQn2CbRcKIMFcnOVnVNhOE2roeKy7RQgKKTRB.jpeg', 1, NULL, '2020-04-11 23:23:20', '2020-04-11 23:23:20', 'A'),
(7, 'storage/Productos/0UBl2clMLkdyLQaaUjRVo3sepDrSxUuELmSjdGGG.webp', 1, NULL, '2020-04-11 23:29:34', '2020-04-11 23:29:34', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `marca` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_ins` bigint(20) UNSIGNED NOT NULL,
  `user_udt` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estado` char(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id`, `marca`, `descripcion`, `user_ins`, `user_udt`, `created_at`, `updated_at`, `estado`) VALUES
(1, 'Samung', NULL, 1, 1, '2020-04-04 19:34:16', '2020-04-04 19:34:16', 'A'),
(2, 'Apple', NULL, 1, 1, '2020-04-09 13:53:07', '2020-04-09 13:53:07', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_03_04_100001_create_perfil_usuarios', 1),
(4, '2020_03_04_160630_create_categorias_table', 1),
(5, '2020_03_04_161540_create_proveedor_table', 1),
(6, '2020_03_04_162302_create_marcas_table', 1),
(7, '2020_03_04_174718_create_modelos_table', 1),
(8, '2020_03_04_181000_create_product_table', 1),
(9, '2020_03_04_181001_create_fotos_produtos_table', 1),
(10, '2020_03_27_225428_create_roles_table', 1),
(11, '2020_03_27_230649_create_role_user_table', 1),
(12, '2020_04_04_092552_create_productos_publicados_table', 1),
(13, '2020_04_04_103946_create_colores_table', 1),
(14, '2020_04_04_104040_create__productoscolores_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos`
--

CREATE TABLE `modelos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `modelo` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_marca` bigint(20) UNSIGNED NOT NULL,
  `id_categoria` bigint(20) UNSIGNED NOT NULL,
  `user_ins` bigint(20) UNSIGNED NOT NULL,
  `user_udt` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `modelos`
--

INSERT INTO `modelos` (`id`, `modelo`, `descripcion`, `id_marca`, `id_categoria`, `user_ins`, `user_udt`, `created_at`, `updated_at`, `estado`) VALUES
(1, 'galaxy S5', '12', 1, 1, 1, 1, '2020-04-04 22:19:45', '2020-04-08 18:18:34', 'I'),
(2, 'Galaxy S4', '123456', 1, 2, 1, 1, '2020-04-08 17:19:21', '2020-04-08 23:26:59', 'A'),
(3, 'Galaxy J7', '123456', 1, 1, 1, 1, '2020-04-08 17:23:02', '2020-04-08 17:23:02', 'A'),
(4, 'a12', '1', 1, 1, 1, 1, '2020-04-08 17:24:00', '2020-04-08 18:18:57', 'I'),
(5, 'h', '12', 1, 2, 1, 1, '2020-04-08 18:44:51', '2020-04-08 18:44:51', 'A'),
(6, 'Iphone 7', '12', 2, 1, 1, 1, '2020-04-09 14:08:43', '2020-04-09 14:08:43', 'A'),
(7, 'Iphone 11', '1', 2, 1, 1, 1, '2020-04-11 23:19:16', '2020-04-11 23:19:16', 'A'),
(8, 'S7', '147', 1, 1, 1, 1, '2020-04-11 23:19:40', '2020-04-11 23:19:40', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('yerisonbc@hotmail.com', '$2y$10$RvVMu67wjuT92Auxa5sNVePPGeypmk/Vk9sNOdn9O4byuLPc6c85G', '2020-04-09 15:48:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_usuarios`
--

CREATE TABLE `perfil_usuarios` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `apellido` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `direccion` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefono` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `perfil_usuarios`
--

INSERT INTO `perfil_usuarios` (`id_user`, `nombre`, `apellido`, `direccion`, `telefono`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, NULL, NULL, '2020-04-04 19:21:48', '2020-04-04 19:21:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `producto` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitulo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caracteristica` varchar(125) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pantalla` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `procesador` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `almacenamiento` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `camara` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bateria` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `condicion` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precio` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `id_modelo` bigint(20) UNSIGNED NOT NULL,
  `id_proveedor` bigint(20) UNSIGNED NOT NULL,
  `user_ins` bigint(20) UNSIGNED NOT NULL,
  `user_udt` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estado` char(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `producto`, `subtitulo`, `caracteristica`, `descripcion`, `pantalla`, `procesador`, `almacenamiento`, `camara`, `bateria`, `condicion`, `precio`, `cantidad`, `id_modelo`, `id_proveedor`, `user_ins`, `user_udt`, `created_at`, `updated_at`, `estado`) VALUES
(1, 'cell', NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, 'Nuevo', 500, 4, 2, 1, 1, NULL, '2020-04-09 14:44:47', '2020-04-09 14:44:47', 'A'),
(2, 'Samsung Galaxy J7, Nuevo,', NULL, '128 GB\r\nFull HD', NULL, NULL, NULL, NULL, NULL, NULL, 'Nuevo', 7500, 5, 3, 1, 1, NULL, '2020-04-11 23:11:50', '2020-04-11 23:11:50', 'A'),
(3, '4', NULL, '4', NULL, NULL, NULL, NULL, NULL, NULL, 'Nuevo', 4, 4, 2, 1, 1, NULL, '2020-04-11 23:12:44', '2020-04-11 23:12:44', 'A'),
(4, 'Iphone 11, Full unlocker', NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, 'Nuevo', 50000, 10, 7, 1, 1, NULL, '2020-04-11 23:22:11', '2020-04-11 23:22:11', 'A'),
(5, 'cell', NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, 'Nuevo', 4, 5, 2, 1, 1, NULL, '2020-04-11 23:22:34', '2020-04-11 23:22:34', 'A'),
(6, 'Iphone 123', NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, 'Nuevo', 5, 5, 2, 1, 1, NULL, '2020-04-11 23:23:20', '2020-04-11 23:23:20', 'A'),
(7, '12334455', NULL, '5', NULL, NULL, NULL, NULL, NULL, NULL, 'Nuevo', 5, 5, 7, 1, 1, NULL, '2020-04-11 23:29:33', '2020-04-11 23:29:33', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos_publicados`
--

CREATE TABLE `productos_publicados` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nombre` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefono` varchar(12) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `correo` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pagina_web` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_ins` bigint(20) UNSIGNED NOT NULL,
  `user_udt` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `estado` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id`, `nombre`, `telefono`, `correo`, `pagina_web`, `user_ins`, `user_udt`, `created_at`, `updated_at`, `estado`) VALUES
(1, 'Yoba Brito', NULL, NULL, NULL, 1, 1, '2020-04-04 19:40:18', '2020-04-04 19:40:18', 'A');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `descripcion`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2020-04-04 19:22:36', '2020-04-04 19:22:36'),
(2, 'user', 'User', '2020-04-04 19:22:37', '2020-04-04 19:22:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rol` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `email`, `email_verified_at`, `password`, `rol`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'yerisonbc@hotmail.com', NULL, '$2y$10$z5DTTht0PsbZi4QCleJsYeI.f01WzfxWBVSx4XGpvpp9JAz/BXAya', 'user', NULL, '2020-04-04 19:21:48', '2020-04-04 19:21:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `_productoscolores`
--

CREATE TABLE `_productoscolores` (
  `id_producto` bigint(20) UNSIGNED NOT NULL,
  `id_color` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categorias_user_ins_foreign` (`user_ins`),
  ADD KEY `categorias_user_udt_foreign` (`user_udt`);

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fotos_productos`
--
ALTER TABLE `fotos_productos`
  ADD KEY `fotos_productos_id_producto_foreign` (`id_producto`),
  ADD KEY `fotos_productos_user_ins_foreign` (`user_ins`),
  ADD KEY `fotos_productos_user_udt_foreign` (`user_udt`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `marcas_user_ins_foreign` (`user_ins`),
  ADD KEY `marcas_user_udt_foreign` (`user_udt`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `modelos_id_marca_foreign` (`id_marca`),
  ADD KEY `modelos_id_categoria_foreign` (`id_categoria`),
  ADD KEY `modelos_user_ins_foreign` (`user_ins`),
  ADD KEY `modelos_user_udt_foreign` (`user_udt`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `perfil_usuarios`
--
ALTER TABLE `perfil_usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productos_id_modelo_foreign` (`id_modelo`),
  ADD KEY `productos_id_proveedor_foreign` (`id_proveedor`),
  ADD KEY `productos_user_ins_foreign` (`user_ins`),
  ADD KEY `productos_user_udt_foreign` (`user_udt`);

--
-- Indices de la tabla `productos_publicados`
--
ALTER TABLE `productos_publicados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `proveedor_user_ins_foreign` (`user_ins`),
  ADD KEY `proveedor_user_udt_foreign` (`user_udt`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `_productoscolores`
--
ALTER TABLE `_productoscolores`
  ADD KEY `_productoscolores_id_producto_foreign` (`id_producto`),
  ADD KEY `_productoscolores_id_color_foreign` (`id_color`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `colores`
--
ALTER TABLE `colores`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `modelos`
--
ALTER TABLE `modelos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `productos_publicados`
--
ALTER TABLE `productos_publicados`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categorias`
--
ALTER TABLE `categorias`
  ADD CONSTRAINT `categorias_user_ins_foreign` FOREIGN KEY (`user_ins`) REFERENCES `perfil_usuarios` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `categorias_user_udt_foreign` FOREIGN KEY (`user_udt`) REFERENCES `perfil_usuarios` (`id_user`) ON DELETE CASCADE;

--
-- Filtros para la tabla `fotos_productos`
--
ALTER TABLE `fotos_productos`
  ADD CONSTRAINT `fotos_productos_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fotos_productos_user_ins_foreign` FOREIGN KEY (`user_ins`) REFERENCES `perfil_usuarios` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `fotos_productos_user_udt_foreign` FOREIGN KEY (`user_udt`) REFERENCES `perfil_usuarios` (`id_user`) ON DELETE CASCADE;

--
-- Filtros para la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD CONSTRAINT `marcas_user_ins_foreign` FOREIGN KEY (`user_ins`) REFERENCES `perfil_usuarios` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `marcas_user_udt_foreign` FOREIGN KEY (`user_udt`) REFERENCES `perfil_usuarios` (`id_user`) ON DELETE CASCADE;

--
-- Filtros para la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD CONSTRAINT `modelos_id_categoria_foreign` FOREIGN KEY (`id_categoria`) REFERENCES `categorias` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `modelos_id_marca_foreign` FOREIGN KEY (`id_marca`) REFERENCES `marcas` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `modelos_user_ins_foreign` FOREIGN KEY (`user_ins`) REFERENCES `perfil_usuarios` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `modelos_user_udt_foreign` FOREIGN KEY (`user_udt`) REFERENCES `perfil_usuarios` (`id_user`) ON DELETE CASCADE;

--
-- Filtros para la tabla `perfil_usuarios`
--
ALTER TABLE `perfil_usuarios`
  ADD CONSTRAINT `perfil_usuarios_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_id_modelo_foreign` FOREIGN KEY (`id_modelo`) REFERENCES `modelos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productos_id_proveedor_foreign` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `productos_user_ins_foreign` FOREIGN KEY (`user_ins`) REFERENCES `perfil_usuarios` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `productos_user_udt_foreign` FOREIGN KEY (`user_udt`) REFERENCES `perfil_usuarios` (`id_user`) ON DELETE CASCADE;

--
-- Filtros para la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD CONSTRAINT `proveedor_user_ins_foreign` FOREIGN KEY (`user_ins`) REFERENCES `perfil_usuarios` (`id_user`) ON DELETE CASCADE,
  ADD CONSTRAINT `proveedor_user_udt_foreign` FOREIGN KEY (`user_udt`) REFERENCES `perfil_usuarios` (`id_user`) ON DELETE CASCADE;

--
-- Filtros para la tabla `_productoscolores`
--
ALTER TABLE `_productoscolores`
  ADD CONSTRAINT `_productoscolores_id_color_foreign` FOREIGN KEY (`id_color`) REFERENCES `colores` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `_productoscolores_id_producto_foreign` FOREIGN KEY (`id_producto`) REFERENCES `productos` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
