@php
    $i=0;
   Log::info([
                           'cats' => $categories,

                       ]);
@endphp
@foreach ($categories as $key => $category)
    @php
        if (is_array($select)) {

            if (in_array($category->id, $select)) {
                $confirmck="selected";
            }
            else{
                $confirmck="";
            }
        }
        elseif(!is_array($select)){

            if ($category->id == $select) {
                $confirmck="selected";
            }
            else{
                $confirmck="";
            }
        }
        else{
            $confirmck="";
        }

    @endphp
    <option value="{{ $category->id }}" {{ $confirmck  }} >
        @if(isset($category->name[app()->getLocale()]))
            {{ $category->name[app()->getLocale()] }}
        @else
            {{ $category->name }}
        @endif
        {{--        {{ $category->name[app()->getLocale()] }}--}}
    </option>

    @foreach ($category->childrenCategories as   $childCategory)

        @include('lphelper::lphelper.categoryconfig.child', ['child_category' => $childCategory,'select'=>$select])
    @endforeach

@endforeach
