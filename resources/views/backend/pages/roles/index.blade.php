@extends('backend.layouts.master')

@section('title')
    Roles List | Sobkisu Bazar
@endsection

@section('admin-content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>All Roles</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Role Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td>{{ $role->name ?? '' }}</td>
                                        <td>
                                            <a href="{{ route('roles.edit', $role->id) }}" class="btn btn- 
                                                success">Edit</a>

                                            <a href="javascript:" onclick="$(this).find('#del_form').submit();"
                                                title="Delete" class="btn btn-danger" >
                                                         Delete
                                                <form id="del_form" action="{{ route('roles.destroy', $role->id) }}"
                                                    method="POST" onsubmit="return confirm_type_delete()">
                                                    @method('DELETE')
                                                    @csrf
                                                </form>
                                            </a>
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
    @push('custom-scripts')
        <script>
            //Delete
            function confirm_type_delete() {
                if (confirm('Are you sure want to delete?')) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>
    @endpush
@endsection
