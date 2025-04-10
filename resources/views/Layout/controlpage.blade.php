@extends('Layout.GeneralLayout')

@section('title')
    Control Structure
@endsection

@section('control')
    active
@endsection

@section('content')
    <div class="main-container" style="color: #454537;">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-gray">
                    <h5>Your Grade: {{ $grade }}</h5>
                    @if ($grade >= 97 && $grade <= 100)
                        <b>You're Passed: </b>1.00
                    @elseif ($grade >= 94 && $grade <= 96)
                        <b>You're Passed: </b>1.25
                    @elseif ($grade >= 91 && $grade <= 93)
                        <b>You're Passed: </b>1.50
                    @elseif ($grade >= 88 && $grade <= 90)
                        <b>You're Passed: </b>1.75
                    @elseif ($grade >= 85 && $grade <= 87)
                        <b>You're Passed: </b>2.00
                    @elseif ($grade >= 82 && $grade <= 84)
                        <b>You're Passed: </b>2.25
                    @elseif ($grade >= 79 && $grade <= 81)
                        <b>You're Passed: </b>2.50
                    @elseif ($grade >= 76 && $grade <= 79)
                        <b>You're Passed: </b>2.75
                    @elseif ($grade == 75)
                        <b>You're Passed: </b>3.00
                    @elseif ($grade >= 0 && $grade <= 74)
                        <b>You're Failed: </b>5.00
                    @else
                        <b>INVALID!</b>
                    @endif


                </div>

                <div class="col-md-4 text-gray">
                    <h5>Triangle</h5>
                    @php
                        $row = 10;
                    @endphp
                    @for ($i = 0; $i <= $row; $i++)
                        @for ($j = 0; $j <= $i; $j++)
                            @if($i == $row)
                                <b>*</b>
                            @elseif ($i == $j || $j == 0)
                                <b>*</b>
                            @else
                                <b>_</b>
                            @endif
                        @endfor
                        <br>
                    @endfor
                </div>

                <div class="col-md-4 text-gray">
                    <h5>Employees List</h5>

                    <table class="table table-striped text-gray">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Age</th>
                                <th scope="col">Department</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($employees as $employee)
                                <tr>
                                    <th class="text-gray" scope="row">{{ $loop->index }}</th>
                                    <td class="text-gray">{{ $employee['name'] }}</td>
                                    <td class="text-gray">{{ $employee['age'] }}</td>
                                    <td class="text-gray">{{ $employee['department'] }}</td>
                                </tr>
                            @empty
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
