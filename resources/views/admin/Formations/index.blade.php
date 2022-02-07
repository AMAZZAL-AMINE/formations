@extends("layouts.admin")

@section("content")
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
                            <th> Slug </th>
                            <th> Count </th>
                            <th> Edit </th>
                            <th> Delete </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($formations as $forma)
                            <tr>
                                <td>{{ $forma->name }}</td>
                                <td>{{ $forma->slug }}</td>
                                <td><label class="badge badge-gradient-success">23 Students</label></td>
                                <td>
                                    <button type="button" class="btn btn-gradient-primary btn-rounded btn-icon">
                                        <i class="mdi mdi-tooltip-edit"></i>
                                    </button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-gradient-danger btn-rounded btn-icon">
                                        <i class="mdi mdi-delete"></i>
                                    </button>
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