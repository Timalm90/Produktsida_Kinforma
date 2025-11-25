// Unified header logic: mobile hamburger + responsive cleanup
document.addEventListener("DOMContentLoaded", () => {
  const menuToggle = document.getElementById('menuToggle');
  const mainMenu = document.getElementById('mainMenu');
  const headerContainer = document.querySelector('.header-container');
  const desktopHeader = document.querySelector('.header-container-desktop');

  if (!menuToggle || !mainMenu) {
    // If missing, do nothing (prevents console errors)
    return;
  }

  // Helper to set mobile menu open/closed
  function setMobileMenu(open) {
    if (open) {
      mainMenu.classList.add('active');
      menuToggle.classList.add('active');
      document.body.classList.add('no-scroll');
      menuToggle.setAttribute('aria-expanded', 'true');
      mainMenu.setAttribute('aria-hidden', 'false');
    } else {
      mainMenu.classList.remove('active');
      menuToggle.classList.remove('active');
      document.body.classList.remove('no-scroll');
      menuToggle.setAttribute('aria-expanded', 'false');
      mainMenu.setAttribute('aria-hidden', 'true');
    }
  }

  // Toggle on click
  menuToggle.addEventListener('click', (e) => {
    e.stopPropagation();
    const isOpen = mainMenu.classList.toggle('active');
    setMobileMenu(isOpen);
  });

  // Close on outside click
  document.addEventListener('click', (event) => {
    if (!mainMenu.contains(event.target) && !menuToggle.contains(event.target)) {
      setMobileMenu(false);
    }
  });

  // Close when a link inside mobile menu is clicked (good UX)
  mainMenu.addEventListener('click', (e) => {
    const a = e.target.closest('a');
    if (a) {
      setMobileMenu(false);
    }
  });

  // ESC closes
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') setMobileMenu(false);
  });

  // Responsive cleanup: if width >= 768, ensure mobile menu is closed and aria updated
  function handleResize() {
    const w = window.innerWidth;
    if (w >= 768) {
      setMobileMenu(false);
      if (desktopHeader) desktopHeader.setAttribute('aria-hidden', 'false');
      if (headerContainer) headerContainer.setAttribute('aria-hidden', 'true');
    } else {
      if (desktopHeader) desktopHeader.setAttribute('aria-hidden', 'true');
      if (headerContainer) headerContainer.setAttribute('aria-hidden', 'false');
    }
  }
  window.addEventListener('resize', handleResize);
  handleResize();
});
