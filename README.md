# Armarinho da Nick - Planejamento e Estruturação Inicial (SE1)

**Disciplina:** Programação Web II  
**Prof.:** Fábio Luís da Silva Santos  
**Autora:** Nicóli Pereira Elesbão  
**Turma:** INF-3AT  

---

## 📘 Resumo

O **Armarinho da Nick** é um sistema Web no formato **micro SaaS (Software as a Service)** desenvolvido com o objetivo de oferecer uma plataforma digital intuitiva e eficiente para **artesãos e consumidores de produtos artesanais**. O sistema atua como um **marketplace**, permitindo a compra e venda de peças prontas, materiais e ferramentas de tecelagem.  

Por meio de uma estrutura **baseada no padrão MVC (Model-View-Controller)** e implementada com **PHP Orientado a Objetos**, **JavaScript prototípico**, **MySQL**, e integração com **APIs RESTful**, o sistema proporciona funcionalidades como autenticação segura (JWT), gerenciamento de usuários e produtos, geração de relatórios em PDF e comunicação com um aplicativo móvel. O objetivo é **modernizar e automatizar o processo de comercialização artesanal**, conectando produtores e clientes em um ambiente acessível e confiável.

---

## 🏢 Área de Atuação

O sistema está inserido no **setor comercial**, com foco no mercado de **artesanato e tecelagem manual**. Esse mercado, embora em crescimento, ainda enfrenta desafios quanto à **divulgação de produtos**, **organização de pedidos** e **gestão de estoques**, muitas vezes realizados de forma manual ou por meio de redes sociais.  

O **Armarinho da Nick** propõe uma solução tecnológica para esse cenário, centralizando as transações em uma plataforma que permite aos artesãos divulgar seus produtos, gerenciar pedidos e controlar o estoque de forma digital. A aplicação também oferece um painel administrativo para vendedores e um ambiente de compras amigável para consumidores.  

A empresa fictícia **Armarinho da Nick**, sediada em Porto Alegre-RS, conta com uma pequena equipe responsável por artesanato têxtil e venda de materiais. Atualmente, os pedidos são feitos via mensagens em redes sociais, sem controle automatizado. O sistema proposto busca resolver esses gargalos e modernizar o processo de atendimento.

---

## 👥 Público-Alvo

O público-alvo do **Armarinho da Nick** compreende:
- **Artesãos independentes** que desejam vender suas criações e materiais online.  
- **Consumidores** interessados em produtos artesanais personalizados e sustentáveis.  
- **Administradores e lojistas** responsáveis pelo controle do sistema, produtos e pedidos.  

O perfil dos usuários varia entre **18 e 60 anos**, com **níveis diversos de experiência tecnológica**, sendo o sistema projetado para ser **intuitivo, responsivo e acessível**.  
A diferenciação entre perfis de usuário (cliente, vendedor e administrador) garante acesso personalizado a funcionalidades específicas.

---

## 🎯 Objetivos

### Objetivo Geral
Desenvolver um sistema Web no modelo micro SaaS que automatize e simplifique o processo de **compra, venda e gerenciamento de produtos artesanais**, promovendo maior organização, visibilidade e integração entre produtores e consumidores.

### Objetivos Específicos
- Implementar **cadastro e autenticação de usuários** (clientes, vendedores e administradores) com **JWT**.  
- Criar um **painel administrativo** para gerenciamento de produtos, usuários e pedidos.  
- Desenvolver uma **API RESTful** para integração com um aplicativo móvel.  
- Permitir **upload e manipulação de imagens** de produtos.  
- Implementar a **geração de relatórios em PDF** sobre vendas e cadastros.  
- Adotar o **padrão MVC** e **orientação a objetos** no back-end (PHP).  
- Garantir **acessibilidade e responsividade** no front-end com HTML5, CSS3 e JavaScript prototípico.  

---

## ⚙️ Funcionamento

O sistema é dividido em três áreas principais: **Pública**, **Aplicação Web do Usuário** e **Área Administrativa**, garantindo uma estrutura modular e segura.

### Área Pública
A **área pública** é acessível a todos os visitantes, sem necessidade de login. Contém informações institucionais sobre o Armarinho da Nick, catálogo de produtos, ofertas, contatos e localização.  
Essa área visa atrair potenciais clientes e apresentar o propósito da plataforma.

### Aplicação Web do Usuário
Essa é a área restrita aos **usuários cadastrados**. Após realizar login, o usuário pode:
- Atualizar seu perfil;  
- Visualizar e comprar produtos;  
- Acompanhar pedidos;  
- Caso seja vendedor, cadastrar novos produtos e editar seus anúncios.  

O acesso é autenticado por **email e senha**, e as informações são armazenadas em **banco de dados MySQL**, com comunicação via **localStorage e API REST**.

### Área Administrativa
A **área administrativa** é restrita aos usuários com perfil **admin**, responsáveis por:
- Gerenciar todos os produtos e usuários;  
- Aprovar vendedores;  
- Emitir relatórios em **PDF** sobre vendas, produtos e movimentações;  
- Supervisionar o sistema e o banco de dados.  

---

## 🧩 Contextualização / Problematização

Atualmente, muitos artesãos e pequenos lojistas enfrentam **dificuldades na gestão de seus negócios**, especialmente quanto ao controle de pedidos, divulgação de produtos e relacionamento com clientes. A ausência de um sistema automatizado resulta em **erros manuais, perda de registros e dificuldade de expansão**.  

