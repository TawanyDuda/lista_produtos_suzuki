<?php
class Produto{

    private $produtos = [
    [
        'id' => '1',
        'nome' => 'iPhone 15',
        'descricao' => 'Smartphone com tela OLED de 6,1 polegadas e chip A17.',
        'categoria' => 'Eletrônicos',
        'preco' => 5999.00,
        // 'imagem' => '/../view/assets/img'
    ],
    [
        'id' => '2',
        'nome' => 'Geladeira Samsung 520L',
        'descricao' => 'Geladeira de 520 litros com tecnologia de refrigeração no-frost.',
        'categoria' => 'Eletrodomésticos',
        'preco' => 3499.00,
        // 'imagem' => '/../view/assets/img'
    ],
    [
        'id' => '3',
        'nome' => 'Tênis Nike Air Max',
        'descricao' => 'Tênis de corrida com amortecimento Air Max e design moderno.',
        'categoria' => 'Roupas e Acessórios',
        'preco' => 499.90,
        // 'imagem' => '/../view/assets/img'
    ],
    [
        'id' => '4',
        'nome' => 'Base Líquida L’Oréal',
        'descricao' => 'Base líquida de alta cobertura com efeito matte e longa duração.',
        'categoria' => 'Beleza e Cuidados Pessoais',
        'preco' => 89.90,
        // 'imagem' => '/../view/assets/img'
    ],
    [
        'id' => '5',
        'nome' => 'Multivitamínico One a Day',
        'descricao' => 'Suplemento diário para melhorar a saúde geral e aumentar a imunidade.',
        'categoria' => 'Saúde e Bem-estar',
        'preco' => 69.90,
        // 'imagem' => '/../view/assets/img'
    ],
    [
        'id' => '6',
        'nome' => 'Cerveja Artesanal IPA',
        'descricao' => 'Cerveja artesanal com sabor intenso e amargor característico.',
        'categoria' => 'Alimentos e Bebidas',
        'preco' => 19.90,
        // 'imagem' => '/../view/assets/img'
    ],
    [
        'id' => '7',
        'nome' => 'Sofá Retrátil 3 Lugares',
        'descricao' => 'Sofá retrátil e reclinável, ideal para conforto e elegância na sua sala.',
        'categoria' => 'Casa e Decoração',
        'preco' => 1599.00,
        // 'imagem' => '/../view/assets/img'
    ],
    [
        'id' => '8',
        'nome' => 'Bicicleta MTB Aro 29',
        'descricao' => 'Bicicleta de mountain bike com suspensão dianteira e aro 29.',
        'categoria' => 'Esportes e Lazer',
        'preco' => 1899.00,
        // 'imagem' => '/../view/assets/img'
    ],
    [
        'id' => '9',
        'nome' => 'Kit de Faróis LED para Carro',
        'descricao' => 'Kit completo de faróis LED para melhoria da visibilidade do seu veículo.',
        'categoria' => 'Automotivo',
        'preco' => 299.00,
        // 'imagem' => '/../view/assets/img'
    ],
    [
        'id' => '10',
        'nome' => 'Jogo de Tabuleiro Catan',
        'descricao' => 'Jogo de estratégia onde os jogadores constroem e negociam recursos.',
        'categoria' => 'Brinquedos e Jogos',
        'preco' => 249.90,
        // 'imagem' => '/../view/assets/img'
    ],
    [
        'id' => '11',
        'nome' => 'Caderno Universitário 10 Matérias',
        'descricao' => 'Caderno espiral com 10 matérias e capa personalizada.',
        'categoria' => 'Papelaria e Escritório',
        'preco' => 19.90,
        // 'imagem' => '/../view/assets/img'
    ],
    [
        'id' => '12',
        'nome' => 'O Senhor dos Anéis - Edição Especial',
        'descricao' => 'Edição luxuosa com capa dura e ilustrações exclusivas do clássico de J.R.R. Tolkien.',
        'categoria' => 'Livros e Mídia',
        'preco' => 149.90,
        // 'imagem' => '/../view/assets/img'
    ],
    [
        'id' => '13',
        'nome' => 'Violão Yamaha F310',
        'descricao' => 'Violão acústico de excelente qualidade, ideal para iniciantes.',
        'categoria' => 'Música e Instrumentos Musicais',
        'preco' => 799.00,
        // 'imagem' => '/../view/assets/img'
    ],
    [
        'id' => '14',
        'nome' => 'Ração Pedigree Sabor Frango',
        'descricao' => 'Ração seca para cães, sabor frango e com nutrientes balanceados.',
        'categoria' => 'Pet Shop',
        'preco' => 59.90,
        // 'imagem' => '/../view/assets/img'
    ],
    [
        'id' => '15',
        'nome' => 'Furadeira Bosch 600W',
        'descricao' => 'Furadeira elétrica com 600W de potência e velocidade variável.',
        'categoria' => 'Ferramentas e Construção',
        'preco' => 299.90,
        // 'imagem' => '/../view/assets/img'
    ],
    [
        'id' => '16',
        'nome' => 'Relógio Casio G-Shock',
        'descricao' => 'Relógio digital e resistente a impactos, ideal para aventuras.',
        'categoria' => 'Relógios e Óculos',
        'preco' => 399.90,
        // 'imagem' => '/../view/assets/img'
    ],
    [
        'id' => '17',
        'nome' => 'Kit Solar 200W',
        'descricao' => 'Painel solar de 200W com inversor e bateria para armazenamento.',
        'categoria' => 'Energia Solar e Sustentabilidade',
        'preco' => 2599.00,
        // 'imagem' => '/../view/assets/img'
    ],
    [
        'id' => '18',
        'nome' => 'Câmera de Segurança Arlo Pro 4',
        'descricao' => 'Câmera de segurança sem fio com alta definição e visão noturna.',
        'categoria' => 'Segurança e Monitoramento',
        'preco' => 1299.00,
        // 'imagem' => '/../view/assets/img'
    ],
    [
        'id' => '19',
        'nome' => 'Mala de Viagem Samsonite',
        'descricao' => 'Mala resistente e leve, com compartimentos para organização.',
        'categoria' => 'Viagem e Turismo',
        'preco' => 899.00,
        // 'imagem' => '/../view/assets/img/bone.png'
    ],
    [
        'id' => '20',
        'nome' => 'Curso de Marketing Digital',
        'descricao' => 'Curso online de marketing digital com módulos sobre SEO, Ads e redes sociais.',
        'categoria' => 'Serviços Digitais',
        'preco' => 499.00,
        // 'imagem' => '/../view/assets/img'
    ]
    ];


    public function Listar(){
        return $this->produtos;
    }

    public function Buscar_id($id){
        $indexProduto = -1;

        $array_filtrado = array_filter(
            $this->produtos, 
            function ($produto, $index) use ($id, &$indexProduto){
                if($produto['id']==$id){
                    $indexProduto = $index;
                    return $produto;
                }
            },
                ARRAY_FILTER_USE_BOTH
        );
            return $array_filtrado[$indexProduto];
    }
}
?>
