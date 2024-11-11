@extends('dashboard.layouts.main')
@section('container')
<div class="row" style="{{ $users->count() < 4 ? 'height:80vh' : '' }}">
    <div class="col-12">
        <div class="box">
            <div class="d-flex justify-content-end align-items-center mb-3">
                <div class="">
                    <a href="/dashboard/users/create" class="text-decoration-none">
                        <button type="button" class="add-btn d-flex gap-3 align-items-center"><img src="/assets-dashboard/add-i.svg" alt="">Add New</button>
                    </a>
                </div>
            </div>
            <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Gambar</th>
                        <th>Nama Pengguna</th>
                        <th>Email</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ asset('images/'.$user->image) }}" alt="" style="width: 40px"></td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td class="text-center d-flex gap-1">
                            <a href="/dashboard/users/{{ $user->id }}">
                                <button type="button" class="crud read"><img src="/assets-dashboard/eye-i.svg" alt=""></button>
                            </a>
                            <a href="/dashboard/users/{{ $user->id }}/edit">
                                <button type="button" class="crud update"><img src="/assets-dashboard/pen-i.svg" alt=""></button>
                            </a>
                            <div class="">
                                <button type="button" class="crud delete" data-bs-toggle="modal" data-bs-target="#exampleModalDelete-{{ $user->id }}"><img src="/assets-dashboard/trash-i.svg" alt=""></button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalDelete-{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" style="top:25%">
                                    <div class="modal-content">
                                        <div class="modal-body p-5">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h3 class="">Hapus {{ $user->name }}</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form class="forms-sample" method="POST" action="/dashboard/users/{{ $user->id }}">
                                                @csrf
                                                @method('delete')    
                                                <div class="d-flex gap-2 mt-3">
                                                    <button type="submit" class="save-btn">Hapus user</button>
                                                    <button type="button" class="cancle-btn" data-bs-dismiss="modal">Batal Hapus</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>  
        </div>
    </div>
</div>
    <script>
        $(document).ready(function() {
            var table = $('#example').DataTable({
                responsive: true
            })
            .columns.adjust()
            .responsive.recalc();
        });
    </script>
@endsection