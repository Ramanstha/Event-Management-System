@extends('backend.main')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h2>Attendee</h2>
                <div class="row">
                    <div class="col-lg-12">
                        @if(Session::has('message'))
                        <span class="text-primary">{{Session::get('message')}}</span>
                        @endif
                        <form action="{{route('store.attendee')}}" method="post">
                            @csrf
                           
                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label class="form-label">Event<span
                                        class="text-danger">*</span></label>
                                <select name="event_id" class="form-control" id="category">
                                    <option value="">----------------Select Event----------------</option>
                                    @foreach ($getevent as $event)
                                    <option class="text-capitalize"
                                        {{ old('event_id') == $event->id ? "selected" : "" }}
                                        value="{{$event->id}}">{{$event->title}}</option>
                                    @endforeach
                                </select>
                                @error('event_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label for="simpleinput" class="form-label">Name<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="Name" name="name"
                                    value="{{old('name')}}">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label for="simpleinput" class="form-label">Email<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" placeholder="abc@example.com" name="email"
                                    value="{{old('email')}}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn w-sm btn-success waves-effect waves-light mt-4">Add
                                Attendee</button>
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