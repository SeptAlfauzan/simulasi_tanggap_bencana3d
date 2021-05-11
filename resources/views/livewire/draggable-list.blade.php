
<ol wire:sortable="updateOrder" class="mt-5 list-group list-group-numbered posittion-relative">
    @foreach ($products as $product)
    <li wire:sortable.handle wire:key="product-{{ $product->id }}" wire:sortable.item="{{ $product->id }}" class="list-group-item border border-secondary draggable text-left align-items-start col-12 btn">
        <div class="ms-2 me-auto">
             <p>id model: {{ $product->id }}, desc: {{ $product->description }}</p>
        </div>
    </li>
    @endforeach
</ol>