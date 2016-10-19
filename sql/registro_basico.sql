-- REGISTROS BÁSICOS 

USE igsisv2;

INSERT INTO `institutions` (`id`, `initials`, `name`, `institution_father`, `logo`) VALUES
(1, 'SMC', 'Secretaria Municipal de Cultura', 0, 'branco_jpg');

INSERT INTO `groups` (`id`, `name`, `created`, `modified`) VALUES
(1, 'Supers', '2016-08-30 21:15:01', '2016-08-30 21:15:01'),
(2, 'Admins', '2016-08-30 21:15:01', '2016-08-30 21:15:01'),
(3, 'Managers', '2016-08-30 21:15:01', '2016-08-30 21:15:01'),
(4, 'Users', '2016-08-30 21:15:01', '2016-08-30 21:15:01');

INSERT INTO `permissions` (`id`, `group_id`, `controller`, `action`, `created`, `modified`) VALUES
(1, 1, 'Groups', 'index', NULL, NULL),
(2, 1, 'Groups', 'view', NULL, NULL),
(3, 1, 'Groups', 'add', NULL, NULL),
(4, 1, 'Groups', 'edit', NULL, NULL),
(5, 1, 'Groups', 'delete', NULL, NULL),
(6, 1, 'Permissions', 'index', NULL, NULL),
(7, 1, 'Permissions', 'view', NULL, NULL),
(8, 1, 'Permissions', 'add', NULL, NULL),
(9, 1, 'Permissions', 'edit', NULL, NULL),
(10, 1, 'Permissions', 'delete', NULL, NULL),
(11, 1, 'Servidores', 'index', NULL, NULL),
(12, 1, 'Servidores', 'view', NULL, NULL),
(13, 1, 'Servidores', 'add', NULL, NULL),
(14, 1, 'Servidores', 'edit', NULL, NULL),
(15, 1, 'Servidores', 'delete', NULL, NULL),
(16, 1, 'Users', 'index', NULL, NULL),
(17, 1, 'Users', 'view', NULL, NULL),
(18, 1, 'Users', 'add', NULL, NULL),
(19, 1, 'Users', 'edit', NULL, NULL),
(20, 1, 'Users', 'delete', NULL, NULL),
(21, 2, 'Groups', 'index', NULL, NULL),
(22, 2, 'Groups', 'view', NULL, NULL),
(23, 2, 'Groups', 'add', NULL, NULL),
(24, 2, 'Groups', 'edit', NULL, NULL),
(25, 2, 'Groups', 'delete', NULL, NULL),
(26, 2, 'Permissions', 'index', NULL, NULL),
(27, 2, 'Permissions', 'view', NULL, NULL),
(28, 2, 'Permissions', 'add', NULL, NULL),
(29, 2, 'Permissions', 'edit', NULL, NULL),
(30, 2, 'Permissions', 'delete', NULL, NULL),
(31, 2, 'Users', 'index', NULL, NULL),
(32, 2, 'Users', 'view', NULL, NULL),
(33, 2, 'Users', 'add', NULL, NULL),
(34, 2, 'Users', 'edit', NULL, NULL),
(35, 2, 'Users', 'delete', NULL, NULL);

INSERT INTO `users` (`id`, `username`, `name`, `rf_rg`, `password`, `phone`, `email`, `institution_id`, `group_id`, `get_notification`, `contracts`, `published`) VALUES
(9, 'super', '', '1', '$2y$10$BtOXnGu1e4OpInBRHXBOJOn1e06xcOty65UwBBF3T5.pkkwSDrfEe', '', '', 1, 1, 0, NULL, 1),
(10, 'admin', '', '2', '$2y$10$w5DGESLs57.2pA2jnnxwUeDyG2zR/4GQQkkzeLhI6E6rwVR6tsMUe', '', '', 1, 2, 0, NULL, 1),
(11, 'manager', '', '3', '$2y$10$fdyw12c8ILUDI3AF3w.1Au/Ti6T89gbpYe/bl0LcHcTOCTeccC/BS', '', '', 1, 3, 0, NULL, 1),
(12, 'user', '', '4', '$2y$10$BxWeJUnnaocfyNw/M9OH7OXlqrIHsLy0Fd968WTenQE/Gjb8tKNBu', '', '', 1, 4, 0, NULL, 1),
(14, 'lorelei', '', '772.103.0', '$2y$10$BtOXnGu1e4OpInBRHXBOJOn1e06xcOty65UwBBF3T5.pkkwSDrfEe', '', '', 1, 1, 0, NULL, 1);