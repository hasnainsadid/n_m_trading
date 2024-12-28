@extends('backend.layouts.app')
@section('title', __('Organization'))
@section('content')
    <div class="row">
        <div class="col-xl-12 mx-auto">
            <div
                class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h6 class="mb-0 text-uppercase">All Organization</h6>
                <h6><a class="btn btn-primary" href="{{ route('organizations.create') }}">Add New Organization</a></h6>
            </div>
            <hr />
            <div class="card">
                <div class="card-body">
                    <table id="example2" class="table mb-0 table-striped text-center">
                        <thead>
                            <tr>
                                <th scope="col">Sl No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Bin No.</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($organizations as $key => $organization)
                                <tr>
                                    <th scope="row">{{ ++$key }}</th>
                                    <td>{{ $organization->name }}</td>
                                    <td>{{ ucfirst($organization->address) }}</td>
                                    <td>{{ ucfirst($organization->bin_no) }}</td>
                                    <td>
                                        <a href="{{ route('organizations.edit', $organization->id) }}">
                                            <i class="fa-solid fa-pencil btn btn-outline-info "></i>    
                                        </a> &nbsp;
                                        <a href="{{ route('organizations.show', $organization->id) }}"><i class="fa-regular fa-eye btn btn-outline-primary"></i></a>
                                        <form action="{{ route('organizations.destroy', $organization->id) }}" method="post" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" style="border: none"><i class="fa-solid fa-trash btn btn-outline-danger"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5"><h4>No data found</h4></td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        var table = $('#example2').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel', 'pdf', 'print']
        } );
     
        table.buttons().container()
            .appendTo( '#example2_wrapper .col-md-6:eq(0)' );
    } );
</script>
@endpush