<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.header')
</head>
@livewireStyles
<body>
    <!-- Navbar -->
    @include('template.navbar')
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @include('template.left-sidebar')

    <!-- Content Wrapper. Contains page content -->
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">Daftar user</h1>
            <br>
            <div class="row">
                <div class="d-flex flex-column col-12">
                    @forelse($users as $user)
                    <!-- Modal -->
                    @livewire('update-user', ['user_id' => $user->id])

                    @empty
                    <div class="list-group-item list-group-item-action p-2">First flex item</div>
                    @endforelse
                </div>
            </div>
        </div>
    </main>
    @include('template.footer')
    @include('template.script')
    @livewireScripts
</body>

</html>