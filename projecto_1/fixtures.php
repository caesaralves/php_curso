<?php
require_once "conn/Conexao.php";

//iserir os dados da bd no ficheiro connexao
$query = "CREATE TABLE `paginas` (
  `id` int(11) NOT NULL,
  `rota` varchar(100) NOT NULL,
  `nome_campo` varchar(100) NOT NULL,
  `conteudo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `paginas`
--

INSERT INTO `paginas` (`id`, `rota`, `nome_campo`, `conteudo`) VALUES
(1, '/contato', 'header', 'Contato'),
(2, '/empresa', 'header', 'Empresa'),
(3, '/produtos', 'header', 'Produtos'),
(4, '/servicos', 'header', 'Servicos'),
(5, '/welcome', 'header', 'Bem vindo ao meu Projecto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myTable`
--
ALTER TABLE `myTable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paginas`
--
ALTER TABLE `paginas`
  ADD UNIQUE KEY `id` (`id`);

8
--
-- AUTO_INCREMENT for table `paginas`
--
ALTER TABLE `paginas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;";

Conexao::runQuery($query);