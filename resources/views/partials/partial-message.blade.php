@if (session('message'))
<!-- mensaje de regreso para cuando envia respuesta de los controladores-->
<div class="alert alert-{{session('message')[0]}} text-center" role="alert">
    {{session('message')[1]}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
</div>
@endif