$("#leftside-navigation .sub-menu > a").click(function (e) {
    $("#leftside-navigation ul ul").slideUp(), $(this).next().is(":visible") || $(this).next().slideDown(),
        e.stopPropagation()
})

// JavaScript to handle dropdown menus
document.querySelectorAll('.dropdown').forEach(dropdown => {
    dropdown.addEventListener('click', function (e) {
        e.stopPropagation();
        let dropdownContent = this.querySelector('.dropdown-content');
        if (dropdownContent.style.display === 'block') {
            dropdownContent.style.display = 'none';
        } else {
            document.querySelectorAll('.dropdown-content').forEach(content => {
                content.style.display = 'none';
            });
            dropdownContent.style.display = 'block';
        }
    });
});

document.addEventListener('click', function () {
    document.querySelectorAll('.dropdown-content').forEach(content => {
        content.style.display = 'none';
    });
});