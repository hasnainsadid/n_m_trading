@extends('backend.layouts.app')
@section('title', __('Organization'))
@section('content')
    <div class="row">
        <div class="col-xl-9 mx-auto">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h6 class="mb-0 text-uppercase">All Organization</h6>
                <h6><a class="btn btn-primary" href="{{ route('organizations.create') }}">Add New Organization</a></h6>
            </div>
            <hr />
            <div class="card">
                <div class="card-body">
                    <table class="table mb-0 table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col">Sl No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($organizations as $key => $organization)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td>{{ $organization->name }}</td>
                                    <td>{{ ucfirst($organization->status) }}</td>
                                    <td>
                                        <a href="{{ route('organizations.edit', $organization->id) }}"
                                            class="btn btn-outline-info btn-sm"><i class="mdi mdi-pencil"></i></a>
                                        <a href="{{ route('organizations.show', $organization->id) }}"
                                            class="btn btn-outline-primary btn-sm"><i class="mdi mdi-eye"></i></a>
                                        <form action="{{ route('organizations.destroy', $organization->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm"><i class="mdi mdi-delete"></i></button>
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
@endsection
