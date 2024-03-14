(function () {
    // and when you show it, move it to the body
    $(window).on('show.bs.dropdown', function (e) {
        let dropdown = $(e.target).parent().find('.dropdown-menu');
        $('body').append(dropdown.detach());
        let offset = $(e.target).parent().offset();
        dropdown.css({
            'display': 'block',
            'top': offset.top + $(e.target).parent().outerHeight(),
            'left': offset.left
        });
    });

    // and when you hide it, reattach the drop down, and hide it normally
    $(window).on('hide.bs.dropdown', function (e) {
        let dropdown = $('[aria-labelledby="' + e.target.id + '"]');
        $(e.target).parent().append(dropdown.detach());
        dropdown.hide();
    });
})();
