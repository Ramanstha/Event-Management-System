@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>Event</h2>
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('message'))
                        <span class="text-primary">{{Session::get('message')}}</span>
                        @endif
                        <form action="{{route('update.event',$data->id)}}" method="post">
                            @csrf

                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label for="category_name" class="form-label">Category<span
                                        class="text-danger">*</span></label>
                                <select name="category_id" class="form-control" id="category">
                                    <option value="">----------------Select Category----------------</option>
                                    @foreach ($getCategory as $category)
                                    <option value="{{$category->id}}"
                                        {{ $data->category_id==$category->id?'selected':'' }}>{{$category->name}}
                                    </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label for="simpleinput" class="form-label">Title<span
                                        class="text-danger">*</span></label>
                                <input type="text" id="simpleinput" class="form-control" placeholder="title"
                                    name="title" value="{{$data->title}}">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label for="simpleinput" class="form-label">Date<span
                                    class="text-danger">*</span></label>
                                    <input type="date" id="simpleinput" class="form-control" placeholder="date" name="date"
                                    value="{{$data->date}}">
                                    @error('date')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="col-lg-6 col-sm-12 mb-3">
                                    <label for="simpleinput" class="form-label">Location<span
                                        class="text-danger">*</span></label>
                                        <input type="text" id="simpleinput" class="form-control" placeholder="location"
                                        name="location" value="{{$data->location}}">
                                        @error('location')
                                        <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="simpleinput" class="form-label">Description<span
                                        class="text-danger">*</span></label>
                                <textarea type="text" id="description" class="form-control" name="description"
                                    value="{{$data->description}}">{{$data->description}}</textarea>
                                @error('description')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn w-sm btn-success waves-effect waves-light mt-4">Update
                                Event</button>
                            </form>
                    </div> <!-- end col -->
                </div>
                <!-- end row-->
            </div> <!-- end card-body -->
        </div> <!-- end card -->
    </div><!-- end col -->
</div>
<script src="https://cdn.ckeditor.com/4.19.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('description');
</script>
@endsection