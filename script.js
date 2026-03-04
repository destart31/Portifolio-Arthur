// O código de rolagem foi removido.
// A rolagem suave agora é controlada pelo CSS em styles.css com a regra:
// html { scroll-behavior: smooth; }

// --- Lógica da Navegação Fixa (Sticky Nav) ---
const nav = document.querySelector("nav");

window.addEventListener("scroll", () => {
  // Adiciona a classe .nav-fixed quando o scroll passar de 10px
  if (window.scrollY > 10) {
    nav.classList.add("nav-fixed");
  } else {
    nav.classList.remove("nav-fixed");
  }
});

// --- Lógica do Botão Voltar ao Topo ---
const backToTopButton = document.querySelector(".back-to-top-btn");

window.addEventListener("scroll", () => {
  // Mostra o botão depois que o usuário rolar 300px para baixo
  if (window.scrollY > 300) {
    backToTopButton.classList.add("show");
  } else {
    backToTopButton.classList.remove("show");
  }
});

// --- Menu Hambúrguer (Mobile) ---
const menuBtn = document.getElementById("menu-btn");
const navMenu = document.getElementById("nav-menu");
const menuIcon = menuBtn.querySelector("i");

menuBtn.addEventListener("click", () => {
  navMenu.classList.toggle("open");

  // Alterna o ícone entre menu e fechar (X)
  const isOpen = navMenu.classList.contains("open");
  menuIcon.setAttribute("class", isOpen ? "ri-close-line" : "ri-menu-3-line");
});

// Fecha o menu ao clicar em um link
navMenu.addEventListener("click", () => {
  navMenu.classList.remove("open");
  menuIcon.setAttribute("class", "ri-menu-3-line");
});
