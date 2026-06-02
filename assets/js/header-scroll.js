(function () {
    var header = document.querySelector('.site-header');
    if (!header) {
        return;
    }

    var lastScroll = window.pageYOffset || document.documentElement.scrollTop;
    var threshold = 50;
    var hideTimeout = null;

    function showFixedHeader() {
        if (hideTimeout) {
            clearTimeout(hideTimeout);
            hideTimeout = null;
        }

        if (!header.classList.contains('fixed')) {
            header.classList.add('fixed');
            header.offsetHeight; // force reflow so the transition can start
            setTimeout(function () {
                header.classList.add('fixed-visible');
            }, 0);
        } else {
            header.classList.add('fixed-visible');
        }
    }

    function hideFixedHeader() {
        if (!header.classList.contains('fixed')) {
            return;
        }

        header.classList.remove('fixed-visible');
        hideTimeout = setTimeout(function () {
            header.classList.remove('fixed');
        }, 250);
    }

    window.addEventListener('scroll', function () {
        var currentScroll = window.pageYOffset || document.documentElement.scrollTop;

        if (currentScroll > threshold && currentScroll > lastScroll) {
            showFixedHeader();
        } else if (currentScroll <= threshold || currentScroll < lastScroll) {
            hideFixedHeader();
        }

        lastScroll = currentScroll;
    }, { passive: true });
})();
