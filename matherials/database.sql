SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `mydb` ;
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

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


-- -----------------------------------------------------
-- Table `mydb`.`Disciplines`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Disciplines` (
  `id_disciplines` INT NOT NULL AUTO_INCREMENT,
  `disciplines_name` VARCHAR(100) NOT NULL,
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
  `text_description` VARCHAR(45) NULL DEFAULT NULL,
  `url_pictures` VARCHAR(200) NULL DEFAULT NULL,
  PRIMARY KEY (`id_event`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Specialization`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Specialization` (
  `number` VARCHAR(100) NOT NULL,
  `name` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`number`),
  UNIQUE INDEX `id_UNIQUE` (`number` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Group`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Group` (
  `number` VARCHAR(100) NOT NULL,
  `specialization` VARCHAR(100) NOT NULL,
  `course` INT NOT NULL,
  PRIMARY KEY (`number`),
  UNIQUE INDEX `number_UNIQUE` (`number` ASC),
  INDEX `fk_spec_number_idx` (`specialization` ASC),
  CONSTRAINT `fk_spec_number`
    FOREIGN KEY (`specialization`)
    REFERENCES `mydb`.`Specialization` (`number`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Student`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Student` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `fio` VARCHAR(100) NOT NULL,
  `group` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_group_number_idx` (`group` ASC),
  CONSTRAINT `fk_group_number`
    FOREIGN KEY (`group`)
    REFERENCES `mydb`.`Group` (`number`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Laboratory`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Laboratory` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(200) NOT NULL,
  `address` VARCHAR(200) NOT NULL,
  `description` VARCHAR(300) NULL DEFAULT NULL,
  `photo` VARCHAR(300) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Laboratory-Employee`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Laboratory-Employee` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_employee` INT NOT NULL,
  `id_laboratory` INT NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `fk_id_employee_idx` (`id_employee` ASC),
  INDEX `kf_id_laboratory_idx` (`id_laboratory` ASC),
  CONSTRAINT `fk_id_employee`
    FOREIGN KEY (`id_employee`)
    REFERENCES `mydb`.`Employee` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `kf_id_laboratory`
    FOREIGN KEY (`id_laboratory`)
    REFERENCES `mydb`.`Laboratory` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`News`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`News` (
  `id_news` INT NOT NULL AUTO_INCREMENT,
  `category` VARCHAR(100) NOT NULL,
  `date_publication` DATE NOT NULL,
  `news_pictures` VARCHAR(200) NULL DEFAULT NULL,
  `publication_main` TINYINT(1) NOT NULL,
  `header` VARCHAR(100) NOT NULL,
  `preview` TEXT NOT NULL,
  `text_description` TEXT NOT NULL,
  PRIMARY KEY (`id_news`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Classifieds`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Classifieds` (
  `id_сlassifieds` INT NOT NULL AUTO_INCREMENT,
  `date_publication` DATE NOT NULL,
  `header` VARCHAR(100) NOT NULL,
  `text` TEXT NOT NULL,
  `important` TINYINT(1) NOT NULL,
  PRIMARY KEY (`id_сlassifieds`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Subscribers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Subscribers` (
  `id_subscribers` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(50) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id_subscribers`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Files`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Files` (
  `id_file` INT NOT NULL AUTO_INCREMENT,
  `filename` VARCHAR(100) NOT NULL,
  `loaddate` DATE NOT NULL,
  PRIMARY KEY (`id_file`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`PracticeReports`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`PracticeReports` (
  `id_preport` INT NOT NULL AUTO_INCREMENT,
  `designrules` VARCHAR(500) NOT NULL,
  `applform` VARCHAR(100) NOT NULL,
  `practplaces` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id_preport`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`CourseApplication`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`CourseApplication` (
  `id_cappl` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(200) NOT NULL,
  `decription` TEXT NULL DEFAULT NULL,
  `id_lecturer` INT NOT NULL,
  `literature` VARCHAR(300) NULL DEFAULT NULL,
  `id_file` INT NOT NULL,
  PRIMARY KEY (`id_cappl`),
  INDEX `fk_id_lecturer_idx` (`id_lecturer` ASC),
  INDEX `fk_id_file_idx` (`id_file` ASC),
  CONSTRAINT `fk_id_lecturer`
    FOREIGN KEY (`id_lecturer`)
    REFERENCES `mydb`.`Employee` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_file`
    FOREIGN KEY (`id_file`)
    REFERENCES `mydb`.`Files` (`id_file`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`CourseThemes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`CourseThemes` (
  `id_theme` INT NOT NULL AUTO_INCREMENT,
  `spec_number` VARCHAR(100) NOT NULL,
  `year` INT NOT NULL,
  `name` VARCHAR(45) NOT NULL,
  `description` TEXT NULL DEFAULT NULL,
  `id_lecturer` INT NOT NULL,
  `literature` VARCHAR(150) NOT NULL,
  `id_file` INT NOT NULL,
  PRIMARY KEY (`id_theme`),
  UNIQUE INDEX `idcrp_UNIQUE` (`id_theme` ASC),
  INDEX `fk_id_lecturer_idx` (`id_lecturer` ASC),
  INDEX `fk_id_file_idx` (`id_file` ASC),
  INDEX `fk_spec_number_idx` (`spec_number` ASC),
  CONSTRAINT `fk_id_lecturer`
    FOREIGN KEY (`id_lecturer`)
    REFERENCES `mydb`.`Employee` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_file`
    FOREIGN KEY (`id_file`)
    REFERENCES `mydb`.`Files` (`id_file`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_spec_number`
    FOREIGN KEY (`spec_number`)
    REFERENCES `mydb`.`Specialization` (`number`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`CoursePapers`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`CoursePapers` (
  `id_cp` INT NOT NULL AUTO_INCREMENT,
  `designrules` VARCHAR(300) NULL DEFAULT NULL,
  `id_cappl` INT NOT NULL,
  `id_theme` INT NOT NULL,
  `approved` VARCHAR(300) NULL DEFAULT NULL,
  PRIMARY KEY (`id_cp`),
  INDEX `fk_id_capple_idx` (`id_cappl` ASC),
  INDEX `fk_id_theme_idx` (`id_theme` ASC),
  CONSTRAINT `fk_id_capple`
    FOREIGN KEY (`id_cappl`)
    REFERENCES `mydb`.`CourseApplication` (`id_cappl`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_theme`
    FOREIGN KEY (`id_theme`)
    REFERENCES `mydb`.`CourseThemes` (`id_theme`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
