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
(11, 1, 'Users', 'index', NULL, NULL),
(12, 1, 'Users', 'view', NULL, NULL),
(13, 1, 'Users', 'add', NULL, NULL),
(14, 1, 'Users', 'edit', NULL, NULL),
(15, 1, 'Users', 'delete', NULL, NULL);


INSERT INTO `users` (`id`, `username`, `name`, `rf_rg`, `password`, `phone`, `email`, `institution_id`, `group_id`, `get_notification`, `contracts`, `published`) VALUES
(9, 'super', '', '1', '$2y$10$BtOXnGu1e4OpInBRHXBOJOn1e06xcOty65UwBBF3T5.pkkwSDrfEe', '', '', 1, 1, 0, NULL, 1),
(10, 'admin', '', '2', '$2y$10$w5DGESLs57.2pA2jnnxwUeDyG2zR/4GQQkkzeLhI6E6rwVR6tsMUe', '', '', 1, 2, 0, NULL, 1),
(11, 'manager', '', '3', '$2y$10$fdyw12c8ILUDI3AF3w.1Au/Ti6T89gbpYe/bl0LcHcTOCTeccC/BS', '', '', 1, 3, 0, NULL, 1),
(12, 'user', '', '4', '$2y$10$BxWeJUnnaocfyNw/M9OH7OXlqrIHsLy0Fd968WTenQE/Gjb8tKNBu', '', '', 1, 4, 0, NULL, 1),
(14, 'lorelei', '', '772.103.0', '$2y$10$BtOXnGu1e4OpInBRHXBOJOn1e06xcOty65UwBBF3T5.pkkwSDrfEe', '', '', 1, 1, 0, NULL, 1);

INSERT INTO `permissions` (`id`, `group_id`, `controller`, `action`, `created`, `modified`) VALUES
('', 1, 'Events', 'index', NULL, NULL),
('', 1, 'Events', 'view', NULL, NULL),
('', 1, 'Events', 'add', NULL, NULL),
('', 1, 'Events', 'edit', NULL, NULL);

INSERT INTO `permissions` (`id`, `group_id`, `controller`, `action`, `created`, `modified`) VALUES
('', 1, 'Institutions', 'index', NULL, NULL),
('', 1, 'Institutions', 'view', NULL, NULL),
('', 1, 'Institutions', 'add', NULL, NULL),
('', 1, 'Institutions', 'edit', NULL, NULL);

