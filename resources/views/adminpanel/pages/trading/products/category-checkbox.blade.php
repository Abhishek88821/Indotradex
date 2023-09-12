@foreach ($categories as $category)
    <div class="form-check {{ $loop->parent ? 'ml-3' : '' }}">
        <div class="check-group text-dark">
            <label class="form-check-label">
                @php
                    $oldCategoryIds = isset($product) ? json_decode($product->category_id) : [];
                    $categoryId = strval($category->id); 
                 
                @endphp
                <input type="checkbox" name="category_ids[]" data-checkbox class="form-check-input category-checkbox" 
                       value="{{ $category->id }}"  {{ in_array($categoryId, $oldCategoryIds) ? 'checked' : '' }}>
                {{ $category->name }}
            </label>
        </div>

        @if ($category->childCategories->count() > 0)
            @include('adminpanel/pages/trading/products/category-checkbox', ['categories' => $category->childCategories])
        @endif
    </div>
@endforeach
