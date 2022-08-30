@if (!empty($messages_errors))
    <script>
        Swal.fire
        (
            {
                titleText: 'Mensagem do Sistema',
                html: '{!! $getMessagesErrors !!}',
                icon: 'error',
                confirmButtonText: 'Fechar',
                dangerMode: true,
                timer: 60000,
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                focusConfirm: true,
            }
        );
    </script>
@endif

@if (!empty($messages_success))
    <script>
        Swal.fire
        (
            {
                titleText: 'Mensagem do Sistema',
                html: '{!! $getMessagesSuccess !!}',
                icon: 'success',
                confirmButtonText: 'Fechar',
                timer: 60000,
                allowOutsideClick: false,
                allowEscapeKey: false,
                allowEnterKey: false,
                focusConfirm: true,
            }
        );
    </script>
@endif