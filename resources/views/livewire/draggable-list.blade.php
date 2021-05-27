<ol wire:sortable="updateOrder" class="mt-5 list-group list-group-numbered posittion-relative">
    @foreach ($products as $product)
    <button wire:sortable.handle wire:key="product-{{ $product->id }}" wire:sortable.item="{{ $product->id }}" class="list-group-item border border-secondary draggable text-left align-items-start col-12 btn list-model">
        <div class="ms-2 me-auto">
            <p onchange="alert()" >id model: {{ $product->id }}, desc: {{ $product->description }}</p>
        </div>
    </button>

    @endforeach
    <div  class="col-12 p-4 border row">
        <!-- Button trigger modal -->
        <button id="trigger-preview" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Tampilkan Preview Urutan Animasi
        </button>

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Preview Urutan Animasi</h5>
            </div>
            <div class="modal-body">
                <div class="row col-12">
                    @foreach($previews as $preview)
                    <div class="col-md-3 col-12  border" >
                        <div class="card-body">
                            <h5 class="card-title text-secondary">Nomor urut: {{ $preview->position }}</h5>
                            <div id="preview-container-{{ $preview->position }}" class="preview-container col-12 p-0" style="height: 100px;">
                            <div id="preview-canvas-{{$preview->position}}" class="preview"  data-model="{{ asset('storage/animations/').$preview->path }}"></div>
                            </div>
                            <p class="card-text">{{$preview->description}}</p>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" id="#stopRender" data-bs-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
        </div>
</ol>