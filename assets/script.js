var menu_btn = document.querySelector('.navbar-container .menu-btn');
var menu_sidebar = document.querySelector('.navbar-container .sidebar-menu');
var menu_sidebar_close = document.querySelector('.navbar-container .sidebar-inner');
var menu_close = document.querySelector('.navbar-container .menu-header svg');
menu_btn.addEventListener('click', function () { 
    menu_sidebar.classList.add('opened');
});
menu_close.addEventListener('click', function () { 
    menu_sidebar.classList.remove('opened');
});
// menu_sidebar_close.addEventListener('click', function () { 
//     menu_sidebar.classList.remove('opened');
// });