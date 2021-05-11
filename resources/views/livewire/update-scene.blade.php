<div>
    @if(Session::has('message'))
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        {{ Session::get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif

    @error('nama')
        <div class="text-danger">{{ $message }}</div>
    @enderror
    <div class="input-group mb-4">
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
            Delete
        </button>

        <span class="input-group-text bg-light">Nama scene</span>
        <input wire:click="edit()" class="form-control" aria-label="With textarea" wire:model="nama">
        <button {{ $editable? '':'disabled' }}  wire:click.prevent="update()" class="btn btn-dark">Update</button>
    </div>



    <!-- Modal as alert -->
    <div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h3 class="modal-title text-danger text-center font-weight-bold mx-auto" id="deleteModalLabel">Peringatan !</h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            Apakah anda ingin menghapus scene {{ $scenes->nama }}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak jadi</button>
            {{$scene->id}}
            <form action="{{ route('scene.delete', $scene->id) }}" method="POST">
                @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Iya, hapus</button>
            </form>
        </div>
        </div>
    </div>
    </div>
</div>
