function Test() {
    var results = [];

    $('div.QS').each(function () {
        var answers = String($(this).data('time'));
        var questionNumber = parseInt($(this).find('input').attr('name').replace('q','').replace('RadioGroup',''));
        answers = answers.replace(",", " ").replace(",", " ").replace(",", " ");
        $(this).find('input:checked').each(function () {
            var value = $(this).val();
            if (value && answers.indexOf(value*666) >= 0){
                answers = answers.replace(value*666, "");
            }
            else {
                results[questionNumber] = '-';
            }
        });
        if(!answers.split(' ').join('') && results[questionNumber] != '-'){
            results[questionNumber] = '+';
        }
        else {
            results[questionNumber] = '-';
        }
        return;
    })

    $('#show table').show();
    $('#show table .question').remove();
    $('#show table .answer').remove();

    for(i=1;i<results.length; i++){
        $('#results-table thead tr').append('<th class="question">'+i+'</th>');
        $('#results-table tbody tr').append('<td class="answer">'+results[i]+'</td>');

    }
    var testId = $('#form').data('id');
    saveResults(results,testId)
}

function saveResults(results,testId) {
    var user_id = $.cookie("u_id");
    var results = JSON.stringify(results);
    var test_id = testId;

    $.ajax({
        url: '/test_results.php',
        data: {
            user_id: user_id,
            results: results,
            action: 'saveResults',
            test_id: test_id
        },
        error: function() {
        },
        dataType: 'json',
        success: function(data) {
        },
        type: 'GET'
    })
}


function reset_color(num1){
    num1.style.backgroundColor = 'rgb(98, 124, 163)';
}

function change_color(num){
    num.style.backgroundColor = 'rgb(138, 162, 207)';
}

function resa(){
    $('#show table').hide(500);
    $('#show table .question').remove();
    $('#show table .answer').remove();

}

function printt(){
    window.print() ;
}

