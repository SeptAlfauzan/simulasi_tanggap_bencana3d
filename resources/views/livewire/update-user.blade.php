
<div type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$user_id}}" class="list-group-item list-group-item-action p-2 {{ session()->get('id_user') == $user_id ? 'active order-1': 'order-2' }}">ama: {{$name}}, email: {{$level}} </div>
<input wire:model="email" type="text" class="form-control">
<div class="modal fade" id="staticBackdrop{{$user_id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data</h5>
                <button type="button" class="btn fs-5" data-bs-dismiss="modal" aria-label="Close">&times;</button>
            </div>
                <div class="modal-body px-4">
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input wire:model="name" type="text" class="form-control" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control"" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control">

                        <small id="emailHelp" class="form-text text-info">*minimal password 8 karakter</small>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Konfirmasi Ulang Password</label>
                        <input type="password" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Options</label>
                        </div>
                        <select class="custom-select">
                            <option selected>Pilih level</option>
                            <option value="contributor">contributor</option>
                            <option value="administrator">administrator</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Understood</button>
                </div>
        </div>
    </div>
</div>