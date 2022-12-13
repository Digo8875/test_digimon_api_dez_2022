$(document).ready(function() {
    getDigimons();

    $('#digimon_level').change(function () {
        $('#digimon_name').val('');
        getDigimonsByLevel();
    });

    var digimonNameTimeout = null;
    $('#digimon_name').keyup(function () {
        if (digimonNameTimeout != null) {
            clearTimeout(digimonNameTimeout);
        }

        digimonNameTimeout = setTimeout(function() {
            digimonNameTimeout = null;
            $('#digimon_level').prop('selectedIndex',0);
            getDigimonByName();
        }, 1000);
    });
});

function getDigimons(){
    var data = {};

    $('#digimon_data_content').html($('#div_loading').html());

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'GET',
        dataType: 'html',
        url: "/digimons",
        async: true,
        data: { data },
        success: function (data) {
            $('#digimon_data_content').html(data);
        },
        error: function () {
            alert('Ocorreu um problema na busca dos dados.');
        }
    });
}

function getDigimonsByLevel(){
    var data = {};

    $('#digimon_data_content').html($('#div_loading').html());

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'GET',
        dataType: 'html',
        url: "/digimons/level/" + $('#digimon_level').val(),
        async: true,
        data: { data },
        success: function (data) {
            $('#digimon_data_content').html(data);
        },
        error: function () {
            alert('Ocorreu um problema na busca dos dados.');
        }
    });
}

function getDigimonByName(){
    var data = {};

    $('#digimon_data_content').html($('#div_loading').html());

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type: 'GET',
        dataType: 'html',
        url: "/digimon/name/" + $('#digimon_name').val(),
        async: true,
        data: { data },
        success: function (data) {
            $('#digimon_data_content').html(data);
        },
        error: function () {
            alert('Ocorreu um problema na busca dos dados.');
        }
    });
}
