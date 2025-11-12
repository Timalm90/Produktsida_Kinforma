const menuToggle = document.getElementById('menuToggle');
const mainMenu = document.getElementById('mainMenu');
const headerContainer = document.querySelector('.header-container');

menuToggle.addEventListener('click', () => {
  const isOpen = mainMenu.classList.toggle('active');       // Show/hide menu
  menuToggle.classList.toggle('active', isOpen);           // Hamburger X animation
  headerContainer.classList.toggle('menu-open', isOpen);   // Background + icons inversion
  menuToggle.setAttribute('aria-expanded', isOpen);
});

// Close menu if clicking outside
document.addEventListener('click', (event) => {
  if (!mainMenu.contains(event.target) && !menuToggle.contains(event.target)) {
    mainMenu.classList.remove('active');
    menuToggle.classList.remove('active');
    headerContainer.classList.remove('menu-open');
    menuToggle.setAttribute('aria-expanded', 'false');
  }
});
