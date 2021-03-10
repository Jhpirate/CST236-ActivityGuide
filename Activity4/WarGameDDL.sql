-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`USERS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`USERS` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `email_address` VARCHAR(45) NOT NULL,
  `credit_card_number` VARCHAR(16) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`WEAPONS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`WEAPONS` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL,
  `description` VARCHAR(45) NOT NULL,
  `power` VARCHAR(45) NOT NULL,
  `image` TEXT(500) NOT NULL,
  `price` DECIMAL(1000) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`CART`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`CART` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `product_ID` VARCHAR(45) NULL,
  `qty` VARCHAR(45) NULL,
  `WEAPONS_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_CART_WEAPONS1_idx` (`WEAPONS_ID` ASC),
  CONSTRAINT `fk_CART_WEAPONS1`
    FOREIGN KEY (`WEAPONS_ID`)
    REFERENCES `mydb`.`WEAPONS` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ADDRESSES`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`ADDRESSES` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `address` VARCHAR(45) NOT NULL,
  `city` VARCHAR(45) NOT NULL,
  `state` VARCHAR(45) NOT NULL,
  `zip_code` VARCHAR(45) NOT NULL,
  `USERS_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_ADDRESSES_USERS_idx` (`USERS_ID` ASC),
  CONSTRAINT `fk_ADDRESSES_USERS`
    FOREIGN KEY (`USERS_ID`)
    REFERENCES `mydb`.`USERS` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ORDERS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`ORDERS` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `date` DATETIME NULL,
  `USERS_ID` INT NOT NULL,
  `ADDRESSES_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_ORDERS_USERS1_idx` (`USERS_ID` ASC),
  INDEX `fk_ORDERS_ADDRESSES1_idx` (`ADDRESSES_ID` ASC),
  CONSTRAINT `fk_ORDERS_USERS1`
    FOREIGN KEY (`USERS_ID`)
    REFERENCES `mydb`.`USERS` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ORDERS_ADDRESSES1`
    FOREIGN KEY (`ADDRESSES_ID`)
    REFERENCES `mydb`.`ADDRESSES` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ORDER_HISTORY`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`ORDER_HISTORY` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `event_date` DATETIME NULL,
  `event_type` INT(10) NULL,
  `ORDERS_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_ORDER_HISTORY_ORDERS1_idx` (`ORDERS_ID` ASC),
  CONSTRAINT `fk_ORDER_HISTORY_ORDERS1`
    FOREIGN KEY (`ORDERS_ID`)
    REFERENCES `mydb`.`ORDERS` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ORDER_DETAILS`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`ORDER_DETAILS` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `quantity` INT NULL,
  `current_description` VARCHAR(500) NULL,
  `current_price` DECIMAL(1000) NULL,
  `ORDERS_ID` INT NOT NULL,
  `WEAPONS_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_ORDER_DETAILS_ORDERS1_idx` (`ORDERS_ID` ASC),
  INDEX `fk_ORDER_DETAILS_WEAPONS1_idx` (`WEAPONS_ID` ASC),
  CONSTRAINT `fk_ORDER_DETAILS_ORDERS1`
    FOREIGN KEY (`ORDERS_ID`)
    REFERENCES `mydb`.`ORDERS` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_ORDER_DETAILS_WEAPONS1`
    FOREIGN KEY (`WEAPONS_ID`)
    REFERENCES `mydb`.`WEAPONS` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
