CREATE TABLE IF NOT EXISTS `tb_informacoes_gatos` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`nome` varchar(150) NOT NULL,
	`vermifugado` boolean NOT NULL,
	`possui-doença` int,
	`castrado` boolean NOT NULL,
	`idade` int NOT NULL,
	`foto` varchar(1000) NOT NULL,
	PRIMARY KEY (`id`)
);
CREATE TABLE IF NOT EXISTS `tb_adotantes` (
	`id` int AUTO_INCREMENT NOT NULL UNIQUE,
	`nome-adotante` varchar(250) NOT NULL,
	`cpf` int NOT NULL,
	`telefone` varchar(11) NOT NULL,
	`animal-adotado` varchar(150) NOT NULL,
	`cep` varchar(9) NOT NULL,
	`numero-residencia` int NOT NULL,
	`complemento` varchar(150) NOT NULL,
	PRIMARY KEY (`id`)
);