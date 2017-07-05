let umeakampcenter = window.umeakampcenter || {};
umeakampcenter.menu = (function() {
    let pub = {};
    pub.init = function ($button, $container) {
        console.log($button);
        console.log($container);
        $button.click(function () {
            $container.slideToggle();
        });
    };

    return pub;
}());