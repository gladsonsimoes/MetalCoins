# MetalCoins

PDF dos requisitos: [8980_1.pdf](https://github.com/gladsonsimoes/MetalCoins/files/10849737/8980_1.pdf)
---

Contextualização:
<h5> Uma grande empresa do setor de siderurgia Vix Min S.A no Espírito Santo vem buscando inovar e trazer engajamento para os seus funcionários. O setor de 
RH fez o levantamento de propostas e acredita que a gamificação e competição saudável entre os funcionários poderá trazer um impacto positivo e novas 
ideias. A proposta aceita foi um sistema de moedas MetalCoin que, através de um e-commerce, permitirá que o RH faça a gestão de moedas e que o 
colaborador realize a troca por produtos de seu interesse.
A empresa Softgranvix foi contratada para criar este sistema de e-commerce e gestão de moedas. Sua equipe está a frente dessa demanda e deverão 
entregar dentro do prazo estabelecido. Neste sistema teremos dois perfis de usuários diferentes: Administrador e Cliente. Estes deverão conter as seguintes 
funcionalidades: </h5>

## O Sistema terá dois tipos de perfis:

### Perfil Administrador:
- Gerenciar usuários e metalcoins;
- Cadastros (Produtos, pedidos e serviços);
- Atualização do pedido.

### Perfil Cliente:
- Navegar
- Comprar (Inclui autenticação);
- Acompanhamento do pedido (Inclui autenticação);

## Requisitos do Sistema MetalCoins:

- Conta corrente

- Transações

- O usuário deverá ter somente um perfil (Administrador ou Comum).

- O perfil Administrador contará com o gerenciamento dos usuários de perfil comum e dos metalcoins. 

- Cada usuário de perfil comum terá uma quantidade de 100 (cem) metalcoins ao criar sua conta.

- O usuário de perfil comum poderá ter uma e somente uma conta corrente. 

- Os movimentos da conta corrente serão registrados de acordo com o  tipo de transação (crédito ou débito) devendo constar a identificação da transação, o número da conta corrente a data de atualização e o saldo. 

- O saldo do usuário deverá ser atualizado sempre que houver uma nova transação

- Os pedidos serão gerados a partir da aquisição de produtos. 

- Cada usuário poderá realizar mais de um pedido. 

- Cada pedido deverá conter a identificação: do usuário, dos produtos; quantidade do produto e a data. O usuário conseguirá acompanhar os status dos pedidos que 
podem variar entre: iniciado, em preparação e disponível para entrega. 

- Cada status possui a data e hora e a sua descrição. 

<br>


## Modelo logico do Banco de dados
![Captura de tela 2023-02-09 194146](https://user-images.githubusercontent.com/99969693/217955561-a436515d-0d63-42da-8c9c-9704cf4789a7.png)
