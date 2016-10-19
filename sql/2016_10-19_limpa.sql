-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema igsisv2
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema igsisv2
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `igsisv2` DEFAULT CHARACTER SET utf8 ;
USE `igsisv2` ;

-- -----------------------------------------------------
-- Table `igsisv2`.`type_events`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`type_events` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(60) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `type_event_UNIQUE` (`name` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`producers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`producers` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(120) NOT NULL COMMENT '',
  `phone` VARCHAR(35) NOT NULL COMMENT '',
  `email` VARCHAR(60) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`fiscals`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`fiscals` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(120) NOT NULL COMMENT '',
  `rf` VARCHAR(12) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`institutions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`institutions` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(45) NOT NULL COMMENT '',
  `initials` VARCHAR(10) NOT NULL COMMENT '',
  `institution_father` INT(2) NOT NULL COMMENT '',
  `logo` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `instituicao_UNIQUE` (`name` ASC)  COMMENT '',
  UNIQUE INDEX `sigla_UNIQUE` (`initials` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`groups`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`groups` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `created` DATETIME NULL DEFAULT NULL COMMENT '',
  `modified` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `name_UNIQUE` (`name` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `username` VARCHAR(7) NOT NULL COMMENT '',
  `name` VARCHAR(120) NOT NULL COMMENT '',
  `rf_rg` VARCHAR(12) NOT NULL COMMENT '',
  `password` VARCHAR(255) NOT NULL COMMENT '',
  `phone` VARCHAR(15) NOT NULL COMMENT '',
  `email` VARCHAR(60) NOT NULL COMMENT '',
  `institution_id` INT NOT NULL COMMENT '',
  `group_id` INT NOT NULL COMMENT '',
  `get_notification` TINYINT(1) NOT NULL COMMENT '',
  `contracts` INT(2) NULL DEFAULT NULL COMMENT '',
  `published` TINYINT(1) NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Usuario_Instituicao_idx` (`institution_id` ASC)  COMMENT '',
  UNIQUE INDEX `nome_usuario_UNIQUE` (`username` ASC)  COMMENT '',
  INDEX `fk_group_idx` (`group_id` ASC)  COMMENT '',
  UNIQUE INDEX `rf_rg_UNIQUE` (`rf_rg` ASC)  COMMENT '',
  CONSTRAINT `fk_Usuario_Instituicao`
    FOREIGN KEY (`institution_id`)
    REFERENCES `igsisv2`.`institutions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_group`
    FOREIGN KEY (`group_id`)
    REFERENCES `igsisv2`.`groups` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`juridical_relations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`juridical_relations` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(60) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `juridical_relations_UNIQUE` (`name` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`surrogates`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`surrogates` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(120) NOT NULL COMMENT '',
  `rf` VARCHAR(12) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`special_projects`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`special_projects` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(120) NOT NULL COMMENT '',
  `institution_id` INT NOT NULL COMMENT '',
  `published` TINYINT(1) NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Projeto_especial_Instituicao_idx` (`institution_id` ASC)  COMMENT '',
  UNIQUE INDEX `projeto_especial_UNIQUE` (`name` ASC)  COMMENT '',
  CONSTRAINT `fk_Projeto_especial_Instituicao`
    FOREIGN KEY (`institution_id`)
    REFERENCES `igsisv2`.`institutions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`age_groups`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`age_groups` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(7) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `faixa_etaria_UNIQUE` (`name` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`events`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`events` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(240) NOT NULL COMMENT '',
  `juridical_relation_id` INT NOT NULL COMMENT '',
  `especial_project_id` INT NOT NULL COMMENT '',
  `type_event_id` INT NOT NULL COMMENT '',
  `sub_event` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `fiscal_id` INT NOT NULL COMMENT '',
  `surrogate_id` INT NOT NULL COMMENT '',
  `author` LONGTEXT NOT NULL COMMENT '',
  `technical_form` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `age_group_id` INT(1) NOT NULL COMMENT '',
  `synopsis` LONGTEXT NOT NULL COMMENT '',
  `release_communication` LONGTEXT NOT NULL COMMENT '',
  `links` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `producer_id` INT NOT NULL COMMENT '',
  `user_id` INT NOT NULL COMMENT '',
  `institution_id` INT NOT NULL COMMENT '',
  `date_send` DATETIME NOT NULL COMMENT '',
  `public_target` VARCHAR(100) NULL DEFAULT NULL COMMENT '',
  `published` TINYINT(1) NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Evento_Tipo_evento_idx` (`type_event_id` ASC)  COMMENT '',
  INDEX `fk_Evento_Produtor_idx` (`producer_id` ASC)  COMMENT '',
  INDEX `fk_Evento_Usuario_usuario_idx` (`user_id` ASC)  COMMENT '',
  INDEX `fk_Evento_Modalidade_idx` (`juridical_relation_id` ASC)  COMMENT '',
  INDEX `fk_Evento_Instituicao_idx` (`institution_id` ASC)  COMMENT '',
  INDEX `fk_Evento_Projeto_especial_idx` (`especial_project_id` ASC)  COMMENT '',
  INDEX `fk_Evento_Faixa_etaria_idx` (`age_group_id` ASC)  COMMENT '',
  INDEX `fk_Evento_Usuario_fiscal_idx` (`fiscal_id` ASC)  COMMENT '',
  INDEX `fk_Evento_Usuario_suplente_idx` (`surrogate_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Evento_Tipo_evento`
    FOREIGN KEY (`type_event_id`)
    REFERENCES `igsisv2`.`type_events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Evento_Produtor`
    FOREIGN KEY (`producer_id`)
    REFERENCES `igsisv2`.`producers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Evento_Usuario_fiscal`
    FOREIGN KEY (`fiscal_id`)
    REFERENCES `igsisv2`.`fiscals` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Evento_Usuario_usuario`
    FOREIGN KEY (`user_id`)
    REFERENCES `igsisv2`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Evento_Relacao_juridica`
    FOREIGN KEY (`juridical_relation_id`)
    REFERENCES `igsisv2`.`juridical_relations` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Evento_Instituicao`
    FOREIGN KEY (`institution_id`)
    REFERENCES `igsisv2`.`institutions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Evento_Usuario_suplente`
    FOREIGN KEY (`surrogate_id`)
    REFERENCES `igsisv2`.`surrogates` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Evento_Projeto_especial`
    FOREIGN KEY (`especial_project_id`)
    REFERENCES `igsisv2`.`special_projects` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Evento_Faixa_etaria`
    FOREIGN KEY (`age_group_id`)
    REFERENCES `igsisv2`.`age_groups` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`upload_events`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`upload_events` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `event_id` INT NOT NULL COMMENT '',
  `file` LONGTEXT NOT NULL COMMENT '',
  `published` TINYINT(1) NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Arquivo_Evento_idx` (`event_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Arquivo_Evento`
    FOREIGN KEY (`event_id`)
    REFERENCES `igsisv2`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`visual_arts`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`visual_arts` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `evento_id` INT NOT NULL COMMENT '',
  `number` INT(2) NULL DEFAULT NULL COMMENT '',
  `type` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  `value` DECIMAL(10,2) NULL DEFAULT NULL COMMENT '',
  `panel` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `subtitle` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `identity` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `suport` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `collection` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `visual_artscol` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Artes_visuais_Evento_idx` (`evento_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Artes_visuais_Evento`
    FOREIGN KEY (`evento_id`)
    REFERENCES `igsisv2`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`movie_countries`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`movie_countries` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `country_name` VARCHAR(50) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `pais_name_UNIQUE` (`country_name` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`cinemas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`cinemas` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `event_id` INT NOT NULL COMMENT '',
  `title` VARCHAR(100) NOT NULL COMMENT '',
  `original_title` VARCHAR(100) NOT NULL COMMENT '',
  `direction` LONGTEXT NOT NULL COMMENT '',
  `country_id` INT NOT NULL COMMENT '',
  `production_year` TINYINT(4) NOT NULL COMMENT '',
  `synopsis` LONGTEXT NOT NULL COMMENT '',
  `cast` LONGTEXT NOT NULL COMMENT '',
  `genre` VARCHAR(20) NOT NULL COMMENT '',
  `age_ratting` INT(2) NOT NULL COMMENT '',
  `minutes` TINYINT(3) NOT NULL COMMENT '',
  `link_trailer` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `gauge` VARCHAR(30) NOT NULL COMMENT '',
  `published` TINYINT(1) UNSIGNED NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Cinema_Evento_idx` (`event_id` ASC)  COMMENT '',
  INDEX `fk_Cinema_Pais_idx` (`country_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Cinema_Evento`
    FOREIGN KEY (`event_id`)
    REFERENCES `igsisv2`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Cinema_Pais`
    FOREIGN KEY (`country_id`)
    REFERENCES `igsisv2`.`movie_countries` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`communications`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`communications` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `event_id` INT NULL DEFAULT NULL COMMENT '',
  `name_event` VARCHAR(240) NULL DEFAULT NULL COMMENT '',
  `special_project` INT(3) NULL DEFAULT NULL COMMENT '',
  `project` VARCHAR(120) NULL DEFAULT NULL COMMENT '',
  `institution_id` INT NULL DEFAULT NULL COMMENT '',
  `synopsis` LONGTEXT NOT NULL COMMENT '',
  `author` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `technical_form` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `seem_artistic` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `release_communication` LONGTEXT NOT NULL COMMENT '',
  `movie` INT(1) NULL DEFAULT NULL COMMENT '',
  `edited` INT(1) NULL DEFAULT NULL COMMENT '',
  `reviewed` INT(1) NULL DEFAULT NULL COMMENT '',
  `site` INT(1) NULL DEFAULT NULL COMMENT '',
  `record_audio` INT(1) NULL DEFAULT NULL COMMENT '',
  `record_video` INT(1) NULL DEFAULT NULL COMMENT '',
  `record_photography` INT(1) NULL DEFAULT NULL COMMENT '',
  `observation` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `photo` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `published` INT(1) NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Comunicacao_Evento_idx` (`event_id` ASC)  COMMENT '',
  INDEX `fk_Comunicacao_Instituicao_idx` (`institution_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Comunicacao_Evento`
    FOREIGN KEY (`event_id`)
    REFERENCES `igsisv2`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Comunicacao_Instituicao`
    FOREIGN KEY (`institution_id`)
    REFERENCES `igsisv2`.`institutions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`locals`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`locals` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `institution_id` INT NOT NULL COMMENT '',
  `local` VARCHAR(50) NOT NULL COMMENT '',
  `rider` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `published` TINYINT(1) UNSIGNED NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Local_Instituicao_idx` (`institution_id` ASC)  COMMENT '',
  UNIQUE INDEX `local_UNIQUE` (`local` ASC)  COMMENT '',
  CONSTRAINT `fk_Local_Instituicao`
    FOREIGN KEY (`institution_id`)
    REFERENCES `igsisv2`.`institutions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`logs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`logs` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `user_id` INT NOT NULL COMMENT '',
  `date_log` DATETIME NOT NULL COMMENT '',
  `address_ip` VARCHAR(20) NOT NULL COMMENT '',
  `description` LONGTEXT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Log_Usuario_idx` (`user_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Log_Usuario`
    FOREIGN KEY (`user_id`)
    REFERENCES `igsisv2`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`musics`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`musics` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `event_id` INT NOT NULL COMMENT '',
  `genre` VARCHAR(30) NOT NULL COMMENT '',
  `sale` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `material` LONGTEXT NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Musica_Evento_idx` (`event_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Musica_Evento`
    FOREIGN KEY (`event_id`)
    REFERENCES `igsisv2`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`type_occurrences`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`type_occurrences` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `occurrence_type` VARCHAR(60) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `occurrence_type_UNIQUE` (`occurrence_type` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`sub_events`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`sub_events` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `event_id` INT NOT NULL COMMENT '',
  `type_event_id` INT NOT NULL COMMENT '',
  `title` VARCHAR(120) NOT NULL COMMENT '',
  `description` LONGTEXT NOT NULL COMMENT '',
  `published` INT(1) NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Sub_evento__idx` (`type_event_id` ASC)  COMMENT '',
  INDEX `fk_Sub_evento_Evento_idx` (`event_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Sub_evento_Tipo_evento`
    FOREIGN KEY (`type_event_id`)
    REFERENCES `igsisv2`.`type_events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Sub_evento_Evento`
    FOREIGN KEY (`event_id`)
    REFERENCES `igsisv2`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`occurrences`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`occurrences` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `event_id` INT NOT NULL COMMENT '',
  `sub_event_id` INT NULL DEFAULT NULL COMMENT '',
  `occurrence_type_id` INT NOT NULL COMMENT '',
  `date_starter` DATE NOT NULL COMMENT '',
  `date_final` DATE NULL DEFAULT NULL COMMENT '',
  `monday` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `tuesday` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `wednesday` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `thursday` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `friday` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `saturday` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `sunday` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `duration` INT(4) NOT NULL COMMENT '',
  `especial_day` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `audio_description` TINYINT(1) UNSIGNED NULL DEFAULT NULL COMMENT '',
  `libras` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `start_hour` TIME NOT NULL COMMENT '',
  `cultural_turn` TINYINT(1) UNSIGNED NULL DEFAULT NULL COMMENT '',
  `popular_price` DECIMAL(10,2) NULL DEFAULT NULL COMMENT '',
  `get_ticket` TINYINT(1) NOT NULL COMMENT '',
  `ticket_value` DECIMAL(10,2) NOT NULL COMMENT '',
  `local_id` INT NOT NULL COMMENT '',
  `local_other` VARCHAR(120) NOT NULL COMMENT '',
  `reserved` INT(4) NULL DEFAULT NULL COMMENT '',
  `capacity` INT(7) NULL DEFAULT NULL COMMENT '',
  `timezone` INT(3) NULL DEFAULT NULL COMMENT '',
  `all_day` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `frequency` VARCHAR(120) NULL DEFAULT NULL COMMENT '',
  `cinema_id` INT NULL DEFAULT NULL COMMENT '',
  `published` TINYINT(1) NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Ocorrencia_Tipo_ocorrencia_idx` (`occurrence_type_id` ASC)  COMMENT '',
  INDEX `fk_Ocorrencia_Evento_idx` (`event_id` ASC)  COMMENT '',
  INDEX `fk_Ocorrencia_Cinema_idx` (`cinema_id` ASC)  COMMENT '',
  INDEX `fk_Ocorrencia_Sub_evento_idx` (`sub_event_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Ocorrencia_Tipo_ocorrencia`
    FOREIGN KEY (`occurrence_type_id`)
    REFERENCES `igsisv2`.`type_occurrences` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Ocorrencia_Evento`
    FOREIGN KEY (`event_id`)
    REFERENCES `igsisv2`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Ocorrencia_Cinema`
    FOREIGN KEY (`cinema_id`)
    REFERENCES `igsisv2`.`cinemas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Ocorrencia_Sub_evento`
    FOREIGN KEY (`sub_event_id`)
    REFERENCES `igsisv2`.`sub_events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`workshops`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`workshops` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `event_id` INT NOT NULL COMMENT '',
  `certificate` TINYINT(1) UNSIGNED NOT NULL COMMENT '',
  `vacancies` INT(3) NOT NULL COMMENT '',
  `public` LONGTEXT NOT NULL COMMENT '',
  `material` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `inscription` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `value_hour` VARCHAR(12) NULL DEFAULT NULL COMMENT '',
  `sale` TINYINT(1) UNSIGNED NULL DEFAULT NULL COMMENT '',
  `divulgation` DATE NULL DEFAULT NULL COMMENT '',
  `workload` INT(3) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Oficinas_Evento_idx` (`event_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Oficinas_Evento`
    FOREIGN KEY (`event_id`)
    REFERENCES `igsisv2`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`information_productions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`information_productions` (
  `id` INT NOT NULL COMMENT '',
  `event_id` INT NOT NULL COMMENT '',
  `team` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `infrastructure` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `registro_audio` INT NULL DEFAULT NULL COMMENT '',
  `registro_fotografia` INT NULL DEFAULT NULL COMMENT '',
  `registro_video` INT NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Producao_Evento_idx` (`event_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Producao_Evento`
    FOREIGN KEY (`event_id`)
    REFERENCES `igsisv2`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`artistic_proposals`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`artistic_proposals` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(255) NOT NULL COMMENT '',
  `synopsis` LONGTEXT NOT NULL COMMENT '',
  `technical_form` LONGTEXT NOT NULL COMMENT '',
  `historic_artists` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `local_origin` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `local_presentation` LONGTEXT NOT NULL COMMENT '',
  `budget` VARCHAR(255) NOT NULL COMMENT '',
  `language` VARCHAR(255) NOT NULL COMMENT '',
  `infraestructure` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `contact` LONGTEXT NOT NULL COMMENT '',
  `links` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `date_send` DATETIME NOT NULL COMMENT '',
  `link_agent_spcultura` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`services`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`services` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `event_id` INT NOT NULL COMMENT '',
  `libras` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `subtitle` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `translation` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `graphics` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `pass` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `audio_description` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `mounting` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `accommodation` VARCHAR(120) NULL DEFAULT NULL COMMENT '',
  `security` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `transport` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `itinerary` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `company_name` VARCHAR(120) NULL DEFAULT NULL COMMENT '',
  `cpfCnpj` VARCHAR(12) NULL DEFAULT NULL COMMENT '',
  `bank` VARCHAR(24) NULL DEFAULT NULL COMMENT '',
  `bank_branch` VARCHAR(12) NULL DEFAULT NULL COMMENT '',
  `account` VARCHAR(12) NULL DEFAULT NULL COMMENT '',
  `billing` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `capacity` LONGTEXT NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Servico_Evento_idx` (`event_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Servico_Evento`
    FOREIGN KEY (`event_id`)
    REFERENCES `igsisv2`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`theater_dances`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`theater_dances` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `event_id` INT NOT NULL COMMENT '',
  `premiere` TINYINT(1) UNSIGNED NOT NULL COMMENT '',
  `genre` VARCHAR(60) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Teatro_danca_Evento_idx` (`event_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Teatro_danca_Evento`
    FOREIGN KEY (`event_id`)
    REFERENCES `igsisv2`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`type_persons`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`type_persons` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `person_type` VARCHAR(20) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`6354`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`6354` (
  `id` INT NOT NULL COMMENT '',
  `effort` INT(12) NULL DEFAULT NULL COMMENT '',
  `date_effort` DATETIME NULL DEFAULT NULL COMMENT '',
  `year` INT(5) NULL DEFAULT NULL COMMENT '',
  `process` VARCHAR(25) NULL DEFAULT NULL COMMENT '',
  `description` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `cancellation` DOUBLE(10,2) NULL DEFAULT NULL COMMENT '',
  `sold_out` DOUBLE(10,2) NULL DEFAULT NULL COMMENT '',
  `value` DOUBLE(10,2) NULL DEFAULT NULL COMMENT '',
  `value_pay` DOUBLE(10,2) NULL DEFAULT NULL COMMENT '',
  `paid` DOUBLE(10,2) NULL DEFAULT NULL COMMENT '',
  `total` DOUBLE(10,2) NULL DEFAULT NULL COMMENT '',
  `cpf_cnpj` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `social_reason` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `allocation` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`agenda_posters`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`agenda_posters` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `event_id` INT NOT NULL COMMENT '',
  `name_event` VARCHAR(120) NOT NULL COMMENT '',
  `type_event_id` INT NOT NULL COMMENT '',
  `type_event` INT(11) NOT NULL COMMENT '',
  `institution_id` INT NOT NULL COMMENT '',
  `local_id` INT NOT NULL COMMENT '',
  `occurrences_id` INT NOT NULL COMMENT '',
  `date` DATE NOT NULL COMMENT '',
  `hour` TIME NOT NULL COMMENT '',
  `cinema_id` INT NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Agenda_emcartaz_Evento_idx` (`event_id` ASC)  COMMENT '',
  INDEX `fk_Agenda_emcartaz_Local_idx` (`local_id` ASC)  COMMENT '',
  INDEX `fk_Agenda_emcartaz_Instituicao_idx` (`institution_id` ASC)  COMMENT '',
  INDEX `fk_Agenda_emcartaz_Ocorrencia_idx` (`occurrences_id` ASC)  COMMENT '',
  INDEX `fk_Agenda_emcartaz_Cinema_idx` (`cinema_id` ASC)  COMMENT '',
  INDEX `fk_Agenda_emcartaz_Tipo_evento_idx` (`type_event_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Agenda_emcartaz_Evento`
    FOREIGN KEY (`event_id`)
    REFERENCES `igsisv2`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Agenda_emcartaz_Local`
    FOREIGN KEY (`local_id`)
    REFERENCES `igsisv2`.`locals` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Agenda_emcartaz_Instituicao`
    FOREIGN KEY (`institution_id`)
    REFERENCES `igsisv2`.`institutions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Agenda_emcartaz_Ocorrencia`
    FOREIGN KEY (`occurrences_id`)
    REFERENCES `igsisv2`.`occurrences` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Agenda_emcartaz_Cinema`
    FOREIGN KEY (`cinema_id`)
    REFERENCES `igsisv2`.`cinemas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Agenda_emcartaz_Tipo_evento`
    FOREIGN KEY (`type_event_id`)
    REFERENCES `igsisv2`.`type_events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`formation_projects`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`formation_projects` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `project` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `projeto_UNIQUE` (`project` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`formation_offices`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`formation_offices` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `office` VARCHAR(200) NOT NULL COMMENT '',
  `justification` LONGTEXT NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `cargo_UNIQUE` (`office` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`formation_effectives`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`formation_effectives` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `period` VARCHAR(11) NOT NULL COMMENT '',
  `value` DECIMAL(10,2) NOT NULL COMMENT '',
  `description` VARCHAR(60) NOT NULL COMMENT '',
  `year` INT(4) NOT NULL COMMENT '',
  `user_id` INT(11) NOT NULL COMMENT '',
  `published` TINYINT(1) UNSIGNED NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Formacao_vigencia_Usuario_idx` (`user_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Formacao_vigencia_Usuario`
    FOREIGN KEY (`user_id`)
    REFERENCES `igsisv2`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`formation_programs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`formation_programs` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `program` VARCHAR(45) NOT NULL COMMENT '',
  `fund` INT(3) NULL DEFAULT NULL COMMENT '',
  `notice` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `description` LONGTEXT NOT NULL COMMENT '',
  `published` TINYINT(1) UNSIGNED NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `programa_UNIQUE` (`program` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`formation_languages`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`formation_languages` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `language` VARCHAR(20) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `linguagem_UNIQUE` (`language` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`civil_status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`civil_status` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `civil_status` VARCHAR(15) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `estado_civil_UNIQUE` (`civil_status` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`banks`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`banks` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `code` VARCHAR(5) NOT NULL COMMENT '',
  `bank` VARCHAR(250) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`type_documents`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`type_documents` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `document` VARCHAR(30) NOT NULL COMMENT '',
  `type_documentscol` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`physical_persons`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`physical_persons` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `photo` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `name` VARCHAR(70) NOT NULL COMMENT '',
  `artistic_name` VARCHAR(70) NULL DEFAULT NULL COMMENT '',
  `date_birth` VARCHAR(100) NOT NULL COMMENT '',
  `type_document_id` INT NULL DEFAULT NULL COMMENT '',
  `rg` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  `cpf` CHAR(14) NOT NULL COMMENT '',
  `cbo` VARCHAR(10) NULL DEFAULT NULL COMMENT '',
  `ccm` CHAR(11) NULL DEFAULT NULL COMMENT '',
  `drt` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `nit` VARCHAR(50) NULL DEFAULT NULL COMMENT '',
  `pis` VARCHAR(50) NULL DEFAULT NULL COMMENT '',
  `omb` VARCHAR(50) NULL DEFAULT NULL COMMENT '',
  `function` VARCHAR(50) NULL DEFAULT NULL COMMENT '',
  `civil_status_id` INT(11) NOT NULL COMMENT '',
  `nationality` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  `cep` VARCHAR(11) NOT NULL COMMENT '',
  `phone_1` VARCHAR(15) NOT NULL COMMENT '',
  `phone_2` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `phone_3` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `email` VARCHAR(50) NOT NULL COMMENT '',
  `bank_id` INT NULL DEFAULT NULL COMMENT '',
  `bank_branch` VARCHAR(12) NULL DEFAULT NULL COMMENT '',
  `account` VARCHAR(12) NULL DEFAULT NULL COMMENT '',
  `observation` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `date_update` DATE NOT NULL COMMENT '',
  `event_id` INT NULL DEFAULT NULL COMMENT '',
  `user_id` INT NOT NULL COMMENT '',
  `physical_personscol` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Pessoa_fisica_Estado_civil_idx` (`civil_status_id` ASC)  COMMENT '',
  INDEX `fk_Pessoa_fisica_Usuario_idx` (`user_id` ASC)  COMMENT '',
  INDEX `fk_Pessoa_fisica_Evento_idx` (`event_id` ASC)  COMMENT '',
  INDEX `k_Pessoa_fisica_Banco_idx` (`bank_id` ASC)  COMMENT '',
  INDEX `fk_Pessoa_fisica_Tipo_documento_idx` (`type_document_id` ASC)  COMMENT '',
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC)  COMMENT '',
  CONSTRAINT `fk_Pessoa_fisica_Estado_civil`
    FOREIGN KEY (`civil_status_id`)
    REFERENCES `igsisv2`.`civil_status` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_fisica_Usuario`
    FOREIGN KEY (`user_id`)
    REFERENCES `igsisv2`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_fisica_Evento`
    FOREIGN KEY (`event_id`)
    REFERENCES `igsisv2`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_fisica_Banco`
    FOREIGN KEY (`bank_id`)
    REFERENCES `igsisv2`.`banks` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_fisica_Tipo_documento`
    FOREIGN KEY (`type_document_id`)
    REFERENCES `igsisv2`.`type_documents` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`formation_coordinations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`formation_coordinations` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `coordination` VARCHAR(60) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `coordenadoria_UNIQUE` (`coordination` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`formations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`formations` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `fisical_person_id` INT NOT NULL COMMENT '',
  `post_id` INT NOT NULL COMMENT '',
  `effective_id` INT NOT NULL COMMENT '',
  `coordination_id` INT NOT NULL COMMENT '',
  `program_id` INT NOT NULL COMMENT '',
  `language_id` INT NOT NULL COMMENT '',
  `project_id` INT NOT NULL COMMENT '',
  `local_1_id` INT NOT NULL COMMENT '',
  `local_2_id` INT NULL DEFAULT NULL COMMENT '',
  `local_3_id` INT NULL DEFAULT NULL COMMENT '',
  `year` CHAR(4) NOT NULL COMMENT '',
  `call` INT(2) NULL DEFAULT NULL COMMENT '',
  `status` VARCHAR(10) NOT NULL COMMENT '',
  `ponctuation` INT(2) NULL DEFAULT NULL COMMENT '',
  `observation` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `fund` INT(3) NULL DEFAULT NULL COMMENT '',
  `payment_process_number` CHAR(16) NOT NULL COMMENT '',
  `user_id` INT NOT NULL COMMENT '',
  `territory` INT(3) NULL DEFAULT NULL COMMENT '',
  `subprefecture` INT(11) NOT NULL COMMENT '',
  `fiscal` INT(11) NOT NULL COMMENT '',
  `surrogate` INT(11) NOT NULL COMMENT '',
  `date_send` DATETIME NOT NULL COMMENT '',
  `published` TINYINT(1) NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Formacao_Formacao_projeto_idx` (`project_id` ASC)  COMMENT '',
  INDEX `fk_Formacao_Local_idx` (`local_1_id` ASC)  COMMENT '',
  INDEX `fk_Formacao_Formacao_cargo_idx` (`post_id` ASC)  COMMENT '',
  INDEX `fk_Formacao_Formacao_vigencia_idx` (`effective_id` ASC)  COMMENT '',
  INDEX `fk_Formacao_Formacao_programa_idx` (`program_id` ASC)  COMMENT '',
  INDEX `fk_Formacao_Formacao_linguagem_idx` (`language_id` ASC)  COMMENT '',
  INDEX `fk_Formacao_Usuario_idx` (`user_id` ASC)  COMMENT '',
  INDEX `fk_Formacao_Pessoa_fisica_idx` (`fisical_person_id` ASC)  COMMENT '',
  INDEX `fk_Formacao_Local2_idx` (`local_2_id` ASC)  COMMENT '',
  INDEX `fk_Formacao_Local3_idx` (`local_3_id` ASC)  COMMENT '',
  INDEX `fk_Formacao_Coordenadoria_idx` (`coordination_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Formacao_Formacao_projeto`
    FOREIGN KEY (`project_id`)
    REFERENCES `igsisv2`.`formation_projects` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Formacao_Local1`
    FOREIGN KEY (`local_1_id`)
    REFERENCES `igsisv2`.`locals` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Formacao_Formacao_cargo`
    FOREIGN KEY (`post_id`)
    REFERENCES `igsisv2`.`formation_offices` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Formacao_Formacao_vigencia`
    FOREIGN KEY (`effective_id`)
    REFERENCES `igsisv2`.`formation_effectives` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Formacao_Formacao_programa`
    FOREIGN KEY (`program_id`)
    REFERENCES `igsisv2`.`formation_programs` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Formacao_Formacao_linguagem`
    FOREIGN KEY (`language_id`)
    REFERENCES `igsisv2`.`formation_languages` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Formacao_Usuario`
    FOREIGN KEY (`user_id`)
    REFERENCES `igsisv2`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Formacao_Pessoa_fisica`
    FOREIGN KEY (`fisical_person_id`)
    REFERENCES `igsisv2`.`physical_persons` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Formacao_Local2`
    FOREIGN KEY (`local_2_id`)
    REFERENCES `igsisv2`.`locals` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Formacao_Local3`
    FOREIGN KEY (`local_3_id`)
    REFERENCES `igsisv2`.`locals` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Formacao_Coordenadoria`
    FOREIGN KEY (`coordination_id`)
    REFERENCES `igsisv2`.`formation_coordinations` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`funds`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`funds` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `fund` VARCHAR(120) NOT NULL COMMENT '',
  `father` INT(2) NULL DEFAULT NULL COMMENT '',
  `institution_id` INT NULL DEFAULT NULL COMMENT '',
  `pf` DECIMAL(10,2) NULL DEFAULT NULL COMMENT '',
  `pj` DECIMAL(10,2) NULL DEFAULT NULL COMMENT '',
  `reward` DECIMAL(12,2) NULL DEFAULT NULL COMMENT '',
  `budget_allocation` CHAR(32) NULL DEFAULT NULL COMMENT '',
  `multiple` TINYINT(1) UNSIGNED NULL COMMENT '',
  `do_pf` TINYINT(3) UNSIGNED NOT NULL COMMENT '',
  `do_Pj` TINYINT(3) UNSIGNED NOT NULL COMMENT '',
  `do_premium` TINYINT(3) UNSIGNED NOT NULL COMMENT '',
  `detailing_action` VARCHAR(200) NOT NULL COMMENT '',
  `number_reserve_pj` VARCHAR(7) NOT NULL COMMENT '',
  `link_pj` VARCHAR(7) NOT NULL COMMENT '',
  `number_reserve_pf` VARCHAR(7) NOT NULL COMMENT '',
  `link_pf` VARCHAR(7) NOT NULL COMMENT '',
  `number_reserve_charges` VARCHAR(7) NOT NULL COMMENT '',
  `vocative` VARCHAR(150) NOT NULL COMMENT '',
  `sector_vocative` VARCHAR(150) NOT NULL COMMENT '',
  `fundscol` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Verba_Instituicao_idx` (`institution_id` ASC)  COMMENT '',
  UNIQUE INDEX `verba_UNIQUE` (`fund` ASC)  COMMENT '',
  CONSTRAINT `fk_Verba_Instituicao`
    FOREIGN KEY (`institution_id`)
    REFERENCES `igsisv2`.`institutions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`penalties`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`penalties` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `model` VARCHAR(60) NOT NULL COMMENT '',
  `txt` LONGTEXT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`legal_representatives`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`legal_representatives` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `event_id` INT NULL DEFAULT NULL COMMENT '',
  `legal_representative` VARCHAR(100) NOT NULL COMMENT '',
  `civil_status_id` INT NOT NULL COMMENT '',
  `rg` VARCHAR(15) NOT NULL COMMENT '',
  `cpf` CHAR(14) NOT NULL COMMENT '',
  `nationality` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Representante_legal_Estado_civil_idx` (`civil_status_id` ASC)  COMMENT '',
  INDEX `fk_Representante_legal_Evento_idx` (`event_id` ASC)  COMMENT '',
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC)  COMMENT '',
  UNIQUE INDEX `rg_UNIQUE` (`rg` ASC)  COMMENT '',
  CONSTRAINT `fk_Representante_legal_Estado_civil`
    FOREIGN KEY (`civil_status_id`)
    REFERENCES `igsisv2`.`civil_status` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Representante_legal_Evento`
    FOREIGN KEY (`event_id`)
    REFERENCES `igsisv2`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`legal_persons`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`legal_persons` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `company_name` VARCHAR(100) NOT NULL COMMENT '',
  `cnpj` CHAR(18) NOT NULL COMMENT '',
  `ccm` CHAR(11) NULL DEFAULT NULL COMMENT '',
  `cep` VARCHAR(11) NOT NULL COMMENT '',
  `phone_1` VARCHAR(15) NOT NULL COMMENT '',
  `phone_2` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `phone_3` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `email` VARCHAR(50) NOT NULL COMMENT '',
  `legal_representative_1_id` INT NOT NULL COMMENT '',
  `legal_representative_2_id` INT NULL DEFAULT NULL COMMENT '',
  `bank_id` INT(3) NULL DEFAULT NULL COMMENT '',
  `bank_branch` VARCHAR(12) NULL DEFAULT NULL COMMENT '',
  `account` VARCHAR(12) NULL DEFAULT NULL COMMENT '',
  `observation` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `user_id` INT NOT NULL COMMENT '',
  `event_id` INT NULL DEFAULT NULL COMMENT '',
  `date_update` DATETIME NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Pessoa_juridica_Usuario_idx` (`user_id` ASC)  COMMENT '',
  INDEX `fk_Pessoa_juridica_Evento_idx` (`event_id` ASC)  COMMENT '',
  INDEX `fk_Pessoa_juridica_Representante_legal_idx` (`legal_representative_1_id` ASC)  COMMENT '',
  INDEX `fk_Pessoa_juridica_Banco_idx` (`bank_id` ASC)  COMMENT '',
  INDEX `fk_Pessoa_juridica_Representante_legal_idx1` (`legal_representative_2_id` ASC)  COMMENT '',
  UNIQUE INDEX `cnpj_UNIQUE` (`cnpj` ASC)  COMMENT '',
  CONSTRAINT `fk_Pessoa_juridica_Usuario`
    FOREIGN KEY (`user_id`)
    REFERENCES `igsisv2`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_juridica_Evento`
    FOREIGN KEY (`event_id`)
    REFERENCES `igsisv2`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_juridica_Representante_legal1`
    FOREIGN KEY (`legal_representative_1_id`)
    REFERENCES `igsisv2`.`legal_representatives` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_juridica_Banco`
    FOREIGN KEY (`bank_id`)
    REFERENCES `igsisv2`.`banks` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_juridica_Representante_legal2`
    FOREIGN KEY (`legal_representative_2_id`)
    REFERENCES `igsisv2`.`legal_representatives` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`status` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `status` VARCHAR(25) NOT NULL COMMENT '',
  `order` INT(2) UNSIGNED NOT NULL COMMENT '',
  `area` INT(1) UNSIGNED NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`hiring_requests`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`hiring_requests` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `type_modality_hiring` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `modality_hiring_id` INT NOT NULL COMMENT '',
  `type_person_id` INT NULL DEFAULT NULL COMMENT '',
  `person_id` INT NOT NULL COMMENT '',
  `executant_id` INT NOT NULL COMMENT '',
  `value` DECIMAL(10,2) NOT NULL COMMENT '',
  `form_of_payment` LONGTEXT NOT NULL COMMENT '',
  `quantity_installment` INT(2) NOT NULL COMMENT '',
  `fund_id` INT(11) NOT NULL COMMENT '',
  `seem_artistic` LONGTEXT NOT NULL COMMENT '',
  `justification` LONGTEXT NOT NULL COMMENT '',
  `observation` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `institution_id` INT NOT NULL COMMENT '',
  `process_number` CHAR(19) NULL DEFAULT NULL COMMENT '',
  `number_note_empenho` VARCHAR(8) NULL DEFAULT NULL COMMENT '',
  `penalties_id` INT NULL DEFAULT NULL COMMENT '',
  `date_emission_note_empenho` DATE NULL DEFAULT NULL COMMENT '',
  `date_delivery_note_empenho` DATE NULL DEFAULT NULL COMMENT '',
  `contract_operator_id` INT NULL DEFAULT NULL COMMENT '',
  `status_id` INT NULL DEFAULT NULL COMMENT '',
  `approval_finance` TINYINT(1) UNSIGNED NULL DEFAULT NULL COMMENT '',
  `support_legal` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `budget_allocation` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `completion` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `date_contract` DATETIME NULL DEFAULT NULL COMMENT '',
  `date_proposal` DATETIME NULL DEFAULT NULL COMMENT '',
  `date_reserve` DATETIME NULL DEFAULT NULL COMMENT '',
  `date_juridical` DATETIME NOT NULL COMMENT '',
  `date_publication` DATETIME NOT NULL COMMENT '',
  `date_accounting` DATETIME NOT NULL COMMENT '',
  `date_payment` DATETIME NOT NULL COMMENT '',
  `process_sof` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  `extract_liquidation` INT(11) NULL DEFAULT NULL COMMENT '',
  `retention_INSS` INT(11) NULL DEFAULT NULL COMMENT '',
  `retention_ISS` INT(11) NULL DEFAULT NULL COMMENT '',
  `retention_IRRF` INT(11) NULL DEFAULT NULL COMMENT '',
  `published` TINYINT(1) NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_igsis_pedido_contratacao_idModalidadeContratacao_idx` (`modality_hiring_id` ASC)  COMMENT '',
  INDEX `fk_Pedido_contratacao_Penalidade_idx` (`penalties_id` ASC)  COMMENT '',
  INDEX `fk_Pedido_contracao_Pessoa_fisica_idx` (`person_id` ASC)  COMMENT '',
  INDEX `fk_Pedido_contratacao_Pessoa_fisica_idx` (`executant_id` ASC)  COMMENT '',
  INDEX `fk_Pedido_contratacao_Estado_idx` (`status_id` ASC)  COMMENT '',
  INDEX `fk_Pedido_contratacao_Tipo_pessoa_idx` (`type_person_id` ASC)  COMMENT '',
  INDEX `fk_Pedido_contratacao_Verba_idx` (`fund_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Pedido_contratacao_Formacao`
    FOREIGN KEY (`modality_hiring_id`)
    REFERENCES `igsisv2`.`formations` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_contratacao_Evento`
    FOREIGN KEY (`modality_hiring_id`)
    REFERENCES `igsisv2`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_contratacao_Verba`
    FOREIGN KEY (`fund_id`)
    REFERENCES `igsisv2`.`funds` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_contratacao_Penalidade`
    FOREIGN KEY (`penalties_id`)
    REFERENCES `igsisv2`.`penalties` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_contracao_Pessoa_fisica`
    FOREIGN KEY (`person_id`)
    REFERENCES `igsisv2`.`physical_persons` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_contratacao_Pessoa_juridica`
    FOREIGN KEY (`person_id`)
    REFERENCES `igsisv2`.`legal_persons` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_contratacao_Pessoa_fisica`
    FOREIGN KEY (`executant_id`)
    REFERENCES `igsisv2`.`physical_persons` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_contratacao_Estado`
    FOREIGN KEY (`status_id`)
    REFERENCES `igsisv2`.`status` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_contratacao_Tipo_pessoa`
    FOREIGN KEY (`type_person_id`)
    REFERENCES `igsisv2`.`type_persons` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`upload_categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`upload_categories` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `category` VARCHAR(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`upload_document_names`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`upload_document_names` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `upload_category_id` INT UNSIGNED NULL DEFAULT NULL COMMENT '',
  `document` VARCHAR(120) NOT NULL COMMENT '',
  `initials` VARCHAR(10) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Nome_documento_Upload_categoria_idx` (`upload_category_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Nome_documento_Upload_categoria`
    FOREIGN KEY (`upload_category_id`)
    REFERENCES `igsisv2`.`upload_categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`upload_requests`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`upload_requests` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `upload_name_document_id` INT NOT NULL COMMENT '',
  `file` LONGTEXT NOT NULL COMMENT '',
  `date` DATETIME NOT NULL COMMENT '',
  `hiring_request_id` INT NOT NULL COMMENT '',
  `published` TINYINT(1) NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Arquivos_pedidos_Pedido_contratacao_idx` (`hiring_request_id` ASC)  COMMENT '',
  INDEX `fk_Upload_pedido_Upload_nome_documento_idx` (`upload_name_document_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Upload_pedidos_Pedido_contratacao`
    FOREIGN KEY (`hiring_request_id`)
    REFERENCES `igsisv2`.`hiring_requests` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Upload_pedido_Upload_nome_documento`
    FOREIGN KEY (`upload_name_document_id`)
    REFERENCES `igsisv2`.`upload_document_names` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`upload_persons`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`upload_persons` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `type_person_id` INT NULL DEFAULT NULL COMMENT '',
  `person_id` INT NULL DEFAULT NULL COMMENT '',
  `file` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `date_send` DATE NULL DEFAULT NULL COMMENT '',
  `upload_name_document_id` INT NULL DEFAULT NULL COMMENT '',
  `published` INT(1) NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Arquivos_pessoa_Tipo_pessoa_idx` (`type_person_id` ASC)  COMMENT '',
  INDEX `fk_Arquivo_Pessoa_fisica_idx` (`person_id` ASC)  COMMENT '',
  INDEX `fk_Upload_Upload_nome_documento_idx` (`upload_name_document_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Upload_pessoa_Tipo_pessoa`
    FOREIGN KEY (`type_person_id`)
    REFERENCES `igsisv2`.`type_persons` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Upload_pessoa_Pessoa_fisica`
    FOREIGN KEY (`person_id`)
    REFERENCES `igsisv2`.`physical_persons` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Upload_pessoa_Pessoa_juridica`
    FOREIGN KEY (`person_id`)
    REFERENCES `igsisv2`.`legal_persons` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Upload_pessoa_Upload_nome_documento`
    FOREIGN KEY (`upload_name_document_id`)
    REFERENCES `igsisv2`.`upload_document_names` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`renewals`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`renewals` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `date` DATE NOT NULL COMMENT '',
  `text` LONGTEXT NOT NULL COMMENT '',
  `type` VARCHAR(10) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`type_calls`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`type_calls` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `call` VARCHAR(120) NOT NULL COMMENT '',
  `area` INT(1) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`calls`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`calls` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `type_call_id` INT NOT NULL COMMENT '',
  `event_id` INT NOT NULL COMMENT '',
  `user_id` INT NOT NULL COMMENT '',
  `title` VARCHAR(120) NOT NULL COMMENT '',
  `description` LONGTEXT NOT NULL COMMENT '',
  `justification` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `date` DATETIME NOT NULL COMMENT '',
  `status` INT(2) NULL DEFAULT NULL COMMENT '',
  `note` LONGTEXT NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Chamado_Usuario_idx` (`user_id` ASC)  COMMENT '',
  INDEX `fk_Chamado_Evento_idx` (`event_id` ASC)  COMMENT '',
  INDEX `fk_Chamado_Tipo_chamado_idx` (`type_call_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Chamado_Usuario`
    FOREIGN KEY (`user_id`)
    REFERENCES `igsisv2`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Chamado_Evento`
    FOREIGN KEY (`event_id`)
    REFERENCES `igsisv2`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Chamado_Tipo_chamado`
    FOREIGN KEY (`type_call_id`)
    REFERENCES `igsisv2`.`type_calls` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`call_comments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`call_comments` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `call_id` INT NOT NULL COMMENT '',
  `user_id` INT NOT NULL COMMENT '',
  `date` DATETIME NOT NULL COMMENT '',
  `comment` LONGTEXT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Chamado_comentarios_Chamado_idx` (`call_id` ASC)  COMMENT '',
  INDEX `fk_Chamado_comentario_Usuario_idx` (`user_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Chamado_comentarios_Chamado`
    FOREIGN KEY (`call_id`)
    REFERENCES `igsisv2`.`calls` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Chamado_comentario_Usuario`
    FOREIGN KEY (`user_id`)
    REFERENCES `igsisv2`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`estimate_controls`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`estimate_controls` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `user_id` INT NOT NULL COMMENT '',
  `institution_id` INT NOT NULL COMMENT '',
  `fund_id` INT NOT NULL COMMENT '',
  `fund_father` TINYINT(2) UNSIGNED NULL DEFAULT NULL COMMENT '',
  `published` TINYINT(1) NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Controle_orcamento_Usuario_idx` (`user_id` ASC)  COMMENT '',
  INDEX `fk_Controle_orcamento_idx` (`fund_id` ASC)  COMMENT '',
  INDEX `fk_Controle_orcamento_Instituicao_idx` (`institution_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Controle_orcamento_Usuario`
    FOREIGN KEY (`user_id`)
    REFERENCES `igsisv2`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Controle_orcamento`
    FOREIGN KEY (`fund_id`)
    REFERENCES `igsisv2`.`funds` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Controle_orcamento_Instituicao`
    FOREIGN KEY (`institution_id`)
    REFERENCES `igsisv2`.`institutions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`phrases`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`phrases` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `phrase` LONGTEXT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`members`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`members` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `hiring_request_id` INT NOT NULL COMMENT '',
  `full_name` VARCHAR(120) NOT NULL COMMENT '',
  `rg` VARCHAR(30) NOT NULL COMMENT '',
  `cpf` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  `published` TINYINT(1) NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Grupos_Pedido_contratacao_idx` (`hiring_request_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Grupos_Pedido_contratacao`
    FOREIGN KEY (`hiring_request_id`)
    REFERENCES `igsisv2`.`hiring_requests` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`options`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`options` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `value` INT(1) NOT NULL COMMENT '',
  `string_option` VARCHAR(60) NOT NULL COMMENT '',
  `option` VARCHAR(30) NOT NULL COMMENT '',
  `coverage` VARCHAR(120) NULL DEFAULT NULL COMMENT '',
  `type` VARCHAR(120) NULL DEFAULT NULL COMMENT '',
  `code` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `alert` LONGTEXT NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`installments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`installments` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `hiring_request_id` INT NOT NULL COMMENT '',
  `number` INT(2) NOT NULL COMMENT '',
  `value` DOUBLE NOT NULL COMMENT '',
  `winning` DATETIME NULL DEFAULT NULL COMMENT '',
  `description` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `start_effective` DATE NULL DEFAULT NULL COMMENT '',
  `final_effective` DATE NULL DEFAULT NULL COMMENT '',
  `hours` TIME NULL DEFAULT NULL COMMENT '',
  `published` TINYINT(1) NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Parcelas_Pedido_contratacao_idx` (`hiring_request_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Parcelas_Pedido_contratacao`
    FOREIGN KEY (`hiring_request_id`)
    REFERENCES `igsisv2`.`hiring_requests` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`times`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`times` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `user_id` INT NOT NULL COMMENT '',
  `time` DATETIME NOT NULL COMMENT '',
  `ip` VARCHAR(20) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Time_Usuario_idx` (`user_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Time_Usuario`
    FOREIGN KEY (`user_id`)
    REFERENCES `igsisv2`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`check_productions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`check_productions` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `event_id` INT NOT NULL COMMENT '',
  `institution_id` INT NOT NULL COMMENT '',
  `status` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `user_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Verifica_producao_Evento_idx` (`event_id` ASC)  COMMENT '',
  INDEX `fk_Verifica_producao_Usuario_idx` (`user_id` ASC)  COMMENT '',
  INDEX `fk_Verifica_producao_Instituicao_idx` (`institution_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Verifica_producao_Evento`
    FOREIGN KEY (`event_id`)
    REFERENCES `igsisv2`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Verifica_producao_Usuario`
    FOREIGN KEY (`user_id`)
    REFERENCES `igsisv2`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Verifica_producao_Instituicao`
    FOREIGN KEY (`institution_id`)
    REFERENCES `igsisv2`.`institutions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`weblogs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`weblogs` (
  `id_inicio` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `institution_id` INT(2) NOT NULL COMMENT '',
  `title` VARCHAR(240) NOT NULL COMMENT '',
  `message` LONGTEXT NOT NULL COMMENT '',
  `date` DATETIME NOT NULL COMMENT '',
  `published` TINYINT(1) NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id_inicio`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`ethnicities`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`ethnicities` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `ethnicity` VARCHAR(15) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `etnia_UNIQUE` (`ethnicity` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`formation_installments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`formation_installments` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `effective_id` INT NOT NULL COMMENT '',
  `number_installments` INT(2) NOT NULL COMMENT '',
  `value` DECIMAL(6,2) NOT NULL COMMENT '',
  `payment` DATE NOT NULL COMMENT '',
  `date_start` DATE NOT NULL COMMENT '',
  `date_final` DATE NOT NULL COMMENT '',
  `hour` INT(2) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Formacao_parcelas_Formacao_vigencia_idx` (`effective_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Formacao_parcelas_Formacao_vigencia`
    FOREIGN KEY (`effective_id`)
    REFERENCES `igsisv2`.`formation_effectives` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`formation_regions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`formation_regions` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `regions` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `regiao_UNIQUE` (`regions` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`formation_subprefectures`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`formation_subprefectures` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `subprefecture` VARCHAR(25) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `subprefeitura_UNIQUE` (`subprefecture` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`formation_territories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`formation_territories` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `territory` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `territorio_UNIQUE` (`territory` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`upload_formations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`upload_formations` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `formation_id` INT NOT NULL COMMENT '',
  `file` LONGTEXT NOT NULL COMMENT '',
  `upload_name_document` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Upload_formacao_Formacao_idx` (`formation_id` ASC)  COMMENT '',
  INDEX `fk_Upload_formacao_Upload_nome_documento_idx` (`upload_name_document` ASC)  COMMENT '',
  CONSTRAINT `fk_Upload_formacao_Formacao`
    FOREIGN KEY (`formation_id`)
    REFERENCES `igsisv2`.`formations` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Upload_formacao_Upload_nome_documento`
    FOREIGN KEY (`upload_name_document`)
    REFERENCES `igsisv2`.`upload_document_names` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`level_instructions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`level_instructions` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `level_instructions` VARCHAR(15) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `grau_instrucao_UNIQUE` (`level_instructions` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`model_juridicals`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`model_juridicals` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `model_name` VARCHAR(30) NOT NULL COMMENT '',
  `support_legal` LONGTEXT NOT NULL COMMENT '',
  `completion` LONGTEXT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`physical_persons_formations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`physical_persons_formations` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `physical_person_id` INT NOT NULL COMMENT '',
  `ethnicity_id` INT NOT NULL COMMENT '',
  `region_id` INT NULL DEFAULT NULL COMMENT '',
  `level_instruction_id` INT NOT NULL COMMENT '',
  `member` VARCHAR(100) NULL DEFAULT NULL COMMENT '',
  `curriculum` LONGTEXT NOT NULL COMMENT '',
  `agent_sp_cultura_id` INT NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Pessoa_fisica_formacao_Pessoa_fisica_idx` (`physical_person_id` ASC)  COMMENT '',
  INDEX `fk_Pessoa_fisica_formacao_Etnia_idx` (`ethnicity_id` ASC)  COMMENT '',
  INDEX `fk_Pessoa_fisica_formacao_Formacao_regiao_idx` (`region_id` ASC)  COMMENT '',
  INDEX `fk_Pessoa_fisica_formacao_Grau_instrucao_idx` (`level_instruction_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Pessoa_fisica_formacao_Pessoa_fisica`
    FOREIGN KEY (`physical_person_id`)
    REFERENCES `igsisv2`.`physical_persons` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_fisica_formacao_Etnia`
    FOREIGN KEY (`ethnicity_id`)
    REFERENCES `igsisv2`.`ethnicities` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_fisica_formacao_Formacao_regiao`
    FOREIGN KEY (`region_id`)
    REFERENCES `igsisv2`.`formation_regions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_fisica_formacao_Grau_instrucao`
    FOREIGN KEY (`level_instruction_id`)
    REFERENCES `igsisv2`.`level_instructions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`multiple_funds`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`multiple_funds` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `hiring_request_id` INT NOT NULL COMMENT '',
  `funds_id` INT NOT NULL COMMENT '',
  `value` DECIMAL(10,2) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Verbas_multiplas_Pedido_contratacai_idx` (`hiring_request_id` ASC)  COMMENT '',
  INDEX `fk_Verbas_multiplas_Verba_idx` (`funds_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Verbas_multiplas_Pedido_contratacai`
    FOREIGN KEY (`hiring_request_id`)
    REFERENCES `igsisv2`.`hiring_requests` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Verbas_multiplas_Verba`
    FOREIGN KEY (`funds_id`)
    REFERENCES `igsisv2`.`funds` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`temp_datas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`temp_datas` (
  `id_temp` INT(6) NOT NULL AUTO_INCREMENT COMMENT '',
  `event_id` INT(8) NOT NULL COMMENT '',
  `start_date` DATE NOT NULL COMMENT '',
  `send_date` DATETIME NOT NULL COMMENT '',
  PRIMARY KEY (`id_temp`)  COMMENT '',
  INDEX `fk_Temp_data_Evento_idx` (`event_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Temp_data_Evento`
    FOREIGN KEY (`event_id`)
    REFERENCES `igsisv2`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`temp_posters`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`temp_posters` (
  `agenda_posters_id` INT(11) NOT NULL COMMENT '',
  `event_id` INT(11) NOT NULL COMMENT '',
  `type_event_id` INT(11) NOT NULL COMMENT '',
  `project_id` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`agenda_posters_id`)  COMMENT '',
  INDEX `fk_Temp_emcartaz_Evento_idx` (`event_id` ASC)  COMMENT '',
  INDEX `fk_Temp_emcartaz_Tipo_evento_idx` (`type_event_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Temp_emcartaz_Evento`
    FOREIGN KEY (`event_id`)
    REFERENCES `igsisv2`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Temp_emcartaz_Tipo_evento`
    FOREIGN KEY (`type_event_id`)
    REFERENCES `igsisv2`.`type_events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`agendas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`agendas` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `event_id` INT NOT NULL COMMENT '',
  `type_event_id` INT NOT NULL COMMENT '',
  `occurrences_id` INT NOT NULL COMMENT '',
  `institution_id` INT NOT NULL COMMENT '',
  `local_id` INT NOT NULL COMMENT '',
  `date` DATE NOT NULL COMMENT '',
  `hour` TIME NOT NULL COMMENT '',
  `cinema_id` INT NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Agenda_Evento_idx` (`event_id` ASC)  COMMENT '',
  INDEX `fk_Agenda_Local_idx` (`local_id` ASC)  COMMENT '',
  INDEX `fk_Agenda_Instituicao_idx` (`institution_id` ASC)  COMMENT '',
  INDEX `fk_Agenda_Tipo_evento_idx` (`type_event_id` ASC)  COMMENT '',
  INDEX `fk_Agenda_Ocorrencia_idx` (`occurrences_id` ASC)  COMMENT '',
  INDEX `fk_Agenda_Cinema_idx` (`cinema_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Agenda_Evento`
    FOREIGN KEY (`event_id`)
    REFERENCES `igsisv2`.`events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Agenda_Local`
    FOREIGN KEY (`local_id`)
    REFERENCES `igsisv2`.`locals` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Agenda_Instituicao`
    FOREIGN KEY (`institution_id`)
    REFERENCES `igsisv2`.`institutions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Agenda_Tipo_evento`
    FOREIGN KEY (`type_event_id`)
    REFERENCES `igsisv2`.`type_events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Agenda_Ocorrencia`
    FOREIGN KEY (`occurrences_id`)
    REFERENCES `igsisv2`.`occurrences` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Agenda_Cinema`
    FOREIGN KEY (`cinema_id`)
    REFERENCES `igsisv2`.`cinemas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`category_equipments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`category_equipments` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `category_equipment` VARCHAR(50) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`detail_locals`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`detail_locals` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `local_id` INT NOT NULL COMMENT '',
  `territory_id` INT NOT NULL COMMENT '',
  `region_id` INT NULL DEFAULT NULL COMMENT '',
  `cep` VARCHAR(45) NOT NULL COMMENT '',
  `number` INT(11) NOT NULL COMMENT '',
  `complement` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  `link_access_map` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  `phone_1` VARCHAR(15) NOT NULL COMMENT '',
  `phone_2` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `email` VARCHAR(50) NOT NULL COMMENT '',
  `category_equipment_id` INT(11) NOT NULL COMMENT '',
  `formation_subprefecture_id` INT(11) NOT NULL COMMENT '',
  `contact` VARCHAR(15) NOT NULL COMMENT '',
  `phone_1_responsible` VARCHAR(15) NOT NULL COMMENT '',
  `phone_2_responsible` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `email_responsible` VARCHAR(50) NOT NULL COMMENT '',
  `observation` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Equipamento_Formacao_territorio_idx` (`territory_id` ASC)  COMMENT '',
  INDEX `fk_Equipamento_Local_idx` (`local_id` ASC)  COMMENT '',
  INDEX `fk_Equipamento_Formacao_regiao_idx` (`region_id` ASC)  COMMENT '',
  INDEX `fk_Equipamento_Formacao_subprefeitura_idx` (`formation_subprefecture_id` ASC)  COMMENT '',
  INDEX `fk_Equipamento_Categoria_equipamento_idx` (`category_equipment_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Equipamento_Formacao_territorio`
    FOREIGN KEY (`territory_id`)
    REFERENCES `igsisv2`.`formation_territories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Equipamento_Local`
    FOREIGN KEY (`local_id`)
    REFERENCES `igsisv2`.`locals` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Equipamento_Formacao_regiao`
    FOREIGN KEY (`region_id`)
    REFERENCES `igsisv2`.`formation_regions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Equipamento_Formacao_subprefeitura`
    FOREIGN KEY (`formation_subprefecture_id`)
    REFERENCES `igsisv2`.`formation_subprefectures` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Equipamento_Categoria_equipamento`
    FOREIGN KEY (`category_equipment_id`)
    REFERENCES `igsisv2`.`category_equipments` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`internal_events`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`internal_events` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(240) NOT NULL COMMENT '',
  `type_event_id` INT NOT NULL COMMENT '',
  `especial_project_id` INT NOT NULL COMMENT '',
  `fiscal_id` INT NOT NULL COMMENT '',
  `surrogate_id` INT NOT NULL COMMENT '',
  `description` LONGTEXT NOT NULL COMMENT '',
  `producer_id` INT NULL DEFAULT NULL COMMENT '',
  `information_production_id` INT NULL DEFAULT NULL COMMENT '',
  `published` TINYINT(1) NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_eventoInterno_projetoEspecial_idx` (`especial_project_id` ASC)  COMMENT '',
  INDEX `fk_eventoInterno_tipoEvento_idx` (`type_event_id` ASC)  COMMENT '',
  INDEX `fk_eventoInterno_Usuario_idx` (`fiscal_id` ASC)  COMMENT '',
  INDEX `fk_eventoInterno_UsuarioSuplente_idx` (`surrogate_id` ASC)  COMMENT '',
  INDEX `fk_eventoInterno_Produtor_idx` (`producer_id` ASC)  COMMENT '',
  INDEX `fk_eventoInterno_informacaoProdutor_idx` (`information_production_id` ASC)  COMMENT '',
  CONSTRAINT `fk_eventoInterno_projetoEspecial`
    FOREIGN KEY (`especial_project_id`)
    REFERENCES `igsisv2`.`special_projects` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_eventoInterno_tipoEvento`
    FOREIGN KEY (`type_event_id`)
    REFERENCES `igsisv2`.`type_events` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_eventoInterno_UsuarioFiscal`
    FOREIGN KEY (`fiscal_id`)
    REFERENCES `igsisv2`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_eventoInterno_UsuarioSuplente`
    FOREIGN KEY (`surrogate_id`)
    REFERENCES `igsisv2`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_eventoInterno_Produtor`
    FOREIGN KEY (`producer_id`)
    REFERENCES `igsisv2`.`producers` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_eventoInterno_informacaoProdutor`
    FOREIGN KEY (`information_production_id`)
    REFERENCES `igsisv2`.`information_productions` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`historics`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`historics` (
  `id` INT NOT NULL COMMENT '',
  `event_id` INT NOT NULL COMMENT '',
  `table` VARCHAR(50) NULL DEFAULT NULL COMMENT '',
  `field` VARCHAR(50) NOT NULL COMMENT '',
  `date` DATETIME NOT NULL COMMENT '',
  `value` LONGTEXT NOT NULL COMMENT '',
  `user_id` INT NOT NULL COMMENT '',
  `opening_date` DATETIME NOT NULL COMMENT '',
  `ip` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
COMMENT = '	';


-- -----------------------------------------------------
-- Table `igsisv2`.`historic_occurrences`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`historic_occurrences` (
  `occurrences` INT NOT NULL COMMENT '',
  `occurrences_id` INT NOT NULL COMMENT '',
  `occurrence_type_id` INT(8) NULL DEFAULT NULL COMMENT '',
  `local_id` INT NULL DEFAULT NULL COMMENT '',
  `event_id` INT NULL DEFAULT NULL COMMENT '',
  `monday` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `tuesday` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `wednesday` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `thursday` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `friday` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `saturday` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `sunday` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `start_date` DATE NULL DEFAULT NULL COMMENT '',
  `final_date` DATE NULL DEFAULT NULL COMMENT '',
  `start_time` TIME NULL DEFAULT NULL COMMENT '',
  `final_time` TIME NULL DEFAULT NULL COMMENT '',
  `timezone` INT(3) NULL DEFAULT NULL COMMENT '',
  `all_day` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `special_day` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `libras` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `audio_description` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `ticket_value` INT NULL DEFAULT NULL COMMENT '',
  `get_ticket` INT(2) NULL DEFAULT NULL COMMENT '',
  `local_others` VARCHAR(120) NULL DEFAULT NULL COMMENT '',
  `capacity` INT(7) NULL DEFAULT NULL COMMENT '',
  `reserved` INT(4) NULL DEFAULT NULL COMMENT '',
  `duration` INT(4) NULL DEFAULT NULL COMMENT '',
  `popular_price` DECIMAL(10,2) NULL DEFAULT NULL COMMENT '',
  `frequency` VARCHAR(120) NULL DEFAULT NULL COMMENT '',
  `sub_event_id` INT NULL DEFAULT NULL COMMENT '',
  `cinema_id` INT(6) NULL DEFAULT NULL COMMENT '',
  `cultural_turn` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `opening_date` DATETIME NULL DEFAULT NULL COMMENT '',
  `published` TINYINT(1) NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`occurrences`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`historic_quotas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`historic_quotas` (
  `id` INT NOT NULL COMMENT '',
  `parcela_ant_id` INT NOT NULL COMMENT '',
  `hiring_request_id` INT NOT NULL COMMENT '',
  `number` INT(2) NOT NULL COMMENT '',
  `value` DOUBLE NOT NULL COMMENT '',
  `expiration` DATETIME NULL DEFAULT NULL COMMENT '',
  `description` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `start_effective` DATE NULL DEFAULT NULL COMMENT '',
  `final_effective` DATE NULL DEFAULT NULL COMMENT '',
  `hours` INT(3) NULL DEFAULT NULL COMMENT '',
  `opening_date` DATETIME NULL DEFAULT NULL COMMENT '',
  `published` TINYINT NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`historic_hiring_resquests`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`historic_hiring_resquests` (
  `id` INT NOT NULL COMMENT '',
  `pedido_contratacao_ant_id` INT NOT NULL COMMENT '',
  `evento_id` INT NOT NULL COMMENT '',
  `type_person` INT NULL DEFAULT NULL COMMENT '',
  `representative_1_id` INT NULL DEFAULT NULL COMMENT '',
  `person_id` INT NULL DEFAULT NULL COMMENT '',
  `value` DECIMAL(10,2) NULL DEFAULT NULL COMMENT '',
  `form_of_payment` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `fund_id` INT(11) NULL DEFAULT NULL COMMENT '',
  `attachment` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `observation` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `representative_2_id` INT NULL DEFAULT NULL COMMENT '',
  `institution` INT(3) NULL DEFAULT NULL COMMENT '',
  `performer` INT(11) NULL DEFAULT NULL COMMENT '',
  `number_note_empenho` VARCHAR(8) NULL DEFAULT NULL COMMENT '',
  `date_emission_note_empenho` DATE NULL DEFAULT NULL COMMENT '',
  `date_delivery_note_empenho` DATE NULL DEFAULT NULL COMMENT '',
  `signature_id` INT NULL DEFAULT NULL COMMENT '',
  `performer_id` INT NULL DEFAULT NULL COMMENT '',
  `justification` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `seem_artistic` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `status` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  `approval_finance` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `installment` INT(2) NULL DEFAULT NULL COMMENT '',
  `contract_operator_id` INT NULL DEFAULT NULL COMMENT '',
  `detailing_action_id` INT NOT NULL COMMENT '',
  `date_proposal` DATETIME NULL DEFAULT NULL COMMENT '',
  `date_reserve` DATETIME NULL DEFAULT NULL COMMENT '',
  `date_contract` DATETIME NULL DEFAULT NULL COMMENT '',
  `support_legal` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `budget_allocation` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `completion` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `penalty_id` INT NULL DEFAULT NULL COMMENT '',
  `date_juridical` DATETIME NOT NULL COMMENT '',
  `date_publication` DATETIME NOT NULL COMMENT '',
  `date_accounting` DATETIME NOT NULL COMMENT '',
  `date_payment` DATETIME NOT NULL COMMENT '',
  `process_number` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  `retention_INSS` INT NULL DEFAULT NULL COMMENT '',
  `retention_ISS` INT NULL DEFAULT NULL COMMENT '',
  `retention_IRRF` INT NULL DEFAULT NULL COMMENT '',
  `published` INT(1) NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`locals_users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`locals_users` (
  `local_id` INT NOT NULL COMMENT '',
  `user_id` INT NOT NULL COMMENT '',
  INDEX `fk_locais_idx` (`local_id` ASC)  COMMENT '',
  INDEX `fk_usuarios_idx` (`user_id` ASC)  COMMENT '',
  PRIMARY KEY (`local_id`, `user_id`)  COMMENT '',
  CONSTRAINT `fk_locais`
    FOREIGN KEY (`local_id`)
    REFERENCES `igsisv2`.`locals` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios`
    FOREIGN KEY (`user_id`)
    REFERENCES `igsisv2`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`funds_users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`funds_users` (
  `fund_id` INT NOT NULL COMMENT '',
  `user_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`fund_id`)  COMMENT '',
  INDEX `fk_Verbas_usuarios_Usuario_idx` (`user_id` ASC)  COMMENT '',
  CONSTRAINT `fk_verba`
    FOREIGN KEY (`fund_id`)
    REFERENCES `igsisv2`.`funds` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario`
    FOREIGN KEY (`user_id`)
    REFERENCES `igsisv2`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`permissions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`permissions` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `group_id` INT NOT NULL COMMENT '',
  `controller` VARCHAR(50) NOT NULL COMMENT '',
  `action` VARCHAR(100) CHARACTER SET 'utf8' COLLATE 'utf8_unicode_ci' NOT NULL COMMENT '',
  `created` DATETIME NULL DEFAULT NULL COMMENT '',
  `modified` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  CONSTRAINT `fk_permissions_groups`
    FOREIGN KEY (`group_id`)
    REFERENCES `igsisv2`.`groups` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`status_calls`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`status_calls` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(15) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `name_UNIQUE` (`name` ASC)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`detailing_actions`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`detailing_actions` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `code_detailing_actions` VARCHAR(18) NOT NULL COMMENT '',
  `detailing_actions` VARCHAR(130) NOT NULL COMMENT '',
  `code_allocation` VARCHAR(4) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`categories` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(45) NOT NULL COMMENT 'Evento, Formação, Evento interno',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`log_reopenings`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`log_reopenings` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `call_id` INT NULL DEFAULT NULL COMMENT '',
  `user_id` INT NULL DEFAULT NULL COMMENT '',
  `ig_category_id` INT NULL DEFAULT NULL COMMENT '',
  `event_id` INT NULL DEFAULT NULL COMMENT '',
  `description` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `date` DATETIME NULL DEFAULT NULL COMMENT '',
  `ip` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_ig_categories_idx` (`ig_category_id` ASC)  COMMENT '',
  INDEX `fk_users_idx` (`user_id` ASC)  COMMENT '',
  INDEX `fk_calls_idx` (`call_id` ASC)  COMMENT '',
  CONSTRAINT `fk_ig_categories`
    FOREIGN KEY (`ig_category_id`)
    REFERENCES `igsisv2`.`categories` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users`
    FOREIGN KEY (`user_id`)
    REFERENCES `igsisv2`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_calls`
    FOREIGN KEY (`call_id`)
    REFERENCES `igsisv2`.`calls` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`get_tickets`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`get_tickets` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `get_ticket` VARCHAR(120) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `get_ticket_UNIQUE` (`get_ticket` ASC)  COMMENT '')
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
