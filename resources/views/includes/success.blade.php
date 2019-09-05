@if(session('success'))
    @push('scripts')
        <script>
            $(document).ready(function(){
                Swal.fire(
                    'Operação concluida com sucesso!',
                    null,
                    'success'
                )
            });
        </script>
    @endpush
@endif