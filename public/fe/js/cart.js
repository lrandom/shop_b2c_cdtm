function getTotalItems(apiLink) {
    $.ajax({
        url: apiLink,
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            $('#total-item-in-cart').html(data.total_items);
            const priceInCart = data.price_in_cart;
            $('.sub-total').html(formatter.format(priceInCart.sub_total));
            $('.tax').html(formatter.format(priceInCart.tax));
            $('.total-price').html(formatter.format(priceInCart.total_price));
        }
    });
}
