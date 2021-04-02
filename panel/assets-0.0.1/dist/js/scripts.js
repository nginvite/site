import { BASE_URL, URL, APP_VERSION } from "./main.js";

$(function () {

    $('.menu-tree').Treeview();

    $('.menu-nav').click(function () {
        let navIcon = $(this).find('.nav-subicon');
        navIcon.css('display', 'none');
        let navLoading = $(this).find('.nav-subloading');
        navLoading.css('display', 'inline-block');
    });

    logout(BASE_URL);

    $('.reload').click(function (e) {
        e.stopPropagation();
        Swal.fire({
            title: 'Reloading Page...',
            html: 'Please wait',
            onBeforeOpen: () => {
                Swal.showLoading();
                window.location.reload();
            }
        });
    });

    $('[data-toggle="tooltip"]').tooltip();

    $('.select2').select2();

    $('.go-back').click(function () {
        goBack();
    });

    /*SIDEBAR STATE*/
    $('.sidebar-state').on('click', function () {
        $.ajax({
            url: BASE_URL + '/menu/set_sidebar_state/'
        });
    });

    /*MANIPULATE INPUT IMAGE*/
    $('.custom-file-input').on('change', function () {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });


    $(window).scroll(function () {
        if ($(window).scrollTop() > $('.main-header').height()) {
            $('#nav-header-title').fadeIn("fast");
            $('#nav-header-title').removeClass('d-sm-inline-block');
            $('#nav-header-title').removeClass('d-none');
            $('#nav-header-title').addClass('d-inline-block');
        } else {
            $('#nav-header-title').fadeOut("fast");
            $('#nav-header-title').addClass('d-none');
            $('#nav-header-title').removeClass('d-inline-block');
        }
    });

    $('.collapseble').click(function () {
        let icon = $(this).find('i');
        if (icon.hasClass('cil-window-minimize')) {
            icon.removeClass('cil-window-minimize')
            icon.addClass('cil-window-maximize')
            $('.collapseble').prop('title', 'Maximize')
            $('.collapseble').attr('data-original-title', 'Maximize')
            $('[data-toggle="tooltip"]').tooltip('hide')
        } else {
            icon.removeClass('cil-window-maximize')
            icon.addClass('cil-window-minimize')
            $('.collapseble').prop('title', 'Minimize')
            $('.collapseble').attr('data-original-title', 'Minimize')
            $('[data-toggle="tooltip"]').tooltip('hide')
        }
    })

});
let alertLogout = {
    title: "Are you sure?",
    text: "Apakah anda yakin logout dari aplikasi..?",
    showCancelButton: true,
    confirmButtonColor: "#dc3545",
    cancelButtonColor: '#7c8a94',
    confirmButtonText: "YES",
    cancelButtonText: "CANCEL",
    closeOnConfirm: false,
    closeOnCancel: false,
    imageSize: '80x80',
    imageUrl: BASE_URL + 'assets-' + APP_VERSION + '/dist/img/undraw_logout.svg'
};
function logout(baseUrl) {
    $('.logout').click(function () {
        Swal.fire(alertLogout).then((result) => {
            if (result.value) {
                window.location.href = baseUrl + 'login/logout';
            }
        });
    })
}
function goBack() {
    window.history.back()
}
function loadImage(wrap, id, data) {
    if (data == null) {
        wrap.css('cursor', 'not-allowed')
        return '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'
    } else {
        wrap.css('cursor', 'zoom-in')
        wrap.click(function () {
            window.open(BASE_URL + 'img/view/' + id);
        });
    }
    return data;
}