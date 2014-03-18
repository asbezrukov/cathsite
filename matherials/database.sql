SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Employee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Employee` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fio` VARCHAR(100) NOT NULL,
  `photo` VARCHAR(200) NULL,
  `prof_interest` TEXT NULL,
  `projects` VARCHAR(300) NULL,
  `languages` VARCHAR(200) NULL,
  `begin_date` DATE NOT NULL,
  `email` VARCHAR(100) NULL,
  `phone` VARCHAR(100) NULL,
  `degree` VARCHAR(100) NOT NULL,
  `lecturer` TINYINT(1) NOT NULL,
  `position` VARCHAR(100) NOT NULL,
  `training` VARCHAR(200) NULL,
  `consult_time` VARCHAR(200) NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
