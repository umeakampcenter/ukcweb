let umeakampcenter = window.umeakampcenter || {};
umeakampcenter.menu = (function() {
    let pub = {};
    pub.init = function ($button, $container) {
        $button.click(function () {
            $container.slideToggle();
        });
    };

    return pub;
}());