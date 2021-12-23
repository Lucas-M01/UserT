-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 15/12/2021 às 03:00
-- Versão do servidor: 10.4.21-MariaDB
-- Versão do PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


CREATE DATABASE db_cadastro;
USE db_cadastro;
--

CREATE TABLE `db_cadastro` . `cadastro` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `c_senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Estrutura para tabela `pacientes`
--

CREATE TABLE `db_cadastro` . `pacientes` (
  `id_pacientes` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) DEFAULT NULL,
  `idade` int(150) DEFAULT NULL,
  `peso` int(200) DEFAULT NULL,
  `altura` int(250) DEFAULT NULL,
  `imc` float DEFAULT NULL,
  PRIMARY KEY (`id_pacientes`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
