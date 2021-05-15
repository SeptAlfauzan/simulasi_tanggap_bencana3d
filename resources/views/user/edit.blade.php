<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.header')
</head>

<body>
    <!-- Navbar -->
    @include('template.navbar')
    <!-- .navbar -->

    <!-- Main Sidebar Container -->
    @include('template.left-sidebar')

    <!-- Content Wrapper. Contains page content -->
    <main>
        <div class="container-fluid">
            <br>
            <div class="row">
            <form action="{{ route('user.update', ['user'=>$user->id]) }}" class="col-8 mx-auto" method="POST">
            @method('PATCH')
            @csrf
            <h1 class="mt-4">Edit User</h1>
            <p class="col-12 row nav-link"><a href="{{ route('user.list') }}">Daftar User</a>/Edit user</p>
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input value=" {{ empty(old('name'))? $user->name : old('name')}} " name="name" type="text" class="form-control" aria-describedby="emailHelp">
                    @error('name')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input value=" {{ empty(old('email'))? $user->email : old('email')}} "type="email" class="form-control"" aria-describedby=" emailHelp" name="email">
                    @error('email')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" name="password">

                    <small id="emailHelp" class="form-text text-info">*minimal password 8 karakter</small>
                    @error('password')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="form-label">Konfirmasi Ulang Password</label>
                    <input type="password" class="form-control" name="repassword">
                    @error('repassword')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="input-group mb-3 col-6 ml-0 pl-0">
                    <div class="input-group-prepend">
                        <label class="input-group-text" for="inputGroupSelect01">Level</label>
                    </div>
                    @if(Session::get('level') == 'administrator')
                    <select name="level" class="custom-select">
                        <option {{ old('level')? "" : "selected" }} disable>Pilih level</option>
                        @foreach($levels as $item)
                        <option {{ ( !old("level") && $user->level == $item )? "selected":""  }} {{ ( old("level") == $item )? "selected":""  }} value="{{ $item }}">{{ $item }}</option>
                        @endforeach
                    </select>
                    @else
                        <input type="text" disabled class="form-control" name="level" value="{{$user->level}}">
                    @endif
                </div>
            <div class="modal-footer">
                <button type="reset" class="btn btn-secondary">Reset</button>
                <button type="submit" class="btn btn-primary">Edit</button>
            </div>
            </form>
        </div>
        </div>
    </main>
    @include('template.footer')
    @include('template.script')
</body>

</html>