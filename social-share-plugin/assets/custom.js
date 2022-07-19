(function ($) {

    // Add Color Picker to all inputs that have 'color-field' class
    $(function () {
        $('.social-color-picker').wpColorPicker();
        $("#sortable").sortable({
            stop: function (event, ui) {
                var rank = [];
                var listItems = $("#sortable li");
                listItems.each(function (idx, li) {
                    var product = $(li);



                    console.log(product.data('value'));
                    rank.push(product.data('value'));
                    // and the rest of your code
                });
                console.log(rank);
            $('#locations').val(rank);
            }
        });

        $('#restore_default').on('click', function () {
            data = {action:'restore_default'};
            $.post( social_obj.url , data,
                function (data) {
                    if(data == 1)
                    {
                        document.location.reload();
                    }
                }
            );
        });
    });


})(jQuery);