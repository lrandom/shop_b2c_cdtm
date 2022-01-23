function getTotalItems(apiLink) {
    $.ajax({
        url: apiLink,
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            $('#total-item-in-cart').html(data.total_items);
        }
    });
}
