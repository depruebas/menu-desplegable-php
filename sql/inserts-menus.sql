-- Nivel principal
	INSERT INTO `menus` (`parent_id`, `name`, `alias`, `enabled`, `orden`, `created_at`) 
		VALUES ('0', 'MySql en Linux', NULL, '1', '1', CURRENT_TIMESTAMP);
	INSERT INTO `menus` (`parent_id`, `name`, `alias`, `enabled`, `orden`, `created_at`) 
		VALUES ('0', 'MySql en Windows', NULL, '1', '1', CURRENT_TIMESTAMP);

-- Submenus
	INSERT INTO `menus` (`parent_id`, `name`, `alias`, `enabled`, `orden`, `created_at`) 
		VALUES ('1', 'Información general', NULL, '1', '1', CURRENT_TIMESTAMP);
	INSERT INTO `menus` (`parent_id`, `name`, `alias`, `enabled`, `orden`, `created_at`) 
		VALUES ('1', 'Guías de inicio rápido', NULL, '1', '5', CURRENT_TIMESTAMP);
	INSERT INTO `menus` (`parent_id`, `name`, `alias`, `enabled`, `orden`, `created_at`) 
		VALUES ('1', 'Tutoriales', NULL, '1', '15', CURRENT_TIMESTAMP);
	INSERT INTO `menus` (`parent_id`, `name`, `alias`, `enabled`, `orden`, `created_at`) 
		VALUES ('1', 'Recursos', NULL, '1', '10', CURRENT_TIMESTAMP);


	-- Temas correspondientes al submenu Información general
	INSERT INTO `menus_contenido` (`menu_id`, `title`, `brief`, `text`, `enabled`, `orden`, `created_at`, `updated_at`) 
		VALUES ('3', 'Novedades', 'Breve sobre las novedades', 'Texto sobre las novedades', '1', '1', CURRENT_TIMESTAMP, NOW());
	INSERT INTO `menus_contenido` (`menu_id`, `title`, `brief`, `text`, `enabled`, `orden`, `created_at`, `updated_at`) 
		VALUES ('3', 'Notas de la versión', 'BREVE sobre Notas de la versión',' TEXTO sobre Notas de la versión', '1', '1', CURRENT_TIMESTAMP, NOW());
	INSERT INTO `menus_contenido` (`menu_id`, `title`, `brief`, `text`, `enabled`, `orden`, `created_at`, `updated_at`) 
		VALUES ('3', 'Historial de versiones', 'Breve sobre Historial de versiones', 'Texto sobre Historial de versiones', '1', '1', CURRENT_TIMESTAMP, NOW());

	-- Temas correspondientes al submenu Guías de inicio rápido
	INSERT INTO `menus_contenido` (`menu_id`, `title`, `brief`, `text`, `enabled`, `orden`, `created_at`, `updated_at`) 
		VALUES ('4', 'Instalación en SUSE', 'BREVE sobre Instalación en SUSE', 'TEXTO sobre Instalación en SUSE', '1', '1', CURRENT_TIMESTAMP, NOW());
	INSERT INTO `menus_contenido` (`menu_id`, `title`, `brief`, `text`, `enabled`, `orden`, `created_at`, `updated_at`) 
		VALUES ('4', 'Instalación en Red Hat', 'BREVE sobre Instalación en Red Hat', 'TEXTO sobre Instalación en Red Hat', '1', '1', CURRENT_TIMESTAMP, NOW());
	INSERT INTO `menus_contenido` (`menu_id`, `title`, `brief`, `text`, `enabled`, `orden`, `created_at`, `updated_at`) 
		VALUES ('4', 'Instalación en Ubuntu', 'BREVE sobre Instalación en Ubuntu', 'TEXTO sobre Instalación en Ubuntu', '1', '1', CURRENT_TIMESTAMP, NOW());

	-- Temas correspondientes al submenu Tutoriales
	INSERT INTO `menus_contenido` (`menu_id`, `title`, `brief`, `text`, `enabled`, `orden`, `created_at`, `updated_at`) 
		VALUES ('5', 'Novedades de la documentación de MySql', 'BREVE sobre documentación', 'TEXTO sobre documentación', '1', '1', CURRENT_TIMESTAMP, NOW());
	INSERT INTO `menus_contenido` (`menu_id`, `title`, `brief`, `text`, `enabled`, `orden`, `created_at`, `updated_at`) 
		VALUES ('5', 'Migración desde Windows', 'BREVE sobre Migración desde Windows', 'TEXT sobre Migración desde Windows', '1', '1', CURRENT_TIMESTAMP, NOW());
	INSERT INTO `menus_contenido` (`menu_id`, `title`, `brief`, `text`, `enabled`, `orden`, `created_at`, `updated_at`) 
		VALUES ('5', 'Migración desde docker', 'BREVE Migración desde docker', 'TEXTO sobre Migración desde docker', '1', '5', CURRENT_TIMESTAMP, NOW());
	INSERT INTO `menus_contenido` (`menu_id`, `title`, `brief`, `text`, `enabled`, `orden`, `created_at`, `updated_at`) 
		VALUES ('5', 'Novedades en los recursos', 'BREVE sobre Novedades en los recursos', 'TEXTO sobre Novedades en los recursos', '1', '10', CURRENT_TIMESTAMP, NOW());
	INSERT INTO `menus_contenido` (`menu_id`, `title`, `brief`, `text`, `enabled`, `orden`, `created_at`, `updated_at`) 
		VALUES ('5', 'Novedades en los recursos', 'BREVE sobre Novedades en los recursos', 'TEXTO sobre Novedades en los recursos', '1', '15', CURRENT_TIMESTAMP, NOW());

		-- Temas correspondientes al submenu Recursos
	INSERT INTO `menus_contenido` (`menu_id`, `title`, `brief`, `text`, `enabled`, `orden`, `created_at`, `updated_at`) 
		VALUES ('6', 'Guia de solución de problemas', 'BREVE sobre solución de problemas', 'TEXTO sobre solución de problemas', '1', '1', CURRENT_TIMESTAMP, NOW());