O **Armarinho da Nick** surge como resposta a essas necessidades, oferecendo uma ferramenta centralizada para **gerenciamento e divulgação**, substituindo planilhas, redes sociais e mensagens avulsas por um sistema completo de gestão e e-commerce.

---

## 💻 Desenvolvimento da Solução Proposta

### Diagrama de Classes (UML)
O sistema será desenvolvido com base em **Programação Orientada a Objetos (POO)**.  
As principais classes são:

- **Usuario** *(classe abstrata)*  
  - Atributos: id, nome, email, senha, tipo (cliente, vendedor, admin)  
  - Métodos: autenticar(), atualizarPerfil(), excluirConta()  

- **Produto**  
  - Atributos: id, título, descrição, preço, imagem, vendedor_id  
  - Métodos: cadastrar(), atualizar(), deletar(), listar()  

- **Pedido**  
  - Atributos: id, usuario_id, total, status, data_criacao  
  - Métodos: criar(), atualizarStatus(), listarPorUsuario()  

- **Relatorio**  
  - Métodos: gerarPDF(), gerarGrafico()  


---

### Front-end
O front-end será desenvolvido utilizando:
- **HTML5** e **CSS3** para estrutura e estilização das páginas.  
- **JavaScript** com **orientação a objetos prototípica** para manipulação do DOM, interatividade e comunicação com a API.  
- Interface responsiva, projetada para oferecer **acessibilidade e boa usabilidade** em diferentes dispositivos.

Principais telas:
1. **Home (index.html)** – página inicial com catálogo e navegação.  
2. **Login e Cadastro (login.html / cadastro.html)** – autenticação de usuários.  
3. **Perfil do Usuário (profile.html)** – atualização de dados pessoais.  
4. **Lista de Produtos (produtos.html)** – catálogo dinâmico.  
5. **Área Administrativa (admin.html)** – gerenciamento de usuários, produtos e relatórios.

---

### Banco de Dados
O banco será implementado em **MySQL**, com as entidades:
- **users (usuários)**  
- **products (produtos)**  
- **orders (pedidos)**  
- **order_items (itens do pedido)**  


---

### Back-end
O back-end será desenvolvido em **PHP Orientado a Objetos**, adotando o **padrão MVC** e utilizando bibliotecas via **Composer**, tais como:
- `firebase/php-jwt` – autenticação por tokens JWT;  
- `dompdf/dompdf` – geração de relatórios em PDF;  
- `intervention/image` – manipulação e upload de imagens;  
- `phpmailer/phpmailer` – envio de e-mails de confirmação e contato;  
- `nikic/fast-route` – gerenciamento de rotas amigáveis.

O tratamento de erros e exceções será feito com blocos `try/catch`, garantindo maior robustez e segurança no sistema.

---

### API
A aplicação fornecerá uma **API RESTful** responsável por servir dados para o **aplicativo mobile** e o front-end Web.  
Endpoints planejados incluem:
- `/api/login` – autenticação e retorno de token JWT  
- `/api/register` – cadastro de usuários  
- `/api/products` – CRUD de produtos  
- `/api/orders` – criação e listagem de pedidos  
- `/api/reports` – geração de relatórios em PDF ou JSON  

---

### Aplicativo Mobile
O aplicativo mobile (a ser desenvolvido na disciplina de Programação de Dispositivos Móveis) consumirá a API REST para oferecer acesso rápido às principais funcionalidades, como visualização de produtos, login e acompanhamento de pedidos.

---

## 🚀 Resultados Esperados

Com a implantação do **Armarinho da Nick**, espera-se:
- Maior **organização no gerenciamento de produtos e vendas**;  
- **Aumento na visibilidade** dos artesãos e de seus trabalhos;  
- **Redução de erros operacionais** no controle de estoque e pedidos;  
- **Integração eficiente** entre sistema web e aplicação mobile;  
- Melhoria na **comunicação e relacionamento** entre vendedores e consumidores.  

Espera-se que, em um prazo de **3 a 6 meses de uso contínuo**, a plataforma traga melhorias significativas na produtividade e lucratividade da empresa.

---

## 🧾 Conclusões

O sistema **Armarinho da Nick** representa uma solução moderna e escalável para o setor artesanal, integrando tecnologia, organização e acessibilidade.  
Com o uso de práticas avançadas de **Programação Web**, **POO**, **MVC** e **APIs RESTful**, o sistema permite que pequenos empreendedores alcancem novos mercados e gerenciem seus negócios de forma profissional.  

Como proposta futura, o sistema poderá incluir módulos de **pagamento integrado**, **chat entre clientes e vendedores**, e **análises preditivas de vendas**, ampliando ainda mais sua aplicabilidade no mercado artesanal.

---

## 📚 Referências

- Open Web Application Security Project (OWASP). *Security Principles and Practices.* Disponível em: https://owasp.org  
- W3C. *HTML5, CSS3 and Web Standards.* Disponível em: https://www.w3.org  
- PHP Documentation. *PHP Manual.* Disponível em: https://www.php.net/docs.php  
- MySQL Documentation. *MySQL Reference Manual.* Disponível em: https://dev.mysql.com/doc/  
- DOMPDF Library. *Official Documentation.* Disponível em: https://github.com/dompdf/dompdf  
- Firebase JWT. *Authentication for PHP.* Disponível em: https://github.com/firebase/php-jwt  

---
