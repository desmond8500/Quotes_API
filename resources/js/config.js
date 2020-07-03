// var data = [
//     {
//         id: 0,
//         text: 'enhancement'
//     },
//     {
//         id: 1,
//         text: 'bug'
//     },
//     {
//         id: 2,
//         text: 'duplicate'
//     },
//     {
//         id: 3,
//         text: 'invalid'
//     },
//     {
//         id: 4,
//         text: 'wontfix'
//     }
// ];

// var data = "<?php echo $tags ?>";


$(document).ready(function () {
    $('.select2').select2({
        placeholder: 'Select an option',
        allowClear: true,
        tags: true,
        tokenSeparators: [',', ' '],
        data: data
    });
});
