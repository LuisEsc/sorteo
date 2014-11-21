CREATE DATABASE `sorteo`;

CREATE TABLE IF NOT EXISTS `sorteo`.`boletos` (
  `idboleto` INT NOT NULL AUTO_INCREMENT,
  `number` VARCHAR(4) NULL,
  `name` VARCHAR(50) NULL,
  PRIMARY KEY (`idboleto`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci
