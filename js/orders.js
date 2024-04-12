$(document).ready(function() {
    var loadData = function() {
        $.ajax({
            url: '/get-orders',
            type: 'POST',
            data: {
                dateFrom: $('#startDate').val(),
                dateTo: $('#endDate').val()
            },
            dataType: 'json',
            success: function(response) {
                var tbody = $('#ordersTable tbody');
                tbody.empty();

                if(response.status) {
                    $('#rowsCount').text(response.data.length);
                    $.each(response.data, function(i, order) {
                        var row = `<tr>
                                <td>${order.id}</td>
                                <td>${order.email}</td>
                                <td>${order.status || '-'}</td>
                                <td>${order.ftd}</td>
                            </tr>`;
                        tbody.append(row);
                    });
                } else {
                    tbody.append('<tr><td colspan="4">No data found</td></tr>');
                }
            },
            error: function(xhr, status, error) {
                console.error('Error fetching orders:', error);
            }
        });
    };

    loadData();

    $('#applyDateFilter').click(function() {
        loadData();
    });
});