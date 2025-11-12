  const menuToggle = document.getElementById('menuToggle');
  const mainMenu = document.getElementById('mainMenu');

  menuToggle.addEventListener('click', () => {
    const isOpen = mainMenu.classList.toggle('active');
    menuToggle.classList.toggle('active', isOpen);
    menuToggle.setAttribute('aria-expanded', isOpen);
  });

  // Optional: close when clicking outside
  document.addEventListener('click', (event) => {
    if (!mainMenu.contains(event.target) && !menuToggle.contains(event.target)) {
      mainMenu.classList.remove('active');
      menuToggle.classList.remove('active');
      menuToggle.setAttribute('aria-expanded', 'false');
    }
  });