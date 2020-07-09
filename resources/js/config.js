
$(document).ready(function () {
    $('.select2').select2({
        placeholder: 'Selectionnez un tag',
        allowClear: true,
        tags: true,
        tokenSeparators: [',', ' '],
        data: data
    });
});
