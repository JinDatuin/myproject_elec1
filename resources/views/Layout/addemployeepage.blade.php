@extends('layout.addemployeepage')

@section('modal')
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
                                <input type="text" class="form-control" name="employee_id" placeholder="Employee Id"
                                    value="EMP0{{ $latestid + 1 }}" readonly>
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
@endsection