@foreach ($items as $item_key=>$item_data)
    <li>
        {{$item_key}} =>
        @if (!empty($item_data['value']))
            @include('products.tree.element', ['item'=>$item_data['value']])
        @endif
        @if (!empty($item_data['childs']))
            <ul>
                @include('products.tree.recursion', ['items' => $item_data['childs']])
            </ul>
        @else

        @endif
    </li>
@endforeach

