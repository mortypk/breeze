@php
if(!isset($type)){
    $type= 'text';
}else{
    if (in_array($type, array("button","checkbox","color","date","datetime-local","email","file","hidden","image","month","number","password","radio","range","reset","search","submit","tel","text","time","url","week"))){
        $type= $type;
    }else {
        $type= 'text';
    }
}
if(!isset($bgcolor)){
    $bgcolor= trans('theme.bgcolor');
}
@endphp
<input type="{{ $type }}" {{ $attributes->class(["block p-1 w-full min-w-0 flex-1 rounded-none border border-gray-300 bg-white text-base 
first:rounded-l-md last:rounded-r-md"])->merge() }} />