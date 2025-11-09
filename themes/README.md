# 📁 Pasta `themes`

Esta pasta contém todo o **layout do sistema**, organizado em três áreas principais:

- **Web (pública)** — voltada para o acesso dos visitantes e usuários comuns.  
- **App (aplicação)** — onde ficam as telas da área do usuário autenticado.  
- **Admin (administração)** — responsável pelo gerenciamento do sistema.

Para gerenciar os layouts, foi utilizado o **[League/Plates](https://platesphp.com/)**, um gerenciador de templates em PHP.  
Esse recurso permite criar **temas distintos** para cada área do sistema, chamando automaticamente os arquivos correspondentes às suas respectivas seções.

---

## 📂 Estrutura de Subpastas

### 🧭 Web
Contém as páginas públicas do site.

web/<br>
├─ _theme.php<br>
├─ home.php<br>
├─ about.php<br>
├─ contact.php<br>
├─ faq.php<br>
├─ login.php<br>
└─ register.php<br>

---

### 💼 App
Contém as páginas acessíveis por usuários logados (área de aplicação).

app/<br>
├─ store.php<br>
├─ profile.php<br>
├─ cart.php<br>
├─ comment.php<br>
└─ favoritos.php<br>

---

### ⚙️ Admin
Contém as páginas de administração e gerenciamento do sistema.

admin/<br>
├─ home.php<br>
├─ articles.php<br>
├─ cupons.php<br>
├─ customers.php<br>
├─ orders.php<br>
├─ products.php<br>
├─ reports.php<br>
└─ settings.php<br>

---

## 💡 Observações

- A divisão por áreas facilita a **organização** e **manutenção** do código.
- O uso do **League/Plates** proporciona **modularidade**, permitindo **reutilização de layouts** entre as seções do sistema.
- Cada área pode ter um **tema próprio**, mantendo o design consistente e separado conforme sua finalidade.

---