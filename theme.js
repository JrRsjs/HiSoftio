// Theme Toggle Script
document.addEventListener('DOMContentLoaded', function() {
  const themeToggle = document.getElementById('theme-toggle');
  const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
  const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

  // Check for saved theme preference or default to 'light' mode
  const currentTheme = localStorage.getItem('theme') || 'light';
  
  // Apply the saved theme
  if (currentTheme === 'dark') {
    document.body.classList.add('dark');
    document.documentElement.classList.add('dark');
    themeToggleLightIcon.classList.remove('hidden');
    themeToggleDarkIcon.classList.add('hidden');
  } else {
    document.body.classList.remove('dark');
    document.documentElement.classList.remove('dark');
    themeToggleLightIcon.classList.add('hidden');
    themeToggleDarkIcon.classList.remove('hidden');
  }

  // Handle theme toggle click
  if (themeToggle) {
    themeToggle.addEventListener('click', function() {
      if (document.body.classList.contains('dark')) {
        document.body.classList.remove('dark');
        document.documentElement.classList.remove('dark');
        localStorage.setItem('theme', 'light');
        themeToggleLightIcon.classList.add('hidden');
        themeToggleDarkIcon.classList.remove('hidden');
      } else {
        document.body.classList.add('dark');
        document.documentElement.classList.add('dark');
        localStorage.setItem('theme', 'dark');
        themeToggleLightIcon.classList.remove('hidden');
        themeToggleDarkIcon.classList.add('hidden');
      }
    });
  }

  // Mobile menu toggle
  const mobileMenuButton = document.querySelector('.mobile-menu-button');
  const navbarToggleClose = document.querySelector('.navbar-toggle-close');
  const mobileMenu = document.querySelector('.mobile-menu');

  if (mobileMenuButton) {
    mobileMenuButton.addEventListener('click', function() {
      mobileMenu.classList.add('active');
    });
  }

  if (navbarToggleClose) {
    navbarToggleClose.addEventListener('click', function() {
      mobileMenu.classList.remove('active');
    });
  }

  // Close mobile menu when a link is clicked
  const mobileNavLinks = mobileMenu.querySelectorAll('a');
  mobileNavLinks.forEach(link => {
    link.addEventListener('click', function() {
      mobileMenu.classList.remove('active');
    });
  });

  // Navigation scroll effect
  const mainNav = document.getElementById('mainnavigationBar');
  window.addEventListener('scroll', function() {
    if (window.scrollY > 50) {
      mainNav.classList.add('scrolled');
    } else {
      mainNav.classList.remove('scrolled');
    }
  });
});
