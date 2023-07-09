-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 172.21.0.2:3306
-- Tiempo de generación: 09-07-2023 a las 05:38:46
-- Versión del servidor: 8.0.26
-- Versión de PHP: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de datos: `ejemplo_menus`
--
CREATE DATABASE IF NOT EXISTS `ejemplo_menus` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `ejemplo_menus`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE `menus` (
  `id` int NOT NULL,
  `parent_id` int NOT NULL,
  `name` varchar(200) NOT NULL,
  `alias` varchar(20) DEFAULT NULL,
  `enabled` int NOT NULL,
  `orden` int NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menus_contenido`
--

DROP TABLE IF EXISTS `menus_contenido`;
CREATE TABLE `menus_contenido` (
  `id` int NOT NULL,
  `course_id` int NOT NULL,
  `title` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `brief` text,
  `text` text NOT NULL,
  `image` varchar(256) DEFAULT NULL,
  `enabled` int NOT NULL DEFAULT '0',
  `orden` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL,
  `finished_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `menus_contenido`
--
ALTER TABLE `menus_contenido`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `menus_contenido`
--
ALTER TABLE `menus_contenido`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;
COMMIT;
