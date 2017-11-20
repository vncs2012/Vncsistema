-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 20-Nov-2017 às 15:29
-- Versão do servidor: 5.7.20-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vncsistema`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_abastecimento`
--

CREATE TABLE `tb_abastecimento` (
  `cd_abastecimento` int(11) NOT NULL,
  `dt_abastecimento` date DEFAULT NULL,
  `cd_motorista` int(11) NOT NULL,
  `vl_disel` text,
  `vl_total` text,
  `bo_ativo` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_calibrar`
--

CREATE TABLE `tb_calibrar` (
  `cd_calibrar` int(11) NOT NULL,
  `dt_calibrar` date DEFAULT NULL,
  `bo_ativo` tinyint(1) DEFAULT '1',
  `cd_motorista` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_despesa`
--

CREATE TABLE `tb_despesa` (
  `cd_despesas` int(11) NOT NULL,
  `vl_despesa` decimal(10,2) DEFAULT NULL,
  `dt_despesa` date DEFAULT NULL,
  `cd_tipo_dispesas` int(11) NOT NULL,
  `cd_fornecedor` int(11) NOT NULL,
  `ds_despesa` text,
  `obs_despesa` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_fornecedor`
--

CREATE TABLE `tb_fornecedor` (
  `cd_fornecedor` int(11) NOT NULL,
  `no_fornecedor` text,
  `bo_ativo` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_lubrificacao`
--

CREATE TABLE `tb_lubrificacao` (
  `cd_lubrificacao` int(11) NOT NULL,
  `dt_lubrificacao` date DEFAULT NULL,
  `cd_motorista` int(11) NOT NULL,
  `bo_ativo` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_marca_peneu`
--

CREATE TABLE `tb_marca_peneu` (
  `cd_marca_peneu` int(11) NOT NULL,
  `no_marca_peneu` text,
  `bo_ativo` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_modulo`
--

CREATE TABLE `tb_modulo` (
  `cd_modulo` int(11) NOT NULL,
  `no_modulo` text NOT NULL,
  `bo_modulo` tinyint(1) DEFAULT '1',
  `ds_modulo` text,
  `icon` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_modulo`
--

INSERT INTO `tb_modulo` (`cd_modulo`, `no_modulo`, `bo_modulo`, `ds_modulo`, `icon`) VALUES
(1, 'Teste novo formato', 1, 'Teste', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_motorista`
--

CREATE TABLE `tb_motorista` (
  `cd_motorista` int(11) NOT NULL,
  `nu_cnh` text,
  `tp_cnh` varchar(45) DEFAULT NULL,
  `cd_pessoa` int(11) NOT NULL,
  `vl_salario` text,
  `vl_bonus` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_penalidade`
--

CREATE TABLE `tb_penalidade` (
  `cd_penalidade` int(11) NOT NULL,
  `no_penalidade` text,
  `vl_penalidade` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_penalidade`
--

INSERT INTO `tb_penalidade` (`cd_penalidade`, `no_penalidade`, `vl_penalidade`) VALUES
(3, 'Leite perdido1', '500'),
(4, 'Atraso', '1.50');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_penalidade_rota`
--

CREATE TABLE `tb_penalidade_rota` (
  `cd_penalidade_rota` int(11) NOT NULL,
  `cd_rota_motorista_dia` int(11) NOT NULL DEFAULT '0',
  `cd_penalidade` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_peneu`
--

CREATE TABLE `tb_peneu` (
  `cd_peneu` int(11) NOT NULL,
  `dt_troca` date DEFAULT NULL,
  `cd_marca_peneu` int(11) NOT NULL,
  `bo_ativo` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_pessoa`
--

CREATE TABLE `tb_pessoa` (
  `cd_pessoa` int(11) NOT NULL,
  `no_pessoa` text,
  `nu_cpfcnpj` text,
  `dt_nascimento` date DEFAULT NULL,
  `ds_endereco` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_rota`
--

CREATE TABLE `tb_rota` (
  `cd_rota` int(11) NOT NULL,
  `no_rota` text,
  `qnt_ponto_coleta` int(11) DEFAULT NULL,
  `km_rota` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_rota_fazenda`
--

CREATE TABLE `tb_rota_fazenda` (
  `cd_rota_fazenda` int(11) NOT NULL,
  `no_fazenda` text NOT NULL,
  `no_proprietario` text,
  `km_distancia` text,
  `cd_rota` int(11) NOT NULL,
  `bo_fazenda` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_rota_leite`
--

CREATE TABLE `tb_rota_leite` (
  `cd_leite` int(11) NOT NULL,
  `qnt_leite` text,
  `dt_cadastro` timestamp NULL DEFAULT NULL,
  `cd_rota_fazenda` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_rota_motorista_dia`
--

CREATE TABLE `tb_rota_motorista_dia` (
  `cd_rota_motorista_dia` int(11) NOT NULL,
  `cd_rota` int(11) NOT NULL,
  `cd_motorista` int(11) NOT NULL,
  `km_inicial` text,
  `km_final` text,
  `dt_rota_motorista_dia` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_rotina`
--

CREATE TABLE `tb_rotina` (
  `cd_rotina` int(11) NOT NULL,
  `no_rotina` text NOT NULL,
  `ic_rotina` text,
  `ds_rotina` text,
  `bo_rotina` tinyint(1) DEFAULT '1',
  `cd_modulo` int(11) NOT NULL,
  `no_arquivo` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `tb_rotina`
--

INSERT INTO `tb_rotina` (`cd_rotina`, `no_rotina`, `ic_rotina`, `ds_rotina`, `bo_rotina`, `cd_modulo`, `no_arquivo`) VALUES
(1, 'Penalidade Motorista', NULL, NULL, 1, 1, 'penalidade');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_tipo_dispesas`
--

CREATE TABLE `tb_tipo_dispesas` (
  `cd_tipo_despesa` int(11) NOT NULL,
  `no_tipo_despesa` text,
  `bo_ativo` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_troca_oleo`
--

CREATE TABLE `tb_troca_oleo` (
  `cd_troca_oleo` int(11) NOT NULL,
  `dt_troca_oleo` date DEFAULT NULL,
  `cd_motorista` int(11) NOT NULL,
  `bo_ativo` tinyint(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_abastecimento`
--
ALTER TABLE `tb_abastecimento`
  ADD PRIMARY KEY (`cd_abastecimento`),
  ADD KEY `fk_tb_abastecimento_tb_motorista1_idx` (`cd_motorista`);

--
-- Indexes for table `tb_calibrar`
--
ALTER TABLE `tb_calibrar`
  ADD PRIMARY KEY (`cd_calibrar`),
  ADD KEY `fk_tb_calibrar_tb_motorista1_idx` (`cd_motorista`);

--
-- Indexes for table `tb_despesa`
--
ALTER TABLE `tb_despesa`
  ADD PRIMARY KEY (`cd_despesas`),
  ADD KEY `fk_tb_dispesas_tb_tipo_dispesas1_idx` (`cd_tipo_dispesas`),
  ADD KEY `fk_tb_dispesas_tb_fornecedor1_idx` (`cd_fornecedor`);

--
-- Indexes for table `tb_fornecedor`
--
ALTER TABLE `tb_fornecedor`
  ADD PRIMARY KEY (`cd_fornecedor`);

--
-- Indexes for table `tb_lubrificacao`
--
ALTER TABLE `tb_lubrificacao`
  ADD PRIMARY KEY (`cd_lubrificacao`),
  ADD KEY `fk_tb_lubrificacao_tb_motorista1_idx` (`cd_motorista`);

--
-- Indexes for table `tb_marca_peneu`
--
ALTER TABLE `tb_marca_peneu`
  ADD PRIMARY KEY (`cd_marca_peneu`);

--
-- Indexes for table `tb_modulo`
--
ALTER TABLE `tb_modulo`
  ADD PRIMARY KEY (`cd_modulo`);

--
-- Indexes for table `tb_motorista`
--
ALTER TABLE `tb_motorista`
  ADD PRIMARY KEY (`cd_motorista`,`cd_pessoa`),
  ADD KEY `fk_tb_motorista_tb_pessoa_idx` (`cd_pessoa`);

--
-- Indexes for table `tb_penalidade`
--
ALTER TABLE `tb_penalidade`
  ADD PRIMARY KEY (`cd_penalidade`);

--
-- Indexes for table `tb_penalidade_rota`
--
ALTER TABLE `tb_penalidade_rota`
  ADD PRIMARY KEY (`cd_penalidade_rota`,`cd_rota_motorista_dia`,`cd_penalidade`),
  ADD KEY `fk_tb_penalidade_rota_tb_rota_motorista_dia1_idx` (`cd_rota_motorista_dia`),
  ADD KEY `fk_tb_penalidade_rota_tb_penalidade1_idx` (`cd_penalidade`);

--
-- Indexes for table `tb_peneu`
--
ALTER TABLE `tb_peneu`
  ADD PRIMARY KEY (`cd_peneu`),
  ADD KEY `fk_tb_peneu_tb_marca_peneu1_idx` (`cd_marca_peneu`);

--
-- Indexes for table `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  ADD PRIMARY KEY (`cd_pessoa`);

--
-- Indexes for table `tb_rota`
--
ALTER TABLE `tb_rota`
  ADD PRIMARY KEY (`cd_rota`);

--
-- Indexes for table `tb_rota_fazenda`
--
ALTER TABLE `tb_rota_fazenda`
  ADD PRIMARY KEY (`cd_rota_fazenda`,`cd_rota`),
  ADD KEY `fk_tb_rota_fazenda_tb_rota1_idx` (`cd_rota`);

--
-- Indexes for table `tb_rota_leite`
--
ALTER TABLE `tb_rota_leite`
  ADD PRIMARY KEY (`cd_leite`),
  ADD KEY `fk_tb_rota_leite_tb_rota_fazenda1_idx` (`cd_rota_fazenda`);

--
-- Indexes for table `tb_rota_motorista_dia`
--
ALTER TABLE `tb_rota_motorista_dia`
  ADD PRIMARY KEY (`cd_rota_motorista_dia`,`cd_motorista`),
  ADD KEY `fk_tb_rota_motorista_dia_tb_rota1_idx` (`cd_rota`),
  ADD KEY `fk_tb_rota_motorista_dia_tb_motorista1_idx` (`cd_motorista`);

--
-- Indexes for table `tb_rotina`
--
ALTER TABLE `tb_rotina`
  ADD PRIMARY KEY (`cd_rotina`);

--
-- Indexes for table `tb_tipo_dispesas`
--
ALTER TABLE `tb_tipo_dispesas`
  ADD PRIMARY KEY (`cd_tipo_despesa`);

--
-- Indexes for table `tb_troca_oleo`
--
ALTER TABLE `tb_troca_oleo`
  ADD PRIMARY KEY (`cd_troca_oleo`),
  ADD KEY `fk_tb_troca_oleo_tb_motorista1_idx` (`cd_motorista`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_abastecimento`
--
ALTER TABLE `tb_abastecimento`
  MODIFY `cd_abastecimento` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_calibrar`
--
ALTER TABLE `tb_calibrar`
  MODIFY `cd_calibrar` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_despesa`
--
ALTER TABLE `tb_despesa`
  MODIFY `cd_despesas` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_fornecedor`
--
ALTER TABLE `tb_fornecedor`
  MODIFY `cd_fornecedor` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_lubrificacao`
--
ALTER TABLE `tb_lubrificacao`
  MODIFY `cd_lubrificacao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_marca_peneu`
--
ALTER TABLE `tb_marca_peneu`
  MODIFY `cd_marca_peneu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_modulo`
--
ALTER TABLE `tb_modulo`
  MODIFY `cd_modulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_motorista`
--
ALTER TABLE `tb_motorista`
  MODIFY `cd_motorista` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_penalidade`
--
ALTER TABLE `tb_penalidade`
  MODIFY `cd_penalidade` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_penalidade_rota`
--
ALTER TABLE `tb_penalidade_rota`
  MODIFY `cd_penalidade_rota` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_peneu`
--
ALTER TABLE `tb_peneu`
  MODIFY `cd_peneu` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_pessoa`
--
ALTER TABLE `tb_pessoa`
  MODIFY `cd_pessoa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_rota`
--
ALTER TABLE `tb_rota`
  MODIFY `cd_rota` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_rota_fazenda`
--
ALTER TABLE `tb_rota_fazenda`
  MODIFY `cd_rota_fazenda` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_rota_motorista_dia`
--
ALTER TABLE `tb_rota_motorista_dia`
  MODIFY `cd_rota_motorista_dia` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_rotina`
--
ALTER TABLE `tb_rotina`
  MODIFY `cd_rotina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_tipo_dispesas`
--
ALTER TABLE `tb_tipo_dispesas`
  MODIFY `cd_tipo_despesa` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_troca_oleo`
--
ALTER TABLE `tb_troca_oleo`
  MODIFY `cd_troca_oleo` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tb_abastecimento`
--
ALTER TABLE `tb_abastecimento`
  ADD CONSTRAINT `fk_tb_abastecimento_tb_motorista1` FOREIGN KEY (`cd_motorista`) REFERENCES `tb_motorista` (`cd_motorista`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_calibrar`
--
ALTER TABLE `tb_calibrar`
  ADD CONSTRAINT `fk_tb_calibrar_tb_motorista1` FOREIGN KEY (`cd_motorista`) REFERENCES `tb_motorista` (`cd_motorista`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_despesa`
--
ALTER TABLE `tb_despesa`
  ADD CONSTRAINT `fk_tb_dispesas_tb_fornecedor1` FOREIGN KEY (`cd_fornecedor`) REFERENCES `tb_fornecedor` (`cd_fornecedor`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_dispesas_tb_tipo_dispesas1` FOREIGN KEY (`cd_tipo_dispesas`) REFERENCES `tb_tipo_dispesas` (`cd_tipo_despesa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_lubrificacao`
--
ALTER TABLE `tb_lubrificacao`
  ADD CONSTRAINT `fk_tb_lubrificacao_tb_motorista1` FOREIGN KEY (`cd_motorista`) REFERENCES `tb_motorista` (`cd_motorista`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_motorista`
--
ALTER TABLE `tb_motorista`
  ADD CONSTRAINT `fk_tb_motorista_tb_pessoa` FOREIGN KEY (`cd_pessoa`) REFERENCES `tb_pessoa` (`cd_pessoa`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_penalidade_rota`
--
ALTER TABLE `tb_penalidade_rota`
  ADD CONSTRAINT `fk_tb_penalidade_rota_tb_penalidade1` FOREIGN KEY (`cd_penalidade`) REFERENCES `tb_penalidade` (`cd_penalidade`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_penalidade_rota_tb_rota_motorista_dia1` FOREIGN KEY (`cd_rota_motorista_dia`) REFERENCES `tb_rota_motorista_dia` (`cd_rota_motorista_dia`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_peneu`
--
ALTER TABLE `tb_peneu`
  ADD CONSTRAINT `fk_tb_peneu_tb_marca_peneu1` FOREIGN KEY (`cd_marca_peneu`) REFERENCES `tb_marca_peneu` (`cd_marca_peneu`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_rota_fazenda`
--
ALTER TABLE `tb_rota_fazenda`
  ADD CONSTRAINT `fk_tb_rota_fazenda_tb_rota1` FOREIGN KEY (`cd_rota`) REFERENCES `tb_rota` (`cd_rota`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_rota_leite`
--
ALTER TABLE `tb_rota_leite`
  ADD CONSTRAINT `fk_tb_rota_leite_tb_rota_fazenda1` FOREIGN KEY (`cd_rota_fazenda`) REFERENCES `tb_rota_fazenda` (`cd_rota_fazenda`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_rota_motorista_dia`
--
ALTER TABLE `tb_rota_motorista_dia`
  ADD CONSTRAINT `fk_tb_rota_motorista_dia_tb_motorista1` FOREIGN KEY (`cd_motorista`) REFERENCES `tb_motorista` (`cd_motorista`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tb_rota_motorista_dia_tb_rota1` FOREIGN KEY (`cd_rota`) REFERENCES `tb_rota` (`cd_rota`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tb_troca_oleo`
--
ALTER TABLE `tb_troca_oleo`
  ADD CONSTRAINT `fk_tb_troca_oleo_tb_motorista1` FOREIGN KEY (`cd_motorista`) REFERENCES `tb_motorista` (`cd_motorista`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
