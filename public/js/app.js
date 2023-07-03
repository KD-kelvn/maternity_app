
// Get all the link elements inside the sidebar
const links = document.querySelectorAll('.quick-links li');

// Add click event listener to each link
links.forEach(link => {
  link.addEventListener('click', (event) => {
    // Remove the active-link class from all links
    links.forEach(link => link.classList.remove('active-link'));
    
    // Add the active-link class to the clicked link
    event.currentTarget.classList.add('active-link');
  });
});
