
// color change js start
    cssVars({
    // Targets                
    rootElement: document,
    shadowDOM: false,
    // Sources
    include: 'style,link[rel="stylesheet"]:not([href*="//"])',
    exclude: '',
    variables: {
    '--primary-color': '#3CCF4E',
    '--secondary-color': '#4c69d1',
    '--primary-hover-color': '#6bc576',
                },
    // Options
    onlyLegacy: true,
    preserveStatic: true,
    preserveVars: false,
    silent: false,
    updateDOM: true,
    updateURLs: true,
    watch: false,

    // Callbacks
    onBeforeSend: function (xhr, elm, url) {
        // ...
    },
    onError: function (message, elm, xhr, url) {
        // ...
    },
    onWarning: function (message) {
        // ...
    },
    onSuccess: function (cssText, elm, url) {
        // ...
    },
    onComplete: function (cssText, styleElms, cssVariables, benchmark) {
        // ...
    },
    onFinally: function (hasChanged, hasNativeSupport, benchmark) {
        // ...
    }
            });
// color change js end


// language select2 js start
    $(document).ready(function () {
        $('.lengchange').select2({
            minimumResultsForSearch: -1
        });
    });
// language select2 js end


// Category select2 js start
$(".custom-select").select2({
    placeholder: "All Category",
    minimumResultsForSearch: -1
});
// Category select2 js end


// loader js start
    $(window).on('load', function (e) {
        e.preventDefault();
        $('.loader-wrapper').fadeOut('slow');
        $(function () {
            setTimeout(function () { }, 500);
        });
    });
// loader js end

// Mobile Navigation Menu js start
    const floating_btn = document.querySelector('.floating-btn');
    const close_btn = document.querySelector('.close-btn');
    const social_panel_container = document.querySelector('.social-panel-container');
    floating_btn.addEventListener('click', () => {
        social_panel_container.classList.toggle('visible')
    });
    close_btn.addEventListener('click', () => {
        social_panel_container.classList.remove('visible')
    });
// Mobile Navigation Menu js start