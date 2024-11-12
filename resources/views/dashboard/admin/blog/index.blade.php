@extends('dashboard.layouts.main')
@section('container')
<div class="row" style="{{ $blogs->count() < 4 ? 'height:100vh' : '' }}">
    <div class="col-12">
        <div class="box">
            <div class="d-flex justify-content-end align-items-center mb-3">
                <div class="">
                    <a href="/dashboard/admin/blogs/create" class="text-decoration-none">
                        <button type="button" class="add-btn d-flex gap-3 align-items-center"><img src="/assets-dashboard/add-i.svg" alt="">Add New</button>
                    </a>
                </div>
            </div>
            <table id="example" class="stripe hover" style="width:100%; padding-top: 1em;  padding-bottom: 1em;">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Tag</th>
                        <th>Description</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td><img src="{{ asset('images/'.$blog->image) }}" alt="" style="width: 40px"></td>
                        <td>{{ $blog->title }}</td>
                        <td>{{ $blog->tag->name }}</td>
                        <td>{{ \Illuminate\Support\Str::limit($blog->description, 100, '...') }}</td>
                        <td>
                            <div class="text-center d-flex gap-1">
                                <a href="/dashboard/admin/blogs/{{ $blog->id }}">
                                    <button type="button" class="crud read"><img src="/assets-dashboard/eye-i.svg" alt=""></button>
                                </a>
                                <a href="/dashboard/admin/blogs/{{ $blog->id }}/edit">
                                    <button type="button" class="crud update"><img src="/assets-dashboard/pen-i.svg" alt=""></button>
                                </a>
                                <div class="">
                                    <button type="button" class="crud delete" data-bs-toggle="modal" data-bs-target="#exampleModalDelete-{{ $blog->id }}"><img src="/assets-dashboard/trash-i.svg" alt=""></button>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalDelete-{{ $blog->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" style="top:25%">
                                        <div class="modal-content">
                                            <div class="modal-body p-5">
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <h3 class="">Delete {{ $blog->name }}</h3>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form class="forms-sample" method="POST" action="/dashboard/admin/blogs/{{ $blog->id }}">
                                                    @csrf
                                                    @method('delete')    
                                                    <div class="d-flex gap-2 mt-3">
                                                        <button type="submit" class="save-btn">Delete blog</button>
                                                        <button type="button" class="cancel-btn" data-bs-dismiss="modal">Cancel Delete</button>
                                                    </div>
                                                </form>
                                            </div>
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