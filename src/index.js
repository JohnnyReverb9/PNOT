document.getElementById('menu-button').addEventListener('click', function () {
    document.querySelector('.blur-background').style.display = 'block';
    document.querySelector('.menu-button').classList.toggle('active');
    document.querySelector('.menu-tabs').classList.toggle('active');
});
