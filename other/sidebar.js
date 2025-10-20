document.addEventListener('DOMContentLoaded', function () {
  const sidebar = document.getElementById('sidebar');
  const toggleBtn = document.getElementById('toggleSidebarBtn');
  const mainContent = document.querySelector('.main-content');

  // Load previous sidebar state
  let sidebarVisible = localStorage.getItem('sidebarVisible') === 'true';

  // Apply saved state on page load
  if (!sidebarVisible) {
    sidebar.classList.add('hidden');
    mainContent.style.marginLeft = '0';
  } else {
    sidebar.classList.remove('hidden');
    mainContent.style.marginLeft = '260px';
  }

  // Handle toggle button click
  toggleBtn.addEventListener('click', function () {
    sidebarVisible = !sidebarVisible;

    if (sidebarVisible) {
      sidebar.classList.remove('hidden');
      mainContent.style.marginLeft = '260px';
    } else {
      sidebar.classList.add('hidden');
      mainContent.style.marginLeft = '0';
    }

    // Save current state
    localStorage.setItem('sidebarVisible', sidebarVisible);
  });
});
