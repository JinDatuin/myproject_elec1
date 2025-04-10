@extends('Layout.GeneralLayout')

@section('title')
    Employees
@endsection

@section('employee')
    active
@endsection

@section('content')
    <div class="main-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12 shadow-lg">
                    <h2 class="text-center text-gray">Employee/s Table</h2>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-2">
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addEmployee">
                            Add new Employee
                        </button>
                    </div>

                    <table class="text-gray table table-striped">
                        <thead class="table-dark">
                            <tr>
                                <th class="bg-gray">#</th>
                                <th class="bg-gray">Employee ID</th>
                                <th class="bg-gray">Full Name</th>
                                <th class="bg-gray">Address</th>
                                <th class="bg-gray">Contact No.</th>
                                <th class="bg-gray">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider">
                            @foreach ($employees as $employee)
                                <tr>
                                    <td class="text-gray">{{ $employee['id'] }}</td>
                                    <td class="text-gray">{{ $employee['employee_id'] }}</td>
                                    <td class="text-gray">
                                        {{ $employee['fname'] . " " . $employee['mname'] . " " . $employee['lname']  }}
                                    </td>
                                    <td class="text-gray">{{ $employee['address'] }}</td>
                                    <td class="text-gray">{{ $employee['contactno'] }}</td>
                                    <td class="d-flex justify-content-center gap-2">
                                        <a class="btn btn-primary btn-sm" href="manageemployee/{{$employee['id']}}">Details</a>
                                        <button class="btn btn-warning btn-sm edit-btn" data-id="{{ $employee['id'] }}"
                                            data-employeeid="{{ $employee['employee_id'] }}"
                                            data-fname="{{ $employee['fname'] }}" data-mname="{{ $employee['mname'] }}"
                                            data-lname="{{ $employee['lname'] }}" data-address="{{ $employee['address'] }}"
                                            data-contactno="{{ $employee['contactno'] }}" data-bs-toggle="modal"
                                            data-bs-target="#editModal">
                                            Edit
                                        </button>
                                        <form action="manageemployee/{{ $employee['id'] }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm"
                                                onclick="return confirm('Are you sure you want to delete this employee')">Delete</button>
                                        </form>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $employees->links() }}
                </div>
            </div>
        </div>
    </div>

    @yield('modal')

    <!-- Add Modal -->
    <div class="modal fade show" id="addEmployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary text-dark">
                    <h5 class="modal-title" id="addEmployee">New Employee</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/manageemployee/" method="POST" novalidate>
                    @csrf
                    <div class="modal-body">
                        <div class="row g-3 align-items-center">
                            <div class="col-3">
                                <label class="form-label">Employee Id</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control {{ $errors->has('employee_id') ? 'is-invalid' : ''}}"
                                    name="employee_id" placeholder="Employee Id"
                                    value="{{ $errors->has('employee_id') ? old('employee_id') : 'EMP0' . $latestid + 1}}">
                                @if ($errors->has('employee_id'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('employee_id') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-3">
                                <label class="form-label">First Name</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="fname"
                                    class="form-control {{ $errors->has('fname') ? 'is-invalid' : ''}}"
                                    value="{{old('fname')}}" placeholder="First Name">
                                @if ($errors->has('fname'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('fname') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-3">
                                <label class="form-label">Middle Name</label>
                            </div>
                            <div class="col-9">
                                <input type="text" class="form-control" name="mname" value="{{old('mname')}}"
                                    placeholder="Middle Name">
                            </div>
                            <div class="col-3">
                                <label class="form-label">Last Name</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="lname"
                                    class="form-control {{ $errors->has('lname') ? 'is-invalid' : ''}}"
                                    value="{{old('lname')}}" placeholder="Last Name">
                                @if ($errors->has('lname'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('lname') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-3">
                                <label class="form-label">Address</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="address"
                                    class="form-control {{ $errors->has('address') ? 'is-invalid' : ''}}"
                                    value="{{old('address')}}" placeholder="Address">
                                @if ($errors->has('address'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('address') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-3">
                                <label class="form-label">Contact #</label>
                            </div>
                            <div class="col-9">
                                <input type="text" name="contactno"
                                    class="form-control {{ $errors->has('contactno') ? 'is-invalid' : ''}}"
                                    value="{{old('contactno')}}" placeholder="Contact Number">
                                @if ($errors->has('contactno'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('contactno') }}
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <input type="submit" class="btn btn-primary" value="Save" />
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if(session('insert_error') && $errors->any())
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                var myModal = new bootstrap.Modal(document.getElementById('addEmployee'));
                myModal.show();
            });
        </script>
    @endif



    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const editButtons = document.querySelectorAll('.edit-btn');
            const form = document.getElementById('editForm');

            editButtons.forEach(button => {
                button.addEventListener('click', function () {
                    // Fill form fields
                    document.getElementById('editModalLabel').innerHTML = "Edit Employee " + this.dataset.employeeid
                    document.getElementById('edit-id').value = this.dataset.id;
                    document.getElementById('edit-fname').value = this.dataset.fname;
                    document.getElementById('edit-mname').value = this.dataset.mname;
                    document.getElementById('edit-lname').value = this.dataset.lname;
                    document.getElementById('edit-address').value = this.dataset.address;
                    document.getElementById('edit-contactno').value = this.dataset.contactno;

                    // Update form action
                    form.action = `/manageemployee/${this.dataset.id}`;
                });
            });
        });
    </script>

    @if(session('update_error') && $errors->any())
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                let id = "{{ session('update_error') }}";
                document.getElementById('editForm').action = `/manageemployee/{{ session('update_error') }}`;
                document.getElementById('editModalLabel').innerHTML = `Edit Employee EMP0{{ session('update_error') }}`
                new bootstrap.Modal(document.getElementById('editModal')).show();
            });
        </script>
    @endif

    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="editForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-header bg-warning text-dark">
                        <h5 class="modal-title" id="editModalLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <input type="hidden" name="id_edit" id="edit-id">

                        <div class="mb-3">
                            <label for="edit-fname" class="form-label">First Name</label>
                            <input type="text" name="fname_edit" id="edit-fname"
                                class="form-control {{ $errors->has('fname_edit') ? 'is-invalid' : ''}}"
                                value="{{ old('fname_edit') ?: optional(session('oldemployee'))->fname }}">
                            @if ($errors->has('fname_edit'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('fname_edit') }}
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="edit-mname" class="form-label">Middle Name</label>
                            <input type="text" name="mname_edit" id="edit-mname" class="form-control"
                                value="{{old('mname_edit')}}">
                        </div>
                        <div class="mb-3">
                            <label for="edit-lname" class="form-label">Last Name</label>
                            <input type="text" name="lname_edit" id="edit-lname"
                                class="form-control {{ $errors->has('lname_edit') ? 'is-invalid' : ''}}"
                                value="{{ old('lname_edit') ?: optional(session('oldemployee'))->lname }}">
                            @if ($errors->has('lname_edit'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('lname_edit') }}
                                </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="edit-address" class="form-label">Address</label>
                            <input type="text" name="address_edit" id="edit-address"
                                class="form-control {{ $errors->has('address_edit') ? 'is-invalid' : ''}}"
                                value="{{old('address_edit') ?: optional(session('oldemployee'))->address }}">
                            @if ($errors->has('address_edit'))
                                <div class="invalid-feedback">

                                    {{  $errors->first('address_edit') }}
                                </div>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="edit-contactno" class="form-label">Contact No</label>
                            <input type="text" name="contactno_edit" id="edit-contactno"
                                class="form-control {{ $errors->has('contactno_edit') ? 'is-invalid' : ''}}"
                                value="{{old('contactno_edit') ?: optional(session('oldemployee'))->contactno }}">
                            @if ($errors->has('contactno_edit'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('contactno_edit') }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-warning">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @if (session("message"))
        <div class="toast-container position-fixed bottom-0 end-0 p-3">
            <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                <div class="toast-header {{ session('mode') }} text-white">
                    <strong class="me-auto">Notice</strong>
                    <small>1 sec ago</small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body">
                    {{session("message")}}
                </div>
            </div>
        </div>
    @endif

    @section('script')
        <script>
            window.addEventListener('DOMContentLoaded', () => {
                const toastLiveExample = document.getElementById('liveToast');

                if (toastLiveExample) {
                    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
                    toastBootstrap.show();
                }
            });
        </script>
    @endsection
@endsection