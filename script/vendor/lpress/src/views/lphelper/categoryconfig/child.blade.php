@php
    $i++;
    if (is_array($select)) {
         if (in_array($child_category->id, $select)) {
             $confirm="selected";
         }
     }
     elseif(!is_array($select)){
         if ($child_category->id == $select) {
             $confirm="selected";
         }
     }
@endphp


<option {{ $confirm ?? '' }} value="{{ $child_category->id }}">@for($j=0; $j < $i ; $j++) &nbsp; @endfor
    @if(isset($child_category->name[app()->getLocale()]))
        {{ $child_category->name[app()->getLocale()] }}
    @else
        {{ $child_category->name }}
    @endif
</option>
@if ($child_category->categories)
    @foreach ($child_category->categories as $key => $childCategory)
        @include('lphelper::lphelper.categoryconfig.child', ['child_category' => $childCategory,'key'=>$key,'select'=>$select])
    @endforeach
@endif