INSERT INTO `permissions` (`id`, `group_id`, `controller`, `action`, `created`, `modified`) VALUES
('', 1, 'SpecialProjects', 'index', NULL, NULL),
('', 1, 'SpecialProjects', 'view', NULL, NULL),
('', 1, 'SpecialProjects', 'add', NULL, NULL),
('', 1, 'SpecialProjects', 'edit', NULL, NULL);

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'TypeEvents', 'index'),
(1, 'TypeEvents', 'view'),
(1, 'TypeEvents', 'add'),
(1, 'TypeEvents', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'Producers', 'index'),
(1, 'Producers', 'view'),
(1, 'Producers', 'add'),
(1, 'Producers', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'Fiscals', 'index'),
(1, 'Fiscals', 'view'),
(1, 'Fiscals', 'add'),
(1, 'Fiscals', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'Users', 'index'),
(1, 'Users', 'view'),
(1, 'Users', 'add'),
(1, 'Users', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'JuridicalRelations', 'index'),
(1, 'JuridicalRelations', 'view'),
(1, 'JuridicalRelations', 'add'),
(1, 'JuridicalRelations', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'Surrogates', 'index'),
(1, 'Surrogates', 'view'),
(1, 'Surrogates', 'add'),
(1, 'Surrogates', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'AgeGroups', 'index'),
(1, 'AgeGroups', 'view'),
(1, 'AgeGroups', 'add'),
(1, 'AgeGroups', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'AgendaPosters', 'index'),
(1, 'AgendaPosters', 'view'),
(1, 'AgendaPosters', 'add'),
(1, 'AgendaPosters', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'Agendas', 'index'),
(1, 'Agendas', 'view'),
(1, 'Agendas', 'add'),
(1, 'Agendas', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'Calls', 'index'),
(1, 'Calls', 'view'),
(1, 'Calls', 'add'),
(1, 'Calls', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'CheckProductions', 'index'),
(1, 'CheckProductions', 'view'),
(1, 'CheckProductions', 'add'),
(1, 'CheckProductions', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'Cinemas', 'index'),
(1, 'Cinemas', 'view'),
(1, 'Cinemas', 'add'),
(1, 'Cinemas', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'Communications', 'index'),
(1, 'Communications', 'view'),
(1, 'Communications', 'add'),
(1, 'Communications', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'HistoricHiringRequest', 'index'),
(1, 'HistoricHiringRequest', 'view'),
(1, 'HistoricHiringRequest', 'add'),
(1, 'HistoricHiringRequest', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'HistoricOccurrences', 'index'),
(1, 'HistoricOccurrences', 'view'),
(1, 'HistoricOccurrences', 'add'),
(1, 'HistoricOccurrences', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'Historics', 'index'),
(1, 'Historics', 'view'),
(1, 'Historics', 'add'),
(1, 'Historics', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'InformationProductions', 'index'),
(1, 'InformationProductions', 'view'),
(1, 'InformationProductions', 'add'),
(1, 'InformationProductions', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'LegalPersons', 'index'),
(1, 'LegalPersons', 'view'),
(1, 'LegalPersons', 'add'),
(1, 'LegalPersons', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'LegalRepresentatives', 'index'),
(1, 'LegalRepresentatives', 'view'),
(1, 'LegalRepresentatives', 'add'),
(1, 'LegalRepresentatives', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'LogReopenings', 'index'),
(1, 'LogReopenings', 'view'),
(1, 'LogReopenings', 'add'),
(1, 'LogReopenings', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'Musics', 'index'),
(1, 'Musics', 'view'),
(1, 'Musics', 'add'),
(1, 'Musics', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'Occurrences', 'index'),
(1, 'Occurrences', 'view'),
(1, 'Occurrences', 'add'),
(1, 'Occurrences', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'PhysicalPersons', 'index'),
(1, 'PhysicalPersons', 'view'),
(1, 'PhysicalPersons', 'add'),
(1, 'PhysicalPersons', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'Services', 'index'),
(1, 'Services', 'view'),
(1, 'Services', 'add'),
(1, 'Services', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'SubEvents', 'index'),
(1, 'SubEvents', 'view'),
(1, 'SubEvents', 'add'),
(1, 'SubEvents', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'TempDatas', 'index'),
(1, 'TempDatas', 'view'),
(1, 'TempDatas', 'add'),
(1, 'TempDatas', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'TempPosters', 'index'),
(1, 'TempPosters', 'view'),
(1, 'TempPosters', 'add'),
(1, 'TempPosters', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'TheaterDances', 'index'),
(1, 'TheaterDances', 'view'),
(1, 'TheaterDances', 'add'),
(1, 'TheaterDances', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'UploadEvents', 'index'),
(1, 'UploadEvents', 'view'),
(1, 'UploadEvents', 'add'),
(1, 'UploadEvents', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'VisualArts', 'index'),
(1, 'VisualArts', 'view'),
(1, 'VisualArts', 'add'),
(1, 'VisualArts', 'edit');

INSERT INTO `permissions` (`group_id`, `controller`, `action`) VALUES
(1, 'Workshops', 'index'),
(1, 'Workshops', 'view'),
(1, 'Workshops', 'add'),
(1, 'Workshops', 'edit');

INSERT INTO `age_groups` (`name`) VALUES
('LIVRE'),
('18 Anos'),
('16 Anos'),
('14 Anos'),
('12 Anos'),
('10 Anos');

