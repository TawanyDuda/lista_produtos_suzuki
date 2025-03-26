-- Data Manipulating Language
-- INSERT, UPDATE, SELECT, DELETE

-- categorias
insert into categorias (nome,descricao)
values(
    ('Eletrônicos','Dispositivos como smartphones, notebooks e tablets.'),
    ('Eletrodomésticos','Produtos para o lar como geladeiras, fogões e máquinas de lavar.'), 
    ('Roupas e Acessórios','Moda masculina, feminina e infantil, incluindo calçados.'),
    ('Beleza e Cuidados Pessoais','Produtos de maquiagem, perfumes e skincare.'),
    ('Saúde e Bem-estar','Suplementos, vitaminas e produtos para cuidados pessoais.'),
    ('Alimentos e Bebidas','Itens de mercado, bebidas e produtos gourmet.'),
    ('Casa e Decoração','Móveis, iluminação e artigos de decoração.'),
    ('Esportes e Lazer','Equipamentos esportivos, roupas fitness e bicicletas.'),
    ('Automotivo','Peças, acessórios e produtos para veículos.'),
    ('Brinquedos e Jogos','Jogos de tabuleiro, brinquedos educativos e eletrônicos.')
)

-- usuarios
insert into usuarios (nome,email,senha,telefone,data_nascimento,cpf)
values(
('João Silva', 'joao.silva@email.com','salame07', '(11) 99999-0001', '1990-01-15', '12345678901'),
('Maria Oliveira', 'maria.oliveira@email.com','salamemingue', '(11) 99999-0002', '1985-02-20', '12345678902'),
('Carlos Souza', 'carlos.souza@email.com', 'salame100','(11) 99999-0003', '1992-03-25', '12345678903'),
('Ana Lima', 'ana.lima@email.com','sabonete356', '(11) 99999-0004', '1995-04-10', '12345678904'),
('Pedro Santos', 'pedro.santos@email.com','salame03873','(11) 99999-0005', '1988-05-30', '12345678905'),
('Juliana Costa', 'juliana.costa@email.com','segurança125', '(11) 99999-0006', '1991-06-12', '12345678906'),
('Lucas Almeida', 'lucas.almeida@email.com','segurança14328e3623', '(11) 99999-0007', '1994-07-05', '12345678907'),
('Fernanda Rocha', 'fernanda.rocha@email.com','aleatoriamente6554', '(11) 99999-0008', '1990-08-21', '12345678908'),
('Ricardo Mendes', 'ricardo.mendes@email.com','segredinho383932', '(11) 99999-0009', '1987-09-09', '12345678909'),
('Camila Nogueira', 'camila.nogueira@email.com', 'anagrama332','(11) 99999-0010', '1993-10-14', '12345678910'),
('Eduardo Ramos', 'eduardo.ramos@email.com','descubra943', '(11) 99999-0011', '1989-11-17', '12345678911'),
('Bianca Ferreira', 'bianca.ferreira@email.com','curioso43', '(11) 99999-0012', '1996-12-22', '12345678912'),
('Gustavo Teixeira', 'gustavo.teixeira@email.com','dançarino1', '(11) 99999-0013', '1986-01-08', '12345678913'),
('Larissa Carvalho', 'larissa.carvalho@email.com','sucata433', '(11) 99999-0014', '1997-02-26', '12345678914'),
('Marcos Antunes', 'marcos.antunes@email.com','tecnologia', '(11) 99999-0015', '1984-04-23', '12332122223')
);

-- produtos
insert into produtos (nome, descricao, preco, id_categoria) 
values(
('iPhone 15', 'Smartphone com tela OLED de 6,1 polegadas e chip A17.', 5999.00,0),
('Geladeira Samsung 520L', 'Geladeira de 520 litros com tecnologia de refrigeração no-frost.', 3499.00, 1),
('Tênis Nike Air Max', 'Tênis de corrida com amortecimento Air Max e design moderno.', 499.90, 2),
('Base Líquida L’Oréal', 'Base líquida de alta cobertura com efeito matte e longa duração.', 89.90, 3),
('Multivitamínico One a Day', 'Suplemento diário para melhorar a saúde geral e aumentar a imunidade.', 69.90, 4),
('Cerveja Artesanal IPA', 'Cerveja artesanal com sabor intenso e amargor característico.', 19.90, 5),
('Sofá Retrátil 3 Lugares', 'Sofá retrátil e reclinável, ideal para conforto e elegância na sua sala.', 1599.00, 6),
('Bicicleta MTB Aro 29', 'Bicicleta de mountain bike com suspensão dianteira e aro 29.', 1899.00, 7),
('Kit de Faróis LED para Carro', 'Kit completo de faróis LED para melhoria da visibilidade do seu veículo.', 299.00, 8),
('Jogo de Tabuleiro Catan', 'Jogo de estratégia onde os jogadores constroem e negociam recursos.', 249.90, 9),
('Caderno Universitário 10 Matérias', 'Caderno espiral com 10 matérias e capa personalizada.', 19.90, 10)
);



