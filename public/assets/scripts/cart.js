document.addEventListener('DOMContentLoaded', function() {
    const menuToggleBtn = document.getElementById('dropdown-cart');
    const sidebar = document.getElementById('dropdown-content-container');

    menuToggleBtn.addEventListener('click', function(e) {
        e.preventDefault();
        if (sidebar.style.display === 'block') {
            sidebar.style.display = 'none';
        } else {
            sidebar.style.display = 'block';
        }
    });
});


document.addEventListener('DOMContentLoaded', function() {
    const menuToggleBtn = document.getElementById('menu-toggle-btn');
    const sidebar = document.getElementById('sidebar');

    menuToggleBtn.addEventListener('click', function(e) {
        e.preventDefault();
        if (sidebar.style.display === 'block') {
            sidebar.style.display = 'none';
        } else {
            sidebar.style.display = 'block';
        }
    });
});
