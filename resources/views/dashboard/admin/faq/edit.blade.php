@extends('dashboard.layouts.main')
@section('container')
<div class="row">
    <div class="col-12">
        <a href="/dashboard/admin/faqs" class="navbar-btn"><i class="bi bi-arrow-left"></i></a>
        <div class="box mt-4">
            <form action="/dashboard/admin/faqs/{{ $faq->id }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <!-- Question Input -->
                <div class="row mt-4">
                    <div class="col">
                        <label for="question">Question</label>
                        <input type="text" name="question" id="question" class="input mt-2" value="{{ old('question', $faq->question) }}" placeholder="Input question..." @error('question') is-invalid @enderror>
                        @error('question')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <!-- Answer Input -->
                <div class="row mt-4">
                    <div class="col">
                        <label for="answer">Answer</label>
                        <textarea name="answer" id="answer" class="input mt-2" placeholder="Input answer..." @error('answer') is-invalid @enderror >{{ old('answer', $faq->answer) }}</textarea>
                        @error('answer')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>

                <!-- Buttons -->
                <div class="d-flex gap-3 mt-4">
                    <div>
                        <button type="submit" class="save-btn">Update FAQ</button>
                    </div>
                    <div>
                        <button type="button" class="cancel-btn" onclick="window.history.back()">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
    var editor1cfg = {}
	editor1cfg.toolbar = "basic";
    let answer = new RichTextEditor("#answer", editor1cfg, { editorResizeMode: "none" });
    
</script>
@endsection
