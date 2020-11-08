<!-- Modal -->
<div class="modal fade" id="add-course-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">ADD NEW COURSE</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">

<!-- Course Name Field -->
<div class="form-group {{-- col-sm-6 --}}">
    {!! Form::label('course_name', 'Course Name:') !!}
    {!! Form::text('course_name', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Course Code Field -->
<div class="form-group {{-- col-sm-6 --}}">
    {!! Form::label('course_code', 'Course Code:') !!}
    {!! Form::text('course_code', null, ['class' => 'form-control','maxlength' => 191,'maxlength' => 191]) !!}
</div>

<!-- Description Field -->
<div class="form-group {{-- col-sm-12 col-lg-12 --}}">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'cols' => 40, 'rows' => 2]) !!}
</div>

<!-- Status Field -->
<div class="form-group {{-- col-sm-6 --}}">
    {!! Form::label('status', 'Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!}
    </label>
</div>


</div>
<div class="modal-footer">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
    {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
    {!! Form::submit('Save Course', ['class' => 'btn btn-success']) !!}
</div>
</div>
</div>
</div>


<!-- Submit Field -->
{{-- <div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('courses.index') }}" class="btn btn-default">Cancel</a>
</div> --}}
