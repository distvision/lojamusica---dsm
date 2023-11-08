  <footer>
    <ul>
      <li>Horário de Funcionamento: Segunda a Sábado, das 10h às 20h</li>
      <li>Endereço: Rua da Música, 123</li>
      <li>Telefone: (123) 456-7890</li>
      <li>Gerente: João Silva</li>
      <li>E-mail para Contato:
        <a href="mailto:contato@lojademusica.com">contato@lojademusica.com</a>
      </li>
    </ul>
  </footer>
  </body>
  <script>
    var menu = document.getElementById("secoes-dropdown-menu");
    var fechar = document.getElementById("dropdown");
    document.getElementById("secoes-dropdown")
      .addEventListener("mouseover", function() {
        menu.style.display = "block";
      });
    fechar.addEventListener("mouseleave", (e) => {
      menu.style.display = "none";
    });
    // 
    var menu2 = document.getElementById("secoes-dropdown-menu2");
    var fechar2 = document.getElementById("dropdown2");
    document.getElementById("secoes-dropdown2")
      .addEventListener("mouseover", function() {
        menu2.style.display = "block";
      });
    fechar2.addEventListener("mouseleave", (e) => {
      menu2.style.display = "none";
    });
  </script>

  </html>