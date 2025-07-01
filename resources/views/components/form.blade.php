@props([

'action',
'post' => null,
'put' => null,
'delete' => null,

])

<form action="{{ $action }}" method="POST" class="bg-white  pb_form_v1" style="border-radius: 30px">
@csrf

@if ($put)
    @method('PUT')
@endif

 @if ($delete)
    @method('DELETE')
@endif

{{ $slot }}

</form>