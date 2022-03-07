@extends("layouts.admin")

@section('content')
    @if (session()->has('message'))
        <div class="alert bg-info text-white font-weight-bold">
            {{ session('message') }}
        </div>
    @endif

    @if (session()->has('delete'))
        <div class="alert bg-danger text-white font-weight-bold">
            {{ session('delete') }}
        </div>
    @endif

    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title">Table Of All Formations</h1>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th> Name </th>
                                    <th> Cin </th>
                                    <th> Phone </th>
                                    <th> Formation </th>
                                    <th> Created At </th>
                                    <th>Profile</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $student->name }}</td>
                                            <td>{{ $student->cin }}</td>
                                            <td>{{ $student->phone }}</td>
                                            <td>{{ $student->formation->name }}</td>
                                            <td><label
                                                    class="badge badge-gradient-success">{{ $student->created_at->format('d-m-Y') }}</label>
                                            </td>
                                            <td>
                                                <form action="{{ route('admin.delete', $student->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-gradient-info btn-rounded btn-icon">
                                                        <i class="mdi mdi-eye"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                 
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
