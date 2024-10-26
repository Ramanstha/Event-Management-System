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
                        <form action="{{route('update.attendee',$data->id)}}" method="post">
                            @csrf

                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label class="form-label">Event<span
                                        class="text-danger">*</span></label>
                                <select name="event_id" class="form-control" id="category">
                                    <option value="">----------------Select Event----------------</option>
                                    @foreach ($getevent as $event)
                                    <option value="{{$event->id}}"
                                        {{ $data->event_id==$event->id?'selected':'' }}>{{$event->title}}
                                    </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label for="simpleinput" class="form-label">Name<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" name="name"
                                    value="{{$data->name}}">
                                @error('name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-lg-6 col-sm-12 mb-3">
                                <label for="simpleinput" class="form-label">Email<span
                                        class="text-danger">*</span></label>
                                <input type="email" class="form-control" placeholder="email" name="email"
                                    value="{{$data->email}}">
                                @error('email')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn w-sm btn-success waves-effect waves-light mt-4">Update
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
    CKEDITOR.replace('short_message');
</script>
@endsection