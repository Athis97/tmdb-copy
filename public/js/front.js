function pieChart() {
    $('.user_score_chart').each(function() {
        $(this).easyPieChart({
            lineCap: 'round',
            lineWidth: 2,
            scaleColor: false,
            size: 34,
            animate: {
                enabled: false
            }
        });
    });
}
$(document).ready(function() {
    pieChart();
    $('.media_items').on('click', 'div.pagination p.load_more a.load_more', function(e) {
        var data_next_page = $(this).attr('data-next-page');
        e.preventDefault();

        $.ajax({
            type: 'POST',
            url: $(location).attr('href'),
            data: {
                "_token": csrf_token,
                "data_next_page": data_next_page,
            },
            success: function(data) {
                $('.media_items div.pagination').remove();
                $('.media_items').append(data);
                pieChart();
            }
        });
    });
});