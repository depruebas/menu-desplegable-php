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