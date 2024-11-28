@extends('Template.index-side')
@section('conten-tabel')
   <div class="container">
        <div class="card">
            <div class="card-header">
                CRUD Laravel 11
                <a href="/add/user"type="button"class="btn btn-success btn-sm float-end">ADD New</a>
            </div>
            @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            <div class="card-body">
                <table class="table table-sm table-striped table-bordered"> 
                    <thead>
                    <th>s/n</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>Registresion Data</th>
                    <th>Last Update</th>
                    </thead>
                    <tbody>
                        @if (count($all_Users) > 0)
                            @foreach ($all_Users as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td> <!-- Menggunakan $item untuk mengakses full_name -->
                                    <td>{{ $item->email }}</td>      <!-- Menggunakan $item untuk mengakses email -->
                                    <td>{{ $item->phone_number}}</td> <!-- Menggunakan $item untuk mengakses phone_number -->
                                    <td>{{ $item->created_at }}</td> <!-- Menggunakan $item untuk mengakses created_at -->
                                    <td>{{ $item->updated_at }}</td> <!-- Menggunakan $item untuk mengakses updated_at -->
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
                {{-- <div class="conten">
                    @if (count($all_Users) > 0)
                    @foreach ($all_Users as $item)
                        <h1>{{ $item->name }}</h1>
                        <h1>{{ $item->email }}</h1>
                        <h1>{{ $item->phone_number}}</h1>
                    @endforeach
                @endif --}}
                </div>
            </div>
        </div>
   </div>
   @endsection
