CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `cargo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `senha`, `cargo`) VALUES
(1, 'henry', '123456', 'motoboy'),
(2, 'Dehnise', '123546789', 'gerente'),
(3, 'nathalia', '123', 'gerente'),
(4, 'luvi', '1234567890', 'pizaiolo'),
(8, 'luciano', '123443', 'pizaiolo'),
(9, 'mariana', '12334', 'atedente'),
(10, 'nathalia', '123456', 'attendant'),
(11, 'luciano', '123', 'pizaiolo');
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

CREATE TABLE `pizzas` (
  `id` int(11) NOT NULL,
  `nome` varchar(55) NOT NULL,
  `valor` int(3) NOT NULL,
  `em_estoque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `pizzas` (`id`, `nome`, `valor`, `em_estoque`) VALUES
(1, 'portuguesa', 32, 100),
(2, 'bauru', 36, 20);


ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `pizzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;



CREATE TABLE `pedididos` (
  `id` int(11) NOT NULL,
  `endereco_id` int(11) NOT NULL,
  `valor` int(10) NOT NULL,
  `troco` int(10) NOT NULL,
  `pizzas` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `bebidas` varchar(255) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


INSERT INTO `pedididos` (`id`, `endereco_id`, `valor`, `troco`, `pizzas`, `status`, `bebidas`, `nome`) VALUES
(1, 1, 200, 10, 'portuguesa , bauru', 'pendente', 'coca cola', 'Henry Franz'),
(2, 2, 100, 200, '1 beirute', 'entregue', 'fanta', 'barbara');

ALTER TABLE `pedididos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `endereco_id` (`endereco_id`);


ALTER TABLE `pedididos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;


ALTER TABLE `pedididos`
  ADD CONSTRAINT `pedididos_ibfk_1` FOREIGN KEY (`endereco_id`) REFERENCES `endereco` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;



CREATE TABLE `endereco` (
  `id` int(11) NOT NULL,
  `rua` varchar(255) NOT NULL,
  `cep` int(10) NOT NULL,
  `bairro` varchar(255) NOT NULL,
  `numero` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `endereco` (`id`, `rua`, `cep`, `bairro`, `numero`) VALUES
(1, 'papoula', 2363158, 'flor de maio', 88),
(2, 'violeta', 21110, 'fontalis', 90);


ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `endereco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;



CREATE TABLE `bebidas` (
  `id` int(11) NOT NULL,
  `nome` varchar(55) NOT NULL,
  `valor` int(3) NOT NULL,
  `em_estoque` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



INSERT INTO `bebidas` (`id`, `nome`, `valor`, `em_estoque`) VALUES
(1, 'coca cola', 10, 100),
(2, 'guarana', 8, 90);


ALTER TABLE `bebidas`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `bebidas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
