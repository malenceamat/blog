// search.js
$(document).ready(function(){
    $('#search-form').on('submit', function(e){
        e.preventDefault();
        var query = $('#search-input').val();
        $.ajax({
            type: 'GET',
            url: '/search',
            data: {query: query},
            success: function(response){
                var results = response.results;
                var table = '<table><thead><tr><th>id</th><th>Имя</th><th>Телефон</th><th>Почта</th><th>Цель</th><th>Сообщение</th></tr></thead><tbody>';
                results.forEach(function(result){
                    table += '<tr><td>' + result.column1 + '</td><td>' + result.column2 + '</td><td>' + result.column3 + '</td><td>' + result.column4 + '</td><td>' + result.column5 + '</td><td>' + result.column6 + '</td></tr>';
                });
                table += '</tbody></table>';
                $('#search-results').html(table);
            }
        });
    });
});
