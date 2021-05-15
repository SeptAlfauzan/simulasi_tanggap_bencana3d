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
            @if(Session::has('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{Session::get('pesan')}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <h1 class="mt-4">Daftar user</h1>
            <br>
            <div class="row">
                <div class="d-flex flex-column col-12">
                    @forelse($users as $user)
                    @if(Session::get('level') == 'administrator' || Session::get('id_user') == $user->id)
                    <div class="row {{ session()->get('id_user') == $user->id ? 'active order-1': 'order-2' }} py-1">
                        <a href="{{ route('user.edit', $user->id) }}" class="col-10 list-group-item list-group-item-action p-2 {{ session()->get('id_user') == $user->id ? 'active': '' }}">Nama: {{$user->name}}, email: {{$user->level}} </a>
                        @if(Session::get('level') == 'administrator')
                            <button class="px-3 badge btn-danger" data-toggle="modal" data-target="#delete-{{$user->id}}">&timesbar;</button>
                        @endif
                    </div>
                    @else
                    <div class="row {{ session()->get('id_user') == $user->id ? 'active order-1': 'order-2' }} py-1">
                        <button disabled class="col-10 list-group-item list-group-item-action p-2 {{ session()->get('id_user') == $user->id ? 'active': '' }}">Nama: {{$user->name}}, email: {{$user->level}} </button>
                    </div>
                    @endif
                    <!-- Modal -->
                    <div class="modal fade" id="delete-{{$user->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-danger font-weight-bold" id="staticBackdropLabel">Suspend Akun</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda ingin mensuspend {{$user->name}}?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                    <form action="{{ route('user.delete', $user->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Iya, hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="list-group-item list-group-item-action p-2">First flex item</div>
                    @endforelse
                </div>
            </div>
            @if(Session::get('level') == 'administrator')
            <div class="col-11">
                <div class="py-4 d-flex justify-content-end align-items-center">
                    <h2 class="mr-auto">Daftar User yang telah dihapus</h2>
                </div>
                <div class="list-group">
                    @forelse ($deleteduser as $duser)
                    <div class="position-relative row mb-2">
                        <div data-bs-toggle="tooltip" data-bs-placement="top" class="list-group-item disabled text-secondary list-group-item-action col-md-11 col-9" aria-current="true">
                            id: {{ $duser->id }}, nama user: {{ $duser->name }}
                        </div>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#restore-{{$duser->id}}">restore</button>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="restore-{{ $duser->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Restore Akun</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Apakah anda yakin ingin me-restore akun {{ $duser->nama }}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal restore</button>
                                    <a href="{{ route('user.restore', $duser->id) }}" type="button" class="btn btn-primary">Iya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @empty
                    <div class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Tidak ada scene yang dihapus</div>
                    @endforelse
                </div>
            </div>
            @endif
        </div>
    </main>
    @include('template.footer')
    @include('template.script')
</body>

</html>