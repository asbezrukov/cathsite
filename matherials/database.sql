SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`Classifieds`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Classifieds` (
  `id_сlassifieds` INT(11) NOT NULL AUTO_INCREMENT ,
  `date_publication` DATE NOT NULL ,
  `header` VARCHAR(100) NOT NULL ,
  `text` TEXT NOT NULL ,
  `important` TINYINT(1) NOT NULL ,
  PRIMARY KEY (`id_сlassifieds`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`Files`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Files` (
  `id_file` INT(11) NOT NULL AUTO_INCREMENT ,
  `filename` VARCHAR(100) NOT NULL ,
  `loaddate` DATE NOT NULL ,
  PRIMARY KEY (`id_file`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`Employee`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Employee` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `surname` VARCHAR(100) NOT NULL ,
  `name` VARCHAR(50) NOT NULL ,
  `patronymic` VARCHAR(50) NOT NULL ,
  `photo` VARCHAR(200) NULL DEFAULT NULL ,
  `prof_interest` TEXT NULL DEFAULT NULL ,
  `projects` VARCHAR(300) NULL DEFAULT NULL ,
  `languages` VARCHAR(200) NULL DEFAULT NULL ,
  `begin_date` DATE NOT NULL ,
  `email` VARCHAR(100) NULL DEFAULT NULL ,
  `phone` VARCHAR(100) NULL DEFAULT NULL ,
  `degree` VARCHAR(100) NOT NULL ,
  `lecturer` TINYINT(1) NOT NULL ,
  `position` VARCHAR(100) NOT NULL ,
  `training` VARCHAR(200) NULL DEFAULT NULL ,
  `consult_time` VARCHAR(200) NULL DEFAULT NULL ,
  `rank` VARCHAR(100) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`CourseApplication`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`CourseApplication` (
  `id_cappl` INT(11) NOT NULL AUTO_INCREMENT ,
  `ca_name` VARCHAR(200) NOT NULL ,
  `decription` TEXT NULL DEFAULT NULL ,
  `id_lecturer` INT(11) NOT NULL ,
  `literature` VARCHAR(300) NULL DEFAULT NULL ,
  `id_file` INT(11) NOT NULL ,
  PRIMARY KEY (`id_cappl`) ,
  UNIQUE INDEX `id_cappl_UNIQUE` (`id_cappl` ASC) ,
  INDEX `fk_id_lecturer_idx` (`id_lecturer` ASC) ,
  INDEX `fk_id_file_idx` (`id_file` ASC) ,
  CONSTRAINT `fk_id_file`
    FOREIGN KEY (`id_file` )
    REFERENCES `mydb`.`Files` (`id_file` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_lecturer`
    FOREIGN KEY (`id_lecturer` )
    REFERENCES `mydb`.`Employee` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`Specialization`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Specialization` (
  `number` VARCHAR(100) NOT NULL ,
  `s_name` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`number`) ,
  UNIQUE INDEX `id_UNIQUE` (`number` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`CourseThemes`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`CourseThemes` (
  `id_theme` INT(11) NOT NULL AUTO_INCREMENT ,
  `spec_number` VARCHAR(100) NOT NULL ,
  `year` INT(11) NOT NULL ,
  `ct_name` VARCHAR(45) NOT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `id_lecturer` INT(11) NOT NULL ,
  `literature` VARCHAR(150) NOT NULL ,
  `id_file` INT(11) NOT NULL ,
  PRIMARY KEY (`id_theme`) ,
  UNIQUE INDEX `idcrp_UNIQUE` (`id_theme` ASC) ,
  INDEX `fk_id_lecturer_idx` (`id_lecturer` ASC) ,
  INDEX `fk_id_file_idx` (`id_file` ASC) ,
  INDEX `fk_spec_number_idx` (`spec_number` ASC) ,
  CONSTRAINT `fk_id_file_ct`
    FOREIGN KEY (`id_file` )
    REFERENCES `mydb`.`Files` (`id_file` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_lecturer_ct`
    FOREIGN KEY (`id_lecturer` )
    REFERENCES `mydb`.`Employee` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_spec_number_ct`
    FOREIGN KEY (`spec_number` )
    REFERENCES `mydb`.`Specialization` (`number` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`CoursePapers`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`CoursePapers` (
  `id_cp` INT(11) NOT NULL AUTO_INCREMENT ,
  `designrules` VARCHAR(300) NULL DEFAULT NULL ,
  `id_cappl` INT(11) NOT NULL ,
  `id_theme` INT(11) NOT NULL ,
  `approved` VARCHAR(300) NULL DEFAULT NULL ,
  PRIMARY KEY (`id_cp`) ,
  INDEX `fk_id_capple_idx` (`id_cappl` ASC) ,
  INDEX `fk_id_theme_idx` (`id_theme` ASC) ,
  CONSTRAINT `fk_id_capple`
    FOREIGN KEY (`id_cappl` )
    REFERENCES `mydb`.`CourseApplication` (`id_cappl` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_theme`
    FOREIGN KEY (`id_theme` )
    REFERENCES `mydb`.`CourseThemes` (`id_theme` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`Disciplines`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Disciplines` (
  `id_disciplines` INT(11) NOT NULL AUTO_INCREMENT ,
  `disciplines_name` VARCHAR(100) NOT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  PRIMARY KEY (`id_disciplines`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`Disciplines-Employee`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Disciplines-Employee` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `id_disciplines` INT(11) NOT NULL ,
  `id_employee` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_employee_idx` (`id_employee` ASC) ,
  INDEX `fk_discipline_idx` (`id_disciplines` ASC) ,
  CONSTRAINT `fk_discipline`
    FOREIGN KEY (`id_disciplines` )
    REFERENCES `mydb`.`Disciplines` (`id_disciplines` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_employee`
    FOREIGN KEY (`id_employee` )
    REFERENCES `mydb`.`Employee` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`Disciplines-Files`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Disciplines-Files` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `id_disciplines` INT(11) NOT NULL ,
  `id_files` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_discipline_idx` (`id_disciplines` ASC) ,
  INDEX `fk_file_idx` (`id_files` ASC) ,
  CONSTRAINT `fk_discipline_df`
    FOREIGN KEY (`id_disciplines` )
    REFERENCES `mydb`.`Disciplines` (`id_disciplines` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_file_df`
    FOREIGN KEY (`id_files` )
    REFERENCES `mydb`.`Files` (`id_file` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`Disciplines-Specialization`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Disciplines-Specialization` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `id_disciplines` INT(11) NOT NULL ,
  `num_specialization` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_discipline_idx` (`id_disciplines` ASC) ,
  INDEX `fk_specialization_idx` (`num_specialization` ASC) ,
  CONSTRAINT `fk_discipline_ds`
    FOREIGN KEY (`id_disciplines` )
    REFERENCES `mydb`.`Disciplines` (`id_disciplines` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_specialization_ds`
    FOREIGN KEY (`num_specialization` )
    REFERENCES `mydb`.`Specialization` (`number` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`EventCategory`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`EventCategory` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `ec_name` VARCHAR(200) NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`Event`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Event` (
  `id_event` INT(11) NOT NULL AUTO_INCREMENT ,
  `name_event` VARCHAR(100) NOT NULL ,
  `id_category` INT(11) NOT NULL ,
  `date_publication` DATETIME NOT NULL ,
  `hold_date` DATETIME NOT NULL ,
  `text_description` VARCHAR(1000) NULL DEFAULT NULL ,
  `url_pictures` VARCHAR(500) NULL DEFAULT NULL ,
  PRIMARY KEY (`id_event`) ,
  INDEX `fk_event_category_idx` (`id_category` ASC) ,
  CONSTRAINT `fk_event_category`
    FOREIGN KEY (`id_category` )
    REFERENCES `mydb`.`EventCategory` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`FootRefCat`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`FootRefCat` (
  `idFootRefCat` INT(11) NOT NULL AUTO_INCREMENT ,
  `frc_name` VARCHAR(50) NOT NULL ,
  PRIMARY KEY (`idFootRefCat`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`FootRef`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`FootRef` (
  `id_FootRef` INT(11) NOT NULL AUTO_INCREMENT ,
  `idFootRefCat` INT(11) NOT NULL ,
  `fr_name` VARCHAR(150) NULL DEFAULT NULL ,
  `url` VARCHAR(500) NULL DEFAULT NULL ,
  `authOnly` TINYINT(1) NULL DEFAULT NULL ,
  PRIMARY KEY (`id_FootRef`) ,
  INDEX `fk_ref_ctegory_idx` (`idFootRefCat` ASC) ,
  CONSTRAINT `fk_ref_ctegory`
    FOREIGN KEY (`idFootRefCat` )
    REFERENCES `mydb`.`FootRefCat` (`idFootRefCat` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`Group`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Group` (
  `number` VARCHAR(100) NOT NULL ,
  `specialization` VARCHAR(100) NOT NULL ,
  `course` INT(11) NOT NULL ,
  PRIMARY KEY (`number`) ,
  UNIQUE INDEX `number_UNIQUE` (`number` ASC) ,
  INDEX `fk_spec_number_idx` (`specialization` ASC) ,
  CONSTRAINT `fk_spec_number`
    FOREIGN KEY (`specialization` )
    REFERENCES `mydb`.`Specialization` (`number` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`Laboratory`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Laboratory` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `l_name` VARCHAR(200) NOT NULL ,
  `address` VARCHAR(200) NOT NULL ,
  `description` VARCHAR(300) NULL DEFAULT NULL ,
  `photo` VARCHAR(300) NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`Laboratory-Employee`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Laboratory-Employee` (
  `id` INT(11) NOT NULL AUTO_INCREMENT ,
  `id_employee` INT(11) NOT NULL ,
  `id_laboratory` INT(11) NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  INDEX `fk_id_employee_idx` (`id_employee` ASC) ,
  INDEX `kf_id_laboratory_idx` (`id_laboratory` ASC) ,
  CONSTRAINT `fk_id_employee`
    FOREIGN KEY (`id_employee` )
    REFERENCES `mydb`.`Employee` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_id_laboratory`
    FOREIGN KEY (`id_laboratory` )
    REFERENCES `mydb`.`Laboratory` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`NewsCategory`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`NewsCategory` (
  `id_newsCategory` INT(11) NOT NULL AUTO_INCREMENT ,
  `nc_name` VARCHAR(200) NOT NULL ,
  PRIMARY KEY (`id_newsCategory`) ,
  UNIQUE INDEX `id_newsCategory_UNIQUE` (`id_newsCategory` ASC) )
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`News`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`News` (
  `id_news` INT(11) NOT NULL AUTO_INCREMENT ,
  `category` INT(11) NOT NULL ,
  `date_publication` DATE NOT NULL ,
  `news_pictures` VARCHAR(200) NULL DEFAULT NULL ,
  `publication_main` TINYINT(1) NOT NULL ,
  `header` VARCHAR(100) NOT NULL ,
  `preview` TEXT NOT NULL ,
  `text_description` TEXT NOT NULL ,
  PRIMARY KEY (`id_news`) ,
  INDEX `fk_category` (`category` ASC) ,
  CONSTRAINT `fk_category`
    FOREIGN KEY (`category` )
    REFERENCES `mydb`.`NewsCategory` (`id_newsCategory` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 11
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`PracticeReports`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`PracticeReports` (
  `id_preport` INT(11) NOT NULL AUTO_INCREMENT ,
  `designrules` VARCHAR(500) NOT NULL ,
  `applform` VARCHAR(100) NOT NULL ,
  `practplaces` VARCHAR(200) NOT NULL ,
  PRIMARY KEY (`id_preport`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`Student`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Student` (
  `id_stud` INT(11) NOT NULL AUTO_INCREMENT ,
  `fio` VARCHAR(100) NOT NULL ,
  `group` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id_stud`) ,
  UNIQUE INDEX `id_UNIQUE` (`id_stud` ASC) ,
  INDEX `fk_group_number_idx` (`group` ASC) ,
  CONSTRAINT `fk_group_number`
    FOREIGN KEY (`group` )
    REFERENCES `mydb`.`Group` (`number` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`Subscribers`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Subscribers` (
  `id_subscribers` INT(11) NOT NULL AUTO_INCREMENT ,
  `s_name` VARCHAR(100) NOT NULL ,
  `email` VARCHAR(100) NOT NULL ,
  PRIMARY KEY (`id_subscribers`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`Users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Users` (
  `idUsers` INT(11) NOT NULL AUTO_INCREMENT ,
  `employee` TINYINT(1) NULL DEFAULT NULL ,
  `student` TINYINT(1) NULL DEFAULT NULL ,
  `username` VARCHAR(100) NOT NULL ,
  `password` VARCHAR(100) NOT NULL ,
  `role` VARCHAR(100) NULL DEFAULT NULL ,
  `date_last_auth` DATETIME NULL DEFAULT NULL ,
  `date_create` DATETIME NOT NULL ,
  PRIMARY KEY (`idUsers`) ,
  UNIQUE INDEX `idUsers_UNIQUE` (`idUsers` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `mydb`.`Pages`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `mydb`.`Pages` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(200) NULL ,
  `code` TEXT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
