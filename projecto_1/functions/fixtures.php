<?php
require_once "helpers/Conexao.php";

//iserir os dados da bd no ficheiro connexao
$query = "
CREATE TABLE `paginas` (
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
(4, '/servicos', 'header', 'Servicoss'),
(5, '/welcome', 'header', 'Bem vindo ao meu Projecto');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `username` varchar(500) NOT NULL,
  `pass` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `pass`) VALUES
(2, 'caesaralves', '$2y$10$e3CRcSBeDkrSATi8G9j8j.y0QeFprHcHTkmKgNldEB6iMCOXurLJ6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;";

Conexao::runQuery($query);