-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-03-2023 a las 02:05:14
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `laravel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id_cliente` int(20) NOT NULL,
  `tipo_cliente` int(11) NOT NULL COMMENT '(FK) Tipo de identificador del cliente, juridica o natural',
  `tipo_id_cliente` varchar(30) NOT NULL COMMENT '(FK) Tipo de identificacion del cliente',
  `documento_id` varchar(30) NOT NULL COMMENT '(FK) Numero de identificacion del cliente',
  `digito_verificacion` int(11) NOT NULL COMMENT 'Digito de verificacion(valor calculado )',
  `primer_nombre` varchar(20) NOT NULL COMMENT 'Primer nombre del cliente',
  `segundo_nombre` varchar(20) DEFAULT NULL COMMENT 'Segundo nombre del cliente',
  `primer_apellido` varchar(20) NOT NULL COMMENT 'Primer apellido del cliente',
  `segundo_apellido` varchar(20) DEFAULT NULL COMMENT 'Segundo apellido del cliente',
  `nombre_corto` varchar(80) DEFAULT NULL COMMENT 'Nombre abreviado del cliente ',
  `nombre_juridico` varchar(100) DEFAULT NULL COMMENT 'Nombre del tercero',
  `fecha_nacimiento` date NOT NULL COMMENT 'Fecha de nacimiento del cliente',
  `id_genero` varchar(1) DEFAULT NULL COMMENT 'Genero',
  `dirección_1` varchar(100) NOT NULL COMMENT 'Direccion del cliente campo, obligatorio',
  `dirección_2` varchar(100) DEFAULT NULL COMMENT 'Direccion del cliente, opcional',
  `teléfono_1` varchar(10) NOT NULL COMMENT 'Telefono del cliente campo, obligatorio',
  `teléfono_2` varchar(10) DEFAULT NULL COMMENT 'Telefono del cliente campo, opcional',
  `celular_1` varchar(10) NOT NULL COMMENT 'Numero celular del cliente campo, obligatorio',
  `celular_2` varchar(10) DEFAULT NULL COMMENT 'Numero celular del cliente campo, opcional',
  `email_1` varchar(150) NOT NULL COMMENT 'Correo electronico, obligatorio',
  `email_2` varchar(150) DEFAULT NULL COMMENT 'Correo Electronico, opcional',
  `id_pais` varchar(4) NOT NULL COMMENT 'Codigo Pais divipola de Colombia',
  `id_departamento` varchar(4) NOT NULL COMMENT 'Codigo Departamento divipola de Colombia',
  `id_municipio` varchar(4) NOT NULL COMMENT 'Codigo Municipio divipola de Colombia',
  `id_zona` int(20) NOT NULL COMMENT 'Zona, Rural Urban',
  `resposable_iva` varchar(1) NOT NULL COMMENT 'Responsable de IVA, Si = 1 o NO = 2',
  `reteica` varchar(1) NOT NULL COMMENT 'SI tiene reteica SI=1 NO=2',
  `autoretenedor_fuente` varchar(1) NOT NULL,
  `proveedor_sw` varchar(1) NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `usuario_registra` int(11) NOT NULL,
  `estado` varchar(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT curdate(),
  `created_at` timestamp NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contratos`
--

CREATE TABLE `contratos` (
  `id_cliente` int(20) NOT NULL,
  `id_contrato` int(20) NOT NULL,
  `descripcion` text NOT NULL,
  `numero_contrato` text NOT NULL,
  `fecha_ini` date NOT NULL,
  `fecha_fin` date NOT NULL,
  `fecha_registro` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_usuario` int(11) NOT NULL,
  `contacto_contrato` varchar(30) NOT NULL,
  `credito_dias_cartera` int(11) NOT NULL,
  `lista_precio` varchar(4) NOT NULL,
  `id_tipo_contrato` varchar(3) NOT NULL,
  `sw_paragrafados` varchar(1) NOT NULL,
  `estado` varchar(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT curdate(),
  `created_at` timestamp NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `departamentos`
--

CREATE TABLE `departamentos` (
  `id_departamento` varchar(4) NOT NULL,
  `descripcion_dpto` varchar(4) NOT NULL,
  `id_pais` varchar(4) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT curdate(),
  `created_at` timestamp NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listaclientes`
--

CREATE TABLE `listaclientes` (
  `id_tipo_cliente` int(20) NOT NULL,
  `descripcion_cliente` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT curdate(),
  `created_at` timestamp NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listadocumentos`
--

CREATE TABLE `listadocumentos` (
  `id_tipo_documento` varchar(4) NOT NULL,
  `descripcion` text NOT NULL,
  `alterno` varchar(30) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT curdate(),
  `created_at` timestamp NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listageneros`
--

CREATE TABLE `listageneros` (
  `id_genero` char(1) NOT NULL,
  `descripcion_genero` varchar(100) NOT NULL,
  `sw_activo` varchar(1) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT curdate(),
  `created_at` timestamp NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lista_contratos`
--

CREATE TABLE `lista_contratos` (
  `id_tipo_contrato` int(20) NOT NULL,
  `descripcion_tipo_contrato` varchar(100) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT curdate(),
  `created_at` timestamp NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `municipios`
--

CREATE TABLE `municipios` (
  `id_municipio` varchar(4) NOT NULL,
  `descripcion_municipio` varchar(40) NOT NULL,
  `id_pais` varchar(4) NOT NULL,
  `id_departamento` varchar(4) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT curdate(),
  `created_at` timestamp NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `id_pais` varchar(4) NOT NULL,
  `descripcion_pais` varchar(50) DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT curdate(),
  `created_at` timestamp NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'stiven silva', 'ztivn@misena.edu.co', NULL, '$2y$10$f194r7NvE.rJPvXdkZclxeUvHcryrq6rM6i9G4G/PCNy1YFkUr7ZK', NULL, '2023-03-24 06:00:09', '2023-03-24 06:00:09');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(20) NOT NULL,
  `id_tipo_documento` varchar(4) NOT NULL,
  `documento_id` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `primer_nombre` varchar(20) NOT NULL COMMENT 'Primer nombre del usuario',
  `segundo_nombre` varchar(20) DEFAULT NULL COMMENT 'Segundo nombre del usuario',
  `primer_apellido` varchar(20) NOT NULL COMMENT 'Primer apellido del usuario',
  `segundo_apellido` varchar(20) DEFAULT NULL COMMENT 'Segundo apellido del usuario',
  `nombre_completo` varchar(100) NOT NULL,
  `admin_sw` varchar(1) NOT NULL,
  `profesional_sw` varchar(1) NOT NULL,
  `activo_sw` varchar(1) NOT NULL,
  `fecha_caducidad_usuario` date NOT NULL,
  `indicativo` varchar(5) NOT NULL,
  `telefono` varchar(10) NOT NULL,
  `extension` varchar(5) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `celular_2` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `email_2` varchar(100) NOT NULL,
  `firma` varchar(400) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT curdate(),
  `created_at` timestamp NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zonas`
--

CREATE TABLE `zonas` (
  `id_zona` int(20) NOT NULL,
  `descripcion_zona` varchar(40) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT curdate(),
  `created_at` timestamp NOT NULL DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `zonas`
--

INSERT INTO `zonas` (`id_zona`, `descripcion_zona`, `updated_at`, `created_at`) VALUES
(1, 'primera', '2023-03-24 06:00:20', '2023-03-24 06:00:20');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`),
  ADD KEY `id_pais` (`id_pais`),
  ADD KEY `id_departamento` (`id_departamento`),
  ADD KEY `id_municipio` (`id_municipio`),
  ADD KEY `tipo_cliente` (`tipo_cliente`),
  ADD KEY `id_zona` (`id_zona`),
  ADD KEY `id_genero` (`id_genero`);

--
-- Indices de la tabla `contratos`
--
ALTER TABLE `contratos`
  ADD PRIMARY KEY (`id_contrato`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD PRIMARY KEY (`id_departamento`),
  ADD KEY `id_pais` (`id_pais`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `listaclientes`
--
ALTER TABLE `listaclientes`
  ADD PRIMARY KEY (`id_tipo_cliente`);

--
-- Indices de la tabla `listadocumentos`
--
ALTER TABLE `listadocumentos`
  ADD PRIMARY KEY (`id_tipo_documento`);

--
-- Indices de la tabla `listageneros`
--
ALTER TABLE `listageneros`
  ADD PRIMARY KEY (`id_genero`);

--
-- Indices de la tabla `lista_contratos`
--
ALTER TABLE `lista_contratos`
  ADD PRIMARY KEY (`id_tipo_contrato`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD PRIMARY KEY (`id_municipio`),
  ADD KEY `id_departamento` (`id_departamento`),
  ADD KEY `id_pais` (`id_pais`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`id_pais`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `zonas`
--
ALTER TABLE `zonas`
  ADD PRIMARY KEY (`id_zona`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `listaclientes`
--
ALTER TABLE `listaclientes`
  MODIFY `id_tipo_cliente` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `lista_contratos`
--
ALTER TABLE `lista_contratos`
  MODIFY `id_tipo_contrato` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `zonas`
--
ALTER TABLE `zonas`
  MODIFY `id_zona` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`id_pais`) REFERENCES `paises` (`id_pais`) ON UPDATE CASCADE,
  ADD CONSTRAINT `clientes_ibfk_2` FOREIGN KEY (`id_departamento`) REFERENCES `departamentos` (`id_departamento`) ON UPDATE CASCADE,
  ADD CONSTRAINT `clientes_ibfk_3` FOREIGN KEY (`id_municipio`) REFERENCES `municipios` (`id_municipio`) ON UPDATE CASCADE,
  ADD CONSTRAINT `clientes_ibfk_4` FOREIGN KEY (`tipo_cliente`) REFERENCES `listaclientes` (`id_tipo_cliente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `clientes_ibfk_5` FOREIGN KEY (`id_zona`) REFERENCES `zonas` (`id_zona`),
  ADD CONSTRAINT `clientes_ibfk_6` FOREIGN KEY (`id_genero`) REFERENCES `listageneros` (`id_genero`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `contratos`
--
ALTER TABLE `contratos`
  ADD CONSTRAINT `contratos_ibfk_1` FOREIGN KEY (`id_cliente`) REFERENCES `clientes` (`id_cliente`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `departamentos`
--
ALTER TABLE `departamentos`
  ADD CONSTRAINT `departamentos_ibfk_1` FOREIGN KEY (`id_pais`) REFERENCES `paises` (`id_pais`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `municipios`
--
ALTER TABLE `municipios`
  ADD CONSTRAINT `municipios_ibfk_1` FOREIGN KEY (`id_departamento`) REFERENCES `departamentos` (`id_departamento`) ON UPDATE CASCADE,
  ADD CONSTRAINT `municipios_ibfk_2` FOREIGN KEY (`id_pais`) REFERENCES `paises` (`id_pais`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
