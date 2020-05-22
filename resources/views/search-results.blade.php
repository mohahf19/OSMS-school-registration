@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Search</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Surname</th>
                                    <th class="text-center">Email</th>

                                </tr>
                            </thead>
                            <tbody>
                                <div class="scrollbar-container ps--active-y">
                                    @foreach( $searches as $s)
                                    <tr>
                                        <td class="text-center text-muted">{{$s->id }}</td>

                                        <td class="text-center text-muted">{{ $s->name }}</td>

                                        <td class="text-center text-muted">{{ $s->surname }}</td>

                                        <td class="text-center text-muted">{{ $s->email }}</td>

                                    </tr>
                                    @endforeach

                                </div>
                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <br>
</div>
@endsection