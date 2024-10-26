@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>Events</h2>
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('message'))
                        <span class="text-primary">{{Session::get('message')}}</span>
                        @endif
                        <form action="{{route('store.event')}}" method="post">
                            @csrf

                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label class="form-label">Category<span
                                        class="text-danger">*</span></label>
                                <select name="category_id" class="form-control" id="category">
                                    <option value="">----------------Select Category----------------</option>
                                    @foreach ($getCategory as $category)
                                    <option class="text-capitalize"
                                        {{ old('category_id') == $category->id ? "selected" : "" }}
                                        value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label for="simpleinput" class="form-label">Title<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="title" name="title"
                                    value="{{old('title')}}">
                                @error('title')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label for="simpleinput" class="form-label">Date<span
                                    class="text-danger">*</span></label>
                                    <input type="date" class="form-control" name="date" value="{{old('date')}}">
                                    @error('date')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                
                                <div class="col-lg-6 col-sm-12 mb-3">
                                    <label for="simpleinput" class="form-label">Location<span
                                        class="text-danger">*</span></label>
                                        <input type="text" class="form-control" placeholder="location" name="location"
                                        value="{{old('location')}}">
                                        @error('location')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    
                                    <div class="mb-3">
                                        <label for="simpleinput" class="form-label">Description<span
                                                class="text-danger">*</span></label>
                                        <textarea id="description" class="form-control" name="description"
                                            value="{{old('description')}}">{{old('description')}}</textarea>
                                        @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn w-sm btn-success waves-effect waves-light mt-4">Add
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