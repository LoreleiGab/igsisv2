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
-- Table `igsisv2`.`tipo_eventos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`tipo_eventos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `tipo_evento` VARCHAR(60) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`produtores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`produtores` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nome` VARCHAR(120) NOT NULL COMMENT '',
  `email` VARCHAR(60) NOT NULL COMMENT '',
  `telefone` VARCHAR(20) NOT NULL COMMENT '',
  `sp_cultura_id` INT NOT NULL COMMENT '',
  `produto_res_col` INT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`instituicaos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`instituicaos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `instituicao` VARCHAR(45) NOT NULL COMMENT '',
  `instituicao_pai` INT(2) NOT NULL COMMENT '',
  `sigla` VARCHAR(12) NOT NULL COMMENT '',
  `logo` VARCHAR(60) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `instituicao_UNIQUE` (`instituicao` ASC)  COMMENT '',
  UNIQUE INDEX `sigla_UNIQUE` (`sigla` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`usuarios` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nome_completo` VARCHAR(120) NULL DEFAULT NULL COMMENT '',
  `rf` VARCHAR(12) NULL DEFAULT NULL COMMENT '',
  `nome_usuario` VARCHAR(60) NOT NULL COMMENT '',
  `senha` VARCHAR(120) NOT NULL COMMENT '',
  `telefone` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  `instituicao_id` INT NULL COMMENT '',
  `local` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `verba` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `email` VARCHAR(60) NULL COMMENT '',
  `receber_notificacao` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '',
  `publicado` TINYINT(1) NULL DEFAULT 1 COMMENT '',
  `contratos` INT(2) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Usuario_Instituicao_idx` (`instituicao_id` ASC)  COMMENT '',
  UNIQUE INDEX `nome_completo_UNIQUE` (`nome_completo` ASC)  COMMENT '',
  UNIQUE INDEX `nome_usuario_UNIQUE` (`nome_usuario` ASC)  COMMENT '',
  CONSTRAINT `fk_Usuario_Instituicao`
    FOREIGN KEY (`instituicao_id`)
    REFERENCES `igsisv2`.`instituicaos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`relacao_juridicas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`relacao_juridicas` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `relacao_juridica` VARCHAR(60) NOT NULL COMMENT '',
  `indice` VARCHAR(12) NULL DEFAULT NULL COMMENT '',
  `contrato` TINYINT(1) UNSIGNED NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`projeto_especials`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`projeto_especials` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `projeto_especial` VARCHAR(120) NOT NULL COMMENT '',
  `idInstituicao` INT(3) NULL DEFAULT NULL COMMENT '',
  `publicado` TINYINT(4) UNSIGNED NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Projeto_especial_Instituicao_idx` (`idInstituicao` ASC)  COMMENT '',
  UNIQUE INDEX `projeto_especial_UNIQUE` (`projeto_especial` ASC)  COMMENT '',
  CONSTRAINT `fk_Projeto_especial_Instituicao`
    FOREIGN KEY (`idInstituicao`)
    REFERENCES `igsisv2`.`instituicaos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`faixa_etarias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`faixa_etarias` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `faixa_etaria` VARCHAR(7) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `faixa_etaria_UNIQUE` (`faixa_etaria` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`eventos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`eventos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nome_evento` VARCHAR(240) NOT NULL COMMENT '',
  `relacao_juridica_id` INT NOT NULL COMMENT '',
  `projeto_especial_id` INT NOT NULL COMMENT '',
  `tipo_evento_id` INT NOT NULL COMMENT '',
  `sub_evento` TINYINT(1) NULL COMMENT '',
  `fiscal_id` INT NOT NULL COMMENT '',
  `suplente_id` INT NOT NULL COMMENT '',
  `autor` LONGTEXT NOT NULL COMMENT '',
  `ficha_tecnica` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `sinopse` LONGTEXT NOT NULL COMMENT '',
  `release_com` LONGTEXT NOT NULL COMMENT '',
  `faixa_etaria_id` INT(1) NOT NULL COMMENT '',
  `links_com` LONGTEXT NULL COMMENT '',
  `produtor_id` INT NOT NULL COMMENT '',
  `usuario_id` INT NOT NULL COMMENT '',
  `instituicao_id` INT NOT NULL COMMENT '',
  `data_envio` DATETIME NOT NULL COMMENT '',
  `ocupacao` TINYINT(1) UNSIGNED NOT NULL COMMENT '',
  `publicado` TINYINT(1) NOT NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Evento_Tipo_evento_idx` (`tipo_evento_id` ASC)  COMMENT '',
  INDEX `fk_Evento_Produtor_idx` (`produtor_id` ASC)  COMMENT '',
  INDEX `fk_Evento_Usuario_idx` (`fiscal_id` ASC)  COMMENT '',
  INDEX `fk_Evento_Usuario_usuario_idx` (`usuario_id` ASC)  COMMENT '',
  INDEX `fk_Evento_Modalidade_idx` (`relacao_juridica_id` ASC)  COMMENT '',
  INDEX `fk_Evento_Instituicao_idx` (`instituicao_id` ASC)  COMMENT '',
  INDEX `fk_Evento_Usuario_suplente_idx` (`suplente_id` ASC)  COMMENT '',
  INDEX `fk_Evento_Projeto_especial_idx` (`projeto_especial_id` ASC)  COMMENT '',
  INDEX `fk_Evento_Faixa_etaria_idx` (`faixa_etaria_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Evento_Tipo_evento`
    FOREIGN KEY (`tipo_evento_id`)
    REFERENCES `igsisv2`.`tipo_eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Evento_Produtor`
    FOREIGN KEY (`produtor_id`)
    REFERENCES `igsisv2`.`produtores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Evento_Usuario_fiscal`
    FOREIGN KEY (`fiscal_id`)
    REFERENCES `igsisv2`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Evento_Usuario_usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `igsisv2`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Evento_Relacao_juridica`
    FOREIGN KEY (`relacao_juridica_id`)
    REFERENCES `igsisv2`.`relacao_juridicas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Evento_Instituicao`
    FOREIGN KEY (`instituicao_id`)
    REFERENCES `igsisv2`.`instituicaos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Evento_Usuario_suplente`
    FOREIGN KEY (`suplente_id`)
    REFERENCES `igsisv2`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Evento_Projeto_especial`
    FOREIGN KEY (`projeto_especial_id`)
    REFERENCES `igsisv2`.`projeto_especials` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Evento_Faixa_etaria`
    FOREIGN KEY (`faixa_etaria_id`)
    REFERENCES `igsisv2`.`faixa_etarias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`upload_eventos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`upload_eventos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `evento_id` INT(6) NOT NULL COMMENT '',
  `arquivo` LONGTEXT NOT NULL COMMENT '',
  `publicado` TINYINT(1) NOT NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Arquivo_Evento_idx` (`evento_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Arquivo_Evento`
    FOREIGN KEY (`evento_id`)
    REFERENCES `igsisv2`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`arte_visuais`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`arte_visuais` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `evento_id` INT NOT NULL COMMENT '',
  `numero` INT(2) NULL DEFAULT NULL COMMENT '',
  `tipo` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  `valor_total` DECIMAL(10,2) NULL DEFAULT NULL COMMENT '',
  `painel` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `legendas` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `identidade` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `suporte` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `acervo` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `artes_visuaiscol` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Artes_visuais_Evento_idx` (`evento_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Artes_visuais_Evento`
    FOREIGN KEY (`evento_id`)
    REFERENCES `igsisv2`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`pais`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`pais` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `pais_nome` VARCHAR(50) NOT NULL COMMENT '',
  `pais_name` VARCHAR(50) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `pais_nome_UNIQUE` (`pais_nome` ASC)  COMMENT '',
  UNIQUE INDEX `pais_name_UNIQUE` (`pais_name` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`cinemas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`cinemas` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `pais_id` INT NOT NULL COMMENT '',
  `evento_id` INT NOT NULL COMMENT '',
  `titulo` VARCHAR(100) NOT NULL COMMENT '',
  `titulo_original` VARCHAR(100) NOT NULL COMMENT '',
  `ano_producao` TINYINT(4) NOT NULL COMMENT '',
  `genero` VARCHAR(20) NOT NULL COMMENT '',
  `bitola` VARCHAR(30) NOT NULL COMMENT '',
  `direcao` LONGTEXT NOT NULL COMMENT '',
  `sinopse` LONGTEXT NOT NULL COMMENT '',
  `minutagem` TINYINT(3) NOT NULL COMMENT '',
  `link_trailer` VARCHAR(60) NULL COMMENT '',
  `elenco` LONGTEXT NOT NULL COMMENT '',
  `indicacao_etaria` INT(2) NOT NULL COMMENT '',
  `publicado` TINYINT(1) UNSIGNED NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Cinema_Evento_idx` (`evento_id` ASC)  COMMENT '',
  INDEX `fk_Cinema_Pais_idx` (`pais_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Cinema_Evento`
    FOREIGN KEY (`evento_id`)
    REFERENCES `igsisv2`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Cinema_Pais`
    FOREIGN KEY (`pais_id`)
    REFERENCES `igsisv2`.`pais` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`comunicacaos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`comunicacaos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `sinopse` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `parecer_artistico` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `ficha_tecnica` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `autor` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `release_com` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `filme` INT(1) NULL DEFAULT NULL COMMENT '',
  `revisado` INT(1) NULL DEFAULT NULL COMMENT '',
  `editado` INT(1) NULL DEFAULT NULL COMMENT '',
  `site` INT(1) NULL DEFAULT NULL COMMENT '',
  `publicacao` INT(1) NULL DEFAULT NULL COMMENT '',
  `registro_audio` INT(1) NULL DEFAULT NULL COMMENT '',
  `registro_video` INT(1) NULL DEFAULT NULL COMMENT '',
  `registro_fotografia` INT(1) NULL DEFAULT NULL COMMENT '',
  `evento_id` INT NULL DEFAULT NULL COMMENT '',
  `projeto` VARCHAR(120) NULL DEFAULT NULL COMMENT '',
  `nome_evento` VARCHAR(240) NULL DEFAULT NULL COMMENT '',
  `observacao` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `instituicao_id` INT NULL DEFAULT NULL COMMENT '',
  `projeto_especial` INT(3) NULL DEFAULT NULL COMMENT '',
  `foto` TINYINT(1) UNSIGNED NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Comunicacao_Evento_idx` (`evento_id` ASC)  COMMENT '',
  INDEX `fk_Comunicacao_Instituicao_idx` (`instituicao_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Comunicacao_Evento`
    FOREIGN KEY (`evento_id`)
    REFERENCES `igsisv2`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Comunicacao_Instituicao`
    FOREIGN KEY (`instituicao_id`)
    REFERENCES `igsisv2`.`instituicaos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`locals`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`locals` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `instituicao_id` INT NOT NULL COMMENT '',
  `local` VARCHAR(60) NOT NULL COMMENT '',
  `rider` VARCHAR(255) NULL COMMENT '',
  `publicado` TINYINT(1) UNSIGNED NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Local_Instituicao_idx` (`instituicao_id` ASC)  COMMENT '',
  UNIQUE INDEX `local_UNIQUE` (`local` ASC)  COMMENT '',
  CONSTRAINT `fk_Local_Instituicao`
    FOREIGN KEY (`instituicao_id`)
    REFERENCES `igsisv2`.`instituicaos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`logs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`logs` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `usuario_id` INT NOT NULL COMMENT '',
  `data_log` DATETIME NOT NULL COMMENT '',
  `endereco_ip` VARCHAR(20) NOT NULL COMMENT '',
  `descricao` LONGTEXT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Log_Usuario_idx` (`usuario_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Log_Usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `igsisv2`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`modulos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`modulos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `modulo` VARCHAR(30) NOT NULL COMMENT '',
  `link_pagina` VARCHAR(30) NULL COMMENT '',
  `descricao` LONGTEXT NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`musicas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`musicas` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `evento_id` INT NOT NULL COMMENT '',
  `genero` VARCHAR(60) NOT NULL COMMENT '',
  `venda` TINYINT(1) NULL COMMENT '',
  `material` LONGTEXT NULL COMMENT '',
  `musica_col` VARCHAR(45) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Musica_Evento_idx` (`evento_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Musica_Evento`
    FOREIGN KEY (`evento_id`)
    REFERENCES `igsisv2`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`tipo_ocorrencias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`tipo_ocorrencias` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `tipo_ocorrencia` VARCHAR(60) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`sub_eventos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`sub_eventos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `tipo_evento_id` INT NOT NULL COMMENT '',
  `evento_id` INT NOT NULL COMMENT '',
  `titulo` VARCHAR(120) NOT NULL COMMENT '',
  `descricao` LONGTEXT NOT NULL COMMENT '',
  `publicado` INT(1) NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Sub_evento__idx` (`tipo_evento_id` ASC)  COMMENT '',
  INDEX `fk_Sub_evento_Evento_idx` (`evento_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Sub_evento_Tipo_evento`
    FOREIGN KEY (`tipo_evento_id`)
    REFERENCES `igsisv2`.`tipo_eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Sub_evento_Evento`
    FOREIGN KEY (`evento_id`)
    REFERENCES `igsisv2`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`ocorrencias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`ocorrencias` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `evento_id` INT NOT NULL COMMENT '',
  `sub_evento_id` INT NULL DEFAULT NULL COMMENT '',
  `tipo_ocorrencia_id` INT NULL COMMENT '',
  `data_inicio` DATE NOT NULL COMMENT '',
  `data_final` DATE NULL DEFAULT NULL COMMENT '',
  `segunda` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `terca` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `quarta` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `quinta` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `sexta` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `sabado` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `domingo` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `dia_especial` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `audiodescricao` TINYINT(1) UNSIGNED NULL DEFAULT NULL COMMENT '',
  `libras` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `preco_popular` DECIMAL(10,2) NULL DEFAULT NULL COMMENT '',
  `virada` TINYINT(1) UNSIGNED NULL DEFAULT NULL COMMENT '',
  `hora_inicio` TIME NOT NULL COMMENT '',
  `valor_ingresso` DECIMAL(10,2) NOT NULL COMMENT '',
  `duracao` INT(4) NOT NULL COMMENT '',
  `retirada_ingresso` TINYINT(1) NOT NULL COMMENT '',
  `local_id` INT NOT NULL COMMENT '',
  `local_outros` VARCHAR(120) NOT NULL COMMENT '',
  `reservados` INT(4) NULL DEFAULT NULL COMMENT '',
  `lotacao` INT(7) NULL DEFAULT NULL COMMENT '',
  `timezone` INT(3) NULL DEFAULT NULL COMMENT '',
  `dia_inteiro` TINYINT(1) NULL DEFAULT NULL COMMENT '',
  `frequencia` VARCHAR(120) NULL DEFAULT NULL COMMENT '',
  `cinema_id` INT NULL DEFAULT NULL COMMENT '',
  `publicado` TINYINT(1) NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Ocorrencia_Tipo_ocorrencia_idx` (`tipo_ocorrencia_id` ASC)  COMMENT '',
  INDEX `fk_Ocorrencia_Evento_idx` (`evento_id` ASC)  COMMENT '',
  INDEX `fk_Ocorrencia_Cinema_idx` (`cinema_id` ASC)  COMMENT '',
  INDEX `fk_Ocorrencia_Sub_evento_idx` (`sub_evento_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Ocorrencia_Tipo_ocorrencia`
    FOREIGN KEY (`tipo_ocorrencia_id`)
    REFERENCES `igsisv2`.`tipo_ocorrencias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Ocorrencia_Evento`
    FOREIGN KEY (`evento_id`)
    REFERENCES `igsisv2`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Ocorrencia_Cinema`
    FOREIGN KEY (`cinema_id`)
    REFERENCES `igsisv2`.`cinemas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Ocorrencia_Sub_evento`
    FOREIGN KEY (`sub_evento_id`)
    REFERENCES `igsisv2`.`sub_eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`oficinas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`oficinas` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `evento_id` INT NOT NULL COMMENT '',
  `certificado` TINYINT(1) UNSIGNED NOT NULL COMMENT '',
  `vagas` INT(3) NOT NULL COMMENT '',
  `publico` LONGTEXT NOT NULL COMMENT '',
  `material` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `inscricao` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `valor_hora` VARCHAR(12) NULL DEFAULT NULL COMMENT '',
  `venda` TINYINT(1) UNSIGNED NULL DEFAULT NULL COMMENT '',
  `divulgacao` DATE NULL DEFAULT NULL COMMENT '',
  `carga_horaria` INT(3) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Oficinas_Evento_idx` (`evento_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Oficinas_Evento`
    FOREIGN KEY (`evento_id`)
    REFERENCES `igsisv2`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`informacao_producaos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`informacao_producaos` (
  `id` INT NOT NULL COMMENT '',
  `evento_id` INT NOT NULL COMMENT '',
  `carros` LONGTEXT NULL COMMENT '',
  `equipe` LONGTEXT NULL COMMENT '',
  `infraestrutura` LONGTEXT NULL COMMENT '',
  `registro_audio` INT NULL DEFAULT NULL COMMENT '',
  `registro_fotografia` INT NULL DEFAULT NULL COMMENT '',
  `registro_video` INT NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Producao_Evento_idx` (`evento_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Producao_Evento`
    FOREIGN KEY (`evento_id`)
    REFERENCES `igsisv2`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`proposta_artisticas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`proposta_artisticas` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `data_envio` DATETIME NOT NULL COMMENT '',
  `nome` VARCHAR(255) NOT NULL COMMENT '',
  `sinopse` LONGTEXT NOT NULL COMMENT '',
  `ficha_tecnica` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `historico_artista` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `local_origem` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `orcamento` VARCHAR(255) NOT NULL COMMENT '',
  `linguagem` VARCHAR(255) NOT NULL COMMENT '',
  `links` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `infraestrutura` LONGTEXT NOT NULL COMMENT '',
  `local_apresentacao` LONGTEXT NOT NULL COMMENT '',
  `contato` LONGTEXT NOT NULL COMMENT '',
  `link_agente_spcultura` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`servicos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`servicos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `evento_id` INT NOT NULL COMMENT '',
  `legenda` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `traducao` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `graficos` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `passagens` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `itinerario` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `libras` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `audiodescricao` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `montagem` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `hospedagem` VARCHAR(120) NULL DEFAULT NULL COMMENT '',
  `seguro` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `transporte` VARCHAR(60) NULL DEFAULT NULL COMMENT '',
  `razaoSocial` VARCHAR(120) NULL DEFAULT NULL COMMENT '',
  `cpfCnpj` VARCHAR(12) NULL DEFAULT NULL COMMENT '',
  `banco` VARCHAR(24) NULL DEFAULT NULL COMMENT '',
  `agencia` VARCHAR(12) NULL DEFAULT NULL COMMENT '',
  `conta` VARCHAR(12) NULL DEFAULT NULL COMMENT '',
  `bilhetagem` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `locacao` LONGTEXT NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Servico_Evento_idx` (`evento_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Servico_Evento`
    FOREIGN KEY (`evento_id`)
    REFERENCES `igsisv2`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`teatro_dancas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`teatro_dancas` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `evento_id` INT NOT NULL COMMENT '',
  `estreia` TINYINT(1) UNSIGNED NOT NULL COMMENT '',
  `genero` VARCHAR(60) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Teatro_danca_Evento_idx` (`evento_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Teatro_danca_Evento`
    FOREIGN KEY (`evento_id`)
    REFERENCES `igsisv2`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`tipo_pessoas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`tipo_pessoas` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `tipo_pessoa` VARCHAR(20) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`6354`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`6354` (
  `id` INT NOT NULL COMMENT '',
  `data_empenho` DATETIME NULL DEFAULT NULL COMMENT '',
  `empenho` INT(12) NULL DEFAULT NULL COMMENT '',
  `ano` INT(5) NULL DEFAULT NULL COMMENT '',
  `processo` VARCHAR(25) NULL DEFAULT NULL COMMENT '',
  `descricao` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `valor` DOUBLE(10,2) NULL DEFAULT NULL COMMENT '',
  `cacelamento` DOUBLE(10,2) NULL DEFAULT NULL COMMENT '',
  `liquidado` DOUBLE(10,2) NULL DEFAULT NULL COMMENT '',
  `pago` DOUBLE(10,2) NULL DEFAULT NULL COMMENT '',
  `valor_liquidar` DOUBLE(10,2) NULL DEFAULT NULL COMMENT '',
  `total` DOUBLE(10,2) NULL DEFAULT NULL COMMENT '',
  `razao_social` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `cpf_cnpj` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `dotacao` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`agenda_em_cartazs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`agenda_em_cartazs` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `evento_id` INT NOT NULL COMMENT '',
  `data` DATE NOT NULL COMMENT '',
  `hora` TIME NOT NULL COMMENT '',
  `local_id` INT NOT NULL COMMENT '',
  `instituicao_id` INT NOT NULL COMMENT '',
  `tipo_evento_id` INT NOT NULL COMMENT '',
  `ocorrencia_id` INT NOT NULL COMMENT '',
  `cinema_id` INT NOT NULL COMMENT '',
  `tipo_evento` INT(11) NOT NULL COMMENT '',
  `nome_evento` VARCHAR(120) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Agenda_emcartaz_Evento_idx` (`evento_id` ASC)  COMMENT '',
  INDEX `fk_Agenda_emcartaz_Local_idx` (`local_id` ASC)  COMMENT '',
  INDEX `fk_Agenda_emcartaz_Instituicao_idx` (`instituicao_id` ASC)  COMMENT '',
  INDEX `fk_Agenda_emcartaz_Ocorrencia_idx` (`ocorrencia_id` ASC)  COMMENT '',
  INDEX `fk_Agenda_emcartaz_Cinema_idx` (`cinema_id` ASC)  COMMENT '',
  INDEX `fk_Agenda_emcartaz_Tipo_evento_idx` (`tipo_evento_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Agenda_emcartaz_Evento`
    FOREIGN KEY (`evento_id`)
    REFERENCES `igsisv2`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Agenda_emcartaz_Local`
    FOREIGN KEY (`local_id`)
    REFERENCES `igsisv2`.`locals` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Agenda_emcartaz_Instituicao`
    FOREIGN KEY (`instituicao_id`)
    REFERENCES `igsisv2`.`instituicaos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Agenda_emcartaz_Ocorrencia`
    FOREIGN KEY (`ocorrencia_id`)
    REFERENCES `igsisv2`.`ocorrencias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Agenda_emcartaz_Cinema`
    FOREIGN KEY (`cinema_id`)
    REFERENCES `igsisv2`.`cinemas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Agenda_emcartaz_Tipo_evento`
    FOREIGN KEY (`tipo_evento_id`)
    REFERENCES `igsisv2`.`tipo_eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`formacao_projetos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`formacao_projetos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `projeto` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `projeto_UNIQUE` (`projeto` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`formacao_cargos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`formacao_cargos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `cargo` VARCHAR(200) NOT NULL COMMENT '',
  `justificativa` LONGTEXT NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `cargo_UNIQUE` (`cargo` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`formacao_vigencias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`formacao_vigencias` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `periodo` VARCHAR(11) NOT NULL COMMENT '',
  `valor` DECIMAL(10,2) NOT NULL COMMENT '',
  `valor_por_extenso` VARCHAR(200) NOT NULL COMMENT '',
  `usuario_id` INT(11) NOT NULL COMMENT '',
  `descricao` VARCHAR(60) NOT NULL COMMENT '',
  `ano` INT(4) NOT NULL COMMENT '',
  `publicado` TINYINT(1) UNSIGNED NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Formacao_vigencia_Usuario_idx` (`usuario_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Formacao_vigencia_Usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `igsisv2`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`formacao_programas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`formacao_programas` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `programa` VARCHAR(45) NOT NULL COMMENT '',
  `verba` INT(3) NULL COMMENT '',
  `edital` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `descricao` LONGTEXT NOT NULL COMMENT '',
  `publicado` TINYINT(1) UNSIGNED NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `programa_UNIQUE` (`programa` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`formacao_linguagems`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`formacao_linguagems` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `linguagem` VARCHAR(20) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `linguagem_UNIQUE` (`linguagem` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`estado_civils`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`estado_civils` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `estado_civil` VARCHAR(15) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `estado_civil_UNIQUE` (`estado_civil` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`bancos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`bancos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `codigo` VARCHAR(5) NOT NULL COMMENT '',
  `banco` VARCHAR(250) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`tipo_documentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`tipo_documentos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `documento` VARCHAR(30) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`pessoa_fisicas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`pessoa_fisicas` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `foto` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `nome` VARCHAR(70) NOT NULL COMMENT '',
  `nome_artistico` VARCHAR(70) NULL DEFAULT NULL COMMENT '',
  `tipo_documento_id` INT NULL COMMENT '',
  `rg` VARCHAR(20) NULL COMMENT '',
  `cpf` CHAR(14) NOT NULL COMMENT '',
  `ccm` CHAR(11) NULL DEFAULT NULL COMMENT '',
  `estado_civil_id` INT(11) NOT NULL COMMENT '',
  `data_nascimento` VARCHAR(100) NOT NULL COMMENT '',
  `nacionalidade` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  `cep` VARCHAR(11) NOT NULL COMMENT '',
  `numero` INT(11) NOT NULL COMMENT '',
  `complemento` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  `telefone1` VARCHAR(15) NOT NULL COMMENT '',
  `telefone2` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `telefone3` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `email` VARCHAR(50) NOT NULL COMMENT '',
  `drt` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `funcao` VARCHAR(50) NULL DEFAULT NULL COMMENT '',
  `cbo` VARCHAR(10) NULL DEFAULT NULL COMMENT '',
  `nit` VARCHAR(50) NULL COMMENT '',
  `pis` VARCHAR(50) NULL DEFAULT NULL COMMENT '',
  `omb` VARCHAR(50) NULL DEFAULT NULL COMMENT '',
  `banco_id` INT NULL COMMENT '',
  `agencia` VARCHAR(12) NULL DEFAULT NULL COMMENT '',
  `conta` VARCHAR(12) NULL DEFAULT NULL COMMENT '',
  `observacao` LONGTEXT NULL COMMENT '',
  `data_atualizacao` DATE NOT NULL COMMENT '',
  `evento_id` INT NULL COMMENT '',
  `usuario_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Pessoa_fisica_Estado_civil_idx` (`estado_civil_id` ASC)  COMMENT '',
  INDEX `fk_Pessoa_fisica_Usuario_idx` (`usuario_id` ASC)  COMMENT '',
  INDEX `fk_Pessoa_fisica_Evento_idx` (`evento_id` ASC)  COMMENT '',
  INDEX `k_Pessoa_fisica_Banco_idx` (`banco_id` ASC)  COMMENT '',
  INDEX `fk_Pessoa_fisica_Tipo_documento_idx` (`tipo_documento_id` ASC)  COMMENT '',
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC)  COMMENT '',
  CONSTRAINT `fk_Pessoa_fisica_Estado_civil`
    FOREIGN KEY (`estado_civil_id`)
    REFERENCES `igsisv2`.`estado_civils` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_fisica_Usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `igsisv2`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_fisica_Evento`
    FOREIGN KEY (`evento_id`)
    REFERENCES `igsisv2`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_fisica_Banco`
    FOREIGN KEY (`banco_id`)
    REFERENCES `igsisv2`.`bancos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_fisica_Tipo_documento`
    FOREIGN KEY (`tipo_documento_id`)
    REFERENCES `igsisv2`.`tipo_documentos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`formacao_coordenadorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`formacao_coordenadorias` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `coordenadoria` VARCHAR(60) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `coordenadoria_UNIQUE` (`coordenadoria` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`formacaos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`formacaos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `ano` CHAR(4) NOT NULL COMMENT '',
  `pessoa_fisica_id` INT NOT NULL COMMENT '',
  `local1_id` INT NOT NULL COMMENT '',
  `local2_id` INT NULL COMMENT '',
  `local3_id` INT NULL COMMENT '',
  `cargo_id` INT NOT NULL COMMENT '',
  `vigencia_id` INT NOT NULL COMMENT '',
  `coordenadoria_id` INT NOT NULL COMMENT '',
  `programa_id` INT NOT NULL COMMENT '',
  `linguagem_id` INT NOT NULL COMMENT '',
  `projeto_id` INT NOT NULL COMMENT '',
  `chamados` INT(2) NULL DEFAULT NULL COMMENT '',
  `status` VARCHAR(10) NOT NULL COMMENT '',
  `pontuacao` INT(2) NULL DEFAULT NULL COMMENT '',
  `observacao` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `numero_processo_pagamento` CHAR(16) NOT NULL COMMENT '',
  `usuario_id` INT NOT NULL COMMENT '',
  `subprefeitura` INT(11) NOT NULL COMMENT '',
  `fiscal` INT(11) NOT NULL COMMENT '',
  `suplente` INT(11) NOT NULL COMMENT '',
  `territorio` INT(3) NULL DEFAULT NULL COMMENT '',
  `verba` INT(3) NULL DEFAULT NULL COMMENT '',
  `data_envio` DATETIME NOT NULL COMMENT '',
  `publicado` TINYINT(1) UNSIGNED NOT NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Formacao_Formacao_projeto_idx` (`projeto_id` ASC)  COMMENT '',
  INDEX `fk_Formacao_Local_idx` (`local1_id` ASC)  COMMENT '',
  INDEX `fk_Formacao_Formacao_cargo_idx` (`cargo_id` ASC)  COMMENT '',
  INDEX `fk_Formacao_Formacao_vigencia_idx` (`vigencia_id` ASC)  COMMENT '',
  INDEX `fk_Formacao_Formacao_programa_idx` (`programa_id` ASC)  COMMENT '',
  INDEX `fk_Formacao_Formacao_linguagem_idx` (`linguagem_id` ASC)  COMMENT '',
  INDEX `fk_Formacao_Usuario_idx` (`usuario_id` ASC)  COMMENT '',
  INDEX `fk_Formacao_Pessoa_fisica_idx` (`pessoa_fisica_id` ASC)  COMMENT '',
  INDEX `fk_Formacao_Local2_idx` (`local2_id` ASC)  COMMENT '',
  INDEX `fk_Formacao_Local3_idx` (`local3_id` ASC)  COMMENT '',
  INDEX `fk_Formacao_Coordenadoria_idx` (`coordenadoria_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Formacao_Formacao_projeto`
    FOREIGN KEY (`projeto_id`)
    REFERENCES `igsisv2`.`formacao_projetos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Formacao_Local1`
    FOREIGN KEY (`local1_id`)
    REFERENCES `igsisv2`.`locals` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Formacao_Formacao_cargo`
    FOREIGN KEY (`cargo_id`)
    REFERENCES `igsisv2`.`formacao_cargos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Formacao_Formacao_vigencia`
    FOREIGN KEY (`vigencia_id`)
    REFERENCES `igsisv2`.`formacao_vigencias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Formacao_Formacao_programa`
    FOREIGN KEY (`programa_id`)
    REFERENCES `igsisv2`.`formacao_programas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Formacao_Formacao_linguagem`
    FOREIGN KEY (`linguagem_id`)
    REFERENCES `igsisv2`.`formacao_linguagems` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Formacao_Usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `igsisv2`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Formacao_Pessoa_fisica`
    FOREIGN KEY (`pessoa_fisica_id`)
    REFERENCES `igsisv2`.`pessoa_fisicas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Formacao_Local2`
    FOREIGN KEY (`local2_id`)
    REFERENCES `igsisv2`.`locals` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Formacao_Local3`
    FOREIGN KEY (`local3_id`)
    REFERENCES `igsisv2`.`locals` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Formacao_Coordenadoria`
    FOREIGN KEY (`coordenadoria_id`)
    REFERENCES `igsisv2`.`formacao_coordenadorias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`verbas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`verbas` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `verba` VARCHAR(120) NOT NULL COMMENT '',
  `pai` INT(2) NULL DEFAULT NULL COMMENT '',
  `instituicao_id` INT NULL DEFAULT NULL COMMENT '',
  `pf` DECIMAL(10,2) NULL DEFAULT NULL COMMENT '',
  `pj` DECIMAL(10,2) NULL DEFAULT NULL COMMENT '',
  `premio` DECIMAL(12,2) NULL DEFAULT NULL COMMENT '',
  `dotacao_orcamentaria` CHAR(32) NULL COMMENT '',
  `multiplo` TINYINT(1) UNSIGNED NULL COMMENT '',
  `do_pf` TINYINT(3) UNSIGNED NOT NULL COMMENT '',
  `doPj` TINYINT(3) UNSIGNED NOT NULL COMMENT '',
  `do_premio` TINYINT(3) UNSIGNED NOT NULL COMMENT '',
  `detalhamento_acao` VARCHAR(200) NOT NULL COMMENT '',
  `numero_reserva_pj` VARCHAR(7) NOT NULL COMMENT '',
  `link_pj` VARCHAR(7) NOT NULL COMMENT '',
  `Numero_reserva_pf` VARCHAR(7) NOT NULL COMMENT '',
  `link_pf` VARCHAR(7) NOT NULL COMMENT '',
  `numero_reserva_encargos` VARCHAR(7) NOT NULL COMMENT '',
  `vocativo` VARCHAR(150) NOT NULL COMMENT '',
  `setor_vocativo` VARCHAR(150) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Verba_Instituicao_idx` (`instituicao_id` ASC)  COMMENT '',
  UNIQUE INDEX `verba_UNIQUE` (`verba` ASC)  COMMENT '',
  CONSTRAINT `fk_Verba_Instituicao`
    FOREIGN KEY (`instituicao_id`)
    REFERENCES `igsisv2`.`instituicaos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`penalidades`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`penalidades` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `modelo` VARCHAR(60) NOT NULL COMMENT '',
  `txt` LONGTEXT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`representante_legals`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`representante_legals` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `representante_legal` VARCHAR(100) NOT NULL COMMENT '',
  `rg` VARCHAR(15) NOT NULL COMMENT '',
  `cpf` CHAR(14) NOT NULL COMMENT '',
  `nacionalidade` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  `estado_civil_id` INT NOT NULL COMMENT '',
  `evento_id` INT NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Representante_legal_Estado_civil_idx` (`estado_civil_id` ASC)  COMMENT '',
  INDEX `fk_Representante_legal_Evento_idx` (`evento_id` ASC)  COMMENT '',
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC)  COMMENT '',
  CONSTRAINT `fk_Representante_legal_Estado_civil`
    FOREIGN KEY (`estado_civil_id`)
    REFERENCES `igsisv2`.`estado_civils` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Representante_legal_Evento`
    FOREIGN KEY (`evento_id`)
    REFERENCES `igsisv2`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`pessoa_juridicas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`pessoa_juridicas` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `razao_social` VARCHAR(100) NOT NULL COMMENT '',
  `cnpj` CHAR(18) NOT NULL COMMENT '',
  `ccm` CHAR(11) NULL DEFAULT NULL COMMENT '',
  `cep` VARCHAR(11) NOT NULL COMMENT '',
  `numero` INT(11) NOT NULL COMMENT '',
  `complemento` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  `telefone1` VARCHAR(15) NOT NULL COMMENT '',
  `telefone2` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `telefone3` VARCHAR(15) NULL DEFAULT NULL COMMENT '',
  `email` VARCHAR(50) NOT NULL COMMENT '',
  `representante_legal1_id` INT NOT NULL COMMENT '',
  `representante_legal2_id` INT NULL DEFAULT NULL COMMENT '',
  `banco_id` INT(3) NULL DEFAULT NULL COMMENT '',
  `agencia` VARCHAR(12) NULL DEFAULT NULL COMMENT '',
  `conta` VARCHAR(12) NULL DEFAULT NULL COMMENT '',
  `observacao` LONGTEXT NULL COMMENT '',
  `usuario_id` INT NOT NULL COMMENT '',
  `evento_id` INT NULL COMMENT '',
  `data_atualizacao` DATE NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Pessoa_juridica_Usuario_idx` (`usuario_id` ASC)  COMMENT '',
  INDEX `fk_Pessoa_juridica_Evento_idx` (`evento_id` ASC)  COMMENT '',
  INDEX `fk_Pessoa_juridica_Representante_legal_idx` (`representante_legal1_id` ASC)  COMMENT '',
  INDEX `fk_Pessoa_juridica_Banco_idx` (`banco_id` ASC)  COMMENT '',
  INDEX `fk_Pessoa_juridica_Representante_legal_idx1` (`representante_legal2_id` ASC)  COMMENT '',
  UNIQUE INDEX `cnpj_UNIQUE` (`cnpj` ASC)  COMMENT '',
  CONSTRAINT `fk_Pessoa_juridica_Usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `igsisv2`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_juridica_Evento`
    FOREIGN KEY (`evento_id`)
    REFERENCES `igsisv2`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_juridica_Representante_legal1`
    FOREIGN KEY (`representante_legal1_id`)
    REFERENCES `igsisv2`.`representante_legals` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_juridica_Banco`
    FOREIGN KEY (`banco_id`)
    REFERENCES `igsisv2`.`bancos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_juridica_Representante_legal2`
    FOREIGN KEY (`representante_legal2_id`)
    REFERENCES `igsisv2`.`representante_legals` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`estados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`estados` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `ordem` INT(2) UNSIGNED NOT NULL COMMENT '',
  `area` INT(1) UNSIGNED NULL COMMENT '',
  `estado` VARCHAR(25) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`pedido_contratacaos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`pedido_contratacaos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `tipo_modalidade_contratacao` TINYINT(1) NULL COMMENT '',
  `modalidade_contratacao_id` INT NOT NULL COMMENT '',
  `tipo_pessoa_id` INT NULL COMMENT '',
  `pessoa_id` INT NOT NULL COMMENT '',
  `executante_id` INT NOT NULL COMMENT '',
  `valor` DECIMAL(10,2) NOT NULL COMMENT '',
  `forma_pagamento` LONGTEXT NOT NULL COMMENT '',
  `quantidade_parcelas` INT(2) NOT NULL COMMENT '',
  `verba_id` INT(11) NOT NULL COMMENT '',
  `justificativa` LONGTEXT NOT NULL COMMENT '',
  `parecer_artistico` LONGTEXT NOT NULL COMMENT '',
  `observacao` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `instituicao_id` INT NOT NULL COMMENT '',
  `numero_processo` CHAR(19) NULL DEFAULT NULL COMMENT '',
  `numero_nota_emprenho` VARCHAR(8) NULL DEFAULT NULL COMMENT '',
  `penalidade_id` INT NULL DEFAULT NULL COMMENT '',
  `data_emissao_nota_empenho` DATE NULL DEFAULT NULL COMMENT '',
  `data_entrega_nota_empenho` DATE NULL DEFAULT NULL COMMENT '',
  `usuario_pesquisar_id` INT NULL DEFAULT NULL COMMENT '',
  `estado_id` INT NULL DEFAULT NULL COMMENT '',
  `aprovacao_financa` TINYINT(1) UNSIGNED NULL DEFAULT NULL COMMENT '',
  `usuario_contratos_id` INT NULL DEFAULT NULL COMMENT '',
  `amparo_legal` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `dotacao_orcamentaria` VARCHAR(255) NULL DEFAULT NULL COMMENT '',
  `finalizacao` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `data_contrato` DATETIME NULL DEFAULT NULL COMMENT '',
  `data_proposta` DATETIME NULL DEFAULT NULL COMMENT '',
  `data_reserva` DATETIME NULL COMMENT '',
  `data_juridico` DATETIME NOT NULL COMMENT '',
  `data_publicacao` DATETIME NOT NULL COMMENT '',
  `data_contabilidade` DATETIME NOT NULL COMMENT '',
  `data_pagamento` DATETIME NOT NULL COMMENT '',
  `processo_sof` VARCHAR(20) NULL COMMENT '',
  `publicado` TINYINT(1) NULL DEFAULT 1 COMMENT '',
  `extrato_liquidacao` INT(11) NULL COMMENT '',
  `retencoes_INSS` INT(11) NULL COMMENT '',
  `retencoes_ISS` INT(11) NULL COMMENT '',
  `retencoes_IRRF` INT(11) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_igsis_pedido_contratacao_idModalidadeContratacao_idx` (`modalidade_contratacao_id` ASC)  COMMENT '',
  INDEX `fk_Pedido_contratacao_Penalidade_idx` (`penalidade_id` ASC)  COMMENT '',
  INDEX `fk_Pedido_contracao_Pessoa_fisica_idx` (`pessoa_id` ASC)  COMMENT '',
  INDEX `fk_Pedido_contratacao_Usuario_idx` (`usuario_contratos_id` ASC)  COMMENT '',
  INDEX `fk_Pedido_contratacao_Pessoa_fisica_idx` (`executante_id` ASC)  COMMENT '',
  INDEX `fk_Pedido_contratacao_Estado_idx` (`estado_id` ASC)  COMMENT '',
  INDEX `fk_Pedido_contratacao_Tipo_pessoa_idx` (`tipo_pessoa_id` ASC)  COMMENT '',
  INDEX `fk_Pedido_contratacao_Verba_idx` (`verba_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Pedido_contratacao_Formacao`
    FOREIGN KEY (`modalidade_contratacao_id`)
    REFERENCES `igsisv2`.`formacaos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_contratacao_Evento`
    FOREIGN KEY (`modalidade_contratacao_id`)
    REFERENCES `igsisv2`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_contratacao_Verba`
    FOREIGN KEY (`verba_id`)
    REFERENCES `igsisv2`.`verbas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_contratacao_Penalidade`
    FOREIGN KEY (`penalidade_id`)
    REFERENCES `igsisv2`.`penalidades` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_contracao_Pessoa_fisica`
    FOREIGN KEY (`pessoa_id`)
    REFERENCES `igsisv2`.`pessoa_fisicas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_contratacao_Pessoa_juridica`
    FOREIGN KEY (`pessoa_id`)
    REFERENCES `igsisv2`.`pessoa_juridicas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_contratacao_Usuario`
    FOREIGN KEY (`usuario_contratos_id`)
    REFERENCES `igsisv2`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_contratacao_Pessoa_fisica`
    FOREIGN KEY (`executante_id`)
    REFERENCES `igsisv2`.`pessoa_fisicas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_contratacao_Estado`
    FOREIGN KEY (`estado_id`)
    REFERENCES `igsisv2`.`estados` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedido_contratacao_Tipo_pessoa`
    FOREIGN KEY (`tipo_pessoa_id`)
    REFERENCES `igsisv2`.`tipo_pessoas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`upload_categorias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`upload_categorias` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '',
  `upload_categoria` VARCHAR(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`upload_nome_documentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`upload_nome_documentos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `documento` VARCHAR(120) NOT NULL COMMENT '',
  `sigla` VARCHAR(10) NULL DEFAULT NULL COMMENT '',
  `upload_categoria_id` INT UNSIGNED NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Nome_documento_Upload_categoria_idx` (`upload_categoria_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Nome_documento_Upload_categoria`
    FOREIGN KEY (`upload_categoria_id`)
    REFERENCES `igsisv2`.`upload_categorias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`upload_pedidos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`upload_pedidos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `arquivo` LONGTEXT NOT NULL COMMENT '',
  `data` DATETIME NOT NULL COMMENT '',
  `publicado` TINYINT(1) NOT NULL DEFAULT 1 COMMENT '',
  `pedido_contratacao_id` INT NOT NULL COMMENT '',
  `upload_nome_documento_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Arquivos_pedidos_Pedido_contratacao_idx` (`pedido_contratacao_id` ASC)  COMMENT '',
  INDEX `fk_Upload_pedido_Upload_nome_documento_idx` (`upload_nome_documento_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Upload_pedidos_Pedido_contratacao`
    FOREIGN KEY (`pedido_contratacao_id`)
    REFERENCES `igsisv2`.`pedido_contratacaos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Upload_pedido_Upload_nome_documento`
    FOREIGN KEY (`upload_nome_documento_id`)
    REFERENCES `igsisv2`.`upload_nome_documentos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`upload_pessoas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`upload_pessoas` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `tipo_pessoa_id` INT NULL DEFAULT NULL COMMENT '',
  `pessoa_id` INT NULL DEFAULT NULL COMMENT '',
  `arquivo` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `data_envio` DATE NULL DEFAULT NULL COMMENT '',
  `publicado` INT(1) NULL DEFAULT 1 COMMENT '',
  `upload_nome_documento_id` INT NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Arquivos_pessoa_Tipo_pessoa_idx` (`tipo_pessoa_id` ASC)  COMMENT '',
  INDEX `fk_Arquivo_Pessoa_fisica_idx` (`pessoa_id` ASC)  COMMENT '',
  INDEX `fk_Upload_Upload_nome_documento_idx` (`upload_nome_documento_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Upload_pessoa_Tipo_pessoa`
    FOREIGN KEY (`tipo_pessoa_id`)
    REFERENCES `igsisv2`.`tipo_pessoas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Upload_pessoa_Pessoa_fisica`
    FOREIGN KEY (`pessoa_id`)
    REFERENCES `igsisv2`.`pessoa_fisicas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Upload_pessoa_Pessoa_juridica`
    FOREIGN KEY (`pessoa_id`)
    REFERENCES `igsisv2`.`pessoa_juridicas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Upload_pessoa_Upload_nome_documento`
    FOREIGN KEY (`upload_nome_documento_id`)
    REFERENCES `igsisv2`.`upload_nome_documentos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`atualizacaos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`atualizacaos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `data` DATE NOT NULL COMMENT '',
  `texto` LONGTEXT NOT NULL COMMENT '',
  `tipo` VARCHAR(10) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`tipo_chamados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`tipo_chamados` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `chamado` VARCHAR(120) NOT NULL COMMENT '',
  `area` INT(1) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`chamados`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`chamados` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `titulo` VARCHAR(120) NOT NULL COMMENT '',
  `tipo_chamado_id` INT NOT NULL COMMENT '',
  `evento_id` INT NOT NULL COMMENT '',
  `descricao` LONGTEXT NOT NULL COMMENT '',
  `justificativa` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `data` DATETIME NOT NULL COMMENT '',
  `usuario_id` INT NOT NULL COMMENT '',
  `estado` INT(2) NULL COMMENT '',
  `nota` LONGTEXT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Chamado_Usuario_idx` (`usuario_id` ASC)  COMMENT '',
  INDEX `fk_Chamado_Evento_idx` (`evento_id` ASC)  COMMENT '',
  INDEX `fk_Chamado_Tipo_chamado_idx` (`tipo_chamado_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Chamado_Usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `igsisv2`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Chamado_Evento`
    FOREIGN KEY (`evento_id`)
    REFERENCES `igsisv2`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Chamado_Tipo_chamado`
    FOREIGN KEY (`tipo_chamado_id`)
    REFERENCES `igsisv2`.`tipo_chamados` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`chamado_comentarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`chamado_comentarios` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `chamado_id` INT NOT NULL COMMENT '',
  `data` DATETIME NOT NULL COMMENT '',
  `usuario_id` INT NOT NULL COMMENT '',
  `comentario` LONGTEXT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Chamado_comentarios_Chamado_idx` (`chamado_id` ASC)  COMMENT '',
  INDEX `fk_Chamado_comentario_Usuario_idx` (`usuario_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Chamado_comentarios_Chamado`
    FOREIGN KEY (`chamado_id`)
    REFERENCES `igsisv2`.`chamados` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Chamado_comentario_Usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `igsisv2`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`controle_orcamentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`controle_orcamentos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `usuario_id` INT NOT NULL COMMENT '',
  `verba_id` INT NOT NULL COMMENT '',
  `instituicao_id` INT NOT NULL COMMENT '',
  `verba_pai` TINYINT(2) UNSIGNED NULL DEFAULT NULL COMMENT '',
  `publicado` TINYINT(1) UNSIGNED NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Controle_orcamento_Usuario_idx` (`usuario_id` ASC)  COMMENT '',
  INDEX `fk_Controle_orcamento_idx` (`verba_id` ASC)  COMMENT '',
  INDEX `fk_Controle_orcamento_Instituicao_idx` (`instituicao_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Controle_orcamento_Usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `igsisv2`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Controle_orcamento`
    FOREIGN KEY (`verba_id`)
    REFERENCES `igsisv2`.`verbas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Controle_orcamento_Instituicao`
    FOREIGN KEY (`instituicao_id`)
    REFERENCES `igsisv2`.`instituicaos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`frases`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`frases` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `frase` LONGTEXT NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`grupos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`grupos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `pedido_contratacao_id` INT NOT NULL COMMENT '',
  `nome_completo` VARCHAR(120) NOT NULL COMMENT '',
  `rg` VARCHAR(30) NOT NULL COMMENT '',
  `cpf` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  `publicado` TINYINT(1) UNSIGNED NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Grupos_Pedido_contratacao_idx` (`pedido_contratacao_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Grupos_Pedido_contratacao`
    FOREIGN KEY (`pedido_contratacao_id`)
    REFERENCES `igsisv2`.`pedido_contratacaos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`opcaos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`opcaos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `valor` INT(1) NOT NULL COMMENT '',
  `opcao` VARCHAR(30) NOT NULL COMMENT '',
  `string_opcao` VARCHAR(60) NOT NULL COMMENT '',
  `abrangencia` VARCHAR(120) NULL DEFAULT NULL COMMENT '',
  `tipo` VARCHAR(120) NULL DEFAULT NULL COMMENT '',
  `codigo` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `alerta` LONGTEXT NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`parcelas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`parcelas` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `pedido_contratacao_id` INT NOT NULL COMMENT '',
  `numero` INT(2) NOT NULL COMMENT '',
  `valor` DOUBLE NOT NULL COMMENT '',
  `vencimento` DATETIME NULL DEFAULT NULL COMMENT '',
  `publicado` TINYINT(1) UNSIGNED NULL DEFAULT 1 COMMENT '',
  `descricao` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `vigencia_inicio` DATE NULL DEFAULT NULL COMMENT '',
  `vigencia_final` DATE NULL DEFAULT NULL COMMENT '',
  `horas` TIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Parcelas_Pedido_contratacao_idx` (`pedido_contratacao_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Parcelas_Pedido_contratacao`
    FOREIGN KEY (`pedido_contratacao_id`)
    REFERENCES `igsisv2`.`pedido_contratacaos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`times`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`times` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `usuario_id` INT NOT NULL COMMENT '',
  `time` DATETIME NOT NULL COMMENT '',
  `ip` VARCHAR(20) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Time_Usuario_idx` (`usuario_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Time_Usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `igsisv2`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`verifica_producaos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`verifica_producaos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `evento_id` INT NULL DEFAULT NULL COMMENT '',
  `usuario_id` INT NULL DEFAULT NULL COMMENT '',
  `instituicao_id` INT NULL DEFAULT NULL COMMENT '',
  `status` TINYINT(1) UNSIGNED NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Verifica_producao_Evento_idx` (`evento_id` ASC)  COMMENT '',
  INDEX `fk_Verifica_producao_Usuario_idx` (`usuario_id` ASC)  COMMENT '',
  INDEX `fk_Verifica_producao_Instituicao_idx` (`instituicao_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Verifica_producao_Evento`
    FOREIGN KEY (`evento_id`)
    REFERENCES `igsisv2`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Verifica_producao_Usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `igsisv2`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Verifica_producao_Instituicao`
    FOREIGN KEY (`instituicao_id`)
    REFERENCES `igsisv2`.`instituicaos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`weblogs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`weblogs` (
  `id_inicio` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `titulo` VARCHAR(240) NOT NULL COMMENT '',
  `mensagem` LONGTEXT NOT NULL COMMENT '',
  `data` DATETIME NOT NULL COMMENT '',
  `publicado` TINYINT(1) UNSIGNED NULL DEFAULT 1 COMMENT '',
  `idInstituicao` INT(2) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id_inicio`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`etnias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`etnias` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `etnia` VARCHAR(15) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `etnia_UNIQUE` (`etnia` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`formacao_parcelas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`formacao_parcelas` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `vigencia_id` INT NOT NULL COMMENT '',
  `numero_parcela` INT(2) NOT NULL COMMENT '',
  `data_inicio` DATE NOT NULL COMMENT '',
  `data_final` DATE NOT NULL COMMENT '',
  `valor` DECIMAL(6,2) NOT NULL COMMENT '',
  `pagamento` DATE NOT NULL COMMENT '',
  `horas` INT(2) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Formacao_parcelas_Formacao_vigencia_idx` (`vigencia_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Formacao_parcelas_Formacao_vigencia`
    FOREIGN KEY (`vigencia_id`)
    REFERENCES `igsisv2`.`formacao_vigencias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`formacao_regiaos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`formacao_regiaos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `regiao` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `regiao_UNIQUE` (`regiao` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`formacao_subprefeituras`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`formacao_subprefeituras` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `subprefeitura` VARCHAR(25) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `subprefeitura_UNIQUE` (`subprefeitura` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`formacao_territorios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`formacao_territorios` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `territorio` VARCHAR(45) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `territorio_UNIQUE` (`territorio` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`upload_formacaos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`upload_formacaos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `arquivo` LONGTEXT NOT NULL COMMENT '',
  `formacao_id` INT NULL COMMENT '',
  `upload_nome_documento` INT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Upload_formacao_Formacao_idx` (`formacao_id` ASC)  COMMENT '',
  INDEX `fk_Upload_formacao_Upload_nome_documento_idx` (`upload_nome_documento` ASC)  COMMENT '',
  CONSTRAINT `fk_Upload_formacao_Formacao`
    FOREIGN KEY (`formacao_id`)
    REFERENCES `igsisv2`.`formacaos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Upload_formacao_Upload_nome_documento`
    FOREIGN KEY (`upload_nome_documento`)
    REFERENCES `igsisv2`.`upload_nome_documentos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`grau_instrucaos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`grau_instrucaos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `grau_instrucao` VARCHAR(15) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `grau_instrucao_UNIQUE` (`grau_instrucao` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`modelo_juridicos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`modelo_juridicos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nome_modelo` VARCHAR(30) NOT NULL COMMENT '',
  `amparo` LONGTEXT NOT NULL COMMENT '',
  `finalizacao` LONGBLOB NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`pessoa_fisica_formacaos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`pessoa_fisica_formacaos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `pessoa_fisica_id` INT NOT NULL COMMENT '',
  `etnia_id` INT NULL DEFAULT NULL COMMENT '',
  `regiao_id` INT NULL DEFAULT NULL COMMENT '',
  `grau_instrucao_id` INT NULL DEFAULT NULL COMMENT '',
  `grupo` VARCHAR(100) NULL DEFAULT NULL COMMENT '',
  `curriculo` LONGTEXT NULL DEFAULT NULL COMMENT '',
  `agente_sp_cultura_id` INT NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Pessoa_fisica_formacao_Pessoa_fisica_idx` (`pessoa_fisica_id` ASC)  COMMENT '',
  INDEX `fk_Pessoa_fisica_formacao_Etnia_idx` (`etnia_id` ASC)  COMMENT '',
  INDEX `fk_Pessoa_fisica_formacao_Formacao_regiao_idx` (`regiao_id` ASC)  COMMENT '',
  INDEX `fk_Pessoa_fisica_formacao_Grau_instrucao_idx` (`grau_instrucao_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Pessoa_fisica_formacao_Pessoa_fisica`
    FOREIGN KEY (`pessoa_fisica_id`)
    REFERENCES `igsisv2`.`pessoa_fisicas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_fisica_formacao_Etnia`
    FOREIGN KEY (`etnia_id`)
    REFERENCES `igsisv2`.`etnias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_fisica_formacao_Formacao_regiao`
    FOREIGN KEY (`regiao_id`)
    REFERENCES `igsisv2`.`formacao_regiaos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pessoa_fisica_formacao_Grau_instrucao`
    FOREIGN KEY (`grau_instrucao_id`)
    REFERENCES `igsisv2`.`grau_instrucaos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`verba_multiplas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`verba_multiplas` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `pedido_contratacao_id` INT NOT NULL COMMENT '',
  `verba_id` INT NOT NULL COMMENT '',
  `valor` DECIMAL(10,2) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Verbas_multiplas_Pedido_contratacai_idx` (`pedido_contratacao_id` ASC)  COMMENT '',
  INDEX `fk_Verbas_multiplas_Verba_idx` (`verba_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Verbas_multiplas_Pedido_contratacai`
    FOREIGN KEY (`pedido_contratacao_id`)
    REFERENCES `igsisv2`.`pedido_contratacaos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Verbas_multiplas_Verba`
    FOREIGN KEY (`verba_id`)
    REFERENCES `igsisv2`.`verbas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`temp_datas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`temp_datas` (
  `id_temp` INT(6) NOT NULL AUTO_INCREMENT COMMENT '',
  `idEvento` INT(8) NOT NULL COMMENT '',
  `dataInicio` DATE NOT NULL COMMENT '',
  `dataEnvio` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id_temp`)  COMMENT '',
  INDEX `fk_Temp_data_Evento_idx` (`idEvento` ASC)  COMMENT '',
  CONSTRAINT `fk_Temp_data_Evento`
    FOREIGN KEY (`idEvento`)
    REFERENCES `igsisv2`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`temp_emcartazs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`temp_emcartazs` (
  `id_emcartaz` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `idEvento` INT(11) NOT NULL COMMENT '',
  `idTipoEvento` INT(11) NOT NULL COMMENT '',
  `idProjeto` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`id_emcartaz`)  COMMENT '',
  INDEX `fk_Temp_emcartaz_Evento_idx` (`idEvento` ASC)  COMMENT '',
  INDEX `fk_Temp_emcartaz_Tipo_evento_idx` (`idTipoEvento` ASC)  COMMENT '',
  CONSTRAINT `fk_Temp_emcartaz_Evento`
    FOREIGN KEY (`idEvento`)
    REFERENCES `igsisv2`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Temp_emcartaz_Tipo_evento`
    FOREIGN KEY (`idTipoEvento`)
    REFERENCES `igsisv2`.`tipo_eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `igsisv2`.`agendas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`agendas` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `evento_id` INT NOT NULL COMMENT '',
  `tipo_evento_id` INT NOT NULL COMMENT '',
  `ocorrencia_id` INT NOT NULL COMMENT '',
  `data` DATE NOT NULL COMMENT '',
  `hora` TIME NOT NULL COMMENT '',
  `local_id` INT NOT NULL COMMENT '',
  `instituicao_id` INT NOT NULL COMMENT '',
  `cinema_id` INT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Agenda_Evento_idx` (`evento_id` ASC)  COMMENT '',
  INDEX `fk_Agenda_Local_idx` (`local_id` ASC)  COMMENT '',
  INDEX `fk_Agenda_Instituicao_idx` (`instituicao_id` ASC)  COMMENT '',
  INDEX `fk_Agenda_Tipo_evento_idx` (`tipo_evento_id` ASC)  COMMENT '',
  INDEX `fk_Agenda_Ocorrencia_idx` (`ocorrencia_id` ASC)  COMMENT '',
  INDEX `fk_Agenda_Cinema_idx` (`cinema_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Agenda_Evento`
    FOREIGN KEY (`evento_id`)
    REFERENCES `igsisv2`.`eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Agenda_Local`
    FOREIGN KEY (`local_id`)
    REFERENCES `igsisv2`.`locals` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Agenda_Instituicao`
    FOREIGN KEY (`instituicao_id`)
    REFERENCES `igsisv2`.`instituicaos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Agenda_Tipo_evento`
    FOREIGN KEY (`tipo_evento_id`)
    REFERENCES `igsisv2`.`tipo_eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Agenda_Ocorrencia`
    FOREIGN KEY (`ocorrencia_id`)
    REFERENCES `igsisv2`.`ocorrencias` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Agenda_Cinema`
    FOREIGN KEY (`cinema_id`)
    REFERENCES `igsisv2`.`cinemas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`categoria_equipamentos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`categoria_equipamentos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `categoria_equipamento` VARCHAR(100) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`detalhe_locals`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`detalhe_locals` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `local_id` INT NOT NULL COMMENT '',
  `territorio_id` INT NOT NULL COMMENT '',
  `regiao_id` INT NULL COMMENT '',
  `cep` VARCHAR(45) NOT NULL COMMENT '',
  `numero` INT(11) NOT NULL COMMENT '',
  `complemento` VARCHAR(20) NULL COMMENT '',
  `link_acesso_mapa` VARCHAR(20) NULL COMMENT '',
  `telefone1` VARCHAR(15) NOT NULL COMMENT '',
  `telefone2` VARCHAR(15) NULL COMMENT '',
  `email` VARCHAR(50) NOT NULL COMMENT '',
  `categoria_equipamento_id` INT(11) NOT NULL COMMENT '',
  `idSubPrefeitura` INT(11) NOT NULL COMMENT '',
  `contato` VARCHAR(15) NOT NULL COMMENT '',
  `telefone_1_responsavel` VARCHAR(15) NOT NULL COMMENT '',
  `telefone_2_responsavel` VARCHAR(15) NULL COMMENT '',
  `email_responsavel` VARCHAR(50) NOT NULL COMMENT '',
  `observacao` VARCHAR(255) NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_Equipamento_Formacao_territorio_idx` (`territorio_id` ASC)  COMMENT '',
  INDEX `fk_Equipamento_Local_idx` (`local_id` ASC)  COMMENT '',
  INDEX `fk_Equipamento_Formacao_regiao_idx` (`regiao_id` ASC)  COMMENT '',
  INDEX `fk_Equipamento_Formacao_subprefeitura_idx` (`idSubPrefeitura` ASC)  COMMENT '',
  INDEX `fk_Equipamento_Categoria_equipamento_idx` (`categoria_equipamento_id` ASC)  COMMENT '',
  CONSTRAINT `fk_Equipamento_Formacao_territorio`
    FOREIGN KEY (`territorio_id`)
    REFERENCES `igsisv2`.`formacao_territorios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Equipamento_Local`
    FOREIGN KEY (`local_id`)
    REFERENCES `igsisv2`.`locals` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Equipamento_Formacao_regiao`
    FOREIGN KEY (`regiao_id`)
    REFERENCES `igsisv2`.`formacao_regiaos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Equipamento_Formacao_subprefeitura`
    FOREIGN KEY (`idSubPrefeitura`)
    REFERENCES `igsisv2`.`formacao_subprefeituras` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Equipamento_Categoria_equipamento`
    FOREIGN KEY (`categoria_equipamento_id`)
    REFERENCES `igsisv2`.`categoria_equipamentos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`evento_internos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`evento_internos` (
  `id` INT NOT NULL AUTO_INCREMENT COMMENT '',
  `nome_evento` VARCHAR(240) NOT NULL COMMENT '',
  `projeto_especial_id` INT NOT NULL COMMENT '',
  `tipo_evento_id` INT NOT NULL COMMENT '',
  `fiscal_id` INT NOT NULL COMMENT '',
  `suplente_id` INT NOT NULL COMMENT '',
  `descricao` LONGTEXT NOT NULL COMMENT '',
  `produtor_id` INT NULL COMMENT '',
  `informacao_producao_id` INT NULL COMMENT '',
  `publicado` TINYINT(1) NULL DEFAULT 1 COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  INDEX `fk_eventoInterno_projetoEspecial_idx` (`projeto_especial_id` ASC)  COMMENT '',
  INDEX `fk_eventoInterno_tipoEvento_idx` (`tipo_evento_id` ASC)  COMMENT '',
  INDEX `fk_eventoInterno_Usuario_idx` (`fiscal_id` ASC)  COMMENT '',
  INDEX `fk_eventoInterno_UsuarioSuplente_idx` (`suplente_id` ASC)  COMMENT '',
  INDEX `fk_eventoInterno_Produtor_idx` (`produtor_id` ASC)  COMMENT '',
  INDEX `fk_eventoInterno_informacaoProdutor_idx` (`informacao_producao_id` ASC)  COMMENT '',
  CONSTRAINT `fk_eventoInterno_projetoEspecial`
    FOREIGN KEY (`projeto_especial_id`)
    REFERENCES `igsisv2`.`projeto_especials` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_eventoInterno_tipoEvento`
    FOREIGN KEY (`tipo_evento_id`)
    REFERENCES `igsisv2`.`tipo_eventos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_eventoInterno_UsuarioFiscal`
    FOREIGN KEY (`fiscal_id`)
    REFERENCES `igsisv2`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_eventoInterno_UsuarioSuplente`
    FOREIGN KEY (`suplente_id`)
    REFERENCES `igsisv2`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_eventoInterno_Produtor`
    FOREIGN KEY (`produtor_id`)
    REFERENCES `igsisv2`.`produtores` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_eventoInterno_informacaoProdutor`
    FOREIGN KEY (`informacao_producao_id`)
    REFERENCES `igsisv2`.`informacao_producaos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`historicos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`historicos` (
  `id` INT NOT NULL COMMENT '',
  `evento_id` INT NULL COMMENT '',
  `tabela` VARCHAR(50) NULL COMMENT '',
  `campo` VARCHAR(50) NULL COMMENT '',
  `data` DATETIME NULL COMMENT '',
  `valor` LONGTEXT NULL COMMENT '',
  `usuario_id` INT NULL COMMENT '',
  `ip` VARCHAR(45) NULL COMMENT '',
  `data_abertura` DATETIME NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
COMMENT = '	';


-- -----------------------------------------------------
-- Table `igsisv2`.`historico_ocorrencias`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`historico_ocorrencias` (
  `ocorrencia` INT NOT NULL COMMENT '',
  `ocorrencia_ant_id` INT NOT NULL COMMENT '',
  `tipo_ocorrencia_id` INT(8) NULL COMMENT '',
  `local_id` INT NULL COMMENT '',
  `evento_id` INT NULL COMMENT '',
  `segunda` TINYINT(1) NULL COMMENT '',
  `terca` TINYINT(1) NULL COMMENT '',
  `quarta` TINYINT(1) NULL COMMENT '',
  `quinta` TINYINT(1) NULL COMMENT '',
  `sexta` TINYINT(1) NULL COMMENT '',
  `sabado` TINYINT(1) NULL COMMENT '',
  `domingo` TINYINT(1) NULL COMMENT '',
  `data_inicio` DATE NULL COMMENT '',
  `data_final` DATE NULL COMMENT '',
  `hora_inicio` TIME NULL COMMENT '',
  `hora_final` TIME NULL COMMENT '',
  `timezone` INT(3) NULL COMMENT '',
  `dia_inteiro` TINYINT(1) NULL COMMENT '',
  `dia_especial` TINYINT(1) NULL COMMENT '',
  `libras` TINYINT(1) NULL COMMENT '',
  `audiodescricao` TINYINT(1) NULL COMMENT '',
  `valor_ingresso` INT NULL COMMENT '',
  `retirada_ingresso` INT(2) NULL COMMENT '',
  `local_outros` VARCHAR(120) NULL COMMENT '',
  `lotacao` INT(7) NULL COMMENT '',
  `reservados` INT(4) NULL COMMENT '',
  `duracao` INT(4) NULL COMMENT '',
  `preco_popular` DECIMAL(10,2) NULL COMMENT '',
  `frequencia` VARCHAR(120) NULL COMMENT '',
  `publicado` TINYINT(1) NULL DEFAULT 1 COMMENT '',
  `sub_evento_id` INT NULL COMMENT '',
  `cinema_id` INT(6) NULL COMMENT '',
  `virada` TINYINT(1) NULL COMMENT '',
  `data_abertura` DATETIME NULL COMMENT '',
  PRIMARY KEY (`ocorrencia`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`historico_parcelas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`historico_parcelas` (
  `id` INT NOT NULL COMMENT '',
  `parcela_ant_id` INT NOT NULL COMMENT '',
  `pedido_id` INT NOT NULL COMMENT '',
  `numero` INT(2) NOT NULL COMMENT '',
  `valor` DOUBLE NOT NULL COMMENT '',
  `vencimento` DATETIME NULL COMMENT '',
  `publicado` TINYINT NULL DEFAULT 1 COMMENT '',
  `descricao` LONGTEXT NULL COMMENT '',
  `vigencia_inicio` DATE NULL COMMENT '',
  `vigencia_final` DATE NULL COMMENT '',
  `horas` INT(3) NULL COMMENT '',
  `data_abertura` DATETIME NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`historico_pedido_contratacaos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`historico_pedido_contratacaos` (
  `id` INT NOT NULL COMMENT '',
  `pedido_contratacao_ant_id` INT NOT NULL COMMENT '',
  `evento_id` INT NOT NULL COMMENT '',
  `tipo_pessoa` INT NULL COMMENT '',
  `representante_01_id` INT NULL COMMENT '',
  `pessoa_id` INT NULL COMMENT '',
  `valor` DECIMAL(10,2) NULL COMMENT '',
  `valor_por_extenso` VARCHAR(120) NULL COMMENT '',
  `forma_pagamento` LONGTEXT NULL COMMENT '',
  `idVerba` INT(11) NULL COMMENT '',
  `anexo` LONGTEXT NULL COMMENT '',
  `observacao` LONGTEXT NULL COMMENT '',
  `publicado` INT(1) NULL DEFAULT 1 COMMENT '',
  `valor_individual` DECIMAL(10,2) NULL COMMENT '',
  `representante_02_id` INT NULL COMMENT '',
  `instituicao` INT(3) NULL COMMENT '',
  `executante` INT(11) NULL COMMENT '',
  `numero_nota_empenho` VARCHAR(8) NULL COMMENT '',
  `data_emissao_nota_empenho` DATE NULL COMMENT '',
  `data_entrega_nota_empenho` DATE NULL COMMENT '',
  `usuario_contratos_ide` INT NULL COMMENT '',
  `assinatura_id` INT NULL COMMENT '',
  `executante_id` INT NULL COMMENT '',
  `justificativa` LONGTEXT NULL COMMENT '',
  `parecer_artistico` LONGTEXT NULL COMMENT '',
  `estado` VARCHAR(20) NULL COMMENT '',
  `aprovacao_financa` TINYINT(1) NULL COMMENT '',
  `parcelas` INT(2) NULL COMMENT '',
  `contratos_id` INT NULL COMMENT '',
  `detalhamento_acao_id` INT NOT NULL COMMENT '',
  `data_proposta` DATETIME NULL COMMENT '',
  `data_reserva` DATETIME NULL COMMENT '',
  `data_contrato` DATETIME NULL COMMENT '',
  `amparo_legal` LONGTEXT NULL COMMENT '',
  `complemento_dotacao` VARCHAR(255) NULL COMMENT '',
  `finalizacao` LONGTEXT NULL COMMENT '',
  `penalidade_id` INT NULL COMMENT '',
  `data_juridico` DATETIME NOT NULL COMMENT '',
  `data_publicacao` DATETIME NOT NULL COMMENT '',
  `data_contabilidade` DATETIME NOT NULL COMMENT '',
  `data_pagamento` DATETIME NOT NULL COMMENT '',
  `numero_processo` VARCHAR(20) NULL COMMENT '',
  `data_abertura` DATETIME NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`modulos_usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`modulos_usuarios` (
  `usuario_id` INT NOT NULL COMMENT '',
  `modulo_id` INT NOT NULL COMMENT '',
  INDEX `fk_nivel_usuario_idx` (`usuario_id` ASC)  COMMENT '',
  INDEX `fk_nivel_modulo_idx` (`modulo_id` ASC)  COMMENT '',
  PRIMARY KEY (`usuario_id`, `modulo_id`)  COMMENT '',
  CONSTRAINT `fkl_usuarios`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `igsisv2`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_modulos`
    FOREIGN KEY (`modulo_id`)
    REFERENCES `igsisv2`.`modulos` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`locals_usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`locals_usuarios` (
  `local_id` INT NOT NULL COMMENT '',
  `usuario_id` INT NOT NULL COMMENT '',
  INDEX `fk_locais_idx` (`local_id` ASC)  COMMENT '',
  INDEX `fk_usuarios_idx` (`usuario_id` ASC)  COMMENT '',
  PRIMARY KEY (`local_id`, `usuario_id`)  COMMENT '',
  CONSTRAINT `fk_locais`
    FOREIGN KEY (`local_id`)
    REFERENCES `igsisv2`.`locals` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `igsisv2`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `igsisv2`.`usuarios_verbas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `igsisv2`.`usuarios_verbas` (
  `verba_id` INT NOT NULL COMMENT '',
  `usuario_id` INT NOT NULL COMMENT '',
  PRIMARY KEY (`verba_id`, `usuario_id`)  COMMENT '',
  INDEX `fk_Verbas_usuarios_Usuario_idx` (`usuario_id` ASC)  COMMENT '',
  CONSTRAINT `fk_verba`
    FOREIGN KEY (`verba_id`)
    REFERENCES `igsisv2`.`verbas` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `igsisv2`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
