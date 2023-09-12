<ul class="list-unstyled d-block">
    @foreach($category as $list)
    <li class="form-check {{ $loop->parent ? '' : '' }}">
       @php 
        $slug = isset($tradingCategory) ? $tradingCategory->slug : "";
     
      @endphp
        <a href="{{route('product',[$list->slug])}}" class="text-decoration-none @if($slug === $list->slug)h5 text-primary @else '' @endif ">
            {{ $list->name }}</a>
            @if($list->childCategories->count() > 0)
            @include('frontend/inc/productSidebar',['category' => $list->childCategories])
            @endif
          @endforeach
    </li>
</ul>

 {{-- <ul class="list-unstyled d-block">
            @foreach($childCategory->Products as $product)
            <li>
                <a href="{{ route('productDetails',[$product->slug ])}}" class="text-decoration-none"
                    role="link">{{ $product->name}}</a>
            </li>
            @endforeach
        </ul> --}}