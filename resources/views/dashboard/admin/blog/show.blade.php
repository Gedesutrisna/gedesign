@extends('dashboard.layouts.main')
@section('container')
<div class="row">
    <div class="col-12">
        <a href="/dashboard/users" class="navbar-btn"><i class="bi bi-arrow-left"></i></a>
        <div class="box mt-4">
                <div class="row mt-4">
                    <div class="col">
                        <label for="">Name</label>
                        <input type="text" name="name" id="name" class="input mt-2" value="{{ old('name',$user->name) }}" placeholder="Masukan name.." disabled>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <label for="">Email</label>
                        <input type="email" name="email" id="email" class="input mt-2" value="{{ old('email',$user->email) }}" placeholder="Masukan email.." disabled>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <label for="">Pendidikan</label>
                        <input type="text" name="pendidikan" id="pendidikan" class="input mt-2" value="{{ old('pendidikan',$user->pendidikan ?? '-') }}" disabled>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <label for="">Tanggal Lahir</label>
                        <input type="text" name="date_of_birth" id="date_of_birth" class="input mt-2" value="{{ old('date_of_birth',$user->date_of_birth ?? '-') }}" disabled>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <label for="">Umur</label>
                        <input type="text" name="age_now" id="age_now" class="input mt-2" value="{{ old('age_now',$user->age_now ?? '-') }}" disabled>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <label for="">Tanggal Pemeriksaan</label>
                        <input type="text" name="date_of_test" id="date_of_test" class="input mt-2" value="{{ old('date_of_test',$user->date_of_test ?? '-') }}" disabled>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col">
                        <label for="">Photo</label>
                        @if($user->image)
                        <img class="img-preview" id="img-preview" src="{{ asset('images/'.$user->image) }}" frameborder="0" style="width: 200px">
                        @else
                        <img class="img-preview" id="img-preview" src="" frameborder="0">
                        @endif
                    </div>
                </div>
        </div>
    </div>
    <div class="col-12 mt-4">
        <div class="box">
            {{-- <div class="d-flex justify-content-end align-items-center mb-3">
                <div class="">
                    <a href="/dashboard/histories/export" class="text-decoration-none">
                        <button type="button" class="add-btn d-flex gap-3 align-items-center"><img src="/assets-dashboard/add-i.svg" alt="">Export Data</button>
                    </a>
                </div>
            </div> --}}
            <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Pengguna</th>
                        <th>Jumlah Benar</th>
                        <th>Jumlah Salah</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user->answerHistories as $answerHistory)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $answerHistory->user->name }}</td>
                        <td>{{ $answerHistory->correct }}</td>
                        <td>{{ $answerHistory->incorrect }}</td>
                        <td class="text-center d-flex gap-1">
                            <a href="/dashboard/histories/{{ $answerHistory->id }}">
                                <button type="button" class="crud read"><img src="/assets-dashboard/eye-i.svg" alt=""></button>
                            </a>
                            <div class="">
                                <button type="button" class="crud delete" data-bs-toggle="modal" data-bs-target="#exampleModalDelete-{{ $answerHistory->id }}"><img src="/assets-dashboard/trash-i.svg" alt=""></button>
                            </div>
                            <a href="/dashboard/histories/{{ $answerHistory->id }}/download" target="_blank" class="text-decoration-none">
                                <button type="button" class="add-btn bg-white">
                                    Ekspor PDF !
                                </button>
                            </a>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModalDelete-{{ $answerHistory->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" style="top:25%">
                                    <div class="modal-content">
                                        <div class="modal-body p-5">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h3 class="">Hapus {{ $answerHistory->name }}</h3>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <form class="forms-sample" method="POST" action="/dashboard/histories/{{ $answerHistory->id }}/delete">
                                                @csrf
                                                @method('delete')    
                                                <div class="d-flex gap-2 mt-3">
                                                    <button type="submit" class="save-btn">Hapus histori</button>
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
</script mt-4>
@endsection