const sideMenu = document.querySelector("aside")
const menuBtn = document.querySelector("#menu-btn")//id
const closeBtn = document.querySelector("#close-btn")//id

const activePage = window.location.pathname;
const navLinks = document.querySelectorAll('aside .sidebar a').forEach(link => {
  if (link.href.includes(`${activePage}`)) {
    link.classList.add('active')
  }
});

menuBtn.addEventListener('click', () => {
  sideMenu.style.display = 'block';
})

closeBtn.addEventListener('click', () => {
  sideMenu.style.display = 'none';
})