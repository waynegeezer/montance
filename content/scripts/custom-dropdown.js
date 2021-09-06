function DropDown(el) {
    this.dd = el;
    this.placeholder = this.dd.children('span');
    this.opts = this.dd.find('ul.custom-dropdown-list li');
    this.val = '';
    this.index = -1;
    this.initEvents();
}

DropDown.prototype = {
    initEvents: function () {
        var obj = this;
        obj.dd.on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            $(this).toggleClass('open');
        });
        obj.opts.on('click', function () {
            var opt = $(this);
            obj.val = opt.text();
            obj.index = opt.index();
            obj.placeholder.text(obj.val);
            opt.siblings().removeClass('selected');
            opt.filter(':contains("' + obj.val + '")').addClass('selected');
        }).change();
    },
    getValue: function () {
        return this.val;
    },
    getIndex: function () {
        return this.index;
    }
};

$(function () {
    /*--------*/
    // create new variable for each menu
    var dd1 = new DropDown($('.filter-block-1'));
    var dd2 = new DropDown($('.filter-block-2'));

    $(document).click(function () {
        // close menu on document click
        $('.filter-block').removeClass('open');
    });

    $(".filter-block-1").click(function () {
        $('.filter-block-2').removeClass('open');
        $('.filter-block-2 .filter-name span').text('-');
    });

    $(".filter-block-2").click(function () {
        $('.filter-block-1').removeClass('open');
        $('.filter-block-1 .filter-name span').text('-');
    });

    $(".filter-block-1 .filter-button").click(function(event) {
        event.preventDefault();
        var text = $(this).text();
        console.log(text);
        $(".filter-block-1 .filter-name span").html(text);
    });
    $(".filter-block-2 .filter-button").click(function(event) {
        event.preventDefault();
        var text = $(this).text();
        console.log(text);
        $(".filter-block-2 .filter-name span").html(text);
    });
});