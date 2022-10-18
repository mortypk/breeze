@php
if(!isset($action)){
    $action="";
}
@endphp
<form method="POST" action="{{ $action }}">
    @csrf
    <div {{ $attributes->class(["flex flex-col space-y-2"])->merge() }} >
    {{ $slot }}
    </div>
</form>