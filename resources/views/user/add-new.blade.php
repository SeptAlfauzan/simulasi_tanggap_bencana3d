<!DOCTYPE html>
<html lang="en">

<head>
    @include('template.header')
</head>
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
            <form class="row g-3 needs-validation" novalidate method="POST" action="{{ route('user.admin-store') }}">
            {{ csrf_field() }}
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="validationCustom01" value="Mark" required name="name">
                    <div class="invalid-feedback">
                    Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustomUsername" class="form-label">Email</label>
                    <div class="input-group has-validation">
                    <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" required name="email">
                    <div class="invalid-feedback">
                        Please choose a username.
                    </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="validationCustom03" class="form-label">Password</label>
                    <input type="text" class="form-control" id="validationCustom03" required name="password">
                    <div class="invalid-feedback">
                    Please provide a valid city.
                    </div>
                </div>
                <div class="col-md-2">
                <label for="validationDefault04" class="form-label">State</label>
                    <select class="custom-select form-select" id="validationDefault04" required name="level">
                        <option selected disabled value="">Pilih level akun</option>
                        <option value="administrator">administrator</option>
                        <option value="contributor">contributor</option>
                    </select>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
                </form>
            </div>
        </div>
    </main>
    @include('template.footer')
    <script>
        (function () {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
                })
            })()
    </script>
    @include('template.script')
</body>

</html>