
<ol wire:sortable="updateOrder" class="list-group list-group-numbered">
    @foreach ($products as $product)
    <li wire:key="product-{{ $product->id }}" wire:sortable.item="{{ $product->id }}" class="list-group-item d-flex justify-content-between align-items-start">
        <div class="ms-2 me-auto">
            <h4 wire:sortable.handle>{{ $product->description }}</h4>
        </div>
        <span class="badge bg-primary rounded-pill">14</span>
    </li>
    @endforeach
</ol>