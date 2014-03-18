SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Disciplines`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Disciplines` (
  `id_disciplines` INT NOT NULL AUTO_INCREMENT,
  `disciplines_name` VARCHAR(50) NOT NULL,
  `description` TEXT NULL,
  PRIMARY KEY (`id_disciplines`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Event`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Event` (
  `id_event` INT NOT NULL AUTO_INCREMENT,
  `category` VARCHAR(100) NOT NULL,
  `date_publication` DATE NOT NULL,
  `hold_date` DATE NOT NULL,
  `name_event` VARCHAR(100) NOT NULL,
  `text_description` VARCHAR(45) NULL,
  `url_pictures` VARCHAR(200) NULL,
  PRIMARY KEY (`id_event`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Employee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Employee` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fio` VARCHAR(100) NOT NULL,
  `photo` VARCHAR(200) NULL DEFAULT NULL,
  `prof_interest` TEXT NULL DEFAULT NULL,
  `projects` VARCHAR(300) NULL DEFAULT NULL,
  `languages` VARCHAR(200) NULL DEFAULT NULL,
  `begin_date` DATE NOT NULL,
  `email` VARCHAR(100) NULL DEFAULT NULL,
  `phone` VARCHAR(100) NULL DEFAULT NULL,
  `degree` VARCHAR(100) NOT NULL,
  `lecturer` TINYINT(1) NOT NULL,
  `position` VARCHAR(100) NOT NULL,
  `training` VARCHAR(200) NULL DEFAULT NULL,
  `consult_time` VARCHAR(200) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
